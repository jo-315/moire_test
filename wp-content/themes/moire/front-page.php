<?php // 最初のHOMEページ ?>
<?php get_header('front'); ?>

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
          メンバーが本気で取り組んでいる活動を</br>
          発信していく団体です。</br>
          </br>

          発信していく分野は多岐に渡り、</br>
          それにより今まで知らなかった異分野との出会いを</br>
          実現します。</br>
          </br>

          そして、最終的には社会活動に興味をもってもらうことで</br>
          今以上に社会活動が活発な世の中にします。</br>
          </br>

          具体的な方法としては、</br>
          阪大生をターゲットとして</br>
          イベントとHPの運営を行うことで、</br>
          阪大生の社会活動に対する</br>
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
              data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/blog_logo.svg"
              class="HP_logo lazyload"
            >
          </div>

          <div class="HP-content-column-content">
            メンバーが本気で取り組んでいる活動についての記事を掲載し、発信していきます。
          </div>

          <div class="HP-content-column-button">
            <a href='/category/article/'>
              記事一覧へ
            </a>
          </div>
        </div>

        <div class="HP-content-column scrollFadein">
          <div class="HP-content-column-header">
            団体情報一覧
          </div>

          <div class="HP-content-column-logo">
            <img
              data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/team_logo.svg"
              class="HP_logo lazyload"
            >
          </div>

          <div class="HP-content-column-content">
            社会活動を行う団体の情報を手軽に見れるようにし、団体情報へ関わることを容易にします。
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
              data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/event_logo.svg"
              class="HP_logo lazyload"
            >
          </div>

          <div class="HP-content-column-content">
            各団体の情報にプラスしてイベント情報も載せることで、より社会活動に参加しやすい環境を作ります。
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
          社会団体の活動を知ることができるイベントを行います。
          さらに、ただ知ってもらうでけでなく、活動の楽しさ・良さをも知ってもらい、
          社会団体に対する参加の敷居下げていきます。
        </span>
      </div>

      <div class="event_block_img_wrap scrollFadein">
        <img
          data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/NICE.JPG"
          class="event_block_img lazyload"
        >
        <img
          data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/ASANTA.jpg"
          class="event_block_img lazyload"
        >
      </div>
    </div>
  </div>

<?php
get_footer();
