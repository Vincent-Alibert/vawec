<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body 
	<?php 
		body_class(); 
		if ( is_front_page() && is_home() ){ ?>
			id='home'
		<?php }
		if (is_single() ) { ?>
			id='single'
		<?php }
		if (is_page() ) { ?>
			id='page'
		<?php }
	?> 
 >
	<div id="top"></div>
 