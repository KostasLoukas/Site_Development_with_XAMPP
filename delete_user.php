<?php
require("db_credentials.php");
include("login.php");

$username=$_POST['choose_user'];

$connection = mysqli_connect($servername, $user, $pass);
if (!$connection)
{
	echo "Problem in the connection!" . mysqli_error();
}
else
{
	// Selecting Database
	$db = mysqli_select_db($connection, "sorting_algorithms_db");
	
	// Deletes user
	if ($username!="--") {
		mysqli_query($connection, "DELETE FROM registered_users WHERE username='$username';");
	}
	
	header("location: profile.html");
}

mysqli_close($connection);

?>