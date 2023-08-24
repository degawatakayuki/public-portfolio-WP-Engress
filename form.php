<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Engress</title><!-- ***************HPタイトル******************* -->
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/bc4df06650.js" crossorigin="anonymous"></script>
    <meta name="description" content="サイトディスクリプション＝日本人へのTOEFL指導歴豊かな講師陣の コーチング型TOEFLスクール"><!-- ***************HP説明******************* -->
    <meta name="keywords" content="日本人へのTOEFL指導歴豊かな講師陣の コーチング型TOEFLスクール"><!-- ***************検索キーワード******************* -->
    <meta name="robots" content="noindex"/><!-- ***************完成したら削除******************* -->
</head>
<body>
    <header>
        <div class="headerContainer">
            <div class="headerLeft">
                <div class="headerLogo">
                    <img src="img/logo.png" srcset="img/logo@2x.png 2x" alt="ヘッダーロゴ">
                </div><!-- /.headerLogo -->
                <nav class="headerNav-pc">
                    <ul>
                        <li><a href="">ホーム</a></li>
                        <li><a href="">お知らせ</a></li>
                        <li><a href="">ブログ</a></li>
                        <li><a href="">コース・料金</a></li>
                    </ul>
                </nav><!-- /.headerNav-pc -->
            </div><!-- /.headerLeft -->
            <div class="headerRight">
                <div class="company-tell">
                    <p class="supportTime">平日08:00〜20:00</p><!-- /.supportTime -->
                    <p class="supportCall"><i class="fa-solid fa-phone"></i>0123-456-7890</p><!-- /.supportCall -->
                </div><!-- /.company-tell -->
                <div class="headerEnquiry">
                    <a href="" class="c-headerButton documentRequest">資料請求</a>
                    <a href="" class="c-headerButton contact">お問い合わせ</a>
                </div><!-- /.headerButton -->
                <div class="c-hamburgerBlock-sp">
                    <input type="checkbox" id="navToggle">
                    <label for="navToggle" class="hamburger"><span></span></label>
                    <nav class="header__spNav spMainNav">
                        <ul class="spMainNav__list">
                            <li class="spMainNav__item"><a href="">ホーム</a></li>
                            <li class="spMainNav__item"><a href="">お知らせ</a></li>
                            <li class="spMainNav__item"><a href="">ブログ</a></li>
                            <li class="spMainNav__item"><a href="">コース・料金</a></li>
                        </ul>
                    </nav><!-- /.header__pcNav -->
                </div><!-- /.hamburgerBlock-sp --> 
            </div><!-- /.headerRight -->
        </div><!-- /.headerContainer -->
    </header>
    <main>
        <section class="p-subVisual">
            <div class="subVisualContainer">
                <picture>
                    <source srcset="<?php echo esc_url(get_theme_file_uri('img/cta-sp.jpg')); ?>" media="(max-width: 415px)">
                    <img src="<?php echo esc_url(get_theme_file_uri('img/cta.jpg')); ?>" srcset="<?php echo esc_url(get_theme_file_uri('img/cta@2x.jpg')); ?>" alt="サブ画像01">
                  </picture>
                  <h1 class="subTitle">お問い合わせ・資料請求</h1><!-- /.subTitle -->
            </div><!-- /.subVisualContainer -->
            <div class="breadList">
                <nav class="inner breadListContainer">
                    <ul>
                        <li><a href="">ホーム</a></li>
                        <li><a href="">お知らせ</a></li>
                    </ul>
                </nav><!-- /.breadListContainer -->
            </div><!-- /.breadList -->
        </section><!-- /.p-subVisual -->
        <section class="p-contactForm">
            <div class="inner contactFormContainer">
                <p>弊社に興味を持って頂きありがとうございます。商談やサービスのご利用、資料請求について下記のフォームよりお問い合わせください。</p>
                <form action="">
                    <label for="corpName">会社名</label>
                    <input type="text" name="corpName" placeholder="Engress">
                    <label for="name">氏名</label>
                    <input type="text" name="name" placeholder="田中　太郎">
                    <label for="mail">メールアドレス</label>
                    <input type="email" placeholder="example@example.com">
                    <label for="tel">電話番号</label>
                    <input type="tel" name="tel" placeholder="01-2345-6789">
                    <label for="contactType">お問い合わせの種類を選択してください<span>（資料請求の方は資料請求を選択ください）</span></label>
                    <div class="contactTypeContainer">
                        <input type="radio" name="contactType" value="consultation">商談のご相談
                        <input type="radio" name="contactType" value="service">サービスに関するお問い合わせ
                        <input type="radio" name="contactType" value="claim">資料請求
                        <input type="radio" name="contactType" value="other">その他
                    </div><!-- /.contactTypeContainer -->
                    <label for="content">お問い合わせ内容</label>
                    <textarea name="content"cols="30" rows="10" placeholder="入力して下さい"></textarea><!-- /# -->
                </form>
            </div><!-- /.contactFormContainer -->
        </section><!-- /.p-contactForm -->
        <section class="c-pager">
            <div class="inner pagerContainer">
                <ul>
                    <li><a href="">1</a></li>
                    <li><a href="">2</a></li>
                    <li><a href="">3</a></li>
                </ul>
            </div><!-- /.pagerContainer -->
        </section><!-- /.c-pager -->
    </main>
    <footer>
        <div class="inner footerContainer">
            <nav class="footerNav">
                <ul>
                    <li><a href="">ホーム</a></li>
                    <li><a href="">お知らせ</a></li>
                    <li><a href="">ブログ</a></li>
                    <li><a href="">コース・料金</a></li>
                </ul>
            </nav><!-- /.footerNav -->
            <div class="footerRight">
                <picture>
                    <img src="img/logo.png" alt="フッターロゴ">
                </picture>
                <div class="footerContent">
                    <p class="footerTel"><img src="img/tell-w.png" srcset="img/tell-w@2x.png 2x" alt="電話アイコン"> 0123-456-7890</p><!-- /.footerTel -->
                    <p class="footerTime">平日08:00~20:00</p><!-- /.footerTime -->
                </div><!-- /.footerContent -->
            </div><!-- /.footerRight -->
        </div><!-- /.footerContainer -->
        <div class="footerCopyright">
           <p class="inner copyRight">© 2020 Engress.</p><!-- /.copyRight -->
        </div><!-- /.footerCopyright -->
    </footer>
    <script src="js/accordion.js"></script>
</body>
</html>