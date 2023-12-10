<?php
require_once('../controllers/LocationController.php');
$loctr=new Locationcontrole();
$rslt=$loctr->getLocation($_GET['idloc']);
?>
<form name = 'f3' method='post' action='modificationloc.php'>
<table border='1'>
<tr>
<td>Identifiant</td>
<td><input type = "text" name = "idloc" readonly="readonly" value = "<?php echo $rslt[0] ?>"/></td></tr>
<tr>
<td>Identifiant client</td>
<td><input type = "text" name = "idc" value = "<?php echo $rslt[1] ?>"/></td></tr>
<tr>
<td>Identifiant voiture</td>
<td><input type = "text" name = "idv" value = "<?php echo $rslt[2] ?>"/></td></tr>
<tr><td>Nombre de jour</td>
<td><input type = "text" name = "nbrJour" value = "<?php echo $rslt[3] ?>"/></td></tr>
<tr>
<td>Date de location</td>
<td><input type = "text" name = "dateloc" value = "<?php echo $rslt[4] ?>"/></td></tr>
<tr><td><input type = "submit" value= "modifier" name = "mod"/></td></tr>
</table></form>	