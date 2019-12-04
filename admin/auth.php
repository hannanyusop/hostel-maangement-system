<?php

#include database connection
include '../config.php';
if(isset($_SESSION['auth'])){


    $auth = $_SESSION['auth'];

    if($auth['role'] != 'admin'){

        session_destroy();
        echo "<script>alert('Invalid authentication!');window.location='../../index.php';</script>";
        exit(); #terminate process

    }
}else{
    session_destroy();
    echo "<script>alert('No session!');window.location='../../index.php'</script>";
}
?>