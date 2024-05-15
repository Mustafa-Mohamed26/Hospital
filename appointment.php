<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment</title>
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/appointment.css">
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
                    <p><a href="./logIn.php">Login</a> / <a href="./signUp.php">Sign Up</a></p>
                </div>
            </div>

            <div class="bottomNav">
                <a href="./index.php">HOME PAGE</a>
                <p> / APPOINTMENT</p>
            </div>
        </nav>
    </header>

    <section>  
        <h1>Appointment</h1> 
        <div class="container">
            
            <div class="box">
                <div class="card">
                    <p>The Best Doctors</p>
                    <img src="./images/Vector 1.png" alt="">
                </div>

                <div class="card">
                    <p>Care About All Clients</p>
                    <img src="./images/Vector 2.png" alt="">
                </div>

                <div class="card">
                    <p>Communication With <br> Patients</p>
                    <img src="./images/Vector 3.png" alt="">
                </div>
            </div>

        </div>

        <form action="">
            <div class="list">
                <div class="menu">
                    <label for="Department"> Select Department</label><br>
                    <select name="Department">
                        <option>Google
                        <option>Yahoo
                        <option>Friend
                        <option>Other
                    </select>
                </div>

                <div class="menu">
                    <label for="doctor"> Select Doctor</label><br>
                    <select name="doctor">
                        <option>Google
                        <option>Yahoo
                        <option>Friend
                        <option>Other
                    </select>
                </div>

                <div class="menu">
                    <label for="scheduling"> Select Appointment scheduling</label><br>
                    <select name="scheduling">
                        <option>Google
                        <option>Yahoo
                        <option>Friend
                        <option>Other
                    </select>
                </div>

                <div class="menu">
                    <label for="date">Date of Appointment</label><br>
                    <input type="date">
                </div>
            </div>
            <div class="textarea">
            <label for="reasonA">Appointment Reason</label><br>
                <textarea name="reasonA" id="reasonA"></textarea>
            </div>
            <div class="payment">
                <h1>payment</h1>
                <p>Select Payment Method</p>

                <div class="method">
                    <div class="money">
                        <img src="./images/Visa.png" alt=""><br>
                        <label class="radio">
                            
                            <input type="radio" id="method" name="card" value="Visa">
                            <span></span>
                        </label>
                        
                    </div>

                    <div class="money">
                        <img src="./images/MasterCard.png" alt=""><br>
                        <label class="radio">
                        
                            <input type="radio" id="method" name="card" value="MasterCard">
                            <span></span>
                        </label>
                        
                    </div>
                </div>

                <div class="price">
                    <p>Total price: </p>
                </div>
                <div class="button">
                    <button type="submit" id="submit-btn">Make a Appointment</button>
                </div>
            </div>
        </form>
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