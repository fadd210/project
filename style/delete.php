<?php
includ('config.php');
if(isset($_POST['submit]))
{
$sql="DELETE FROM online WHERE is=5";
if($conn->($sql) === TRUE) {
echo"Record deleted successfully";
}else{
echo"error deleting record: " . $conn->error;
}
$conn->close();
 ?>