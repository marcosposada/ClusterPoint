<?php
  header("Content-type: text/css; charset: UTF-8");

  require_once('../../../../wp-config.php');

  if(get_option( '__primary_color') != ""):
    $__primary    = get_option( '__primary_color');
  else :
    $__primary    = "#3498db";
  endif;
  if(get_option( '__secondary_color') != ""):
    $__secondary  = get_option( '__secondary_color');
  else :
    $__secondary    = "#2581bf";
  endif;
  
  if(get_option( '__third_color') != ""):
    $__third  = get_option( '__third_color');
  else :
    $__third    = "#2581bf";
  endif;

?>
<style>
html {
	background-color: #f2f2f2;
	background: url('http://clusterpoint.emptylimits.com/assets/images/pattern.png') #f2f2f2; /* PNG fallback for older broswers */ 
	background-image: url('http://clusterpoint.emptylimits.com/assets/images/pattern.svg'), none;
	background-repeat: repeat;
	background-position: center 20px;
	background-size: 14px 14px;
}

a,
input[type=checkbox]:checked:before,
.view-switch a.current:before {
color:<?php echo $__primary; ?>
}

a:hover {
color:<?php echo $__secondary; ?>
}

#adminmenu {
margin:0
}

/* Fixes issue caused by WP V4.2.2 */
#adminmenu div.wp-menu-image:before {
  color: #a0a5aa;
  color: rgb(160,165,170);
}

#adminmenu li a:focus div.wp-menu-image:before,#adminmenu li.opensub div.wp-menu-image:before,#adminmenu li:hover div.wp-menu-image:before {
  color: <?php echo $__primary; ?>!important;
}

#adminmenu,#adminmenu .wp-submenu,#adminmenuback,#adminmenuwrap,/* Sub Menu */
#adminmenu .wp-has-current-submenu .wp-submenu,#adminmenu .wp-has-current-submenu .wp-submenu.sub-open,#adminmenu .wp-has-current-submenu.opensub .wp-submenu,#adminmenu a.wp-has-current-submenu:focus+.wp-submenu,.no-js li.wp-has-current-submenu:hover .wp-submenu {
background:#f5f5f5
}

#adminmenu .wp-has-current-submenu .wp-submenu .wp-submenu-head,#adminmenu .wp-menu-arrow,#adminmenu .wp-menu-arrow div,#adminmenu li.current a.menu-top,#adminmenu li.wp-has-current-submenu a.wp-has-current-submenu,.folded #adminmenu li.current.menu-top,.folded #adminmenu li.wp-has-current-submenu,/* Hover actions */
#adminmenu li.menu-top:hover,#adminmenu li.opensub>a.menu-top,#adminmenu li>a.menu-top:focus {
background:<?php echo $__primary; ?>;
background:#FFF
}

#adminmenu .opensub .wp-submenu li.current a,#adminmenu .wp-submenu li.current,#adminmenu .wp-submenu li.current a,#adminmenu .wp-submenu li.current a:focus,#adminmenu .wp-submenu li.current a:hover,#adminmenu a.wp-has-current-submenu:focus+.wp-submenu li.current a,#adminmenu .wp-submenu .wp-submenu-head,/* Dashicons */
#adminmenu .current div.wp-menu-image:before,#adminmenu .wp-has-current-submenu div.wp-menu-image:before,#adminmenu a.current:hover div.wp-menu-image:before,#adminmenu a.wp-has-current-submenu:hover div.wp-menu-image:before,#adminmenu li.wp-has-current-submenu:hover div.wp-menu-image:before, #adminmenu li:hover div.wp-menu-image:before {
color:<?php echo $__primary; ?>
}

#adminmenu li.wp-menu-separator {
display: none
}

#adminmenu .wp-submenu-head,#adminmenu a.menu-top {
padding:7px 0
}

.folded #adminmenu .wp-submenu-head,.folded #adminmenu a.menu-top {
padding:5px 0
}

#adminmenu .wp-not-current-submenu .wp-submenu,.folded #adminmenu .wp-has-current-submenu .wp-submenu {
padding:10px
}

#adminmenu li.wp-has-current-submenu a.wp-has-current-submenu div.wp-menu-name {
color:#FFF;
color:<?php echo $__primary; ?>
}

ul#adminmenu a.wp-has-current-submenu:after,ul#adminmenu>li.current>a.current:after,#adminmenu li.wp-has-submenu.wp-not-current-submenu.opensub:hover:after {
display:none
}

#adminmenu li.menu-top {
border-bottom:1px solid #e4e4e4
}

#adminmenu div.wp-menu-name {
color:#666
}

.wrap h2 {
font-size:34px;
line-height: 1;
font-weight:100;
padding:30px 25px 24px 0;
}

.wrap .add-new-h2,.wrap .add-new-h2:active {
background:<?php echo $__primary; ?>;
color:#FFF;
top:-8px;
border-radius: 0px;
box-shadow: none;
}

.wrap .add-new-h2:hover {
background:<?php echo $__secondary; ?>
}

#titlediv #title-prompt-text {
font-size:1.2em;
font-weight:100
}

div.updated {
border:1px solid #e1e1e1;
border-left:5px solid <?php echo $__primary; ?>;
-webkit-box-shadow:none;
box-shadow:none
}

input[type=email],input[type=number],input[type=password],input[type=search],input[type=tel],input[type=text],input[type=url],select,textarea {
box-shadow:none
}

.postbox {
border:1px solid #e1e1e1
}

.menu.ui-sortable .menu-item-handle,.meta-box-sortables.ui-sortable .hndle {
background:#f5f5f5
}

#major-publishing-actions {
background:#FFF;
padding:0
}

#delete-action {
float:none;
padding:15px 0;
text-align:center
}

#delete-action a {
text-decoration:underline
}

#publishing-action {
float:none;
display:block;
width:100%
}

#publishing-action .spinner {
width:100%;
background-position:top center;
padding:5px 0
}

#publishing-action #publish {
float:none;
font-size:16px;
height:auto;
padding:10px;
width:100%
}

.wp-core-ui .button,
.wp-core-ui .button-primary,
.wp-core-ui .button-secondary {
	-moz-border-radius:0;
	-webkit-border-radius:0;
	border-radius:0;
	box-shadow:none;
	border:0;
	text-shadow: none;
}

.wp-core-ui .button,.wp-core-ui .button-secondary {
background:#e4e4e4
}

.wp-core-ui .button:hover,.wp-core-ui .button-secondary:hover,.wp-core-ui .button-primary {
background:<?php echo $__primary; ?>;
color:#FFF
}

.wp-core-ui .button:hover span.wp-media-buttons-icon:before,.wp-core-ui .button-secondary:hover span.wp-media-buttons-icon:before {
color:#FFF
}

.wp-media-buttons .insert-media {
font-size:12px
}

.wp-media-buttons .add_media span.wp-media-buttons-icon:before {
font-size:14px!important
}

div.mce-toolbar-grp,.html-active .switch-html,.tmce-active .switch-tmce {
background:#FFF!important
}

#acf-col-right {
display:none
}

#acf-col-left {
margin:0!important
}

.vc_navbar.subnav-fixed {
top:40px!important
}

.composer-switch a,.composer-switch a:visited,.composer-switch a.wpb_switch-to-front-composer,.composer-switch a:visited.wpb_switch-to-front-composer,.composer-switch .logo-icon {
	background-color:<?php echo $__primary; ?>!important;
}

.composer-switch .vc-spacer, .composer-switch a.wpb_switch-to-composer:hover, .composer-switch a:visited.wpb_switch-to-composer:hover, .composer-switch a.wpb_switch-to-front-composer:hover, .composer-switch a:visited.wpb_switch-to-front-composer:hover {
	background-color: <?php echo $__secondary; ?>!important;
}


.wrap .add-new-h2, 
.wrap .add-new-h2:active,
.wrap .page-title-action, 
.wrap .page-title-action:active {
	background: <?php echo $__third; ?>!important;
	color: #fff;
	border-radius: 0px;
	box-shadow: none;
}
.wrap .add-new-h2:hover {
	opacity: 0.8;
}

#wpadminbar .ab-top-menu>li.hover>.ab-item, 
#wpadminbar.nojq .quicklinks .ab-top-menu>li>.ab-item:focus, 
#wpadminbar:not(.mobile) .ab-top-menu>li:hover>.ab-item, 
#wpadminbar:not(.mobile) .ab-top-menu>li>.ab-item:focus {
	
}


#wp-admin-bar-user-actions li:hover,
#wp-admin-bar-my-account:focus,
#wp-admin-bar-my-account:active,
#wp-admin-bar-my-account:hover,
#wp-admin-bar-my-account .ab-item:focus,
#wp-admin-bar-my-account .ab-item:active,
#wp-admin-bar-my-account .ab-item:hover,
#wp-admin-bar-my-account:focus .ab-item,
#wp-admin-bar-my-account:active .ab-item,
#wp-admin-bar-my-account:hover .ab-item {
	background: inherit!important;
}
#wpadminbar #wp-admin-bar-my-account.with-avatar #wp-admin-bar-user-actions>li {
	margin-left: 0!important;
}




#contextual-help-link-wrap, #screen-options-link-wrap { 
	box-shadow: none!important;
	border: 0!important;
}
#postexcerpt p,
#wp-admin-bar-view, /* Slug box */
#wp-admin-bar-user-info, /* Avatar adminbar dropdown */
#wp-admin-bar-site-name .ab-item:before, /* Home icon */
#contextual-help-link, /* Help link */
#wpadminbar ul#wp-admin-bar-root-default>li#wp-admin-bar-new-content,
#wpadminbar ul#wp-admin-bar-root-default>li#wp-admin-bar-comments,
#wpadminbar ul#wp-admin-bar-root-default>li#wp-admin-bar-site-name .ab-sub-wrapper {
	display: none!important;
}
#wp-admin-bar-site-name {}

#collapse-button div:after,
#collapse-menu,
#collapse-menu:hover, 
#collapse-menu:hover 
#collapse-button div:after {
	color: #7629f4!important;
}

.acf-button.blue {
    background: #7629f4!important;
    color: #FFF!important;
    box-shadow: none;
    border: 0;
    border-radius: 0;
}
.wp-core-ui .button-primary.hover, 
.wp-core-ui .button-primary:hover, 
.acf-button.blue:hover{
	opacity: 0.8;
}
.wp-core-ui .button-primary.focus, .wp-core-ui .button-primary:focus {
   background: #7629f4!important;
    color: #FFF!important;
    box-shadow: none;
}
#wp-admin-bar-site-name {
	margin-top: 10px!important;
}
#wp-admin-bar-site-name a:hover,
#wp-admin-bar-site-name.hover a,
#wp-admin-bar-site-name a { 
	text-indent: -9999px;
	background: url("../../../../../assets/images/clusterpoint-logo-white.png")!important;
	background: url("../../../../../assets/images/clusterpoint-logo-white.svg")!important;
	background-repeat: no-repeat!important;
	background-position: center center!important;
	width: 100px!important; 
	height: 13px!important;
    background-size: 100px 13px!important;
}
#wp-admin-bar-updates.hover,
#wp-admin-bar-updates:hover,
#wp-admin-bar-site-name.hover,
#wp-admin-bar-site-name:hover {
	background: none!important;
}
a:hover { 
	color: #8763EA;
}
#adminmenu .wp-submenu a:focus, 
#adminmenu .wp-submenu a:hover, 
#adminmenu a:hover, 
#adminmenu li.menu-top>a:focus { 
	color: #222222;
}
.wrap .add-new-h2:hover, 
.wrap .add-new-h2:active:hover, 
.wrap .page-title-action:hover, 
.wrap .page-title-action:active:hover {
	background: #FF3631!important;
}
.wp-core-ui .button, 
.wp-core-ui .button-secondary {
	background: #222222;
	color: #FFFFFF;
}
.wp-core-ui .button:hover, 
.wp-core-ui .button-secondary:hover {
	background: #3A3A3A;
	color: #FFFFFF;
}
.media-frame a.button,
.media-frame a.button:hover { 
	color: #FFFFFF;
}
.wp-core-ui .button-primary-disabled, 
.wp-core-ui .button-primary.disabled, 
.wp-core-ui .button-primary:disabled, 
.wp-core-ui .button-primary[disabled] {
	color: #FFF!important;
	background: #f41f00!important;
	opacity: 0.6;
}
</style>