<?php 
	session_start();
	if($_SESSION['username'] != ""){
		require('main.php'); 
		die;
	}
	require('app/classes/_login.php'); 
	require('app/includes/_header.php'); 
?>


    <div id="firstBlockContainer">
        <div class="firstBlockWrapper">
        	
        	<div style="padding-top: 20px;">
        	<center>
        		Please login to Raspcontrol!<br/><br/>
	        	<form method="post" action="index.php">
	        		<input type="text" name="username" class="loginForm" onfocus="if(this.value == 'Username') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Username';}" value="Username">
	        		<input type="password" name="password" class="loginForm" onfocus="if(this.value == 'Password') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Password';}" value="Password"><br/>
	        		<input type="submit" value="Login" name="login" class="minimal">
	        		
	        		<br/><br/>
	        		
	        		<?php if($wrong == 1){
		        		echo "<font color='red'>Incorrect Username/Password</font>";
	        		}
	        		?>
	        		
	        	</form>
        	</center>
        	</div>
        	
       	</div>
       	<br/><br/><br/>
    </div>

    <?php require('app/includes/_footer.php'); ?>
