<?php
session_start();

function userLogin($email, $password) {
    if (!(checkLogin($email, $password))) {
        echo "Login Failed";
        return false;
    }
}

function checkLogin($email, $password) {
    $connect = new PDO('mysql:host=localhost;dbname=schemab;', 'root', 'password');
    $checkLoginQuery = ("SELECT `id`, `firstname`, `lastname` FROM `users` WHERE `username`='$email'");
    $stmt = $connect -> query($checkLoginQuery);
    $result = $stmt -> fetch(PDO:: FETCH_ASSOC);
    if ($result) {
        $_SESSION["user_id"] = $result['id'];
        $_SESSION["firstname"] = $result['firstname'];
        $_SESSION["lastname"] = $result['lastname'];
        header("Location: ../home.php"); 
    else {
        return false;
    }

}

if (isset($_SESSION["user_id"])) {
    header("Location: ../home.php");
}
if (isset($_POST['submitBtn'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    userLogin($username, $password);
}

?>