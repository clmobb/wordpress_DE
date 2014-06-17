<!DOCTYPE HTML>
<html lang="<?php bloginfo('language'); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<?php wp_head(); ?>
</head>
<body class="custom-background">
<div id="around">
	<header id="head_main">
		<h1><?php bloginfo('name'); ?></h1>
		<h2><?php bloginfo('description'); ?></h2>
		<div id="head_img">
			<?php
				if(has_post_thumbnail())
				{
					the_post_thumbnail(array(1000,300));
				}
				else
				{
					?>
					<img src="wp-content/themes/neuestheme/normal.jpg">
					<?php
				}
			?>
		</div>
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<?php wp_list_pages('title_li='); ?>
			</ul>
		</nav>
	</header>