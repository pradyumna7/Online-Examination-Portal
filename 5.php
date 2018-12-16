    <?php
    require "connection_server.php";
    $query = "Select * from forum_questions where post_no=2;";
    $result = mysqli_query($mysqli,$query);
    $row = $result->fetch_assoc();
    
    ?>
    

<html> 
    <body>
        <head>
        <tile>
            <h3> <?php echo $row["question"] ?> </h3>
             </tile>
        </head>
        <form action="5.php" method="post">
        <div>
             <?php
    require "connection_server.php";
    $query = "Select * from forum_comments";
    $result = mysqli_query($mysqli,$query);
    if
        ($result->num_rows !=0){
         while($row = $result->fetch_assoc())
         {

        echo "<p>".$row["comment"]."</p>"; 
        echo "<p>".$row["id"]."</p>"; 

    }
        }
    
    
    ?>
        <p> <?php echo $row["comment"] ?> </p>
        <img src="">
        <a href="#">
        </a>
        </div>


        <input type="text" name="comment"  required/>
        <input type="submit" name="post" />
        </form>        
        
    </body>
</html>

<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      
$com = $_POST["comment"];

$sql = "INSERT INTO forum_comments (post_no,comment_no,id,comment)"
                       .  "VALUES (2,1,'1','$com')";
              $result = $mysqli->query($sql);
                 if ($result){
                     echo "<script type='text/javascript'>  window.alert('comment posted!')      
 document.location = '25.php'; </script>";
                }
                else {
                  echo "<h1>comment could not be posted</h1>";
                }
                $mysqli->close();          
            }
    ?>

