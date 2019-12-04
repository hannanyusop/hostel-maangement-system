<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
header("location: index.php"); // Redirecting To Home Page
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

</style>
</head>
<link rel="stylesheet" href="style.css">
<body>
<header>
           <img src="asset/img/b.png">
            <nav>
                <ul>
                    <li><a href="profile.php" class="activeLink" >Home</a></li>
                    <li><a href="formBR.php">Hostel Block </a></li>
                    <li><a href="roomH.php">Hostel Room </a></li>
                    <li><a href="viewR.php">View Block & Room</a></li>
                 
              
                </ul>
            </nav>
        </header>

<div id="main">
  <h2>HOSTEL BLOCK & ROOM </h2>
  

</div>

<?php

require_once 'config.php';

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
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
        
        <form action="bRoom.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
            
            <table>
                <tr>
                    <th><strong>Block Name</strong></th>
                    <th><strong>Gender</strong></th>
                    <th><strong>Edit</strong></th>
                    <th><strong>Delete</strong></th>
                    
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['gender'];?></td>
                    
                    <td>
                    <a href="editS_form.php?name=<?php echo $row["name"]; ?>">Edit</a>
                    </td>
                    <td align="center">
                    <a href="delete.php?name=<?php echo $row["name"]; ?>">Delete</a>
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