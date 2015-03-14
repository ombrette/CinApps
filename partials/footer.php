		
	</div> <!-- container --> 

	
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
    <?php if(isset($script)): ?><?= $script; ?><?php endif; ?>
     
</div><!--fin shifter-->
    
     

        <nav class="shifter-navigation visible-xs">
            <img src="img/logo2.png" width="38" height="50" alt="logo" class="center-block logo-menu-xs">


            <a href="index.php"><img src="img/menu_accueil.png" width="24" height="24" alt="logo" class="pull-left icon-menu-xs">Accueil</a>
            <a href="questionnaire.php"><img src="img/menu_questionnaire.png" width="24" height="24" alt="logo" class="pull-left icon-menu-xs">Questionnaire</a>
            <a href="liste_films.php"><img src="img/menu_films.png" width="24" height="24" alt="logo" class="pull-left icon-menu-xs">Liste de films</a>
            <a href="profil.php"><img src="img/menu_profil.png" width="24" height="24" alt="logo" class="pull-left icon-menu-xs">Mon compte</a>
            <a href="profil.php"><img src="img/menu_deconnexion.png" width="24" height="24" alt="logo" class="pull-left icon-menu-xs">Déconnexion</a>
        </nav>
</body>




</html>
