<?php
	# error reporting
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	
	# load wordpress 
	define('SHORTINIT', true); //  Force a short-init since we just need core Wordpress, not the entire framework stack
	# require the wp-load.php file (which loads wp-config.php and bootstraps WordPress)
	require( 'wp/wp-load.php' );
	# require wordpress formatting file
	require( ABSPATH . WPINC . '/formatting.php' );
	# include the now instantiated global $wpdb Class for use
	global $wpdb;

	# add necessary classes
	require_once("lib/highlight-SQL.php"); // SQL highlight class
	require_once("lib/video_check.php");	// Video check class
	require_once("lib/tables.php");			// Contains simple table building finctions
	
	# get protocol
	if(isset($_SERVER['HTTPS'])) :
        $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
	else :
        $protocol = 'http';
    endif;

    # build base url
    $base_url = $protocol . "://" . $_SERVER['HTTP_HOST'];

	# remove the directory path we don't want
	$request = $_SERVER['REQUEST_URI'];
	
	# requested page
	$requested_page = '';
	
	#some URLs
	$sign_up_url = 'https://cloud.clusterpoint.com/#authentication/signup';
	$login_url 	 = 'https://cloud-eu.clusterpoint.com/#/authentication/login';
	$video_id 	 =  'd9libogm9xM';
	$video_url 	 = 'https://www.youtube.com/embed/'.$video_id.'?rel=0';
	$download_url = 'https://cloud.clusterpoint.com/#authentication/signup/&download=true';
	
	# For better SEO change head meta according page
	$meta_title_array = array(
		'products'			 	 => 'Clusterpoint products',
		'instantly-scalable' 	 => 'Instantly Scalable Document oriented Database',
		'js-sql-query-language'	 => 'Computing Engine with JS/SQL',
		'joins'					 => 'Joins',
		'acid-transactions'	     => 'ACID-compliant transactions',
		'cost-effectiveness'	 => 'Cost Effective',
		'portability'			 => 'Portability',
		'pricing'				 => 'Pricing',
		'faq'					 => 'Frequently asked questions',
		'examples-and-tutorials' => 'Examples & Tutorials',
		'white-papers'			 => 'White Papers',
		'about'					 => 'About',
		'blog'					 => 'Blog',
		'events'				 => 'Events',
		'press'					 => 'Press',
		'careers'				 => 'Careers',
		'partners'				 => 'Pareners',
		'onboarding-services'    => 'Onboarding Services',
		'ntss-net-security'		 => 'Clusterpoint NTSS - Network Traffic Security System',
		'gol-log-analytics'		 => 'Clusterpoint GOL - fast log data analytics & search application software',
		'use-cases'				 =>	'Use cases'
	);
	
	
	# Meta 
	$meta_array = array(
		'title'				=> 'Clusterpoint DBAAS - instantly scalable database-as-a-service with ACID transactions and fast full text search', // Default meta title 
		'description'		=> 'All-in-one DBMS platform with an integrated enterprise search engine, relevance ranking and fault tolerant replication',
		'keywords'			=> 'NoSQL, XML, database, full-text, search, software, DBMS, replication, clustering, fault-tolerance'
	);
	
	$meta_descriptions_array = array(
		
	);
	
	$meta_keywords_array = array(
		
	);
	
	# Open graph meta 
	# See more: http://ogp.me/
	$meta_og_array = array(
		'title' 			=> 'Clusterpoint DBAAS',
		'description'		=> 'All-in-one DBMS platform with an integrated enterprise search engine, relevance ranking and fault tolerant replication',
		'image'				=> $base_url.'/assets/images/og-image-2.jpg'
	);
  
	//Make sure that additional parameters do not brake the page
	if (strpos($request, "?") > -1)
		$request = explode("?", $request)[0];

	# split the path by '/'
	if(strstr($request, '/') && $request != '/') : // Only split if there is /
		$params = explode("/", $request);
	else :
		$params = 0;
	endif;
	
	# is page single variable
	$single = false;
	# show 404
	$show_404 = false;
  
	# param count 
	$param_count = count($params) - 1;
	
	# check if requested page with / like about/ if so take param before
	if($params[$param_count] == '') :
		$requested_page = $params[$param_count - 1];
	else :
		$requested_page = $params[$param_count];
	endif;
	
	# create template file name
	$template_name = $requested_page."-template.php";
	
	# single view
	if(isset($params) && count($params) > 2) :
		# press single
		if($params[2] == 'press' && (isset($params[3]) && $params[3] != '')) :
			$template_name = 'press-single.php';
			$single = true;
		endif;
		# blog single
		if($params[2] == 'blog' && (isset($params[3]) && $params[3] != '')) :
			$template_name = 'blog-single.php';
			$single = true;
		endif;
		# tutorial single 
		if($params[2] == 'examples-and-tutorials' && (isset($params[3]) && $params[3] != '')) :
			$template_name = 'examples-and-tutorials-single.php';
			$single = true;
		endif;
		# use cases
		if($params[1] == 'use-cases' && (isset($params[2]) && $params[2] != '')) :
			$template_name = 'use-cases-single.php';
			$single = true;
		endif;
		# white papers
		if($params[2] == 'white-papers' && (isset($params[3]) && $params[3] != '')) :
			$template_name = 'white-papers-single.php';
			$single = true;
		endif;
	else :
		#make some shorter names for templates
		if(isset($params[1]) && $params[1] == 'cloud-services-agreement-and-clusterpoint-license-agreement') :
			$template_name = 'services-agreement-template.php';
		endif;
		
		#download page
		if(isset($params[1]) && $params[1] == 'downloads') :

			#if requested download page check for cookie
			if(isset($_COOKIE['clusterpoint']) && $_COOKIE['clusterpoint'] == true) : 
				
			else :
				#if no cookie do redirect
				header("Location: ".$base_url."?download");
				exit();
			endif;
		endif;
	endif;
	
	# Prepare meta values
	if($single):
		if(isset($params[3])) :
			# cache single slug
			$single_slug = $params[3];
		else : 
			$single_slug = $params[2];
		endif;
		# prepare SQL query to get all press realese based on slug
		$query = "SELECT post_title FROM {$wpdb->posts} WHERE post_name = '{$single_slug}' AND post_status = 'publish' LIMIT 1";
		# get title
		$press_release = $wpdb->get_results( $query );
		# if there is title chenge default
		if($press_release[0]->post_title != '') :
			$meta_array['title'] = $press_release[0]->post_title;
		endif;
	else :
		# Check for custom title and description
		if(array_key_exists($requested_page, $meta_title_array)) :
			$meta_array['title'] = $meta_title_array[$requested_page].' | Clusterpoint DBAAS';
		endif;
		
		if(array_key_exists($requested_page, $meta_descriptions_array)) :
			$meta_array['description']	= $meta_descriptions_array[$requested_page];
		endif;
		
		if(array_key_exists($requested_page, $meta_keywords_array)) :
			$meta_array['keywords'] = $meta_keywords_array[$requested_page];
		endif;
	endif;
	

	#keeps users from requesting any file they want
	$safe_pages = array("products", "about", "careers", "acid-transactions", "instantly-scalable", "js-sql-query-language", "joins", "portability", "cost-effectiveness", "pricing", "events", "resources", "press", "blog", "partners", "use-cases", "faq", "tutorials", "white-papers", "examples-and-tutorials", "onboarding-services", "ntss-net-security", "gol-log-analytics", "cloud-services-agreement-and-clusterpoint-license-agreement", "downloads", "privacy-policy");
	
	if(!in_array($requested_page, $safe_pages) && !$single) :
		$show_404 = true; 
	endif; 
	
	if($requested_page == "" || isset($_GET['download'])) :
		$template_name = 'frontpage-template';
	endif;
	
	#same header for all pages - contains head.php
	include("templates/header.php"); 
	
	if($single) :
		# include single template
		include($template_name);
	else :
		#check if template exist and requested page is on file list
		if(file_exists($template_name) && in_array($requested_page, $safe_pages)) :
			#include template based on request
			include($template_name);
		else : 
			if($requested_page == "" || isset($_GET['download']) || !empty($_GET)) :

				#include template based on request - Front page
				include("frontpage-template.php");
			else :
				#display 404 error page
				include("404.php");		
			endif;
		endif;
	endif;

	#same footer for all pages - contains all javascript files
	include('templates/footer.php'); 
?>
