		<?php
			# prepare SQL query to get all active press releases
			$query = "SELECT ID, post_date, post_title, post_content, post_name FROM {$wpdb->posts} WHERE post_type = 'post' AND post_status = 'publish' ORDER BY post_date DESC";
			# press releases array
			$news_items = $wpdb->get_results( $query );
			echo "\n";
			
			$page_id = 41; // Page id from WP where is news items
			# prepare SQL query to get all in news items 
			//$query = "SELECT * FROM {$wpdb->postmeta} WHERE meta_key = 'news_items' AND meta_value != '' AND post_id = {$page_id} ORDER BY meta_value ASC"; 
	        $query = $wpdb->prepare("SELECT meta_key, meta_value FROM {$wpdb->prefix}postmeta WHERE meta_key LIKE %s", 'news_items_%');
			# in news items array
			$in_news_items =  $wpdb->get_results( $query );
		?>
		<div id="page-blog" class="page-wrap article-lists">
			<section id="animation" class="grey-after" data-ch="true">
				<div class="container el-animation">
					<div class="row">
						<div class="col-md-10 center-block">
							<div class="row">
								<h1>Latest Blog Posts</h1>
								<div class="text">
									<?php
										# loop to print out press releases
										for ($i = 0; $i <= 4; $i++) :
											# prepare date for formating
											$date = new DateTime($news_items[$i]->post_date);
											# prepare SQL query for author
											$query = "SELECT * FROM {$wpdb->postmeta} WHERE meta_key = 'author' AND meta_value != '' AND post_id = {$news_items[$i]->ID} ORDER BY meta_value ASC"; 
											# get author - returns array with objects
											$return_array = $wpdb->get_results( $query );
											# first element 
											$author = '';
											if(isset($return_array[0]->meta_value)) $author = $return_array[0]->meta_value;
									?>
									<a href="<?php echo $base_url; ?>/company/blog/<?php echo $news_items[$i]->post_name; ?>" class="link">
										<div class="item table">
											<div class="date table-cell">
												<?php echo $date->format('F d, Y'); ?>
											</div><?php /* End title */ echo "\n"; ?>
											<div class="title table-cell">
												<?php echo $news_items[$i]->post_title; ?>
											</div><?php /* End title */ echo "\n"; ?>
											<div class="author table-cell hidden-xs">
												<?php echo $author; ?>
											</div><?php /* End title */ echo "\n"; ?>
										</div><?php /* End item */ echo "\n"; ?>
									</a><?php /* End link */ echo "\n"; ?>
									<?php
										endfor; 
										# end of press releases print loop
									?>
								</div><?php /* End text */ echo "\n"; ?>
							</div><?php /* End row */ ?>
						</div><?php /* End col-md-10 */ echo "\n"; ?>
					</div><?php /* End row */ ?>
				</div><?php /* End container */ echo "\n"; ?>
			</section><?php /* End animation */ echo "\n"; ?>
			<section id="older-blog-posts" class="older-articles">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="inner-wrap el-animation">
								<div class="content white-after white-before" data-ch="true">
									<h2 class="section-title">Older Posts</h2>
									<div class="items-list">
										<?php 
											# max post count
											$max_post_count = count($news_items) - 1;
											# in news items loop
											for ($i = 5; $i <= $max_post_count; $i++) :
												# prepare date for formating
												$date = new DateTime($news_items[$i]->post_date);
												# prepare SQL query for author
												$query = "SELECT * FROM {$wpdb->postmeta} WHERE meta_key = 'author' AND meta_value != '' AND post_id = {$news_items[$i]->ID} ORDER BY meta_value ASC"; 
												# get author - returns array with objects
												$return_array = $wpdb->get_results( $query );
												# first element 
												$author = $return_array[0]->meta_value;
										?>
										<a href="<?php echo $base_url; ?>/company/blog/<?php echo $news_items[$i]->post_name; ?>" class="older-posts-link">
											<div class="older-item table">
												<div class="date table-cell">
													<?php echo $date->format('F d, Y'); ?>
												</div><?php /* End title */ echo "\n"; ?>
												<div class="title table-cell">
													<?php echo $news_items[$i]->post_title; ?>
												</div><?php /* End title */ echo "\n"; ?>
												<div class="author table-cell hidden-xs">
													<?php echo $author; ?>
												</div><?php /* End title */ echo "\n"; ?>
											</div><?php /* End in-news-item */ ?>
										</a><?php /* End link */ echo "\n"; ?>
										<?php
											endfor;
											# end in news item loop
										?>
									</div><?php /* End in-news-list */ echo "\n"; ?>
								</div><?php /* End content */ echo "\n"; ?>
							</div><?php /* End inner-wrap */ echo "\n"; ?>
						</div><?php /* End col-md-12 */ echo "\n"; ?>
					</div><?php /* End row */ ?>
				</div><?php /* End container */ echo "\n"; ?>
			</section><?php /* End in-news */ echo "\n"; ?>
		</div><?php /* End page-press */ echo "\n"; ?>