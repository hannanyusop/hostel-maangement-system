<?php
require_once '../config.php';

if(isset($_POST['search'])) {

    $valueToSearch = $_POST['valueToSearch'];
    $query = $link->query("SELECT * FROM bookings");

} else {
    $query = $link->query("SELECT *,b.id as bookingId,b.status as bookingStatus
                    FROM bookings as b
                    LEFT JOIN regstud as s ON s.id=b.id
                    LEFT JOIN rooms as r ON r.id= b.room_id
                    ");
}


?>

<html lang="en">
<?php include('include/header.php'); ?>
        <form action="../student.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>

            <table>
                <tr>
                    <th>ID</th>
                    <th>Matric No</th>
                    <th>Student Name</th>
                    <td>Room Number</td>
                    <td>Status</td>
                    <td></td>
                    <td></td>
                </tr>
                <?php while($row = $query->fetch_assoc()):?>
                <tr>
                    <td><?php echo $row['bookingId'];?></td>
                    <td><?= $row['matricno'] ?></td>
                    <td><?= $row['studentname'] ?></td>
                    <td><?= $row['rNo'] ?></td>
                    <td><?= getBookingStatus($row['bookingStatus']) ?></td>
                    <td><a href="../editS_form.php?matricno=<?php echo $row['bookingId'] ?>">Edit</a></td>
                    <td align="center"><a href="../delete.php?matricno=<?php echo $row['bookingId'] ?>">Delete</a></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
    </body>

</html>