<?php
require("db_credentials.php");
include("login.php");

// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect($servername, $user, $pass);
if (!$connection)
{
	echo "Problem in the connection!" . mysqli_error();
}
else
{
  mysqli_select_db($connection, "sorting_algorithms_db");

	$question=trim($_POST['question']);
	$poss_ans=trim($_POST['poss_ans']);
	$correct_ans=trim($_POST['correct_ans']);
	$diff=trim($_POST['diff']);

  // Adding question to "request queue" if every field has data to pass through
  if($question=="" || $poss_ans=="" || $correct_ans=="" || $diff=="--" ){
    warning(7,"ΞΕΧΑΣΕΣ ΚΑΠΟΙΟ ΣΤΟΙΧΕΙΟ, ΒΑΛΤΑ ΠΑΛΙ!");
  }
  else{
    mysqli_set_charset($connection, "utf8");
		mysqli_query($connection, "INSERT INTO question_requests(question, possible_answers, correct_answers, diff) VALUES ('$question', '$poss_ans', '$correct_ans', '$diff')");

    warning(8,"Η ερώτηση μπήκε στην ουρά αναμονής!");
  }

	header("location: profile.html");
}

mysqli_close($connection);

?>