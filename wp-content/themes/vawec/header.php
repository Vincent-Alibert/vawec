<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- favicon-->
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() . '/public/img/fav/apple-touch-icon.png' ?>">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri() . '/public/img/fav/favicon-32x32.png' ?>">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri() . '/public/img/fav/favicon-16x16.png' ?>">
	<link rel="manifest" href="<?php echo get_template_directory_uri() . '/public/img/fav/site.webmanifest' ?>">
	<link rel="mask-icon" href="<?php echo get_template_directory_uri() . '/public/img/fav/safari-pinned-tab.svg' ?>" color="#35393b">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="theme-color" content="#ffffff">

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
 <button class="hamburger hamburger--squeeze" type="button">
		<span class="hamburger-box">
			<span class="hamburger-inner"></span>
		</span>
</button>
<nav id="nav" class='close'>
	<div class="container">
		<div id="nav-logo">
			<?php if ( is_front_page() || is_home() ) { ?>
				<img src="<?php echo get_template_directory_uri() . '/public/img/logo.svg'?>" alt="<?php _e('Vawec', 'vawec' ); ?>">
			<?php }
			else { ?>
				<a href="<?php bloginfo('url') ?>"><img src="<?php echo get_template_directory_uri() . '/public/img/logo.svg'?>" alt="<?php _e('Vawec', 'vawec' ); ?>"></a>
			<?php } ?>
		</div>
		<div id="elements">
			<?php if ( is_front_page() || is_home() ) { ?>
				<ul id="nav-home-links">
					<li ><a href="#home-about" class="smoothscroll"><?php _e('A mon sujet', 'vawec' ); ?></a></li>
					<li ><a href="#home-portfolio" class="smoothscroll"><?php _e('Mes travaux', 'vawec' ); ?></a></li>
				</ul>
			<?php } 
				else { ?>
				<ul id="nav-home-links">
					<li ><a href="<?php bloginfo('url') ?>"><?php _e('Accueil', 'vawec' ); ?></a></li>
				</ul>
			<?php } 
				// wp_nav_menu( array( 'theme_location' => 'principal' ) ); ?>	
		</div>
		<div class="row social">
			<div class="col-12">
				<div class="row justify-content-center"> 
					<?php if( have_rows('reseau_sociaux', 'option') ):
						$i=1;
						while( have_rows('reseau_sociaux', 'option') ): the_row(); 
						$i++; ?>
							<a href="<?php the_sub_field('lien_vers_le_reseaux_social', 'option') ?>" target="_blank" ><i class="<?php the_sub_field('choix_de_reseau_social', 'option') ?>"></i></a>
						<?php endwhile; ?>
					<?php endif; ?> 		
				</div>
			</div>				
		</div>
	</div>
</nav>
 