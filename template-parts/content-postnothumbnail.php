<?php
/**
 * Template part for displaying page content in page.php
 *
 * With Col-lg-8 And Over With Image 
 * 
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package San_WP_Bootstrap
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php
    $enable_vc = get_post_meta(get_the_ID(), '_wpb_vc_js_status', true);
    if(!$enable_vc ) {
	?>
	
    <header class="sn-wo8 entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
	<?php } 
	
	?>

	<div class=" sn-wo8 inf-cont-post">

		<div class="ph-nm-cat-rd">

			<div class="avt-img">
				<div class="outer-circle"></div>
					<?php	echo do_shortcode('[avatar]'); ?>
					<!-- <img class="onweb-img" src="http://imac.local/blog-wp/wp-content/uploads/2020/04/icon-profil-service-web@4x.png" alt="author-img-anonymous"> -->
					<?php /* echo get_avatar( get_the_author_meta( 'ID' ), 48 ); */ ?>
			</div>

			<div class="nm-cat-rdtm">
				<div class="auth-name">
					<span><?php the_author(); ?></span>
				</div>

				<div class="category-cstm">
					<?php san_category_custom(); echo do_shortcode('[rt_reading_time postfix="min read" postfix_singular="min read"]');?>
				</div>
			</div>
			
		</div>
		
		<?php san_share_buttons();?>

	</div>

	<div class="sn-wo8 entry-content">
	
		<?php
			the_content();?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'san-wp-bootstrap' ),
				'after'  => '</div>',
			) );
		?>

	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() && !$enable_vc ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'san-wp-bootstrap' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-## -->
