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
                            <div class="home-bottom-text-hello wow fadeInUp"  ><?php the_field('hello_texte'); ?></div>
                            <h1 class="wow fadeInUp" data-wow-delay="0.4s">
                                <?php the_field('titre_header'); ?> 
                            </h1>	
                            <ul class="home-section-links">
                                <li class="wow fadeInUp" data-wow-delay="0.7s"><?php _e('plus', 'vawec' ); ?> <a href="#home-about" class="smoothscroll"><?php _e('A mon sujet', 'vawec' ); ?></a></li>
                                <li class="wow fadeInUp" data-wow-delay="0.9s"><?php _e('Voir', 'vawec' ); ?> <a href="#home-portfolio" class="smoothscroll"><?php _e('Mes travaux', 'vawec' ); ?></a></li>
                                <li class="wow fadeInUp" data-wow-delay="1.1s"><?php _e('Contact', 'vawec' ); ?> <a href="<?php bloginfo( 'url' ); ?>/contact" class="smoothscroll"><?php _e('Par mail', 'vawec' ); ?></a></li>								
                            </ul>
                        </div> <!-- end home-bottom-text -->
                    </div> <!-- end home-header-content --> 
                </div> <!-- end row --> 
            </div> <!-- end home-content-tablecell --> 		   
        </div> <!-- end home-content-table -->

        <a href="#home-about" class="scroll-icon smoothscroll">		
            <i class="va-ion-ios-arrow-thin-down wow fadeInUp" data-wow-delay="1.3s"></i>
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
                                <h2 class="wow fadeInUp" data-wow-offset="100"><?php the_field('titre_about'); ?></h2>
                                <h3 class="wow fadeInUp" data-wow-offset="100"><?php the_field('sous-titre_about'); ?></h3>

                                <p class="lead wow fadeInUp" data-wow-offset="100"><?php the_field('lead_about'); ?></p>					
                            </div> 
                            <div class="wow fadeInUp" data-wow-offset="100">
                                <?php 
                                    if( have_rows('repeteur_paragraphe_about') ):
                                        while ( have_rows('repeteur_paragraphe_about') ) : the_row(); ?>
                                            <?php the_sub_field('paragraphe_about'); ?>
                                        <?php endwhile;
                                    endif;
                                ?>
                            </div>  		
                            <a href="<?php bloginfo( 'url' ); ?>/contact" id="btn-contact" class="button wow fadeInUp" data-wow-offset="100"><?php the_field('bouton_contact_about'); ?></a>
                            <?php if( get_field('cv_about') ): ?>
	                            <a href="<?php the_field('cv_about'); ?>" id="btn-cv" class="button wow fadeInUp" data-wow-offset="100" target="_blank"><?php the_field('bouton_cv_about'); ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>    
                <div class="col-12 col-md-6" id="about-service">
                    <div class="row">
                        <div class="col-12 col-md-8 offset-md-1">
                            <div class="intro">
                                <h2 class="wow fadeInUp" data-wow-offset="100"><?php the_field('titre_service'); ?></h2>
                                <h3 class="wow fadeInUp" data-wow-offset="100"><?php the_field('sous-titre_service'); ?></h3>
                                <p class="lead wow fadeInUp" data-wow-offset="100"><?php the_field('lead_service'); ?></p>
                            </div>
                            <ul class="services">
                                <?php if( have_rows('repeteur_paragraphe_service') ): ?>
									<?php while( have_rows('repeteur_paragraphe_service') ): the_row(); ?>
                                        <li class="item-app wow fadeInUp" data-wow-offset="100">
                                            <div class="icon-wrap">
                                                <i class="<?php the_sub_field('icon_service') ?>"></i>
                                            </div>
                                            <div class="service-item wow fadeInUp" data-wow-offset="100">
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
                    <h2 class="wow fadeInUp" data-wow-offset="100"><?php the_field('titre_portfolio'); ?></h2>
                    <h3 class="wow fadeInUp" data-wow-offset="100"><?php the_field('sous_titre_portfolio'); ?></h3>
                </div>
                <div class="col-12 col-lg-8 lead wow fadeInUp" data-wow-offset="100">
                    <p><?php the_field('lead_portfolio'); ?></p>
                </div>
            </div>
            <div class="row justify-content-center">
                <!-- iso section -->
                <div class=" iso-section wow fadeInUp" data-wow-offset="100">
                    <ul class="col-12 filter-wrapper clearfix">
                        <li>
                            <span data-filter="*" class="selected opc-main-bg">All</span>
                        </li>
                        <?php
                            // The Query
                            $arg = array(
                               'posts_per_page' => 9 
                            );
                            $catArray = array();
                            $the_query = new WP_Query($arg);
                            // The Loop
                            if ( $the_query->have_posts() ) {
                                while ( $the_query->have_posts() ) {
                                    $the_query->the_post(); 
                                    $category = get_the_category(get_the_ID());
                                    foreach ($category as $key => $value) {
                                        if (!array_key_exists ( $value->name , $catArray) ) {
                                            $catArray[$value->name] = $value->cat_ID;
                                        }
                                    }
                                } 
                                /* Restore original Post Data */
                                wp_reset_postdata(); 
                            }
                            ksort($catArray);
                            foreach ($catArray as $key => $value) { ?>
                                <li>
                                   <span class="opc-main-bg" data-filter="<?php echo '.cat-'.$value; ?>"><?php echo $key; ?></span>
                               </li>
                            <?php }
                        ?>
                    </ul>

                    <div class="col-12 iso-box-section" >
                        <div class="row iso-box-wrapper col4-iso-box wow fadeInUp " data-wow-offset="100">
                            <?php
                                if ( $the_query->have_posts() ) {
                                    while ( $the_query->have_posts() ) {
                                        $numCat = "";
                                        $the_query->the_post();
                                        foreach (get_the_category() as $key => $value) {
                                            $numCat = $numCat.'cat-'.$value->cat_ID.' ';
                                        }
                                        $image = get_field('image_for_home');
                                        $url = $image['url'];
	                                    $title = $image['title'];
	                                    $alt = $image['alt'];
                                        ?>
                                        <div class="iso-box branding col-md-4 col-sm-6 <?php echo $numCat ?>" >
                                            <div class="portfolio-thumb">
                                                <img src="<?php echo $url ?>"  alt="<?php echo $alt ?>">
                                                <div class="portfolio-overlay">
                                                    <div class="portfolio-item">
                                                    <?php $doc = get_field('boolean_documentation'); ?>
                                                        <a href="<?php ($doc) ? the_field('link_documentation') : the_field('link_site'); ?>" target="_blank">
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