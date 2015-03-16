<?php
try{
/*$db = new PDO('mysql:host=localhost;dbname=cinapps', 'root', '');*/
// $db = new PDO('mysql:host=sqletud.univ-mlv.fr;dbname=qgiraud_db', 'qgiraud', '140294');
$user = 'root';
$password = 'root';
$db = 'inventory';
$host = 'localhost';
$port = 8889;

$link = mysql_connect(
   "$host:$port", 
   $user, 
   $password
);
$db_selected = mysql_select_db(
   $db, 
   $link
);

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
$db->exec("SET CHARACTER SET utf8");
}
catch(Exception $e){
	echo 'Impossible de se connecter à la base de données';
	echo $e->getMessage();
	die();
}
?>