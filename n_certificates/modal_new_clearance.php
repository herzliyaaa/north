<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/modal.css" />
<!-- <link rel="stylesheet" href="../css/jquery.dataTables.min.css" /> -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.0/css/jquery.dataTables.min.css">
<script src="../js/jquery.dataTables.min.js"></script>
</head>
<body>


<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">

    <div class="modal-header">
      <h3>Barangay Clearance</h3>

      <div class="close-btn">
      <span class="close">&times;</span>
      </div>

    </div>

    <div class="modal-body">
    <br>
   

    <table id="certTable" class="display compact" style="width:85%;">
                        <thead>
                            <tr>
                                <!-- <th>ID</th> -->
                                <th>NAME</th>
                                <th></th>
                            </tr>
                        </thead>

                        <?php    
                
                $squery =  mysqli_query($conn,"select * from residents");
                while ($row = mysqli_fetch_array($squery)){
                
                ?>

                        <tr>
                            <!-- <td><?php echo $row['id']?></td> -->
                            <td><?php echo $row['first_name']," ",$row['mid_name']," ",$row['last_name'] ?></td>
                            <td><a href="r_barangay_cert.php?id=<?php echo$row['id']?>">
                                    <button class="view">Create</button></a>
                            </td>

                        </tr>
                        <?php 
                  }
                ?>
                
                    </table>

<br>

    </div>    
  </div>
</div>


<script>
// $('#example2').paginate({
//     limit: 8
// });
</script>



<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
var cancel = document.getElementById("cancel");
// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
// cancel.onclick = function() {
//   modal.style.display = "none";
// }
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>
