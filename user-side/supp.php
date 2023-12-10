<?php 
require_once('../controllers/ClientController.php');
$clt= new Clientcontrole();
$clt->delete($_GET['id']);
header('Location:index.php');
?>