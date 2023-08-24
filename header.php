<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title><!-- ***************HPタイトル******************* -->
    <link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/css/style.css')); ?>">
    <script src="https://kit.fontawesome.com/bc4df06650.js" crossorigin="anonymous"></script>
    <meta name="description" content="サイトディスクリプション＝日本人へのTOEFL指導歴豊かな講師陣の コーチング型TOEFLスクール"><!-- ***************HP説明******************* -->
    <meta name="keywords" content="日本人へのTOEFL指導歴豊かな講師陣の コーチング型TOEFLスクール"><!-- ***************検索キーワード******************* -->
    <link rel="stylesheet" href="https://unpkg.com/scroll-hint@latest/css/scroll-hint.css">
    <script src="https://unpkg.com/scroll-hint@latest/js/scroll-hint.min.js"></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header>
        <div class="headerContainer">
            <div class="headerLeft">
                <div class="headerLogo">
                    <img src="<?php echo esc_url(get_theme_file_uri('img/logo.png')); ?>" srcset="<?php echo esc_url(get_theme_file_uri('img/logo@2x.png')); ?>" alt="ヘッダーロゴ">
                </div><!-- /.headerLogo -->
                <nav class="headerNav-pc">
                    <ul>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>">ホーム</a></li> 
                        <li><a href="<?php echo esc_url(home_url('/info')); ?>">お知らせ</a></li>
                        <li><a href="<?php echo esc_url(home_url('/blog')); ?>">ブログ</a></li>
                        <li><a href="<?php echo esc_url(home_url('/plan')); ?>">コース・料金</a></li>
                    </ul>
                </nav><!-- /.headerNav-pc -->
            </div><!-- /.headerLeft -->
            <div class="headerRight">
                <div class="company-tell">
                    <p class="supportTime">平日08:00〜20:00</p><!-- /.supportTime -->
                    <p class="supportCall"><i class="fa-solid fa-phone"></i>0123-456-7890</p><!-- /.supportCall -->
                </div><!-- /.company-tell -->
                <div class="headerEnquiry">
                    <a class="c-headerButton documentRequest" href="<?php echo esc_url(home_url('/contact')); ?>">資料請求</a>
                    <a class="c-headerButton contact" href="<?php echo esc_url(home_url('/contact')); ?>">お問い合わせ</a>
                </div><!-- /.headerButton -->
                <div class="c-hamburgerBlock-sp">
                    <input type="checkbox" id="navToggle">
                    <label for="navToggle" class="hamburger"><span></span></label>
                    <nav class="header__spNav spMainNav">
                        <ul class="spMainNav__list">
                            <li><a href="<?php echo esc_url(home_url('/')); ?>">ホーム</a></li> 
                            <li><a href="<?php echo esc_url(home_url('/info')); ?>">お知らせ</a></li>
                            <li><a href="<?php echo esc_url(home_url('/blog')); ?>">ブログ</a></li>
                            <li><a href="<?php echo esc_url(home_url('/plan')); ?>">コース・料金</a></li>
                        </ul>
                    </nav><!-- /.header__spNav -->
                </div><!-- /.hamburgerBlock-sp --> 
            </div><!-- /.headerRight -->
        </div><!-- /.headerContainer -->
    </header>
    <main>