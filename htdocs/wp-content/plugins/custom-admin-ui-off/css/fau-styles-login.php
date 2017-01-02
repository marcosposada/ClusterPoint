<?php
	error_reporting(0);
  require_once('../../../../wp-config.php');

  if(get_option( 'fau_primary_color') != ""):
    $fau_primary    = get_option( 'fau_primary_color');
  else :
    $fau_primary    = "#3498db";
  endif;
  if(get_option( 'fau_secondary_color') != ""):
    $fau_secondary  = get_option( 'fau_secondary_color');
  else :
    $fau_secondary    = "#2581bf";
  endif;

  header("Content-type: text/css; charset: UTF-8");
  //header('Content-type: text/css');
  //header('Cache-control: must-revalidate');
 
  ob_start();
?>
body, html {
	background-color: #f2f2f2;
	background: url('../../../../../assets/images/pattern.png') #f2f2f2; /* PNG fallback for older broswers */ 
	background-image: url('../../../../../assets/images/pattern.svg'), none;
	background-repeat: repeat;
	background-position: center 20px;
	background-size: 14px 14px;
}

.login #login_error a,
.login label,.login #backtoblog a,
.login #nav a {
color:#0e2c81;
}

.login label,.login #nav,.login #backtoblog {
display:block;
text-align:center
}

.login #nav a:hover,.login #backtoblog a:hover {
color:#FFF;
text-decoration:underline
}

.login form .input,.login input[type=text] {
margin-top:10px;
display:block
}

.wp-core-ui .button-primary, .wp-core-ui .button-primary.focus, .wp-core-ui .button-primary.hover, .wp-core-ui .button-primary:focus, .wp-core-ui .button-primary:hover {
border-color: transparent;
-webkit-box-shadow: none;
box-shadow: none;
}

.wp-core-ui .button.button-large:hover {
background: #ddd;
}

.login form .forgetmenot {
float:none
}
.login h1 a {
    background: url("../../../../../assets/images/logo.svg");
	width: 124px; 
	height: 40px;
    background-size: 124px 40px;
}
#login { 
	padding: 154px 0 0;
}
#loginform {
	background: #fff;
	color:#222;
}
.login form {
	box-shadow: none;
	border: 6px solid #f2f2f2;
}
.login #login_error,
.login .message {
	background: #000;
	color:#fff;
}
.login form label {
	color: #222;
}
#loginform {
	padding-bottom:35px
}
.login #backtoblog a,
 .login #nav a  {
	background: #f2f2f2;
	display: table;
	margin: 0 auto;
	border: 4px solid #f2f2f2;
    border-left-width: 9px;
    border-right-width: 9px;
 }

.wp-core-ui .button-group.button-large .button,.wp-core-ui .button.button-large {
	background:#fff;
	color:#0e2c81;
	height:auto;
	font-size:18px;
	margin-top:15px;
	padding:10px 0;
	width:100%
}
.wp-core-ui .button-group.button-large .button, 
.wp-core-ui .button.button-large {
	text-shadow: none;
	background: #f41f00;
	color: #fff;
}
.login #login_error a, 
.login label, 
.login #backtoblog a, 
.login #nav a {
	color: #7629F4;
}
.login #login_error, 
.login .message {
	background: #fff;
	color: #000;
	box-shadow: none;
}
.login #login_error a:focus, 
.login label:focus, 
.login #backtoblog a:focus, 
.login #nav a:focus,
.login #login_error a:hover, 
.login label:hover, 
.login #backtoblog a:hover, 
.login #nav a:hover { 
	color: #8763EA;
	outline: 0;
	box-shadow: none;
	text-decoration: none;
}

.wp-core-ui .button-group.button-large .button:hover, 
.wp-core-ui .button.button-large:hover {
	background: #FF3631;
}