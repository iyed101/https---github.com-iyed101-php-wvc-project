<html>
    <head></head>
    <body>
        
        <form action="ajoutLocation_action.php" method="post">
            <label>nouveau Location</label>
            <table>
                <tr>
                    <td>Identifiant client</td>
                    <td><input type="text" name="idc"></td>
                </tr>
                <tr>
                    <td>Identifiant voiture</td>
                    <td><input type="text" name="idv"></td>
                </tr>
                <tr>
                    <td>Nombre de jour</td>
                    <td><input type="text" name="nbrJour"></td>
                </tr>
                <tr>
                    <td>Date de location</td>
                    <td><input type="text" name="dateLoc"></td>
                </tr>
                    <td><input type="submit" value="ajouter"></td>
                    <td><input type="reset" value="annuler"></td>
                </tr>
            </table>
        </form>
    </body>
    </html>