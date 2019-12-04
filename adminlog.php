<?php

include 'config.php';

$error = ''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "Username or Password is invalid";
    } else {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = "SELECT username, password from login where username=? AND password=? LIMIT 1";

        $stmt = $link->prepare($query);
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $stmt->bind_result($username, $password);
        $stmt->store_result();
        if ($stmt->fetch()){
            $_SESSION['login_user'] = $username;
            $_SESSION['auth'] = [
                'role' => 'admin',
                'id' => 1,
                'username' => $username
            ];
            header("location: admin/profile.php"); // Redirecting To Profile Page
        }

    }

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
  <form method="POST">
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