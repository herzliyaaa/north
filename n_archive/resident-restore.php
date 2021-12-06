<?php
 
 include "../db_conn.php";
 
	if(ISSET($_REQUEST['residents_archive_id'])){
		$residents_archive_id = $_REQUEST['residents_archive_id'];
		$query=mysqli_query($conn, "SELECT * FROM `residents_archive` WHERE `residents_archive_id` = '$residents_archive_id'");
		$fetch=mysqli_fetch_array($query);
 
		mysqli_query($conn, "INSERT INTO `residents` VALUES('$fetch[id]','$fetch[first_name]', '$fetch[mid_name]', 
        '$fetch[last_name]', '$fetch[suffix]', '$fetch[sex]', '$fetch[date_of_birth]', '$fetch[house_number]', '$fetch[street]', 
        '$fetch[purok]', '$fetch[occupation]', '$fetch[citizenship]', '$fetch[health_status]', '$fetch[civil_status]', '$fetch[voter_status]',
        '$fetch[phone_number]', '$fetch[tel_number]', '$fetch[email]', '$fetch[img_url]')");
		mysqli_query($conn, "DELETE FROM `residents_archive` WHERE `residents_archive_id` = '$residents_archive_id'");
		header('location:resident-archive.php');
	}
 
?>