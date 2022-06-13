<?php
    //Démarrage d'une session:
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8"/>
        <title>PHP | Inventaire</title>
        <link rel="stylesheet" href="css/style_inventaire.css" 
type="text/css" />
    </head>
     
    <body>
        <header>
            <h1>PHP | Inventaire</h1>
        </header>
        <aside>
             
        </aside>
        <content>
            <form method="post" action="afficher_inventaire.php" 
id="frm_inventaire">
                <label for="Nom">Nom :  </label>
                <input type="text" name="Nom" id="Nom" />
                <input type="submit" value="Afficher"/>
            </form>
            <hr>
            <table cellspacing="0" cellpadding="7">
                <tr>
                    <th>id</th>
                    <th>Nom</th>
                    <th>Nombre</th>
                    <th>Prix_unitaire</th>
                    <th>Prix_total</th>
                    <th>Description</th>
                    <th>Date_premiere</th>
                    <th>Date_derniere</th>
                </tr>
                <tr>
                    <td colspan="7"></td>
                </tr>
            </table>     
        </content>
         
    </body>
</html>
