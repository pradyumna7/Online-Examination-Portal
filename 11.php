<?php
session_start();

// Check if user is logged in using the session variable
if (!isset($_SESSION['logged_in'])) {
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.location.href='8point5.html';
    </SCRIPT>");
    exit();
//create an error handler You must log in before viewing your profile page!
}
?>
<?php
session_start();
$studentid = $_SESSION['student_id'];
require "connection_server.php";
$querys = "Select * from student where id='$studentid'";
$results = mysqli_query($mysqli, $querys);
$rows = $results->fetch_assoc();
$branch = $rows["branch"];
$studentname = $_SESSION['student_name'];
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
        <title>HOME</title>
        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="" rel="stylesheet">
        <link href="assets/css/sections-frmwrk-styles.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet" />
        <link href="/Users/simbi/Downloads/bootstraptor-blocksapp-2.1build/authbase finale/akka/authbase/style.css" rel="stylesheet" />
        <style>
            #picone{
                height:500px;
            }
            #secondman{
                font-size:30px;
            }
            /*#third{
                height:400px;
            }*/
            #navig{
                height:80px;
            }
            .top-bar navbar-inverse{
                height:10px!important;
            }

            .details h3{
                color:#000;
            }
            .details p{
                color:#000;
            }
            .explore-btn{

                background:red;
                padding:15px;
                border-radius:20px;
                width:20%;
                margin:0 auto;
                text-align:center;
                color:#fff;
                text-transform:uppercase;
                font-size:18px
            }    
            #lastone{
                color:#000;
            }
            #lastone h4{
                color: #fb2904;
                FONT-WEIGHT: 600;
            }    
            @font-face{
                font-family:Abel;
                src: url(http://fonts.gstatic.com/s/abel/v6/RpUKfqNxoyNe_ka23bzQ2A.ttf);}
            html body {font-family:Abel;}
        </style>

    </head>
    <body>


        <section class="blurred no-padding-bottom no-padding-top" style="display: block; width: auto; height: auto;">
            <nav class="navbar navbar-inverse no-margin-bottom" role="navigation" style="display: block;">
                <div class="container">
                    <div class="navbar-section">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="index.html"><img src="pics/6.png" width="40" height="40" alt="" />&nbsp;&nbsp; OEP</a>

                    </div>

                    <div class="collapse navbar-collapse navbar-ex1-collapse1">
                        <ul class="nav navbar-nav navbar-right">
                            <li >
                                <a href="11.php">HOME</a>
                            </li>
                            <li>
                                <a href="2.html">ABOUT US</a>
                            </li>
                            <li>
                                <a href="21.php">STUDENT REPORT</a>
                            </li>
                            <li>
                                <a href="24.php">STUDENT PROFILE</a>
                            </li>
                            <li>
                                <a href="8point5.html">STUDENT LOGIN</a>
                            </li>
                            <li>
                               <form method="post" action="logout.php">
                                        <input style="border: none;color:black;padding-top:15px; " type="submit" name="logout" value="LOGOUT"><br>
                                    </form>
                            </li>
                        </ul>
                    </div>

                </div>

            </nav>
            <div class="container" style="display: block;">
            </div>
        </section>




        <section style="display: block;">
            <div class="container">
               
                <div class="row  ">
                  <!--  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="width:250px; height:250px">
                        <div class="thumbnail">
                            <img class="img-responsive" src="photi/sdp/<?php echo $studentid ?>.png" alt="" style="height:200px;width:100px"/>
                        </div>
                    </div> -->

                  <h1>Welcome,<span style="color:red"> <?php echo $rows["name"]  ?></span></h1>
                
                    
                </div>

                <div class="row  margin-top-50 right">
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 left" style="min-height: 1px;">
                        <h3>
                            NOTIFICATIONS
                        </h3>
                        <?php
                        require "connection_server.php";
                        $qu = "Select * from notifications where branch='cse';";
                        $re = mysqli_query($mysqli, $qu);
                        if
                        ($re->num_rows != 0) {
                            while ($ro = $re->fetch_assoc()) {
                                echo "  <ul class=" . "recent-thumbnails list-unstyled margin-top-20" . "><li class=" . "page-header margin-bottom-20" . "><h1 style="."color:#00C5FF ".">" . $ro["title"] . "</h1><br><p>    " . $ro["notification"] . "</p>";

                                $not = $ro["notification"];
                                $titl = $ro["title"];
                                $teach = $ro["id"];
                                $que = "Select * from faculty where id='$teach';";
                                $res = mysqli_query($mysqli, $que);
                                $rowan = $res->fetch_assoc();
                                echo " <small>" . "<a href=" . "#" . ">" . $rowan["name"] . " </a>  | <a href=" . "#" . ">" . date("Y/m/d") . "</a></small></li></ul>";
                            }
                        }
                        ?>
                    </div> 
                 
                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 right" style="min-height: 1px;">
                        <h1>Current Tests</h1>
                        <hr>
                        <div id="blog">
                                <?php
                                require "connection_server.php";
                                $querym = "Select * from quiz_questions where branch='cse' order by test_no desc;";
                                $resultm = mysqli_query($mysqli, $querym);
                                ?>

                                <?php
                                $i = 0;
                                if
                                ($resultm->num_rows != 0) {
                                    echo "<h3>QUIZ EXAMS</h3>";
                                    while ($rowm = $resultm->fetch_assoc()) {
                                        $qtno[$i] = $rowm["assignment_no"];
                                        $_SESSION['quiz_question'] = $rowm["assignment_no"];

                                          echo "
                                <li class='col-xs-12 col-sm-6 col-md-4 col-lg-4'>
                                    <div class=" . "thumbnail" . ">
                                        <img class=" . "img-responsive" . " src=" . "photi/the.png />
                                        <h4>
                                        ";
                                        ?>
                                <form method="post" action="17pointquiz.php">
                                    <input style="height:0px;width:0px;border:none;color:white" name="subject" type="text" value="<?php echo $rowm["subject"]?>">
                                    <input style="height:0px;width:0px;border:none;color:white" name="dead" type="text" value="<?php echo $rowm["deadline"]?>">
                                    <input style="height:0px;width:0px;border:none;color:white" name="assignment" type="text" value="<?php echo $rowm["assignment_no"]?>">
                                    <input style="border:none;color:#438bca" type="submit" value="Test-<?php echo $rowm["assignment_no"]?>">
                                        </form>


<?php
                                         echo  " 
                                        </h4> <small><a style="."margin-left:20px;"." href=" . "#>" . $rowm["subject"] . "</a> | <a href=" . "#" . ">" . $rowm["branch"] .
                                        "</a></small></div></li>";
                                    }
                                }
                               
                                ?>


                        </div>
                  

                        <div id="blog">
                            <div class="row  thumbnails list-unstyled margin-top-20">
                                <?php
                                require "connection_server.php";
                                $queryn = "Select * from theory_questions where branch='cse' order by test_no desc;";
                                $resultn = mysqli_query($mysqli, $queryn);
                                ?>
                                <?php
                                $j = 0;
                                if($resultn->num_rows != 0) {
                                    echo "<h3>THEORY EXAMS</h3>";

                                    while ($rown = $resultn->fetch_assoc()) {
                                        $ttno[$j] = $rown["assignment_no"];
                                        $_SESSION['theory_question'] = $rown["assignment_no"];

                                        echo "
                                <li class='col-xs-12 col-sm-6 col-md-4 col-lg-4'>
                                    <div class=" . "thumbnail" . ">
                                        <img class=" . "img-responsive" . " src=" . "photi/the.png />
                                        <h4>
                                        ";
                                        ?>
                                <form method="post" action="17pointtheory.php">
                                    <input style="height:0px;width:0px;border:none;color:white" name="subject" type="text" value="<?php echo $rown["subject"]?>">
                                    <input style="height:0px;width:0px;border:none;color:white" name="dead" type="text" value="<?php echo $rown["time_limit_2"]?>">
                                    <input style="height:0px;width:0px;border:none;color:white" name="assignment" type="text" value="<?php echo $rown["assignment_no"]?>">
                                    <input style="border:none;color:#438bca" type="submit" value="Test-<?php echo $rown["assignment_no"]?>">
                                        </form>


<?php
                                         echo  " 
                                        </h4> <small><a style="."margin-left:20px;"." href=" . "#>" . $rown["subject"] . "</a> | <a href=" . "#" . ">" . $rown["branch"] .
                                        "</a></small></div></li>";
                                    }
                                }
                               
                                ?>

                            </div>
                        </div>
                  
                        <div id="blog">
                            <ul class="row  thumbnails list-unstyled margin-top-20">
                                <?php
                                require "connection_server.php";
                                $queryb = "Select * from pdf_questions where branch='$branch' order by test_no desc;";
                                $resultb = mysqli_query($mysqli, $queryb);
                                ?>

                                <?php
                                $k = 0;
                                if
                                ($resultb->num_rows != 0) {
                                    echo "<h3>PPT EXAMS</h3>";

                                    while ($rowb = $resultb->fetch_assoc()) {
                                        $ptno[$j] = $rowb["test_no"];
                                        $_SESSION['pdf_question'] = $rowb["test_no"];

                                        echo "
                                <li class='col-xs-12 col-sm-6 col-md-4 col-lg-4'>
                                    <div class=" . "thumbnail" . ">
                                        <img class=" . "img-responsive" . " src=" . "photi/ppt.png />
                                        <h4>
                                            <a href=" . "17.php" . ">" . "Test" . $rowb["test_no"] . "</a>
                                        </h4> <small><a href=" . "#>" . $rowb["subject"] . "</a> | <a href=" . "#" . ">" . $rowb["branch"] .
                                        "</a></small></div></li>";
                                    }
                                }
                                ?>

                            </ul>
                        </div>
                    </div>


                </div>
            </div>
        </section>









        <footer class="section-dark sticky-footerbox-layer" style="float:bottom;display: block; Margin-top: 20%; padding: 0px;">
            <div class="container">
                <div class="row" id="footone">
                    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3" style="height: 130px; padding-top: 30px;">
                        <div class="img-wrapper">
                            <img class="img-responsive image-center" src="photi/log.png" alt="logo" style="height:130px" />
                        </div><hr />

                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3" id="foottwo" style="margin-top:5px;min-height: 1px;">
                        <h4>
                            <span>Navigation</span>
                        </h4>
                        <ul class="footer-nav-links list-unstyled">
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <a href="2.html">About Us</a>
                            </li>
                            <li>
                                <a href="8point5.html">Login Student</a>
                            </li>
				<li>
                                <a href="8point7.html">Login Faculty</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3" id="foottwo" style="margin-top:5px; min-height:1px;">
                        <h4>
                            <span>Learn</span>
                        </h4>
                        <ul class="footer-nav-links list-unstyled">
                            <li>
                                <a href="about.html">Feautres</a>
                            </li>
                            <li>
                                <a href="about.html">Help</a>
                            </li>
                            <li>
                                <a href="about.html">Contact</a>
                            </li>
                            <li>
                                <a href="about.html">Device</a>
                            </li>
                            <li>
                                <a href="about.html">Blog</a>
                            </li>
                        </ul>
                    </div>
                    <div id="foottwo" style="margin-top: 0px; margin:0px;">
                        <h4>
                           California State University,Long beach
                        </h4> 1250 Bellflower Blvd,<br> Long Beach, CA 90840 <br /> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center" style="margin-top:5px; min-height: 1px;">
                        Copyright 2018 OEP
                    </div>
                </div>
            </div>
        </footer>


        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/jquery-2.1.1.min.js"><\/script>')</script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script>(function ($) {
                if (typeof $().modal != 'function') {
                    document.write('<script src="js/bootstrap.min.js"><\/script>')}})(window.jQuery)</script>
        <script src="assets/js/jquery.countdown.min.js" type="text/javascript"></script>
        <script src="assets/js/jquery.fitvids.min.js" type="text/javascript"></script>
        <script src="assets/js/jquery.waitforimages.js" type="text/javascript"></script>
        <script src="assets/js/jquery.isotope.min.js" type="text/javascript"></script>
        <script src="assets/js/stellar.js" type="text/javascript"></script>

    </body>
</html>