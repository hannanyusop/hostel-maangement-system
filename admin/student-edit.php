<?php

include 'auth.php';


if(isset($_POST['Submit'])) {

    $id = $_GET['matricno'];

    $studentname = $_POST['studentname'];
    $faculty = $_POST['faculty'];
    $prog = $_POST['prog'];
    $yearsem = $_POST['yearsem'];
    $block = $_POST['block'];
    $roomno = $_POST['roomno'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $phoneno = $_POST['phoneno'];

    //mysql query to update data
    $query= "UPDATE regstud SET studentname='$studentname',faculty='$faculty',prog='$prog',yearsem='$yearsem',block='$block',roomno='$roomno',email='$email',address='$address',gender='$gender',phoneno='$phoneno' WHERE matricno = '$id'";

    $result = mysqli_query($link, $query);

    if($result)
    {
        echo "<script>alert('Data updated!');window.location='student.php'</script>";

    }else {
        var_dump(mysqli_error($link));
        echo 'Data Not Updated';
    }

}

    $var_matricno=$_GET['matricno'];
    $query = $link->query("SELECT * FROM regstud WHERE matricno='$_GET[matricno]'");
    $row = $query->fetch_assoc();
?>
<html>
<head>
	 <link href="../asset/style2.css" rel="stylesheet" type="text/css">
</head>
<form method="POST">

<table width="212" border="1">

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
            <input type="text" name="studentname"  value="<?= $row['studentname'] ?>" />
          </p>
          <p class="left">
            <label for="matricno">Matric Number</label>
            <input type="text" name="matricno"  value="<?= $row['matricno'] ?>" />
          </p>
          <p class="left">
            <label for="faculty">Faculty</label>
            <input type="text" name="faculty" value="<?= $row['faculty'] ?> " />
          </p>
          <p class="left">
            <label for="prog">Programme</label>
            <input type="text" name="prog" value="<?= $row['prog'] ?> "/>
          </p>
            <p class="left">
            <label for="yearsem">Year/Semester</label>
            <input type="text" name="yearsem" value="<?= $row['yearsem'] ?>"/>
          </p>
          <p class="left">
            <label for="block">Block</label>
            <input type="text" name="block" value="<?= $row['block'] ?>" required>
     
          </p>     
          <p class="left">
            <label for="roomno">Room NO</label>
            <input type="text" name="roomno" value="<?= $row['roomno'] ?>" />
          </p>
          <p>
            <label for="email">Email <span class="req">*</span></label>
            <input type="email" name="email" value="<?= $row['email'] ?> "/>
          </p>
            <p class="left">
                <label for="address">Address</label>
                <textarea name="address"><?= $row['address'] ?></textarea>
            </p>
            <p class="left">
                <label for="gender">Gender</label>
                <input type="radio" name="gender" value="M"  <?= ($row['gender'] == 'M')? 'CHECKED ' : ' ' ?>required>Male
                <input type="radio" name="gender" value="F" <?= ($row['gender'] == 'F')? 'CHECKED ' : ' ' ?>required>Female
            </p>
            <p class="left">
                <label for="phoneno">Number Phone</label>
                <input type="text" name="phoneno" value="<?= $row['phoneno'] ?>"/>
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

