<?php
/**
 * The template for displaying archive pages
 * 
 * With post card style
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package San_WP_Bootstrap
 */

get_header(); 

// $adsense = "1"; // 0 - For unactivate , 1 - For activate
// $ads_client_id = " "; // Publisher ID
// $ads_slot_id   = " "; // Slot ID
// $ads_format    = "auto";// ADS format - auto (This ad unit can automatically adjust the size of space available on the page.)
// $ads_responsive="true";

?>
<div class="container">
  <div class="col">

	<section id="primary" class="container content-area col-sm-12 col-lg">
		<main id="main" class="site-main" role="main">

		<!--<div class="single-ads" id="singleAds">
                <div class="single-ads-title">advertisement</div>
                    <div class="single-ads-script">
						<div class="example-ads" style="background:#cecece"></div>  delete this line after fiil adsense code -->
                    <!-- <?php if($adsense == 1){
                    echo "<script async src=\"//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>
                            <ins class=\"adsbygoogle\"
                            style=\"display:block\"
                            data-ad-client=\"{$ads_client_id}\"
                            data-ad-slot=\"{$ads_slot_id}\"
                            data-ad-format=\"{$ads_format}\"
                            data-full-width-responsive=\"{$ads_responsive}\"></ins>
                            <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>";
                            }
                            ?> -->
	                <!--</div>
	            </div> end single ads custom -->

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<?php

					// the_archive_title( '<h1 class="page-title">', '</h1>' );

					echo '<h1 class="page-title">' . single_cat_title( '', false ) . '</h1>';

					the_archive_description( '<div class="archive-description">', '</div>' );

					
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content','archive');

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
// get_sidebar();
get_footer();
