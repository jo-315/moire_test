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
  <style>
  .child-category-item-wrap{text-align:center;overflow:auto;height:70px;margin-bottom:50px;position:relative}.child-category-item-wrap ul{margin:0 70px}.child-category-item-wrap ul li{list-style:none;width:calc(100% / 6);float:left;padding:20px 0 5px}.child-category-item-wrap ul li a{text-decoration:none;font-size:17px}@media screen and (max-width:1000px){.child-category-item-wrap ul{padding:10px 0}}@media screen and (max-width:850px){.child-category-item-wrap ul{margin:0 40px}}@media screen and (max-width:850px){.child-category-item-wrap ul{margin:0 20px}}@media screen and (max-width:512px){.child-category-item-wrap{height:40px;margin-bottom:0px}.child-category-item-wrap ul{display:none}}.archive-content-wrap{padding:0 70px 70px;box-shadow:0px 0px 3px 3px;position:relative;z-index:2;overflow:hidden}@media screen and (max-width:1230px){.archive-content-wrap{padding:0 50px 70px}}@media screen and (max-width:1070px){.archive-content-wrap{padding:0 30px 70px}}@media screen and (max-width:614px){.archive-content-wrap{padding:0 5px 50px}}@media screen and (max-width:380px){.archive-content-wrap{padding:0 0 35px}}.blog-post{background:#ffffff;float:left;width:calc((100% - 240px) / 3);height:490px;margin:0 40px 50px;box-shadow:3px 3px 3px 1px;position:relative}.blog-post a{position:absolute;display:block;width:100%;height:100%;top:0;left:0}.entry-header-top{height:20px;background:#2fcdb4}@media screen and (max-width:1230px){.blog-post{margin:0 20px 50px;width:calc((100% - 120px) / 3)}}@media screen and (max-width:1070px){.blog-post{height:435px}}@media screen and (max-width:1020px){.blog-post{height:460px}}@media screen and (max-width:890px){.blog-post{width:calc((100% - 80px) / 2);height:480px}}@media screen and (max-width:564px){.blog-post{width:calc((100% - 40px) / 2);margin:0 10px 50px}}@media screen and (max-width:524px){.blog-post{width:400px;height:350px;margin:0 auto 30px;float:none}}@media screen and (max-width:430px){.blog-post{width:340px;height:370px}}@media screen and (max-width:380px){.blog-post{width:290px;height:340px}}.archive-item-title{font-family:'Cabin',Helvetica,sans-serif;font-size:20px;line-height:25px;color:#575756;letter-spacing:2px;font-weight:600;margin:auto;text-transform:none}.entry-header{padding-bottom:30px}.archive-content-inner-wrap{text-align:center;padding:20px 20px 0}@media screen and (max-width:950px){.archive-content-inner-wrap{padding:20px 10px 0px}}@media screen and (max-width:500px){.entry-header{padding-bottom:10px}}@media screen and (max-width:524px){.archive-content-inner-wrap{padding:2px 10px 0px}}.entry-header .posted-on{color:#aaaaaa;font-size:15px;padding-bottom:10px;display:block}.archive-item-tag{text-align:center;margin-top:5px}.archive-item-tag span{margin:0 5px;color:#2fcdb4}.post-thumbnail-wrap{text-align:center;width:100%;height:300px;position:absolute;bottom:0}.post-thumbnail-wrap img{width:100%;object-fit:cover;height:100%}@media screen and (max-width:1070px){.post-thumbnail-wrap{height:250px}}@media screen and (max-width:524px){.post-thumbnail-wrap{height:200px}}@media screen and (max-width:380px){.post-thumbnail-wrap{height:150px}}.scrollFadein{opacity:0;transform:translateY(20px)}@charset "utf-8";.scrollFadein{opacity:0;transform:translateY(40px)}.content-effect-wrapper{width:100%;height:100%;overflow:hidden;position:relative}@charset "utf-8";.post-content{background:#ffffff;margin-bottom:10px;position:relative;box-shadow:0px 0px 3px 3px}
  </style>
  <link rel="preload" href=<?php echo get_stylesheet_uri() ?> as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href=<?php echo get_stylesheet_uri() ?>></noscript>
  <link rel="preload" href=<?php echo (get_template_directory_uri() . '/css/post.css') ?> as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href=<?php echo (get_template_directory_uri() . '/css/post.css') ?>></noscript>
  <link rel="preload" href=<?php echo (get_template_directory_uri() . '/css/font-awesome.min.css') ?> as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href=<?php echo (get_template_directory_uri() . '/css/font-awesome.min.css') ?>></noscript>
  <script>
    !function(t){"use strict";t.loadCSS||(t.loadCSS=function(){});var e=loadCSS.relpreload={};if(e.support=function(){var e;try{e=t.document.createElement("link").relList.supports("preload")}catch(a){e=!1}return function(){return e}}(),e.bindMediaToggle=function(t){function e(){t.addEventListener?t.removeEventListener("load",e):t.attachEvent&&t.detachEvent("onload",e),t.setAttribute("onload",null),t.media=a}var a=t.media||"all";t.addEventListener?t.addEventListener("load",e):t.attachEvent&&t.attachEvent("onload",e),setTimeout(function(){t.rel="stylesheet",t.media="only x"}),setTimeout(e,3e3)},e.poly=function(){if(!e.support())for(var a=t.document.getElementsByTagName("link"),n=0;n<a.length;n++){var o=a[n];"preload"!==o.rel||"style"!==o.getAttribute("as")||o.getAttribute("data-loadcss")||(o.setAttribute("data-loadcss",!0),e.bindMediaToggle(o))}},!e.support()){e.poly();var a=t.setInterval(e.poly,500);t.addEventListener?t.addEventListener("load",function(){e.poly(),t.clearInterval(a)}):t.attachEvent&&t.attachEvent("onload",function(){e.poly(),t.clearInterval(a)})}"undefined"!=typeof exports?exports.loadCSS=loadCSS:t.loadCSS=loadCSS}("undefined"!=typeof global?global:this);
  </script>

	<?php wp_head(); ?>
</head>

<body class="moire-body">
  <header role="banner">
    <?php get_template_part( 'template-parts/header', 'navigation' ); ?>
    <div class="header-img-wrapper">
      <div class="content-effect-wrapper">
        <div id="content-effect">
          <div class="post-header-title">

            <span>
              <?php echo $cat_name?>
            </span>

        </div>
      </div>
    </div>
	</header>
