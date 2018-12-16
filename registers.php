<?php
 require "connection_server.php";
  if ($_POST['password'] == $_POST['cpassword']) {
        
$id = $_POST["id"];
$name = $_POST["name"];
$email = $_POST["email"];
$password = md5($_POST["password"]);
//$mobile = $_POST["mobile"];
//$gender = $_POST["gender"];
//$dob = $_POST["dob"];
//$branch = $_POST["branch"];
//$section = $_POST["section"];

                //insert user data into database
                $sql = "INSERT INTO student (id, name, email_id ,password) "
                        . "VALUES ('$id','$name','$email','$password')";
                $result = $mysqli->query($sql);
                 if ($result){
                    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Registration successful!,Student added to the database.')
    window.location.href='8point5.html';
    </SCRIPT>"); 
                }
                else {
                  echo "<h1>User could not be added to the database</h1>";
                }
                $mysqli->close();          
            }
    else {
        echo "<h1>password does not match </h1>";
    }
?>
