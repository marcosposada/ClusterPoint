		<div id="page-engine" class="page-wrap">
			<section id="animation" data-ch="true">
				<div class="bg">
					<div id="Stage" class="js-sql-query-language hide-touch-devices" style="opacity:0, filter:alpha(opacity=0);">
				        <div id="Stage__02_stars" class="edgeLoad-js-sql-query-language"></div>
				        <div id="Stage__02_lines-1" class="edgeLoad-js-sql-query-language"></div>
				        <div id="Stage__02_lines-2" class="edgeLoad-js-sql-query-language"></div>
				        <div id="Stage__02_lines-3" class="edgeLoad-js-sql-query-language"></div>
				        <div id="Stage__02_circle" class="edgeLoad-js-sql-query-language"></div>
				        <div id="Stage__02-winf-right-bottom" class="edgeLoad-js-sql-query-language"></div>
				        <div id="Stage__02-wing-right-top" class="edgeLoad-js-sql-query-language"></div>
				        <div id="Stage__02-wing-left-bottom" class="edgeLoad-js-sql-query-language"></div>
				        <div id="Stage__02-wing-left-top" class="edgeLoad-js-sql-query-language"></div>
				        <div id="Stage__02-ship-BODY" class="edgeLoad-js-sql-query-language"></div>
				    </div><?php /* End stage */ echo "\n"; ?>
				    <div class="animation-fallback">
					    <img src="<?php echo $base_url; ?>/assets/images/engine/engine-animation.svg" />
				    </div><?php /* End animation-fallback */ echo "\n"; ?>
				</div><?php /* End bg */ echo "\n"; ?>
				<div class="container">
					<div class="row">
						<div class="col-md-10 col-xs-10 center-block">
							<div class="row">
								<h1 class="el-animation">Computing Engine <br/>with JS/SQL</h1>
								<div class="text el-animation">
									<p>Clusterpoint is based on idea that instead of using proprietary query language, database should be a generic computing engine. We allow arbitrary computation to be done in JavaScript. To facilitate parallelism and give code a structure, we embed it in SQL based statements. JS/SQL statements look like SQL with embedded JavaScript.</p>
								</div><?php /* End text */ echo "\n"; ?>
							</div><?php /* End row */ echo "\n"; ?>
						</div><?php /* End col-md-10 */ echo "\n"; ?>
					</div><?php /* End row */ echo "\n"; ?>
				</div><?php /* End container */ echo "\n"; ?>
			</section><?php /* End animation */ echo "\n"; ?>
			<section id="engine-content">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-xs-12 center-block" data-ch="true">
							<div class="content el-animation" data-ch="true">
								<p>In addition, we provide efficient document model. Our users can store data in JSON or XML format and at query time JavaScript can access field of a stored documents like they were variables in local scope.</p>
								<p>Thus we anticipate storing data in raw format be it objects exactly as you operate in your application or internet service or sensor readings from hardware for your IoT application. Later this data can be easily manipulated with JavaScript code.</p>
							</div><?php /* End content */ ?>
						</div><?php /* End col-md-8 */ echo "\n"; ?>
					</div><?php /* End row */ echo "\n"; ?>
				</div><?php /* End container */ echo "\n"; ?>
			</section><?php /* End engine-content */ echo "\n"; ?>	
			<section id="quick-example">
				<div class="container" data-ch="true">
					<div class="row">
						<div class="col-md-12 section-title-wrap">
							<h2 class="section-title el-animation"><span>Quick example</span></h2>
						</div><?php /* End col-md-12 */ echo "\n"; ?>
					</div><?php /* End row */ echo "\n"; ?>
				</div><?php /* End container */ echo "\n"; ?>
				<div class="white-block code-block white-before" data-ch="true">
					<div class="container">
						<div class="row">
						<div class="col-md-8 center-block el-animation">
							<div class="code-line">
								<?php
									$sql = 'INSERT INTO cities JSON VALUE { "name": "london", "population": 15000000, "country": "UK" }';
									$obj = new Highlighter;
									$sql = $obj->highlight($sql);
								?>
								<div class="label">Insert your JSON document:</div><?php /* End label */ echo "\n"; ?>
								<div class="code"><?php echo $sql; ?></div><?php /* End code */ echo "\n"; ?>	
							</div><?php /* End code-line */ echo "\n"; ?>
							<div class="code-line">
								<div class="label">You can update your document executing simple JavaScript</div><?php /* End label */ echo "\n"; ?>
								<?php
									$sql = 'UPDATE cities SET population = population * 2 WHERE name == "london"';
									$obj = new Highlighter;
									$sql = $obj->highlight($sql);
								?>							
								<div class="code"><?php echo $sql; ?></div><?php /* End code */ echo "\n"; ?>	
							</div><?php /* End code-line */ echo "\n"; ?>
							<div class="code-line">
								<div class="label">Query documents</div><?php /* End label */ echo "\n"; ?>
								<?php
									$sql = 'SELECT * FROM cities WHERE country == "UK" && population > 1000000';
									$obj = new Highlighter;
									$sql = $obj->highlight($sql);
								?>	
								<div class="code"><?php echo $sql; ?></div><?php /* End code */ echo "\n"; ?>
							</div><?php /* End code-line */ echo "\n"; ?>
							<div class="code-line">
								<div class="label">You can run aggregations just like in SQL:</div><?php /* End label */ echo "\n"; ?>
								<?php
									$sql = 'SELECT country, SUM (population) FROM cities GROUP BY country';
									$obj = new Highlighter;
									$sql = $obj->highlight($sql);
								?>	
								<div class="code"><?php echo $sql; ?></div><?php /* End code */ echo "\n"; ?>	
							</div><?php /* End code-line */ echo "\n"; ?>
					</div><?php /* End grid-7 */ echo "\n"; ?>
						</div>
				</div><?php /* End container */ echo "\n"; ?>
				</div><?php /* End white-block */ echo "\n"; ?>	

					<div class="col-md-8 col-xs-12 center-block">
						<div class="animation-wrap el-animation">
							<div class="content" data-ch="true">
								<span class="point-fix-before"></span>
								<p>Note that SUM is not a special function defined in Clusterpoint language. It is just a JavaScript function. We provide ANSI-SQL standard aggregation functions for convenience.</p>
								<p>JS/SQL in not ANSI-SQL compliant dialect or extension, rather it is SQL like structure to execute arbitrary JavaScript right in the backend.</p>
								<span class="point-fix-after"></span>
							</div><?php /* End content */ echo "\n"; ?>
						</div><?php /* End animation-wrap */ echo "\n"; ?>
					</div><?php /* End grid-8 */ echo "\n"; ?>					
					</div><?php /* End row */ echo "\n"; ?>
				</div><?php /* End container */ echo "\n"; ?>
			</section><?php /* End quick-example */ echo "\n"; ?>	
			<?php
				#sign-up block
				include("templates/signup-block.php");
			?>	
		</div><?php /* End page-engine */ echo "\n"; ?>
		<script>
			var animUrl = '<?php echo $base_url; ?>/assets/animations/engine/',
				loadedComps = {};
						
				if($('html').hasClass('no-touchevents') && !$('html').hasClass('no-cssanimations')) {
				AdobeEdge.loadComposition(animUrl+'/js-sql-query-language', 'js-sql-query-language', {
					scaleToFit: "none",
					centerStage: "horizontal",
					minW: "0px",
					maxW: "undefined",
					width: "1261px",
					height: "583px"
				}, {"dom":{}}, {"dom":{}});

				AdobeEdge.bootstrapCallback(function(compId) {
					loadedComps[compId] = AdobeEdge.getComposition(compId);
					if(compId == 'js-sql-query-language') {
						var $el = $('.js-sql-query-language');
		
							function playHero() {
								if($el.isOnScreen(0.3, 0.3)) {
									if(!$el.hasClass('play-animation')) {
										$el.addClass('play-animation');
										setTimeout(function(){
											$('.js-sql-query-language').animate({opacity:'1'},700,function() {
												loadedComps['js-sql-query-language'].getStage().play(1);
											});
										}, 100);
									}
								}
							}
							
							$(window).on('scroll',function() {
								playHero();
							});
									
							playHero();
					}
				});
			} else {
				$('.animation-fallback').addClass('show');
			}
		</script>