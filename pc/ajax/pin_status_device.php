<?php
include_once '../../base/includes/db.php';
$pin_status = array();

$query = "SELECT * FROM pin_status;";
$result = mysqli_query($con, $query);
while($row = mysqli_fetch_assoc($result)) :

 $pin_status[$row['pin']] = $row['status']; 
 $status = $row['status'];
 echo $status ;
 
endwhile;
?>