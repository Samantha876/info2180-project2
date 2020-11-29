<?php
session_start();

function userLogin($email, $password) {
    if (!(checkLogin($emai, $password))) {
        echo "Login Failed";
        return false;
    }
}

function checkLogin($emailAddress, $password) {
    $connect = new PDO('mysql:host=localhost;dbname=schema;', 'root', 'password');
    $checkLoginQuery = ("SELECT `ID`, `firstname`, `lastname` FROM `users` WHERE `username`='$emai'");
    $stmt = $connect -> query($checkLoginQuery);
    $result = $stmt -> fetch(PDO:: FETCH_ASSOC);
    if ($result) {
        $_SESSION["user_id"] = $result['ID'];
        $_SESSION["firstname"] = $result['firstname'];
        $_SESSION["lastname"] = $result['lastname'];
        header("Location: ../issues.html"); // Not yet create just placed a name there I think 
    }
    else {
        return false;
    }

}

if (isset($_SESSION["user_id"])) {
    header("Location: ../issues.html");
}
if (isset($_POST['submitBtn'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    userLogin($username, $password);
}

?>