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
	<header role="banner">
    <?php get_template_part( 'template-parts/header', 'navigation' ); ?>
	</header>

	<div id="content" class="site-content">
		<div class="container">
