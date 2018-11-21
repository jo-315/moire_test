<?php // 最初のHOMEページ ?>
<?php get_header('front'); //headerの読み込み ?>

<div class='front-page-wrapper'>
  <div class='front-page-head-wrapper'>
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

      <div class="right-top-column">
        <span>
          私たちmoireは、</br>
          社会活動を促進することで</br>
          世の中を良い方向へ進めていくことを</br>
          目標としています。</br>
          </br>

          そのために、</br>
          イベントとwebサイトを通して</br>
          阪大生の社会活動の</br>
          <span style='font-weight: bold;'>知る・関わる</span></br>
          を支援していきます。
        </span>

        <div class="mission-button">
          <a href="/about/mission">私たちの基本理念をより詳しく</a>
        </div>
      </div>
    </div>
  </div>

  <div class="HP-block-wrapper">
    <div class="HP-block-header">
      <span>1.HP</span>
    </div>

    <div class="HP-content-wrapper">
      <div class="HP-content-column">
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
      </div>

      <div class="HP-content-column">
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
      </div>

      <div class="HP-content-column">
        <div class="HP-content-column-header">
          ブログ
        </div>

        <div class="HP-content-column-logo">
          <img
            src="<?php echo get_stylesheet_directory_uri(); ?>/images/blog_logo.svg"
            class="HP_logo"
          >
        </div>

        <div class="HP-content-column-content">
          ブログでは様々な分野について書くことで社会団体に興味のない人にもmoireを知ってもらえるきっかけを作ります。
        </div>
      </div>


    </div>
  </div>
</div>
<?php
get_footer();
