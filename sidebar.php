<aside class="relatedArticle">
    <h3 class="articleTitle">関連記事</h3><!-- /.articleTitle -->
    <ul class="relatedList">
        <!-- お知らせ一覧表示 -->
        <?php 
            $category_name = get_the_category()[0]->cat_name;
            /* echo $category_name; */
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                'order' => 'DESC',
                'category_name' => $category_name,
            );
            /* var_dump($args); */
            $the_query = new WP_Query($args);
        ?>
        <?php if($the_query -> have_posts()): ?>
            <?php while($the_query -> have_posts()): $the_query -> the_post(); ?>
                <li>
                    <picture>
                        <?php my_post_thumbnail_display('m'); ?><!-- サムネイルがない場合に「noimage画像」を表示する自作関数 -->
                    </picture>
                    <a href="<?php the_permalink(); ?>"><?php my_post_title_str(get_the_title(), 20);; ?></a>
                </li>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    </ul><!-- /.newsList -->
</aside><!-- /.relatedArticle -->
<aside class="categoryArticle">
    <h3 class="articleTitle">カテゴリー</h3><!-- /.articleTitle -->
    <ul class="categoryList">
    <?php
	// 親カテゴリーのものだけを一覧で取得
        $args = array(
            'parent' => 0,
            'orderby' => 'term_order',
            'order' => 'ASC'
        );
        $categories = get_categories( $args );
        foreach( $categories as $category ) :
    ?> 
        <li>
            <a href="<?php echo get_category_link( $category->term_id ); ?>"><?php echo $category->name; ?></a>
        </li>
        <?php endforeach; ?>
    </ul>
</aside><!-- /.categoryArticle -->