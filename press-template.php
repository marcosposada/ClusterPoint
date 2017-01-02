		<?php
			# prepare SQL query to get all active press releases
			$query = "SELECT ID, post_date, post_title, post_content, post_name FROM {$wpdb->posts} WHERE post_type = 'press_releases' AND post_status = 'publish' ORDER BY post_date DESC";
			# press releases array
			$press_releases = $wpdb->get_results( $query );
			$page_id = 41; // N ews items WP page id
			# prepare SQL query to get all in news items 
	        $query = $wpdb->prepare("SELECT meta_key, meta_value, post_id FROM {$wpdb->prefix}postmeta WHERE meta_key LIKE %s AND post_id = %s", 'news_items_%', $page_id);
	        
			# in news items array
			$in_news_items =  $wpdb->get_results( $query );

			echo "\n";
		?>
		<div id="page-press" class="page-wrap article-lists">
			<section id="animation" class="grey-after" data-ch="true">
				<div class="container">
					<div class="row">
						<div class="col-md-10 col-xs-11 center-block">
							<div class="row">
								<h1 class="el-animation">Latest Press Releases</h1>
								<div class="text el-animation">
									<?php 
										# loop to print out press releases
										foreach($press_releases as $press_release) : 
											# prepare date for formating
											$date = new DateTime($press_release->post_date);
									?>
									<a href="<?php echo $base_url; ?>/company/press/<?php echo $press_release->post_name; ?>" class="link">
										<div class="item table">
											<div class="date table-cell">
												<?php echo $date->format('F d, Y'); ?>
											</div><?php /* End title */ echo "\n"; ?>
											<div class="title table-cell">
												<?php echo $press_release->post_title; ?>
											</div><?php /* End title */ echo "\n"; ?>
										</div><?php /* End item */ echo "\n"; ?>
									</a><?php /* End link */ echo "\n"; ?>
									<?php
										endforeach; 
										# end of press releases print loop
									?>
								</div><?php /* End text */ echo "\n"; ?>
							</div><?php /* End row */ echo "\n"; ?>
						</div><?php /* End col-md-10 */ echo "\n"; ?>
					</div><?php /* End row */ ?>
				</div><?php /* End container */ echo "\n"; ?>
			</section><?php /* End animation */ echo "\n"; ?>
			<section id="in-news" class="older-articles">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="inner-wrap">
								<div class="content white-before" data-ch="true">
									<div class="animation-wrap el-animation">
										<h2 class="section-title">Clusterpoint in News</h2>
										<div class="items-list">
											<?php 
												# prepare unique array
												# WP repeater stores dublictate entries with same values 
												$unique_news_items = array_unique( $in_news_items, SORT_REGULAR );
												
												# fix array
												$correct_news_item_array = array();
												
												# marge same row values in one array
												# output object of arrays: array('timestamp', 'link', 'link_title', 'title');
												foreach($unique_news_items as $in_news_item) :
													# for each result, find the 'repeater row number' and use it to load the sub field!
													preg_match('_([0-9]+)_', $in_news_item->meta_key, $matches);
													$correct_news_item_array[$matches[0]][] = $in_news_item->meta_value;
												endforeach;
	
												
												# in news items loop
												foreach($correct_news_item_array as $in_news_item) :
													# prepare date for formating
													$date = new DateTime($in_news_item[0]);
											?>
											<div class="older-item table">
												<div class="date table-cell">
													<?php echo $date->format('F d, Y'); ?>
												</div><?php /* End title */ echo "\n"; ?>
												<div class="title table-cell">
													<?php echo $in_news_item[1]; ?>
												</div><?php /* End title */ echo "\n"; ?>
												<div class="link table-cell">
													<a href="<?php echo $in_news_item[3]; ?>" target="_blank"><?php echo $in_news_item[2]; ?></a>
												</div><?php /* End title */ echo "\n"; ?>
											</div><?php /* End in-news-item */ ?>
											<?php
												endforeach;
												# end in news item loop
											?>
										</div><?php /* End in-news-list */ echo "\n"; ?>
									</div><?php /* End animation-wrap */ echo "\n"; ?>
								</div><?php /* End content */ echo "\n"; ?>
							</div><?php /* End inner-wrap */ echo "\n"; ?>
						</div><?php /* End col-md-12 */ echo "\n"; ?>
					</div><?php /* End row */ ?>
				</div><?php /* End container */ echo "\n"; ?>
			</section><?php /* End in-news */ echo "\n"; ?>
			<section id="download-block">
				<div class="download-block">
					<div class="row">
						<div class="col-md-12">
							<div class="animation">
								<div id="Stage" class="download-icon">
							        <div id="Stage_fons" class="edgeLoad-download-icon"></div>
							        <div id="Stage_grey-bg" class="edgeLoad-download-icon"></div>
							        <div id="Stage_file" class="edgeLoad-download-icon"></div>
							        <div id="Stage_arrow" class="edgeLoad-download-icon"></div>
							    </div><?php /* End stage */ ?>
								<div class="animation-fallback">
									<img src="<?php echo $base_url; ?>/assets/images/acid/acid-small-5.svg" />
								</div><?php /* End animation-fallback */ echo "\n"; ?>							
							</div><?php /* End animation */ ?>
							<div class="text-wrap el-animation">
								<h3>Clusterpoint Press Kit</h3>
								<p>Logo and Key Visuals (.ZIP)</p>
								<div class="button-wrap">
									<a href="<?php echo $base_url; ?>" class="button purple-2"><span class="label">Download</span></a>
								</div><?php /* End button-wrap */ ?>
							</div><?php /* End text-wrap */ ?>
						</div><?php /* End col-md-12 */ ?>
					</div><?php /* End row */ ?>
				</div><?php /* End container */ echo "\n"; ?>
			</section><?php /* End download-block */ echo "\n"; ?>
		</div><?php /* End page-press */ echo "\n"; ?>
		<script>
		var animUrl = '<?php echo $base_url; ?>/assets/animations/download-icon/',
			loadedComps = {};
			
			if($('html').hasClass('no-touchevents')) {
				
				AdobeEdge.loadComposition(animUrl+'/download-icon', 'download-icon', {
				    scaleToFit: "none",
				    centerStage: "both",
				    minW: "0px",
				    maxW: "undefined",
				    width: "210px",
				    height: "168px"
				}, {"dom":{}}, {"dom":{}});
				
				AdobeEdge.bootstrapCallback(function(compId) {
					if(compId == 'download-icon') {		
						var comp = AdobeEdge.getComposition('download-icon'),
							$el = $('.download-icon');
								
							$(window).on('scroll',function() {
								playDownloadIcon();
							});
										
							playDownloadIcon();
										
							function playDownloadIcon() {
								if($el.isOnScreen(0.5, 0.5)) {
									if(!$el.hasClass('play-animation')) {
										$el.addClass('play-animation');
										comp.getStage().play(1);
									}
								}
							}
					}
				});
			}
		</script>