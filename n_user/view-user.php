<?php
include "../db_conn.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>Barangay Management System</title>
    <link rel="icon" type="image/x-icon" href="../img/icons/north-logo.ico" />
    <link rel="stylesheet" href="../css/style.css" />
    <script src="../js/nav-time-date.js"></script>
</head>

<body>
    <main>
        <?php include('../navbar.php'); ?>
        <section>
            <div class="header">
                <h1>User Profile</h1>
                <a href="users.php">
                    <button class="back-btn">Back</button>
                </a>
            </div>
            <div class="content">


                <div class="resident-profile">

                    <div class="infos">


                        <?php
                $id= $_GET['id'];
                $squery =  mysqli_query($conn,"select * from users where id = $id");
                while ($row = mysqli_fetch_array($squery)){

                echo' 
                <form method="post">
                
              <div class="view-info">
                <h5>ID:</h5>
                <h6>' . $row['id'] . '</h6>
              </div>
              
              <div class="view-info">
                <h5>User Name:</h5>
                <h6>' . $row['user_name'] . '</h6>
              </div>
              
              <div class="view-info">
                <h5>Password:</h5>
                <h6>' . $row['password'] . '</h6>
              </div>

              <div class="view-info">
                <h5>Name:</h5>
                <h6>' . $row['name'] . '</h6>
              </div>
              
              <div class="view-info">
                <h5>Role:</h5>
                <h6>' . $row['role'] . '</h6>
              </div>

              <div class="view-info">
                <a href="edit.php?id='.$row['id'].'">
                 <input type=button class="edit-btn" value="Edit"></input>
                </a>
              </div>

            </div>
            </form>
            '
            ;
                }
                
                ?>

                    </div>
                </div>
        </section>
        </div>
    </main>
</body>

</html>