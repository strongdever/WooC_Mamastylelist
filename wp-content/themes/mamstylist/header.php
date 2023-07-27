<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gramercy-Village
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:locale" content="ja_JP">

    <!-- SEO Meta Tags -->
    <meta name="keywords" content="中学生男子の服,高校生男子の服,男友達と遊びに行くとき,学校行事の私服のとき,女子もいる遊びのとき,デートのとき,綺麗めカジュアル系,モード系,ストリート系,キャラクター系" />
    <meta name="description" content="普段はカジュアルなもので良くても、
    イベントの時には少しくらいはかっこつけさせたい。
    でも今の流行りなんてわからない…！" />

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:title" content="施設 - MAMA STYLIST | ママはスタイリスト
    【公式】" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <meta property="og:site_name" content="Mama Stylist | ママはスタイリスト【公式】" />
    <meta property="og:description" content="普段はカジュアルなもので良くても、
    イベントの時には少しくらいはかっこつけさせたい。
    でも今の流行りなんてわからない…！" />
	<title>
	    <?php if(is_front_page() || is_home()){
	      	echo get_bloginfo('name');
	    } else{
	      	wp_title('|',true,'right'); echo bloginfo('name'); 
	    }?>
  	</title>

	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="icon" href="<?= get_template_directory_uri(); ?>/assets/img/logo.png" sizes="32x32" />
	<link rel="icon" href="<?= get_template_directory_uri(); ?>/assets/img/logo.png" sizes="192x192" />
	<link rel="apple-touch-icon" href="<?= get_template_directory_uri(); ?>/assets/img/logo.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700;800;900&family=M+PLUS+1:wght@300;400;500;600;700&family=Noto+Sans+JP:wght@300;400;500;700;900&family=Sawarabi+Gothic&display=swap" rel="stylesheet">
	<meta name="msapplication-TileImage" content="<?= get_template_directory_uri(); ?>/images/icon-270x270.webp" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <header class="header">
        <h1 class="header-logo">
            <a href="<?= esc_url(home_url('/')); ?>">
                <img src="<?php echo T_DIRE_URI; ?>/assets/img/logo.png" alt="">
            </a>
        </h1>
        <nav class="header-nav">
            <ul class="nav-menu">
                <li>
                    <a href="<?= esc_url(home_url('/aboutus')); ?>" class="menu-link active">
                        <span>ママはスタイリストとは</span>
                    </a>
                </li>
                <li>
                    <a href="<?= esc_url(home_url('/middleschool')); ?>" class="menu-link">
                        <span>中学生男子の服</span>
                    </a>
                </li>
                <li>
                    <a href="<?= esc_url(home_url('/highschool')); ?>" class="menu-link">
                        <span>高校生男子の服</span>
                    </a>
                </li>
                <li>
                    <a href="<?= esc_url(home_url('/party')); ?>" class="menu-link">
                        <span>男の子ママ応援団</span>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="social">
            <ul class="social-link">
                <li>
                    <a class="social-twitter" href="">
                        <img src="<?php echo T_DIRE_URI; ?>/assets/img/social_twitter.png">
                    </a>
                </li>
                <li>
                    <a class="social-facebook" href="">
                        <img src="<?php echo T_DIRE_URI; ?>/assets/img/social_facebook.png">
                    </a>
                </li>
                <li>
                    <a class="social-twitter" href="">
                        <img src="<?php echo T_DIRE_URI; ?>/assets/img/social_instagram.png">
                    </a>
                </li>
            </ul>
        </div>
    </header>

    <header class="mobile-header">
        <h1 class="header-logo">
            <a href="<?= esc_url(home_url('/')); ?>">
                <img src="<?php echo T_DIRE_URI; ?>/assets/img/logo.png" alt="">
            </a>
        </h1>        
    </header>

    <div id="mobile-nav">
        <nav class="mobile-nav-container">
            <ul class="mobile-nav-menu">
                <li>
                    <a href="<?= esc_url(home_url('/aboutus')); ?>" class="menu-link active">
                        <span>ママはスタイリストとは</span>
                    </a>
                </li>
                <li>
                    <a href="<?= esc_url(home_url('/middleschool')); ?>" class="menu-link">
                        <span>中学生男子の服</span>
                    </a>
                </li>
                <li>
                    <a href="<?= esc_url(home_url('/highschool')); ?>" class="menu-link">
                        <span>高校生男子の服</span>
                    </a>
                </li>
                <li>
                    <a href="<?= esc_url(home_url('/party')); ?>" class="menu-link">
                        <span>男の子ママ応援団</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>