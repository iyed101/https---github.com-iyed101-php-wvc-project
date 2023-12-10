<?php
require_once('../controllers/VoitureController.php');
require_once('../models/Voiture.php');
$voitctr=new Voiturecontrole();
$voiture=new Voiture();

$voiture->setnumSerie($_POST['serie']);
$voiture->setmarque($_POST['marque']);
$voiture->setcarburant($_POST['carburant']);
$voiture->setprixLocation($_POST['prixLocation']);
$voitctr->modifier_voit($voiture);
header('Location:index.php');

?>