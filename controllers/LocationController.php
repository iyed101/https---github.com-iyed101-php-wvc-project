<?php
include_once('../models/Location.php');
include_once('../database/model.php');
class Locationcontrole extends Modele{
    private $idLocat,$idClient,$idVoiture,$nbrJour,$dateLoc;
    function __construct(){
parent::__construct();
}
function insert(Location $l){
    $query="insert into location(idClient,idVoiture,nbrJour,dateLoc)values (?, ?, ?, ?)";
    $res=$this->pdo->prepare($query);
    $tab= array($l->getidClient(),$l->getidVoiture(),$l->getnbrJour(),$l->getdateLoc());
    return $res->execute($tab);
}  
function delete($idLocat) {
    $query = "delete from location where idLocat=?";
    $res=$this->pdo->prepare($query);
return $res->execute(array($idLocat));
}
function liste(){
$query = "select * from location";
$res=$this->pdo->prepare($query);
$res->execute();
return $res;
}
function getLocation($id){
    $query="select * from location where idLocat = ? ";
    $res = $this->pdo->prepare($query);
    $res->execute(array($id));
    $array= $res->fetch();
    return $array;
}
function modifier_loc(Location $l)
{
$sql = "update location set  idClient=?, idVoiture=?,nbrJour=?,dateLoc=? where idLocat=?";
$stmt= $this->pdo->prepare($sql);
return $stmt->execute(array($l->getidClient(),$l->getidVoiture(),$l->getnbrJour(),$l->getdateLoc(),$l->getidLocat()));
}
}?>