<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/signUp.css">
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
                <p> / SIGN UP</p>
            </div>
        </nav>
    </header>

    <section>

        <div class="box">

            <div class="container">
                <div class="formContainer">

                    <?php

                        include(".\PHP\config.php");
                        if(isset($_POST['submit'])){
                            $username = $_POST['username'];
                            $email = $_POST['email'];
                            $address = $_POST['address'];
                            $dateOfBirth = $_POST['dateOfBirth'];
                            $mobile = $_POST['mobile'];
                            $password = $_POST['password'];

                            //verifying the unique email

                            $verify_query = mysqli_query($con, "SELECT pEmail FROM patient WHERE pEmail = '$email'")or die("Erroe Occured");

                            if(mysqli_num_rows($verify_query) !=0 ){
                                echo "<div class='message'>
                                          <p>This email is used, Try another One Please!</p>
                                      </div> <br>";
                                echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
                             }
                             else{

                                mysqli_query($con,"INSERT INTO patient (pName, pPassword, pEmail, pAddress, pMobileNumber, pDateOfBirth) VALUES ('$username', '$password', '$email', '$address', '$mobile', '$dateOfBirth')") or die("Erroe Occured");
                    
                                echo "<div class='message'>
                                          <p>Registration successfully!</p>
                                      </div> <br>";
                                echo "<a href='login.php'><button class='btn'>Login Now</button>";
                             
                    
                             }
                    
                             }else{
                        
                    ?>

                    <h2>Sign Up</h2>
                    <form id="form" action="" method="Post">
        
                        <div class="inputContainer">
                            <input type="text" placeholder="User Name" id="userName" name="username" required>
                            <span class="error-message" id="nameError"></span>
                        </div>
        
                        <div class="inputContainer">
                            <input type="text" placeholder="Email" id="email" name="email" required>
                            <span class="error-message" id="emailError"></span>
                        </div>

                        <div class="inputContainer">
                            <input type="text" placeholder="address" id="address" name="address" required>
                            <span class="error-message" id="addressError"></span>
                        </div>

                        <div class="inputContainer">
                            <input type="date" placeholder="Date of Birth" id="dateOfBirth" name="dateOfBirth" required>
                            <span class="error-message" id="dateError"></span>
                        </div>

                        <div class="inputContainer">
                            <input type="number" placeholder="Mobile Number" id="mobile" name="mobile" required>
                            <span class="error-message" id="phoneError"></span>
                        </div>
        
                        <div class="inputContainer">
                            <input type="password" placeholder="Password" id="password" name="password" required>
                            <span class="error-message" id="errorPassword1"></span>
                        </div>
        
                        <div class="inputContainer">
                            <input type="password" placeholder="Confirmation Password" id="conf" required>
                            <span class="error-message" id="errorPassword2"></span> 
                        </div>
        
                        <button type="submit" name="submit" id="submit-btn">Sign Up</button>
                        <div class="links">
                            <a href="./logIn.php">have an account? </a>
                        </div>
                    </form>
                    
                </div>
                <?php }?>
            </div>

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