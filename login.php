<?php 
include 'header.php'; ?> 


<div align="center" style="margin-bottom: 30px"><i class="fa fa-user-secret" style="font-size:40px;color:#6e7b8b"></i>&nbsp;&nbsp;
<button onclick="document.getElementById('id2').style.display='block'" style="height:20%;width:20%;background-color:#e50000;font-size: 30px;">Admin Login</button></div>

<div align="center"><i class="fa fa-users" style="font-size:40px;color:#6e7b8b"></i>&nbsp;&nbsp;
<button onclick="document.getElementById('id3').style.display='block'" style="height: 20%; width:20%;font-size: 30px;">Employee Login</button></div>





<div id="id2" class="modal">
  <span onclick="document.getElementById('id2').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" onsubmit="return check()" action="admin.php">
    <div class="imgcontainer">
      
      <img src="http://localhost/Caroxo project/images/login2.jpg" alt="User Login" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" id ="adname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" id="adpsw" required>
        
      <div class="clearfix">
      
  
      <button type="button" onclick="document.getElementById('id2').style.display='none'" class="cancelbtn">Cancel</button>
      <button class="signupbtn" type="submit">Login</button>
      </div>
    </div>
    </div>
  </form>
</div>




<div id="id3" class="modal">
  <span onclick="document.getElementById('id3').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="emp.php">
    <div class="imgcontainer">
      
      <img src="http://localhost/Caroxo project/images/login3.jpg" alt="User Login" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <div class="clearfix">
  
      <button type="button" onclick="document.getElementById('id3').style.display='none'" class="cancelbtn">Cancel</button>
      <button class="signupbtn" type="submit">Login</button>
    </div>
    </div>
    </div>
  </form>
</div><br><br>


<script>
  function check() {
   var adname = document.getElementById("adname").value;
   var adpsw = document.getElementById("adpsw").value;
   if(adname="madumitha" && adpsw="madu") {
    return true;
   }
   else { alert("hi");
    return false;
   }
  }
</script>





<?php
include 'footer.php'; 
?>
