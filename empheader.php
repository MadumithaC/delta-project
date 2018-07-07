<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Amaranth' rel='stylesheet'>
<link rel="icon" href="http://localhost/Caroxo project/images/taxilogo.jpg">
<link rel="stylesheet" href="styling.css">  
<link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
  </head>
<body>





<div class="header">
  <div class="topnav">
  <a href="emp.php">Update status</a>
  <a href="bill.php">Billing</a>
  <a href="mybookings.php">My Bookings</a>
  <a style="float:right" href="home.php">Logout</a>

  
</div>
  <img class="logo" src="http://localhost/Caroxo project/images/taxilogo.jpg" width="40%" height="250px">
<div>
  <img class="mySlides" src="http://localhost/Caroxo project/images/taxi1.jpg" style="width:60%" height="250px">
  <img class="mySlides" src="http://localhost/Caroxo project/images/taxi2.jpg" style="width:60%" height="250px">
  <img class="mySlides" src="http://localhost/Caroxo project/images/taxi3.jpg" style="width:60%" height="250px">
  <img class="mySlides" src="http://localhost/Caroxo project/images/taxi4.jpg" style="width:60%" height="250px">
  <img class="mySlides" src="http://localhost/Caroxo project/images/taxi5.jpg" style="width:60%" height="250px">
</div>
</div>
  <script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>


