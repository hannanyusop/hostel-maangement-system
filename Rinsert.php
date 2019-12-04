<?php
require_once 'config.php';

$var_room = $_POST['room'];
$var_rNo = $_POST['rNo'];
$var_price = $_POST['price'];


$result = mysqli_query ($link,"INSERT INTO rooms (room, rNo, price) VALUES ('$var_room','$var_rNo', '$var_price') ");

//checking either success or not 
if($result)
	{
		echo "<script>alert('Data updated!');window.location='roomH.php'</script>";

	}else {
		var_dump(mysqli_error($link));
		echo 'Data Not Updated';
	}


?>
