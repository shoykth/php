<?php
$connection = mysqli_connect('localhost','root','','student_info');
        
if(!$connection){
    die("Not connected.". mysqli_error($connection));
}

if (isset($_REQUEST['edit_id'])) {
    $Rec_id = $_REQUEST['edit_id'];

    $get_info ="SELECT * FROM student WHERE id = $Rec_id";

    $select_info = mysqli_query($connection, $get_info);

    while ($row = mysqli_fetch_assoc($select_info)) {
        //echo $Rec_id;
        echo $row['firstname'];
?>


<?php

    }
}

?>

<form action="update_data.php" mathod = "post">
        <input type="text" name="firstname" placeholder="firstname">
        <input type="text" name="lastname" placeholder="lastname">
        <input type="number" name="phone" placeholder="phone">
        <input type="submit" name="submit" value="update data">

</form>
