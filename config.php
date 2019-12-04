<?php
	/* Database credentials. Assuming you are running MySQL
	server with default setting (user 'root' with no password) */
	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');
	define('DB_NAME', 'dbhostel');


	define('PROJECT_NAME', 'HOSTEL BOOKING SYSTEM');
	 
	/* Attempt to connect to MySQL database */
	$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

	session_start();
	 
	// Check connection
	if($link === false){
	    die("ERROR: Could not connect. " . mysqli_connect_error());
	}




	function dd($string){
	    var_dump($string);exit();
    }

	function getBookingStatus($status = null){

	    $statuses = [
	        1 => 'Pending',
            2 => 'Rejected',
            3 => 'Approved'
        ];

	    return (is_null($status))? $statuses : $statuses[$status];
    }

function getRoomStatus($status = null){

    $statuses = [
        0 => 'Available',
        1 => 'Not Available',
    ];

    return (is_null($status))? $statuses : $statuses[$status];
}
?>