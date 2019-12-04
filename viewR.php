<?php
require_once 'config.php';
$var_matricno="";
if(isset($_GET['rNo']) && ( "" != ($_GET['rNo'])) ){
$var_matricno=$_GET['rNo'];
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {

  background-image: url("a.jpeg");
  font-family: "Lato", sans-serif;
  background-color: white;

}

header img {
    height: 80px;
    margin-left: 40px;
}
body {
    height: 125vh;
    background-image: url();
     background-color: #fff; 
    background-size: cover;
    font-family: sans-serif;
    margin-top: 80px;
    padding: 30px;
}

main {
    color: white;
}

header {
    background-color: white;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    height: 80px;
    display: flex;
    align-items: center;
    box-shadow: 0 0 25px 0 black;
}

header * {
    display: inline;
}

header li {
    margin: 20px;
}

header li a {
    color: black;
    text-decoration: none;
}

a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

a:hover {
  background-color: #ddd;
  color: black;
}

.previous {
  background-color: #f1f1f1;
  color: black;
}

.next {
  background-color: #4CAF50;
  color: white;
}

.round {
  border-radius: 50%;
}

</style>
</head>
<link rel="stylesheet" href="style.css">
<body>
<header>
           <img src="asset/img/b.png">
            <nav>
                <ul>
                    <li><a href="bRoom.php" class="activeLink" >Home</a></li>
                  
                 
              
                </ul>
            </nav>
        </header>
<?php

require_once 'config.php';

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query ="SELECT * FROM `rooms` WHERE CONCAT( `room`, `rNo`, `price`, `studentid`, 'status') LIKE '%".$valueToSearch."%' ";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `rooms`";
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
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        
        <form action="student.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
            
            <table>
                <tr>
                    <th><strong>ID</strong></th>
                    <th><strong>Block Name</strong></th>
                    <th><strong>Room No</strong></th>
                    <th><strong>Price</strong></th>
                    <th><strong>Student ID</strong></th>
                    <th><strong>Status</strong></th>
                    <th><strong>Edit</strong></th>
                    <th><strong>Delete</strong></th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['room'];?></td>
                    <td><?php echo $row['rNo'];?></td>
                    <td><?php echo $row['price'];?></td>
                     <td><?php echo $row['studentid'];?></td>
                    <td><?php echo $row['status'];?></td>
                    <td>
                    <a href="Redit.php?rNo=<?php echo $row["rNo"]; ?>">Edit</a>
                    </td>
                    <td align="center">
                    <a href="delete.php?rNo=<?php echo $row["rNo"]; ?>">Delete</a>
                    </td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        <a href="viewR.php" class="previous">&laquo; Previous</a>
<a href="viewR.php" class="next">Next &raquo;</a>
    </body>
</html>


</marquee>
</div>
</head>
</html>