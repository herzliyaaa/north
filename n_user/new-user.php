
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>Barangay Management System</title>
    <link rel="icon" type="image/x-icon" href="../img/icons/north-logo.ico" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/modal.css" />
    <script src="../js/nav-time-date.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
   
    </script>
</head>

<body>
    <main>
        <?php include('../navbar.php');  include "../db_conn.php"; ?>
      
        <section>
            <div class="header">
                <h1>Resident Profile</h1>
                <a href="users.php">
                    <button class="back-btn">Back</button>
                </a>
            </div>
            <div class="content">


                <!-- <div class="resident-profile">
                   
         
                </div> -->

                <form action="add-user-function.php" method="post" enctype="multipart/form-data" >
    

                <div class="infos-container">
               

                    <div class="infos">

                        <div class="add-info">
                            <h5>Name:</h5>
                            <input type="text" name="name" required="">
                        </div>

                        <div class="add-info">
                            <h5>User Name:</h5>
                            <input type="text" name="user_name" required="">
                        </div>

                        <div class="add-info">
                            <h5>Password:</h5>
                            <input type="text" name="password" required="">
                        </div>

                      

                        <div class="add-info">
                            <h5>User Role:</h5>
                            <select name="role" id="role" required>
                                <option value="" selected disabled hidden>--</option>
                                <option value="Admin">Admin</option>
                                <option value="Secretary">Secretary</option>
                            </select>
                        </div>

                      

                        <div class="add-info">
                            <button class="save-btn" name="add_user">Save</button>
                            </form>
                        </div>
                        
                    </div>
                </div>

               

            </div>
            </div>
        </section>
        </div>
    </main>

    <script src="../js/script.js"></script> 
   



</body>

</html>

<!-- 
<button class="btn btn--radius-2 btn--red" name="add_user_btn">
    ADD</button> -->