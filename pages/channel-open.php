<?php
	require_once(APP_BLOCKS_PATH . "header/header.php");
	require_once(APP_BLOCKS_PATH . "menu/menu.php");
?>



<div page="channel-open">
	<div module="channel-header">
		<div class="container">
			<div class="channel-info">
				<div class="channel-info__module">
					<div class="container channel-info__container">
						<p class="count">180</p>
						<p class="measure">subscribes</p>
					</div>
					<!-- container (close) -->
				</div>
				<!-- channel-info__module (close) -->

				<div class="channel-info__module">
					<img src="/app/img/user.jpg" class="channel-img">
				</div>
				<!-- channel-info__module (close) -->

				<div class="channel-info__module">
					<div class="container channel-info__container">
						<p class="count">2</p>
						<p class="measure">subscribes</p>
					</div>
					<!-- container (close) -->
				</div>
				<!-- channel-info__module (close) -->
			</div>
			<!-- channel-info (close) -->

			<h2 class="channel-name">Russian strimes VR</h2>
			<div button="subscribe">Subscribe</div>

			<div class="video-type-container">
				<div class="video-type-container__type">Video</div>
				<div class="video-type-container__type video-type-container__type_active">Translations</div>
			</div>
			<!-- video-type-container (close) -->
		</div>
		<!-- container (close) -->
	</div>
	<!-- channel-header (close) -->

	<div class="container">
		<div class="video-list">

			<?php
				$videosCount = 9;
				for($i = 0; $i < $videosCount; $i++):
			?>

<div class="video-block">
	<a href="/video-open.php">
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

		<div class="video-block__info-container">
			<img src="/app/img/360label.png" class="author-label">

			<div class="video-block__info">
				<h4 class="video-block__title">Martin Jensen - Solo Dance</h4>
				<h5 class="video-block__author">Russian Streams</h5>
			</div>
			<!-- video-block__info (close) -->
		</div>
		<!-- video-block__info-container (close) -->
	</a>
</div>
<!-- video-block (close) -->

			<?php endfor; // for. $i < $videosCount ?>

		</div>
		<!-- video-list (close) -->

		<div button="more-videos">More</div>
	</div>
	<!-- container (close) -->
</div>
<!-- page. channel-open (close) -->



<!-- ... -->

<script type="text/javascript" src="/app/blocks/video-list/video-list.js"></script>

<!-- ... -->



<?php
	require_once(APP_BLOCKS_PATH . "footer/footer.php");
?>