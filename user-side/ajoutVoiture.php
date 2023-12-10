<html>
    <head></head>
    <body>
        
        <form action="ajoutVoiture_action.php" method="post">
            <label>nouveau Voiture</label>
            <table>
                <tr>
                    <td>Numero serie</td>
                    <td><input type="text" name="serie"></td>
                </tr>
                <tr>
                    <td>Marque</td>
                    <td><input type="text" name="marque"></td>
                </tr>
                <tr>
                    <td>Carburant</td>
                    <td><input type="text" name="carburant"></td>
                </tr>
                <tr>
                    <td>Prix de location</td>
                    <td><input type="text" name="prixLocation"></td>
                </tr>
                    <td><input type="submit" value="ajouter"></td>
                    <td><input type="reset" value="annuler"></td>
                </tr>
            </table>
        </form>
    </body>
    </html>