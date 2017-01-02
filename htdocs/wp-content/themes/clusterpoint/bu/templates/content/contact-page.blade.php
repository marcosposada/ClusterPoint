
<div class="container contacts-container">
	<div class="row">
		<div class="col-sm-8">
			<div id="map"></div><?php /* End map */ ?>
		</div><?php /* End col-sm-8 */ ?>
		<div class="col-sm-4">
			<span class="contacts">
				<?php $cords = get_field('maps_coordinates'); ?>
				<script>
					var lat = <?php echo $cords['lat']; ?>;
					var lng = <?php echo $cords['lng']; ?>
				</script>
				<h2>{{ get_field('contacts_title') }}</h2>
				<span class="contacts">{{ get_field('contacts') }}</span>
			</span>
			<span class="bank">
				<h2>{{ get_field('bank_title') }}</h2>
				<span class="contacts">{{ get_field('bank') }}</span>
			</span>
		</div><?php /* End col-sm-4 */ ?>
	</div><?php /* End row */ ?>
	<div class="row employees">
		<span class="line-top"></span>
		@acfrepeater('employees')
		<div class="col-sm-4" style="min-height:130px;">
			<h2>{{ get_sub_field('name_and_surname'); }}</h2>
			<span class="position">{{ get_sub_field('positions'); }}</span>
		<?php if(get_sub_field('phone')) :?>
			<span class="phone"><img src="{{ get_stylesheet_directory_uri() }}/dist/img/phone-icon.svg" style="padding-right: 5px; width:17px; height:auto; padding-bottom: 4px;"> {{ get_sub_field('phone'); }}</span>
		<?php endif; ?>
		<?php if(get_sub_field('mobile_phone')) : ?>
			<span class="gsm"><img src="{{ get_stylesheet_directory_uri() }}/dist/img/mobile-icon.svg" style="padding-right: 5px; width:17px; height:auto; padding-bottom: 4px;"> {{ get_sub_field('mobile_phone'); }}</span>
		<?php endif; ?>
		<?php if(get_sub_field('email')) : ?>
			<span class="email"><img src="{{ get_stylesheet_directory_uri() }}/dist/img/email-icon.svg" style="padding-right: 5px; width:17px; height:auto; padding-bottom: 2px;"> {{ get_sub_field('email'); }}</span>
		<?php endif; ?>
		</div><?php /* End col-sm-4 */ ?>
		@acfend
	</div><?php /* End row */ ?>
</div><?php /* End container */ ?>