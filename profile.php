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
    <title>Profile</title>
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/profile.css">
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
                            $res_email = $result['pEmail'];
                            $res_mobile = $result['pMobileNumber'];
                            $res_address = $result['pAddress'];
                        }

                        echo "<p></p><a href='profile.php?Id=$res_id'>$res_Uname</a></p>"; 
                    ?>
                </div>
            </div>

            <div class="bottomNav">
                <a href="./index.php">HOME PAGE</a>
                <p> / PROFILE</p>
            </div>
        </nav>
    </header>

    <section class="info">
        <img src="./images/profile.png" alt="">

        <div class="container1">

            <div class="details">
                <p>ID: <?php echo $res_id ?></p>
                <p>NAME: <?php echo $res_Uname ?></p>
                <p>EMAIL: <?php echo $res_email ?></p>
                <p>MOBILE NUMBER: <?php echo $res_mobile ?></p>
                <p>ADDRESS: <?php echo $res_address ?></p>
            </div>

            <div class="logOut"><a href="php/logout.php"> <button class="btn">Log Out</button> </a></div>

        </div>
    </section>

    <section class="appointment">

        <h1>Appointment List</h1>
            <?php
                include("PHP/config.php");
                $sql = "SELECT *
                        FROM doctor, person, department, appointment,receipt
                        WHERE doctor.person_ID = person.person_ID 
                        AND doctor.depart_ID = department.depart_ID 
                        AND appointment.doctor_ID = doctor.doctor_ID
                        AND appointment.receipt_ID = receipt.receipt_ID
                        AND patient_ID = $id";
                $result = mysqli_query($con, $sql);
            
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        echo "<div class='container2'>";

                        echo "<div class='box'>";

                        echo "<div class='left'>";
                        echo "<p> Appointment ID: ". $row['appointment_ID'] ."</p>";
                        echo "<p> Doctor Name: ". $row['pName'] ."</p>";
                        echo "<p> Specialist:". $row['dName'] ."</p>";
                        echo "</div>";

                        echo "<div class='right'>";
                        echo "<p> Date with doctor: ". $row['aDate'] ."</p>";
                        echo "<p> Appointment Scheduling: ". $row['aType'] ."</p>";
                        echo "<p> Receipt: ". $row['rStatus'] ."</p>";
                        echo "</div>";

                        echo "</div>";

                        echo "<div class='bottom'>";
                        echo "<p> Appointment Reason: ". $row['aReason'] ."</p>";
                        echo "</div>";

                        echo "</div>";

                        echo "<br>";

                    };
                }
            ?> 
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