<?php
require_once 'config.php';

$query = "SELECT * FROM `block`";
$result2 = mysqli_query($link, $query);

$options = "";

while($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row2[1]</option>";
}
?>

<!DOCTYPE html >

<html>
<head> 

  <link href="style2.css" rel="stylesheet" type="text/css">
</head>


<form action="Rinsert.php" method="POST">

<div class="container">
  <div class="row header">
    <h1>HOSTEL BLOCK & ROOM &nbsp;</h1>
  
  </div>
  <div class="row body">
    <form action="#">
      <ul>
        
        
          <p class="left">
            <label for="room">Block Name</label>
                 <select name="room">
            <?php echo $options;?>
        </select>
          </select>

          </p>
          <p class="left">
            <label for="rNo">Room No</label>
            <input type="text" name="rNo" required=" " />      
          </p>

           <p class="left">
            <label for="price">Room Price</label>
            <input type="text" name="price" required=" " value="RM504.00" readonly=" " />      
          </p>
        
        <li>
          <input class="btn btn-submit" type="submit" value="Submit" />
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