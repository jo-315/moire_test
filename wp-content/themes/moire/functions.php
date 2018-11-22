<?php

/**
 * Common ----------------------------------------------------------------------
 */

function moire_setup() {
	add_theme_support(
		'custom-header', apply_filters(
			'moire_custom_header_args', array(
				'default-image' => '',
				'width'         => 1020,
				'height'        => 250,
				'flex-height'   => true,
				'flex-width'    => true,
			)
		)
	);
}
/**
 * Register widget area.
 */
function moire_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'サイドバー' ),
			'id'            => 'moire-sidebar-1',
			'description'   => esc_html__( 'ここにウィジェットを追加します。' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebars(
		3, array(
			/* translators: d: Sidebar number */
			'name'          => esc_html__( 'フッターウィジェットエリア%d' ),
			'id'            => 'moire-footer-widget-area',
			'class'         => 'col-sm-4',
			'description'   => esc_html__( 'ここにウィジェットを追加します。' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}

/*
SVGを許可
 */
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}

add_filter('upload_mimes', 'cc_mime_types');
add_action( 'after_setup_theme', 'moire_setup' );
add_action( 'widgets_init', 'moire_widgets_init' );


/*
### Header ### -----------------------------------------------------------------
*/
function moire_scripts() {
	wp_enqueue_style( 'moire-style', get_stylesheet_uri());
	wp_enqueue_style( 'moire-plugin-style', get_template_directory_uri() . '/css/plugin-style.css');
	wp_enqueue_style( 'moire-widget-style', get_template_directory_uri() . '/css/widget.css');
	wp_enqueue_style( 'moire-header-style', get_template_directory_uri() . '/css/header_nav.css');
	wp_enqueue_style( 'moire-footer-style', get_template_directory_uri() . '/css/footer.css');

	// FontAwesomeの読み込み
	wp_enqueue_style( 'moire-fontAwesome-style', get_template_directory_uri() . '/css/font-awesome.min.css');

	// jqueryの読み込み
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'jquery-moire' ,get_template_directory_uri() . '/js/functions.js', array('jquery'));
	wp_enqueue_script( 'jquery-twinkle-moire' ,get_template_directory_uri() . '/js/jquery.twinkle-0.8.0.min.js');

  // ページごと
	if(is_single()) : // 個別投稿
		wp_enqueue_style( 'moire-single-style', get_template_directory_uri() . '/css/single.css');
		wp_enqueue_style( 'moire-post-style', get_template_directory_uri() . '/css/post-header.css');
	elseif(is_category()) : // カテゴリ一覧
		wp_enqueue_style( 'moire-archive-style', get_template_directory_uri() . '/css/archive.css');
		wp_enqueue_style( 'moire-post-style', get_template_directory_uri() . '/css/post-header.css');
	elseif(is_front_page()) : // フロントページ
		wp_enqueue_script( 'jquery-moire-front' ,get_template_directory_uri() . '/js/front.js', array('jquery'));
		wp_enqueue_style( 'moire-front-style', get_template_directory_uri() . '/css/front.css');
	elseif(is_page()) : // 固定ページ
	endif;
}

function add_header_image() {
	$header_image = get_header_image();
	$custom_header_css = '
	  .header-img {
	    background-image: url(' . esc_url( $header_image ) .');
	  }';
	wp_add_inline_style( 'moire-header-style', $custom_header_css );
}

// headerの不要タグを削除
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
remove_action('wp_head', '‘rsd_link’');
remove_action('wp_head', '‘wp_shortlink_wp_head’');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);

// フック一覧
// スタイルの追加
add_action( 'wp_enqueue_scripts', 'moire_scripts' );
// header画像の追加
add_action( 'wp_enqueue_scripts', 'add_header_image' );


/*
### Archeive ### ---------------------------------------------------------------
*/

// 投稿一覧で投稿日時を表示
function moire_posted_date() {
	// $time_string = formatの決定
	$time_string  = '<time class="entry-date published updated" datetime="%1$s" itemprop="dateModified">%2$s</time><meta itemprop="datePublished" content="%2$s">';

	if ( ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) ) {
		$time_string = '%5$s <time datetime="%3$s" itemprop="dateModified">%4$s</time><meta itemprop="datePublished" content="%4$s">';
	}

// 日付の出力調整
	$time_string = sprintf(
		$time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() ),
		'Last Updated:',
		'Posted:'
	);

	echo '<span class="posted-on">' . $time_string . '</span>'; // WPCS: XSS OK.
}

// Get the first image from post
function moire_catch_that_image() {
	global $post;
	$first_img = false;
	ob_start();
	ob_end_clean();
	preg_match_all( '/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches );
	if ( ! empty( $matches[1][0] ) ) {
		$first_img = $matches[1][0];
	}
	return $first_img;
}

/**
 * Post thumbnail
 */
function moire_post_thumbnail() {
	$post_format = get_post_format();
	if ( has_post_thumbnail() ) {
		echo '<div class="post-thumbnail-wrap">';
		the_post_thumbnail();
		echo '</div>';
	} else {
		$post_image_link           = moire_catch_that_image();
		$zillah_image_as_thumbnail = get_theme_mod( 'zillah_image_as_thumbnail', false );
		if ( $post_image_link && $zillah_image_as_thumbnail ) {
			echo '<div class="post-thumbnail-wrap">';
			echo '<img width="1170" height="545" src="' . esc_attr( $post_image_link ) . '" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="' . esc_attr( get_the_title() ) . '">';
			echo '</div>';
		}
	}
}

/**
 * 抜粋文章の末尾変更 & 続きを読む
 */
function moire_excerpt_more() {
	/* translators: s: The post title */
	return '...<span class="clearfix"></span><a href="' . esc_url( get_permalink( get_the_ID() ) ) . '" class="more-link">' . sprintf( '続きを読む %s', the_title( '<span class="screen-reader-text">"', '"</span>', false ) . ' <span class="meta-nav">&rarr;</span>' ) . '</a>';
}

//read more link
function moire_read_more_link() {
	/* translators: s: The post title */
	return '<a href="' . esc_url( get_permalink( get_the_ID() ) ) . '" class="more-link">' . sprintf( '続きを読む %s', the_title( '<span class="screen-reader-text">"', '"</span>', false ) . ' <span class="meta-nav">&rarr;</span>' ) . '</a>';
}

add_filter( 'excerpt_more', 'moire_excerpt_more' );

add_filter( 'the_content_more_link', 'moire_read_more_link' );
