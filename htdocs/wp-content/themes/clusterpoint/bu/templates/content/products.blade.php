<div class="breadcrumb">
	<div class="container">
		<div class="row">
			<a href="{{ get_post_type_archive_link('products') }}" class=""><?php echo get_field('label_catalogue','options'); ?></a>
		</div><?php /* End row */ ?>
	</div><?php /* End container */ ?>
</div><?php /* End breadcrumb */ ?>
<div class="container main-container">
	<div class="row">
		<div class="sidebar">
			<?php $id = icl_object_id(294, 'page', false, ICL_LANGUAGE_CODE); ?>
 			<a href="{{ get_permalink($id); }}" class="weight-calc"><img class="weight-icon" src="{{ get_stylesheet_directory_uri() }}/dist/img/weight-icon.svg">{{ get_field('label_weight_calculator', 'options'); }}</a>
		</div><?php /* End sidebar */ ?>
		<div class="catalogue-content">
			<div class="col-sm-6">
				<?php $id = icl_object_id(368, 'products', false, ICL_LANGUAGE_CODE); ?>
				<a href="{{ get_permalink($id); }}" class="main-cat">
					<div class="product-image">
						<img src="{{ get_stylesheet_directory_uri() }}/dist/img/malnais-metals.jpg">
					</div><?php /* End product-image */ ?>
					<div class="product-about">
						{{ get_the_title($id); }}
					</div><?php /* End product-about */ ?>
				</a>
			</div><?php /* End col-sm-6 */ ?>
			<div class="col-sm-6">
				<?php $id = icl_object_id(225, 'products', false, ICL_LANGUAGE_CODE); ?>			
				<a href="{{ get_permalink($id); }}" class="main-cat">
					<div class="product-image">
						<img src="{{ get_stylesheet_directory_uri() }}/dist/img/ner-terauds.jpg">
					</div><?php /* End product-image */ ?>
					<div class="product-about">
						{{ get_the_title($id); }}
					</div><?php /* End product-about */ ?>
				</a>
			</div><?php /* End col-sm-6 */ ?>
		</div><?php /* End catalogue-content */ ?>
	</div><?php /* End row */ ?>
</div><?php /* End container */ ?>