<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>Reports</title>
    <link rel="icon" type="image/x-icon" href="../img/icons/north-logo.ico" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/jquery.dataTables.min.css" />
    <script src="../js/nav-time-date.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="../js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.0/js/dataTables.bootstrap4.min.js"></script>
   
    <!-- Buttons -->
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css" />
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>
</head>

<body>
    <main>
        <?php include('../navbar.php'); ?>

        <section>
            <div class="header">
                <h1>Reports</h1>
                <!-- <form action=" export_pdf.php" method="GET">
                    <button class="export_pdf_btn" type="submit" name="export_pdf">
                        <img src="../img/icons/pdf-file.png" class="pdf-file"></img>
                        Export to PDF</button>
                </form>

                <form action="export_excel.php" method="POST">
                    <button class="export_excel_btn" type="submit" name="export_excel">
                        <img src="../img/icons/excel.png" class="excel-file"></img>
                        Export to Excel</button>
                </form> -->
            </div>

            <div class="header2">
                <div class="btn-group-reports">
                    <a href="../n_reports/reports.php"> <button class="graph-btn">Graphical View</button> </a>
                    <button class="table-btn">Table View</button>
                </div>
                <form id="reportForm" action="reports-table.php?from_date=<?php echo $_GET['from_date'] ?>&to_date=<?php echo $_GET['from_date'] ?>">






                    <div class="input-date-range">
                        <input type="date" class="date-range-filter" name="from_date" value="<?php if (isset($_GET['from_date'])) {
                                                                                                    echo $_GET['from_date'];
                                                                                                } else {
                                                                                                } ?>">
                        <h4>TO</h4>
                        <input type="date" class="date-range-filter" name="to_date" value="<?php if (isset($_GET['to_date'])) {
                                                                                                echo $_GET['to_date'];
                                                                                            } else {
                                                                                            } ?>">
                        <button type="Submit" class="date-btn"> Submit </button>



                    </div>
                    <!-- <input class="export_excel_btn" type="button" name="export_excel" value="Export to Excel" onclick="askForSubmit()" disabled/> -->

                    <!-- <input class="export_pdf_btn" type="button" name="export_pdf" value="Export to PDF" onclick="askForSave()" /> -->
                </form>



            </div>

            <?php

            $sales_query = "SELECT sum(cnt) from (select count(*) *150 as cnt from barangay_clearance) as Total; ";
            $total_sales = mysqli_query($conn, $sales_query);

            if (mysqli_num_rows($total_sales) > 0) {

                foreach ($total_sales as $salerow) {

            ?>


                    <div class="content" id="main">
                        <div class="table-panel">

                            <div class="total-sales">
                                <h4>Total Sales</h4>
                                <p> ₱<?php echo $salerow['sum(cnt)'] ?></p>
                            </div>
                    <?php
                }
            }
                    ?>

                    <?php
                    $clearance_query =  mysqli_query($conn, "SELECT count(id) as clearance from barangay_clearance;");
                    $clearance_count = mysqli_fetch_array($clearance_query);     ?>

                    <div class="total-sales">
                        <h4># of Barangay Clearance Issued </h4>
                        <p><?php echo $clearance_count['clearance'] ?></p>
                    </div>

                    <div class="total-sales">
                        <h4># of Business Clearance Issued </h4>
                        <p>N/A</p>
                    </div>


                        </div>

                        <div class="table-reports">
                            <table id="resTable" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Date Issued</th>
                                        <th>Name</th>
                                        <th>Purpose</th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <?php if (isset($_GET['from_date']) && isset($_GET['to_date'])) {

                                    $from_date = $_GET['from_date'];
                                    $to_date = $_GET['to_date'];

                                    $query = "SELECT * FROM barangay_clearance WHERE date_issued BETWEEN '$from_date' AND '$to_date' ";
                                    $query_run = mysqli_query($conn, $query);

                                    if (mysqli_num_rows($query_run) > 0) {

                                        foreach ($query_run as $row) {

                                ?>
                                            <tr>
                                                <td><?php echo $row['id'] ?></td>
                                                <td><?php echo $row['date_issued'] ?></td>
                                                <td><?php echo $row['name'] ?></td>
                                                <td><?php echo $row['purpose'] ?></td>
                                                <td></td>
                                            </tr>
                                <?php
                                        }
                                    }
                                    // else {
                                    //     echo "No record found";
                                    // }
                                }
                                ?>
                        </div>
                    </div>
                    </div>
                    </div>
        </section>
    </main>

    <?php include "../db_conn.php"; ?>

    <script>
        $(document).ready(function() {
            $('#resTable').dataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ],
                "bLengthChange": false,
                "bInfo": false,
                "pageLength": 10
            });
        });
    </script>

    <script>
        form = document.getElementById("reportForm");

        function askForSave() {
            form.action = "export_pdf.php";
            form.submit();
        }

        function askForSubmit() {
            form.action = "export_excel.php";
            form.submit();
        }
    </script>