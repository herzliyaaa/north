<?php include "../db_conn.php"; ?>

<!-- NOTE: THIS IS TEMPORARY
    TO-DO: FIX THE SQL QUERY (AGE GROUP), SHORTER CODE -->

<?php


// SQL FOR AGE GROUP// (--ICHANGE PA NI KAY MALI--)
$age_group =  mysqli_query(
    $conn,
    "SELECT CASE WHEN TIMESTAMPDIFF(YEAR, date_of_birth, CURDATE()) <= 12   THEN 'child'
     ELSE 'Others'
        END AS age,
        COUNT(*) as childcnt FROM residents
        GROUP BY age ASC"
);

$age_group_count = mysqli_fetch_array($age_group);


$age_group2 =  mysqli_query(
    $conn,
    "SELECT CASE WHEN TIMESTAMPDIFF(YEAR, date_of_birth, CURDATE()) BETWEEN 13 and  18 THEN 'adolescent'
     ELSE 'Others'
        END AS age,
        COUNT(*) as adolescentcnt FROM residents
        GROUP BY age ASC"

);

$age_group_count2 = mysqli_fetch_array($age_group2);




$age_group3 =  mysqli_query(
    $conn,
    "SELECT CASE WHEN TIMESTAMPDIFF(YEAR, date_of_birth, CURDATE())  BETWEEN 19 and 59 THEN 'adult'
         ELSE 'Others'
            END AS age,
            COUNT(*) as adultcnt FROM residents
            GROUP BY age ASC"

);

$age_group_count3 = mysqli_fetch_array($age_group3);




$age_group4 =  mysqli_query(
    $conn,
    "SELECT CASE WHEN TIMESTAMPDIFF(YEAR, date_of_birth, CURDATE()) >= 60 THEN 'senior'
             ELSE 'Others'
                END AS age,
                COUNT(*) as srcnt FROM residents
                GROUP BY age DESC"

);

$age_group_count4 = mysqli_fetch_array($age_group4);



// SQL FOR GENDER//
$maleSqlChart =  mysqli_query($conn, "SELECT COUNT(id) as countM from residents where sex = 'Male'");
$male_count = mysqli_fetch_array($maleSqlChart);

$femaleSqlChart =  mysqli_query($conn, "SELECT COUNT(id) as countF from residents where sex = 'Female'");
$female_count = mysqli_fetch_array($femaleSqlChart);


// SQL FOR AGE GROUP// (--ICHANGE PA NI KAY MALI--)
$childAgeChart =  mysqli_query($conn,"SELECT COUNT(id) as childCount from residents where date_of_birth < DATE_ADD(NOW(),INTERVAL 12 YEAR)");
$child_count = mysqli_fetch_array($childAgeChart);

$adolescentAgeChart =  mysqli_query($conn,"SELECT COUNT(id) as adolescentCount from residents where date_of_birth >= DATE_ADD(NOW(),INTERVAL 13 YEAR)
                                           AND date_of_birth < DATE_ADD(NOW(),INTERVAL 18 YEAR)");

$adolescent_count = mysqli_fetch_array($adolescentAgeChart);

$adultAgeChart =  mysqli_query($conn,"SELECT COUNT(id) as adultCount from residents where date_of_birth >= DATE_ADD(NOW(),INTERVAL 19 YEAR)
                                      AND date_of_birth < DATE_ADD(NOW(),INTERVAL 59 YEAR)");
$adult_count = mysqli_fetch_array($adultAgeChart);

$seniorAgeChart =  mysqli_query($conn,"SELECT COUNT(id) as seniorCount from residents where date_of_birth >= DATE_ADD(NOW(),INTERVAL 60 YEAR)");
$senior_count = mysqli_fetch_array($seniorAgeChart);


// SQL (Barangay Population Count by Purok)//

$prk1Chart =  mysqli_query($conn,"SELECT COUNT(id) as prk1Count from residents where purok = 1 ");
$prk1_count = mysqli_fetch_array($prk1Chart);


$prk2Chart =  mysqli_query($conn,"SELECT COUNT(id) as prk2Count from residents where purok = 2");
$prk2_count = mysqli_fetch_array($prk2Chart);


$prk3Chart =  mysqli_query($conn,"SELECT COUNT(id) as prk3Count from residents where purok = 3");
$prk3_count = mysqli_fetch_array($prk3Chart);

$prk4Chart =  mysqli_query($conn,"SELECT COUNT(id) as prk4Count from residents where purok = 4 ");
$prk4_count = mysqli_fetch_array($prk4Chart);

$prk5Chart =  mysqli_query($conn,"SELECT COUNT(id) as prk5Count from residents where purok = 5");
$prk5_count = mysqli_fetch_array($prk5Chart);


$prk6Chart =  mysqli_query($conn,"SELECT COUNT(id) as prk6Count from residents where purok = 6");
$prk6_count = mysqli_fetch_array($prk6Chart);

$prk7Chart =  mysqli_query($conn,"SELECT COUNT(id) as prk7Count from residents where purok = 7");
$prk7_count = mysqli_fetch_array($prk7Chart);

$prk8Chart =  mysqli_query($conn,"SELECT COUNT(id) as prk8Count from residents where purok = 8");
$prk8_count = mysqli_fetch_array($prk8Chart);

$prk9Chart =  mysqli_query( $conn,"SELECT COUNT(id) as prk9Count from residents where purok = 9");
$prk9_count = mysqli_fetch_array($prk9Chart);

$prk10Chart =  mysqli_query($conn,"SELECT COUNT(id) as prk10Count from residents where purok = 10");
$prk10_count = mysqli_fetch_array($prk10Chart);

$prk11Chart =  mysqli_query($conn,"SELECT COUNT(id) as prk11Count from residents where purok = 11");
$prk11_count = mysqli_fetch_array($prk11Chart);

$prk12Chart =  mysqli_query($conn,"SELECT COUNT(id) as prk12Count from residents where purok = 12");
$prk12_count = mysqli_fetch_array($prk12Chart);

$prk13Chart =  mysqli_query($conn,"SELECT COUNT(id) as prk13Count from residents where purok = 13");
$prk13_count = mysqli_fetch_array($prk13Chart);


// SQL FOR Voter Population Count by Purok//
$prk1Voters =  mysqli_query($conn,"SELECT COUNT(id) as prk1votersCount from residents where purok = 1 AND voter_status = 'Registered' " );
$prk1_votersCount = mysqli_fetch_array($prk1Voters);

$prk2Voters =  mysqli_query($conn,"SELECT COUNT(id) as prk2votersCount from residents where purok = 2 AND voter_status = 'Registered' ");
$prk2_votersCount = mysqli_fetch_array($prk2Voters);

$prk3Voters =  mysqli_query($conn,"SELECT COUNT(id) as prk3votersCount from residents where purok = 3 AND voter_status = 'Registered' ");
$prk3_votersCount = mysqli_fetch_array($prk3Voters);

$prk4Voters =  mysqli_query($conn,"SELECT COUNT(id) as prk4votersCount from residents where purok = 4 AND voter_status = 'Registered' ");
$prk4_votersCount = mysqli_fetch_array($prk4Voters);

$prk5Voters =  mysqli_query($conn,"SELECT COUNT(id) as prk5votersCount from residents where purok = 5 AND voter_status = 'Registered' ");
$prk5_votersCount = mysqli_fetch_array($prk5Voters);

$prk6Voters =  mysqli_query($conn,"SELECT COUNT(id) as prk6votersCount from residents where purok = 6 AND voter_status = 'Registered' ");
$prk6_votersCount = mysqli_fetch_array($prk6Voters);

$prk7Voters =  mysqli_query($conn,"SELECT COUNT(id) as prk7votersCount from residents where purok = 7 AND voter_status = 'Registered' ");
$prk7_votersCount = mysqli_fetch_array($prk7Voters);

$prk8Voters =  mysqli_query($conn,"SELECT COUNT(id) as prk8votersCount from residents where purok = 8 AND voter_status = 'Registered' ");
$prk8_votersCount = mysqli_fetch_array($prk8Voters);

$prk9Voters =  mysqli_query($conn,"SELECT COUNT(id) as prk9votersCount from residents where purok = 9 AND voter_status = 'Registered' ");
$prk9_votersCount = mysqli_fetch_array($prk9Voters);

$prk10Voters =  mysqli_query($conn, "SELECT COUNT(id) as prk10votersCount from residents where purok = 10 AND voter_status = 'Registered' ");
$prk10_votersCount = mysqli_fetch_array($prk10Voters);

$prk11Voters =  mysqli_query($conn,"SELECT COUNT(id) as prk11votersCount from residents where purok = 11 AND voter_status = 'Registered' ");
$prk11_votersCount = mysqli_fetch_array($prk11Voters);

$prk12Voters =  mysqli_query($conn,"SELECT COUNT(id) as prk12votersCount from residents where purok = 12 AND voter_status = 'Registered' ");
$prk12_votersCount = mysqli_fetch_array($prk12Voters);

$prk13Voters =  mysqli_query($conn,"SELECT COUNT(id) as prk13votersCount from residents where purok = 13 AND voter_status = 'Registered' ");
$prk13_votersCount = mysqli_fetch_array($prk13Voters);


// SQL FOR Voter Population Count//
$registeredVoters =  mysqli_query($conn,"SELECT COUNT(id) as registeredVotersCount from residents where voter_status = 'Registered' " );
$registered_votersCount = mysqli_fetch_array($registeredVoters);

$notRegisteredVoters =  mysqli_query($conn,"SELECT COUNT(id) as notRegisteredVotersCount from residents where voter_status = 'Not Registered' " );
$not_registered_votersCount = mysqli_fetch_array($notRegisteredVoters);


?>