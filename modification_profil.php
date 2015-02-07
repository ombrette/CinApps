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
    <link href="css/modifierprofil.css" rel="stylesheet">

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
                    <li><a href="liste_films.php">LISTE DE FILMS</a></li>
                    <li class="active"><a href="profil.html">MON COMPTE</a></li>
                   

                    <li class="recherche"><a href="#"><img class="logorecherche" src="img/search.png" width="47" height="60" alt="Logo Recherche"></a></li>
                </ul>
            </div>
    
        </nav>
    
    <!--FIN MENU-->
    


    <!--MODIFICATION PROFIL-->
<div class="container mdfp">


    <div class="row">
  <div class="col-sm-12 col-md-12 col-lg-12">
    <h1 class="titre_fdj titre_profil">Mon Compte</h1>
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-lg-12">
        <TABLE>
          <TR>
             <TD class="line-right">
                <a href="#"><img src="img/photoprofil.jpg" width="233" height="233" alt="photo de profil"></a>
             </TD>
             <TD>
                <h2>Mr Rabbit</h2>
                <h3>leroilapin@hotmail.fr</h3>
            </TD>
          </TR>
        </TABLE>
        

            
      </div>
    </div>
  </div>
</div>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            
        <form id="contact" method="post" action="#">
            <legend>MODIFIER :</legend>
                <p><label for="email">Changer son adresse e-mail</label><br><input type="email" id="email" name="email" placeholder="nouveau@gmail.com" /></p>

         
                <p><label for="objet">Changer de mot de passe :</label><br><input type="password" id="password" name="password" placeholder="ancien mot de passe" /></p>
                <p><input type="password" id="password" name="password" placeholder="nouveau mot de passe" /></p>
            
            <div class="boutonfdj"><input type="submit" name="envoi" value="Confirmer" /></div>
            <p class="boutonfdj"><a href="profil.php">Annuler</a></p>
            <p class="boutonfdj"><a href="#">Supprimer mon compte</a></p>
            
        </form>

 

        </div>
    </div>
</div>
    
    <!--FIN MODIFICATION PROFIL-->
    
    
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
