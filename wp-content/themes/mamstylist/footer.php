    <footer id="footer">
        <div class="container">
            <div class="footer-main">
                <nav class="footer-nav">
                    <ul class="nav-menu">
                        <li>
                            <a href="<?= esc_url(home_url('/rule')); ?>">
                                <span>利用規約</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= esc_url(home_url('/privacy')); ?>">
                                <span>プライバシーポリシー</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= esc_url(home_url('/company')); ?>">
                                <span>運営会社</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <p class="copyright">© ママはスタイリスト All Right Reserved.</p>
        </div>

    </footer>

	<?php wp_footer(); ?>

	<div id="lightbox"><img></div>
</body>
</html>
