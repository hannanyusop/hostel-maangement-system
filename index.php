<?php
if(isset($_SESSION['login_user'])){
header("location: profile.php"); // Redirecting To Profile Page
}
?>
<!DOCTYPE html>
<html>
<head>
  

<style>
  body {
  background-image: url('asset/img/c.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 400px;
  height: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
  vertical-align: center;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
  vertical-align: center;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
  vertical-align: center;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

h1 {
  text-align: center;
  font-style: oblique;
  text-transform: capitalize;
  text-

}

p.date {
  text-align: right;
}

p.main {
  text-align: justify;
}
</style>
</head>



<h1>HOSTEL MANAGEMENT SYSTEM</h1>

<p align="center">
<button  align="center" class="button" style="vertical-align:middle" onclick="window.location.href='adminlog.php'"><span>Admin </span></button>
</p>

<p align="center">
<button class="button" style="vertical-align:middle" onclick="window.location.href='studlog.php'"><span>Student </span></button>
</p>
</body>
</html>

