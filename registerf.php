<?php

 require "connection_server.php";
 if ($_POST['password'] == $_POST['cpassword']) {
        
      
      
$id = $_POST["id"];
$name = $_POST["name"];
$subject = $_POST["subject"];
$email = $_POST["email"];
//$gender = $_POST["gender"];
//$mobile = $_POST["mobile"];
//$dob = $_POST["dob"];
$password = $_POST["password"];
//$sq1 = $_POST["sq1"];
//$a1 = $_POST["a1"];
//$sq2 = $_POST["sq2"];
//$a2 = $_POST["a2"];

                //insert user data into database
                $sql = "INSERT INTO faculty (id,name,subject,email_id,password) "
                        . "VALUES ('$id','$name','$subject','$email','$password')";
                
                
                $result = $mysqli->query($sql);
                 if ($result){
                       echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Registration successful!,Faculty added to the database.')
    window.location.href='8point7.html';
    </SCRIPT>"); 

                }
                else {
                  echo "<h1>User could not be added to the database</h1>";
                }

                $mysqli->close();          
            }
    else {
        echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Passwords Does Not Match')
    window.location.href='8point7.html';
    </SCRIPT>");
    }
?>
