<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - BDD</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="form">
        <p>Bonjour, <?php echo $_SESSION['username']; ?> !</p>
        <p>Vous êtes sur la page de gestion de la BDD.</p>
    

        <p>Banquise De Données</p>
		
		
	
  <script>
      <?php
      $host = 'localhost';
      $dbname = 'db_ALLEAUME';
      $username = '22100123';
      $password = 'Julien';
        
      $dsn = "mysql:host=$host;dbname=$dbname"; 
      // récupérer tous les utilisateurs
      $sql = "SELECT * FROM users";
      
      try{
      $pdo = new PDO($dsn, $username, $password);
      $stmt = $pdo->query($sql);
      
      if($stmt === false){
        die("Erreur");
      }
      
      }catch (PDOException $e){
        echo $e->getMessage();
      }
      ?>
    </script>
 <h1>Liste des utilisateurs</h1>
 <table>
   <thead>
     <tr>
       <th>ID</th>
       <th>Username</th>
       <th>Email</th>
       <th>Password</th>
       <th>Create_datetime</th>
     </tr>
   </thead>
   <tbody>
     <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
     <tr>
       <td><?php echo htmlspecialchars($row['id']); ?></td>
       <td><?php echo htmlspecialchars($row['username']); ?></td>
       <td><?php echo htmlspecialchars($row['email']); ?></td>
       <td><?php echo htmlspecialchars($row['password']); ?></td>
       <td><?php echo htmlspecialchars($row['create_datetime']); ?></td>
     </tr>
     <?php endwhile; ?>
   </tbody>
        

        <p><a href="logout.php">Logout</a></p>
    </div>
</body>
</html>