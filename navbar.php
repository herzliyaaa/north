<!-- pag walay naka log in di kasulod sa dashboard -->
<?php
session_start();
if (!isset($_SESSION['id'])) {
  header("Location: ../index.php");
  exit();

}
  include "db_conn.php"
?>
<nav>
    <!-- time -->
    <?php include('../nav-time-date.php'); ?>


    <div class="dashboard-logo">
        <img src="../img/dashboard-logo.png" alt="" />
    </div>
    <div class="links">
        <!-- <a href="../n_dashboard/dashboard.php" class="link">
            <img src="../img/icons/dashboard-48.png" alt="" />
            <h3>Dashboard</h3>
        </a>
        <a href="../n_residents/residents.php" class="link">
            <img src="../img/icons/user-account-48.png" alt="" />
            <h3>Residents</h3>
        </a>
        <a href="../n_certificates/certificates.php" class="link">
            <img src="../img/icons/file-48.png" alt="" />
            <h3>Certificates</h3>
        </a>
        <a href="../n_announcements/announcements.php" class="link">
            <img src="../img/icons/commercial-48.png" alt="" />
            <h3>Announcements</h3>
        </a>
        <a href="../n_reports/reports.php" class="link">
            <img src="../img/icons/bar-graph (1).png" alt="" />

            <h3>Reports</h3>

            <a href="../n_user/users.php" class="link" id="user">
                <img src="../img/icons/users.png" alt="" />
                <h3>User</h3>
            </a>


            <a href="../n_archive/archive.php" class="link">
                <img src="../img/icons/archive-filled-box.png" alt="" />
                <h3>Archive</h3>
            </a> -->

        <div class="link">

            <div class="tooltip">
                Dashboard
            </div>

            <a href="../n_dashboard/dashboard.php">
                <div class="link-icon">
                    <img src="../img/icons/dashboard-48.png" alt="" />
                    <!-- <i class='bx bxs-dashboard'></i> -->
                </div>
            </a>
        </div>


        <div class="link">

            <div class="tooltip">
                Residents
            </div>

            <a href="../n_residents/residents.php">
                <div class="link-icon">
                    <img src="../img/icons/user-account-48.png" alt="" />
                    <!-- <i class='bx bxs-group'></i> -->
                </div>
            </a>
        </div>

        <div class="link">

            <div class="tooltip">
                Certificates
            </div>

            <a href="../n_certificates/certificates.php">
                <div class="link-icon">
                    <img src="../img/icons/file-48.png" alt="" />
                    <!-- <i class='bx bxs-file-blank' ></i> -->
                </div>
            </a>
        </div>

        <div class="link">

            <div class="tooltip">
                Announcements
            </div>

            <a href="../n_announcements/announcements.php">
                <div class="link-icon">
                    <img src="../img/icons/commercial-48.png" alt="" />
                    <!-- <i class='bx bxs-megaphone'></i> -->
                </div>
            </a>
        </div>

        <div class="link">

            <div class="tooltip">
                Reports
            </div>

            <a href="../n_reports/reports.php">
                <div class="link-icon">
                    <img src="../img/icons/bar-graph (1).png" alt="" />
                    <!-- <i class='bx bxs-bar-chart-square' ></i> -->
                </div>
            </a>
        </div>

        <div class="link">

            <div class="tooltip">
                Accounts
            </div>

            <a href="../n_user/users.php" id="user">
                <div class="link-icon">
                    <img src="../img/icons/users.png" alt="" />
                    <!-- <i class='bx bxs-user-circle' ></i> -->
                </div>
            </a>
        </div>

        <div class="link">

            <div class="tooltip">
                Archive
            </div>

            <a href="../n_archive/archive.php">
                <div class="link-icon">
                    <img src="../img/icons/archive-filled-box (2).png" alt="" />
                    <!-- <i class='bx bxs-archive' ></i> -->
                </div>
            </a>
        </div>

        <?php
          if ($_SESSION['role'] == 'Secretary')
          {?>
        <script>
        document.getElementById("user").style.display = "none";
        </script>
        <?php }?>


        <!-- <a href="../logout.php" class="link">
                <img src="../img/icons/exit-48.png" alt="" />
                <h3>Logout</h3>
            </a> -->
    </div>
</nav>