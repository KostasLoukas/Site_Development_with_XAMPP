<?php
require("db_credentials.php");
include("login.php");

$connection = mysqli_connect($servername, $user, $pass);
if (!$connection)
{
	echo "Problem in the connection!" . mysqli_error();
}
else
{
	// Selecting Database
	$db = mysqli_select_db($connection, "sorting_algorithms_db");
	$id_to_remove=trim($_POST['id_to_remove']);

	// Removes question with the id a admin/mod has added
	mysqli_query($connection, "DELETE FROM question_requests WHERE id='$id_to_remove';");
}

header("location: profile.html");

mysqli_close($connection);
?>