<?php

if(isset($_POST['btn_save'])){

include "../db_conn.php";


    $position = $_POST['position'];
    $offname = $_POST['name'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    $status = $_POST['status'];

    // img
    $name = basename($_FILES['my_img']['name']);
    $temp = $_FILES['my_img']['tmp_name'];
    $imagetype = $_FILES['my_img']['type'];
    $size = $_FILES['my_img']['size'];

     $milliseconds = round(microtime(true) * 1000);
     $image = $milliseconds.'_'.$name;
    
            if(($imagetype=="image/jpeg" || $imagetype=="image/png" || $imagetype=="image/bmp") 
            && $size<=10096000){
                    if(move_uploaded_file($temp, 'image/'.$image))
                  {
                   $txt_image = $image;

        
                $sql = "INSERT INTO `officials`(
                    `off_position`,
                    `off_name`,
                    `off_contact`, 
                    `off_address`, 
                    `termStart`, 
                    `termEnd`, 
                    `status`,
                    `img_url`) 
                    VALUES (
                        '$position',
                        '$offname ',
                        '$contact',
                        '$address',
                        '$start',
                        '$end',
                        '$status',
                        '$txt_image')";

                mysqli_query($conn,$sql);
                header("location:../n_dashboard/dashboard.php");
                 
                    }
        }
       
        else if (empty($_POST['my_img'])) {

            $image= $_POST['default'];
            $sql = "INSERT INTO `officials`(
                `off_position`,
                `off_name`,
                `off_contact`, 
                `off_address`, 
                `termStart`, 
                `termEnd`, 
                `status`,
                `img_url`) 
                VALUES (
                    '$position',
                    '$offname ',
                    '$contact',
                    '$address',
                    '$start',
                    '$end',
                    '$status',
                    '$image')";

            mysqli_query($conn,$sql);
            header("location:../n_dashboard/dashboard.php");
            
           

        }
    }


     


?>