<?php
	#same head file for all pages
	include('head.php'); 
	echo "\n";
?>
		<header id="header" class="purple-after">
			<div class="container">
				<div class="row">
				<div class="col-lg-10 col-sm-12 center-block">
					<div class="site-logo-wrap">
						<a href="<?php echo $base_url; ?>" class="site-logo-link">
							<img src="<?php echo $base_url; ?>/assets/images/clusterpoint-purple-block-logo.jpg" class="site-logo-image">
							<img src="<?php echo $base_url; ?>/assets/images/clusterpoint-logo-mobile.svg" class="site-logo-image-mobile" width="104" height="14">
						</a>
					</div><?php /* End logo-wrap */ echo "\n"; ?>
					<a href="#" class="btn btn-purple mobile-menu-trigger">
						<i class="fa fa-bars"></i>
					</a>
				</div><?php /* End col-md-12 */ echo "\n"; ?>
				</div><?php /* End row */ echo "\n"; ?>
			</div><?php /* End container */ echo "\n"; ?>
		</header><?php /* End header */ echo "\n"; ?>
		<div id="page-navigation" class="purple-after ">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 col-md-12 center-block">
						<div class="row">
					<div class="site-menu-wrap">
						<a href="<?php echo $sign_up_url; ?>" class="btn btn-red mobile-menu-btn">Get Started</a>
						<ul class="site-menu">
							<li class="dropdown-open mobile-dropdown-open visible-xs"><a href="<?php echo $base_url; ?>/" class="site-menu-link menu-link-product first-level">Home</a>
<!--							<li class="--><?php //if(isset($params[1]) && $params[1] == 'product' && !$show_404) echo 'dropdown-open mobile-dropdown-open'; ?><!-- has-dropdown"><a href="--><?php //echo $base_url; ?><!--/product/instantly-scalable" class="site-menu-link menu-link-product first-level">Product</a>-->
							<li class="<?php if(isset($params[1]) && $params[1] == 'product' && !$show_404) echo 'dropdown-open mobile-dropdown-open'; ?> has-dropdown"><a href="<?php echo $base_url; ?>/product/products" class="site-menu-link menu-link-product first-level">Product</a>
								<div class="sub-menu-wrap">
									<span class="sub-menu-before"></span>
									<nav class="sub-menu">
										<ul class="sub-menu-links">
											<li><a href="<?php echo $base_url; ?>/product/instantly-scalable" class="site-menu-link menu-link-instantly-scalable <?php if(isset($params[2]) && $params[2] == 'instantly-scalable') echo 'active'; ?>">Instantly Scalable</a></li>
											<li><a href="<?php echo $base_url; ?>/product/js-sql-query-language" class="site-menu-link menu-link-js-sql-query-language <?php if(isset($params[2]) && $params[2] == 'js-sql-query-language') echo 'active'; ?>">JS/SQL Query Language</a></li>
											<li><a href="<?php echo $base_url; ?>/product/joins" class="site-menu-link menu-link-joins <?php if(isset($params[2]) && $params[2] == 'joins') echo 'active'; ?>">Joins</a></li>
											<li><a href="<?php echo $base_url; ?>/product/acid-transactions" class="site-menu-link menu-link-acid-transactions <?php if(isset($params[2]) && $params[2] == 'acid-transactions') echo 'active'; ?>">ACID Transactions</a></li>
											<li><a href="<?php echo $base_url; ?>/product/cost-effectiveness" class="site-menu-link menu-link-cost-effective <?php if(isset($params[2]) && $params[2] == 'cost-effectiveness') echo 'active'; ?>">Cost Effectiveness</a></li>
											<li><a href="<?php echo $base_url; ?>/product/portability" class="site-menu-link menu-link-portability <?php if(isset($params[2]) && $params[2] == 'portability') echo 'active'; ?>">Portability</a></li>
											<li><a href="<?php echo $sign_up_url; ?>" class="button black-2 sub-menu-btn">Get Started</a></li>
										</ul>
									</nav>
									<span class="sub-menu-after"></span>
								</div><?php /* End sub-menu-wrap */ echo "\n"; ?>
							</li>
							<li><a href="<?php echo $base_url; ?>/pricing" class="site-menu-link menu-link-pricing first-level <?php if(isset($params[1]) && $params[1] == 'pricing') echo 'active'; ?>">Pricing</a></li>
							<li class="<?php if(isset($params[1]) && $params[1] == 'for-business' && !$single && !$show_404) echo 'dropdown-open mobile-dropdown-open'; ?> has-dropdown"><a href="<?php echo $base_url; ?>/for-business/onboarding-services" class="site-menu-link menu-link-for-business first-level">For Business</a>
								<div class="sub-menu-wrap">
									<nav class="sub-menu">
										<span class="sub-menu-before"></span>
										<ul class="sub-menu-links">
											<li><a href="<?php echo $base_url; ?>/for-business/onboarding-services" class="site-menu-link menu-link-onboarding-service <?php if(isset($params[2]) && $params[2] == 'onboarding-services') echo 'active'; ?>">Onboarding Services</a></li>
											<li><a href="<?php echo $base_url; ?>/for-business/ntss-net-security" class="site-menu-link menu-link-ntss-net-security <?php if(isset($params[2]) && $params[2] == 'ntss-net-security') echo 'active'; ?>">NTSS - Net Security</a></li>
											<li><a href="<?php echo $base_url; ?>/for-business/gol-log-analytics" class="site-menu-link menu-link-gol-log-analytics <?php if(isset($params[2]) && $params[2] == 'gol-log-analytics') echo 'active'; ?>">GOL - Log Analytics</a></li>
											<li><a href="<?php echo $sign_up_url; ?>" class="button black-2 sub-menu-btn">Get Started</a></li>
										</ul>
										<span class="sub-menu-after"></span>
									</nav>
								</div><?php /* End sub-menu-wrap */ echo "\n"; ?>
							</li>
							<li class="<?php if(isset($params[1]) && $params[1] == 'resources' && !$single && !$show_404) echo 'dropdown-open mobile-dropdown-open'; ?> has-dropdown"><a href="<?php echo $base_url; ?>/resources/faq" class="site-menu-link menu-link-resources first-level">Resources</a>
							<div class="sub-menu-wrap">
								<nav class="sub-menu">
									<ul class="sub-menu-links">
										<li><a href="<?php echo $base_url; ?>/resources/faq" class="site-menu-link menu-link-about <?php if(isset($params[2]) && $params[2] == 'faq') echo 'active'; ?>">FAQ</a></li>
										<li><a href="<?php echo $base_url; ?>/resources/examples-and-tutorials" class="site-menu-link menu-link-about <?php if(isset($params[2]) && $params[2] == 'examples-and-tutorials') echo 'active'; ?>">Examples & Tutorials</a></li>
										<li><a href="<?php echo $base_url; ?>/resources/white-papers" class="site-menu-link menu-link-about <?php if(isset($params[2]) && $params[2] == 'white-papers') echo 'active'; ?>">White Papers & Use Cases</a></li>
										<li><a href="https://www.clusterpoint.com/docs" class="site-menu-link menu-link-documentation" target="_blank">Documentation</a></li>
										<li><a href="<?php echo $sign_up_url; ?>" class="button black-2 sub-menu-btn">Get Started</a></li>
									</ul>
								</nav>
							</div><?php /* End sub-menu-wrap */ echo "\n"; ?>
							</li>
							
<!-- 							<li><a href="<?php echo $base_url; ?>/use-cases" class="site-menu-link menu-link-use-cases first-level <?php if(isset($params[1]) && $params[1] == 'use-cases') echo 'active'; ?>">Use Cases</a></li> -->
							<li><a href="<?php echo $base_url; ?>/company/blog" class="site-menu-link menu-link-blog first-level <?php if(isset($params[2]) && $params[2] == 'blog' && $single) echo 'active'; ?>">Blog</a></li>
							
							<li class="<?php if(isset($params[1]) && $params[1] == 'company' && !$single && !$show_404) echo 'dropdown-open mobile-dropdown-open'; ?> has-dropdown"><a href="<?php echo $base_url; ?>/company/about" class="site-menu-link menu-link-company first-level">Company</a>
								<div class="sub-menu-wrap">
									<nav class="sub-menu">
										<span class="sub-menu-before"></span>
										<ul class="sub-menu-links">
											<li><a href="<?php echo $base_url; ?>/company/about" class="site-menu-link menu-link-about <?php if(isset($params[2]) && $params[2] == 'about') echo 'active'; ?>">About</a></li>
											<li><a href="<?php echo $base_url; ?>/company/blog" class="site-menu-link menu-link-blog <?php if(isset($params[2]) && $params[2] == 'blog') echo 'active'; ?>">Blog</a></li>
											<li><a href="<?php echo $base_url; ?>/company/events" class="site-menu-link menu-link-events <?php if(isset($params[2]) && $params[2] == 'events') echo 'active'; ?>">Events</a></li>
											<li><a href="<?php echo $base_url; ?>/company/press" class="site-menu-link menu-link-press <?php if(isset($params[2]) && $params[2] == 'press') echo 'active'; ?>">Press</a></li>
											<li><a href="<?php echo $base_url; ?>/company/careers" class="site-menu-link menu-link-careers <?php if(isset($params[2]) && $params[2] == 'careers') echo 'active'; ?>">Careers</a></li>
											<li><a href="<?php echo $base_url; ?>/company/partners" class="site-menu-link menu-link-partners <?php if(isset($params[2]) && $params[2] == 'partners') echo 'active'; ?>">Partners</a></li>
											<li><a href="<?php echo $sign_up_url; ?>" class="button btn-violet sub-menu-btn">Get Started</a></li>
										</ul>
										<span class="sub-menu-after"></span>
									</nav>
								</div><?php /* End sub-menu-wrap */ echo "\n"; ?>
							</li>
							
							<li><a href="<?php echo $login_url; ?>" class="site-menu-link menu-link-sign-in">Sign In</a></li>
						</ul>
						<a href="#" class="mobile-menu-close"></a>
					</div><?php /* End site-menu-wrap */ echo "\n"; ?>	
						</div><?php /* End row */ echo "\n"; ?>
					</div><?php /* End col-md-10 */ echo "\n"; ?>
				</div><?php /* End row */ echo "\n"; ?>
			</div><?php /* End container */ echo "\n"; ?>
		</div><?php /* End page-navigation */ echo "\n"; ?>
		<!--<div class="pattern-fix">
			<div class="pattern-background"></div><?php /* End page-bg */ echo "\n"; ?>
			<div class="point-animation"></div><?php /* End point-animation */ echo "\n"; ?>
		</div><?php /* End page-point-fix */ echo "\n"; ?>
        -->