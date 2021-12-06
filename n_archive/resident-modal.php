<style>

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  
  
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 35%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
.close, .close2{
  color: gray;
  position: absolute;
  right: 1.2rem;
  font-size: 2rem;
  font-weight: bold;
}

.close:hover,
.close:focus,.close2:hover,
.close2:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  display: flex;
  align-items: center;
  padding: 1.2rem;
  background: var(--white-color);
  color: var(--black-color);
  border-bottom: solid 1px #ccc;
}

.modal-body {
  padding: 2.5rem;
  background: var(--white-color);
  border-bottom: solid 1px #ccc;
  color: var(--black-color);
  text-align: center;
}

.modal-footer {
  padding: 1rem ;
  background: var(--white-color);
  color: var(--black-color);
  display:flex;
  justify-content: center;
  align-items: center;

}

.modal-footer a{
text-decoration: none;
display:flex;
flex-direction:column;
align-items:center;
justify-content:center;
}

.modal-footer h5{
font-size:.8rem;
text-align: center;
}
</style>





<!-- delete Modal -->
<div id="modaldelete" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
    
      <h3>DELETE</h3>
      <span class="close2">&times;</span>
    </div>


    <div class="modal-body">
      <h4>Are you sure you want to permanently delete<br><?php echo $row['first_name']," ", $row['last_name'] ?>?</h4>
    </div>


    <div class="modal-footer">
    <!-- certs -->
    <div class="brgy-cert">
    <div>
          <div class="view-info">
          <a href="resident-delete.php?residents_archive_id=<?php echo $row['residents_archive_id']?>">
                  <button class="delete-btn">Delete</button>


                  </a>
            </div>
          </div>

          
          <button class="generate-btn" id="res-cancel">Cancel</button>  
            
          </div>
          </div>
    </div>
  </div>



  <script>
// Get the modal
var modalarchive = document.getElementById("modaldelete");

// Get the button that opens the modal
var btn3 = document.getElementById("delete-archive");

// Get the <span> element that closes the modal
var span_res = document.getElementsByClassName("close2")[0];
var del_arch = document.getElementById("res-cancel");


// When the user clicks the button, open the modal 
btn3.onclick = function() {
  modalarchive.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span_res.onclick = function() {
  modalarchive.style.display = "none";
}
del_arch.onclick = function() {
  modalarchive.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modalarchive) {
    modalarchive.style.display = "none";
  }
}
</script>


