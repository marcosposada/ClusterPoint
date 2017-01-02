<?php
	# prepare SQL query to get all press realese based on slug
	$query = "SELECT * FROM {$wpdb->posts} WHERE post_type = 'careers' AND post_status = 'publish' ORDER BY menu_order ASC";
	# Hiring array
	$hiring = $wpdb->get_results( $query );
?>	
		<div id="page-careers" class="page-wrap">
			<section id="animation" class="purple-after" data-ch="true">
				<div class="container">
					<div class="row">
						<div class="col-md-10 center-block el-animation">
							<div class="row">
								<?php
									if(count($hiring) > 0) : 
										# prepare title
										$title = $hiring[0]->post_title;
										# prepare content 
										$body_text = $hiring[0]->post_content;
										$body_text = wpautop($body_text);
									else : 
										# prepare title
										$title		= 'We are always looking for exceptional talent in all departments';
										$body_text  = 'Feel free to email your resume to Clusterpoint CTO Jurgis Orups at <a href="mailto:jurgis.orups@clusterpoint.com">jurgis.orups@clusterpoint.com</a>.';
										$body_text = wpautop($body_text);
									endif;
								?>
								<h1><?php echo $title; ?></h1>
								<div class="text"><?php echo $body_text; ?></div><?php /* End text */ echo "\n"; ?>
							</div><?php /* End row */ echo "\n"; ?>
						</div><?php /* End col-md-12 */ echo "\n"; ?>
					</div><?php /* End row */ echo "\n"; ?>
				</div><?php /* End container */ echo "\n"; ?>
			</section><?php /* End animation */ echo "\n"; ?>
			<section id="hiring">
				<div class="container">
					<div class="row">
						<div class="col-md-10 center-block">
						<?php 
							/* Hiring repeating blocks */ 
							for ($i = 1; $i <= count($hiring) - 1; $i ++) : 
								# prepare title
								$title = $hiring[$i]->post_title;
								# prepare content 
								$body_text = $hiring[$i]->post_content;
								$body_text = wpautop($body_text);
						?>
							<div class="hiring white-before" data-ch="true">
								<div class="animation-wrap el-animation">
									<h2><?php echo $title; ?></h2>
									<div class="text"><?php echo $body_text; ?></div><?php /* End text */ echo "\n"; ?>
								</div><?php /* End animation-wrap */ echo "\n"; ?>
							</div><?php /* End hiring */ echo "\n"; ?>
						<?php 
							endfor;
							/* End hiring repeating blocks */  
						?>
						</div><?php /* End col-md-12 */ echo "\n"; ?>
					</div><?php /* End row */ echo "\n"; ?>
				</div><?php /* End container */ echo "\n"; ?>
				<div class="bottom-bg"></div><?php /* End bottom-bg */ echo "\n"; ?>
			</section><?php /* End hiring */ echo "\n"; ?>
		</div><?php /* End page-wrap */ echo "\n"; ?>