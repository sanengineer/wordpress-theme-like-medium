<?php
/**
 * The main template file
 * 
 * List View With Sidebar and Feature Post (Manual Input)
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package SAN_WP_Bootstrap
 * 
 */

get_header(); ?>


<div class="container">
  <div class="row">

	<section id="xtremeHero" class="xtreme-hero">
			<!-- Featured Post -->
				<div class="left-hero">

				<?php
					$custom_query_args = array(
						'post_type'  => 'any',
						'post__in' => array( 293 ) 
					);
					
					// Get current page and append to custom query parameters array
					$custom_query_args['paged'] = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

					$custom_query = new WP_Query( $custom_query_args ); ?>


					<?php
					// Pagination fix
					global $wp_query;
						$temp_query = $wp_query;
						$wp_query   = NULL;
						$wp_query   = $custom_query;
					?>
					<?php if ( $custom_query->have_posts() ) : ?>

					<!-- the loop -->
					<?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>


					<article id="mid-post-<?php the_ID(); ?>" <?php post_class(); ?> >
						<div class="post-thumbnail">
							<?php the_post_thumbnail(); ?>
						</div>	
						<div class="post-content">
							<h2>
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h2>
							<p>
								<?php the_excerpt(); ?>
							</p>
							<div class="category-cstm">
								<?php san_category_custom(); echo do_shortcode('[rt_reading_time postfix="min read" postfix_singular="min read"]');?>
							</div>
						</div>	
					</article>

					<?php endwhile; ?>
					<!-- end of the loop -->

					<?php else:  ?>
						
					<?php endif; ?>

					<?php
					// Reset postdata
						wp_reset_postdata();
					?>

					<?php
					// Reset main query object
						$wp_query = NULL;
						$wp_query = $temp_query;
					?>
					
				</div>

				<div class="mid-hero">

					<?php
					$custom_query_args = array(
						'post_type'  => 'any',
						'post__in' => array( 733,725,291 ) 
					);
					
					// Get current page and append to custom query parameters array
					$custom_query_args['paged'] = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

					$custom_query = new WP_Query( $custom_query_args ); ?>

					<?php
					// Pagination fix
					global $wp_query;
						$temp_query = $wp_query;
						$wp_query   = NULL;
						$wp_query   = $custom_query;
					?>
					<?php if ( $custom_query->have_posts() ) : ?>

					<!-- the loop -->
					<?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>

					<article id="mid-post-<?php the_ID(); ?>" <?php post_class(); ?> >
						<div class="post-thumbnail">
							<?php the_post_thumbnail(); ?>
						</div>	
						<div class="post-content">
							<h2>
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h2>
							<p><?php echo substr(get_the_excerpt(),0,25); echo "...";?></p>
							<div class="category-cstm">
								<?php san_category_custom(); echo do_shortcode('[rt_reading_time postfix="min read" postfix_singular="min read"]');?>
							</div>
						</div>	
					</article>

					<?php endwhile; ?>
					<!-- end of the loop -->

					<?php else:  ?>
						
					<?php endif; ?>

					<?php
					// Reset postdata
						wp_reset_postdata();
					?>

					<?php
					// Reset main query object
						$wp_query = NULL;
						$wp_query = $temp_query;
					?>

				</div>

				<div class="right-hero">

					<?php
					$custom_query_args = array(
						'post_type'  => 'any',
						'post__in' => array( 301 ) 
					);
					
					// Get current page and append to custom query parameters array
					$custom_query_args['paged'] = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

					$custom_query = new WP_Query( $custom_query_args ); ?>

					<?php
					// Pagination fix
					global $wp_query;
						$temp_query = $wp_query;
						$wp_query   = NULL;
						$wp_query   = $custom_query;
					?>
					<?php if ( $custom_query->have_posts() ) : ?>

					<!-- the loop -->
					<?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>

					<article id="mid-post-<?php the_ID(); ?>" <?php post_class(); ?> >
						<div class="post-thumbnail">
							<?php the_post_thumbnail(); ?>
						</div>
						<div class="post-content">
							<h2>
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h2>
							<p>
								<?php the_excerpt(); ?>
							</p>
							<div class="category-cstm">
								<?php san_category_custom(); echo do_shortcode('[rt_reading_time postfix="min read" postfix_singular="min read"]');?>
							</div>
						</div>	
						
					</article>

					<?php endwhile; ?>
					<!-- end of the loop -->

					<?php else:  ?>
						
					<?php endif; ?>

					<?php
					// Reset postdata
						wp_reset_postdata();
					?>

					<?php
					// Reset main query object
						$wp_query = NULL;
						$wp_query = $temp_query;
					?>

				</div>
				
			<!-- End Of Featured Post -->
	</section>

	<section id="primary" class="content-area col-sm-12 col-lg-8">
		<main id="main" class="site-main" role="main">
		
			<div class="promo-content alert alert-warning alert-dismissible fade show" role="alert">
				<div class="promo-text">
					<h2>Lorem Ipsum Dolor Sit</h2>
					<p>Aliquet risus feugiat in ante metus dictum. Nunc faucibus a pellentesque sit amet porttitor. Risus sed vulputate odio ut enim. Amet porttitor eget dolor morbi. Bibendum arcu vitae elementum curabitur vitae nunc.</p>
				</div>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span style="font-weight:100;" aria-hidden="true">&times;</span>
				</button>				
				<div class="link-web">
					<a class="btn btn-warning link-external-web" href="#" target="_blank" rel="noopener noreffer nofolow">visit external link</a>
					<a class="btn btn-outline-warning link-internal-web" href="#">visit this web</a>
				</div>	
			</div>

			<ul class="p-0"> 
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
							get_template_part( 'template-parts/content-list', get_post_format() );

						endwhile;

					else :

							get_template_part( 'template-parts/content', 'none' );

					endif; 
				?>

			</ul>
	
		</main><!-- #main -->

		<!-- The pagination component -->
		<?php san_pagination();?> 

	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();



