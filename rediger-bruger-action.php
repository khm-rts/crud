<?php require 'config.php' ?>
<!doctype html>
<html>
	<head>
    	<meta charset="UTF-8">
        <title>Update - CRUD</title>
	</head>
    <body>
    	<h1>CRUD</h1>
		<?php
		// Hent de indtastede informationer fra formular og gem i variabler
		$fornavn	= $_POST['form_input_fornavn'];
		$efternavn	= $_POST['form_input_efternavn'];
		$email		= $_POST['form_input_email'];
		$id			= $_POST['form_input_id'];
		
		// Forespørgsel til at opdatere den valgte bruger i databasen
		$query = "UPDATE brugere SET bruger_fornavn = '$fornavn', bruger_efternavn = '$efternavn', bruger_email = '$email' WHERE bruger_id = $id";
		
		// Send forespørgslen til databasen
		$result = mysqli_query($link, $query);
		
		// Tjek om $result indeholder false, hvis der er fejl i forespørgslen
		if (!$result) {
			// Vis database-fejlen med funktionen mysqli_error()
			echo mysqli_error($link);
		} else {
			echo 'Din bruger er hermed rettet. Klik <a href="index.php">her</a> for at vende tilbage til oversigten.';
		} // Lukker if-else-udsagnet
		?>
	</body>
</html>