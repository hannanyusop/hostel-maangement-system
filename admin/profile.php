<?php
include 'admin/auth.php';
dd($_SESSION);
if(!isset($_SESSION['login_user'])){
header("location: index.php"); // Redirecting To Home Page
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<link rel="stylesheet" href="style.css">
<body>
<header>
   <img src="asset/img/b.png">
    <nav>
        <ul>
            <li><a href="profile.php" class="activeLink" >Home</a></li>
            <li><a href="student.php">Student Registration</a></li>
            <li><a href="bRoom.php">Hostel Room</a></li>
            <li><a href="admin/booking-list.php">Hostel Application</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="logout.php">Log Out</a></li>
        </ul>
    </nav>
</header>

<div id="main">
  <h2>HOSTEL MANAGEMENT</h2>
  
  <div id="profile">
<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>

</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}
</script>
   
</body>
</html>