<?php
	require_once(APP_BLOCKS_PATH . "header/header.php");
	require_once(APP_BLOCKS_PATH . "menu/menu.php");
?>



<div page="video-open">
	<div class="container">
		<div class="left-block">
			<div class="video-block__img-container main-video">
				<img src="/app/img/channel.jpg" class="video-block__preloader">
			</div>
			<!-- main-video (close) -->

			<h1 class="video-title">Guitar Camp in Cuba | Tommy Emmanuel</h1>

			<div class="video-info">
				<div class="video-channel">
					<a href="">
						<img src="/app/img/360label.png" class="video-channel__img">
						<h3 class="video-channel__title">Russian Streams</h3>
					</a>

					<div class="video-channel__subscribe-block">
						<div class="subscribe-button">Subscribe</div>
						<div class="subscribe-count">22.357</div>
					</div>
					<!-- video-channel__subscribe-block (close) -->
				</div>
				<!-- video-channel (close) -->

				<div class="like-block">
					<div class="like-block__count">9.162</div>
					<div class="like-block__button"></div>
				</div>
				<!-- like-block (close) -->
			</div>
			<!-- video-info (close) -->



			<div class="video-details">
				<div class="video-menu">
					<div class="video-menu__href video-menu__href_active">About</div>
					<div class="video-menu__href">Share</div>
					<div class="video-menu__href">More</div>
				</div>
				<!-- video-menu (close) -->



				<div class="video-details__content-block">
					<div content="about">
						<h6 class="video-content__title">Published: 27 apr 2017</h6>

						<p class="video-content__text">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis, nulla, recusandae. Hic illum possimus doloribus tempora reprehenderit assumenda numquam qui accusamus dolorem repellendus vitae sunt, totam, reiciendis perferendis. Dicta, delectus.
						</p>
						<p class="video-content__text">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis, nulla, recusandae.
						</p>
					</div>
					<!-- content. about (close) -->
				</div>
				<!-- video-details__content-block (close) -->
			</div>
			<!-- video-details (close) -->
		</div>
		<!-- left-block (close) -->

		<div class="right-block">

			<?php
				$videosCount = 4;
				for($i = 0; $i < $videosCount; $i++):
			?>

<div class="horizontal-video">
	<div class="video-block__img-container">
		<div class="video-labels">
			<div class="video-labels__time">
				<p class="label__title">24:15</p>
			</div>
			<!-- video-labels__time (close) -->
		</div>
		<!-- video-labels (close) -->

		<img src="/app/img/video-ill.jpg" class="img-container__img">
	</div>
	<!-- video-block__img-container (close) -->

	<div class="video-block__info">
		<h4 class="video-info__title">Highland Spirit - Taylor Davis (Original Song)</h4>
	</div>
	<!-- video-info (close) -->
</div>
<!-- horizontal-video (close) -->

			<?php endfor; // for. $i < $videosCount ?>

		</div>
		<!-- right-block (close) -->
	</div>
	<!-- container (close) -->
</div>
<!-- page. video-open (close) -->



<!-- ... -->

<script type="text/javascript" src="/app/blocks/video-list/video-list.js"></script>

<!-- ... -->



<?php
	require_once(APP_BLOCKS_PATH . "footer/footer.php");
?>