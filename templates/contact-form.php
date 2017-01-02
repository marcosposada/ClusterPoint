						<div class="contact-form col-md-8 col-xs-12 center-block">
						<?php if(isset($form_popup) && $form_popup == true) : ?>	
							<div class="form-title">
								Request white paper
							</div><?php /* End form-title */ echo "\n"; ?>
						<?php endif; ?>
							<form>
								<div class="form-left-side grey-before grey-after">
									<div class="input-wrap">
										<input type="text" name="uName" value="Name" data-value="Name">
									</div><?php /* End input-wrap */ echo "\n"; ?>
									<div class="input-wrap">
										<input type="text" name="uCompany" value="Company" data-value="Company">
									</div><?php /* End input-wrap */ echo "\n"; ?>
									<div class="input-wrap">
										<input type="text" name="uEmail" value="Email" data-value="Email">
									</div><?php /* End input-wrap */ echo "\n"; ?>
									<div class="input-wrap">
										<input type="text" name="uPhone" value="Phone" data-value="Phone">
									</div><?php /* End input-wrap */ echo "\n"; ?>
								</div><?php /* End form-left-side */ echo "\n"; ?>
								<div class="form-right-side grey-before grey-after">
									<div class="input-wrap">
										<textarea class="textarea" name="bodyText" data-value="Type your message here">Type your message here</textarea>
										<div class="button-wrap">
											<a href="" class="btn btn-red" <?php if(isset($form_popup) && $form_popup == true) : ?>data-wp-title="<?php echo $title; ?>"<?php endif; ?>><span class="button-label label-default">Send</span><span class="button-label label-loading">Sending</span></a>
										</div><?php /* End button-wrap */ echo "\n"; ?>
									</div><?php /* End input-wrap */ echo "\n"; ?>
								</div><?php /* End form-right-side */ echo "\n"; ?>
								<div class="success-message">Message has been sent.</div><?php /* End success-meassage */ echo "\n"; ?>
								<div class="error-message"></div><?php /* End error-meassage */ echo "\n"; ?>
							</form>
							<?php if(isset($form_popup) && $form_popup == true) : ?>
							<div class="download-wrap">
								<a href="<?php echo $base_url; ?>/lib/download.php?url=<?php echo $file_url; ?>" class="btn btn-red"><span class="button-label label-default">Download</a>
							</div><?php /* End contact-form */ echo "\n"; ?>
							<?php endif; ?>
						</div><?php /* End contact-form */ echo "\n"; ?>