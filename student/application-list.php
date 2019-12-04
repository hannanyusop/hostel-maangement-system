<?php
include('auth.php');

    $booking_q = $link->query("SELECT *,b.status as booking_status FROM bookings as b
            LEFT JOIN rooms as r ON b.room_id=r.id 
            WHERE student_id=$auth[id] ORDER BY b.status asc");
?>
<html lang="en">
<?= include('include/header.php'); ?>
<div id="main">
    <div class="container">
        <div class="row header">
            <h1>HOSTEL BLOCK & ROOM &nbsp;</h1>
        </div>
        <div class="row body">
            <table>
                <tr>
                    <th>#</th>
                    <th>Room</th>
                    <th>Booking Date</th>
                    <th>Status</th>
                </tr>
                <?php   while ($row = $booking_q->fetch_assoc()){ ?>
                    <tr>
                        <td><?= $row['id']; ?></td>
                        <td><?= $row['rNo']; ?></td>
                        <td><?= $row['created_at']; ?></td>
                        <td><?= $row['booking_status']; ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>
</body>
</html>