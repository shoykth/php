<?php
    $conn = mysqli_connect('localhost','root','','student_info');

    if(!$conn){
        die("Not connected.". mysqli_error($conn));
    }

    //echo $rec = $_REQUEST["id"];

    //$query = "DELETE FROM student WHERE id = 13";

    //$run_delete_qurey = mysqli_query($connection, $query);
    
    
?>