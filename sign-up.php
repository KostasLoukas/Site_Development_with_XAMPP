<?php
require("db_credentials.php");
include("global_variables.php");

session_start(); // Starting Session

$connection = mysqli_connect($servername, $user, $pass);
if (!$connection)
{
	echo "Problem in the connection!" . mysqli_error();
}
else
{
	mysqli_select_db($connection, "sorting_algorithms_db");
	
	$name=$_POST['name'];
	$surname=$_POST['surname'];
	$date_of_birth=$_POST['date_of_birth'];
	$gender=$_POST['gender'];
	$email=$_POST['email'];
	$username=$_POST['username'];
	$password=$_POST['password'];
		
	$result=mysqli_query($connection, "SELECT id FROM registered_users WHERE username='$username'");
	$row = mysqli_fetch_row($result);
		
	if ($row[0]=="")  // The username used for registration does not exist in the database
	{
		$profile_image_path="user_images/";  // Storing the images as a server path, not as a pc, otherwise the browser hits a privacy warning and does not show the photo
		if(!empty($_FILES)) 
		{
			$profile_image_path .= $_FILES["profile_image"]["name"]; 
			$filename = $_FILES["profile_image"]["tmp_name"]; 
			move_uploaded_file($filename, $profile_image_path);
		}
		
		mysqli_set_charset($connection, "utf8");

		// Every new registered user gets the role 'user'
		// Change of roles is the sole responsibility of the administrators
		mysqli_query($connection, "INSERT INTO registered_users(name, surname, date_of_birth, gender, email, username, password, profile_image_path, role) VALUES ('$name', '$surname', '$date_of_birth', '$gender', '$email', '$username', '$password', '$profile_image_path', 'user')");
		
		$query = mysqli_query($connection, "SELECT * FROM registered_users WHERE password='$password' AND username='$username';");
		$row = mysqli_fetch_row($query);
		
		$_SESSION['login_user']=$username;
		$_SESSION['profile_image']=$profile_image_path;
		$_SESSION['name']=$row[1];
		$_SESSION['surname']=$row[2];
		$_SESSION['date_of_birth']=$row[3];
		$_SESSION['gender']=$row[4];
		$_SESSION['email']=$row[5];
		$_SESSION['password']=$row[7];
		$_SESSION['profile_image']=$row[8];
		$_SESSION['role']=$row[9];
		
		
		warning(1, "Η εγγραφή χρήστη ήταν επιτυχής! Καλώς Ήλθατε!");
		
		header("Location: index.html");
		
	}
	else  //The username used for registration exists in the database, we can't allow that person to use that username!
	{
		
		warning(0, "Το όνομα χρήστη υπάρχει ήδη! Παρακαλώ επιλέξτε διαφορετικό όνομα χρήστη για εγγραφή.");
		
		
		header("Location: sign-up.html");
	}
	
}


mysqli_close($connection);



?>