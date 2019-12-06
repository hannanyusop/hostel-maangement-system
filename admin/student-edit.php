<?php

include 'auth.php';


if(isset($_POST['Submit'])) {

    $id = $_GET['id'];

    $studentname = $_POST['studentname'];
    $faculty = $_POST['faculty'];
    $prog = $_POST['prog'];
    $yearsem = $_POST['yearsem'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $phoneno = $_POST['phoneno'];
    $matricno = $_POST['matricno'];

    //mysql query to update data
    $query= "UPDATE regstud SET matricno = '$matricno',studentname='$studentname',faculty='$faculty',prog='$prog',yearsem='$yearsem',email='$email',address='$address',gender='$gender',phoneno='$phoneno' WHERE id = '$id'";

    $result = mysqli_query($link, $query);

    if($result) {
        echo "<script>alert('Data updated!');window.location='student.php'</script>";

    }else {
        var_dump(mysqli_error($link));
        echo 'Data Not Updated';
    }

}

    $query = $link->query("SELECT * FROM regstud WHERE id='$_GET[id]'");
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

