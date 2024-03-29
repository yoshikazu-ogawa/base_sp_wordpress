<!DOCTYPE html>

<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1">
	
<title><?php wp_title(''); ?></title>
	
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css" />
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" />
	
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.7.2.min.js"></script>
<!--<script src="<?php echo get_template_directory_uri(); ?>/js/footerFixed.js"></script>-->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.page-scroller-308.js"></script>
	
<?php wp_head(); ?>
</head>

<body>

<header id="header" role="banner">

	<h1 id="logo">LOGO</h1>
	<h2 id="description"><?php bloginfo('description'); ?></h2>

	<nav id="globalnav" role="navigation">
		<ul>
			<li><a href="<?php echo home_url();?>"></a></li>
			<li><a href="<?php echo home_url();?>"></a></li>
			<li><a href="<?php echo home_url();?>"></a></li>
			<li><a href="<?php echo home_url();?>"></a></li>
			<li><a href="<?php echo home_url();?>"></a></li>
		</ul>
	</nav>

</header>