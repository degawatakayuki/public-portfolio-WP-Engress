<?php get_header(); ?>
    <main>
        <section class="p-subVisual">
            <div class="subVisualContainer">
                <picture>
                    <source srcset="<?php echo esc_url(get_theme_file_uri('img/blog-sp.jpg')); ?>" media="(max-width: 415px)">
                    <img src="<?php echo esc_url(get_theme_file_uri('img/blog.jpg')); ?>" srcset="<?php echo esc_url(get_theme_file_uri('img/blog@2x.jpg')); ?>" alt="サブ画像01">
                  </picture>
                  <h1 class="subTitle">ブログ</h1><!-- /.subTitle -->
            </div><!-- /.subVisualContainer -->
            <div class="breadList">
                <div class="inner breadListContainer breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                    <?php if(function_exists('bcn_display'))
                    {
                        bcn_display(); 
                        //カテゴリ一覧ページ以外のパンくずリストに「＞ブログ」を表示
                        if (!is_category( )) {
                            print('<span class="delimiter"> > ブログ</span>');
                        }
                    }?>
                </div>
            </div><!-- /.breadList -->
        </section><!-- /.p-subVisual -->
        <section class="p-blogLists">
            <div class="inner blogListsContainer">
                <?php if(is_category()) { ?>
                    <h2 class="blogListsTitle">カテゴリー一覧</h2><!-- /.blogListsTitle -->
                <?php } elseif(is_archive()) { ?>
                    <h2 class="blogListsTitle">新着一覧</h2><!-- /.blogListsTitle -->
                <?php } ?>
                <div class="blogList">
                    <!-- ブログ一覧を表示 -->
                    <?php if(have_posts()): ?>
                        <?php while(have_posts()): the_post(); ?>
                            <div class="blogPost">
                                <picture>
                                    <?php my_post_thumbnail_display($size='l'); ?>
                                    <div class="category"><?php echo get_the_category()[0]->cat_name; ?></div><!-- /.category -->
                                </picture>
                                <div class="postContent">
                                    <p class="postDate"><?php echo get_the_date('Y-m-d'); ?></p><!-- /.postDate -->
                                    <a href="<?php the_permalink(); ?>" class="postTitle"><?php my_post_title_str($post->post_title, 25); ?></a><!-- /.postTitle -->
                                    <p class="postText"><?php my_post_title_str(get_the_excerpt(), 30); ?></p><!-- /.postText -->
                                </div><!-- /.postContent -->
                            </div><!-- /.blogPost -->
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div><!-- /.blogList -->
            </div><!-- /.blogListsContainer -->
        </section><!-- /.p-blogLists -->
        <!-- ページング -->
        <section class="c-pager">
            <div class="inner pagerContainer">
                <?php wp_pagenavi(); ?>
            </div><!-- /.pagerContainer -->
        </section><!-- /.c-pager -->
        <?php get_footer(); ?>
    </main>
    