<?php
require("db_credentials.php");
include("login.php");
include("questions.php");

$d=$_GET['diff'];

$connection = mysqli_connect($servername, $user, $pass);
if (!$connection)
{
	echo "Problem in the connection!" . mysqli_error();
}
else
{
	// Selecting Database
	$db = mysqli_select_db($connection, "sorting_algorithms_db");

	$result=mysqli_query($connection, "SELECT * FROM all_questions_db;");
	$row = mysqli_fetch_array($result);
	
	while ($row)  //Βαζει στο αναλογο αποθετηριο την ερωτηση που εχει εγκριθει
	{
		$str_arr = explode (",", $row['possible_answers']);
		$val="";
		for ($i=0 ; $i<4 ; $i++)
		{
			if ($row['correct_answers']==$str_arr[$i])
			{
				if ($i==0) {
					$val="a";
				}
				else if ($i==1) {
					$val="b";
				}
				else if ($i==2) {
					$val="c";
				}
				else if ($i==3) {
					$val="d";
				}
			}
		}

		if ($row['diff']=="easy")  //EASY
		{
			$rows_num=count($easy_questions);
			$easy_questions[$rows_num][0] = '<p>' . $row['question'] . '</p><p>
																	<input type="radio" name="questionu' . $row['id'] . '" id="questionu' . $row['id'] . '" value="' . $row['id'] . 'a">' . $str_arr[0] . '<br>
																	<input type="radio" name="questionu' . $row['id'] . '" id="questionu' . $row['id'] . '" value="' . $row['id'] . 'b">' . $str_arr[1] . '<br>
																	<input type="radio" name="questionu' . $row['id'] . '" id="questionu' . $row['id'] . '" value="' . $row['id'] . 'c">' . $str_arr[2] . '<br>
																	<input type="radio" name="questionu' . $row['id'] . '" id="questionu' . $row['id'] . '" value="' . $row['id'] . 'd">' . $str_arr[3] . '<br>
																</p>';
			$easy_questions[$rows_num][1] = $row['id'] . $val;
			$easy_questions[$rows_num][2] = 'question' . $row['id'];
		}
		else if ($row['diff']=="medium") //MEDIUM
		{
			$rows_num=count($medium_questions);
			$medium_questions[$rows_num][0] = '<p>' . $row['question'] . '</p><p>
																	<input type="radio" name="questionu' . $row['id'] . '" id="questionu' . $row['id'] . '" value="' . $row['id'] . 'a">' . $str_arr[0] . '<br>
																	<input type="radio" name="questionu' . $row['id'] . '" id="questionu' . $row['id'] . '" value="' . $row['id'] . 'b">' . $str_arr[1] . '<br>
																	<input type="radio" name="questionu' . $row['id'] . '" id="questionu' . $row['id'] . '" value="' . $row['id'] . 'c">' . $str_arr[2] . '<br>
																	<input type="radio" name="questionu' . $row['id'] . '" id="questionu' . $row['id'] . '" value="' . $row['id'] . 'd">' . $str_arr[3] . '<br>
																</p>';
			$medium_questions[$rows_num][1] = $row['id'] . $val;
			$medium_questions[$rows_num][2] = 'question' . $row['id'];
		}
		else if ($row['diff']=="hard")  //HARD
		{
			$rows_num=count($hard_questions);
			$hard_questions[$rows_num][0] = '<p>' . $row['question'] . '</p><p>
																	<input type="radio" name="questionu' . $row['id'] . '" id="questionu' . $row['id'] . '" value="' . $row['id'] . 'a">' . $str_arr[0] . '<br>
																	<input type="radio" name="questionu' . $row['id'] . '" id="questionu' . $row['id'] . '" value="' . $row['id'] . 'b">' . $str_arr[1] . '<br>
																	<input type="radio" name="questionu' . $row['id'] . '" id="questionu' . $row['id'] . '" value="' . $row['id'] . 'c">' . $str_arr[2] . '<br>
																	<input type="radio" name="questionu' . $row['id'] . '" id="questionu' . $row['id'] . '" value="' . $row['id'] . 'd">' . $str_arr[3] . '<br>
																</p>';
			$hard_questions[$rows_num][1] = $row['id'] . $val;
			$hard_questions[$rows_num][2] = 'question' . $row['id'];
		}
		
		$row = mysqli_fetch_array($result);
	}
	
	//print_r($easy_questions);
	
}

mysqli_close($connection);

if ($d=="easy")  //EASY
{
	$rows = count($easy_questions);
	
	$qe = range(0, $rows-1);  //Generating random numbers within a range
	shuffle($qe);

	for ($i=0 ; $i<5 ; $i++)
	{
		echo $easy_questions[$qe[$i]][0];
	}
	
	//Loading the correct answers onto the session
	$_SESSION['q1_answer']=$easy_questions[$qe[0]][1];
	$_SESSION['q2_answer']=$easy_questions[$qe[1]][1];
	$_SESSION['q3_answer']=$easy_questions[$qe[2]][1];
	$_SESSION['q4_answer']=$easy_questions[$qe[3]][1];
	$_SESSION['q5_answer']=$easy_questions[$qe[4]][1];
	
	//Loading the questions' names onto the session
	$_SESSION['q1_name']=$easy_questions[$qe[0]][2];
	$_SESSION['q2_name']=$easy_questions[$qe[1]][2];
	$_SESSION['q3_name']=$easy_questions[$qe[2]][2];
	$_SESSION['q4_name']=$easy_questions[$qe[3]][2];
	$_SESSION['q5_name']=$easy_questions[$qe[4]][2];
	
	//Loading the questions' difficulty onto the session
	$_SESSION['q_difficulty']="easy";
	
	
	
	echo '<input class="button button1" type="reset" name="Reset" value="Καθαρισμός">';
    echo '<input class="button button2" type="submit" name="Submit" value="Υποβολή" onClick="checkResults()"><br><br>';
	
	//echo (print_r($easy_questions));
}
else if ($d=="medium")  //MEDIUM
{
	$rows = count($medium_questions);
	
	$qm = range(0, $rows-1);  //Generating random numbers within a range
	shuffle($qm);
		
	for ($i=0 ; $i<5 ; $i++)
	{
		echo $medium_questions[$qm[$i]][0];
	}
	
	//Loading the correct answers onto the session
	$_SESSION['q1_answer']=$medium_questions[$qm[0]][1];
	$_SESSION['q2_answer']=$medium_questions[$qm[1]][1];
	$_SESSION['q3_answer']=$medium_questions[$qm[2]][1];
	$_SESSION['q4_answer']=$medium_questions[$qm[3]][1];
	$_SESSION['q5_answer']=$medium_questions[$qm[4]][1];
	
	//Loading the questions' names onto the session
	$_SESSION['q1_name']=$medium_questions[$qm[0]][2];
	$_SESSION['q2_name']=$medium_questions[$qm[1]][2];
	$_SESSION['q3_name']=$medium_questions[$qm[2]][2];
	$_SESSION['q4_name']=$medium_questions[$qm[3]][2];
	$_SESSION['q5_name']=$medium_questions[$qm[4]][2];
	
	//Loading the questions' difficulty onto the session
	$_SESSION['q_difficulty']="medium";
	
	
	echo '<input class="button button1" type="reset" name="Reset" value="Καθαρισμός">';
    echo '<input class="button button2" type="submit" name="Submit" value="Υποβολή" onClick="checkResults()"><br><br>';
	
	
}
else if ($d=="hard")  //HARD
{
	$rows = count($hard_questions);
	
	$qh = range(0, $rows-1);  //Generating random numbers within a range
	shuffle($qh);
	
	for ($i=0 ; $i<5 ; $i++)
	{
		echo $hard_questions[$qh[$i]][0];
	}
	
	//Loading the correct answers onto the session
	$_SESSION['q1_answer']=$hard_questions[$qh[0]][1];
	$_SESSION['q2_answer']=$hard_questions[$qh[1]][1];
	$_SESSION['q3_answer']=$hard_questions[$qh[2]][1];
	$_SESSION['q4_answer']=$hard_questions[$qh[3]][1];
	$_SESSION['q5_answer']=$hard_questions[$qh[4]][1];
	
	//Loading the questions' names onto the session
	$_SESSION['q1_name']=$hard_questions[$qh[0]][2];
	$_SESSION['q2_name']=$hard_questions[$qh[1]][2];
	$_SESSION['q3_name']=$hard_questions[$qh[2]][2];
	$_SESSION['q4_name']=$hard_questions[$qh[3]][2];
	$_SESSION['q5_name']=$hard_questions[$qh[4]][2];
	
	//Loading the questions' difficulty onto the session
	$_SESSION['q_difficulty']="hard";
	
	
	echo '<input class="button button1" type="reset" name="Reset" value="Καθαρισμός">';
    echo '<input class="button button2" type="submit" name="Submit" value="Υποβολή" onClick="extracheckResults()"><br><br>';
}


//header("location: extraquiz.html");



?>