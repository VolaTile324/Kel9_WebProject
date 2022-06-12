<?php

	$servername_sql = "localhost";
	$username_sql = "root";
	$password_sql = "";

	$database_name = "stack_login";

	// Create a connection
	$conn = mysqli_connect($servername_sql,
		$username_sql, $password_sql, $database_name);

	// Code written below is a step taken
	// to check that our Database is
	// connected properly or not. If our
	// Database is properly connected we
	// can remove this part from the code
	// or we can simply make it a comment
	// for future reference.

	if($conn) {
		echo "";
	}
	else {
		die("Error". mysqli_connect_error());
	}
?>
