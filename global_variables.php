<?php

// code=0 Registration failed
// code=1 Registration succeeded
// code=3 Login failed
// code=4 Login succeeded
// code=5 Account details changed
// code=7 Adding a question failed
// code=8 Adding a question for approval was successful


function warning($code, $msg)
{
	$_SESSION['reg_success']=$code;
	$_SESSION['reg_message']=$msg;
}


?>