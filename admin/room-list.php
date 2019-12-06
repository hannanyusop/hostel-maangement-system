<?php

include 'auth.php';

include 'include/header.php';
?>

<div id="main">
  <h2>HOSTEL ROOM </h2>
  

</div>

<?php


if(isset($_GET['data']))
{
    $valueToSearch = $_GET['data'];
    // search in all table columns
    // using concat mysql function
    $query ="SELECT *,r.id as room_id FROM `rooms` as r LEFT JOIN block as b ON b.id=r.block_id WHERE CONCAT( `rNo`) LIKE '%".$valueToSearch."%' ";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT *,r.id as room_id FROM rooms as r LEFT JOIN block as b ON b.id=r.block_id LIMIT 20 OFFSET 20";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $link = mysqli_connect("localhost", "root", "", "dbhostel");
    $filter_Result = mysqli_query($link, $query);
    return $filter_Result;
}

?>


<!DOCTYPE html>
<html>
    <body>
        
        <form method="GET">
            <input type="text" name="data" value="<?= (isset($_GET['data']))? $_GET['data'] : ''; ?>" placeholder="Value To Search"><br><br>
            <button class="submit" type="submit">Search</button>
            <a href="room-add.php" class="submit">Add Room</a>
            <br><br>
            
            <table>
                <tr>
                    <th><strong>Room No</strong></th>
                    <th><strong>Block</strong></th>
                    <th><strong>Status</strong></th>
                    <th><strong>Price</strong></th>
                    <th><strong>Option</strong></th>
                    
                </tr>
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['rNo'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?= getRoomStatus($row['status']) ?></td>
                    <td><?= $row['price'];?></td>
                    <td>
                    <a href="room-edit.php?id=<?= $row["room_id"]; ?>">Edit</a> |
                    <a href="room-delete.php?id=<?= $row["room_id"]; ?>">Delete</a>
                    </td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        
    </body>
</html>


</marquee>
</div>
</head>
</html>