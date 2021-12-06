<?php
include "../db_conn.php";

$id= $_GET['trash_id'];
$squery = mysqli_query($conn,"DELETE FROM `trash` WHERE `trash_id` = $id");

 header("location:resident-archive.php");
?>