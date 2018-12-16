<html>
<body>
 <div>
        <form action="6.php" method="post">
        <input type="text" name="question" required />
        <img src="">
        <a href="#">
        </a>
      <input type="submit" name="post" />
        </form>
 </div>        
 </body>
 </html>
 
 
<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  require "connection_server.php";
$que = $_POST["question"];
            $sql = "INSERT INTO forum_questions (post_no,id,question)"
                       .  "VALUES (2,'1','$que')";
              $result = $mysqli->query($sql);
                 if ($result){
                    echo "<h1>question posted</h1>";
                      echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('question posted')
    window.location.href='8point7.html';
    </SCRIPT>"); 
                }
                else
                    {
                  echo "<h1>question cant be posted</h1>";
                }

                $mysqli->close();          
            }
?>