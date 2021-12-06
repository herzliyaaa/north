<?php
include "../db_conn.php";

$id= $_GET['trash_id'];
$squery = mysqli_query($conn, "TRUNCATE TABLE trash");

 header("location:resident-archive.php");
?>