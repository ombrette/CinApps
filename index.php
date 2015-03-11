<?php 
$auth = 0;
include 'lib/include.php';
$title_page='Cinefeel';
include 'partials/header.php'; ?>

<?php
//Connexion à la base de données 

$requete = $db -> query("SELECT * FROM film, film_genre, genre WHERE film.titre='Shutter Island' AND film.id=film_genre.film_id AND film_genre.genre_id=genre.id LIMIT 1");
$result=$requete->fetchAll();
?>

    <!--FILM DU JOUR-->
<div class="container fdj">

    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4">
            <?php foreach($result as $res): ?>
            <h1 class="titre_fdj">Film du Jour</h1>
            <img src="<?= $res['affiche'] ?>" width="250" height="333" alt="">
            <?php endforeach ?>
        </div>

        <div class="col-lg-7 col-md-7 col-sm-7 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
            
            <?php foreach($result as $res): ?>
            <h2><?= $res['titre'] ?></h2>
            <p class="note">note : <?= $res['note'] ?>/5</p><br>
            <p class="infos gris">Année : </p>
            <p class="infos gris">Genre : <?= $res['nom_genre'] ?></p>
            <?= $res['synopsis'] ?>
            <?php endforeach ?>

            <p class="text-justify"></p>

            <a href="#"><p class="boutonfdj"><i class="fa fa-play-circle-o"></i>Bande annonce</p></a>
            <a href="#"><p class="boutonfdj"><i class="fa fa-file-text-o"></i>A regarder plus tard</p></a>


        </div>


    </div>



</div>
    
    <!--FIN FILM DU JOUR-->
    
    
    
    <!-- ANCIENNE RECOMMANDATION -->
    
    
    <div class="container-fluid-carrousel">

    <div class="row-fluid">
    <div class="span12">
    
        <div class="carousel slide" id="myCarousel">
            <div class="carousel-inner">
                <div class="item active">
                        <ul class="thumbnails">
                            <li class="span3">
                                <div class="thumbnail">
                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4>Praesent commodo</h4>
                                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <a class="btn btn-mini" href="#">&raquo; Read More</a>
                                </div>
                            </li>
                            <li class="span3">
                                <div class="thumbnail">
                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4>Praesent commodo</h4>
                                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <a class="btn btn-mini" href="#">&raquo; Read More</a>
                                </div>
                            </li>
                            <li class="span3">
                                <div class="thumbnail">
                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4>Praesent commodo</h4>
                                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <a class="btn btn-mini" href="#">&raquo; Read More</a>
                                </div>
                            </li>
                            <li class="span3">
                                <div class="thumbnail">
                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4>Praesent commodo</h4>
                                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <a class="btn btn-mini" href="#">&raquo; Read More</a>
                                </div>
                            </li>
                        </ul>
                  </div><!-- /Slide1 --> 
                <div class="item">
                        <ul class="thumbnails">
                            <li class="span3">
                                <div class="thumbnail">
                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4>Praesent commodo</h4>
                                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> 
                                    <a class="btn btn-mini" href="#">&raquo; Read More</a>
                                </div>
                            </li>
                            <li class="span3">
                                <div class="thumbnail">
                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4>Praesent commodo</h4>
                                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <a class="btn btn-mini" href="#">&raquo; Read More</a>
                                </div>
                            </li>
                            <li class="span3">
                                <div class="thumbnail">
                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4>Praesent commodo</h4>
                                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <a class="btn btn-mini" href="#">&raquo; Read More</a>
                                </div>
                            </li>
                            <li class="span3">
                                <div class="thumbnail">
                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4>Praesent commodo</h4>
                                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <a class="btn btn-mini" href="#">&raquo; Read More</a>
                                </div>
                            </li>
                        </ul>
                  </div><!-- /Slide2 --> 
                <div class="item">
                        <ul class="thumbnails">
                            <li class="span3">
                                <div class="thumbnail">
                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4>Praesent commodo</h4>
                                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <a class="btn btn-mini" href="#">&raquo; Read More</a>
                                </div>
                            </li>
                            <li class="span3">
                                <div class="thumbnail">
                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4>Praesent commodo</h4>
                                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <a class="btn btn-mini" href="#">&raquo; Read More</a>
                                </div>
                            </li>
                            <li class="span3">
                                <div class="thumbnail">
                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4>Praesent commodo</h4>
                                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <a class="btn btn-mini" href="#">&raquo; Read More</a>
                                </div>
                            </li>
                            <li class="span3">
                                <div class="thumbnail">
                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4>Praesent commodo</h4>
                                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <a class="btn btn-mini" href="#">&raquo; Read More</a>
                                </div>
                            </li>
                        </ul>
                  </div><!-- /Slide3 --> 
            </div>
    
            <div class="control-box">                            
                <a data-slide="prev" href="#myCarousel" class="carousel-control left">‹</a>
                <a data-slide="next" href="#myCarousel" class="carousel-control right">›</a>
            </div><!-- /.control-box -->   
    
        </div><!-- /#myCarousel -->
    
    </div><!-- /.span12 -->          
    </div><!-- /.row --> 
    </div><!-- /.row --> 
    
<?php
include 'partials/footer.php'; ?>