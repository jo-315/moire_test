<?php
// ヘッダー
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <!-- 共通設定 -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <!-- 個別投稿 -->
	<?php if(is_single()) :
    // stylesheet読み込み
    ?>
  <!-- 固定ページ -->
  <?php elseif(is_page()) :
    // stylesheet読み込み
    ?>
  <!-- カテゴリ一覧 -->
  <?php elseif(is_category()) :
    // stylesheet読み込み
    ?>
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body>
  <?php //TODO toggle ?>
	<header role="banner">
		<div class="header-inner-top">
			<div class="header-main-navigation-wrap">
  			<nav class="header-main-navigation">
					<ul class='header-main-navigation-items-wrap'>
						<li class='header-main-navigation-item nav_default_underline'>
							<a href="/">HOME</a>
						</li>
						<li class='header-main-navigation-item'>
							<a href="/about/">ABOUT</a>
						</li>
						<li class='header-main-navigation-item'>
							<a href="/category/blog/">BLOG</a>
						</li>
              <li class='header-main-navigation-item'>
							<a href="/category/event/">イベント一覧</a>
						</li>
            <li class='header-main-navigation-item'>
							<a href="/category/organization/">団体一覧</a>
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
      </div>

			<div class="header-menu-toggle-button-wrap">
				<button class="header-menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fa fa-bars"></i></button>
			</div>

			<div class="header-search">
				<?php get_search_form(); ?>
			</div>
		</div>

    <!-- header画像 -->
		<div class="header-inner-site-branding header-logo-wrap-single">
      <!-- header画像挿入のfunction -->
		</div>

    <!-- パンくず -->
		<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
			<?php if(function_exists('bcn_display'))
			{
				bcn_display();
			}?>
		</div>


	</header>
	<div id="content" class="site-content">
		<div class="container">
