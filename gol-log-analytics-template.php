		<?php
			# prepare title
			$title = 'Clusterpoint GOL - fast log data analytics & search application software'; 
			# wrap every word in title with span
			$title_array = explode(" ", $title);
			$title = '';
			foreach($title_array as $title_item) : 
				if($title_item == 'data') :
					$title .= '<span>'.$title_item.'</span><br/>';
				else :
					$title .= '<span>'.$title_item.'</span>';
				endif; 
			endforeach;
		?> 
		<div id="page-gol-log-analytics" class="page-wrap">
			<section id="hero" data-ch="keep-14">
				<div class="container">
					<div class="row">
						<div class="col-lg-10 col-md-12 col-xs-10 center-block">
							<div class="row">
								<h1 class="el-animation"><?php echo $title; ?></h1>
								<h2 class="section-subtitle"><span class="el-animation">Save your time with sub-second search and query latency in billions of log data records!</span></h2>
							</div><?php /* End row */ echo "\n"; ?>
						</div><?php /* End col-lg-10 */ echo "\n"; ?>
					</div><?php /* End row */ echo "\n"; ?>
				</div><?php /* End container */ echo "\n"; ?>
			</section><?php /* End hero */ echo "\n"; ?>	
			<section id="" class="white-block white-before content el-animation">
				<div class="container" data-ch="true">
					<div class="row">
						<div class="col-lg-8 col-md-12 col-xs-12 center-block">
							<p>GOL is a cost-efficient solution for large-scale log data collection, high-speed search & visual analytics, which is powered by Clusterpoint database. GOL application software enables very fast log data analysis, such as detecting security breaches, application-related problem detection, log access in real-time, spotting of technical problems in network or server systems etc. </p>
							<div class="content-img-wrap"><img src="<?php echo $base_url; ?>/assets/images/gol-log-analytics/gol_screen_full.png" alt=""></div>
							<p>GOL is massively scalable in a pool of inexpensive cluster equipment, complete with an open API and open database format. It allows our customers to store log data for long term using cross-platform, absolutely interoperable with any 3rd party software, industry standard XML, while performance problem is taken care by Clusterpoint DBMS with its built-in ultra-fast enterprise search engine. </p>
						</div><?php /* End col-lg-8 */ echo "\n"; ?>
					</div><?php /* End row */ echo "\n"; ?>
				</div><?php /* End container */ echo "\n"; ?>
			</section>
			<section id="gol-components" class="no-background content">
				<div class="container el-animation">
					<div class="row">
						<div class="col-lg-8 col-md-12 col-xs-12 center-block" data-ch="true">
							<h3><span>GOL components</span></h3>
							<ul class="component-list">
								<li><div class="inner white-before" data-ch="keep-14"><span class="purple">golLoader</span> - log data loading and forwarding utility.</div></li>
								<li><div class="inner white-before" data-ch="keep-14"><span class="purple">goldb</span> - a consolidated customer log database, based on Clusterpoint Server software - scalable NoSQL document-oriented XML database with open API.</div></li>
								<li><div class="inner white-before" data-ch="keep-14"><span class="purple">gol (web application)</span> - for log event search and access of all GOL features and benefits through webGUI.</div></li>
								<li><div class="inner white-before" data-ch="keep-14"><span class="purple">Optional components</span> - 3rd party apps for additional log data analytics, reporting and BI.</div></li>
							</ul>
						</div><?php /* End col-lg-8 */ echo "\n"; ?>
					</div><?php /* End row */ echo "\n"; ?>
				</div><?php /* End container */ echo "\n"; ?>
			</section>
			<section id="gol-reasons" class="white-block white-before content" data-ch="true">
				<div class="container el-animation">
					<div class="row">
						<div class="col-lg-10 col-md-12 col-xs-12 center-block">
							<div class="row">
							<h3><span>Reasons why our customers prefer GOL<br/> to other log analytics software:</span></h3>
							<ul class="reason-list">
								<li>
									<div class="animation-wrap">
										<div class="animation">
											<img src="<?php echo $base_url; ?>/assets/images/gol-log-analytics/gol-small-1.svg" alt="" width="125" height="64">
										</div><?php /* End animation */ echo "\n"; ?>
									</div><?php /* End animation-wrap */ echo "\n"; ?>
									<div class="text">LOG DATA ANALYTICS THROUGH INTERACTIVE VISUALIZATIONS</div>
								</li>
								<li>
									<div class="animation-wrap">
										<div class="animation">
											<img src="<?php echo $base_url; ?>/assets/images/gol-log-analytics/gol-small-2.svg" alt="" width="125" height="64">
										</div><?php /* End animation */ echo "\n"; ?>
									</div><?php /* End animation-wrap */ echo "\n"; ?>
									<div class="text">FACETED NAVIGATION</div>
								</li>
								<li>
									<div class="animation-wrap">
										<div class="animation">
											<img src="<?php echo $base_url; ?>/assets/images/gol-log-analytics/gol-small-3.svg" alt="" width="125" height="64">
										</div><?php /* End animation */ echo "\n"; ?>
									</div><?php /* End animation-wrap */ echo "\n"; ?>
									<div class="text">DASHBOARDS FOR REAL-TIME LOG DATA MONITORING</div>
								</li>
								<li>
									<div class="animation-wrap">
										<div class="animation">
											<img src="<?php echo $base_url; ?>/assets/images/gol-log-analytics/gol-small-4.svg" alt="" width="125" height="64">
										</div><?php /* End animation */ echo "\n"; ?>
									</div><?php /* End animation-wrap */ echo "\n"; ?>
									<div class="text">AUTOMATIC ALERTS FOR CRUCIAL LOG EVENTS</div>
								</li>
								<li>
									<div class="animation-wrap">
										<div class="animation">
											<img src="<?php echo $base_url; ?>/assets/images/gol-log-analytics/gol-small-5.svg" alt="" width="125" height="64">
										</div><?php /* End animation */ echo "\n"; ?>
									</div><?php /* End animation-wrap */ echo "\n"; ?>
									<div class="text">DEFINE AND MAINTAIN SEARCH EXPRESSIONS</div>
								</li>
								<li>
									<div class="animation-wrap">
										<div class="animation">
											<img src="<?php echo $base_url; ?>/assets/images/gol-log-analytics/gol-small-6.svg" alt="" width="125" height="64">
										</div><?php /* End animation */ echo "\n"; ?>
									</div><?php /* End animation-wrap */ echo "\n"; ?>
									<div class="text">BUILD YOUR OWN <br/> REPORTS AND APPS</div>
								</li>
							</ul>
							
								<div class="schema">
									<div class="animation-wrap">
										<div class="animation">
											<div id="Stage" class="gol-schema">
										        <div id="Stage_p-2-b2" class="edgeLoad-gol-schema"></div>
										        <div id="Stage_p-2-t2" class="edgeLoad-gol-schema"></div>
										        <div id="Stage_p-2-b" class="edgeLoad-gol-schema"></div>
										        <div id="Stage_p-2-t" class="edgeLoad-gol-schema"></div>
										        <div id="Stage_p-1-b" class="edgeLoad-gol-schema"></div>
										        <div id="Stage_p-1-t" class="edgeLoad-gol-schema"></div>
										        <div id="Stage_cil-2" class="edgeLoad-gol-schema"></div>
										        <div id="Stage_cil-12" class="edgeLoad-gol-schema"></div>
										        <div id="Stage_cil-222" class="edgeLoad-gol-schema"></div>
										        <div id="Stage_cil-13" class="edgeLoad-gol-schema"></div>
										        <div id="Stage_c-3-b" class="edgeLoad-gol-schema"></div>
										        <div id="Stage_c-3-t" class="edgeLoad-gol-schema"></div>
										        <div id="Stage_c-2-b" class="edgeLoad-gol-schema"></div>
										        <div id="Stage_c-2-t" class="edgeLoad-gol-schema"></div>
										        <div id="Stage_c-1-b" class="edgeLoad-gol-schema"></div>
										        <div id="Stage_c-1-t2" class="edgeLoad-gol-schema"></div>
										        <div id="Stage_arrow-left" class="edgeLoad-gol-schema"></div>
										        <div id="Stage_arrow-right" class="edgeLoad-gol-schema"></div>
										        <div id="Stage_box-2" class="edgeLoad-gol-schema"></div>
										        <div id="Stage_xml" class="edgeLoad-gol-schema"></div>
										        <div id="Stage_api" class="edgeLoad-gol-schema"></div>
										        <div id="Stage_points-top" class="edgeLoad-gol-schema"></div>
										        <div id="Stage_points-botttom" class="edgeLoad-gol-schema"></div>
										        <div id="Stage_arrow-right2" class="edgeLoad-gol-schema"></div>
										        <div id="Stage_arrow-left2" class="edgeLoad-gol-schema"></div>
										        <div id="Stage_disk3" class="edgeLoad-gol-schema"></div>
										        <div id="Stage_disk2" class="edgeLoad-gol-schema"></div>
										        <div id="Stage_disk" class="edgeLoad-gol-schema"></div>
										        <div id="Stage_golDB" class="edgeLoad-gol-schema"></div>
										    </div><?php /* End stage */ echo "\n"; ?>
											<div class="animation-fallback">
													<img class="golDB-image" src="<?php echo $base_url; ?>/assets/animations/gol-schema/fallback/gol-schema.svg" width="611" height="210">
											</div><?php /* End front-page-animations */ echo "\n"; ?>
										</div><?php /* End animation */ echo "\n"; ?>
									</div><?php /* End animation-wrap */ echo "\n"; ?>
								</div><?php /* End schema */ echo "\n"; ?>
							
								<p>Interested to find out more about GOL suitability for your company needs? <br/>Contact our <a href="mailto:sales@clusterpoint.com">sales department</a> or visit <a href="http://www.clusterpark.com" target="_blank">www.clusterpark.com</a></p>
							
							</div><?php /* End row */ echo "\n"; ?>
						</div><?php /* End col-md-10 */ echo "\n"; ?>
					</div><?php /* End row */ echo "\n"; ?>
				</div><?php /* End container */ echo "\n"; ?>
			</section>
			<section id="request-consultation" data-ch="true">
				<div class="container">
					<div class="row el-animation">
						<div class="col-lg-10 col-md-12 col-xs-12 section-title-wrap center-block" data-ch="true">
							<div class="inner">
								<h2 class="section-title"><span>Let's take a first step!</span></h2>
								<h3 class="section-subtitle"><span>Request a free consultation</span></h3>
							</div><?php /* End inner */ echo "\n"; ?>
						</div><?php /* End section-title-wrap */ echo "\n"; ?>
						<div class="col-lg-8 col-md-12 col-xs-12 center-block el-animation">
						<?php
							#contact form
							include("templates/contact-form.php");
						?>	
						</div><?php /* End col-md-8 */ echo "\n"; ?>
					</div><?php /* End row */ echo "\n"; ?>
				</div><?php /* End container */ echo "\n"; ?>
			</section>	
		</div><?php /* End page-onboarding-services */ echo "\n"; ?>
	<script>
		var animUrl = '<?php echo $base_url; ?>/assets/animations/gol-schema/',
			loadedComps = {};
			
			if($('html').hasClass('no-touchevents') && !$('html').hasClass('no-cssanimations')) {
				AdobeEdge.loadComposition(animUrl+'/gol-schema', 'gol-schema', {
				    scaleToFit: "none",
				    centerStage: "none",
				    minW: "0px",
				    maxW: "undefined",
				    width: "611px",
				    height: "210px"
				}, {"dom":{}}, {"dom":{}});
				
				AdobeEdge.bootstrapCallback(function(compId) {
					loadedComps[compId] = AdobeEdge.getComposition(compId);
					
					if(compId == 'gol-schema') {
						var $el = $('.gol-schema');
									
							function golSchema() {
								if($el.isOnScreen(0.5,0)) {
									if(!$el.hasClass('play-animation')) {
										$el.addClass('play-animation');
										setTimeout(function() {
											loadedComps['gol-schema'].getStage().play(1);
										}, 250);
									}
								}
							}
							
							$(window).on('scroll',function() {
								golSchema();
							});
										
							golSchema();
					}
				});
			} else {
				$('.animation-fallback').addClass('show');
			}
	</script>
