<?php
include('config.php');
if(isset($_POST['SUBMIT']))
{
$sql ="SELECT id,email,password FROM online";
$result = $conn->query($sql);
}
?>