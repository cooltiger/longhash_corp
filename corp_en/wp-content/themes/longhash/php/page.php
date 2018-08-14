<?php get_header(); ?>

<div id="container">

  <header id="headerLower">
    <div class="inner">
      <h1><img src="<?php echo get_template_directory_uri(); ?>/images/ttl_lower.png" alt="2018 東京カラオケまつり　優勝・入賞表彰多数！"></h1>
    </div>
  </header>

  <nav class="pcNav">
    <div class="inner">
      <ul class="gnav">
        <li><a href="<?php echo home_url('/'); ?>#header">トップ</a></li>
        <li><a href="<?php echo home_url('/'); ?>#topNewsWrap">ニュース</a></li>
        <li><a href="<?php echo home_url('/'); ?>#schedule">スケジュール</a></li>
        <li><a href="<?php echo home_url('/'); ?>#entry">エントリー</a></li>
        <li><a href="<?php echo home_url('/'); ?>#overview">大会概要</a></li>
        <li><a href="<?php echo home_url('/'); ?>#qa">Q&A</a></li>
      </ul>
    </div>
  </nav>

  <section class="lower">
<?php if(is_page( array( 40, 53, 55 ) ) ): ?>
    <div class="inner contact">
<?php elseif(is_page( 8 ) ): ?>
    <div class="inner kiyaku">
<?php else: ?>
    <div class="inner">
<?php endif; ?>
<?php
if ( have_posts() ) :
  while ( have_posts() ) :
    the_post();
?>
      <h2><?php the_title(); ?></h2>
      <div><?php the_content(); ?></div>
<?php
  endwhile;
  endif;
?>
    </div>
  </section>

<?php get_footer(); ?>
