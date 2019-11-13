<body>
	<div class="wrapper">
		<?php $this->load->view('includes/header'); ?>
		<div class="site-content">
			<div class="uk-grid uk-grid-small">
				<div class="uk-width-small-1-1 uk-width-medium-6-10 uk-width-large-5-10">
					<div id="site-slideshow" class="glide">
						<h2 class="slide-title">
							<i class="icon-star"></i> Populaires
						</h2><!-- .slide-title -->

						<div class="glide__wrapper">
							<ul class="glide__track">

								<li class="glide__slide">
									<a href="post.html">
										<img src="../assets/img/Tokyo-Ghoul-re-Cropped.jpg">
										<span>Tokyo Ghoul:re (02/??) [HD] [Subbed]</span>
									</a>
								</li><!-- .glide__slide -->

							</ul><!-- .glide__track -->
						</div><!-- .glide__wrapper -->

						<div class="glide__bullets"></div>
					</div><!-- .glide -->

					<h2 class="ovas-entries-title">
						<i class="icon-camera"></i> OVA & Specials
					</h2><!-- .ovas-entries-title -->

					<div id="anime-list-ova"></div>

				</div><!-- .uk-width-small-1-1 .uk-width-medium-6-10 .uk-width-large-5-10 -->

				<div class="uk-width-small-1-1 uk-width-medium-4-10 uk-width-large-3-10">
					<h2 class="latest-entries-title"><i class="icon-list-bullet"></i> Derniers Episodes</h2>

					<div class="latest-entries">
						<dl class="uk-description-list-line uk-scrollable-text">

							<dt>
								<div class="uk-grid uk-grid-small">
									<div class="uk-width-3-10">
										<a href="post.html">
											<img src="../assets/img/Lupin-III-Part-V-75x75.jpg">
										</a>
									</div><!-- .uk-width-3-10 -->

									<div class="uk-width-7-10">
										<h3>
											<a href="post.html">
												Lupin III: Part V (02/??) [HD] [Subbed]
											</a>
										</h3>
									</div><!-- .uk-width-7-10 -->
								</div><!-- .uk-grid .uk-grid-small -->
							</dt>

						</dl><!-- .uk-description-list-line -->
					</div><!-- .latest-entries -->
				</div><!-- .uk-width-small-1-1 .uk-width-medium-4-10 .uk-width-large-3-10 -->

				<div class="uk-width-large-2-10 uk-visible-large">
					<div class="one-sixty-wide">
						<a class="uk-text-center" href="#">
							<img src="../assets/img/160x600.png" title="160x600 Banner">
						</a>
					</div><!-- .one-sixty-wide -->
				</div><!-- .uk-width-large-2-10 .uk-visible-large -->

				<div class="uk-width-medium-4-6">
					<h2 class="latest-posted-title">
						<i class="icon-th-large"></i> Derniers ajouts
					</h2><!-- .latest-posted-title -->

					<div id="anime-list"></div>

					<div class="site-pagination" id="paginationholder">
						<ul class="uk-pagination">
							<li :class="{ 'uk-disabled' : pagination == 1}"><a v-if="pagination != 1" v-on:click="pagination--" class="icon-angle-double-left"></a></i></li>
							<li class="uk-active"><span>{{ pagination }}</span></li>
							<li class="uk"><a v-on:click="pagination++" >{{ pagination+1 }}</a></li>
							<li class="uk"><a v-on:click="pagination += 2" >{{ pagination+2 }}</a></li>
							<li><a v-on:click="pagination++" ><i class="icon-angle-double-right"></i></a></li>
						</ul><!-- .uk-pagination -->
					</div><!-- .site-pagination -->
				</div><!-- .uk-width-medium-4-6 -->

				<div class="uk-width-medium-2-6">
					<div class="site-widgets">
						<div class="single-widget">
								<h4 class="widget-title">
									<i class="icon-search"></i> Rechercher
								</h4><!-- .widget-title -->

								<div class="uk-form">
									<div class="uk-grid uk-grid-collapse">
										<div id="search" class="uk-width-5-6">
											<input type="text" class="uk-form-large uk-width-1-1" v-model="message" placeholder="Rechercher...">
										</div><!-- .uk-width-5-6 -->
										<div class="uk-width-1-6">
											<button type="submit" class="uk-button uk-width-1-1"><i class="icon-search"></i></button>
										</div><!-- .uk-width-1-6 -->
									</div><!-- .uk-grid .uk-grid-collapse -->
								</div><!-- .uk-form -->
						</div><!-- .single-widget -->

						<div class="single-widget">
							<h4 class="widget-title">
								<i class="icon-tags"></i> Genres
							</h4><!-- .widget-title -->

							<div class="widget-content">
								<div class="genre-list">
									<a class="genre" href="genres.html">Action</a>
								</div><!-- .genre-list -->
							</div><!-- .widget-content -->
						</div><!-- .single-widget -->

						<div class="single-widget">
							<h4 class="widget-title">
								<i class="icon-megaphone"></i> Advertising
							</h4><!-- .widget-title -->

							<div class="widget-content">
								<a href="#" class="thirty-zero-wide"><img src="../assets/img/300x250.png" alt="300x250 Banner"></a>
							</div><!-- .widget-content -->
						</div><!-- .single-widget -->
					</div><!-- .site-widgets -->
				</div><!-- .uk-width-medium-2-6 -->
			</div><!-- .uk-grid .uk-grid-small -->
		</div><!-- .site-content -->

		<?php $this->load->view('includes/footer'); ?>
	</div><!-- .wrapper -->
</body>
</html>
