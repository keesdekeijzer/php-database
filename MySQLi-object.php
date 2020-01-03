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

// maak verbinding
$conn = new mysqli($servername, $username, $password);

// Controleer verbinding
if ($conn->connect_error) {
    die("Verbinding mislukt: " . $conn->connect_error);
}
echo "Succesvol verbonden";


// Maak database
if ($conn->query($sql_db) === TRUE) {
    echo "Aanmaken database gelukt";
} else {
    echo "Fout bij het maken van de database: " . $conn->error;
}

// Maak tabel
if ($conn->query($sql_tabel) === TRUE) {
    echo "Aanmaken tabel gelukt";
} else {
    echo "Fout bij het aanmaken van de tabel: " . $conn->error;
}

$conn->close();
?> 
