<?php
	class hddPercentage {
		function freeStorage(){
				    
			    $bytes = disk_free_space("."); 
			    $si_prefix = array( 'B', 'KB', 'MB', 'GB', 'TB', 'EB', 'ZB', 'YB' );
			    $base = 1024;
			    $class = min((int)log($bytes , $base) , count($si_prefix) - 1);
			    $free =  sprintf('%1.2f' , $bytes / pow($base,$class));
				
				
				
			    $bytes = disk_total_space("."); 
			    $si_prefix = array( 'B', 'KB', 'MB', 'GB', 'TB', 'EB', 'ZB', 'YB' );
			    $base = 1024;
			    $class = min((int)log($bytes , $base) , count($si_prefix) - 1);
			    $total = sprintf('%1.2f' , $bytes / pow($base,$class));
		    
			
				
				$used = $total - $free;
				$percentage = round($used / $total * 100);
				
				
				if($percentage > '80'){
				echo '
				<div style="float:left"><img src="app/images/sd.png" align="middle"> SD Card <font color="red"> (Warning)</font>:
				<br/><br/><div class="graph"><strong class="barGreen" style="width:'.$percentage.'%;">'.$percentage.'%</strong></div> &nbsp; &nbsp;  <div class="clear"></div>; '; 
			}else{
				 echo '
				 <div style="float:left"><img src="app/images/sd.png" align="middle"> SD Card <font color="green"> (OK)</font>:
				 <br/><div class="graph"><strong class="barGreen" style="width:'.$percentage.'%;">'.$percentage.'%</strong></div> &nbsp; &nbsp;  <div class="clear"></div>'; 
			}
				
				
				echo "<br/>Total: <strong>".$total."</strong> GB &middot ";
				echo "Free: <strong>".$free."</strong> GB";
				echo "</div>";
				
				
		}
		}
?>
