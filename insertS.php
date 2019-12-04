<?php
require_once 'config.php';

$var_studentname = $_POST['studentname'];
$var_matricno = $_POST['matricno'];
$var_faculty = $_POST['faculty'];
$var_prog = $_POST['prog'];
$var_yearsem= $_POST['yearsem'];
$var_block = $_POST['block'];
$var_roomno = $_POST['roomno'];
$var_email = $_POST['email'];
$var_address = $_POST['address'];
$var_gender = $_POST['gender'];
$var_phoneno = $_POST['phoneno'];


$result = mysqli_query ($link,"INSERT INTO regstud (studentname, matricno,faculty, prog, yearsem, block, roomno, email, address, gender, phoneno) VALUES ('$var_studentname','$var_matricno', '$var_faculty','$var_prog', '$var_yearsem','$var_block','$var_roomno', '$var_email', '$var_address','$var_gender','$var_phoneno') ");

//checking either success or not 
if ($result)
{
echo " "; 
  ?>
          <script type="text/javascript">alert("Your data has been successfully added!");window.
           location ="student.php";</script>
          <?php


}
else {
  echo "!"; }
  ?>
          <script type="text/javascript">alert("Please Fill the right information!");window.
          location ="regS.php";</script>
          <?php


?>
