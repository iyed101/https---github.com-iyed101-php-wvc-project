<?php
require_once('../controllers/LocationController.php');
require_once('../models/Location.php');
$loctr=new Locationcontrole();
$location=new Location();
$location->setidClient($_POST['idc']);
$location->setidVoiture($_POST['idv']);
$location->setnbrJour($_POST['nbrJour']);
$location->setdateLoc($_POST['dateloc']);
$location->setidlocat($_POST['idloc']);
$loctr-> modifier_loc($location);
header('Location:index.php');

?>