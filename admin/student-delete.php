<?php

require_once 'auth.php';

//delete data
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $result = mysqli_query($link,"DELETE FROM regstud WHERE id=$id");

        if ($result) {
            echo "<script type='text/javascript'>alert('Your data has been deleted!');window.location ='student.php';</script>";
        } else {
            echo "PROBLEM OCCURED !";header("location:form.php");
        }
    }
?>

