<?php
require_once '../config.php';

if(isset($_GET['data'])) {

    $data = $_GET['data'];
    $query = $link->query("SELECT *,b.id as bookingId,b.status as bookingStatus
                    FROM bookings as b
                    LEFT JOIN regstud as s ON s.id=b.id
                    LEFT JOIN rooms as r ON r.id= b.room_id
                    ");

} else {
    $query = $link->query("SELECT *,b.id as bookingId,b.status as bookingStatus
                    FROM bookings as b
                    LEFT JOIN regstud as s ON s.id=b.id
                    LEFT JOIN rooms as r ON r.id= b.room_id
                    ");
}


?>

<html lang="en">
<body>
<?php include('include/header.php'); ?>
    <form  method="GET">
        <input type="text" name="data" value="<?= (isset($_GET['data']))? $_GET['data'] : '' ?>" placeholder="Value To Search"><br><br>
        <button type="submit" class="submit">Search</button><br><br>

        <table>
            <tr>
                <th>ID</th>
                <th>Matric No</th>
                <th>Student Name</th>
                <td>Room Number</td>
                <td>Status</td>
                <td></td>
            </tr>
            <?php while($row = $query->fetch_assoc()):?>
            <tr>
                <td><?php echo $row['bookingId'];?></td>
                <td><?= $row['matricno'] ?></td>
                <td><?= $row['studentname'] ?></td>
                <td><?= $row['rNo'] ?></td>
                <td><?= getBookingStatus($row['bookingStatus']) ?></td>
                <td align="center"><a href="../delete.php?id=<?php echo $row['bookingId'] ?>">Response</a></td>
            </tr>
            <?php endwhile;?>
        </table>
    </form>
</body>

</html>