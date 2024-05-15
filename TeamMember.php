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
    <title>Team Member</title>
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/TeamMember.css">
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

                        echo "<p></p><a href='profile.php?Id=$res_id'>$res_Uname</a></p>"; 
                    ?>
                </div>
            </div>

            <div class="bottomNav">
                <a href="./index.php">HOME PAGE</a>
                <p> / TEAM MEMBER</p>
            </div>
        </nav>
    </header>

    <section>
        <div class="card">
            <img src="./images/team-1-640x640-640x517.jpg" alt="">
            <h1>VICKIE BRYANT</h1>
            <p>GENERAL DOCTOR</p>
            <p id="number">1 (800) 254 4512</p>
            <div class="social-links2">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>

            <p id="fav">ADD TO FAVORITES</p>
        </div>

        <div class="description">
            
            <p>Ham hock porchetta ball tip, pork belly jerky venison filet mignon prosciutto rump tri-tip beef. Ground round cupim tongue frankfurter, pork loin short ribs cow pork chop ball tip venison shank filet mignon prosciutto leberkas. Tongue picanha beef tenderloin berkas short ribs. Doner kevin sausage ground round. Boudin chuck strip steak porchetta short loin beef salami pork belly meatball spare ribs pork loin drumstick. Pig alcatra tongue prosciutto turkey pancetta rump porchetta jerky short loin meatball tri-tip salami spare ribs.Jowl beef ribs ribeye meatloaf. Kielbasa strip steak pork loin, tongue biltong kevin capicola hamburger ground round short loin bacon pancetta.</p>
            
            <ul>
                <li>Shoulder chuck swine kevin</li>
                <li>Shankle shank shoulder</li>
                <li>Picanha fatback ground round</li>
                <li>Ball tip cupim leberkas</li>
            </ul>

            <p>Turkey beef ribs shoulder doner, leberkas swine hamburger jowl kielbasa picanha. Meat short ribs boudin jerky pork chop chuck bresaola ham porchetta cupim jowl. Prosciutto ball tip strip steak salami tenderloin t-bone tri-tip kevin, sirloin shank ham past frankfurter jerky. Chuck tongue sausage doner. ham hock ball tip boudin alcatra pork loin porchetta bacon beef ribeye. Pork cow leberkas, short ribs chicken t-bone tri-tip beef turkey bresaola capicola strip steak pork chop filet mignon tenderloin. Spare ribs tenderloin cow, boudin ribeye brisket corned beef. Turkey jerky ad proident, rump aliquip ham hock picanha t-bone sirloin filet mignon. Pork belly minim aliquip veniam. Reprehenderit boudin ea, pork belly jerky magna doner spare ribs ut. Deserunt ex pancetta, pork picanha shankle ball tip ipsum swine enim pork loin brisket fugiat doner.</p>

            <div class="bio">
                <p>BIO</p>
            </div>

            <h1>Biography:</h1>
            <p>Kevin shankle short ribs turducken chicken porchetta. Andouille salami tri-tip, cow beef pork chop jerky filet mignon prosciutto strip steak corned beef pork belly. Strip steak ribeye pig spare ribs, turducken cow pork chop ground round hamburger chuck pastrami filet mignon. Venison beef cow landjaeger ground round picanha spare ribs ribeye jerky shank pork loin drumstick ham porchetta fatback. Pig sausage biltong ham hock andouille shankle pork belly short loin porchetta.</p>

            <h1>Professional Life:</h1>
            <p>Swine pork chop chicken, doner pork tri-tip kevin porchetta chuck gofrger. Leberkas jerky frankfurter beef ribs shank turducken. Leberkas bacon pola landjaeger.</p>
        </div>
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