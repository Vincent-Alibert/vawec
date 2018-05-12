<?php
/*
Template Name: Home page
Template Post Type: page
*/

get_header(); ?>

    <section id="home-header">
        <div class="home-content-table">		   
            <div class="container home-content-tablecell">
                <div class="row">
                    <div class="home-header-content">		   			
                        <div class="home-bottom-text">
                            <div class="home-bottom-text-hello animate-intro"><?php the_field('hello_texte'); ?></div>
                            <h1 class="animate-intro">
                                <?php the_field('titre_header'); ?> 
                            </h1>	
                            <ul class="home-section-links">
                                <li class="animate-intro"><?php _e('plus', 'vawec' ); ?> <a href="#home-about" class="smoothscroll"><?php _e('A mon sujet', 'vawec' ); ?></a></li>
                                <li class="animate-intro"><?php _e('Voir', 'vawec' ); ?> <a href="#home-portfolio" class="smoothscroll"><?php _e('Mes travaux', 'vawec' ); ?></a></li>
                                <li class="animate-intro"><?php _e('Contact', 'vawec' ); ?> <a href="<?php bloginfo( 'url' ); ?>/contact" class="smoothscroll"><?php _e('Par mail', 'vawec' ); ?></a></li>								
                            </ul>
                        </div> <!-- end home-bottom-text -->
                    </div> <!-- end home-header-content --> 
                </div> <!-- end row --> 
            </div> <!-- end home-content-tablecell --> 		   
        </div> <!-- end home-content-table -->

        <a href="#home-about" class="scroll-icon smoothscroll">		
            <i class="va-ion-ios-arrow-thin-down"></i>
        </a>	
    </section> <!-- end home -->

    <!-- about
    ================================================== -->
    <section id="home-about">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-6" id="about-profile">
                    <div class="row">
                        <div class="col-12 col-md-8 offset-md-3">
                            <div class="intro">
                                <h2 class="animate-this"><?php the_field('titre_about'); ?></h2>
                                <h3 class="animate-this"><?php the_field('sous-titre_about'); ?></h3>

                                <p class="lead animate-this"><?php the_field('lead_about'); ?></p>					
                            </div>   		
                            <?php 
                                if( have_rows('repeteur_paragraphe_about') ):
                                    while ( have_rows('repeteur_paragraphe_about') ) : the_row(); ?>
                                        <?php the_sub_field('paragraphe_about'); ?>
                                    <?php endwhile;
                                endif;
                            ?>
                            <a href="<?php bloginfo( 'url' ); ?>/contact" id="btn-contact" class="button animate-this"><?php the_field('bouton_contact_about'); ?></a>
                            <?php if( get_field('cv_about') ): ?>
	                            <a href="<?php the_field('cv_about'); ?>" id="btn-cv" class="button animate-this" target="_blank"><?php the_field('bouton_cv_about'); ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>    
                <div class="col-12 col-md-6" id="about-service">
                    <div class="row">
                        <div class="col-12 col-md-8 offset-md-1">
                            <div class="intro">
                                <h2 class="animate-this"><?php the_field('titre_service'); ?></h2>
                                <h3 class="animate-this"><?php the_field('sous-titre_service'); ?></h3>
                                <p class="lead animate-this"><?php the_field('lead_service'); ?></p>
                            </div>
                            <ul class="services">
                                <?php if( have_rows('repeteur_paragraphe_service') ): ?>
									<?php while( have_rows('repeteur_paragraphe_service') ): the_row(); ?>
                                        <li class="item-app animate-this">
                                            <div class="icon-wrap">
                                                <i class="<?php the_sub_field('icon_service') ?>"></i>
                                            </div>
                                            <div class="service-item">
                                                <h4><?php the_sub_field('titre_item_service') ?></h4>
                                                <?php the_sub_field('paragraphe_service') ?>
                                            </div>   					
                                        </li>
                                    <?php endwhile; ?>
								<?php endif; ?>
                            </ul> 
                        </div>
                    </div>
                </div>
            </div> <!-- end row -->
        </div>
    </section> <!-- end about -->

    <section id="home-portfolio">
        <div class="container">
            <div class="row justify-content-center intro">
                <div class="col-12">
                    <h2><?php the_field('titre_portfolio'); ?></h2>
                    <h3><?php the_field('sous_titre_portfolio'); ?></h3>
                </div>
                <div class="col-12 col-lg-8 lead">
                    <p><?php the_field('lead_portfolio'); ?></p>
                </div>
            </div>
            <div class="row justify-content-center">
                <!-- iso section -->
                <div class=" iso-section wow fadeInUp" data-wow-delay="2.6s">
                    <ul class="col-12 filter-wrapper clearfix">
                        <li>
                            <a href="#" data-filter="*" class="selected opc-main-bg">All</a>
                        </li>
                        <?php
                            $categories = get_categories( array(
                                'orderby' => 'name',
                                'order'   => 'ASC'
                            ) );
                            foreach ($categories as $categorie) { ?>
                                <li>
                                    <a href="#" class="opc-main-bg" data-filter="<?php echo $categorie->cat_ID?>"><?php echo $categorie->name ?></a>
                                </li>
                            <?php }
                        ?>
                    </ul>

                    <div class="col-12 iso-box-section wow fadeInUp" data-wow-delay="1s">
                        <div class="row iso-box-wrapper col4-iso-box">
                            <?php
                            // The Query
                                $arg = array(
                                    'posts_per_page' => 9 
                                );
                                $the_query = new WP_Query($arg);
                                // The Loop
                                if ( $the_query->have_posts() ) { ?>
                                    <?php while ( $the_query->have_posts() ) {
                                        $the_query->the_post(); ?>
                                        <div class="iso-box E4 branding col-md-4 col-sm-6">
                                            <div class="portfolio-thumb">
                                                <img src="<?php echo get_template_directory_uri() . '/public/img/searchJobs.jpg ' ?>"  alt="Portfolio">
                                                <div class="portfolio-overlay">
                                                    <div class="portfolio-item">
                                                        <a href="single-project.html">
                                                            <i class="fa va-uniF0C6"></i>
                                                        </a>
                                                        <h2><?php echo get_the_title(); ?></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } 
                                    /* Restore original Post Data */
                                    wp_reset_postdata(); 
                                }
                            ?>
                        </div>
                    </div> <!-- end iso box section -->
                </div> <!-- end iso section -->
            </div> <!-- end row-->
        </div> <!-- end container -->
    </section>
    
    <?php get_footer();