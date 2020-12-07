<?php
require_once 'dbconfig.php';
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

    $firstname= filter_input(INPUT_POST, 'firstname_regform', FILTER_SANITIZE_STRING);
    $lastname= filter_input(INPUT_POST, 'lastname_regform', FILTER_SANITIZE_STRING);
    $password= filter_input(INPUT_POST, 'password_regform', FILTER_SANITIZE_STRING);
    $email= filter_input(INPUT_POST, 'email_regform', FILTER_SANITIZE_STRING);

    $password= password_hash($password, PASSWORD_DEFAULT);

    //var_dump($firstname,$lastname,$password,$email);
    $stmt = $conn->prepare("INSERT INTO users (id,firstname,lastname,password,email,date_joined) VALUES (:firstname,:lastname,:password_user,:email)");
    //$stmt= $conn->query("INSERT INTO `users`(`firstname`,`lastname`,`password`, `email`) VALUES ($firstname,$lastname,$password,$email)");
    //$stmt= $conn->query("INSERT INTO `users`(`firstname`,`lastname`,`password`, `email`) VALUES ($firstname,$lastname,$password,$email)");
    $stmt->bindParam(":firstname", $firstname);
    $stmt->bindParam(":lastname", $lastname);
    $stmt->bindParam(":password_user", $password);
    $stmt->bindParam(":email", $email);
    $stmt->execute();

    echo("User created successfully");
    var_dump($firstname,$lastname,$password,$email);
    
?>