<?php
require "connection_server.php";
$id = $_POST["id"];
$pass = $_POST["password"];
$query = "Select * from faculty where id='$id' and password='$pass' ;";
$result = mysqli_query($mysqli,$query);
$rows = $result->fetch_assoc();
$subject = $rows["subject"];
$name= $rows["name"];
if(mysqli_num_rows($result)>0)
{
    
   session_start(); 
    $_SESSION['logged_in']=true;
    $_SESSION['faculty_id'] = $id;
    $_SESSION['faculty_subject'] = $subject;
    $_SESSION['faculty_name'] = $name;
echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.location.href='25.php';
    </SCRIPT>"); 
}
else
{
    
    $message = "Login Failed ..Try Again";
   
    echo $message;
}

mysqli_close($con)

?>
