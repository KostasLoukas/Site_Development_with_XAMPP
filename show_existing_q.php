<?php
require("db_credentials.php");

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
	$result = mysqli_query($connection, "SELECT id,question, possible_answers, correct_answers, diff FROM all_questions_db;");
	$row = mysqli_fetch_array($result);
	

	// Creating table from questions inside "db with verified questions"
	echo '<table style="width:100%;">';
	echo '<tr><th>ΑΡΙΘΜΟΣ</th><th>ΕΡΩΤΗΣΗ</th><th>ΠΙΘΑΝΕΣ ΑΠΑΝΤΗΣΕΙΣ</th><th>ΣΩΣΤΗ ΑΠΑΝΤΗΣΗ</th><th>ΔΥΣΚΟΛΙΑ</th></tr>';
	
	while ($row)
	{
		echo '<tr><td>' . $row['id'] . '</td><td>' . $row['question'] . '</td><td>' . $row['possible_answers'] . '</td><td>' . $row['correct_answers'] . '</td><td>' . $row['diff'] . '</td></tr>';
		$row = mysqli_fetch_array($result);
	}

	echo '</table><br>';
	echo	'<form name="remove_existing_q" id="remove_existing_q" method="POST" action="remove_existing_q.php" enctype="multipart/form-data">
					<div class="col-75">
						<div class="col-50"> 
							<label for="poss_ans"><strong>Διάλεξε έναν αριθμό κάποιας ερώτησης για να διαγράψεις:</strong></label>
						</div>
						<INPUT type="text" name="id_to_remove_from_db" id="id_to_remove_from_db"> 
					</div>
					<INPUT class="button button2" type="submit" name="remove_from_db" id="remove_from_db" value="Διαγραφή της ερώτησης"><BR>
				</form>';
}

mysqli_close($connection);

?>