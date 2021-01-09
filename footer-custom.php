<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SAN_WP_Bootstrap
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
</div><!-- .row -->
</div><!-- .container -->
</div><!-- #content -->

<?php get_template_part( 'footer-widget' ); ?>

<footer id="colophon" class="site-footer <?php echo san_wp_bootstrap_bg_class(); ?>" role="contentinfo">

    <div class="container pt-3 pb-3">

        <div class="site-info">

            <span>Enjoy Everywhere. <span>
                    <span>Theme by <a href="https://sanengineer.com" target="_blank">San Engineer</a></span>

        </div><!-- close .site-info -->
    </div>
</footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>

</html>