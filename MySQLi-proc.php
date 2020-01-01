<?php
// variabelen
$servername = "localhost";
$username = "username";
$password = "password";

// Maak verbinding
$conn = mysqli_connect($servername, $username, $password);

// Controleer verbinding
if (!$conn) {
    die("Verbinding mislukt: " . mysqli_connect_error());
}
echo "Succesvol verbonden";


// Maak database
$sql = "CREATE DATABASE mijnDB";
if (mysqli_query($conn, $sql)) {
    echo "Aanmaken database gelukt";
} else {
    echo "Fout bij het maken van de database: " . mysqli_error($conn);
}


?> 
