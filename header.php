<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="Keywords">
	<meta name="author" content="Name">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!--Links needed go here -->

	<title><?php wp_title(); ?> - <?php bloginfo('name');?></title>

	<script type="text/javascript" src="//use.typekit.net/zop4vpb.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

	<?php wp_head(); ?>
</head>
<body>
	
	<header class="site-header">
		<div class="container">
			<h1 class="masthead"><a href="<?php bloginfo('url');?>"><?php bloginfo('name');?></a></h1>
		</div>
	</header><!-- /header -->

	<a href="#" data-toggle="menu" class="menu-toggle">Menu</a>

	<nav class="site-navigation">
		<?php wp_nav_menu(array('menu' => 'primary_menu')); ?>
	</nav>

	<div class="main">