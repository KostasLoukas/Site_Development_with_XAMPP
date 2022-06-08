<?php
require("db_credentials.php");
include("login.php");

// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect($servername, $user, $pass);
if (!$connection)
{
	echo "Problem in the connection!" . mysqli_error();
}
else
{
	mysqli_select_db($connection, "sorting_algorithms_db");
	
	$logged_in_username=$_SESSION['login_user'];
	
	$name=trim($_POST['name']);
	$surname=trim($_POST['surname']);
	$date_of_birth=trim($_POST['date_of_birth']);
	$gender=trim($_POST['gender']);
	$email=trim($_POST['email']);
	$password=trim($_POST['password']);
	
	
	// Changing name
	if ($name!=""){
		mysqli_set_charset($connection, "utf8");
		mysqli_query($connection, "UPDATE registered_users SET name='$name' WHERE username='$logged_in_username';");
	}
	
	// Changing surname
	if ($surname!=""){
		mysqli_set_charset($connection, "utf8");
		mysqli_query($connection, "UPDATE registered_users SET surname='$surname' WHERE username='$logged_in_username';");
	}
	
	// Changing date of birth
	if ($date_of_birth!=""){
		mysqli_set_charset($connection, "utf8");
		mysqli_query($connection, "UPDATE registered_users SET date_of_birth='$date_of_birth' WHERE username='$logged_in_username';");
	}
	
	// Changing gender
	if ($gender!="--"){
		mysqli_set_charset($connection, "utf8");
		mysqli_query($connection, "UPDATE registered_users SET gender='$gender' WHERE username='$logged_in_username';");
	}
	
	// Changing email
	if ($email!=""){
		mysqli_set_charset($connection, "utf8");
		mysqli_query($connection, "UPDATE registered_users SET email='$email' WHERE username='$logged_in_username';");
	}
	
	// Changing password
	if ($password!=""){
		mysqli_set_charset($connection, "utf8");
		mysqli_query($connection, "UPDATE registered_users SET password='$password' WHERE username='$logged_in_username';");
	}
	
	// Changing profile picture
	$profile_image_path="user_images/";  //Storing the images as a server path, not as a pc, otherwise the browser hits a privacy warning and does not show the photo
	if(!empty($_FILES)) {
		$profile_image_path .= $_FILES["profile_image"]["name"]; 
		$filename = $_FILES["profile_image"]["tmp_name"]; 	
	}
	
	if ($profile_image_path!="user_images/"){
		move_uploaded_file($filename, $profile_image_path);
		
		mysqli_set_charset($connection, "utf8");
		mysqli_query($connection, "UPDATE registered_users SET profile_image_path='$profile_image_path' WHERE username='$logged_in_username';");
		
		$_SESSION['profile_image']=$profile_image_path;
	}
	
	$query = mysqli_query($connection, "SELECT * FROM registered_users WHERE username='$logged_in_username';");
	$row = mysqli_fetch_row($query);
	
	$_SESSION['name']=$row[1];
	$_SESSION['surname']=$row[2];
	$_SESSION['date_of_birth']=$row[3];
	$_SESSION['gender']=$row[4];
	$_SESSION['email']=$row[5];
	$_SESSION['password']=$row[7];
	
	warning(5,"Η αλλαγή στοιχείων προφίλ ήταν επιτυχής!");
	
	
	header("location: profile.html");
}

mysqli_close($connection);
?>