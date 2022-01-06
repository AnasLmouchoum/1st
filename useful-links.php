<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Morocco City Index</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    

</head>
<body>
    <!-- modal -->

    <div class="modal fade" id="myVideo" role="dialog">
        <div class="modal-dialog">
        
        <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Documentary</h4>
                </div>
                <div class="modal-body">
                    <video src="Photos/diapo.mp4" controls style="width:100%"></video>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        
        </div>
    </div>
    
<!-- header section starts  -->

    <header style="display:flex;">

        <div id="menu-bar" class="fas fa-bars" onClick="openSlideMenu()"></div>

        <nav class="navbar2" id="navbar2">
            <a href="site-monuments.php">sites & monuments</a>
            <a href="city-index.php">citys index</a>
            <a href="get-direction.php">get location</a>
            <a href="useful-links.php">useful links</a>
        </nav>

        <a href="#home" class="logo" style="text-decoration:none;"><span>M</span>orocco</a>

        <nav class="navbar1">
            <a href="home.php">home</a>
            <a href="#sitemap">site plan</a>
            <a href="#about">about</a>
            <a href="#contact">contact</a>
        </nav>

    </header>

<!-- header section end  -->

<!-- home section starts  -->
    <div style="height:82px"></div>

    <section class="home" id="home">

        <div class="packages" id="packages">
            <h1 class="heading">
                <span>u</span>
                <span>s</span>
                <span>e</span>
                <span>f</span>
                <span>u</span>
                <span>l</span>
                <span class="space"> </span>
                <span>l</span>
                <span>i</span>
                <span>n</span>
                <span>k</span>
                <span>s</span>
            </h1>

            <div style="display: flex;justify-content: space-evenly;flex-wrap: wrap;">
                <div id="links-useful">
                    <img src="Photos/m_now.jpg" alt="">
                    <a href="https://www.diplomatie.ma/fr/le-maroc-lance-sa-marque-nationale-d%E2%80%99investissement-et-d%E2%80%99export-%C2%AB-morocco-now-%C2%BB">Invest in mrocco</a>
                </div>
                <div id="links-useful">
                    <img src="Photos/union.jpg" alt="">
                    <a href="https://ufmsecretariat.org/">Union for the Mediterranean</a>
                </div>
                <div id="links-useful">
                    <img src="Photos/bourse.jpg" alt="">
                    <a href="https://www.casablanca-bourse.com/bourseweb/en/index.aspx">Casablanca Stock Exchange</a>
                </div>
                <div id="links-useful">
                    <img src="Photos/bank.png" alt="">
                    <a href="https://www.bkam.ma/en">Bank Al-Maghrib</a>
                </div>
                <div id="links-useful">
                    <img src="Photos/emp.png" alt="">
                    <a href="https://www.travail.gov.ma/">Department of Labor and professional insertion</a>
                </div>
                <div id="links-useful">
                    <img src="Photos/oe.png" alt="">
                    <a href="https://www.oecd.org/">Organization of Economic Cooperation and Development</a>
                </div>
                <div id="links-useful">
                    <img src="Photos/om.png" alt="">
                    <a href="http://www.ompic.org.ma/en">OMPIC</a>
                </div>
                <div id="links-useful">
                    <img src="Photos/csf.png" alt="">
                    <a href="http://www.casablancafinancecity.com/?lang=en">Casablanca Finance City</a>
                </div>
            </div>
                

        </div>

        <div></div>

        <div id="newsletter">

            <div>
                <h2 class="heading">
                    <span>d</span>
                    <span>i</span>
                    <span>a</span>
                    <span>p</span>
                    <span>o</span>
                </h2>
                <a href="#myVideo" data-toggle="modal" data-target="#myVideo"><video src="Photos/diapo.mp4" width="100%" poster="Photos/poster.jpg" controls></video></a>
            </div>
            <h2 class="heading">
                <span>n</span>
                <span>e</span>
                <span>w</span>
                <span>s</span>
            </h2>
            <div class="newsdiv">
                <?php
                    $bdd=mysqli_connect('localhost','root','','newsletter') or die("Connection Failed" .mysqli_connect_error());
                    $title="SELECT * FROM news ORDER BY pub_date DESC LIMIT 3";
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
                <div class="login">
                    <a class="news-links" href="all-news.php">>>>All news</a>
                    <a class="news-links" href="subscribe.php">Subscribe for newsletter</a>
                    <a class="news-links" href="admin.php">Login</a>
                </div>
            </div>

        </div>

    </section>
<!-- home section end  -->

<!-- sitemap section starts  -->
    <div id="sitemap">

        <h2 class="heading">
            <span>s</span>
            <span>i</span>
            <span>t</span>
            <span>e</span>
            <span class="space"> </span>
            <span>p</span>
            <span>l</span>
            <span>a</span>
            <span>n</span>
        </h2>

        <div class="box-container">

            <div class="box">
                <h2>Quick links</h2>
                <a href="#">home</a>
                <a href="#">contact</a>
                <a href="#">about</a>
            </div>

            <div class="box">
                <h2>famous locations</h2>
                <a href="#">Casablanca</a>
                <a href="#">fes</a>
                <a href="#">marrakech</a>
                <a href="#">ifran</a>
                <a href="#">essaouira</a>
                <a href="#">dakhla</a>
            </div>

            <div class="box">
                <h2>menu</h2>
                <a href="#">sites & monuments</a>
                <a href="#">citys index</a>
                <a href="#">get location</a>
                <a href="#">usefull links</a>
            </div>

            <div class="box">
                <h2>follow us</h2>
                <a href="#">facebook</a>
                <a href="#">instagram</a>
                <a href="#">twitter</a>
                <a href="#">linkedin</a>
            </div>

        </div>

    </div>
<!-- sitemap section end  -->

<!-- header section starts  -->
    <div id="about">

        <h2 class="heading">
            <span>a</span>
            <span>b</span>
            <span>a</span>
            <span>o</span>
            <span>u</span>
            <span>t</span>
            <span class="space"></span>
            <span>m</span>
            <span>e</span>
        </h2>

        <div class="about-container">

            <div class="aboutleft">
                <div style="height:100%;width:100%;">
                </div>
            </div>

            <div class="aboutright">
                <div class="box">
                    <h4 style="font-size:3rem;">personal informations</h4>
                    <h5>first name: <span>Anas</span></h5>
                    <h5>last name: <span>LMouchoum</span></h5>
                    <h5>cne: <span>N134154798</span></h5>
                    <h5>email: <span>anas19112001@gmail.com</span></h5>
                </div>

                <div class="box">
                    <h4 style="font-size:3rem;">follow me</h4>
                    <a href="#"><i class="fab fa-facebook" style="color:blue;"></i> facebook</a>
                    <a href="#"><i class="fab fa-instagram" style="color:purple;"></i> instagram</a>
                    <a href="#"><i class="fab fa-twitter" style="color:lightblue;"></i> twitter</a>
                    <a href="#"><i class="fab fa-linkedin-in" style="color:blue;"></i> linkedin</a>
                </div>

            </div>

        </div>

    </div>
<!-- about section ends  -->

<!-- contact section starts  -->
    <div id="contact">
            
        <h2 class="heading">
            <span>c</span>
            <span>o</span>
            <span>n</span>
            <span>t</span>
            <span>a</span>
            <span>c</span>
            <span>t</span>
        </h2>

        <h4 style="font-size:3rem;text-align:center">have some questions ?</h4>
        <div class="form-container">
            <!--img src="Photos/env.png" alt="" style="width:400px;"-->
            <form action="" methode="POST" autocomplete="off">
                <input type="text" name="fname" placeholder="First Name">
                <input type="text" name="lname" placeholder="Last Name">
                <input type="email" name="email" placeholder="What's your email">
                <textarea style="height:8rem" name="message" id="" cols="30" rows="10" placeholder="Your Questions..."></textarea>
                <input class="val" type="submit" value="Send Message">
            </form>
        </div>
                     
    </div>
<!-- contact section end  -->

<!-- contact section end  -->
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