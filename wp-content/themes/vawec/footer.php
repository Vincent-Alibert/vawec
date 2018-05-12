			<footer>
				<div class="container">
					<div class=" row">
						<h2 class="col-12" ><?php the_field('social_network_title', 'option'); ?></h2>
						<div class="col-12 social">
							<div class="row justify-content-center"> 
								<?php if( have_rows('reseau_sociaux', 'option') ): ?>
									<?php while( have_rows('reseau_sociaux', 'option') ): the_row(); ?>
									<a href="<?php the_sub_field('lien_vers_le_reseaux_social', 'option') ?>" target="_blank" ><i class="<?php the_sub_field('choix_de_reseau_social', 'option') ?>"></i></a>
									<?php endwhile; ?>
								<?php endif; ?> 		
							</div>
						</div>
						<div class="col-12 copyright">
							<span><?php the_field('copyright', 'option'); ?></span> 		        	         		                  
						</div>		                  
					</div>
				</div> <!-- end container -->

				<div id="go-top">
					<a class="smoothscroll" title="Back to Top" href="#top"><i class="va-ion-ios-arrow-thin-up"></i></a>
				</div>		
			</footer>
			<div id="preloader"> 
				<div id="loader"></div>
			</div>
		</div><!-- #page -->
		<?php wp_footer(); ?>
	</body>
</html>
