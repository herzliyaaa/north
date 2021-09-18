<?php
include "../../db_conn.php";
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Barangay Clearance</title>
    <link rel="stylesheet" href="brgy-certs.css" />
  </head>
  <body>
    <div class="canvas">
      <img class="header" src="cert-header.png" alt="" />
      <div class="text">
        <h1>BARANGAY CLEARANCE</h1>
        <br />
        <br />

		<?php
                $id= $_GET['id'];
                $squery =  mysqli_query($conn,"select * from barangay_clearance where id = $id");
                while ($row = mysqli_fetch_array($squery)){
					$res_id=$row['resident_id'];
					$name=$row['name'];
					$address=$row['address'];
					$purpose=$row['purpose'];
					$date_issued=$row['date_issued'];
					$cedula=$row['cedula_number'];
					$cedula_issued_at=$row['cedula_place'];
					$cedula_date=$row['cedula_date'];
					$image_url=$row['url_image'];
					$new_date_issued_day = date("jS", strtotime($date_issued));
					$new_date_issued_month_year = date("F Y", strtotime($date_issued));
					$new_cedula_date = date("F j, Y", strtotime($cedula_date)); 


					$squery =  mysqli_query($conn,"select * from residents where id = $res_id");
					while ($row2 = mysqli_fetch_array($squery)){
						$sex=$row2['sex'];
					$civil_status=$row2['civil_status'];

                                if($sex=="female" && $civil_status=="Single"){
                                    $prefix= "Ms.";
                                }
                                else if($sex=="Female" && $civil_status=="Married"){
                                    $prefix= "Mrs.";
                                }
                                else if($sex=="Female" && $civil_status=="Widowed"){
                                    $prefix= "Mrs.";
                                }
                                else if($sex=="Male"){
                                    $prefix= "Mr.";
                                }                                                     
?>


        <p>
          <b>TO WHOM IT MAY CONCERN:</b>
          <span class="br-md"></span>
          This is to <b><u>CERTIFY</u></b> that
          <b><?php echo $prefix  ?> <?php echo $name ?></b>,
          <?php echo $civil_status?>, and with a Resident Certificate No.
          <b><?php echo $cedula ?></b>
          issued at <b><?php echo $cedula_issued_at ?></b> on <b><?php echo $new_cedula_date ?></b> is a
          resident of
          <b><?php echo $address ?></b>.
          <span class="br"></span>
          This is to certify further that the said person has
          <b><u>NO DEROGATORY RECORD</u></b> filed in this office. This
          <b><u>CERTIFICATION</u></b> is upon being issued the request of the
          above named person in connection with his/her application for
          <b><?php echo $purpose ?></b> and for whatever legal purposes it may serve
          him/her best.
          <span class="br"></span>
          Issued this <b><?php echo $new_date_issued_day ?></b> day of <b><?php echo $new_date_issued_month_year ?></b> at Barangay
          Dadiangas North, General Santos City.
        </p>

        <div class="thumb">
          <div class="img-box">

            <img src="<?php echo $image_url; ?>" alt="" />
          </div>

          <div class="box">
            <p>LEFT</p>
          </div>

          <div class="box">
            <p>RIGHT</p>
          </div>
        </div>

        <div class="sig">
          <p>Signature of Applicant over Printed Name</p>
        </div>

        <div class="bottom">
          <div class="kap">
            <p class="kap-name">
              <span class="k-name">HON. RENIEL A. GONATO</span>
              <br />
            </p>

            <p class="k-pos">
              Punong Barangay
              <br />
              Barangay Dadiangas North
              <br />
              General Santos City
            </p>
          </div>

          <p class="seal">Not valid without dry seal</p>
        </div>
		<?php 
                  }}
                ?>
        <!-- hide print button when print -->
        <div>
        <button id="printbutton" onclick="printpage()">Print</button>
        <button id="backbutton" type="button" onclick="history.back();">Back</button>
        <script>
            function printpage() {
        //Get the print button and put it into a variable
        var printButton = document.getElementById("printbutton");
        //Set the buttons visibility to 'hidden' 
        printButton.style.visibility = 'hidden';
        backbutton.style.visibility = 'hidden';
        //Print the page content
        window.print()
        printButton.style.visibility = 'visible';
        backbutton.style.visibility = 'visible';
        document.location.href ='barangay_clearance_table.php';
    }
        </script>
        </div>

      </div>
    </div>
  </body>
</html>
  