<?php
session_start();

// Check if user is logged in using the session variable
if (!isset($_SESSION['logged_in'])) {
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.location.href='8point7.html';
    </SCRIPT>");
    exit();
//create an error handler You must log in before viewing your profile page!
}
?><?php
session_start();
$facultyid = $_SESSION['faculty_id'];
$testnum = $_SESSION['testnum'];
$type = $_SESSION['type'];
require "connection_server.php";
$querys = "Select * from faculty where id='$facultyid'";
$results = mysqli_query($mysqli, $querys);
$rows = $results->fetch_assoc();
$subject = $rows["subject"];
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
				 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="index.html"><img src="pics/6.png" width="40" height="40" alt="" />&nbsp;&nbsp; GEP</a>

			</div>
			
			<div class="collapse navbar-collapse navbar-ex1-collapse1">
                        <ul class="nav navbar-nav navbar-right">
                            <li >
                                 <a href="25.php">HOME</a>
                            </li>
                            <li>
                                <a href="2.html">ABOUT US</a>
                            </li>
                            
                            <li>
                                <a href="8point7.html">FACULTY LOGIN</a>
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
</section>


        <h1>students who attempted the test-<?php echo $testnum ?> type-<?php echo $type?></h1>






<?php 
    require "connection_server.php";
    $qud = "Select * from all_tests where faculty_id='$facultyid' and type='theory' and assignment_no='$testnum';";
    $red = mysqli_query($mysqli,$qud);    
     if
        ($red->num_rows !=0){
         while($rod = $red->fetch_assoc())
         { 
           $stuid=$rod["student_id"];
             $quds = "Select * from student where id='$stuid';";
             $reds = mysqli_query($mysqli,$quds); 
             $rods = $reds->fetch_assoc();
             $_SESSION['sname'] = $rods["name"];
             $_SESSION['sid'] = $rods["id"];
        echo "<a href=34.php> ".$rods["name"]."</a><br>"; 
    }
        }
    ?>






































 <footer class="section-dark sticky-footerbox-layer" style="display: block; padding-top: 0px;padding-bottom: 0px;">
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
<script>(function($){if (typeof $().modal != 'function'){document.write('<script src="js/bootstrap.min.js"><\/script>')}})(window.jQuery)</script>
<script src="assets/js/jquery.countdown.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.fitvids.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.waitforimages.js" type="text/javascript"></script>
<script src="assets/js/jquery.isotope.min.js" type="text/javascript"></script>
<script src="assets/js/stellar.js" type="text/javascript"></script>
<script>(function($) {$(function() {if ($('body').css('color') !== 'rgb(51, 51, 51)') {$('head').prepend('<link rel="stylesheet" href="assets/css/bootstrap.min.css">');}});})(window.jQuery);</script>
<script>(function($){$('body').append('<div id="check" class="fa">');var check=$('#check');if(check.css('display')!=='inline-block'){$('head').prepend('<link rel="stylesheet" href="assets/css/font-awesome.min.css">');}check.remove();})(window.jQuery)</script>
<script src="assets/js/custom-scripts.js" type="text/javascript"></script>
<script type="text/javascript">(function($){ var clickEvent418130 = false;$('#carousel-418130').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent418130 = true;});$('#carousel-418130').bind('slide.bs.carousel', function (e) {  if (!clickEvent418130) {  var nextLi = $('#carousel-418130').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-418130').find('li.carousel-control').first().addClass('active');  }}  clickEvent418130 = false;}); var clickEvent331620 = false;$('#carousel-331620').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent331620 = true;});$('#carousel-331620').bind('slide.bs.carousel', function (e) {  if (!clickEvent331620) {  var nextLi = $('#carousel-331620').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-331620').find('li.carousel-control').first().addClass('active');  }}  clickEvent331620 = false;}); var clickEvent658304 = false;$('#carousel-658304').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent658304 = true;});$('#carousel-658304').bind('slide.bs.carousel', function (e) {  if (!clickEvent658304) {  var nextLi = $('#carousel-658304').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-658304').find('li.carousel-control').first().addClass('active');  }}  clickEvent658304 = false;}); var clickEvent172079 = false;$('#carousel-172079').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent172079 = true;});$('#carousel-172079').bind('slide.bs.carousel', function (e) {  if (!clickEvent172079) {  var nextLi = $('#carousel-172079').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-172079').find('li.carousel-control').first().addClass('active');  }}  clickEvent172079 = false;}); var clickEvent509961 = false;$('#carousel-509961').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent509961 = true;});$('#carousel-509961').bind('slide.bs.carousel', function (e) {  if (!clickEvent509961) {  var nextLi = $('#carousel-509961').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-509961').find('li.carousel-control').first().addClass('active');  }}  clickEvent509961 = false;}); var clickEvent625743 = false;$('#carousel-625743').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent625743 = true;});$('#carousel-625743').bind('slide.bs.carousel', function (e) {  if (!clickEvent625743) {  var nextLi = $('#carousel-625743').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-625743').find('li.carousel-control').first().addClass('active');  }}  clickEvent625743 = false;}); var clickEvent137900 = false;$('#carousel-137900').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent137900 = true;});$('#carousel-137900').bind('slide.bs.carousel', function (e) {  if (!clickEvent137900) {  var nextLi = $('#carousel-137900').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-137900').find('li.carousel-control').first().addClass('active');  }}  clickEvent137900 = false;}); var clickEvent492260 = false;$('#carousel-492260').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent492260 = true;});$('#carousel-492260').bind('slide.bs.carousel', function (e) {  if (!clickEvent492260) {  var nextLi = $('#carousel-492260').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-492260').find('li.carousel-control').first().addClass('active');  }}  clickEvent492260 = false;}); var clickEvent235508 = false;$('#carousel-235508').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent235508 = true;});$('#carousel-235508').bind('slide.bs.carousel', function (e) {  if (!clickEvent235508) {  var nextLi = $('#carousel-235508').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-235508').find('li.carousel-control').first().addClass('active');  }}  clickEvent235508 = false;}); var clickEvent964282 = false;$('#carousel-964282').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent964282 = true;});$('#carousel-964282').bind('slide.bs.carousel', function (e) {  if (!clickEvent964282) {  var nextLi = $('#carousel-964282').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-964282').find('li.carousel-control').first().addClass('active');  }}  clickEvent964282 = false;}); var clickEvent741511 = false;$('#carousel-741511').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent741511 = true;});$('#carousel-741511').bind('slide.bs.carousel', function (e) {  if (!clickEvent741511) {  var nextLi = $('#carousel-741511').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-741511').find('li.carousel-control').first().addClass('active');  }}  clickEvent741511 = false;}); var clickEvent875873 = false;$('#carousel-875873').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent875873 = true;});$('#carousel-875873').bind('slide.bs.carousel', function (e) {  if (!clickEvent875873) {  var nextLi = $('#carousel-875873').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-875873').find('li.carousel-control').first().addClass('active');  }}  clickEvent875873 = false;}); var clickEvent475133 = false;$('#carousel-475133').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent475133 = true;});$('#carousel-475133').bind('slide.bs.carousel', function (e) {  if (!clickEvent475133) {  var nextLi = $('#carousel-475133').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-475133').find('li.carousel-control').first().addClass('active');  }}  clickEvent475133 = false;}); var clickEvent801106 = false;$('#carousel-801106').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent801106 = true;});$('#carousel-801106').bind('slide.bs.carousel', function (e) {  if (!clickEvent801106) {  var nextLi = $('#carousel-801106').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-801106').find('li.carousel-control').first().addClass('active');  }}  clickEvent801106 = false;}); var clickEvent321044 = false;$('#carousel-321044').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent321044 = true;});$('#carousel-321044').bind('slide.bs.carousel', function (e) {  if (!clickEvent321044) {  var nextLi = $('#carousel-321044').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-321044').find('li.carousel-control').first().addClass('active');  }}  clickEvent321044 = false;}); var clickEvent387386 = false;$('#carousel-387386').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent387386 = true;});$('#carousel-387386').bind('slide.bs.carousel', function (e) {  if (!clickEvent387386) {  var nextLi = $('#carousel-387386').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-387386').find('li.carousel-control').first().addClass('active');  }}  clickEvent387386 = false;}); var clickEvent601502 = false;$('#carousel-601502').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent601502 = true;});$('#carousel-601502').bind('slide.bs.carousel', function (e) {  if (!clickEvent601502) {  var nextLi = $('#carousel-601502').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-601502').find('li.carousel-control').first().addClass('active');  }}  clickEvent601502 = false;}); var clickEvent275798 = false;$('#carousel-275798').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent275798 = true;});$('#carousel-275798').bind('slide.bs.carousel', function (e) {  if (!clickEvent275798) {  var nextLi = $('#carousel-275798').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-275798').find('li.carousel-control').first().addClass('active');  }}  clickEvent275798 = false;}); var clickEvent804154 = false;$('#carousel-804154').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent804154 = true;});$('#carousel-804154').bind('slide.bs.carousel', function (e) {  if (!clickEvent804154) {  var nextLi = $('#carousel-804154').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-804154').find('li.carousel-control').first().addClass('active');  }}  clickEvent804154 = false;}); var clickEvent517926 = false;$('#carousel-517926').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent517926 = true;});$('#carousel-517926').bind('slide.bs.carousel', function (e) {  if (!clickEvent517926) {  var nextLi = $('#carousel-517926').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-517926').find('li.carousel-control').first().addClass('active');  }}  clickEvent517926 = false;}); var clickEvent764251 = false;$('#carousel-764251').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent764251 = true;});$('#carousel-764251').bind('slide.bs.carousel', function (e) {  if (!clickEvent764251) {  var nextLi = $('#carousel-764251').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-764251').find('li.carousel-control').first().addClass('active');  }}  clickEvent764251 = false;}); var clickEvent876084 = false;$('#carousel-876084').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent876084 = true;});$('#carousel-876084').bind('slide.bs.carousel', function (e) {  if (!clickEvent876084) {  var nextLi = $('#carousel-876084').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-876084').find('li.carousel-control').first().addClass('active');  }}  clickEvent876084 = false;}); var clickEvent937686 = false;$('#carousel-937686').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent937686 = true;});$('#carousel-937686').bind('slide.bs.carousel', function (e) {  if (!clickEvent937686) {  var nextLi = $('#carousel-937686').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-937686').find('li.carousel-control').first().addClass('active');  }}  clickEvent937686 = false;}); var clickEvent951661 = false;$('#carousel-951661').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent951661 = true;});$('#carousel-951661').bind('slide.bs.carousel', function (e) {  if (!clickEvent951661) {  var nextLi = $('#carousel-951661').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-951661').find('li.carousel-control').first().addClass('active');  }}  clickEvent951661 = false;}); var clickEvent441681 = false;$('#carousel-441681').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent441681 = true;});$('#carousel-441681').bind('slide.bs.carousel', function (e) {  if (!clickEvent441681) {  var nextLi = $('#carousel-441681').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-441681').find('li.carousel-control').first().addClass('active');  }}  clickEvent441681 = false;}); var clickEvent309292 = false;$('#carousel-309292').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent309292 = true;});$('#carousel-309292').bind('slide.bs.carousel', function (e) {  if (!clickEvent309292) {  var nextLi = $('#carousel-309292').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-309292').find('li.carousel-control').first().addClass('active');  }}  clickEvent309292 = false;}); var clickEvent520290 = false;$('#carousel-520290').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent520290 = true;});$('#carousel-520290').bind('slide.bs.carousel', function (e) {  if (!clickEvent520290) {  var nextLi = $('#carousel-520290').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-520290').find('li.carousel-control').first().addClass('active');  }}  clickEvent520290 = false;}); var clickEvent634881 = false;$('#carousel-634881').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent634881 = true;});$('#carousel-634881').bind('slide.bs.carousel', function (e) {  if (!clickEvent634881) {  var nextLi = $('#carousel-634881').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-634881').find('li.carousel-control').first().addClass('active');  }}  clickEvent634881 = false;}); var clickEvent477845 = false;$('#carousel-477845').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent477845 = true;});$('#carousel-477845').bind('slide.bs.carousel', function (e) {  if (!clickEvent477845) {  var nextLi = $('#carousel-477845').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-477845').find('li.carousel-control').first().addClass('active');  }}  clickEvent477845 = false;}); var clickEvent861341 = false;$('#carousel-861341').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent861341 = true;});$('#carousel-861341').bind('slide.bs.carousel', function (e) {  if (!clickEvent861341) {  var nextLi = $('#carousel-861341').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-861341').find('li.carousel-control').first().addClass('active');  }}  clickEvent861341 = false;}); var clickEvent362733 = false;$('#carousel-362733').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent362733 = true;});$('#carousel-362733').bind('slide.bs.carousel', function (e) {  if (!clickEvent362733) {  var nextLi = $('#carousel-362733').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-362733').find('li.carousel-control').first().addClass('active');  }}  clickEvent362733 = false;}); var clickEvent874860 = false;$('#carousel-874860').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent874860 = true;});$('#carousel-874860').bind('slide.bs.carousel', function (e) {  if (!clickEvent874860) {  var nextLi = $('#carousel-874860').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-874860').find('li.carousel-control').first().addClass('active');  }}  clickEvent874860 = false;}); var clickEvent633634 = false;$('#carousel-633634').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent633634 = true;});$('#carousel-633634').bind('slide.bs.carousel', function (e) {  if (!clickEvent633634) {  var nextLi = $('#carousel-633634').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-633634').find('li.carousel-control').first().addClass('active');  }}  clickEvent633634 = false;}); var clickEvent506152 = false;$('#carousel-506152').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent506152 = true;});$('#carousel-506152').bind('slide.bs.carousel', function (e) {  if (!clickEvent506152) {  var nextLi = $('#carousel-506152').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-506152').find('li.carousel-control').first().addClass('active');  }}  clickEvent506152 = false;}); var clickEvent369177 = false;$('#carousel-369177').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent369177 = true;});$('#carousel-369177').bind('slide.bs.carousel', function (e) {  if (!clickEvent369177) {  var nextLi = $('#carousel-369177').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-369177').find('li.carousel-control').first().addClass('active');  }}  clickEvent369177 = false;}); var clickEvent240667 = false;$('#carousel-240667').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent240667 = true;});$('#carousel-240667').bind('slide.bs.carousel', function (e) {  if (!clickEvent240667) {  var nextLi = $('#carousel-240667').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-240667').find('li.carousel-control').first().addClass('active');  }}  clickEvent240667 = false;}); var clickEvent373722 = false;$('#carousel-373722').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent373722 = true;});$('#carousel-373722').bind('slide.bs.carousel', function (e) {  if (!clickEvent373722) {  var nextLi = $('#carousel-373722').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-373722').find('li.carousel-control').first().addClass('active');  }}  clickEvent373722 = false;}); var clickEvent875539 = false;$('#carousel-875539').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent875539 = true;});$('#carousel-875539').bind('slide.bs.carousel', function (e) {  if (!clickEvent875539) {  var nextLi = $('#carousel-875539').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-875539').find('li.carousel-control').first().addClass('active');  }}  clickEvent875539 = false;}); var clickEvent154461 = false;$('#carousel-154461').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent154461 = true;});$('#carousel-154461').bind('slide.bs.carousel', function (e) {  if (!clickEvent154461) {  var nextLi = $('#carousel-154461').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-154461').find('li.carousel-control').first().addClass('active');  }}  clickEvent154461 = false;}); var clickEvent327352 = false;$('#carousel-327352').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent327352 = true;});$('#carousel-327352').bind('slide.bs.carousel', function (e) {  if (!clickEvent327352) {  var nextLi = $('#carousel-327352').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-327352').find('li.carousel-control').first().addClass('active');  }}  clickEvent327352 = false;}); var clickEvent38937 = false;$('#carousel-38937').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent38937 = true;});$('#carousel-38937').bind('slide.bs.carousel', function (e) {  if (!clickEvent38937) {  var nextLi = $('#carousel-38937').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-38937').find('li.carousel-control').first().addClass('active');  }}  clickEvent38937 = false;}); var clickEvent742688 = false;$('#carousel-742688').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent742688 = true;});$('#carousel-742688').bind('slide.bs.carousel', function (e) {  if (!clickEvent742688) {  var nextLi = $('#carousel-742688').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-742688').find('li.carousel-control').first().addClass('active');  }}  clickEvent742688 = false;}); var clickEvent43798 = false;$('#carousel-43798').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent43798 = true;});$('#carousel-43798').bind('slide.bs.carousel', function (e) {  if (!clickEvent43798) {  var nextLi = $('#carousel-43798').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-43798').find('li.carousel-control').first().addClass('active');  }}  clickEvent43798 = false;}); var clickEvent307995 = false;$('#carousel-307995').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent307995 = true;});$('#carousel-307995').bind('slide.bs.carousel', function (e) {  if (!clickEvent307995) {  var nextLi = $('#carousel-307995').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-307995').find('li.carousel-control').first().addClass('active');  }}  clickEvent307995 = false;}); var clickEvent482925 = false;$('#carousel-482925').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent482925 = true;});$('#carousel-482925').bind('slide.bs.carousel', function (e) {  if (!clickEvent482925) {  var nextLi = $('#carousel-482925').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-482925').find('li.carousel-control').first().addClass('active');  }}  clickEvent482925 = false;}); var clickEvent796450 = false;$('#carousel-796450').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent796450 = true;});$('#carousel-796450').bind('slide.bs.carousel', function (e) {  if (!clickEvent796450) {  var nextLi = $('#carousel-796450').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-796450').find('li.carousel-control').first().addClass('active');  }}  clickEvent796450 = false;}); var clickEvent144697 = false;$('#carousel-144697').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent144697 = true;});$('#carousel-144697').bind('slide.bs.carousel', function (e) {  if (!clickEvent144697) {  var nextLi = $('#carousel-144697').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-144697').find('li.carousel-control').first().addClass('active');  }}  clickEvent144697 = false;}); var clickEvent492314 = false;$('#carousel-492314').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent492314 = true;});$('#carousel-492314').bind('slide.bs.carousel', function (e) {  if (!clickEvent492314) {  var nextLi = $('#carousel-492314').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-492314').find('li.carousel-control').first().addClass('active');  }}  clickEvent492314 = false;}); var clickEvent889710 = false;$('#carousel-889710').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent889710 = true;});$('#carousel-889710').bind('slide.bs.carousel', function (e) {  if (!clickEvent889710) {  var nextLi = $('#carousel-889710').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-889710').find('li.carousel-control').first().addClass('active');  }}  clickEvent889710 = false;}); var clickEvent499358 = false;$('#carousel-499358').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent499358 = true;});$('#carousel-499358').bind('slide.bs.carousel', function (e) {  if (!clickEvent499358) {  var nextLi = $('#carousel-499358').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-499358').find('li.carousel-control').first().addClass('active');  }}  clickEvent499358 = false;}); var clickEvent449686 = false;$('#carousel-449686').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent449686 = true;});$('#carousel-449686').bind('slide.bs.carousel', function (e) {  if (!clickEvent449686) {  var nextLi = $('#carousel-449686').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-449686').find('li.carousel-control').first().addClass('active');  }}  clickEvent449686 = false;}); var clickEvent357408 = false;$('#carousel-357408').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent357408 = true;});$('#carousel-357408').bind('slide.bs.carousel', function (e) {  if (!clickEvent357408) {  var nextLi = $('#carousel-357408').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-357408').find('li.carousel-control').first().addClass('active');  }}  clickEvent357408 = false;}); var clickEvent356515 = false;$('#carousel-356515').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent356515 = true;});$('#carousel-356515').bind('slide.bs.carousel', function (e) {  if (!clickEvent356515) {  var nextLi = $('#carousel-356515').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-356515').find('li.carousel-control').first().addClass('active');  }}  clickEvent356515 = false;}); var clickEvent901953 = false;$('#carousel-901953').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent901953 = true;});$('#carousel-901953').bind('slide.bs.carousel', function (e) {  if (!clickEvent901953) {  var nextLi = $('#carousel-901953').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-901953').find('li.carousel-control').first().addClass('active');  }}  clickEvent901953 = false;}); var clickEvent189567 = false;$('#carousel-189567').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent189567 = true;});$('#carousel-189567').bind('slide.bs.carousel', function (e) {  if (!clickEvent189567) {  var nextLi = $('#carousel-189567').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-189567').find('li.carousel-control').first().addClass('active');  }}  clickEvent189567 = false;}); var clickEvent884854 = false;$('#carousel-884854').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent884854 = true;});$('#carousel-884854').bind('slide.bs.carousel', function (e) {  if (!clickEvent884854) {  var nextLi = $('#carousel-884854').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-884854').find('li.carousel-control').first().addClass('active');  }}  clickEvent884854 = false;}); var clickEvent503689 = false;$('#carousel-503689').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent503689 = true;});$('#carousel-503689').bind('slide.bs.carousel', function (e) {  if (!clickEvent503689) {  var nextLi = $('#carousel-503689').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-503689').find('li.carousel-control').first().addClass('active');  }}  clickEvent503689 = false;}); var clickEvent106485 = false;$('#carousel-106485').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent106485 = true;});$('#carousel-106485').bind('slide.bs.carousel', function (e) {  if (!clickEvent106485) {  var nextLi = $('#carousel-106485').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-106485').find('li.carousel-control').first().addClass('active');  }}  clickEvent106485 = false;}); var clickEvent360517 = false;$('#carousel-360517').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent360517 = true;});$('#carousel-360517').bind('slide.bs.carousel', function (e) {  if (!clickEvent360517) {  var nextLi = $('#carousel-360517').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-360517').find('li.carousel-control').first().addClass('active');  }}  clickEvent360517 = false;}); var clickEvent440384 = false;$('#carousel-440384').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent440384 = true;});$('#carousel-440384').bind('slide.bs.carousel', function (e) {  if (!clickEvent440384) {  var nextLi = $('#carousel-440384').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-440384').find('li.carousel-control').first().addClass('active');  }}  clickEvent440384 = false;}); var clickEvent732412 = false;$('#carousel-732412').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent732412 = true;});$('#carousel-732412').bind('slide.bs.carousel', function (e) {  if (!clickEvent732412) {  var nextLi = $('#carousel-732412').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-732412').find('li.carousel-control').first().addClass('active');  }}  clickEvent732412 = false;}); var clickEvent107540 = false;$('#carousel-107540').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent107540 = true;});$('#carousel-107540').bind('slide.bs.carousel', function (e) {  if (!clickEvent107540) {  var nextLi = $('#carousel-107540').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-107540').find('li.carousel-control').first().addClass('active');  }}  clickEvent107540 = false;}); var clickEvent473230 = false;$('#carousel-473230').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent473230 = true;});$('#carousel-473230').bind('slide.bs.carousel', function (e) {  if (!clickEvent473230) {  var nextLi = $('#carousel-473230').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-473230').find('li.carousel-control').first().addClass('active');  }}  clickEvent473230 = false;}); var clickEvent320638 = false;$('#carousel-320638').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent320638 = true;});$('#carousel-320638').bind('slide.bs.carousel', function (e) {  if (!clickEvent320638) {  var nextLi = $('#carousel-320638').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-320638').find('li.carousel-control').first().addClass('active');  }}  clickEvent320638 = false;}); var clickEvent531940 = false;$('#carousel-531940').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent531940 = true;});$('#carousel-531940').bind('slide.bs.carousel', function (e) {  if (!clickEvent531940) {  var nextLi = $('#carousel-531940').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-531940').find('li.carousel-control').first().addClass('active');  }}  clickEvent531940 = false;}); var clickEvent997 = false;$('#carousel-997').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent997 = true;});$('#carousel-997').bind('slide.bs.carousel', function (e) {  if (!clickEvent997) {  var nextLi = $('#carousel-997').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-997').find('li.carousel-control').first().addClass('active');  }}  clickEvent997 = false;}); var clickEvent982898 = false;$('#carousel-982898').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent982898 = true;});$('#carousel-982898').bind('slide.bs.carousel', function (e) {  if (!clickEvent982898) {  var nextLi = $('#carousel-982898').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-982898').find('li.carousel-control').first().addClass('active');  }}  clickEvent982898 = false;}); var clickEvent419132 = false;$('#carousel-419132').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent419132 = true;});$('#carousel-419132').bind('slide.bs.carousel', function (e) {  if (!clickEvent419132) {  var nextLi = $('#carousel-419132').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-419132').find('li.carousel-control').first().addClass('active');  }}  clickEvent419132 = false;}); var clickEvent482874 = false;$('#carousel-482874').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent482874 = true;});$('#carousel-482874').bind('slide.bs.carousel', function (e) {  if (!clickEvent482874) {  var nextLi = $('#carousel-482874').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-482874').find('li.carousel-control').first().addClass('active');  }}  clickEvent482874 = false;}); var clickEvent952060 = false;$('#carousel-952060').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent952060 = true;});$('#carousel-952060').bind('slide.bs.carousel', function (e) {  if (!clickEvent952060) {  var nextLi = $('#carousel-952060').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-952060').find('li.carousel-control').first().addClass('active');  }}  clickEvent952060 = false;}); var clickEvent947279 = false;$('#carousel-947279').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent947279 = true;});$('#carousel-947279').bind('slide.bs.carousel', function (e) {  if (!clickEvent947279) {  var nextLi = $('#carousel-947279').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-947279').find('li.carousel-control').first().addClass('active');  }}  clickEvent947279 = false;}); var clickEvent47517 = false;$('#carousel-47517').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent47517 = true;});$('#carousel-47517').bind('slide.bs.carousel', function (e) {  if (!clickEvent47517) {  var nextLi = $('#carousel-47517').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-47517').find('li.carousel-control').first().addClass('active');  }}  clickEvent47517 = false;}); var clickEvent253903 = false;$('#carousel-253903').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent253903 = true;});$('#carousel-253903').bind('slide.bs.carousel', function (e) {  if (!clickEvent253903) {  var nextLi = $('#carousel-253903').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-253903').find('li.carousel-control').first().addClass('active');  }}  clickEvent253903 = false;}); var clickEvent117515 = false;$('#carousel-117515').find('li[data-target]').click(function () {   $(this).parent().find('.active').removeClass('active');  $(this).addClass('active');clickEvent117515 = true;});$('#carousel-117515').bind('slide.bs.carousel', function (e) {  if (!clickEvent117515) {  var nextLi = $('#carousel-117515').find('li.carousel-control.active').removeClass('active').next().addClass('active');  if (nextLi.length == 0) {  $('#carousel-117515').find('li.carousel-control').first().addClass('active');  }}  clickEvent117515 = false;});})(window.jQuery)</script>

</body>
</html>