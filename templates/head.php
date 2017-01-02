<!DOCTYPE HTML>
<!--[if IE 8]>    <html lang="en-us" class="no-js ie8"> <![endif]-->
<!--[if IE 9]>    <html lang="en-us" class="no-js ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-us" class="no-js"> <!--<![endif]-->
	<head>
		<title><?php echo $meta_array['title']; ?></title>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta name="description" content="<?php echo $meta_array['description']; ?>" />
		<meta name="keywords" content="<?php echo $meta_array['keywords']; ?>"/>
		<meta property="og:description" content="<?php echo $meta_og_array['description']; ?>" />
		<meta property="og:title" content="<?php echo $meta_og_array['title']; ?>" />
		<meta property="og:image" content="<?php echo $meta_og_array['image']; ?>" />
		<link rel="shortcut icon" href="<?php echo $base_url; ?>/assets/images/favicon.ico" type="image/vnd.microsoft.icon">
		<!--[if lte IE 8]><script src="<?php echo $base_url; ?>/assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="<?php echo $base_url; ?>/assets/css/main.css" charset="utf-8" />
		<link rel="stylesheet" href="<?php echo $base_url; ?>/assets/css/additional.css" charset="utf-8" /><?php if($single) : ?>
		<link rel="stylesheet" href="<?php echo $base_url; ?>/assets/css/components/prism.css">
		<?php endif; echo "\n"; ?>
		<!--[if lte IE 9]><link rel="stylesheet" href="<?php echo $base_url; ?>/assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="<?php echo $base_url; ?>/assets/css/ie8.css" /><![endif]-->
		<script src="https://use.typekit.net/lmy7arb.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>
		<script type="text/javascript" src="<?php echo $base_url; ?>/assets/js/modernizr.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo $base_url; ?>/assets/js/init.js"></script>
		<script type="text/javascript" charset="utf-8" src="<?php echo $base_url; ?>/assets/js/edge.6.0.0.min.js"></script>
		<script type="text/javascript" src="https://www.gstatic.com/swiffy/v7.4/runtime.js"></script>
	</head>
	<body class="<?php if($single) : ?>page-parent-<?php echo $params[1]; ?> page-single single-template-<?php echo $params[2]; else : if($template_name == '-template.php') : $template_name = 'frontpage-template'; endif; echo preg_replace('/\\.[^.\\s]{3,4}$/', '', $template_name); endif;?>">