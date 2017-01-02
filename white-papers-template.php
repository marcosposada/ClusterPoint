		<?php
			# prepare SQL query to get all active tutorials
			$query = "SELECT ID, post_title, post_content, post_date, post_name, menu_order FROM {$wpdb->posts} AS p WHERE post_type = 'white_papers' AND post_status = 'publish' ORDER BY p.menu_order ASC";
			# tutorials array
			$white_papers = $wpdb->get_results( $query );
			$wp_counter = 1;
			
			#Request white paper
			
			$file = $wpdb->get_results( "SELECT p.ID, p.guid, pm.post_id, pm.meta_value FROM {$wpdb->posts} AS p INNER JOIN {$wpdb->postmeta} AS pm WHERE pm.post_id = {$white_papers[0]->ID} AND p.ID = pm.meta_value" );
			if(isset($file[0]->guid)) $file_url = $file[0]->guid;								
		?>
		<div id="page-white-papers" class="page-wrap archive-type-2">
			<section id="hero" class="grey-after">
				<div class="container">
					<div class="row">
						<div class="col-md-10 center-block">
							<div class="row">
								<div class="item" data-ch="true">
									<div class="animation-wrap el-animation">
										<?php 
											/* Print first tutorial */
											#prepare title
											$title = $white_papers[0]->post_title;
											
											if(isset($file_url) && $file_url != '') : 
												# prepare content 
												$body_text = wpautop( $white_papers[0]->post_content, false );
											else : 
												# prepare content 
												$body_text = $white_papers[0]->post_content;
												#check for WP <!--more--> tag position
												$ismore = @strpos( $body_text, '<!--more-->');
												# prepare exerpt
												if($ismore) : 
													$exerpt = @substr($body_text, 0, $ismore); 
													# format text using WP dafault forrmating
													$body_text = wpautop( $exerpt, false );	
												else :
													# if there isnt more tag
													$content = $body_text;
													# format text using WP dafault forrmating
													$content = wpautop( $content, false );
													# first paragraph is exerpt
													$body_text = substr($content, 0, strpos($content, "</p>")+4);
												endif;
											endif;
										?>
										<h2><?php echo $title; ?></h2>
										<div class="text"><?php echo $body_text; ?></div><?php /* End text */ echo "\n"; ?>
									</div><?php /* End animation-wrap */ echo "\n"; ?>
									<?php if(isset($file_url) && $file_url != '') : ?>
									<div class="button-wrap el-animation">
										<a class="button black-2" href="#form-popup-<?php echo $wp_counter; ?>">Request white paper</a>
									</div><?php /* End button-wrap */ echo "\n"; ?>
									<div id="form-popup-<?php echo $wp_counter; ?>" class="form-popup mfp-hide">
										<?php
											$form_popup = true;
											include("templates/contact-form.php");
											$file_url = NULL;
										?>		
									</div><?php /* End form-popup */ echo "\n"; ?>
									<?php else : ?>
										<div class="button-wrap el-animation">
											<a class="btn btn-black" href="<?php echo $base_url; ?>/use-cases/<?php echo $white_papers[0]->post_name; ?>">Read More</a>
										</div><?php /* End button-wrap */ echo "\n"; ?>								
									<?php endif; ?>
								</div><?php /* End item */ echo "\n"; ?>
							</div><?php /* End row */ echo "\n"; ?>
						</div><?php /* End col-md-10 */ echo "\n"; ?>
					</div><?php /* End row */ echo "\n"; ?>
				</div><?php /* End container */ echo "\n"; ?>
			</section><?php /* End map-hero */ echo "\n"; ?>
			<section class="item-list">
				<div class="container">
					<div class="row">
						<div class="col-md-10 center-block">
							<div class="row">
							<?php 
								/* START TUTORIAL LOOP */
								$wp_counter = 2; // reset event counter
									
								if(count($white_papers) > 1) :
									// Loop throught events array skip first 
									for ($x = 1; $x <= count($white_papers) - 1; $x++) : 
								?>
								<div class="item-wrap el-animation">
									<div class="item white-before grey-after" data-ch="true">
										<?php 
											/* Print first tutorial */
											$file = $wpdb->get_results( "SELECT p.ID, p.guid, pm.post_id, pm.meta_value FROM {$wpdb->posts} AS p INNER JOIN {$wpdb->postmeta} AS pm WHERE pm.post_id = {$white_papers[$x]->ID} AND p.ID = pm.meta_value" );
											
											if(isset($file[0]->guid)) $file_url = $file[0]->guid;
													
											#prepare title
											$title = $white_papers[$x]->post_title;
											
											if(isset($file_url) && $file_url != '') : 
												# prepare content 
												$body_text = wpautop( $white_papers[$x]->post_content, false );
											else : 
												# prepare content 
												$body_text = $white_papers[$x]->post_content;
												#check for WP <!--more--> tag position
												$ismore = @strpos( $body_text, '<!--more-->');
												# prepare exerpt
												if($ismore) : 
													$exerpt = @substr($body_text, 0, $ismore); 
													# format text using WP dafault forrmating
													$body_text = wpautop( $exerpt, false );	
												else :
													# if there isnt more tag
													$content = $body_text;
													# format text using WP dafault forrmating
													$content = wpautop( $content, false );
													# first paragraph is exerpt
													$body_text = substr($content, 0, strpos($content, "</p>")+4);
												endif;
											endif;
										?>
										<h2><?php echo $title; ?></h2>
										<div class="text"><?php echo $body_text; ?></div><?php /* End text */ echo "\n"; ?>
										<?php if(isset($file_url) && $file_url != '') : ?>
										<div class="button-wrap el-animation">
											<a class="button black-2" href="#form-popup-<?php echo $wp_counter; ?>">Request white paper</a>
										</div><?php /* End button-wrap */ echo "\n"; ?>
										<div id="form-popup-<?php echo $wp_counter; ?>" class="form-popup mfp-hide">
											<?php
												$form_popup = true;
												include("templates/contact-form.php");
												$file_url = NULL;
											?>		
										</div><?php /* End form-popup */ echo "\n"; ?>
										<?php else : ?>
											<div class="button-wrap el-animation">
												<a class="btn btn-black" href="<?php echo $base_url; ?>/use-cases/<?php echo $white_papers[$x]->post_name; ?>">Read More</a>
											</div><?php /* End button-wrap */ echo "\n"; ?>								
										<?php endif; ?>
									</div><?php /* End item */ echo "\n"; ?>
								</div><?php /* End el-animation */ echo "\n"; ?>
							<?php 
								$wp_counter = $wp_counter + 1; 
								$file_url = NULL;
								endfor;	
							endif;
						?>
						</div><?php /* End col-md-10 */ echo "\n"; ?>
					</div><?php /* End row */ echo "\n"; ?>
				</div><?php /* End container */ echo "\n"; ?>
			</section><?php /* End event-list */ echo "\n"; ?>
		</div><?php /* End page-events */ echo "\n"; ?>