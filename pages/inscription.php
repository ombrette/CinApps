<?php 
$auth = 0;
include '../lib/include.php';
$title_page='Inscription';
$adr='../css/inscription.css';
include '../partials/header.php'; 

$erreur="";

// on teste si le visiteur a soumis le formulaire
if (isset($_POST['inscription']) && $_POST['inscription'] == 'Confirmer') {
    // on teste l'existence de nos variables. On teste également si elles ne sont pas vides
    if ((isset($_POST['pseudo']) && !empty($_POST['pseudo'])) && (isset($_POST['password']) && !empty($_POST['password'])) && (isset($_POST['pass_confirm']) && !empty($_POST['pass_confirm'])) && (isset($_POST['mail']) && !empty($_POST['mail']))) {
    // on teste les deux mots de passe
    if ($_POST['password'] != $_POST['pass_confirm']) {
        $erreur = 'Les 2 mots de passe sont différents.';
    }
    else{
        $pseudo=$db->quote($_POST['pseudo']);
        $password=sha1($_POST['password']);
        $mail=$db->quote($_POST['mail']);
        // on recherche si ce login est déjà utilisé par un autre membre
        $sql="SELECT count(*) FROM user WHERE username=$pseudo";
        $req = $db -> query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
        $data = $req -> fetch(PDO::FETCH_BOTH);
        //
        if ($data[0] == 0) {
        $sql = "INSERT INTO user(username, password, email) VALUES($pseudo, '$password', $mail)";
        $db -> query($sql) or die('Erreur SQL !'.$sql.'<br />'.mysql_error());
        //
        $_SESSION['username'] = $_POST['pseudo'];
        $_SESSION['email'] = $_POST['mail'];
        header('Location:' . WEBROOT . 'pages/profil.php?' . $_SESSION['username']);
        die();
        }
        else {
        $erreur = 'Un membre possède déjà ce login.';
        }
    }
    }
    else {
    $erreur = 'Au moins un des champs est vide.';
    }
}
//
echo $erreur;
//
?>


    <!--INSCRIPTION-->
<div class="container inscription">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <h1>Créer un compte</h1>
            <form id="inscription" method="post" action="inscription.php">
                    <p><label for="pseudo">Entrez votre nom ou pseudo :</label><br><input type="text" id="pseudo" name="pseudo" placeholder="Mr Rabbit" /></p>             
                    <p><label for="mail">Entrez votre adresse mail :</label><br><input type="email" id="mail" name="mail" placeholder="leroilapin@hotmail.fr" /></p>
                    <p><label for="password">Entrez votre mot de passe :</label><br><input type="password" id="password" name="password" placeholder="*****" /></p>
                    <p><label for="pass_confirm">Confirmez votre mot de passe :</label><br><input type="password" id="pass_confirm" name="pass_confirm" placeholder="*****" /></p>
                
                <div class="boutonfdj"><input type="submit" name="inscription" value="Confirmer" /></div>
                <a href="<?= WEBROOT; ?>index.php"><p class="boutonfdj">Annuler</p></a><br><br>
                
                <a href="<?= WEBROOT; ?>index.php">Accéder sans se connecter</a>
            </form>
        </div>
    </div>
</div>
    
<?php
include '../partials/footer.php'; ?>
