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


                <div class="col-lg-9 hidden-xs">

                    <ul id="menu-deroulant">
                        <li class="menu1"><a href="#">Genre</a>
                            <ul>
                                <div class="sousmenu">
                                <li><a href="#">lien sous menu 1</a></li>
                                <li><a href="#">lien sous menu 1</a></li>
                                <li><a href="#">lien sous menu 1</a></li>
                                <li><a href="#">lien sous menu 1</a></li>
                                
                                <li><a href="#">lien sous menu 1</a></li>
                                <li><a href="#">lien sous menu 1</a></li>
                                <li><a href="#">lien sous menu 1</a></li>
                                <li><a href="#">lien sous menu 1</a></li>


                                <li><a href="#">lien sous menu 1</a></li>
                                <li><a href="#">lien sous menu 1</a></li>
                                <li><a href="#">lien sous menu 1</a></li>
                                <li><a href="#">lien sous menu 1</a></li>


                                <li><a href="#">lien sous menu 1</a></li>
                                <li><a href="#">lien sous menu 1</a></li>
                                <li><a href="#">lien sous menu 1</a></li>
                                <li><a href="#">lien sous menu 1</a></li>
                                </div>
                            </ul>
                        </li>
                        <li class="menu1"><a href="#">Année</a>
                            <ul>
                                <div class="sousmenu">
                                <li><a href="#">lien sous menu 1</a></li>
                                <li><a href="#">lien sous menu 1</a></li>
                                <li><a href="#">lien sous menu 1</a></li>
                                <li><a href="#">lien sous menu 1</a></li>
                                </div>
                            </ul>
                        </li>
                        <li class="menu1"><a href="#">Note</a>
                            <ul>
                                <div class="sousmenu">
                                <li><a href="#">lien sous menu 1</a></li>
                                <li><a href="#">lien sous menu 1</a></li>
                                <li><a href="#">lien sous menu 1</a></li>
                                <li><a href="#">lien sous menu 1</a></li>
                                </div>
                            </ul>
                        </li>
                        <li class="menu1"><a href="#">Pays</a>
                            <ul>
                                <div class="sousmenu">
                                <li><a href="#">lien sous menu 1</a></li>
                                <li><a href="#">lien sous menu 1</a></li>
                                <li><a href="#">lien sous menu 1</a></li>
                                <li><a href="#">lien sous menu 1</a></li>
                                </div>
                            </ul>
                        </li>
                    </ul>

                   <!--<div id="menu">
                        <ul>
                            <li class="menu1"><a href="#">Genre</a>
                                <ul>
                                    <div class="sousmenu">
                                    <li><a href="#">Lien 1</a></li>
                                    <li><a href="#">Lien 2</a></li>
                                    <li><a href="#">Lien 3</a></li>
                                    <li><a href="#">Lien 4</a></li>
                                    <li><a href="#">Lien 5</a></li>
                                    <li><a href="#">Lien 1</a></li>
                                    <li><a href="#">Lien 2</a></li>
                                    <li><a href="#">Lien 3</a></li>
                                    <li><a href="#">Lien 4</a></li>
                                    <li><a href="#">Lien 5</a></li>
                                    <li><a href="#">Lien 1</a></li>
                                    <li><a href="#">Lien 2</a></li>
                                    <li><a href="#">Lien 3</a></li>
                                    <li><a href="#">Lien 4</a></li>
                                    <li><a href="#">Lien 5</a></li>
                                    <li><a href="#">Lien 5</a></li>
                                    </div>


                                   
                                </ul>
                            </li>
                            <li class="menu1"><a href="#">Année</a>
                                <ul>
                                    <li><a href="#">Lien 1</a></li>
                                    <li><a href="#">Lien 2</a></li>
                                    <li><a href="#">Lien 3</a></li>
                                    <li><a href="#">Lien 4</a></li>
                                    <li><a href="#">Lien 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Note</a>
                                <ul>
                                    <li><a href="#">Lien 1</a></li>
                                    <li><a href="#">Lien 2</a></li>
                                    <li><a href="#">Lien 3</a></li>
                                    <li><a href="#">Lien 4</a></li>
                                    <li><a href="#">Lien 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Pays</a>
                                <ul>
                                    <li><a href="#">Lien 1</a></li>
                                    <li><a href="#">Lien 2</a></li>
                                    <li><a href="#">Lien 3</a></li>
                                    <li><a href="#">Lien 4</a></li>
                                    <li><a href="#">Lien 5</a></li>
                                </ul>
                            </li>
                            
                        </ul>
                     </div>-->

    

                    


                </div>



            
            </div>

        </div>

        <div id="menu" class="col-xs-8 col-xs-offset-2"></div>

        
            <!--FIN TRI-->

    


   
    
    
    
    
    
      <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
      <script src='http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/js/bootstrap.min.js'></script>
    
      <script src="js/main.js"></script>
      <!-- http://codepen.io/anon/pen/gbWaZz -->
    
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script>
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

 var el = $(this); 

 $("<option />", { 
     "value"   : el.attr("href"), 
     "text"    : el.text() 
 }).appendTo("#menu select"); 
});

$("#menu select").change(function() 
{ 
  window.location = $(this).find("option:selected").val(); 
}); });
</script>
</body>




</html>
