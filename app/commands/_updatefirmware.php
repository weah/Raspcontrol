<?php
session_start();

if($_SESSION['username'] == ""){
	die("You are not logged in");
}

echo '<pre>';

$last_line = system('sudo rpi-update', $retval);

// Printing additional info
echo '
</pre>'; ?>
Firmware Update Complete!<br/>
<a href="<?php echo $_SERVER['HTTP_REFERER']; ?>">Return To Previous Page</a>
