<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Morocco All News</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
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

    <div style="height:82px"></div>

    <h2 class="heading">
        <span>a</span>
        <span>l</span>
        <span>l</span>
        <span class="space"></span>
        <span>n</span>
        <span>e</span>
        <span>w</span>
        <span>s</span>
    </h2>
    <div id="all-news">
        <?php
            $bdd=mysqli_connect('localhost','root','','newsletter') or die("Connection Failed" .mysqli_connect_error());
            $title="SELECT * FROM news ORDER BY pub_date DESC";
            $result=$bdd->query($title) ;
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                echo '<div class="news-list">' ;
                echo '<img src="news_images/' . $row['image'] . '" style="width:100%;height:200px">';
                echo '<i class="fa fa-eye" aria-hidden="true">560</i>';
                echo '<i class="fa fa-thumbs-up" aria-hidden="true" style="color:blue">245</i>';
                echo '<i class="fa fa-comment" aria-hidden="true">43</i>';
                echo '<p class="pos">' . $row['pub_date'] . '</p>' ;
                echo '<h3 class="pos">' . $row['title'] . '</h3>' ;
                echo '<p class="pos">' . $row['resume'] . '</p>' ;
                echo '<form class="pos" action="news-details.php" method="POST">
                    <input type="hidden" value="' . $row['news_id'] . '" name="_id" id="_id"></input>
                    <input class="more-details" type="submit" value="See more details.."></input>
                </form>';
                echo '</div>' ;
                }
            }
        ?>
    </div>

    <footer id="footer">
        <h2 class="credit"> created by <span> &copy Anas Lmouchoum </span> | all rights reserved </h2>
        <h2 class="credit">last edit 22/12/2021</h2>
    </footer>
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-alt-circle-up fa-3x" style="size: 7px;"></i></button>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>