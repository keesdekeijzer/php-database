<?php
// variabelen
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "mijnDB";

// sql voor het maken van de database
$sql_db = "CREATE DATABASE $dbname";

// sql voor het maken van de tabel
$sql_tabel = "CREATE TABLE Contacten (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
voornaam VARCHAR(30) NOT NULL,
achternaam VARCHAR(40) NOT NULL,
email VARCHAR(60),
toevoegdatum TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

// Maak verbinding
$conn = mysqli_connect($servername, $username, $password);

// Controleer verbinding
if (!$conn) {
    die("Verbinding mislukt: " . mysqli_connect_error());
}
echo "Succesvol verbonden";


// Maak database
if (mysqli_query($conn, $sql_db)) {
    echo "Aanmaken database gelukt";
} else {
    echo "Fout bij het maken van de database: " . mysqli_error($conn);
}

// Maak tabel
if (mysqli_query($conn, $sql_tabel)) {
    echo "Aanmaken tabel gelukt";
} else {
    echo "Fout bij het aanmaken van de tabel: " . mysqli_error($conn);
}
?> 
