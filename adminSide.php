<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Side</title>
        <link rel="stylesheet" href="./css/navbar.css">
        <link rel="stylesheet" href="./css/footer.css">
        <link rel="stylesheet" href="./css/adminSide.css">
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
                    <p> / ADMIN SIDE</p>
                </div>
            </nav>
        </header>

        <section>
            <div class="title">
                <h1>Admin Side</h1>
            </div>
            <div class="container">
                <div class="left">
                    <h1>Users</h1>
                    <?php
                    include("PHP/config.php");
                    $sql1 = "SELECT * FROM patient";
                    $result1 = mysqli_query($con, $sql1);

                    if(mysqli_num_rows($result1) > 0){
                        while($row1 = mysqli_fetch_assoc($result1)){
                            echo "<div class='card'>";
                            echo "<p>patient_ID: ". $row1['patient_ID'] ."</p>";
                            echo "<p>pName: ". $row1['pName'] ."</p>";
                            echo "<p>pEmail: ". $row1['pEmail'] ."</p>";
                            echo "<p>pAddress: ". $row1['pAddress'] ."</p>";
                            echo "<p>pMobileNumber: ". $row1['pMobileNumber'] ."</p>";
                            echo "<p>pDateOfBirth: ". $row1['pDateOfBirth'] ."</p>";
                            echo "</div>";
                        }
                    }
                    ?>
                    

                    <h1>doctors</h1>
                    <?php
                    include("PHP/config.php");
                    $sql2 = "SELECT * FROM doctor,person WHERE doctor.person_ID = person.person_ID";
                    $result2 = mysqli_query($con, $sql2);

                    if(mysqli_num_rows($result2) > 0){
                        while($row2 = mysqli_fetch_assoc($result2)){
                            echo "<div class='card'>";
                            echo "<p>doctor_ID: ". $row2['doctor_ID'] ."</p>";
                            echo "<p>pName: ". $row2['pName'] ."</p>";
                            echo "<p>depart_ID: ". $row2['depart_ID'] ."</p>";
                            echo "<p>dSalary: ". $row2['dSalary'] ."</p>";
                            echo "</div>";
                        }
                    }
                    ?>

                    <h1>departments</h1>
                    <?php
                    include("PHP/config.php");
                    $sql3 = "SELECT * FROM department ";
                    $result3 = mysqli_query($con, $sql3);

                    if(mysqli_num_rows($result3) > 0){
                        while($row3 = mysqli_fetch_assoc($result3)){
                            echo "<div class='card'>";
                            echo "<p>depart_ID: ". $row3['depart_ID'] ."</p>";
                            echo "<p>dName: ". $row3['dName'] ."</p>";
                            echo "</div>";
                        }
                    }
                    ?>

                </div>
                <div class="right">
                    <h1>appointments</h1>
                    <?php
                        include("PHP/config.php");
                        $sql4 = "SELECT * FROM appointment ";
                        $result4 = mysqli_query($con, $sql4);

                        if(mysqli_num_rows($result4) > 0){
                            while($row4 = mysqli_fetch_assoc($result4)){
                                echo "<div class='card'>";
                                echo "<p>appointment_ID: ". $row4['appointment_ID'] ."</p>";
                                echo "<p>aReason: ". $row4['aReason'] ."</p>";
                                echo "<p>patient_ID: ". $row4['patient_ID'] ."</p>";
                                echo "<p>doctor_ID: ". $row4['doctor_ID'] ."</p>";
                                echo "<p>aDate: ". $row4['aDate'] ."</p>";
                                echo "<p>receipt_ID: ". $row4['receipt_ID'] ."</p>";
                                echo "<p>aType: ". $row4['aType'] ."</p>";
                                echo "</div>";
                            }
                        }
                    ?>

                    <h1>payments</h1>
                    <?php
                    include("PHP/config.php");
                    $sql5 = "SELECT * FROM payment ";
                    $result5 = mysqli_query($con, $sql5);

                    if(mysqli_num_rows($result5) > 0){
                        while($row5 = mysqli_fetch_assoc($result5)){
                            echo "<div class='card'>";
                            echo "<p>payment_ID: ". $row5['payment_ID'] ."</p>";
                            echo "<p>pMethod: ". $row5['pMethod'] ."</p>";
                            echo "<p>pAmount: ". $row5['pAmount'] ."</p>";
                            echo "<p>pDate: ". $row5['pDate'] ."</p>";
                            echo "<p>patient_ID: ". $row5['patient_ID'] ."</p>";
                            echo "<p>receipt_ID: ". $row5['receipt_ID'] ."</p>";
                            echo "</div>";
                        }
                    }
                    ?>
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