<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscribe on news</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

    <header>

        <div id="menu-bar" class="fas fa-bars" onClick="openSlideMenu()"></div>

        <nav class="navbar2" id="navbar2">
            <a href="site-monuments.php">sites & monuments</a>
            <a href="city-index.php">citys index</a>
            <a href="get-direction.php">get location</a>
            <a href="useful-links.php">useful links</a>
        </nav>

        <a href="#" class="logo"><span>M</span>orocco</a>

        <nav class="navbar1">
            <a href="home.php">home</a>
            <a href="home.php#sitemap">site plan</a>
            <a href="home.php#about">about</a>
            <a href="home.php#contact">contact</a>
        </nav>

    </header>

<!-- header section end  -->

<!-- home section starts  -->
    <div style="height:82px"></div>

    <h1 class="heading">
        <span>s</span>
        <span>u</span>
        <span>b</span>
        <span>s</span>
        <span>c</span>
        <span>r</span>
        <span>i</span>
        <span>b</span>
        <span>e</span>
        <span class="space"> </span>
        <span>n</span>
        <span>o</span>
        <span>w</span>
    </h1>

    <div class="subs">
        <h3>You can fill up this form to subscribe for newsletter</h3>
        <form action="" method="POST">
            <input type="text" name="finame" id="finame" placeholder="First Name">
            <input type="text" name="laname" id="laname" placeholder="Last Name">
            <input type="email" name="mail" id="mail" placeholder="Email">
            <input style="padding:0;" class="val" type="submit" name="submit" id="submit">
        </form>
    </div>

    <footer id="footer">
        <h2 class="credit"> created by <span> &copy Anas Lmouchoum </span> | all rights reserved </h2>
        <h2 class="credit">last edit 22/12/2021</h2>
    </footer>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>

<?php
    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){

        $conn=mysqli_connect('localhost','root','','newsletter') or die("Connection Failed" .mysqli_connect_error());
        if(isset($_POST['laname']) && isset($_POST['finame']) && isset($_POST['mail'])){
            $fname=$_POST['finame'];
            $lname=$_POST['laname'];
            $mail=$_POST['mail'];

            $sql="INSERT INTO user (lname,fname,email) VALUES ('$lname','$fname','$mail')";

            $query=mysqli_query($conn,$sql);
            if($query){
                echo '<p style="text-align:center;margin-top:50px;color:white;background-color:rgba(0,0,0,0.8);"> Entry successfull, Congrats all news will be sent to your Email </p>';
            }
            else{
                echo '<p style="text-align:center;margin-top:50px;color:white;background-color:rgba(0,0,0,0.8);"> Error, you are already subscribed </p>';
            }
        }
    }
?>