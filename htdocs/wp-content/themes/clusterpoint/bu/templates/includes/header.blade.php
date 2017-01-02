<header class="banner navbar navbar-default navbar-static-top" role="banner">
	<div class="container">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="{{ esc_url(home_url('/')) }}"></a>
	      
		  	<div class="header-contacts">
				<span class="phone">{{ get_field('header_phone','options'); }}</span>
				<span class="email">{{ get_field('header_email','options'); }}</span>
	 		</div><?php /* End header-contacts */ ?>
	 		
	 		<?php $languages = icl_get_languages('skip_missing=0&orderby=code'); ?>
	 		<ul class="lang-bar">
		 		<?php foreach($languages as $l) : ?>
		 		<?php if(is_singular('products')) :
			 		$id = icl_object_id($post->ID, 'products', false, ICL_LANGUAGE_CODE); 
			 		$url =  get_permalink($id);
			 		
			 		if($l['active']) :
		 		?>
		 		<li class="<?php if($l['active']) : ?>active<?php endif; ?>"><a href="<?php echo $l['url']; ?>"><?php echo $l['language_code']; ?></a></li>
		 		<?php
			 		else : ?>
		 		<li class="<?php if($l['active']) : ?>active<?php endif; ?>"><a href="<?php echo $l['url']; ?>"><?php echo $l['language_code']; ?></a></li>
		 		<?php 
			 		endif; 
			 	?>
		 		<?php else : ?>
		 		<li class="<?php if($l['active']) : ?>active<?php endif; ?>"><a href="<?php echo $l['url']; ?>"><?php echo $l['language_code']; ?></a></li>
		 		<?php endif; ?>
		 		<?php endforeach; ?>
	 		</ul><?php /* End lang-bar */ ?>
	    </div><?php /* End navbar-header */ ?>
	    <nav class="collapse navbar-collapse" role="navigation">
	        @if(has_nav_menu('primary_navigation'))
	          {{ wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav', 'walker' => new wp_bootstrap_navwalker(), 'container_class' => 'collapse navbar-collapse',)) }}
	        @endif
	    </nav>
	</div><?php /* End container */ ?>
</header><?php /* End header */ ?>
