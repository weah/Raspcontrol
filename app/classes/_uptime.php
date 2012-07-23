<?php
	class cpuLoad {
		function getCpuLoad(){
		
		  $getLoad = sys_getloadavg();
		  echo "<img src='app/images/cpu.png' align='middle'> CPU Load:<br/><br/>";
		  echo "1 Min: <strong>".$getLoad[0]."</strong> &middot ";
		  echo "5 Mins: <strong>".$getLoad[1]."</strong> &middot ";
		  echo "15 Mins: <strong>".$getLoad[2]."</strong>";
		
		}
		}
	
?>
