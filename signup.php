<!DOCTYPE html>
<html>
<head>
  <link rel="icon" href="http://localhost/Caroxo project/images/taxilogo.jpg">
  <link rel="stylesheet" href="styling.css">
</head>

<body>



<div id="id01" class="modal">
  <span class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="">
    <div class="container">
      <h1>Sign Up</h1>
      <img src="http://localhost/Caroxo project/images/taxilogo.jpg" style="float: right;width:25%;height: 100px">
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="uname"><b>Name</b></label>
      <input type="text" placeholder="Enter Your Name" name="uname" required>
      <label for="email"><b>Contact No</b></label>
      <input type="number" placeholder="Enter Contact No" name="contactno" required>
      <b>Address<b><br>
      <textarea type="text" placeholder="Enter Address" name="address" required></textarea>
      
      
      


      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>
      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      
      

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
      
      

       

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
