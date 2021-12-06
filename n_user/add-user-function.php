<?php

if (isset($_POST['add_user'])) {
    include "../db_conn.php";

    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $role = $_POST['role'];



    $sql = "INSERT INTO `users`(
                    `user_name`,
                    `password`,
                    `name`,
                    `role`
                    ) 
            
            VALUES     (
                        '$user_name',
                        '$password ',
                        '$name',
                        '$role'
                        
                        )";

    mysqli_query($conn, $sql);
    header("location: users.php");
} 

// if (mysqli_query($conn, $savesql)) {
//     echo "New record created successfully";}
