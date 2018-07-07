<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="styling.css">
  <style type="text/css">
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
</head>
<body>
  <?php include 'admin.php'; 

$servername = "localhost";
$username = "root";
$psw = "";
$dbname = "caroxo";
$con2 = new mysqli($servername, $username, $psw, $dbname);
if ($con2->connect_error) {
    die("Connection failed: " . $con2->connect_error);
} 

$sql2= "SELECT * from bookings";
$res2 = mysqli_query($con2, $sql2);
echo "<table id='customers'> <tr><th>Customer name</th>
  
  <th>Contact</th>
  <th>Email ID</th>
  <th>Taxi type</th>
  <th>Pickup date and time</th>
  <th>Pickup</th>
  <th>Drop</th>
  <th>Special Instructions</th>
  </tr>";
while($val2 = mysqli_fetch_row($res2))
{
  echo " <tr><td>", $val2[1],"</td>
  <td>", $val2[2],"</td>
  <td>", $val2[3],"</td>
  <td>", $val2[4],"</td>
  <td>", $val2[5],"</td>
  <td>", $val2[6],"</td>
  <td>", $val2[7],"</td>
  <td>", $val2[8],"</td></tr>";
}
echo "</table>";
?> 
 
<script type="text/javascript">
  if(window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);

  }
</script>
<?php include 'footer.php'; ?>
</body></html>