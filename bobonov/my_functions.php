<?php
/* Plugin Name: My Custom Functions */

if (!defined('ABSPATH')) {exit;}
if (!defined('_S_VERSION')) {define('_S_VERSION', '0.0.1');}
if (!defined('FRONT_PAGE')) {define('FRONT_PAGE', get_option('page_on_front'));}
if (!defined('TEMPLATE_URL')) {define('TEMPLATE_URL', get_template_directory_uri());}

add_filter('wp_speculation_rules_configuration',function(){return null;});
add_filter('wp_img_tag_add_auto_sizes','__return_false');
add_action('after_setup_theme', function() { add_theme_support( 'html5', [ 'script', 'style' ] ); } );

add_theme_support('post-thumbnails');
register_nav_menus();

add_action('wp_enqueue_scripts', 'tehmonolit_th_scripts_style');
function tehmonolit_th_scripts_style()
{
	wp_enqueue_script('slick', TEMPLATE_URL . '/js/slick.min.js', array('jquery'), null, true);
	wp_enqueue_script('jquery_fancybox', TEMPLATE_URL . '/js/jquery.fancybox.min.js', array('jquery'), null, true);
	wp_enqueue_script('scripts', TEMPLATE_URL . '/js/scripts.js', array('jquery'), _S_VERSION, true);

	wp_enqueue_style('reset-style', TEMPLATE_URL . '/css/reset.css', array(), null, 'all');
	wp_enqueue_style('slick-bundle', TEMPLATE_URL . '/css/slick.css', array(), null, 'all');
	wp_enqueue_style('slick-theme', TEMPLATE_URL . '/css/slick-theme.css', array(), null, 'all');
	wp_enqueue_style('jquery-fancybox', TEMPLATE_URL . '/css/jquery.fancybox.min.css', array(), null, 'all');
	wp_enqueue_style('bobonov-style', get_stylesheet_uri(), array(), _S_VERSION);
}

add_filter('site_transient_update_plugins','filter_plugin_updates');
function filter_plugin_updates($value){
	unset($value->response['all-in-one-seo-pack/all_in_one_seo_pack.php']);
	return $value;
}

add_action('admin_head','admin_head');
function admin_head(){
	echo '<style type="text/css">#wpwrap #edittag{max-width:100%;}.term-description-wrap{display:none;}</style>';
}

function breadcrumbs($sep = ' > ', $args = array(), $l10n = array()) {
	static $inst;
	if (!$inst)
		$inst = new Breadcrumbs();
	if (is_array($sep)) {
		$args = $sep;
		$sep = isset($args['sep']) ? $args['sep'] : ' > ';
	}
	echo $inst->get_crumbs($sep, $l10n, $args);
}

function merge_numbers($num) {
  return str_replace([' ', '-', '(', ')'],'',(string) ($num ?? ''));
}
function register_specials() {
	$post_labels = array(
		'name' => 'Специалисты',
		'singular_name' => 'Специалист',
		'add_new' => 'Добавить',
		'add_new_item' => 'Добавить',
		'edit_item' => 'Редактировать',
		'menu_name' => 'Специалисты',
		'featured_image'   => 'Фото специалиста',
		'set_featured_image' => 'Установить фото специалиста',
    'remove_featured_image' => 'Удалить фото специалиста',
    'use_featured_image' => 'Использовать как фото специалиста',
	);

	$post_args = array(
		'labels' => $post_labels,
		'public' => false,
    'show_ui' => true,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-id-alt',
		'supports' => array('title', 'editor', 'thumbnail'),
		'rewrite' => array('slug' => 'specials'),
		'show_in_rest' => true,
		'capability_type' => 'post',
	);

	register_post_type('specials', $post_args);
}
add_action('init', 'register_specials');

function register_services() {
	$post_labels = array(
		'name' => 'Услуги',
		'singular_name' => 'Услуга',
		'add_new' => 'Добавить',
		'add_new_item' => 'Добавить',
		'edit_item' => 'Редактировать',
		'menu_name' => 'Услуги',
	);

	$post_args = array(
		'labels' => $post_labels,
		'public' => true,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-text-page',
		'supports' => array('title', 'editor', 'thumbnail'),
		'rewrite' => array('slug' => 'services'),
		'show_in_rest' => true,
		'capability_type' => 'post',
	);

	register_post_type('services', $post_args);
}
add_action('init', 'register_services');