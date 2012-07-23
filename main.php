<?php session_start();

if($_SESSION['username'] == ""){
	require('index.php'); 
	die;
}

?>

<?php 	
	require('app/classes/_ram.php'); 
	require('app/classes/_hdd.php'); 
	require('app/classes/_cpu.php'); 
	require('app/classes/_uptime.php'); 
	require('app/includes/_header.php'); 
?>

    <div id="firstBlockContainer">
        <div class="firstBlockWrapper">

			<?php $uptime = new systemUptime; $getSystemUptime = $uptime->getSystemUptime();?>
        	
        	<div class="clear"></div>
        	
        	<br/><br/>

	        <?php $load = new cpuLoad; $getLoad = $load->getCpuLoad();?>
        	
        	<div class="clear"></div>
        	
        	<br/><br/>
        	
        	<?php $ram = new ramPercentage; $percentage = $ram->freeMemory(); $percentage = $ram->freeSwap();?>
        	
        	<div class="clear"></div>
        	
        	<br/><br/>

        	<?php $hdd = new hddPercentage; $storagepercentage = $hdd->freeStorage();?>
        	
        	<div class="clear"></div>
        	
        	<br/><br/>

        	
        	<center>
        		Mission Control:<br/><br/> 
        		<button onclick="rebootWarn()" class="minimal" value="Test">Reboot Rasberry Pi</button> <a href="app/commands/_updatesources.php"><button class="minimal" value="Test">Update Sources</button></a>
                
                <?php
                if (file_exists("/usr/bin/rpi-update")) {
                    echo "<a href=\"app/commands/_updatefirmware.php\"><button class=\"minimal\" value=\"Test\">Update Firmware</button></a>";
                }
                ?>
                
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
