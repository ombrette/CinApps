<?php 
$auth = 0;
include '../lib/include.php';
$title_page='Film';
$adr='css/fichefilm.css';
include '../partials/header.php'; ?>
    
 <!--FILM-->
<div class="container film">

    <h1 class="text-center">Maléfique</h1>

    <div class="row film1">
        <div class="affiche col-lg-3 col-md-3 col-sm-3">
            
            <img src="img/malefique2.jpg" class="img-responsive" alt="" >
        </div>

        <div class="resume col-lg-8 col-md-8 col-sm-8 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
            
            <div class="row">
                <div class="col-lg-4">
                    <p class="annee text-left">Année : 2014</p>
                </div>

                <div class="col-lg-4">
                    <p class="genre">Genre : Fantastique</p>
                </div>

                <div class="col-lg-4">
                    <p class="note text-right">note : 4.5/5</p>
                </div>
            
            </div>
            
            <p class="text-left">Synopsis</p>
            <p class="text-justify">Maléfique est une belle jeune femme au coeur pur qui mène une  vie idyllique au sein d’une paisible forêt dans un royaume où règnent le bonheur et l’harmonie. Un jour, une armée d’envahisseurs menace les frontières du pays et Maléfique, n’écoutant que son courage, s’élève en féroce protectrice de cette terre. Dans cette lutte acharnée, une personne en qui elle avait foi va la trahir, déclenchant en elle une souffrance à nulle autre pareille qui va petit à petit transformer son coeur pur en un coeur de pierre. Bien décidée à se venger, elle s’engage dans une bataille épique avec le successeur du roi, jetant une terrible malédiction sur sa fille qui vient de naître, Aurore. Mais lorsque l’enfant grandit, Maléfique se rend compte que la petite princesse détient la clé de la paix du royaume, et peut-être aussi celle de sa propre rédemption…</p>

            <a href="#"><p class="boutonfdj text-center"><i class="fa fa-play-circle-o"></i>Bande annonce</p></a>
            <a href="#"><p class="boutonfdj"><i class="fa fa-file-text-o"></i>A regarder plus tard</p></a>


        </div>

    </div>

<!--Réalisateur,acteurs-->

    <div class="row personnes">

        <div class="realisateur col-lg-3 col-md-3 col-sm-3">
            <div class="entete">Réalisateur</div>
            
            <div class="col-lg-6">
            <img src="img/malefique2.jpg" alt="" class="img-responsive">
            <p>Angelina Jolie</p>
            </div>

        </div>


        <div class="acteur col-lg-8 col-md-8 col-sm-8 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
            <div class="entete">Acteurs</div>
            <div class="col-lg-4">
            <img src="img/malefique2.jpg" alt="" class="img-responsive">
            <p>Angelina Jolie</p>
            </div>

            <div class="col-lg-4">
            <img src="img/malefique2.jpg" alt="" class="img-responsive">
            <p>Angelina Jolie</p>
            </div>

            <div class="col-lg-4">
            <img src="img/malefique2.jpg" alt="" class="img-responsive">
            <p>Angelina Jolie</p>
            </div>
        </div>


        <div class="col-lg-offset-4 col-lg-8">
        <a href="#"><p class="boutonfdj">Regarder en streaming</p></a>  
        <a href="#"><p class="boutonfdj">Lien de téléchargement</p></a>
        </div>

    </div>



<!--Fin Réalisateur,acteurs-->



</div>
    
    <!--FIN FILM-->


<div class="container commentaires">

    <div class="row">
        <div class="col-lg-12">
            <h3>Commentaires</h3>
        </div>

    </div>



</div>


<?php
include 'partials/footer.php'; ?>
