
<?php

/*
Template Name: Contact
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
    <link rel="stylesheet" type="text/css" href="<?php echo $theme_directory; ?>/assets/css/contact/index.css"><link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200..900&display=swap" rel="stylesheet">
    <!-- 各頁用 JS-->
    <script src="<?php echo $theme_directory; ?>/assets/js/contact/index.js"></script>

    <script type="text/javascript" src="//webfonts.xserver.jp/js/xserver.js"></script>

    <?php wp_head(); ?>
    <!-- <style>
	    .un_form_item >p{
		    width: 244px;
	    }
	    textarea{
		    font-family: A-OTF A1明朝 Std,A1 Mincho,serif!important;
	    }
	    .un_form_submit:first-child{
		    display: block;
	    }
	    .wpcf7-spinner{
		    display: none;
	    }
    </style> -->
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
            <div class="un_showcase_ttl"><img class="en" src="<?php echo $theme_directory; ?>/assets/images/contact/showcase_ttl.svg" alt="CONTACT" width="174" height="26"><br><img class="jp" src="<?php echo $theme_directory; ?>/assets/images/contact/showcase_ttl_jp.svg" alt="お問い合わせ" width="110" height="16"></div>
            <div class="un_showcase_bg">
              <picture>
                <!-- <source srcset="<?php echo $theme_directory; ?>/assets/images/contact/showcase_bg_sp.webp" type="image/webp" media="(max-width: 767px)"> -->
                <source srcset="<?php echo $theme_directory; ?>/assets/images/contact/showcase_bg_sp.jpg" media="(max-width: 767px)">
                <!-- <source srcset="<?php echo $theme_directory; ?>/assets/images/contact/showcase_bg@2x.webp" type="image/webp"> -->
                <source srcset="<?php echo $theme_directory; ?>/assets/images/contact/showcase_bg.jpg 1x, <?php echo $theme_directory; ?>/assets/images/contact/showcase_bg@2x.jpg 2x"><img src="<?php echo $theme_directory; ?>/assets/images/contact/showcase_bg.jpg" alt="" width="" height="">
              </picture>
            </div>
          </div>
          <div class="un_form">
            <p class="un_form_lead">
              インテリア・空間デザインに関する<br class="sp">ご依頼、その他ご質問など<br class="sp">お気軽にお問い合わせ下さい。<br>
              お問い合わせはお電話または<br class="sp">下記フォームにご記入ください。<br>
              *がついているものは必須項目です。
            </p>
            
            <?php the_content(); ?>

          </div>
          <div class="un_banner">
            <div class="un_banner_front">
              <h3 class="un_banner_ttl">お電話でのお問い合わせ</h3><a class="un_banner_num" href="tel:076-237-7725"><img src="<?php echo $theme_directory; ?>/assets/images/contact/banner_tel.svg" alt="" width="337" height="30"></a>
              <p class="un_banner_txt">
                 営業時間 08:30-17:30　  定休日 土日祝日</p>
            </div>
            <div class="un_banner_bg"> 
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/contact/banner_bg_sp.webp" type="image/webp" media="(max-width: 767px)">
                <source srcset="<?php echo $theme_directory; ?>/assets/images/contact/banner_bg_sp.jpg" media="(max-width: 767px)">
                <source srcset="<?php echo $theme_directory; ?>/assets/images/contact/banner_bg@2x.webp" type="image/webp">
                <source srcset="<?php echo $theme_directory; ?>/assets/images/contact/banner_bg.jpg 1x, <?php echo $theme_directory; ?>/assets/images/contact/banner_bg@2x.jpg 2x"><img src="<?php echo $theme_directory; ?>/assets/images/contact/banner_bg.jpg" alt="" width="" height="">
              </picture>
            </div>
          </div>
        </section>

        <!-- FOOTER-->
        <?php include('parts/footer.php'); ?>

      </article>
    </main>

    <?php wp_footer(); ?>
  </body>
</html>