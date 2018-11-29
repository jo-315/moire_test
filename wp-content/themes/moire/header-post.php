<?php
// ヘッダー
?><!DOCTYPE html>
<?php
  // 現在のカテゴリ
  $current_cat = get_queried_object();
  $current_cat_name = $current_cat->name;

  //親・子カテゴリ
  $categories = get_the_category();
  foreach($categories as $category){
    if($category->parent != 0){
      $sub_cat_name = $category->cat_name;
    }else{
      $cat_name = $category->cat_name;
    }
  }
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

            <?php if ($sub_cat_name === $current_cat_name) { ?>
              <span>
                <?php echo $sub_cat_name . 'の' . $cat_name?>
              </span>
            <?php } else { ?>
              <span>
                <?php echo $cat_name?>
              </span>
            <?php } ?>

        </div>
      </div>
    </div>
	</header>
