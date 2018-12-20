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
                社会貢献活動に繋ぐWebメディア
              </span>
            </div>
          </div>
        </div>
      </div>

      <div class="right-top-column">
        <div class="right-top-column-content">
          <span>
            <div class='right-top-column-content-title'>
            moire(モアレ)
            </div>
            <p>
              私たちmoireのMissionは、<span class='font-bold'>社会貢献活動の促進</span>です。
            </p>
            <p>
              このMission達成のために私たちは、お金を目的にしない活動 <span class='font-bold'>「No Money Action」</span> をHPで発信していきます。
            </p>

            <p>
              No Money Action の中で社会貢献活動についても発信することで、社会貢献活動に関心のない人を社会貢献活動に繋いでいきます。
            </p>
          </span>
        </div>

        <div class="mission-button-wrap">
          <div class="mission-button">
            <a href="/about-us">moireの基本理念</a>
          </div>
        </div>
      </div>
    </div>

    <div class="block-wrapper">
      <div class="HP-content-wrapper">
        <div class="HP-content-column">
          <div class="HP-content-column-header">
            <span>
              No Money Action
            </span>
          </div>

          <div class="HP-content-column-logo">
            <img
              data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/blog_logo.svg"
              class="HP_logo lazyload"
            >
          </div>

          <div class="HP-content-column-content">
            No Money Action についての記事を掲載し、発信していきます。
          </div>

          <div class="HP-content-column-button">
            <a href='/category/article/'>
              No Money Action へ
            </a>
          </div>
        </div>

        <div class="HP-content-column">
          <div class="HP-content-column-header">
            <span>団体情報一覧</span>
          </div>

          <div class="HP-content-column-logo">
            <img
              data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/team_logo.svg"
              class="HP_logo lazyload"
            >
          </div>

          <div class="HP-content-column-content">
            社会貢献活動を行う団体の情報を手軽に見れるようにし、団体の活動参加を容易にします。
          </div>

          <div class="HP-content-column-button">
            <a href='/category/organization/'>
              団体一覧へ
            </a>
          </div>
        </div>

        <div class="HP-content-column">
          <div class="HP-content-column-header">
            <span>イベント情報一覧</span>
          </div>

          <div class="HP-content-column-logo">
            <img
              data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/event_logo.svg"
              class="HP_logo lazyload"
            >
          </div>

          <div class="HP-content-column-content">
            社会貢献活動のイベントも発信し、より社会貢献活動に参加しやすい環境を作ります。
          </div>

          <div class="HP-content-column-button">
            <a href='/category/event'>
              イベント情報一覧へ
            </a>
          </div>

        </div>
      </div>
    </div>
  </div>

<?php
get_footer();
