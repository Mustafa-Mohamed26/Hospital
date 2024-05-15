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
    <title>time Table</title>
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/timeTable.css">
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
                <p> / TIME TABLE</p>
            </div>
        </nav>
    </header>

    <section>
        <div class="container">
            <table>
                <tr>
                    <th></th>
                    <th>SUNDAY</th>
                    <th>MONDAY</th>
                    <th>TUESDAY</th>
                    <th>WEDNESDAY</th>
                    <th>THURSDAY</th>
                    <th>FRIDAY</th>
                    <th>SATURDAY</th>
                </tr>

                <tr class="even">
                    <td class="clock">8:00 am</td>
                    <td>CARDIO MONITORING <br> 8:00 am - 9:00 am</td>
                    <td>EMERGENCY HELP <br> 8:00 am - 9:00 am</td>
                    <td>CARDIO MONITORING <br> 8:00 am - 9:00 am</td>
                    <td>GENERAL ANALYSIS <br> 8:00 am - 9:00 am</td>
                    <td>CARDIO MONITORING <br> 8:00 am - 9:00 am</td>
                    <td></td>
                    <td>CARDIO MONITORING <br> 8:00 am - 9:00 am</td>
                </tr>

                <tr class="odd">
                    <td class="clock">9:00 am</td>
                    <td>MEDICAL TREATMENT <br> 9:00 am - 10:00 am</td>
                    <td>MEDICAL TREATMENT <br> 9:00 am - 10:00 am</td>
                    <td></td>
                    <td>GENERAL ANALYSIS <br> 9:00 am - 10:00 am</td>
                    <td></td>
                    <td>MEDICAL TREATMENT <br> 9:00 am - 10:00 am</td>
                    <td>MEDICAL TREATMENT <br> 9:00 am - 10:00 am</td>
                </tr>

                <tr class="even">
                    <td class="clock">10:00 am</td>
                    <td>GENERAL ANALYSIS <br> 10:00 am - 11:00 am</td>
                    <td></td>
                    <td>GENERAL ANALYSIS <br> 10:00 am - 11:00 am</td>
                    <td>MEDICAL TREATMENT <br> 10:00 am - 11:00 am</td>
                    <td>LABORATORY TEST <br> 10:00 am - 11:00 am</td>
                    <td>GENERAL ANALYSIS <br> 10:00 am - 11:00 am</td>
                    <td></td>
                </tr>

                <tr class="odd">
                    <td class="clock">11:00 am</td>
                    <td>EMERGENCY HELP <br> 11:00 am - 12:00 pm</td>
                    <td></td>
                    <td>CARDIO MONITORING <br> 11:00 am - 12:00 pm</td>
                    <td>MEDICAL TREATMENT <br> 11:00 am - 12:00 pm</td>
                    <td></td>
                    <td></td>
                    <td>EMERGENCY HELP <br> 11:00 am - 12:00 pm</td>
                </tr>

                <tr class="even">
                    <td class="clock">12:00 pm</td>
                    <td>LABORATORY TEST <br> 12:00 pm - 1:00 pm</td>
                    <td></td>
                    <td>LABORATORY TEST <br> 12:00 pm - 1:00 pm</td>
                    <td>LABORATORY TEST <br> 12:00 pm - 1:00 pm</td>
                    <td>LABORATORY TEST <br> 12:00 pm - 1:00 pm</td>
                    <td>CARDIO MONITORING <br> 12:00 pm - 1:00 pm</td>
                    <td></td>
                </tr>

                <tr class="odd">
                    <td class="clock">1:00 pm</td>
                    <td>SYMPTOM CHECK <br> 1:00 pm - 2:00 pm</td>
                    <td>CARDIO MONITORING <br> 1:00 pm - 2:00 pm</td>
                    <td>SYMPTOM CHECK <br> 1:00 pm - 2:00 pm</td>
                    <td>MEDICAL TREATMENT <br> 1:00 pm - 2:00 pm</td>
                    <td></td>
                    <td>SYMPTOM CHECK <br> 1:00 pm - 2:00 pm</td>
                    <td></td>
                </tr>

                <tr class="even">
                    <td class="clock">2:00 pm</td>
                    <td>CARDIO MONITORING <br> 2:00 pm - 3:00 pm</td>
                    <td>SYMPTOM CHECK <br> 2:00 pm - 3:00 pm</td>
                    <td>CARDIO MONITORING <br> 2:00 pm - 3:00 pm</td>
                    <td>SYMPTOM CHECK <br> 2:00 pm - 3:00 pm</td>
                    <td>CARDIO MONITORING <br> 2:00 pm - 3:00 pm</td>
                    <td>CARDIO MONITORING <br> 2:00 pm - 3:00 pm</td>
                    <td>GENERAL ANALYSIS <br> 2:00 pm - 3:00 pm</td>
                </tr>

                <tr class="odd">
                    <td class="clock">3:00 pm</td>
                    <td></td>
                    <td>MEDICAL TREATMENT <br> 3:00 pm - 4:00 pm</td>
                    <td></td>
                    <td></td>
                    <td>MEDICAL TREATMENT <br> 3:00 pm - 4:00 pm</td>
                    <td>EMERGENCY HELP <br> 3:00 pm - 4:00 pm</td>
                    <td>GENERAL ANALYSIS <br> 3:00 pm - 4:00 pm</td>
                </tr>

                <tr class="even">
                    <td class="clock">4:00 pm</td>
                    <td>GENERAL ANALYSIS <br> 4:00 pm - 5:00 pm</td>
                    <td>LABORATORY TEST <br> 4:00 pm - 5:00 pm</td>
                    <td>GENERAL ANALYSIS <br> 4:00 pm - 5:00 pm</td>
                    <td>LABORATORY TEST <br> 4:00 pm - 5:00 pm</td>
                    <td>GENERAL ANALYSIS <br> 4:00 pm - 5:00 pm</td>
                    <td></td>
                    <td>CARDIO MONITORING <br> 4:00 pm - 5:00 pm</td>
                </tr>

                <tr class="odd">
                    <td class="clock">5:00 pm</td>
                    <td>EMERGENCY HELP <br> 5:00 pm - 6:00 pm</td>
                    <td>EMERGENCY HELP <br> 5:00 pm - 6:00 pm</td>
                    <td></td>
                    <td>EMERGENCY HELP <br> 5:00 pm - 6:00 pm</td>
                    <td>SYMPTOM CHECK <br> 5:00 pm - 6:00 pm</td>
                    <td>MEDICAL TREATMENT <br> 5:00 pm - 6:00 pm</td>
                    <td></td>
                </tr>

                <tr class="even">
                    <td class="clock">6:00 pm</td>
                    <td>LABORATORY TEST <br> 6:00 pm - 7:00 pm</td>
                    <td>GENERAL ANALYSIS <br> 6:00 pm - 7:00 pm</td>
                    <td>EMERGENCY HELP <br> 6:00 pm - 7:00 pm</td>
                    <td>LABORATORY TEST <br> 6:00 pm - 7:00 pm</td>
                    <td>MEDICAL TREATMENT <br> 6:00 pm - 7:00 pm</td>
                    <td>EMERGENCY HELP <br> 6:00 pm - 7:00 pm</td>
                    <td>LABORATORY TEST <br> 6:00 pm - 7:00 pm</td>
                </tr>

                <tr class="odd">
                    <td class="clock">7:00 pm</td>
                    <td>SYMPTOM CHECK <br> 7:00 pm - 8:00 pm</td>
                    <td></td>
                    <td></td>
                    <td>SYMPTOM CHECK <br> 7:00 pm - 8:00 pm</td>
                    <td></td>
                    <td></td>
                    <td>SYMPTOM CHECK <br> 7:00 pm - 8:00 pm</td>
                </tr>

                
            </table>
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