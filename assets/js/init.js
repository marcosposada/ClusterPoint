			var delay_elements = [];
			var isSafari = !!navigator.userAgent.match(/Version\/[\d\.]+.*Safari/);
			
			$(document).ready(function($) {
				
				$('.footer-bg').css('height', $('#footer').height()+'px');
				
				$(window).resize(function() {
					$('.footer-bg').css('height', $('#footer').height()+'px');
				});
				
				
				function calculateDynamicBlocks() {
					
					if($('[data-ch="keep-14"]').length > 0) {
						$('[data-ch="keep-14"]').each(function() {
							var $el = $(this),
								el_h = $el.outerHeight(),
								step = 14;
								
								if($(this).find('[data-ch="true"]')) {
									// Check if height divides with step without reminder
									if(el_h % step !== 0) {
										
										var rem = step - (el_h % step);
										var el_id = $el.attr('id');
										new_h = el_h + rem; // Calculate how much height neet to be added
										$el.css('height', new_h+'px');
									} else {
										if(el_h % 2 !== 0) {
											new_h = el_h + step;
											$el.css('height', new_h+'px'); // Set new height
										}
									}
								}	
						});
					}	
					
					if($('[data-ch="true"]').length > 0) {
						$('[data-ch="true"]').each(function() {
							var $el = $(this),
								el_h = $el.outerHeight(),
								step = 14;
								
								if($(this).find('[data-ch="true"]')) {
									delay_elements.push($(this));
								} else {
									// Check if height divides with step without reminder
									if(el_h % step !== 0) {
										
										var rem = step - (el_h % step);
										var el_id = $el.attr('id');
										new_h = el_h + rem; // Calculate how much height neet to be added
										if(new_h % 2 === 0) {
											new_h = new_h + step;
											$el.css('height', new_h+'px'); // Set new height
										}
									} else {
										if(el_h % 2 !== 0) {
											new_h = el_h + step;
											$el.css('height', new_h+'px'); // Set new height
										}
									}
								}	
						});
					
						$(delay_elements).each(function() {
					
							var $el = $(this),
								el_h = $el.outerHeight(),
								step = 14;
								
								// Check if height divides with step without reminder
								if(el_h % step !== 0) {	
									var rem = step - (el_h % step),
										el_id = $el.attr('id');
										new_h = el_h + rem; // Calculate how much height neet to be added
									if(new_h % 2 === 0) {
										new_h = new_h + step;
										$el.css('height', new_h+'px'); // Set new height
									}
											
								} else {
										if(el_h % 2 !== 0) {
											new_h = el_h + step;
											$el.css('height', new_h+'px'); // Set new height
										}
									}
									
						
						});
					}
				}
				
				// Calculate first time
				//calculateDynamicBlocks();
				setTimeout(function() { calculateDynamicBlocks(); }, 16);
				setTimeout(function() { if(isSafari == true) { $(window).resize(); } }, 500);
				$(window).on('resize', function() { $('[data-ch="true"]').css('height', 'auto'); $('[data-ch="keep-14"]').css('height', 'auto');  calculateDynamicBlocks(); });
			
			});