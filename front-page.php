<?php get_header(); ?>
    <main>
        <section class="p-mainVisual">
            <div class="inner mainVisualContainer">
                <h1>TOEFL対策はEngress</h1>
                <p>日本人へのTOEFL指導歴豊かな講師陣の<br>コーチング型TOEFLスクール</p>
                <div class="c-visualButton"><a  href="<?php echo esc_url(home_url('/contact')); ?>">資料請求</a></div><!-- /.c-visualButton -->
                <a  href="<?php echo esc_url(home_url('/contact')); ?>">お問い合わせ</a>
            </div><!-- /.mainVisualContainer -->
        </section><!-- /.mainVisual -->
        <section class="p-mainCatch">
            <div class="inner catchContainer">
                <h2 class="catchTitle">TOEFL学習で<br class="br-sp">こんな悩みありませんか？</h2>
                <div class="worriesContents">
                    <p class="worriesText">勉強の習慣が<br class="br-md">身についていない</p><!-- /.worriesText -->
                    <p class="worriesText">勉強しているはず<br class="br-md">なのに点数が伸びない</p><!-- /.worriesText -->
                    <p class="worriesText">正しい勉強方法が<br class="br-md">わからない</p><!-- /.worriesText -->
                </div><!-- /.worriesContents -->
                <div class="catchBlock">
                    <div class="catchContents">
                        <h2>Engressは<br><span>TOEFLに特化したスクール</span><br class="br-sp">です</h2>
                        <p>完全オーダーメイドで、<br class="br-sp">１人１人の悩みに合わせた最適な指導で<br>TOEFLの苦手分野を克服します。</p>
                    </div><!-- /.catchContents -->
                </div><!-- /.catchBlock -->
            </div><!-- /.catchContainer -->
        </section><!-- /.p-mainCatch -->
        <section class="p-advantage">
            <h2>TOEFL対策に特化した<br class="br-sp">Engress3つの強み</h2>
            <div class="advantageContainer">
                <div class="fillter-sp"></div><!-- /.fillter-sp -->
                <div class="advantageContents">
                    <div class="c-card advantage">
                        <picture><img src="<?php echo esc_url(get_theme_file_uri('img/feature01.jpg')); ?>" alt="強み01"></picture>
                        <div class="advantageContent">
                            <div class="tag">特長 １</div><!-- /.tag -->
                            <h3 class="contentTitle">TOEFLに最適化された<br>無駄のないカリキュラム</h3><!-- /.contentTitle -->
                            <p class="text">TOEFLではビジネス英語には登場しない数多くの学術的内容が出題されます。そのため、ベースとなる知識も必要になります。Engressでは過去1000題を分析し、最適なカリキュラムを組んでいます。</p><!-- /.text -->
                        </div><!-- /.advantageContent -->
                    </div><!-- /.c-card advantage -->
                </div><!-- /.advantageContents -->
                <div class="advantageContents">
                    <div class="c-card advantage reverse">
                        <picture><img src="<?php echo esc_url(get_theme_file_uri('img/feature02.jpg')); ?>" alt="強み01"></picture>
                        <div class="advantageContent">
                            <div class="tag">特長 ２</div><!-- /.tag -->
                            <h3 class="contentTitle">日本人指導歴10年以上の<br>経験豊富な講師陣</h3><!-- /.contentTitle -->
                            <p class="text">Engressの講師陣は、もともと日本人向けにTOEFLを教えていた人が大多数です。また全メンバーがTESOL(英語教授法)を取得しており、知識と経験を兼ね備えている教育のプロフェッショナルです。</p><!-- /.text -->
                        </div><!-- /.advantageContent -->
                    </div><!-- /.c-card advantage -->
                </div><!-- /.advantageContents -->
                <div class="advantageContents">
                    <div class="c-card advantage">
                        <picture><img src="<?php echo esc_url(get_theme_file_uri('img/feature03.jpg')); ?>" alt="強み01"></picture>
                        <div class="advantageContent">
                            <div class="tag">特長 ３</div><!-- /.tag -->
                            <h3 class="contentTitle">平均3ヶ月でTOEFL <br class="br-sp">iBT20点アップ</h3><!-- /.contentTitle -->
                            <p class="text">Engressは高校生からサラリーマンまで様々な年齢層の方々が通われていますが、完全オーダーメイドのカリキュラムで柔軟に対応しているため、平均3ヶ月でTOEFLスコアを20点アップさせています。</p><!-- /.text -->
                        </div><!-- /.advantageContent -->
                    </div><!-- /.c-card advantage -->
                </div><!-- /.advantageContents -->    
            </div><!-- /.advantageContainer -->
            <div class="inner plan">
                <picture>
                    <source srcset="<?php echo esc_url(get_theme_file_uri('img/price-sp.jpg')); ?>" media="(max-width: 415px)">
                    <img src="<?php echo esc_url(get_theme_file_uri('img/price.jpg')); ?>" srcset="<?php echo esc_url(get_theme_file_uri('img/price@2x.jpg')); ?>" alt="メイン画像01">
                </picture>
                <div class="planContent">
                    <h3 class="planTitle">Engressの料金プランはこちら</h3><!-- /.planTitle -->
                    <a href="<?php echo esc_url(home_url('/plan')); ?>" class="planLink">料金を見てみる</a><!-- /.planLink -->
                </div><!-- /.planContent -->
            </div><!-- /.plan -->
        </section><!-- /.p-advantage -->
        <section class="p-successStory">
            <div class="inner successContainer">
                <h2 class="successTitle">TOEFL成功事例</h2><!-- /.successTitle -->
                <div class="successContents">
                    <div class="c-card success">
                        <p class="comment"><?php the_field('success1_comment', 2119)?></p><!-- /.comment -->
                        <div class="successBlock">
                            <img src="<?php the_field('success1_img', 2119); ?>" alt="モデル０１">
                            <div class="successContent">
                                <p class="position"><?php the_field('success1_postion', 2119)?></p><!-- /.position -->
                                <p class="name"><?php the_field('success1_name', 2119)?>さん</p><!-- /.name -->
                                <p class="score"><?php the_field('success1_score', 2119)?></p><!-- /.score -->
                            </div><!-- /.successContent -->
                        </div>
                    </div><!-- /.c-card success -->
                    <div class="c-card success">
                        <p class="comment"><?php the_field('success2_comment', 2119)?></p><!-- /.comment -->
                        <div class="successBlock">
                            <img src="<?php the_field('success2_img', 2119); ?>" alt="モデル０２">
                            <div class="successContent">
                                <p class="position"><?php the_field('success2_postion', 2119)?></p><!-- /.position -->
                                <p class="name"><?php the_field('success2_name', 2119)?>さん</p><!-- /.name -->
                                <p class="score"><?php the_field('success2_score', 2119)?></p><!-- /.score -->
                            </div>
                        </div>
                    </div><!-- /.c-card success -->
                    <div class="c-card success">
                        <p class="comment"><?php the_field('success3_comment', 2119)?></p><!-- /.comment -->
                        <div class="successBlock">
                            <img src="<?php the_field('success3_img', 2119); ?>" alt="モデル０３">
                            <div class="successContent">
                                <p class="position"><?php the_field('success3_postion', 2119)?></p><!-- /.position -->
                                <p class="name"><?php the_field('success3_name', 2119)?>さん</p><!-- /.name -->
                                <p class="score"><?php the_field('success3_score', 2119)?></p><!-- /.score -->
                            </div>
                        </div>
                    </div><!-- /.c-card success -->
                </div><!-- /.successContents -->
            </div><!-- /.successContainer -->
        </section><!-- /.p-successStory -->
        <section class="p-useFlow">
            <div class="inner useFlowContainer">
                <h2 class="useFlowTitle">ご利用の流れ</h2><!-- /.useFlowTitle -->
                <div class="useContents">
                    <div class="c-card useFlow">
                        <div class="numberBlock">01</div><!-- /.number -->
                        <div class="flowContent">
                            <h3 class="flowTitle">お問い合わせ</h3><!-- /.flowTitle -->
                            <p class="flowText">まずはフォームまたはお電話からお申し込みください。</p><!-- /.flowText -->
                        </div>
                    </div><!-- /.card useFlow -->
                    <div class="c-card useFlow">
                        <div class="numberBlock">02</div><!-- /.number -->
                        <div class="flowContent">
                            <h3 class="flowTitle">ヒアリング</h3><!-- /.flowTitle -->
                            <p class="flowText">現在の学習状況やTOEFLスコア、目標のスコアをお聞きします。</p><!-- /.flowText -->
                        </div>
                    </div><!-- /.card useFlow -->
                    <div class="c-card useFlow">
                        <div class="numberBlock">03</div><!-- /.number -->
                        <div class="flowContent">
                            <h3 class="flowTitle">学習プランのご提供</h3><!-- /.flowTitle -->
                            <p class="flowText">目標達成のために最適な学習プランをご提案致します。</p><!-- /.flowText -->
                        </div>
                    </div><!-- /.card useFlow -->
                    <div class="c-card useFlow">
                        <div class="numberBlock">04</div><!-- /.number -->
                        <div class="flowContent">
                            <h3 class="flowTitle">ご入会</h3><!-- /.flowTitle -->
                            <p class="flowText">お申込み完了後、レッスンがスタートします。</p><!-- /.flowText -->
                        </div><!-- /.flowContent -->
                    </div><!-- /.card useFlow -->
                </div><!-- /.useContents -->
            </div><!-- /.useFlowContainer -->
        </section><!-- /.p-useFlow -->
        <section class="p-question">
            <div class="inner questionContainer">
                <h2 class="questionTitle">よくある質問</h2><!-- /.questionTitle -->
                <div class="questionBlock">
                    <dl class="c-accordion js-accordion">
                        <div class="accordion__item js-accordion-trigger  is-active">
                            <dt class="accordion__title">Engressはサラリーマンでも学習を続けられるでしょうか？</dt>
                            <dd class="accordion__content is-open">Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</dd>
                        </div>
                        <div class="accordion__item js-accordion-trigger">
                            <dt class="accordion__title">教材はオリジナルのものを使用しているのでしょうか？</dt>
                            <dd class="accordion__content">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</dd>
                        </div>
                        <div class="accordion__item js-accordion-trigger">
                            <dt class="accordion__title">講師に日本人はいますか？</dt>
                            <dd class="accordion__content">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</dd>
                        </div>
                        <div class="accordion__item js-accordion-trigger">
                            <dt class="accordion__title">TOEFL以外の海外大学合格のサポートもしてもらえるのでしょうか？</dt>
                            <dd class="accordion__content">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</dd>
                        </div>
                    </dl><!-- /.c-accordion -->
                </div><!-- /.questionBlock -->
            </div><!-- /.questionContainer -->
        </section><!-- /.p-question -->
        <section class="p-sns">
            <div class="inner snsContainer">
                <div class="blogBlock">
                    <h3 class="blogTitle">ブログ</h3><!-- /.blogTitle -->
                    <div class="blogLists">
                        <?php if(have_posts()): ?>
                            <?php while(have_posts()): the_post(); ?>
                                <div class="c-card blogContents">
                                    <picture>
                                        <div class="category"><?php echo get_the_category()[0]->cat_name; ?></div><!-- /.category -->
                                        <?php my_post_thumbnail_display('m'); ?><!-- サムネイルがない場合に「noimage画像」を表示する自作関数 -->
                                    </picture>
                                    <div class="blogContent">
                                        <a href="<?php the_permalink(); ?>" class="blogLink">
                                            <?php my_post_title_str(get_the_title(), 30); ?><!--投稿タイトルを文字制限する自作関数 -->
                                        </a><!-- /.blogTitle -->
                                        <p class="blogDate"><?php echo get_the_date('Y-m-d'); ?></p><!-- /.blogDate -->
                                    </div><!-- /.blogContent -->  
                                </div><!-- /.card blogContent -->
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div><!-- /.blogLists -->
                </div><!-- /.blogBlock -->
                <div class="infoBlock">
                    <h3 class="infoTitle">お知らせ</h3><!-- /.infoTitle -->
                    <ul>
                        <!-- お知らせ一覧表示 -->
                        <?php 
                            $args = array(
                                'post_type' => 'info',
                                'posts_per_page' => 3,
                            );
                            $the_query = new WP_Query($args);
                        ?>
                        <?php if($the_query -> have_posts()): ?>
                            <?php while($the_query -> have_posts()): $the_query -> the_post(); ?>
                                <li>
                                    <span class="infoDate"><?php echo get_the_date('Y-m-d'); ?></span><!-- /.infoDate -->
                                    <a href="<?php the_permalink(); ?>"><?php my_post_title_str(get_the_title(), 20);; ?></a>
                                </li>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        <?php endif; ?>
                    </ul>
                </div><!-- /.infoBlock -->
            </div><!-- /.snsContainer -->
        </section><!-- /.p-sns -->
    <?php get_footer(); ?>