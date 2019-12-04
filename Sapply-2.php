<?php
  require_once 'auth-student.php';

  if(!isset($_POST['block'])){
      echo "<script>alert('Please select block!');window.location='Sapply.php';</script>";
  }

  #check if block is correct
  $block_q = $link->query("SELECT * FROM block WHERE gender='$auth[gender]' AND id='$_POST[block]'");

  $block = $block_q->fetch_assoc();

  if(!$block){
    echo "<script>alert('Invalid block!');window.location='Sapply.php';</script>";
  }

  $booking = $_SESSION['booking'] = [
    'block_id' => $block['id'],
    'block_name' => $block['name']
  ];


  $rooms_q = $link->query("SELECT * FROM rooms WHERE block_id = '$block[id]' AND status = 0");

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
    <form action="Sapply-3.php" method="GET">
      <ul>
  
        <li>


          <p>SELECT ROOM:</p><br><br>

          <table>
            <thead>
            </thead>
            <tbody>
              <?php  if($rooms_q->num_rows > 0){ while($room = $rooms_q->fetch_assoc()){ ?>
              <tr>
                <td><input type="radio" name="room" value="<?= $room['id']; ?>" required></td>
                <td><?= $room['rNo']; ?></td>
              </tr>
              <?php }}else{ ?>
                <tr>
                  <td colspan="2">No room available</td>
                </tr>
               <?php } ?>
            </tbody>
          </table>
          <input class="btn btn-submit" type="submit" value="Submit" />
          <a href="Sapply.php"><small> <strong>Back</strong></small></a>
           
        </li>
        
      </ul>
    </form>  
  </div>
</div>
</head>
</html>
