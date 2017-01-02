<?php
			# cache single slug
			$single_slug = $params[3];
			# prepare SQL query to get all press realese based on slug
			$query = "SELECT * FROM {$wpdb->posts} WHERE post_type = 'white_papers' AND post_name = '{$single_slug}' AND post_status = 'publish' LIMIT 1";
			# blog item
			$white_paper = $wpdb->get_results( $query );
			# prepare title
			$title = $white_paper[0]->post_title;
			# wrap every word in title with span
			$title_array = explode(" ", $title);
			$title = '';
			foreach($title_array as $title_item) : 
				$title .= '<span>'.$title_item.'</span>'; 
			endforeach;
			# prepare content 
			$content = nl2br($white_paper[0]->post_content);
			$body_text = wpautop( $content, false );
			$wp_counter = 1;
?>
		<div id="page-white-papers-single" class="single-wrap">
			<section id="hero" class="grey-after" data-ch="true">
				<div class="container">
					<div class="row">
						<div class="col-md-10 center-block">
							<div class="row">
								<h1 class="el-animation"><?php echo $title; ?></h1>
							</div><?php /* End row */ echo "\n"; ?>
						</div><?php /* End col-md-10 */ echo "\n"; ?>
					</div><?php /* End row */ echo "\n"; ?>
				</div><?php /* End container */ echo "\n"; ?>
			</section>
			<section id="single-content" class="white-before content" data-ch="true">
				<div class="container">
					<div class="row">
						<div class="col-md-10 center-block content">
							<div class="row">
								<div class="row">
									<div class="col-md-5 el-animation">
										<div class="animation">
											<div id="Stage-5" class="acid-small-5">
												<div id="Stage_box" class="edgeLoad-acid-small-5"></div>
												<div id="Stage_arrow" class="edgeLoad-acid-small-5"></div>
										    </div><?php /* End stage */ echo "\n"; ?>
											<div class="animation-fallback">
												<img src="<?php echo $base_url; ?>/assets/images/acid/acid-small-5.svg" />
											</div><?php /* End animation-fallback */ echo "\n"; ?>
										</div><?php /* End animation */ echo "\n"; ?>
									</div><?php /* End col-md-5 */ echo "\n"; ?>
									<div class="col-md-7 el-animation">
										<?php echo $body_text; ?>
									</div><?php /* End col-md-7 */ echo "\n"; ?>
								</div><?php /* End row */ echo "\n"; ?>
							</div><?php /* End row */ echo "\n"; ?>
						</div><?php /* End col-md-10 */ echo "\n"; ?>
					</div><?php /* End row */ echo "\n"; ?>
					<div class="col-md-10 center-block content">
						<div class="row">
							<div class="col-md-5">
								<div class="button-wrap">
									<a class="btn btn-purple request-whitepaper" href="#form-popup-<?php echo $wp_counter; ?>">Request white paper</a>
								</div><?php /* End button-wrap */ echo "\n"; ?>
								<div id="form-popup-<?php echo $wp_counter; ?>" class="form-popup mfp-hide">
								<?php
									#Request white paper
									$form_popup = true;
									$file = $wpdb->get_results( "SELECT p.ID, p.guid, pm.post_id, pm.meta_value FROM {$wpdb->posts} AS p INNER JOIN {$wpdb->postmeta} AS pm WHERE pm.post_id = {$white_paper[0]->ID} AND p.ID = pm.meta_value" );
									$file_url = $file[0]->guid;
									include("templates/contact-form.php");
									$form_popup = false;
								?>		
								</div><?php /* End form-popup */ echo "\n"; ?>
							</div><?php /* End col-md-5 */ echo "\n"; ?>
						</div><?php /* End row */ echo "\n"; ?>
					</div><?php /* End col-md-12 */ echo "\n"; ?>
				</div><?php /* End container */ echo "\n"; ?>
			</section><?php /* End single-content */ echo "\n"; ?>
			<div class="container">
				<div class="row">
					<div class="col-md-8 center-block">
					<?php
						#contact form
						include("templates/signup-block.php");
					?>
					</div><?php /* End col-md-8 */ echo "\n"; ?>
				</div><?php /* End row */ echo "\n"; ?>
			</div><?php /* End container */ echo "\n"; ?>
		</div><?php /* End page-wrap */ echo "\n"; ?>
		<script>
			var animUrl = '<?php echo $base_url; ?>/assets/animations/white-paper-download/',
				loadedComps = {};	
				
				if($('html').hasClass('no-touchevents') && $('html').hasClass('cssanimations')) {
					AdobeEdge.loadComposition(animUrl+'/acid-small-5', 'acid-small-5', {
					    scaleToFit: "none",
					    centerStage: "none",
					    minW: "0px",
					    maxW: "undefined",
					    width: "216px",
					    height: "150px"
					}, {"dom":{}}, {"dom":{}});
					
					AdobeEdge.bootstrapCallback(function(compId) {
	
						if(compId == 'acid-small-5') {
							var comp_5 = AdobeEdge.getComposition('acid-small-5'),
								$el_5 = $('.acid-small-5');
							
								$(window).on('scroll',function() {
									playAcidSmall5();
								});
										
								playAcidSmall5();
										
								function playAcidSmall5() {
									if($el_5.isOnScreen()) {
										if(!$el_5.hasClass('play-animation')) {
											$el_5.addClass('play-animation');
											comp_5.getStage().play(1);
										}
									}
								}
						}
	
					});
				}
		</script>