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
    <script src="../js/nav-time-date.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../js/certs.js"></script>
    <script>
    $(document).ready(function() {
        $('.clear-btn').click(function() {

            $('.cert-info input[type="text"]').val('');
            $('.cert-info #address').val('');
            $('.cert-info input[type="date"]').val('');
            $('.cert-info select').val('');

        });
    });
    </script>
</head>

<body>
    <main>
        <?php include('../navbar.php'); ?>

        <section>
            <div class="header">
                <h1>Certificates</h1>
                <a href="certificates.php">
                    <button class="back-btn">Back</button>
                </a>
            </div>

            <div class="content">
                <div class="brgy-cert">


                    <!-- <h2>Please input the following:</h2> -->
                    <div class="cert-infos">

                    <form id="" action="cert-html/bus_clearance.php" method="post">
                        
                        <div class="cert-info">
                            <h5>Name:</h5>
                            <input id="name" type="text" name="name" required=""/>
                        </div>

                        <div class="cert-info">
                            <h5>Business Location:</h5>
                            <textarea id="address" rows="2" name="bus_location" required=""></textarea>
                        </div>

                        <div class="cert-info">
                            <h5>Business Name:</h5>
                            <input id="purpose" type="text" name="bus_name" required=""/>
                        </div>

                        <div class="cert-info">
                            <h5>Date Issued:</h5>
                            <input type="date" value="<?php echo date('Y-m-d'); ?>" name="date-issued" required=""/>
                        </div>
                        
                        <div class="cert-info">
                            <h5>Clearance No:</h5>
                            <input id="cedula-no" type="text" name="clearance_number" required=""/>
                        </div>

                        <div class="cert-info">
                            <h5>Business Type:</h5>
                            <input id="cedula-issued-at" type="text" name="bus_type" required=""/>
                        </div>

                                              
                        <div class="cert-btn">
                            <input name="done" type="submit" class="print-btn" value="Generate" onclick="savepicture()"/>
                            <input type="button" style="float: right;" class="clear-btn" value="Clear">
                        </div>
                    </div>
    
                        </form>
<!-- 
                    <div class="cert-preview">
                        <div class="preview">
                            <div class="nm"></div>
                            <div class="ad"></div>
                            <div class="pr"></div>
                            <div class="mt">
                            </div>
                            <div class="dy"></div>
                            <div class="yr"></div>
                            <div class="ced-no"></div>
                            <div class="ced-at"></div>
                            <div class="ced-date"></div>

                        </div> -->

                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</html>