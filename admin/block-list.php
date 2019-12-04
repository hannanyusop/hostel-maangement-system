<?php

include 'auth.php';

include 'include/header.php';
?>

<div id="main">
  <h2>HOSTEL BLOCK & ROOM </h2>
  

</div>

<?php


if(isset($_GET['data']))
{
    $valueToSearch = $_GET['data'];
    // search in all table columns
    // using concat mysql function
    $query ="SELECT * FROM `block` WHERE CONCAT( `name`, `gender`) LIKE '%".$valueToSearch."%' ";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `block`";
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
        
        <form action="bRoom.php" method="GET">
            <input type="text" name="data" value="<?= (isset($_GET['data']))? $_GET['data'] : ''; ?>" placeholder="Value To Search"><br><br>
            <button class="submit" type="submit">Search</button><br><br>
            
            <table>
                <tr>
                    <th><strong>Block Name</strong></th>
                    <th><strong>Gender</strong></th>
                    <th><strong>Edit</strong></th>
                    <th><strong>Delete</strong></th>
                    
                </tr>
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['gender'];?></td>
                    
                    <td>
                    <a href="room-edit.php?id=<?= $row["id"]; ?>">Edit</a>
                    </td>
                    <td align="center">
                    <a href="room-delete.php?id=<?= $row["id"]; ?>">Delete</a>
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