<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Morocco Admin Login</title>

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
            <a href="#">sites & monuments</a>
            <a href="#">citys index</a>
            <a href="#">get location</a>
            <a href="#">useful links</a>
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

    <h2 class="heading">
        <span>w</span>
        <span>e</span>
        <span>l</span>
        <span>c</span>
        <span>m</span>
        <span>e</span>
        <span class="space"></span>
        <span>t</span>
        <span>o</span>
        <span class="space"></span>
        <span>a</span>
        <span>d</span>
        <span>m</span>
        <span>i</span>
        <span>n</span>
        <span class="space"></span>
        <span>a</span>
        <span>r</span>
        <span>e</span>
        <span>a</span>
    </h2>

    <div id="admin-area">
        <div>
            <form action="" method="POST">
                <div>
                    <label for="login"><i class="fa fa-user" aria-hidden="true"></i></label>
                    <input type="text" name="login" id="login" placeholder="Username">
                </div>
                <div>
                    <label for="password"><i class="fa fa-unlock-alt" aria-hidden="true"></i></label>
                    <input type="password" name="password" id="password" placeholder="password">
                </div>
                <input class="val" type="submit" value="Login" style="width: 50%;">
            </form>
            <?php
                $admin='admin';
                $password='admin';
                if(isset($_POST['login']) && isset($_POST['password'])){
                    if($_POST['login']==$admin and $_POST['password']==$password)
                        header("Location:add-delete-update-news.php");
                    else{
                        $message = "Wrong Login or Password";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                    }
                }
                
            ?>
        </div>
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