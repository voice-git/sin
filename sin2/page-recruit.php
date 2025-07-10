<?php

/*
Template Name: Recruit
*/

$theme_directory = get_template_directory_uri();
$home_url = esc_url(home_url('/'));
?>

<!DOCTYPE html>
<html lang="ja">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-MMKGK4CXZC"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
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
  <link rel="stylesheet" type="text/css" href="<?php echo $theme_directory; ?>/assets/css/recruit/index.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200..900&display=swap" rel="stylesheet">
  <!-- 各頁用 JS-->
  <script src="<?php echo $theme_directory; ?>/assets/js/recruit/index.js"></script>

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
      <section id="top">
        <div class="un_top">
          <div class="un_top_bg">
            <picture>
              <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/top_bg_sp.webp" type="image/webp" media="(max-width: 767px)">
              <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/top_bg_sp.jpg" media="(max-width: 767px)">
              <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/top_bg2@2x.webp" type="image/webp">
              <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/top_bg2.jpg 1x, <?php echo $theme_directory; ?>/assets/images/recruit/top_bg2@2x.jpg 2x"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/top_bg2.jpg" alt="" width="" height="">
            </picture>
          </div>
          <h1 class="un_top_ttl">
            <picture>
              <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/top_copy_sp.webp" type="image/webp" media="(max-width: 767px)">
              <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/top_copy_sp.png" media="(max-width: 767px)">
              <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/top_copy@2x.webp" type="image/webp">
              <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/top_copy.png 1x, <?php echo $theme_directory; ?>/assets/images/recruit/top_copy@2x.png 2x"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/top_copy.png" alt="飛びこえろ！" width="" height="">
            </picture>
          </h1>
          <div class="un_top_en"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/top_en.svg" alt="S.I.N GROUP 2025 RECRUIT" width="349" height="20"></div>
          <a class="un_top_toguideline" href="#guideline">
            <picture>
              <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/guideline_btn_sp.webp" type="image/webp" media="(max-width: 767px)">
              <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/guideline_btn_sp.png" media="(max-width: 767px)">
              <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/guideline_btn@2x.webp" type="image/webp">
              <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/guideline_btn.png 1x, <?php echo $theme_directory; ?>/assets/images/recruit/guideline_btn@2x.png 2x"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/guideline_btn.png" alt="" width="" height="">
            </picture>
          </a>
          <div class="un_top_copy2 mod_slideUp"> <img src="<?php echo $theme_directory; ?>/assets/images/recruit/top_copy2.svg" alt="空間の、業界の、これまでの常識を飛び越えろ。" width="563" height="315"></div>
          <p class="un_top_txt mod_slideUp">
            これまで常識とされていたことは、<br>
            変えてはいけないタブーなんだろうか？<br>
            これまで無理だとされていたことは、<br>
            やってはいけない<br class="sp">アンタッチャブルなんだろうか？<br>
            そんなことはないです。<br>
            これまでの常識は、<br class="sp">あたらしい常識に変わりたがっている。<br>
            従来の方法や慣習は、<br class="sp">ちがう何かに進化したがっている。<br>
            S.I.N.グループは<br class="sp">『空間をイノベーションするネットワーク』。<br>
            求めているのは、いっしょに<br class="sp">イノベーションを起こせる仲間です。<br>
            きっと、あなたにもできます。<br class="sp">あなたに限界はないです。<br>
            私たちとなら、常識も、<br class="sp">限界も、飛び超えられます。
          </p>
          <div class="un_top_illust mod_zoomIn"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/top_illust.svg" alt="YOU HAVE INNOVATION MIND" width="" height=""></div>
        </div>
      </section>
      <section id="episode">
        <div class="un_episode">
          <div class="un_episode_illust mod_zoomIn"> <img src="<?php echo $theme_directory; ?>/assets/images/recruit/episode_illust.svg" alt="EPISODE" width="" height=""></div>
          <h2 class="un_episode_ttl mod_slideUp">イノベーション思考が引き起こした<br><span>常識を飛びこえた<br class="sp">エピソード</span></h2>
          <div class="un_episode_list">
            <a class="un_episode_item" href="./episode/#episode1">
              <div class="un_episode_item_bg">
                <picture>
                  <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/episode_img1_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/episode_img1@2x.jpg" alt="" width="" height="">
                </picture>
              </div>
              <div class="un_episode_item_front">
                <h3 class="un_episode_item_ttl mod_slideUpSolo">　施工を巻き込め、<br>　常識破りの営業スタイル。</h3>
                <div class="un_episode_item_en mod_slideUpSolo"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/episode_en.svg" alt="INNOVATION MIND BY" width="" height=""></div>
                <div class="un_episode_item_person">
                  <div class="un_episode_item_company mod_slideUpSolo">ユニベールサービス株式会社（新潟）<br class="sp"> 営業部 新潟営業1課</div>
                  <div class="un_episode_item_name mod_slideUpSolo">阿部 佑紀</div>
                </div>
              </div>
            </a><a class="un_episode_item" href="./episode/#episode2">
              <div class="un_episode_item_bg">
                <picture>
                  <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/episode_img2_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/episode_img2@2x.jpg" alt="" width="" height="">
                </picture>
              </div>
              <div class="un_episode_item_front">
                <h3 class="un_episode_item_ttl mod_slideUpSolo">　戦略的に勝ち取った現場、<br>　発注者が幼馴染だと判明。</h3>
                <div class="un_episode_item_en mod_slideUpSolo"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/episode_en.svg" alt="INNOVATION MIND BY" width="" height=""></div>
                <div class="un_episode_item_person">
                  <div class="un_episode_item_company mod_slideUpSolo">ユニベールサービス株式会社（新潟） <br class="sp">営業部 長岡営業所</div>
                  <div class="un_episode_item_name mod_slideUpSolo">岡元 伶王</div>
                </div>
              </div>
            </a><a class="un_episode_item" href="./episode/#episode3">
              <div class="un_episode_item_bg">
                <picture>
                  <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/episode_img3_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/episode_img3@2x.jpg" alt="" width="" height="">
                </picture>
              </div>
              <div class="un_episode_item_front">
                <h3 class="un_episode_item_ttl mod_slideUpSolo">すべての作業員を身軽にした<br>　現場のDX化。</h3>
                <div class="un_episode_item_en mod_slideUpSolo"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/episode_en.svg" alt="INNOVATION MIND BY" width="" height=""></div>
                <div class="un_episode_item_person">
                  <div class="un_episode_item_company mod_slideUpSolo">ユニベールサービス株式会社（北陸） <br class="sp">営業部 石川営業所 建装工事課</div>
                  <div class="un_episode_item_name mod_slideUpSolo">岡嶋 翼</div>
                </div>
              </div>
            </a><a class="un_episode_item" href="./episode/#episode4">
              <div class="un_episode_item_bg">
                <picture>
                  <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/episode_img4_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/episode_img4@2x.jpg" alt="" width="" height="">
                </picture>
              </div>
              <div class="un_episode_item_front">
                <h3 class="un_episode_item_ttl mod_slideUpSolo"> 　商談終わりの雑談が、<br>　新商品採用のはじまり。</h3>
                <div class="un_episode_item_en mod_slideUpSolo"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/episode_en.svg" alt="INNOVATION MIND BY" width="" height=""></div>
                <div class="un_episode_item_person">
                  <div class="un_episode_item_company mod_slideUpSolo">ユニベール株式会社（金沢）<br class="sp">営業部 営業2課</div>
                  <div class="un_episode_item_name mod_slideUpSolo">加藤 椋</div>
                </div>
              </div>
            </a><a class="un_episode_item" href="./episode/#episode5">
              <div class="un_episode_item_bg">
                <picture>
                  <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/episode_img5_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/episode_img5@2x.jpg" alt="" width="" height="">
                </picture>
              </div>
              <div class="un_episode_item_front">
                <h3 class="un_episode_item_ttl mod_slideUpSolo"> 感情の糸を紡ぐ、<br>「信頼のジャンケン」。</h3>
                <div class="un_episode_item_en mod_slideUpSolo"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/episode_en.svg" alt="INNOVATION MIND BY" width="" height=""></div>
                <div class="un_episode_item_person">
                  <div class="un_episode_item_company mod_slideUpSolo">株式会社ルームワン（千葉） <br class="sp">東関東ブロック 千葉店</div>
                  <div class="un_episode_item_name mod_slideUpSolo">岸波 恵也</div>
                </div>
              </div>
            </a><a class="un_episode_item" href="./episode/#episode6">
              <div class="un_episode_item_bg">
                <picture>
                  <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/episode_img6_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/episode_img6@2x.jpg" alt="" width="" height="">
                </picture>
              </div>
              <div class="un_episode_item_front">
                <h3 class="un_episode_item_ttl mod_slideUpSolo">社員300名の<br>　勤怠改善を行いました。</h3>
                <div class="un_episode_item_en mod_slideUpSolo"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/episode_en.svg" alt="INNOVATION MIND BY" width="" height=""></div>
                <div class="un_episode_item_person">
                  <div class="un_episode_item_company mod_slideUpSolo">エスアイエヌホールディングス株式会社（金沢） <br class="sp">人事部 人事労務課</div>
                  <div class="un_episode_item_name mod_slideUpSolo">桑原 にじか</div>
                </div>
              </div>
            </a><a class="un_episode_item" href="./episode/#episode7">
              <div class="un_episode_item_bg">
                <picture>
                  <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/episode_img7_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/episode_img7@2x.jpg" alt="" width="" height="">
                </picture>
              </div>
              <div class="un_episode_item_front">
                <h3 class="un_episode_item_ttl mod_slideUpSolo">チームワークが良すぎて<br>　辞めた社員が戻ってきた。</h3>
                <div class="un_episode_item_en mod_slideUpSolo"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/episode_en.svg" alt="INNOVATION MIND BY" width="" height=""></div>
                <div class="un_episode_item_person">
                  <div class="un_episode_item_company mod_slideUpSolo">ユニベールサービス株式会社（北陸） <br class="sp">営業部 シンコール営業課</div>
                  <div class="un_episode_item_name mod_slideUpSolo">高 直弘</div>
                </div>
              </div>
            </a><a class="un_episode_item" href="./episode/#episode8">
              <div class="un_episode_item_bg">
                <picture>
                  <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/episode_img8_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/episode_img8@2x.jpg" alt="" width="" height="">
                </picture>
              </div>
              <div class="un_episode_item_front">
                <h3 class="un_episode_item_ttl mod_slideUpSolo">「イメージと違う！」<br>　一瞬で壁を無くした日焼け。</h3>
                <div class="un_episode_item_en mod_slideUpSolo"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/episode_en.svg" alt="INNOVATION MIND BY" width="" height=""></div>
                <div class="un_episode_item_person">
                  <div class="un_episode_item_company mod_slideUpSolo">ユニベールサービス株式会社（北陸） <br class="sp">デザイン研究所 シンコール販売促進課</div>
                  <div class="un_episode_item_name mod_slideUpSolo">山瀬 都々美</div>
                </div>
              </div>
            </a><a class="un_episode_item" href="./episode/#episode9">
              <div class="un_episode_item_bg">
                <picture>
                  <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/episode_img9_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/episode_img9@2x.jpg" alt="" width="" height="">
                </picture>
              </div>
              <div class="un_episode_item_front">
                <h3 class="un_episode_item_ttl mod_slideUpSolo">　飲みの席で商談開始。<br>　3分で1000万円の受注。</h3>
                <div class="un_episode_item_en mod_slideUpSolo"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/episode_en.svg" alt="INNOVATION MIND BY" width="" height=""></div>
                <div class="un_episode_item_person">
                  <div class="un_episode_item_company mod_slideUpSolo">ユニベールサービス株式会社（東北） <br class="sp">シンコール 仙台営業３課</div>
                  <div class="un_episode_item_name mod_slideUpSolo">熊谷 くらら</div>
                </div>
              </div>
            </a><a class="un_episode_item" href="./episode/#episode10">
              <div class="un_episode_item_bg">
                <picture>
                  <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/episode_img10_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/episode_img10@2x.jpg" alt="" width="" height="">
                </picture>
              </div>
              <div class="un_episode_item_front">
                <h3 class="un_episode_item_ttl mod_slideUpSolo">顧客ニーズに合っていれば<br>　他社商材も提案する。</h3>
                <div class="un_episode_item_en mod_slideUpSolo"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/episode_en.svg" alt="INNOVATION MIND BY" width="" height=""></div>
                <div class="un_episode_item_person">
                  <div class="un_episode_item_company mod_slideUpSolo">ユニベールサービス株式会社（東北） <br class="sp">シンコール 仙台営業１課</div>
                  <div class="un_episode_item_name mod_slideUpSolo">文屋 智博</div>
                </div>
              </div>
            </a><a class="un_episode_item" href="./episode/#episode11">
              <div class="un_episode_item_bg">
                <picture>
                  <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/episode_img11_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/episode_img11@2x.jpg" alt="" width="" height="">
                </picture>
              </div>
              <div class="un_episode_item_front">
                <h3 class="un_episode_item_ttl mod_slideUpSolo">他部署にまで影響を与えた<br>　自動化システムの開発。</h3>
                <div class="un_episode_item_en mod_slideUpSolo"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/episode_en.svg" alt="INNOVATION MIND BY" width="" height=""></div>
                <div class="un_episode_item_person">
                  <div class="un_episode_item_company mod_slideUpSolo">エスアイエヌホールディングス株式会社（金沢） <br class="sp">IT戦略部 業務ソリューション課</div>
                  <div class="un_episode_item_name mod_slideUpSolo">澤田 爽</div>
                </div>
              </div>
            </a><a class="un_episode_item" href="./episode/#episode12">
              <div class="un_episode_item_bg">
                <picture>
                  <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/episode_img12_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/episode_img12@2x.jpg" alt="" width="" height="">
                </picture>
              </div>
              <div class="un_episode_item_front">
                <h3 class="un_episode_item_ttl mod_slideUpSolo">固定観念にとらわれない。<br>生地の顔をいかした<br class="sp">カーテン作り。</h3>
                <div class="un_episode_item_en mod_slideUpSolo"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/episode_en.svg" alt="INNOVATION MIND BY" width="" height=""></div>
                <div class="un_episode_item_person">
                  <div class="un_episode_item_company mod_slideUpSolo">ユニベール株式会社（仙台） <br class="sp">生産部 仙台工場</div>
                  <div class="un_episode_item_name mod_slideUpSolo">城戸 伯大</div>
                </div>
              </div>
            </a><a class="un_episode_item" href="./episode/#episode13">
              <div class="un_episode_item_bg">
                <picture>
                  <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/episode_img13_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/episode_img13@2x.jpg" alt="" width="" height="">
                </picture>
              </div>
              <div class="un_episode_item_front">
                <h3 class="un_episode_item_ttl mod_slideUpSolo">他のドライバーも巻き込んだ、<br>現場の働き方大改革。</h3>
                <div class="un_episode_item_en mod_slideUpSolo"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/episode_en.svg" alt="INNOVATION MIND BY" width="" height=""></div>
                <div class="un_episode_item_person">
                  <div class="un_episode_item_company mod_slideUpSolo">株式会社シンコー運輸</div>
                  <div class="un_episode_item_name mod_slideUpSolo">杉本 亜紀</div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </section>
      <!-- インタビューのポップアップ-->
      <div class="un_interviewPop">
        <div class="un_interviewPop_front">
          <div class="un_interviewPop_close"> </div>
          <div class="un_interviewPop_left"> <span></span></div>
          <div class="un_interviewPop_right"><span></span></div>
          <div class="un_interviewPop_list">
            <!-- <div class="un_interviewPop_item">
                <picture>
                  <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/pop_img1_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/pop_img1@2x.jpg" alt="" width="" height="">
                </picture>
              </div> -->

            <div class="un_interviewPop_item">
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/pop_img26_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/pop_img26@2x.jpg" alt="" width="" height="">
              </picture>
            </div>
            <div class="un_interviewPop_item">
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/pop_img27_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/pop_img27@2x.jpg" alt="" width="" height="">
              </picture>
            </div>
            <div class="un_interviewPop_item">
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/pop_img28_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/pop_img28@2x.jpg" alt="" width="" height="">
              </picture>
            </div>

            <div class="un_interviewPop_item">
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/pop_img25_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/pop_img25@2x.jpg" alt="" width="" height="">
              </picture>
            </div>

            <div class="un_interviewPop_item">
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/pop_img2_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/pop_img2@2x.jpg" alt="" width="" height="">
              </picture>
            </div>
            <div class="un_interviewPop_item">
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/pop_img3_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/pop_img3@2x.jpg" alt="" width="" height="">
              </picture>
            </div>
            <div class="un_interviewPop_item">
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/pop_img4_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/pop_img4@2x.jpg" alt="" width="" height="">
              </picture>
            </div>
            <div class="un_interviewPop_item">
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/pop_img5_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/pop_img5@2x.jpg" alt="" width="" height="">
              </picture>
            </div>
            <div class="un_interviewPop_item">
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/pop_img6_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/pop_img6@2x.jpg" alt="" width="" height="">
              </picture>
            </div>
            <div class="un_interviewPop_item">
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/pop_img7_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/pop_img7@2x.jpg" alt="" width="" height="">
              </picture>
            </div>
            <div class="un_interviewPop_item">
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/pop_img8_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/pop_img8@2x.jpg" alt="" width="" height="">
              </picture>
            </div>
            <div class="un_interviewPop_item">
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/pop_img9_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/pop_img9@2x.jpg" alt="" width="" height="">
              </picture>
            </div>
            <div class="un_interviewPop_item">
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/pop_img10_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/pop_img10@2x.jpg" alt="" width="" height="">
              </picture>
            </div>
            <div class="un_interviewPop_item">
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/pop_img11_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/pop_img11@2x.jpg" alt="" width="" height="">
              </picture>
            </div>
            <div class="un_interviewPop_item">
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/pop_img12_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/pop_img12@2x.jpg" alt="" width="" height="">
              </picture>
            </div>
            <div class="un_interviewPop_item">
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/pop_img13_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/pop_img13@2x.jpg" alt="" width="" height="">
              </picture>
            </div>
            <div class="un_interviewPop_item">
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/pop_img14_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/pop_img14@2x.jpg" alt="" width="" height="">
              </picture>
            </div>
            <div class="un_interviewPop_item">
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/pop_img15_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/pop_img15@2x.jpg" alt="" width="" height="">
              </picture>
            </div>
            <div class="un_interviewPop_item">
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/pop_img16_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/pop_img16@2x.jpg" alt="" width="" height="">
              </picture>
            </div>
            <div class="un_interviewPop_item">
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/pop_img24_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/pop_img24@2x.jpg" alt="" width="" height="">
              </picture>
            </div>
            <div class="un_interviewPop_item">
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/pop_img18_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/pop_img18@2x.jpg" alt="" width="" height="">
              </picture>
            </div>
            <div class="un_interviewPop_item">
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/pop_img19_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/pop_img19@2x.jpg" alt="" width="" height="">
              </picture>
            </div>
            <div class="un_interviewPop_item">
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/pop_img20_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/pop_img20@2x.jpg" alt="" width="" height="">
              </picture>
            </div>
            <div class="un_interviewPop_item">
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/pop_img21_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/pop_img21@2x.jpg" alt="" width="" height="">
              </picture>
            </div>
            <div class="un_interviewPop_item">
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/pop_img22_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/pop_img22@2x.jpg" alt="" width="" height="">
              </picture>
            </div>
            <div class="un_interviewPop_item">
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/pop_img23_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/pop_img23@2x.jpg" alt="" width="" height="">
              </picture>
            </div>
            <div class="un_interviewPop_item">
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/pop_img17_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/pop_img17@2x.jpg" alt="" width="" height="">
              </picture>
            </div>


          </div>
        </div>
        <div class="un_interviewPop_bg"></div>
      </div>
      <section id="interview">
        <div class="un_interview">
          <div class="un_interview_illust mod_zoomIn"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/interview_illust.svg" alt="STAFF INTERVIEW" width="" height=""></div>
          <h2 class="un_interview_ttl mod_slideUp">常識は無視してOK！<br><span>「実現してみたい空間は？」</span></h2>
          <div class="un_interview_list">

            <!-- <div class="un_interview_item un_interview_item--col4 mod_slideUp2 active">
                <picture>
                  <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/interview_img1_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/interview_img1@2x.jpg" alt="" width="" height="">
                </picture>
              </div> -->

            <div class="un_interview_item un_interview_item--col3 mod_slideUp2 active">
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/interview_img26_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/interview_img26@2x.jpg" alt="" width="" height="">
              </picture>
            </div>
            <div class="un_interview_item un_interview_item--col3 mod_slideUp2 active">
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/interview_img27_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/interview_img27@2x.jpg" alt="" width="" height="">
              </picture>
            </div>
            <div class="un_interview_item un_interview_item--col3 mod_slideUp2 active">
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/interview_img28_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/interview_img28@2x.jpg" alt="" width="" height="">
              </picture>
            </div>

            <div class="un_interview_item un_interview_item--col4 mod_slideUp2">
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/interview_img25_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/interview_img25@2x.jpg" alt="" width="" height="">
              </picture>
            </div>

            <div class="un_interview_item un_interview_item--col4 mod_slideUp2">
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/interview_img2_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/interview_img2@2x.jpg" alt="" width="" height="">
              </picture>
            </div>
            <div class="un_interview_item un_interview_item--col4 mod_slideUp2">
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/interview_img3_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/interview_img3@2x.jpg" alt="" width="" height="">
              </picture>
            </div>
            <div class="un_interview_item un_interview_item--col4 mod_slideUp2">
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/interview_img4_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/interview_img4@2x.jpg" alt="" width="" height="">
              </picture>
            </div>
            <div class="un_interview_item un_interview_item--col3 mod_slideUp2">
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/interview_img5_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/interview_img5@2x.jpg" alt="" width="" height="">
              </picture>
            </div>
            <div class="un_interview_item un_interview_item--col3 mod_slideUp2">
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/interview_img6_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/interview_img6@2x.jpg" alt="" width="" height="">
              </picture>
            </div>
            <div class="un_interview_item un_interview_item--col3 mod_slideUp2">
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/interview_img7_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/interview_img7@2x.jpg" alt="" width="" height="">
              </picture>
            </div>
            <div class="un_interview_item un_interview_item--col4 mod_slideUp2">
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/interview_img8_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/interview_img8@2x.jpg" alt="" width="" height="">
              </picture>
            </div>
            <div class="un_interview_item un_interview_item--col4 mod_slideUp2">
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/interview_img9_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/interview_img9@2x.jpg" alt="" width="" height="">
              </picture>
            </div>
            <div class="un_interview_item un_interview_item--col4 mod_slideUp2">
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/interview_img10_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/interview_img10@2x.jpg" alt="" width="" height="">
              </picture>
            </div>
            <div class="un_interview_item un_interview_item--col4 mod_slideUp2">
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/interview_img11_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/interview_img11@2x.jpg" alt="" width="" height="">
              </picture>
            </div>
            <div class="un_interview_item un_interview_item--col3 mod_slideUp2">
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/interview_img12_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/interview_img12@2x.jpg" alt="" width="" height="">
              </picture>
            </div>
            <div class="un_interview_item un_interview_item--col3 mod_slideUp2">
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/interview_img13_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/interview_img13@2x.jpg" alt="" width="" height="">
              </picture>
            </div>
            <div class="un_interview_item un_interview_item--col3 mod_slideUp2">
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/interview_img14_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/interview_img14@2x.jpg" alt="" width="" height="">
              </picture>
            </div>
            <div class="un_interview_item un_interview_item--col4 mod_slideUp2">
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/interview_img15_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/interview_img15@2x.jpg" alt="" width="" height="">
              </picture>
            </div>
            <div class="un_interview_item un_interview_item--col4 mod_slideUp2">
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/interview_img16_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/interview_img16@2x.jpg" alt="" width="" height="">
              </picture>
            </div>
            <div class="un_interview_item un_interview_item--col4 mod_slideUp2">
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/interview_img24_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/interview_img24@2x.jpg" alt="" width="" height="">
              </picture>
            </div>
            <div class="un_interview_item un_interview_item--col4 mod_slideUp2">
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/interview_img18_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/interview_img18@2x.jpg" alt="" width="" height="">
              </picture>
            </div>
            <div class="un_interview_item un_interview_item--col3 mod_slideUp2">
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/interview_img19_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/interview_img19@2x.jpg" alt="" width="" height="">
              </picture>
            </div>
            <div class="un_interview_item un_interview_item--col3 mod_slideUp2">
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/interview_img20_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/interview_img20@2x.jpg" alt="" width="" height="">
              </picture>
            </div>
            <div class="un_interview_item un_interview_item--col3 mod_slideUp2">
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/interview_img21_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/interview_img21@2x.jpg" alt="" width="" height="">
              </picture>
            </div>
            <div class="un_interview_item un_interview_item--col4 mod_slideUp2">
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/interview_img22_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/interview_img22@2x.jpg" alt="" width="" height="">
              </picture>
            </div>
            <div class="un_interview_item un_interview_item--col4 mod_slideUp2">
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/interview_img23_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/interview_img23@2x.jpg" alt="" width="" height="">
              </picture>
            </div>
            <div class="un_interview_item un_interview_item--col4 mod_slideUp2">
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/interview_img17_sp.jpg" media="(max-width: 767px)"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/interview_img17@2x.jpg" alt="" width="" height="">
              </picture>
            </div>


          </div>
          <div class="un_interview_more sp">さらに表示する</div>
        </div>
      </section>
      <div class="un_popup">
        <div class="un_popup_core">
          <div id="video1"></div>
        </div>
        <div class="un_popup_bg"></div>
      </div>
      <section id="banners">
        <div class="un_banners"><a class="un_banner" href="../recruit/message/">
            <picture>
              <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/banner1_sp.webp" type="image/webp" media="(max-width: 767px)">
              <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/banner1_sp.jpg" media="(max-width: 767px)">
              <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/banner1@2x.webp" type="image/webp">
              <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/banner1.jpg 1x, <?php echo $theme_directory; ?>/assets/images/recruit/banner1@2x.jpg 2x"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/banner1.jpg" alt="RECRUITING MESSAGE" width="" height="">
            </picture>
          </a>
          <a class="un_banner un_banner--video" id="movie">
            <picture>
              <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/banner3_sp.webp" type="image/webp" media="(max-width: 767px)">
              <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/banner3_sp.jpg" media="(max-width: 767px)">
              <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/banner3@2x.webp" type="image/webp">
              <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/banner3.jpg 1x, <?php echo $theme_directory; ?>/assets/images/recruit/banner3@2x.jpg 2x"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/banner3.jpg" alt="S.I.N BRAND MOVIE" width="" height="">
            </picture>
          </a>
        </div>
        <!-- <a class="un_banner" href="../recruit/intern/"> -->
        <div class="un_banner">
          <picture>
            <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/banner2_sp.webp" type="image/webp" media="(max-width: 767px)">
            <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/banner2_sp.jpg" media="(max-width: 767px)">
            <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/banner2@2x.webp" type="image/webp">
            <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/banner2.jpg 1x, <?php echo $theme_directory; ?>/assets/images/recruit/banner2@2x.jpg 2x"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/banner2.jpg" alt="めざすのは、会社員？それとも社長？" width="" height="">
          </picture>
          <?php
          // slug recruit/internの固定ページのIDを取得
          $page = get_page_by_path('recruit/intern');
          $page_id = $page->ID;

          // カスタムフィールドtopdayの値を取得
          $topday = get_field('topday', $page_id);
          // 2024.06.29から6.29を取得し、二桁めが0の場合は削除
          $topday = explode(".", $topday);
          $topday_year = (int)$topday[0];
          $topday_month = (int)$topday[1];
          $topday_day = (int)$topday[2];
          $topday = $topday_month . "/" . $topday_day;
          ?>
          <!-- <p class="un_banner_day"><?php echo $topday; ?></p> -->
        </div>
      </section>
      <section id="guideline">
        <div class="un_guideline">
          <div class="un_guideline_inner">
            <div class="un_guideline_illust mod_slideUp"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/guideline_illust.svg" alt="RECRUITMENT INFORMATION" width="" height=""></div>
            <h2 class="un_guideline_ttl mod_slideUp"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/guideline_ttl.svg" alt="S.I.N GROUP 採用情報" width="" height="">
            </h2>
            <!-- <ul class="un_guideline_nav pc tab">
              <li><span class="<?php if (!get_field('募集要項を表示する_エスアイエヌホールディングス株式会社')): ?>off<?php endif; ?>">エスアイエヌホールディングス株式会社</span></li>
              <li><span class="<?php if (!get_field('募集要項を表示する_ユニベール株式会社')): ?>off<?php endif; ?>">ユニベール株式会社</span></li>
              <li><span class="<?php if (!get_field('募集要項を表示する_ユニベールサービス株式会社')): ?>off<?php endif; ?>">ユニベールサービス株式会社</span></li>
              <li><span class="<?php if (!get_field('募集要項を表示する_株式会社ルームワン')): ?>off<?php endif; ?>">株式会社ルームワン</span></li>
            </ul> -->
            <!-- <script>
              document.addEventListener("DOMContentLoaded", function() {
                const elements = document.querySelectorAll("#guideline .un_guideline_nav li span:not(.off)");
                if (elements.length > 0) {
                  elements[0].classList.add("active");
                }
              });
            </script> -->
            <!-- <div class="un_guideline_list">
              <div class="un_guideline_items">
                <div class="un_guideline_items_ttl sp<?php if (!get_field('募集要項を表示する_エスアイエヌホールディングス株式会社')): ?> off<?php endif; ?>">エスアイエヌホールディングス株式会社</div>
                <div class="un_guideline_items_bodys">
                  <?php if (have_rows('募集要項_エスアイエヌホールディングス株式会社')): ?>
                    <div class="un_guideline_items_body">
                      <?php while (have_rows('募集要項_エスアイエヌホールディングス株式会社')): the_row(); ?>
                        <?php if (have_rows('募集要項_エスアイエヌホールディングス株式会社_繰り返し')): ?>
                          <?php while (have_rows('募集要項_エスアイエヌホールディングス株式会社_繰り返し')): the_row(); ?>
                            <div class="un_guideline_item">
                              <h3 class="un_guideline_item_ttl"><?php the_sub_field('項目'); ?></h3>
                              <p class="un_guideline_item_exp"><?php the_sub_field('内容'); ?></p>
                            </div>
                          <?php endwhile; ?>
                        <?php endif; ?>
                        <?php if (get_sub_field('エントリーurl')): ?>
                          <div class="bl_rectBtn bl_rectBtn--center bl_rectBtn--lg"><a href="<?php the_sub_field('エントリーurl'); ?>" target="_blank"><span>エントリー</span></a></div>
                        <?php endif; ?>
                      <?php endwhile; ?>
                    </div>
                  <?php endif; ?>
                </div>
              </div>
              <div class="un_guideline_items">
                <div class="un_guideline_items_ttl sp<?php if (!get_field('募集要項を表示する_ユニベール株式会社')): ?> off<?php endif; ?>">ユニベール株式会社</div>
                <div class="un_guideline_items_bodys">
                  <?php if (have_rows('募集要項_ユニベール株式会社')): ?>
                    <div class="un_guideline_items_body">
                      <?php while (have_rows('募集要項_ユニベール株式会社')): the_row(); ?>
                        <?php if (have_rows('募集要項_ユニベール株式会社_繰り返し')): ?>
                          <?php while (have_rows('募集要項_ユニベール株式会社_繰り返し')): the_row(); ?>
                            <div class="un_guideline_item">
                              <h3 class="un_guideline_item_ttl"><?php the_sub_field('項目'); ?></h3>
                              <p class="un_guideline_item_exp"><?php the_sub_field('内容'); ?></p>
                            </div>
                          <?php endwhile; ?>
                        <?php endif; ?>
                        <?php if (get_sub_field('エントリーurl')): ?>
                          <div class="bl_rectBtn bl_rectBtn--center bl_rectBtn--lg"><a href="<?php the_sub_field('エントリーurl'); ?>" target="_blank"><span>エントリー</span></a></div>
                        <?php endif; ?>
                      <?php endwhile; ?>
                    </div>
                  <?php endif; ?>
                </div>
              </div>
              <div class="un_guideline_items">
                <div class="un_guideline_items_ttl sp<?php if (!get_field('募集要項を表示する_ユニベールサービス株式会社')): ?> off<?php endif; ?>">
                  ユニベールサービス株式会社</div>
                <div class="un_guideline_items_bodys">
                  <?php if (have_rows('募集要項_ユニベールサービス株式会社')): ?>
                    <div class="un_guideline_items_body">
                      <?php while (have_rows('募集要項_ユニベールサービス株式会社')): the_row(); ?>
                        <?php if (have_rows('募集要項_ユニベールサービス株式会社_繰り返し')): ?>
                          <?php while (have_rows('募集要項_ユニベールサービス株式会社_繰り返し')): the_row(); ?>
                            <div class="un_guideline_item">
                              <h3 class="un_guideline_item_ttl"><?php the_sub_field('項目'); ?></h3>
                              <p class="un_guideline_item_exp"><?php the_sub_field('内容'); ?></p>
                            </div>
                          <?php endwhile; ?>
                        <?php endif; ?>
                        <?php if (get_sub_field('エントリーurl')): ?>
                          <div class="bl_rectBtn bl_rectBtn--center bl_rectBtn--lg"><a href="<?php the_sub_field('エントリーurl'); ?>" target="_blank"><span>エントリー</span></a></div>
                        <?php endif; ?>
                      <?php endwhile; ?>
                    </div>
                  <?php endif; ?>
                </div>
              </div>
              <div class="un_guideline_itemsWrap">
                <div class="un_guideline_items">
                  <div class="un_guideline_items_ttl sp<?php if (!get_field('募集要項を表示する_株式会社ルームワン')): ?> off<?php endif; ?>">
                    株式会社ルームワン</div>
                  <div class="un_guideline_items_bodys">
                    <?php if (have_rows('募集要項_株式会社ルームワン01')): ?>
                      <div class="un_guideline_items_body">
                        <?php while (have_rows('募集要項_株式会社ルームワン01')): the_row(); ?>
                          <?php if (have_rows('募集要項_ユニベールサービス株式会社_繰り返し')): ?>
                            <?php while (have_rows('募集要項_ユニベールサービス株式会社_繰り返し')): the_row(); ?>
                              <div class="un_guideline_item">
                                <h3 class="un_guideline_item_ttl"><?php the_sub_field('項目'); ?></h3>
                                <p class="un_guideline_item_exp"><?php the_sub_field('内容'); ?></p>
                              </div>
                            <?php endwhile; ?>
                          <?php endif; ?>
                          <?php if (get_sub_field('エントリーurl')): ?>
                            <div class="bl_rectBtn bl_rectBtn--center bl_rectBtn--lg"><a href="<?php the_sub_field('エントリーurl'); ?>" target="_blank"><span>エントリー</span></a></div>
                          <?php endif; ?>
                        <?php endwhile; ?>
                      </div>
                    <?php endif; ?>
                    <?php if (have_rows('募集要項_株式会社ルームワン02')): ?>
                      <div class="un_guideline_items_body">
                        <?php while (have_rows('募集要項_株式会社ルームワン02')): the_row(); ?>
                          <?php if (have_rows('募集要項_ユニベールサービス株式会社_繰り返し')): ?>
                            <?php while (have_rows('募集要項_ユニベールサービス株式会社_繰り返し')): the_row(); ?>
                              <div class="un_guideline_item">
                                <h3 class="un_guideline_item_ttl"><?php the_sub_field('項目'); ?></h3>
                                <p class="un_guideline_item_exp"><?php the_sub_field('内容'); ?></p>
                              </div>
                            <?php endwhile; ?>
                          <?php endif; ?>
                          <?php if (get_sub_field('エントリーurl')): ?>
                            <div class="bl_rectBtn bl_rectBtn--center bl_rectBtn--lg"><a href="<?php the_sub_field('エントリーurl'); ?>" target="_blank"><span>エントリー</span></a></div>
                          <?php endif; ?>
                        <?php endwhile; ?>
                      </div>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div> -->
            <div class="un_guideline_head">
              <p>エスアイエヌホールディングス株式会社</p>
              <div class="un_guideline_head-box">
                <p>現在募集を行っておりません。</p>
              </div>
            </div>
            <div class="un_guideline_content">
<!--
              <div class="un_guideline_content-head">
                <p>各グループ企業についてはこちらから</p>
              </div>
-->
              <div class="un_guideline_content-list">
                <a href="https://www.univers-hd.co.jp/recruit/" target="_blank">
                  <picture>
                    <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/un_guideline_content-list-sp-01.webp" type="image/webp" media="(max-width: 767px)">
                    <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/un_guideline_content-list-sp-01.png" media="(max-width: 767px)">
                    <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/un_guideline_content-list01.webp" type="image/webp">
                    <img src="<?php echo $theme_directory; ?>/assets/images/recruit/un_guideline_content-list01.jpg" alt="ユニベール株式会社">
                  </picture>
                </a>
                <a href="https://univers-service.co.jp/recruit" target="_blank">
                  <picture>
                    <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/un_guideline_content-list-sp-02.webp" type="image/webp" media="(max-width: 767px)">
                    <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/un_guideline_content-list-sp-02.png" media="(max-width: 767px)">
                    <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/un_guideline_content-list02.webp" type="image/webp">
                    <img src="<?php echo $theme_directory; ?>/assets/images/recruit/un_guideline_content-list02.jpg" alt="ユニベールサービス株式会社">
                  </picture>
                </a>
                <a href="https://room1.jp/recruit/" target="_blank">
                  <picture>
                    <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/un_guideline_content-list-sp-03.webp" type="image/webp" media="(max-width: 767px)">
                    <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/un_guideline_content-list-sp-03.png" media="(max-width: 767px)">
                    <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/un_guideline_content-list03.webp" type="image/webp">
                    <img src="<?php echo $theme_directory; ?>/assets/images/recruit/un_guideline_content-list03.jpg" alt="株式会社ルームワン">
                  </picture>
                </a>
              </div>
            </div>

          </div>
        </div>
      </section>
      <div class="un_btm">
        <picture>
          <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/btm_img_sp.webp" type="image/webp" media="(max-width: 767px)">
          <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/btm_img_sp.jpg" media="(max-width: 767px)">
          <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/btm_img@2x.webp" type="image/webp">
          <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/btm_img.jpg 1x, <?php echo $theme_directory; ?>/assets/images/recruit/btm_img@2x.jpg 2x"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/btm_img.jpg" alt="" width="" height="">
        </picture>
      </div>

      <!-- FOOTER-->
      <?php include('parts/footer.php'); ?>

    </article>
  </main>

  <?php wp_footer(); ?>
</body>

</html>