<?php

/*-----------------------------------------------------------------------------------*/
/* Enqueue script and styles */
/*-----------------------------------------------------------------------------------*/

function jeweller_store_enqueue_google_fonts() {

	require_once get_theme_file_path( 'core/includes/wptt-webfont-loader.php' );

	wp_enqueue_style( 'google-fonts-jockey', 'https://fonts.googleapis.com/css2?family=Jockey+One&display=swap' );

	wp_enqueue_style( 'google-fonts-inter', 'https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap' );

	wp_enqueue_style( 'google-fonts-pacifico', 'https://fonts.googleapis.com/css2?family=Pacifico&display=swap' );
}
add_action( 'wp_enqueue_scripts', 'jeweller_store_enqueue_google_fonts' );

if (!function_exists('jeweller_store_enqueue_scripts')) {

	function jeweller_store_enqueue_scripts() {

		wp_enqueue_style(
			'bootstrap-css',get_template_directory_uri() . '/css/bootstrap.css',
			array(),'4.5.0'
		);

		wp_enqueue_style(
			'fontawesome-css',get_template_directory_uri() . '/css/fontawesome-all.css',
			array(),'4.5.0'
		);

		wp_enqueue_style(
			'owl.carousel-css',get_template_directory_uri() . '/css/owl.carousel.css',
			array(),'2.3.4'
		);

		wp_enqueue_style('jeweller-store-style', get_stylesheet_uri(), array() );

		wp_style_add_data('jeweller-store-style', 'rtl', 'replace');

		wp_enqueue_style(
			'jeweller-store-media-css',get_template_directory_uri() . '/css/media.css',
			array(),'2.3.4'
		);

		wp_enqueue_style(
			'jeweller-store-woocommerce-css',get_template_directory_uri() . '/css/woocommerce.css',
			array(),'2.3.4'
		);

		wp_enqueue_script(
			'jeweller-store-navigation',get_template_directory_uri() . '/js/navigation.js',
			FALSE,
			'1.0',
			TRUE
		);

		wp_enqueue_script(
			'bootstrap-js',get_template_directory_uri() . '/js/bootstrap.js',
			array('jquery'),
			'5.1.3',
			TRUE
		);

		wp_enqueue_script(
			'owl.carousel-js',get_template_directory_uri() . '/js/owl.carousel.js',
			array('jquery'),
			'2.3.4',
			TRUE
		);

		wp_enqueue_script(
			'jeweller-store-script',get_template_directory_uri() . '/js/script.js',
			array('jquery'),
			'1.0',
			TRUE
		);

		if ( is_singular() ) wp_enqueue_script( 'comment-reply' );

		$jeweller_store_css = '';

		if ( get_header_image() ) :

			$jeweller_store_css .=  '
				.header{
					background-image: url('.esc_url(get_header_image()).');
					-webkit-background-size: cover !important;
					-moz-background-size: cover !important;
					-o-background-size: cover !important;
					background-size: cover !important;
				}';

		endif;

		wp_add_inline_style( 'jeweller-store-style', $jeweller_store_css );

		// Theme Customize CSS.
		require get_template_directory(). '/core/includes/inline.php';
		wp_add_inline_style( 'jeweller-store-style',$jeweller_store_custom_css );

	}

	add_action( 'wp_enqueue_scripts', 'jeweller_store_enqueue_scripts' );

}

/*-----------------------------------------------------------------------------------*/
/* Setup theme */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('jeweller_store_after_setup_theme')) {

	function jeweller_store_after_setup_theme() {

		if ( ! isset( $jeweller_store_content_width ) ) $jeweller_store_content_width = 900;

		register_nav_menus( array(
			'main-menu' => esc_html__( 'Main menu', 'jeweller-store' ),
		));

		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'woocommerce' );
		add_theme_support( 'align-wide' );
		add_theme_support('title-tag');
		add_theme_support('automatic-feed-links');
		add_theme_support( 'wp-block-styles' );
		add_theme_support('post-thumbnails');
		add_theme_support( 'custom-background', array(
		  'default-color' => 'f3f3f3'
		));

		add_theme_support( 'custom-logo', array(
			'height'      => 70,
			'width'       => 70,
			'flex-height' => true,
			'flex-width'  => true,
		) );

		add_theme_support( 'custom-header', array(
			'header-text' => false,
			'width' => 1920,
			'height' => 100,
			'flex-height' => true,
			'flex-width' => true,
		));

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		add_theme_support( 'post-formats', array('image','video','gallery','audio',) );

		add_editor_style( array( '/css/editor-style.css' ) );
	}

	add_action( 'after_setup_theme', 'jeweller_store_after_setup_theme', 999 );

}

require get_template_directory() .'/core/includes/customizer-notice/jeweller-store-customizer-notify.php';
require get_template_directory() .'/core/includes/theme-breadcrumb.php';
require get_template_directory() .'/core/includes/main.php';
require get_template_directory() .'/core/includes/tgm.php';
require get_template_directory() . '/core/includes/customizer.php';
load_template( trailingslashit( get_template_directory() ) . '/core/includes/class-upgrade-pro.php' );

/*-----------------------------------------------------------------------------------*/
/* Enqueue theme logo style */
/*-----------------------------------------------------------------------------------*/
function jeweller_store_logo_resizer() {

    $jeweller_store_theme_logo_size_css = '';
    $jeweller_store_logo_resizer = get_theme_mod('jeweller_store_logo_resizer');

	$jeweller_store_theme_logo_size_css = '
		.custom-logo{
			height: '.esc_attr($jeweller_store_logo_resizer).'px !important;
			width: '.esc_attr($jeweller_store_logo_resizer).'px !important;
		}
	';
    wp_add_inline_style( 'jeweller-store-style',$jeweller_store_theme_logo_size_css );

}
add_action( 'wp_enqueue_scripts', 'jeweller_store_logo_resizer' );

/*-----------------------------------------------------------------------------------*/
/* Get post comments */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('jeweller_store_comment')) :
    /**
     * Template for comments and pingbacks.
     *
     * Used as a callback by wp_list_comments() for displaying the comments.
     */
    function jeweller_store_comment($comment, $jeweller_store_args, $depth){

        if ('pingback' == $comment->comment_type || 'trackback' == $comment->comment_type) : ?>

            <li id="comment-<?php comment_ID(); ?>" <?php comment_class('media'); ?>>
            <div class="comment-body">
                <?php esc_html_e('Pingback:', 'jeweller-store');
                comment_author_link(); ?><?php edit_comment_link(__('Edit', 'jeweller-store'), '<span class="edit-link">', '</span>'); ?>
            </div>

        <?php else : ?>

        <li id="comment-<?php comment_ID(); ?>" <?php comment_class(empty($jeweller_store_args['has_children']) ? '' : 'parent'); ?>>
            <article id="div-comment-<?php comment_ID(); ?>" class="comment-body media mb-4">
                <a class="pull-left" href="#">
                    <?php if (0 != $jeweller_store_args['avatar_size']) echo get_avatar($comment, $jeweller_store_args['avatar_size']); ?>
                </a>
                <div class="media-body">
                    <div class="media-body-wrap card">
                        <div class="card-header">
                            <h5 class="mt-0"><?php /* translators: %s: author */ printf('<cite class="fn">%s</cite>', get_comment_author_link() ); ?></h5>
                            <div class="comment-meta">
                                <a href="<?php echo esc_url(get_comment_link($comment->comment_ID)); ?>">
                                    <time datetime="<?php comment_time('c'); ?>">
                                        <?php /* translators: %s: Date */ printf( esc_attr('%1$s at %2$s', '1: date, 2: time', 'jeweller-store'), esc_attr( get_comment_date() ), esc_attr( get_comment_time() ) ); ?>
                                    </time>
                                </a>
                                <?php edit_comment_link( __( 'Edit', 'jeweller-store' ), '<span class="edit-link">', '</span>' ); ?>
                            </div>
                        </div>

                        <?php if ('0' == $comment->comment_approved) : ?>
                            <p class="comment-awaiting-moderation"><?php esc_html_e('Your comment is awaiting moderation.', 'jeweller-store'); ?></p>
                        <?php endif; ?>

                        <div class="comment-content card-block">
                            <?php comment_text(); ?>
                        </div>

                        <?php comment_reply_link(
                            array_merge(
                                $jeweller_store_args, array(
                                    'add_below' => 'div-comment',
                                    'depth' => $depth,
                                    'max_depth' => $jeweller_store_args['max_depth'],
                                    'before' => '<footer class="reply comment-reply card-footer">',
                                    'after' => '</footer><!-- .reply -->'
                                )
                            )
                        ); ?>
                    </div>
                </div>
            </article>

            <?php
        endif;
    }
endif; // ends check for jeweller_store_comment()

if (!function_exists('jeweller_store_widgets_init')) {

	function jeweller_store_widgets_init() {

		register_sidebar(array(

			'name' => esc_html__('Sidebar','jeweller-store'),
			'id'   => 'jeweller-store-sidebar',
			'description'   => esc_html__('This sidebar will be shown next to the content.', 'jeweller-store'),
			'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'

		));

		register_sidebar(array(

			'name' => esc_html__('Menu Sidebar','jeweller-store'),
			'id'   => 'jeweller-store-menu-sidebar',
			'description'   => esc_html__('This sidebar will be shown in the header.', 'jeweller-store'),
			'before_widget' => '<div id="%1$s" class="sidebar-area sidebar-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'

		));

		register_sidebar(array(

			'name' => esc_html__('Footer sidebar','jeweller-store'),
			'id'   => 'jeweller-store-footer-sidebar',
			'description'   => esc_html__('This sidebar will be shown next at the bottom of your content.', 'jeweller-store'),
			'before_widget' => '<div id="%1$s" class="col-lg-3 col-md-3 %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'

		));

	}

	add_action( 'widgets_init', 'jeweller_store_widgets_init' );

}

function jeweller_store_get_categories_select() {
	$jeweller_store_teh_cats = get_categories();
	$results;
	$jeweller_store_count = count($jeweller_store_teh_cats);
	for ($i=0; $i < $jeweller_store_count; $i++) {
	if (isset($jeweller_store_teh_cats[$i]))
  		$results[$jeweller_store_teh_cats[$i]->slug] = $jeweller_store_teh_cats[$i]->name;
	else
  		$jeweller_store_count++;
	}
	return $results;
}

function jeweller_store_sanitize_select( $input, $setting ) {
	// Ensure input is a slug
	$input = sanitize_key( $input );

	// Get list of choices from the control
	// associated with the setting
	$choices = $setting->manager->get_control( $setting->id )->choices;

	// If the input is a valid key, return it;
	// otherwise, return the default
	return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'jeweller_store_loop_columns');
if (!function_exists('jeweller_store_loop_columns')) {
	function jeweller_store_loop_columns() {
		$jeweller_store_columns = get_theme_mod( 'jeweller_store_per_columns', 3 );
		return $jeweller_store_columns;
	}
}

//Change number of products that are displayed per page (shop page)
add_filter( 'loop_shop_per_page', 'jeweller_store_per_page', 20 );
function jeweller_store_per_page( $jeweller_store_cols ) {
  	$jeweller_store_cols = get_theme_mod( 'jeweller_store_product_per_page', 9 );
	return $jeweller_store_cols;
}

// Add filter to modify the number of related products
add_filter( 'woocommerce_output_related_products_args', 'jeweller_store_products_args' );
function jeweller_store_products_args( $args ) {
    $args['posts_per_page'] = get_theme_mod( 'custom_related_products_number', 6 );
    $args['columns'] = get_theme_mod( 'custom_related_products_number_per_row', 3 );
    return $args;
}

/*-----------------------------------------------------------------------------------*/
/* Enqueue Global color style */
/*-----------------------------------------------------------------------------------*/
function jeweller_store_global_color() {

    $jeweller_store_theme_color_css = '';
    $jeweller_store_copyright_bg = get_theme_mod('jeweller_store_copyright_bg');

	$jeweller_store_theme_color_css = '
	    .copyright {
				background: '.esc_attr($jeweller_store_copyright_bg).';
			}
	';
    wp_add_inline_style( 'jeweller-store-style',$jeweller_store_theme_color_css );
    wp_add_inline_style( 'jeweller-store-woocommerce-css',$jeweller_store_theme_color_css );

}
add_action( 'wp_enqueue_scripts', 'jeweller_store_global_color' );


add_action('after_switch_theme', 'jeweller_store_setup_options');
function jeweller_store_setup_options () {
    update_option('dismissed-get_started', FALSE );
}

?>