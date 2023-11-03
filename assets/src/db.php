<?php
$host = "localhost"; 
$dbname = "Verzamelaar_trenbase";
$username = "monkeyABC";
$password = "monkey123_456";

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $ex) {
    echo "Fout bij verbinden database: " . $ex->getMessage();
}
?>