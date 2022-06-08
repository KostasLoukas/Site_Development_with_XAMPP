<?php
include("login.php");

if(session_destroy()) // Destroying All Sessions
{
	header("Location: index.html"); // Redirecting To Home Page
}

?>

