
<?php
    include('auth.php');
    $blocks_q = $link->query("SELECT * FROM block WHERE gender='$auth[gender]'");

    if(isset($_POST['room'])){

        if(!isset($_SESSION['booking'])){
            echo "<script>alert('Session Error!');window.location='apply.php';</script>";
        }

        $booking = $_SESSION['booking'];
        $rid = $_POST['room'];
        $room_q = $link->query("SELECT * FROM rooms WHERE id=$rid AND block_id = '$booking[block_id]' AND studentid = 0");
        $room = $room_q->fetch_assoc();

        if(!$room_q){
            echo "<script>alert('Invalid room!');window.location='apply-2.php';</script>";
            exit();
        }

        #insert into booking and get last id
        if($link->query("INSERT INTO  bookings (room_id, student_id, status, created_at) VALUES ($rid, $auth[id], 1, now())")){

            $booking_id = mysqli_insert_id($link);

            if(!$link->query("UPDATE rooms SET studentid='$auth[id]', status = 1, booking_id = $booking_id WHERE id=$rid")){

                 $link->query("DELETE FROM bookings WHERE id=$booking_id");exit();
                echo "<script>alert('Failed to update room details!!');window.location='apply-2.php';</script>";
            }

        }else{
            echo "<script>alert('Failed inserting booking details!!');window.location='apply-2.php';</script>";
            exit();
        }

        #update room
        echo "<script>alert('Successfully! Please wait for response.');window.location='apply.php';</script>";


    }else{
        echo "<script>alert('Invalid action!');window.location='apply.php';</script>";
    }
?>
