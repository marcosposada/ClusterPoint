<div class="breadcrumb">
	<div class="container">
		<div class="row">
			<a href="{{ get_post_type_archive_link('products') }}" class=""><?php the_field('label_catalogue','options'); ?></a>
			<?php if(wp_get_post_parent_id($post->ID)) : 
				$parent_id = wp_get_post_parent_id($post->ID);
			?>
			<span class="sep">»</span>
			<a href="{{ get_permalink($parent_id); }}" class=""><?php echo get_the_title($parent_id); ?></a>
			<span class="sep">»</span>
			<a href="{{ the_permalink(); }}" class="active"><?php the_title(); ?></a>
			<?php else : ?>
			<span class="sep">»</span>
			<a href="{{ get_permalink(); }}" class="active"><?php the_title(); ?></a>
			<?php endif; ?>
		</div><?php /* End row */ ?>
	</div><?php /* End container */ ?>
</div><?php /* End breadcrumb */ ?>
<div class="container main-container">
	<div class="row">
		<div class="sidebar">
			<?php $id = icl_object_id(294, 'page', false, ICL_LANGUAGE_CODE); ?>
			<a href="{{ get_permalink($id); }}" class="weight-calc"><img class="weight-icon" src="{{ get_stylesheet_directory_uri() }}/dist/img/weight-icon.svg">{{ get_field('label_weight_calculator', 'options'); }}</a>
			<?php
				$cur_id = $post->ID;
				$args = array( 'posts_per_page' => -1, 'post_type' => 'products', 'post_parent' => 0, 'suppress_filters' => 0);
				
				$par_posts = get_posts( $args );

				$_html = '';
				
				foreach ( $par_posts as $par_post ) : 
					$sub_args = array( 'posts_per_page' => -1, 'post_type' => 'products', 'post_parent' => $par_post->ID, 'suppress_filters' => 0);
					$sub_posts = get_posts( $sub_args );
					
					
					$sub_html = '';
					$sub_class = '';
					$cur_class = '';
					
					
					if($cur_id == $par_post->ID ) :
						$sub_class = 'open';
						$cur_class = 'active';
					else :
						$sub_class = '';
						$cur_class = '';
					endif;
					
					

					foreach ( $sub_posts as $sub_post ) :
						
						$sub_sub_html = '';
						$sub_item_class = '';
	
						$sub_sub_args = array( 'posts_per_page' => -1, 'post_type' => 'products', 'post_parent' => $sub_post->ID , 'suppress_filters' => 0);
						$sub_sub_posts = get_posts( $sub_sub_args );
						
						//var_dump($sub_sub_posts);
						$sub_sub_item_class = '';
						foreach ( $sub_sub_posts as $sub_sub_post ) :
							$sub_sub_item_class = '';
							if($cur_id == $sub_sub_post->ID ) :
								$sub_item_class = 'sub-active';
								$sub_sub_item_class = 'sub-sub-active';
							endif;
							
							$sub_sub_html .= '<li><a class="'.$sub_sub_item_class.'" href="'.get_permalink($sub_sub_post->ID).'">▸ '.get_the_title($sub_sub_post->ID).'</a></li>';
							
							if($cur_id == $sub_sub_post->ID) :
								$sub_class = 'open';
								$cur_class = 'active';
							endif;
							
						endforeach;
						
						
						
						
						
						if($cur_id == $sub_post->ID ) :
							$sub_item_class = 'sub-active';
						endif;
						
						$sub_html .= '<li><a class="'.$sub_item_class.'" href="'.get_permalink($sub_post->ID).'">'.get_the_title($sub_post->ID).'</a><ul class="sub-sub-list">'.$sub_sub_html.'</ul></li>';
						
						if($cur_id == $sub_post->ID) :
							$sub_class = 'open';
							$cur_class = 'active';
						endif;
						
						
					endforeach;
					wp_reset_postdata();

					
					$_html .= '<ul><li>';
					$_html .= '<a class="'.$cur_class.'" href="'.get_permalink($par_post->ID).'">'.get_the_title($par_post->ID).'</a>';
					$_html .= '<ul class="'.$sub_class.'">';
					$_html .= $sub_html;
					$_html .= '</ul></li></ul>';
					
					$sub_class = '';
					$cur_class = '';

				endforeach;
				wp_reset_postdata();
				
				echo $_html;
				
			?>
		</div><?php /* End sidebar */ ?>
		<div class="catalogue-content">
		<?php
			$children = get_posts( array(  'posts_per_page' => -1, 'post_type' => 'products', 'post_parent' => $cur_id ));
			if( count( $children ) != 0 ) : 
				foreach($children as $child) :  setup_postdata( $child );
		?>	
					<div class="product">
						<div class="image">
							<?php
								$img_src = '';
								while ( have_rows('product_images' ,$child->ID ) ) : the_row();
									$img_src = get_sub_field('product_image',$child->ID);
									break;
								endwhile;
								
							?>
							<img src="<?php echo $img_src; ?>">
						</div>
						<div class="text">
							<h2><?php echo get_the_title($child->ID); ?></h2>
							<h3><?php the_title(); ?></h3>
							<a class="more" href="<?php echo get_permalink($child->ID); ?>"><?php the_field('label_more','options'); ?></a>
						</div>
					</div><?php /* End product */ ?>
		<?php
				endforeach;
				wp_reset_postdata();
			else : 
		?>
		<div class="images oflow">
		    <?php
			    $images = get_field('product_images');
			    while ( have_rows('product_images') ) : the_row();
			    	$img_src = get_sub_field('product_image');
			?>
			<a href="" class="main-image zoom">
		    	<img src="<?php echo $img_src; ?>" class="attachment-shop_single wp-post-image" />
			</a>
			<?php
					break;
				endwhile;
			?>
			<div class="thumbnails <?php if(count($images) == 0 || $images == '0') : ?>no-image<?php endif; ?>">
		    <?php
			    $i = 0;
			    if(count($images) > 0 && $images != '0') :
					foreach( $images as $image) :
			?>
				<a href="" class="zoom first <?php if($i == 0) : ?>active<?php endif; ?>">
					<img src="<?php echo $image["product_image"]; ?>" class="attachment-shop_thumbnail" />
				</a>
			<?php
					$i = $i + 1;
					endforeach;
				endif;
			?>
			</div>
		
		</div>
		<div class="product-info">
			<h2><?php the_title(); ?></h2>
			<?php if(get_field('has_types')) : ?>
				<?php while ( have_rows('product_types') ) : the_row() ?>
					<div class="type">
						<h3>▸ {{ get_sub_field('product_type') }}</h3>
						<div class="data-table">{{ get_sub_field('product_info') }}</div><?php /* End data-table */ ?>
						<?php if(get_sub_field('has_attachments')) : ?>
						<div class="download-line">	
							<?php 
								$attrs = get_sub_field('attachments'); 
								
								foreach($attrs as $attr) :
							?>
									<a href="<?php echo get_template_directory_uri(); ?>/download-file.php?url=<?php echo $attr["attachment"]; ?>" target="_self"><span class="download-icon"></span><?php echo $attr["attachment_title"]; ?></a>
							<?php
								endforeach;
							?>
						</div><?php /* End download-line */ ?>
						<?php endif; ?>
					</div><?php /* End type */ ?>
				<?php endwhile; ?>
			<?php else : ?>
					<div class="data-table">{{ get_field('product_info') }}</div><?php /* End data-table */ ?>

				<?php if(get_field('has_attachment')) : ?>
				<div class="download-line">	
					@acfrepeater('attachments')
					<a href="<?php echo get_template_directory_uri(); ?>/download-file.php?url={{ get_sub_field('attachment') }}" target="_self"><span class="download-icon"></span>{{ get_sub_field('attachment_title') }}</a>
					@acfend
				</div><?php /* End download-line */ ?>
				<?php endif; ?>
			<?php endif; ?>
		</div><?php /* End product-info */  ?>
		<?php
			endif;
		?>
		</div><?php /* End catalogue-content */ ?>
	</div><?php /* End row */ ?>
</div><?php /* End container */ ?>