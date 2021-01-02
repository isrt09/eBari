<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('title') ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>" />
</head>
<body <?php body_class(); ?>>
	<div class="container">
		<header class="main-header">
			<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name') ?></a></h1>
			<h3><?php bloginfo('description') ?></h3>
			<nav class="main-menu">
				<div class="menu">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Disclaimer</a></li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Contact Us</a></li>
					</ul>
				</div>
			</nav>			
		</header>