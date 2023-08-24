<?php get_header(); ?>
    <main>
        <section class="p-subVisual">
            <div class="subVisualContainer">
                <picture>
                    <source srcset="<?php echo esc_url(get_theme_file_uri('img/plan-sp.jpg')); ?>" media="(max-width: 415px)">
                    <img src="<?php echo esc_url(get_theme_file_uri('img/plan.jpg')); ?>" srcset="<?php echo esc_url(get_theme_file_uri('img/plan@2x.jpg')); ?>" alt="サブ画像01">
                  </picture>
                  <h1 class="subTitle">コース・料金</h1><!-- /.subTitle -->
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
        <section class="p-planSystem">
            <div class="inner planSystemContainer">
                <h2 class="systemTitle">料金体系</h2><!-- /.systemTitle -->
                <div class="priceSystem">
                    <div class="membership">入会金 <br class="br-sp">39,800円</div><!-- /.membership -->
                    <div class="plusIcon">+</div><!-- /.plusIcon -->
                    <div class="monthly">月額費用</div><!-- /.monthly -->
                </div><!-- /.priceSystem -->
                <p>Engressのカリキュラムは完全オーダーメイドのため、カリキュラム内のサポート内容によって料金が変動します。おすすめのスタンダードプランでは、進学先に合わせたサポートまで包括的に行います。</p>
            </div><!-- /.planSystemContainer -->
        </section><!-- /.p-planSystem -->
        <section class="p-planChart">
            <div class="inner planChartContainer">
                <h2 class="chartTitle">料金表</h2><!-- /.chartTitle -->
                <div class="chartContents  js-scrollable">
                    <div class="c-card chart">
                        <h3 class="planTitle">基礎プラン</h3><!-- /.planTitle -->
                        <div class="planContent">
                            <div class="planPrice"><?php my_number_format(get_field('base', 10)); ?>円〜<span>*月額（税抜価格）</span></div><!-- /.planPrice -->
                            <div class="planRemarks">
                                <p>カリキュラム作成</p>
                                <p>TOEFL学習サポート</p>
                                <p>週一回のビデオMTG</p>
                            </div><!-- /.planRemarks -->
                        </div><!-- /.planContent -->
                    </div><!-- /.card chart -->
                    <div class="c-card chart">
                        <h3 class="planTitle">演習プラン</h3><!-- /.planTitle -->
                        <div class="planContent">
                            <div class="planPrice"><?php my_number_format(get_field('exercises', 10)); ?>円〜<span>*月額（税抜価格）</span></div><!-- /.planPrice -->
                            <div class="planRemarks">
                                <p>カリキュラム作成</p>
                                <p>TOEFL学習サポート</p>
                                <p>週一回のビデオMTG</p>
                                <p>月二回の模試（解説 付き）</p>
                            </div><!-- /.planRemarks -->
                        </div><!-- /.planContent -->
                    </div><!-- /.card chart -->
                    <div class="c-card chart recommendation">
                        <h3 class="planTitle"><span>おすすめ</span>志望校対策プラン</h3><!-- /.planTitle -->
                        <div class="planContent">
                            <div class="planPrice"><span class="recommendationPrice"><?php my_number_format(get_field('recommendation', 10)); ?>円〜</span><span>*月額（税抜価格）</span></div><!-- /.planPrice -->
                            <div class="planRemarks">
                                <p>カリキュラム作成</p>
                                <p>TOEFL学習サポート</p>
                                <p>週一回のビデオMTG</p>
                                <p>月二回の模試（解説 付き）</p>
                                <p>週一の英語面接対策</p>
                            </div><!-- /.planRemarks -->
                        </div><!-- /.planContent -->
                    </div><!-- /.card chart -->
                    <div class="c-card chart">
                        <h3 class="planTitle">フレックスプラン</h3><!-- /.planTitle -->
                        <div class="planContent">
                            <div class="planPrice"><?php my_number_format(get_field('flex', 10)); ?>円〜<span>*月額（税抜価格）</span></div><!-- /.planPrice -->
                            <div class="planRemarks">
                                <p class="notes">＊別途ご相談ください</p>
                            </div><!-- /.planRemarks -->
                        </div><!-- /.planContent -->
                    </div><!-- /.card chart -->
                </div><!-- /.chartContents -->
            </div><!-- /.planChartContainer -->
        </section><!-- /.p-planChart -->
    <?php get_footer(); ?>