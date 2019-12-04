<html>
<head>
	 <link href="style2.css" rel="stylesheet" type="text/css">
</head>
<body background="s.jpg">
<form action="editS.php?matricno=<?= $_GET['matricno']; ?>" method="POST">
<?php

require_once 'config.php';

//edit data
$var_matricno=$_GET['matricno'];
$result= mysqli_query($link,"SELECT * FROM regstud WHERE matricno='".$_GET['matricno']."'");

?>

<table width="212" border="1">
<?php
while ($row= mysqli_fetch_array($result))
{
$var_studentname=$row['studentname'];
$var_matricno=$row['matricno'];
$var_faculty=$row['faculty'];
$var_prog=$row['prog'];
$var_yearsem=$row['yearsem'];
$var_block=$row['block'];
$var_roomno=$row['roomno'];
$var_email=$row['email'];
$var_address=$row['address'];
$var_gender=$row['gender'];
$var_phoneno=$row['phoneno'];

}
?>

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
            <input type="text" name="studentname"  value="<?php echo $var_studentname ?>" />
          </p>
          <p class="left">
            <label for="matricno">Matric Number</label>
            <input type="text" name="matricno"  value="<?php echo $var_matricno?>" />      
          </p>
          <p class="left">
            <label for="faculty">Faculty</label>
            <input type="text" name="faculty" value="<?php echo $var_faculty?> " />
          </p>
          <p class="left">
            <label for="prog">Programme</label>
            <input type="text" name="prog" value="<?= $var_prog ?> "/> 
          </p>
            <p class="left">
            <label for="yearsem">Year/Semester</label>
            <input type="text" name="yearsem" value="<?php echo $var_yearsem?>"/>
          </p>
          <p class="left">
            <label for="block">Block</label>
            <input type="text" name="block" value="<?php echo $var_block?>" required>
     
          </p>     
          <p class="left">
            <label for="roomno">Room NO</label>
            <input type="text" name="roomno" value="<?php echo $var_roomno?>" />
          </p>
          <p>
            <label for="email">Email <span class="req">*</span></label>
            <input type="email" name="email" value="<?php echo $var_email?> "/>
          </p>
          <p class="left">
            <label for="address">Address</label>
            <textarea type="text" name="address" value="<?php echo $var_address?>" /></textarea>
        </p>
            <p class="left">
              <label for="gender">Gender</label>
              <input type="radio" name="gender" value="M" >Male
     <input type="radio" name="gender" value="F" required>Female
          </p>
          <p class="left">
            <label for="phoneno">Number Phone</label>
            <input type="text" name="phoneno" value="<?php echo $var_phoneno?>"/>      
          </p>

           <li>
          <input type="submit" name="Submit" value="Submit">
          <a href="student.php">Back</a>
           <small>or press <strong>enter</strong></small>
        </li>
        
      </ul>
    </form>  
  </div>
</div>
</form>
</head>
</html>

