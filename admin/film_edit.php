<?php
include '../lib/include.php';


/*SAUVEGARDE*/

if (isset($_POST['titr']) && isset($_POST['slug'])){
	checkCsrf();
	$slug = $_POST['slug'];
	if (preg_match('/^[a-z\0-9]+$/', $slug)) {
		$titre = $db->quote($_POST['titre']);
		$slug = $db->quote($_POST['slug']);
		$code = $db->quote($_POST['code']);
		$date = $db->quote($_POST['date']);
		$synopsis = $db->quote($_POST['synopsis']);
		$synopsisCourt = $db->quote($_POST['synopsisCourt']);
		$realisateur = $db->quote($_POST['realisateur']);
		$acteur = $db->quote($_POST['acteur']);
		$duree = $db->quote($_POST['duree']);
		$note = $db->quote($_POST['note']);
		$trailer = $db->quote($_POST['trailer']);
		$affiche = $db->quote($_POST['affiche']);

		/*SAUVEGARDE DE LA REALISATION*/

		if (isset($_GET['id'])) {
			$id = $db->quote($_GET['id']);
			$db->query("UPDATE film SET titre=$titre, slug=$slug, code = $code, date = $date, synopsis = $synopsis, synopsisCourt = $synopsisCourt, realisateur = $realisateur, acteur = $acteur, duree = $duree, note = $note, trailer = $trailer, affiche = $affiche WHERE id=$id");	
		}else{
			$db->query("INSERT INTO film SET titre=$titre, slug=$slug, code = $code, date = $date, synopsis = $synopsis, synopsisCourt = $synopsisCourt, realisateur = $realisateur, acteur = $acteur, duree = $duree, note = $note, trailer = $trailer, affiche = $affiche");
			$_GET['id']	= $db->lastInsertId();
		}
		setFlash('Le film a bien été ajouté!'); 


		/*ENVOI DES IMAGES*/
		
		$work_id =  $db->quote($_GET['id']);
		$files = $_FILES['images'];
		$images = array();
		require '../lib/image.php';
		foreach($files['tmp_nom'] as $k => $v){
			$image = array(
				'nom' => $files['nom'][$k],
				'tmp_nom' => $files['tmp_nom'][$k]
			);
			$extension = pathinfo($image['nom'], PATHINFO_EXTENSION);
			if(in_array($extension, array('jpg','png'))){
				$db->query("INSERT INTO images SET work_id=$work_id");
				$image_id = $db->lastInsertId();
				$image_nom = $image_id . '.' . $extension;
				move_uploaded_file($image['tmp_nom'], IMAGES . '/users/' . $image_nom);
				resizeImage(IMAGES . '/users/' . $image_nom, 150, 150);
				$image_nom = $db->quote($image_nom);
				$db->query("UPDATE images SET nom=$image_nom WHERE id = $image_id");
			}
		}
		
		header('Location:work.php');
		die();

	}else{
		setFlash('Le slug n\'est pas valide', 'danger');
	}
}


/*RECUPERATION REALISATION*/

if (isset($_GET['id'])) {
	$id = $db->quote($_GET['id']);
	$select = $db->query("SELECT * FROM profil WHERE id=$id"); 
	if ($select->rowCount() == 0) {
		setFlash("Il n'y a pas de réalisation avec cet ID", 'danger');
		header('Location:work.php');
		die();
	}
	$_POST = $select->fetch();
}


/*SUPPRESSION IMAGE*/
if (isset($_GET['delete_image'])) {
	checkCsrf();
	$id = $db->quote($_GET['delete_image']);
	$select = $db->query("SELECT nom, work_id FROM images WHERE id=$id");
	$image = $select->fetch();
	var_dump($image['nom']);
	$images = glob(IMAGES . '/users/' . pathinfo($image['nom'], PATHINFO_FILEnom) . '_*x*.*');
	if (is_array($images)) {
		foreach ($images as $v) {
			unlink($v);
		}
	}
	unlink(IMAGES . '/users/' . $image['nom']);
	$db->query("DELETE FROM images WHERE id=$id");
	setFlash("L'image a bien été supprimée");
	header('Location:work_edit.php?id=' . $image['work_id']);
	die();
}


/*RECUPERATION LISTE CATEGORIES*/

$select = $db->query("SELECT id, nom FROM categories ORDER BY nom ASC");
$categories = $select->fetchAll();
$categories_list = array();
foreach ($categories as $category) {
	$categories_list[$category['id']] = $category['nom'];
}


/*RECUPERATION IMAGES*/
if (isset($_GET['id'])) {
	$work_id = $db->quote($_GET['id']);
	$select = $db->query("SELECT id, nom FROM images WHERE work_id=$work_id");
	$images = $select->fetchAll();
}else{
	$images = array();
}

include '../partials/admin_header.php';
?>

<h1>Editer une réalisation</h1>

<div class="row">
	<form action="#" method="post" enctype="multipart/form-data">
		<div class="col-sm-8">
			<div class="form-group">
				<label for="nom">Nom de la réalisation</label>
				<?= input('nom'); ?>
			</div>
			<div class="form-group">
				<label for="slug">URL de la réalisation</label>
				<?= input('slug'); ?>
			</div>
			<div class="form-group">
				<label for="content">Contenu de la réalisation</label>
				<?= textarea('content'); ?>
			</div>
			<div class="form-group">
				<label for="category_id">Nom de la catégorie</label>
				<?= select('category_id', $categories_list); ?>
			</div>
			<?= csrfInput(); ?>
			<button type="submit" class="btn btn-default">Enregistrer</button>
		</div>

		<div class="col-sm-4">
			<?php foreach ($images as $k => $image): ?>
				<a href="?delete_image=<?= $image['id']; ?>&<?= csrf(); ?>" onclick="return confirm('Etes-vous sûr ?');" title=""><img src="<?= WEBROOT; ?>img/users/<?= $image['nom']; ?>" alt="" width="100"></a>
			<?php endforeach ?>

			<div class="form-group">
				<input type="file" nom="images[]">
				<input type="file" nom="images[]" class="hidden" id="duplicate">
				<p>
					<a href="#" class="btn btn-success" id="duplicatebtn">Ajouter une image</a>
				</p>
			</div> 
		</div>
	</form>
</div>








 <?php ob_start(); ?>
<script src="<?= WEBROOT; ?>js/tinymce/tinymce.min.js"></script>
<script>
(function($){
	$('#duplicatebtn').click(function(e) {
		e.preventDefault();
		var $clone = $('#duplicate').clone().attr('id', '').removeClass('hidden');
		$('#duplicate').before($clone);
	});
})(jQuery);
tinyMCE.init({
        // General options
        mode : "textareas",
});
</script>
<?php $script = ob_get_clean(); ?>

<?php include '../partials/footer.php'; ?>