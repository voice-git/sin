
<?php

/*
Template Name: Company
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
    <link rel="stylesheet" type="text/css" href="<?php echo $theme_directory; ?>/assets/css/company/index.css"><link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200..900&display=swap" rel="stylesheet">
    <!-- 各頁用 JS-->
    <script src="<?php echo $theme_directory; ?>/assets/js/company/index.js"></script>

    <script type="text/javascript" src="//webfonts.xserver.jp/js/xserver.js"></script>

    <?php wp_head(); ?>

    <link rel="stylesheet" href="https://use.typekit.net/fwx3tcv.css">
    <!-- <style>
	    .un_history dt{
		    font-family: "minion-pro", serif;
		    font-size: 26px;
		    font-weight: 100;
		    font-style: italic;
		    line-height: 1;
		    color: #8E8E8E;
		    padding: 20px 0 36px;
	    }
	    @media screen and (max-width:767px){
		    .un_history dt{
			    font-size: 22px;
			    padding-top: 16px;
		    }
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
            <div class="un_showcase_ttl"><img class="en" src="<?php echo $theme_directory; ?>/assets/images/company/showcase_ttl.svg" alt="S.I.N company" width="255" height="26"><br><img class="jp" src="<?php echo $theme_directory; ?>/assets/images/company/showcase_ttl_jp.svg" alt="事業紹介" width="74" height="16"></div>
            <div class="un_showcase_bg">
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/company/showcase_bg_sp.webp" type="image/webp" media="(max-width: 767px)">
                <source srcset="<?php echo $theme_directory; ?>/assets/images/company/showcase_bg_sp.jpg" media="(max-width: 767px)">
                <source srcset="<?php echo $theme_directory; ?>/assets/images/company/showcase_bg@2x.webp" type="image/webp">
                <source srcset="<?php echo $theme_directory; ?>/assets/images/company/showcase_bg.jpg 1x, <?php echo $theme_directory; ?>/assets/images/company/showcase_bg@2x.jpg 2x"><img src="<?php echo $theme_directory; ?>/assets/images/company/showcase_bg.jpg" alt="" width="" height="">
              </picture>
            </div>
          </div>
        </section>
        <div class="un_sectionWrap">
          <nav class="un_sectionNav"> 
            <ul> 
              <li class="active"><a href="#overview">- 会社情報</a></li>
              <li> <a href="#history">- 沿革</a></li>
              <li> <a href="#group">- グループ会社</a></li>
            </ul>
          </nav>
          <section id="overview">
            <div class="un_overview">
              <div class="un_overview_inner">
                <div class="un_overview_ttl"> <img class="jp" src="<?php echo $theme_directory; ?>/assets/images/company/overview_ttl_jp.svg" alt="会社情報" width="82" height="19"><br><img class="en" src="<?php echo $theme_directory; ?>/assets/images/company/overview_ttl.svg" alt="Overview" width="268" height="35"></div>
                <dl>
	              <?php if (have_rows('会社情報')): ?>
	              <?php while (have_rows('会社情報')): the_row(); ?>
                  <dt><?php the_sub_field('項目'); ?></dt>
                  <dd><?php the_sub_field('内容'); ?></dd>
                  <?php endwhile; ?>
                  <?php endif; ?>
                </dl>
              </div>
            </div>
          </section>
          <section id="history">
            <div class="un_history_img"> 
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/company/history_img_sp.webp" type="image/webp" media="(max-width: 767px)">
                <source srcset="<?php echo $theme_directory; ?>/assets/images/company/history_img_sp.jpg" media="(max-width: 767px)">
                <source srcset="<?php echo $theme_directory; ?>/assets/images/company/history_img@2x.webp" type="image/webp">
                <source srcset="<?php echo $theme_directory; ?>/assets/images/company/history_img.jpg 1x, <?php echo $theme_directory; ?>/assets/images/company/history_img@2x.jpg 2x"><img src="<?php echo $theme_directory; ?>/assets/images/company/history_img.jpg" alt="" width="" height="">
              </picture>
            </div>
            <div class="un_history">
              <div class="un_history_inner">
                <div class="un_history_ttl"> <img class="jp" src="<?php echo $theme_directory; ?>/assets/images/company/history_ttl_jp.svg" alt="沿革" width="40" height="18"><br><img class="en" src="<?php echo $theme_directory; ?>/assets/images/company/history_ttl.svg" alt="History" width="216" height="35"></div>
                <div class="un_history_core"> 
                  <dl> 
	                <?php if (have_rows('沿革')): ?>
	                <?php while (have_rows('沿革')): the_row(); ?>
                    <dt><?php the_sub_field('年号'); ?></dt>
                    <dd><?php the_sub_field('内容'); ?></dd>
                    <?php endwhile; ?>
                    <?php endif; ?>
                  </dl>
                </div>
              </div>
            </div>
          </section>
          <section id="group">
            <div class="un_group_img"> 
              <picture>
                <source srcset="<?php echo $theme_directory; ?>/assets/images/company/group_img_sp.webp" type="image/webp" media="(max-width: 767px)">
                <source srcset="<?php echo $theme_directory; ?>/assets/images/company/group_img_sp.jpg" media="(max-width: 767px)">
                <source srcset="<?php echo $theme_directory; ?>/assets/images/company/group_img@2x.webp" type="image/webp">
                <source srcset="<?php echo $theme_directory; ?>/assets/images/company/group_img.jpg 1x, <?php echo $theme_directory; ?>/assets/images/company/group_img@2x.jpg 2x"><img src="<?php echo $theme_directory; ?>/assets/images/company/group_img.jpg" alt="" width="" height="">
              </picture>
            </div>
            <div class="un_group">
              <div class="un_group_inner">
                <div class="un_group_ttl"> <img class="jp" src="<?php echo $theme_directory; ?>/assets/images/company/group_ttl_jp.svg" alt="沿革" width="40" height="18"><br><img class="en" src="<?php echo $theme_directory; ?>/assets/images/company/group_ttl.svg" alt="History" width="216" height="35"></div>
                <div class="un_group_core"> 
	              <?php if (have_rows('グループ会社')): ?>
	              <?php while (have_rows('グループ会社')): the_row(); ?>
                  <div class="un_company"><?php if(get_sub_field('会社url')): ?><a class="un_company_ttl" href="<?php the_sub_field('会社url'); ?>" target="_blank"><?php else: ?><p class="un_company_ttl"><?php endif; ?><?php the_sub_field('会社名'); ?><?php if(get_sub_field('会社url')): ?><img class="icon" src="<?php echo $theme_directory; ?>/assets/images/common/icon_blank.svg" alt="" width="21" height="19"></a><?php else: ?></p><?php endif; ?>
	                <?php if (have_rows('会社情報')): ?>
                    <dl>
	                  <?php while (have_rows('会社情報')): the_row(); ?>
                      <dt><?php the_sub_field('項目'); ?></dt>
                      <dd><?php the_sub_field('内容'); ?></dd>
                      <?php endwhile; ?>
                    </dl>
                    <?php endif; ?>
                    <?php if(get_sub_field('グーグルマップ')): ?>
                    <div class="un_company_map">
	                  <iframe src="<?php the_sub_field('グーグルマップ'); ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <?php endif; ?>
                  </div>
                  <?php endwhile; ?>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </section>
        </div>
        
        <!-- CONTACT-->
        <?php include('parts/contact.php'); ?>

        <!-- FOOTER-->
        <?php include('parts/footer.php'); ?>

      </article>
    </main>

    <?php wp_footer(); ?>
  </body>
</html>