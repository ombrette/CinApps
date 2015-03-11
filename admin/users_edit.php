<?php
include '../lib/include.php';

if (isset($_POST['titre']) && isset($_POST['slug'])){
	checkCsrf();
	$slug = $_POST['slug'];
	if (preg_match('/^[a-z\0-9]+$/', $slug)) {
		$login = $db->quote($_POST['login']);
		$mdp = $db->quote($_POST['mdp']);
		$nom = $db->quote($_POST['nom']);
		$prenom = $db->quote($_POST['prenom']);
		$ddn = $db->quote($_POST['ddn']);
		$avatar = $db->quote($_POST['avatar']);
		$slug = $db->quote($_POST['slug']);

		if (isset($_GET['id'])) {
			$id = $db->quote($_GET['id']);
			$db->query("UPDATE film SET titre=$titre, slug=$slug, code = $code, date = $date, synopsis = $synopsis, synopsisCourt = $synopsisCourt, realisateur = $realisateur, acteur = $acteur, duree = $duree, note = $note, trailer = $trailer, affiche = $affiche WHERE id=$id");	
		}else{
			$db->query("INSERT INTO film SET titre=$titre, slug=$slug, code = $code, date = $date, synopsis = $synopsis, synopsisCourt = $synopsisCourt, realisateur = $realisateur, acteur = $acteur, duree = $duree, note = $note, trailer = $trailer, affiche = $affiche");	
		}
		setFlash('Le film a bien été ajoutée!');  
		header('Location:film.php');
		die();
	}else{
		setFlash('Le slug n\'est pas valide', 'danger');
	}
}

if (isset($_GET['id'])) {
	$id = $db->quote($_GET['id']);
	$select = $db->query("SELECT * FROM film WHERE id=$id");
	if ($select->rowCount() == 0) {
		setFlash("Il n'y a pas de film avec cet ID", 'danger');
		header('Location:film.php');
		die();
	}
	$_POST = $select->fetch();
}

include '../partials/admin_header.php';
?>

<h1>Editer un film</h1>

<form action="#" method="post">
	<div class="form-group">
		<label for="titre">Titre du film </label>
		<?= input('titre'); ?>
	</div>
	<div class="form-group">
		<label for="slug">URL de la catégorie</label>
		<?= input('slug'); ?>
	</div>
	<div class="form-group">
		<label for="slug">URL de la catégorie</label>
		<?= input('slug'); ?>
	</div>
	<div class="form-group">
		<label for="slug">URL de la catégorie</label>
		<?= input('slug'); ?>
	</div>
	<div class="form-group">
		<label for="slug">URL de la catégorie</label>
		<?= input('slug'); ?>
	</div>
	<?= csrfInput(); ?>
	<button type="submit" class="btn btn-default">Enregistrer</button>
</form>


<?php include '../partials/footer.php'; ?>