<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shoes</title>
</head>
<body>
<center> 
    <div class="main">
        <form action="insert.php" method="post">
         <h2> LOGIN ADMIN </h2>
         <fieldset>
            <body>
             <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>  
  
               <br><br>  
                    <label style="font-size:25"  > E-mail: </label>
                    <input type="text" name="email" placeholder="Enter Here Your Email"><br><br> 
              
                        <label style="font-size:25">Password  </label>
                        <input type="password" name="password" placeholder="Enter Here Your Password"><br>
                        <br>
                        <br>
                        <div class="profile__cta"><a  href="products.php" class="button"><h3>login</h3></a></div>
                        <div class="profile__cta"><a  href="login.php" class="button"><h3>enter</h3></a></div>
             </fieldset>
               <main>
            <div class="profile__cta"><a  href="index.php" class="button">
               <h1> Back </h1>
            </a></div>
            </main>
        </form>
    </div> 
</center> 

</body>
</html>