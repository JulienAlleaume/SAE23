<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Ajout au Stock</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    require('db.php');
    if (isset($_REQUEST['Nom'])) {
        $Nom = stripslashes($_REQUEST['Nom']);
        $Nom = mysqli_real_escape_string($con, $Nom);
        $Nombre   = stripslashes($_REQUEST['Nombre']);
        $Nombre   = mysqli_real_escape_string($con, $Nombre);
        $Prix_unitaire = stripslashes($_REQUEST['Prix_unitaire']);
        $Prix_unitaire  = mysqli_real_escape_string($con, $Prix_unitaire);
        $Prix_total = stripslashes($_REQUEST['Prix_total']);
        $Prix_total = mysqli_real_escape_string($con, $Prix_total);
        $Description = stripslashes($_REQUEST['Description']);
        $Description = mysqli_real_escape_string($con, $Description);
        $Date_premiere = stripslashes($_REQUEST['Date_premiere']);
        $Date_premiere = mysqli_real_escape_string($con, $Date_premiere);
        $Date_derniere = stripslashes($_REQUEST['Date_derniere']);
        $Date_derniere = mysqli_real_escape_string($con, $Date_derniere);
        $query    = "INSERT INTO `BDD` (Nom, Nombre, Prix_unitaire, Prix_total, Description, Date_premiere, Date_derniere) VALUES ('$Nom', '$Nombre', '$Prix_unitaire', '$Prix_total','$Description','$Date_premiere','$Date_derniere')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>La requetes a été envoyé.</h3><br/>
                  <p class='link'> <a href='index.php'>Cliquer ici pour aller au stock</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Ce champ est requis.</h3><br/>
                  <p class='link'>Cliquer ici pour <a href='registration.php'>enregistrer</a></p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Ajout au stock</h1>
        <input type="text" class="login-input" name="Nom" placeholder="Nom" required />
        <input type="text" class="login-input" name="Nombre" placeholder="Nombre" required />
        <input type="text" class="login-input" name="Prix_unitaire" placeholder="Prix unitaire" required />
        <input type="text" class="login-input" name="Prix_total" placeholder="Prix total" required />
        <input type="text" class="login-input" name="Description" placeholder="Description" required />
        <input type="text" class="login-input" name="Date_premiere" placeholder="Date premiere fois" required />
        <input type="text" class="login-input" name="Date_derniere" placeholder="Date derniere fois" required />
        <input type="submit" name="submit" value="Enregistrer" class="login-button">
        <p class="link"><a href="index.php">Cliquer pour voir le stock</a></p>
    </form>
<?php
    }
?>
</body>
</html>