<html>
<head>
	 <link href="style2.css" rel="stylesheet" type="text/css">
</head>
<body background="s.jpg">
<form action="Rprocess.php?rNo=<?= $_GET['rNO']; ?>" method="POST">
<?php

require_once 'config.php';

//edit data
$var_rNo=$_GET['rNo'];
$result= mysqli_query($link,"SELECT * FROM rooms WHERE rNo='".$_GET['rNo']."'");

?>

<table width="212" border="1">
<?php
while ($row= mysqli_fetch_array($result))
{
$var_room=$row['room'];
$var_rNo=$row['rNo'];
$var_price=$row['price'];
$var_studentid=$row['studentid'];
$var_status=$row['status'];


}
?>

<div class="container">
  <div class="row header">
    <h1>ROOM &nbsp;</h1>
    
  </div>
  <div class="row body">
    <form action="#">
      <ul>
        
        
          <p class="left">
            <label for="room">Block Name</label>
            <input type="text" name="room"  value="<?php echo $var_room ?>" />
          </p>
          <p class="left">
            <label for="rNo">Room Number</label>
            <input type="text" name="rNo"  value="<?php echo $var_rNo?>" />      
          </p>
          <p class="left">
            <label for="price">Price</label>
            <input type="text" name="price" value="<?php echo $var_price?>  "  readonly/>
          </p>
          <p class="left">
            <label for="studentid">Sudent ID</label>
            <input type="text" name="studentid" value="<?= $var_studentid ?> "/> 
          </p>
            <p class="left">
            <label for="status">Status</label>
            <input type="text" name="status" value="<?php echo $var_status?>"/>
          </p>
        
           <li>
          <input type="submit" name="Submit" value="Submit">
          <a href="viewR.php">Back</a>
           <small>or press <strong>enter</strong></small>
        </li>
        
      </ul>
    </form>  
  </div>
</div>
</form>
</head>
</html>

