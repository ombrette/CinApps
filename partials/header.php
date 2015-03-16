<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title_page; ?></title>
    <link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/css/bootstrap.min.css'>
    <link href="<?= WEBROOT; ?>css/bootstrap.css" rel="stylesheet">
    <link href="<?= WEBROOT; ?>css/styles.css" rel="stylesheet">
    <link href="<?= WEBROOT; ?>css/fichefilm.css" rel="stylesheet">
    <link href="<?= WEBROOT; ?>css/fin_questionnaire.css" rel="stylesheet">
    <link href="<?= WEBROOT; ?>css/inscription.css" rel="stylesheet">
    <link href="<?= WEBROOT; ?>css/listefilms.css" rel="stylesheet">
    <link href="<?= WEBROOT; ?>css/modifierprofil.css" rel="stylesheet">
    <link href="<?= WEBROOT; ?>css/questionnaire.css" rel="stylesheet">
    <link href="<?= WEBROOT; ?>css/profil.css" rel="stylesheet">

    <!-- custom font -->
    <link href="<?= WEBROOT; ?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link rel="icon" type="image/png" href="<?= WEBROOT; ?>img/favicon.png" />



    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/js/bootstrap.min.js'></script>
    
    <script src="<?= WEBROOT; ?>js/index.js"></script>
    <script src="<?= WEBROOT; ?>js/ajax.js"></script>
      <!-- http://codepen.io/anon/pen/gbWaZz -->
     
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?= WEBROOT; ?>js/jquery.js"></script>
    <script src="<?= WEBROOT; ?>js/bootstrap.min.js"></script>

    <link href="<?= WEBROOT; ?>css/jquery.fs.shifter.css" rel="stylesheet" type="text/css" media="all">
    <script src="<?= WEBROOT; ?>js/jquery.fs.shifter.js"></script>
    <script>
            $(document).ready(function() {
                $.shifter({
                    maxWidth: Infinity
                });
            });
        </script>
    <?php if(isset($script)): ?><?= $script; ?><?php endif; ?>

</head>

<body class="shifter">

    <div class="shifter-page">
        <header class="visible-xs menu-mobile">
            <div class="row">
                <div>
                    <a href="pages/questionnaire.php"><img src="<?= WEBROOT; ?>img/questionnaire.png" width="20" height="27" alt="" class="quest"></a>
                    <span class="shifter-handle">Menu</span>
                </div>
            </div>
        </header>

    <!--MENU-->
    
    <nav class="navbar navbar-default hidden-xs" role="navigation">
    
            <div class="container">
                
                        
                <div class="navbar-header">

                    

                    <h4 class="visible-xs">Cinéos</h4>
                    
                </div>
    
            <div class="collapse navbar-collapse" id="navbarCollapse"><!-- identique data-target plus haut-->
                <a class="navbar-brand hidden-xs" href="<?= WEBROOT; ?>">
                        <img src="<?= WEBROOT; ?>img/logo2.png" width="38" height="50" alt="logo">Cinéos</a>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="<?= WEBROOT; ?>">ACCUEIL</a></li>
                    <li><a href="<?= WEBROOT; ?>pages/questionnaire.php">QUESTIONNAIRE</a></li>
                    <li><a href="<?= WEBROOT; ?>pages/liste_films.php">LISTE DE FILMS</a></li>
                    <li><a href="<?= WEBROOT; ?>pages/profil.php">MON COMPTE</a></li>
                                   

                    <li class="recherche"><a href="#"><img class="logorecherche" src="<?= WEBROOT; ?>img/search.png" width="47" height="60" alt="Logo Recherche"></a></li>
                </ul>
            </div>
    
        </nav>
    
    <!--FIN MENU-->
    <div class="container">

      <?= flash(); ?>