<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php if(is_single() OR is_page()){wp_title('',true);} elseif(is_front_page()){ bloginfo('description');}else{bloginfo('description');} ?> | <?php bloginfo('name') ?></title>
	<!-- <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>" /> -->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="container">
		<header class="main-header">
			<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name') ?></a></h1>
			<h3><?php bloginfo('description') ?></h3>
			<nav class="main-menu">
				<div class="menu">
					<ul>
						<?php wp_nav_menu([
							'theme_location' => 'first_menu'
						]); ?>
					</ul>
				</div>
			</nav>			
		</header>