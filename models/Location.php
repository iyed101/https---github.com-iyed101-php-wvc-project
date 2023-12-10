<?php
class Location{
    private $idLocat,$idClient,$idVoiture,$nbrJour,$dateLoc;
    function __construct($idClient='',$idVoiture='',$nbrJour='',$dateLoc=''){
        $this->idClient=$idClient;
        $this->idVoiture=$idVoiture;
        $this->nbrJour=$nbrJour;
        $this->dateLoc=$dateLoc;
    }
    public function getidClient(){
        return $this->idClient;
    }
    public function getidVoiture(){
        return $this->idVoiture;
    }
    public function getnbrJour(){
        return $this->nbrJour;
    }
    public function getdateLoc(){
        return $this->dateLoc;
    }
    public function setidClient($idClient){
        $this->idClient=$idClient;
    }
    public function setidVoiture($idVoiture){
        $this->idVoiture=$idVoiture;
    }
    public function setnbrJour($nbrJour){
        $this->nbrJour=$nbrJour;
    }
    public function setdateLoc($dateLoc){
        $this->dateLoc=$dateLoc;
    }
    public function getidLocat(){
        return $this->idLocat;
    } 
    public function setidlocat($idLocat){
        $this->idLocat=$idLocat;
    }
}

?>