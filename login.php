<?php
require("db_credentials.php");
include("global_variables.php");

session_start(); // Starting Session

if (isset($_POST['submit']))  //So that the user is re-directed once per visit
{
	// Define $username and $password
	$username=$_POST['login_username'];
	$password=$_POST['login_password'];

	// Establishing Connection with Server by passing server_name, user_id and password as a parameter
	$connection = mysqli_connect($servername, $user, $pass);
	if (!$connection)
	{
		echo "Problem in the connection!" . mysqli_error();
	}
	else
	{
		// Selecting Database
		$db = mysqli_select_db($connection, "sorting_algorithms_db");

		// SQL query to fetch information of registerd users and finds user match
		$query = mysqli_query($connection, "select * from registered_users where password='$password' AND username='$username';");
		$rows = mysqli_num_rows($query);
			
		if ($rows == 1) {
			$_SESSION['login_user']=$username; // Initializing Session
			
			$query = mysqli_query($connection, "SELECT * FROM registered_users WHERE password='$password' AND username='$username';");
			$row = mysqli_fetch_row($query);
			
			$_SESSION['name']=$row[1];
			$_SESSION['surname']=$row[2];
			$_SESSION['date_of_birth']=$row[3];
			$_SESSION['gender']=$row[4];
			$_SESSION['email']=$row[5];
			$_SESSION['password']=$row[7];
			$_SESSION['profile_image']=$row[8];
			$_SESSION['role']=$row[9];
			
			warning(4, "Επιτυχής σύνδεση!");
			
			header("location: index.html");
		}
		else
		{
			warning(3, "Το όνομα χρήστη ή ο κωδικός που χρησιμοποιήθηκε ήταν λάθος!");
			
			header("location: login.html");
			
		}
		
		
		mysqli_close($connection); // Closing Connection
	}
	
}

?>

