<?php
try{
$db = new PDO('mysql:host=sqletud.univ-mlv.fr;dbname=qgiraud_db', 'qgiraud', '140294');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch(Exception $e){
	echo 'Impossible de se connecter à la base de données';
	echo $e->getMessage();
	die();
}
?>