<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinéos</title>
    <!--<link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/css/bootstrap.min.css'>-->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/accueil.css" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>

    <!-- custom font -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link rel="icon" type="image/png" href="img/favicon.png" />

    <link href="css/jquery.fs.shifter.css" rel="stylesheet" type="text/css" media="all">

    <!-- Add fancyBox -->
    <link rel="stylesheet" href="css/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {  
            $('.video').fancybox();   
            $("a.site").fancybox({          
                'hideOnContentClick'        : true,
                'padding'           : 0,
                'overlayColor'          :'#D3D3D3',
                'transitionIn'          :'elastic',
                'transitionOut'         :'elastic',
                'overlayOpacity'        : 0.7,
                'zoomSpeedIn'           : 300,
                'zoomSpeedOut'          : 300,
                'width'             : 950,
                'height'            : 400,
                'type'              :'iframe'
            });
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

<?php 
//Connexion à la base de données 
include 'lib/db.php';

$requete = $db -> query("SELECT film.id, film.titre, film.affiche, film.note, film.synopsisCourt, film.trailer, genre.nom, film.date FROM film, film_genre, genre, recommandation WHERE recommandation.id_film=film.id AND film.id=film_genre.id_film AND film_genre.id_genre=genre.id ORDER BY recommandation.id DESC LIMIT 1");
$result=$requete->fetchAll();

foreach($result as $res):
    $date = $res['date'];
endforeach;

list($year, $month, $day) = explode("-", $date); 
$months = array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"); 
$lastmodified = "$day ".$months[$month-1]." $year";

$req_recomm=$db->query("SELECT film.id, film.titre, film.affiche FROM film, recommandation WHERE film.id=recommandation.id_film ORDER BY recommandation.id DESC LIMIT 1,7");
$recommandations=$req_recomm->fetchAll();
?>

    <div class="shifter-page">
        <header class="visible-xs menu-mobile">
            <div class="row">
                <div>
                    <div class="col-xs-2"><a href="pages/questionnaire.php"><img src="img/questionnaire.png" width="20" height="27" alt="" class="quest"></a></div>
                    <div class="col-xs-8"><p class="titre-menu text-center">Cinéos</p></div>
                    <div class="col-xs-2"><span class="shifter-handle">Menu</span></div>
                </div>
            </div>
        </header>


    <!--MENU-->
    
    <nav class="navbar navbar-default hidden-xs" role="navigation">
    
        <div class="container">
            
                    
            <div class="navbar-header">

                <h4 class="visible-xs">Cinéos</h4>
                
            </div>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <a class="navbar-brand hidden-xs" href="">
                    <img src="img/logo2.png" width="38" height="50" alt="logo">
                    <p class="nom_logo">Cinéos</p>
                </a>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">ACCUEIL</a></li>
                    <li><a href="pages/questionnaire.php">QUESTIONNAIRE</a></li>
                    <li><a href="pages/liste_films.php">LISTE DE FILMS</a></li>
                    <li><a href="pages/profil.php">MON COMPTE</a></li>

                    <li class="recherche"><a href="#"><img class="logorecherche" src="img/search.png" width="47" height="60" alt="Logo Recherche"></a></li>
                </ul>
            </div>
        </div>

    </nav>
    
    <!--FIN MENU-->



    <!--FILM DU JOUR-->
    <div class="container fdj marg-top">
        <?php foreach($result as $res): ?>
        <div id="general" class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
                <h1 class="titre-section text-uppercase">Film du Jour</h1>
                <a href="pages/fiche_film.php?id=<?= $res['id'] ?>"><img src="<?= $res['affiche'] ?>" class="img-responsive center-block" alt=""></a>
            </div>

            <div class="col-lg-7 col-md-7 col-sm-7 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 contenu">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <a href="pages/fiche_film.php?id=<?= $res['id'] ?>"><h2 class="titre-film"><?= $res['titre'] ?></h2></a>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <p class="note" title="<?= $res['note'] ?> / 5" alt="<?= $res['note'] ?> / 5">
                            <?php include 'lib/note.php'; ?>
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <p class="infos gris">Sortie : <?= $lastmodified; ?></p>

                        <p class="infos gris">Genre : <?= $res['nom']; ?></p>
                    
                        <p class="text-justify description hidden-xs"><?= $res['synopsisCourt']; ?></p>
                    </div>
                     
                    <?php if(!empty($res['trailer'])) : ?>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <a href="<?= $res['trailer'] ?>" class="site video hidden-xs"><p class="boutonfdj"><i class="fa fa-play-circle-o"></i>Bande annonce</p></a>
                        <!--<div style="display:none">
                            <div id="video">
                                <?= $res['trailer'] ?>
                            
                            </div>
                        </div>-->
                    </div> 
                    <?php endif ?>
                    <?php if(empty($res['trailer'])) : ?>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <p class="boutonfdj noba hidden-xs"><i class="fa fa-play-circle-o"></i>Bande annonce</p>
                    </div> 
                    <?php endif ?>

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <a href="#"><p class="boutonfdj"><i class="fa fa-file-text-o"></i>A regarder plus tard</p></a>
                    </div>
                </div>
                <div class="row">
                 <div class="col-lg-12 col-md-6 col-sm-6">
                        <a href="pages/questionnaire.php"><p id="boutonquestionnaire">
                    <span class="fa fa-stack fa-1x">
                        <i class="fa fa-question fa-stack-1x"></i>
                        <i class="fa fa-comment-o fa-stack-2x"></i>
                    </span></i>Pas convaincu(e) ? Passe par le questionaire !</p></a>
                    </div>
                </div>   
            </div>
        </div>
        <?php endforeach ?>
    </div>
    
    <!--FIN FILM DU JOUR-->
    
    
    
    <!-- ANCIENNE RECOMMANDATION -->

   <div class="container ancrec">

    
   <h1 class="titre-section text-uppercase">Anciennes recommandations</h1>
    
    
        <div class="center">
        <?php foreach ($recommandations as $recommandation): ?>
            <div>
                <a href="pages/fiche_film.php?id=<?= $recommandation['id'] ?>"><img src="<?= $recommandation['affiche'] ?>" class="img-responsive">
                    <h3 class="text-center"><?= $recommandation['titre'] ?></h3>
                </a>
            </div>
        <?php endforeach ?>
        </div>

    </div>




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
            <a href="pages/questionnaire.php"><img src="img/menu_questionnaire.png" width="24" height="24" alt="logo" class="pull-left icon-menu-xs">Questionnaire</a>
            <a href="pages/liste_films.php"><img src="img/menu_films.png" width="24" height="24" alt="logo" class="pull-left icon-menu-xs">Liste de films</a>
            <a href="pages/profil.php"><img src="img/menu_profil.png" width="24" height="24" alt="logo" class="pull-left icon-menu-xs">Mon compte</a>
            <a href="pages/profil.php"><img src="img/menu_deconnexion.png" width="24" height="24" alt="logo" class="pull-left icon-menu-xs">Déconnexion</a>
        </nav>
    <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>  
    
    <script src="js/main.js"></script>
    <!-- http://codepen.io/anon/pen/gbWaZz -->
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.fs.shifter.js"></script>
    
    <script type="text/javascript" src="js/jquery.fancybox.pack.js?v=2.1.5"></script>
    
    <script type="text/javascript" src="js/slick.min.js"></script>

</body>




</html>