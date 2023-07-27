<?php
/**
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Gramercy-Village
 */

get_header();
?>
	<main id="front-page">
        <section class="mainvisual" id="mainvisual">
            <figure class="mainvisual_image">
                <img src="<?php echo T_DIRE_URI; ?>/assets/img/mainvisual_image.webp" alt="洋服選">
            </figure>
            <div class="search-bar">
                <div class="input-box">
                    <input type="text" name="keyboard" placeholder="シチュエーションから選ぶ">
                    <i class="fa fa-angle-down" aria-hidden="true" style="color: #888888"></i>
                </div>
                <button type="button"><i class="fas fa-search" style="color: #ffffff;"></i></button>
            </div>
        </section>

        <section class="recommend-style">
            <div class="container">
                <div class="middleschool">
                    <h1 class="main-title">おすすめのスタイル</h1>
                    <div class="sub-text">
                        <img src="<?php echo T_DIRE_URI; ?>/assets/img/stars.png">
                        <h2 class="sub-title">中学生男子の服</h2>
                    </div>
                    <ul class="product-list">
                        <li>
                            <a class="product">
                                <img class="thumb" src="<?php echo T_DIRE_URI; ?>/assets/img/products/product0001.png">
                                <div class="price-wrap">
                                    <div class="pre-text">全部で</div>
                                    <h3 class="price">
                                        ¥10,000
                                    </h3>
                                </div>
                                <h4 class="product-cat">男友達</h4>
                            </a>
                        </li>
                        <li>
                            <a class="product">
                                <img class="thumb" src="<?php echo T_DIRE_URI; ?>/assets/img/products/product0001.png">
                                <div class="price-wrap">
                                    <div class="pre-text">全部で</div>
                                    <h3 class="price">
                                        ¥10,000
                                    </h3>
                                </div>
                                <h4 class="product-cat">男友達</h4>
                            </a>
                        </li>
                        <li>
                            <a class="product">
                                <img class="thumb" src="<?php echo T_DIRE_URI; ?>/assets/img/products/product0001.png">
                                <div class="price-wrap">
                                    <div class="pre-text">全部で</div>
                                    <h3 class="price">
                                        ¥10,000
                                    </h3>
                                </div>
                                <h4 class="product-cat">男友達</h4>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="highschool">
                    <h1 class="main-title">おすすめのスタイル</h1>
                    <div class="sub-text">
                        <img src="<?php echo T_DIRE_URI; ?>/assets/img/stars.png">
                        <h2 class="sub-title">高校生男子の服</h2>
                    </div>
                    <ul class="product-list">
                        <li>
                            <a class="product">
                                <img class="thumb" src="<?php echo T_DIRE_URI; ?>/assets/img/products/product0001.png">
                                <div class="price-wrap">
                                    <div class="pre-text">全部で</div>
                                    <h3 class="price">
                                        ¥10,000
                                    </h3>
                                </div>
                                <h4 class="product-cat">男友達</h4>
                            </a>
                        </li>
                        <li>
                            <a class="product">
                                <img class="thumb" src="<?php echo T_DIRE_URI; ?>/assets/img/products/product0001.png">
                                <div class="price-wrap">
                                    <div class="pre-text">全部で</div>
                                    <h3 class="price">
                                        ¥10,000
                                    </h3>
                                </div>
                                <h4 class="product-cat">男友達</h4>
                            </a>
                        </li>
                        <li>
                            <a class="product">
                                <img class="thumb" src="<?php echo T_DIRE_URI; ?>/assets/img/products/product0001.png">
                                <div class="price-wrap">
                                    <div class="pre-text">全部で</div>
                                    <h3 class="price">
                                        ¥10,000
                                    </h3>
                                </div>
                                <h4 class="product-cat">男友達</h4>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="situation-choose">
            <div class="container">
                <h1 class="main-title">シチュエーションから選ぶ</h1>
                <ul class="product-in-situation">
                    <li>
                        <a href="">
                            <img class="thumb" src="<?php echo T_DIRE_URI; ?>/assets/img/products/product0002.png">
                            <div class="thumb-screen"></div>
                            <h3 class="situation">男友達と遊びに行くとき</h3>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img class="thumb" src="<?php echo T_DIRE_URI; ?>/assets/img/products/product0002.png">
                            <div class="thumb-screen"></div>
                            <h3 class="situation">男友達と遊びに行くとき</h3>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img class="thumb" src="<?php echo T_DIRE_URI; ?>/assets/img/products/product0002.png">
                            <div class="thumb-screen"></div>
                            <h3 class="situation">男友達と遊びに行くとき</h3>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img class="thumb" src="<?php echo T_DIRE_URI; ?>/assets/img/products/product0002.png">
                            <div class="thumb-screen"></div>
                            <h3 class="situation">男友達と遊びに行くとき</h3>
                        </a>
                    </li>
                </ul>
            </div>
        </section>

        <section class="choosing-section">
            <div class="container">
                <div class="type-list like-products">
                    <h1 class="main-title">好みのジャンルから選ぶ</h1>
                    <ul class="cat-list">
                        <li>
                            <a class="cat-item active"><span>綺麗めカジュアル系</span></a>
                        </li>
                        <li>
                            <a class="cat-item"><span>モード系</span></a>
                        </li>
                        <li>
                            <a class="cat-item"><span>ストリート系</span></a>
                        </li>
                        <li>
                            <a class="cat-item"><span>キャラクター系</span></a>
                        </li>
                        <li>
                            <a class="cat-item active"><span>韓国風男子系</span></a>
                        </li>
                        <li>
                            <a class="cat-item"><span>ナチュラル系</span></a>
                        </li>
                        <li>
                            <a class="cat-item"><span>アメカジ系</span></a>
                        </li>
                        <li>
                            <a class="cat-item"><span>アウトドア系</span></a>
                        </li>
                    </ul>
                </div>
                <div class="price-list like-products">
                    <h1 class="main-title">コーディネート一式の<br class="sp">価格から選ぶ</h1>
                    <ul class="cat-list">
                        <li>
                            <a class="cat-item active"><span>～¥4,999</span></a>
                        </li>
                        <li>
                            <a class="cat-item"><span>¥5,000～¥9,999</span></a>
                        </li>
                        <li>
                            <a class="cat-item"><span>¥10,000〜¥14,999</span></a>
                        </li>
                        <li>
                            <a class="cat-item"><span>¥15,000〜¥20,000</span></a>
                        </li>
                        <li>
                            <a class="cat-item active"><span>¥20,000〜¥29,999</span></a>
                        </li>
                        <li>
                            <a class="cat-item"><span>¥30,000〜</span></a>
                        </li>
                    </ul>
                </div>
                <div class="popular-product">
                    <h1 class="main-title">人気のコーディネート<br class="sp">ランキング</h1>
                    <ul class="product-list">
                        <li>
                            <a class="product">
                                <img class="thumb" src="<?php echo T_DIRE_URI; ?>/assets/img/products/product0001.png">
                                <div class="price-wrap">
                                    <div class="pre-text">全部で</div>
                                    <h3 class="price">
                                        ¥10,000
                                    </h3>
                                </div>
                                <h4 class="product-cat">男友達</h4>
                            </a>
                            <div class="mark order1">1</div>
                        </li>
                        <li>
                            <a class="product">
                                <img class="thumb" src="<?php echo T_DIRE_URI; ?>/assets/img/products/product0001.png">
                                <div class="price-wrap">
                                    <div class="pre-text">全部で</div>
                                    <h3 class="price">
                                        ¥10,000
                                    </h3>
                                </div>
                                <h4 class="product-cat">男友達</h4>
                            </a>
                            <div class="mark order2">2</div>
                        </li>
                        <li>
                            <div class="product">
                                <img class="thumb" src="<?php echo T_DIRE_URI; ?>/assets/img/products/product0001.png">
                                <div class="price-wrap">
                                    <div class="pre-text">全部で</div>
                                    <h3 class="price">
                                        ¥10,000
                                    </h3>
                                </div>
                                <h4 class="product-cat">男友達</h4>
                            </div>
                            <div class="mark order3">3</div>
                        </li>
                        <li>
                            <div class="product">
                                <img class="thumb" src="<?php echo T_DIRE_URI; ?>/assets/img/products/product0001.png">
                                <div class="price-wrap">
                                    <div class="pre-text">全部で</div>
                                    <h3 class="price">
                                        ¥10,000
                                    </h3>
                                </div>
                                <h4 class="product-cat">男友達</h4>
                            </div>
                            <div class="mark order4">4</div>
                        </li>
                        <li>
                            <div class="product">
                                <img class="thumb" src="<?php echo T_DIRE_URI; ?>/assets/img/products/product0001.png">
                                <div class="price-wrap">
                                    <div class="pre-text">全部で</div>
                                    <h3 class="price">
                                        ¥10,000
                                    </h3>
                                </div>
                                <h4 class="product-cat">男友達</h4>
                            </div>
                            <div class="mark order5">5</div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
            
        <section class="cheering-section">
            <div class="container">
                <div class="header">
                    <h3 class="desc">
                        男の子ママ必見のお役立ち情報について発信中！
                        <img src="<?php echo T_DIRE_URI; ?>/assets/img/stars.png" alt="星">
                    </h3>
                </div>
                <h1 class="main-title">男の子のママ応援団</h1>
                <ul class="cheering-part">
                    <li>
                        <a href="">
                            <img class="thumb" src="<?php echo T_DIRE_URI; ?>/assets/img/cheering0001.png" alt="">
                            <div class="text-wrapper">
                                <h3 class="title">あっという間に大きくなる体もこれで大丈夫!</h3>
                                <div class="last-text">
                                    <div class="method">着回し術</div>
                                    <div class="date">2023年5月15日</div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img class="thumb" src="<?php echo T_DIRE_URI; ?>/assets/img/cheering0001.png" alt="">
                            <div class="text-wrapper">
                                <h3 class="title">あっという間に大きくなる体もこれで大丈夫!</h3>
                                <div class="last-text">
                                    <div class="method">着回し術</div>
                                    <div class="date">2023年5月15日</div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img class="thumb" src="<?php echo T_DIRE_URI; ?>/assets/img/cheering0001.png" alt="">
                            <div class="text-wrapper">
                                <h3 class="title">あっという間に大きくなる体もこれで大丈夫!</h3>
                                <div class="last-text">
                                    <div class="method">着回し術</div>
                                    <div class="date">2023年5月15日</div>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </section> 

        <section class="latest-section">
            <h1 class="main-title">最近チェックした<br class="sp">コーディネート</h1>
            <ul class="product-list">
                <li>
                    <a class="product">
                        <img class="thumb" src="<?php echo T_DIRE_URI; ?>/assets/img/products/product0001.png">
                        <div class="price-wrap">
                            <div class="pre-text">全部で</div>
                            <h3 class="price">
                                ¥10,000
                            </h3>
                        </div>
                        <h4 class="product-cat">男友達</h4>
                    </a>
                </li>
                <li>
                    <a class="product">
                        <img class="thumb" src="<?php echo T_DIRE_URI; ?>/assets/img/products/product0001.png">
                        <div class="price-wrap">
                            <div class="pre-text">全部で</div>
                            <h3 class="price">
                                ¥10,000
                            </h3>
                        </div>
                        <h4 class="product-cat">男友達</h4>
                    </a>
                </li>
                <li>
                    <div class="product">
                        <img class="thumb" src="<?php echo T_DIRE_URI; ?>/assets/img/products/product0001.png">
                        <div class="price-wrap">
                            <div class="pre-text">全部で</div>
                            <h3 class="price">
                                ¥10,000
                            </h3>
                        </div>
                        <h4 class="product-cat">男友達</h4>
                    </div>
                </li>
                <li>
                    <div class="product">
                        <img class="thumb" src="<?php echo T_DIRE_URI; ?>/assets/img/products/product0001.png">
                        <div class="price-wrap">
                            <div class="pre-text">全部で</div>
                            <h3 class="price">
                                ¥10,000
                            </h3>
                        </div>
                        <h4 class="product-cat">男友達</h4>
                    </div>
                </li>
                <li>
                    <div class="product">
                        <img class="thumb" src="<?php echo T_DIRE_URI; ?>/assets/img/products/product0001.png">
                        <div class="price-wrap">
                            <div class="pre-text">全部で</div>
                            <h3 class="price">
                                ¥10,000
                            </h3>
                        </div>
                        <h4 class="product-cat">男友達</h4>
                    </div>
                </li>
            </ul>
        </section>
    </main><!-- #front-page -->
<?php
get_footer();
?>