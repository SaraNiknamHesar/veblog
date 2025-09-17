<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "php_project";
global $connection; // because I want to access to it in the other pages
$options = array(PDO::ERRMODE_EXCEPTION => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ);
try {
    $connection = new PDO("mysql:host=$serverName;dbname=$dbName", $userName, $password, $options);
    return $connection;
} catch (PDOException $e) {
    echo "You have an error :{$e->getMessage()}";
}
