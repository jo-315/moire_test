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

  <nav class="header-main-navigation">
    <ul class='header-main-navigation-items-wrap'>
      <li class='header-main-navigation-item nav_default_underline'>
        <a href="/">HOME</a>
      </li>
      <li class='header-main-navigation-item'>
        <a href="/about/">ABOUT</a>
      </li>
        <li class='header-main-navigation-item'>
        <a href="/category/event/">イベント一覧</a>
      </li>
      <li class='header-main-navigation-item'>
        <a href="/category/organization/">団体一覧</a>
      </li>
      <li class='header-main-navigation-item'>
        <a href="/category/blog/">BLOG</a>
      </li>
      <li class='header-main-navigation-item'>
        <a href="/corporation/">団体様へ</a>
      </li>
      <li class='header-main-navigation-item'>
        <a href="/about/recruit/">リクルート</a>
      </li>
      <span id='header-nav-underline'></span>
    </ul>
  </nav>

  <div class="header-menu-toggle-button-wrap">
    <button class="header-menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fa fa-bars"></i></button>
  </div>
</div>
