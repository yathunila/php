<?php
	
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "library";
	$connection = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	
	//test if connection occurred.
	if(mysqli_connect_errno())
	{
		die ("Database connection failed: " . mysqli_connect_error() . 
					 " (" . mysqli_connect_errno(). ")"
					 );
	}
	
?>