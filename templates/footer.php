		<footer id="footer">
			<div class="footer-bg"></div>
			<div class="footer-wrap">
				<div class="container">
					<div class="row">
						<div class="col col-1">	
							<div class="col-inner">
								<h3>Contacts</h3>
								<div class="footer-contacts">
									<span>UK: +44 (0)1753 708 951</span>
									<span>Europe: +371 6693 8800</span>
									<span>USA: +1-(650)-681-9710</span>
									<a href="mailto:info@clusterpoint.com">info@clusterpoint.com</a>
								</div><?php /* End footer-contacts */ echo "\n"; ?>
								<div class="footer-copyrights">
									<span>Copyright © Clusterpoint.</span>
									<span>Clusterpoint&trade;  and the Clusterpoint logo are trademarks and tradenames of Clusterpoint Group Limited and may not be reproduced or copied without consent of the owner.</span>
									<span>All Rights Reserved. <a href="<?php echo $base_url; ?>/privacy-policy/">Privacy Policy</a></span>
								</div><?php /* End footer-copyrights */ echo "\n"; ?>
								<div class="newsletter-form">
									<form>
										<div class="form-text">Receive our amazing newsletter. You’ll love it!</div><?php /* End form-text */ echo "\n"; ?>
										<div class="form-input-wrap">
											<input type="text" name="uEmail" value="Your e-mail address" data-value="Your e-mail address">
											<input type="submit" value="Sign Up" class="btn">
											<div class="success-message"><span>Successfully subscribed. Thank you!</span></div><?php /* End success-message */ echo "\n"; ?>
										</div><?php /* End form-input-wrap */ echo "\n"; ?>
										<div class="error-message">Not a valid e-mail address</div><?php /* End error-message */ echo "\n"; ?>
									</form>
								</div><?php /* End newsletter-form */ echo "\n"; ?>
								<div class="social-links">
									<a href="https://www.facebook.com/ClusterpointDB/" class="facebook" target="_blank"><span class="facebook-icon"></span></a>
									<a href="https://twitter.com/clusterpoint" class="twitter" target="_blank"><span class="twitter-icon"></span></a>
								</div>
							</div><?php /* End col-inner */ echo "\n"; ?>
						</div><?php /* End col-1 */ echo "\n"; ?>
						<div class="col col-2">
							<div class="col-inner">
								<div class="col-item col-item-1">
									<h3>DBMS</h3>
									<ul class="links">
										<li><a href="<?php echo $base_url; ?>/product/instantly-scalable">Instantly Scalable</a></li>
										<li><a href="<?php echo $base_url; ?>/product/js-sql-query-language">JS/SQL Query Language</a></li>
										<li><a href="<?php echo $base_url; ?>/product/joins">Joins</a></li>
										<li><a href="<?php echo $base_url; ?>/product/acid-transactions">ACID Transactions</a></li>
										<li><a href="<?php echo $base_url; ?>/product/cost-effectiveness">Cost Effectiveness</a></li>
										<li><a href="<?php echo $base_url; ?>/product/portability">Portability</a></li>
									</ul>	
								</div><?php /* End col-item */ echo "\n"; ?>
								<div class="col-item col-item-2">
									<h3>Pricing</h3>
									<ul class="links">
										<li><a href="<?php echo $base_url; ?>/pricing#cloud-version">Cloud Version</a></li>
										<li><a href="<?php echo $base_url; ?>/pricing#on-premises-version">On-premises Version</a></li>
										<li><a href="<?php echo $base_url; ?>/pricing#application-hosting">Application Hosting</a></li>
									</ul>
								</div><?php /* End col-item */ echo "\n"; ?>
							</div><?php /* End col-inner */ echo "\n"; ?>		
						</div><?php /* End col-2 */ echo "\n"; ?>
						<div class="col col-3">
							<div class="col-inner">
								<div class="col-item col-item-1">
									<h3>Developer Resources</h3>	
									<ul class="links">
										<li><a href="<?php echo $base_url; ?>/resources/faq">FAQ</a></li>
										<li><a href="<?php echo $base_url; ?>/resources/examples-and-tutorials">Examples & Tutorials</a></li>
										<li><a href="<?php echo $base_url; ?>/resources/white-papers">White Papers</a></li>
										<li><a href="https://www.clusterpoint.com/docs/" target="_blank">Documentation</a></li>
									</ul>
								</div><?php /* End col-item */ echo "\n"; ?>
								<div class="col-item col-item-2">
									<h3>For Business</h3>
									<ul class="links">
										<li><a href="<?php echo $base_url; ?>/for-business/onboarding-services">Onboarding Services</a></li>
										<li><a href="<?php echo $base_url; ?>/for-business/ntss-net-security">NTSS - Net Security</a></li>
										<li><a href="<?php echo $base_url; ?>/for-business/gol-log-analytics">GOL - Log Analytics</a></li>
									</ul>
								</div><?php /* End col-item */ echo "\n"; ?>
							</div><?php /* End col-inner */ echo "\n"; ?>
						</div><?php /* End col-3 */ echo "\n"; ?>
						<div class="col col-4">
							<div class="col-inner">
								<div class="col-item col-item-1">
									<h3>Company</h3>
									<ul class="links">
										<li><a href="<?php echo $base_url; ?>/company/about">About</a></li>
										<li><a href="<?php echo $base_url; ?>/company/blog">Blog</a></li>
										<li><a href="<?php echo $base_url; ?>/company/events">Events</a></li>
										<li><a href="<?php echo $base_url; ?>/company/press">Press</a></li>
										<li><a href="<?php echo $base_url; ?>/company/careers">Careers</a></li>
										<li><a href="<?php echo $base_url; ?>/company/partners">Partners</a></li>
									</ul>
								</div><?php /* End col-item */ echo "\n"; ?>
								<div class="col-item col-item-2">
									<h3>Use Cases</h3>
									<ul class="links">
										<li><a href="<?php echo $base_url; ?>/use-cases/real-time-data-warehouse">Real-Time Data Warehouse</a></li>
									</ul>
								</div><?php /* End col-item */ echo "\n"; ?>
							</div><?php /* End col-inner */ echo "\n"; ?>
						</div><?php /* End col-4 */ echo "\n"; ?>
					</div><?php /* End row */ echo "\n"; ?>
				</div><?php /* End wrap */ echo "\n"; ?>
			</div><?php /* End footer-wrap */ echo "\n"; ?>
		</footer>
		
		<script type="text/javascript" src="https://maps.google.com/maps/api/js"></script>

		<!--[if lte IE 8]><script src="<?php echo $base_url; ?>/assets/js/ie/respond.min.js"></script><![endif]-->
		<script type="text/javascript" src="<?php echo $base_url; ?>/assets/js/jquery.isonscreen.min.js"></script>
		<script type="text/javascript" src="<?php echo $base_url; ?>/assets/js/scrollreveal.min-3.js"></script>
		<script type="text/javascript" src="<?php echo $base_url; ?>/assets/js/jquery.gmaps.min.js"></script>
		<script type="text/javascript" src="<?php echo $base_url; ?>/assets/js/jquery.magnific-popup.min.js"></script>
		<script type="text/javascript" src="<?php echo $base_url; ?>/assets/js/jquery.fastclick.min.js"></script>
		<script type="text/javascript" src="<?php echo $base_url; ?>/assets/js/jquery.detectmobilebrowsers.js"></script>
		<script type="text/javascript" src="<?php echo $base_url; ?>/assets/js/jquery.cookie.js"></script>
		<?php
			// Page specific scripts 
			if(isset($template_name) && $template_name == 'frontpage-template') : 
				echo '<script type="text/javascript" src="'.$base_url.'/assets/js/owl.carousel.min.js"></script>';
				echo '<script type="text/javascript" src="'.$base_url.'/assets/js/jquey.fitvids.js"></script>';
			endif;
			
			if(isset($params[1]) && $params[1] == 'pricing') : 
				echo '<script type="text/javascript" src="'.$base_url.'/assets/js/jquery.nouislider.min.js"></script>';
			endif;
		?>
		
		<?php if($single) : ?>
		<script type="text/javascript" src="<?php echo $base_url; ?>/assets/js/prism.js" data-manual></script>
		<?php endif; ?>
		<script> 
			var baseUrl = "<?php echo $base_url; ?>",
				open_popup = false;
			<?php if(isset($_GET['download'])) : ?>
				open_popup = true;
			<?php endif; ?> 
		</script>
		<script type="text/javascript" src="<?php echo $base_url; ?>/assets/js/main.js"></script>
		<?php if(isset($params[2]) && $params[2] == 'cost-effectiveness') : ?>
		<script type="text/javascript" src="<?php echo $base_url; ?>/assets/js/raphael-min.js"></script>
		<script type="text/javascript" src="<?php echo $base_url; ?>/assets/animations/cost-effective/graph-animation.js"></script>
		<script type="text/javascript" src="<?php echo $base_url; ?>/assets/animations/cost-effective/graph-animation-2.js"></script>
		<script type="text/javascript" src="<?php echo $base_url; ?>/assets/animations/cost-effective/graph-animation-3.js"></script>
		<?php endif; ?>
		
		<?php if(isset($template_name) && $template_name == 'frontpage-template') : ?>
		<script type="text/javascript">
			$(function() {				
            	var elm = '.carousel'; //your slider class
            	
				$(elm).owlCarousel({
					items:1,
					autoHeight:true,
					nav:true,
					animateOut: 'owl-fade-out',
					animateIn: 'owl-fade-in',
					smartSpeed: 150,
					mouseDrag: false,
					navText : ['<span class="arrow-left"></span>','<span class="arrow-right"></span>']
				});
				function toggleArrows(){ 
	                if($(elm).find(".owl-item").last().hasClass('active') && $(elm).find(".owl-item.active").index() == $(elm).find(".owl-item").first().index()){                       
	                    $(elm).find('.owl-nav .owl-next').addClass("off");
	                    $(elm).find('.owl-nav .owl-prev').addClass("off"); 
	                }
	                //disable next
	                else if($(elm).find(".owl-item").last().hasClass('active')){
	                    
	                    $(elm).find('.owl-nav .owl-next').addClass("off");
	                    $(elm).find('.owl-nav .owl-prev').removeClass("off"); 
	                }
	                //disable previus
	                else if($(elm).find(".owl-item.active").index() == $(elm).find(".owl-item").first().index()) {
	                   
	                    $(elm).find('.owl-nav .owl-next').removeClass("off"); 
	                    $(elm).find('.owl-nav .owl-prev').addClass("off");
	                }
	                else {
		                
	                    $(elm).find('.owl-nav .owl-next,.owl-nav .owl-prev').removeClass("off");  
	                }
	            }
	            
	            $(elm).find('.owl-nav .owl-prev').addClass("off");
	            if($('.carousel .owl-item').length == 1) {
	           		$(elm).find('.owl-nav .owl-next').addClass("off");
				}
            	//turn off buttons if last or first - after change
	            //$(elm).on('initialized.owl.carousel', function (event) { toggleArrows(); });
            	$(elm).on('translated.owl.carousel', function (event) { toggleArrows(); });
            	
			});

			var animUrl = '<?php echo $base_url; ?>/assets/animations/',
				loadedComps = {};
				
				// Only if not touch device
				if($('html').hasClass('no-touchevents') && !$('html').hasClass('no-cssanimations') && !isMobile.any) {

					if (<?php echo $home_animation; ?>) {
						AdobeEdge.loadComposition(animUrl+'home_<?php echo $home_animation; ?>/home_<?php echo $home_animation; ?>', 'home_<?php echo $home_animation; ?>', {
							scaleToFit: "none",
							centerStage: "horizontal",
							minW: "0px",
							maxW: "undefined",
							width: "980px",
							height: "390px"
						}, {"dom":{}}, {"dom":{}});
					}
					
					AdobeEdge.loadComposition(animUrl+'home_small_1/home_small_1', 'home_small_1', {
					    scaleToFit: "none",
					    centerStage: "horizontal",
					    minW: "0px",
					    maxW: "undefined",
					    width: "177px",
					    height: "86px"
					}, {"dom":{}}, {"dom":{}});
					

					AdobeEdge.loadComposition(animUrl+'home_small_2/home_small_2', 'home_small_2', {
					    scaleToFit: "none",
					    centerStage: "horizontal",
					    minW: "0px",
					    maxW: "undefined",
					    width: "177px",
					    height: "90px"
					}, {"dom":{}}, {"dom":{}});
					

					AdobeEdge.loadComposition(animUrl+'home_small_3/home_small_3', 'home_small_3', {
					    scaleToFit: "none",
					    centerStage: "horizontal",
					    minW: "0px",
					    maxW: "undefined",
					    width: "177px",
					    height: "90px"
					}, {"dom":{}}, {"dom":{}});
					
					AdobeEdge.loadComposition(animUrl+'home_small_4/home_small_4', 'home_small_4', {
					    scaleToFit: "none",
					    centerStage: "horizontal",
					    minW: "0px",
					    maxW: "undefined",
					    width: "177px",
					    height: "90px"
					}, {"dom":{}}, {"dom":{}});
			
					
					var squares = {
					  origin   : "bottom",
					  distance : "20px",
					  duration : 800,
					  delay    : 0,
					  viewFactor : 0.10,
					  scale    : 0,
					  easing   : 'ease'
					};
					

					
								
					AdobeEdge.bootstrapCallback(function(compId) {
						loadedComps[compId] = AdobeEdge.getComposition(compId);
						
						if(compId == 'home_<?php echo $home_animation; ?>') {
							var $el_1 = $('.home_<?php echo $home_animation; ?>');
			
								function playHero() {
									if($el_1.isOnScreen(0.1, 0)) {
										if(!$el_1.hasClass('play-animation')) { 
											$el_1.addClass('play-animation');
											$('.home_<?php echo $home_animation; ?>').css('opacity', 1);
											loadedComps['home_<?php echo $home_animation; ?>'].getStage().play(1);
										}
										
										//setTimeout(function(){														
/*
											$('.home_<?php echo $home_animation; ?>').animate({opacity:'1'},250,function() {
												
											});
*/
										//}, 100);
									}
								}
								
								sr.reveal(".hero-animation", { mobile : false, viewFactor : 0.01, origin : "top", distance : "2vw", duration : 400, scale : 0, mobile: true, easing : 'ease', afterReveal : function( domEl ){
								}});
										
								$(window).on('scroll',function() {
									playHero();
								});
										
								playHero();
																
						}
						if(compId == 'home_small_1') {
							var comp_2 = AdobeEdge.getComposition('home_small_1'),
								$el_2 = $('.home_small_1');
		
								function playSmall1() {
									$el_2.addClass('play-animation');
									loadedComps['home_small_1'].getStage().play(1);
								}

								sr.reveal(".square-1",{ mobile : false, delay: 0, afterReveal : function( domEl ){
									playSmall1();
								}});
						}
						
						if(compId == 'home_small_2') {
							var comp_3 = AdobeEdge.getComposition('home_small_2'),
								$el_3 = $('.home_small_2');
				
			
								function playSmall2() {
									$el_3.addClass('play-animation');
									loadedComps['home_small_2'].getStage().play(1);
								}
								
								sr.reveal(".square-2",{ mobile : false, delay: 0, afterReveal : function( domEl ){
									playSmall2();
								}});
								
						}
						
						if(compId == 'home_small_3') {
							var comp_4 = AdobeEdge.getComposition('home_small_3'),
								$el_4 = $('.home_small_3');
									
								function playSmall3() {
									$el_4.addClass('play-animation');
									loadedComps['home_small_3'].getStage().play(1);
								}
								
								sr.reveal(".square-3",{ mobile : false, delay: 0, afterReveal : function( domEl ){
									playSmall3();
								}});
						}
						
						if(compId == 'home_small_4') {
							var comp_5 = AdobeEdge.getComposition('home_small_4'),
								$el_5 = $('.home_small_4');
			
								function playSmall4() {
									$el_5.addClass('play-animation');
									loadedComps['home_small_4'].getStage().play(1);
								}
								
								sr.reveal(".square-4",{ mobile : false, delay: 0, afterReveal : function( domEl ){
									playSmall4();
								}});
						}
					});
					
					var video_url = '<?php echo $video_url; ?>';
						$('#video .overlay-image').click(function() {
							$('#video iframe').attr('src', video_url+'&autoplay=1');
							$("#video .inner").fitVids();
							$('#video .overlay-image').animate({opacity:'0'},250,function() {
								$('#video .overlay-image').remove();
							});
						});
				} else {
					$('.animation-fallback').addClass('show');
				}
		</script>
		
		<?php endif; ?>
		<?php /* START GOOGLE ANALYTICS */ ?>
		<script type="text/javascript">
		(function (i, s, o, g, r, a, m) {i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () { (i[r].q = i[r].q || []).push(arguments) }, i[r].l = 1 * new Date(); a = s.createElement(o), m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m) })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga'); ga('create', 'UA-151989-4', 'auto'); ga('send', 'pageview');
		</script>
		<?php /* END GOOGLE ANALYTICS */ ?>
		
		<div style="display:inline; position: absolute; top:0; visibility: hidden; left: 0;"><img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/982048243/?label=5BojCMHcgVoQ87uj1AM&amp;guid=ON&amp;script=0"/></div><?php echo "\n"; ?>

		
		<?php /* START PIWIK */ ?>
		<script type="text/javascript">
		var _paq = _paq || []; _paq.push(['setDomains', '*.clusterpoint.com']); _paq.push(['setCookieDomain', '*.clusterpoint.com']); _paq.push(['storeCustomVariablesInCookie']); _paq.push(['enableLinkTracking']); _paq.push(['setDocumentTitle', document.domain + "/" + document.title]); _paq.push(['trackPageView']); // Track visit, page not yet loaded
		(function () { 
			var u = (("https:" == document.location.protocol) ? "https" : "http") + "://stats.clusterpoint.com/"; 
			_paq.push(['setTrackerUrl', u + 'piwik.php']);
			// Send debug and ourselves away
			if (location.hostname.search(/(www|cloud-(eu|us))\.clusterpoint\.com/) > -1) { _paq.push(['setSiteId', 1]); // Production
			} else {
				_paq.push(['setSiteId', 2]); // Test clouds
			}
			var d = document, g = d.createElement('script'), s = d.getElementsByTagName('script')[0];
			g.type = 'text/javascript';
			g.async = true;
			g.defer = true;
			g.src = u + 'piwik.js';
			s.parentNode.insertBefore(g, s);
		})();
		</script>
		<?php /* END PIWIK */ ?>

		<?php /* START ZOPIM */ ?>
		<script type="text/javascript">
		window.$zopim || (function(d, s) {
		    var z = $zopim = function(c) {
		            z._.push(c)
		        },
		        $ = z.s =
		        d.createElement(s),
		        e = d.getElementsByTagName(s)[0];

		    z.set = function(o) {
		        z.set.
		        _.push(o)
		    };

		    z._ = [];
		    z.set._ = [];
		    $.async = !0;
		    $.setAttribute("charset", "utf-8");
		    $.src = "//v2.zopim.com/?323k22sVZiWAauATRRHXuyROUlFSig0x";
		    z.t = +new Date;
		    $.
		    type = "text/javascript";
		    e.parentNode.insertBefore($, e)
		})(document, "script");
		</script>
		<?php /* END ZOPIM */ ?>
	</body>
</html>