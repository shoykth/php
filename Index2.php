<!DOCTYPE html>
<?php

$connection = mysqli_connect('localhost','root','','student_info');
        
        if(!$connection){
            die("Not connected.". mysqli_error());
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