<?php
    if(isset($_POST['submit'])){
        $firstname  = $_POST['firstname'];
        $lastname   = $_POST['lastname'];
        $phone      = $_POST['phone'];

        $connection = mysqli_connect('localhost','root','','student_info');
        
        if(!$connection){
            die("Not connected.". mysqli_error());
        }

        $query = "INSERT INTO student ( firstname, lastname, phone)";
        $query .= " VALUES ('$firstname','$lastname','$phone')";
    
         $result = mysqli_query($connection, $query);

         if($result){
            echo("Inseart");
         }
         else{
            echo("Failed");
         }
    }
    
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studenst Information</title>
</head>

<body>
    <form action="index.php" method="POST">
        Firstname:<br>
        <input type="text" name ="firstname"><br><br>
        Lastname:<br>
        <input type="text" name ="lastname"><br><br>
        Phone:<br>
        <input type="number" name ="phone"><br><br>
        <input type="submit" value="submit" name="submit">         
    </form>
</body>
</html>