		<div id="page-partners" class="page-wrap">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-xs-11 center-block" data-ch="true">
							<div class="row">
								<h1 class="el-animation">Partners</h1>
							</div><?php /* End row */ echo "\n"; ?>
						</div><?php /* End col-md-12 */ echo "\n"; ?>
					</div><?php /* End row */ echo "\n"; ?>
				</div><?php /* End container */ echo "\n"; ?>
				<section id="partners" class="white-block white-before" data-ch="true">
					<div class="container">
						<div class="row">
							<div class="col-md-10 col-xs-11 center-block">
								<div class="partners-row el-animation">
									<div class="col-md-6 col-1 col-xs-12">
										<div class="row">
											<h4>Cloud partners</h4>
											<p>Clusterpoint is available as-a-service through our Cloud partners CenturyLink and Telia Latvija.</p>
										</div><?php /* End row */ echo "\n"; ?>		
									</div><?php /* End col-md-6 */ echo "\n"; ?>
									<div class="col-md-6 col-2 col-xs-12">
										<div class="row">
										<?php
											$cloud_partners_array = array(
												array('partner' => 'century-link', 'w' => 173, 'h' =>43, 'link' => 'http://www.centurylink.com/'),
												array('partner' => 'telia-latvija', 'w' => 141, 'h' =>36, 'link' => 'http://www.telia.lv/en/')
											);
											
											foreach($cloud_partners_array as $cloud_partner) :
										?>
												<div class="col-md-6">
													<div class="image-wrap">
														<a href="<?php echo $cloud_partner["link"]; ?>" target="_blank">
															<img src="<?php echo $base_url; ?>/assets/images/partners/cloud-partners/<?php echo $cloud_partner["partner"]; ?>.svg"  width="<?php echo $cloud_partner["w"]; ?>" height="<?php echo $cloud_partner["h"]; ?>" class="svg-image">
															<img src="<?php echo $base_url; ?>/assets/images/partners/cloud-partners/fallback/<?php echo $cloud_partner["partner"]; ?>.png" class="png-image">
														</a>
													</div><?php /* End image-wrap */ echo "\n"; ?>
												</div><?php /* End col-md-6 */ echo "\n"; ?>
										<?php
											endforeach; 
										?>
										</div><?php /* End row */ echo "\n"; ?>	
									</div><?php /* End col-md-6 */ echo "\n"; ?>
								</div><?php /* End partners-row */ echo "\n"; ?>
								<div class="partners-row last-row  ]el-animation">
									<div class="col-md-6 col-1 col-xs-12">
										<div class="row">
											<h4>Development partners</h4>
											<p>Clusterpoint is being implemented in various solutions developed by our software development partners to solve their customer big data processing and real time analytics needs.</p>
										</div><?php /* End row */ echo "\n"; ?>		
									</div><?php /* End col-md-6 */ echo "\n"; ?>
									<div class="col-md-6 col-2 col-xs-12">
											<div class="row">
											<?php
												$development_partners_array = array(
													array('partner' => 'lattelecom-technology', 'w' => 149, 'h' => 43, 'link' => 'https://www.lattelecom.lv/en/about-lattelecom/subsidiaries/lattelecom-technology/description'),
													array('partner' => 'ugunssiena', 'w' => 149, 'h' => 43, 'link' => 'http://www.ugunssiena.lv/'),
													array('partner' => 'zoom-charts', 'w' =>132, 'h' =>50, 'link' => 'https://zoomcharts.com/en/'),
													array('partner' => 'divi-grupa', 'w' =>159, 'h' => 87, 'link' => 'http://www.di.lv/' ),
													array('partner' => 'zz-dats', 'w' =>159, 'h' =>87, 'link' => 'http://www.zzdats.lv/en/' ),
													array('partner' => 'rix-technologies', 'w' =>159, 'h' =>87, 'link' => 'http://www.rixtech.lv/en/' ),
													array('partner' => 'aurum-it', 'w' =>133, 'h' =>83, 'link' => 'http://www.aurumit.com/' ),
													array('partner' => 'scandic-fusion', 'w' =>133, 'h' =>83, 'link' => 'https://www.scandicfusion.com/' ),
													array('partner' => 'autentica', 'w' =>133, 'h' =>83, 'link' => 'http://www.autentica.lv/en/' ),
												);
												
												$counter = 0; 
												
												foreach($development_partners_array as $development_partner) :
											?>
												<div class="col-md-6">
													<div class="image-wrap">
														<a href="<?php echo $development_partner["link"]; ?>" target="_blank">
															<img src="<?php echo $base_url; ?>/assets/images/partners/development-partners/<?php echo $development_partner["partner"]; ?>.svg" width="<?php echo $development_partner["w"]; ?>" height="<?php echo $development_partner["h"]; ?>" class="svg-image">
															<img src="<?php echo $base_url; ?>/assets/images/partners/development-partners/fallback/<?php echo $development_partner["partner"]; ?>.png" class="png-image">
														</a>
													</div><?php /* End image-wrap */ echo "\n"; ?>
												</div><?php /* End col-md-6 */ echo "\n"; ?>
											<?php
													$counter++;
								                	if ($counter % 2 == 0) echo '</div><div class="row">';
												endforeach; 
											?>
										</div><?php /* End row */ echo "\n"; ?>	
									</div><?php /* End col-md-6 */ echo "\n"; ?>
								</div><?php /* End partners-row */ echo "\n"; ?>
								<div class="get-in-touch-text"><strong>Interested in partnership? Get in touch!</strong></div><?php /* End get-in-touch-text */ echo "\n"; ?>
							</div><?php /* End container */ echo "\n"; ?>
						</div><?php /* End row */ echo "\n"; ?>	
					</div><?php /* End container */ echo "\n"; ?>
				</section><?php /* End partners */ echo "\n"; ?>
				<section id="partners-contact-form" data-ch="true">
					<div class="container">
						<div class="row">
							<div class="col-md-8 col-xs-12 center-block el-animation">
								<div class="row">
								<?php
									#contact form
									include("templates/contact-form.php");
								?>
								</div><?php /* End row */ echo "\n"; ?>
							</div><?php /* End col-md-10 */ echo "\n"; ?>
						</div><?php /* End row */ echo "\n"; ?>
					</div><?php /* End container */ echo "\n"; ?>
				</section><?php /* End about-contact-form */ echo "\n"; ?>
		</div><?php /* End page-events */ echo "\n"; ?>