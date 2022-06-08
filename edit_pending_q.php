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
	$id_to_edit=trim($_POST['id_to_edit']);
	$field_to_edit=trim($_POST['field_to_edit']);
	$change_on_field=trim($_POST['change_on_field']);

	// Ability to change a question while its in queue to be accepted/rejected
	if($change_on_field!="" && $field_to_edit!="--" && $id_to_edit!=""){
		if($field_to_edit == "question"){
			mysqli_query($connection, "UPDATE question_requests SET question='$change_on_field' WHERE id='$id_to_edit';");
		}
		if($field_to_edit == "pos_answer"){
			mysqli_query($connection, "UPDATE question_requests SET possible_answers='$change_on_field' WHERE id='$id_to_edit';");
		}
		if($field_to_edit == "correct_answer"){
			mysqli_query($connection, "UPDATE question_requests SET correct_answers='$change_on_field' WHERE id='$id_to_edit';");
		}
		if($field_to_edit == "difficulty"){
			mysqli_query($connection, "UPDATE question_requests SET diff='$change_on_field' WHERE id='$id_to_edit';");
		}
	}
}

header("location: profile.html");

mysqli_close($connection);
?>