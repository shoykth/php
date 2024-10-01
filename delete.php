<?php
    $connection = mysqli_connect('localhost','root','','student_info');

    if(!$connection){
        die("Not connected.". mysqli_error($conn));
    }

    $rec = $_REQUEST["id"];

    $query = "DELETE FROM student WHERE id = $rec";

    $run_delete_qurey = mysqli_query($connection, $query);

    if ($run_delete_qurey) {
        header("location: index3.php?deleted");
    }
?>