<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Morocco Home</title>

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
            <a href="#home">home</a>
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
                <span>f</span>
                <span>a</span>
                <span>m</span>
                <span>o</span>
                <span>u</span>
                <span>s</span>
                <span class="space"> </span>
                <span>c</span>
                <span>i</span>
                <span>t</span>
                <span>y</span>
                <span>s</span>
            </h1>

            <div class="box-container">

                <div class="box">
                    <a href="#casa" data-toggle="modal" data-target="#casa"><img src="Photos/casa.jpg" alt=""></a>
                    <div class="content">
                        <h3> <i class="fas fa-map-marker-alt"></i> casablanca </h3>
                        <p>Casablanca the biggest city in morocco and this is Hassan II mosque!</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <a href="#casa" data-toggle="modal" data-target="#casa" class="btn" style="font-size:14px">See More Details</a>
                    </div>
                </div>

                <div class="box">
                    <a href="#chaoun" data-toggle="modal" data-target="#chaoun"><img src="Photos/chaoun.jpg" alt=""></a>
                    <div class="content">
                        <h3> <i class="fas fa-map-marker-alt"></i> Chefchaoun </h3>
                        <p>The blue city, there is forest around it</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <a href="#chaoun" data-toggle="modal" data-target="#chaoun" class="btn" style="font-size:14px">See More Details</a>
                    </div>
                </div>

                <div class="box">
                    <a href="#dakhla" data-toggle="modal" data-target="#dakhla"><img src="Photos/dakhla.jpg" alt=""></a>
                    <div class="content">
                        <h3> <i class="fas fa-map-marker-alt"></i> Dakhla </h3>
                        <p>The city of surfing, Dakhla in Moroccan Sahara</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <a href="#dakhla" data-toggle="modal" data-target="#dakhla" class="btn" style="font-size:14px">See More Details</a>
                    </div>
                </div>

                <div class="box">
                    <a href="#fes" data-toggle="modal" data-target="#fes"><img src="Photos/fes.jpg" alt=""></a>
                    <div class="content">
                        <h3> <i class="fas fa-map-marker-alt"></i> Fes </h3>
                        <p>The Oldest Univesity in the world (Alqarawiyin)!</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <a href="#fes" data-toggle="modal" data-target="#fes" class="btn" style="font-size:14px">See More Details</a>
                    </div>
                </div>

                <div class="box">
                    <a href="#menara" data-toggle="modal" data-target="#menara"><img src="Photos/menara.jpg" alt=""></a>
                    <div class="content">
                        <h3> <i class="fas fa-map-marker-alt"></i> Marrakech </h3>
                        <p>Marrakech,Big lac between high mountains and an old build Menara!</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <a href="#menara" data-toggle="modal" data-target="#menara" class="btn" style="font-size:14px">See More Details</a>
                    </div>
                </div>

                <div class="box">
                    <a href="#essa" data-toggle="modal" data-target="#essa"><img src="Photos/essa.jpg" alt=""></a>
                    <div class="content">
                        <h3> <i class="fas fa-map-marker-alt"></i> Essaouira </h3>
                        <p>Essaouira, one of the oldest citys in morocco where the jews lived!</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <a href="#essa" data-toggle="modal" data-target="#essa" class="btn" style="font-size:14px">See More Details</a>
                    </div>
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
                <a href="#home">home</a>
                <a href="#contact">contact</a>
                <a href="#about">about</a>
            </div>

            <div class="box">
                <h2>famous locations</h2>
                <a href="#casa">Casablanca</a>
                <a href="#fes">fes</a>
                <a href="#menara">marrakech</a>
                <a href="#dakhla">dakhla</a>
                <a href="#essa">essaouira</a>
                <a href="#chaoun">chefchaoun</a>
            </div>

            <div class="box">
                <h2>menu</h2>
                <a href="site-monuments.php">sites & monuments</a>
                <a href="city-index.php">citys index</a>
                <a href="get-direction.php">get location</a>
                <a href="useful-links.php">usefull links</a>
            </div>

            <div class="box">
                <h2>follow us</h2>
                <a href="https://web.facebook.com/anas.mas.2001/">facebook</a>
                <a href="https://www.instagram.com/n.s_lemushum/">instagram</a>
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
<!--************************* villes links modal *******************************-->
    <div class="modal fade" id="casa" role="dialog">
        <div class="modal-dialog">
        
        <!-- Modal content-->
            <div class="modal-content" style="width:160%;transform:translate(-20%,0)">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="text-align:center;">Casablanca</h4>
                </div>
                <div class="modal-body">
                    <!-- content -->

                    <section class="gallery" id="gallery">

                        <h1 class="heading">
                            <span>c</span>
                            <span>a</span>
                            <span>s</span>
                            <span>a</span>
                            <span>b</span>
                            <span>l</span>
                            <span>a</span>
                            <span>n</span>
                            <span>c</span>
                            <span>a</span>
                        </h1>

                        <div class="box-container">

                            <div class="box">
                                <img src="Photos/kskso.jpg" alt="">
                                <img src="Photos/makla2.jpg" alt="">
                                <img src="Photos/tajin.jpg" alt="">
                                <div class="content">
                                    <h3>Amazing food</h3>
                                    <p>Couscous-Champinions Salade-Tajine are the most famous and delecious food in casablanca</p>
                                </div>
                            </div>
                            <div class="box">
                                <img src="Photos/mall.jpg" alt="" style="width:100%;">
                                <div class="content">
                                    <h3>amazing places</h3>
                                    <p>Located on the corniche of Casablanca in Morocco, the Morocco Mall is the largest shopping center in the entire African continent.</p>
                                </div>
                            </div>
                            <div class="box">
                                <img src="Photos/boznika.jpg" alt="" style="width:100%;">
                                <div class="content">
                                    <h3>amazing places</h3>
                                    <p>The town of Bouznika is full of tourist potential due to its distinguished geographical location, which makes its beaches a privileged destination for tourists wishing to relax and escape the summer heat.</p>
                                </div>
                            </div>
                            <div class="box">
                                <img src="Photos/inside.jpg" alt="" style="width:100%;">
                                <div class="content">
                                    <h3>amazing places</h3>
                                    <p>The mosque stands on a promontory looking out to the Atlantic Ocean; worshipers can pray over the sea but there is no glass floor looking into the sea. The walls are of hand-crafted marble and the roof is retractable. A maximum of 105,000 worshipers can gather together for prayer: 25,000 inside the mosque hall and another 80,000 on the mosque's outside ground.</p>
                                </div>
                            </div>

                        </div>

                    </section>

                </div>
                <div class="modal-footer">
                    <a href="https://www.tripadvisor.fr/Tourism-g293732-Casablanca_Casablanca_Settat-Vacations.html" style="margin-right:40%;font-size:3rem">For more</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        
        </div>
    </div>
    <div class="modal fade" id="chaoun" role="dialog">
        <div class="modal-dialog">
        
        <!-- Modal content-->
            <div class="modal-content" style="width:160%;transform:translate(-20%,0)">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="text-align:center;">Chefchaoun</h4>
                </div>
                <div class="modal-body">
                    <!-- content -->

                    <section class="gallery" id="gallery">

                        <h1 class="heading">
                            <span>c</span>
                            <span>h</span>
                            <span>e</span>
                            <span>f</span>
                            <span>c</span>
                            <span>h</span>
                            <span>a</span>
                            <span>o</span>
                            <span>u</span>
                            <span>n</span>
                        </h1>

                        <div class="box-container">

                            <div class="box">
                                <img src="Photos/makla3.jpg" alt="">
                                <img src="Photos/makla4.jpg" alt="">
                                <img src="Photos/makla5.jpg" alt="">
                                <div class="content">
                                    <h3>Amazing food</h3>
                                    <p>Chicken paila-Sweet Potaito tajine- fish paila are the most famous food and delicious in chefchaoun.</p>
                                </div>
                            </div>
                            <div class="box">
                                <img src="Photos/akchour.jpg" alt="" style="width:100%;">
                                <div class="content">
                                    <h3>amazing places</h3>
                                    <p>Akchour is a small village in Morocco, 30 km from Chefchaouen on the road to Oued Laou. It is a site known for these mountains, rivers and especially these waterfalls, each more magnificent than the next Tourists and hikers have the choice between two routes. The path on the right is an hour long route that leads to a large cliff.</p>
                                </div>
                            </div>
                            <div class="box">
                                <img src="Photos/drb.jpg" alt="" style="width:100%;">
                                <div class="content">
                                    <h3>amazing places</h3>
                                    <p>Chefchaouen is a small city in the Rif mountains in the north-west of Morocco. This quirky town is probably one of the prettiest I’ve seen in Morocco because of its blue-washed streets and buildings. That’s why it got nicknamed “the Blue Pearl of Morocco”.</p>
                                </div>
                            </div>
                            <div class="box">
                                <img src="Photos/sidispa.jpg" alt="" style="width:100%;">
                                <div class="content">
                                    <h3>amazing places</h3>
                                    <p>The best address to book your vacation: compare and save on Tripadvisor. Price comparison and great hotel deals with Tripadvisor! Photos of travelers. Millions of reviews. Price comparison. Styles: Romantic, Family.</p>
                                </div>
                            </div>

                        </div>

                    </section>

                </div>
                <div class="modal-footer">
                    <a href="https://www.tripadvisor.fr/Tourism-g304013-Chefchaouen_Tanger_Tetouan_Al_Hoceima-Vacations.html" style="margin-right:40%;font-size:3rem">For more</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        
        </div>
    </div>
    <div class="modal fade" id="dakhla" role="dialog">
        <div class="modal-dialog">
        
        <!-- Modal content-->
            <div class="modal-content" style="width:160%;transform:translate(-20%,0)">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="text-align:center;">Dakhla</h4>
                </div>
                <div class="modal-body">
                    <!-- content -->

                    <section class="gallery" id="gallery">

                        <h1 class="heading">
                            <span>d</span>
                            <span>a</span>
                            <span>k</span>
                            <span>h</span>
                            <span>l</span>
                            <span>a</span>
                        </h1>

                        <div class="box-container">

                            <div class="box">
                                <img src="Photos/kskso1.jpg" alt="">
                                <img src="Photos/makla6.jpg" alt="">
                                <img src="Photos/tea.jpg" alt="">
                                <div class="content">
                                    <h3>Amazing food</h3>
                                    <p>Sahara Couscous - Elhargma - Sahara Tea - are the most famous food in sahara and they are a little bit special and delecious.</p>
                                </div>
                            </div>
                            <div class="box">
                                <img src="Photos/dkh.jpg" alt="" style="width:100%;">
                                <div class="content">
                                    <h3>amazing places</h3>
                                    <p>The best address to book your vacation: compare and save on Tripadvisor. Price comparison and great hotel deals with Tripadvisor! Millions of reviews. Price comparison. Photos of travelers. Facilities: Free Wi-Fi, Swimming pool.</p>
                                </div>
                            </div>
                            <div class="box">
                                <img src="Photos/hotel.jpg" alt="" style="width:100%;">
                                <div class="content">
                                    <h3>amazing places</h3>
                                    <p>Westpoint Dakhla is located in Dakhla and offers accommodation with a bar, a garden and a terrace. Among the facilities of this property are a restaurant, a 24-hour front desk and room service, along with free WiFi..</p>
                                </div>
                            </div>
                            <div class="box">
                                <img src="Photos/camp.jpg" alt="" style="width:100%;">
                                <div class="content">
                                    <h3>amazing places</h3>
                                    <p>We offer you superb accommodation both in the city of Dakhla and at the lagoon beach, so that you can make the most of the beach and practice kitesurfing in the best conditions. We offer the best and latest kitesurfing, surfing and SUP equipment for hire, we will teach you to kite and we will take you on the most beautiful safaris to wild and desert spots.</p>
                                </div>
                            </div>

                        </div>

                    </section>

                </div>
                <div class="modal-footer">
                    <a href="https://www.tripadvisor.fr/Hotel_Review-g479761-d12283414-Reviews-West_Point_Dakhla-Dakhla_Dakhla_Oued_Ed_Dahab.html" style="margin-right:40%;font-size:3rem">For more</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        
        </div>
    </div>
    <div class="modal fade" id="fes" role="dialog">
        <div class="modal-dialog">
        
        <!-- Modal content-->
            <div class="modal-content" style="width:160%;transform:translate(-20%,0)">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="text-align:center;">Fes</h4>
                </div>
                <div class="modal-body">
                    <!-- content -->

                    <section class="gallery" id="gallery">

                        <h1 class="heading">
                            <span>f</span>
                            <span>e</span>
                            <span>s</span>
                        </h1>

                        <div class="box-container">

                            <div class="box">
                                <img src="Photos/bstila.jpg" alt="">
                                <img src="Photos/djaj.jpg" alt="">
                                <img src="Photos/chbak.jpg" alt="">
                                <div class="content">
                                    <h3>Amazing food</h3>
                                    <p>Bastila - Dajaj Mekali - Chebakia & Briouat - Are the most famous food in Fes city and delicious you can find them in traditionnal restaurents.</p>
                                </div>
                            </div>
                            <div class="box">
                                <img src="Photos/driss.jpg" alt="" style="width:100%;">
                                <div class="content">
                                    <h3>amazing places</h3>
                                    <p>Dedicated to the patron saint of Fez, it is located between Place Nejjarine and the Attarine souk and it houses the tomb of Moulay Idriss II, founder of Fez. It is the first holy place in Fez. Its access is forbidden to non-Muslims.</p>
                                </div>
                            </div>
                            <div class="box">
                                <img src="Photos/dardbagh.jpg" alt="" style="width:100%;">
                                <div class="content">
                                    <h3>amazing places</h3>
                                    <p>Fez, an imperial city, a thousand-year-old city, was beginning to rise from its ashes thanks to royal solicitude and the rehabilitation program that has affected the old medina for nearly five years. The true heart of the city unites spirituality and artisanal and industrial know-how, formerly known as "Sanâa".</p>
                                </div>
                            </div>
                            <div class="box">
                                <img src="Photos/riad.jpg" alt="" style="width:100%;">
                                <div class="content">
                                    <h3>amazing places</h3>
                                    <p>Lock in today’s lowest rates and pay nothing upfront, or cancel free for max flexibility! Find the perfect room with easy filters, read real reviews, and get live help any time. 100% Real Reviews. 23 Million+ Customers. 24/7 Customer Support. 63,000 Cities Worldwide.</p>
                                </div>
                            </div>

                        </div>

                    </section>

                </div>
                <div class="modal-footer">
                    <a href="https://www.tripadvisor.fr/Attractions-g293733-Activities-Fes_Fes_Meknes.html" style="margin-right:40%;font-size:3rem">For more</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        
        </div>
    </div>
    <div class="modal fade" id="menara" role="dialog">
        <div class="modal-dialog">
        
        <!-- Modal content-->
            <div class="modal-content" style="width:160%;transform:translate(-20%,0)">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="text-align:center;">Marrakech</h4>
                </div>
                <div class="modal-body">
                    <!-- content -->

                    <section class="gallery" id="gallery">

                        <h1 class="heading">
                            <span>m</span>
                            <span>a</span>
                            <span>r</span>
                            <span>r</span>
                            <span>a</span>
                            <span>k</span>
                            <span>e</span>
                            <span>c</span>
                            <span>h</span>
                        </h1>

                        <div class="box-container">

                            <div class="box">
                                <img src="Photos/street.jpg" alt="">
                                <img src="Photos/harira.jpg" alt="">
                                <img src="Photos/tanjia.jpg" alt="">
                                <div class="content">
                                    <h3>Amazing food</h3>
                                    <p>Street food - Moroccan Soup (Harira) - Tanjia - are the most delicious and famous food in marrakech you have to try it you will love it.</p>
                                </div>
                            </div>
                            <div class="box">
                                <img src="Photos/jamaa.jpg" alt="" style="width:100%;">
                                <div class="content">
                                    <h3>amazing places</h3>
                                    <p>Jemaa el-Fna Square is one of the main cultural spaces in Marrakech. Having become one of the symbols of the city since its founding in the eleventh century, it offers an exceptional concentration of popular Moroccan cultural traditions which are expressed through music, religion and various artistic expressions.</p>
                                </div>
                            </div>
                            <div class="box">
                                <img src="Photos/riad-be.jpg" alt="" style="width:100%;">
                                <div class="content">
                                    <h3>amazing places</h3>
                                    <p>Read Real Hotel Reviews, Compare Prices and Book Now! Tours, Attractions + More. Hidden Gems. Fun Things to Do. Cheap Flights. Easy price comparison. Best Places to Eat. Amazing Experiences. Candid traveler photos. Vacation Rentals. Millions of hotel reviews.</p>
                                </div>
                            </div>
                            <div class="box">
                                <img src="Photos/kotobia.jpg" alt="" style="width:100%;">
                                <div class="content">
                                    <h3>amazing places</h3>
                                    <p>Five times a day, one voice rises above the din of Djemaa El Fna as the muezzin calls the faithful to prayer from the Koutoubia Mosque. The mosque's minaret has been standing guard over the old city since the Almohads erected it in the 12th century. Today it's Marrakesh's most famous landmark. The tower is a monumental cheat sheet of Moorish</p>
                                </div>
                            </div>

                        </div>

                    </section>

                </div>
                <div class="modal-footer">
                    <a href="https://www.tripadvisor.fr/Tourism-g293734-Marrakech_Marrakech_Safi-Vacations.html" style="margin-right:40%;font-size:3rem">For more</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        
        </div>
    </div>
    <div class="modal fade" id="essa" role="dialog">
        <div class="modal-dialog">
        
        <!-- Modal content-->
            <div class="modal-content" style="width:160%;transform:translate(-20%,0)">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="text-align:center;">Essaouira</h4>
                </div>
                <div class="modal-body">
                    <!-- content -->

                    <section class="gallery" id="gallery">

                        <h1 class="heading">
                            <span>e</span>
                            <span>s</span>
                            <span>s</span>
                            <span>a</span>
                            <span>o</span>
                            <span>u</span>
                            <span>i</span>
                            <span>r</span>
                            <span>a</span>
                        </h1>

                        <div class="box-container">

                            <div class="box">
                                <img src="Photos/l7ot.jpg" alt="">
                                <img src="Photos/l7ot2.jpg" alt="">
                                <img src="Photos/l7ot3.jpg" alt="">
                                <div class="content">
                                    <h3>Amazing food</h3>
                                    <p>Essaouira is one of the most kept secrets, generally it’s less crowded due to it’s windy and misty weather it’s a coastal city with an old traditional harbor port, charming Médina and Souks, cafes and restaurants with the most wonderful romantic ocean views..</p>
                                </div>
                            </div>
                            <div class="box">
                                <img src="Photos/mogador.jpg" alt="" style="width:100%;">
                                <div class="content">
                                    <h3>amazing places</h3>
                                    <p>Crenellated walls, special wind, houses with white and blue facades, Essaouira, the ancient Mogador is the "Bride of the Atlantic". It is one of those coastal cities where the unique atmosphere and water activities seamlessly blend. Walk quietly in the shade of its ramparts, the very ones that draw the contours of Astapor, the red city of the "Game of Thrones" serie</p>
                                </div>
                            </div>
                            <div class="box">
                                <img src="Photos/sjr.jpg" alt="" style="width:100%;">
                                <div class="content">
                                    <h3>amazing places</h3>
                                    <p>The Shereefian kingdom has made a place of itself in the hearts of travelers. They praise its sunny climate, its sense of hospitality, the beauty of its landscapes, the picturesque nature of its villages and medinas, the quality of its hotels and resorts and the richness of its culture.</p>
                                </div>
                            </div>
                            <div class="box">
                                <img src="Photos/bab.jpg" alt="" style="width:100%;">
                                <div class="content">
                                    <h3>amazing places</h3>
                                    <p>Bab el-Marsa, is a fortified gate dating from the 18th century and located in Essaouira, Morocco. It is one of the main gates of the current enclosure of the medina of Essaouira and is one of the most imposing and symbolic. It is located in the port of Essaouira.</p>
                                </div>
                            </div>

                        </div>

                    </section>

                </div>
                <div class="modal-footer">
                    <a href="https://www.tripadvisor.fr/Tourism-g298349-Essaouira_Marrakech_Safi-Vacations.html" style="margin-right:40%;font-size:3rem">For more</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        
        </div>
    </div>

<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-alt-circle-up fa-3x" style="size: 7px;"></i></button>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>