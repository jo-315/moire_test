<?php
// ヘッダー
?><!DOCTYPE html>
<?php
  $category = get_the_category();
  $cat_name = $category[0]->cat_name;
?>
<html <?php language_attributes(); ?>>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="<?php bloginfo( 'charset' ); ?>">
	<?php wp_head(); ?>
</head>

<body class="moire-body">
  <header role="banner">
    <?php get_template_part( 'template-parts/header', 'navigation' ); ?>
    <div class="header-img-wrapper">
      <div class="content-effect-wrapper">
        <div id="content-effect">
          <div class="post-header-title">
          <span>moireとは</span>
        </div>
      </div>
    </div>
	</header>
