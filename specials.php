<?php
include "config.php"
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Specials</title>
        <!--Google fonts-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins&display=swap">
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
        crossorigin="anonymous"
        >
        <!--CSS Link-->
        <link rel="stylesheet" href="specials.css?v=<?php echo time();?>">
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
        <!--Start of cards-->
        <div class="title">
            <img src="Images/TODAYS SPECIALS.png" alt="" >
        </div>
        <section class=" main">
           
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4 " >
                        <div class="card">
                            <div class="content">
                                <img src="Images/CARD IMG 1.png" alt="" >
                                <div class="card-body">
                                    <p class="details">LARGE  BURGER WITH  BAKED POTATOES</p>
                                    <img src="Images/Card line.png" alt="" >  
                                    <div class="btn-order">
                                        <button class="order-now"><a href="order.php">ORDER NOW</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Start of card 2-->
                    <div class="col-sm-4 col-md-4 col-lg-4 " >
                        <div class="card">
                            <div class="content">
                                <img src="Images/CARD IMG 2.png" alt="" >
                                <div class="card-body">
                                    <p class="details">LARGE  BURGER WITH  BAKED POTATOES</p>
                                    <img src="Images/Card line.png" alt="" >  
                                    <div class="btn-order">
                                        <button class="order-now"><a href="order.php">ORDER NOW</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of card 2-->
                    <!--Start of card 3-->
                    <div class="col-sm-4 col-md-4 col-lg-4 " >
                        <div class="card">
                            <div class="content">
                                <img src="Images/CARD IMG 3.png" alt="" >
                                <div class="card-body">
                                    <p class="details">LARGE  BURGER WITH  BAKED POTATOES</p>
                                    <img src="Images/Card line.png" alt="" >  
                                    <div class="btn-order">
                                        <button class="order-now"><a href="order.php">ORDER NOW</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of card 3-->
                </div>
                <!--ROW 2-->
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4 " >
                        <div class="card">
                            <div class="content">
                                <img src="Images/CARD IMG 4.png" alt="" >
                                <div class="card-body">
                                    <p class="details">LARGE  BURGER WITH  BAKED POTATOES</p>
                                    <img src="Images/Card line.png" alt="" >  
                                    <div class="btn-order">
                                        <button class="order-now"><a href="order.php">ORDER NOW</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Start of card 2-->
                    <div class="col-sm-4 col-md-4 col-lg-4 " >
                        <div class="card">
                            <div class="content">
                                <img src="Images/CARD IMG 5.png" alt="" >
                                <div class="card-body">
                                    <p class="details">LARGE  BURGER WITH  BAKED POTATOES</p>
                                    <img src="Images/Card line.png" alt="" >  
                                    <div class="btn-order">
                                        <button class="order-now"><a href="order.php">ORDER NOW</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of card 2-->
                    <!--Start of card 3-->
                    <div class="col-sm-4 col-md-4 col-lg-4 " >
                        <div class="card">
                            <div class="content">
                                <img src="Images/CARD IMG 6.png" alt="" >
                                <div class="card-body">
                                    <p class="details">LARGE  BURGER WITH  BAKED POTATOES</p>
                                    <img src="Images/Card line.png" alt="" >  
                                    <div class="btn-order">
                                        <button class="order-now"><a href="order.php">ORDER NOW</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of card 3-->
                </div>
                <!--End of row 2-->
            </div>
        </section>
        <!--End of cards-->
    </body>
</html>