		<div id="page-onboarding-services" class="page-wrap">
			<section id="hero" data-ch="keep-14">
				<div class="container">
					<div class="row">
						<div class="col-lg-10 col-sm-12 center-block">
							<div class="row">
								<h1><span class="el-animation">Onboarding Services</span></h1>
							</div><?php /* End row */ echo "\n"; ?>
						</div><?php /* End col-lg-10 */ echo "\n"; ?>
					</div><?php /* End row */ echo "\n"; ?>
				</div><?php /* End container */ echo "\n"; ?>
			</section><?php /* End hero */ echo "\n"; ?>	
			<section id="" class="white-block white-before" data-ch="true">
				<div class="animation-wrap el-animation">
				<div class="container">
					<div class="row">
						<div class="col-lg-10 col-sm-10 col-xs-10 center-block">
							<div class="row">
								<p>Contact us to find out how to reduce database TCO up to 80% with Clusterpoint</p>
							</div><?php /* End row */ ?>
						</div><?php /* End col-lg-10 */ ?>
						<div class="col-sm-12 col-xs-12 service-list">
							<?php
								$services_array = array(
									array("id" => 1, "title" => "Free consultation", "text" => "We will introduce you to Clusterpoint possibilities, and create a vision on how your business could benefit from Clusterpoint the most."),
									array("id" => 2, "title" => "Onboarding services", "text" => "A custom built Proof-Of-Concept with your sample data and Clusterpoint — see your data in action. We work under NDA to maintain your data confidentiality."),
									array("id" => 3, "title" => "Custom integrations", "text" => "Once you have a prototype app ready, it is time to integrate it with your live data sources."),
									array("id" => 4, "title" => "Integration audit", "text" => "Let’s audit your Clusterpoint integration to make sure that it has been done according to best practices and that you are taking most out of Clusterpoint."),
									array("id" => 5, "title" => "User training", "text" => "When everything is set-up we will be honored to provide a training at your premises or online."),
									array("id" => 6, "title" => "Maintenance services", "text" => "After we’ve got you going, we’ll keep taking good care of you.")
								);
								foreach($services_array as $service) :
							?>
							<div class="col-lg-4 col-md-6 col-xs-6 service" data-ch="true">
								<div class="number-wrap">
									<div class="number"><?php echo $service["id"]; ?></div><?php /* End number */ echo "\n"; ?>
									<div class="number-bg"></div><?php /* End number-bg */ echo "\n"; ?>
								</div><?php /* End number-wrap */ echo "\n"; ?>
								<h3><?php echo $service["title"]; ?></h3>
								<div class="text"><?php echo $service["text"]; ?></div><?php /* End text */ echo "\n"; ?>
							</div><?php /* End col-lg-4 */ echo "\n"; ?>
						<?php endforeach; ?>
						</div><?php /* End col-lg-12 */ echo "\n"; ?>
					</div><?php /* End row */ echo "\n"; ?>
				</div><?php /* End container */ echo "\n"; ?>
				</div><?php /* End animation-wrap */ ?>
			</section>
			<section id="onboarding-contact-form">
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
			</section><?php /* End about-contact-form */ echo "\n"; ?>
			<section id="enviroment" class="grey-block" data-ch="true">
				<div class="container">
					<div class="row">
						<div class="col-lg-10 col-md-12 section-title-wrap center-block el-animation">
							<h2 class="section-title"><span>Your current infrastructure stays untouched</span></h2>
							<h3 class="section-subtitle"><span>Onboarding service will provide you with demo of the potential<br/> value added to your project or business application</span></h3>
							<div class="animation-wrap">
								<div class="animation">
									<div id="Stage" class="onboarding-small hide-touch-devices">
								        <div id="Stage_disk2" class="edgeLoad-onboarding-small"></div>
								        <div id="Stage_check" class="edgeLoad-onboarding-small"></div>
								    </div><?php /* End stage */ echo "\n"; ?>
								<div class="animation-fallback">
									<img src="<?php echo $base_url; ?>/assets/animations/onboarding-small/fallback/onboarding-small.svg" width="204" height="126">
								</div><?php /* End front-page-animations */ echo "\n"; ?>
								</div><?php /* End animation */ echo "\n"; ?>
							</div><?php /* End animation-wrap */ echo "\n"; ?>
						</div><?php /* End section-title-wrap */ echo "\n"; ?>
					</div><?php /* End row */ echo "\n"; ?>
				</div><?php /* End container */ echo "\n"; ?>
			</section><?php /* End enviroment */ echo "\n"; ?>	
			<section id="companies" class="white-block white-before">
				<div class="container" data-ch="true">
					<div class="row">
						<h2 class="section-title el-animation"><span>Clusterpoint technology is already being used <br/> by many notable companies</span></h2>
						<div class="logo-row el-animation">
							<div class="logo-wrap">
								<div class="inner">
									<img src="<?php echo $base_url; ?>/assets/images/frontpage/company/lattelecom.svg" class="svg-image"> 
									<img src="<?php echo $base_url; ?>/assets/images/frontpage/company/fallback/lattelecom.png" class="png-image">
								</div><?php /* End inner */ echo "\n"; ?>
							</div><?php /* End logo-wrap */ echo "\n"; ?>
								<div class="logo-wrap">
									<div class="inner">
										<img src="<?php echo $base_url; ?>/assets/images/frontpage/company/informacijas-talrunis.svg" class="svg-image"> 
										<img src="<?php echo $base_url; ?>/assets/images/frontpage/company/fallback/informacijas-talrunis.png" class="png-image">
									</div><?php /* End inner */ echo "\n"; ?>
								</div><?php /* End logo-wrap */ echo "\n"; ?>
						</div><?php /* End logo-row */ echo "\n"; ?>
					</div><?php /* End row */ echo "\n"; ?>
				</div><?php /* End container */ echo "\n"; ?>
			</section><?php /* End enviroment */ echo "\n"; ?>	
			<section id="onboarding-sign-up" class="grey-block">
				<div class="container" data-ch="true">
					<div class="row">
						<div class="col-lg-8 col-md-12 col-xs-12 center-block">
							<div class="animation-wrap el-animation">
								<h2 class="section-title"><span>Clusterpoint can help you to speed <br/>up your data processing!</span></h2>
							</div><?php /* End animation-wrap */ echo "\n"; ?>
							<div class="button-wrap center-block table el-animation">
								<div class="button-inner-wrap">
									<div class="buttons">
										<a href="<?php echo $sign_up_url; ?>" class="btn btn-red"><span class="button-label">Try Clusterpoint Now</span><span class="button-arrow">→</span></a>
									</div><?php /* End buttons */ echo "\n"; ?>
									<div class="button-text">Comes FREE with 10GB</div><?php /* End button-text */ echo "\n"; ?>
								</div><?php /* End button-inner-wrap */ echo "\n"; ?>
							</div><?php /* End button-wrap */ echo "\n"; ?>
						</div><?php /* End col-md-8 */ echo "\n"; ?>
					</div><?php /* End row */ echo "\n"; ?>
				</div><?php /* End container */ echo "\n"; ?>
			</section><?php /* End about-contact-form */ echo "\n"; ?>
		</div><?php /* End page-onboarding-services */ echo "\n"; ?>
		<script>
			var animUrl = '<?php echo $base_url; ?>/assets/animations/onboarding-small/',
				loadedComps = {};
			
				if($('html').hasClass('no-touchevents') && !$('html').hasClass('no-cssanimations')) {
					AdobeEdge.loadComposition(animUrl+'/onboarding-small', 'onboarding-small', {
					    scaleToFit: "none",
					    centerStage: "horizontal",
					    minW: "0px",
					    maxW: "undefined",
					    width: "203px",
					    height: "136px"
					}, {"dom":{}}, {"dom":{}});
						
					AdobeEdge.bootstrapCallback(function(compId) {
						loadedComps[compId] = AdobeEdge.getComposition(compId);
						
						if(compId == 'onboarding-small') {
							var $el = $('.onboarding-small');
									
								function onboardingSmall() {
									if($el.isOnScreen()) {
										if(!$el.hasClass('play-animation')) {
											$el.addClass('play-animation');
											loadedComps['onboarding-small'].getStage().play(1);
										}
									}
								}
								
								$(window).on('scroll',function() {
									onboardingSmall();
								});
										
								onboardingSmall();
						}
					});
				} else {
					$('.animation-fallback').addClass('show');
				}
		</script>