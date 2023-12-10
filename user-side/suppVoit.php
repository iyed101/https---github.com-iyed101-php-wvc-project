<?php 
require_once('../controllers/VoitureController.php');
$vtr= new Voiturecontrole();
$vtr->delete($_GET['idvot']);
header('Location:index.php');
?>