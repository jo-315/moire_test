<?php // 最初のHOMEページ ?>
<?php get_header('front'); //headerの読み込み ?>

  <div class='front-page-wrapper'>
    <div class='front-page-head-wrapper'>
      <div class="content-effect-wrapper">
        <div class="content-effect">
          <div class='main-content'>
            <div class="moire-title-wrap">
              <span class='moire-title'>
                moire
              </span>

              <span class="moire-sub-title">
                阪大生と社会活動を繋げる広報団体
              </span>
            </div>
          </div>
        </div>
      </div>

      <div class="right-top-column">
        <span>
          私たちmoireは、</br>
          社会活動を「広報」という手段によって支援することで</br>
          世の中を良い方向へ進めていきます。</br>
          </br>

          そのために、</br>
          イベントとHPを通して</br>
          阪大生の社会活動の</br>
          <span style='font-weight: bold;'>知る・関わる</span></br>
          を活発にします。
        </span>

        <div class="mission-button">
          <a href="/about-us">moireの基本理念</a>
        </div>
      </div>
    </div>

    <div class="block-wrapper">
      <div class="block_header">
        <span>1.HP</span>
      </div>

      <div class="HP-content-wrapper">
        <div class="HP-content-column scrollFadein">
          <div class="HP-content-column-header">
            記事一覧
          </div>

          <div class="HP-content-column-logo">
            <img
              src="<?php echo get_stylesheet_directory_uri(); ?>/images/blog_logo.svg"
              class="HP_logo"
            >
          </div>

          <div class="HP-content-column-content">
            ブログでは様々な分野について書くことで、社会活動に興味のない人にもmoireを知ってもらえるきっかけを作ります。
          </div>

          <div class="HP-content-column-button">
            <a href='/category/blog/'>
              ブログ一覧へ
            </a>
          </div>
        </div>

        <div class="HP-content-column scrollFadein">
          <div class="HP-content-column-header">
            団体情報一覧
          </div>

          <div class="HP-content-column-logo">
            <img
              src="<?php echo get_stylesheet_directory_uri(); ?>/images/team_logo.svg"
              class="HP_logo"
            >
          </div>

          <div class="HP-content-column-content">
            各団体の情報を手軽に見れるHPを作成し、団体情報へのリーチを容易にし、団体情報のプラットホームを作ります。
          </div>

          <div class="HP-content-column-button">
            <a href='/category/organization/'>
              団体一覧へ
            </a>
          </div>
        </div>

        <div class="HP-content-column scrollFadein">
          <div class="HP-content-column-header">
            イベント情報一覧
          </div>

          <div class="HP-content-column-logo">
            <img
              src="<?php echo get_stylesheet_directory_uri(); ?>/images/event_logo.svg"
              class="HP_logo"
            >
          </div>

          <div class="HP-content-column-content">
            各団体の情報にプラスしてイベント情報も載せることで、より社会的な活動に参加しやすい環境を作ります。
          </div>

          <div class="HP-content-column-button">
            <a href='/category/event'>
              イベント情報一覧へ
            </a>
          </div>

        </div>
      </div>
    </div>

    <div class="between_block">
      <div class="between_block_effect">
      </div>
    </div>

    <div class="block-wrapper">
      <div class="block_header">
        <span>2.イベント</span>
      </div>

      <div class="event_block_content scrollFadein">
        <span>
          定期的にイベントを行い各社会団体の活動を知ってもらいます。
          さらにただ知ってもらうでけでなく、活動の楽しさ・良さをも知ってもらい、
          社会団体に対する参加の敷居下げていきます。
          このイベントは社会的活動に関心のない人たちをも大規模に巻き込んでいきます。
        </span>
      </div>

      <div class="event_block_img_wrap scrollFadein">
        <img
          src="<?php echo get_stylesheet_directory_uri(); ?>/images/NICE.JPG"
          class="event_block_img"
        >
        <img
          src="<?php echo get_stylesheet_directory_uri(); ?>/images/ASANTA.jpg"
          class="event_block_img"
        >
      </div>
    </div>
  </div>

<?php
get_footer();
