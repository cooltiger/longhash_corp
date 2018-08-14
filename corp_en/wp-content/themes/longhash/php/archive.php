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
      <h2>ニュース一覧</h2>
<?php
if ( have_posts() ) :
  while ( have_posts() ) :
    the_post();
?>
      <dl class="newsList">
        <dt><a href="<?php the_permalink(); ?>">
<?php
    if ( has_post_thumbnail() ) :
      the_post_thumbnail();
    else :
?>
          <img src="<?php echo get_template_directory_uri(); ?>/images/thum.png" alt="thumbnail">
<?php
    endif;
?>
        </a></dt>
        <dd>
          <p class="date"><?php the_time('Y.m.d'); ?></p>
          <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
        </dd>
      </dl>
<?php
  endwhile;
  endif;
?>
    </div>
  </section>


<?php get_footer(); ?>
