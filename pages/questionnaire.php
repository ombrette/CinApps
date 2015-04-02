<?php
session_start(); 
include '../lib/include.php';
$title_page="Questionnaire";
$adr='css/questionnaire.css';
include '../partials/header.php';

//on vérifie qu'on a bien reçu les valeurs envoyées par les réponses cliquées dans l'url
if (isset($_GET['id']) && isset($_GET['type']) && isset($_GET['idH']) && isset($_GET['idR']) && isset($_GET['idG']) && isset($_GET['idG2']) && isset($_GET['idG3'])) {
    
    //on met les mets dans des variables
    $id=$_GET['id'];
    $idH=$_GET['idH'];
    $idR=$_GET['idR'];
    $idG=$_GET['idG'];
    $idG2=$_GET['idG2'];
    $idG3=$_GET['idG3'];

    //on regarde le type de la question correspondante à la réponse cliquée -- les types possibles sont Humeur, Raison et Genre
    switch ($_GET['type']) {
            /* Si le type=humeur */
            case 'humeur':
                // et que l'idH récupéré correspond à l'id de l'humeur 6(l'humeur neutre) 
                if($idH==6){
                    // on passe directement au tye genre
                    $type="genre"; 
                }else{
                    $type="raison";
                }
                $selectQ = $db->query("SELECT * FROM question WHERE type='$type' AND rep_id=$id");
                $selectR = $db->query("SELECT DISTINCT * FROM reponse WHERE type='$type' AND id_humeur=$idH ORDER BY RAND()");
                $film=0;
                break;
            case 'raison':
                $type="genre";
                $selectQ = $db->query("SELECT * FROM question WHERE type='$type' AND rep_id=$id");
                $selectR = $db->query("SELECT DISTINCT * FROM reponse WHERE type='$type' AND id_humeur=$idH AND id_raison=$idR ORDER BY RAND()");
                $film=0;
                break;
            case 'genre':
                if($idG == 0){
                    $type="genre2";
                    $selectQ = $db->query("SELECT * FROM question WHERE type='$type' AND rep_id=$id");
                    $selectR = $db->query("SELECT DISTINCT * FROM reponse WHERE type='$type' AND id_humeur=$idH AND id_raison=$idR ORDER BY RAND()");
                    $film=0;
                }else{
                    $selectR = $db->query("SELECT DISTINCT film.titre, film.affiche, film.id, film.trailer FROM film_genre, film WHERE film_genre.id_genre=$idG AND film.id=film_genre.id_film ORDER BY RAND() LIMIT 6");
                    $film=1;
                }

                break;
            case 'genre2':
                $type="genre3";
                if($idG2 == 0){
                    $selectQ = $db->query("SELECT * FROM question WHERE type='$type' AND rep_id=$id");
                    $selectR = $db->query("SELECT DISTINCT * FROM reponse WHERE type='$type' AND id_humeur=$idH ORDER BY RAND()");
                    $film=0;
                }else{
                    $selectR = $db->query("SELECT DISTINCT film.titre, film.affiche, film.id FROM film_genre, film WHERE film_genre.id_genre=$idG2 AND film.id=film_genre.id_film ORDER BY RAND() LIMIT 6");
                    $film=1;
                }

                break;
            case 'genre3':
                $type="";
                $selectR = $db->query("SELECT DISTINCT film.titre, film.affiche, film.id FROM film_genre, film WHERE film_genre.id_genre=$idG3 AND film.id=film_genre.id_film ORDER BY RAND() LIMIT 6");
                $film=1;
                break;
            
    }
}else{
    $type="humeur";
    $selectQ = $db->query("SELECT * FROM question WHERE type='$type'");
    $selectR = $db->query("SELECT * FROM reponse WHERE type='$type'");
    $film=0;
}

if (isset($_GET['idAVoir'])) {
    
    $sql = 'SELECT * FROM user WHERE username="'.$_SESSION['username'].'"';
    $req = $db->query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
    $result = $req -> fetchAll();

    foreach ($result as $res) {
        $user = $res['id'];
    }
    $film = $_GET['idAVoir'];

    $sql2 = "INSERT INTO a_voir(user_id, film_id) VAlUES ($user, $film)";
    $req = $db->query($sql2) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
}

if(!empty($selectQ)){
$questions = $selectQ->fetchAll();
}

$reponses = $selectR->fetchAll();


?>

<?php if($film==0) : ?>
<div class="container questionnaire marg-top">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <h1 class="titre-section text-uppercase">Questionnaire</h1>
        <div class="row">
            <?php foreach($questions as $question): ?>
            <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                <div id="question">
                    <h2>Question</h2>
                    <p><?= $question['contenu']; ?></p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                <?php foreach($reponses as $reponse): ?>
                    <a href="?id=<?= $reponse['id']; ?>&type=<?= $question['type']; ?>&idH=<?= $reponse['id_humeur']; ?>&idR=<?= $reponse['id_raison']; ?>&idG=<?= $reponse['id_genre']; ?>&idG2=<?= $reponse['id_genre2']; ?>&idG3=<?= $reponse['id_genre3']; ?>&<?= csrf(); ?>"  name="$reponse['id']; ?>" class="col-lg-6 col-md-6 col-sm-6 col-xs-12 btnq"><p class="boutonquest col-lg-6 col-md-6 col-sm-6 col-xs-12"><?= $reponse['contenu']; ?></p></a>
                    <!--<img src="<?= $reponse['contenu']; ?>" alt="">-->
                    <!-- <?php
                    $id = $reponse['id'];
                    $idH = $reponse['id_humeur'];
                    $idR = $reponse['id_raison'];
                    $idG = $reponse['id_genre'];
                    $idG2 = $reponse['id_genre2'];
                    $idG3 = $reponse['id_genre3'];
                    ?> -->
                <?php endforeach ?> 
            </div>
            <?php endforeach ?>
        </div>
      </div>
    </div>

</div>
<?php endif ?>

<?php if($film==1) : ?>
<div class="container finquest">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">       
        <h1 class="text-uppercase titre-section">Fin du questionnaire</h1>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-10 col-lg-offset-1">
                    <p>Suggestion : Voici le resultat listant les films que nous vous suggerons suite à vos réponses, vous n'avez plus qu'à choisir !</p>
                </div>
                <?php foreach($reponses as $reponse): ?>
                <div class="col-xs-12 col-sm-4 col-lg-3">
                    <a href="fiche_film.php?id=<?= $reponse['id']; ?>">
                        <h2 class="nomdefilm"><?= $reponse['titre']; ?></h2>
                    <div id="tailleaffiche">   
                        <img src="<?= $reponse['affiche']; ?>" class="img-responsive" width="270" height="360">
                    </div> 
                    </a> 

                    <div class="row center-block">

                        <!-- Boutons xs bande annonce et Aregarder plus tard Responsive - Ecran de petite taille-->
                        
                        <div class="col-lg-offset-2 col-lg-8 col-sm-offset-2 col-sm-8 col-xs-offset-2 col-xs-8">
                            
                            <div class="row">
                                <!-- On vérifie que le film a bien un lien vers une bande annonce, si oui on affiche le bouton -->
                                <?php if(!empty($reponse['trailer'])) : ?>
                                <div class="col-xs-6">
                                   <a href="<?= $reponse['trailer'] ?>"><p class="boutonfdj visible-xs"><i class="fa fa-play-circle-o"></i></p></a>
                                </div>
                                <?php endif ?>

                                <!-- sinon on affiche un bouton grisé qui montre qu'il n'y a pas de bande annonce disponible-->
                                <?php if(empty($reponse['trailer'])) : ?>
                                <div class="col-xs-6">
                                    <p class="boutonfdj visible-xs noba"><i class="fa fa-play-circle-o"></i></p>
                                </div>
                                <?php endif ?>
                                
                                <!-- On vérifie que l'id du film existe et qu'un utlisateur est connecté, si oui on affiche le bouton "A regarder plus tard"-->
                                <?php if(isset($reponse['id']) && isset($_SESSION['username'])) : ?>
                                <div class="col-xs-6">
                                   <a href="?idAVoir=<?= $reponse['id'] ?>"><p class="boutonfdj visible-xs"><i class="fa fa-file-text-o"></i></p></a>
                                </div>
                                <?php endif ?>

                            </div>

                        </div>

                    
                        <!-- Boutons Bande annonce et A regarder plus tard-->

                        <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs">
                        
                            <div class="row boutons">
                                <!-- On vérifie que le film a bien un lien vers une bande annonce, si oui on affiche le bouton -->
                                <?php if(!empty($reponse['trailer'])) : ?>       
                                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2">
                                   <a href=" <?= $reponse['trailer'] ?>" class="site video"><p class="boutonfdj text-center"><i class="fa fa-play-circle-o"></i>Bande annonce</p></a>
                                </div>
                                <?php endif ?>

                                <!-- sinon on affiche un bouton grisé "Pas de bande anonce disponible" qui montre qu'il n'y a pas de bande annonce disponible-->
                                <?php if(empty($reponse['trailer'])) : ?>
                                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2">
                                    <p class="boutonfdj text-center noba"><i class="fa fa-play-circle-o"></i>Pas de bande annonce disponible</p>
                                </div>
                                <?php endif ?>


                                <!-- On vérifie que l'id du film existe et qu'un utlisateur est connecté, si oui on affiche le bouton "A regarder plus tard"-->
                                <?php if(isset($reponse['id']) && isset($_SESSION['username'])) : ?>
                                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2">
                                    <a href="?idAVoir=<?= $reponse['id'] ?>"><p class="boutonfdj"><i class="fa fa-file-text-o"></i>A regarder plus tard</p></a>
                                </div>
                                <?php endif ?>

                            </div>

                        </div>
 

                    </div>

                </div>
                <?php endforeach ?>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-10 col-lg-offset-1">
                    <a href="?id=<?= $id; ?>&type=genre&idH=<?= $idH; ?>&idR=<?= $idR; ?>&idG=<?= $idG; ?>&idG2=<?= $idG2; ?>&idG3=<?= $idG3; ?>&<?= csrf(); ?>"><p class="plusdefilm">afficher plus de film</p></a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif ?>

<?php
include '../partials/footer.php'; ?>