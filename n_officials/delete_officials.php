<?php
include "../db_conn.php";

$id= $_GET['id'];

$squary = mysqli_query($conn, "SELECT * FROM `officials` WHERE `id` = '$id'");
$fetch = mysqli_fetch_array($squary);

mysqli_query($conn, "INSERT INTO `officials_archive` VALUES('', '$fetch[id]', '$fetch[off_position]', 
'$fetch[off_name]', '$fetch[off_contact]', '$fetch[off_address]', '$fetch[termStart]', '$fetch[termEnd]', 
'$fetch[status]', '$fetch[img_url]')");
mysqli_query($conn, "DELETE FROM `officials` WHERE id = $id");

// $squary = mysqli_query($conn,"DELETE FROM `officials` WHERE id = $id");

 header("location:../n_dashboard/dashboard.php");
?>