<?php
// ヘッダー
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="<?php bloginfo( 'charset' ); ?>">
	<?php wp_head(); ?>
</head>

<body class="moire-body">
  <div class="content-effect-wrap">
    <div id="content-effect">
      <header role="banner">
        <?php get_template_part( 'template-parts/header', 'navigation' ); ?>
        <div class="header-img-wrapper">
          <img
            src="<?php echo get_stylesheet_directory_uri(); ?>/images/BLOG_header.svg"
          >
        </div>
    	</header>

    	<div id="content" class="site-content">
