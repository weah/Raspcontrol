<div id="footerContainer">
        <div class="footerWrapper">
            Powered by Raspcontrol (<!--<a href="settings.php">Settings</a>-->) &middot; <a href="http://fusionstrike.com">Fusion Strike</a> 
            
            <?php
            if($_SESSION['username'] == ""){}else{
	            echo '&middot; <a href="app/classes/_logout.php">Logout</a>';
            }
            ?>
            
        </div>
    </div>
</body>
</html>