<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/modal.css" />
</head>
<body>


<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
<div class="modal-content">
  <div class="modal-header">
      <h2>Take A Picture</h2>
      <span class="close">&times;</span>
  </div>

  <div class="modal-body">
    <br>
      
    <!-- camera -->
    <div id="my_camera"></div>

    <br>

  </div>


  <div class="modal-footer">
    <input type="button" class="delete-btn" onClick="takepic()" value="Click" >
  </div>

</div>
<script type="text/javascript" src="../js/webcam.min.js"></script>
<!-- webcam -->
<script language="JavaScript">

 // Configure a few settings and attach camera
 Webcam.set({
  width: 500,
  height: 500,
  image_format: 'jpeg',
  jpeg_quality: 90
 });
 Webcam.attach( '#my_camera' );

function takepic() {
 // get picture and save image data
 Webcam.snap( function(data_uri) {
  
 document.getElementById('pic').innerHTML = '' + '<img id="snapshot" name="webpic" value="abc" src="' + data_uri + '">';
 document.getElementById('abc').value="abcd";
 modal.style.display = "none";
} );
}

function savepicture() {
 // get picture and save image data
 
  var data_uri = document.getElementById('snapshot').src;
  Webcam.upload( data_uri, 'cert-html/Brgy-clearance.php', function(code, text) {
 });
}
 
 



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
cancel.onclick = function() {
  modal.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>
