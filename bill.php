<?php include 'empheader.php'; ?>


<form method="post">
	<h2>Enter your Billing Details Here</h2>
	Car ID:<br><input type="text" name="cid" placeholder="Enter CarID"><br>
	KMS travelled:<input type="text" name="kms" placeholder="Enter kms"><br>


	Bill amount:<input type="text" name="billamt" placeholder="Enter Bill Amount"><br>
	<button style="width:auto" type="submit" name="bill">Submit</button></form>
	 <?php 
	 $servername = "localhost";
     $username = "root";
     $psw = "";
     $dbname = "caroxo";
	 $con4 = new mysqli($servername, $username, $psw, $dbname);
if(isset($_POST['bill'])) {
  
    $cid = $_POST['cid'];
    $kms = $_POST['kms'];
    $billamt = $_POST['billamt'];
    

$sql4 = "INSERT INTO billing (carID , billamount, kms)
VALUES ('$cid', '$billamt', '$kms')";
if ($con4->query($sql4) === TRUE) {
    
    echo "connected";
} else {
    echo "Error: " . $sql4 . "<br>" . $con4->error;
}
}
include 'footer.php';
?>