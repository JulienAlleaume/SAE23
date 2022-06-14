<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    require('db.php');
    if (isset($_REQUEST['username'])) {
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>Compte bien crée.</h3><br/>
                  <p class='link'>Cliquer ici pour <a href='login.php'>s'authentifier</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>RLe champs est requis.</h3><br/>
                  <p class='link'>Cliquer ici pour <a href='registration.php'>s'enregistrer</a></p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="username" placeholder="Nom utilisateur" required />
        <input type="text" class="login-input" name="email" placeholder="Adresse mail">
        <input type="password" class="login-input" name="password" placeholder="Mot de passe">
        <input type="submit" name="submit" value="Enregistrer" class="login-button">
        <p class="link"><a href="login.php">Cliquer pour s'enregistrer</a></p>
    </form>
<?php
    }
?>
</body>
</html>

