<!DOCTYPE html>
<html lang="en">
<head>
	<link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<!-- CSS -->
<style>
body {
	background-color: #aeeeee;

}
.myForm {
font-family:'Aclonica' ;
background-color: white;

font-size: 22px;
margin:25% 0% 10% 25%;

width: 50%;
padding: 10px;
border: 2px solid #008b8b;
}

.myForm * {
box-sizing: border-box;
}

.myForm fieldset {
border: none;
padding: 0;
}

.myForm legend,
.myForm label {
padding: 0;
font-weight: bold;
}

.myForm label.choice {
font-size: 0.9em;
font-weight: normal;
}

.myForm input[type="text"],
.myForm input[type="tel"],
.myForm input[type="email"],
.myForm input[type="datetime-local"],
.myForm select,
.myForm textarea {
display: block;
width: 100%;
border: 2px solid #008b8b;
font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
font-size: 0.9em;
padding: 0.3em;
}

.myForm textarea {
height: 100px;
}


</style>

</head>
<body>
	<?php include 'header.php'; ?>
	
<form class="myForm" method="post">
<h2>Book here</h2>
      <img src="http://localhost/Caroxo project/images/taxilogo.jpg" style="float: right;width:25%;height: 100px">
      <p>Please fill in this form to book your ride.</p>
      <hr>
<p>
<label>Name
<input type="text" name="cname" required>
</label> 
</p>

<p>
<label>Phone 
<input type="tel" name="ccontact">
</label>
</p>

<p>
<label>Email 
<input type="email" name="emailid">
</label>
</p>

<fieldset>
<legend>Which taxi do you require?</legend>
<p><label class="choice"> <input type="radio" name="taxitype" required value="micro"> Micro </label></p>
<p><label class="choice"> <input type="radio" name="taxitype" required value="mini"> Mini</label></p>
<p><label class="choice"> <input type="radio" name="taxitype" required value="sedan"> Sedan </label></p>
</fieldset>


<p>
<label>Pickup Date/Time
<input type="datetime-local" name="pickdatetime" required>
</label>
</p>
	
<p>
<label>Pickup Place
<input type="text"  name="pickloc">


</label>
</select>
</label> 
</p>

<p>
<label>Dropoff Place
<input type="text" name="droploc" required>
</label>

</p>

<p>
<label>Special Instructions
<textarea name="specialins" maxlength="500"></textarea>
</label>
</p>

<p><button type="submit" style="width:auto;" name="book">Submit Booking</button></p>

</form>

<?php  

$servername = "localhost";
$username = "root";
$psw = "";
$dbname = "caroxo";
$con2 = new mysqli($servername, $username, $psw, $dbname);
if ($con2->connect_error) {
    die("Connection failed: " . $con2->connect_error);
} 

if(isset($_POST['book'])) {
  
    $cname = $_POST['cname'];
    $ccontact = $_POST['ccontact'];
    $emailid = $_POST['emailid'];
    $taxitype= $_POST['taxitype'];
    $pickdatetime = $_POST['pickdatetime'];
    $pickloc= $_POST['pickloc'];
    $droploc= $_POST['droploc'];
    $specialins = $_POST['specialins'];
  


$sql2 = "INSERT INTO bookings (customername, contact, emailid, taxitype, dateandtime, pickup, droplocation, specialinstructions)
VALUES ('$cname', '$ccontact', '$emailid','$taxitype', '$pickdatetime','$pickloc', '$droploc', '$specialins')";
if ($con2->query($sql2) === TRUE) {
    
    
} else {
    echo "Error: " . $sql2 . "<br>" . $con2->error;
}
  $sql3 = "SELECT * FROM cars
WHERE status LIKE 'free'
   AND carmodel LIKE '$taxitype'";
   $res2= mysqli_query($con2,$sql3);
   if($val3= mysqli_fetch_row($res2)) {
   	echo "<div style='text-align:center; font-family:Comic Sans MS, cursive, sans-serif;'><h2 style='color:#00868b'>Your Booking has been confirmed</h2><h4>Booking details:</h4>
   	<p><b>Car Number:</b>",$val3[4],"</p>
   	<p><b>Driver Name:</b>",$val3[1],"</p>
   	<p><b>Car Type:</b>",$val3[6],"</p>
   	<p><b>Pickup Location:</b>",$pickloc,"</p>
   	<p><b>Drop Location:</b>",$droploc,"</p>
   	<p><b>Pickup date and time:</b>",$pickdatetime,"</p></div>";
   }
   else {
   	echo "Sorry! <br> Car is not available right now..<br> Try booking after sometime!";
   } 
  



}
include 'footer.php';

?>
</body></html>






