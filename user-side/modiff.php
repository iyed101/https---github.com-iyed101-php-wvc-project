<?php
require_once('../controllers/ClientController.php');
$clientCtr=new Clientcontrole();
$res=$clientCtr->getClient($_GET['id']);
?>
<form name = 'f1' method='post' action='modification.php'>
<table border='1'>
<tr>
<td>id</td>
<td><input type = "text" name = "id" readonly="readonly" value = "<?php echo $res[0] ?>"/></td></tr>
<tr>
<td>Numéro cin</td>
<td><input type = "text" name = "ncin" value = "<?php echo $res[1] ?>"/></td></tr>
<tr>
<td>Nom</td>
<td><input type = "text" name = "nom" value = "<?php echo $res[2] ?>"/></td></tr>
<tr><td>Prenom</td>
<td><input type = "text" name = "prenom" value = "<?php echo $res[3] ?>"/></td></tr>
<tr>
<td>Telephone</td>
<td><input type = "text" name = "tel" value = "<?php echo $res[4] ?>"/></td></tr>
<tr><td><input type = "submit" value= "modifier" name = "mod"/></td></tr>
</table></form>	