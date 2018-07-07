<html>
<head><style>
#custome {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#custome td, #custome th {
    border: 1px solid #ddd;
    padding: 8px;
}

#custome tr:nth-child(even){background-color: #f2f2f2;}

#custome tr:hover {background-color: #ddd;}

#custome th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #008b8b;
    color: white;
}
</style>
</head><?php
include 'empheader.php'; 
$servername = "localhost";
$username = "root";
$psw = "";
$dbname = "caroxo";
$con5 = new mysqli($servername, $username, $psw, $dbname);
if ($con5->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 

$sql5= "SELECT * from bookings";
$res5 = mysqli_query($con5, $sql5);
echo "<table id='custome'> <tr>  <th>Customer Name</th>
  <th>Customer Contact</th>
  <th>Taxitype</th>
  <th>Date and Time</th>
  <th>Pickup</th>
  <th>Drop Location</th>
  <th>Special Instructions</th></tr>";
while($val5 = mysqli_fetch_row($res5))
{
  echo " <tr><td>", $val5[1],"</td>
  <td>", $val5[2],"</td>
  <td>", $val5[4],"</td>
  <td>", $val5[5],"</td>
  <td>", $val5[6],"</td>
  <td>", $val5[7],"</td>
  <td>", $val5[8],"</td></tr>";
}
echo "</table>";
?> 
 
