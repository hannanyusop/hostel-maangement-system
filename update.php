<?php
	require_once 'config.php';

 
	
	$studentname=$_POST['studentname'];
	$matricno=$_POST['matricno'];
	$faculty=$_POST['faculty'];
	$prog=$_POST['prog'];
	$yearsem=$_POST['yearsem'];
	$block=$_POST['block'];
	$roomno=$_POST['roomno'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$gender=$_POST['gender'];
	$phoneno=$_POST['phoneno'];

 
	mysqli_query($link,"UPDATE `regstud` set studentname='$studentname', matricno='$matricno',faculty='$faculty', prog='$prog', yearsem='$yearsem', block='$block',roomno='$roomno', email='$email', address='$address',gender='$gender', phoneno='$phoneno' WHERE matricno='$matricno'");
	
?>