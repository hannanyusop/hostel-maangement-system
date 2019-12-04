<?php

require_once 'config.php';
// php code to Update data from mysql database Table

if(isset($_POST['update']))
{
    
   $hostname = "localhost";
   $username = "root";
   $password = "";
   $databaseName = "dbhostel";
   
   $link = mysqli_connect($hostname, $username, $password, $databaseName);
   
   // get values form input text and number
   
   $studentname = $_POST['studentname'];
   $matricno = $_POST['matricno'];
   $block = $_POST['block'];
   $roomno = $_POST['roomno'];
           
   // mysql query to Update data
   $query = "UPDATE `regstud` SET `studentname`='".$studentname."',`matricno`=$matricno, `block`='".$block."',`roomno`='" . $roomno."'  WHERE `matricno` = $matricno";
   
   $result = mysqli_query($link, $query);
   
   if($result)
   {

       
       echo 'Data Updated';
   }else{



       echo 'Data Not Updated';
   }
   mysqli_close($link);
}

?>

<!DOCTYPE html>

<html>

    <head>

        <title> PHP UPDATE DATA </title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>

        <form action="updateT.php" method="post">

            Student Name: <input type="text" name="studentname" required><br><br>

            Matric No:<input type="text" name="matricno" required><br><br>

            Block:<input type="text" name="block" required><br><br>

            Room No:<input type="text" name="roomno" required><br><br>

            <input type="submit" name="update" value="Update Data">

        </form>

    </body>


</html>