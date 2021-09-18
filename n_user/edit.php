<?php 
            include "../db_conn.php";
            $id = $_GET['id'];
            $squery =  mysqli_query($conn,"SELECT * FROM `users` WHERE id = $id");
            while ($row = mysqli_fetch_array($squery))
            {
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
                <h1>Resident Profile</h1>

                <a href="view-user.php?id=<?php echo $id ?>">
                    <button class="back-btn">Back</button>
                </a>
            </div>
            <div class="content">


                <div class="resident-profile">


                    <form method="post" enctype="multipart/form-data" action="update.php">
                </div>


                <div class="infos">

                    <div class="add-info">
                        <h5>ID:</h5>
                        <p><?php echo $row['id']; ?></p>
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    </div>

                    <div class="add-info">
                        <h5>User Name:</h5>
                        <input type="text" name="user_name" value="<?php echo $row['user_name']; ?>">
                    </div>

                    <div class="add-info">
                        <h5>Password:</h5>
                        <input type="text" name="password" value="<?php echo $row['password']; ?>">
                    </div>

                    <div class="add-info">
                        <h5>Name:</h5>
                        <input type="text" name="name" value="<?php echo $row['name']; ?>">
                    </div>

                    <div class="add-info">
                        <h5>Role:</h5>
                        <p><?php echo $row['role']; ?></p>
                        <input type="hidden" name="role" value="<?php echo $row['role']; ?>">
                    </div>

                    <button class="save-btn" name="btn_update">Save</button>
                </div>
                </form>
                <?php 
            } 
            ?>
            </div>
            </div>
        </section>
        </div>
    </main>
</body>

</html>