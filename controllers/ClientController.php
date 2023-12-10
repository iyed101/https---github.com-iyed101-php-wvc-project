<?php
include_once('../models/Client.php');
include_once('../database/model.php');
class Clientcontrole extends Modele{
    private $idClient,$ncin,$nom,$prenom,$telephone;
    function __construct(){
parent::__construct();
}
    function insert(Client $c){
    $query="insert into client(ncin,nom,prenom,telephone)values (?, ?, ?, ?)";
$res=$this->pdo->prepare($query);
$tab= array($c->getNcin(),$c->getNom(),$c->getPrenom(),$c->getTel());
return $res->execute($tab);
}  
function delete($idClient) {
    $query = "delete from client where idClient=?";
    $res=$this->pdo->prepare($query);
return $res->execute(array($idClient));
}
function liste(){
$query = "select * from client";
$res=$this->pdo->prepare($query);
$res->execute();
return $res;
}
function getClient($id){
    $query="SELECT * FROM client WHERE idClient = ? ";
    $res = $this->pdo->prepare($query);
    $res->execute(array($id));
    $array= $res->fetch();
    return $array;
}
function modifier_user(Client $c)
{
$sql = "UPDATE client SET  nom=?, prenom=?,telephone=? WHERE ncin=?";
$stmt= $this->pdo->prepare($sql);
return $stmt->execute(array($c->getNom(),$c->getPrenom(),$c->getTel(),$c->getNcin()));
}
}?>