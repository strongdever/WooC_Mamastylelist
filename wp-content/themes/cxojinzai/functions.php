<?php
/**
 * GLANSTELLA-CABIN functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Gramercy-Village
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function mamstylist_setup() {
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

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);
}
add_action( 'after_setup_theme', 'mamstylist_setup' );

if ( ! defined( 'ABSPATH' ) ) exit;

// サイト情報
define( 'HOME', home_url( '/' ) );
define( 'TITLE', get_option( 'blogname' ) );

// 状態
define( 'IS_ADMIN', is_admin() );
define( 'IS_LOGIN', is_user_logged_in() );
define( 'IS_CUSTOMIZER', is_customize_preview() );

// テーマディレクトリパス
define( 'T_DIRE', get_template_directory() );
define( 'S_DIRE', get_stylesheet_directory() );
define( 'T_DIRE_URI', get_template_directory_uri() );
define( 'S_DIRE_URI', get_stylesheet_directory_uri() );

define( 'THEME_NOTE', 'trustrate' );

error_reporting(0);

flush_rewrite_rules();


// 固定ページとMW WP Formでビジュアルモードを使用しない
function stop_rich_editor($editor) {
    global $typenow;
    global $post;
    if(in_array($typenow, array('page', 'post', 'mw-wp-form'))) {
        $editor = true;
    }
    return $editor;
}

add_filter('user_can_richedit', 'stop_rich_editor');

// エディター独自スタイル追加
//TinyMCE追加用のスタイルを初期化
if(!function_exists('initialize_tinymce_styles')) {
    function initialize_tinymce_styles($init_array) {
        //追加するスタイルの配列を作成
        $style_formats = array(
            array(
                'title' => '注釈',
                'inline' => 'span',
                'classes' => 'cmn_note'
            )
        );
        //JSONに変換
        $init_array['style_formats'] = json_encode($style_formats);
        return $init_array;
    }
}

add_filter('tiny_mce_before_init', 'initialize_tinymce_styles', 10000);

// オプションページを追加
if(function_exists('acf_add_options_page')) {
    $option_page = acf_add_options_page(array(
        'page_title' => 'テーマオプション', // 設定ページで表示される名前
        'menu_title' => 'テーマオプション', // ナビに表示される名前
        'menu_slug' => 'top_setting',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
}

function my_script_constants() {
?>
    <script type="text/javascript">
        var templateUrl = '<?php echo S_DIRE_URI; ?>';
        var baseSiteUrl = '<?php echo HOME; ?>';
        var themeAjaxUrl = '<?php echo admin_url( 'admin-ajax.php' ) ?>';
    </script>
<?php
}

add_action('wp_head', 'my_script_constants');

// function remove_default_post_type() { 
//    remove_menu_page('edit.php');
// }

// add_action('admin_menu', 'remove_default_post_type'); 


/**
 * Enqueue scripts and styles.
 */
function mamstylist_scripts() {
	if (!is_admin()) {
		// バンドル版のjQueryをロードしない
		wp_deregister_script('jquery');

		// CSSロード
        wp_enqueue_style('c-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', [], '1.0', 'all');
        wp_enqueue_style('c-aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css', [], '1.0', 'all');
		wp_enqueue_style('c-fonts', get_template_directory_uri() . '/assets/font/fonts.css', [], '1.0', 'all');
		wp_enqueue_style('c-reset', get_template_directory_uri() . '/assets/css/reset.css', [], '1.0', 'all');
		wp_enqueue_style('c-common', get_template_directory_uri() . '/assets/css/common.css', [], '1.0', 'all');
        wp_enqueue_style('c-style', get_template_directory_uri() . '/assets/css/style.css', [], '1.0', 'all');

		// JSロード
		wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', [], '1.0', 'all');
		wp_enqueue_script('aos', 'https://unpkg.com/aos@2.3.1/dist/aos.js', [], '1.0', 'all');
        wp_enqueue_script('fontawesome', 'https://kit.fontawesome.com/8cbdf0a85f.js', [], '1.0', 'all');
		wp_enqueue_script('commonjs', get_template_directory_uri() . '/assets/js/common.js', [], '1.0', 'all');
        wp_enqueue_script('custom', get_template_directory_uri() . '/assets/js/custom.js', [], '1.0', 'all');
	}
}
add_action('wp_enqueue_scripts', 'mamstylist_scripts');

/**
 * 不要なヘッダーを削除
 */
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);

?>