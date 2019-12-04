<?php
require_once 'config.php';
$var_matricno="";
if(isset($_GET['matricno']) && ( "" != ($_GET['matricno'])) ){
$var_matricno=$_GET['matricno'];
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

</style>
</head>
<link rel="stylesheet" href="style.css">
<body>
<header>
           <img src="asset/img/b.png">
            <nav>
                <ul>
                    <li><a href="admin/profile.php" class="activeLink" >Home</a></li>
                    <li><a href="regS.php">STUDENT REGISTRATION</a></li>
                    <li><a href="student.php">VIEW STUDENT RECORD</a></li>
                 
              
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
    $query ="SELECT * FROM `regstud` WHERE CONCAT( `studentname`, `matricno`, `yearsem`, `block`) LIKE '%".$valueToSearch."%' ";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `regstud`";
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
                    <th><strong>Student Name</strong></th>
                    <th><strong>Matric Number</strong></th>
                    <th><strong>Faculty</strong></th>
                    <th><strong>Programme</strong></th>
                    <th><strong>Year/Sem</strong></th>
                    <th><strong>Block</strong></th>
                    <th><strong>Room Number</strong></th>
                    <th><strong>Email</strong></th>
                    <th><strong>Address</strong></th>
                    <th><strong>Gender</strong></th>
                    <th><strong>Phone Number</strong></th>
                    <th><strong>Edit</strong></th>
                    <th><strong>Delete</strong></th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['studentname'];?></td>
                    <td><?php echo $row['matricno'];?></td>
                    <td><?php echo $row['faculty'];?></td>
                    <td><?php echo $row['prog'];?></td>
                     <td><?php echo $row['yearsem'];?></td>
                    <td><?php echo $row['block'];?></td>
                    <td><?php echo $row['roomno'];?></td>
                    <td><?php echo $row['email'];?></td>
                     <td><?php echo $row['address'];?></td>
                    <td><?php echo $row['gender'];?></td>
                    <td><?php echo $row['phoneno'];?></td>
                    <td>
                    <a href="editS_form.php?matricno=<?php echo $row["matricno"]; ?>">Edit</a>
                    </td>
                    <td align="center">
                    <a href="delete.php?matricno=<?php echo $row["matricno"]; ?>">Delete</a>
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