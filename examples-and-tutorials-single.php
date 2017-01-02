		<?php
			# cache single slug
			$single_slug = $params[3];
			# prepare SQL query to get all press realese based on slug
			$query = "SELECT * FROM {$wpdb->posts} WHERE post_type = 'tutorials' AND post_name = '{$single_slug}' AND post_status = 'publish' LIMIT 1";
			# press release array
			$blog_item = $wpdb->get_results( $query );
			# prepare date for formating
			$date_full = $blog_item[0]->post_date;
			$date = new DateTime($date_full);
			# prepare title
			$title = $blog_item[0]->post_title;
			# wrap every word in title with span
			$title_array = explode(" ", $title);
			$title = '';
			foreach($title_array as $title_item) : 
				$title .= '<span>'.$title_item.'</span>'; 
			endforeach;
			# prepare content 
			$body_text = $blog_item[0]->post_content;
			#check for WP <!--more--> tag position
			$ismore = @strpos( $body_text, '<!--more-->');
			$exerpt = "";
			# prepare exerpt
			if($ismore) : 
				$exerpt = @substr($body_text, 0, $ismore); 
				# format text using WP dafault forrmating
				$exerpt = wpautop( $exerpt, false );	
				# prepare content
				$content_start_pos = $ismore + 11; // <!--more--> tag position + more tag lenght
				$content = @substr($body_text, $content_start_pos);
				# format text using WP dafault forrmating
				$content = wpautop( $content, false );
			else :
				# if there isnt more tag
				$content = $body_text;
				# format text using WP dafault forrmating
				$content = wpautop( $content, false );
				# first paragraph is exerpt
				$exerpt = substr($content, 0, strpos($content, "</p>")+4);
				# trim first paragraph content
				$content = substr($content, strpos($content, "</p>")+4);
			endif;
			# add class to <p> tag that holds image
			$content = preg_replace("/(<p)(>[^<]*<img[^>]+>[^<]*)(<\/p>)/i", "\$1 class='content-img-wrap'\$2\$3", $content);
			//$content = preg_replace("#\<code\>(.+?)\</code\>#e", "'<code>'.htmlentities('$1', ENT_QUOTES, 'UTF-8').'</code>'", $content);
			
			# prepare SQL query for author
			$query = "SELECT * FROM {$wpdb->postmeta} WHERE meta_key = 'author' AND meta_value != '' AND post_id = {$blog_item[0]->ID} ORDER BY meta_value ASC"; 
			# get results based on query
			$return_array = $wpdb->get_results( $query );
			# get author 
			$author = $return_array[0]->meta_value;
			# keep <div> correct lines 
			echo "\n";
		?>
		<div id="page-blog-single" class="page-wrap single-wrap">	
			<section id="hero" data-ch="true">
				<div class="container">
					<div class="row">
						<div class="col-md-10 center-block">
							<div class="row">
								<h1 class="el-animation"><?php echo $title ?></h1>
							</div><?php /* End row */ echo "\n"; ?>	
						</div>
						<div class="col-md-10 center-block">
							<div class="row">
								<div class="row">
									<div class="col-md-4">
										<div class="author el-animation">Author: <?php echo $author; ?></div><?php /* End author */ echo "\n"; ?>
										<div class="date el-animation"><?php echo $date->format('F d, Y'); ?></div><?php /* End date */ echo "\n"; ?>
									</div><?php /* End col-md-4 */ echo "\n"; ?>
									<div class="col-md-8 text">
										<div class="inner el-animation">
											<?php echo $exerpt; ?>
										</div><?php /* End inner */ echo "\n"; ?>
									</div><?php /* End col-md-8 */ echo "\n"; ?>
								</div><?php /* End row */ echo "\n"; ?>		
							</div><?php /* End row */ echo "\n"; ?>	
						</div><?php /* End col-md-10 */ echo "\n"; ?>	
					</div><?php /* End row */ echo "\n"; ?>
				</div><?php /* End container */ echo "\n"; ?>
			</section><?php /* End hero */ echo "\n"; ?>
			<section id="single-content" class="white-before content" data-ch="true">
				<div class="container">
					<div class="row">
						<div class="col-md-10 center-block el-animation-2">
							<?php echo $content; ?>	
						</div><?php /* End col-md-10 */ ?>	
					</div><?php /* End row */ ?>
				</div><?php /* End container */ echo "\n"; ?>
			</section><?php /* End single-content */ echo "\n"; ?>	
		<?php
			#button block
			include("templates/button-block.php");
			#sign-up block
			include("templates/signup-block.php");
		?>	
		</div><?php /* End page-press-single */ echo "\n"; ?>