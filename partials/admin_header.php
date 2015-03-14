<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title_page; ?></title>

    <!-- Bootstrap -->
    <link href="<?= WEBROOT; ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= WEBROOT; ?>css/styles.css" rel="stylesheet">
    <link href="<?= WEBROOT; ?>css/stylesBO.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href='http://fonts.googleapis.com/css?family=Raleway|Poiret+One|Maven+Pro' rel='stylesheet' type='text/css'>

    <link rel="icon" type="image/png" href="<?= WEBROOT; ?>img/favicon.png" />

  </head>
  <body>
    <nav class="navbar navbar-default" role="navigation">
    
            <div class="container">
                
                        
                <div class="navbar-header">

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarCollapse">

                    <span class="sr-only">Toggle navigation</span> <!-- sr = screen reader-->
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>

                    <h4 class="visible-xs">Cinéos</h4>
                    
                </div>
    
            <div class="collapse navbar-collapse" id="navbarCollapse"><!-- identique data-target plus haut-->
                <a class="navbar-brand hidden-xs" href="<?= WEBROOT; ?>admin/">
                        <img src="<?= WEBROOT; ?>img/logo2.png" width="38" height="50" alt="logo">Backoffice Cinéos</a>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="<?= WEBROOT; ?>admin/">Accueil</a></li>
                    <li><a href="<?= WEBROOT; ?>admin/users.php">Utilisateurs</a></li>
                    <li><a href="<?= WEBROOT; ?>admin/film.php">Films</a></li>
                                   

                    <li class="recherche"><a href="#"><img class="logorecherche" src="<?= WEBROOT; ?>img/search.png" width="47" height="60" alt="Logo Recherche"></a></li>
                </ul>
            </div>
    
        </nav>
    
    <div class="container mt">

      <?= flash(); ?>