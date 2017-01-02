		<?php
			# prepare SQL query to get all active tutorials
			$query = "SELECT ID, post_title, post_content, post_date, post_name, menu_order FROM {$wpdb->posts} AS p WHERE post_type = 'use_cases' AND post_status = 'publish' ORDER BY menu_order ASC";
			# tutorials array
			$use_cases = $wpdb->get_results( $query );
		?>
		<div id="page-use-cases" class="page-wrap archive-type-2">
			<section id="hero" class="purple-before" data-ch="true">
				<div class="container">
					<div class="row">
						<div class="col-md-10 center-block">
							<div class="row">
								<div class="item el-animation">
									<?php 
										/* Print first tutorial */
										#prepare title
										$title = $use_cases[0]->post_title;
										# prepare content 
										$body_text = $use_cases[0]->post_content;
										#check for WP <!--more--> tag position
										$ismore = @strpos( $body_text, '<!--more-->');
										# prepare exerpt
										if($ismore) : 
											$exerpt = @substr($body_text, 0, $ismore); 
											# format text using WP dafault forrmating
											$exerpt = wpautop( $exerpt, false );	
										else :
											# if there isnt more tag
											$content = $body_text;
											# format text using WP dafault forrmating
											$content = wpautop( $content, false );
											# first paragraph is exerpt
											$exerpt = substr($content, 0, strpos($content, "</p>")+4);
										endif;
									?>
									<h2><?php echo $title; ?></h2>
									<div class="text"><?php echo $exerpt; ?></div><?php /* End text */ echo "\n"; ?>
									<a class="read-more" href="<?php echo $base_url; ?>/use-cases/<?php echo $use_cases[0]->post_name; ?>">Read more</a>
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
						<?php
							/* START USE CASES LOOP */		
						if(count($use_cases) > 1) :
							// Loop throught events array skip first 
							for ($x = 1; $x <= count($use_cases) - 1; $x++) : 
						?>
							<div class="item el-animation white-before" data-ch="true">
							<?php 
								#prepare title
								$title = $use_cases[$x]->post_title;
								# prepare content 
								$body_text = $use_cases[$x]->post_content;
								#check for WP <!--more--> tag position
								$ismore = @strpos( $body_text, '<!--more-->');
								# prepare exerpt
								if($ismore) : 
									$exerpt = @substr($body_text, 0, $ismore); 
									# format text using WP dafault forrmating
									$exerpt = wpautop( $exerpt, false );	
								else :
									# if there isnt more tag
									$content = $body_text;
									# format text using WP dafault forrmating
									$content = wpautop( $content, false );
									# first paragraph is exerpt
									$exerpt = substr($content, 0, strpos($content, "</p>")+4);
								endif;
							?>
								<h2><?php echo $title; ?></h2>
								<div class="text"><?php echo $exerpt; ?></div><?php /* End text */ echo "\n"; ?>
								<a class="read-more" href="<?php echo $base_url; ?>/use-cases/<?php echo $use_cases[$x]->post_name; ?>">Read more</a>
							</div><?php /* End item */ echo "\n"; ?>
					<?php
							endfor;
						endif;
					?>
						</div><?php /* End col-md-10 */ echo "\n"; ?>
					</div><?php /* End row */ echo "\n"; ?>
				</div><?php /* End container */ echo "\n"; ?>
			</section><?php /* End event-list */ echo "\n"; ?>
		</div><?php /* End page-events */ echo "\n"; ?>