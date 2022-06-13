<?php
    //Démarrage d'une session:
    session_start();
     
    //Récupération des variables du formulaire:
    $_SESSION['Nom'] = $_POST['Nom'];
    $Nom = $_POST['Nom'];
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
            <h3>Nom : <?php echo $_SESSION['Nom']; ?></h3>
            <p>
                Inventaire. <br />
                Pour effectuer une autre recherche: <a 
href="inventaire.php" title="Effectuons une nouvelle recherche."> 
Cliquez-ici! </a>
            </p>
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
                <?php
                 
                    //Connexion à la base de données:
                    try {
                        $opt_options[PDO::ATTR_ERRMODE] = 
PDO::ERRMODE_EXCEPTION;
                        $dbh = new PDO('mysql:host=localhost; 
dbname=db_ALLEAUME', '22100123', 'Julien', $opt_options);
                    }
                    catch(Exception $e){
                        echo '<p>Erreur de connexion à la base de 
données. Veuillez vérifier les paramètres de connexion.</p>';
                        die('Erreur: '.$e->getMessage());
                    }
                     
                    if(isset($Nom) && !empty($Nom)){
                                         
                        $req = $dbh->prepare('SELECT id, Nom, Nombre, 
Prix_unitaire, Prix_total, Description, Date_premiere, Date_derniere FROM BDD WHERE Nom = 
:Nom');
                         
                        $req->execute(array(
                            'Nom' => $Nom
                        ));     
                 
                        while ($donnees = $req->fetch()) {
                            echo '
                                <tr>
                                    <td>'.$donnees['id'].'</td>
                                    <td>'.$donnees['Nom'].'</td>
                                    <td>'.$donnees['Nombre'].'</td>
                                    <td>'.$donnees['Prix_unitaire'].'</td>
                                    <td>'.$donnees['Prix_total'].'</td>
                                    <td>'.$donnees['Description'].'</td>
                                    <td>'.$donnees['Date_premiere'].'</td>
                                    <td>'.$donnees['Date_derniere'].'</td>
                                </tr>
                            ';
                        }
                 
                        $req->closeCursor();
                    }
                    else{
                        echo '
                            <tr>
                                <td colspan="7" width="100%"><p>Veuillez 
définir un nom</p></td>
                            </tr>
                        ';
                    }
                ?>
            </table>     
        </content>
         
    </body>
</html>
