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
	
	$user=$_SESSION['login_user'];
	
	$result = mysqli_query($connection, "SELECT date_taken, difficulty, result FROM tests WHERE username='$user';");
	$row = mysqli_fetch_array($result);
	
	// Creating table with previous results of the user
	echo '<table style="width:100%;">';
	echo '<tr><th>Ημερομηνία διεξαγωγής</th><th>Δυσκολία</th><th>Σκορ(/5)</th></tr>';
	
	while ($row)
	{
		echo '<tr><td>' . $row['date_taken'] . '</td><td>' . $row['difficulty'] . '</td><td>' . $row['result'] . '</td></tr>';
		$row = mysqli_fetch_array($result);
	}

	echo '</table>';
}

mysqli_close($connection);

?>