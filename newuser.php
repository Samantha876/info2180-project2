<?php
header('Access-Control-Allow-Origin: *');

$host = 'localhost';
$username = 'admin';
$password = 'password123';
$dbname = 'bugme';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstname= filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
    $lastname= filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
    $password= filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $email= filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
}


try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    echo "Connected to $dbname at $host successfully.";

    $stmt = $conn->prepare("INSERT INTO users (id,firstname,lastname,password,email,date_joined) VALUES (:firstname,:lastname,password_hash(:password, PASSWORD_DEFAULT),:email)");

    $stmt->bindParam(":firstname", $firstname);
    $stmt->bindParam(":lastname", $lastname);
    $stmt->bindParam(":password", $password);
    $stmt->bindParam(":email", $email);

    $stmt->execute();
    
} catch (PDOException $pe) {
    die("Could not connect to the database");
}


?>