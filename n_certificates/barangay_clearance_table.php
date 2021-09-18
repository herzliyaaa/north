<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>Barangay Management System</title>
    <link rel="icon" type="image/x-icon" href="../img/icons/north-logo.ico" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="../css/modal.css" />
    
    <script src="../js/nav-time-date.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../js/certs.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script src="../js/jquery-paginate.js"></script>
</head>

<body>
    <main>
        <?php include('../navbar.php'); ?>

        <section>
        <div class="header">
                    <h1>Certificates</h1>

                        <input type="button" id="myBtn" value="Create Certficate">
                            <?php include('modal_new_clearance.php'); ?>
                            

                    <a href="certificates.php">
                    <button class="back-btn">Back</button>
                </a>
                
                </div>
                <script>
                 $(document).ready(function() {
                    $('#example2').dataTable({
                        "bPaginate": false,
                        "bLengthChange": false,
                        "bFilter": true,
                        "bInfo": false,

                        "bAutoWidth": false
                    });
                });
                $(document).ready(function() {
                    $('#example').dataTable({
                        "bPaginate": false,
                        "bLengthChange": false,
                        "bFilter": true,
                        "bInfo": false,

                        "bAutoWidth": false
                    });
                });
                </script>
                 <div class="content">
<!--                  
                    <table id="example" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NAME</th>
                                <th>PURPOSE</th>
                                <th>DATE ISSUED</th>
                                <th></th>
                            </tr>
                        </thead>

                        <?php    
                
                $squery =  mysqli_query($conn,"select * from barangay_clearance");
                while ($row = mysqli_fetch_array($squery)){
                
                ?>

                        <tr>
                            <td><?php echo $row['id']?></td>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['purpose'] ?></td>
                            <td><?php echo $row['date_issued'] ?></td>
                            <td><a href="cert-html/view_brgy_clrearance.php?id=<?php echo$row['id']?>">
                                    <button class="view">View</button></a>
                            </td>

                        </tr>
                        <?php 
                  }
                ?>
                    </table> -->
                </div>

        </section>
    </main>
</body>

</html>
<script>
$('#example').paginate({
    limit: 12
});
</script>