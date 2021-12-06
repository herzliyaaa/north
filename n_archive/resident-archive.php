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
                    $del_all =  mysqli_query($conn, "select * from trash");
                    $truncate = mysqli_fetch_array($del_all); ?>

                    <a href="delete-all.php?trash_id=<?php echo $truncate['trash_id'] ?>">
                        <button class="delete-btn" style="width: 140px; ">Empty Archive</button></a>
                </div>
            </div>

            <script>
                $(document).ready(function() {
                    $('#resTable').dataTable({
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
                    <table id="resTable" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>FIRST NAME</th>
                                <th>MIDDLE NAME</th>
                                <th>LAST NAME</th>
                                <th>SEX</th>
                                <th>AGE</th>
                                <th>CIVIL STATUS</th>
                                <th>VOTER STATUS</th>
                                <th></th>
                            </tr>
                        </thead>
                        <?php

                        $squery =  mysqli_query($conn, "select * from trash");
                        while ($row = mysqli_fetch_array($squery)) {

                        ?>
                            <tr>
                                <td><?php echo $row['id'] ?></td>
                                <td><?php echo $row['first_name'] ?></td>
                                <td><?php echo $row['mid_name'] ?></td>
                                <td><?php echo $row['last_name'] ?></td>
                                <td><?php echo $row['sex'] ?></td>
                                <?php
                                //Calculating age
                                $userDob = $row['date_of_birth'];

                                //Create a DateTime object using the user's date of birth.
                                $dob = new DateTime($userDob);

                                //We need to compare the user's date of birth with today's date.
                                $now = new DateTime();

                                //Calculate the time difference between the two dates.
                                $difference = $now->diff($dob);

                                //Get the difference in years, as we are looking for the user's age.
                                $age = $difference->y;
                                ?>
                                <td><?php echo $age ?></td>
                                <td><?php echo $row['civil_status'] ?></td>
                                <td><?php echo $row['voter_status'] ?></td>

                                <td><a href="view-resident.php?trash_id=<?php echo $row['trash_id'] ?>">
                                        <button class="view">View</button></a>
                                    <a href="restore.php?trash_id=<?php echo $row['trash_id'] ?>">
                                        <button class="view">Restore</button></a>
                                    <a href="delete.php?trash_id=<?php echo $row['trash_id'] ?>">
                                        <button class="delete-btn-archive" style="background-color:#f64242;">Delete</button></a>
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