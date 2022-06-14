<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>S'authentifier</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) /* or die(mysql_error())*/; 
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: index.php");
        } else {
            echo "<div class='form'>
                  <h3>Nom utilisateur / Mot de passe incorrecte.</h3><br/>
                  <p class='link'>Cliquer ici pour <a href='login.php'>s'authentifier</a></p>
                  </div>";
        }
    } else {
?>
    <form class="form" method="post" name="login">
        <h1 class="login-title">S'authentifer</h1>
        <input type="text" class="login-input" name="username" placeholder="Nom utilisateur" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Mot de passe"/>
        <input type="submit" value="S'authenfier" name="submit" class="login-button"/>
        <p class="link"><a href="registration.php">Crée un compte</a></p>
  </form>
<?php
    }
?>
</body>
</html>