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
                <p> / APPOINTMENT</p>
            </div>
        </nav>
    </header>

    <?php
        include(".\PHP\config.php");
        if(isset($_POST['submit'])){
            $reason = $_POST['reasonA'];
            $doctorID = $_POST['doctor'];
            $date = $_POST['date'];
            $type = $_POST['scheduling'];

            $method = $_POST['card'];


            mysqli_query($con,"INSERT INTO appointment (aReason, patient_ID, doctor_ID, aDate, receipt_ID, aType)
                               VALUES ('$reason', '$id', '$doctorID', '$date', 5, '$type')")
                               or die("Error Occurred");

            mysqli_query($con,"INSERT INTO payment (pMethod, pAmount, patient_ID, receipt_ID)
                               VALUES ('$method', 5 , '$id', 5)")
                               or die("Error Occurred");

            
        }
    ?>

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

        <form action="" method="Post">
            <div class="list">
                <div class="menu">
                    <label for="Department"> Select Department</label><br>
                    <?php
                        $sqlD = "SELECT depart_ID, dName FROM department";
                        $resultD = mysqli_query($con, $sqlD);

                        echo '<select name="Department">';

                        while ($rowD = mysqli_fetch_assoc($resultD)){
                            echo '<option value="' . $rowD['depart_ID'] . '">' . $rowD['dName'] . '</option>';
                        }
                        echo '</select>';

                        
                    ?>
                </div>

                <div class="menu">
                    <label for="doctor"> Select Doctor</label><br>
                    <?php

                        
                        
                        $sqlD = "SELECT doctor.Doctor_ID, doctor.person_ID, person.person_ID, person.pName, doctor.depart_ID, department.dName
                                 FROM doctor, person, department 
                                 WHERE doctor.person_ID = person.person_ID 
                                 AND doctor.depart_ID = department.depart_ID ";
                        $resultD = mysqli_query($con, $sqlD);

                        echo '<select name="doctor">';

                        while ($rowD = mysqli_fetch_assoc($resultD)){
                            echo '<option value="' . $rowD['Doctor_ID'] . '">' . $rowD['pName'] . "(" .$rowD['dName']. ")" .'</option>';
                        }
                        echo '</select>';

                        
                    ?>
                    
                </div>

                <div class="menu">
                    <label for="scheduling"> Select Appointment scheduling</label><br>
                    <select name="scheduling">
                        <option value="In clinic">In clinic</option>
                        <option value="Home care">Home care</option>
                        <option value="Online consultation">Online consultation</option>
                    </select>
                </div>

                <div class="menu">
                    <label for="date">Date of Appointment</label><br>
                    <input type="date" name="date">
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
                    <p>Total price: $5</p>
                </div>
                <div class="button">
                    <button type="submit" name="submit" id="submit-btn">Make a Appointment</button>
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