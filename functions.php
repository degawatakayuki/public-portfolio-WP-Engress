<?php

  function post_has_archive($args, $post_type) {
    if('post' == $post_type) {
      $args['rewrite'] = true;
      $args['has_archive'] = 'blog';
      $args['label'] = 'ブログ';
    }
    return $args;
  }
  add_filter('register_post_type_args', 'post_has_archive', 10, 2);

  //アイキャッチ画像を有効化
  function my_theme_setup() {
    add_theme_support('post-thumbnails');
  }
  add_action( 'after_setup_theme', 'my_theme_setup');

  //投稿記事表示件数
  function post_loop_rules ( $query ) {
    // 管理画面や、メインクエリ以外の処理に影響を及ぼさないように
    if ( is_admin() || ! $query->is_main_query() ){
        return;
    }

    //フロントページの表示件数設定
    if ($query->is_front_page( )) {
      $query->set('posts_per_page', 2);
      return;
    }
  }
  add_action('pre_get_posts','post_loop_rules');

  //[プラグイン「WP Social Bookmarking Light」の設定場所
  function wpSns() {
    if (function_exists("wp_social_bookmarking_light_output_e")) {
      wp_social_bookmarking_light_output_e();
    }
  }
  add_shortcode('socialBtns', 'wpSns');

  /* 自作関数読み込み */
  $myFunctionsList = glob(dirname(__FILE__) . '/functions/*.php');
      foreach($myFunctionsList as $file) {
      require_once ($file);
  } 

add_filter( 'show_admin_bar', 'set_adminbar' );
 
function set_adminbar( $adminbar ) {
 $adminbar  = true; /* true:表示 false:非表示 */
 return $adminbar;
}

//パンクズリストの階層をカスタム
function bcn_add($bcnObj) {

  //お知らせ投稿のシングルページか判定
  if (is_singular('info')) {
    $bcnObj->add(new bcn_breadcrumb('お知らせ', null, array('post-clumn-archive'), home_url('info/'), null, true));
    // trailオブジェクト0とtrailオブジェクト1の中身を入れ替える
    $bcnObj->trail[3] = null;
    return $bcnObj;
	}

	// デフォルト投稿のシングルページか判定
	if (is_single()) {
    $bcnObj->add(new bcn_breadcrumb('ブログ', null, array('post-clumn-archive'), home_url('blog/'), null, true));
    // trailオブジェクト0とtrailオブジェクト1の中身を入れ替える
    $trail_tmp = clone $bcnObj->trail[3];
		$bcnObj->trail[3] = clone $bcnObj->trail[2];
		$bcnObj->trail[2] = $trail_tmp;

    return $bcnObj;
	} 
  //カテゴリ一覧ページか判定
  if (is_category( )) {
		$bcnObj->add(new bcn_breadcrumb('ブログ', null, array('post-clumn-archive'), home_url('blog/'), null, true));
    $trail_tmp = clone $bcnObj->trail[2];
		$bcnObj->trail[2] = clone $bcnObj->trail[1];
		$bcnObj->trail[1] = $trail_tmp;
 
    return $bcnObj;
  }
}
add_action('bcn_after_fill', 'bcn_add'); 

// 管理バー非表示
add_filter( 'show_admin_bar', '__return_false' );