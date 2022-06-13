<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Dashboard Inventaire - BDD</title>
	<link rel="stylesheet" href="style.css" />
</head>

<body>
	<div class="form">
		<p>Bonjour, <?php echo $_SESSION['username']; ?> !</p>
		<p>Vous êtes sur la page de gestion de l'inventaire.</p>

		/* Affiche la base de données de l'inventaire BDD */
		<p>Banquise De Données</p>
		<?php
		$mysqli = new mysqli("localhost", "22100123", "Julien", "db_ALLEAUME");
		$mysqli->set_charset("utf8");
		$requete = "SELECT * FROM BDD";
		$resultat = $mysqli->query($requete);
		while ($ligne = $resultat->fetch_assoc()) {
			echo $ligne['id'] . ' ' . $ligne['Nom'] . ' ' . $ligne['Nombre'] . ' ' . $ligne['Prix_unitaire'] . ' ' . $ligne['Prix_total'] . ' ' . $ligne['Description'] . ' ' . $ligne['Date_premiere'] . ' ' . $ligne['Date_derniere'] . ' ' . '<br>';
		}

		?>


		<?php
		// Afficher De    
		function Tableau($mysqli)
		{
			try {
				$req = $mysqli->prepare("SELECT * FROM BDD");
				$req->execute();
				return $req;
			} 
			catch (Exception $e) {
				die(print("Erreur : " . $e->getMessage()));
			}
		}

		
		



		$req = Tableau($mysqli);
		?>

		<table border="1" cellpadding="8">
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

			while (($donnees = $req->fetch())) {

			?>

				<tr>

					<td align="center"><?php print($donnees['id']); ?></td>
					<td align="center"><?php print($donnees['Nom']); ?></td>
					<td align="center"><?php print($donnees['Prix_unitaire']); ?></td>
					<td align="center"><?php print($donnees['Prix_total']); ?></td>
					<td align="center"><?php print($donnees['Description']); ?></td>
					<td align="center"><?php print($donnees['Date_premiere']); ?></td>
					<td align="center"><?php print($donnees['Date_derniere']); ?></td>
					<td align="center"><?php print(0); ?></td>
				</tr>
			<?php

			}

			?>


			<?php
			$mysqli->close();
			?>

			<p><a href="logout.php">Logout</a></p>
	</div>
</body>

</html>