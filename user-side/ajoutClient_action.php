<?php
include_once("../models/Client.php");
include_once("../controllers/ClientController.php");
    $cin=$_POST['cin'];
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $tel=$_POST['tel'];
    $client= new Client($cin,$nom,$prenom,$tel);
    $clt= new Clientcontrole();
    $res=$clt->insert($client);
    if($res==true){
        echo "<script>alert('valide!!')</script>";
        header("Refresh:0;url=index.php");
    }
    
?>