<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package San_WP_Bootstrap
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'san-wp-bootstrap' ); ?></a>
    <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
	<header id="masthead" class="site-header navbar-static-top <?php echo san_wp_bootstrap_bg_class(); ?>" role="banner">
        <div class="container">
               <nav id="snnav" class="san-top-nav navbar navbar-expand-xl snupperenav" >
                    <div class="navbar-brand">
                        <?php if ( get_theme_mod( 'san_wp_bootstrap_logo' ) ): ?>
                            <a href="<?php echo esc_url( home_url( '/' )); ?>">
                             <img src="<?php echo esc_url(get_theme_mod( 'san_wp_bootstrap_logo' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                            </a>
                        <?php else : ?>
                            <a class="site-title" href="<?php echo esc_url( home_url( '/' )); ?>"><?php esc_url(bloginfo('name')); ?></a>
                        <?php endif; ?>

                    </div>
                
                    <button class="navbar-toggler pr-0" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                    </button>
                        <?php
                        wp_nav_menu(array(
                        'theme_location'    => 'primary',
                        'container'         => 'div',
                        'container_id'      => 'main-nav',
                        'container_class'   => 'collapse navbar-collapse justify-content-end',
                        'menu_id'           => false,
                        'menu_class'        => 'navbar-nav',
                        'depth'             => 3,
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        'walker'            => new wp_bootstrap_navwalker()
                        ));
                        ?>
                </nav>
            </div>
	</header><!-- #masthead -->
    
	<div id="content" class="site-content">
    <?php endif; ?>