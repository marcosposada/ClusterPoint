<div class="hero">
	<div class="slider-top"><img src="{{get_stylesheet_directory_uri()}}/dist/img/slider-top-el.svg" alt=""></div><?php /* End slider-top */ ?>
	<div class="slider-bottom"><img src="{{get_stylesheet_directory_uri()}}/dist/img/slider-bottom-el.svg" alt=""></div><?php /* End slider-bottom */ ?>
	<div class="slider single-item">
		@acfrepeater('hero_slides')
		<?php 
			$img_id = get_sub_field( 'image' ); 
			$img_obj = wp_get_attachment_image_src($img_id, 'hero-image');
			$img_src = $img_obj[0];
		?>
		<div style="background: url({{ $img_src }}) {{ get_sub_field('background_position') }} no-repeat; background-size: cover;"></div>
		@acfend  
	</div><?php /* End slider */ ?>
	<div class="gradient-left"></div><?php /* End gradient-left */ ?>
	<div class="container">
		<div class="row">
			<h1>
				{{ get_field('hero_text') }}
			</h1>
			<div class="form">
				<?php $form = get_field('form'); ?>
				{{do_shortcode( $form )}}
			</div><?php /* End form */ ?>
		</div><?php /* End row */ ?>
	</div><?php /* End container */ ?>
</div><?php /* End hero */ ?>

<div class="features-line">
	<div class="container">
		<div class="row">
			@acfrepeater('front_page_features')
			<div class="col-sm-4">
				<div class="feature">
					<div class="icon">
						<img src="{{ get_sub_field('icon'); }}" class="icon-image">
					</div><?php /* End icon */ ?>
					<div class="text">
						<h2>{{ get_sub_field('title') }}</h2>
						<p>{{ get_sub_field('text') }}</p>
					</div><?php /* End text */ ?>
				</div><?php /* End feature*/ ?>
			</div><?php /* End col-sm-4 */ ?>
			@acfend
		</div><?php /* End row */ ?>
	</div><?php /* End container */ ?>
</div><?php /* End features-line */ ?>

<div class="products-line">
	<div class="container">
		<div class="row">
			<div class="col-sm-7">
				<h2 class="block-title">{{ get_field('products_line_title') }}</h2>
				<ul>
				@acfrepeater('products')
					<li>{{ get_sub_field('product') }}</li>
				@acfend
				</ul>
			</div><?php /* End col-sm-7 */ ?>
			<div class="col-sm-5">
				<img style="margin-top:0; max-width: 95%;" src="{{ get_stylesheet_directory_uri() }}/dist/img/home-image.png">
			</div><?php /* End col-sm-5 */ ?>
		</div><?php /* End row */ ?>
		<div class="button-container"><a href="{{ get_post_type_archive_link( 'products' ); }}" class="button"><?php the_field('label_catalogue','options'); ?></a></div><?php /* End button-container */ ?>
	</div><?php /* End container */ ?>
</div><?php /* End products-line */ ?>	


