<?php
include_once("../controllers/ClientController.php");
include_once("../controllers/VoitureController.php");
include_once("../controllers/LocationController.php");
$c= new Clientcontrole();
$v= new Voiturecontrole();
$l=new Locationcontrole();
$res=$c->liste();
$res2=$v->liste();
$res3=$l->liste();
?>
<html>
    <head></head>
    <body>
            <h3  >Liste des clients</h3>
            <table border=1>
                <tr>
                    <td>Identifiant</td>
                    <td>Numero CIN</td>
                    <td>Nom</td>
                    <td>Prenom</td>
                    <td>Telephone</td>
                    <td>Supprimer</td>
                    <td>Modifier</td>
                </tr>
                <?php
                    while($l=$res->fetch()){
                        echo"<tr>
                        <td>$l[0]</td>
                        <td>$l[1]</td>
                        <td>$l[2]</td>
                        <td>$l[3]</td>
                        <td>$l[4]</td>
                        <td><a href='supp.php?id=$l[0]'>Supprimer</a></td> 
                        <td><a href ='modiff.php?id=$l[0]'>Modifier</a></td>
                        </tr>";
                    }
                ?>
                
            </table>
            <tr><a href="ajoutClient.php">ajouter client </a></tr>
            <p>---------------------------------------------------------------------------------------------</p>
            <h3>Liste des voitures</h3>
            <table border=1>
                <tr>
                    <td>Identifiant</td>
                    <td>Numero serie</td>
                    <td>Marque</td>
                    <td>Carburant</td>
                    <td>Prix de location</td>
                    <td>Supprimer</td>
                    <td>Modifier</td>
                </tr>
                <?php
                    while($l2=$res2->fetch()){
                        echo"<tr>
                        <td>$l2[0]</td>
                        <td>$l2[1]</td>
                        <td>$l2[2]</td>
                        <td>$l2[3]</td>
                        <td>$l2[4]</td>
                        <td><a href='suppVoit.php?idvot=$l2[0]'>Supprimer</a></td>
                        <td><a href='modiffVoit.php?idvot=$l2[0]'>Modifier</a></td>
                        </tr>";
                    }
                ?>
                
            </table>
            <tr><a href="ajoutVoiture.php">ajouter voiture </a></tr>
            <p>---------------------------------------------------------------------------------------------</p>
            <h3>Liste des locations</h3>
            <table border=1>
                <tr>
                    <td>Identifiant</td>
                    <td>Identifiant client</td>
                    <td>Identifiant voiture</td>
                    <td>Nombre de jour</td>
                    <td>Date de location</td>
                    <td>Supprimer</td>
                    <td>Modifier</td>
                </tr>
                <?php
                    while($l3=$res3->fetch()){
                        echo"<tr>
                        <td>$l3[0]</td>
                        <td>$l3[1]</td>
                        <td>$l3[2]</td>
                        <td>$l3[3]</td>
                        <td>$l3[4]</td>
                        <td><a href='suppLoc.php?idloc=$l3[0]'>Supprimer</a></td>
                        <td><a href='modiffLoc.php?idloc=$l3[0]'>Modifier</a></td>
                        </tr>";
                    }
                ?>
                
            </table>
            <tr><a href="ajoutLocation.php">ajouter location </a></tr>
    </body>
</html>