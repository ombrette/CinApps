<?php
session_start();
$auth = 0;
include '../lib/include.php'; 
if (!isset($_SESSION['username'])) {
    header ('Location:' . WEBROOT . 'pages/connexion.php');
    exit();
}

$title_page='Profil';
$adr='css/profil.css';
include '../partials/header.php';


$result="";




if(isset($_GET['del'])){
    $id = $db->quote($_GET['del']);
    $db->query("DELETE FROM a_voir WHERE id_film=$id");
    setFlash('Le film a bien été supprimé');
    /*header('Location:profil.php');
    die()*/;
}

    $sql = 'SELECT * FROM user WHERE username="'.$_SESSION['username'].'"';
    $db -> query($sql) or die('Erreur SQL !'.$sql.'<br />'.mysql_error());
    $req = $db->query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
    $result=$req->fetchAll();

    $sql2 = 'SELECT * FROM film, a_voir, user WHERE film.id=a_voir.id_film AND a_voir.id_user=user.id AND user.username="'.$_SESSION['username'].'"';
    $requete = $db->query($sql2) or die('Erreur SQL !<br />'.$sql2.'<br />'.mysql_error());
    $resultat=$requete->fetchAll();

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
                    <img src="<?= WEBROOT; ?>img/photoprofil.jpg" width="233" height="233" alt="photo de profil">
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
            <div class="row liste_film_a_voir">
                <?php foreach($resultat as $resu): ?>
                <div class="grid col-xs-12 col-sm-6 col-lg-3 a_voir">
                    <figure class="effect-zoe">
                        <a href="fiche_film.php?id=<?= $resu['id_film']; ?>">
                            <img src="<?= $resu['affiche']; ?>" class="img-responsive affiche">
                            <h2><?= $resu['titre']; ?></h2>
                        </a>
                        <figcaption>
                            <h2><span><a href="?del=<?= $resu['id_film']; ?>">Supprimer de la liste</span></h2>
                        </figcaption>           
                    </figure>       
                </div>
                <?php endforeach ?>
            </div><!-- 
            <a href=""><p class="plusdefilm">afficher plus de films</p></a> -->
        </div>
    </div>
</div>

    


<?php
include '../partials/footer.php'; ?>