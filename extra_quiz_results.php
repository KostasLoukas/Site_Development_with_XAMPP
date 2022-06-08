<?php
require("db_credentials.php");
include("login.php");

date_default_timezone_set('UTC');

$qs=array_keys($_POST);  //Getting the names of the questions

$c=0;
for ($i = 0; $i < 5; $i++) {
	if ($_POST[$qs[$i]] == $_SESSION['q'.($i+1).'_answer']) {
		$c=$c+1;
	}
}

$connection = mysqli_connect($servername, $user, $pass);
if (!$connection)
{
	echo "Problem in the connection!" . mysqli_error();
}
else
{
	mysqli_select_db($connection, "sorting_algorithms_db");
	
	$date_of_test = date('l jS \of F Y h:i:s A'); // Saves the date in the format: Saturday 5th of June 2021 07:41:13 AM
	$user=$_SESSION['login_user'];
	$difficulty=$_SESSION['q_difficulty'];
	
	mysqli_query($connection, "INSERT INTO tests (username, date_taken, difficulty, result) VALUES ('$user', '$date_of_test', '$difficulty', '$c');");
	
	warning(9, "Το σκορ σου ήταν: $c. Πήγαινε στην καρτέλα 'Προφίλ' για ένα αναλυτικό ιστορικό των τεστ σου.");
	
}

mysqli_close($connection);

header("location: extraquiz.html");

?>