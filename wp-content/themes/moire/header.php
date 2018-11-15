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
<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="site-header" role="banner">

		<div class="header-inner-top">
			<div class="container container-header">
				<div class="header-inner">

					<div class="main-navigation-wrap">

						<div class="main-navigation-wrap-inner
						<?php
						echo wp_nav_menu(
							array(
								'theme_location' => 'social',
								'fallback_cb'    => false,
								'echo'           => false,
							)
						) !== false ? '' : ' no-social-menu';
						?>
						">

							<?php
								wp_nav_menu(
									array(
										'theme_location'  => 'social',
										'menu_id'         => 'social-icons-menu',
										'menu_class'      => 'social-navigation',
										'link_before'     => '<span class="screen-reader-text">',
										'link_after'      => '</span>',
										'container_class' => 'header-social-icons',
										'fallback_cb'     => false,
									)
								);
							?>

							<nav id='site-navigation' class='main-navigation' role='navigation'>
								<div id='primary-menu' class='menu'>
									<ul aria-expanded='false' class='nav-menu'>
										<li class='page_item page-item-7'>
											<a href="/">HOME</a>
										</li>
										<li class='page_item page-item-7'>
											<a href="/about/">ABOUT</a>
										</li>
										<li class='page_item page-item-8'>
											<a href="/category/blog/">BLOG</a>
										</li>
                      <li class='page_item page-item-8'>
											<a href="/category/event/">EVENT</a>
										</li>
                    <li class='page_item page-item-8'>
											<a href="/category/organization/">ORGANIZATION</a>
										</li>
                    <li class='page_item page-item-8'>
											<a href="/corporation/">CORPORATION</a>
										</li>
									</ul>
								</div>
							</nav>

							<div class="menu-toggle-button-wrap">
								<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fa fa-bars"></i></button>
							</div>

							<div class="header-search">
								<?php get_search_form(); ?>
							</div>

						</div>
					</div>
				</div><!-- .container-header -->
			</div>
		</div>

    <!-- header画像 -->
		<div class="header-inner-site-branding header-logo-wrap-single">
      <!-- header画像挿入のfunction -->
		</div>

		<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
			<?php if(function_exists('bcn_display'))
			{
				bcn_display();
			}?>
		</div>


	</header><!-- #masthead -->
	<div id="content" class="site-content">
		<div class="container">
