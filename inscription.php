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
    <link href="css/inscription.css" rel="stylesheet">

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
                    <li class=""><a href="index.php">ACCUEIL</a></li>
                    <li><a href="questionnaire.php">QUESTIONNAIRE</a></li>
                    <li><a href="liste_films.php">LISTE DE FILMS</a></li>
                    <li><a href="profil.php">MON COMPTE</a></li>
                   

                    <li class="recherche"><a href="#"><img class="logorecherche" src="img/search.png" width="47" height="60" alt="Logo Recherche"></a></li>
                </ul>
            </div>
    
        </nav>
    
    <!--FIN MENU-->
    


    <!--INSCRIPTION-->
<div class="container inscription">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <h1>Créer un compte</h1>
            <form id="inscription" method="post" action="#">
                    <p><label for="pseudo">Entrez votre nom ou pseudo :</label><br><input type="text" id="pseudo" name="pseudo" placeholder="Mr Rabbit" /></p>             
                    <p><label for="mail">Entrez votre adresse mail :</label><br><input type="email" id="mail" name="mail" placeholder="leroilapin@hotmail.fr" /></p>
                    <p><label for="password">Entrez votre mot de passe :</label><br><input type="password" id="password" name="password" placeholder="*****" /></p>
                    <p><label for="password">Confirmez votre mot de passe :</label><br><input type="password" id="password" name="password" placeholder="*****" /></p>
                
                <div class="boutonfdj"><input type="submit" name="envoi" value="Confirmer" /></div>
                <a href="index.php"><p class="boutonfdj">Annuler</p></a><br><br>
                <input type="checkbox" name="vehicle" value="#">Rester Connecté(e)
                <br>
                <input type="checkbox" name="vehicle" value="#">Retenir mon pseudo/adresse email <br>
                
                <a href="index.php">Accéder sans se connecter</a>
            </form>
        </div>
    </div>
</div>
    
    <!--FIN INSCRIPTION-->
    

    
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
