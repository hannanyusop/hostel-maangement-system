<?php
require_once 'config.php';

//php code to Update data 

if(isset($_POST['Submit']))
{


//get values from input text and number 

	$id = $_GET['rNo'];

	$room = $_POST['room'];
	$rNo = $_POST['rNo'];
	$price = $_POST['price'];
	$studentid = $_POST['studentid'];
	$status = $_POST['status'];


	//mysql query to update data
	$query= "UPDATE rooms SET room='$room',rNo='$rNo',price='$price',studentid='$studentid',status='$status' WHERE rNo = '$id'";

	$result = mysqli_query($link, $query);

	if($result)
	{
		echo "<script>alert('Data updated!');window.location='viewR.php?matricno=$id'</script>";

	}else {
		var_dump(mysqli_error($link));
		echo 'Data Not Updated';
	}

}

?>
