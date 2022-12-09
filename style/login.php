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
		<legend style="font-size:40"> .. </legend>
         <h2> LOGIN ADMIN </h2>
    <html> <body> <?php // define variables and set to empty values
 $name = $price = "";
 if ($_SERVER["REQUEST_METHOD"] == "POST") {    $name = test_input($_POST["name"]);    
    $price = test_input($_POST["price"]); } 
function test_input($data) {    
$data = trim($data);    
$data = stripslashes($data);    
$data = htmlspecialchars($data);  
  return $data; }
 ?> 
             <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> 
         <img src="images/img.jpg" alt="" width="500px">
            <br><br>  
                 <label style="font-size:25"  > name of picture: </label>
                 <input type="text" name="name" placeholder="Enter Here the name of pic"><br><br> 
          
                     <label style="font-size:25"> price of product :</label>
                     <input type="text" name="price" placeholder="Enter Here Your Price of pic"><br><br>
                     <input type="file" id="file" name='image' style='display:none;'>
                     <lable for="file">choose image for product : </lable>
                     <button name='upload'>upload product</button>
                     <br><br>
                     <div class="profile__cta"><a  href="products.php" class="button">
                        <h3> display products </h3>
                     </a></div>
                     <div class="profile__cta"><a  href="index.php" class="button">
                        <h1> Back </h1>
                        </a>
                        </div></form></fieldset></form></div></center></body></html>