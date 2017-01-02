		<div id="page-joins" class="page-wrap">
			<section id="animation" data-ch="true">
				<div class="bg">
					<div id="Stage" class="joins joins-animation hide-touch-devices" style="opacity:0, filter:alpha(opacity=0);">
				        <div id="Stage_line-left-dotted-top" class="edgeLoad-joins"></div>
				        <div id="Stage_line-left-dotted-bottom" class="edgeLoad-joins"></div>
				        <div id="Stage_left-circle-big" class="edgeLoad-joins"></div>
				        <div id="Stage_left-circle-small" class="edgeLoad-joins"></div>
				        <div id="Stage_line-fix" class="edgeLoad-joins"></div>
				        <div id="Stage_left-small-line-1" class="edgeLoad-joins"></div>
				        <div id="Stage_disk" class="edgeLoad-joins"></div>
				        <div id="Stage_disk-line" class="edgeLoad-joins"></div>
				        <div id="Stage_disk-3" class="edgeLoad-joins"></div>
				        <div id="Stage_disk-2" class="edgeLoad-joins"></div>
				        <div id="Stage_disk-3-line" class="edgeLoad-joins"></div>
				        <div id="Stage_disk-4" class="edgeLoad-joins"></div>
				        <div id="Stage_line-2-fix" class="edgeLoad-joins"></div>
				        <div id="Stage_line-dottedr" class="edgeLoad-joins"></div>
				        <div id="Stage_disk-5" class="edgeLoad-joins"></div>
				        <div id="Stage_disk-line2" class="edgeLoad-joins"></div>
				    </div><?php /* End stage */ echo "\n"; ?>
				    <div class="animation-fallback">
					    <img src="<?php echo $base_url; ?>/assets/images/joins/joins-animation.svg" />
				    </div><?php /* End animation-fallback */ echo "\n"; ?>
				</div><?php /* End bg */ echo "\n"; ?>
				<div class="container">
					<div class="row">
						<div class="col-md-10 col-xs-10 center-block">
							<div class="row">
								<h1 class="el-animation">Joins</h1>
								<div class="text el-animation">
									<p>To join information across multiple data objects, we have introduced a feature often ignored by other NoSQL databases. It is Joins.</p>
								</div><?php /* End text */ echo "\n"; ?>
							</div><?php /* End row */ echo "\n"; ?>
						</div><?php /* End col-md-12 */ echo "\n"; ?>
					</div><?php /* End row */ echo "\n"; ?>
				</div><?php /* End container */ echo "\n"; ?>
			</section><?php /* End animation */ echo "\n"; ?>
			<section id="joins-content" data-ch="true">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-xs-12 center-block">
							<div class="content el-animation">
								<p>In addition, we provide efficient document model. Our users can store data in JSON or XML format and at query time JavaScript can access field of a stored documents like they were variables in local scope.</p>
								<p>For many use cases it is important to join information across multiple data objects. Clusterpoint joins make that possible. Further Clusterpoint joins are really simple to use - like in ANSI-SQL. Refer to <a href="https://www.clusterpoint.com/docs/4.0/12/joins" target="_blank">documentation</a> about more information on how to use the joins.</p>
							</div><?php /* End content */ ?>
						</div><?php /* End col-md-8 */ echo "\n"; ?>
					</div><?php /* End row */ echo "\n"; ?>
				</div><?php /* End container */ echo "\n"; ?>
			</section><?php /* End joins-content */ echo "\n"; ?>
			<?php
				#sign-up block
				include("templates/signup-block.php");
			?>	
		</div><?php /* End page-wrap */ echo "\n"; ?>
		
		<script>
			var animUrl = '<?php echo $base_url; ?>/assets/animations/joins/',
				loadedComps = {};
				if($('html').hasClass('no-touchevents') && !$('html').hasClass('no-cssanimations')) {
					AdobeEdge.loadComposition(animUrl+'joins', 'joins', {
						scaleToFit: "none",
						centerStage: "horizontal",
						minW: "0px",
						maxW: "undefined",
						width: "1261px",
						height: "582px"
					}, {"dom":{}}, {"dom":{}});
					
					AdobeEdge.bootstrapCallback(function(compId) {
						loadedComps[compId] = AdobeEdge.getComposition(compId);
						
						if(compId == 'joins') {
							var $el = $('.joins-animation');
										
								function playJoins() {
									if($el.isOnScreen(0.3, 0.3)) {
										if(!$el.hasClass('play-animation')) {
											$el.addClass('play-animation');
											setTimeout(function(){
												$('.joins').animate({opacity:'1'},700,function() {
													loadedComps['joins'].getStage().play(1);
												});
											}, 100);
										}
									}
								}
								
								$(window).on('scroll',function() {
									playJoins();
								});
										
								playJoins();
						}
					});
				} else {
					$('.animation-fallback').addClass('show');
				}
		</script>