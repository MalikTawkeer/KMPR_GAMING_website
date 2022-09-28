<!DOCTYPE html>
<html>
  
<head>
    <title>Team Registered</title>
</head>
  
<body bgcolor="green">
    <center>
        <?php
  
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "kmpr_gaming");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        // Taking all 5 values from the form data(input)
        $team_name =  $_REQUEST['team_name'];
        $player1_name = $_REQUEST['player1_name'];
        $player2_name =  $_REQUEST['player2_name'];
        $player3_name =  $_REQUEST['player3_name'];
        $player4_name =  $_REQUEST['player4_name'];
        $address = $_REQUEST['address'];
        $email = $_REQUEST['email'];
          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO teams_registred  VALUES ('$team_name', 
            '$player1_name','$player2_name','$player3_name','$player4_name','$address','$email')";
          
        if(mysqli_query($conn, $sql)){
                echo "<h3>PUBG Team Registered Successfully. </h3>"; 
                echo "<h3>By following details:</h3>"; 
  
            echo nl2br("\n$team_name\n $player1_name\n "
                . "$player2_name\n $player3_name\n $player4_name \n $address \n $email");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>
        <br><a href="home.html">Return to home page</a>
    </center>
</body>
  
</html>