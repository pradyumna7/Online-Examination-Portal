<html>
<body>
    <h1>ANSWER THE SECURITY QUESTIONS</h1>
    <form action="9point7.php" method="post" >
<p >new password</p>
<input type="text" name="pass" placeholder="password" required>
<p >re-enter new password</p>
<input type="text" name="cpass" placeholder="confirm password" required>
<br><input type="submit" value="Submit" ><br>
    </form>
</body>
</html>

<?php


 require "connection_server.php";
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
if ($_POST['pass'] == $_POST['cpass']) {
        
$ans1 = $_POST["pass"];

$sql = "INSERT INTO forgot_password (id,new_password)"
                       .  "VALUES ('1','$ans1')";
              $result = $mysqli->query($sql);
                 if($result){
                    echo  "<h1>password changed</h1>";
                }
                else {
                  echo "<h1>password does not match</h1>";
                }

                $mysqli->close();          
            }
  }
    ?>
