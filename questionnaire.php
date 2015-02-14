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
    <link href="css/questionnaire.css" rel="stylesheet">

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
                    <li class="active"><a href="questionnaire.php">QUESTIONNAIRE</a></li>
                    <li><a href="liste_films.php">LISTE DE FILMS</a></li>
                    <li><a href="profil.php">MON COMPTE</a></li>
                   

                    <li class="recherche"><a href="#"><img class="logorecherche" src="img/search.png" width="47" height="60" alt="Logo Recherche"></a></li>
                </ul>
            </div>
    
        </nav>
    
    <!--FIN MENU-->
    

<!--QUESTIONNAIRE-->
<div class="container questionnaire">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <h1 class="titre_fdj titre_profil">Questionnaire</h1>
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">

                    <div id="question">
                        <h2>Question n°#</h2>
                        <p>that is the question</p>
                    </div>
                </div>

            <div class="col-xs-12 col-sm-4 col-sm-offset-2 col-md-4 col-md-offset-2 col-lg-4 col-lg-offset-2">
                    <a href="#"><p class="boutonquest">Réponse 1</p></a> 
            </div>
            <div class="col-xs-12 col-sm-4 col-lg-14">
                    <a href="#"><p class="boutonquest">Réponse 2</p></a>
            </div>
            <div class="col-xs-12 col-sm-4 col-sm-offset-2 col-md-4 col-md-offset-2 col-lg-4 col-lg-offset-2">
                    <a href="#"><p class="boutonquest">Réponse 3</p></a> 
            </div>
            <div class="col-xs-12 col-sm-4 col-lg-14">
                    <a href="#"><p class="boutonquest">Réponse 4</p></a>
            </div>
          <div class="col-xs-12 col-sm-12 col-lg-12">
            
                
          </div>
        </div>
      </div>
    </div>

</div>
    
    <!--FIN QUESTIONNAIRE-->

      <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
      <script src='http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/js/bootstrap.min.js'></script>
    
      <script src="js/index.js"></script>
      <!-- http://codepen.io/anon/pen/gbWaZz -->
    
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
</body>




</html>
