<?php 
$auth = 0;
include 'lib/include.php';
$title_page='Connexion';
$adr='css/connexion.css';
include 'partials/header.php'; ?>


    <!--INSCRIPTION-->
<div class="container connexion">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <h1>Se connecter</h1>
            <form id="connexion" method="post" action="#">
                    <p><label for="pseudo">Entrez votre nom ou pseudo :</label><br><input type="text" id="pseudo" name="pseudo" placeholder="Mr Rabbit" /></p>             
                    <p><label for="password">Entrez votre mot de passe :</label><br><input type="password" id="password" name="password" placeholder="*****" /></p>
                
                <input class="boutonfdj"t ype="submit" name="envoi" value="Confirmer" />
                <a href="index.php"><p class="boutonfdj">Annuler</p></a><br><br>

                <a href="inscrption.php">S'inscrire</a>
                <a href="index.php">Accéder sans se connecter</a>
                <a href="#">Mot de passe oublié ?</a>


            </form>
        </div>
    </div>
</div>
    
<?php
include 'partials/footer.php'; ?>
