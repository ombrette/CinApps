<?php 
$auth = 0;
include '../lib/include.php';


// on teste si le visiteur a soumis le formulaire de connexion
if (isset($_POST['connexion']) && $_POST['connexion'] == 'Confirmer') {
    if ((isset($_POST['pseudo']) && !empty($_POST['pseudo'])) && (isset($_POST['password']) && !empty($_POST['password']))) {

    $pseudo=$db->quote($_POST['pseudo']);
    $password=sha1($_POST['password']);
        // on teste si une entrée de la base contient ce couple login / pass
    $sql = "SELECT count(*) FROM user WHERE username=$pseudo AND password='$password'";
    $req = $db->query($sql); //or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error())
    $data = $req-> fetch(PDO::FETCH_BOTH);

    // si on obtient une réponse, alors l'utilisateur est un membre
    if ($req->rowCount() > 0) {
        session_start();
        $_SESSION['username'] = $_POST['pseudo'];
        header('Location:' . WEBROOT . 'pages/profil.php');
        die();
    }
    // si on ne trouve aucune réponse, le visiteur s'est trompé soit dans son login, soit dans son mot de passe
    elseif ($data[0] == 0) {
        setFlash('Compte non reconnu.');
    }
    // sinon, alors la, il y a un gros problème :)
    else {
        setFlash('Probème dans la base de données : plusieurs membres ont les mêmes identifiants de connexion.');
    }
    }
    else {
        setFlash('Au moins un des champs est vide.');
    }


}

    $title_page='Connexion';
    $adr='css/connexion.css';
    include '../partials/header.php'; 
?>


    <!--INSCRIPTION-->
<div class="container connexion">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <h1>Se connecter</h1>
            <form id="connexion" method="post" action="connexion.php">
                    <p><label for="pseudo">Entrez votre nom ou pseudo :</label><br><input type="text" id="pseudo" name="pseudo" placeholder="Mr Rabbit" /></p>             
                    <p><label for="password">Entrez votre mot de passe :</label><br><input type="password" id="password" name="password" placeholder="*****" /></p>
                
                <input class="boutonfdj" type="submit" name="connexion" value="Confirmer" />
                <a href="<?= WEBROOT; ?>index.php"><p class="boutonfdj">Annuler</p></a><br><br>

                <a href="<?= WEBROOT; ?>pages/inscription.php">S'inscrire</a><br>
                <a href="<?= WEBROOT; ?>index.php">Accéder sans se connecter</a><br>
                <a href="#">Mot de passe oublié ?</a>


            </form>
        </div>
    </div>
</div>
    
<?php
include '../partials/footer.php'; ?>
