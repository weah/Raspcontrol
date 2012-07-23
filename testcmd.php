        	<?php
				$service = "apache";
				
				$shell = shell_exec('#!/bin/bash
				SERVICE=service
				if P=$(pgrep '.$service.')
				then
				    echo "'.$service.' is running"
				else
				    echo "'.$service.' is not running"
				fi');
				echo "<pre>".$shell."</pre>";
			?> 