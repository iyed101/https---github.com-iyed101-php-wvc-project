<?php
include_once("../models/Voiture.php");
include_once("../controllers/VoitureController.php");
$serie=$_POST['serie'];
$marque=$_POST['marque'];
$carburant=$_POST['carburant'];
$prixLocation=$_POST['prixLocation'];
$voiture= new Voiture($serie,$marque,$carburant,$prixLocation);
$voitctr= new Voiturecontrole();
$reslt=$voitctr->insert($voiture);
if($reslt==true){
    echo "<script>alert('valide!!')</script>";
    header("Refresh:0;url=index.php");
}
?>