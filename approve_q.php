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
	
	$id_to_aprove=trim($_POST['id_to_aprove']);

	// Copies the approved question with the id a moderator/administrator has gave, from question_requests to be added at all_questions_db (directly copy-paste)
	mysqli_query($connection, "INSERT INTO all_questions_db SELECT * FROM question_requests	WHERE id='$id_to_aprove';");

	// Deletes question from "question_requests"
	mysqli_query($connection, "DELETE FROM question_requests WHERE id='$id_to_aprove';");
	
}

header("location: profile.html");

mysqli_close($connection);
?>