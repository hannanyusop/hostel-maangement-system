<?php
require_once 'auth-student.php';

  $blocks_q = $link->query("SELECT * FROM block WHERE gender='$auth[gender]'");

?>

<!DOCTYPE html >

<html>
<head> 

  <link href="style2.css" rel="stylesheet" type="text/css">
</head>
<div class="container">
  <div class="row header">
    <h1>HOSTEL BLOCK & ROOM &nbsp;</h1>
  
  </div>
  <div class="row body">
    <form action="Sapply-2.php" method="POST">
      <ul>
          <p class="left">
            <label for="gender">SELECT BLOCK</label>
            <select name="block">
              <option>SELECT</option>
              <?php  if($blocks_q->num_rows > 0){ while($block = $blocks_q->fetch_assoc()){ ?>
                <option value="<?= $block['id'] ?>"><?= $block['name']; ?></option>
              <?php }} ?>
            </select>      
          </p>
        
        <li>
          <input class="btn btn-submit" type="submit" value="NEXT" />
        </li>
        
      </ul>
    </form>  
  </div>



  
</div>
</head>
</html>
