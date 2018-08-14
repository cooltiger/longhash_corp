
<div class="inner sns">
  <ul id="boxArea"">
    <li class="hatena">
      <a href="http://b.hatena.ne.jp/entry/" class="hatena-bookmark-button" data-hatena-bookmark-layout="standard-noballoon" data-hatena-bookmark-lang="ja" title="このエントリーをはてなブックマークに追加"><img src="http://b.st-hatena.com/images/entry-button/button-only@2x.png" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" /></a><script type="text/javascript" src="http://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script>
    </li>
    <li class="line"><span><script type="text/javascript" src="//media.line.me/js/line-button.js?v=20140411" ></script><script type="text/javascript">new media_line_me.LineButton({"pc":true,"lang":"ja","type":"a"});</script></span>
    </li>
    <li class="fb">
      <iframe src="//www.facebook.com/v2.0/plugins/like.php?href=https%3A%2F%2Fkaraokematsuri.com%2F&amp;width&amp;layout=button&amp;action=like&amp;show_faces=false&amp;share=true&amp;height=90&amp;appId=2123170974577480" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:90px;" allowTransparency="true"></iframe>
    </li>
    <li class="tw">
      <a href="https://twitter.com/share" class="twitter-share-button"{count} data-lang="ja" data-dnt="true">ツイート</a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
    </li>
    
    
  </ul>
</div>

<?php if ( is_home() || is_front_page() ) : ?>
  <div class="sub">
<?php else : ?>
  <div class="sub bg">
<?php endif; ?>
    <div class="inner">
      <p>
        本事業は、東京文化プログラム助成対象事業です。<br>
        助成:公益財団法人東京都歴史文化財団アーツカウンシル東京
      </p>
      <div class="act"><img src="<?php echo get_template_directory_uri(); ?>/images/logo_act.png" alt="ARTS COUNCIL TOKYO"></div>
      <div class="ttf"><img src="<?php echo get_template_directory_uri(); ?>/images/logo_ttf.png" alt="Tokyo Tokyo FESTIVAL"></div>
      <!--
      <h3>supported by</h3>
      <ul>
        <li><a href="" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/bnr.png" alt=""></a></li>
        <li><a href="" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/bnr.png" alt=""></a></li>
        <li><a href="" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/bnr.png" alt=""></a></li>
        <li><a href="" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/bnr.png" alt=""></a></li>
      </ul>
    -->
    </div>
  </div>

  <p id="page-top"><a href="#header"><img src="<?php echo get_template_directory_uri(); ?>/images/btn_page-top.png"></a></p>

  <footer>
    <p>
      東京カラオケまつり実行委員会<br>
      （サンケイリビング新聞社、文化放送開発センター、<br class="sp">エンジョイシング）<br>
      〒102-8515 東京都千代田区紀尾井町３－２３<br class="sp">サンケイリビング新聞社内<br>
      Tel.<a href="tel:0352169116">03-5216-9116</a>　Fax.<a href="tel:0352169268">03-5216-9268</a>
    </p>

    <ul class="links">
      <li><a href="<?php echo home_url('/'); ?>tos">利用規約</a></li>
      <li><a href="https://www.sankeiliving.co.jp/profile/privacy.html" target="_blamk">個人情報取り扱いについて</a></li>
    </ul>
      
    <a href="<?php echo home_url('/'); ?>contact" class="btn">お問い合わせ</a>
    <p class="copyright">Copyright TokyoKaraokeMatsuri. All Rights Reserved.</p>
  </fotter>
</div><!-- container -->

<nav id="side">
  <ul class="mainNav">
    <li><a href="<?php echo home_url('/'); ?>#header">トップ</a></li>
    <li><a href="<?php echo home_url('/'); ?>#topNewsWrap">ニュース</a></li>
    <li><a href="<?php echo home_url('/'); ?>#schedule">スケジュール</a></li>
    <li><a href="<?php echo home_url('/'); ?>#entry">エントリー</a></li>
    <li><a href="<?php echo home_url('/'); ?>#overview">大会概要</a></li>
    <li><a href="<?php echo home_url('/'); ?>#qa">Q&A</a></li>
  </ul>
  <ul class="subNav">
    <li><a href="<?php echo home_url('/'); ?>tos">利用規約</a></li>
    <li><a href="https://www.sankeiliving.co.jp/profile/privacy.html" target="_blamk">個人情報取り扱いについて</a></li>
  </ul>
</nav>
<?php wp_footer(); ?>
</body>
</html>
