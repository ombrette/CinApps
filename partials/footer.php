		
	</div> <!-- container --> 

	
   

    <?php if(isset($script)): ?><?= $script; ?><?php endif; ?>
     
</div><!--fin shifter-->
    
     

        <nav class="shifter-navigation visible-xs">
            <img src="<?= WEBROOT; ?>img/logo2.png" width="38" height="50" alt="logo" class="center-block logo-menu-xs">


            <a href="<?= WEBROOT; ?>index.php"><img src="<?= WEBROOT; ?>img/menu_accueil.png" width="24" height="24" alt="logo" class="pull-left icon-menu-xs">Accueil</a>
            <a href="<?= WEBROOT; ?>pages/questionnaire.php"><img src="<?= WEBROOT; ?>img/menu_questionnaire.png" width="24" height="24" alt="logo" class="pull-left icon-menu-xs">Questionnaire</a>
            <a href="<?= WEBROOT; ?>pages/liste_films.php"><img src="<?= WEBROOT; ?>img/menu_films.png" width="24" height="24" alt="logo" class="pull-left icon-menu-xs">Liste de films</a>
            <a href="<?= WEBROOT; ?>pages/profil.php"><img src="<?= WEBROOT; ?>img/menu_profil.png" width="24" height="24" alt="logo" class="pull-left icon-menu-xs">Mon compte</a>
            <a href="<?= WEBROOT; ?>pages/profil.php"><img src="<?= WEBROOT; ?>img/menu_deconnexion.png" width="24" height="24" alt="logo" class="pull-left icon-menu-xs">Déconnexion</a>
        </nav>



            <script type="text/javascript" src="<?= WEBROOT; ?>js/jquery.fancybox.pack.js?v=2.1.5"></script>
    
            <script type="text/javascript" src="<?= WEBROOT; ?>js/slick.min.js"></script>
</body>




</html>
