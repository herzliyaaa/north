<?php
 
 include "../db_conn.php";
 
	if(ISSET($_REQUEST['officials_archive_id'])){
		$officials_archive_id = $_REQUEST['officials_archive_id'];
		$query=mysqli_query($conn, "SELECT * FROM `officials_archive` WHERE `officials_archive_id` = '$officials_archive_id'");
		$fetch=mysqli_fetch_array($query);
 
		mysqli_query($conn, "INSERT INTO `officials` VALUES('$fetch[id]','$fetch[off_position]', 
		'$fetch[off_name]', '$fetch[off_contact]', '$fetch[off_address]', '$fetch[termStart]', '$fetch[termEnd]', 
		'$fetch[status]', '$fetch[img_url]')");
		mysqli_query($conn, "DELETE FROM `officials_archive` WHERE `officials_archive_id` = '$officials_archive_id'");
		header('location:official-archive.php');
	}
 
?>