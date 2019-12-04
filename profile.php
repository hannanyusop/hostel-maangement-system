<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
header("location: index.php"); // Redirecting To Home Page
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {

  background-image: url("a.jpeg");
  font-family: "Lato", sans-serif;
  transition: background-color .5s;

}

header img {
    height: 80px;
    margin-left: 40px;
}
body {
    height: 125vh;
    background-image: url();
     background-color: #fff;
    background-size: cover;
    font-family: sans-serif;
    margin-top: 80px;
    padding: 30px;
}

main {
    color: white;
}

header {
    background-color: #fff;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    height: 80px;
    display: flex;
    align-items: center;
    box-shadow: 0 0 25px 0 black;
}

header * {
    display: inline;
}

header li {
    margin: 20px;
}

header li a {
    color: black;
    text-decoration: none;
}

</style>
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
                    <li><a href="#">Hostel Application</a></li>
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