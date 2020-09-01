<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package SAN_WP_Bootstrap
 */

get_header(); 

// $adsense = "1"; // 0 - For unactivate , 1 - For activate
// $ads_client_id = " "; // Publisher ID
// $ads_slot_id   = " "; // Slot ID
// $ads_format    = "auto";// ADS format - auto (This ad unit can automatically adjust the size of space available on the page.)
// $ads_responsive="true";

?>
<div class="container">
  <div class="row">

	<section id="primary" class="content-area col-sm-12 col-lg-8">
		<main id="main" class="site-main" role="main">

		<div class="single-ads" id="singleAds">
                <div class="single-ads-title">advertisement</div>
                    <div class="single-ads-script">
						<div class="example-ads" style="background:#cecece"></div> <!-- delete this line after fiil adsense code -->
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
	                </div>
	            </div><!-- end single ads custom -->

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'san-wp-bootstrap' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			
			the_posts_navigation_search_page();

			

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
