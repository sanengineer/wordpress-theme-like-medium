<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package SAN_WP_Bootstrap
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="post-thumbnail">
			<?php the_post_thumbnail(); ?>
		</div>
		<?php the_title( sprintf( 
			   '<h2 class="entry-title"><a href="%s" rel="bookmark">',
			  esc_url( get_permalink() ) ), '</a></h2>' ); 
		?>
		<?php if ( 'post' === get_post_type() ) : ?>
		<?php endif; ?>
	</header><!-- .entry-header -->
	<div class="category-cstm"><?php san_category_custom(); echo do_shortcode('[rt_reading_time postfix="min read" postfix_singular="min read"]');?></div>	
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
</article><!-- #post-## -->

