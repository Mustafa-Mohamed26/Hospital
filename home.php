<?php 
   session_start();

   include("PHP/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/home.css">
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />
</head>
<body>
    <header>
        <nav>
            <div class="upNav">
                <div class="title left">
                    <p class="small">EMERGENCY CASES</p>
                    <p class="big">+1(800) 450 7550</p>
                </div>

                <div class="img">
                    <a href="./home.php"><img src="./images/logo.png" alt="logo"></a>
                </div>

                <div class="title right">
                <p class="small">ONLINE CONSULTATION</p>
                <p class="big">VALEO@GMAIL.COM</p>
                </div>
            </div>

            <div class="midNav">
                <ul>
                    <li ><a href="./home.php">HOME</a></li>
                    <li ><a href="./aboutUs.php">ABOUT US</a></li>
                    <li ><a href="./Team.php">TEAM</a></li>
                    <li ><a href="./service.php">SERVICES</a></li>
                    <li ><a href="./TimeTable.php">TIMETABLE</a></li>
                    <li ><a href="./blog.php">BLOG</a></li>
                </ul>

                <div class="reg">
                    <?php 
        
                        $id = $_SESSION['id'];
                        $query = mysqli_query($con,"SELECT*FROM patient WHERE patient_ID=$id");

                        while($result = mysqli_fetch_assoc($query)){
                            $res_Uname = $result['pName'];
                            $res_id = $result['patient_ID'];
                        }

                        if($_SESSION['valid']){
                            echo "<p></p><a href='profile.php?Id=$res_id'>$res_Uname</a></p>";
                        }else{
                            echo "<p><a href='./logIn.php'>Login</a> / <a href='./signUp.php'>Sign Up</a></p>";
                        } 
                    ?>
                </div>
            </div>
        </nav>

        <div class="head">
            <img src="./images/main-slider.png" alt="">

            <div class="open">
                <h3>EMPOWERING PEOPLE</h3>
                <h1>TO IMPROVE THEIR LIVES</h1>
            </div>

            <div class="bottom">
                <div class="hours size">
                    <h3>WORKING HOURS</h3>

                    <div class="content">
                        <div>
                            <P>MONDAY - FRIDAY </P>
                            <p>08:00 AM - 07:00 PM</p>
                        </div>
                        <hr>
                    </div>

                    <div class="content">
                        <div>
                            <P>SATURDAY</P>
                            <p>11:00 AM - 03:00PM</p>
                        </div>
                        <hr>
                    </div>

                    <div class="content">
                        <div>
                            <P>SUNDAY</P>
                            <p>CLOSED</p>
                        </div>
                        
                    </div>

                </div>

                <div class="details size">
                    <h3>CONTACT DETAILS</h3>

                    <div class="content">
                        
                        <P>LIVINGSTONE, SEASON STREET 45/2 LOS ANGELES, INC - 4502</P>
                        <hr>
                        <a href="#">GET DIRECTION ON THE MAP </a>
                    </div>

                </div>

                <div class="appointment size">
                    <h3>REQUEST AN APPOINTMENT</h3>

                    <div class="content">
                        
                        <P>CHOOSE THE RIGHT TIME AND DATE FOR YOU</P>
                        <hr>
                        <a href="./appointment.php">MAKE AN APPOINTMENT</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="section1">
        <img src="./images/doctorSection.png" alt="">

        <div class="Us">
            <h1>What Makes Us Different</h1>
            <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of the moment.</p>
        </div>

        <div class="info">
            <div class="row">
                <div>
                    <img src="./images/icon-c1.png" alt="">
                    <h1>FREE <br>SALTATION</h1>
                </div>

                <div>
                    <img src="./images/icon-c2.png" alt="">
                    <h1>AFFORDABLE <br> PRICE</h1>
                </div>
            </div>

            <div class="row">
                <div>
                    <img src="./images/icon-c3.png" alt="">
                    <h1>QUALIFIED <br>DOCTORS</h1>
                </div>

                <div>
                    <img src="./images/icon-c4.png" alt="">
                    <h1>PROFESSIONAL <br> STAFF</h1>
                </div>
            </div>

            <div class="row">
                <div>
                    <img src="./images/icon-c5.png" alt="">
                    <h1>24/7 <br>OPENED</h1>
                </div>

                <div>
                    <img src="./images/icon-c6.png" alt="">
                    <h1>~50000 HAPPY <br> CLIENTS</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="section2">
        <img src="./images/things.jpg" alt="">

        <div class="services">
            <h1>Our Medical Services</h1>
            <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae</p>
        </div>

        <div class="medical">
            <div class="row2">
                <div>
                    <img src="./images/icon-s1.png" alt="">
                    <h1>Cardio Monitoring</h1>
                    <p>These cases are perfectly simple and easy to distinguish a free hour when our power</p>
                </div>

                <div>
                    <img src="./images/icon-s2.png" alt="">
                    <h1>Medical Treatment</h1>
                    <p>These cases are perfectly simple and easy to distinguish a free hour when our power</p>
                </div>

                <div>
                    <img src="./images/icon-s3.png" alt="">
                    <h1>Emergency Help</h1>
                    <p>These cases are perfectly simple and easy to distinguish a free hour when our power</p>
                </div>
            

            
                <div>
                    <img src="./images/icon-s4.png" alt="">
                    <h1>Symptom Check</h1>
                    <p>These cases are perfectly simple and easy to distinguish a free hour when our power</p>
                </div>

                <div>
                    <img src="./images/icon-s5.png" alt="">
                    <h1>Laboratory Test</h1>
                    <p>These cases are perfectly simple and easy to distinguish a free hour when our power</p>
                </div>

                <div>
                    <img src="./images/icon-s6.png" alt="">
                    <h1>General Analysis</h1>
                    <p>These cases are perfectly simple and easy to distinguish a free hour when our power</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section3">
        <div class="title2">
            <h1>Latest News & Our Blog</h1>
            <p>Sed doming virtute honestatis at, graece tamquam docendi eum an, alterum reformidans est ei necaliquando voluptatum an, eu quidam civibus qui.</p>
        </div>

        <div class="cards">
            <div class="card c1">
                <img src="./images/Depositphotos_1.jpg" alt="">
                <h1>The Earlier You Start, the Better</h1>
                <p>It’s not uncommon for children who have obesity to become overweight adults. Teaching children healthy</p>

                <a href="./blog.php">READ MORE</a>
            </div>

            <div class="card c2">
                <img src="./images/Depositphotos_2.jpg" alt="">
                <h1>Greatly Improves Flexibility</h1>
                <p>With summer in full swing, everyone is out exploring, adventuring, and being active in their</p>

                <a href="./blog.php">READ MORE</a>
            </div>

            <div class="card c3">
                <img src="./images/Depositphotos_3.jpg" alt="">
                <h1>Reduces the Risk of Injury</h1>
                <p>Stretching safely exposes your body to the strenuous limits that your sport or activity may ...</p>

                <a href="./blog.php">READ MORE</a>
            </div>
        </div>
    </section>

    <section class="section4">
        <img src="./images/things.jpg" alt="">
        <div class="container">
            <h1>What patients say About Valeo</h1><br>
            <p id="p1">“The Cancer team at Valeo are nothing short of miracle workers - they were able to help me overcome my Leukemia in just 6 months”</p><br>
            <p id="p2">CHRISTINE BLAINE , BLOOD PATIENT</p>
        </div>
    </section>

    <section class="section5">
        <img src="./images/partner-1-170x97.jpg" alt="">
        <img src="./images/partner-2-170x97.jpg" alt="">
        <img src="./images/partner-3-170x97.jpg" alt="">
        <img src="./images/partner-4-170x97.jpg" alt="">
        <img src="./images/partner-5-170x97.jpg" alt="">
        <img src="./images/partner-6-170x97.jpg" alt="">
    </section>

    <footer>
        <div class="upperF">
            <div class="title left white">
                <p class="small">EMERGENCY CASES</p>
                <p class="big">+1(800) 450 7550</p>
            </div>

            <div class="img">
                <a href="./index.php"><img src="./images/logo_alt.png" alt="logo"></a>
            </div>

            <div class="title right white">
                <p class="small">ONLINE CONSULTATION</p>
                <p class="big">VALEO@GMAIL.COM</p>
            </div>
        </div>

        <div class="midF">
            <div class="slide s1">
                <h1>NEWSLETTER SIGNUP</h1>
                <a href="./signUp.php"> Sign Up</a>
            </div>

            <div class="slide s2">
                <h1>SEARCH ON THE MAP</h1>
                <a href="#">GET DIRECTIONS ON THE MAP</a>
            </div>

            <div class="slide s3">
                <h1>MEET OUR DOCTORS</h1>
                <a href="./TimeTable.php">DOCTORS TIMETABLE</a>
            </div>
        </div>

        <div class="lowerF">
            <p>© VALEO - MEDICAL CLINIC / HEALTH CENTER © 2024</p>
            <div class="social-links">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <p>CREATED WITH BY AUTHOR</p>
        </div>
    </footer>

    
</body>
</html>