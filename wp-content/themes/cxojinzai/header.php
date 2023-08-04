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

<!DOCTYPE html>
<html<?php language_attributes(); ?>>

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta property="og:locale" content="ja_JP">

    <!-- SEO Meta Tags -->
    <meta name="keywords" content="人材,バンク,NEWS,CxO" />
    <meta name="description" content="CxO人材バンクは、上場企業や上場準備企業など、成長企業、成長産業のCxOポジションに特化した人材紹介サービスを行っています。
    成長企業の経営者の学びやIRを目的としたコミュニティの運営により、よりダイレクトに活躍できるポジションへのキャリアアップを支援しています。" />

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:title" content="CxO人材バンクNEWS"/>
    <meta property="og:type" content="article" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <meta property="og:site_name" content="CxO人材バンクNEWS" />
    <meta property="og:description" content="CxO人材バンクは、上場企業や上場準備企業など、成長企業、成長産業のCxOポジションに特化した人材紹介サービスを行っています。" />
    <!-- <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:description" content="" />
	<meta name="twitter:image" content="https://ashizurithermae.com/wp-content/uploads/2022/07/cover.png" /> -->

    <title>
        <?php if(is_front_page() || is_home()){
	      	echo get_bloginfo('name');
	    } else{
	      	wp_title('|',true,'right'); echo bloginfo('name'); 
	    }?>
    </title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?php echo T_DIRE_URI; ?>/assets/font/fonts.css">
    <link rel="stylesheet" href="<?php echo T_DIRE_URI; ?>/assets/css/reset.css">
    <!-- <link rel="stylesheet" href="assets/css/slick.min.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/vegas/2.4.4/vegas.min.css"> -->
    <link rel="stylesheet" href="<?php echo T_DIRE_URI; ?>/assets/css/common.css">
    <link rel="stylesheet" href="<?php echo T_DIRE_URI; ?>/assets/css/style.css">

    <script src="<?php echo T_DIRE_URI; ?>/assets/js/jquery.min.js"></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <header class="header">
        <div class="header-top">
            <h1 class="header-logo">
                <a href="<?= esc_url(home_url('/news')); ?>">
                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/logo.png" alt="CxO人材バンク">
                </a>
            </h1>
            <div class="contact-wrapper">
                <a class="search">
                    <i class="fas fa-search"></i>
                </a>
                <ul class="contact-btns">
                    <li>
                        <a class="btn long-term">
                            <span>中長期のキャリア相談</span>
                        </a>    
                    </li>
                    <li>
                        <a class="btn job-consult">
                            <span>具体的な転職相談</span>
                        </a>    
                    </li>
                </ul>
            </div>
        </div>
        <nav class="header-nav">
            <ul class="nav-menu">
                <li>
                    <a href="./news.html" class="menu-link active">
                        <span>CxO人材バンクNEWS</span>
                    </a>
                </li>
                <li>
                    <a href="./aboutus.html" class="menu-link">
                        <span>CxO人材バンクの特長</span>
                    </a>
                </li>
                <li>
                    <a href="./usecase.html" class="menu-link">
                        <span>転職成功事例</span>
                    </a>
                </li>
                <li>
                    <a href="./flow.html" class="menu-link">
                        <span>転職支援の流れ</span>
                    </a>
                </li>
                <li>
                    <a href="./interview.html" class="menu-link">
                        <span>CxOインタビュー</span>
                    </a>
                </li>
                <li>
                    <a href="./jobs.html" class="menu-link">
                        <span>転職コラム</span>
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <div id="mobile-nav">
        <nav class="mobile-nav-container">
            <ul class="mobile-nav-menu">
                <li>
                    <a href="./news.html" class="menu-link active">
                        <span>CxO人材バンクNEWS</span>
                    </a>
                </li>
                <li>
                    <a href="./aboutus.html" class="menu-link">
                        <span>CxO人材バンクの特長</span>
                    </a>
                </li>
                <li>
                    <a href="./usecase.html" class="menu-link">
                        <span>転職成功事例</span>
                    </a>
                </li>
                <li>
                    <a href="./flow.html" class="menu-link">
                        <span>転職支援の流れ</span>
                    </a>
                </li>
                <li>
                    <a href="./interview.html" class="menu-link">
                        <span>CxOインタビュー</span>
                    </a>
                </li>
                <li>
                    <a href="./jobs.html" class="menu-link">
                        <span>転職コラム</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
