<?php
require("db_credentials.php");

/* Recognizable roles are user, moderator and administrator (with corresponding privileges). Anyone else 
(another role name) is referred as a simple user (user) but it's desired to follow the nomenclature
reported (responsibility of administrators). */

$username=$_POST['username'];
$role=$_POST['role'];

// To remove spaces
$username=trim($username);
$role=trim($role);

$connection = mysqli_connect($servername, $user, $pass);
if (!$connection)
{
	echo "Problem in the connection!" . mysqli_error();
}
else
{
	// Selecting Database
	$db = mysqli_select_db($connection, "sorting_algorithms_db");

	mysqli_set_charset($connection, "utf8");
	mysqli_query($connection, "UPDATE registered_users SET role='$role' WHERE username='$username';");
	
	/* Here we don't reload the new role in the session as it should be, so that if e.g. an administrator
	change his role by mistake, to be able to, until disconnected, to re-change his role as administrator. 
	If of course he manages to disconnect without changing his administrator role again, then he will have 
	whatever role he has set for himself (eg user or whatever other name role put in the corresponding text box) */
}

header("location: profile.html");

mysqli_close($connection);
?>