<?php
//
// Index With Card Post And Hero Background
//
get_header(); ?>


<div class="sn-home-content">
    <div class="justify-content-center">

        <section id="heroBig" class="sn-hero-info-bg hero-bg-image">
            <!-- <div class="sn-hero-content"> -->
            <div class="sn-hero-logo">
                <h1 class="mrl-hero-title">Our Weekly Blog</h1>
            </div>
            <!-- <div class="sn-hero-descript"> -->
            <!-- </div> -->
            <!-- </div> -->
        </section>

        <div class="container">
            <div class="col">
                <section id="primary" class="container content-area col-sm-12 col-lg">
                    <main id="main" class="site-main" role="main">
                        <div class="sn-inner-post">
                            <div class="sn-post-feed p-0">
                                <?php
								if ( have_posts() ) :

									if ( is_home() && ! is_front_page() ) : ?>
                                <header>
                                    <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                                </header>

                                <?php
									endif;

									/* Start the Loop */
									while ( have_posts() ) : the_post();

										/*
										* Include the Post-Format-specific template for the content.
										* If you want to override this in a child theme, then include a file
										* called content-___.php (where ___ is the Post Format name) and that will be used instead.
										*/
										get_template_part( 'template-parts/content', 'flex' );

									endwhile;

								else :

										get_template_part( 'template-parts/content', 'none' );

								endif; 
							?>

                            </div>
                        </div>


                    </main><!-- #main -->

                    <!-- The pagination component -->
                    <?php san_pagination();?>

                </section><!-- #primary -->
            </div>
        </div>


        <?php

// get_sidebar();
get_footer('custom');