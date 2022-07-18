<?php
include "config.php"
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Meet and Feast</title>
        <!--Google fonts-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins&display=swap">
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
   
        <link rel="stylesheet" href="main.css?v=<?php echo time();?>">
    </head>
    <body>
        <!--Start of Nav bar-->
        <nav>
            <div class="nav">
                <div class="logo">
                    <img src="Images/LOGO.png" alt="logo img">
                </div>
                    <ul class="nav-links">
                        <li><a class="nav-item" href="index.php">HOME</a></li>
                        <li><a class="nav-item" href="specials.php">SPECIALS</a></li>
                        <li><a class="nav-item" href="order.php">ORDER</a></li>
                    </ul>     
            </div>
            <div class="vector">
                <img src="Images/INDEX IMAGE VECTOR.png" alt="vector img">
            </div>
        </nav>
        <!--End of nav bar-->
        <!--Start of social media links-->
        <div class="social-media">
            <div class="sm-line">
                <img src="Images/Social media line 1.png" alt="" class="sm-line">
            </div>
            <div class="sm-links">
                <a href="https://www.instagram.com"><img src="Images/Instagram Vector.png" alt="insta" class="link"></a>
                <a href="https://twitter.com"><img src="Images/Twitter Vector.png" alt="twitter" class="link"></a>
                <a href="https://www.facebook.com"><img src="Images/Facebook Vector.png" alt="facebook" class="link"></a>
            </div> 
            <div class="sm-line">
                <img src="Images/Social media line 1.png" alt="" class="sm-line">
            </div>

        </div>
        <!--End of social media links-->
        <!--Start of content-->
        <div class="content">
            <button class="one-stop">ONE STOP</button>
            <h1 class="delicious-meals">For </h1><br>
            <h1 class="delicious-meals">Delicious Meals</h1>
            <p class="more-info">Enjoy some of our tasty meals</p><br>
            <p class ="more-info"> with just a single click!</p>
            <button class="order-now"><a href="order.php">ORDER NOW</a></button>
        </div>
        <!--End of content-->
        <!--Start of images-->
        <div class="section-images">
            <img src="Images/INDEX IMG 1.png" alt="" class="img-1">
            <img src="Images/INDEX IMG 2.png" alt="" class="img-2">
            <img src="Images/INDEX IMG 3.png" alt="" class="img-3">
            <img src="Images/INDEX IMG 4.png" alt="" class="img-4">
            <img src="Images/INDEX IMG 5.png" alt="" class="img-5">
        </div>
        <!--End of images-->
    </body>
</html>