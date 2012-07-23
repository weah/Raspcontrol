<?php
session_start();
$uptime = system("cat /proc/uptime");
$uptime = explode(" ", $uptime);
$uptime = gmdate("H:i", $uptime[0]);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
    <title>Raspcontrol - The Raspberry Pi Control Centre</title>
    <link rel="stylesheet" href="app/styles/style.css" type="text/css" media="screen" charset="utf-8">
</head>

<body>
    <div id="topContainer">
        <div class="topWrapper">
            <div style="float: left;&gt;">
                <h1>Raspcontrol</h1>

                <h2>The Raspberry Pi Control Centre</h2>
            </div>

			<?php
				if($_SESSION['username'] == ""){
					
				}else{ ?>
					
					<div style="text-align: right; color: #FFFFFF; font-family: Arial; font-size: 14px; float: right; width:500px;">
		                Hostname: <strong><?php echo gethostname(); ?></strong> &middot; Internal IP: <strong><?php echo $_SERVER['SERVER_ADDR']; ?></strong><br>
		                Accessed From: <strong><?php echo $_SERVER['SERVER_NAME']; ?></strong> &middot; Port <strong><?php echo $_SERVER['SERVER_PORT']; ?></strong> &middot; System: <strong><?php echo $_SERVER['SERVER_SOFTWARE']; ?></strong><br/>
                        Uptime: <strong><?php echo $uptime; ?></strong><br/><br/>
		               
		            </div>
					
				<?php }
			?>
            
        </div>
    </div>
