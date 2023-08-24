    <?php if(!is_page(array('contact', 'contactsubmit') )): ?>
        <section class="p-contact">
            <div class="contactContainer">
                <picture>
                    <source srcset="<?php echo esc_url(get_theme_file_uri('img/cta-sp.jpg')); ?>" media="(max-width: 415px)">
                    <img src="<?php echo esc_url(get_theme_file_uri('img/cta.jpg')); ?>" srcset="<?php echo esc_url(get_theme_file_uri('img/cta@2x.jpg')); ?>" alt="メイン画像01">
                </picture>
                <div class="contactContent">
                    <h3 class="contactTitle">まずは無料で資料請求から</h3><!-- /.planTitle -->
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="footerRequest">資料請求</a><!-- /.planLink -->
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="footerContact">お問い合わせ</a>
                </div><!-- /.planContent -->
                <div class="inner telBlock">
                    <p class="text">お電話でのお問い合わせはこちら</p>
                    <p class="tel">0123-456-7890</p>
                    <p class="time">平日 08:00〜20:00</p>
                </div><!-- /.telBlock -->
            </div><!-- /.contactContainer -->
        </section><!-- /.p-contact -->
    <?php endif; ?>
    </main>
    <footer>
        <div class="inner footerContainer">
            <nav class="footerNav">
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>">ホーム</a></li> 
                    <li><a href="<?php echo esc_url(home_url('/info')); ?>">お知らせ</a></li>
                    <li><a href="<?php echo esc_url(home_url('/blog')); ?>">ブログ</a></li>
                    <li><a href="<?php echo esc_url(home_url('/plan')); ?>">コース・料金</a></li>
                </ul>
            </nav><!-- /.footerNav -->
            <div class="footerRight">
                <picture>
                    <img src="<?php echo esc_url(get_theme_file_uri('img/logo.png')); ?>" alt="フッターロゴ">
                </picture>
                <div class="footerContent">
                    <p class="footerTel"><img src="<?php echo esc_url(get_theme_file_uri('img/tell-w.png')); ?>" srcset="<?php echo esc_url(get_theme_file_uri('img/tell-w@2x.png')); ?>" alt="電話アイコン"> 0123-456-7890</p><!-- /.footerTel -->
                    <p class="footerTime">平日08:00〜20:00</p><!-- /.footerTime -->
                </div><!-- /.footerContent -->
            </div><!-- /.footerRight -->
        </div><!-- /.footerContainer -->
        <div class="footerCopyright">
           <p class="inner copyRight">&copy; 2020 <?php wp_date('Y'); ?> <?php bloginfo("name"); ?> .</p><!-- /.copyRight -->
        </div><!-- /.footerCopyright -->
    </footer>
    <script src="<?php echo esc_url(get_theme_file_uri('js/accordion.js')); ?>"></script>
    <script src="<?php echo esc_url(get_theme_file_uri('js/hints.js')); ?>"></script>
    <?php wp_footer(); ?>
</body>
</html>