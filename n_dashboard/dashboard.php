<?php
include "../db_conn.php"
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>Barangay Management System</title>
    <link rel="icon" type="image/x-icon" href="../img/icons/north-logo.ico" />
    <link rel="stylesheet" href="../css/style.css" />
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- <link rel="stylesheet" href="../css/calendar.css" /> -->
    <script src="js/nav-time-date.js"></script>
    <script src="../js/ChartJS/Chart.js"></script>
    <script src="../js/ChartJS/Chart.bundle.js"></script>
</head>

<body>
    <img id="body-img" src="img/login-logo.png" alt="logo" />

    <main>


        <?php include('../navbar.php'); ?>


        <div class="dashboard-section">
            <div class="column1">

                <div class="col-1 a">
                    <div class="pop">
                        <?php
                        $squery = mysqli_query($conn, "select COUNT(*) as cnt from residents");
                        $pop = mysqli_fetch_array($squery);
                        ?>

                        <h1><?php echo $pop['cnt']; ?></h1>
                        <h3>Barangay Population</h3>
                    </div>

                    <img src="../img/icons/crowd-100.png" alt="">

                </div>



                <div class="col-1 b">
                    <div class="male">
                        <?php
                        $squery = mysqli_query($conn, "select COUNT(sex) as cntM from residents where sex='Male'");
                        $male = mysqli_fetch_array($squery);
                        ?>
                        <h1><?php echo $male['cntM']; ?></h1>
                        <h3>Male</h3>

                    </div>
                    <img src="../img/icons/male-100.png" alt="">
                </div>




                <div class="col-1 c">
                    <div class="male">
                        <?php
                        $squery = mysqli_query($conn, "select COUNT(sex) as cntF from residents where sex='Female'");
                        $female = mysqli_fetch_array($squery);
                        ?>
                        <h1><?php echo $female['cntF']; ?></h1>
                        <h3>Female</h3>
                    </div>
                    <img src="../img/icons/female-100.png" alt="">
                </div>

                <div class="col-1 d">
                    <div class="pop">
                        <h3> Voters Population</h3>
                        <div class="votersChart">
                            <canvas id="dash_VotersChart"></canvas>
                        </div>
                    </div>
                </div>


                <div class="col-1 e">
                    <div class="pop">
                        <h3> Age Group <h3>
                                <div class="votersChart">
                                    <canvas id="ageChart"></canvas>
                                </div>
                    </div>
                </div>

                <div class="col-1 f">
                    <div class="pop">
                        <h3>Purok Population</h3>
                        <div class="purokChart">
                            <canvas id="dash_prkChart"></canvas>
                        </div>

                    </div>
                </div>
            </div>



            <div class="column2">
                <div class="welcome-user">
                    <h3>Welcome, <?php echo $_SESSION['role']; ?>!</h3>

                    <div class="expand" onclick="menuToggle();">
                        <div class="expand-arrow">
                        </div>
                    </div>
                </div>

                <div class="dropdown">
                    <ul>
                        <li><a href="#">Account</a></li>
                        <li><a href="../logout.php">Logout</a></li>
                    </ul>
                </div>

                <script>
                    function menuToggle() {
                        const toggleMenu = document.querySelector('.dropdown');
                        toggleMenu.classList.toggle('active')
                    }
                </script>


                <!-- <div class="calendar">
        <div class="month">
        <img class="prev" src="../img/icons/previous-48.png" alt="prev" />
          <div class="date">
            <h1></h1>
            <p></p>
          </div>
          <img class="next" src="../img/icons/next-48.png" alt="next" />
        </div>
        <div class="weekdays">
          <div>Sun</div>
          <div>Mon</div>
          <div>Tue</div>
          <div>Wed</div>
          <div>Thu</div>
          <div>Fri</div>
          <div>Sat</div>
        </div>
        <div class="days"></div>

        <script src="../js/cal.js"></script>
      </div> -->



                <div class="population">

                    <!-- <h1>Barangay Population</h1>

                    <div>

                        <div class="male-female">
                            <?php

                            $squery = mysqli_query($conn, "select COUNT(sex) as cntM from residents where sex='Male'");
                            $male = mysqli_fetch_array($squery);

                            $squery = mysqli_query($conn, "select COUNT(sex) as cntF from residents where sex='Female'");
                            $female = mysqli_fetch_array($squery);
                            ?>



                            <h2><span>Male</span><br /><?php echo $male['cntM']; ?></h2>
                            <h2><span>Female</span><br /><?php echo $female['cntF']; ?></h2>

                        </div>

                        <div class="total-pop">
                            <?php
                            $squery = mysqli_query($conn, "select COUNT(*) as cnt from residents");
                            $wew = mysqli_fetch_array($squery);
                            ?>
                            <header>
                                <?php echo 'Total:<br> ', $wew['cnt']; ?>
                            </header>
                        </div>

                    </div>


                    <h1> Voters Population</h1>
                    <canvas id="dash_VotersChart"></canvas>
                   

                    <h1> Purok Population </h1>
                    <div class="dash_prk_div">

                        <canvas id="dash_prkChart"></canvas>
                    </div> -->

                    <!-- class="dash_myprkChart" -->

                    <!-- <h1> Voters Population per Purok </h1>
                    <div class="dash_prk_div"> -->

                    <!-- 
                    </div> -->



                    <div class="current-text">
                        <h1>Current Barangay Officials</h1>
                        <div>
                            <a href="../n_officials/new_official.php" id='edit'>
                                <button class="edit-official-btn">
                                    <svg fill="#f7f6fb" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="15px" height="15px">
                                        <path d="M 18.414062 2 C 18.158188 2 17.902031 2.0974687 17.707031 2.2929688 L 16 4 L 20 8 L 21.707031 6.2929688 C 22.098031 5.9019687 22.098031 5.2689063 21.707031 4.8789062 L 19.121094 2.2929688 C 18.925594 2.0974687 18.669937 2 18.414062 2 z M 14.5 5.5 L 3 17 L 3 21 L 7 21 L 18.5 9.5 L 14.5 5.5 z" />
                                    </svg>
                                    Edit
                                </button>
                            </a>
                        </div>
                        <?php
                        if ($_SESSION['role'] == 'Secretary') { ?>
                            <script>
                                document.getElementById("edit").style.display = "none";
                            </script>
                        <?php } ?>
                        <h2>Term Period: 2021-2024</h2>
                    </div>


                    <div class="brgycapt">
                        <?php
                        $squery =  mysqli_query($conn, "select * from officials where off_position = 'Barangay Captain'");
                        while ($row = mysqli_fetch_array($squery)) {
                        ?>
                            <a href="../n_officials/view-officials.php?id=<?php echo $row['id']; ?>">
                                <img src="../n_officials/image/<?php echo basename($row['img_url']); ?>" alt="" />
                            </a>
                            <div class="brgycapt-name">
                                <h3><span><?php echo $row['off_position']; ?>: </span><?php echo $row['off_name']; ?></h3>
                            </div>

                        <?php } ?>
                    </div>



                    <div class="brgyofficials">

                        <?php
                        $squery =  mysqli_query($conn, "select * from officials where off_position = 'Barangay Kagawad'");
                        while ($row = mysqli_fetch_array($squery)) {
                        ?>
                            <div class="brgyofficial">
                                <a href="../n_officials/view-officials.php?id=<?php echo $row['id']; ?>">
                                    <img src="../n_officials/image/<?php echo basename($row['img_url']); ?>" alt="" />
                                </a>
                                <h5><?php echo $row['off_name']; ?></h5>
                                <p><?php echo $row['off_position']; ?></p>
                            </div>

                        <?php } ?>

                        <?php
                        $squery =  mysqli_query($conn, "select * from officials where off_position = 'SK Chairperson'");
                        while ($row = mysqli_fetch_array($squery)) {
                        ?>
                            <div class="brgyofficial">
                                <a href="../n_officials/view-officials.php?id=<?php echo $row['id']; ?>">
                                    <img src="../n_officials/image/<?php echo basename($row['img_url']); ?>" alt="" />
                                </a>
                                <h5><?php echo $row['off_name']; ?></h5>
                                <p><?php echo $row['off_position']; ?></p>
                            </div>
                        <?php
                        }
                        ?>

                        <?php
                        $squery =  mysqli_query($conn, "select * from officials where off_position = 'Barangay Secretary'");
                        while ($row = mysqli_fetch_array($squery)) {
                        ?>

                            <div class="brgyofficial">
                                <a href="../n_officials/view-officials.php?id=<?php echo $row['id']; ?>">
                                    <img src="../n_officials/image/<?php echo basename($row['img_url']); ?>" alt="" />
                                </a>
                                <h5><?php echo $row['off_name']; ?></h5>
                                <p><?php echo $row['off_position']; ?></p>
                            </div>
                        <?php
                        }
                        ?>
                        <?php
                        $squery =  mysqli_query($conn, "select * from officials where off_position = 'Barangay Treasurer'");
                        while ($row = mysqli_fetch_array($squery)) {
                        ?>

                            <div class="brgyofficial">
                                <a href="../n_officials/view-officials.php?id=<?php echo $row['id']; ?>">
                                    <img src="../n_officials/image/<?php echo basename($row['img_url']); ?>" alt="" />
                                </a>
                                <h5><?php echo $row['off_name']; ?></h5>
                                <p><?php echo $row['off_position']; ?></p>
                            </div>
                        <?php
                        }
                        ?>
                    </div>





                </div>
            </div>
        </div>
    </main>
</body>

</html>

<?php include "../n_reports/demographic_queries.php" ?>

<?php include "../n_dashboard/dashboard_charts.php" ?>