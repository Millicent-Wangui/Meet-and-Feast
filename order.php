<?php
include "config.php";
$name=$email=$mobile_no=$address="";
$nameErr=$emailErr=$mobile_noErr=$addressErr="";
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty($_POST["name"])){
        $nameErr = "This field is required";
    } else {
        $name = $_POST["name"];
    }
    if(empty($_POST["mobile_no"])){
        $mobile_noErr = "This field is required";
    } else {
        $mobile_no = $_POST["mobile_no"];
    }
    if(empty($_POST["address"])){
        $addressErr = "This field is required";
    } else {
        $address = $_POST["address"];
    }
    if(empty($_POST["email"])){
        $emailErr = "This field is required";
    } else {
        $email = $_POST["email"];
    }
   
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $emailErr = "Invalud email format";
    }
    $query = "INSERT INTO `order` (name, email,mobile_no,address) VALUES('$name','$email','$mobile_no','$address')";
    $result = mysqli_query($conn , $query);
    echo "<script>alert('Thankyou for your order.')</script>";
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Meet and Feast</title>
        <!--Google fonts-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins&display=swap">
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
   
        <link rel="stylesheet" href="order.css?v=<?php echo time();?>">
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
                <img src="Images/ORDER VECTOR.png" alt="vector img">
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
        <!--Start of form-->
        <section class="main">
                <div class="content">
                    <div class="form">
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
                            <div class="text">
                                <h5>Place your order here!</h5>
                            </div>
                            <label for="">Name</label>
                            <input type="text" name="name" required>
                            <label for="">Email</label>
                            <input type="email" name="email" required>
                            <label for="">Mobile No</label>
                            <input type="tel" name="mobile_no" max_length= "10"required>
                            <label for="">Address</label>
                            <input type="text" name="address" required>
                            <div class="btn-order">
                                <button class="order-now"><a href="order.php">ORDER NOW</a></button>
                            </div>
                        </form>
                    </div>
                </div>
             
        </section>
        <!--End of form-->
    </body>
</html>