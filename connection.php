<?php
if (!isset($_SESSION)){
    session_start();
$host = 'localhost';
$username = 'admin';
$password = 'password123';
$dbname = 'schemadb';
$user='root';
$pass='';


    $conn = new mysqli($host,$user, $pass);
   if($conn->connect_error)
   {
       die("can't connect");
   }
   else{
    $sql = "use schemadb;";
    $conn->prepare($sql);
    $conn->query($sql);
   }
}
else{

}
?>
