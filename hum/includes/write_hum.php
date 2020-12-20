<?php
include_once '../../base/includes/db.php';
$humidity = '';
$name = '';
if(isset($_GET['humidity'])){
    $humidity = $_GET['humidity'];  
}
if(isset($_GET['name'])){
    $name = $_GET['name'];
}

$query = "INSERT INTO humidity(value) VALUES ($humidity);";
$result = mysqli_query($con, $query);  
echo $query;
?>
