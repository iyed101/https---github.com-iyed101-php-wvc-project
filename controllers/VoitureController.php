<?php
include_once('../models/Voiture.php');
include_once('../database/model.php');
class Voiturecontrole extends Modele{
    private $idVoiture,$numSerie,$marque,$carburant,$prixLocation;
    function  __construct(){
        parent::__construct();
    }
    function insert(Voiture $v){
    $query="insert into voiture(numSerie,marque,carburant,prixLocation) values (?, ?, ?, ?)";
    $res=$this->pdo->prepare($query);
    $tab=array($v->getnumSerie(),$v->getmarque(),$v->getcarburant(),$v->getprixLocation());
    return $res->execute($tab);
}
function delete($idVoiture){
    $query="delete from voiture where idVoiture=?";
    $res=$this->pdo->prepare($query);
    return $res->execute(array($idVoiture));
}
function liste(){
    $query="select * from voiture"; 
    $res=$this->pdo->prepare($query);
    $res->execute();
    return $res;
}
function getVoiture($idVoiture){
    $query="select * from voiture where idVoiture=?";
    $res=$this->pdo->prepare($query);
    $res->execute(array($idVoiture));
    $array=$res->fetch();
    return $array;
}
function modifier_voit(Voiture $v){
    $query="update voiture set marque=?,carburant=?,prixLocation=? where numSerie=?";
    $res=$this->pdo->prepare($query);
    return $res->execute(array($v->getmarque(),$v->getcarburant(),$v->getprixLocation(),$v->getnumSerie()));
}
}

?>