<?php
session_start(); // Starting Session
$error = ''; // Variable To Store Error Message
if (isset($_POST['submit'])) {

	if (empty($_POST['email']) || empty($_POST['matricno'])) {
		$error = "Username or Password is invalid";
	}else{
		// Define $username and $password
		$email = $_POST['email'];
		$matricno = $_POST['matricno'];
		// mysqli_connect() function opens a new connection to the MySQL server.
		$conn = mysqli_connect("localhost", "root", "", "dbhostel");
		// SQL query to fetch information of registerd users and finds user match.
		
		$query = $conn->query("SELECT * from regstud where email='$email' AND matricno='$matricno'");

		$student = $query->fetch_assoc();

		if($student){

			$_SESSION['login_user'] = $email; // Initializing Session

			$_SESSION['auth'] = [
				'role' => 'student',
				'id' => $student['id'],
				'gender' => $student['gender'],
				'matricno' => $student['matricno'],
				'name' => $student['studentname']
			];

			header("location: student/dashboard.php"); // Redirecting To Profile Page
		}

	}

}
?>