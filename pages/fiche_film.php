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
    foreach ($resultats as $res => $value) {
        $title_page=$res['titre'];        
    }
}else{

    
}



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
                    <p class="annee text-left">Sortie : <?= $res['date'] ?></p>
                </div>

                <div class="col-lg-4 col-xs-6">
                    <p class="genre">Genre : <?= $res['nom'] ?></p>
                </div>

                <div class="col-lg-4">
                    <p class="note pull-right" title="<?= $res['note'] ?> / 5" alt="<?= $res['note'] ?> / 5">
                    <?php include '../lib/note.php'; ?>
                    </p>
                </div>
            
            </div>
            
            <p class="text-left">Synopsis</p>
            <p class="text-justify"> <?= $res['synopsis'] ?></p>

            <a href=" <?= $res['trailer'] ?>"><p class="boutonfdj text-center"><i class="fa fa-play-circle-o"></i>Bande annonce</p></a>
            <a href="#"><p class="boutonfdj"><i class="fa fa-file-text-o"></i>A regarder plus tard</p></a>


        </div>

    </div>

<!--Réalisateur,acteurs-->

    <div class="row personnes">

        <div class="realisateur col-lg-3 col-md-3 col-sm-3">
            <div class="entete">Réalisateur</div>
            
            <?php  
                $requete_rea=$db->query("SELECT realisateur.picture, realisateur.nom FROM film_realisateur, realisateur WHERE film_realisateur.id_film=$id AND realisateur.id=film_realisateur.id_realisateur");
                $reas=$requete_rea->fetchAll();
                ?>

            <?php foreach ($reas as $rea): ?>

            <div class="col-lg-12">

                
                <img src="<?= $rea['picture'] ?>" alt="" class="img-responsive img-fiche">
                <p><?= $rea['nom'] ?></p>
                
            </div>
            <?php endforeach ?>

        </div>


        <div class="acteur col-lg-8 col-md-8 col-sm-8 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
            <div class="entete">Acteurs</div>

            <?php  
                $requete_act=$db->query("SELECT * FROM film_acteur, acteur WHERE film_acteur.id_film=$id AND acteur.id=film_acteur.id_acteur");
                $acts=$requete_act->fetchAll();

            ?>
            
            <?php foreach ($acts as $act): ?>
            <div class="col-lg-3">
                <img src="<?= $act['picture'] ?>" alt="" class="img-responsive img-fiche">
                <p><?= $act['nom'] ?></p>

            </div>
            <?php endforeach ?>
        </div>


        <div class="col-lg-offset-2 col-lg-4">
        <a href="#"><p class="boutonfdj">Regarder en streaming</p></a>  
        </div>

        <div class="col-lg-offset-2 col-lg-4"> 
        <a href="#"><p class="boutonfdj">Lien de téléchargement</p></a>
        </div>

    </div>



<!--Fin Réalisateur,acteurs-->



</div>
    
    <!--FIN FILM-->


<div class="container commentaires">

    <div class="row">
        <div class="col-lg-11">
            <h3>Commentaires</h3>
            <form action="1" method="POST" accept-charset="utf-8">
                <p>
                    <label>Votre Message : </label>
                    <input class="col-lg-12" type="text" name="message" value="" placeholder="Cinéos est génial!">
                </p>
                <p>
                    <input type="submit" name="submit" value="Publier" placeholder="">
                </p>
            </form>
        </div>

    </div>



</div>
<?php endforeach ?>

<?php
include '../partials/footer.php'; ?>
