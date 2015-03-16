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

    <link rel="stylesheet" type="text/css" href="css/slick.css"/>
  <link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>



    <!-- custom font -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link rel="icon" type="image/png" href="img/favicon.png" />


 <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
      <script src='http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/js/bootstrap.min.js'></script>
    
      <script src="js/index.js"></script>
      <!-- http://codepen.io/anon/pen/gbWaZz -->
    
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
  
        <link href="css/jquery.fs.shifter.css" rel="stylesheet" type="text/css" media="all">
        <script src="js/jquery.fs.shifter.js"></script>

    

        <script>
            $(document).ready(function() {
                $.shifter({
                    maxWidth: Infinity
                });
            });
        </script>

</head>

<body class="shifter">

    <div class="shifter-page">
        <header class="visible-xs menu-mobile">
            <div class="row">
                <div>
                    <a href="pages/questionnaire.php"><img src="img/questionnaire.png" width="20" height="27" alt="" class="quest"></a>
                    <span class="shifter-handle">Menu</span>
                </div>
            </div>
        </header>

    <?php

    include 'lib/db.php';

    ?>

<?php
//Connexion à la base de données 

$requete = $db -> query("SELECT * FROM film, film_genre, genre WHERE film.titre='Shutter Island' AND film.id=film_genre.film_id AND film_genre.genre_id=genre.id LIMIT 1");
$result=$requete->fetchAll();
?>

    <!--MENU-->
    
    <nav class="navbar navbar-default hidden-xs" role="navigation">
    
            <div class="container">
                
                        
                <div class="navbar-header">

                    <h4 class="visible-xs">Cinefeel</h4>
                    
                </div>
    
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <a class="navbar-brand hidden-xs" href="">
                        <img src="img/logo2.png" width="38" height="50" alt="logo">Cinefeel</a>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">ACCUEIL</a></li>
                    <li><a href="pages/questionnaire.php">QUESTIONNAIRE</a></li>
                    <li><a href="pages/liste_films.php">LISTE DE FILMS</a></li>
                    <li><a href="pages/profil.php">MON COMPTE</a></li>
                                   

                    <li class="recherche"><a href="#"><img class="logorecherche" src="img/search.png" width="47" height="60" alt="Logo Recherche"></a></li>
                </ul>
            </div>
    
        </nav>
    
    <!--FIN MENU-->



    <!--FILM DU JOUR-->
<div class="container fdj">

    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4">
            <?php foreach($result as $res): ?>
            <h1 class="titre_fdj">Film du Jour</h1>
            <img src="<?= $res['affiche'] ?>" class="img-responsive center-block" alt="">
            <?php endforeach ?>
        </div>

        <div class="col-lg-7 col-md-7 col-sm-7 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
            
            <?php foreach($result as $res): ?>
            <h2><?= $res['titre'] ?></h2>
            <p class="note">note : <?= $res['note'] ?>/5</p><br>
            <p class="infos gris">Année : </p>
            <p class="infos gris">Genre : <?= $res['contenu'] ?></p>
            <p class="text-justify description"><?= utf8_decode($res['synopsis']); ?></p>
            <?php endforeach ?>

            

            <a href="#"><p class="boutonfdj"><i class="fa fa-play-circle-o"></i>Bande annonce</p></a>
            <a href="#"><p class="boutonfdj"><i class="fa fa-file-text-o"></i>A regarder plus tard</p></a>


        </div>


    </div>



</div>
    
    <!--FIN FILM DU JOUR-->
    
    
    
    <!-- ANCIENNE RECOMMANDATION -->

   <div class="container">

    <h1>Anciennes recommandations</h1>
        <div class="center ancrec">
          <div><a href="pages/fiche_film.php"><img src="img/malefique2.jpg"><h3 class="text-center">Maléfique</h3></a><p class="text-center">Le Lornonyme assembla</p></div>
           <div><a href="pages/fiche_film.php"><img src="img/malefique2.jpg"><h3 class="text-center">Maléfique</h3></a><p class="text-center">Le Lornonyme assembla</p></div>
            <div><a href="pages/fiche_film.php"><img src="img/malefique2.jpg"><h3 class="text-center">Maléfique</h3></a><p class="text-center">Le Lornonyme assembla</p></div>
             <div><a href="pages/fiche_film.php"><img src="img/malefique2.jpg"><h3 class="text-center">Maléfique</h3></a><p class="text-center">Le Lornonyme assembla</p></div>
              <div><a href="pages/fiche_film.php"><img src="img/malefique2.jpg"><h3 class="text-center">Maléfique</h3></a><p class="text-center">Le Lornonyme assembla</p></div>
               <div><a href="pages/fiche_film.php"><img src="img/malefique2.jpg"><h3 class="text-center">Maléfique</h3></a><p class="text-center">Le Lornonyme assembla</p></div>
                <div><a href="pages/fiche_film.php"><img src="img/malefique2.jpg"><h3 class="text-center">Maléfique</h3></a><p class="text-center">Le Lornonyme assembla</p></div>
                 <div><a href="pages/fiche_film.php"><img src="img/malefique2.jpg"><h3 class="text-center">Maléfique</h3></a><p class="text-center">Le Lornonyme assembla</p></div>
        </div>

    </div>




   <script type="text/javascript" src="js/slick.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){
   $('.center').slick({
  centerMode: true,
  centerPadding: '40px',
  slidesToShow: 4,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});
                
    });
  </script>


</div><!--fin shifter-->
    
     

        <nav class="shifter-navigation visible-xs">
            <img src="img/logo2.png" width="38" height="50" alt="logo" class="center-block logo-menu-xs">


            <a href="index.php"><img src="img/menu_accueil.png" width="24" height="24" alt="logo" class="pull-left icon-menu-xs">Accueil</a>
            <a href="questionnaire.php"><img src="img/menu_questionnaire.png" width="24" height="24" alt="logo" class="pull-left icon-menu-xs">Questionnaire</a>
            <a href="liste_films.php"><img src="img/menu_films.png" width="24" height="24" alt="logo" class="pull-left icon-menu-xs">Liste de films</a>
            <a href="profil.php"><img src="img/menu_profil.png" width="24" height="24" alt="logo" class="pull-left icon-menu-xs">Mon compte</a>
            <a href="profil.php"><img src="img/menu_deconnexion.png" width="24" height="24" alt="logo" class="pull-left icon-menu-xs">Déconnexion</a>
        </nav>
</body>




</html>