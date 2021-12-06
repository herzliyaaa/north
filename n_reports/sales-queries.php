<?php include "../db_conn.php"; ?>

<?php

// LABELS FOR GRAPHS
$weeklyDate =  mysqli_query($conn, "select date_issued as week from barangay_clearance WHERE date_issued >= DATE_SUB(CURDATE(),INTERVAL 1 week)");
$weekly_label = mysqli_fetch_array($weeklyDate);

$monthlyDate =  mysqli_query($conn, "select date_issued as month from barangay_clearance WHERE date_issued >= DATE_SUB(CURDATE(),INTERVAL 1 month)");
$monthly_label = mysqli_fetch_array($monthlyDate);

$yearlylyDate =  mysqli_query($conn, "select date_issued as year from barangay_clearance WHERE date_issued >= DATE_SUB(CURDATE(),INTERVAL 1 year)");
$yearly_label = mysqli_fetch_array($yearlyDate);


?>

<?php

// LABELS FOR GRAPHS
$weeklySales =  mysqli_query($conn, "select date_issued, count(*) *150 as weeklySales from barangay_clearance WHERE date_issued >= DATE_SUB(CURDATE(),INTERVAL 1 Week) GROUP BY date_issued");
$weekly_sales = mysqli_fetch_array($weeklySales);


?>