    <body>
		<div class="wrapper">
			<?php $this->load->view('includes/header'); ?>
			<div id="animeInfo" class="site-content">
				<div class="uk-grid uk-grid-small">
					<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-8-10">
						<div class="entry-details">
              <div id="animeTitle"></div>

              <input type="hidden" id="animeInfoId" value="<?php echo $id; ?>">

							<div class="entry-content">
								<div class="uk-grid uk-grid-small">
									<div class="uk-width-small-1-1 uk-width-medium-3-10">
										<div class="entry-cover">
                      <div id="animeBanner"></div>
											<a href="#entry-report" class="entry-report" title="Report Broken Links!" data-uk-modal="{center:true}">
												<i class="icon-flag"></i>
											</a><!-- .entry-report -->

											<div class="entry-status">
												<div class="status"><i class="icon-television"></i> Status: <strong>Airing</strong></div>
											</div><!-- .entry-status -->
										</div><!-- .entry-cover -->
									</div><!-- .uk-width-small-1-1 .uk-width-medium-3-10 -->

									<div class="uk-width-small-1-1 uk-width-medium-7-10">
										<div class="entry-details">
											<ul class="entry-tabs" data-uk-switcher="{connect: '#entry-tab-content', animation: 'fade'}">
												<li class="uk-active">
													<a href="javascript:void(0)"><i class="icon-list"></i> Details</a>
												</li>

												<li><a href="javascript:void(0)"><i class="icon-play"></i> Trailer</a></li>
											</ul><!-- .entry-tabs -->

											<ul id="entry-tab-content" class="uk-switcher">
												<li>
													<dl class="uk-description-list-horizontal">
														<dt>Type: </dt>
														<dd id="typeSeries"></dd>

														<dt>Synopsis:</dt>
														<dd id="synoSeries"></dd>

														<dt>Genres:</dt>
                            <dd id="animeGenre"></dd>
													</dl><!-- .uk-description-list-horizontal -->
												</li>

												<li>
													<div class="entry-trailer">
													</div><!-- .entry-trailer -->
												</li>
											</ul><!-- .uk-switcher -->
										</div><!-- .entry-details -->
									</div><!-- .uk-width-small-1-1 .uk-width-medium-7-10 -->
									<div class="uk-width-1-1">
										<div class="entry-share">
											<div class="uk-grid uk-grid-small">
												<div class="uk-width-small-1-1 uk-width-medium-1-3">
													<a href="#" class="share-fb">
														Share on Facebook
													</a>
												</div>

												<div class="uk-width-small-1-1 uk-width-medium-1-3">
													<a href="#" class="share-tw">
														Share on Twitter
													</a>
												</div>

												<div class="uk-width-small-1-1 uk-width-medium-1-3">
													<a href="#" class="share-gplus">
														Share on Google+
													</a>
												</div>
											</div>
										</div>
									</div><!-- .uk-width-small-1-1 -->
								</div><!-- .uk-grid .uk-grid-small -->
							</div><!-- .entry-content -->
						</div><!-- .entry-details -->
					</div><!-- .uk-width-small-1-1 .uk-width-medium-1-1 .uk-width-large-8-10 -->

					<div class="uk-width-large-2-10 uk-visible-large">
						<div class="one-sixty-wide">
							<a class="uk-text-center" href="#">
								<img src="<?php echo base_url(); ?>assets/img/160x600.png" title="160x600 Banner">
							</a>
						</div><!-- .one-sixty-wide -->
					</div><!-- .uk-width-large-2-10 .uk-visible-large -->
				</div><!-- .uk-grid .uk-grid-small -->

				<div class="entry-episodes">
					<div class="uk-grid uk-grid-small">
						<div class="uk-width-small-1-1 uk-width-medium-7-10">
							<h3 class="eplist-title">
								<i class="icon-th-list"></i> Episode List
							</h3><!-- .eplist-title -->

							<div class="eplist-content">
								<div class="uk-scrollable-text" id="#anime-ep">
                  <div id="animeEpisode"></div>
								</div><!-- .uk-scrollable-text -->
							</div><!-- .eplist-content -->
						</div><!-- .uk-width-small-1-1 .uk-width-medium-7-10 -->

						<div class="uk-width-small-1-1 uk-width-medium-3-10">
							<h3 class="specs-title">
								<i class="icon-info-circled"></i> Technical Info
							</h3><!-- .specs-title -->

							<div class="specs-content">
								<table class="uk-table uk-table-striped">
									<tr>
										<td><strong>Autre titre:</strong> Soon</td>
									</tr>

									<tr>
										<td><strong>Episodes:</strong> Soon</td>
									</tr>

									<tr>
										<td><strong>Server:</strong> Soon</td>
									</tr>

									<tr>
										<td><strong>Quality:</strong> Soon</td>
									</tr>

									<tr>
										<td><strong>Format:</strong> Soon</td>
									</tr>

									<tr>
										<td><strong>Filesize:</strong> Soon</td>
									</tr>

									<tr>
										<td><strong>Language:</strong> Soon</td>
									</tr>

									<tr>
										<td><strong>Subtitles:</strong> Soon</td>
									</tr>
								</table><!-- .uk-table .uk-table-striped -->

								<a href="#" target="_blank" class="slide-button">
									<span class="slide-square"><i class="icon-download"></i></span>
									<span class="slide-title">Download All</span>
								</a><!-- .slide-button -->
							</div><!-- .specs-content -->
						</div><!-- .uk-width-small-1-1 .uk-width-medium-3-10 -->
					</div><!-- .uk-grid .uk-grid-small -->
				</div><!-- .entry-episodes -->

				<div class="seven-two-eight-wide">
					<div class="uk-grid uk-grid-small">
						<div class="uk-width-small-1-1">
							<a href="#">
								<img src="<?php echo base_url(); ?>assets/img/728x90.png" alt="728x90 Banner">
							</a>
						</div><!-- .uk-width-large-2-10 .uk-visible-large -->
					</div>
				</div>

				<div id="entry-report" class="uk-modal">
					<div class="uk-modal-dialog">
						<a class="uk-modal-close icon-cancel"></a>

						<div class="uk-modal-header">
							<h5>Report</h5>
						</div>

						<form class="uk-form">
							<div class="uk-form-row">
								<label class="uk-form-label" for="">Reason:</label>
								<select class="uk-width-1-1 uk-margin-small-top">
									<option>Incorrect Info</option>
									<option>Wrong Trailer</option>
									<option>Broken Links</option>
								</select>
							</div>

							<div class="uk-form-row">
								<label class="uk-form-label" for="">Additional comments:</label>
								<textarea rows="4" class="uk-width-1-1 uk-margin-small-top"></textarea>
							</div>
						</form>

						<div class="uk-modal-footer uk-text-right">
							<button type="button" class="uk-modal-close uk-button">Cancel</button>
							<button type="button" class="uk-button uk-button-primary">Save</button>
						</div>
					</div>
				</div>
			</div><!-- .site-content -->
      <footer class="site-footer">
        <div class="footer">
          Copyright © 2019 Ynov-Anime
        </div><!-- .footer -->
        <a href="javascript:void(0)" class="back-to-top" title="To the Top!"><i class="icon-up-open"></i></a>
        <script src="<?php echo base_url(); ?>assets/js/animeInfo.js"></script>
      </footer><!-- .site-footer -->
		</div><!-- .wrapper -->
	</body>
</html>
