<?php
include('login.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: profile.php"); // Redirecting To Profile Page
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Hostel Management System</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="login">
  <form action="" method="POST">
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active"> Admin </h2>

   <!-- Icon -->
    <div class="fadeIn first">
      <img src="icon.jpg" id="icon" alt="User Icon" />
    </div>
  

    <!-- Login Form -->
    <form>
      <input type="text" id="name" class="fadeIn second" name="username" placeholder="username">
      <input type="text" id="password" class="fadeIn third" name="password" placeholder="password" hidden=" ">
      <input type="submit" class="fadeIn fourth" name="submit" value="Log In">
    </form>

  

  </div>
</div>