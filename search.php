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

            .sb-search {
  float: right;
  overflow: hidden;
}

.sb-search-input {
  border: none;
  outline: none;
  background: #fff;
  width: 100%;
  height: 60px;
  margin: 0;
  z-index: 10;
  padding: 20px 65px 20px 20px;
  font-family: inherit;
  font-size: 20px;
  color: #2c3e50;
}
        </style>
    </head>
    <body>
        
        <form action="search.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
            
            <table>
                <tr>
                    <th>Student Name</th>
                    <th>Matric No</th>
                    <th>Year/Sem</th>
                    <th>Block</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['studentname'];?></td>
                    <td><?php echo $row['matricno'];?></td>
                    <td><?php echo $row['yearsem'];?></td>
                    <td><?php echo $row['block'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        
    </body>
</html>