<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinéos</title>
    <link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/css/bootstrap.min.css'>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

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

<!-- Add fancyBox -->
<link rel="stylesheet" href="css/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="js/jquery.fancybox.pack.js?v=2.1.5"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $(".video").fancybox();
    });
</script>
    

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

$req_recomm=$db->query("SELECT film.id, film.titre, film.affiche FROM film, recommandation WHERE film.id=recommandation.film_id");
$recommandations=$req_recomm->fetchAll();
?>

    <!--MENU-->
    
    <nav class="navbar navbar-default hidden-xs" role="navigation">
    
            <div class="container">
                
                        
                <div class="navbar-header">

                    <h4 class="visible-xs">Cinefeel</h4>
                    
                </div>
    
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <a class="navbar-brand hidden-xs" href="">
                        <img src="img/logo2.png" width="38" height="50" alt="logo">Cinéos</a>
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

    <div id="general" class="row">
        <div class="col-lg-4 col-md-4 col-sm-4">
            <?php foreach($result as $res): ?>
            <h1 class="titre-section text-uppercase">Film du Jour</h1>
            <img src="<?= $res['affiche'] ?>" class="img-responsive center-block" alt="">
            <?php endforeach ?>
        </div>

        <div class="col-lg-7 col-md-7 col-sm-7 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 contenu">
            
            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                <?php foreach($result as $res): ?>
                <h2 class="titre-film"><?= $res['titre'] ?></h2></div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <p class="note" title="<?= $res['note'] ?> / 5" alt="<?= $res['note'] ?> / 5">
                    <?php include 'lib/note.php'; ?>
                </p>
                </div>

           </div>

            <div class="row">

                <div class="col-lg-12">
                <p class="infos gris">Année : </p>
                

                
                <p class="infos gris">Genre : <?= $res['contenu'] ?></p>
                
                <p class="text-justify description hidden-xs"><?= utf8_decode($res['synopsis']); ?></p>
                </div>
                

                
                <div class="col-lg-6 col-md-6 col-sm-6">
                <a href="bandeannonce.html" class="video"><p class="boutonfdj"><i class="fa fa-play-circle-o"></i>Bande annonce</p></a>
                    <div style="display:none">
                        <div id="video">
                            <p>Bande annonce :</p>
                        <!--<?= $res['trailer'] ?>-->
                        </div>
                    </div>

                </div> 


                <div class="col-lg-6 col-md-6 col-sm-6">
                    <a href="#"><p class="boutonfdj"><i class="fa fa-file-text-o"></i>A regarder plus tard</p></a>
                </div>


             </div>


<?php endforeach ?>

            


        </div>


    </div>



</div>
    
    <!--FIN FILM DU JOUR-->
    
    
    
    <!-- ANCIENNE RECOMMANDATION -->

   <div class="container ancrec">

    
   <h1 class="titre-section text-uppercase">Anciennes recommandations</h1>
    
    
        <div class="center">
          <!--<div><a href="pages/fiche_film.php"><img src="img/malefique2.jpg"><h3 class="text-center">Maléfique</h3></a><p class="text-center">Le Lornonyme assembla</p></div>
           <div><a href="pages/fiche_film.php"><img src="img/malefique2.jpg"><h3 class="text-center">Maléfique</h3></a><p class="text-center">Le Lornonyme assembla</p></div>
            <div><a href="pages/fiche_film.php"><img src="img/malefique2.jpg"><h3 class="text-center">Maléfique</h3></a><p class="text-center">Le Lornonyme assembla</p></div>
             <div><a href="pages/fiche_film.php"><img src="img/malefique2.jpg"><h3 class="text-center">Maléfique</h3></a><p class="text-center">Le Lornonyme assembla</p></div>
              <div><a href="pages/fiche_film.php"><img src="img/malefique2.jpg"><h3 class="text-center">Maléfique</h3></a><p class="text-center">Le Lornonyme assembla</p></div>
               <div><a href="pages/fiche_film.php"><img src="img/malefique2.jpg"><h3 class="text-center">Maléfique</h3></a><p class="text-center">Le Lornonyme assembla</p></div>
                <div><a href="pages/fiche_film.php"><img src="img/malefique2.jpg"><h3 class="text-center">Maléfique</h3></a><p class="text-center">Le Lornonyme assembla</p></div>
                 <div><a href="pages/fiche_film.php"><img src="img/malefique2.jpg"><h3 class="text-center">Maléfique</h3></a><p class="text-center">Le Lornonyme assembla</p></div>-->
        <?php foreach ($recommandations as $recommandation): ?>
          <div><a href="pages/fiche_film.php?id=<?= $recommandation['id'] ?>"><img src="<?= $recommandation['affiche'] ?>" class="img-responsive"><h3 class="text-center"><?= $recommandation['titre'] ?></h3></a><p class="text-center">Le Lornonyme assembla</p></div>
            <?php endforeach ?>


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