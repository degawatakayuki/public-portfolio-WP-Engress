<?php get_header(); ?>
    <main>
        <section class="p-subVisual">
            <div class="subVisualContainer">
                <picture>
                    <source srcset="<?php echo esc_url(get_theme_file_uri('img/plan-sp.jpg')); ?>" media="(max-width: 415px)">
                    <img src="<?php echo esc_url(get_theme_file_uri('img/plan.jpg')); ?>" srcset="<?php echo esc_url(get_theme_file_uri('img/plan@2x.jpg')); ?>" alt="サブ画像01">
                  </picture>
                  <h1 class="subTitle">お問い合わせ・資料請求</h1><!-- /.subTitle -->
            </div><!-- /.subVisualContainer -->
            <div class="breadList">
                <div class="inner breadListContainer breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                    <?php if(function_exists('bcn_display'))
                    {
                        bcn_display();
                    }?>
                </div>
            </div><!-- /.breadList -->
        </section><!-- /.p-subVisual -->
        <section class="p-contactForm">
            <div class="inner contactFormContainer">
                <p class="contactReply">
                    お問い合わせいただきありがとうございます<br>
                    内容を確認した後、担当者よりご連絡いたします
                </p>
                <a class="contactHome" href="<?php echo esc_url(home_url('/')); ?>">ホームへ戻る</a>
            </div><!-- /.contactFormContainer -->
        </section>
    <?php get_footer(); ?>