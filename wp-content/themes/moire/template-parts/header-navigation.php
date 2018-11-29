<?php
// ヘッダーのナビゲーション
?>
<div class="header-inner-top">
  <div class="header-logo-wrap">
    <a href="/">
      <img
        src="<?php echo get_stylesheet_directory_uri(); ?>/images/moire_logo.svg"
        class="moire-logo"
      >
    </a>
  </div>

  <div class='header-title-wrap'>
    <a href="/">
      <span class="header-title">moire</span>
    </a>
  </div>

  <div class="header-main-navigation-wrap">
    <nav class="header-main-navigation">
      <ul class='header-main-navigation-items-wrap'>
        <li class='header-main-navigation-item'>
          <a href="/" class="header-main-navigation-item--main">
            HOME
          </a>
        </li>
        <li class='header-main-navigation-item header-main-navigation-item--article'>
          <a href="/category/article/" class="header-main-navigation-item--main">
            記事一覧
          </a>
          <div class="header-main-navigation-child">
            <ul>
              <li>
                <a href="/international-cooperation">
                  国際協力
                </a>
              </li>
              <li>
                <a href="/nature-conservation">
                  自然保護
                </a>
              </li>
              <li>
                <a href="/regional-vitalization">
                  地域活性
                </a>
              </li>
              <li>
                <a href="/study-abroad">
                  留学
                </a>
              </li>
              <li>
                <a href="/intern">
                  インターン
                </a>
              </li>
              <li>
                <a href="/other">
                  その他
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li class='header-main-navigation-item'>
          <a href="/category/organization/" class="header-main-navigation-item--main">
            団体一覧
          </a>
        </li>
        <li class='header-main-navigation-item'>
          <a href="/category/event/" class="header-main-navigation-item--main">
            イベント一覧
          </a>
        </li>
        <li class='header-main-navigation-item'>
          <a href="/about-us/" class="header-main-navigation-item--main">
            ABOUT US
          </a>
          <div class="header-main-navigation-child">
            <ul>
              <li>
                <a href="/about-us/">
                  ABOUT US
                </a>
              </li>
              <li>
                <a href="/member">
                  MEMBER
                </a>
              </li>
              <li>
                <a href="/recruit">
                  メンバー募集
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li class='header-main-navigation-item'>
          <a href="/contact-us/" class="header-main-navigation-item--main">
            お問い合わせ
          </a>
        </li>
      </ul>
    </nav>
  </div>

  <div class="header-menu-toggle-button-wrap">
    <button class="header-menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fa fa-bars"></i></button>
  </div>
</div>
