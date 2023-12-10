<?php
require_once('../controllers/VoitureController.php');
$voitctr=new voiturecontrole();
$rslt=$voitctr->getVoiture($_GET['idvot']);
?>
<form name = 'f2' method='post' action='modificationvoit.php'>
<table border='1'>
<tr>
<td>Identifiant</td>
<td><input type = "text" name = "Identifiant" readonly="readonly" value = "<?php echo $rslt[0] ?>"/></td></tr>
<tr>
<td>Numero serie</td>
<td><input type = "text" name = "serie" value = "<?php echo $rslt[1] ?>"/></td></tr>
<tr>
<td>Marque</td>
<td><input type = "text" name = "marque" value = "<?php echo $rslt[2] ?>"/></td></tr>
<tr><td>Carburant</td>
<td><input type = "text" name = "carburant" value = "<?php echo $rslt[3] ?>"/></td></tr>
<tr>
<td>Prix de location</td>
<td><input type = "text" name = "prixLocation" value = "<?php echo $rslt[4] ?>"/></td></tr>
<tr><td><input type = "submit" value= "modifier" name = "mod"/></td></tr>
</table></form>	