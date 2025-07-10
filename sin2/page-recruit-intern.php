
<?php

/*
Template Name: Recruit Intern
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
    <link rel="stylesheet" type="text/css" href="<?php echo $theme_directory; ?>/assets/css/recruit/intern/index.css"><link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200..900&display=swap" rel="stylesheet">
    <!-- 各頁用 JS-->
    <script src="<?php echo $theme_directory; ?>/assets/js/recruit/intern/index.js"></script>

    <script type="text/javascript" src="//webfonts.xserver.jp/js/xserver.js"></script>

    <?php wp_head(); ?>
  </head>
  <body id="intern">
    <main id="wrapper">
      <div id="wrapper_bg"></div>
      <div id="wrapper_bg_over"></div>
      <!-- LEFT-->
      <h1 class="un_logo">
        <div class="un_logo_inner"> <img src="<?php echo $theme_directory; ?>/assets/images/recruit/intern/whole_left.svg" alt="S.I.N INTERNSHIP 社長と話せるインターンシップ" width="231" height="179"></div>
      </h1>
      <!-- CONTENT-->
      <article id="content">
        <div class="un_head"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/intern/head_logo.svg" alt="S.I.N HOLDINGS エヌアイエスホールディングス株式会社" width="1000" height="100"></div>
        <section id="showcase"> 
          <div class="un_showcase">
            <div class="un_showcase_imgs swiper">
              <div class="swiper-wrapper">
                <div class="un_showcase_img swiper-slide">
                  <picture>
                    <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/intern/showcase_img1@2x.webp" type="image/webp">
                    <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/intern/showcase_img1.jpg 1x, <?php echo $theme_directory; ?>/assets/images/recruit/intern/showcase_img1@2x.jpg 2x"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/intern/showcase_img1.jpg" alt="" width="" height="">
                  </picture>
                </div>
                <div class="un_showcase_img swiper-slide">
                  <picture>
                    <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/intern/showcase_img2@2x.webp" type="image/webp">
                    <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/intern/showcase_img2.jpg 1x, <?php echo $theme_directory; ?>/assets/images/recruit/intern/showcase_img2@2x.jpg 2x"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/intern/showcase_img2.jpg" alt="" width="" height="">
                  </picture>
                </div>
                <div class="un_showcase_img swiper-slide">
                  <picture>
                    <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/intern/showcase_img3@2x.webp" type="image/webp">
                    <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/intern/showcase_img3.jpg 1x, <?php echo $theme_directory; ?>/assets/images/recruit/intern/showcase_img3@2x.jpg 2x"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/intern/showcase_img3.jpg" alt="" width="" height="">
                  </picture>
                </div>
                <div class="un_showcase_img swiper-slide">
                  <picture>
                    <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/intern/showcase_img4@2x.webp" type="image/webp">
                    <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/intern/showcase_img4.jpg 1x, <?php echo $theme_directory; ?>/assets/images/recruit/intern/showcase_img4@2x.jpg 2x"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/intern/showcase_img4.jpg" alt="" width="" height="">
                  </picture>
                </div>
              </div>
            </div>
            <div class="un_showcase_p1"> <img src="<?php echo $theme_directory; ?>/assets/images/recruit/intern/showcase_p1.svg" alt="ONLINE" width="93" height="29"></div>
            <h2 class="un_showcase_ttl"> <img src="<?php echo $theme_directory; ?>/assets/images/recruit/intern/showcase_ttl.svg" alt="社長になりたい人のインターンシップ" width="318" height="83"></h2>
            <div class="un_showcase_subttl">
              <span></span>めざすのは、<br>
              会社員？<br>
              それとも社長？
            </div>
            <p class="un_showcase_txt">
              文章はダミーです。<br>
              わたしたちは空間を<br>
              イノベーションする企業グループ。<br>
              業界をリードする4社の社長と直接<br>
              話せるオンラインインターンシップで、<br>
              インテリアや空間に関する業界知識や<br>
              現場のリアルを体感。<br>
              常識を超越し、限界を超える<br>
              熱意を持ったあなたを求めています。
            </p>
            <div class="un_showcase_logo"> <img src="<?php echo $theme_directory; ?>/assets/images/recruit/intern/showcase_logo.svg" alt="" width="125" height="97"></div>
            <div class="un_showcase_date"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/intern/showcase_date.svg" alt="NEXT INTERNSHIP 6/29 WED 13:00-15:00" width="264" height="154">
              <?php
              // 日付処理
              $topday = get_field("topday");
              // 2024.06.29から6.29を取得し、二桁めが0の場合は削除
              $topday = explode(".", $topday);
              $topday_year = (int)$topday[0];
              $topday_month = (int)$topday[1];
              $topday_day = (int)$topday[2];
              $topday = $topday_month . "/" . $topday_day;

              // 曜日処理
              $week = array("SUN", "MON", "TUE", "WED", "THU", "FRI", "SAT");
              $weekday = $topday_year . "/" . $topday_month . "/" . $topday_day;

              $topday_week = $week[date('w', strtotime( $weekday ))];

              // 時間処理
              $toptimes = get_field("toptimes");
              ?>
              <p class="day en"><?php echo $topday; ?><span><?php echo $topday_week; ?></span></p>
              <p class="time"><?php echo $toptimes; ?></p><a class="un_showcase_btn"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/intern/showcase_btn.svg" alt="インターンシップに参加" width="270" height="51"></a>
            </div>
          </div>
        </section>
        <section id="program">
          <div class="un_program">
            <h2 class="un_program_ttl"> <img src="<?php echo $theme_directory; ?>/assets/images/recruit/intern/program_ttl.svg" alt="PROGRAM" width="248" height="35"><br><span>インターンシッププログラム</span></h2>
            <div class="un_program_img">
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/intern/program_img1@2x.webp" type="image/webp">
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/intern/program_img1.jpg 1x, <?php echo $theme_directory; ?>/assets/images/recruit/intern/program_img1@2x.jpg 2x"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/intern/program_img1.jpg" alt="トップが語る「空間のイノベーション」 What is S.I.N" width="375" height="375">
              </picture>
            </div>
            <div class="un_program_body">
              <div class="un_program_num"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/intern/program_num1.svg" alt="1" width="81" height="16"></div>
              <h3 class="un_program_subttl"> <span>トップが行う会社説明</span></h3>
              <p class="un_program_txt">社長の視点から会社を語る会社説明会。経営ビジョンや採用活動の想いを全て語ります。</p>
              <div class="un_program_point"> <img src="<?php echo $theme_directory; ?>/assets/images/recruit/intern/program_point.svg" alt="POINT" width="96" height="16"></div>
              <p class="un_program_txt">社長の視点から会社を語る会社説明会。経営ビジョンや採用活動の想いを全て語ります。</p>
            </div>
            <div class="un_program_img">
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/intern/program_img2@2x.webp" type="image/webp">
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/intern/program_img2.jpg 1x, <?php echo $theme_directory; ?>/assets/images/recruit/intern/program_img2@2x.jpg 2x"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/intern/program_img2.jpg" alt="10 Things to do" width="375" height="375">
              </picture>
            </div>
            <div class="un_program_body">
              <div class="un_program_num"> <img src="<?php echo $theme_directory; ?>/assets/images/recruit/intern/program_num2.svg" alt="2" width="83" height="16"></div>
              <h3 class="un_program_subttl"><span class="sm">社長直伝。未来のリーダーになるため<br></span><span>20代でやるべき10のこと</span></h3>
              <p class="un_program_txt">ダミー。一社員が社長になるまで。幹部になるために必要な事や現社長のキャリアをお伝えします。</p>
              <div class="un_program_point"> <img src="<?php echo $theme_directory; ?>/assets/images/recruit/intern/program_point.svg" alt="POINT" width="96" height="16"></div>
              <p class="un_program_txt">S.I.N ではグループ会社から社長へと昇格しています。実体験が聞ける貴重なチャンスです。</p>
            </div>
            <div class="un_program_img">
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/intern/program_img3@2x.webp" type="image/webp">
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/intern/program_img3.jpg 1x, <?php echo $theme_directory; ?>/assets/images/recruit/intern/program_img3@2x.jpg 2x"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/intern/program_img3.jpg" alt="経営者のホンネを引き出せ。S.I.N 100 Q&amp;A" width="375" height="375">
              </picture>
            </div>
            <div class="un_program_body">
              <div class="un_program_num"> <img src="<?php echo $theme_directory; ?>/assets/images/recruit/intern/program_num3.svg" alt="3" width="83" height="16"></div>
              <h3 class="un_program_subttl"> <span>S.I.N 100問100答</span></h3>
              <p class="un_program_txt">社長が直接学生の質問に答え、これまでの経験や業界等について解説します。</p>
              <div class="un_program_point"> <img src="<?php echo $theme_directory; ?>/assets/images/recruit/intern/program_point.svg" alt="POINT" width="96" height="16"></div>
              <p class="un_program_txt">質問だけでなく相談にも答えます。経営者視点からのフィードバックを受けられます。</p>
            </div>
          </div>
        </section>
        <section id="president">
          <div class="un_president">
            <h2 class="un_president_ttl"> <img src="<?php echo $theme_directory; ?>/assets/images/recruit/intern/president_ttl.svg" alt="PRESIDENT" width="270" height="35"><br><span>4社の社長紹介</span></h2>
            <div class="un_president_img">
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/intern/president_img1@2x.webp" type="image/webp">
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/intern/president_img1.jpg 1x, <?php echo $theme_directory; ?>/assets/images/recruit/intern/president_img1@2x.jpg 2x"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/intern/president_img1.jpg" alt="S.I.Nホールディングス株式会社 緩詰 良彦 YURUZUME YOSHIHIKO" width="330" height="227">
              </picture><span></span>
            </div>
            <p class="un_president_txt">
               ダミー経歴などが入ります。<br>
              営業責任者や現会長の参謀役を経て、2019年に代表取締役社長に就任。強力なリーダーシップで牽引し、更なる事業拡大に取り組む。
            </p>
            <div class="un_president_img">
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/intern/president_img2@2x.webp" type="image/webp">
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/intern/president_img2.jpg 1x, <?php echo $theme_directory; ?>/assets/images/recruit/intern/president_img2@2x.jpg 2x"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/intern/president_img2.jpg" alt="ユニベール株式会社 土合 秀幸 DOAI HIDEYUKI" width="330" height="227">
              </picture><span></span>
            </div>
            <p class="un_president_txt">
               ダミー経歴などが入ります。<br>
              営業責任者や現会長の参謀役を経て、2019年に代表取締役社長に就任。強力なリーダーシップで牽引し、更なる事業拡大に取り組む。
            </p>
            <div class="un_president_img">
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/intern/president_img3@2x.webp" type="image/webp">
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/intern/president_img3.jpg 1x, <?php echo $theme_directory; ?>/assets/images/recruit/intern/president_img3@2x.jpg 2x"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/intern/president_img3.jpg" alt="株式会社ユニベールサービス 村松 範明 MURAMATSU NORIAKI" width="330" height="227">
              </picture><span></span>
            </div>
            <p class="un_president_txt">
               ダミー経歴などが入ります。<br>
              営業責任者や現会長の参謀役を経て、2019年に代表取締役社長に就任。強力なリーダーシップで牽引し、更なる事業拡大に取り組む。
            </p>
            <div class="un_president_img">
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/intern/president_img4@2x.webp" type="image/webp">
                <source srcset="<?php echo $theme_directory; ?>/assets/images/recruit/intern/president_img4.jpg 1x, <?php echo $theme_directory; ?>/assets/images/recruit/intern/president_img4@2x.jpg 2x"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/intern/president_img4.jpg" alt="株式会社ルームワン 久住 周太郎 KUSUMI SHUTARO " width="330" height="227">
              </picture><span></span>
            </div>
            <p class="un_president_txt">
              ダミー経歴などが入ります。<br>
              営業責任者や現会長の参謀役を経て、2019年に代表取締役社長に就任。強力なリーダーシップで牽引し、更なる事業拡大に取り組む。
            </p>
          </div>
        </section>
        <section id="about">
          <div class="un_about">
            <h2 class="un_about_ttl"> <img src="<?php echo $theme_directory; ?>/assets/images/recruit/intern/about_ttl.svg" alt="ABOUT" width="175" height="35"><br><span>インターンシップ概要</span></h2>
            <div class="un_about_schedule">
              <h3 class="un_about_schedule_ttl">
                2024年度 スケジュール</h3>
              <p class="un_about_schedule_time en"><?php echo $toptimes; ?></p>
              <p class="un_about_schedule_txt en">

                <?php
                $interndays = get_field("interndays");

                foreach ($interndays as $internday) {

                  // 2024.06.29から6.29を取得し、二桁めが0の場合は削除
                  $internday = explode(".", $internday["internday"]);

                  $internday_year = (int)$internday[0];
                  $internday_month = (int)$internday[1];
                  $internday_day = (int)$internday[2];
                  $internday = $internday_month . "/" . $internday_day;

                  $weekday = $internday_year . "/" . $internday_month . "/" . $internday_day;

                  // 曜日処理
                  $internday_week = $week[date('w', strtotime($weekday))];

                  // 日付が過ぎてる場合はoffクラスを付与
                  $today = date("Y.m.d");

                  $today = explode(".", $today);
                  $today_year = (int)$today[0];
                  $today_month = (int)$today[1];
                  $today_day = (int)$today[2];

                  $offClass = "";
                  if ($today_year > $internday_year) {
                    $offClass = "off";
                  } else if ($today_year == $internday_year) {
                    if ($today_month > $internday_month) {
                      $offClass = "off";
                    } else if ($today_month == $internday_month) {
                      if ($today_day > $internday_day) {
                        $offClass = "off";
                      }
                    }
                  }

                  echo "<span class='day " . "$offClass" . "'>$internday<span>". $internday_week ."</span></span>";
                }
                ?>
              </p>
            </div>
            <p class="un_about_txt un_about_txt--narrow">
              応募期間：<br>
              2024年8月X日（月）～8月XX日（日）<br>
            </p>
            <p class="un_about_txt un_about_txt--mbmin">
              募集対象：<br>
              国内の大学・大学院に在籍する学部、修士、博士（文理不問）<br>
              国内高専に在籍する本科生、専攻科生
            </p>
            <p class="un_about_txt">募集人数：各10名ほど</p>
            <p class="un_about_txt un_about_txt--narrow">ビデオ会議アプリはZOOMの使用を予定しています。</p>
          </div>
        </section>
        <section id="contact">
          <div class="un_contact">
            <p class="un_contact_txt">
              インターンシップ参加のお申し込みは<br>
              下記フォームにご記入ください。<br>
              *がついているものは必須項目です。
            </p>
            
            <!-- コンテンツ -->
            <?php the_content(); ?>

          </div>
        </section>
        <footer class="un_siteFooter">
          <div class="un_siteFooter_bg"> 
            <picture>
              <source srcset="<?php echo $theme_directory; ?>/assets/images/common/footer_bg@2x.webp" type="image/webp">
              <source srcset="<?php echo $theme_directory; ?>/assets/images/common/footer_bg.jpg 1x, <?php echo $theme_directory; ?>/assets/images/common/footer_bg@2x.jpg 2x"><img src="<?php echo $theme_directory; ?>/assets/images/common/footer_bg.jpg" alt="" width="" height="">
            </picture>
          </div><a class="un_siteFooter_logo" href="../../"><img src="<?php echo $theme_directory; ?>/assets/images/common/footer_logo_white.svg" alt="" width="277" height="214"></a><a class="un_siteFooter_btn" href="../../">コーポレートサイト</a>
          <p class="un_siteFooter_copyright"> <img src="<?php echo $theme_directory; ?>/assets/images/common/footer_copyright_white.svg" alt="" width="281" height="12.6">
          </p>
        </footer>
      </article>
      <!-- RIGHT-->
      <div class="un_nav">
        <nav class="un_nav_inner">
          <ul> 
            <li> <a><img src="<?php echo $theme_directory; ?>/assets/images/recruit/intern/whole_nav_link1.svg" alt="TOP ページトップ" width="98" height="47"></a></li>
            <li> <a><img src="<?php echo $theme_directory; ?>/assets/images/recruit/intern/whole_nav_link2.svg" alt="PROGRAM インターンシッププログラム" width="216" height="47"></a></li>
            <li> <a><img src="<?php echo $theme_directory; ?>/assets/images/recruit/intern/whole_nav_link3.svg" alt="PRESIDENT 4社の社長紹介" width="164" height="48"></a></li>
            <li> <a><img src="<?php echo $theme_directory; ?>/assets/images/recruit/intern/whole_nav_link4.svg" alt="ABOUT インターンシップ概要" width="168" height="48"></a></li>
            <li> <a href="" target="_blank"><img src="<?php echo $theme_directory; ?>/assets/images/recruit/intern/whole_nav_link5.svg" alt="採用情報" width="92" height="16"></a></li>
            <!-- <li> <a><img src="<?php echo $theme_directory; ?>/assets/images/recruit/intern/whole_nav_link6.svg" alt="NEXTお申し込みはこちら" width="255" height="61"><?php echo $topday; ?></a></li> -->
            <li>
              <a class="btn">
                <svg class="next" xmlns="http://www.w3.org/2000/svg" width="57.442" height="15.004" viewBox="0 0 57.442 15.004"><path d="M-11.242-14.278h-4.994l-.176.616c1.606.088,2,.33,1.914,1.364a34.03,34.03,0,0,1-.572,3.762l-.99,5.258h-.066l-6.358-11h-3.322l-.154.616c1.166.066,1.584.2,1.848.66.264.484.352.836.11,2.046L-25.1-5.72c-.44,2.046-.682,3.036-.924,3.784-.286.968-.792,1.254-1.936,1.32L-28.116,0h5.1l.132-.616c-1.54-.11-1.936-.352-1.87-1.364a28.353,28.353,0,0,1,.55-3.7l1.122-5.72h.066L-16.544.176h.748l1.65-8.712a37.351,37.351,0,0,1,.858-3.74c.286-.968.572-1.32,1.914-1.386Zm1.87,0-.154.616c1.8.154,1.914.286,1.562,2.046L-9.68-2.662C-10.032-.9-10.208-.77-11.968-.616L-12.122,0H-1.738C-1.43-.7-.616-2.772-.374-3.41l-.638-.22a8.967,8.967,0,0,1-1.5,2.09c-.594.572-1.254.748-2.838.748-1.188,0-1.826-.044-2.156-.33-.286-.264-.308-.836-.088-2.046l.726-3.85h2c1.892,0,1.892.154,1.848,1.738h.66L-1.518-9.5h-.66C-2.706-8.052-2.838-7.9-4.686-7.9h-2l.9-4.708c.154-.814.22-.9.99-.9h1.584c1.562,0,1.87.2,2.112.7a4.534,4.534,0,0,1,.308,1.958l.66-.044c.154-1.276.352-2.948.418-3.388Zm24.97,0H10.78l-.132.616.616.088c.7.132.836.308.374.968-.9,1.276-1.914,2.574-2.948,3.828-.77-1.672-1.386-2.948-1.738-3.96-.22-.594-.11-.682.594-.836l.55-.088.132-.616H3.014l-.154.616c1.474.154,1.672.264,2.31,1.694L7.26-7.15C5.434-4.84,3.718-2.794,2.992-2A3.407,3.407,0,0,1,.22-.616L.066,0H5.082l.132-.616L4.708-.7c-.9-.154-.924-.374-.462-1.078.836-1.276,1.958-2.75,3.41-4.576,1.21,2.772,1.672,3.872,1.958,4.6.308.748.2.924-.616,1.056l-.66.088L8.206,0h5.7l.154-.616c-1.672-.176-1.848-.286-2.6-1.958L9.042-7.986c1.848-2.244,2.86-3.454,3.564-4.224a3.281,3.281,0,0,1,2.838-1.452Zm13.222-.55a1.294,1.294,0,0,1-1.144.55h-8.36c-.572,0-.814-.044-1.034-.55h-.506c-.242,1.188-.638,2.64-1.034,3.96h.682a8.549,8.549,0,0,1,1.1-1.98c.418-.484.814-.66,2.64-.66h1.1L20.2-2.662c-.33,1.716-.484,1.914-2.332,2.046L17.71,0h6.182l.132-.616C22.044-.748,21.89-.924,22.2-2.662l2.046-10.846h1.3c1.584,0,2.068.132,2.288.638a4.934,4.934,0,0,1,.264,2l.7-.044c.132-1.232.33-2.948.528-3.916Z" transform="translate(28.116 14.828)" fill="#fff"/></svg>
                <span class="day en"><?php echo $topday; ?></span><br><span>お申し込みはこちら</span>
                <svg class="circle" xmlns="http://www.w3.org/2000/svg" width="24.865" height="26.089" viewBox="0 0 24.865 26.089"><g><path d="M5.013,0,0,4.346l5.013,4" transform="translate(16.079 17.466) rotate(180)" fill="rgba(142,142,142,0)" stroke="#fff" stroke-width="0.75"/><g transform="translate(24.865 26.089) rotate(180)" fill="rgba(142,142,142,0)" stroke="#fff" stroke-width="0.75"><ellipse cx="12.433" cy="13.044" rx="12.433" ry="13.044" stroke="none"/><ellipse cx="12.433" cy="13.044" rx="12.058" ry="12.669" fill="none"/></g></g></svg>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </main>

    <?php wp_footer(); ?>
  </body>
</html>