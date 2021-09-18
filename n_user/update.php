<?php

if(isset($_POST['btn_update'])){

    include "../db_conn.php";

    $id= $_POST['id'];
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $role = $_POST['role'];

        
                $sql = "UPDATE `users` 
                SET
                `user_name`='$user_name',
                `password`='$password',
                `name`='$name',
                `role`='$role'
                WHERE `id` = '$id'
                ";

                mysqli_query($conn,$sql);
                header("location:view-user.php?id=$id");
                 
                    }
        
        else{
           echo 'error';      

        }
      

        
    
    

?>