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
?><?php
session_start();
$studentid = $_SESSION['student_id'];
$testn = $_SESSION['theory_question'];
$subbb=$_SESSION['subb'];
$asss=$_SESSION['ass_no'];
$testno=$testn;

        
        echo $subbb;
?>


 $sql = "INSERT INTO theory_answers (id,type,subject,branch,section,assignment_no,ans_1,ans_2)"
            . "VALUES ('$studentid','theory','$subject','cse','b',$ass,'$ans1','$ans2')";
    $result = $mysqli->query($sql);
       $fid=$row["id"];
     $sqll = "INSERT INTO all_tests (student_id,faculty_id,type,subject,test_no)"
                       .  "VALUES ('$studentid','$fid','theory','$subject','$testno')";
                       $resultl = $mysqli->query($sqll);
    if ($result) {
          echo "<script type='text/javascript'>  window.alert('test submitted successful!')      
 document.location = '11.php'; </script>";
    } else {
        echo "<h1>test could not be submitted</h1>";
    }

    $mysqli->close();
    
    
    $sql = "INSERT INTO theory_answers (id,type,subject,branch,section,assignment_no,ans_1,ans_2)"
            . "VALUES ('$studentid','theory','$subbb','cse','b',$asss,'$ans1','$ans2')";
    $result = $mysqli->query($sql);
       $fid=$row["id"];
     $sqll = "INSERT INTO all_tests (student_id,faculty_id,type,subject,assignment_no)"
                       .  "VALUES ('$studentid','$fid','theory','$subbb','$asss')";
                       $resultl = $mysqli->query($sqll);
    if ($result) {
          echo "<script type='text/javascript'>  window.alert('test submitted successful!')      
 document.location = '11.php'; </script>";
    } else {
        echo "<h1>test could not be submitted</h1>";
    }

    $mysqli->close();