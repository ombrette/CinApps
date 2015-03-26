################################################################################
								Dossier
################################################################################

Le dossier CinApps regroupe 7 dossiers. 

Dans l’ordre Alphabétique le premier dosser Admin regroupe tous les pages php qui se réfère à …. 

Le dossier suivant est CSS, qui regroupe l’ensemble des pages CSS du site, une page style pour ce qui se rapporte à la mise en page global du site. Puis des pages associé à chacune des différentes pages du site pour tous les détails qui leurs seront lié. On y retrouve également la page bootstrap car nous exploitons ce framework pour notre site. 

Le dossier suivant Font-awesome, regroupe une base d’icône et d’animation, que nous exploitons également pour nos icones sur notre site.

Le dossier fonts regroupe l’ensemble des polices que nous utilisons sur le site.

Img correspond aux dossier qui regroupe les images qui sont utilisées sur le site comme le logo ou l’image de fond. 

Js regroupe l’ensemble des pages Javascript sur le site, elles sont adressé pour le carrossel, les animations bootstrap, le menu en responsive. 

Le dossier lib contient les pages php qui sont directement relié a la base de donné et qui permettent d’afficherle questionnaire, les notes, images ou les informations des utilisateurs quand ils se connectent. Le ficher db.php permet quand a lui de se connecter à la base en pro, en y indiquant ses identifiant.

Le dossier pages regroupe l’ensemble des pages qui permettent d’afficher le site web.

Et partias correspond aux pages php qui permettent d’afficher les leader et footer dans l’ensemble de nos pages.

Au sein du dossier CinApps, plusieurs pages y sont rassemblé. cinappsXXX.sql correspond à la base de donnée, cineos.html correspond à la page pour l’attente des utilisateurs. config.xml sert à … .Index.php est la page d’accueil du site. loginin.php et loginout sont les pages pour se connecter aux comptes utilisateurs. Et Thumbs.db sert à … .

################################################################################
							Navigation sur le site
################################################################################

Sur l’ensemble de nos pages vous pouvez joindre les pages Accueil, Questionnaire, Liste de film, et connexion ou profil en fonction du fait que l’utilisateur soit inscrit et connecté ou non. 
Pour acceder à la fin du questionnaire il faut réaliser l’ensemble du questionnaire. 
Il est possible d’accéder à la page Fiche de film en cliquant sur n’importe quelle film sur le site, les lien sont disponible sur les pages Accueil, Profil, Liste de film, Fin du questionnaire. 
Pour pouvoir accéder à la page modification du profil il faut être connecté et passer par la page profil.

################################################################################
					Synchronisation de la base de donnée
################################################################################

Pour pouvoir synchroniser notre base de donnée sur un serveur phpMyAdmin il faut créer une base de donnée canins, puis importer le fichier cinappsXXX.sql disponible dans le fichier CinApps. Puis pour se connecter a la base il faut renseigner ses identifiants sur la page db.php qui se trouve dans le dossier lib, lui même dans le dossier CinApps. 