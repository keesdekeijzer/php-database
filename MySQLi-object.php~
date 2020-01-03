<?php
// variabelen
$servername = "localhost";
$username = "username";
$password = "password";

// maak verbinding
$conn = new mysqli($servername, $username, $password);

// Controleer verbinding
if ($conn->connect_error) {
    die("Verbinding mislukt: " . $conn->connect_error);
}
echo "Succesvol verbonden";


// Maak database
$sql = "CREATE DATABASE mijnDB";
if ($conn->query($sql) === TRUE) {
    echo "Aanmaken database gelukt";
} else {
    echo "Fout bij het maken van de database: " . $conn->error;
}


?> 
