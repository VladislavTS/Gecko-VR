<?php
	require_once(APP_BLOCKS_PATH . "header/header.php");
	require_once(APP_BLOCKS_PATH . "menu/menu.php");
?>



<div page="sign">
	<div class="container">
		<div class="sign-block">
			<?php

				$getPage = str_replace("<>/|\\?$#!-()&*^@'\"", "", $_GET["page"]);

				if($getPage == ""){
					require_once(APP_BLOCKS_PATH . "sign/sign_log.php");
				} else if($getPage == "sign"){
					require_once(APP_BLOCKS_PATH . "sign/sign_sign.php");
				} else if($getPage == "forgot"){
					require_once(APP_BLOCKS_PATH . "sign/sign_forgot.php");
				}

			?>
		</div>
		<!-- sign-block (close) -->
	</div>
	<!-- container (close) -->
</div>
<!-- page. sign (close) -->



<?php
	require_once(APP_BLOCKS_PATH . "footer/footer.php");
?>