<?php
// variabelen
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "mijnDBPDO";

$sql_db = "CREATE DATABASE $dbname";

// sql voor het maken van de tabel
$sql_tabel = "CREATE TABLE Contacten (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
voornaam VARCHAR(30) NOT NULL,
achternaam VARCHAR(40) NOT NULL,
email VARCHAR(60),
toevoegdatum TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // stel de PDO error mode in op exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Succesvol verbonden";
    }
catch(PDOException $e)
    {
    echo "Verbinding mislukt: " . $e->getMessage();
    }

// database maken
try {
    // gebruik exec() want er wordt niets teruggegeven
    $conn->exec($sql_db);
    echo "Aanmaken database gelukt<br>";
    }
catch(PDOException $e)
    {
    echo $sql_db . "<br>" . $e->getMessage();
    }

// tabel maken
    // gebruik exec() want er wordt niets teruggegeven
    $conn->exec($sql_tabel);
    echo "Aanmaken tabel gelukt";
    }
catch(PDOException $e)
    {
    echo $sql_tabel . "<br>" . $e->getMessage();
    }

?> 
