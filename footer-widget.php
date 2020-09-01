<?php

if ( is_home() && 'post' == get_post_type() ) 
// if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) )
// if ( is_active_sidebar( 'footer-1' ) )
    {
        ?>
        <div id="footer-widget" class="footer-widget row m-0">
            <div class="container">
                <div class="row">
                    <?php if ( is_active_sidebar( 'footer-2' )) : ?>
                        <div class="col-12 col-lg"><?php dynamic_sidebar( 'footer-2' ); ?></div>
                    <?php endif; ?>                
                </div>
            </div>
        </div>

        <?php   
    }
    
    
if ( is_single() && 'post' == get_post_type() ) 
// if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) )
//    if ( is_active_sidebar( 'footer-1' ) )
    {
        ?>
        <div id="footer-widget" class="footer-widget row m-0">
            <div class="container">
                <div class="row">
                    <?php if ( is_active_sidebar( 'footer-1' )) : ?>
                        <div class="col-12 col-lg"><?php dynamic_sidebar( 'footer-1' ); ?></div>
                    <?php endif; ?>                
                </div>
            </div>
        </div>

        <?php   
    }


if ( is_archive() && 'post' == get_post_type() ) 
// if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) )
// if ( is_active_sidebar( 'footer-1' ) )
    {
        ?>
        <div id="footer-widget" class="footer-widget row m-0">
            <div class="container">
                <div class="row">
                    <?php if ( is_active_sidebar( 'footer-2' )) : ?>
                        <div class="col-12 col-lg"><?php dynamic_sidebar( 'footer-2' ); ?></div>
                    <?php endif; ?>                
                </div>
            </div>
        </div>

        <?php   
    }


