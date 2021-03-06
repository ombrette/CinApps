<?php 
$auth = 0;
include '../lib/include.php';
$title_page='Film';
$adr='css/fichefilm.css';
include '../partials/header.php'; 

if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $requete=$db->query("SELECT * FROM film, film_genre, genre WHERE film.id=$id AND film_genre.id_film=film.id AND genre.id=film_genre.id_genre LIMIT 1");
    $resultats = $requete->fetchAll();
    foreach($resultats as $res):
        $title_page = $res['titre'];
        $date = $res['date'];
    endforeach;

    list($year, $month, $day) = explode("-", $date); 
    $months = array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"); 
    $lastmodified = "$day ".$months[$month-1]." $year";
}else{

    
}

$requete_rea=$db->query("SELECT DISTINCT realisateur.picture, realisateur.nom FROM film_realisateur, realisateur WHERE film_realisateur.id_film=$id AND realisateur.id=film_realisateur.id_realisateur");
$requete_act=$db->query("SELECT DISTINCT * FROM film_acteur, acteur WHERE film_acteur.id_film=$id AND acteur.id=film_acteur.id_acteur");
$reas=$requete_rea->fetchAll();
$acts=$requete_act->fetchAll();
?>
    
 <!--FILM-->
<?php foreach($resultats as $res): ?>
<div class="container film">

    <h1 class="text-center"><?= $res['titre'];?></h1>
    
    <div class="row film1">
        <div class="affiche col-lg-3 col-md-3 col-sm-3">
            
            <img src="<?= $res['affiche']; ?>" class="img-responsive" alt="" >
        </div>

        <div class="resume col-lg-8 col-md-8 col-sm-8 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
            
            <div class="row">
                <div class="col-lg-4 col-xs-6">
                    <p class="annee text-left">Sortie : <?= $lastmodified ?></p>
                </div>

                <div class="col-lg-4 col-xs-6">
                    <p class="genre">Genre : <?= $res['nom'] ?></p>
                </div>

                <div class="col-lg-4">
                    <p class="note" title="<?= $res['note'] ?> / 5" alt="<?= $res['note'] ?> / 5">
                    <?php include '../lib/note.php'; ?>
                    </p>
                </div>
            
            </div>
            
            <p class="text-left">Synopsis</p>
            <p class="text-justify"> <?= $res['synopsis'] ?></p>

            <?php if(!empty($res['trailer'])) : ?>
            <a href=" <?= $res['trailer'] ?>" class="site video"><p class="boutonfdj text-center"><i class="fa fa-play-circle-o"></i>Bande annonce</p></a>
            <?php endif ?>
            <?php if(empty($res['trailer'])) : ?>
            <p class="boutonfdj text-center noba"><i class="fa fa-play-circle-o"></i>Pas de bande annonce disponible</p></a>
            <?php endif ?>

            <a href="#"><p class="boutonfdj"><i class="fa fa-file-text-o"></i>A regarder plus tard</p></a>


        </div>

    </div>

<!--Réalisateur,acteurs-->

    <div class="row personnes">

        <div class="realisateur col-lg-3 col-md-3 col-sm-3">
            <div class="entete"><p class="pull-left">Réalisateur</p></div>

            <?php foreach ($reas as $rea): ?>

            <div class="col-lg-12">

                
                <img src="<?= $rea['picture'] ?>" alt="" class="img-responsive img-fiche">
                <p><?= $rea['nom'] ?></p>
                
            </div>
            <?php endforeach ?>

        </div>


        <div class="acteur col-lg-8 col-md-8 col-sm-8 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
            <div class="entete"><p class="pull-left">Acteurs</p></div>
            
            <?php foreach ($acts as $act): ?>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <img src="<?= $act['picture'] ?>" alt="" class="img-responsive img-fiche">
                <p><?= $act['nom'] ?></p>

            </div>
            <?php endforeach ?>
        </div>


        <div class="col-lg-offset-2 col-lg-4 col-md-offset-2 col-md-4 col-sm-4">
        <a href="#"><p class="boutonfdj">Regarder en streaming</p></a>  
        </div>

        <div class="col-lg-offset-2 col-lg-4 col-md-offset-2 col-md-4 col-sm-offset-4 col-sm-4"> 
        <a href="#"><p class="boutonfdj">Lien de téléchargement</p></a>
        </div>

    </div>



<!--Fin Réalisateur,acteurs-->



</div>
    
    <!--FIN FILM-->


<div class="container commentaires">

    <div class="row">
        <div class="col-lg-11">
            <h2 class="titre-section text-uppercase">Commentaires</h2>
            <form action="1" method="POST" accept-charset="utf-8">
                <p>
                    <label>Votre Message : </label>
                    <input class="col-lg-12" type="text" name="message" value="" placeholder="Cinéos est génial!">
                </p>
                <p>
                    <input type="submit" name="submit" value="Publier" placeholder="">
                </p>
            </form>

            <div>
                
            </div>
        </div>

    </div>



</div>
<?php endforeach ?>

<?php
include '../partials/footer.php'; ?>
