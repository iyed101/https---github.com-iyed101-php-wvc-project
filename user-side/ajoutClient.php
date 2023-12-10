<html>
    <head></head>
    <body>
        
        <form action="ajoutClient_action.php" method="post">
            <label>nouveau Client</label>
            <table>
                <tr>
                    <td>Num Cin</td>
                    <td><input type="text" name="cin"></td>
                </tr>
                <tr>
                    <td>Nom</td>
                    <td><input type="text" name="nom"></td>
                </tr>
                <tr>
                    <td>Prenom</td>
                    <td><input type="text" name="prenom"></td>
                </tr>
                <tr>
                    <td>Telephone</td>
                    <td><input type="text" name="tel"></td>
                </tr>
                    <td><input type="submit" value="ajouter"></td>
                    <td><input type="reset" value="annuler"></td>
                </tr>
            </table>
        </form>
    </body>
    </html>