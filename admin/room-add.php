<?php
    require_once 'auth.php';

    $query = $link->query("SELECT * FROM block");

    if(isset($_POST['submit'])){

        $result = mysqli_query ($link,"INSERT INTO rooms (block_id, rNo, price) VALUES ('$_POST[block_id]','$_POST[rNo]', '$_POST[price]') ");

        //checking either success or not
        if($result)
        {
            echo "<script>alert('Room Inserted!');window.location='room-list.php'</script>";

        }else {
            var_dump(mysqli_error($link));
            echo 'Data Not Updated';
        }
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
                          <option value="<?= $block['id']; ?>"><?= $block['name'] ?></option>
                      <?php } ?>
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
              <input class="btn btn-submit" type="submit" name="submit" value="Submit" />
              <input class="btn btn-back" type="submit" value="Back" onclick="history.back()">
               <small>or press <strong>enter</strong></small>
            </li>
          </ul>
      </div>
    </div>
</form>
</html>