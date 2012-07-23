<?php
	class ramPercentage {
		function freeMemory(){
		    exec('free -mo', $out);
		    preg_match_all('/\s+([0-9]+)/', $out[1], $matches);
		    list($total, $used, $free, $shared, $buffers, $cached) = $matches[1];

			$percentage = round(($used - $buffers - $cached) / $total * 100);
		
			if($percentage > '80'){
				echo '
				<div style="float:left"><img src="app/images/memory.png" align="middle"> Memory <font color="red"> (Warning)</font>:
				<br/><div class="graph"><strong class="barAmber" style="width:'.$percentage.'%;">'.$percentage.'%</strong></div> &nbsp; &nbsp;  <div class="clear"></div>'; 
			}else{
				 echo '
				 <div style="float:left"><img src="app/images/memory.png" align="middle"> Memory <font color="green"> (OK)</font>:
				 <br/><div class="graph"><strong class="barGreen" style="width:'.$percentage.'%;">'.$percentage.'%</strong></div> &nbsp; &nbsp;  <div class="clear"></div>'; 
			}
		    
		    echo "<br/>Free: <strong>". ($free + $buffers + $cached) ." MB</strong> Used: <strong>" . ($used - $buffers - $cached) . " MB</strong> &middot Total: <strong>" . $total." MB</strong><br/></div>";
	
		}

		function freeSwap(){
		    exec('free -mo', $out);
		    preg_match_all('/\s+([0-9]+)/', $out[2], $matches);
		    list($total, $used, $free) = $matches[1];
		    
		    $percentage = round($used / $total * 100);

		    			if($percentage > '80'){
				echo '
				<div style="float:left"><img src="app/images/swap.png" align="middle"> Swap <font color="red"> (Warning)</font>:
				<br/><div class="graph"><strong class="barAmber" style="width:'.$percentage.'%;">'.$percentage.'%</strong></div> &nbsp; &nbsp;  <div class="clear"></div>'; 
			}else{
				 echo '
				 <div style="float:left"><img src="app/images/swap.png" align="middle"> Swap <font color="green"> (OK)</font>:
				 <br/><div class="graph"><strong class="barGreen" style="width:'.$percentage.'%;">'.$percentage.'%</strong></div> &nbsp; &nbsp;  <div class="clear"></div>'; 
			}
		    
		    echo "<br/>Free: <strong>". ($free + $buffers + $cached) ." MB</strong> Used: <strong>" . ($used - $buffers - $cached) . " MB</strong> &middot Total: <strong>" . $total." MB</strong><br/></div>";
		}
		}
	
?>
