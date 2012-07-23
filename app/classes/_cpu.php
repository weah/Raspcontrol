<?php
	class cpuLoad {
		function getCpuLoad(){
		
		  $getLoad = sys_getloadavg();
		  
		  $rawCPUSpeed = shell_exec('cat /proc/cpuinfo | grep BogoMIPS');
		  $cpuSpeed = str_replace("BogoMIPS	: ", "", "$rawCPUSpeed");
		  
          if ($getLoad[0] > 1) {
              $warning = "<font color=\"red\"> (Warning)</font>";
          } else {
              $warning = "<font color=\"green\"> (OK)</font>";
          }
		  
		  echo "<img src='app/images/cpu.png' align='middle'> CPU ".$warning.": <br/><br/>";
		  echo "Loads: 1 Min: <strong>".$getLoad[0]."</strong> &middot ";
		  echo "5 Mins: <strong>".$getLoad[1]."</strong> &middot ";
		  echo "15 Mins: <strong>".$getLoad[2]."</strong> <br/><br/> CPU is running at <strong>".$cpuSpeed."MHz</strong>";
		
		}
		}
	
?>
