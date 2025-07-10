
<?php

/*
Template Name: Business
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
    <link rel="stylesheet" type="text/css" href="<?php echo $theme_directory; ?>/assets/css/business/index.css"><link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200..900&display=swap" rel="stylesheet">
    <!-- 各頁用 JS-->
    <script src="<?php echo $theme_directory; ?>/assets/js/business/index.js"></script>

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
            <div class="un_showcase_ttl"><img class="en" src="<?php echo $theme_directory; ?>/assets/images/business/showcase_ttl.svg" alt="S.I.N BUSINESS" width="255" height="26"><br><img class="jp" src="<?php echo $theme_directory; ?>/assets/images/business/showcase_ttl_jp.svg" alt="事業紹介" width="74" height="16"></div>
            <div class="un_showcase_bg">
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/business/showcase_bg_sp.webp" type="image/webp" media="(max-width: 767px)">
                <source srcset="<?php echo $theme_directory; ?>/assets/images/business/showcase_bg_sp.jpg" media="(max-width: 767px)">
                <source srcset="<?php echo $theme_directory; ?>/assets/images/business/showcase_bg@2x.webp" type="image/webp">
                <source srcset="<?php echo $theme_directory; ?>/assets/images/business/showcase_bg.jpg 1x, <?php echo $theme_directory; ?>/assets/images/business/showcase_bg@2x.jpg 2x"><img src="<?php echo $theme_directory; ?>/assets/images/business/showcase_bg.jpg" alt="" width="" height="">
              </picture>
            </div>
          </div>
        </section>
        <section id="sidemenu"> 
          <div class="un_group">
            <div class="un_group_nav"> 
              <div class="un_group_nav_ttl"> 
                <picture>
                  <source srcset="<?php echo $theme_directory; ?>/assets/images/business/group_ttl_sp.svg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/business/group_ttl.svg" alt="S.I.N GROUP COMPANY" width="432" height="27">
                </picture>
              </div>
              <ul> 
                <li> <a><img class="name1" src="<?php echo $theme_directory; ?>/assets/images/business/group_name1.svg" alt="ユニベール株式会社" width="160" height="17"></a></li>
                <li> <a><img class="name2" src="<?php echo $theme_directory; ?>/assets/images/business/group_name2.svg" alt="ユニベールサービス株式会社" width="243" height="17"></a></li>
                <li> <a><img class="name3" src="<?php echo $theme_directory; ?>/assets/images/business/group_name3.svg" alt="株式会社ルームワン" width="157" height="16"></a></li>
              </ul>
            </div>
          </div>
        </section>
        <section id="anc1">
          <div class="un_company">
            <div class="un_company_head">
              <div class="un_company_logo"> 
                <picture>
                  <source srcset="<?php echo $theme_directory; ?>/assets/images/business/group1_logo_sp.webp" type="image/webp" media="(max-width: 767px)">
                  <source srcset="<?php echo $theme_directory; ?>/assets/images/business/group1_logo_sp.png" media="(max-width: 767px)">
                  <source srcset="<?php echo $theme_directory; ?>/assets/images/business/group1_logo@2x.webp" type="image/webp">
                  <source srcset="<?php echo $theme_directory; ?>/assets/images/business/group1_logo.png 1x, <?php echo $theme_directory; ?>/assets/images/business/group1_logo@2x.png 2x"><img class="group1" src="<?php echo $theme_directory; ?>/assets/images/business/group1_logo.png" alt="" width="150" height="158">
                </picture>
              </div>
              <div class="un_company_bg">
                <picture>
                  <source srcset="<?php echo $theme_directory; ?>/assets/images/business/group1_img_sp.webp" type="image/webp" media="(max-width: 767px)">
                  <source srcset="<?php echo $theme_directory; ?>/assets/images/business/group1_img_sp.jpg" media="(max-width: 767px)">
                  <source srcset="<?php echo $theme_directory; ?>/assets/images/business/group1_img@2x.webp" type="image/webp">
                  <source srcset="<?php echo $theme_directory; ?>/assets/images/business/group1_img.jpg 1x, <?php echo $theme_directory; ?>/assets/images/business/group1_img@2x.jpg 2x"><img src="<?php echo $theme_directory; ?>/assets/images/business/group1_img.jpg" alt="" width="" height="">
                </picture>
              </div>
            </div>
            <div class="un_company_body">
              <div class="un_company_ttl">
                <picture> 
                  <source srcset="<?php echo $theme_directory; ?>/assets/images/business/group1_ttl_sp.svg" media="(max-width: 767px)"><img class="group1" src="<?php echo $theme_directory; ?>/assets/images/business/group1_ttl.svg" alt="空間のワンストップソリューションを提案。" width="606" height="27">
                </picture>
              </div>
              <div class="un_company_name">ユニベール株式会社</div>
              <div class="un_company_bar"> <img class="group1" src="<?php echo $theme_directory; ?>/assets/images/business/group_bar.svg" alt="" width="30" height="2"></div>
              <p class="un_company_txt">
                時代の先端を彩るカーテンを中心としたインテリアファブリックを提供。<br>
                企画開発から製造、物流・貿易支援まで一貫したサービスにより、<br class="pc tab">市場リサーチを基にした商品企画と効率的な物流システムで、お客様の課題解決をサポートします。<br>
                グループ各社とのシナジー効果を最大限に発揮し、カーテンのみにあらず、<br class="pc tab">インテリアのワンストップソリューション企業として、日本国内のみならず海外市場へのビジネスを拡大していきます。
              </p>
              <div class="un_company_btn bl_rectBtn bl_rectBtn--gray bl_rectBtn--center bl_rectBtn--wide bl_rectBtn--overBlack"><a href="https://www.univers-hd.co.jp" target="_blank"><span>コーポレートサイト</span></a></div>
            </div>
          </div>
        </section>
        <section id="anc2">
          <div class="un_company">
            <div class="un_company_head">
              <div class="un_company_logo"> 
                <picture>
                  <source srcset="<?php echo $theme_directory; ?>/assets/images/business/group2_logo_sp.webp" type="image/webp" media="(max-width: 767px)">
                  <source srcset="<?php echo $theme_directory; ?>/assets/images/business/group2_logo_sp.png" media="(max-width: 767px)">
                  <source srcset="<?php echo $theme_directory; ?>/assets/images/business/group2_logo@2x.webp" type="image/webp">
                  <source srcset="<?php echo $theme_directory; ?>/assets/images/business/group2_logo.png 1x, <?php echo $theme_directory; ?>/assets/images/business/group2_logo@2x.png 2x"><img class="group2" src="<?php echo $theme_directory; ?>/assets/images/business/group2_logo.png" alt="" width="231" height="158">
                </picture>
              </div>
              <div class="un_company_bg">
                <picture>
                  <source srcset="<?php echo $theme_directory; ?>/assets/images/business/group2_img_sp.webp" type="image/webp" media="(max-width: 767px)">
                  <source srcset="<?php echo $theme_directory; ?>/assets/images/business/group2_img_sp.jpg" media="(max-width: 767px)">
                  <source srcset="<?php echo $theme_directory; ?>/assets/images/business/group2_img@2x.webp" type="image/webp">
                  <source srcset="<?php echo $theme_directory; ?>/assets/images/business/group2_img.jpg 1x, <?php echo $theme_directory; ?>/assets/images/business/group2_img@2x.jpg 2x"><img src="<?php echo $theme_directory; ?>/assets/images/business/group2_img.jpg" alt="" width="" height="">
                </picture>
              </div>
            </div>
            <div class="un_company_body">
              <div class="un_company_ttl"> 
                <picture>
                  <source srcset="<?php echo $theme_directory; ?>/assets/images/business/group2_ttl_sp.svg" media="(max-width: 767px)"><img class="group2" src="<?php echo $theme_directory; ?>/assets/images/business/group2_ttl.svg" alt="トータルデザインで独創的な空間を新提案。" width="596" height="28">
                </picture>
              </div>
              <div class="un_company_name">ユニベールサービス株式会社</div>
              <div class="un_company_bar"> <img class="group2" src="<?php echo $theme_directory; ?>/assets/images/business/group_bar.svg" alt="" width="30" height="2"></div>
              <p class="un_company_txt">
                豊富な経験と地域特性に基づき、壁、床、窓の内装工事を通じて創造的な空間を演出。<br>
                幅広い素材を用いて、クオリティとデザインを追求します。<br>
                家具や建築工事、デザイン提案もトータルにサポートし、お客様のニーズに応えます。<br>
                東北、新潟、北陸にそれぞれ本社を構え、<br class="pc tab">地域特性や環境変化に真摯に向き合い、広い事業範囲を実現いたします。
              </p>
              <div class="un_company_btn bl_rectBtn bl_rectBtn--gray bl_rectBtn--center bl_rectBtn--wide bl_rectBtn--overBlack"><a href="https://univers-service.co.jp" target="_blank"><span>コーポレートサイト</span></a></div>
            </div>
          </div>
        </section>
        <section id="anc3">
          <div class="un_company">
            <div class="un_company_head">
              <div class="un_company_logo"> 
                <picture>
                  <source srcset="<?php echo $theme_directory; ?>/assets/images/business/group3_logo_sp.webp" type="image/webp" media="(max-width: 767px)">
                  <source srcset="<?php echo $theme_directory; ?>/assets/images/business/group3_logo_sp.png" media="(max-width: 767px)">
                  <source srcset="<?php echo $theme_directory; ?>/assets/images/business/group3_logo@2x.webp" type="image/webp">
                  <source srcset="<?php echo $theme_directory; ?>/assets/images/business/group3_logo.png 1x, <?php echo $theme_directory; ?>/assets/images/business/group3_logo@2x.png 2x"><img class="group3" src="<?php echo $theme_directory; ?>/assets/images/business/group3_logo.png" alt="" width="308" height="116">
                </picture>
              </div>
              <div class="un_company_bg">
                <picture>
                  <source srcset="<?php echo $theme_directory; ?>/assets/images/business/group3_img_sp.webp" type="image/webp" media="(max-width: 767px)">
                  <source srcset="<?php echo $theme_directory; ?>/assets/images/business/group3_img_sp.jpg" media="(max-width: 767px)">
                  <source srcset="<?php echo $theme_directory; ?>/assets/images/business/group3_img@2x.webp" type="image/webp">
                  <source srcset="<?php echo $theme_directory; ?>/assets/images/business/group3_img.jpg 1x, <?php echo $theme_directory; ?>/assets/images/business/group3_img@2x.jpg 2x"><img src="<?php echo $theme_directory; ?>/assets/images/business/group3_img.jpg" alt="" width="" height="">
                </picture>
              </div>
            </div>
            <div class="un_company_body">
              <div class="un_company_ttl"> 
                <picture>
                  <source srcset="<?php echo $theme_directory; ?>/assets/images/business/group3_ttl_sp.svg" media="(max-width: 767px)"><img class="group3" src="<?php echo $theme_directory; ?>/assets/images/business/group3_ttl.svg" alt="理想の空間を実現させるスペシャリスト" width="556" height="27">
                </picture>
              </div>
              <div class="un_company_name"> <img class="group3" src="<?php echo $theme_directory; ?>/assets/images/business/group3_name.svg" alt="株式会社ルームワン" width="191" height="18"></div>
              <div class="un_company_bar"> <img class="group3" src="<?php echo $theme_directory; ?>/assets/images/business/group_bar.svg" alt="" width="30" height="2"></div>
              <p class="un_company_txt">
                オーダーカーテンの専門店として日本各地に展開。<br class="pc tab">豊富な知識と経験を持ち、お客様の理想の暮らしを実現するために全力でサポートします。<br>
                常にお客様の視点に立ち、信頼できる商品提案と窓まわり施工サービスを提供するために、<br class="pc tab">環境変化に柔軟に対応し、持続的な改革を行います。
              </p>
              <div class="un_company_btn bl_rectBtn bl_rectBtn--gray bl_rectBtn--center bl_rectBtn--wide bl_rectBtn--overBlack"><a href="https://room1.jp" target="_blank"><span>コーポレートサイト</span></a></div>
            </div>
          </div>
        </section>
        <section id="last"> 
          <div class="un_last"> 
            <div class="un_last_front">
              <div class="un_last_ttl">
                <picture>
                  <source srcset="<?php echo $theme_directory; ?>/assets/images/business/last_ttl_sp.svg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/business/last_ttl.svg" alt="S.I.N is GROWING." width="627" height="52">
                </picture>
              </div>
              <div class="un_last_txt"> 
                <picture>
                  <source srcset="<?php echo $theme_directory; ?>/assets/images/business/last_txt_sp.svg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/business/last_txt.svg" alt="S.I.Nグループ各社との連携により、国内はもちろん、海外でも活躍しています。" width="498" height="71">
                </picture>
              </div>
              <div class="un_last_btns"><a class="un_last_btn" href="https://uci-interior.com/">PT.UNIVERS CREATIONS INDONESIA<img src="<?php echo $theme_directory; ?>/assets/images/common/icon_blank.svg" alt="" width="12" height="10"></a><a class="un_last_btn" href="http://jp.univers.com.cn/">優昵蓓楽(無錫)装飾製品有限公司<img src="<?php echo $theme_directory; ?>/assets/images/common/icon_blank.svg" alt="" width="12" height="10"></a></div>
            </div>
            <div class="un_last_bg">
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/business/last_img_sp.webp" type="image/webp" media="(max-width: 767px)">
                <source srcset="<?php echo $theme_directory; ?>/assets/images/business/last_img_sp.jpg" media="(max-width: 767px)">
                <source srcset="<?php echo $theme_directory; ?>/assets/images/business/last_img@2x.webp" type="image/webp">
                <source srcset="<?php echo $theme_directory; ?>/assets/images/business/last_img.jpg 1x, <?php echo $theme_directory; ?>/assets/images/business/last_img@2x.jpg 2x"><img src="<?php echo $theme_directory; ?>/assets/images/business/last_img.jpg" alt="" width="" height="">
              </picture>
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