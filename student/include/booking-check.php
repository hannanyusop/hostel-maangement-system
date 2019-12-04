<?php

$check_q = $link->query("SELECT * FROM bookings WHERE student_id=$auth[id] AND status IN(1,3)");
$check = $check_q->fetch_assoc();
if($check){
    echo "<script>alert('Ops! You already have pending/success application.');window.location='application-list.php';</script>";
}

?>