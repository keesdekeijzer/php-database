<?php
// variabelen
$servername = "localhost";
$username = "username";
$password = "password";

try {
    $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
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
    $sql = "CREATE DATABASE mijnDBPDO";
    // gebruik exec() want er wordt niets teruggegeven
    $conn->exec($sql);
    echo "Aanmaken database gelukt<br>";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }


?> 
