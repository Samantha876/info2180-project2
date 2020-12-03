<?php
header('Access-Control-Allow-Origin: *');

require_once 'connect.php';


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
    ?>

<?php endif; ?>
