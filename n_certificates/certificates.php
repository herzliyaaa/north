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
    <script src="../js/jquery-paginate.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../js/certs.js"></script>
</head>

<body>
    <main>
        <?php include('../navbar.php'); ?>

        <section>
            <div class="header">
                <h1>Certificates</h1>
            </div>

            <div class="content">

    <div class="cButtons">
            
                <button class="c-btn" id="myBtn"><span>Barangay Clearance</span></button>
                    <?php include('modal_new_clearance.php'); ?>
        

            
                    <a href="new_barangay_business.php">
                        <button class="c-btn busClear">
                            <span>Business Clearance</span>
                        </button>
    
                    </a>
           
    </div>

            <script>
                 $(document).ready(function() {
                    $('#certTable').dataTable({
                        // "bPaginate": false,
                        "bLengthChange": false,
                        "bFilter": true,
                        "bInfo": false,

                        "bAutoWidth": false,
                        "pageLength": 9

                    });
                });
                // $(document).ready(function() {
                //     $('#example').dataTable({
                //         "bPaginate": false,
                //         "bLengthChange": false,
                //         "bFilter": true,
                //         "bInfo": false,

                //         "bAutoWidth": false
                //     });
                // });
                </script>
                            


                <!-- <div class="brgy-cert">
                    <div>
                        <div class="view-info">
                            <a href="barangay_clearance_table.php">
                                <button class="certs-btn"><img src="../img/cert-templates/cert-template-1.png" alt=""
                                        style="width: calc(7.5in / 2); height: calc(10in / 2);" /></button>
                            </a>
                        </div>
                    </div>

                    <div>
                        <div class="view-info">
                            <a href="barangay_business_table.php">
                                <button class="certs-btn"><img src="../img/cert-templates/cert_business.png" alt=""
                                        style="width: calc(7.5in / 2); height: calc(10in / 2);" /></button>
                            </a>
                        </div>
                    </div>
                </div> -->
            </div>
            
        </section>
    </main>
</body>



</html>

<!-- <script>
$('#example').paginate({
    limit: 5
});
</script> -->