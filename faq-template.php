		<div id="page-faq" class="page-wrap">
			<section id="main-content">
				<div class="container">
					<div class="title-wrap">
						<h1 class="el-animation"><span>FAQ</span></h1>
					</div><?php /* End title-wrap */ echo "\n"; ?>
					<div class="faqs white-before el-animation-2" data-ch="keep-14">
							<?php
								#post id
								$post_id = 119;
								# prepare SQL query titles and texts
								$titles = $wpdb->get_results($wpdb->prepare("SELECT * FROM {$wpdb->postmeta} WHERE meta_key LIKE %s AND post_id LIKE %s;", 'faqs_%_title', "{$post_id}"));
								$texts = $wpdb->get_results($wpdb->prepare("SELECT * FROM {$wpdb->postmeta} WHERE meta_key LIKE %s AND post_id LIKE %s;", 'faqs_%_text', "{$post_id}"));
								
								$i = 0; 
								foreach($titles as $title) :
							?>
							<div class="set">
								<a href="javascript:void(0)">
									<?php echo $title->meta_value; ?>
									<span class="icon"><span class="open"></span></span>
								</a>
								<div class="content">
									<div class="inner-content">
										<div class="table">
											<?php echo wpautop($texts[$i]->meta_value); ?>
										</div><?php /* End table-cell */ echo "\n"; ?>
									</div><?php /* End inner-content */ echo "\n"; ?>
						    	</div><?php /* End content */ echo "\n"; ?>
							</div><?php /* End set */ echo "\n"; ?>
							<?php $i++; endforeach; ?>
					</div><?php /* End faqs */ echo "\n"; ?>
					<div class="hidden-set"></div><?php /* End hidden-set */ echo "\n"; ?>
				</div><?php /* End container */ echo "\n"; ?>
			</section><?php /* End section */ echo "\n"; ?>
		</div><?php /* End page-events */ echo "\n"; ?>
		
<script>
$(document).ready(function(){
	

	accardionHeight();
	$(window).on('resize', function() {
		accardionHeight();
	});

	
	function accardionHeight() {
		$('.set .content .inner-content').each(function() {
	
			$('.hidden-set').html($(this).html());
			
			var el_h = $('.hidden-set').height(),
				step = 14;
			
			// Check if height divides with step without reminder
			if(el_h % step !== 0) {
				var rem = step - (el_h % step);
				new_h = el_h + rem; // Calculate how much height neet to be added
				$(this).css('height', new_h+'px'); // Set new height
				
			} else {
				new_h = el_h;
				$(this).css('height', new_h+'px'); // Set new height
			}
			
		});
	}
	
	$(".set > a").on("click", function(){   
	    if($(this).hasClass('active')) {
		    $(this).removeClass("active");
		    $(this).siblings('.content').slideUp(200);
		    $(".set > a i").removeClass("fa-minus").addClass("fa-plus");
	    } else{
	    	$(".set > a i").removeClass("fa-minus").addClass("fa-plus");
			$(this).find("i").removeClass("fa-plus").addClass("fa-minus");
			$(".set > a").removeClass("active");
			$(this).addClass("active");
			$('.content').slideUp(200);
			$(this).siblings('.content').slideDown(200);
	    } 
  	});
});
</script>