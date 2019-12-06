<?php
    require_once 'auth.php';

    if(isset($_GET['id'])){

        $booking_q = $link->query("SELECT *,r.id as roomId,b.id as bookingId FROM bookings as b
                                                    LEFT JOIN regstud as s ON s.id=b.student_id
                                                    LEFT JOIN rooms as r ON r.id=b.room_id
                                                    LEFT JOIN block as bl ON bl.id=r.block_id
                                                    WHERE b.id=$_GET[id] AND b.status=1");
        $booking = $booking_q->fetch_assoc();

        if(!$booking){
            echo "<script>alert('Invalid data');window.location='booking-list.php'</script>";
            exit();
        }
    }else{
        echo "<script>alert('Invalid parameter!');window.location='booking-list.php'</script>";
        exit();
    }


    if(isset($_POST['submit'])){

        $result = $_POST['submit'];


        if($result = "Accept"){


            #status = 2 mean confirmed
            if(!$link->query("UPDATE rooms SET status=2 WHERE id=$booking[roomId]")){
                mysqli_error($link);exit();
            }

            if(!$link->query("UPDATE bookings SET status=3,comment='$_POST[comment]' WHERE id=$_GET[id]")){
                mysqli_error($link);exit();
            }

            echo "<script>alert('Application successfully accepted!');window.location='booking-list.php'</script>";
            
        }else{
            #reject

            #reset studentid & status

            if(!$link->query("UPDATE rooms SET studentid=0,booking_id=0,status=0 WHERE id=$booking[roomId]")){
                mysqli_error($link);exit();
            }

            if(!$link->query("UPDATE bookings SET status=2,comment='$_POST[comment]' WHERE id=$_GET[id]")){
                mysqli_error($link);exit();
            }

            echo "<script>alert('Rejection successfully!');window.location='booking-list.php'</script>";
            
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
                  <label for="room">Student Name</label>
                  <input type="text" value="<?= $booking['studentname']; ?>" disabled>
              </p>

              <p class="left">
                <label for="room">Block Name</label>
                  <input type="text" value="<?= $booking['name']; ?>" disabled>
              </p>

              </p>
              <p class="left">
                <label for="rNo">Room No</label>
                <input type="text" value="<?= $booking['rNo']; ?>" disabled>
              </p>

              <p class="left">
                <label for="price">Room Price</label>
                   <input type="text" value="<?= $booking['price']; ?>" disabled>
              </p>

              <p class="left">
                  <label for="comment">Comment</label>
                  <textarea id="comment" name="comment" rows="5" required><?= $booking['comment']; ?></textarea>
              </p>



            <li>
              <input class="btn btn-submit" type="submit" name="submit" value="Accept" onclick="return confirm('Are sure want to accept this application?')">
                <input class="btn btn-submit" type="submit" name="submit" value="Reject" onclick="return confirm('Are sure want to reject this application?')">
              <input class="btn btn-back" type="submit" value="Back" onclick="history.back()">
            </li>
          </ul>
      </div>
    </div>
</form>
</html>