<?php
require "connection_server.php";
$id = $_POST["id"];
$pass = md5($_POST["password"]);
$query = "Select * from student where id='$id' and password='$pass' ;";
$result = mysqli_query($mysqli,$query);
$rows = $result->fetch_assoc();
$section = $rows["section"];
$name= $rows["name"];

if(mysqli_num_rows($result)>0)
{    
    session_start(); 
    $_SESSION['logged_in']=true;
    $_SESSION['student_id'] = $id;
    $_SESSION['student_section'] = $section;
    $_SESSION['student_name'] = $name;
echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.location.href='11.php';
    </SCRIPT>"); 
}
else
{
    session_destroy(); 
    $message = "Login Failed ..Try Again";
    echo $message;
}

mysqli_close($con)

?>
