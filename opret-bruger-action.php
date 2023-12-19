<?php require 'config.php' ?>
<!doctype html>
<html>
	<head>
    	<meta charset="UTF-8">
        <title>Create - CRUD</title>
	</head>
    <body>
    	<h1>CRUD</h1>
		<?php
		// Hent de indtastede informationer fra formular og gem i variabler
		$fornavn	= $_POST['form_input_fornavn'];
		$efternavn	= $_POST['form_input_efternavn'];
		$email		= $_POST['form_input_email'];
		
		// Forespørgsel til at indsætte ny bruger i databasen
		$query = "INSERT INTO brugere (bruger_fornavn, bruger_efternavn, bruger_email) VALUES ('$fornavn', '$efternavn', '$email')";
		
		// Send forespørgslen til databasen
		$result = mysqli_query($link, $query);
		
		// Tjek om $result indeholder false, hvis der er fejl i forespørgslen
		if (!$result) {
			// Vis database-fejlen med funktionen mysqli_error()
			echo mysqli_error($link);
		} else {
			echo 'Din bruger er hermed oprettet. Klik <a href="index.php">her</a> for at vende tilbage til oversigten.';
		} // Lukker if-else-udsagnet
		?>
	</body>
</html>