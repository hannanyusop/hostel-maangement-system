<?php
include('auth.php');

    $booking_q = $link->query("SELECT *,b.status as booking_status,b.id as bookingId  FROM bookings as b
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
                    <th>Price</th>
                    <th>Booking Date</th>
                    <th>Status</th>
                    <th></th>
                </tr>
                <?php   while ($row = $booking_q->fetch_assoc()){ ?>
                    <tr>
                        <td><?= $row['id']; ?></td>
                        <td><?= $row['rNo']; ?></td>
                        <td><?= $row['price']; ?></td>
                        <td><?= $row['created_at']; ?></td>
                        <td><?= getBookingStatus($row['booking_status']) ?></td>
                        <td><a href="booking-receipt.php?id=<?= $row['bookingId'] ?>">View Full</a> </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>
</body>
</html>