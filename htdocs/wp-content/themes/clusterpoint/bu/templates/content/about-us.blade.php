<div class="container about-container">
	<div class="row">
		<div class="col-sm-7">
			@wpposts
			    {{the_content()}}
			@wpempty
			    <p>404</p>
			@wpend
		</div><?php /* End col-sm-6 */ ?>
		<div class="col-sm-5">
			<img src="{{ get_field('about_image') }}" />
		</div><?php /* End col-sm-6 */ ?>
	</div><?php /* End row */ ?>	
</div><?php /* End container */ ?>