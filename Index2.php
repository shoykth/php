<!DOCTYPE html>
<?php

$connection = mysqli_connect('localhost','root','','student_info');
        
        if(!$connection){
            die("Not connected.". mysqli_error($connection));
        }

        $query ="SELECT * FROM `student` WHERE 1";
        
        $showtable = mysqli_query($connection, $query);
        
        $count = mysqli_num_rows($showtable);

        if ($count > 0) {
            while( $row = mysqli_fetch_assoc($showtable)){
           
                //echo "{$row['firstname']}";
                //echo"<br>";
                 //simple
                 echo"<pre>";
                     print_r($row);
                 echo"</pre>";
             }
        }else{
            echo("DOnt have any data");
        }

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>hello world</p>
</body>
</html>