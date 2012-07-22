<?php
$output = shell_exec('sudo mkdir /etc/raspcontrol');
shell_exec('sudo chown root:root /etc/raspcontrol');
shell_exec('sudo chmod 0755 /etc/raspcontrol');
shell_exec('sudo touch /etc/raspcontrol/database.aptmnt');
shell_exec('sudo chown root:root /etc/raspcontrol/database.aptmnt');
shell_exec('sudo chmod 0755 /etc/raspcontrol/database.aptmnt');
echo "<pre>$output</pre>";
$myFile = "/etc/raspcontrol/database.aptmnt";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = '{
	"user":		"admin",
	"password":	"admin"
}';
fwrite($fh, $stringData);
?>