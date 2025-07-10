<?php

add_filter( 'wpseo_canonical', '__return_false' );


// Add Shortcode
function theme_directory_shortcode() {
  return get_template_directory_uri();
}
add_shortcode('theme_url', 'theme_directory_shortcode');

function replace_theme_url_in_srcset($content) {
  $theme_url = get_template_directory_uri();
  return str_replace('[theme_url]', $theme_url, $content);
}
add_filter('the_content', 'replace_theme_url_in_srcset');



// WM WP FORM のradioボタンの選択肢を動的に変更する
// recruit/internページのカスタムフィールドの値を取得して、ラジオボタンの選択肢を変更する
// mw-wp-form-57
// function change_radio_option($options, $field, $form) {
//   if ($form->id() === 57) {
//     $field_id = $field->id();
//     if ($field_id === 3) {
//       $recruit = get_field('recruit', 'option');
//       $options = array();
//       foreach ($recruit as $key => $value) {
//         $options[] = array(
//           'label' => $value['label'],
//           'value' => $value['value'],
//           'calc' => 0
//         );
//       }
//     }
//   }
//   return $options;
// }
// add_filter('wmform_field_options', 'change_radio_option', 10, 3);

function custom_choices( $children, $atts ) {
  if ( $atts['name'] == 'days' ) {
    $children = [];

    // 固定ページrecruit/internページのカスタムフィールド「interndays」を取得
    $page_id = get_page_by_path('recruit/intern');
    $page_id = $page_id->ID; //ページIDを取得して$page_idに代入

    $week = array("日", "月", "火", "水", "木", "金", "土");

    $interndays = get_field('interndays', $page_id);
    foreach ($interndays as $internday) {
      $internday = $internday['internday'];

      // 過ぎてる日付は選択肢に表示しない
      $today = date("Y.m.d");

      // strtotimeが使えないので、他の方法で比較する
      $today = explode(".", $today);
      $today_year = (int)$today[0];
      $today_month = (int)$today[1];
      $today_day = (int)$today[2];

      $internday_split = explode(".", $internday);
      $internday_year = (int)$internday_split[0];
      $internday_month = (int)$internday_split[1];
      $internday_day = (int)$internday_split[2];

      if ($today_year > $internday_year) {
        continue;
      } else if ($today_year == $internday_year) {
        if ($today_month > $internday_month) {
          continue;
        } else if ($today_month == $internday_month) {
          if ($today_day > $internday_day) {
            continue;
          }
        }
      }

      $topday = explode(".", $internday);
      $topday_year = (int)$topday[0];
      $topday_month = (int)$topday[1];
      $topday_day = (int)$topday[2];

      $weekday = $topday_year . "/" . $topday_month . "/" . $topday_day;

      $internday = $topday_month . "月" . $topday_day . "日 (" . $week[date('w', strtotime( $weekday ))] . ")";

      $children[$internday] = $internday;
    }



    // $products = get_posts( array(
    //     'post_type' => 'products',
    //     'posts_per_page' => -1
    // ) );
    // foreach ( $products as $product ) {
    //   $children[$product->post_title] = $product->post_title;
    // }
  }
  return $children;
}
add_filter( 'mwform_choices_mw-wp-form-57', 'custom_choices', 10, 2 );

//reCAPTCHA
function load_recaptcha_js(){
 if (!is_page(array("contact","confirm"))){
  wp_deregister_script( 'google-recaptcha' );
 }
}
add_action( 'wp_enqueue_scripts', 'load_recaptcha_js',100 );

//本体の更新通知を非表示
add_filter("pre_site_transient_update_core", "__return_null");
//プラグインの更新通知を非表示
add_filter("pre_site_transient_update_plugins", "__return_null");
//テーマの更新通知を非表示
add_filter("pre_site_transient_update_themes", "__return_null");

?>