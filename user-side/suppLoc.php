<?php 
require_once('../controllers/LocationController.php');
$clt= new Locationcontrole();
$clt->delete($_GET['idloc']);
header('Location:index.php');
?>