<?php
include_once '../../base/includes/db.php';
$temp = '';
$name = '';
if(isset($_GET['temp'])){
    $temp = $_GET['temp'];  
}
if(isset($_GET['name'])){
    $name = $_GET['name'];
}

    $query = "INSERT INTO temperature3(value) VALUES ($temp);";
$result = mysqli_query($con, $query);  
echo $query;
?>
