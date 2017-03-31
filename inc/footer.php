	</section>
	<footer>
		<h6><?php echo $footer[$idm]; ?></h6>
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script>
		// Nav buttons effects
		$(document).ready(function() {
			$("ul#main-menu li, ul#idm-menu li").mouseover(function() {
        		$(this).addClass('Hover');
        		});
        	$("ul#main-menu li, ul#idm-menu li").mouseout(function() {
        		$(this).removeClass("Hover").removeClass("Pressed");
        		});
			$("ul#main-menu li, ul#idm-menu li").mousedown(function() {
        		$(this).addClass("Pressed");
        		});
    		$("ul#main-menu li, ul#idm-menu li").mouseup(function() {
        		$(this).removeClass("Pressed");
        		});
		});
	</script>
</body>
</html>