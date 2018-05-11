    <?php get_header(); ?>

    <section id="home-header">
        <div class="home-content-table">		   
            <div class="container home-content-tablecell">
                <div class="row">
                    <div class="home-header-content">		   			
                        <div class="home-bottom-text">
                            <div class="home-bottom-text-hello animate-intro">Hello, World.</div>
                            <h1 class="animate-intro">
                            Je suis Vincent Alibert. <br>
                            Développeur basé sur Villefranche de Lauragais et Castelnaudary. 
                            </h1>	

                            <ul class="home-section-links">
                                <li class="animate-intro">plus <a href="#home-about" class="smoothscroll">A mon sujet</a></li>
                                <li class="animate-intro">Voir <a href="#portfolio" class="smoothscroll">Mes travaux</a></li>
                                <li class="animate-intro">Contact <a href="#contact" class="smoothscroll">Par mail</a></li>								
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
                                <h2 class="animate-this">à Propos</h2>
                                <h3 class="animate-this">Plus à mon sujet</h3>

                                <p class="lead animate-this">Je pense que si l’on devait me décrire, il faudrait employer des mots comme déterminé, investi, avenant, rigoureux et curieux !</p>					
                            </div>   		

                            <p class="animate-this">
                                Suite à une réflexion de ma part sur mon avenir professionnel et étant passionné par l’informatique depuis toujours, je me suis reconverti dans le développement. Acquérir de nouvelles compétences, c’est clairement ce qui me plaît le plus c’est pourquoi je me suis remis aux études c'est dernières années. 	
                            </p>

                            <p class="animate-this">
                                Dans le cadre de celles-ci, j’ai pu découvrir à travers divers projets, le Java, le JEE ainsi qu’Angular et Node.js en parallèle. C’est language et framework m’ayant beaucoup plus, j’ai approfondi mes compétences sur ces derniers tout au long de mes études.</p>

                            <p class="animate-this">
                                A ce jour, j'ai acquis une bonne maitrise du développement de site internet. J’ai aussi de bonnes bases en Java, JEE, Angular, Node.js JavaScript et MySQL. Grâce à ces compétences je peux travailler sur divers projets.</p>
                            <a href="#" id="btn-contact" class="button animate-this">Contact Me</a>
                            <a href="#" id="btn-cv" class="button animate-this">Download CV</a>
                        </div>
                    </div>
                </div>    
                <div class="col-12 col-md-6" id="about-service">
                    <div class="row">
                        <div class="col-12 col-md-8 offset-md-1">
                            <div class="intro">
                                <h2 class="animate-this">Services</h2>
                                <h3 class="animate-this">Ce que je peux faire</h3>
                                <p class="lead animate-this">Lorem ipsum Ut eiusmod ex magna sit dolor esse adipisicing minim ad cupidatat eu veniam nostrud mollit laboris sunt magna velit. Ut dolor quis deserunt voluptate.</p>
                            </div>
                            <ul class="services">
                                <li class="item-web animate-this">
                                    <div class="icon-wrap">
                                        <i class="va-ion-social-html5"></i>
                                    </div>
                                    <div class="service-item">
                                        <h4>Site Web</h4>
                                        <p>Grâce à mon expérience et mes compétences, je suis crée des sites web responsives, compatibles multiplateform et dynamique.
                                        </p>
                                    </div>   					
                                </li>
                                <li class="item-wordpress animate-this">
                                    <div class="icon-wrap">
                                        <i class="va-ion-social-wordpress"></i>
                                    </div>
                                    <div class="service-item">
                                        <h4>Wordpress</h4>
                                        <p>Afin que vous ayez un site web personnalisé correspondant à votre entreprise, je crée pour vous des thèmes sur mesure.
                                        </p>
                                    </div>   					
                                </li>
                                <li class="item-app animate-this">
                                    <div class="icon-wrap">
                                        <i class="va-ion-social-angular"></i>
                                    </div>
                                    <div class="service-item">
                                        <h4>Application</h4>
                                        <p>Lors de mes études j'ai eu l'occasion de me former sur le framework Angular et Node js. Je peux concevoir pour vous une application web ou mobile.
                                        </p>
                                    </div>   					
                                </li>
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
                    <h2>Portfolio</h2>
                    <h3>Voir mes derniers projets</h3>
                </div>
                <div class="col-12 col-lg-8 lead">
                    <p>Retrouvez ci-dessous mes derniers projets réalisés pour le compte de divers client mais également dans le cadre de mes études.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                    <!-- iso section -->
                    <div class=" iso-section wow fadeInUp" data-wow-delay="2.6s">
                        <ul class="col-12 filter-wrapper clearfix">
                            <li>
                                <a href="#" data-filter="*" class="selected opc-main-bg">All</a>
                            </li>
                            <li>
                                <a href="#" class="opc-main-bg" data-filter=".E4">Conception et maintenance de solutions informatiques (E4)</a>
                            </li>
                            <li>
                                <a href="#" class="opc-main-bg" data-filter=".E6">Parcours de professionnalisation (E6)</a>
                            </li>
                        </ul>

                        <!-- iso box section -->
                        <div class="col-12 iso-box-section wow fadeInUp" data-wow-delay="1s">
                            <div class="row iso-box-wrapper col4-iso-box">
                                <div class="iso-box E4 branding col-md-4 col-sm-6">
                                    <div class="portfolio-thumb">
                                        <img src="<?php echo get_template_directory_uri() . '/public/img/searchJobs.jpg ' ?>"  alt="Portfolio">
                                        <div class="portfolio-overlay">
                                            <div class="portfolio-item">
                                                <a href="single-project.html">
                                                    <i class="fa va-uniF0C6"></i>
                                                </a>
                                                <h2>Search job</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="iso-box E4 template col-md-4 col-sm-6">
                                    <div class="portfolio-thumb">
                                        <img src="<?php echo get_template_directory_uri() . '/public/img/businessConsulting.jpg' ?>"  alt="Portfolio">
                                        <div class="portfolio-overlay">
                                            <div class="portfolio-item">
                                                <a href="single-project.html">
                                                    <i class="fa va-uniF0C6"></i>
                                                </a>
                                                <h2>Business Consulting</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="iso-box template E6 col-md-4 col-sm-6">
                                    <div class="portfolio-thumb">
                                        <img src="<?php echo get_template_directory_uri() . '/public/img/api.jpg' ?>"  alt="Portfolio">
                                        <div class="portfolio-overlay">
                                            <div class="portfolio-item">
                                                <a href="single-project.html">
                                                    <i class="fa va-uniF0C6"></i>
                                                </a>
                                                <h2>Développement d'API en Node.js</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="iso-box E6 template col-md-4 col-sm-6">
                                    <div class="portfolio-thumb">
                                        <img src="<?php echo get_template_directory_uri() . '/public/img/samba.jpg' ?>"  alt="Portfolio">
                                        <div class="portfolio-overlay">
                                            <div class="portfolio-item">
                                                <a href="single-project.html">
                                                    <i class="fa va-uniF0C6"></i>
                                                </a>
                                                <h2>Mise en place de serveur Samba</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="iso-box E6 branding col-md-4 col-sm-6">
                                    <div class="portfolio-thumb">
                                        <img src="<?php echo get_template_directory_uri() . '/public/img/glpi.jpg' ?>"  alt="Portfolio">
                                        <div class="portfolio-overlay">
                                            <div class="portfolio-item">
                                                <a href="single-project.html">
                                                    <i class="fa va-uniF0C6"></i>
                                                </a>
                                                <h2>Déploiement d'une solution GLPI</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="iso-box E6 branding col-md-4 col-sm-6">
                                    <div class="portfolio-thumb">
                                        <img src="<?php echo get_template_directory_uri() . '/public/img/wordpress.jpg' ?>"  alt="Portfolio">
                                        <div class="portfolio-overlay">
                                            <div class="portfolio-item">
                                                <a href="single-project.html">
                                                    <i class="fa va-uniF0C6"></i>
                                                </a>
                                                <h2>Développement de thème WordPress</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div> <!-- end iso box section -->
                    </div> <!-- end iso section -->
            </div>
        </div>
    </section>
    
    <?php get_footer();