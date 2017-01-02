		<?php
			# cache single slug
			$single_slug = $params[2];
			# prepare SQL query to get all press realese based on slug
			$query = "SELECT * FROM {$wpdb->posts} WHERE post_type = 'white_papers' AND post_name = '{$single_slug}' AND post_status = 'publish' LIMIT 1";
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
			echo "\n";
		?>
		<div id="page-use-cases-single" class="page-wrap single-wrap">	
			<section id="hero" data-ch="true">
				<div class="container">
					<div class="row">
						<div class="col-md-10 center-block">
							<h1 class="el-animation"><?php echo $title ?></h1>
						</div>
						<div class="col-lg-10 col-md-12 center-block">
							<div class="row">
								<div class="col-lg-4 col-mad-12">
								</div><?php /* End col-md-4 */ echo "\n"; ?>
								<div class="col-lg-8 col-md-12 text el-animation">
									<div class="inner">
										<?php echo $exerpt; ?>
									</div><?php /* End inner */ echo "\n"; ?>
								</div><?php /* End col-md-8 */ echo "\n"; ?>	
							</div><?php /* End row */ echo "\n"; ?>	
						</div><?php /* End col-md-10 */ echo "\n"; ?>	
					</div><?php /* End row */ echo "\n"; ?>
				</div><?php /* End container */ echo "\n"; ?>
			</section><?php /* End hero */ echo "\n"; ?>
			<section id="single-content" class="white-before content">
				<div class="container el-animation-2">
					<div class="row">
						<div class="col-lg-10 col-md-12 center-block" data-ch="true">
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