<?php get_header(); ?>
    <main>
        <section class="p-subVisual">
            <div class="subVisualContainer">
                <picture>
                    <source srcset="<?php echo esc_url(get_theme_file_uri('img/news-sp.jpg')); ?>" media="(max-width: 415px)">
                    <img src="<?php echo esc_url(get_theme_file_uri('img/news.jpg')); ?>" srcset="<?php echo esc_url(get_theme_file_uri('img/news@2x.jpg')); ?>" alt="サブ画像01">
                  </picture>
                  <h1 class="subTitle">お知らせ</h1><!-- /.subTitle -->
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
        <section class="p-newsLists">
            <div class="inner newsListsContainer">
                <h2 class="newListTitle">お知らせ一覧</h2><!-- /.newListTitle -->
                <ul class="newsList">
                    <!-- お知らせ一覧表示 -->
                    <?php 
                        $args = array(
                            'paged' => $paged,
                            'post_type' => 'info',
                            'posts_per_page' => 10,
                        );
                        $the_query = new WP_Query($args);
                    ?>
                    <?php if($the_query -> have_posts()): ?>
                        <?php while($the_query -> have_posts()): $the_query -> the_post(); ?>
                            <li>
                                <span class="newsDate"><?php echo get_the_date('Y-m-d'); ?></span><!-- /.newsDate -->
                                <a href="<?php the_permalink(); ?>"><?php my_post_title_str(get_the_title(), 20);; ?></a>
                            </li>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                </ul><!-- /.newsList -->
            </div><!-- /.newsListsContainer -->
        </section><!-- /.p-newsLists -->
        <!-- ページング -->
        <section class="c-pager">
            <div class="inner pagerContainer">
                <?php 
                    if( function_exists('wp_pagenavi') ) {
                        wp_pagenavi(array('query' => $the_query));
                    }
                ?>
            </div><!-- /.pagerContainer -->
        </section><!-- /.c-pager -->
        <?php get_footer(); ?>
    </main>
    