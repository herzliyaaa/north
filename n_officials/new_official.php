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
        <!-- time -->
        <?php include('../navbar.php'); ?>


        <section>
            <div class="header">
                <h1>Barangay Official Profile</h1>
                <a href="../n_dashboard/dashboard.php">
                    <button class="back-btn">Back</button>
                </a>
            </div>
            <div class="content">


                <div class="resident-profile">

                    <div class="drag-area">
                        <img class="upload-icon" src="../img/icons/upload-50 (1).png" alt="">
                        <h5>Drag and drop file here <br>or</h5>

                        <!-- <button class="browse-btn" >
                Browse file
              </button> -->

                        <div class="upload-btn-wrap">
                            <form action="add_officials.php" method="post" enctype="multipart/form-data">

                                <p> Upload File</p>
                                <input class="file-input" name="my_img" type="file">
                                <input type="hidden" name="default" value="image/default.png">
                        </div>
                    </div>


                    <div class="infos">

                        <div class="add-info">
                            <h5>Position:</h5>
                            <select name="position">
                                <option value="" selected hidden>--</option>
                                <option value="Barangay Captain">Barangay Captain</option>
                                <option value="Barangay Kagawad">Barangay Kagawad</option>
                                <option value="SK Chairperson">SK Chairperson</option>
                                <option value="Barangay Secretary">Barangay Secretary</option>
                                <option value="Barangay Treasurer">Barangay Treasurer</option>
                            </select>
                        </div>

                        <div class="add-info">
                            <h5>Full Name:</h5>
                            <input type="text" name="name">
                        </div>

                        <div class="add-info">
                            <h5>Contact:</h5>
                            <input type="text" name="contact">
                        </div>


                        <div class="add-info">
                            <h5>Address:</h5>
                            <input type="text" name="address">
                        </div>

                        <div class="add-info">
                            <h5>Start of Term:</h5>
                            <input type="date" name="start">
                        </div>

                        <div class="add-info">
                            <h5>End of Term:</h5>
                            <input type="date" name="end">
                        </div>




                        <button class="save-btn" name="btn_save">Save</button>
                    </div>

                    </form>
                </div>
            </div>
        </section>
        </div>
    </main>
    <script src="../js/script.js"></script>
</body>

</html>