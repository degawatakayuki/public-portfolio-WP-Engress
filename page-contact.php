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
                <?php if(have_posts()): ?>
                    <?php while(have_posts()): the_post(); ?>
                    <?php the_content(); ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div><!-- /.contactFormContainer -->
        </section>
    <?php get_footer(); ?>