<?php
require_once 'auth.php';


if(isset($_POST['submit'])){
    $var_studentname = $_POST['studentname'];
    $var_matricno = $_POST['matricno'];
    $var_faculty = $_POST['faculty'];
    $var_prog = $_POST['prog'];
    $var_yearsem= $_POST['yearsem'];
    $var_email = $_POST['email'];
    $var_address = $_POST['address'];
    $var_gender = $_POST['gender'];
    $var_phoneno = $_POST['phoneno'];


    $result = mysqli_query ($link,"INSERT INTO regstud (studentname, matricno,faculty, prog, yearsem, email, address, gender, phoneno) VALUES ('$var_studentname','$var_matricno', '$var_faculty','$var_prog', '$var_yearsem', '$var_email', '$var_address','$var_gender','$var_phoneno') ");

    //checking either success or not
    if ($result) {
        echo "<script >alert('Your data has been successfully added!');window.location ='student.php';</script>";
    } else {
        echo "<script>alert('Please Fill the right information!');</script>";
    }
}

?>




<!DOCTYPE html >

<html>
<head> 

  <link href="../asset/style2.css" rel="stylesheet" type="text/css">
</head>


<form method="POST">

<div class="container">
  <div class="row header">
    <h1>STUDENT REGISTRATION &nbsp;</h1>
    <h3>Fill out the form below to learn more!</h3>
  </div>
  <div class="row body">
    <form action="" method="post">
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
          <p>
            <label for="email">Email <span class="req">*</span></label>
            <input type="email" name="email"/>
          </p>
          <p class="left">
            <label for="address">Address</label>
            <textarea type="text" name="address" required=" " /></textarea>
        </p>
            <p class="left">
              <label for="gender">Gender</label>
              <input type="radio" name="gender" value="M" required>Male
     <input type="radio" name="gender" value="F" required>Female
          </p>
          <p class="left">
            <label for="phoneno">Number Phone</label>
            <input type="text" name="phoneno" required=" " />      
          </p>
        <li>
          <input class="btn btn-submit" type="submit" name="submit" value="Submit" />
          <input class="btn btn-back" type="submit" value="Back" onclick="history.back()">
           <small>or press <strong>enter</strong></small>
        </li>
        
      </ul>
    </form>  
  </div>
</div>
</form>
</head>
</html>
