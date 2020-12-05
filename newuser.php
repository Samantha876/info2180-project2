<head>
    <meta charset="utf-8">
	<title>BugMe Issue Tracker</title>
	<link href="issue.css" type="text/css" rel="stylesheet" />
	<script src="user.js" type="text/javascript"></script>
</head>
<?php
header('Access-Control-Allow-Origin: *');

require_once 'connection.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $admin= filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
}

?>

<?php if($admin=='admin@project2.com'):?>
    <div class="registerform">
            <h2>New User</h2>
                <form id="form" class="Registration-form" action="newuser.php" method="post">
                <input id="firstname" type="text" name= "firstname" placeholder=" Firstname " />
                <input id="lastname" type="text" name="lastname" placeholder=" Lastname " />
                <input id="password" type="text" name="password" placeholder=" Password">
                <input id="email" type="text" name="email" placeholder=" E-mail " />
                <button id="button"> Submit</button>
            </form>
    </div>

    <?php   
    $firstname= filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
    $lastname= filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
    $password= filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $email= filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);

    $stmt = $conn->prepare("INSERT INTO users (id,firstname,lastname,password,email,date_joined) VALUES (:firstname,:lastname,password_hash(:password, PASSWORD_DEFAULT),:email)");

    $stmt->bindParam(":firstname", $firstname);
    $stmt->bindParam(":lastname", $lastname);
    $stmt->bindParam(":password", $password);
    $stmt->bindParam(":email", $email);

    $stmt->execute();
    ?>

<?php endif; ?>
