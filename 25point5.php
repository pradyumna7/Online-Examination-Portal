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
?>    <?php
    require "connection_server.php";
    $query = "Select * from doubt_questions where professor='raju';";
    $result = mysqli_query($mysqli,$query);
    ?>
<html>
<head>
<title>upcoming exam</title>
</head>
<body>
<h1>questions for faculty(doubts)</h1>

               <?php
    if
        ($result->num_rows !=0){
         while($row = $result->fetch_assoc())
         {
        echo " <button type="."submit"." name=forum1>".$row["post_no"]."</button> <br>"; 
    }
        }
    ?>
</body>
</html>
  