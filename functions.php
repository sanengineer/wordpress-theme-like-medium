<?php
/**
 * San WP Bootstrap functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package San_WP_Bootstrap
 */

if ( ! function_exists( 'san_wp_bootstrap_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function san_wp_bootstrap_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on San WP Bootstrap, use a find and replace
	 * to change 'san-wp-bootstrap' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'san-wp-bootstrap', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'san-wp-bootstrap' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'san_wp_bootstrap_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

    function wp_bootstrap_starter_add_editor_styles() {
        add_editor_style( 'custom-editor-style.css' );
    }
    add_action( 'admin_init', 'wp_bootstrap_starter_add_editor_styles' );

}
endif;
add_action( 'after_setup_theme', 'san_wp_bootstrap_setup' );


/**
 * Add Welcome message to board
 */
function san_wp_bootstrap_reminder(){
        $theme_page_url = 'https://monochroomlab.com';

            if(!get_option( 'triggered_welcomet')){
                $message = sprintf(__( 'Welcome to San WP Bootstrap Theme! Before diving in to your new theme, please visit the <a style="color: #fff; font-weight: bold;" href="%1$s" target="_blank">theme\'s</a> page for access to dozens of tips and in-depth tutorials.', 'san-wp-bootstrap' ),
                    esc_url( $theme_page_url )
                );

                printf(
                    '<div class="notice is-dismissible" style="background-color: #6C2EB9; color: #fff; border-left: none;">
                        <p>%1$s</p>
                    </div>',
                    $message
                );
                add_option( 'triggered_welcomet', '1', '', 'yes' );
            }

}
add_action( 'admin_notices', 'san_wp_bootstrap_reminder' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function san_wp_bootstrap_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'san_wp_bootstrap_content_width', 1170 );
}
add_action( 'after_setup_theme', 'san_wp_bootstrap_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function san_wp_bootstrap_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'san-wp-bootstrap' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'san-wp-bootstrap' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 1', 'san-wp-bootstrap' ),
        'id'            => 'footer-1',
        'description'   => esc_html__( 'Add widgets here.', 'san-wp-bootstrap' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 2', 'san-wp-bootstrap' ),
        'id'            => 'footer-2',
        'description'   => esc_html__( 'Add widgets here.', 'san-wp-bootstrap' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 3', 'san-wp-bootstrap' ),
        'id'            => 'footer-3',
        'description'   => esc_html__( 'Add widgets here.', 'san-wp-bootstrap' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'san_wp_bootstrap_widgets_init' );


/**
 * Enqueue scripts and styles.
 */
function san_wp_bootstrap_scripts() {
	// load bootstrap css
    if ( get_theme_mod( 'cdn_assets_setting' ) === 'yes' ) {
        wp_enqueue_style( 'san-wp-bootstrap-bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css' );
        wp_enqueue_style( 'san-wp-bootstrap-fontawesome-cdn', 'https://use.fontawesome.com/releases/v5.10.2/css/all.css' );


    } else {
        wp_enqueue_style( 'san-wp-bootstrap-bootstrap-css', get_template_directory_uri() . '/inc/assets/css/bootstrap.min.css' );
        wp_enqueue_style( 'san-wp-bootstrap-fontawesome-cdn', get_template_directory_uri() . '/inc/assets/css/fontawesome.min.css' );
    }
	// load bootstrap css
	// load AItheme styles
	// load San WP Bootstrap styles
	wp_enqueue_style( 'san-wp-bootstrap-style', get_stylesheet_uri() );
    if(get_theme_mod( 'theme_option_setting' ) && get_theme_mod( 'theme_option_setting' ) !== 'default') {
        wp_enqueue_style( 'san-wp-bootstrap-'.get_theme_mod( 'theme_option_setting' ), get_template_directory_uri() . '/inc/assets/css/presets/theme-option/'.get_theme_mod( 'theme_option_setting' ).'.css', false, '' );
    }

    if(get_theme_mod( 'preset_style_setting' ) === 'roboto-roboto') {
        wp_enqueue_style( 'san-wp-bootstrap-roboto-font', 'https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&display=swap' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'quicksand') {
        wp_enqueue_style( 'san-wp-bootstrap-quicksand', 'https://fonts.googleapis.com/css?family=Quicksand:300,400,500,600,700&display=swap' );
	}
	if(get_theme_mod( 'preset_style_setting' ) === 'nunito') {
        wp_enqueue_style( 'san-wp-bootstrap-nunito', 'https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&display=swap' );
	}	
	if(get_theme_mod( 'preset_style_setting' ) === 'rubik') {
        wp_enqueue_style( 'san-wp-bootstrap-rubik', 'https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i&display=swap' );
	}
    if(get_theme_mod( 'preset_style_setting' ) && get_theme_mod( 'preset_style_setting' ) !== 'default') {
        wp_enqueue_style( 'san-wp-bootstrap-'.get_theme_mod( 'preset_style_setting' ), get_template_directory_uri() . '/inc/assets/css/presets/typography/'.get_theme_mod( 'preset_style_setting' ).'.css', false, '' );
	}
	
    //Color Scheme
    if(get_theme_mod( 'preset_color_scheme_setting' ) && get_theme_mod( 'preset_color_scheme_setting' ) !== 'default') {
        wp_enqueue_style( 'san-wp-bootstrap-'.get_theme_mod( 'preset_color_scheme_setting' ), get_template_directory_uri() . '/inc/assets/css/presets/color-scheme/'.get_theme_mod( 'preset_color_scheme_setting' ).'.css', false, '' );
    }else {
        wp_enqueue_style( 'san-wp-bootstrap-default', get_template_directory_uri() . '/inc/assets/css/presets/color-scheme/body.css', false, '' );
    }

	wp_enqueue_script('jquery');

    // Internet Explorer HTML5 support
    wp_enqueue_script( 'html5hiv',get_template_directory_uri().'/inc/assets/js/html5.js', array(), '3.7.0', false );
    wp_script_add_data( 'html5hiv', 'conditional', 'lt IE 9' );

	// load bootstrap js
    if ( get_theme_mod( 'cdn_assets_setting' ) === 'yes' ) {
        wp_enqueue_script('san-wp-bootstrap-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.15.0/dist/umd/popper.min.js', array(), '', true );
    	wp_enqueue_script('san-wp-bootstrap-bootstrapjs', 'https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js', array(), '', true );
    } else {
        wp_enqueue_script('san-wp-bootstrap-popper', get_template_directory_uri() . '/inc/assets/js/popper.min.js', array(), '', true );
        wp_enqueue_script('san-wp-bootstrap-bootstrapjs', get_template_directory_uri() . '/inc/assets/js/bootstrap.min.js', array(), '', true );
    }
    wp_enqueue_script('san-wp-bootstrap-themejs', get_template_directory_uri() . '/inc/assets/js/theme-script.min.js', array(), '', true );
	wp_enqueue_script( 'san-wp-bootstrap-skip-link-focus-fix', get_template_directory_uri() . '/inc/assets/js/skip-link-focus-fix.min.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'san_wp_bootstrap_scripts' );



/**
 * Add Preload for CDN scripts and stylesheet
 */
function san_wp_bootstrap_preload( $hints, $relation_type ){
    if ( 'preconnect' === $relation_type && get_theme_mod( 'cdn_assets_setting' ) === 'yes' ) {
        $hints[] = [
            'href'        => 'https://cdn.jsdelivr.net/',
            'crossorigin' => 'anonymous',
        ];
        $hints[] = [
            'href'        => 'https://use.fontawesome.com/',
            'crossorigin' => 'anonymous',
        ];
    }
    return $hints;
} 

add_filter( 'wp_resource_hints', 'san_wp_bootstrap_preload', 10, 2 );



function san_wp_bootstrap_password_form() {
    global $post;
    $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
    $o = '<form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post">
    <div class="d-block mb-3">' . __( "To view this protected post, enter the password below:", "san-wp-bootstrap" ) . '</div>
    <div class="form-group form-inline"><label for="' . $label . '" class="mr-2">' . __( "Password:", "san-wp-bootstrap" ) . ' </label><input name="post_password" id="' . $label . '" type="password" size="20" maxlength="20" class="form-control mr-2" /> <input type="submit" name="Submit" value="' . esc_attr__( "Submit", "san-wp-bootstrap" ) . '" class="btn btn-primary"/></div>
    </form>';
    return $o;
}
add_filter( 'the_password_form', 'san_wp_bootstrap_password_form' );



/**
 * Implement the Custom Header feature.
 */
// require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load plugin compatibility file.
 */
require get_template_directory() . '/inc/plugin-compatibility/plugin-compatibility.php';

/**
 * Load custom WordPress nav walker.
 */
if ( ! class_exists( 'wp_bootstrap_navwalker' )) {
    require_once(get_template_directory() . '/inc/wp_bootstrap_navwalker.php');
}

add_filter( 'wp_trim_excerpt', 'san_strap_get_more_link' );

if ( ! function_exists( 'san_strap_get_more_link' ) ) {
	/**
	 * Adds a custom read more link to all excerpts, manually or automatically generated
	 *
	 * @param string $post_excerpt Posts's excerpt.
	 *
	 * @return string
	 */
	function san_strap_get_more_link( $post_excerpt ) {
		if ( ! is_admin() ) {
			$post_excerpt = $post_excerpt . '...' ;
		}
		return $post_excerpt;
	}
}

if ( ! function_exists( 'san_pagination' ) ) {

	function san_pagination( $args = array(), $class = 'pagination' ) {

		if ( $GLOBALS['wp_query']->max_num_pages <= 1 ) {
			return;
		}

		$args = wp_parse_args(
			$args,
			array(
				'mid_size'           => 2,
				'prev_next'          => true,
				'prev_text'          => __( '&laquo;', 'san' ),
				'next_text'          => __( '&raquo;', 'san' ),
				'screen_reader_text' => __( 'Posts navigation', 'san' ),
				'type'               => 'array',
				'current'            => max( 1, get_query_var( 'paged' ) ),
			)
		);

		$links = paginate_links( $args );

		?>

		<nav aria-label="<?php echo $args['screen_reader_text']; ?>">

			<ul class="pagination">

				<?php
				foreach ( $links as $key => $link ) {
					?>
					<li class="page-item <?php echo strpos( $link, 'current' ) ? 'active' : ''; ?>">
						<?php echo str_replace( 'page-numbers', 'page-link', $link ); ?>
					</li>
					<?php
				}
				?>

			</ul>

		</nav>

		<?php
	}
}


function get_the_sanpost_navigation( $args = array() ) {
	// Make sure the nav element has an aria-label attribute: fallback to the screen reader text.
	if ( ! empty( $args['screen_reader_text'] ) && empty( $args['aria_label'] ) ) {
		$args['aria_label'] = $args['screen_reader_text'];
	}

	$args = wp_parse_args(
		$args,
		array(
			'prev_text'          => ' %title',
			'next_text'          => '%title',
			'in_same_term'       => false,
			'excluded_terms'     => '',
			'taxonomy'           => 'category',
			'screen_reader_text' => __( 'Post navigation' ),
			'aria_label'         => __( 'Posts' ),
		)
	);

	$navigation = '';

	$previous = get_previous_post_link(
		'<div class="nav-previous">%link</div>',
		$args['prev_text'],
		$args['in_same_term'],
		$args['excluded_terms'],
		$args['taxonomy']
	);

	$next = get_next_post_link(
		'<div class="nav-next">%link</div>',
		$args['next_text'],
		$args['in_same_term'],
		$args['excluded_terms'],
		$args['taxonomy']
	);

	// Only add markup if there's somewhere to navigate to.
	if ( $previous || $next ) {
		$navigation = _navigation_markup( $previous . $next, 'post-navigation', $args['screen_reader_text'], $args['aria_label'] );
	}

	return $navigation;
}

/**
 * Displays the navigation to next/previous post, when applicable.
 *
 * @since 4.1.0
 *
 * @param array $args Optional. See get_the_post_navigation() for available arguments.
 *                    Default empty array.
 */
function the_sanpost_navigation( $args = array() ) {
	echo get_the_sanpost_navigation( $args );
}


function get_the_posts_navigation_search_page( $args = array() ) {
	$navigation = '';

	// Don't print empty markup if there's only one page.
	if ( $GLOBALS['wp_query']->max_num_pages > 1 ) {
		// Make sure the nav element has an aria-label attribute: fallback to the screen reader text.
		if ( ! empty( $args['screen_reader_text'] ) && empty( $args['aria_label'] ) ) {
			$args['aria_label'] = $args['screen_reader_text'];
		}

		$args = wp_parse_args(
			$args,
			array(
				'prev_text'          => __( 'Older posts' ),
				'next_text'          => __( 'Newer posts' ),
				'screen_reader_text' => __( 'Posts navigation' ),
				'aria_label'         => __( 'Posts' ),
			)
		);

		$next_link = get_previous_posts_link( $args['next_text'] );
		$prev_link = get_next_posts_link( $args['prev_text'] );

		if ( $prev_link ) {
			$navigation .= '<div class="nav-previous-search-page">' . $prev_link . '</div>';
		}

		if ( $next_link ) {
			$navigation .= '<div class="nav-next-search-page">' . $next_link . '</div>';
		}

		$navigation = _navigation_markup( $navigation, 'posts-navigation', $args['screen_reader_text'], $args['aria_label'] );
	}

	return $navigation;
}



/**
 * Displays the navigation to next/previous set of posts, when applicable.
 *
 * @since 4.1.0
 *
 * @param array $args Optional. See get_the_posts_navigation() for available arguments.
 *                    Default empty array.
 */
function the_posts_navigation_search_page( $args = array() ) {
	echo get_the_posts_navigation_search_page( $args );
}



/**
 * Social media share buttons
 */
function san_share_buttons() {
    $url = urlencode(get_the_permalink());
    $title = urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8'));
	$media = urlencode(get_the_post_thumbnail_url(get_the_ID(), 'full'));
	$urlori = get_the_permalink();

    include( locate_template('san-share-template.php', false, false) );
}



/**
 * Filter the excerpt length to 15 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 15;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );




/**
 * Change the excerpt more string
 */
function sn_excerpt_more( $more ) {
	return '';
}
add_filter( 'excerpt_more', 'sn_excerpt_more' );



/**
 * Display Category Title with Link
 * 
 *	
 */
function san_category_custom() {

	$categories_list = get_the_category_list( esc_html__( ', ', 'san-wp-bootstrap' ) );
	if ( $categories_list && san_wp_bootstrap_categorized_blog() ) {
	printf(  esc_html__( '%1$s', 'san-wp-bootstrap' ) , $categories_list ); // WPCS: XSS OK.
	} 
}



/**
 * 
 * Sticky When Scroll Stop When Footer
 * 
 */
function snscrollstick() {

	wp_enqueue_script( 'snscript', get_template_directory_uri() . '/inc/assets/js/footer-sticky.js');
	  
  }
  
  add_action('wp_enqueue_scripts','snscrollstick');



/**
 * Display Category Title without Link
 * 
 *	
 */
function san_category_customnolink() {

	// $categories_list = get_the_category_list( esc_html__( ', ', 'san-wp-bootstrap' ) );
	// foreach((get_the_category()) as $category_list) {echo $category_list->cat_name . ' ';}

	$cats = array();
	foreach (get_the_category($post_id) as $c) {
	$cat = get_category($c);
	array_push($cats, $cat->name);
	}

	if (sizeOf($cats) > 0) {
	$post_categories = implode(', ', $cats);
	} else {
	$post_categories = 'Not Assigned';
	}

	echo $post_categories;

}

/**
 * 
 * Sticky When Scroll Stop When Footer
 * 
 */
function snsupersticky() {

	wp_enqueue_script( 'snnavscript', get_template_directory_uri() . '/inc/assets/js/scroll-add-class-nav.js');
	  
  }
  
  add_action('wp_enqueue_scripts','snsupersticky');


