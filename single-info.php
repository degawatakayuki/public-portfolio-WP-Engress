<?php get_header(); ?>
    <main>
        <section class="p-subVisual">
            <div class="breadList breadList-info">
                <div class="inner breadListContainer breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                    <?php if(function_exists('bcn_display'))
                    {
                        bcn_display();
                    }?>
                </div>
            </div><!-- /.breadList -->
        </section><!-- /.p-subVisual -->
        <section class="inner l-2columnContainer">
            <section class="mainSide fullScreen">
                <div class="p-blogDetail">
                    <?php if(have_posts()): ?>
                        <?php while(have_posts()): the_post(); ?>
                            <h1><?php the_title(); ?></h1>
                            <div class="snsBtns">
                                <div class="snsLinks"></div><!-- /.snsLinks -->
                                <p class="postDate"><?php echo get_the_date('Y-m-d'); ?></p><!-- /.postDate -->
                            </div><!-- /.snsBtns -->
                            <div class="c-wp-userDesign">
                                <?php the_content(); ?>
                            </div><!-- /.c-wp-userDesign -->
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div><!-- /.blogDetailcontaier -->
            </section><!-- /.mainSide -->
        </section><!-- /.2columnContainer -->
    </main>
<?php get_footer(); ?>