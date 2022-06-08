<?php
require("db_credentials.php");

// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect($servername, $user, $pass);
if (!$connection)
{
	echo "Problem in the connection!" . mysqli_error();
}
else
{
	// Selecting Database
	$db = mysqli_select_db($connection, "sorting_algorithms_db");

	// SQL query to fetch information of registerd users and finds user match
	$result = mysqli_query($connection, "select username from registered_users;");
	$row = mysqli_fetch_array($result);

	// Values from user, they get added to POST and we are transported to "delete_user.php"
	echo '<form name="usersdpd" id="usersdpd" method="POST" action="delete_user.php">
		 	  <select name="choose_user" id="choose_user">
			  <option value="--">--';
	
	while ($row)
	{
		echo '<option value="' . $row['username'] . '">' . $row['username'];
		$row = mysqli_fetch_array($result);
	}
	
	echo '		</select>
				<input style="background-color:red;" type="submit" name="submit" id="submit" value="Διαγραφή Χρήστη">
			</form>';
	
	echo '<input class="button button1" type="button" name="hide_users" id="hide_users" value="Απόκρυψη Χρηστών" onclick="hideUsers()">';
}


mysqli_close($connection);


?>