
<?php
$theme_directory = get_template_directory_uri();
$home_url = esc_url( home_url( '/' ) );


$date = get_field('date');

// カスタムタクソノミーnews_catのタームを取得
$terms = get_the_terms($post->ID, 'news_cat');
if (!empty($terms) && is_array($terms)) {
	$term = $terms[0];
	$term_name = isset($term->name) ? $term->name : '';
} else {
	$term_name = '';
}

$title = get_field('title');
$mainimg = get_field('mainimg');
$honbun = get_field('honbun');
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
    <link rel="stylesheet" type="text/css" href="<?php echo $theme_directory; ?>/assets/css/news/detail/index.css"><link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200..900&display=swap" rel="stylesheet">
    <!-- 各頁用 JS-->
    <script src="<?php echo $theme_directory; ?>/assets/js/news/detail/index.js"></script>

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
        <section id="news">
          <div class="un_news">
            <div class="un_news_info"><span class="date"><?php echo $date; ?></span><span class="cat"><?php echo $term_name; ?></span></div>
            <h1 class="un_news_ttl"><?php echo $title; ?></h1>
            <div class="un_news_body">
              <div class="un_news_mainimg"><img src="<?php echo $mainimg; ?>" alt="" width="" height=""></div>
              <div class="un_news_content">
                <?php echo $honbun; ?>
              </div>
            </div>
            <div class="un_news_paging">
              <?php
              $prev_post = get_previous_post();
              $next_post = get_next_post();

              if($prev_post) {
                $prev_post = get_permalink($prev_post->ID);
              }
              if($next_post) {
                $next_post = get_permalink($next_post->ID);
              }
              ?>

              <?php if($prev_post): ?>
              <a class="un_news_paging_prev" href="<?php echo $prev_post; ?>"><img src="<?php echo $theme_directory; ?>/assets/images/news/prev.svg" alt="PREV" width="" height=""></a>
              <?php endif; ?>

              <a class="un_news_paging_back" href="../">一覧へ戻る</a>

              <?php if($next_post): ?>
              <a class="un_news_paging_next" href="<?php echo $next_post; ?>"><img src="<?php echo $theme_directory; ?>/assets/images/news/next.svg" alt="NEXT" width="" height=""></a>
              <?php endif; ?>
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