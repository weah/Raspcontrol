<?php
if ($_POST['password']) {
    $output = shell_exec('sudo mkdir /etc/raspcontrol');
    shell_exec('sudo chown root:root /etc/raspcontrol');
    shell_exec('sudo chmod 0777 /etc/raspcontrol');
    shell_exec('sudo touch /etc/raspcontrol/database.aptmnt');
    shell_exec('sudo chown root:root /etc/raspcontrol/database.aptmnt');
    shell_exec('sudo chmod 0777 /etc/raspcontrol/database.aptmnt');
    echo "<pre>$output</pre>";
    $myFile = "/etc/raspcontrol/database.aptmnt";
    $fh = fopen($myFile, 'w') or die("can't open file");
    $stringData = '{
        "user":		"admin", 
        "password":	"' . $_POST['password'] .'"
    }';
    fwrite($fh, $stringData); 
    header('location: index.php');
} else {

?>

<form method="post" action="<?php echo $PHP_SELF; ?>">
Password:<input type="password" size="12" maxlength="32" name="password"><br />
<input type="submit" value="submit" name="submit"><br />
</form>

<?php
}
?>