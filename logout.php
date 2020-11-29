<?php
session start();

        unset($_SESSION["user_id"] = $result['ID']);
        unset($_SESSION["firstname"] = $result['firstname']);
        unset($_SESSION["lastname"] = $result['lastname']);
        
        header("Location: ../index.html"); 
?>

