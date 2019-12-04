<?php
require_once 'config.php';

?>

<!DOCTYPE html >

<html>
<head> 

  <link href="style2.css" rel="stylesheet" type="text/css">
</head>


<form action="insertS.php" method="POST">

<div class="container">
  <div class="row header">
    <h1>HOSTEL BLOCK & ROOM &nbsp;</h1>
  
  </div>
  <div class="row body">
    <form action="#">
      <ul>
        
        
          <p class="left">
            <label for="name">Block Name</label>
            <input type="text" name="name" required=" " />
          </p>
          <p class="left">
            <label for="gender">Gender</label>
            <input type="text" name="gender" required=" " />      
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
