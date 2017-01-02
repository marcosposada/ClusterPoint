		<div id="page-downloads" class="page-wrap">
			<section id="hero" data-ch="true">
				<div class="container">
					<div class="row">
						<div class="col-md-10 center-block">
							<div class="row">
								<h1 class="el-animation"><span>Downloads</span></h1>
							</div><?php /* End row */ echo "\n"; ?>
						</div><?php /* End col-md-10 */ echo "\n"; ?>
					</div><?php /* End row */ echo "\n"; ?>
				</div><?php /* End container */ echo "\n"; ?>
			</section><?php /* End about-contact-form */ echo "\n"; ?>

			<section id="" data-ch="true" class="white-before content">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 center-block el-animation-2">
							<p>We have prepared packages for following Linux distributions: Centos, Debian and Ubuntu. All packages are available in 64 bit versions only. If you can't find package for your distribution in provided list you are welcome to ask us droping email to <a href="mailto:support@clusterpoint.com">support@clusterpoint.com</a>.</p>
<?php
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://packages.clusterpoint.com/cpsrelease.json');
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$cResponse = json_decode(curl_exec($ch), true);
	$errorMsg = curl_error($ch);
	if ($errorMsg) {
		$cResponse = Array('cps_stable_release_version' => '4.1.x');
	}
	curl_close($ch);
?>
<p>All available packages contain <b>Clusterpoint version <?php echo $cResponse['cps_stable_release_version']; ?></b></p>

<p>There are 3 types of downloads available:
	<ul>
		<li><b>Clusterpoint full package</b> - contains Clusterpoint manager, node, hub and http service. It has everything you need to start your personal Clusterpoint database cloud.</li>
		<li><b>Clusterpoint node &amp; hub package</b> - contains Clusterpoint additional node and hub. Should be installed if you want to add new machine (server) for increased performance and data storage size.</li>
		<li><b>Clusterpoint HTTP package</b> - contains Clusterpoint additional HTTP service. Should be installed on additional machine if you want to add additional REST interface for your cloud. Remember, 'clusterpoint' package already contains one.</li>
	</ul>
</p>
							
<p>
	Installation instructions are available <a href="https://www.clusterpoint.com/docs/4.0/396/on-premises-installation" target="_blank">here</a>
</p>							

<h2>Debian 8</h2>

<p><a href="http://packages.clusterpoint.com/debian8/clusterpoint-4-latest.amd64.deb">Download Clusterpoint full package setup (64-bit)</a></p>

<p><a href="http://packages.clusterpoint.com/debian8/clusterpoint-node-hub-4-latest.amd64.deb">Download Clusterpoint additional node &amp; hub (64-bit)</a></p>

<p><a href="http://packages.clusterpoint.com/debian8/clusterpoint-http-4-latest.amd64.deb">Download Clusterpoint additional HTTP service (64-bit)</a></p>

<h2>Debian 7</h2>

<p><a href="http://packages.clusterpoint.com/debian7/clusterpoint-4-latest.amd64.deb">Download Clusterpoint full package setup (64-bit)</a></p>

<p><a href="http://packages.clusterpoint.com/debian7/clusterpoint-node-hub-4-latest.amd64.deb">Download Clusterpoint additional node &amp; hub (64-bit)</a></p>

<p><a href="http://packages.clusterpoint.com/debian8/clusterpoint-http-4-latest.amd64.deb">Download Clusterpoint additional HTTP service (64-bit)</a></p>

<h2>Ubuntu 14.04</h2>

<p><a href="http://packages.clusterpoint.com/ubuntu1404/clusterpoint-4-latest.amd64.deb">Download Clusterpoint full package setup (64-bit)</a></p>

<p><a href="http://packages.clusterpoint.com/ubuntu1404/clusterpoint-node-hub-4-latest.amd64.deb">Download Clusterpoint additional node &amp; hub (64-bit)</a></p>

<p><a href="http://packages.clusterpoint.com/ubuntu1404/clusterpoint-http-4-latest.amd64.deb">Download Clusterpoint additional HTTP service (64-bit)</a></p>

<h2>Ubuntu 12.04</h2>

<p><a href="http://packages.clusterpoint.com/ubuntu1204/clusterpoint-4-latest.amd64.deb">Download Clusterpoint full package setup (64-bit)</a></p>

<p><a href="http://packages.clusterpoint.com/ubuntu1204/clusterpoint-node-hub-4-latest.amd64.deb">Download Clusterpoint additional node &amp; hub (64-bit)</a></p>

<p><a href="http://packages.clusterpoint.com/ubuntu1204/clusterpoint-http-4-latest.amd64.deb">Download Clusterpoint additional HTTP service (64-bit)</a></p>

<h2>Centos 7</h2>

<p><a href="http://packages.clusterpoint.com/centos7/clusterpoint-4-latest.el7.centos.x86_64.rpm">Download Clusterpoint full package setup (64-bit)</a></p>

<p><a href="http://packages.clusterpoint.com/centos7/clusterpoint-node-hub-4-latest.el7.centos.x86_64.rpm">Download Clusterpoint additional node &amp; hub (64-bit)</a></p>

<p><a href="http://packages.clusterpoint.com/centos7/clusterpoint-http-4-latest.el7.centos.x86_64.rpm">Download Clusterpoint additional HTTP service (64-bit)</a></p>

<h2>Centos 6</h2>

<p><a href="http://packages.clusterpoint.com/centos6/clusterpoint-4-latest.el6.x86_64.rpm">Download Clusterpoint full package setup (64-bit)</a></p>

<p><a href="http://packages.clusterpoint.com/centos6/clusterpoint-node-hub-4-latest.el6.x86_64.rpm">Download Clusterpoint additional node &amp; hub (64-bit)</a></p>

<p><a href="http://packages.clusterpoint.com/centos6/clusterpoint-http-4-latest.el6.x86_64.rpm">Download Clusterpoint additional HTTP service (64-bit)</a></p>

<p>Installation is straight-forward. If you have any questions, please contact <a href="mailto:support@clusterpoint.com">support@clusterpoint.com</a>.</p>
						</div><?php /* End col-md-10 */ ?>
					</div><?php /* End row */ ?>
				</div><?php /* End container */ echo "\n"; ?>
			</section><?php /* End single-content */ echo "\n"; ?>
		</div><?php /* End page-onboarding-services */ echo "\n"; ?>
