<?php 
$auth = 0;
include '../lib/include.php';
$title_page='Modification du profil';
include '../partials/header.php'; ?>

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
            <a href="profil.php"><p class="boutonfdj">Annuler</p></a>
            <a href="#"><p class="boutonfdj">Supprimer mon compte</p></a>
            
        </form>

 

        </div>
    </div>
</div>
    



<?php
include '../partials/footer.php'; ?>