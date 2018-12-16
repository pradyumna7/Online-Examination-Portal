    <?php
    require "connection_server.php";
    $query = "Select * from faculty where id='12345';";
    $result = mysqli_query($mysqli,$query);
    $row = $result->fetch_assoc();
    ?>

<html>
<body>
    <h1>ANSWER THE SECURITY QUESTIONS</h1>
    <form action="9point5.php" method="post" >
<p >1.<?php echo $row["security_question_1"] ?></p>
<input type="text" name="ans1" placeholder="answer 1" required>
<p >2.<?php echo $row["security_question_2"] ?></p>
<input type="text" name="ans2" placeholder="answer 2" required>
<br><input type="submit" value="Submit" ><br>
    </form>
</body>
</html>
<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      
$ans1 = $_POST["ans1"];
$ans2 = $_POST["ans2"];
$an1=$row["answer_1"];
$an2=$row["answer_2"];

if($ans1==$an1)
{
    if($ans2==$an2)
    {
   echo "<h1>you are real</h1>";
}       }
else {
    echo "<h1>answers does not match</h1>";
                }

                $mysqli->close();          
            }
    ?>
