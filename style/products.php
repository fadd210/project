<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>products</title>
</head>
<body>
    <!-- prodcuts section starts  -->
<br><br>
<section class="products" id="products">

    <h1 class="heading"> latest <span>products</span> </h1>
<center><h1>WOMEN DEPARTMENT  -5%</h1></center>
<BR><BR><br>
    <div class="container">
        <div class="box">
            <div class="image">
                <img src="images/img-1.jpg" alt="" width="400px" height="400px">
                <div class="icons">
                </div>
                <div class="content">
                    <h1>black high heels</h1>
                    <div class="price"><h1>20.000 SD</h1> </div>
                </div>
            </div>
            <a href="#" class="cart-btn"><h1>add to cart</h1></a>     
<br><br><br>
        <div class="box">
            <div class="image">
                <img src="images/img-2.jpg" alt="" width="400px" height="400px">
                <div class="icons">
                </div>
                <div class="content">
                    <h1>white high heels</h1>
                    <div class="price"> <h1>130.000 SD</h1> </div>
                </div>
                    <a href="#" class="cart-btn"><h1>add to cart</h1></a>
                </div>
            <br><br><br>
        <div class="box">
            <div class="image">
                <img src="images/img-3.jpg" alt="" width="400px" height="400px">
                <div class="icons">
                </div>
                <div class="content">
                    <h1>black high heels</h1>
                    <div class="price"><h1> 50.000 SD</h1> </div>
                </div>
                    <a href="#" class="cart-btn"><h1>add to cart</h1></a>
                </div>
            </div>
           <BR><BR>
           <center><H1> MEN DEPARTMENT  -20% </H1></center>
           <br><br><br>
        <div class="box">
            <div class="image">
                <img src="images/img-4.jpg" alt="" width="400" height="400">
                <div class="icons">
                </div>
            </div>
            <div class="content">
                <h1>black sport shoes</h1>
                <div class="price"><h1> 10.000 SD</h1> </div>
            </div>
        </div>
                    <a href="#" class="cart-btn"><h1>add to cart</h1></a>
        <div class="box">
            <br><br><br>
            <div class="image">
                <img src="images/img-5.webp" alt="" width="400px" height="400px">
                <div class="icons">
                    <div class="content">
                        <h1>gray sport shoes</h1>
                        <div class="price"><h1> 25.000 SD</h1></div>
                    </div>
                </div>
                    <a href="#" class="cart-btn"><h1>add to cart</h1></a>
                </div>
            </div>
            <br><br><br>
        <div class="box">
            <div class="image">
                <img src="images/img-6.webp" alt="" width="400px" height="400px">
                <div class="icons">
                    <div class="content">
                        <h1>brown shoes</h1>
                        <div class="price"><h1>55.000 SD</h1></div>
                    </div>
                    <a href="#" class="cart-btn"><h1>add to cart</h1></a>
                </div>
            </div>
            <center><h1> CHILDREN DEPARTMENT  -30% </h1></center>
            <br><br><br>
        <div class="box">
            <div class="image">
                <img src="images/img-7.jpeg" alt="" width="400" height="400">
                <div class="icons">
                    <div class="content">
                        <h1>brown children shoes</h1>
                        <div class="price"><h1> 25.000 SD </h1></div>
                    </div>
                    <a href="#" class="cart-btn"><h1>add to cart</h1></a>
                </div>
            </div>
            <br><br><br>
        <div class="box">
            <div class="image">
                <img src="images/img-8.jpg" alt="" width="400" height="400">
                <div class="icons">
                    <div class="content">
                        <h1>black children shoes</h1>
                        <div class="price"> <h1>15.000 SD</h1></div>
                    </div>
                    <a href="#" class="cart-btn"><h1>add to cart</h1></a>
                </div>
            </div>
            <br><br><br>
        <div class="box">
            <div class="image">
                <img src="images/img-9.webp" alt="" width="400" height="400">
                <div class="icons">
                    <div class="content">
                        <h1>red sport shoes</h1>
                        <div class="price"><h1> 40.000 SD</h1></div>
                    </div>
                    <a href="#" class="cart-btn"><h1>add to cart</h1></a>

</section>
let array =[];
function addtocart(id){
array.push(id);
local storage.setitem('usercart',json.stringfy(array));
console.log(json.parse(localstorage.getitem('usercart'));
$('#cart').html(items.length)
}

<!-- prodcuts section ends -->
</body></html>
