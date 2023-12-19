<?php require 'config.php' ?>
<!doctype html>
<html>
	<head>
    	<meta charset="UTF-8">
        <title>Delete - CRUD</title>
	</head>
    <body>
    	<h1>CRUD</h1>
		<?php
		// Hent det valgte id fra URL parametre og gem i variabel
		$id = $_GET['id'];
		
		// Forespørgsel til at slette den valgte bruger fra databasen
		$query = "DELETE FROM brugere WHERE bruger_id = $id";
		
		// Send forespørgslen til databasen
		$result = mysqli_query($link, $query);
		
		// Tjek om $result indeholder false, hvis der er fejl i forespørgslen
		if (!$result) {
			// Vis database-fejlen med funktionen mysqli_error()
			echo mysqli_error($link);
		} else {
			echo 'Din bruger er hermed slettet. Klik <a href="index.php">her</a> for at vende tilbage til oversigten.';
		} // Lukker if-else-udsagnet
		?>
	</body>
</html>