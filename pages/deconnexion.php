<?php
session_start();
session_unset();
session_destroy();

$auth = 0;
include '../lib/include.php';
header('Location:' . WEBROOT . 'index.php');
exit();

$title_page='';
$adr='';
include '../partials/header.php'; 


?>