<!DOCTYPE html>

<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
	
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

<header>

	<h1><a href="<?php echo home_url();?>">大聖寺高校同窓会</a></h1>

	<nav class="clearfix">
		<ul>
			<li><a href="<?php echo home_url('/news');?>">ニュース</a></li>
			<li><a href="<?php echo home_url('/about');?>">同窓会について</a></li>
			<li><a href="<?php echo home_url('/activity');?>">本部の活動報告</a></li>
			<li><a href="<?php echo home_url('/seiryuu');?>">同窓会報「聖流」</a></li>
		</ul>
	</nav>

</header>