<?php
session_start();
$auth = 0;
include '../lib/include.php';
$title_page='Modification du profil';
$adr='css/modifierprofil.css';
include '../partials/header.php'; 


$sql = 'SELECT * FROM user WHERE username="'.$_SESSION['username'].'"';
$db -> query($sql) or die('Erreur SQL !'.$sql.'<br />'.mysql_error());
$req = $db->query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
$result=$req->fetchAll();

?>

<!--MODIFICATION PROFIL-->
<div class="container mdfp">


    <div class="row">
  <div class="col-sm-12 col-md-12 col-lg-12">
    <h1 class="titre-section titre_profil">Mon Compte</h1>
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-lg-12">
        <TABLE>
          <TR>
             <TD class="line-right">
                <a href="profil.php"><img src="../img/profil.png" width="233" height="233" alt="photo de profil">
                  <div class="modifbouton"><i class="fa fa-play-circle-o"></i>Changer de photo</div>
                </a>
             </TD>
             <TD>
                <?php foreach($result as $res): ?>
                <h2><?php echo htmlentities(trim($_SESSION['username'])); ?></h2>
                <h3><?php echo $res['email']; ?></h3>
                <?php endforeach ?>
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
            
            <input class="boutonfdj" type="submit" name="envoi" value="Confirmer" />
            <a href="profil.php"><p class="boutonfdj">Annuler</p></a>
            <a href="#"><p class="boutonfdj">Supprimer mon compte</p></a>
            
        </form>

 

        </div>
    </div>
</div>
    



<?php
include '../partials/footer.php'; ?>