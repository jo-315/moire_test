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
  <style>
  .scrollFadein{opacity:0;transform:translateY(20px)}.scrollFadein{opacity:0;transform:translateY(40px)}.content-effect-wrapper{width:100%;height:100%;overflow:hidden;position:relative}.about_content_block{width:100%;background:#ffffff;text-align:center;font-size:17px;padding:50px 10px}@media screen and (max-width:550px){.about_content_block{padding:10px}}.member_content_wrap{width:900px;margin:0 auto;overflow:auto}.member_content{width:50%;float:left;border-bottom:solid 0.5px #2fcbb2;text-align:left;padding:0 10px}.profile_img{width:100px;float:left}.profile_text{width:calc(100% - 120px);float:left;font-size:15px;margin-left:20px}.profile_text_title{text-align:center;font-weight:bold;font-size:17px;margin-bottom:10px}@media screen and (max-width:900px){.member_content_wrap{width:95%}}@media screen and (max-width:626px){.member_content{width:100%}}
  </style>
  <link rel="preload" href=<?php echo get_stylesheet_uri() ?> as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href=<?php echo get_stylesheet_uri() ?>></noscript>
  <link rel="preload" href=<?php echo (get_template_directory_uri() . '/css/page.css') ?> as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href=<?php echo (get_template_directory_uri() . '/css/page.css') ?>></noscript>
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
          <span>メンバー</span>
        </div>
      </div>
    </div>
	</header>
