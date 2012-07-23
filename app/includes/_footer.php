<div id="footerContainer">
        <div class="footerWrapper">
            Powered by <a href="https://github.com/Bioshox/Raspcontrol" target="_blank">Raspcontrol</a> 
            
            <?php
            
            require('app/classes/_versionCheck.php'); 
            
            if($_SESSION['username'] == ""){}else{
	            echo '&middot; <a href="app/classes/_logout.php">Logout</a> &middot ';
				$versionCheck = new versionCheck; $checkVersion = $versionCheck->checkVersion();
            }
            ?>
            
        </div>
    </div>
</body>
</html>