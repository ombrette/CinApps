<?php
include '../lib/include.php';
$title_page="Questionnaire";
$adr='css/questionnaire.css';
include '../partials/header.php';

if (isset($_GET['id']) && isset($_GET['type']) && isset($_GET['contenu'])) {
    $id=$_GET['id'];
    $adr="";
    switch ($_GET['type']) {
            case 'humeur':
                $type="raison";
                $selectQ = $db->query("SELECT * FROM questions WHERE type='$type'");
                $selectR = $db->query("SELECT DISTINCT raisons.id, raisons.contenu FROM humeur_raison, raisons WHERE humeur_raison.humeur_id =$id AND raisons.id=humeur_raison.raison_id ORDER BY RAND()");
                $film=0;
                break;
            case 'raison':
                $type="genre";
                $selectQ = $db->query("SELECT * FROM questions WHERE type='$type'");
                $selectR = $db->query("SELECT DISTINCT genre.id, genre.contenu FROM raison_genre, genre WHERE raison_genre.raison_id =$id AND genre.id=raison_genre.genre_id ORDER BY RAND()");
                $film=0;
                break;
            case 'genre':
                $type="genre";
                $genre=$_GET['id'];
                $selectQ = $db->query("SELECT * FROM questions WHERE type='$type'");
                $selectR = $db->query("SELECT DISTINCT film.id, film.titre, film.affiche FROM film_genre, film WHERE film_genre.genre_id=$genre AND film.id=film_genre.film_id ORDER BY RAND() LIMIT 8");
                $film=1;
                break;
            
    }
}else{
    $adr="";
    $type="humeur";
    $selectQ = $db->query("SELECT * FROM questions WHERE type='$type'");
    $selectR = $db->query("SELECT * FROM humeur");
    $film=0;
}



$questions = $selectQ->fetchAll();

$reponses = $selectR->fetchAll();


?>

<?php if($film==0) : ?>
<div class="container questionnaire">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <h1 class="titre_fdj titre_profil">Questionnaire</h1>
        <div class="row">
            <?php foreach($questions as $question): ?>
            <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                <div id="question">
                    <h2>Question</h2>
                    <p><?= $question['contenu']; ?></p>
                    <?php $i=1;?>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-sm-offset-2 col-md-4 col-md-offset-2 col-lg-4 col-lg-offset-2">
                <?php foreach($reponses as $reponse): ?>
                    <a href="?id=<?= $reponse['id']; ?>&type=<?= $question['type']; ?>&contenu=<?= $reponse['contenu']; ?>&<?= csrf(); ?>"  name="$reponse['id']; ?>"><p class="boutonquest"><?= $reponse['contenu']; ?></p></a>
                    <img src="<?= $reponse['contenu']; ?>" alt="">
                    <?php $i=$i+1; ?>
                <?php endforeach ?> 
            </div>

            <!-- <?php if($film==1) : ?>
            <div class="col-xs-12 col-sm-4 col-sm-offset-2 col-md-4 col-md-offset-2 col-lg-4 col-lg-offset-2">
                <?php foreach($reponses as $reponse): ?>
                    <a href=""><img src="<?= $reponse['affiche']; ?>" alt=""></a>
                <?php endforeach ?> 
            </div>
            <?php endif ?> -->

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
        <h1 class="titre_finquest titre_fdj">Fin du questionnaire</h1>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-10 col-lg-offset-1">
                    <p>suggestion : Voici le resultat listant les films que nous vous suggerons suite à vos réponses, vous n'avez plus qu'à choisir !</p>
                </div>
                <?php foreach($reponses as $reponse): ?>
                <div class="col-xs-6 col-sm-4 col-lg-3">
                    <a href="fiche_film.php?id=<?= $reponse['id']; ?>">
                        <h2><?= $reponse['titre']; ?></h2>
                        <img src="<?= $reponse['affiche']; ?>">
                    </a> 
                    <a href="#"><p class="boutonfdj"><i class="fa fa-play-circle-o"></i>Bande annonce</p></a>
                    <a href="#"><p class="boutonfdj"><i class="fa fa-plus-square-o"></i>A regarder plus tard</p></a>           
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