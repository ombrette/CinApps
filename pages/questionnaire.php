<?php
include '../lib/include.php';
$title_page="Questionnaire";
$adr='css/questionnaire.css';
include '../partials/header.php';

if (isset($_GET['id']) && isset($_GET['type']) && isset($_GET['idH']) && isset($_GET['idR']) && isset($_GET['idG']) && isset($_GET['idG2']) && isset($_GET['idG3'])) {
    
    $id=$_GET['id'];
    $idH=$_GET['idH'];
    $idR=$_GET['idR'];
    $idG=$_GET['idG'];
    $idG2=$_GET['idG2'];
    $idG3=$_GET['idG3'];

    switch ($_GET['type']) {
            case 'humeur':
                if($idH==6){
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
                    $selectR = $db->query("SELECT DISTINCT film.titre, film.affiche, film.id FROM film_genre, film WHERE film_genre.id_genre=$idG AND film.id=film_genre.id_film ORDER BY RAND()");
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
                    $selectR = $db->query("SELECT DISTINCT film.titre, film.affiche, film.id FROM film_genre, film WHERE film_genre.id_genre=$idG2 AND film.id=film_genre.id_film ORDER BY RAND()");
                    $film=1;
                }

                break;
            case 'genre3':
                $type="";
                $selectR = $db->query("SELECT DISTINCT film.titre, film.affiche, film.id FROM film_genre, film WHERE film_genre.id_genre=$idG3 AND film.id=film_genre.id_film ORDER BY RAND()");
                $film=1;
                break;
            
    }
}else{
    $type="humeur";
    $selectQ = $db->query("SELECT * FROM question WHERE type='$type'");
    $selectR = $db->query("SELECT * FROM reponse WHERE type='$type'");
    $film=0;
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
                    <?php $i=1;?>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                <?php foreach($reponses as $reponse): ?>
                    <a href="?id=<?= $reponse['id']; ?>&type=<?= $question['type']; ?>&idH=<?= $reponse['id_humeur']; ?>&idR=<?= $reponse['id_raison']; ?>&idG=<?= $reponse['id_genre']; ?>&idG2=<?= $reponse['id_genre2']; ?>&idG3=<?= $reponse['id_genre3']; ?>&<?= csrf(); ?>"  name="$reponse['id']; ?>"><p class="boutonquest"><?= $reponse['contenu']; ?></p></a>
                    <!--<img src="<?= $reponse['contenu']; ?>" alt="">-->
                    <?php $i=$i+1; ?>
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
                    <p>suggestion : Voici le resultat listant les films que nous vous suggerons suite à vos réponses, vous n'avez plus qu'à choisir !</p>
                </div>
                <?php foreach($reponses as $reponse): ?>
                <div class="col-xs-12 col-sm-4 col-lg-3">
                    <a href="fiche_film.php?id=<?= $reponse['id']; ?>">
                        <h2><?= $reponse['titre']; ?></h2>
                        <img src="<?= $reponse['affiche']; ?>" class="img-responsive">
                    </a> 
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8 col-sm-offset-2 col-sm-8 col-xs-offset-2 col-xs-8 ">
                    <a href="#"><p class="boutonfdj"><i class="fa fa-play-circle-o"></i>Bande annonce</p></a></div>
                    <div class="col-lg-offset-2 col-lg-8 col-sm-offset-2 col-sm-8 col-xs-offset-2 col-xs-8">
                    <a href="#"><p class="boutonfdj"><i class="fa fa-plus-square-o"></i>A regarder plus tard</p></a></div>           
                        

                    </div>

                </div>
                <?php endforeach ?>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-10 col-lg-offset-1">
                    <a href=""><p class="plusdefilm">afficher plus de film</p></a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif ?>

<?php
include '../partials/footer.php'; ?>