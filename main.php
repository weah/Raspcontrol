<?php session_start();

if($_SESSION['username'] == ""){
	require('index.php'); 
	die;
}

?>

<?php 	
	require('app/classes/_ram.php'); 
	require('app/classes/_hdd.php'); 
	require('app/includes/_header.php'); 
?>

    <div id="firstBlockContainer">
        <div class="firstBlockWrapper">

        	
        	<?php $ram = new ramPercentage; $percentage = $ram->freeMemory(); $percentage = $ram->freeSwap();?>
        	
        	<div class="clear"></div>
        	
        	<br/><br/>

        	<?php $hdd = new hddPercentage; $storagepercentage = $hdd->freeStorage();?>
        	
        	<div class="clear"></div>
        	
        	<br/><br/>

        	
        	<center>
        		Mission Control:<br/><br/> 
        		<button onclick="rebootWarn()" class="minimal" value="Test">Reboot Rasberry Pi</button> <a href="app/commands/_updatesources.php"><button class="minimal"value="Test">Update Sources</button></a>
        		
        		<br/><br/><br/>
        		
        		<form action="app/commands/_command.php" method="post";>
					<input class="loginForm" type="text" name="command">
				<button class="minimal" value="Test">Run Command</button>
        	</center>
        	
       	</div>
       	<br/><br/>
    </div>
    
    <?php require('app/includes/_footer.php'); ?>
    
   <script type="text/javascript">
	<!--
	function rebootWarn() {
		var answer = confirm("WARNING: This will make your Raspberry Pi temporarily unavailable, it may also connect back to the network with a different IP.")
		if (answer){
			alert("Rebooting...!")
			window.location = "app/commands/_reboot.php";
		}
		else{
			alert("Reboot Aborted")
		}
	}
	//-->
	</script>
