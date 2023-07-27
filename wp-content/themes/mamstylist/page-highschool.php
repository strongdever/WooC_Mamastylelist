<?php
/**
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Gramercy-Village
 */

get_header();
?>
	<main id="page-activity">

    <section class="status-bar">
            <div class="nav-status">
                <a href="<?= esc_url(home_url('/')); ?>">トップ </a>
                <i class="fa fa-angle-right"></i>
                <h4>詳細検索</h4>
            </div>
        </section>

        <section class="middleschool students-product">
            <div class="container">
                <h2 class="sub-title">
                    中学生男子の服
                </h2>
                <div class="search-part">
                    <div class="search-bar">
                        <div class="input-box">
                            <input type="text" name="keyboard" placeholder="シチュエーションから選ぶ">
                            <i class="fa fa-angle-down" aria-hidden="true" style="color: #888888"></i>
                        </div>
                        <button type="button"><i class="fas fa-search" style="color: #ffffff;"></i></button>
                    </div>
                    <div class="search-label">詳細検索</div>
                </div>

                <div class="products">
                    <div class="sortby">
                        <ul class="sortby-tabs">
                            <li>
                                <a class="sortby-item" href="">
                                    人気順
                                </a>
                            </li>
                            <li>
                                <a class="sortby-item" href="">
                                    価格の安い順
                                </a>
                            </li>
                            <li>
                                <a class="sortby-item" href="">
                                    新着順
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="pagination">
                        <div class="display-number">50件中  1-20件表示</div>
                        <ul class="pagination-bar">
                            <li>
                                <a class="before" href=""><i class="fa fa-angle-left bounce"></i></a>
                            </li>
                            <li>
                                <a class="page-num active" href="">1</a>
                            </li>
                            <li>
                                <a class="page-num" href="">2</a>
                            </li>
                            <li>
                                <a class="page-num" href="">3</a>
                            </li>
                            <li>
                                <a class="next" href=""><i class="fa fa-angle-right bounce"></i></a>
                            </li>
                        </ul>
                    </div>
                    <ul class="product-list">
                        <li>
                            <a class="product" href="">
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
                            <a class="product" href="">
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
                            <a class="product" href="">
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
                            <a class="product" href="">
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
                            <a class="product" href="">
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
                            <a class="product" href="">
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
                            <a class="product" href="">
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
                            <a class="product" href="">
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
                            <a class="product" href="">
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
                            <a class="product" href="">
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
                            <a class="product" href="">
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
                            <a class="product" href="">
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

    </main><!-- #page-activity -->
<?php
get_footer();
