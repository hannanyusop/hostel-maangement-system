<?php
    require_once 'auth.php';

    $query = $link->query("SELECT * FROM block");

    if(isset($_GET['id'])){

        $room_q = $link->query("SELECT * FROM rooms WHERE id=$_GET[id]");
        $room = $room_q->fetch_assoc();

        if(!$room){
            echo "<script>alert('Invalid room!');window.location='room-list.php'</script>";
        }

        if(isset($_POST['submit'])){
            
            $update = $link->query("UPDATE rooms SET block_id='$_POST[block_id]', rNo='$_POST[rNo]', price='$_POST[price]' WHERE id=$_GET[id]");
            if($update)
            {
                echo "<script>alert('Room updated!');window.location='room-edit.php?id=$_GET[id]'</script>";

            }else {
                var_dump(mysqli_error($link));
                echo 'Data Not Updated';
            }
        }

    }else{

    }

?>


<!DOCTYPE html >
<head>
    <link href="../asset/style2.css" rel="stylesheet" type="text/css">
</head>


<form method="POST">

<div class="container">
      <div class="row header">
        <h1>HOSTEL ROOM &nbsp;</h1>
      </div>
      <div class="row body">
          <ul>
              <p class="left">
                <label for="room">Block Name</label>
                  <select name="block_id" class="form-control">
                      <?php while ($block = $query->fetch_assoc()){ ?>
                          <option value="<?= $block['id']; ?>" <?= ($room['block_id'] == $block['id'])? 'selected' : '' ?>><?= $block['name'] ?></option>
                      <?php } ?>
                  </select>

              </p>
              <p class="left">
                <label for="rNo">Room No</label>
                <input type="text" name="rNo" value="<?= $room['rNo'] ?>" required>
              </p>

               <p class="left">
                <label for="price">Room Price</label>
                <input type="text" name="price" required value="<?= $room['price'] ?>" readonly=" " />
              </p>

            <li>
              <input class="btn btn-submit" type="submit" name="submit" value="Submit" />
              <input class="btn btn-back" type="submit" value="Back" onclick="history.back()">
               <small>or press <strong>enter</strong></small>
            </li>
          </ul>
      </div>
    </div>
</form>
</html>