<?php  
class Voiture{
    private $numSerie,$marque,$carburant,$prixLocation;
    function __construct($numSerie='',$marque='',$carburant='',$prixLocation=''){
        $this->numSerie=$numSerie;
        $this->marque=$marque;
        $this->carburant=$carburant;
        $this->prixLocation=$prixLocation;
    }
    public function getnumSerie(){
        return $this->numSerie;
    }
    public function getmarque(){
        return $this->marque;
    }
    public function getcarburant(){
        return $this->carburant;
    }
    public function getprixLocation(){
        return $this->prixLocation;
    }
    public function setnumSerie($numSerie){
        $this->numSerie=$numSerie;
    }
    public function setmarque($marque){
        $this->marque=$marque;
    }
    public function setcarburant($carburant){
        $this->carburant=$carburant;
    }
    public function setprixLocation($prixLocation){
        $this->prixLocation=$prixLocation;
    }
}
?>