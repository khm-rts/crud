<!doctype html>
<html>
	<head>
    	<meta charset="UTF-8">
        <title>Create - CRUD</title>
	</head>
    <body>
    	<h1>CRUD</h1>
        <h2>Opret ny bruger</h2>
        
        <form action="opret-bruger-action.php" method="post">
        	<p>
            	Fornavn: <input type="text" name="form_input_fornavn" required />
			</p>
            <p>
            	Efternavn: <input type="text" name="form_input_efternavn" required />
            </p>
            <p>
            	E-mailadresse: <input type="email" name="form_input_email" required />
            </p>
            <input type="submit" name="submit" value="Indsend" />
		</form>
	</body>
</html>