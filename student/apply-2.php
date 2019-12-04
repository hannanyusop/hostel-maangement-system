
<?php
    include('auth.php');

    if(!isset($_POST['block']) || !isset($_SESSION['booking'])){
        echo "<script>alert('Please select block!');window.location='apply.php';</script>";
    }

    #check if block is correct
    $block_q = $link->query("SELECT * FROM block WHERE gender='$auth[gender]' AND id='$_POST[block]'");

    $block = $block_q->fetch_assoc();

    if(!$block){
        echo "<script>alert('Invalid block!');window.location='apply.php';</script>";
    }

    $booking = $_SESSION['booking'] = [
        'block_id' => $block['id'],
        'block_name' => $block['name']
    ];


    $rooms_q = $link->query("SELECT * FROM rooms WHERE block_id = '$block[id]' AND status = 0");
?>
<html lang="en">
<?= include('include/header.php'); ?>
<div id="main">
    <div class="container">
        <div class="row header">
            <h1>HOSTEL BLOCK & ROOM &nbsp;</h1>
        </div>
        <div class="row body">
            <form action="apply-3.php" method="POST">
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
                <a href="apply.php"><small> <strong>Back</strong></small></a>
            </form>
        </div>
    </div>
</div>
</body>
</html>
