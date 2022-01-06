<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Morocco New Detail</title>

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

    <div style="height:82px"></div>

    <h2 class="heading">
        <span>d</span>
        <span>e</span>
        <span>t</span>
        <span>a</span>
        <span>i</span>
        <span>l</span>
        <span>s</span>
    </h2>

    <div id="news-details">
        <?php
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $bdd=mysqli_connect('localhost','root','','newsletter') or die("Connection Failed" .mysqli_connect_error());
                $title='SELECT * FROM news WHERE news_id=' . $_POST['_id'];
                $result=$bdd->query($title) ;
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                    echo '<div style="padding:2rem;margin:3rem;background-color:#eee;border-radius:10px" class="news-list">' ;
                    echo '<img style="width:300px" class="pos" src="news_images/' . $row['image'] . '" style="height:200px">';
                    echo '<div class="inside-news-list">' ;
                    echo '<p class="pos">' . $row['pub_date'] . '</p>' ;
                    echo '<h4 class="pos">' . $row['title'] . '</h4>' ;
                    echo '<p class="pos">' . $row['resume'] . '</p>' ;
                    echo '<p class="pos">' . $row['content'] . '</p>' ;
                    echo '</div>' ;
                    echo '</div>' ;
                    }
                }
            }
        ?>
    </div>

    <footer id="footer">
        <h2 class="credit"> created by <span> &copy Anas Lmouchoum </span> | all rights reserved </h2>
        <h2 class="credit">last edit <?php echo date("Y/m/d"); ?></h2>
    </footer>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>