<?php
require 'config.php';
// Hent det valgte id fra URL parametre og gem i variabel
$id = $_GET['id'];
// Forespørgsel til at hente bruger fra databasen der matcher id fra ovenstående variabel
$query	= "SELECT * FROM brugere WHERE bruger_id = $id";

// Send forespørgslen til databasen
$result	= mysqli_query($link, $query);

// Tjek om $result indeholder false, hvis der er fejl i forespørgslen
if (!$result) {
	// Vis database-fejlen med funktionen mysqli_error()
	echo mysqli_error($link);
} // Lukker if-udsagnet

// Hent rækken fra databasen som et associativt array
$row = mysqli_fetch_assoc($result);
?>
<!doctype html>
<html>
	<head>
    	<meta charset="UTF-8">
        <title>Update - CRUD</title>
	</head>
    <body>
    	<h1>CRUD</h1>
        <h2>Rediger bruger</h2>
        
        <form action="rediger-bruger-action.php" method="post">
        	<p>
            	Fornavn: <input type="text" name="form_input_fornavn" required value="<?php echo $row['bruger_fornavn'] ?>" />
			</p>
            <p>
            	Efternavn: <input type="text" name="form_input_efternavn" required value="<?php echo $row['bruger_efternavn'] ?>" />
            </p>
            <p>
            	E-mailadresse: <input type="email" name="form_input_email" required value="<?php echo $row['bruger_email'] ?>" />
            </p>
            <input type="hidden" name="form_input_id" value="<?php echo $row['bruger_id'] ?>" />
            <input type="submit" name="submit" value="Indsend" />
		</form>
	</body>
</html>