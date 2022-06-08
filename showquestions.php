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
	$result = mysqli_query($connection, "SELECT id,question, possible_answers, correct_answers, diff FROM question_requests;");
	$row = mysqli_fetch_array($result);
	
	// Creating table with requested questions
	echo '<table style="width:100%;">';
	echo '<tr><th>ΑΡΙΘΜΟΣ</th><th>ΕΡΩΤΗΣΗ</th><th>ΠΙΘΑΝΕΣ ΑΠΑΝΤΗΣΕΙΣ</th><th>ΣΩΣΤΗ ΑΠΑΝΤΗΣΗ</th><th>ΔΥΣΚΟΛΙΑ</th></tr>';
	
	while ($row)
	{
		echo '<tr><td>' . $row['id'] . '</td><td>' . $row['question'] . '</td><td>' . $row['possible_answers'] . '</td><td>' . $row['correct_answers'] . '</td><td>' . $row['diff'] . '</td></tr>';
		$row = mysqli_fetch_array($result);
	}

	echo '</table><br>';

	// The following forms are connected to "remove_pending_q.php", "edit_pending_q.php" and "approve_q.php" respectively, with POST.
	echo	'<form name="remove_pending_q" id="remove_pending_q" method="POST" action="remove_pending_q.php" enctype="multipart/form-data">
					<div class="col-75">
						<div class="col-50"> 
							<label for="poss_ans"><strong>Διάλεξε έναν αριθμό κάποιας ερώτησης για να απορρίψεις:</strong></label>
						</div>
						<INPUT type="text" name="id_to_remove" id="id_to_remove"> 
					</div>
					<INPUT style="background-color:red;" type="submit" name="remove_from_queue" id="remove_from_queue" value="Απόρριψη της ερώτησης"><BR>
				</form>
				
				<form name="edit_pending_q" id="edit_pending_q" method="POST" action="edit_pending_q.php" enctype="multipart/form-data">
					<div class="col-75">
						<div class="col-50"> 
							<label for="poss_ans"><strong>Διάλεξε ερώτηση και πεδίο που θέλεις να επεξεργαστείς:</strong></label>
						</div>
						<INPUT type="text" name="id_to_edit" id="id_to_edit"> 
						<select name="field_to_edit" id="field_to_edit">
							<option value="--">--
							<option value="question">Ερώτηση
							<option value="pos_answer">Πιθανές Απαντήσεις
							<option value="correct_answer">Σωστή απάντηση
							<option value="difficulty">Δυσκολία
						</select><BR>
						<div class="col-50"> 
							<label for="poss_ans"><strong>Θέλεις να το αλλάξεις σε:</strong></label>
						</div>
						<INPUT type="text" name="change_on_field" id="change_on_field"> 
					</div>
					<INPUT style="background-color:orange;" type="submit" name="edit_from_queue" id="edit_from_queue" value="Επεξεργασία αυτού του συνδυασμού "><BR>
				</form>
				
				<form name="approve_q" id="approve_q" method="POST" action="approve_q.php" enctype="multipart/form-data">
					<div class="col-75">
						<div class="col-50"> 
							<label for="poss_ans"><strong>Επέλεξε τον αριθμό της ερώτησης που θελεις να εγκρίνεις:</strong></label>
						</div>
						<INPUT type="text" name="id_to_aprove" id="id_to_aprove"> 
					</div>
					<INPUT class="button button2" type="submit" name="approve_q" id="approve_q" value="Έγκριση ερώτησης"><BR>
			</form>';
}

mysqli_close($connection);

?>