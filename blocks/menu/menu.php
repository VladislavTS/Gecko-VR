<nav module="menu">
	<div class="menu__container container">
		<a href="/">
			<div class="logo-container">
				<img src="/app/img/logo.svg" class="logo-container__logo">
			</div>
		</a>
		<!-- logo-container (close) -->

		<div class="search-container">
			<input type="text" name="search" class="search-container__input">
			<img src="/app/img/search.svg" class="search-container__icon">
		</div>
		<!-- search-container (close) -->

		<div class="hrefs-container">
			<a href="maps.php">
				<div class="href-button">
					<img src="/app/img/place.svg" class="href-button__icon">
					<p class="href-button__title <?php if($gec_page == '/maps.php') echo 'href-button__title_active'; ?>">Maps</p>
				</div>
			</a>
			<!-- href-button (close) -->
			<a href="channels.php">
				<div class="href-button">
					<img src="/app/img/play.svg" class="href-button__icon">
					<p class="href-button__title <?php if($gec_page == '/channels.php') echo 'href-button__title_active'; ?>">Channels</p>
				</div>
			</a>
			<!-- href-button (close) -->
		</div>
		<!-- hrefs-container (close) -->

		<div class="right-container">
			<div class="user">
				<p class="user__title"><a href="sign.php">Sign in</a></p>



				<?php /*

				<img src="/app/img/user.jpg" class="user__photo">

				<div class="user__window">
					<div class="window-flex">
						<div class="window-statistic">
							<p class="window-statistic__value">537.312</p>
							<p class="window-statistic__title">Subscribes</p>
						</div>
						<!-- window-statistic (close) -->

						<a href="" class="window__setting-button"></a>
					</div>
					<!-- window-flex (close) -->

					<hr class="user-hr">

					<a href="" class="window-href">Calendar</a>

					<hr class="user-hr">

					<div class="window-flex">
						<a href="" class="window__studio-button">Studio</a>
						<a href="" class="window__exit-button">Exit</a>
					</div>
					<!-- window-flex (close) -->
				</div>
				<!-- user__window (close) -->
				*/ ?>



			</div>
			<!-- user (close) -->
		</div>
		<!-- right-container (close) -->
	</div>
	<!-- menu__container container (close) -->
</nav>



<!-- ... -->



<script type="text/javascript" src="/app/blocks/menu/menu.js"></script>