<?php
include('config.php');
if(isset($_POST['ENTER']))
{
$NAME     = $_POST['name'];
$EMAIL    = $_POST['email'];
$ADDRESS  = $_POST['ADDRESS'];
$PASSWORD = $_POST['password'];
$insert ="INSERT INTO insert (name , email , address , password) VALUES ('$NAME','$EMAIL','$ADDRESS','$PASSWORD')";
mysqli_query($con, $insert);
header('location:create account.php');
}
?>