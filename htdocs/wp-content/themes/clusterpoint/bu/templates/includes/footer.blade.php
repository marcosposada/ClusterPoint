<div class="footer-line">
	<div class="container">
		<div class="certificate-icon">
			<img src="{{ get_stylesheet_directory_uri() }}/dist/img/certificate-icon.png">
		</div><?php /* End certificate */ ?>
		<div class="footer-contacts">
			<span class="phone">{{ get_field('header_phone','options'); }}</span>
			<span class="email">{{ get_field('header_email','options'); }}</span>
	 	</div><?php /* End header-contacts */ ?>
	 	<div class="footer-address">
		 	<span class="company">{{ get_field('footer_company','options'); }}</span>
		 	<span class="address">{{ get_field('footer_address','options'); }} <a href="{{ get_field('footer_map_link','options'); }}" class="map-link">{{ get_field('footer_map_label','options'); }}</a></span>
		 	<span class="post-index">{{ get_field('footer_post_index','options'); }}</span>
	 	</div><?php /* End footer-address */ ?>
	</div><?php /* End container */ ?>
</div><?php /* End footer-line */ ?>
<footer>
	<div class="container">
		<div class="copyright-text">
			{{ get_field('copyright_text','options'); }}
		</div><?php /* End copyright-text */ ?>
	</div><?php /* End container */ ?>
</footer><?php /* End footer */ ?>