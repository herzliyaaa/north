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
    <link rel="stylesheet" href="../css/jquery.dataTables.min.css" />


    <script src="../js/nav-time-date.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>


    <script src="../js/jquery-paginate.js"></script>

</head>

<body>
    <main>
        <?php include('../navbar.php'); ?>

        <div class="residents-section">
            <!-- 
      <div class="search">
          <img src="../img/icons/search-account-50.png" alt="" />
          <input type="text" placeholder="Search" />
        </div>
      -->
            <div class="directory">
                <div class="header">
                    <h1>Accounts</h1>
                </div>



                <script>
                $(document).ready(function() {
                    $('#usersTable').dataTable({
                        "bPaginate": false,
                        "bLengthChange": false,
                        "bFilter": true,
                        "bInfo": false,
                        dom: 'lrtip'
                        // "bAutoWidth": false
                    });
                });
                </script>

                <div class="content">
                    <table id="usersTable" class="display" style="width:100%;">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Role</th>
                                <th></th>
                            </tr>
                        </thead>

                        <?php    
                
                $squery =  mysqli_query($conn,"select * from users");
                while ($row = mysqli_fetch_array($squery)){

              ?>
                        <tr>
                            <td><?php echo $row['id']?></td>
                            <td><?php echo $row['user_name'] ?></td>
                            <td><?php echo $row['role'] ?></td>
                            <td><a href="view-user.php?id=<?php echo $row['id']?>">
                                    <button class="view">View</button></a>
                            </td>
                        </tr>
                        <?php
                }
                ?>

                    </table>
                </div>
            </div>
        </div>
    </main>
</body>

</html>



<script>
$('#example').paginate({
    limit: 10
});
</script>