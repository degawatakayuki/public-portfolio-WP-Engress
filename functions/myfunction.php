<?php
    //サムネイルがない場合に「noimage画像」を表示する関数
    function my_post_thumbnail_display($size='s') {
        if (has_post_thumbnail()) {    
            if( $size == 's') {
                the_post_thumbnail('thumbnail');
            } elseif($size == 'm') {
                the_post_thumbnail('medium');
            } elseif($size == 'l') {
                the_post_thumbnail('large');
            } elseif($size == 'f') {
                the_post_thumbnail('full');
            } 
        } else {
            echo '<img src="'; echo esc_url(get_template_directory_uri()); echo '/img/nophoto.jpg" alt="サムネイルがありません。">';
        }
    }

    /* コンテンツの文字制限の処理 */
    function my_content_str($str, $len, $strip='') {
        if(mb_strlen($str, 'UTF-8') > $len){
            $content= mb_substr(strip_tags($str, $strip), 0, $len, 'UTF-8');
            echo $content.'...';
        }else{
            echo strip_tags($str, $strip);
        }
    }

    //投稿タイトル文字制限の処理
    function my_post_title_str($str, $len) {
        if ( mb_strlen( $str, 'UTF-8' ) > $len ) {
            $str = mb_substr( $str, 0, $len, 'UTF-8' );
            echo $str . '…';
          } else {
            echo $str;
          }
    }

    //文字列の数値を数字型にしてカンマをつける
    function my_number_format($str) {
        $num = (int)$str;
        echo number_format($num);
    }
