<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>Barangay Management System</title>
    <link rel="icon" type="image/x-icon" href="../img/icons/north-logo.ico" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/archive.css" />
    <link rel="stylesheet" href="../css/jquery.dataTables.min.css" />


    <script src="../js/nav-time-date.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="../js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.0/js/dataTables.bootstrap4.min.js"></script>
</head>

<body>
    <main>
        <?php include('../navbar.php'); ?>
        <section>

            <div class="header">
                <h1>Archive</h1>

                <div class="del-all" style="display:flex;align-content: center;justify-content: flex-start;align-items: center;margin-right:20px;">

                    <?php
                    $del_all =  mysqli_query($conn, "select * from officials_archive");
                    $truncate = mysqli_fetch_array($del_all); ?>

                    <a href="official-empty-archive.php?officials_archive_id=<?php echo $truncate['officials_archive_id'] ?>">
                        <button class="delete-btn" style="width: 140px; ">Empty Archive</button></a>
                </div>
            </div>

            <script>
                $(document).ready(function() {
                    $('#offTable').dataTable({
                        // "bPaginate": false,
                        "bLengthChange": false,
                        // "bFilter": true,
                        "bInfo": false,
                        "pageLength": 10
                        // "bAutoWidth": false
                    });
                });
            </script>

            <div class="content">
                <div class="table-content">
                    <table id="offTable" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>ARCHIVE ID</th>
                                <th>OFFICIAL ID</th>
                                <th>NAME</th>
                                <th>POSITION</th>
                                
                                <th>TERM START</th>
                                <th>TERM END</th>
                                <th>STATUS</th>
                                <th></th>
                            </tr>
                        </thead>
                        <?php

                        $squery =  mysqli_query($conn, "select * from officials_archive");
                        while ($row = mysqli_fetch_array($squery)) {

                        ?>
                            <tr>
                                <td><?php echo $row['officials_archive_id'] ?></td>
                                <td><?php echo $row['official_id'] ?></td>
                                <td><?php echo $row['off_name'] ?></td>
                                <td><?php echo $row['off_position'] ?></td>
                                <td><?php echo $row['termStart'] ?></td>
                                <td><?php echo $row['termEnd'] ?></td>
                                <td><?php echo $row['status'] ?></td>


                                <td><a href="view-official.php?officials_archive_id=<?php echo $row['officials_archive_id'] ?>">
                                        <button class="view">View</button></a>
                                    <a href="official-restore.php?officials_archive_id=<?php echo $row['officials_archive_id'] ?>">
                                        <button class="view">Restore</button></a>

                                </td>

                            </tr>
                        <?php
                        }
                        ?>

                    </table>

                </div>
            </div>







        </section>

    </main>




</body>

</html>