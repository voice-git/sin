
<?php
$indexClass = '';
$indexClass2 = '';

if (is_front_page()) {
  $indexClass = 'index';
}

// statementのアーカイブページの場合
if (is_page('statement')) {
  $indexClass2 = 'un_siteHeader--stay';
}

// newsのアーカイブページの場合
if (is_post_type_archive('news')) {
  $indexClass2 = 'un_siteHeader--white';
}

// newsのシングルページの場合
if (is_singular('news')) {
  $indexClass2 = 'un_siteHeader--white';
}

// /recruit/message/の場合
if (is_page('recruit/message')) {
  $indexClass2 = 'un_siteHeader--white';
}

// contact
if (is_page('contact')) {
  $indexClass2 = 'un_siteHeader--white';
}

// contact/confirm
if (is_page('contact/confirm')) {
  $indexClass2 = 'un_siteHeader--white';
}

// contact/thanks
if (is_page('contact/thanks')) {
  $indexClass2 = 'un_siteHeader--white';
}

?>

<header class="un_siteHeader <?php echo $indexClass; ?> <?php echo $indexClass2; ?>" data-lenis-prevent>
  <p><a class="un_siteHeader_logo" href="<?php echo $home_url; ?>"><img src="<?php echo $theme_directory; ?>/assets/images/common/header_logo_bl.svg" alt="S.I.N HOLDINGS エヌアイエスホールディングス株式会社" width="330" height="50"><img src="<?php echo $theme_directory; ?>/assets/images/common/header_logo.svg" alt="S.I.N HOLDINGS エヌアイエスホールディングス株式会社" width="330" height="50"></a></p>
  <div class="un_siteHeader_btn"><img src="<?php echo $theme_directory; ?>/assets/images/common/header_open.svg" alt="MENU" width="58" height="19"><span class="close"><span></span><span></span></span></div>
  <div class="un_siteHeader_nav lenisScroller" data-lenis-prevent>
    <div class="un_siteHeader_nav_spLogo sp"><a href="<?php echo $home_url; ?>"><img src="<?php echo $theme_directory; ?>/assets/images/common/header_logo_bl.svg" alt="S.I.N HOLDINGS エヌアイエスホールディングス株式会社" width="330" height="50"></a></div>
    <ul class="pc tab">
      <li> <a href="/statement/">
          <picture><img src="<?php echo $theme_directory; ?>/assets/images/common/header_nav1.svg" alt="S.I.N BRAND" width="101" height="12"></picture></a></li>
      <li> <a href="/business/">
          <picture><img src="<?php echo $theme_directory; ?>/assets/images/common/header_nav2.svg" alt="事業紹介" width="66" height="14"></picture></a></li>
      <li> <a href="/company/">
          <picture><img src="<?php echo $theme_directory; ?>/assets/images/common/header_nav3.svg" alt="会社概要" width="65" height="14"></picture></a></li>
      <li> <a href="/message/">
          <picture><img src="<?php echo $theme_directory; ?>/assets/images/common/header_nav4.svg" alt="トップメッセージ" width="128" height="13"></picture></a></li>
      <li> <a href="/recruit/">
          <picture><img src="<?php echo $theme_directory; ?>/assets/images/common/header_nav5.svg" alt="採用情報" width="65" height="14"></picture></a></li>
      <li> <a href="/news/">
          <picture><img src="<?php echo $theme_directory; ?>/assets/images/common/header_nav6.svg" alt="お知らせ" width="63" height="14"></picture></a></li>
      <li> <a href="/contact/">
          <picture><img src="<?php echo $theme_directory; ?>/assets/images/common/header_nav7.svg" alt="お問い合わせ" width="97" height="14"></picture></a></li>
    </ul>
    <ul class="sp">
      <li><a href="/statement/">
          <picture>
            <source srcset="<?php echo $theme_directory; ?>/assets/images/common/header_nav_img1@2x.webp" type="image/webp">
            <source srcset="<?php echo $theme_directory; ?>/assets/images/common/header_nav_img1.jpg 1x, <?php echo $theme_directory; ?>/assets/images/common/header_nav_img1@2x.jpg 2x"><img src="<?php echo $theme_directory; ?>/assets/images/common/header_nav_img1.jpg" alt="" width="" height="">
          </picture></a></li>
      <li><a href="/business/">
          <picture>
            <source srcset="<?php echo $theme_directory; ?>/assets/images/common/header_nav_img3@2x.webp" type="image/webp">
            <source srcset="<?php echo $theme_directory; ?>/assets/images/common/header_nav_img3.jpg 1x, <?php echo $theme_directory; ?>/assets/images/common/header_nav_img3@2x.jpg 2x"><img src="<?php echo $theme_directory; ?>/assets/images/common/header_nav_img3.jpg" alt="" width="" height="">
          </picture></a></li>
      <li><a href="/recruit/">
          <picture>
            <source srcset="<?php echo $theme_directory; ?>/assets/images/common/header_nav_img2@2x.webp" type="image/webp">
            <source srcset="<?php echo $theme_directory; ?>/assets/images/common/header_nav_img2.jpg 1x, <?php echo $theme_directory; ?>/assets/images/common/header_nav_img2@2x.jpg 2x"><img src="<?php echo $theme_directory; ?>/assets/images/common/header_nav_img2.jpg" alt="" width="" height="">
          </picture></a></li>
      <li> <a href="/company/">
          <picture><img src="<?php echo $theme_directory; ?>/assets/images/common/header_nav3.svg" alt="会社概要" width="65" height="14"></picture></a></li>
      <li> <a href="/message/">
          <picture><img src="<?php echo $theme_directory; ?>/assets/images/common/header_nav4.svg" alt="トップメッセージ" width="128" height="13"></picture></a></li>
      <li> <a href="/news/">
          <picture><img src="<?php echo $theme_directory; ?>/assets/images/common/header_nav6.svg" alt="お知らせ" width="63" height="14"></picture></a></li>
      <li> <a href="/contact/">
          <picture><img src="<?php echo $theme_directory; ?>/assets/images/common/header_nav7.svg" alt="お問い合わせ" width="97" height="14"></picture></a></li>
      <!-- <li> <a href="https://www.sin-holdings.co.jp/"><img src="<?php echo $theme_directory; ?>/assets/images/common/header_nav_logo.svg" alt="S.I.N HOLDINGS" width="167" height="30"></a></li> -->
    </ul>
    <div class="un_siteHeader_nav_group sp"><img class="ttl" src="<?php echo $theme_directory; ?>/assets/images/common/footer_group.svg" alt="S.I.N GROUP" width="79" height="10">
      <ul>
        <li> <a href="https://www.univers-hd.co.jp">ユニベール株式会社<img src="<?php echo $theme_directory; ?>/assets/images/common/icon_blank.svg" alt="" width="12" height="10"></a></li>
        <li> <a href="https://univers-service.co.jp">ユニベールサービス株式会社<img src="<?php echo $theme_directory; ?>/assets/images/common/icon_blank.svg" alt="" width="12" height="10"></a></li>
        <li> <a href="https://room1.jp">株式会社ルームワン<img src="<?php echo $theme_directory; ?>/assets/images/common/icon_blank.svg" alt="" width="12" height="10"></a></li>
        <li> <a href="/"><img src="<?php echo $theme_directory; ?>/assets/images/common/header_nav_logo.svg" alt="S.I.N HOLDINGS" width="167" height="30"></a></li>
      </ul>
    </div>
  </div>
</header>
