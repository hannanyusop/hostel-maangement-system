<?php
    include 'auth.php';
    include 'include/header.php';

    $var_matricno="";

    if(isset($_GET['matricno']) && ( "" != ($_GET['matricno'])) ){
        $var_matricno=$_GET['matricno'];
    }

    if(isset($_POST['search'])) {
        $valueToSearch = $_POST['valueToSearch'];
        $query ="SELECT * FROM `regstud` WHERE CONCAT( `studentname`, `matricno`, `yearsem`, `block`) LIKE '%".$valueToSearch."%' ";
        $search_result = filterTable($query);

    } else {
        $query = "SELECT * FROM `regstud`";
        $search_result = filterTable($query);
    }

    function filterTable($query)
    {
        $link = mysqli_connect("localhost", "root", "", "dbhostel");
        $filter_Result = mysqli_query($link, $query);
        return $filter_Result;
    }

?>
    <body>
        
        <form  method="post">
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
                    <a href="student-edit.php?matricno=<?php echo $row["matricno"]; ?>">Edit</a>
                    </td>
                    <td align="center">
                    <a onclick="return confirm('Are you sure want to delete this data?')" href="student-delete.php?matricno=<?= $row["matricno"]; ?>">Delete</a>
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