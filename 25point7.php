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
    $query = "Select * from doubt_questions where professor='raju' and post_no=1;";
    $result = mysqli_query($mysqli,$query);
    $row = $result->fetch_assoc()
    ?>
<html>
<head>
<title>upcoming exam</title>
</head>
<body>
<form action="25point7.php" method="post" >
<h2>you have a question!</h2>
<h1><?php echo $row["doubt"] ?></h1>

<input type="text" name="reply" required>
<input type="submit" name="submit">
</form>
</body>
</html>
  
<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      
$reply = $_POST["reply"];

 $qur = "UPDATE doubt_questions SET answer='$reply' WHERE professor='raju' ";
              $result = $mysqli->query($qur);
                 if ($result){
                    echo "<h1>answered succesful!</h1>";
                }
                else {
                  echo "<h1>answer could not be submitted</h1>";
                }

                $mysqli->close();          
            }
    ?>