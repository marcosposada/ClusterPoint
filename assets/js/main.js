var scrollPosY;

/* Start slider variables */

// Calculator
var calculator 				= $('#pricing_calculator'),
	slider_ram 				= 0.5, // GB
	slider_disk				= 10, // GB
	slider_traffic 			= 10; // GB

// Prices
var ram_price 				= 12.5,
	disk_price 				= 0.3,
	traffic_price 			= 0.004;

// Sliders
var slider_ram_target 		= document.getElementById('slider_ram'),
	slider_disk_target 		= document.getElementById('slider_disk'),
	slider_traffic_target 	= document.getElementById('slider_traffic');

// Request white paper flag
var rwp_flag = false;

// HTML references
var $body = $('body');

var region = 'eu'; // Region variable

var styles = [ { stylers: [ { hue: "#999" },{ saturation: -120 } ]}]; // Map style - Global to all maps

$(document).ready(function($) {

	// Init Fastclick
	FastClick.attach(document.body);

	//
	// > 0 for everyone to the left of UK
	// <= -480 starting from australia to the right
	if (new Date().getTimezoneOffset() > 0 || new Date().getTimezoneOffset() <= -480) {
		// -1, 2, 3, 4, ... Timezones
		region = 'us';
	} else {
		// +1, 2, 3, 4, ... Timezones
		region = 'eu';
	}

	$('.mobile-menu-trigger').click(function(e) {
		e.preventDefault();
		$('.site-menu-wrap').toggleClass('menu-open');
	});

	$('.mobile-menu-close').click(function(e) {
		e.preventDefault();
		$('body').removeClass('menu-open');
		//$('.scroll-fix').attr('style', ' ').removeClass('active');
	});



	$('.site-menu .first-level').click(function(e) {
		if($('body').hasClass('menu-open') && $(this).parent('li').hasClass('has-dropdown')) {
			e.preventDefault();
			$(this).parent('li').toggleClass('mobile-dropdown-open');
		}
	});

	function urlParam(variable) {
		var query = window.location.search.substring(1);
		var vars = query.split("&");
		for (var i = 0; i < vars.length; i++) {
			var pair = vars[i].split("=");
			if (pair[0] == variable) {
				return pair[1];
			}
		}
		return (false);
	}

	function piwikAdvanceFunnel(targetStep) {
		_paq.push([function () {
			var limit = targetStep;
			var timeNow = Date.now();
			var accountID = this.getUserId();
			var funnelProgress = parseInt(this.getCustomVariable(1, "visit")[1] || 0) + 1;
			var updateContent = {};
			var runAdditionalCode = false;
			for (funnelProgress; funnelProgress <= limit; funnelProgress++) {
				if (funnelProgress < limit) {
					this.trackEvent('funnelDuration', 'skip', "step" + funnelProgress, null);
				} else {
					this.trackEvent('funnelDuration', '+' + (limit - (this.getCustomVariable(1, "visit")[1]) || 1), "step" + funnelProgress, timeNow - parseInt(this.getCustomVariable(3, "visit")[1] || timeNow));
				}
				this.trackGoal(funnelProgress);
				if (accountID && funnelProgress == limit) {
					updateContent['current'] = limit;
					updateContent['lastFunnel'] = timeNow;
				}
				runAdditionalCode = true;
			}
			if (runAdditionalCode) {
				this.setCustomVariable(1, "funnel", funnelProgress, "visit");
				this.setCustomVariable(3, "lastFunnel", timeNow, "visit");
			}
			this.setCustomVariable(4, "lastActive", timeNow, "visit");
			if (accountID) {
				updateContent['lastActive'] = timeNow;
				piwikSetUserVariables(accountID, updateContent);
			}
		}]);
	}

	function piwikSetUserVariables(account, content) {
		$.post({action: 'piwik-set', id: account, content: content}, function () {
		}, 'json');
	}

	// Piwik init
	// Piwik :: Set default tracking custom values.
	piwikAdvanceFunnel(1);
	_paq.push(["setCustomVariable", 2, "server", region, "visit"]);

	// Live event tracking
	$('html').on('click', 'a', function () {
		var href = $(this).attr("href");
		if (href) {
			_paq.push([
				'trackEvent',
				'link',
				href + ' | ' + ($(this).text().trim() || $(this).attr('tooltip') || $(this).attr('rel')),
				location.pathname,
				null
			]);
			piwikAdvanceFunnel(2);
		}
	});
	// Piwik end


	// Check for svg support if not supported replace with .png
	if (!Modernizr.svg) {
		$.each($('img[src*="svg"]'), function () {
			$(this).attr('src', $(this).attr('src').split('.')[0] + '.png');
		});
	}

	// Show submenu
	$('.site-menu-wrap .site-menu').addClass('show').animate({opacity:'1'},700, function() {

	});

	if($('html').hasClass('ie9')) {
		if($('#single-content').length > 0) {
			$('pre').wrapInner( "<div class='pre-fallback'></div>");
			$('.pre-fallback').append("<span class='pre-before'></span><span class='pre-after'></span>");
		}
	}

    // If JavaScript is enabled, add '.js' to <html> element
    $('html').addClass('js');


    // Highlight code
    if($body.hasClass('page-single')) { Prism.highlightAll(); }

    // ANIMATIONS
		var config = {
		  viewFactor : 0.15,
		  duration   : 800,
		  distance   : "0px",
		  delayType  : "onload",
		  mobile      : false,
		};

		var page_el = {
		  origin   : "bottom",
		  distance : "20px",
		  duration : 800,
		  delay    : 0,
		  viewFactor : 0.05,
		  scale    : 0,
		  easing   : 'ease',
		};

		var page_el_2 = {
		  origin   : "bottom",
		  distance : "20px",
		  duration : 800,
		  delay    : 0,
		  viewFactor : 0,
		  scale    : 0,
		  easing   : 'ease'
		};

		if($('html').hasClass('no-touchevents')) {
			window.sr = ScrollReveal( config );

			// All page animation
			if($('.el-animation').length > 0) {
				sr.reveal( ".el-animation", page_el );
			}
			if($('.el-animation-2').length > 0) {
				sr.reveal( ".el-animation-2", page_el_2 );
			}
		}


    // ALL PAGES

		// Header submenu
		if($('.dropdown-open').length > 0) {

			// Add fixed class to submenu acording to scroll position
			if(scrollPosY > 108) {
				$('.dropdown-open').addClass('fixed');
			}

			$(window).on('scroll', function() {
				// Update scroll position
				scrollPosY = $(window).scrollTop();
				// Add fixed class to submenu acording to scroll position
				if(scrollPosY > 108) {
					$('.dropdown-open').addClass('fixed');
				} else {
					$('.dropdown-open').removeClass('fixed');
				}
			});
		}

		// Remove border from fixed submenu when passed purple hero part
		if($('#animation').length > 0) {
			// Remove border if we are passed hero animation
			if(scrollPosY > ($('#animation').offset().top + $('#animation').outerHeight() - $('.dropdown-open.fixed').height() - 40)) {
				$('.dropdown-open').addClass('remove-border');
			}

			$(window).on('scroll', function() {
				// Remove border if we are passed hero animation
				if(scrollPosY > ($('#animation').offset().top + $('#animation').outerHeight() - $('.dropdown-open.fixed').height() - 40)) {
					$('.dropdown-open').addClass('remove-border');
				} else {
					$('.dropdown-open').removeClass('remove-border');
				}
			});
		}

		// Focus and blur actions for inputs
		if($('[data-value]').length > 0) {
			// Reset to placeholder text on blur if input empty
			$('[data-value]').focus(function(){
				var $input = $(this);
				// Check if input or textarea
				if($(this).hasClass('textarea')) {
					if($input.val() == $input.attr('data-value')) $input.val(''); // Clear input
				} else {
					if($input.val() == $input.attr('data-value')) $input.val(''); // Clear input
				}
			}).blur(function(){
				var $input = $(this);
				if($(this).hasClass('textarea')) {
					if(!$input.val().trim()) $input.val($input.attr('data-value'));
				} else {
					if(!$input.val().trim()) $input.val($input.attr('data-value')); // If empty
				}
			});
		}

		// Create dropdowns
		if($('select').length > 0) { create_custom_dropdowns(); }

		// Move to id when anchor link clicked
		if($('.anchor-link').length > 0) {
			$('.anchor-link').click(function(e) {
				// Prevent default behevior
				e.preventDefault();
				// Get id
				var anchor_id = $(this).attr('href');
				// Scroll to position
				$('html, body').animate({ scrollTop: $(anchor_id).offset().top + 1 }, 1000);
			});
		}

    // 	FRONTPAGE
		// Video
		if($('#video').length > 0) {
			// Make video to fit container
			$("#video .inner").fitVids();
		}

		// Front page event maps
		if($('#meet .event-map').length > 0) {

			var map_counter = 0; // Conter to keep track

			// Reset counter
			map_counter = 0; // Conter to keep track

			// Create maps on loop
			$('#meet .event-map').each(function() {
				var $map_el = $(this),
					map_id = $map_el.attr('id');

				var map = new GMaps({
			    	el: "#"+map_id,
					lat: $map_el.attr('data-lat'),
					lng: $map_el.attr('data-lng')
			    });

				map.addMarker({
				  lat: $map_el.attr('data-lat'),
				  lng: $map_el.attr('data-lng'),
				  icon: "../../assets/images/markers/marker.svg"
				});

				map.addStyle({
					styles: styles,
					mapTypeId: "map_style"
				});

				map.setStyle("map_style");

			    map_counter++;
			});
		}
	// ABOUT PAGE
		if($('.item-map').length > 0) {
			// Create maps on loop
			$('.item-map').each(function() {
				var $map_el = $(this),
					map_id = $map_el.attr('id');

				var map = new GMaps({
			    	el: "#"+map_id,
					lat: $map_el.attr('data-lat'),
					lng: $map_el.attr('data-lng')
			    });

				map.addMarker({
				  lat: $map_el.attr('data-lat'),
				  lng: $map_el.attr('data-lng'),
				  icon: "../../assets/images/markers/marker.svg"
				});

				map.addStyle({
					styles: styles,
					mapTypeId: "map_style"
				});

				map.setStyle("map_style");

				if(map_counter == $('#meet .event-map').length - 1) {
					// Wait 200ms for maps to get ready
					setTimeout(function() {
						// Init slider
						initSlider();
					}, 200);
				}

			    map_counter++;
			});
		}

		if($('#page-about .office-map').length > 0) {
			// Create maps on loop
			$('.office-map').each(function() {
				var $map_el = $(this),
					map_id = $map_el.attr('id');

				if (map_id === undefined) {
					return;
				}

				var map = new GMaps({
			    	el: "#"+map_id,
			    	disableDefaultUI: true,
			    	zoom : 15,
			    	minZoom: 15,
			    	maxZoom: 15,
					lat: $map_el.data('lat'),
					lng: $map_el.data('lng')
			    });

				map.addMarker({
				  lat: $map_el.data('lat'),
				  lng: $map_el.data('lng'),
				  icon: "../../assets/images/about/office-marker.svg"
				});

				map.addStyle({
					styles: styles,
					mapTypeId: "map_style"
				});

				map.setStyle("map_style");
			});
		}

		if($('#page-about #data-centers-map').length > 0) {
				var map = new GMaps({
			    	el: "#data-centers-map",
			    	lat: 48.793819,
			    	lng: -39.486190,
			    	zoom : 2,
			    	minZoom: 2,
			    	maxZoom: 15,
			    	disableDefaultUI: true
			    });
			setTimeout(function() {
			    // Create markers on loop
			    $('.data-centers-lat-lng span').each(function() {
				    var $el = $(this);
					// Add marker to map
					map.addMarker({
					  lat: $el.data('lat'),
					  lng: $el.data('lng'),
					  icon: "../../assets/images/about/office-marker.png"
					});
				});
				// Map style
				map.addStyle({
					styles: styles,
					mapTypeId: "map_style"
				});
				// Set style
				map.setStyle("map_style");
			}, 100);
		}
	// PRICING PAGE
		if($('#page-pricing input[name=premium]').length > 0) {
			$('input[name=premium]').on('change', function () { calculatePrice(); });
		}

		if ($('#page-pricing').length > 0) {

			// RAM
			noUiSlider.create(slider_ram_target, {
				connect: 'lower',
				start  : slider_ram,
				step   : 0.1,
				range  : {
					'min': 0,
					'30%': [1, 0.5],
					'40%': [16, 1],
					'50%': [32, 1],
					'max': 64
				},
				pips   : {
					mode   : 'values',
					density: 50,
					values : [0, 0.5, 1, 32, 64]
				}
			});
			slider_ram_target.noUiSlider.on('change', function (values, handle) {
				if (values[handle] < slider_ram) {
					slider_ram_target.noUiSlider.set(slider_ram);
				}
			});

			var left_val = $('#slider_ram').find('.noUi-origin').css("left");
			$('#slider_ram').find('.noUi-base').append('<span class="free" style="width:'+left_val+'"></span>');
			$('#slider_ram').find('.noUi-marker-large:eq(0)').hide();
			$('#slider_ram').find('.noUi-value-large:eq(0)').addClass('first-val').text('Free');
			$('#slider_ram').find('.noUi-value-large:eq(1)').text('0.5');

			// DISK

			noUiSlider.create(slider_disk_target, {
				connect: 'lower',
				start  : slider_disk,
				step   : 0.1,
				range  : {
					'min': 0,
					'15%': [10, 1],
					'30%': [100, 50],
					'50%': [500, 100],
					'max': 1000
				},
				pips   : {
					mode   : 'values',
					density: 50,
					values : [0, 10, 500, 1000]
				}
			});
			slider_disk_target.noUiSlider.on('change', function (values, handle) {
				if (values[handle] < slider_disk) {
					slider_disk_target.noUiSlider.set(slider_disk);
				}
			});


			var left_val = $('#slider_disk').find('.noUi-origin').css("left");
			$('#slider_disk').find('.noUi-base').append('<span class="free" style="width:'+left_val+'"></span>');
			$('#slider_disk').find('.noUi-marker-large:eq(0)').hide();
			$('#slider_disk').find('.noUi-value-large:eq(0)').addClass('first-val').text('Free');
			// Outbound traffic

			noUiSlider.create(slider_traffic_target, {
				connect: 'lower',
				start  : slider_traffic,
				step   : 0.1,
				range  : {
					'min': 0,
					'15%': [10, 1],
					'30%': [100, 50],
					'40%': [500, 100],
					'50%': [2500, 100],
					'max': 5000
				},
				pips   : {
					mode   : 'values',
					density: 50,
					values : [0, 10, 2500, 5000]
				}
			});
			slider_traffic_target.noUiSlider.on('change', function (values, handle) {
				if (values[handle] < slider_traffic) {
					slider_traffic_target.noUiSlider.set(slider_traffic);
				}
			});


			var left_val = $('#slider_traffic').find('.noUi-origin').css("left");
			$('#slider_traffic').find('.noUi-base').append('<span class="free" style="width:'+left_val+'"></span>');
			$('#slider_traffic').find('.noUi-marker-large:eq(0)').hide();
			$('#slider_traffic').find('.noUi-value-large:eq(0)').addClass('first-val').text('Free');

			// Calculate price
			calculatePrice();

			// RAM
			slider_ram_target.noUiSlider.on('set', function () {
				calculatePrice();
			});
			slider_ram_target.noUiSlider.on('slide', function () {
				calculatePrice();
			});

			// DISK
			slider_disk_target.noUiSlider.on('set', function () {
				calculatePrice();
			});
			slider_disk_target.noUiSlider.on('slide', function () {
				calculatePrice();
			});

			// TRAFFIC
			slider_traffic_target.noUiSlider.on('set', function () {
				calculatePrice();
			});
			slider_traffic_target.noUiSlider.on('slide', function () {
				calculatePrice();
			});
		}


    // SINGLE PAGES
	    // Wrap all tables
	    if($('#single-content').length > 0) {
			$('#single-content table').wrap('<div class="content-table-wrap"></div>');
		}

    // FORMS
		// Newsletter form
		if($('.newsletter-form .btn').length > 0) {
			$('.newsletter-form .btn').on('click', function (e) {
				// Don't allow default behavior
				e.preventDefault();

				var error		 = 0,
					message 	 = '',
					email 		 = $('.newsletter-form input[name=uEmail]');

				$button 		 = $(this);
				$form 			 = $('.newsletter-form'); // Newsletter form
				$success_message = $('.newsletter-form .success-message'); // Success message container
				$error_message	 = $('.newsletter-form .error-message'); // Error message container

				// Add form loading class
				$form.addClass('loading');

				// Dot animation variables
				var dot_interval, // Interval
					dotcount = 3, // Dot Count
					start_text = 'Signing up', // Start text
					dot_builder; // Dot counter

				// Set button start text
				$button.val(start_text);

				// Set interval
				dot_interval = setInterval(function() {
					// Clear builder
					dot_builder = '';
					// Decrease dot count
					dotcount = dotcount + 1;
					// Dot count cant be less then 0
					if(dotcount > 3) { dotcount = 0; };
					// Build dots based on dot count
					for ( var i = 0, l = dotcount; i < l; i++ ) { dot_builder = dot_builder+'.'; }
					// Add dots to button
					$button.val(start_text+dot_builder);
				}, 250);

				// For testing
				setTimeout(function(){
					clearInterval(dot_interval);
					$form.removeClass('loading');
					$button.val('Sign Up ');

					if (!email.val().trim() || email.val() == email.data('value')) {
						error = 1;
						message = 'E-mail address is required.';
					} else if (!validateEmail(email.val().trim())) {
						error = 1;
						message = 'Not a valid e-mail address.';
					}

					if (!error) {

						$.ajax({
							url: baseUrl+"/lib/ajax-end-points.php",
							type: "POST",
							data: {
								"action" : "newsletter",
								"de"  	 : email.val(), // Email
							},
							success:function(data) {
								if(data == 'ok') {
									$success_message.find('span').animate({opacity: 1}, 300);

									$success_message.css('display','block').animate({opacity: 1}, 200, function() {
										$button.val('Sign Up ');
										email.val(email.data('value'));
									});

									setTimeout(function() {
										$success_message.animate({opacity: 0}, 300, function() {
											$success_message.attr('style','').find('span').attr('style','');
										});
									}, 2000);
								}
							}
						});
					} else {

						email.addClass('error');
						$error_message.text(message);
						$error_message.addClass('active').animate({opacity: 1}, 500);

						// Remove error class on focus
						email.focus(function() {
							$error_message.animate({opacity: 0}, 500, function() {
								$error_message.removeClass('active');
								email.removeClass('error');
							});
						});
					}

				}, 1400);
			});
		}
		// Sign up form
		if($('#sign-up').length > 0) {
			$('#sign-up .btn').click(function(e) {
				// Don't allow default behavior
				e.preventDefault();

				var $button = $(this),
					$form	= $('.signup-form');

				// Piwik start
				_paq.push([
					'trackEvent',
					'register',
					location.pathname + ' | ' + $(this).parent().attr('class').match(/signup_\d/),
					location.pathname,
					null
				]);
				piwikAdvanceFunnel(2);
				// Piwik end

				// Only once
				if(!$form.hasClass('loading')) {

					$form.find('.form-text').removeClass('visible');

					$form.addClass('loading'); // Add button loading state - works as gate

					var error_email 		= 0, // Email error gate,
						error_fullname 		= 0,
						no_value_message 	= '', // Error message no value
						not_valid_message	= '', // Error message not valid
						name 				= $('#sign-up input[name=uName]'),
						email 				= $('#sign-up input[name=uEmail]'),
						region 				= $('#sign-up #uRegion').find(":selected").val(),
						$error_message		= $('#sign-up .error-message'),
						$success_message	= $('#sign-up .success-message'),
						valid_count 		= 0, // Error not valid counter
						no_input_count 		= 0; // Error no input counter

					// Dot animation variables
					var dot_interval, 			 // Interval
						dotcount 			= 3, // Dot Count
						start_text 			= 'Signing up', // Start text
						dot_builder;		 // Dot counter

						// Set button start text
						$button.find('.button-label').text(start_text);
						$button.find('.button-dots').text('');

						$success_message.attr('style','');
						$error_message.attr('style','');

						// Set interval
						dot_interval = setInterval(function() {
							// Clear builder
							dot_builder = '';
							// Decrease dot count
							dotcount = dotcount + 1;
							// Dot count cant be less then 0
							if(dotcount > 3) { dotcount = 0; };
							// Build dots based on dot count
							for ( var i = 0, l = dotcount; i < l; i++ ) { dot_builder = dot_builder+'.'; }
							// Add dots to button
							$button.find('.button-dots').text(dot_builder);
						}, 250);

						email.removeClass('error');
						name.removeClass('error');

						// For testing
						setTimeout(function(){

							// Start validations
							if (!name.val().trim() || name.val() == name.data('value')) { // Check if name is not empty
								error_fullname = 1;
								no_value_message = 'Name ';
								no_input_count = no_input_count + 1;
							} else if(name.val().match(/^\d+$/)) {
								error_fullname = 1;
								not_valid_message = 'Invalid name';
								valid_count = valid_count + 1;
							}

							if (!email.val().trim() || email.val() == email.data('value')) { // Check if email not empty
								error_email = 1;
								if(no_input_count == 1) {
									no_value_message = no_value_message + ' & email ';
								} else {
									no_value_message = 'Email ';
								}
								no_input_count = no_input_count + 1;
							} else if (!validateEmail(email.val().trim())) { // Check if email valid
								error_email = 1;

								if(valid_count == 1) {
									not_valid_message = not_valid_message + ' & e-mail';
								} else {
									not_valid_message = 'Invalid e-mail';
								}
								valid_count = valid_count + 1;
							}

							if(no_input_count > 0) {
								if(no_input_count == 1) {
									no_value_message = no_value_message + 'is required. ';
								} else {
									no_value_message = no_value_message + ' are required. ';
								}
							}
							if(valid_count > 0) {
								not_valid_message = not_valid_message + '.';
							}

							// End validations
							clearInterval(dot_interval);
							$button.find('.button-label').text('Sign Up ');
							$form.removeClass('loading');

							if (!error_email && !error_fullname) {

								// Start ajax call
								var postUrl = 'https://cloud-' + region + '.clusterpoint.com/api/api.php';

								$.post(postUrl, {
									'action'  : 'create-account-single-request',
									'name'    : name.val(),
									'email'   : email.val(),
									'company' : '',
									'password': '',
									'phone'   : '',
									'nickname': ''
								}, function (data) {
									if (data.status == 'ok') {
										var accountID = data.accountid;

										_paq.push(['setUserId', accountID]);
										_paq.push(["setCustomVariable", 2, "server", region, "visit"]);

										piwikSetUserVariables(accountID, {
											pk_campaign: urlParam('pk_campaign'),
											pk_keyword : urlParam('pk_keyword'),
											pk_source  : urlParam('pk_source'),
											pk_medium  : urlParam('pk_medium'),
											pk_content : urlParam('pk_content')
										});

										piwikAdvanceFunnel(3);

										ga('send', 'event', 'Signup', 'Register');

										setTimeout(function() {
												$success_message.animate({opacity: 0}, 500, function() {
													if(!$form.find('.form-text').hasClass('visible')) {
														$form.find('.form-text').css('visibility','visible').animate({opacity: 1},500).addClass('visible');
													}
													email.val(email.data('value'));
													name.val(name.data('value'));
												});
										}, 5000);

										$form.find('.form-text').css('visibility','hidden').removeClass('visible');
										$success_message.css('display', 'block').animate({opacity: 1}, 300);

									} else {
										var message = 'We encountered an error while trying to send a verification email, please try again';
										$form.find('.form-text').css('visibility','hidden').removeClass('visible');
										$success_message.css('display', 'none');
										$error_message.text(message).css('display', 'block').animate({opacity: 1}, 300);
									}

								}, 'json');

							} else {
								if(error_email) {
									//
									email.addClass('error');
									// Remove error class on focus
									email.focus(function() {
										$error_message.animate({opacity: 0}, 500, function() {
											$error_message.removeClass('active');
											email.removeClass('error');
											if(!$form.find('.form-text').hasClass('visible')) {
												$form.find('.form-text').addClass('visible').css({'visibility':'visible', 'opacity' : 0}).animate({opacity: 1},500);
											}
										});
									});
								}

								if(error_fullname) {
									name.addClass('error');
									// Remove error class on focus
									name.focus(function() {
										$error_message.animate({opacity: 0}, 500, function() {
											$error_message.removeClass('active');
											name.removeClass('error');
											if(!$form.find('.form-text').hasClass('visible')) {
												$form.find('.form-text').addClass('visible').css({'visibility':'visible', 'opacity' : 0}).animate({opacity: 1},500);
											}
										});
									});
								}

								var message = no_value_message + not_valid_message;

								$form.find('.form-text').css('visibility','hidden');
								$error_message.text(message).css('display', 'block').animate({opacity: 1}, 300);
							}
						},1400);
				}
			});
		}

		// Sign up form
	   	if($('.ntss-net-security-template .contact-form, .gol-log-analytics-template .contact-form, #page-about .contact-form, #page-onboarding-services .contact-form, #page-partners .contact-form').length > 0 ) {
			$('.contact-form .btn').on('click', function (e) {
				e.preventDefault();
				/*
					Form variables
				*/
				var message 	 		= '', 											// Output error message
					no_value_message  	= '',
					not_valid_message	= '',
					error_email 		= 0,  											// Email error gate
					error_fullname 		= 0,  											// Name error gate
					error_company		= 0,  											// Company error gate
					error_phone 		= 0, 											// Phone error gate
					error_body			= 0,									    	// Body error gate
					$parentForm 		= $(this).closest('form'),
					email 				= $parentForm.find('input[name=uEmail]'), 		// Email input
					name 				= $parentForm.find('input[name=uName]'), 		// Name input
					company 			= $parentForm.find('input[name=uCompany]'), 	// Company input
					phone 				= $parentForm.find('input[name=uPhone]'), 		// Phone input
					body_text		    = $parentForm.find('textarea'),					// Body textarea
					$button 	 		= $(this), 		 								// jQuery reference to submit button
					wp_title			= $button.data('wp-title'),
					valid_count 		= 0, 											// Error not valid counter
					no_input_count 		= 0, 											// Error no input counter
					$success_message	= $parentForm.find('.success-message'), 		// Success message container
					$error_message		= $parentForm.find('.error-message'); 			// Error message container

					/*
						Dot animation variables
					*/
					var dot_interval, 													// Interval
						dotcount 			= 0, 										// Dot Count
						start_text 			= 'Sending', 								// Start text
						dot_builder; 													// Output dot text

						// Remove error class on focus
						email.focus(function() {
							$error_message.animate({opacity: 0}, 500, function() {
								$error_message.removeClass('active');
							});
							email.removeClass('error');
						});
						name.focus(function() {
							$error_message.animate({opacity: 0}, 500, function() {
								$error_message.removeClass('active');
							});
							name.removeClass('error');
						});
						phone.focus(function() {
							$error_message.animate({opacity: 0}, 500, function() {
								$error_message.removeClass('active');
							});
							phone.removeClass('error');
						});
						company.focus(function() {
							$error_message.animate({opacity: 0}, 500, function() {
								$error_message.removeClass('active');
							});
							company.removeClass('error');
						});
						body_text.focus(function() {
							$error_message.animate({opacity: 0}, 500, function() {
								$error_message.removeClass('active');
							});
							body_text.removeClass('error');
						});

						$button.addClass('loading'); // Add button loading class ( Changes width and margin to label )
						$button.find('.label-loading').text(start_text).css('opacity', '0'); // Reset loading label
						// Start opacity animation to show label
						$button.find('.label-loading').animate({opacity: 1}, 500, function() {
						// Start dot animation
						dot_interval = setInterval(function() {
							// Clear builder
							dot_builder = '';
							// Decrease dot count
							dotcount = dotcount + 1;
							// Dot count cant be less then 0
							if(dotcount > 3) { dotcount = 0; };
							// Build dots based on dot count
							for ( var i = 0, l = dotcount; i < l; i++ ) { dot_builder = dot_builder+'.'; }
							// Add dots to button
							$button.find('.label-loading').text(start_text+dot_builder);
						}, 250);

					setTimeout(function(){
						// Start validations
						if (!name.val().trim() || name.val() == name.data('value')) { // Check if name is not empty
								error_fullname = 1;
								no_value_message = 'Name';
								no_input_count = no_input_count + 1;
						} else if(name.val().match(/^\d+$/)) {
								error_fullname = 1;
								not_valid_message = 'Invalid name';
								valid_count = valid_count + 1;
						}
						if (!company.val().trim() || company.val() == company.data('value')) { // Check if name is not empty
							error_company = 1;
							if(no_input_count > 0) {
								no_value_message = no_value_message + ', company';
							} else {
								no_value_message = 'Company ';
							}
								no_input_count = no_input_count + 1;
						}

						if (!email.val().trim() || email.val() == email.data('value')) { // Check if email not empty
							error_email = 1;
							if(no_input_count > 0) {
								no_value_message = no_value_message + ', email';
							} else {
								no_value_message = 'Email ';
							}
							no_input_count = no_input_count + 1;
						} else if (!validateEmail(email.val().trim())) { // Check if email valid
							error_email = 1;
							if(valid_count > 0) {
								not_valid_message = not_valid_message + ' & e-mail';
							} else {
								not_valid_message = 'Invalid e-mail';
							}
							valid_count = valid_count + 1;
						}

						if (!phone.val().trim() || phone.val() == phone.data('value')) { // Check if email not empty
							error_phone = 1;
							if(no_input_count > 0) {
								no_value_message = no_value_message + ', phone';
							} else {
								no_value_message = 'Phone ';
							}
							no_input_count = no_input_count + 1;
						} else if (!validatePhone(phone.val().trim())) { // Check if email valid
							error_phone = 1;
							if(valid_count > 0) {
								not_valid_message = not_valid_message + ' & phone';
							} else {
								not_valid_message = 'Invalid phone';
							}
							valid_count = valid_count + 1;
						}

						if (!body_text.val().trim() || body_text.val() == body_text.data('value')) { // Check if name is not empty
							error_body = 1;
							if(no_input_count > 0) {
								no_value_message = no_value_message +', message body ';
							} else {
								no_value_message = 'Message body ';
							}
								no_input_count = no_input_count + 1;
						}

						if(no_input_count > 1) {
							if(no_input_count > 1) {
								no_value_message = no_value_message + 'are required. ';
								no_value_message = no_value_message.replace(/,(?=[^,]*$)/, " &");
							} else {
								no_value_message = no_value_message + 'is required. ';
							}
						}

						if(valid_count > 0) {
							not_valid_message = not_valid_message + '.';
						}

						message = no_value_message +' '+ not_valid_message;

						// Check if there were errors
						if (!error_email && !error_fullname && !error_company && !error_phone && !error_body) {
							if($('#page-about .contact-form').length > 0 ) {
								ajaxSendContactUs(name.val(), email.val(), company.val(), phone.val(), body_text.val(), 'About Page');
							}
							if($('#page-onboarding-services .contact-form').length > 0 ) {
								ajaxSendContactUs(name.val(), email.val(), company.val(), phone.val(), body_text.val(), 'Onboarding Services Page');
							}
							if($('#page-partners .contact-form').length > 0) {
								ajaxSendContactUs(name.val(), email.val(), company.val(), phone.val(), body_text.val(), 'Partners Page');
							}
							if($('#request-consultation .contact-form').length > 0) {
								ajaxSendContactUs(name.val(), email.val(), company.val(), phone.val(), body_text.val(), 'NTSS - Net Secutiy Page');
							}
							setTimeout(function(){

							}, 500);
							// All looks, ok send request
						} else {
							clearInterval(dot_interval);

							$button.removeClass('loading').find('.button-label').text('Send');
							// There was email error
							if(error_email) {
								email.addClass('error'); // Add error class to email input
							}
							// There was name error
							if(error_fullname) {
								name.addClass('error'); // Add error class to fullname input
							}
							// There was phone error
							if(error_phone) {
								phone.addClass('error'); // Add error class to email input
							}
							// There was company error
							if(error_company) {
								company.addClass('error');
							}
							// There was body text error
							if(error_body) {
								body_text.addClass('error');
							}
							$error_message.text(message).css('display', 'block').animate({opacity: 1}, 500, function() {});
							rwp_flag = false;
						}

					}, 1300);// End timeout

				}); // End Animate opacity send button text
			});// End click
		}// End if element exist

    // POPUPS
    	//
 		// Gallery popup
		if($('.gallery-link').length > 0) {
			$('.gallery-link').each(function() {
				var $gallery = $(this),
					image_array = [];
					image_string = $(this).attr('data-images'),
					galley_title = $(this).attr('data-title');

				var image_string_array = image_string.split(',');
				//
				var objs=[];

				for(var i=0;i<image_string_array.length;i++){
				    var obj={
				        "src" : image_string_array[i],
				        "title" : ''
				    }

				    objs.push(obj);
				}

				if(objs.length > 1) {
					markupHTML = '<div class="mfp-figure"><div class="galley-title">'+galley_title+'</div><div class="mfp-close"></div><div class="mfp-img"></div><div class="mfp-bottom-bar"><div class="mfp-title"></div><div class="mfp-counter-wrap"><button title="" type="button" class="mfp-arrow mfp-arrow-left mfp-prevent-close mfp-arrow-show"></button><div class="mfp-counter"></div><button title="" type="button" class="mfp-arrow mfp-arrow-right mfp-prevent-close mfp-arrow-show"></button></div></div></div>';
				} else {
					markupHTML = '<div class="mfp-figure single-image"><div class="galley-title">'+galley_title+'</div><div class="mfp-close"></div><div class="mfp-img"></div><div class="mfp-bottom-bar"><div class="mfp-title"></div></div></div>';
				}

				$(this).magnificPopup({
				    mainClass: 'mfp-zoom-in',
					midClick: true,
					removalDelay: 1000,
				    items: objs,
					image: {
						markup: markupHTML
					},
				    gallery: {
				      enabled: true,
				      preload: [0,2]
				    },
				    callbacks: {
						open: function() {
							var popUp = this;
							$('.mfp-arrow-left').click(function() {
								popUp.prev();
							});
							$('.mfp-arrow-right').click(function() {
								popUp.next();
							});
						}
					},
				    type: 'image' // this is a default type
				});
			});
		}
		// Video popup
		if($('.video-link').length > 0) {
			$('.video-link').each(function() {
				var $video = $(this),
					video_url = $video.attr('data-video'),
					galley_title = $(this).attr('data-title');

					$(this).magnificPopup({
						mainClass: 'mfp-video mfp-zoom-in',
						midClick: true,
						removalDelay: 1000,
						items : {
							src: video_url
						},
						iframe: {
							markup: '<div class="galley-title">'+galley_title+'</div><div class="mfp-close"></div><div class="mfp-iframe-scaler"><iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe></div>',
							patterns: {
							    youtube: {
							    	index: 'youtube.com/', // String that detects type of video (in this case YouTube). Simply via url.indexOf(index).
							      id: 'v=',
							      src: '//www.youtube.com/embed/%id%?autoplay=1' // URL that will be set as a source for iframe.
							    },
							    vimeo: {
							      index: 'vimeo.com/',
							      id: '/',
							      src: '//player.vimeo.com/video/%id%?autoplay=1'
							    }
							},
							srcAction: 'iframe_src'
				        },
						type: 'iframe'
					});
			});
		}
		// Team members about popup
		if($('.team-member').length > 0) {
			$('.team-member .read-more').each(function() {
				var $team_member = $(this),
					team_about 	= $(this).attr('data-about'),
					team_name = $(this).attr('data-name'),
					team_image = $(this).attr('data-image');

					$team_member.magnificPopup({
						mainClass: 'mfp-zoom-in',
						midClick: true,
						removalDelay: 1000,
						callbacks: {
							beforeClose: function() {
								this.wrap.addClass('mfp-removing');
	  						},
	  						close: function() {

		  					}
						},
						type:'inline',
							items: [
							{
								src: $('<div class="white-popup"><div class="team-name">'+team_name+'</div><div class="table"><div class="image-col"><div class="member-image"><img src="'+team_image+'"></div></div><div class="col-about">'+team_about+'</div></div></div>'), // Dynamically created element
								type: 'inline'
				    		}
						]
					});

			});
		} //Original pop-up script 

		if($('.contact-container').length > 0) {
			$('.contact-container .read-more').each(function() {
				var $team_member = $(this),
					team_about 	= $(this).attr('data-about'),
					team_name = $(this).attr('data-name'),
					team_image = $(this).attr('data-image');

				$team_member.magnificPopup({
					mainClass: 'mfp-zoom-in',
					midClick: true,
					removalDelay: 1000,
					callbacks: {
						beforeClose: function() {
							this.wrap.addClass('mfp-removing');
						},
						close: function() {

						}
					},
					type:'inline',
					items: [
						{
							src: $('<div class="white-popup"><div class="team-name">'+team_name+'</div><div class="table"><div class="image-col"><div class="member-image"><img src="'+team_image+'"></div></div><div class="col-about">'+team_about+'</div></div></div>'), // Dynamically created element
							type: 'inline'
						}
					]
				});

			});
		}


		// Sliders popup
		if($('.open-sliders').length > 0) {
			$('.open-sliders').magnificPopup({
				type:'inline',
				midClick: true,
				closeOnBgClick: false,
				removalDelay: 1000,
				mainClass: 'mfp-zoom-in',
				markup: '<div class="mfp-figure">'+
	            '<div class="mfp-close"></div>'+
	            '<div class="mfp-img"></div>'+
	          '</div>',
			    callbacks: {
		        	open : function() {
			        	$('input[name=premium]').on('change', function () { calculatePrice(); });
			        }

	          }
			});
		}

		// Pricing application contact form */
		if($('.application-contact-form').length > 0) {
			$('.application-contact-form').magnificPopup({
				type:'inline',
				mainClass: 'mfp-zoom-in',
				midClick: true,
				removalDelay: 1000,
				callbacks: {
					open: function() {
						this.content.find('form .btn.btn-red').on('click', function(e) {

						if(rwp_flag == false) {
							rwp_flag = true;
							e.preventDefault(); // Don't allow default behavior
							/*
								Form variables
							*/
							var message 	 		= '', 											// Output error message
								no_value_message  	= '',
								not_valid_message	= '',
								error_email 		= 0,  											// Email error gate
								error_fullname 		= 0,  											// Name error gate
								error_company		= 0,  											// Company error gate
								error_phone 		= 0, 											// Phone error gate
								error_body			= 0,									    	// Body error gate
								$parentForm 		= $(this).closest('form'),
								email 				= $parentForm.find('input[name=uEmail]'), 		// Email input
								name 				= $parentForm.find('input[name=uName]'), 		// Name input
								company 			= $parentForm.find('input[name=uCompany]'), 	// Company input
								phone 				= $parentForm.find('input[name=uPhone]'), 		// Phone input
								body_text		    = $parentForm.find('textarea'),					// Body textarea
								$button 	 		= $(this), 		 								// jQuery reference to submit button
								wp_title			= $button.data('wp-title'),
								valid_count 		= 0, 											// Error not valid counter
								no_input_count 		= 0, 											// Error no input counter
								$success_message	= $parentForm.find('.success-message'), 		// Success message container
								$error_message		= $parentForm.find('.error-message'); 			// Error message container
								/*
									Dot animation variables
								*/
								var dot_interval, 													// Interval
									dotcount 			= 0, 										// Dot Count
									start_text 			= 'Sending', 								// Start text
									dot_builder; 													// Output dot text

									// Remove error class on focus
									email.focus(function() {
										$error_message.animate({opacity: 0}, 500, function() {
											$error_message.removeClass('active');
										});
										email.removeClass('error');
									});
									name.focus(function() {
										$error_message.animate({opacity: 0}, 500, function() {
											$error_message.removeClass('active');
										});
										name.removeClass('error');
									});
									phone.focus(function() {
										$error_message.animate({opacity: 0}, 500, function() {
											$error_message.removeClass('active');
										});
										phone.removeClass('error');
									});
									company.focus(function() {
										$error_message.animate({opacity: 0}, 500, function() {
											$error_message.removeClass('active');
										});
										company.removeClass('error');
									});
									body_text.focus(function() {
										$error_message.animate({opacity: 0}, 500, function() {
											$error_message.removeClass('active');
										});
										body_text.removeClass('error');
									});

									$button.addClass('loading'); // Add button loading class ( Changes width and margin to label )
									$button.find('.label-loading').text(start_text).css('opacity', '0'); // Reset loading label
									// Start opacity animation to show label
									$button.find('.label-loading').animate({opacity: 1}, 500, function() {
									// Start dot animation
									dot_interval = setInterval(function() {
										// Clear builder
										dot_builder = '';
										// Decrease dot count
										dotcount = dotcount + 1;
										// Dot count cant be less then 0
										if(dotcount > 3) { dotcount = 0; };
										// Build dots based on dot count
										for ( var i = 0, l = dotcount; i < l; i++ ) { dot_builder = dot_builder+'.'; }
										// Add dots to button
										$button.find('.label-loading').text(start_text+dot_builder);
									}, 250);
									// Wait some time
									setTimeout(function(){
										// Start validations and build error message
										if (!name.val().trim() || name.val() == name.data('value')) { // Check if name is not empty
											error_fullname = 1;
											no_value_message = 'Name';
											no_input_count = no_input_count + 1;
										} else if(name.val().match(/^\d+$/)) {
											error_fullname = 1;
											not_valid_message = 'Invalid name';
											valid_count = valid_count + 1;
										}

										if (!company.val().trim() || company.val() == company.data('value')) { // Check if name is not empty
											error_company = 1;
											if(no_input_count > 0) {
												no_value_message = no_value_message + ', company';
											} else {
												no_value_message = 'Company ';
											}
											no_input_count = no_input_count + 1;
										}

										if (!email.val().trim() || email.val() == email.data('value')) { // Check if email not empty
											error_email = 1;
											if(no_input_count > 0) {
												no_value_message = no_value_message + ', email';
											} else {
												no_value_message = 'Email ';
											}
											no_input_count = no_input_count + 1;
										} else if (!validateEmail(email.val().trim())) { // Check if email valid
											error_email = 1;
											if(valid_count > 0) {
												not_valid_message = not_valid_message + ' & e-mail';
											} else {
												not_valid_message = 'Invalid e-mail';
											}
											valid_count = valid_count + 1;
										}
										if (!phone.val().trim() || phone.val() == phone.data('value')) { // Check if email not empty
											error_phone = 1;
											if(no_input_count > 0) {
												no_value_message = no_value_message + ', phone';
											} else {
												no_value_message = 'Phone ';
											}
											no_input_count = no_input_count + 1;
										} else if (!validatePhone(phone.val().trim())) { // Check if email valid
											error_phone = 1;
											if(valid_count > 0) {
												not_valid_message = not_valid_message + ' & phone';
											} else {
												not_valid_message = 'Invalid phone';
											}
											valid_count = valid_count + 1;
										}
										if (!body_text.val().trim() || body_text.val() == body_text.data('value')) { // Check if name is not empty
											error_body = 1;
											if(no_input_count > 0) {
												no_value_message = no_value_message +', message body ';
											} else {
												no_value_message = 'Message body ';
											}
											no_input_count = no_input_count + 1;
										}
										if(no_input_count > 1) {
											if(no_input_count > 1) {
												no_value_message = no_value_message + ' are required. ';
												no_value_message = no_value_message.replace(/,(?=[^,]*$)/, " &");
											} else {
												no_value_message = no_value_message + 'is required. ';
											}
										}
										if(valid_count > 0) { not_valid_message = not_valid_message + '.'; }
										// End error message
										message = no_value_message +' '+ not_valid_message;

										// Check if there were errors
										if (!error_email && !error_fullname && !error_company && !error_phone && !error_body) {
											// Stop dot animation
											clearInterval(dot_interval);
											// All looks, ok send request
											applicationContactAjax(name.val(), email.val(), company.val(), phone.val(), body_text.val());
										} else {
											// Stop dot animaition
											clearInterval(dot_interval);
											$button.removeClass('loading').find('.button-label').text('Send');
											// Add error class to inputs
											if(error_email) 	{ email.addClass('error');    }
											if(error_fullname)  { name.addClass('error');     }
											if(error_phone) 	{ phone.addClass('error');    }
											if(error_company) 	{ company.addClass('error');  }
											if(error_body) 		{ body_text.addClass('error');}
											$error_message.text(message).css('display', 'block').animate({opacity: 1}, 500);
											// Open gates
											rwp_flag = false;
										}
									}, 1400); // End wait
										});
									}
								});
							},
							close : function() {
								this.content.find('form').css({ 'opacity' : '1', 'visibility' : 'visible'});

								this.content.find('input[name=uEmail]').val(this.content.find('input[name=uEmail]').data('value'));
								this.content.find('input[name=uName]').val(this.content.find('input[name=uName]').data('value'));
								this.content.find('input[name=uCompany]').val(this.content.find('input[name=uCompany]').data('value'));
								this.content.find('input[name=uPhone]').val(this.content.find('input[name=uPhone]').data('value'));
								this.content.find('textarea').removeClass('error').text(this.content.find('textarea').data('value'));

								this.content.find('.download-wrap').attr('style', '');

								this.content.find('form .btn').removeClass('loading');
								this.content.find('form .error-message').css({'opacity': '0', 'display' : 'none'});
								this.content.find('input').removeClass('error');

								this.content.find('form .btn').find('.label-default').css('opacity', '0');
								this.content.find('form .btn').find('.label-default').animate({opacity: 1}, 500);

							}
						}
					});
		}
		// Request white paper popup
		if($('#page-white-papers, #page-white-papers-single, .request-whitepaper').length > 0) {
			$('#page-white-papers .item .button, .request-whitepaper').each(function() {
				var $rq_wp = $(this);

					$rq_wp.magnificPopup({
						type:'inline',
						preloader: false,
						mainClass: 'mfp-zoom-in',
						midClick: true,
						removalDelay: 1000,
						callbacks: {
							open: function() {
								this.content.find('form .btn.btn-red').on('click', function(e) {
									if(rwp_flag == false) {
										rwp_flag = true;
									e.preventDefault(); // Don't allow default behavior
									/*
										Form variables
									*/
									var message 	 		= '', 											// Output error message
										no_value_message  	= '',
										not_valid_message	= '',
										error_email 		= 0,  											// Email error gate
										error_fullname 		= 0,  											// Name error gate
										error_company		= 0,  											// Company error gate
										error_phone 		= 0, 											// Phone error gate
										error_body			= 0,									    	// Body error gate
										$parentForm 		= $(this).closest('form'),
										email 				= $parentForm.find('input[name=uEmail]'), 		// Email input
										name 				= $parentForm.find('input[name=uName]'), 		// Name input
										company 			= $parentForm.find('input[name=uCompany]'), 	// Company input
										phone 				= $parentForm.find('input[name=uPhone]'), 		// Phone input
										body_text		    = $parentForm.find('textarea'),					// Body textarea
										$button 	 		= $(this), 		 								// jQuery reference to submit button
										wp_title			= $button.data('wp-title'),
										valid_count 		= 0, 											// Error not valid counter
										no_input_count 		= 0, 											// Error no input counter
										$success_message	= $parentForm.find('.success-message'), 		// Success message container
										$error_message		= $parentForm.find('.error-message'); 			// Error message container

										/*
											Dot animation variables
										*/
										var dot_interval, 													// Interval
											dotcount 			= 0, 										// Dot Count
											start_text 			= 'Sending', 								// Start text
											dot_builder; 													// Output dot text


											// Remove error class on focus
											email.focus(function() {
												$error_message.animate({opacity: 0}, 500, function() {
													$error_message.removeClass('active');
												});
												email.removeClass('error');
											});
											name.focus(function() {
												$error_message.animate({opacity: 0}, 500, function() {
													$error_message.removeClass('active');
												});
												name.removeClass('error');
											});
											phone.focus(function() {
												$error_message.animate({opacity: 0}, 500, function() {
													$error_message.removeClass('active');
												});
												phone.removeClass('error');
											});
											company.focus(function() {
												$error_message.animate({opacity: 0}, 500, function() {
													$error_message.removeClass('active');
												});
												company.removeClass('error');
											});
											body_text.focus(function() {
												$error_message.animate({opacity: 0}, 500, function() {
													$error_message.removeClass('active');
												});
												body_text.removeClass('error');
											});



											$button.addClass('loading'); // Add button loading class ( Changes width and margin to label )
											$button.find('.label-loading').text(start_text).css('opacity', '0'); // Reset loading label
											// Start opacity animation to show label
											$button.find('.label-loading').animate({opacity: 1}, 500, function() {
												// Start dot animation
												dot_interval = setInterval(function() {
													// Clear builder
													dot_builder = '';
													// Decrease dot count
													dotcount = dotcount + 1;
													// Dot count cant be less then 0
													if(dotcount > 3) { dotcount = 0; };
													// Build dots based on dot count
													for ( var i = 0, l = dotcount; i < l; i++ ) { dot_builder = dot_builder+'.'; }
													// Add dots to button
													$button.find('.label-loading').text(start_text+dot_builder);
												}, 250);

												// For testing
												setTimeout(function(){
													// Start validations
													if (!name.val().trim() || name.val() == name.data('value')) { // Check if name is not empty
														error_fullname = 1;
														no_value_message = 'Name';
														no_input_count = no_input_count + 1;
													} else if(name.val().match(/^\d+$/)) {
														error_fullname = 1;
														not_valid_message = 'Invalid name';
														valid_count = valid_count + 1;
													}

													if (!company.val().trim() || company.val() == company.data('value')) { // Check if name is not empty
														error_company = 1;
														if(no_input_count > 0) {
															no_value_message = no_value_message + ', company';
														} else {
															no_value_message = 'Company ';
														}
														no_input_count = no_input_count + 1;

													}

													if (!email.val().trim() || email.val() == email.data('value')) { // Check if email not empty
														error_email = 1;
														if(no_input_count > 0) {
															no_value_message = no_value_message + ', email';
														} else {
															no_value_message = 'Email ';
														}
															no_input_count = no_input_count + 1;
													} else if (!validateEmail(email.val().trim())) { // Check if email valid
														error_email = 1;

														if(valid_count > 0) {
															not_valid_message = not_valid_message + ' & e-mail';
														} else {
															not_valid_message = 'Invalid e-mail';
														}
														valid_count = valid_count + 1;
													}

													if (!phone.val().trim() || phone.val() == phone.data('value')) { // Check if email not empty
														error_phone = 1;

														if(no_input_count > 0) {
															no_value_message = no_value_message + ', phone';
														} else {
															no_value_message = 'Phone ';
														}
															no_input_count = no_input_count + 1;
													} else if (!validatePhone(phone.val().trim())) { // Check if email valid
														error_phone = 1;

														if(valid_count > 0) {
															not_valid_message = not_valid_message + ' & phone';
														} else {
															not_valid_message = 'Invalid phone';
														}
														valid_count = valid_count + 1;
													}


													if (!body_text.val().trim() || body_text.val() == body_text.data('value')) { // Check if name is not empty
														error_body = 1;
														if(no_input_count > 0) {
															no_value_message = no_value_message +', message body ';
														} else {
															no_value_message = 'Message body ';
														}
														no_input_count = no_input_count + 1;
													}

													if(no_input_count > 1) {
														if(no_input_count > 1) {
															no_value_message = no_value_message + ' are required. ';
															no_value_message = no_value_message.replace(/,(?=[^,]*$)/, " &");
														} else {
															no_value_message = no_value_message + 'is required. ';
														}
													}

													if(valid_count > 0) {
														not_valid_message = not_valid_message + '.';
													}

													message = no_value_message +' '+ not_valid_message;

													// Check if there were errors
													if (!error_email && !error_fullname && !error_company && !error_phone && !error_body) {

														clearInterval(dot_interval);
														// All looks, ok send request
														whitePapersAjax(name.val(), email.val(), company.val(), phone.val(), body_text.val(), wp_title);

													} else {

														clearInterval(dot_interval);
														$button.removeClass('loading').find('.button-label').text('Send');

														// There was email error
														if(error_email) {
															email.addClass('error'); // Add error class to email input
														}
														// There was name error
														if(error_fullname) {
															name.addClass('error'); // Add error class to fullname input
														}
														// There was phone error
														if(error_phone) {
															phone.addClass('error'); // Add error class to email input
														}
														// There was company error
														if(error_company) {
															company.addClass('error');
														}

														//

														// Ther was body text error
														if(error_body) {
															body_text.addClass('error');
														}


														$error_message.text(message).css('display', 'block').animate({opacity: 1}, 500, function() {
														});
														rwp_flag = false;

													}


												}, 1400);
											});

										}
									});


							},

							close : function() {
								this.content.find('form').css({ 'opacity' : '1', 'visibility' : 'visible'});

								this.content.find('input[name=uEmail]').val(this.content.find('input[name=uEmail]').data('value'));
								this.content.find('input[name=uName]').val(this.content.find('input[name=uName]').data('value'));
								this.content.find('input[name=uCompany]').val(this.content.find('input[name=uCompany]').data('value'));
								this.content.find('input[name=uPhone]').val(this.content.find('input[name=uPhone]').data('value'));
								this.content.find('textarea').removeClass('error').text(this.content.find('textarea').data('value'));

								this.content.find('.download-wrap').attr('style', '');

								this.content.find('form .btn').removeClass('loading');
								this.content.find('form .error-message').css({'opacity': '0', 'display' : 'none'});
								this.content.find('input').removeClass('error');

								this.content.find('form .btn').find('.label-default').css('opacity', '0');
								this.content.find('form .btn').find('.label-default').animate({opacity: 1}, 500, function() {});

							}
						}
					});

			});
		}


		// Download on-prem popup
		if($('.open-dop-form').length > 0) {

			var cp_cookie = Cookies.get('clusterpoint');

			if(cp_cookie == 'true') {
				$('.open-dop-form').click(function() {
					window.location.href = baseUrl+'/downloads';
					return false;
				});
			} else {
			$('.open-dop-form').magnificPopup({
				type:'inline',
				preloader: false,
				mainClass: 'mfp-zoom-in',
				removalDelay: 1000,
						callbacks: {
							open: function() {
								this.content.find('form .btn.btn-red').on('click', function(e) {
									if(rwp_flag == false) {
										rwp_flag = true;
									e.preventDefault(); // Don't allow default behavior
									/*
										Form variables
									*/
									var message 	 		= '', 											// Output error message
										no_value_message  	= '',
										not_valid_message	= '',
										not_valid_license	= '',
										error_email 		= 0,  											// Email error gate
										error_fullname 		= 0,  											// Name error gate
										error_company		= 0,  											// Company error gate
										error_phone 		= 0, 											// Phone error gate
										error_body			= 0,									    	// Body error gate
										error_license		= 0,											// License gate
										$parentForm 		= $(this).closest('form'),
										email 				= $parentForm.find('input[name=uEmail]'), 		// Email input
										name 				= $parentForm.find('input[name=uName]'), 		// Name input
										company 			= $parentForm.find('input[name=uCompany]'), 	// Company input
										phone 				= $parentForm.find('input[name=uPhone]'), 		// Phone input
										license				= $parentForm.find('#services-agreement'),
										$button 	 		= $(this), 		 								// jQuery reference to submit button
										valid_count 		= 0, 											// Error not valid counter
										no_input_count 		= 0, 											// Error no input counter
										$success_message	= $parentForm.find('.success-message'), 		// Success message container
										$error_message		= $parentForm.find('.error-message'); 			// Error message container




											// Remove error class on focus
											email.focus(function() {
												$parentForm.find('.error-message').css({'opacity': '0', 'display' : 'none'});
												email.removeClass('error');
											});
											name.focus(function() {
												$parentForm.find('.error-message').css({'opacity': '0', 'display' : 'none'});
												name.removeClass('error');
											});
											phone.focus(function() {
												$parentForm.find('.error-message').css({'opacity': '0', 'display' : 'none'});
												phone.removeClass('error');
											});
											company.focus(function() {
												$parentForm.find('.error-message').css({'opacity': '0', 'display' : 'none'});
												company.removeClass('error');
											});


											$parentForm.addClass('loading');
											// Dot animation variables
											var dot_interval, 			 // Interval
												dotcount 			= 3, // Dot Count
												start_text 			= 'Submitting', // Start text
												dot_builder			 // Dot counter

												// Set button start text
												$button.find('.button-label').text(start_text);
												$button.find('.button-dots').text('');
												// Set interval
												dot_interval = setInterval(function() {
													// Clear builder
													dot_builder = '';
													// Decrease dot count
													dotcount = dotcount + 1;
													// Dot count cant be less then 0
													if(dotcount > 3) { dotcount = 0; };
													// Build dots based on dot count
													for ( var i = 0, l = dotcount; i < l; i++ ) { dot_builder = dot_builder+'.'; }
													// Add dots to button
													$button.find('.button-dots').text(dot_builder);
												}, 250);

												// For testing
												setTimeout(function(){
													// Start validations
													if (!name.val().trim() || name.val() == name.data('value')) { // Check if name is not empty
														error_fullname = 1;
														no_value_message = 'Name';
														no_input_count = no_input_count + 1;
													} else if(name.val().match(/^\d+$/)) {
														error_fullname = 1;
														not_valid_message = 'Invalid name';
														valid_count = valid_count + 1;
													}

													if (!company.val().trim() || company.val() == company.data('value')) { // Check if name is not empty
														error_company = 1;
														if(no_input_count > 0) {
															no_value_message = no_value_message + ', company';
														} else {
															no_value_message = 'Company ';
														}
														no_input_count = no_input_count + 1;

													}

													if (!email.val().trim() || email.val() == email.data('value')) { // Check if email not empty
														error_email = 1;
														if(no_input_count > 0) {
															no_value_message = no_value_message + ', email';
														} else {
															no_value_message = 'Email ';
														}
															no_input_count = no_input_count + 1;
													} else if (!validateEmail(email.val().trim())) { // Check if email valid
														error_email = 1;

														if(valid_count > 0) {
															not_valid_message = not_valid_message + ' & e-mail';
														} else {
															not_valid_message = 'Invalid e-mail';
														}
														valid_count = valid_count + 1;
													}

													if (!phone.val().trim() || phone.val() == phone.data('value')) { // Check if email not empty
														error_phone = 1;

														if(no_input_count > 0) {
															no_value_message = no_value_message + ', phone';
														} else {
															no_value_message = 'Phone ';
														}
															no_input_count = no_input_count + 1;
													} else if (!validatePhone(phone.val().trim())) { // Check if email valid
														error_phone = 1;

														if(valid_count > 0) {
															not_valid_message = not_valid_message + ' & phone';
														} else {
															not_valid_message = 'Invalid phone';
														}
														valid_count = valid_count + 1;
													}


													if(no_input_count > 1) {
														if(no_input_count > 1) {
															no_value_message = no_value_message + ' are required. ';
															no_value_message = no_value_message.replace(/,(?=[^,]*$)/, " &");
														} else {
															no_value_message = no_value_message + 'is required. ';
														}
													}


													if($(license).is(':checked')) {
														not_valid_license = '';
													} else {
														not_valid_license = 'You must agree to the License Agreement.';
														error_license = error_license + 1;
														license.next('label').addClass('error-checkbox');

														license.on('click', function() {
															if($(license).is(':checked')) {
																license.next('label').removeClass('error-checkbox');
																$parentForm.find('.error-message').css({'opacity': '0', 'display' : 'none'});
																$parentForm.find('input').removeClass('error');
															}
														});
													}

													if(valid_count > 0) {
														not_valid_message = not_valid_message + '.';
													}

													message = no_value_message +' '+ not_valid_message+ ' '+not_valid_license;

													// Check if there were errors
													if (!error_email && !error_fullname && !error_company && !error_phone && !error_body && !error_license) {

														clearInterval(dot_interval);

														// All looks, ok send request
														downloadOnPremAjax(name.val(), email.val(), company.val(), phone.val(), $('#uRole').find(":selected").val());


													} else {

														clearInterval(dot_interval);
														$button.removeClass('loading').find('.button-label').text('Submit');

														// There was email error
														if(error_email) {
															email.addClass('error'); // Add error class to email input
														}
														// There was name error
														if(error_fullname) {
															name.addClass('error'); // Add error class to fullname input
														}
														// There was phone error
														if(error_phone) {
															phone.addClass('error'); // Add error class to email input
														}
														// There was company error
														if(error_company) {
															company.addClass('error');
														}

														//

														// Ther was body text error
														if(error_body) {
															body_text.addClass('error');
														}


														$error_message.text(message).css('display', 'block').animate({opacity: 1}, 500, function() {
														});

														$parentForm.removeClass('loading');

														rwp_flag = false;

													}


												}, 1400);
											//});

										}
									});


							},
							close : function() {
								$('#dop-form-popup form').removeClass('loading');
								$('#dop-form-popup .btn.btn-red .button-label').text('Submit');
								$('#dop-form-popup').find('input[name=uEmail]').val($('#dop-form-popup').find('input[name=uEmail]').data('value'));
								$('#dop-form-popup').find('input[name=uName]').val($('#dop-form-popup').find('input[name=uName]').data('value'));
								$('#dop-form-popup').find('input[name=uCompany]').val($('#dop-form-popup').find('input[name=uCompany]').data('value'));
								$('#dop-form-popup').find('input[name=uPhone]').val($('#dop-form-popup').find('input[name=uPhone]').data('value'));
								$('#dop-form-popup .dropdown .list ul li').first().addClass('selected');
								$('#dop-form-popup .dropdown .current').text($('#dop-form-popup .dropdown .list ul li').first().attr('data-display-text'));
								$("#dop-form-popup #uRole").val($("#dop-form-popup #uRole option:first").val());

								$('#dop-form-popup .error-message').attr('style', '');
								$('#dop-form-popup .success-message').attr('style', '');

								$('#dop-form-popup').find('input').removeClass('error');
								$('#dop-form-popup').find('#services-agreement').attr('checked', false);
								$('#dop-form-popup').find('#services-agreement').next('label').removeClass('error-checkbox');


								rwp_flag = false;
							}
						}
					});
					if(open_popup == true) {
						$('.open-dop-form').click();
					}
			} // Cookie check
		}


	if ((window.location.hash !== "") && window.location.pathname === "/cloud-services-agreement-and-clusterpoint-license-agreement"){
		setTimeout(function() {
			togglePanel(window.location.hash);
		}, 50);
	}

});

// FUNCTIONS

/*
	Function creates dropdown from select element
*/
function create_custom_dropdowns() {
	  $('select').each(function(i, select) {
	    if (!$(this).next().hasClass('dropdown')) {
	      $(this).after('<div class="dropdown ' + ($(this).attr('class') || '') + '" tabindex="0"><span class="current"></span><div class="list"><ul></ul></div></div>');
	      var dropdown = $(this).next();
	      var options = $(select).find('option');
	      var selected = $(this).find('option:selected');
	      dropdown.find('.current').html(selected.data('display-text') || selected.text());
	      options.each(function(j, o) {
	        var display = $(o).data('display-text') || '';
	        dropdown.find('ul').append('<li class="option ' + ($(o).is(':selected') ? 'selected' : '') + '" data-value="' + $(o).val() + '" data-display-text="' + display + '">' + $(o).text() + '</li>');
	      });
	    }
	});

  	// Event listeners

	// Open/close
	$(document).on('click', '.dropdown', function(event) {
	  $('.dropdown').not($(this)).removeClass('open');
	  $(this).toggleClass('open');
	  if ($(this).hasClass('open')) {
	    $(this).find('.option').attr('tabindex', 0);
	    $(this).find('.selected').focus();
	  } else {
	    $(this).find('.option').removeAttr('tabindex');
	    $(this).focus();
	  }
	});
	// Close when clicking outside
	$(document).on('click', function(event) {
	  if ($(event.target).closest('.dropdown').length === 0) {
	    $('.dropdown').removeClass('open');
	    $('.dropdown .option').removeAttr('tabindex');
	  }
	  event.stopPropagation();
	});
	// Option click
	$(document).on('click', '.dropdown .option', function(event) {
	  $(this).closest('.dropdown').find('.selected').removeClass('selected');
	  $(this).closest('.option').addClass('selected');
	  var text = $(this).data('display-text') || $(this).text();
	  $(this).closest('.dropdown').find('.current').text(text);
	  $(this).closest('.dropdown').prev('select').val($(this).data('value')).trigger('change');
	});

	// Keyboard events
	$(document).on('keydown', '.dropdown', function(event) {
	  var focused_option = $($(this).find('.list .option:focus')[0] || $(this).find('.list .option.selected')[0]);
	  // Space or Enter
	  if (event.keyCode == 32 || event.keyCode == 13) {
	    if ($(this).hasClass('open')) {
	      focused_option.trigger('click');
	    } else {
	      $(this).trigger('click');
	    }
	    return false;
	    // Down
	  } else if (event.keyCode == 40) {
	    if (!$(this).hasClass('open')) {
	      $(this).trigger('click');
	    } else {
	      focused_option.next().focus();
	    }
	    return false;
	    // Up
	  } else if (event.keyCode == 38) {
	    if (!$(this).hasClass('open')) {
	      $(this).trigger('click');
	    } else {
	      var focused_option = $($(this).find('.list .option:focus')[0] || $(this).find('.list .option.selected')[0]);
	      focused_option.prev().focus();
	    }
	    return false;
	  // Esc
	  } else if (event.keyCode == 27) {
	    if ($(this).hasClass('open')) {
	      $(this).trigger('click');
	    }
	    return false;
	  }
	});
}
/*
	Function calculate price from silders
*/
function calculatePrice() {
		var sum = 0;
		var productionSupportMin = 200;
		var value = 0;
		var calculation = 0;
		var text = '';
		var supportCheckbox = $('input[name=premium]');

		// RAM
		value = slider_ram_target.noUiSlider.get();
		calculation = value > slider_ram ? (value - slider_ram) * ram_price : 0;
		text = value + ' GB';
		$('#slider_ram').parent('.slider').find('.price').html(text + ' - <h4 class="primary inline">' + (calculation != 0 ? calculation.toFixed(2) + '</h4>' + ' &euro;' : 'FREE')).data('value', calculation.toFixed(2));
		sum += calculation;

		if(calculation == 0) {
			$('#slider_ram').find('.noUi-handle').addClass('grey-handle');
		} else {
			$('#slider_ram').find('.noUi-handle').removeClass('grey-handle')
		}

		// DISK
		value = slider_disk_target.noUiSlider.get();
		calculation = value > slider_disk ? (value - slider_disk) * disk_price : 0;
		text = value + ' GB';
		$('#slider_disk').parent('.slider').find('.price').html(text + ' - <h4 class="primary inline">' + (calculation != 0 ? calculation.toFixed(2) + '</h4>' + ' &euro;' : 'FREE')).data('value', calculation.toFixed(2));
		sum += calculation;

		if(calculation == 0) {
			$('#slider_disk').find('.noUi-handle').addClass('grey-handle');
		} else {
			$('#slider_disk').find('.noUi-handle').removeClass('grey-handle')
		}

		// TRAFFIC
		value = slider_traffic_target.noUiSlider.get();
		calculation = value > slider_traffic ? (value - slider_traffic) * traffic_price : 0;
		text = value + ' GB';
		$('#slider_traffic').parent('.slider').find('.price').html(text + ' - <h4 class="primary inline">' + (calculation != 0 ? calculation.toFixed(2) + '</h4>' + ' &euro;' : 'FREE')).data('value', calculation.toFixed(2));
		sum += calculation;

		if(calculation == 0) {
			$('#slider_traffic').find('.noUi-handle').addClass('grey-handle');
		} else {
			$('#slider_traffic').find('.noUi-handle').removeClass('grey-handle')
		}

		if (supportCheckbox.prop('checked') && sum <= productionSupportMin) {
			sum = productionSupportMin;
		}

		if (sum >= productionSupportMin && !supportCheckbox.prop('checked')) {
			supportCheckbox.prop('checked', true);
		}

		calculator.find('.total_price').html(sum != 0 ? sum.toFixed(2) + ' &euro;' : 'Free');
}

/*
	Ajax Send Contact Us
*/
function ajaxSendContactUs(dn, de, dc, dp, dm, wp_title) {
	$.ajax({
		url: baseUrl+"/lib/ajax-end-points.php",
		type: "POST",
		data: {
			"action" : "contact_us",
			"dn"	 : dn, // Name
			"de"  	 : de, // Email
			"dc"     : dc, // Company
			"dp"	 : dp, // Phone
			"dm"	 : dm, // Message
			"wt"	 : wp_title // White paper title
		},
		success:function(data) {
			if(data == 'ok') {

				$('.contact-form').find('.success-message').css('display','block').animate({opacity: 1}, 500, function() {
					setTimeout(function() {
						$('.contact-form').find('.success-message').css({'visibility' : 'hidden'});
						$('.contact-form').find('input[name=uEmail]').val($('.contact-form').find('input[name=uEmail]').data('value'));
						$('.contact-form').find('input[name=uName]').val($('.contact-form').find('input[name=uName]').data('value'));
						$('.contact-form').find('input[name=uCompany]').val($('.contact-form').find('input[name=uCompany]').data('value'));
						$('.contact-form').find('input[name=uPhone]').val($('.contact-form').find('input[name=uPhone]').data('value'));
						//$('.contact-form').find('textarea').removeClass('error').val($('.contact-form').find('textarea').data('value'));
						$('.contact-form').find('textarea').removeClass('error').val($('.contact-form').find('textarea').data('value'));
						$('.contact-form').find('form .btn').removeClass('loading');
						$('.contact-form').find('form .error-message').css({'opacity': '0', 'display' : 'none'});
						$('.contact-form').find('input').removeClass('error');
						$('.contact-form').find('form .btn').find('.label-default').css('opacity', '0');
						$('.contact-form').find('form .btn').find('.label-default').animate({opacity: 1}, 500, function() {	});

					}, 3000);
				});

			}
		}
	});
}
/*
	Ajax call for White papers
*/
function whitePapersAjax(dn, de, dc, dp, dm, wp_title) {
	$.ajax({
		url: baseUrl+"/lib/ajax-end-points.php",
		type: "POST",
		data: {
			"action" : "white_papers",
			"dn"	 : dn, // Name
			"de"  	 : de, // Email
			"dc"     : dc, // Company
			"dp"	 : dp, // Phone
			"dm"	 : dm, // Message
			"wt"	 : wp_title // White paper title
		},
		success:function(data) {
			$('.mfp-ready form').animate({opacity: 0}, 500, function() {
				$('.mfp-ready form').css('visibility', 'hidden');

				$('.mfp-ready .download-wrap').css('visibility', 'visible');
				$('.mfp-ready .download-wrap').animate({opacity: 1}, 500, function() {
					$('.mfp-ready .download-wrap .btn').on('click',function() {
						setTimeout(function() {
							$('.mfp-ready .mfp-close').click();
						}, 500);
					});
				});
			});

			rwp_flag = false;
		}
	});
}
/*
	Ajax call pricing application contact form
*/
function applicationContactAjax(dn, de, dc, dp, dm) {
	$.ajax({
		url: baseUrl+"/lib/ajax-end-points.php",
		type: "POST",
		data: {
			"action" : "aplication_contact",
			"dn"	 : dn, // Name
			"de"  	 : de, // Email
			"dc"     : dc, // Company
			"dp"	 : dp, // Phone
			"dm"	 : dm, // Message
		},
		success:function(data) {
			$('.mfp-ready form').animate({opacity: 0}, 500, function() {
				$('.mfp-ready form').css('visibility', 'hidden');

				$('.mfp-ready .download-wrap').css('visibility', 'visible');
				$('.mfp-ready .download-wrap').animate({opacity: 1}, 500, function() {
					$('.mfp-ready .download-wrap .btn').on('click',function() {
						setTimeout(function() {
							$('.mfp-ready .mfp-close').click();
						}, 500);
					});
				});

				if ($('.form-popup .mfp-close')) {
					$('.form-popup .mfp-close').click();
				}
			});

			rwp_flag = false;
		}
	});
}
/*
	Ajax call download on perm
*/
function downloadOnPremAjax(dn, de, dc, dp, dr) {
	$.ajax({
		url: baseUrl+"/lib/ajax-end-points.php",
		type: "POST",
		data: {
			"action" : "download_on_prem",
			"dn"	 : dn, // Name
			"de"  	 : de, // Email
			"dc"     : dc, // Company
			"dp"	 : dp, // Phone
			"dr"	 : dr, // Role
		},
		success:function(data) {
			if($('#dop-form-popup').find('#services-agreement').is(':checked')) {
				Cookies.set('clusterpoint', true);
				window.location.href = baseUrl+'/downloads';
			}
			rwp_flag = false;
		}
	});
}

/*
	Function for email validation
*/
function validateEmail(email) {
	var tester = /^[-!#$%&'*+\/0-9=?A-Z^_a-z{|}~](\.?[-!#$%&'*+/0-9=?A-Z^_a-z`{|}~])*@[a-zA-Z0-9](-?\.?[a-zA-Z0-9])*(\.[a-zA-Z](-?[a-zA-Z0-9])*)+$/;

	if (!email)
		return false;

	if(email.length>254)
		return false;

	var valid = tester.test(email);
	if(!valid)
		return false;

	// Further checking of some things regex can't handle
	var parts = email.split("@");
	if(parts[0].length>64)
		return false;

	var domainParts = parts[1].split(".");
	if(domainParts.some(function(part) { return part.length>63; }))
		return false;

	return true;
}

/*
	Function for phone validation
*/
function validatePhone(txtPhone) {
    var a = txtPhone;
    var filter = /^((\+[1-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/;
    if (filter.test(a)) {
        return true;
    }
    else {
        return false;
    }
}

/*
* Custom panel function*/

function togglePanel(panel) {
	if (!$(panel).hasClass('hidden_panel')) {
		$(panel).parent().parent().height(154);
		$(panel).toggleClass('hidden_panel');
	} else {
		var elements = $('.panel_container');
		for (var i = 0; i < elements.length; i++) {
			if (!$(elements[i]).hasClass('hidden_panel')) {
				$(elements[i]).toggleClass('hidden_panel');
			}
		}
		$(panel).toggleClass('hidden_panel');
		$(panel).parent().parent().height(154 + $(panel).height());
	}
}

function switchPanel(panel) {
	$('.memberPanels').css('display', 'none');
	$('.management-btn').removeClass('active');
	$('#' + panel).css('display', 'block');
	$('#btn-' + panel).addClass('active');
}