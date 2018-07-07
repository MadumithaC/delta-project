<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styling.css">
	<style>
	.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input {display:none;}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: red;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}



input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>
</head>
<body>
	<?php include 'empheader.php'; ?>
<h1>Update your status now</h1>
<form method="post"><h4>check the switch if you are free now!</h4>
	Car ID:<input type="text" name="carid" style="width:10%" placeholder="Enter your Car ID">
<label class="switch">
  <input type="checkbox" name="status" value="free">
    <span class="slider round"></span>
</label><br>
<button type="submit" style="width:10% " name="update" >UPDATE</button>
</form>
<?php include 'footer.php';
$servername = "localhost";
$username = "root";
$psw = "";
$dbname = "caroxo";
$con2 = new mysqli($servername, $username, $psw, $dbname);
if ($con2->connect_error) {
    die("Connection failed: " . $con2->connect_error);
} 
if(isset($_POST['update'])) {
	$carid=$_POST['carid'];
}
if(isset($_POST['update'])) {
	$sql = "UPDATE cars SET status='free' WHERE carID=$carid";
}
  
  if ($con2->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $con2->error;
}
  
  





?>

</body>
</html>