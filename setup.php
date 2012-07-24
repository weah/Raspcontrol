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
        "user":		"' . $_POST['username'] .'", 
        "password":	"' . $_POST['password'] .'"
    }';
    fwrite($fh, $stringData); 
    header('location: index.php');
} else {

?>




<?php require('app/includes/_header.php'); ?>
<div id="firstBlockContainer">
        <div class="firstBlockWrapper">
        	<strong>Raspcontrol Installation</strong>
		<br/><br/>	
			<center>Please choose a username and password to login with<br/><br/>
	        	<form method="post" action="<?php echo $PHP_SELF; ?>">
	        		<input type="text" name="username" class="loginForm" onfocus="if(this.value == 'Username') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Username';}" value="Username">
	        		<input type="password" name="password" class="loginForm" onfocus="if(this.value == 'Password') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Password';}" value="Password"><br/>
	        		<input type="submit" value="Create Account" name="submit" class="minimal">
	        		
	        		
	        		</center>
			<br/><br/><br/><br/>
			</form>
		</div>
</div>
<?php require('app/includes/_footer.php'); ?>
<?php
}
?>