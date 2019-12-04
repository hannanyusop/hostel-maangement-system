<?php
require_once 'config.php';
$var_matricno="";
if(isset($_GET['matricno']) && ( "" != ($_GET['matricno'])) ){
$var_matricno=$_GET['matricno'];
}
?>

<!DOCTYPE html >

<html>
<head> 

  <link href="style2.css" rel="stylesheet" type="text/css">
</head>


<form action="insertS.php" method="POST">

<div class="container">
  <div class="row header">
    <h1>STUDENT REGISTRATION &nbsp;</h1>
    <h3>Fill out the form below to learn more!</h3>
  </div>
  <div class="row body">
    <form action="#">
      <ul>
        
        
          <p class="left">
            <label for="studentname">Student Name</label>
            <input type="text" name="studentname" required=" " />
          </p>
          <p class="left">
            <label for="matricno">Matric Number</label>
            <input type="text" name="matricno" required=" " />      
          </p>
           <p class="left">
            <label for="password">Password</label>
            <input type="text" name="password" required=" " />      
          </p>
          <p class="left">
            <label for="faculty">Faculty</label>
            <input type="text" name="faculty" required=" " />
          </p>
          <p class="left">
            <label for="prog">Programme</label>
            <input type="text" name="prog" required=" " /> 
          </p>
            <p class="left">
            <label for="yearsem">Year/Semester</label>
            <input type="text" name="yearsem" required=" " />
          </p>
          <p class="left">
            <label for="block">Block</label>
            <input type="text" name="block" required=" " />      
          </p>     
          <p class="left">
            <label for="roomno">roomno</label>
            <input type="text" name="roomno" required=" " />
          </p>
          <p>
            <label for="email">Email <span class="req">*</span></label>
            <input type="email" name="email" placeholder="john.smith@gmail.com" />
          </p>
          <p class="left">
            <label for="address">Address</label>
            <input type="text" name="address" required=" " />
            <p class="left">
              <label for="gender">Gender</label>
              <input type="radio" name="gender" value="M" required>Male
     <input type="radio" name="gender" value="F" required>Female
          </p>
          <p class="left">
            <label for="phoneno">Number Phone</label>
            <input type="text" name="matricno" required=" " />      
          </p>
        <li>
          <input class="btn btn-submit" type="submit" value="Submit" />
          <input class="btn btn-back" type="back" value="Back" onclick="history.back()">
           <small>or press <strong>enter</strong></small>
        </li>
        
      </ul>
    </form>  
  </div>
</div>
</form>
</head>
</html>
