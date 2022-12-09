<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>online shoes shop </title>
</head>
<body>
<center>
    <div class="main">
        <fieldset>
		<legend style="font-size:40"> welcome </legend>
         <h2> new account  </h2>
    <html> <body> <?php // define variables and set to empty values
 $name = $email = "";
 if ($_SERVER["REQUEST_METHOD"] == "POST") {    $name = test_input($_POST["name"]);    
    $email = test_input($_POST["email"]); $address= test_input($_POST["address"]); $password = test_input($_POST["password"]); } 
function test_input($data) {    
$data = trim($data);    
$data = stripslashes($data);    
$data = htmlspecialchars($data);  
  return $data; }
 ?> 
             <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> 
         <img src="images/img.jpg" alt="" width="500px">
            <br><br>  
                 <label style="font-size:25"  > NAME: </label>
                 <input type="text" name="name" placeholder="Enter Here the name of pic"><br><br> 
          
                     <label style="font-size:25"> E-MAIL :</label>
                     <input type="text" name="text" placeholder="Enter Here Your e-mail"><br><br>
					 <label style="font-size:25"> ADDRESS:</label>
                     <input type="text" name="text" placeholder="Enter Here Your address"><br><br>
					 <label style="font-size:25"> PASSWORD :</label>
                     <input type="text" name="password" placeholder="Enter Here Your password"><br><br>
                     <input type="file" id="file" name='image' style='display:none;'>
                     <lable for="file"> ENTER HERE : </lable>
                     <button name='upload'> create </button>
                     <br><br>
                     <div class="profile__cta"><a  href="products.php" class="button">
                        <h3> display products </h3>
                     </a></div>
                     <div class="profile__cta"><a  href="index.php" class="button">
                        <h1> Back </h1>
                        </a>
                        </div></form></fieldset></form></div></center></body></html>