
<?php

/*
Template Name: Message
*/

$theme_directory = get_template_directory_uri();
$home_url = esc_url( home_url( '/' ) );
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
    <link rel="stylesheet" type="text/css" href="<?php echo $theme_directory; ?>/assets/css/message/index.css"><link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200..900&display=swap" rel="stylesheet">
    <!-- 各頁用 JS-->
    <script src="<?php echo $theme_directory; ?>/assets/js/message/index.js"></script>

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
        <div class="un_fixbg"> <img src="<?php echo $theme_directory; ?>/assets/images/message/bg_fix.svg" alt="" width="" height=""></div>
        <section id="showcase">
          <div class="un_showcase">
            <div class="un_showcase_front">
              <div class="un_showcase_ttl"><img class="en" src="<?php echo $theme_directory; ?>/assets/images/message/showcase_ttl.svg" alt="TOP MESSAGE" width="" height=""><br>トップメッセージ</div>
              <div class="un_showcase_copy pc tab">
                空間ニーズに<br>
                ワンストップで応える<br>
                強固なグループ力を<br>
                最大限に引き出すために。
              </div>
            </div>
            <div class="un_showcase_bg">
              <picture>
                <!-- <source srcset="<?php echo $theme_directory; ?>/assets/images/message/showcase_bg_sp.webp" type="image/webp" media="(max-width: 767px)"> -->
                <source srcset="<?php echo $theme_directory; ?>/assets/images/message/showcase_bg_sp.jpg" media="(max-width: 767px)">
                <!-- <source srcset="<?php echo $theme_directory; ?>/assets/images/message/showcase_bg@2x.webp" type="image/webp"> -->
                <source srcset="<?php echo $theme_directory; ?>/assets/images/message/showcase_bg.jpg 1x, <?php echo $theme_directory; ?>/assets/images/message/showcase_bg@2x.jpg 2x"><img src="<?php echo $theme_directory; ?>/assets/images/message/showcase_bg.jpg" alt="" width="" height="">
              </picture>
            </div>
          </div>
        </section>
        <section id="message">
          <div class="un_message"> 
            <div class="un_message_copy sp">
              空間ニーズに<br>
              ワンストップで応える<br>
              強固なグループ力を<br>
              最大限に引き出すために。
            </div>
            <p class="un_message_txt">S.I.Nは『Space Innovation Network』の<br class="sp">頭文字をとった名称です。<br>私たちはその名のとおり「空間を<br class="sp">イノベーションする」ために、<br>メーカー・商社・物流・建設・卸売などの<br class="sp">多彩な機能を有するグループです。<br>グループ各社をネットワーク化することで、<br>空間に関するあらゆるニーズに<br class="sp">ワンストップで対応する。<br>そんな一気通貫を可能にした<br class="sp">企業グループは、全国を見渡しても<br class="sp">希少といえるでしょう。<br>もとより、単なる総合性を<br class="sp">誇示するつもりはありません。<br>グループ各社はそれぞれの領域における専門事業者として、<br>それぞれのお客様のご要望に<br class="sp">スペシャリストとしてお応えしています。</p>
            <p class="un_message_txt">2024年4月に設立した<br class="sp">S.I.Nホールディングス株式会社は、<br>グループネットワークの扇の要を担います。<br>個性を持ったグループ各社同士の連携を<br class="sp">さらに強固にして、<br class="pc tab">専門性と総合力を<br class="sp">よりいっそう発揮できる<br class="sp">ネットワークを形成していきます。<br>S.I.Nホールディングスを要にした<br class="sp">新しいグループ体制で、<br class="pc tab">これまで以上に<br class="sp">お客様・お取引先様の期待に<br class="sp">お応えしていく所存です。<br>どうぞ皆様のご指導とご鞭撻を<br class="sp">よろしくお願いいたします。</p>
            <p class="un_message_name"> <img class="role" src="<?php echo $theme_directory; ?>/assets/images/message/message_role.svg" alt="" width="" height=""><br><img class="name" src="<?php echo $theme_directory; ?>/assets/images/message/message_name.svg" alt="" width="" height=""></p>
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