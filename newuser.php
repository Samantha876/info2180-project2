<head>
    <meta charset="utf-8">
	<title>BugMe Issue Tracker</title>
	<link href="issue.css" type="text/css" rel="stylesheet" />
	<script src="user.js" type="text/javascript"></script>
</head>

<?php
header('Access-Control-Allow-Origin: *');

require_once 'connection.php';
$admin='';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $admin= filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
}

?>

<?php if($admin=='admin@project2.com'):?>
    <div class="registerform">
            <h2>New User</h2>
                <form id="form" class="Registration-form" action="adduser.php" method="POST">
                <input id="firstname_regform" type="text" name= "firstname_regform" placeholder=" Firstname " />
                <input id="lastname_regform" type="text" name="lastname_regform" placeholder=" Lastname " />
                <input id="password_regform" type="text" name="password_regform" placeholder=" Password">
                <input id="email_regform" type="text" name="email_regform" placeholder=" E-mail " />
                <button id="button"> Submit</button>
            </form>
    </div>

    <?php  
    /*
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

    $firstname= filter_input(INPUT_POST, 'firstname_regform', FILTER_SANITIZE_STRING);
    $lastname= filter_input(INPUT_POST, 'lastname_regform', FILTER_SANITIZE_STRING);
    $password= filter_input(INPUT_POST, 'password_regform', FILTER_SANITIZE_STRING);
    $email= filter_input(INPUT_POST, 'email_regform', FILTER_SANITIZE_STRING);

    var_dump($firstname,$lastname,$password,$email);

    $stmt = $conn->prepare("INSERT INTO users (id,firstname,lastname,password,email,date_joined) VALUES (:firstname,:lastname,password_hash(:password, PASSWORD_DEFAULT),:email)");
    //$stmt= $conn->query("INSERT INTO `users`(`firstname`,`lastname`,`password`, `email`,`date_joined`) VALUES ($firstname,$lastname,SHA1($password),$email)");

    
    $stmt->bindParam(":firstname", $firstname);
    $stmt->bindParam(":lastname", $lastname);
    $stmt->bindParam(":password", $password);
    $stmt->bindParam(":email", $email);

    $stmt->execute();

    */?>

<?php endif; ?>
