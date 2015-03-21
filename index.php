<?php
$auth = 0;
include '/lib/include.php';
$title_page='Cinéos';
$adr='';
include '/partials/header.php'; 
?>

<?php
//Connexion à la base de données 

$requete = $db -> query("SELECT * FROM film, film_genre, genre WHERE film.titre='Shutter Island' AND film.id=film_genre.film_id AND film_genre.genre_id=genre.id LIMIT 1");
$result=$requete->fetchAll();

$req_recomm=$db->query("SELECT film.id, film.titre, film.affiche FROM film, recommandation WHERE film.id=recommandation.film_id");
$recommandations=$req_recomm->fetchAll();
?>

    <!--MENU-->


    <!--FILM DU JOUR-->
<div class="container fdj">

    <div id="general" class="row">
        <div class="col-lg-4 col-md-4 col-sm-4">
            <?php foreach($result as $res): ?>
            <h1 class="titre-section text-uppercase">Film du Jour</h1>
            <img src="<?= $res['affiche'] ?>" class="img-responsive center-block" alt="">
            <?php endforeach ?>
        </div>

        <div class="col-lg-7 col-md-7 col-sm-7 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 contenu">
            
            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                <?php foreach($result as $res): ?>
                <h2 class="titre-film"><?= $res['titre'] ?></h2></div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <p class="note" title="<?= $res['note'] ?> / 5" alt="<?= $res['note'] ?> / 5">
                </p>
                </div>

           </div>

            <div class="row">

                <div class="col-lg-12">
                <p class="infos gris">Année : </p>
                

                
                <p class="infos gris">Genre : <?= $res['contenu'] ?></p>
                
                <p class="text-justify description hidden-xs"><?= utf8_decode($res['synopsis']); ?></p>
                </div>
                

                
                <div class="col-lg-6 col-md-6 col-sm-6">
                <a href="bandeannonce.html" class="video"><p class="boutonfdj"><i class="fa fa-play-circle-o"></i>Bande annonce</p></a>
                    <div style="display:none">
                        <div id="video">
                            <p>Bande annonce :</p>
                        <!--<?= $res['trailer'] ?>-->
                        </div>
                    </div>

                </div> 


                <div class="col-lg-6 col-md-6 col-sm-6">
                    <a href="#"><p class="boutonfdj"><i class="fa fa-file-text-o"></i>A regarder plus tard</p></a>
                </div>


             </div>


<?php endforeach ?>

            


        </div>


    </div>



</div>
    
    <!--FIN FILM DU JOUR-->
    
    
    
    <!-- ANCIENNE RECOMMANDATION -->

   <div class="container ancrec">

    
   <h1 class="titre-section text-uppercase">Anciennes recommandations</h1>
    
    
        <div class="center">
            <?php foreach ($recommandations as $recommandation): ?>
          <div><a href="<?= WEBROOT; ?>fiche_film.php?id=<?= $recommandation['id'] ?>"><img src="<?= $recommandation['affiche'] ?>"><h3 class="text-center"><?= $recommandation['titre'] ?></h3></a><p class="text-center">Le Lornonyme assembla</p></div>
            <?php endforeach ?>

        </div>
    </div>




   <script type="text/javascript" src="js/slick.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){
   $('.center').slick({
  centerMode: true,
  centerPadding: '40px',
  slidesToShow: 4,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});
                
    });
  </script>


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