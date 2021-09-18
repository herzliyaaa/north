<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>Barangay Management System</title>
    <link rel="icon" type="image/x-icon" href="../img/icons/north-logo.ico" />
    <link rel="stylesheet" href="../css/style.css" />
    <script src="../js/nav-time-date.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../js/ChartJS/Chart.js"></script>
    <script src="../js/ChartJS/Chart.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>


</head>

<body>
    <main>
        <?php include('../navbar.php'); ?>

        <section>
            <div class="header">
                <h1>Reports</h1>



                <button class="export_pdf_btn" onclick="saveAsPDF();" type="submit" name="export_pdf">
                    <img src="../img/icons/pdf-file.png" class="pdf-file"></img>
                    Export to PDF</button>

                <form action="export_excel.php" method="POST">
                    <button class="export_excel_btn" type="submit" name="export_excel">
                        <img src="../img/icons/excel.png" class="excel-file"></img>
                        Export to Excel</button>
                </form>
            </div>

            <div class="header2">
                <div class="btn-group-reports">
                    <a id="graph-detailed"><button class="active graph-btn">Graphical View</button></a>
                    <a id="detailed" href="../n_reports/reports-table.php"><button class="graph-btn">Table
                            View</button></a>
                </div>


            </div>

            <div class="reports-content" id="main">


                <div class="periodical-range">
                    <button type="button" class="active period-btn">1 Day</button>
                    <button type="button" class="period-btn">1 Week</button>
                    <button type="button" class="period-btn">1 Month</button>
                    <button type="button" class="period-btn">1 Year</button>
                </div>
                <div id="chart-container" class="chart-container">


                    <div class="age_div">
                        <h3> age group <h3> <canvas class="myageChart" id="ageChart"></canvas>
                    </div>



                    <div class="prk_div">
                        <h3>Barangay Population Count by Purok <h3> <canvas class="myprkChart" id="prkChart"></canvas>
                    </div>

                </div>


            </div>
            </div>
        </section>
    </main>

    <?php include "../db_conn.php"; ?>
    <?php include "../n_reports/demographic_queries.php"; ?>
    <?php include "../n_reports/charts.php" ?>

    <script>
    function saveAsPDF() {
        html2canvas(document.getElementById("chart-container"), {
            onrendered: function(canvas) {
                var img = canvas.toDataURL(); //image data of canvas
                var doc = new jsPDF();
                doc.addImage(img, 10, 10);
                doc.save('export-test.pdf');
            }
        });
    }

    $(".periodical-range > .period-btn").click(function() {
        $(".periodical-range > .period-btn").removeClass("active");
        $(this).addClass("active");
    });


    $(".btn-group-reports > .graph-btn").click(function() {
        $(".btn-group-reports > .graph-btn").removeClass("active");
        $(this).addClass("active");
    });
    </script>


    <!-- <script type="text/javascript" language="javascript">
        $(document).ready(function() { /// Wait till page is loaded
            $('#detailed').click(function() {
                $('#main').load('table.php #main', function() {

                    $('#graph-detailed').click(function() {
                        $('#main').load('reports.php #main', function() {});
                    });
                    /// can add another function here
                });
            });
        }); //// End of Wait till page is loaded
    </script> -->