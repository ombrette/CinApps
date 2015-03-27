<?php 
$auth = 0;
include '../lib/include.php';
$title_page='Liste de films';
$adr='css/listefilms.css';
include '../partials/header.php'; 

if (isset($_GET['filter']) && isset($_GET['filterBy'])) {
    $filtre=$_GET['filterBy'];
    switch ($filtre) {
        case 'G':
            $idG=$_GET['filter'];
            $requete=$db->query("SELECT film.id, film.titre, film.affiche, film.date, film.synopsisCourt, film.note FROM film, film_genre, genre WHERE genre.id=$idG AND film_genre.genre_id=genre.id AND film.id=film_genre.film_id LIMIT 20");
        break;

        case 'N':
            $idN=$_GET['filter'];
            $requete=$db->query("SELECT * FROM film WHERE note=$idN LIMIT 20");
        break;
    }
            
}else{     
    $requete=$db->query("SELECT * FROM film LIMIT 20");
}
$resultats=$requete->fetchAll();
$req_genre=$db->query("SELECT * FROM genre");
$genres=$req_genre->fetchAll(); 

?>    

<!--TRI-->
    <div class="container">

        <div class="row">


            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-xs">

                <div id="menu">
                    <ul>
                        <li class="menu2"><a href="#">Genre</a>
                            <ul>
                                
                                <?php foreach ($genres as $genre): ?>
                                    <li class="col-lg-3 filtre" ><a href="?filter=<?= $genre['id'] ?>&filterBy=G"><?= $genre['nom'] ?></a></li>
                                <?php endforeach ?>
                               
                            </ul>
                        </li>
                        <li class="menu2"><a href="#">Année</a>
                            <ul>
                                <li><a href="#">Lien 1</a></li>
                                <li><a href="#">Lien 2</a></li>
                                <li><a href="#">Lien 3</a></li>
                                <li><a href="#">Lien 4</a></li>
                                <li><a href="#">Lien 5</a></li>
                            </ul>
                        </li>
                        <li class="menu2"><a href="#">Note</a>
                            <ul>
                                <?php for($i=0; $i<6; $i++):?>
                                <li><a href="?filter=<?= $i ?>&filterBy=N"><?= $i ?> étoile<?php if($i>1){echo "s";} ?></a></li>
                                <?php endfor ?>
                            </ul>
                        </li>
                        <li class="menu2"><a href="#">Pays</a>
                            <ul>
                                <li><a href="#">Lien 1</a></li>
                                <li><a href="#">Lien 2</a></li>
                                <li><a href="#">Lien 3</a></li>
                                <li><a href="#">Lien 4</a></li>
                                <li><a href="#">Lien 5</a></li>
                            </ul>
                        </li>
                        
                    </ul>
                </div> <!--fin menu tri-->
            </div><!-- fin col-->

        </div><!--fin row-->

    </div><!--fin container-->


<!--************************RESPONSIVE**********************-->

    <div id="menuxs" class="col-xs-8 col-xs-offset-2 visible-xs">

        <select>
            <option value="" selected>Trier par</option>
            <option value="#">Genre</option>
                <?php foreach ($genres as $genre): ?>
                    <option value="#"><a href="?filter=<?= $genre['id'] ?>&filterBy=G"><?= $genre['nom'] ?></a></option>
                <?php endforeach ?>
            <option value="#">Année</option>
            <option value="#">Note</option>
            <option value="#">Pays</option>
        </select>
    </div>

<!--************************FIN RESPONSIVE**********************-->

    
    <!--FIN TRI-->



    <!--LISTE FILMS-->
        <div class="container">
            <div class="row">
                <?php foreach ($resultats as $res): ?>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 marg">

                    <div class="row center-block film-list">


                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 presentation">
                            <h1 class="text-left"><a href="fiche_film.php?id=<?= $res['id'] ?>"><?= $res['titre'] ?></a></h1>
                            <p class="annee gris text-left hidden-xs"><?= $res['date'] ?></p>
                            <?php $id_film=$res['id']; 

                            $requete_gf=$db->query("SELECT * FROM film_genre, genre WHERE film_genre.id_film=$id_film AND genre.id=film_genre.id_genre");
                            $gfs=$requete_gf->fetchAll();

                            ?>
                            <?php foreach ($gfs as $gf): ?>
                            <span class="genre gris hidden-xs"><?= $gf['nom']?></span>
                            <?php endforeach ?>
                            <a href="fiche_film.php?id=<?= $res['id'] ?>"><img src="<?= $res['affiche'] ?>" class="img-responsive affiche" alt="" ></a>

                            <!-- Boutons xs -->
                            <div class="row">
                                <div class="col-xs-6"><a href="#"><p class="boutonfdj visible-xs"><i class="fa fa-play-circle-o"></i></p></div></a>
                                <div class="col-xs-6"><a href="#"><p class="boutonfdj visible-xs"><i class="fa fa-file-text-o"></i></p></div></a>
                            </div>

                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs">
                            
                            <div class="row">

                            <p class="note pull-right" title="<?= $res['note'] ?> / 5" alt="<?= $res['note'] ?> / 5">
                                <?php include '../lib/note.php'; ?>
                            </p>

                            </div>

                            <p class="text-left gris">Synopsis</p>
                            <p class="text-justify"><?= $res['synopsisCourt'] ?></p>
                        
                            <div class="row boutons">
                                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2">
                            <a href="#"><p class="boutonfdj text-center"><i class="fa fa-play-circle-o"></i>Bande annonce</p></a></div>
                                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2">
                            <a href="#"><p class="boutonfdj"><i class="fa fa-file-text-o"></i>A regarder plus tard</p></a></div>
                            </div>

                        </div>
 

                    </div> <!--fin row-->



                </div> <!--fin marg-->
                <?php endforeach ?>


            </div> <!--fin row-->

        </div> <!-- fin container-->












<?php
include '../partials/footer.php'; ?>
