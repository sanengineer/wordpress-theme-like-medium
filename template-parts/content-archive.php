<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package SAN_WP_Bootstrap
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
	<header class="entry-header">
		<div class="post-thumbnail">
			<?php the_post_thumbnail(); ?>
		</div>
		<?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif; 
		?>
	</header><!-- .entry-header -->
	<div class="category-cstm"><?php san_category_customnolink(); echo do_shortcode('[rt_reading_time postfix="min read" postfix_singular="min read"]');?></div>	
	<div class="entry-content">
		<?php
            the_excerpt();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'san-wp-bootstrap' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->	
</article><!-- #post-## -->
