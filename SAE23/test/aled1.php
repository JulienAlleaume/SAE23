<!DOCTYPE html>
<html>
<head>Afficher la table users</head>
<body>
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
 </table>
</body>
</html>
