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
            $res=$db->query("SELECT film.id, film.titre, film.affiche, film.date, film.synopsisCourt FROM film, film_genre, genre WHERE genre.id=$idG AND film_genre.genre_id=genre.id AND film.id=film_genre.film_id LIMIT 20");
        break;

        case 'N':
            $idN=$_GET['filter'];
            $res=$db->query("SELECT * FROM film WHERE note=$idN LIMIT 20");
        break;
    }
            
}else{     
    $res=$db->query("SELECT * FROM film LIMIT 20");
}
$resultats=$res->fetchAll();
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
                                    <li class="col-lg-3 filtre" ><a href="?filter=<?= $genre['id'] ?>&filterBy=G"><?= $genre['contenu'] ?></a></li>
                                <?php endforeach ?>
                               
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
                        <li class="menu2"><a href="#">Note</a>
                            <ul>
                                <?php for($i=0; $i<6; $i++):?>
                                <li><a href="?filter=<?= $i ?>&filterBy=N"><?= $i ?> étoile<?php if($i>1){echo "s";} ?></a></li>
                                <?php endfor ?>
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
                    <option value="#"><a href="?filter=<?= $genre['id'] ?>&filterBy=G"><?= $genre['contenu'] ?></a></option>
                <?php endforeach ?>
            <option value="#">Année</option>
            <option value="#">Note</option>
            <option value="#">Pays</option>
        </select>
    </div>

<!--************************FIN RESPONSIVE**********************-->

    
    <!--FIN TRI-->


    <!--LISTE FILMS-->
    <!--LISTE FILMS-->
        <div class="container">
            <div class="row">
                <?php foreach ($resultats as $resultat): ?>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 marg">

                    <div class="row center-block film-list">


                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 titre">
                            <h1 class="text-left"><a href="fiche_film.php?id=<?= $resultat['id'] ?>"><?= $resultat['titre'] ?></a></h1>
                            <p class="annee gris text-left hidden-xs"><?= $resultat['date'] ?></p>
                            <?php $id_film=$resultat['id']; 

                            $requete_gf=$db->query("SELECT * FROM film_genre, genre WHERE film_genre.film_id=$id_film AND genre.id=film_genre.genre_id");
                            $gfs=$requete_gf->fetchAll();

                            ?>
                            <?php foreach ($gfs as $gf): ?>
                            <span class="genre gris hidden-xs"><?= $gf['contenu']?></span>
                            <?php endforeach ?>
                            <a href="fiche_film.php?id=<?= $resultat['id'] ?>"><img src="<?= $resultat['affiche'] ?>" class="img-responsive affiche" alt="" ></a>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs">
                            <div class="note text-right">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-o"></i>
                            </div>

                            <p class="text-left gris">Synopsis</p>
                            <p class="text-justify"><?= $resultat['synopsisCourt'] ?></p>
                        
                            <div class="row">
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
