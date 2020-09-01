<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package San_WP_Bootstrap
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
	<div class="container">
 		<div class="row">
			<div class="post-thumbnail col-md-4 p-0">
				<?php the_post_thumbnail(); ?>
			</div>
			<div class="col-lg-7 col-md-6 d-flex align-items-center mt-4 mt-md-0 p-0">
				<div class="entry-content ">

					<?php

						if ( is_single() ) :
							the_title( '<h1 class="entry-title">', '</h1>' );
						else :
							the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
						endif;
				
           		 	the_excerpt();

					?>
				</div>
			</div>
		</div>
	</div>
</article>

	



