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
        <li>
          <a href="/">
            HOME
          </a>
        </li>
      </ul>
    </nav>
  </div>

  <div class="header-menu-toggle-button-wrap">
    <button class="header-menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fa fa-bars"></i></button>
  </div>
</div>
