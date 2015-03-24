<?php 
$auth = 0;
include '../lib/include.php';
$title_page='Profil';
$adr='css/profil.css';
include '../partials/header.php'; 

$result="";

session_start();
if (!isset($_SESSION['username'])) {
    header ('Location:' . WEBROOT . 'pages/connexion.php');
    exit();
}

    $sql = 'SELECT * FROM user WHERE username="'.$_SESSION['username'].'"';
    $db -> query($sql) or die('Erreur SQL !'.$sql.'<br />'.mysql_error());
    $req = $db->query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
    $result=$req->fetchAll();

?>
    


    <!--PROFIL-->
<div class="container profil">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-10 col-lg-offset-1">
        <h1 class="titre_profil titre-section">Mon Compte</h1>
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-lg-12">
            <TABLE>
              <TR>
                 <TD class="line-right">
                    <img src="img/photoprofil.jpg" width="233" height="233" alt="photo de profil">
                 </TD>
                 <TD>
                    <?php foreach($result as $res): ?>
                    <h2><?php echo htmlentities(trim($_SESSION['username'])); ?></h2>
                    <h3><?php echo $res['email']; ?></h3>
                    <a href="<?= WEBROOT; ?>pages/modification_profil.php"><p class="boutonfdj"><i class="fa fa-cog"></i> Modifier le profil</p></a>
                    <a href="<?= WEBROOT; ?>pages/deconnexion.php"><p class="boutonfdj"><i class="fa fa-cog"></i> Se Déconnecter</p></a>
                    <?php endforeach ?>
                </TD>
              </TR>
            </TABLE>            
          </div>
        </div>
      </div>
    </div>
</div>

<div class="container profil filmavoir">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">       
        <h1 class="titre_profil titre-section">à regarder plus tard</h1>
            <div class="row">
                <div class="col-xs-6 col-sm-4 col-lg-3">
                    <a href="fiche_film.php">
                        <img src="img/malefique2.jpg">
                        <h2>Maléfique</h2>
                    </a>    
                        <p>2014</p>          
                </div>
                <div class="col-xs-6 col-sm-4 col-lg-3">
                    <a href="fiche_film.php">
                        <img src="img/malefique2.jpg">
                        <h2>Maléfique</h2>
                    </a>    
                        <p>2014</p>           
                </div>
                <div class="col-xs-6 col-sm-4 col-lg-3">
                    <a href="fiche_film.php">
                        <img src="img/malefique2.jpg">
                        <h2>Maléfique</h2>
                    </a>    
                        <p>2014</p>           
                </div>
                <div class="col-xs-6 col-sm-4 col-lg-3">
                    <a href="fiche_film.php">
                        <img src="img/malefique2.jpg">
                        <h2>Maléfique</h2>
                    </a>    
                        <p>2014</p>           
                </div>
                <div class="col-xs-6 col-sm-4 col-lg-3">
                    <a href="fiche_film.php">
                        <img src="img/malefique2.jpg">
                        <h2>Maléfique</h2>
                    </a>    
                        <p>2014</p>           
                </div>
                <div class="col-xs-6 col-sm-4 col-lg-3">
                    <a href="fiche_film.php">
                        <img src="img/malefique2.jpg">
                        <h2>Maléfique</h2>
                    </a>    
                        <p>2014</p>           
                </div>
                <div class="col-xs-6 col-sm-4 col-lg-3">
                    <a href="fiche_film.php">
                        <img src="img/malefique2.jpg">
                        <h2>Maléfique</h2>
                    </a>    
                        <p>2014</p>           
                </div>
            </div>
            <a href=""><p class="plusdefilm">afficher plus de films</p></a>
        </div>
    </div>
</div>

<div class="container profil dejavu">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">       
        <h1 class="titre_profil titre-section">déjà vu</h1>
            <div class="row">
                <div class="col-xs-6 col-sm-4 col-lg-3">
                    <a href="fiche_film.php">
                        <img src="img/malefique2.jpg">
                        <h2>Maléfique</h2>
                    </a>    
                        <p>2014</p>           
                </div>
                <div class="col-xs-6 col-sm-4 col-lg-3">
                    <a href="fiche_film.php">
                        <img src="img/malefique2.jpg">
                        <h2>Maléfique</h2>
                    </a>    
                        <p>2014</p>           
                </div>
                <div class="col-xs-6 col-sm-4 col-lg-3">
                    <a href="fiche_film.php">
                        <img src="img/malefique2.jpg">
                        <h2>Maléfique</h2>
                    </a>    
                        <p>2014</p>           
                </div>
                <div class="col-xs-6 col-sm-4 col-lg-3">
                    <a href="fiche_film.php">
                        <img src="img/malefique2.jpg">
                        <h2>Maléfique</h2>
                    </a>    
                        <p>2014</p>           
                </div>
                <div class="col-xs-6 col-sm-4 col-lg-3">
                    <a href="fiche_film.php">
                        <img src="img/malefique2.jpg">
                        <h2>Maléfique</h2>
                    </a>    
                        <p>2014</p>          
                </div>
                <div class="col-xs-6 col-sm-4 col-lg-3">
                    <a href="fiche_film.php">
                        <img src="img/malefique2.jpg">
                        <h2>Maléfique</h2>
                    </a>    
                        <p>2014</p>           
                </div>
                <div class="col-xs-6 col-sm-4 col-lg-3">
                    <a href="fiche_film.php">
                        <img src="img/malefique2.jpg">
                        <h2>Maléfique</h2>
                    </a>    
                        <p>2014</p>           
                </div>
            </div>
            <a href=""><p class="plusdefilm">afficher plus de films</p></a>
        </div>
    </div>
</div>
    


<?php
include '../partials/footer.php'; ?>