<?php 
$auth = 0;
include '../lib/include.php';
$title_page='Inscription';
$adr='css/inscription.css';
include '../partials/header.php'; ?>


    <!--INSCRIPTION-->
<div class="container inscription">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <h1>Créer un compte</h1>
            <form id="inscription" method="post" action="#">
                    <p><label for="pseudo">Entrez votre nom ou pseudo :</label><br><input type="text" id="pseudo" name="pseudo" placeholder="Mr Rabbit" /></p>             
                    <p><label for="mail">Entrez votre adresse mail :</label><br><input type="email" id="mail" name="mail" placeholder="leroilapin@hotmail.fr" /></p>
                    <p><label for="password">Entrez votre mot de passe :</label><br><input type="password" id="password" name="password" placeholder="*****" /></p>
                    <p><label for="password">Confirmez votre mot de passe :</label><br><input type="password" id="password" name="password" placeholder="*****" /></p>
                
                <input class="boutonfdj" type="submit" name="envoi" value="Confirmer" />
                <a href="index.php"><p class="boutonfdj">Annuler</p></a><br><br>
                
                <a href="index.php">Accéder sans se connecter</a>
            </form>
        </div>
    </div>
</div>
    
<?php
include 'partials/footer.php'; ?>
