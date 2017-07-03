<?php
	require_once(APP_BLOCKS_PATH . "header/header.php");
	require_once(APP_BLOCKS_PATH . "menu/menu.php");
?>



<div page="maps" class="full-height">
	<div module="left-menu">
		<div button="close"></div>

		<div class="container" style="height:100%; padding:0; overflow:hidden;">
			<div class="container left-menu__container">
				<div class="container left-menu__inner-container">
					<div button="order">Order</div>

					<hr>

					<p class="text text_grey"><span class="streamers-count">8</span> streamers in</p>
					<h6 class="title">Norton, Massachusetts</h6>

					<div class="gallery">
						<div id="slide-left" class="gallery__controller gallery__controller_left">
							<img src="/app/img/triangle.svg">
						</div>
						<!-- gallery__controller (close) -->
						<div id="slide-right" class="gallery__controller gallery__controller_right">
							<img src="/app/img/triangle.svg">
						</div>
						<!-- gallery__controller (close) -->

						<div class="gallery__slide-blocks">
							<div class="slide-block">
								<img src="/app/img/slide.jpg" class="slide-block__slide">
							</div>
							<div class="slide-block">
								<img src="/app/img/slide.jpg" class="slide-block__slide">
							</div>
							<div class="slide-block">
								<img src="/app/img/slide.jpg" class="slide-block__slide">
							</div>
							<div class="slide-block">
								<img src="/app/img/slide.jpg" class="slide-block__slide">
							</div>
							<div class="slide-block">
								<img src="/app/img/slide.jpg" class="slide-block__slide">
							</div>
						</div>
						<!-- gallery__slides-blocks (close) -->
					</div>
					<!-- gallery (close) -->

					<h6 class="title">Opinions</h6>

					<div class="opinions">
						<div class="opinion">
							<img src="/app/img/user.jpg" class="opinion__img">
							<div class="opinion__info">
								<p class="opinion__title">RealVideo maker</p>
								<p class="opinion__description">
									Great translation !<br>
									Advice !
								</p>

								<div class="opinion__rating">
									<div star="true"></div>
									<div star="true"></div>
									<div star="true"></div>
									<div star="true"></div>
									<div star="false"></div>
								</div>
								<!-- opinion__rating (close) -->
							</div>
							<!-- opinion__info (close) -->
						</div>
						<!-- opinion (close) -->

						<div class="opinion">
							<img src="/app/img/user.jpg" class="opinion__img">
							<div class="opinion__info">
								<p class="opinion__title">RealVideo maker</p>
								<p class="opinion__description">
									Great translation !<br>
									Advice !
								</p>

								<div class="opinion__rating">
									<div star="true"></div>
									<div star="true"></div>
									<div star="true"></div>
									<div star="true"></div>
									<div star="false"></div>
								</div>
								<!-- opinion__rating (close) -->
							</div>
							<!-- opinion__info (close) -->
						</div>
						<!-- opinion (close) -->

						<div class="opinion">
							<img src="/app/img/user.jpg" class="opinion__img">
							<div class="opinion__info">
								<p class="opinion__title">RealVideo maker</p>
								<p class="opinion__description">
									Great translation !<br>
									Advice !
								</p>

								<div class="opinion__rating">
									<div star="true"></div>
									<div star="true"></div>
									<div star="true"></div>
									<div star="true"></div>
									<div star="false"></div>
								</div>
								<!-- opinion__rating (close) -->
							</div>
							<!-- opinion__info (close) -->
						</div>
						<!-- opinion (close) -->

						<div class="opinion">
							<img src="/app/img/user.jpg" class="opinion__img">
							<div class="opinion__info">
								<p class="opinion__title">RealVideo maker</p>
								<p class="opinion__description">
									Great translation !<br>
									Advice !
								</p>

								<div class="opinion__rating">
									<div star="true"></div>
									<div star="true"></div>
									<div star="true"></div>
									<div star="true"></div>
									<div star="false"></div>
								</div>
								<!-- opinion__rating (close) -->
							</div>
							<!-- opinion__info (close) -->
						</div>
						<!-- opinion (close) -->

						<div class="opinion">
							<img src="/app/img/user.jpg" class="opinion__img">
							<div class="opinion__info">
								<p class="opinion__title">RealVideo maker</p>
								<p class="opinion__description">
									Great translation !<br>
									Advice !
								</p>

								<div class="opinion__rating">
									<div star="true"></div>
									<div star="true"></div>
									<div star="true"></div>
									<div star="true"></div>
									<div star="false"></div>
								</div>
								<!-- opinion__rating (close) -->
							</div>
							<!-- opinion__info (close) -->
						</div>
						<!-- opinion (close) -->
					</div>
					<!-- opinions (close) -->
				</div>
				<!-- container left-menu__inner-container (close) -->

				<div class="container left-menu__inner-container">
					<h6 class="title" button="step-back">
						<img src="/app/img/triangle.svg" class="title__ill" style="transform: rotate(90deg);">
						Order stream
					</h6>
					<hr>
					<p class="text text_grey">Norton, Massachusetts</p>
					<hr>
					<h6 class="title">Streamers</h6>

					<div class="streamers-list">
						<div class="streamer">
							<div class="streamer__img-block">
								<div class="img-block__bg">
									<svg version="1.1" class="streamer-check" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
										 viewBox="0 0 95.878 95.878" fill="#e8e8e8" xml:space="preserve">
										<g>
											<path d="M47.939,0c-26.46,0-47.88,21.446-47.88,47.939s21.42,47.939,47.88,47.939s47.88-21.446,47.88-47.939S74.399,0,47.939,0z
												 M47.939,87.467c-21.84,0-39.48-17.662-39.48-39.529S26.099,8.41,47.939,8.41s39.48,17.662,39.48,39.529
												S69.779,87.467,47.939,87.467z"/>
											<path class="streamer-check__mark" d="M63.899,32.38l-22.26,22.287l-10.5-10.513c-1.68-1.682-4.2-1.682-5.88,0c-1.68,1.682-1.68,4.205,0,5.887l13.44,13.457
												c0.84,0.841,2.1,1.262,2.94,1.262c0.84,0,2.1-0.421,2.94-1.262l25.2-25.231c1.68-1.682,1.68-4.205,0-5.887
												C68.099,30.698,65.579,30.698,63.899,32.38z"/>
										</g>
									</svg>
								</div>
								<!-- img-block__bg (close) -->
								<img src="/app/img/user.jpg" class="streamer__img">
							</div>
							<!-- streamer__img-block (close) -->

							<p class="streamer__title">VR Crimea</p>
							<div class="streamer__status"></div>
							<p class="streamer__bp">480 BP</p>
						</div>
						<!-- streamer (close) -->

						<div class="streamer">
							<div class="streamer__img-block">
								<div class="img-block__bg">
									<svg version="1.1" class="streamer-check" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
										 viewBox="0 0 95.878 95.878" fill="#e8e8e8" xml:space="preserve">
										<g>
											<path d="M47.939,0c-26.46,0-47.88,21.446-47.88,47.939s21.42,47.939,47.88,47.939s47.88-21.446,47.88-47.939S74.399,0,47.939,0z
												 M47.939,87.467c-21.84,0-39.48-17.662-39.48-39.529S26.099,8.41,47.939,8.41s39.48,17.662,39.48,39.529
												S69.779,87.467,47.939,87.467z"/>
											<path class="streamer-check__mark" d="M63.899,32.38l-22.26,22.287l-10.5-10.513c-1.68-1.682-4.2-1.682-5.88,0c-1.68,1.682-1.68,4.205,0,5.887l13.44,13.457
												c0.84,0.841,2.1,1.262,2.94,1.262c0.84,0,2.1-0.421,2.94-1.262l25.2-25.231c1.68-1.682,1.68-4.205,0-5.887
												C68.099,30.698,65.579,30.698,63.899,32.38z"/>
										</g>
									</svg>
								</div>
								<!-- img-block__bg (close) -->
								<img src="/app/img/user.jpg" class="streamer__img">
							</div>
							<!-- streamer__img-block (close) -->

							<p class="streamer__title">VR Crimea</p>
							<div class="streamer__status"></div>
							<p class="streamer__bp">480 BP</p>
						</div>
						<!-- streamer (close) -->

						<div class="streamer">
							<div class="streamer__img-block">
								<div class="img-block__bg">
									<svg version="1.1" class="streamer-check" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
										 viewBox="0 0 95.878 95.878" fill="#e8e8e8" xml:space="preserve">
										<g>
											<path d="M47.939,0c-26.46,0-47.88,21.446-47.88,47.939s21.42,47.939,47.88,47.939s47.88-21.446,47.88-47.939S74.399,0,47.939,0z
												 M47.939,87.467c-21.84,0-39.48-17.662-39.48-39.529S26.099,8.41,47.939,8.41s39.48,17.662,39.48,39.529
												S69.779,87.467,47.939,87.467z"/>
											<path class="streamer-check__mark" d="M63.899,32.38l-22.26,22.287l-10.5-10.513c-1.68-1.682-4.2-1.682-5.88,0c-1.68,1.682-1.68,4.205,0,5.887l13.44,13.457
												c0.84,0.841,2.1,1.262,2.94,1.262c0.84,0,2.1-0.421,2.94-1.262l25.2-25.231c1.68-1.682,1.68-4.205,0-5.887
												C68.099,30.698,65.579,30.698,63.899,32.38z"/>
										</g>
									</svg>
								</div>
								<!-- img-block__bg (close) -->
								<img src="/app/img/user.jpg" class="streamer__img">
							</div>
							<!-- streamer__img-block (close) -->

							<p class="streamer__title">VR Crimea</p>
							<div class="streamer__status"></div>
							<p class="streamer__bp">480 BP</p>
						</div>
						<!-- streamer (close) -->

						<div class="streamer">
							<div class="streamer__img-block">
								<div class="img-block__bg">
									<svg version="1.1" class="streamer-check" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
										 viewBox="0 0 95.878 95.878" fill="#e8e8e8" xml:space="preserve">
										<g>
											<path d="M47.939,0c-26.46,0-47.88,21.446-47.88,47.939s21.42,47.939,47.88,47.939s47.88-21.446,47.88-47.939S74.399,0,47.939,0z
												 M47.939,87.467c-21.84,0-39.48-17.662-39.48-39.529S26.099,8.41,47.939,8.41s39.48,17.662,39.48,39.529
												S69.779,87.467,47.939,87.467z"/>
											<path class="streamer-check__mark" d="M63.899,32.38l-22.26,22.287l-10.5-10.513c-1.68-1.682-4.2-1.682-5.88,0c-1.68,1.682-1.68,4.205,0,5.887l13.44,13.457
												c0.84,0.841,2.1,1.262,2.94,1.262c0.84,0,2.1-0.421,2.94-1.262l25.2-25.231c1.68-1.682,1.68-4.205,0-5.887
												C68.099,30.698,65.579,30.698,63.899,32.38z"/>
										</g>
									</svg>
								</div>
								<!-- img-block__bg (close) -->
								<img src="/app/img/user.jpg" class="streamer__img">
							</div>
							<!-- streamer__img-block (close) -->

							<p class="streamer__title">VR Crimea</p>
							<div class="streamer__status"></div>
							<p class="streamer__bp">480 BP</p>
						</div>
						<!-- streamer (close) -->

						<div class="streamer">
							<div class="streamer__img-block">
								<div class="img-block__bg">
									<svg version="1.1" class="streamer-check" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
										 viewBox="0 0 95.878 95.878" fill="#e8e8e8" xml:space="preserve">
										<g>
											<path d="M47.939,0c-26.46,0-47.88,21.446-47.88,47.939s21.42,47.939,47.88,47.939s47.88-21.446,47.88-47.939S74.399,0,47.939,0z
												 M47.939,87.467c-21.84,0-39.48-17.662-39.48-39.529S26.099,8.41,47.939,8.41s39.48,17.662,39.48,39.529
												S69.779,87.467,47.939,87.467z"/>
											<path class="streamer-check__mark" d="M63.899,32.38l-22.26,22.287l-10.5-10.513c-1.68-1.682-4.2-1.682-5.88,0c-1.68,1.682-1.68,4.205,0,5.887l13.44,13.457
												c0.84,0.841,2.1,1.262,2.94,1.262c0.84,0,2.1-0.421,2.94-1.262l25.2-25.231c1.68-1.682,1.68-4.205,0-5.887
												C68.099,30.698,65.579,30.698,63.899,32.38z"/>
										</g>
									</svg>
								</div>
								<!-- img-block__bg (close) -->
								<img src="/app/img/user.jpg" class="streamer__img">
							</div>
							<!-- streamer__img-block (close) -->

							<p class="streamer__title">VR Crimea</p>
							<div class="streamer__status"></div>
							<p class="streamer__bp">480 BP</p>
						</div>
						<!-- streamer (close) -->

						<div class="streamer">
							<div class="streamer__img-block">
								<div class="img-block__bg">
									<svg version="1.1" class="streamer-check" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
										 viewBox="0 0 95.878 95.878" fill="#e8e8e8" xml:space="preserve">
										<g>
											<path d="M47.939,0c-26.46,0-47.88,21.446-47.88,47.939s21.42,47.939,47.88,47.939s47.88-21.446,47.88-47.939S74.399,0,47.939,0z
												 M47.939,87.467c-21.84,0-39.48-17.662-39.48-39.529S26.099,8.41,47.939,8.41s39.48,17.662,39.48,39.529
												S69.779,87.467,47.939,87.467z"/>
											<path class="streamer-check__mark" d="M63.899,32.38l-22.26,22.287l-10.5-10.513c-1.68-1.682-4.2-1.682-5.88,0c-1.68,1.682-1.68,4.205,0,5.887l13.44,13.457
												c0.84,0.841,2.1,1.262,2.94,1.262c0.84,0,2.1-0.421,2.94-1.262l25.2-25.231c1.68-1.682,1.68-4.205,0-5.887
												C68.099,30.698,65.579,30.698,63.899,32.38z"/>
										</g>
									</svg>
								</div>
								<!-- img-block__bg (close) -->
								<img src="/app/img/user.jpg" class="streamer__img">
							</div>
							<!-- streamer__img-block (close) -->

							<p class="streamer__title">VR Crimea</p>
							<div class="streamer__status"></div>
							<p class="streamer__bp">480 BP</p>
						</div>
						<!-- streamer (close) -->
					</div>
					<!-- streamers-list (close) -->

					<h6 class="title">Date/Time</h6>

					<div class="date">
						<input type="text" name="day" class="date__input">
						<select name="month" class="date__input">
							<option>January</option>
							<option>February</option>
							<option>March</option>
							<option>April</option>
							<option>May</option>
							<option>June</option>
							<option>Jule</option>
							<option>August</option>
							<option>September</option>
							<option>October</option>
							<option>November</option>
							<option>December</option>
						</select>
						<p class="text">in</p>
						<input type="text" name="hour" class="date__input">
						<p class="text">:</p>
						<input type="text" name="minute" class="date__input">
					</div>
					<!-- date (close) -->

					<div button="order">Order</div>
				</div>
				<!-- container left-menu__inner-container (close) -->
			</div>
			<!-- container left-menu__container (close) -->
		</div>
		<!-- container (close) -->
	</div>
	<!-- left-menu (close) -->
</div>
<!-- page. maps (close) -->



<!-- ... -->

<script type="text/javascript" src="/app/blocks/gallery/gallery.js"></script>
<script type="text/javascript" src="/app/blocks/left-menu/left-menu.js"></script>

<!-- ... -->



<?php
	require_once(APP_BLOCKS_PATH . "footer/footer.php");
?>