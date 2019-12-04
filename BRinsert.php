<?php
require_once 'config.php';

$var_name = $_POST['name'];
$var_gender = $_POST['gender'];



$result = mysqli_query ($link,"INSERT INTO block (name, gender) VALUES ('$var_name','$var_gender') ");

//checking either success or not 
if ($result)
{
echo " "; 
  ?>
          <script type="text/javascript">alert("Your data has been successfully added!");window.
           location ="bRoom.php";</script>
          <?php


}
else {
  echo "!"; }
  ?>
          <script type="text/javascript">alert("Please Fill the right information!");window.
          location ="formBR.php";</script>
          <?php


?>
