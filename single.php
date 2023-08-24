<?php get_header(); ?>
    <main>
        <section class="p-subVisual">
            <div class="breadList breadList-blog">
                <div class="inner breadListContainer breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                    <?php if(function_exists('bcn_display'))
                    {
                        bcn_display();
                    }?>
                </div>
            </div><!-- /.breadList -->
        </section><!-- /.p-subVisual -->
        <section class="inner l-2columnContainer">
            <section class="mainSide">
                <div class="p-blogDetail">
                    <?php if(have_posts()): ?>
                        <?php while(have_posts()): the_post(); ?>
                            <div class="category"><?php echo get_the_category()[0]->cat_name; ?>
                            </div><!-- /.category -->
                            <h1><?php the_title(); ?></h1>
                            <div class="snsBtns">
                                <div class="snsLinks"><?php echo do_shortcode('[socialBtns]');  ?></div><!-- /.snsLinks -->
                                <p class="postDate"><?php echo get_the_date('Y-m-d'); ?></p><!-- /.postDate -->
                            </div><!-- /.snsBtns -->
                            <div class="c-wp-userDesign">
                                <?php the_content(); ?>
                            </div><!-- /.c-wp-userDesign --> 
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div><!-- /.blogDetailcontaier -->
                <div class="p-blogSuggest">
                    <h2 class="suggestTitle">おすすめの記事</h2><!-- /.suggestTitle -->
                    <ul class="relatedList">
                        <!-- おすすめ記事一覧表示 -->
                        <?php 
                            $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => 3,
                                'order' => 'DESC',
                                'category_name' => 'pickup'
                            );
                            $the_query = new WP_Query($args);
                        ?>
                        <?php if($the_query -> have_posts()): ?>
                            <?php while($the_query -> have_posts()): $the_query -> the_post(); ?>
                                <li class="c-card">
                                    <picture>
                                        <div class="category"><?php echo get_the_category()[0]->cat_name; ?></div><!-- /.category -->
                                        <?php my_post_thumbnail_display('m'); ?><!-- サムネイルがない場合に「noimage画像」を表示する自作関数 -->
                                    </picture>
                                    <div class="relatedContent">
                                        <p class="relatedDate"><?php echo get_the_date('Y-m-d'); ?></p><!-- /.blogDate -->
                                        <a href="<?php the_permalink(); ?>" class="relatedLink">
                                            <?php my_post_title_str(get_the_title(), 30); ?><!--投稿タイトルを文字制限する自作関数 -->
                                        </a><!-- /.blogTitle -->
                                    </div><!-- /.blogContent -->  
                                </li>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        <?php endif; ?>
                    </ul><!-- /.newsList -->
                </div><!-- /.blogRecommendation -->
            </section><!-- /.mainSide -->
            <aside class="sidebar">
                <?php get_sidebar(); ?>
            </aside><!-- /.sidebar -->
        </section><!-- /.2columnContainer -->
    </main>
    <?php get_footer(); ?>