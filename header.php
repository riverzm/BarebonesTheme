<!DOCTYPE HTML>
<html>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body>
<header class="main-header">

	<?php 
	
		$args = array(
			'theme_location' => 'primary_menu',
		);
	
	?>
	
	<?php wp_nav_menu($args); ?>
	
</header> <!-- .main-header -->