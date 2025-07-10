
<?php

/*
Template Name: Contact Confirm
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
    <link rel="stylesheet" type="text/css" href="<?php echo $theme_directory; ?>/assets/css/contact/confirm/index.css"><link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200..900&display=swap" rel="stylesheet">
    <!-- 各頁用 JS-->
    <script src="<?php echo $theme_directory; ?>/assets/js/contact/confirm/index.js"></script>

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
	    .un_form_submit:first-child:after{
		    width: 100%!important;
		    right: 0!important;
	    }
	    .un_form_submit:first-child:hover:after{
		    width: 0!important;
		    left: auto!important;
	    }
	    .wpcf7-spinner{
		    display: none;
	    }
	    .un_form_submit input[type=button]{
		    background-color: transparent;
				border: 0;
				box-sizing: border-box;
				color: #fff;
				cursor: pointer;
				font-size: 16px;
				font-weight: 400;
				height: 52px;
				letter-spacing: .1em;
				padding: 12px 20px;
				position: relative;
				transition: all .3s;
				width: 256px;
				z-index: 1;
	    }
	    .un_form_submit:hover input[type=button]{
		    color: #80868b!important;
	    }
	    @media screen and (max-width:767px){
		    .un_form_submit input[type=button]{
			    font-size: 4vw;
					height: 15.46667vw;
					padding: 3.2vw 5.33333vw;
					width: 100%;
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
            <div class="un_showcase_ttl"><img class="en" src="<?php echo $theme_directory; ?>/assets/images/contact/showcase_ttl.svg" alt="CONTACT" width="201" height="30"><br><img class="jp" src="<?php echo $theme_directory; ?>/assets/images/contact/confirm/showcase_ttl_jp.svg" alt="お問い合わせ内容確認" width="189" height="16"></div>
          </div>
          <div class="un_form">
            <p class="un_form_lead" style="color: #cc0000;font-weight: bold;">以下の内容で送信してよろしいですか？</p>
            
            <?php the_content(); ?>

          </div>
        </section>

        <!-- FOOTER-->
        <?php include('parts/footer.php'); ?>

      </article>
    </main>

    <?php wp_footer(); ?>
  </body>
</html>