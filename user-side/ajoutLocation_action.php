<?php
include_once("../models/Location.php");
include_once("../controllers/LocationController.php");
    $idc=$_POST['idc'];
    $idv=$_POST['idv'];
    $nbrJour=$_POST['nbrJour'];
    $dateLoc=$_POST['dateLoc'];
    $location= new Location($idc,$idv,$nbrJour,$dateLoc);
    $clt= new Locationcontrole();
    $res=$clt->insert($location);
    if($res==true){
        echo "<script>alert('valide!!')</script>";
        header("Refresh:0;url=index.php");
    }
    
?>