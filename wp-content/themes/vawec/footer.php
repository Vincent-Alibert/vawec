			<footer>
				<div class="container">
					<div class=" row">
						<h2 class="col-12 wow fadeInUp" data-wow-offset="100" ><?php the_field('social_network_title', 'option'); ?></h2>
						<div class="col-12 social">
							<div class="row justify-content-center"> 
								<?php if( have_rows('reseau_sociaux', 'option') ):
									$i=1;
									while( have_rows('reseau_sociaux', 'option') ): the_row(); 
									$i++; ?>
									<a class=" wow fadeInUp" data-wow-delay="0.<?= $i?>s" data-wow-offset="100" href="<?php the_sub_field('lien_vers_le_reseaux_social', 'option') ?>" target="_blank" ><i class="<?php the_sub_field('choix_de_reseau_social', 'option') ?>"></i></a>
									<?php endwhile; ?>
								<?php endif; ?> 		
							</div>
						</div>
						<div class="col-12 copyright ">
							<span><?php the_field('copyright', 'option'); ?></span> 		        	         		                  
						</div>		                  
					</div>
				</div> <!-- end container -->
			</footer>

			<div id="go-top">
				<a class="smoothscroll" title="Back to Top" href="#nav"><i class="va-ion-ios-arrow-thin-up"></i></a>
			</div>		
			<div id="preloader"> 
				<div id="loader">
					<i class="va-uniF1CE"></i>
				</div>
			</div>
		</div><!-- #page -->
		<?php wp_footer(); ?>
	</body>
	<script>
	require ('initialize');
	cookieWarn.init({
			styles: {
				"bg" : "#000000",
				"textColor": "#ffffff",
				"fontFamily": "LatoR",
				"btnBg": "#f18f10",
				"btnTextColor": "#ffffff",
				"btnBorderRadius": "0px"
			}			
		});
	</script>
</html>
