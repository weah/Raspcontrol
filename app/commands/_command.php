<?php
session_start();

if($_SESSION['username'] == ""){
	die("You are not logged in");
}

echo '<pre>';

// Outputs all the result of shellcommand "ls", and returns
// the last output line into $last_line. Stores the return value
// of the shell command in $retval.

$command = $_POST['command'];

$last_line = system('sudo '.$command, $retval);

// Printing additional info
echo '
</pre>'; ?>
