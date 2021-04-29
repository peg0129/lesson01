<!DOCTYPE html>
<html>
  <head>
  <?php include('head.php'); ?>
  </head>

  <body>
  <!-- loading -->
  <div id="loading">
    <figure><img src="./img/header/logo.png" alt="logo"><figure>
    <div class="loader"></div>
  </div>

  <!-- wrapはsection境目に重ねたレイアウトで絶対に右余白が出来る為実装 -->
  <div class="wrap">
    <header>
      <div class="l-header-box">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="slide-img">
                <img src="./img/header/main.jpg" alt="main">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="slide-img">
                <img src="./img/header/main1.jpg" alt="main1">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="slide-img">
                <img src="./img/header/main2.jpg" alt="main2">
              </div>
            </div>
          </div>
        </div>

        <figure class="main_sp"><img src="./img/header/main_sp.jpg" alt="main_sp"></figure>

        <a class="header-logo" href="#"><img src="./img/header/logo.png" alt="logo"></a>

        <div class="header-title-box">
          <h1 class="title">
            <figure><img src="./img/header/typo.png" alt="typo"></figure>
          </h1>
        </div>

        <div class="page-scroll">
          <a href="#">
            <div class="page-scroll-text">
              <p>気ニナル？</p>
              <p>scroll</p>
            </div>
            <div class="fas fa-caret-down fa-5x"></div>
          </a>
        </div>

        <figure class="scroll-img"><img src="./img/header/scroll.png" alt="scroll"></figure>
      </div>
    </header>

    <main>
      <div class="canvas" id="canvas"></div>

      <section class="p-about">
        <div class="about-text">

          <div class="about-text-title svg-anime">
            <p class="text-move">縁日で見かける夏の風物詩『金魚』</p>
            <p class="text-move">でも、あまり知らない『金魚』のコト</p>
          </div>

          <div class="about-text-block">
            <div class="about-text-block-box1">
              <figure class="box1-img rellax-target fatdeIN_type1" data-rellax-speed="3" data-rellax-percentage="0.5" data-rellax-zindex="2"><img src="./img/main/about/about1.jpg" alt="about1"></figure>
              <div class="box1-explanation fatdeIN_type2">
                <p class="box1-explanation-title">遥か2千年前</p>
                <p class="box1-explanation-text">金魚の起源、それは2千年ほど前に遡る。中国で野生のヒブナが突然変異、赤く染まった個体が現れたのが始まり。<br>
                 その後、長い年月をかけて様々な色彩形状へと品種改良され、観賞魚として愛され続けてきた。</p>
              </div>
              <figure class="gold_fish1"><img src="./img/main/about/gold_fish1.png" alt="gold_fish1"></figure>
            </div>

            <div class="about-text-block-box2">
              <figure class="box2-img rellax-target fatdeIN_type1" data-rellax-speed="9" data-rellax-percentage="0.5" data-rellax-zindex="2"><img src="./img/main/about/about2.jpg" alt="about2"></figure>
              <figure class="box2-img1 rellax-target fatdeIN_type1" data-rellax-speed="6" data-rellax-percentage="0.5" data-rellax-zindex="2"><img src="./img/main/about/about3.jpg" alt="about3"></figure>
              <div class="box2-explanation fatdeIN_type2">
                <p class="box2-explanation-title">渡来</p>
                <p class="box2-explanation-text">日本には、室町時代の中期に明（中国）から泉州（大阪）へ渡来したと金魚養玩草に記録されている。<br>
                  また、この金魚養玩草の発行を口火に全国に名が知れ渡り、愛好家が生まれる。江戸中期にはメダカ等と共に庶民の愛玩物としても広まった。</p>
              </div>
              <figure class="gold_fish2"><img src="./img/main/about/gold_fish2.png" alt="gold_fish2"></figure>
              <figure class="gold_fish3"><img src="./img/main/about/gold_fish3.png" alt="gold_fish3"></figure>
              <figure class="gold_fish4"><img src="./img/main/about/gold_fish4.png" alt="gold_fish4"></figure>
            </div>

            <div class="about-text-block-box3">
              <figure class="box3-img rellax-target fatdeIN_type1" data-rellax-speed="6" data-rellax-percentage="0.5" data-rellax-zindex="2"><img src="./img/main/about/about4.jpg" alt="about4"></figure>
              <div class="box3-explanation fatdeIN_type2">
                <p class="box3-explanation-title">近代</p>
                <p class="box3-explanation-text">昭和40年代は経済発展と養殖技術の進歩に伴い生産量が年々増加する。需要に伴って数多くの品種が誕生した。<br>
                　この頃には縁日でもよく見かける夏の風物詩として定着をみせており、東南アジアにかけての輸出もされるほど定着したものとなった。</p>
              </div>
            </div>

            <div class="about-text-block-box4">
              <figure class="box4-img rellax-target fatdeIN_type1" data-rellax-speed="3" data-rellax-percentage="0.5" data-rellax-zindex="2"><img src="./img/main/about/about5.jpg" alt="about5"></figure>
              <figure class="box4-img1 rellax-target fatdeIN_type2" data-rellax-speed="9" data-rellax-percentage="0.5" data-rellax-zindex="2"><img src="./img/main/about/about6.jpg" alt="about6"></figure>
              <figure class="box4-img2 rellax-target fatdeIN_type1" data-rellax-speed="3" data-rellax-percentage="0.5" data-rellax-zindex="2"><img src="./img/main/about/about7.jpg" alt="about7"></figure>
              <div class="box4-explanation fatdeIN_type2">
                <p class="box4-explanation-title">現代</p>
                <p class="box4-explanation-text">現代では各地に金魚の養殖産地があり、各地域ごとに親しまれている。また品評会等の催しや愛好会も数多く存在するほど、根強い人気と歴史を刻んでいる。</p>
              </div>
              <figure class="gold_fish5"><img src="./img/main/about/gold_fish5.png" alt="gold_fish5"></figure>
            </div>

          </div>
        </div>
      </section>

      <section class="p-type">
        <div class="type-text">
          <div class="type-text-title svg-anime">
            <p class="text-move">意外と知らない『金魚』の種類</p>
            <p class="text-move">当館では多種多様な金魚をご覧になれます。</p>
          </div>

          <div class="type-text-block">
              <a class="type-sp-size-button" href="#">一覧ページへ</a>
          </div>
        </div>
      </section>

      <section class="p-movie">
        <div class="movie-text">
          <div class="movie-text-title svg-anime">
            <p class="text-move">MOVIE</p>
          </div>

          <div class="movie-box fatdeIN_type1">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/tAxcgLdFHrw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </section>

      <section class="p-information">
        <div class="information-text">
          <div class="information-text-title svg-anime">
            <p class="text-move">展示情報</p>
          </div>

          <div class="period">
            <p class="information-text-explanation-title">開催期間</p>
            <p class="information-text-explanation">2020年8月1日（土）　～　2020年8月31日（月）</p>
          </div>

          <div class="place">
            <p class="information-text-explanation-title">展示場所</p>
            <p class="information-text-explanation">本館4F　期間限定淡水魚展示コーナー</p>
          </div>

          <div class="access">
            <p class="information-text-explanation-title">当館へのアクセス</p>
            <p class="information-text-explanation">JR東海道線吉原駅より徒歩20分　バス（吉原水族館行き）5分</p>
          </div>

          <div class="ggmap fatdeIN_type3">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3262.510887289242!2d138.70059711561333!3d35.143877466860175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601a2a8a5838e413%3A0xfd6766077f793a45!2z5ZCJ5Y6f6aeF!5e0!3m2!1sja!2sjp!4v1597842527088!5m2!1sja!2sjp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
        </div>
      </section>
    </main>

    <footer>
      <div class="l-footer-box">
        <a class="footer-logo" href="#"><img src="./img/footer/logo.png" alt="logo"></a>

        <div class="footer-SNS">
          <a class="fab fa-facebook fa-3x"></a>
          <a class="fab fa-twitter fa-3x"></a>
          <a class="fab fa-instagram fa-3x"></a>
        </div>

        <p class="copyright">Copyright © 2020 YOSHIHARA AQUARIUM Inc. All Rights Reserved.</p>

        <div class="page-top">
          <a href="#">
            <div class="fas fa-caret-up fa-5x"></div>
            <div class="page-top-text">
              <p>click</p>
              <p>初メカラ？</p>
            </div>
          </a>
        </div>

        <figure class="top-img"><img src="./img/footer/top.png" alt="top"></figure>
      </div>
    </footer>
  </div>

  <!-- jsファイルはhtml読み込み後に実行 -->
  <script src="js/loading.js" type="text/javascript"></script>
  </body>
</html>
