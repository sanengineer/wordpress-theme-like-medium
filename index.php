<?php
/**
 * The main template file
 *
 * Card View No Sidebar
 * 
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package SAN_WP_Bootstrap
 */

get_header(); ?>


<div class="sn-home-content">
  <div class="justify-content-center">

	<section id="heroBig" class="sn-hero-info-bg hero-bg-image">
		<!-- <div class="sn-hero-content"> -->
			<div class="sn-hero-logo">
				<img src="<?php echo esc_url(get_theme_mod( 'san_wp_bootstrap_logo' )); ?>" alt="logo-blog">
			</div>
			<!-- <div class="sn-hero-descript"> -->
				<h1 class="sn-hero-title-blog"><?php printf (get_bloginfo( 'name' )); ?></h1>
				<p><?php printf (get_bloginfo( 'description' )); ?></p>
			<!-- </div> -->
		<!-- </div> -->
	</section>

	<div class="container">
		<div class="col">
			<section id="primary" class="container content-area col-sm-12 col-lg">
				<main id="main" class="site-main" role="main">
				
					<div class="promo-content alert alert-warning alert-dismissible fade show" role="alert">
						<div class="promo-text">
							<h2>Lorem Ipsum Dolor Sit</h2>
							<p>Aliquet risus feugiat in ante metus dictum. Nunc faucibus a pellentesque sit amet porttitor. Risus sed vulputate odio ut enim. Amet porttitor eget dolor morbi. Bibendum arcu vitae elementum curabitur vitae nunc.</p>
						</div>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span style="font-weight:100;" aria-hidden="true">&times;</span>
						</button>				
						<div class="link-covid">
							<a class="btn btn-warning" href="http://covid19.go.id" target="_blank" rel="noopener noreffer nofolow">visit covid19.go.id</a>
							<a class="btn btn-outline-warning" href="#">visit this web</a>
						</div>	
					</div>

					<div class="sn-inner-post">
						<div class="sn-post-feed p-0"> 
							<?php
								if ( have_posts() ) :

									if ( is_home() && ! is_front_page() ) : ?>
										<header>
											<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
										</header>

									<?php
									endif;

									/* Start the Loop */
									while ( have_posts() ) : the_post();

										/*
										* Include the Post-Format-specific template for the content.
										* If you want to override this in a child theme, then include a file
										* called content-___.php (where ___ is the Post Format name) and that will be used instead.
										*/
										get_template_part( 'template-parts/content', 'flex' );

									endwhile;

								else :

										get_template_part( 'template-parts/content', 'none' );

								endif; 
							?>

						</div>
					</div>	
					
			
				</main><!-- #main -->

				<!-- The pagination component -->
				<?php san_pagination();?> 

			</section><!-- #primary -->
		</div>
	</div>
	

<?php

// get_sidebar();
get_footer();



