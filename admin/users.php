<?php
include '../lib/include.php';
$title_page = "Backo-Utilisateurs";
include '../partials/admin_header.php';

//suppression

if(isset($_GET['delete'])){
	checkCsrf();
	$id = $db->quote($_GET['delete']);
	$db->query("DELETE FROM profil WHERE id=$id");
	setFlash('L\'utilisateur a bien été supprimé');
	header('Location:users.php');
	die();
}

//users

$select = $db->query('SELECT * FROM profil');
$users = $select->fetchAll();

?>

<h1>Les utilisateurs</h1>

<p><a href="users_edit.php" class="btn btn-success" title="">Ajouter un utilisateur</a></p>

<table class="table table-stripped">
	<thead>
		<tr>
			<th>Id</th>
			<th>Nom</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>
        <?php foreach($users as $user): ?>
		<tr>
			<td><?= $user['id']; ?></td>
			<td><?= $user['nom']; ?></td>
			<td>
				<a href="users_edit.php?id=<?= $user['id']; ?>" class="btn btn-default" title="">Editer</a>
				<a href="?delete=<?= $user['id']; ?>&<?= csrf(); ?>" class="btn btn-error" onclick="return confirm('Etes-vous sûr ?');">Supprimer</a>
			</td>
		</tr>
        <?php endforeach ?>
	</tbody>

</table>


<?php include '../partials/footer.php'; ?>