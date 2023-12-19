<?php
// Skjul rapport af mysqli fejl, for at bruge vores egne fejlbeskeder, som var standard før PHP 8.1.0
mysqli_report(MYSQLI_REPORT_OFF);
 
// Opret konstanter med informationer til database
define('HOST', 'localhost');
define('USERNAME', 'root');
define('PASSW', '');
define('DBNAME', 'min_database');
 
// Opretter forbindelse til databasen og gemmer i variablen $link
$link = mysqli_connect(HOST, USERNAME, PASSW, DBNAME);
 
// Tjek om der er fejl i oprettelse af forbindelse.
if ( mysqli_connect_errno() ) {
   //  Smid en undtagelse for at forhindre videre indlæsning af kode og vis database-fejlen med mysqli_connect_error()
   throw new RuntimeException( 'Fejl i oprettelse af forbindelse til database: ' . mysqli_connect_error() );
}
 
// Indstil korrekt tegnsæt der benyttes i databasen ('utf8' eller 'utf8mb4')
mysqli_set_charset($link, 'utf8');