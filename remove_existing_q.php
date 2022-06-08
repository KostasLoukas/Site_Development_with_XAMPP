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
	$id_to_remove_from_db=trim($_POST['id_to_remove_from_db']);

	// Delete question from "db with verified questions"
	mysqli_query($connection, "DELETE FROM all_questions_db WHERE id='$id_to_remove_from_db';");
}

header("location: profile.html");

mysqli_close($connection);
?>