<?php
include '../lib/include.php';
$title_page = "Backo-Films";
include '../partials/admin_header.php';

//suppression

if(isset($_GET['delete'])){
	checkCsrf();
	$id = $db->quote($_GET['delete']);
	$db->query("DELETE FROM film WHERE id=$id");
	setFlash('Le film a bien été supprimé');
	header('Location:film.php');
	die();
}

//categories

$select = $db->query('SELECT * FROM film');
$films = $select->fetchAll();

?>

<h1>Les catégories</h1>

<p><a href="film_edit.php" class="btn btn-success" title="">Ajouter un nouveau film</a></p>

<table class="table table-stripped">
	<thead>
		<tr>
			<th>Id</th>
			<th>Titre</th>
			<th>Code Allociné</th>
			<th>Date</th>
			<th>Note</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>
        <?php foreach($films as $film): ?>
		<tr>
			<td><?= $film['id']; ?></td>
			<td><?= $film['titre']; ?></td>
			<td><?= $film['code']; ?></td>
			<td><?= $film['date']; ?></td>
			<td><?= $film['note']; ?></td>
			<td>
				<a href="film_edit.php?id=<?= $film['id']; ?>" class="btn btn-default" title="">Editer</a>
				<a href="?delete=<?= $film['id']; ?>&<?= csrf(); ?>" class="btn btn-error" onclick="return confirm('Etes-vous sûr ?');">Supprimer</a>
			</td>
		</tr>
        <?php endforeach ?>
	</tbody>

</table>


<?php include '../partials/footer.php'; ?>