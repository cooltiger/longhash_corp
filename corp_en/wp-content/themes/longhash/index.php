<?php get_header(); ?>

  <section class="kv">
    <div class="inner">
      <p class="ttl">OUR MISSION</p>
      <h1>
        LongHash is a platform for accelerating the development <br class="pc">
        and understanding of blockchain technology.
      </h1>
      <p>
        We want to highlight the potential of Blockchain technology <br class="pc">
        and support its practical use. To achieve our mission, <br class="pc">
        we will incubate start-ups in Tokyo and bring in talent <br class="pc">
        and assets from outside of Japan. 
      </p>
      <div class="logo">
        <img src="<?php echo get_template_directory_uri(); ?>/images/log_longhash_02.png" alt="LONGHASH">
        <p>IN BLOCKCHAIN WE TRUST</p>
      </div>
    </div>
  </section>

  <section id="topNews">
    <div class="inner">
      <h2 class="hstyle01">NEWS</h2>
      <div class="newsListWrap">
<?php
$args = array(
  'post_type'      => 'post',
  'posts_per_page' => 3,
);
$blog_posts = new WP_Query( $args );
if ( $blog_posts->have_posts() ) :
?>

<?php
  while ( $blog_posts->have_posts() ) :
    $blog_posts->the_post();
?>
        <section class="newsList">
          <a href="<?php the_permalink(); ?>">
<?php
    if ( has_post_thumbnail() ) :
      the_post_thumbnail();
    else :
?>
            <img src="<?php echo get_template_directory_uri(); ?>/images/thum_01.png" alt="thumbnail">
<?php
    endif;
?>
          </a>
          <p class="day"><?php the_time('Y.m.d'); ?></p>
          <h1 class="ttl "><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
          <div>
            <?php the_excerpt(); ?>
          </div>
        </section>
<?php
  endwhile;
  endif;
?>

      </div>
      
      <div class="btnWrap">
        <a href="<?php echo home_url('/'); ?>news/" class="btn">MORE NEWS</a>
      </div>
    </div>
  </section>

  <section id="company">
    <div class="bg">
    <div class="inner">
      <h2 class="hstyle01">COMPANY</h2>

      <div class="movieWrap">
        <div class="movie">
          <iframe src="https://www.youtube.com/embed/zS67Sl4rwHI?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
      </div>

      <section class="greeting">
        <h3 class="hstyle02">CEO GREETING</h3>
        <p >
          Recently in Japan, workers' work style has been a hot topic. The key question is how to balance companies' profit against, individual's benefit as a worker, and as a consumer. There is no doubt that it is a big challenge for Japan's aging society. Especially in the current economy, resources (human resources, capital, data, etc.) are controlled by a small number of companies, and even as the economy recovering, it is not so optimistic for individuals and SMEs. As services and technology become more complex, companies are forced to enlarge their organization to deal with it, the cost for management and coordination is increased, decision making is delayed, and response to innovation and change is dulled. In order to improve efficiency as a society, we believe it is necessary to shift from this centralized economic organization model, to a flatter decentralized economic organization model where resource allocation is flexible, and individuals are empowered to make decisions based on transparent data and matching demand and supply in real time.<br>
          LONGHASH will take the initiative to adopt the decentralized economic organization model as a company. By incubating and contributing to blockchain projects that truly enables individuals to build transparent and vibrant communities. We hope to share knowledge and data to the general public to raise awareness to the benefit of blockchain and the decentralized economic model.
        </p>
        <p class="president">Chris Dai</p>
      </section>

      <section class="overview">
        <h3 class="hstyle02">ABOUT COMPANY</h3>
        <table>
          <tr>
            <th>company name</th>
            <td>k.k LONGHASH</td>
          </tr>
          <tr>
            <th>address</th>
            <td>Arkhills South tower 16F, 1-4-5 Roppongi, Minato-ku, Tokyo, Japan</td>
          </tr>
          <tr>
            <th>CEO</th>
            <td>Chris Dai</td>
          </tr>
          <tr>
            <th>establishment</th>
            <td>Feburary 16,2018<div id="map"></div></td>
          </tr>
          <!--
          <tr>
            <th>capital</th>
            <td>9,000,000 yen</td>
          </tr>
          -->
          <tr>
            <th>about business</th>
            <td>media, online advertisement, big data analysis, incubation business</td>
          </tr>
        </table>
        <div id="map"></div>
      </section>

      <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.458257410609!2d139.73722801525832!3d35.665716780197926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b9b2917e1f3%3A0x18f184cc63634a55!2z44CSMTA2LTAwMzIg5p2x5Lqs6YO95riv5Yy65YWt5pys5pyo77yR5LiB55uu77yU4oiS77yV!5e0!3m2!1sja!2sjp!4v1520601651568" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

      <section class="overseas">
        <h3 class="hstyle02">WORKING AREA</h3>
        <img src="<?php echo get_template_directory_uri(); ?>/images/pic_map.png?v1" alt="WORKING AREA">
      </section>

      <section>
        <h3 class="hstyle02">INTRODUCTION OF BOARD MEMBERS</h3>

        <div class="officerWrap">
        <section class="officer">
          <img src="<?php echo get_template_directory_uri(); ?>/images/pic_member_01.png" alt="Mamoru Taniya">
          <p class="name">Mamoru Taniya<span>LONGHASH Japan Chairman</span></p>
          <p>
            Mr. Taniya was formerly head of Asia trading for Salomon Brothers and co-founded many funds and fin-tech corporates including Tudor Capital Japan, Asuka Asset Management, Mercuria investment , D4V ,Lifenet and Money Design ,etc. Mr. Taniya is also the member of Advisory Panel for Global Financial City Tokyo and is one of the key architects of Tokyo’s blockchain accelerator Blockchain Business Camp Tokyo. Mr. Taniya received his B.A. in law from the University of Tokyo in 1987.
          </p>
        </section>
        <section class="officer">
          <img src="<?php echo get_template_directory_uri(); ?>/images/pic_member_02.png" alt="Chris Dai">
          <p class="name">Chris Dai<span>LONGHASH Japan CEO</span></p>
          <p>
            Chris has a broad range of business management and investment experience. He is the co-founder and CEO of Leland Capital, a cross-border investment fund between China and Japan. He was formerly the COO / CIO Yixing SCM (a logistics provider), a consultant at Accenture, and co-founder of multiple ventures. Chris was one of the earliest investors in Bitcoin and Ethereum in China. He received a B.A. in Management and Science Engineering from Stanford University in 2004.
          </p>
        </section>
        <section class="officer">
          <img src="<?php echo get_template_directory_uri(); ?>/images/pic_member_03.png" alt="James Gong">
          <p class="name">James Gong<span>LONGHASH Co-founder</span></p>
          <p>
            Founder of ICOAGE (formerly the largest ICO platform in China) and ChainB (the largest Chinese blockchain media). James has been a leading blockchain and cryptocurrency evangelist and key opinion leader in China since 2012. He has helped to translate innumerable blockchain related articles and whitepapers into Chinese, as well as having authored many books on blockchain, including “The Blockchain Society”, “Blockchain – the New Economy’s Blueprint”, and “Cryptocurrency”.
          </p>
        </section>
        <section class="officer">
          <img src="<?php echo get_template_directory_uri(); ?>/images/pic_member_04.png" alt="Yanfeng Chen">
          <p class="name">Yanfeng Chen<span>LONGHASH Co-founder</span></p>
          <p>
            Founder of Tuolian , Cryptocurrency Custodian Service Provider. Co-founder of Cybex, a decentralized exchange, and Tokex, a big data analytics company for business and AML service. Former regional manager of National Instruments. Good expertise in blockchain and cryptograph technology and security. M.A in electronic engineering of Shanghai Jiao Tong University.
          </p>
        </section>
        <section class="officer">
          <img src="<?php echo get_template_directory_uri(); ?>/images/pic_member_05.png" alt="Emily Parker">
          <p class="name">Emily Parker<span>LONGHASH Co-founder</span></p>
          <p>
            Formerly a staff writer and editor at The Wall Street Journal, staff editor at The New York Times, policy advisor for the US State Department and chief strategy officer at Silicon Valley start-up Parlio (acquired by Quora). Writes about technology and foreign affairs for The New York Times, The Wall Street Journal, CNN, MIT Technology Review, The Washington Post and other publications, as well as for Japanese media. Author of the book, "Now I Know Who My Comrades Are: Voices From the Internet Underground," which has been assigned in classes in top universities in the United States.  BA with honors from Brown University in international relations and comparative literature. MA from Harvard in East Asian Studies (Chinese and Japanese).
          </p>
        </section>
        <section class="officer">
          <img src="<?php echo get_template_directory_uri(); ?>/images/pic_member_06.png" alt="Steven Pu">
          <p class="name">Steven Pu<span>U.S. Representative</span></p>
          <p>
            Steven is a serial entrepreneur and strategy consultant, with over a decade of experience advising and implementing strategic transformations for Fortune 100 clients. He was an associate director at Monitor-Deloitte Consulting. He co-founded LinkSens (IoT mesh networks), EviPath (social network for physicians to exchange and discuss medical cases), and Master He (on-call massage service app). He received both a B.S. and a M.S. in Electrical Engineering from Stanford University in 2004 and 2005, respectively.
          </p>
        </section>
        <section class="officer">
          <img src="<?php echo get_template_directory_uri(); ?>/images/pic_member_07.png" alt="Jianbo Wang ">
          <p class="name">Jianbo Wang <span>Head of LONGHASH Hong Kong</span></p>
          <p>
            Formerly Director of ETF and China Risk trading at Deutsche Bank Asia, VP of ETF and Equity derivatives trading Citigroup Asia, VP of Equity derivatives proprietary trading at Credit Suisse. Jianbo is familiar with global financial markets and derivatives trading and has a deep understanding of ETF and other innovative financial products. He received both a B.S. and a M.S. in Electrical Engineering from Stanford University in 2003 and 2005, respectively.
          </p>
        </section>
        </div>
      </section>

    </div>
  </div><!-- bg -->
  </section>

  <section id="careers">
    <div class="inner">
      <h2 class="hstyle01">CAREERS</h2>
      <p>Coming soon</p>
  </div>
  </section>

  <section id="contact">
    <div class="bg">
    <div class="inner">
      <h2 class="hstyle01">CONTACT</h2>
      <p class="Tcenter mb30">Please fill out blanks and proceed to next by "confirm" button.</p>
      <?php
      echo do_shortcode( '[mwform_formkey key="19"]' );
      ?>

    </div>
    </div><!-- bg -->
  </section>

<?php get_footer(); ?>