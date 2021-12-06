<?php
include "../db_conn.php";

$id = $_GET['id'];
$squary = mysqli_query($conn, "SELECT * FROM `residents` WHERE `id` = '$id'");
$fetch = mysqli_fetch_array($squary);

mysqli_query($conn, "INSERT INTO `residents_archive` VALUES('', '$fetch[id]', '$fetch[first_name]', '$fetch[mid_name]', 
'$fetch[last_name]', '$fetch[suffix]', '$fetch[sex]', '$fetch[date_of_birth]', '$fetch[house_number]', '$fetch[street]', 
'$fetch[purok]', '$fetch[occupation]', '$fetch[citizenship]', '$fetch[health_status]', '$fetch[civil_status]', '$fetch[voter_status]',
'$fetch[phone_number]', '$fetch[tel_number]', '$fetch[email]', '$fetch[img_url]')");
mysqli_query($conn, "DELETE FROM `residents` WHERE id = $id");
header("location:residents.php");
?>

