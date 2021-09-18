<?php

if(isset($_POST['btn_update'])){

include "../db_conn.php";
$id= $_POST['id'];
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

        
                $sql = "UPDATE `officials` 
                SET
                `off_position`='$position',
                `off_name`='$offname',
                `off_contact`='$contact',
                `off_address`='$address',
                `termStart`='$start',
                `termEnd`='$end',
                `status`='$status',
                `img_url`='$txt_image'
                WHERE `id` = '$id'
                ";

                mysqli_query($conn,$sql);
                header("location:view-officials.php?id=$id");
                 
                    }
        }
        else if (empty($_POST['my_img'])) {

            $image= $_POST['orig_pic'];
            $sql = "UPDATE `officials` 
            SET
            `off_position`='$position',
            `off_name`='$offname',
            `off_contact`='$contact',
            `off_address`='$address',
            `termStart`='$start',
            `termEnd`='$end',
            `status`='$status',
            `img_url`='$image'
            WHERE `id` = '$id'
            ";

            mysqli_query($conn,$sql);
            header("location:view-officials.php?id=$id");
            

        }
        
    }
        
    
    

?>