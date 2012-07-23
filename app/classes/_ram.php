<?php
	class ramPercentage {
		function freeMemory(){
			echo "<div style='float:left'><img src='app/images/memory.png' align='middle'> Memory:";
		    exec('free -mo', $out);
		    preg_match_all('/\s+([0-9]+)/', $out[1], $matches);
		    list($total, $used, $free, $shared, $buffers, $cached) = $matches[1];

			$percentage = round($used / $total * 100);
		
			if($percentage > '80'){
				echo '<br/><div class="graph"><strong class="barAmber" style="width:'.$percentage.'%;">'.$percentage.'%</strong></div> &nbsp; &nbsp;  <div class="clear"></div>'; 
			}else{
				 echo '<br/><div class="graph"><strong class="barGreen" style="width:'.$percentage.'%;">'.$percentage.'%</strong></div> &nbsp; &nbsp;  <div class="clear"></div>'; 
			}
		    
		    echo "<br/>Free: <strong>".$free." MB</strong> Used: <strong>" . $used . " MB</strong> &middot Total: <strong>" . $total." MB</strong><br/></div>";
	
		}

		function freeSwap(){
			echo "<div style='margin-left: 30px; float:left'><img src='app/images/swap.png' align='middle'> Swap:";
		    exec('free -mo', $out);
		    preg_match_all('/\s+([0-9]+)/', $out[2], $matches);
		    list($total, $used, $free) = $matches[1];
		    
		    $percentage = round($used / $total * 100);

		    echo '<br/><div class="graph"><strong class="barGreen" style="width:'.$percentage.'%;">'.$percentage.'%</strong></div> &nbsp; &nbsp;  <div class="clear"></div>'; 
		    
		    echo "<br/>Free: <strong>".$free." MB</strong> Used: <strong>" . $used . " MB</strong> &middot Total: <strong>" . $total." MB</strong><br/></div>";
	
		}
		}
	
?>
