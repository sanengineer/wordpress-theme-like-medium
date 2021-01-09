<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package San_WP_Bootstrap
 */

?>

	<article id="post-<?php the_ID(); ?>" <?php post_class('sn-post-card sn-post'); ?> >

		<a href="<?php echo ( get_permalink() )?>" class="sn-post-card-image-link">
		
			<?php 
				
				// the_post_thumbnail(); 
			
				echo get_the_post_thumbnail( $post_id, 'large' ,array( 'class' => 'sn-post-card-image' ) );
				
			?>
		</a>

		<div class="sn-post-card-content">

			<a href="<?php echo ( get_permalink() )?>" class="sn-post-card-content-link" rel="bookmark">
				
			<div class="sn-post-card-header">

					<?php
						if ( is_single() ) :
							the_title( '<h1 class="entry-title">', '</h1>' );
						else :
							the_title( '<h2 class="sn-post-card-title">', '</h2>' );
						endif; 
					?>

				</div>			

				<div class="sn-post-card-excerpt">
					<?php the_excerpt();?>
				</div>				
				
			</a>

			<footer class="sn-post-card-meta">
				<div class="sn-ava">
					<?php 
					
						echo do_shortcode('[avatar]');
					
					?>
				</div>
				<div class="sn-authname-cat-rdtime">
					<span><a href="#" rel="nofollow norefferer"><?php the_author(); ?></a></span>
					<div class="category-cstm">
						<?php 
						san_category_customnolink(); echo do_shortcode('[rt_reading_time postfix="min read" postfix_singular="min read"]');
						?>
					</div>
				</div>
				</footer>
		</div>
			
	</article>