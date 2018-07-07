<html>
<head><style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #008b8b;
    color: white;
}
</style>
</head><?php
include 'admin.php'; 
$servername = "localhost";
$username = "root";
$psw = "";
$dbname = "caroxo";
$con = new mysqli($servername, $username, $psw, $dbname);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 

$sql= "SELECT * from cars";
$res = mysqli_query($con, $sql);
echo "<table id='customers'> <tr><th>Car ID</th>
  <th>Driver Name</th>
  <th>Driver Contact</th>
  <th>Driver Licence Number</th>
  <th>Car No</th>
  <th>Car Insurance No</th>
  <th>Car Model</th></tr>";
while($val = mysqli_fetch_row($res))
{
  echo " <tr><td>", $val[0],"</td>
  <td>", $val[1],"</td>
  <td>", $val[2],"</td>
  <td>", $val[3],"</td>
  <td>", $val[4],"</td>
  <td>", $val[5],"</td>
  <td>", $val[6],"</td></tr>";
}
echo "</table>";
?> 
 
<script type="text/javascript">
  if(window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);

  }
</script>


<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Add car</button>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="cars.php" method="post">
    <div class="container">
      <h1>Add a car</h1>
      <p>Please fill in this form to add a new car.</p>
      <hr>
      <label for="drivername"><b>Driver Name</b></label>
      <input type="text" placeholder="Enter Name" name="drivername" required>
      <label for="drivercontact"><b>Contact</b></label>
      <input type="text" placeholder="Enter Phone no" name="drivercontact" required><br>
      <label for="driverlicenceno"><b>Driver Licence no</b></label>
      <input type="text" placeholder="Enter Licence no" name="driverlicenceno" required><br>
      <label for="carno"><b>Car Number</b></label>
      <input type="text" placeholder="Enter Car Number" name="carno" required><br>
      <label for="carinsuranceno"><b>Car Insurance no</b></label>
      <input type="text" placeholder="Enter Car Insurance no" name="carinsuranceno" required><br>


      <label for="carmodel"><b>Car Model</b></label><br><br>
      <input type="radio" name="carmodel" value="Mini" > Mini<br>
  <input type="radio" name="carmodel" value="Micro"> Micro<br>
  <input type="radio" name="carmodel" value="Sedan"> Sedan<br><br>
      

     

      
      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" name="add" class="signupbtn">Add</button>
      </div>
    </div>
  </form>
</div>

<?php 
$con = new mysqli($servername, $username, $psw, $dbname);
if(isset($_POST['add'])) {
  
    $dname = $_POST['drivername'];
    $dcontact = $_POST['drivercontact'];
    $dlino = $_POST['driverlicenceno'];
    $carno= $_POST['carno'];
    $carino = $_POST['carinsuranceno'];
    $carm= $_POST['carmodel'];
    
  


$sql = "INSERT INTO cars (drivername , drivercontact, driverlicenceno, carno, carinsuranceno, carmodel)
VALUES ('$dname', '$dcontact', '$dlino','$carno', '$carino','$carm')";
if ($con->query($sql) === TRUE) {
    
    echo "<script>location.reload()</script>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}


}
include 'footer.php'; 
?>


</body>
</html>
