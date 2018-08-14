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
    <div class="inner">
<?php
if ( have_posts() ) :
  while ( have_posts() ) :
    the_post();
?>
      <div class="news">
        <h2><?php the_title(); ?></h2>
        <p class="date"><?php the_time('Y.m.d'); ?></p>
        <div class="contents">
          <?php the_content(); ?>
        </div>
        <ul class="pager">
          <li><?php previous_post_link('%link', '&lt; PERV'); ?></li>
          <li><a href="<?php echo home_url('/'); ?>news/">NEWS一覧</a></li>
          <li><?php next_post_link('%link', 'NEXT  &gt;'); ?></li>
        </ul>
      </div>
<?php
  endwhile;
  endif;
?>
    </div>
  </section>

<?php get_footer(); ?>
