<?php
include "../db_conn.php";

$id= $_GET['id'];
$squary = mysqli_query($conn,"DELETE FROM `officials` WHERE id = $id");

 header("location:../n_dashboard/dashboard.php");
?>