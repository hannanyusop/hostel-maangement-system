<?php
include('auth.php');

    $booking_q = $link->query("SELECT * FROM bookings as b 
                                    LEFT JOIN regstud as s ON s.id = b.student_id
                                    LEFT JOIN rooms as r ON r.id=b.room_id
                                    LEFT JOIN block as bl ON bl.id = r.block_id
                                    WHERE b.id=$_GET[id] AND b.status = 3");
    $booking = $booking_q->fetch_assoc();

        if(!$booking){
            echo "<script>alert('Ops!invalid action!');window.location='application-list.php';<scriptag>;";
        }
?>

NAME : <?= $booking['studentname']; ?><br>
MATRIC NO: <?= $booking['matricno']; ?><br>
PRICE :<?= $booking['price']; ?><br>
ROOM NO : <?= $booking['rNo']; ?><br>
BLOCK : <?= $booking['name']; ?><br><br>

<p>*Please bring this copy on registration.</p>


