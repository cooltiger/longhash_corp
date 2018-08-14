<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="format-detection" content="telephone=no">
<meta name="keywords" content="blockchain,cryptcurrency,data,data visualization,startup,anti-money laundering,media,incubation,meetup,hackathon" />
<meta name="description" content="We want to highlight the potential of Blockchain technology and support its practical use. To achieve our mission, we will incubate start-ups in Tokyo and bring in talent and assets from outside of Japan. " />
<title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>
<html prefix="og: http://ogp.me/ns#">
<meta property="og:title" content="k.k LONGHASH | BLOCKCHAIN Advancing the understanding and development of blockchain technology"/>
<meta property="og:type" content="website" />
<meta property="og:url" content="http://longhash.co.jp/en/"/>
<meta property="og:image" content="http://longhash.sakura.ne.jp/wp/en/wp-content/themes/longhash/images/og_longhash.jpg"/>
<meta property="og:site_name"  content="k.k LONGHASH | BLOCKCHAIN Advancing the understanding and development of blockchain technology"/>
<meta property="og:description" content="We want to highlight the potential of Blockchain technology and support its practical use. To achieve our mission, we will incubate start-ups in Tokyo and bring in talent and assets from outside of Japan. "/>

<link rel="shortcut icon"  href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/MyFontsWebfontsKit.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.simplesidebar.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
</head>
<?php wp_head(); ?>
<body>

<div id="container">

  <header id="header">
    <div class="inner">
      <?php if ( is_home() || is_front_page() ) : ?>
      <div class="logo"><a href="#container"><img src="<?php echo get_template_directory_uri(); ?>/images/log_longhash.png" alt="LONGHASH"></a></div>
      <?php else : ?>
      <div class="logo"><a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/log_longhash.png" alt="LONGHASH"></a></div>
      <?php endif; ?>
      <ul class="pcNav">
        <?php if ( is_home() || is_front_page() ) : ?>
        <li><a href="#topNews">NEWS</a></li>
        <li><a href="#company">COMPANY</a></li>
        <li><a href="#careers">CAREERS</a></li>
        <li><a href="#contact">CONTACT</a></li>
        <?php else : ?>
        <li><a href="<?php echo home_url('/'); ?>#topNews">NEWS</a></li>
        <li><a href="<?php echo home_url('/'); ?>#company">COMPANY</a></li>
        <li><a href="<?php echo home_url('/'); ?>#careers">CAREERS</a></li>
        <li><a href="<?php echo home_url('/'); ?>#contact">CONTACT</a></li>
        <?php endif; ?>
      </ul>
      <ul class="language">
        <li class="current"><a href="<?php echo home_url('/'); ?>">EN</a></li>
        <li>|</li>
        <li><a href="http://longhash.co.jp/">JP</a></li>
      </ul>
      <ul class="sns">
        <li><a href="https://twitter.com/longhash_jp/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_tw.png" alt="twitter"></a></li>
        <li><a href="https://www.facebook.com/longhash.jp/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_fb.png" alt="Facebook"></a></li>
      </ul>
      <div id="sideOpenBtn"><img src="<?php echo get_template_directory_uri(); ?>/images/btn_menu_sp.png" alt="MENU" ></div>
    </div>
  </header>