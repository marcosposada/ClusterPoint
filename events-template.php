		<?php
			# prepare SQL query to get all active events
			$query = "SELECT ID, post_title, post_content, post_date FROM {$wpdb->posts} AS p WHERE post_type = 'events' AND post_status = 'publish' ORDER BY menu_order ASC";
			# events array
			$events = $wpdb->get_results( $query );
			
			# keep track on gallery count 
			$gallery_counter = 1;
			# keep track on video link count
			$video_counter = 1;
		?>
		<div id="page-events" class="page-wrap archive-type-2">
			<section id="hero" class="grey-after" data-ch="true">
				<div class="container">
					<div class="row">
						<div class="col-md-10 center-block">
							<div class="row item el-animation">
								<div class="row">
									<?php 
										/* Print first event */
									?>
									<div class="col-md-7 col-xs-12">
										<h2><?php echo $events[0]->post_title; ?></h2>
										<?php 
											# prepare SQL query for date
											$query = "SELECT * FROM {$wpdb->postmeta} WHERE meta_key = 'date' AND meta_value != '' AND post_id = {$events[0]->ID} ORDER BY meta_value ASC"; 
											$date = $wpdb->get_results( $query );
										?>
										<div class="date"><?php echo $date[0]->meta_value; ?></div><?php /* End date */ echo "\n"; ?>
										<?php 
											# prepare SQL query for event address
											$query = "SELECT * FROM {$wpdb->postmeta} WHERE meta_key = 'Location_name' AND meta_value != '' AND post_id = {$events[0]->ID} ORDER BY meta_value ASC"; 
											$address = $wpdb->get_results( $query );
										?>
										<div class="place"><?php echo $address[0]->meta_value; ?></div><?php /* End place */ echo "\n"; ?>
										<div class="text"><?php echo $events[0]->post_content; ?></div><?php /* End text */ echo "\n"; ?>
										<ul class="link-block">
											<?php 
												# prepare SQL query for download link
												$file_name = $wpdb->get_results("SELECT * FROM {$wpdb->postmeta} WHERE meta_key = 'file_name' AND meta_value != '' AND post_id = {$events[0]->ID}");
	
												# show registration button only if registration link exist
												if(isset($file_name[0]->meta_value) && $file_name[0]->meta_value != '') : 
													$file = $wpdb->get_results( "SELECT p.ID, p.guid, pm.post_id, pm.meta_value FROM {$wpdb->posts} AS p INNER JOIN {$wpdb->postmeta} AS pm WHERE pm.post_id = {$events[0]->ID} AND p.ID = pm.meta_value" );
											?>
												<li><a href="<?php echo $base_url; ?>/lib/download.php?url=<?php echo $file[0]->guid; ?>" class="icon-link"><span class="icon download-icon purple"></span><span class="label"><?php echo $file_name[0]->meta_value; ?></span></a></li>
											<?php
												endif;
	
												# prepare SQL query for gallery
												# TODO : add lightbox ???
												$query = "SELECT * FROM {$wpdb->postmeta} WHERE meta_key = 'gallery' AND meta_value != '' AND post_id = {$events[0]->ID} ORDER BY meta_value ASC"; 
												$gallery = $wpdb->get_results( $query );
												
												# show registration button only if registration link exist
												if(isset($gallery[0]->meta_value) && $gallery[0]->meta_value != '') : 
													# get galley image ids
													$image_ids = unserialize($gallery[0]->meta_value); 
													# prepare ids string for sql query
													$ids_string = '';
													foreach($image_ids as $id) : $ids_string .= $id.','; endforeach;
													# remove last comma from string
													$ids_string = rtrim($ids_string,',');
													# prepare sql query 
													$query = "SELECT * FROM {$wpdb->postmeta} WHERE post_id IN ($ids_string) AND meta_key = '_wp_attached_file'";
													$images = $wpdb->get_results( $query );
													# prepare image string for otput
													$image_string = '';
													foreach($images as $image) :
														$image_string .= $base_url.'/wp/wp-content/uploads/'.$image->meta_value.',';
													endforeach;
													# remove last comma from string
													$image_string = rtrim($image_string,',');
											?>
													<li><a id="galley-popup-<?php echo $gallery_counter; ?>" href="" class="icon-link gallery-link" data-images="<?php echo $image_string; ?>" data-title="<?php echo  $events[0]->post_title; ?>"><span class="icon gallery-icon"></span><span class="label">Open photo gallery</span></a></li>
											<?php 
												endif; 
												
												# prepare SQL query for video
												$query = "SELECT * FROM {$wpdb->postmeta} WHERE meta_key = 'video_url' AND meta_value != '' AND post_id = {$events[0]->ID} ORDER BY meta_value ASC"; 
												$video_link = $wpdb->get_results( $query );
													
												# show video button
												if(isset($video_link[0]->meta_value) && $video_link[0]->meta_value != '') : 
												
													$video = new videoCheck();
													$video_type = $video->videoType($video_link[0]->meta_value);
													
													if($video_type == 'youtube') :
														$video_url = $video->prepareYoutubeUrl($video_link[0]->meta_value);
													elseif($video_type == 'vimeo'):
														$video_url = $video->prepareVimeoUrl($video_link[0]->meta_value);
													else :
														$video_url = $video_link[0]->meta_value;
													endif;
											?>
													<li><a id="video-popup-<?php echo $video_counter; ?>" href="" class="icon-link video-link" data-video="<?php echo $video_url; ?>" data-title="<?php echo $events[0]->post_title; ?>"><span class="icon video-icon"></span><span class="label">Watch video</span></a></li>	
											<?php 
												endif;
											?>
										</ul><?php /* End list */ echo "\n"; ?>
										<div class="page-links">
										<?php
											# prepare SQL query for outside link
											$query = "SELECT * FROM {$wpdb->postmeta} WHERE meta_key = 'outside_link' AND meta_value != '' AND post_id = {$events[0]->ID} ORDER BY meta_value ASC"; 
											$outside_link = $wpdb->get_results( $query );
												
											# show registration button only if registration link exist
											if(isset($outside_link[0]->meta_value) && $outside_link[0]->meta_value != '') : 
										?>
											<a href="<?php echo $outside_link[0]->meta_value; ?>" target="_blank"><?php echo $outside_link[0]->meta_value; ?></a>
										<?php
											endif;
										?>
										</div><?php /* End page-links*/ echo "\n"; ?>
									</div><?php /* End col-md-7 */ echo "\n"; ?>
									<div class="col-md-5 col-xs-12">
										<div class="map-wrap">
											<?php
												# prepare SQL query for event image 
												$query = "SELECT guid FROM {$wpdb->postmeta} AS pm INNER JOIN {$wpdb->posts} AS p ON pm.meta_value=p.ID  WHERE pm.post_id = {$events[0]->ID} AND pm.meta_key = 'image'";
												$event_image_obj = $wpdb->get_results( $query );
	
												# show image only if image url exist
												if(isset($event_image_obj[0]->guid) && $event_image_obj[0]->guid != '') : 
													# image url 
													$event_image_src = $event_image_obj[0]->guid;
													# split url in paths for checking
													$ext 	= pathinfo($event_image_src, PATHINFO_EXTENSION);
													$fname  = pathinfo($event_image_src, PATHINFO_FILENAME);
													$path   = pathinfo($event_image_src, PATHINFO_DIRNAME);
													# prepare cropped url
													$image_src_cropped = $path.'/'.$fname.'-370x500.'.$ext;
													# check if cropped image exist if not show full image
													if(file_exists($image_src_cropped)) :
														$image_src = $image_src_cropped;
													else :
														$image_src = $event_image_src;
													endif;
											?>
												<img src="<?php echo $image_src; ?>">
											<?php
												else :
													# prepare SQL query for event location
													$query = "SELECT * FROM {$wpdb->postmeta} WHERE meta_key = 'location' AND meta_value != '' AND post_id = {$events[0]->ID} ORDER BY meta_value ASC"; 
													$location_obj = $wpdb->get_results( $query );
													# create array from WP string
													$location = unserialize($location_obj[0]->meta_value);
											?>
													<div id="map-0" class="item-map" data-lng="<?php echo $location['lng']; ?>" data-lat="<?php echo $location['lat']; ?>"></div><?php /* End map */ echo "\n"; ?>
											<?php endif; ?>
										</div><?php /* End map-wrap */  echo "\n"; ?>
									</div><?php /* End col-md-5 */ echo "\n"; ?>
								</div><?php /* End row */ ?>
							</div><?php /* End row */ echo "\n"; ?>
						</div><?php /* End col-md-10 */ echo "\n"; ?>
					</div><?php /* End row */ echo "\n"; ?>
				</div><?php /* End container */ echo "\n"; ?>
			</section><?php /* End map-hero */ echo "\n"; ?>
			<section class="item-list">
				<div class="container">
					<div class="row">
						<div class="col-md-10 col-xs-12 center-block">
							<div class="row">
								<?php 
									/* START EVENT LOOP */
									
									$event_counter = 1; // reset event counter
									
									// Loop throught events array skip first 
									for ($x = 1; $x <= count($events) - 1; $x++) : 
								?>
								<div class="item grey-after white-before" data-ch="true">
									<div class="animation-wrap el-animation">
										<div class="col-md-7 col-xs-12">
										<h2><?php echo  $events[$x]->post_title; ?></h2>
										<?php 
											# prepare SQL query for date
											$query = "SELECT * FROM {$wpdb->postmeta} WHERE meta_key = 'date' AND meta_value != '' AND post_id = {$events[$x]->ID} ORDER BY meta_value ASC"; 
											$date = $wpdb->get_results( $query );
										?>
										<div class="date"><?php echo $date[0]->meta_value; ?></div><?php /* End date */ echo "\n"; ?>
										<?php 
											# prepare SQL query for event address
											$query = "SELECT * FROM {$wpdb->postmeta} WHERE meta_key = 'Location_name' AND meta_value != '' AND post_id = {$events[$x]->ID} ORDER BY meta_value ASC"; 
											$address = $wpdb->get_results( $query );
										?>
										<div class="place"><?php echo $address[0]->meta_value; ?></div><?php /* End place */ echo "\n"; ?>
										<div class="text"><?php echo $events[$x]->post_content; ?></div><?php /* End text */ echo "\n"; ?>
										<ul class="link-block">
										<?php 
											# prepare SQL query for download link
											$file_name = $wpdb->get_results("SELECT * FROM {$wpdb->postmeta} WHERE meta_key = 'file_name' AND meta_value != '' AND post_id = {$events[$x]->ID}");

											# show registration button only if registration link exist
											if(isset($file_name[0]->meta_value) && $file_name[0]->meta_value != '') : 
												$file = $wpdb->get_results( "SELECT p.ID, p.guid, pm.post_id, pm.meta_value FROM {$wpdb->posts} AS p INNER JOIN {$wpdb->postmeta} AS pm WHERE pm.post_id = {$events[$x]->ID} AND p.ID = pm.meta_value" );
										?>
											<li><a href="<?php echo $base_url; ?>/lib/download.php?url=<?php echo $file[0]->guid; ?>" class="icon-link"><span class="icon download-icon purple"></span><span class="label"><?php echo $file_name[0]->meta_value; ?></span></a></li>
										<?php
											endif;
	
											# prepare SQL query for gallery
											# TODO : add lightbox ???
											$query = "SELECT * FROM {$wpdb->postmeta} WHERE meta_key = 'gallery' AND meta_value != '' AND post_id = {$events[$x]->ID} ORDER BY meta_value ASC"; 
											$gallery = $wpdb->get_results( $query );
											
											# show registration button only if registration link exist
											if(isset($gallery[0]->meta_value) && $gallery[0]->meta_value != '') : 
												# get galley image ids
												$image_ids = unserialize($gallery[0]->meta_value); 
												# prepare ids string for sql query
												$ids_string = '';
												foreach($image_ids as $id) : $ids_string .= $id.','; endforeach;
												# remove last comma from string
												$ids_string = rtrim($ids_string,',');
												# prepare sql query 
												$query = "SELECT * FROM {$wpdb->postmeta} WHERE post_id IN ($ids_string) AND meta_key = '_wp_attached_file'";
												$images = $wpdb->get_results( $query );
												# prepare image string for otput
												$image_string = '';
												foreach($images as $image) :
													$image_string .= $base_url.'/wp/wp-content/uploads/'.$image->meta_value.',';
												endforeach;
												# remove last comma from string
												$image_string = rtrim($image_string,',');
										?>
												<li><a id="galley-popup-<?php echo $gallery_counter; ?>" href="" class="icon-link gallery-link" data-images="<?php echo $image_string; ?>" data-title="<?php echo  $events[$x]->post_title; ?>"><span class="icon gallery-icon purple"></span><span class="label">Open photo gallery</span></a></li>
										<?php 
											endif; 
											
											# prepare SQL query for video
											$query = "SELECT * FROM {$wpdb->postmeta} WHERE meta_key = 'video_url' AND meta_value != '' AND post_id = {$events[$x]->ID} ORDER BY meta_value ASC"; 
											$video_link = $wpdb->get_results( $query );
												
											# show video button
											if(isset($video_link[0]->meta_value) && $video_link[0]->meta_value != '') : 
											
												$video = new videoCheck();
												$video_type = $video->videoType($video_link[0]->meta_value);
												
												if($video_type == 'youtube') :
													$video_url = $video->prepareYoutubeUrl($video_link[0]->meta_value);
												elseif($video_type == 'vimeo'):
													$video_url = $video->prepareVimeoUrl($video_link[0]->meta_value);
												else :
													$video_url = $video_link[0]->meta_value;
												endif;
										?>
												<li><a id="video-popup-<?php echo $video_counter; ?>" href="" class="icon-link video-link" data-video="<?php echo $video_url; ?>" data-title="<?php echo $events[0]->post_title; ?>"><span class="icon video-icon"></span><span class="label">Watch video</span></a></li>	
										<?php 
											endif;
										?>									
										</ul><?php /* End link-block */ echo "\n"; ?>
										<div class="page-links">
										<?php
											# prepare SQL query for outside link
											$query = "SELECT * FROM {$wpdb->postmeta} WHERE meta_key = 'outside_link' AND meta_value != '' AND post_id = {$events[$x]->ID} ORDER BY meta_value ASC"; 
											$outside_link = $wpdb->get_results( $query );
												
											# show registration button only if registration link exist
											if(isset($outside_link[0]->meta_value) && $outside_link[0]->meta_value != '') : 
										?>
												<a href="<?php echo $outside_link[0]->meta_value; ?>" target="_blank"><?php echo $outside_link[0]->meta_value; ?></a>
										<?php
												$gallery_counter = $gallery_counter + 1;
											endif;
										?>
										</div><?php /* End page-links*/ echo "\n"; ?>
									</div><?php /* End col-md-7 */ ?>
									<div class="col-md-5 col-xs-12">
										<div class="map-wrap">
										<?php
											# prepare SQL query for event image 
											$query = "SELECT guid FROM {$wpdb->postmeta} AS pm INNER JOIN {$wpdb->posts} AS p ON pm.meta_value=p.ID  WHERE pm.post_id = {$events[$x]->ID} AND pm.meta_key = 'image'";
											$event_image_obj = $wpdb->get_results( $query );

											# show image only if image url exist
											if(isset($event_image_obj[0]->guid) && $event_image_obj[0]->guid != '') : 
												# image url 
												$event_image_src = $event_image_obj[0]->guid;
												# split url in paths for checking
												$ext 	= pathinfo($event_image_src, PATHINFO_EXTENSION);
												$fname  = pathinfo($event_image_src, PATHINFO_FILENAME);
												$path   = pathinfo($event_image_src, PATHINFO_DIRNAME);
												# prepare cropped url
												$image_src_cropped = $path.'/'.$fname.'-370x500.'.$ext;
												# check if cropped image exist if not show full image
												if(file_exists($image_src_cropped)) :
													$image_src = $image_src_cropped;
												else :
													$image_src = $event_image_src;
												endif;
										?>
											<img src="<?php echo $image_src; ?>">
										<?php
											else :
												# prepare SQL query for event location
												$query = "SELECT * FROM {$wpdb->postmeta} WHERE meta_key = 'location' AND meta_value != '' AND post_id = {$events[$x]->ID} ORDER BY meta_value ASC"; 
												$location_obj = $wpdb->get_results( $query );
												# create array from WP string
												$location = unserialize($location_obj[0]->meta_value);
										?>
												<div id="map-<?php echo $event_counter; ?>" class="item-map" data-lng="<?php echo $location['lng']; ?>" data-lat="<?php echo $location['lat']; ?>"></div><?php /* End map */ echo "\n"; ?>
										<?php endif; ?>
											</div><?php /* End map-wrap */ ?>
										</div><?php /* End col-md-7 */ ?>
									</div><?php /* End animation-wrap */ ?>
								</div><?php /* End item */ echo "\n"; ?>
							<?php 
									# keep track on event count
									$event_counter = $event_counter + 1;
								endfor; 
								
								/* END EVENT LOOP */
							?>
							</div><?php /* End row */ echo "\n"; ?>
						</div><?php /* End col-md-10 */ echo "\n"; ?>
					</div><?php /* End row */ echo "\n"; ?>
				</div><?php /* End container */ echo "\n"; ?>
			</section><?php /* End event-list */ echo "\n"; ?>
		</div><?php /* End page-events */ echo "\n"; ?>