<?php
require_once 'config.php';

//php code to Update data 

if(isset($_POST['Submit']))
{


//get values from input text and number 

	$id = $_GET['matricno'];

	$studentname = $_POST['studentname'];
	$faculty = $_POST['faculty'];
	$prog = $_POST['prog'];
	$yearsem = $_POST['yearsem'];
	$block = $_POST['block'];
	$roomno = $_POST['roomno'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$gender = $_POST['gender'];
	$phoneno = $_POST['phoneno'];

	//mysql query to update data
	$query= "UPDATE regstud SET studentname='$studentname',faculty='$faculty',prog='$prog',yearsem='$yearsem',block='$block',roomno='$roomno',email='$email',address='$address',gender='$gender',phoneno='$phoneno' WHERE matricno = '$id'";

	$result = mysqli_query($link, $query);

	if($result)
	{
		echo "<script>alert('Data updated!');window.location='student.php?matricno=$id'</script>";

	}else {
		var_dump(mysqli_error($link));
		echo 'Data Not Updated';
	}

}

?>
