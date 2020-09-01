<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package San_WP_Bootstrap
 */

?>

<li class="post-lst">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >

		<div class="post-thumbnail">
			<?php the_post_thumbnail(); ?>
		</div>

		<div class="entry-content ">

			<?php
				if ( is_single() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif; 
			
				the_excerpt();
			?>

			<div class="category-cstm"><?php san_category_custom(); echo do_shortcode('[rt_reading_time postfix="min read" postfix_singular="min read"]');?></div>

		</div>
			
	</article>
</li>

