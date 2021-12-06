<?php
 
 include "../db_conn.php";
 
	if(ISSET($_REQUEST['trash_id'])){
		$trash_id = $_REQUEST['trash_id'];
		$query=mysqli_query($conn, "SELECT * FROM `trash` WHERE `trash_id` = '$trash_id'");
		$fetch=mysqli_fetch_array($query);
 
		mysqli_query($conn, "INSERT INTO `residents` VALUES('$fetch[id]','$fetch[first_name]', '$fetch[mid_name]', 
        '$fetch[last_name]', '$fetch[suffix]', '$fetch[sex]', '$fetch[date_of_birth]', '$fetch[house_number]', '$fetch[street]', 
        '$fetch[purok]', '$fetch[occupation]', '$fetch[citizenship]', '$fetch[health_status]', '$fetch[civil_status]', '$fetch[voter_status]',
        '$fetch[phone_number]', '$fetch[tel_number]', '$fetch[email]', '$fetch[img_url]')");
		mysqli_query($conn, "DELETE FROM `trash` WHERE `trash_id` = '$trash_id'");
		header('location:resident-archive.php');
	}
 
?>