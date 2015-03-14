<?php
include '../lib/include.php';
$title_page="Questionnaire";
include '../partials/header.php';

if (isset($_GET['id']) && isset($_GET['type']) && isset($_GET['contenu'])) {
    $id=$_GET['id'];
    $adr="";
    switch ($_GET['type']) {
            case 'humeur':
                $type="raison";
                $selectQ = $db->query("SELECT * FROM questions WHERE type='$type'");
                $selectR = $db->query("SELECT DISTINCT raisons.id, raisons.contenu FROM humeur_raison, raisons WHERE humeur_raison.humeur_id =$id AND raisons.id=humeur_raison.raison_id ORDER BY RAND()");
                break;
            case 'raison':
                $type="genre";
                $selectQ = $db->query("SELECT * FROM questions WHERE type='$type'");
                $selectR = $db->query("SELECT DISTINCT genre.id, genre.contenu FROM raison_genre, genre WHERE raison_genre.raison_id =$id AND genre.id=raison_genre.genre_id ORDER BY RAND()");
                break;
            case 'genre':
                $type="tag";
                $selectQ = $db->query("SELECT * FROM questions WHERE type='$type'");
                $selectR = $db->query("SELECT DISTINCT tags.id, tags.contenu FROM genre_tag, tags WHERE genre_tag.genre_id =$id AND tags.id=genre_tag.tag_id ORDER BY RAND()");
                break;
            case 'tag':
                /*$adr = "<?= WEBROOT; ?>fin_questionnaire.php";*/
                $tag = $_GET['id'];
                $type = $_GET['type'];
                $req = $db->query("INSERT INTO reponses(rep_id, type) VALUES ('$tag', '$type')");

                $req = $db->query("SELECT DISTINCT film.id, film.contenu FROM film_tag, reponses, film WHERE film_tag.tag_id =reponses.rep_id AND film.id=film_tag.film_id");
                $num_rows = mysql_num_rows($req);
                while ($num_rows>10) {
                    $type = "tag";
                    $selectQ = $db->query("SELECT * FROM questions WHERE type='$type'");
                    $selectR = $db->query("SELECT DISTINCT tags.id, tags.contenu FROM genre_tag, tags WHERE genre_tag.genre_id =$id AND tags.id=genre_tag.tag_id ORDER BY RAND()");
                }

                $selectQ = $db->query("SELECT * FROM questions WHERE type='$type'");
                $selectR = $db->query("SELECT DISTINCT film.id, film.contenu FROM film_tag, film WHERE film_tag.tag_id =$tag AND film.id=film_tag.film_id");
                
               
                break;
    }
}else{
    $adr="";
    $type="humeur";
    $selectQ = $db->query("SELECT * FROM questions WHERE type='$type'");
    $selectR = $db->query("SELECT * FROM humeur");
}



$questions = $selectQ->fetchAll();

$reponses = $selectR->fetchAll();

?>

QUESTIONNAIRE
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
                <a href="#"><p class="boutonquest">Réponse 1</p></a>
                <?php foreach($reponses as $reponse): ?>
                    <a href="?id=<?= $reponse['id']; ?>&type=<?= $question['type']; ?>&contenu=<?= $reponse['contenu']; ?>&<?= csrf(); ?>" class="btn btn-default" name="$reponse['id']; ?>"><?= $reponse['contenu']; ?></a>
                    <?php $i=$i+1; ?>
                <?php endforeach ?> 
            </div>
            <?php endforeach ?>
        </div>
      </div>
    </div>

</div>



<?php
include '../partials/footer.php'; ?>