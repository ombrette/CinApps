<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinefeel</title>
    <link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/css/bootstrap.min.css'>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/listefilms.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link rel="icon" type="image/png" href="img/favicon.png" />

</head>

<body>

    <!--MENU-->
    
    <nav class="navbar navbar-default" role="navigation">
    
            <div class="container">
                
                        
                <div class="navbar-header">

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarCollapse">

                    <span class="sr-only">Toggle navigation</span> <!-- sr = screen reader-->
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>

                    <h4 class="visible-xs">Cinefeel</h4>
                    
                </div>
    
            <div class="collapse navbar-collapse" id="navbarCollapse"><!-- identique data-target plus haut-->
                <a class="navbar-brand hidden-xs" href="">
                        <img src="img/logo2.png" width="38" height="50" alt="logo">Cinefeel</a>
                <ul class="nav navbar-nav">
                    <li><a href="index.php">ACCUEIL</a></li>
                    <li><a href="questionnaire.php">QUESTIONNAIRE</a></li>
                    <li class="active"><a href="liste_films.php">LISTE DE FILMS</a></li>
                    <li><a href="profil.php">MON COMPTE</a></li>
                   

                    <li class="recherche"><a href="#"><img class="logorecherche" src="img/search.png" width="47" height="60" alt="Logo Recherche"></a></li>
                </ul>
            </div>
    
        </nav>
    
    <!--FIN MENU-->
    


    <!--TRI-->
        <div class="container">

            <div class="row">


                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-xs">

                    <div id="menu">
                        <ul>
                            <li class="menu1"><a href="#">Genre</a>
                                <ul>
                                    
                                        <div class="menu2">
                                        <li><a href="#">Thriller</a></li>
                                        <li><a href="#">Western</a></li>
                                        <li><a href="#">Romance</a></li>
                                        <li><a href="#">Comédie dramatique</a></li>
                                        </div>
                                    
                                    
                                        <div class="menu2">
                                        <li><a href="#">Guerre</a></li>
                                        <li><a href="#">Historique</a></li>
                                        <li><a href="#">Policier</a></li>
                                        <li><a href="#">Science fiction</a></li>
                                        </div>
                                   
                                   
                                        <div class="menu2">
                                        <li><a href="#">Comédie musicale</a></li>
                                        <li><a href="#">Drame</a></li>
                                        <li><a href="#">Epouvante-horreur</a></li>
                                        <li><a href="#">Fantastique</a></li>
                                        </div>
                                    
                                        <div class="menu2">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Animation</a></li>
                                        <li><a href="#">Aventure</a></li>
                                        <li><a href="#">Comédie</a></li>
                                        </div>
                                    
                                    


                                   
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
                                    <li><a href="#">1 étoile</a></li>
                                    <li><a href="#">2 étoiles</a></li>
                                    <li><a href="#">3 étoiles</a></li>
                                    <li><a href="#">4 étoiles</a></li>
                                    <li><a href="#">5 étoiles</a></li>
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



        <div id="menuxs" class="col-xs-8 col-xs-offset-2 visible-xs">

            <select>
                <option value="" selected>Trier par</option>
                <option value="#">Genre</option>
                    <option value="#">&nbsp;&nbsp;&nbsp;Action</option>
                    <option value="#">&nbsp;&nbsp;&nbsp;Aventure</option>
                <option value="#">Année</option>
                <option value="#">Note</option>
                <option value="#">Pays</option>
            </select>
        </div>



        
        <!--FIN TRI-->

    
        <!--LISTE FILMS-->
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 marg">

                    <div class="row center-block film-list">


                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 titre">
                            <h1 class="text-left"><a href="fiche_film.php">Maléfique</a></h1>
                            <p class="annee gris text-left hidden-xs">Année : 2014</p>
                            <p class="genre gris hidden-xs">Genre : Fantastique</p>
                            <img src="img/malefique2.jpg" class="img-responsive affiche" alt="" >
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
                            <p class="text-justify">Maléfique est une belle jeune femme au coeur pur qui mène uneÂ  vie idyllique au sein d'une paisible forêt dans un royaume oÃ¹ règnent le bonheur et l'harmonie. Un jour, une armée d'envahisseurs menace les frontières du pays et Maléfique, n'écoutant que son courage, s'élève en féroce protectrice de cette terre.</p>
                        
                            <div class="row">
                                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2">
                            <a href="#"><p class="boutonfdj text-center"><i class="fa fa-play-circle-o"></i>Bande annonce</p></a></div>
                                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2">
                            <a href="#"><p class="boutonfdj"><i class="fa fa-file-text-o"></i>A regarder plus tard</p></a></div>
                            </div>

                        </div>
 

                    </div> <!--fin row-->



                </div> <!--fin marg-->


                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 marg">

                    <div class="row center-block film-list">


                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 titre">
                            <h1 class="text-left"><a href="fiche_film.php">Maléfique</a></h1>
                            <p class="annee gris text-left hidden-xs">Année : 2014</p>
                            <p class="genre gris hidden-xs">Genre : Fantastique</p>
                            <img src="img/malefique2.jpg" class="img-responsive affiche" alt="" >
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
                            <p class="text-justify">Maléfique est une belle jeune femme au coeur pur qui mène uneÂ  vie idyllique au sein d'une paisible forêt dans un royaume oÃ¹ règnent le bonheur et l'harmonie. Un jour, une armée d'envahisseurs menace les frontières du pays et Maléfique, n'écoutant que son courage, s'élève en féroce protectrice de cette terre.</p>
                        
                            <div class="row">
                                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2">
                            <a href="#"><p class="boutonfdj text-center"><i class="fa fa-play-circle-o"></i>Bande annonce</p></a></div>
                                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2">
                            <a href="#"><p class="boutonfdj"><i class="fa fa-file-text-o"></i>A regarder plus tard</p></a></div>
                            </div>

                        </div>
 

                    </div> <!--fin row-->



                </div> <!--fin marg-->


                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 marg">

                    <div class="row center-block film-list">


                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 titre">
                            <h1 class="text-left"><a href="fiche_film.php">Maléfique</a></h1>
                            <p class="annee gris text-left hidden-xs">Année : 2014</p>
                            <p class="genre gris hidden-xs">Genre : Fantastique</p>
                            <img src="img/malefique2.jpg" class="img-responsive affiche" alt="" >
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
                            <p class="text-justify">Maléfique est une belle jeune femme au coeur pur qui mène uneÂ  vie idyllique au sein d'une paisible forêt dans un royaume oÃ¹ règnent le bonheur et l'harmonie. Un jour, une armée d'envahisseurs menace les frontières du pays et Maléfique, n'écoutant que son courage, s'élève en féroce protectrice de cette terre.</p>
                        
                            <div class="row">
                                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2">
                            <a href="#"><p class="boutonfdj text-center"><i class="fa fa-play-circle-o"></i>Bande annonce</p></a></div>
                                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2">
                            <a href="#"><p class="boutonfdj"><i class="fa fa-file-text-o"></i>A regarder plus tard</p></a></div>
                            </div>

                        </div>
 

                    </div> <!--fin row-->



                </div> <!--fin marg-->

            </div> <!--fin row-->

        </div> <!-- fin container-->




   
    
    
    
    
    
      <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
      <script src='http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/js/bootstrap.min.js'></script>
    
      <script src="js/main.js"></script>
      <!-- http://codepen.io/anon/pen/gbWaZz -->
    
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        

        <!--<script>
 $(function() {
$("<select />").appendTo("#menu"); 

$("<option />", 
{ 
   "selected": "selected", 
   "value"   : "", 
   "text"    : "Trier par" // default <option> to display in dropdown 

}).appendTo("#menu select"); 

$("#menu-deroulant a").each(function()
{ 
var el2 = $("#menu-deroulant a.categ");
 var el = $(this); 

 $("<option />", { 
     "value"   : el.attr("href"), 
     "text"    : "-" + el.text() 
 }).appendTo("#menu select"); 
});

$("#menu select").change(function() 
{ 
  window.location = $(this).find("option:selected").val(); 
}); });







</script>-->

</body>




</html>
