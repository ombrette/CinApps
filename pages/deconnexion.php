<?php
$auth = 0;
include '../lib/include.php';
$title_page='';
$adr='';
include '../partials/header.php'; 

session_start();
session_unset();
session_destroy();
header('Location:' . WEBROOT . 'index.php');
exit();
?>