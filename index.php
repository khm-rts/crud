<?php require 'config.php' ?>
<!doctype html>
<html>
	<head>
    	<meta charset="UTF-8">
        <title>Read - CRUD</title>
	</head>
    
	<body>
		<h1>CRUD</h1>
        <h2>Oversigt over brugere</h2>
        
        <table border="1" cellpadding="5" cellspacing="0">
        	<!-- Første række i vores tabel bruges som table header -->
        	<tr>
            	<th>Fornavn</th>
                <th>Efternavn</th>
                <th>E-mailadresse</th>
                <th><!--Tom kolonne til rediger-links --></th>
                <th><a href="opret-bruger.php">Opret bruger</a></th>
			</tr>
            
            <?php
			// Forespørgsel til at hente alle brugere fra databasen
			$query	= "SELECT * FROM brugere ORDER BY bruger_fornavn";
			
			// Send forespørgslen til databasen
			$result	= mysqli_query($link, $query);
			
			// Tjek om $result indeholder false´, hvis der er fejl i forespørgslen
			if (!$result) {
				// Vis database-fejlen med funktionen mysqli_error()
				echo mysqli_error($link);
			} // Lukker if-udsagnet
			
			// Hent alle rækker fra databasen som et associativt array sammen med while-løkken
			while ( $row = mysqli_fetch_assoc($result) ) {
				?>
				<!-- Eksempel på række fra databasen -->
				<tr>
					<td><?php echo $row['bruger_fornavn'] ?></td>
					<td><?php echo $row['bruger_efternavn'] ?></td>
					<td><?php echo $row['bruger_email'] ?></td>
					<td><a href="rediger-bruger.php?id=<?php echo $row['bruger_id'] ?>">Rediger</a></td>
					<td><a href="slet-bruger.php?id=<?php echo $row['bruger_id'] ?>">Slet</a></td>
				</tr>
				<?php
			} // Lukker while-løkken
			?>
		</table>
	</body>
</html>