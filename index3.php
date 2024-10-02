<?php

$connection = mysqli_connect('localhost','root','','student_info');
        
        if(!$connection){
            die("Not connected.". mysqli_error($connection));
        }

        $query ="SELECT * FROM student";
        
        $showtable = mysqli_query($connection, $query);

        $count = mysqli_num_rows($showtable);
        print_r($count);

        if ($count > 0) {
            ?>

<table style="border:1px solid">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>Password</th>
                    <th>Action</th>
                </tr>
            </thead>
<?php
            while( $row = mysqli_fetch_assoc($showtable)){
                $id = $row["id"];
                $firstname = $row["firstname"];
                $lastname = $row["lastname"];
                $phone = $row["phone"];
?>

<tbody>
                <tr>
                    <td><?php echo $id?></td>
                    <td><?php echo $firstname?></td>
                    <td><?php echo $lastname?></td>
                    <td><?php echo $phone?></td>
                    <td><a href="delete.php?id= <?php echo $id ?>">Delet</a></td>
                    <td><a href="single_data.php?edit_id<?php echo $id?>">Update</a></td>

                </tr>
                <br>
            </tbody>
        </table>

<?php
               
             }
        }else{
            echo("DOnt have any data");
        }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    td, th {
  border: 1px solid #dddddd;

}
<style>
td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
</style>
</head>
<body>
    <p>hello world</p>
</body>
</html>