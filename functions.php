<?php

require(__DIR__ . '/lib/wp-bootstrap-navwalker.php');

add_image_size('header-image', 1920, 260, true);
add_image_size('header-image-big', 1360, 650, true);
add_image_size('product-thumb-extra-small', 53, 79, false);
add_image_size('product-thumb-small', 75, 112, false);
add_image_size('product-thumb', 220, 190, false);
add_image_size('product-thumb-large', 230, 500, false);
add_image_size('adbox', 1170, 300, true);
add_image_size('slide', 960, 960, true);
add_image_size('slide-wide', 1360, 700, true);
add_image_size('square', 600, 600, true);
add_image_size('banner', 875, 550, true);
add_image_size('media-thumb', 420, 275, true);
add_image_size('social-thumb', 35, 35, false);
add_image_size('landing-product-thumb', 179, 360, true);
add_image_size('landing-prize', 670, 510, true);
add_image_size('zdrowaradosc', 1920, 651, true);

add_action( 'after_setup_theme', '--nazwa-firmy--_setup' );
function --nazwa-firmy--_setup() {
	load_theme_textdomain( '--nazwa-firmy--', get_template_directory() . '/languages' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	global $content_width;
	if ( ! isset( $content_width ) ) $content_width = 1920;
	register_nav_menus(
		array(
			'main-menu' => __( 'Menu główne', '--nazwa-firmy--' ),
			'footer-menu-1' => __( 'Menu w stopce nr 1', '--nazwa-firmy--' ),
			'footer-menu-2' => __( 'Menu w stopce nr 2', '--nazwa-firmy--' ),
			'footer-menu-3' => __( 'Menu w stopce nr 3', '--nazwa-firmy--' ),
			'footer-menu-4' => __( 'Menu w stopce nr 4', '--nazwa-firmy--' ),
			'footer-menu-5' => __( 'Menu w stopce nr 5', '--nazwa-firmy--' ),
		)
	);
}
add_action( 'wp_enqueue_scripts', '--nazwa-firmy--_load_scripts' );
function --nazwa-firmy--_load_scripts() {
	// styles
	wp_enqueue_style( 'bxslider-css', get_bloginfo('template_directory') . '/assets/js/bxslider/dist/jquery.bxslider.css' );
	wp_enqueue_style( 'slick-css', get_bloginfo('template_directory') . '/assets/js/slick/slick/slick.css' );
	wp_enqueue_style( 'custom-scrollbar-css', get_bloginfo('template_directory') . '/assets/js/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.min.css' );
	wp_enqueue_style( 'style', get_bloginfo('template_directory') . '/style.css' );
	// scripts
	// wp_enqueue_script( 'js-cookie', get_bloginfo('template_directory') . '/assets/js/lib/js.cookie.js' );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'bootstrap-js', get_bloginfo('template_directory') . '/bower_components/bootstrap-sass/assets/javascripts/bootstrap.min.js', array('jquery') );
	wp_enqueue_script( 'bxslider', get_bloginfo('template_directory') . '/assets/js/bxslider/dist/jquery.bxslider.js', array('jquery') );
	wp_enqueue_script( 'slick', get_bloginfo('template_directory') . '/assets/js/slick/slick/slick.min.js', array('jquery') );
	wp_enqueue_script( 'custom-scrollbar', get_bloginfo('template_directory') . '/assets/js/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.concat.min.js', array('jquery') );
	wp_enqueue_script( 'bcswipe', get_bloginfo('template_directory') . '/assets/js/bcSwipe/bcSwipe.js', array('jquery') );
	wp_enqueue_script( 'script', get_bloginfo('template_directory') . '/script.min.js', array('bootstrap-js') );
}

add_action( 'wp_print_styles',     'my_deregister_styles', 100 );

function my_deregister_styles()    {
   //wp_deregister_style( 'amethyst-dashicons-style' );
	if(!is_user_logged_in()) {
		wp_deregister_style( 'dashicons' );
	}


}

add_action( 'comment_form_before', '--nazwa-firmy--_enqueue_comment_reply_script' );
function --nazwa-firmy--_enqueue_comment_reply_script() {
	if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}
add_filter( 'the_title', '--nazwa-firmy--_title' );
function --nazwa-firmy--_title( $title ) {
	if ( $title == '' ) {
		return '&rarr;';
	} else {
		return $title;
	}
}
add_filter( 'wp_title', '--nazwa-firmy--_filter_wp_title' );
function --nazwa-firmy--_filter_wp_title( $title ) {
	return $title . esc_attr( get_bloginfo( 'name' ) );
}

function --nazwa-firmy--_custom_pings( $comment ) {
	$GLOBALS['comment'] = $comment;
?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<?php echo comment_author_link(); ?>
	</li>
<?php
}
add_filter( 'get_comments_number', '--nazwa-firmy--_comments_number' );
function --nazwa-firmy--_comments_number( $count ) {
	if ( !is_admin() ) {
		global $id;
		$comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
		return count( $comments_by_type['comment'] );
	} else {
		return $count;
	}
}

add_action( 'init', 'create_product_post_type' );
function create_product_post_type() {
	register_post_type( 'product',
		array(
			'labels' => array(
				'name' => __( 'Product', '--nazwa-firmy--' ),
				'singular_name' => __( 'Products', '--nazwa-firmy--' )
			),
			'menu_icon' => 'dashicons-products',
			'public' => true,
			'rewrite' => array('slug' => __('product', '--nazwa-firmy--')),
			'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
		)
	);
}
add_action( 'init', 'create_adbox_post_type' );
function create_adbox_post_type() {
	register_post_type( 'adbox',
		array(
			'labels' => array(
				'name' => __( 'Boksy', '--nazwa-firmy--' ),
				'singular_name' => __( 'Boks', '--nazwa-firmy--' )
			),
			'menu_icon' => 'dashicons-products',
			'public' => true,
			'has_archive' => false,
			'publicaly_queryable' => false,
			'query_var' => false,
			'supports' => array('title', 'editor', 'thumbnail'),
		)
	);
}
add_action( 'init', 'create_tips_post_type' );
function create_tips_post_type() {
	register_post_type( 'tips',
		array(
			'labels' => array(
				'name' => __( 'Porady', '--nazwa-firmy--' ),
				'singular_name' => __( 'Porada', '--nazwa-firmy--' )
			),
			'menu_icon' => 'dashicons-products',
			'public' => true,
			'has_archive' => false,
			'publicaly_queryable' => false,
			'query_var' => false,
			'supports' => array('title', 'editor', 'thumbnail'),
		)
	);
}
add_action( 'init', 'products_init' );
function products_init() {
	register_taxonomy(
		'products',
		'product',
		array(
			'label' => __( 'Product Category' ),
			'rewrite' => array( 'slug' => 'kategoria-produktu' ),
			'hierarchical' => true,
		)
	);
}
function breadcrumbs($post_id) {
	$current_post = get_post($post_id);
	$post_type = get_post_type($post_id);
	$lang_code = '/'. ICL_LANGUAGE_CODE . '/';
	if ($lang_code == '/pl/') {
		$lang_code = '/';
	}
	$ancestors = array(array('name' => __('Home', '--nazwa-firmy--'), 'url' => $lang_code, 'id' => 'home'));
	if (is_tax('products')) {
		$product_page_id = get_field('product_page', 'options');
		$product_page = get_page($product_page_id);
		$term = get_queried_object();
		$ancestors[] = array(
			'name' => $product_page->post_title,
			'url' => get_permalink($product_page->ID),
			'id' => $product_page_id
		);
		$ancestors[] = array(
			'name' => $term->name,
			'url' => get_term_link($term->term_id, 'products'),
			'id' => $term->term_id
		);
	} else {
		if ($post_type == 'post') {
			$post_page_id = get_option('page_for_posts', true);
			$post_page = get_page($post_page_id);
			$ancestors[] = array(
				'name' => $post_page->post_title,
				'url' => get_permalink($post_page->ID),
				'id' => $post_page->ID
			);
		}
		if ($post_type == 'page') {
			$items = get_ancestors( $post_id, 'page', 'post_type' );
			foreach($items as $item) {
				$temp = get_post($item);
				$ancestors[] = array(
					'name' => $temp->post_title,
					'url' => get_permalink($temp->ID),
					'id' => $temp->ID
				);
			}
		}
		if ($post_type == 'product') {
			$product_page_id = get_field('product_page', 'option');
			$product_page = get_page($product_page_id);
			$category = array_shift(get_the_terms($current_post->ID, 'products'));
			$ancestors[] = array(
				'name' => $product_page->post_title,
				'url' => get_permalink($product_page->ID),
				'id' => $product_page->ID
			);
			$ancestors[] = array(
				'name' => $category->name,
				'url' => get_term_link($category->term_id, 'products'),
				'id' => $category->term_id
			);
		}
		if (!is_home()) {
			$ancestors[] = array(
				'name' => $current_post->post_title,
				'url' => get_permalink($current_post->ID),
				'id' => $current_post->ID
			);

		}
	}
	return $ancestors;
}
function display_breadcrumbs($post_id) {
	$ancestors = breadcrumbs($post_id);
	echo '<ul class="breadcrumbs">';
	echo '<ul class="breadcrumbs__list">';
	foreach($ancestors as $ancestor) {
		echo '<li itemtype="https://www.schema.org/SiteNavigationElement" itemscope="itemscope" id="breadcrumb-'.$ancestor['id'].'">';
		echo '<a href="'.$ancestor['url'].'" title="'.$ancestor['name'].'">';
		echo $ancestor['name'];
		echo '</a>';
		echo '</li>';
	}
	echo '</ul>';
	echo '</ul>';
}

add_filter('acf/prepare_field/key=field_5965e9b4e210c', 'default_value_key_5965e9b4e210c');
function default_value_key_5965e9b4e210c($field) {
	$default_values = array(
		array(
			'Wartość odżywcza',
			'',
			'w 100g'
		),
		array(
			'Wartość energetyczna',
			''
		),
		array(
			'Tłuszcze',
			'- w tym kwasy tłuszczowe nasycone'
		),
		array(
			'Węglowodany',
			'- w tym cukry'
		),
		array(
			'Błonnik',
			''
		),
		array(
			'Białko',
			''
		),
		array(
			'Sól',
			''
		),
	);
	$count = count($field['subfields']);
	for($i = 0; $i < 6; $i++) {
		// if (empty($field['value'][$i]['field_5965ecd6e210d'])) {
		// 	$field['value'][$i]['field_5965ecd6e210d'] = $default_values[$i][0];
		// }
		// if (empty($field['value'][$i]['field_5965ece7e210e'])) {
		// 	$field['value'][$i]['field_5965ece7e210e'] = $default_values[$i][1];
		// }
	}
    return $field;
}

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Opcje Strony',
		'menu_title'	=> 'Opcje Strony',
		'menu_slug' 	=> 'opcje-strony',
		'redirect'		=> false
	));
}
