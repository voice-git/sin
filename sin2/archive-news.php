
<?php
$theme_directory = get_template_directory_uri();
$home_url = esc_url( home_url( '/' ) );

$paged = (isset($_GET['pg'])) ? $_GET['pg'] : 1;

$news_cat = null;
if (isset($_GET['cat'])) {
  $news_cat = $_GET['cat'];
}

$news_year = null;
if (isset($_GET['yr'])) {
  $news_year = $_GET['yr'];
}

// カスタム投稿news
// カスタムタクソノミーnews_cat
// urlパラメータyearで絞り込み
// ただしカスタムフィールド「date」のデイトピッカーで取得する値(2024.04.25)のような型と比較する
// urlパラメータcatで絞り込み
// urlパラメータpgでページネーション
// 1ページに表示する件数は12件
// 以下のコードは、上記の条件に基づいて、newsカスタム投稿を取得するコードです

// ページネーション
$args = array(
  'post_type' => 'news',
  'posts_per_page' => -1,
);
$wholenews_query = new WP_Query($args);
?>

<!DOCTYPE html>
<html lang="ja">
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-MMKGK4CXZC"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-MMKGK4CXZC');
</script>
    <meta charset="utf-8">
    <title> </title>
    <meta name="description" content="">
    <meta name="viewport" id="viewport" content="width=device-width,user-scalable=yes">
    <meta name="format-detection" content="telephone=no">
    <meta property="og:title" content="">
    <meta property="og:type" content="article">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <meta property="og:description" content="">
    <link rel="stylesheet" type="text/css" href="<?php echo $theme_directory; ?>/assets/css/common.css">
    <!-- 各頁用 CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo $theme_directory; ?>/assets/css/news/index.css"><link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200..900&display=swap" rel="stylesheet">
    <!-- 各頁用 JS-->
    <script src="<?php echo $theme_directory; ?>/assets/js/news/index.js"></script>

    <script type="text/javascript" src="//webfonts.xserver.jp/js/xserver.js"></script>

    <?php wp_head(); ?>
  </head>
  <body id="index">
    <main id="wrapper">
      <div id="wrapper_bg"></div>
      <div id="wrapper_bg_over"></div>
      
      <!-- HEADER-->
      <?php include('parts/header.php'); ?>

      <!-- CONTENT-->
      <article id="content">
        <section id="showcase">
          <div class="un_showcase">
            <div class="un_showcase_ttl"><img class="en" src="<?php echo $theme_directory; ?>/assets/images/news/showcase_ttl.svg" alt="S.I.N NEWS" width="246" height="33"><br><img class="jp" src="<?php echo $theme_directory; ?>/assets/images/news/showcase_ttl_jp.svg" alt="お知らせ" width="72" height="15"></div>
            <div class="un_showcase_bg">
              <picture>
                <!-- <source srcset="<?php echo $theme_directory; ?>/assets/images/news/showcase_bg_sp.webp" type="image/webp" media="(max-width: 767px)"> -->
                <source srcset="<?php echo $theme_directory; ?>/assets/images/news/showcase_bg_sp.jpg" media="(max-width: 767px)">
                <!-- <source srcset="<?php echo $theme_directory; ?>/assets/images/news/showcase_bg@2x.webp" type="image/webp"> -->
                <source srcset="<?php echo $theme_directory; ?>/assets/images/news/showcase_bg.jpg 1x, <?php echo $theme_directory; ?>/assets/images/news/showcase_bg@2x.jpg 2x"><img src="<?php echo $theme_directory; ?>/assets/images/news/showcase_bg.jpg" alt="" width="" height="">
              </picture>
            </div>
          </div>
        </section>
        <section id="news">
          <div class="un_news">
            <div class="un_news_nav"> 
              <div class="un_news_categories">
                <div class="un_news_categories_ttl"><img src="<?php echo $theme_directory; ?>/assets/images/news/category.svg" alt="CATEGORY" width="108" height="14"></div>
                <div class="un_news_categories_list">

                  <?php
                  $setAllParam = '?';
                  if (isset($news_year)) {
                    $setAllParam .= 'yr=' . $news_year;
                  }
                  ?>
                  <?php if (empty($news_cat)): ?>
                  <a href="./<?php echo $setAllParam; ?>" class="un_news_category active">ALL </a>
                  <?php else: ?>
                  <a href="./<?php echo $setAllParam; ?>" class="un_news_category">ALL </a>
                  <?php endif; ?>

                  <?php
                  // 各URLパラメータの取得
                  $news_id = get_the_ID();

                  $news_cats = get_terms('news_cat');
                  foreach ($news_cats as $news_cat_term) :
                    $news_cat_name = $news_cat_term->name;
                    $news_cat_slug = $news_cat_term->slug;

                    $setparam = '?';
                    if (isset($news_year)) {
                      $setparam .= 'yr=' . $news_year . '&';
                    }
                    $setparam .= 'cat=' . $news_cat_slug;
                  ?>
                  <?php if ($news_cat_slug === $news_cat): ?>
                  <a href="./<?php echo $setparam; ?>" class="un_news_category active"><?php echo $news_cat_name; ?></a>
                  <?php else: ?>
                  <a href="./<?php echo $setparam; ?>" class="un_news_category"><?php echo $news_cat_name; ?></a>
                  <?php endif; ?>
                  <?php endforeach; ?>

                </div>
              </div>
              <div class="un_news_archive"> 
                <div class="un_news_archive_ttl"> <img src="<?php echo $theme_directory; ?>/assets/images/news/archive.svg" alt="ARCHIVE" width="93" height="14"></div>
                <div class="un_news_archive_select">
                  <select name="years"> 
                    <option value="">発表年</option>

                    <?php

                    // $wholenews_query->postsには取得した記事が入っている
                    $news_years = array();
                    foreach ($wholenews_query->posts as $news_post) {

                      $news_date = get_field('date', $news_post->ID);
                      $news_yr = explode('.', $news_date)[0];
                      if (!in_array($news_yr, $news_years)) {
                        $news_years[] = $news_yr;
                      }
                    }

                    foreach ($news_years as $news_year_val):
                      $setparam = '?';
                      if (isset($news_cat)) {
                        $setparam .= 'cat=' . $news_cat . '&';
                      }
                      $setparam .= 'yr=' . strval($news_year_val);
                    ?>
                    <option value="<?php echo $news_year_val; ?>"><?php echo $news_year_val; ?></option>
                    <?php
                    endforeach;
                    ?>
                  </select>
                </div>
              </div>
            </div>
            <div class="un_news_articles">

              <?php
              
              // 検索後の記事
              // ページネーション
              $args = array(
                'post_type' => 'news',
                'posts_per_page' => 12,
                'paged' => $paged,
                'meta_key' => 'date',
                'orderby' => 'meta_value',
                'order' => 'DESC',
              );

              // カテゴリー絞り込み
              if (isset($news_cat)) {
                $args['tax_query'] = array(
                  array(
                    'taxonomy' => 'news_cat',
                    'field' => 'slug',
                    'terms' => $news_cat,
                  ),
                );
              }

              // 年絞り込み
              if (isset($news_year)) {
                $args['meta_query'] = array(
                  array(
                    'key' => 'date',
                    'value' => $news_year,
                    'compare' => 'LIKE',
                  ),
                );
              }
              $news_query = new WP_Query($args);
              // var_dump($news_query->posts);

              // 記事一覧出力
              if ($news_query->have_posts()) :
                while ($news_query->have_posts()) :
                  $news_query->the_post();

                  $news_date = get_field('date');
                  
                  $news_title = get_field('title');
                  $news_link = get_the_permalink();
                  $news_thumbnail = get_field('thumbimg');

                  // この記事のカスタムタクソノミーnews_catを取得
                  $news_id = get_the_ID();
                  $news_cats = get_the_terms($news_id, 'news_cat');
                  $news_cat_name = $news_cats[0]->name;

                  if (empty($news_thumbnail)) {
                    $news_thumbnail = $theme_directory . '/assets/images/common/news_thumb.jpg';
                  }
              ?>
              <a class="un_news_item" href="<?php echo $news_link; ?>">
                <div class="un_news_img"> <img src="<?php echo $news_thumbnail; ?>" alt="" width="261" height="261"></div>
                <div class="un_news_info"> <span class="date"><?php echo $news_date; ?></span><span class="cat"><?php echo $news_cat_name; ?></span></div>
                <div class="un_news_name"><?php echo $news_title; ?></div>
              </a>
              <?php
                endwhile;
              endif;
              wp_reset_postdata();
              ?>
            </div>

            <div class="un_news_paging">

              <?php
              $total_pages = $news_query->max_num_pages;
              if ($total_pages != 0):
              
              $setUrlParam = '?';
              if (isset($news_cat)) {
                $setUrlParam .= 'cat=' . $news_cat . '&';
              }
              if (isset($news_year)) {
                $setUrlParam .= 'yr=' . $news_year . '&';
              }

              // 1ページ目の場合は「<<」を表示しない
              if ($paged != 1):
                $prev_paged = $paged - 1;
              ?>
              <a class="un_news_paging_prev" href="./<?php echo $setUrlParam; ?>pg=<?php echo $prev_paged; ?>"><img src="<?php echo $theme_directory; ?>/assets/images/news/prev.svg" alt="PREV" width="" height=""></a>
              <?php
              endif;
              ?>

              <div class="un_news_paging_center">

                <?php
                // ページ番号を表示「1 2 3 ... 10」のように表示

                // 現在のページを中心に左右にページ番号を表示 2ページ先まで表示
                $start_page = $paged - 2;
                $end_page = $paged + 2;

                if($start_page < 1) {
                  $start_page = 1;
                }

                if ($end_page > $total_pages) {
                  $end_page = $total_pages;
                }

                // 最初のページへのリンク
                if( $start_page > 2 ) {
                  echo '<a class="un_news_paging_num" href="./' . $setUrlParam . 'pg=1">1</a>';
                  echo '<span class="un_news_paging_space">...</span>';
                }

                for ($i = $start_page; $i <= $end_page; $i++) {
                  if ($i == $paged) {
                    echo '<span class="un_news_paging_num current" href="#">' . $i . '</span>';
                  } else {
                    echo '<a class="un_news_paging_num" href="./' . $setUrlParam . 'pg=' . $i . '">' . $i . '</a>';
                  }
                }

                // 最終ページへのリンク
                if( $end_page < $total_pages - 1 ) {
                  echo '<span class="un_news_paging_space">...</span>';
                  echo '<a class="un_news_paging_num" href="./' . $setUrlParam . 'pg=' . $total_pages . '">' . $total_pages . '</a>';
                }
                ?>
              </div>
              
              <?php
              // 1ページ目の場合は「<」を表示しない
              if ($paged != $total_pages):
                $next_paged = $paged + 1;
              ?>
              <a class="un_news_paging_next" href="./<?php echo $setUrlParam; ?>pg=<?php echo $next_paged; ?>"><img src="<?php echo $theme_directory; ?>/assets/images/news/next.svg" alt="NEXT" width="" height=""></a>
              <?php
              endif;
              endif;
              ?>
            </div>
          </div>
        </section>
        
        <!-- CONTACT-->
        <?php include('parts/contact.php'); ?>

        <!-- FOOTER-->
        <?php include('parts/footer.php'); ?>

      </article>
    </main>

    <?php wp_footer(); ?>
  </body>
</html>