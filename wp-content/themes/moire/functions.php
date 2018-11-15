<?php

/*
### Header ###
*/
function moire_scripts() {
	// style.cssの読み込み
	wp_enqueue_style( 'moire-style', get_stylesheet_uri());
	// header.cssの読み込み
	// wp_enqueue_style( 'moire-style', get_stylesheet_uri());
	// footer.cssの読み込み
	// wp_enqueue_style( 'moire-style', get_stylesheet_uri());
}

function add_header_image() {
	// $header_image = get_header_image();
	// $custom_header_css .= '
	//   .header-inner-site-branding {
	//       background-image: url(' . esc_url( $header_image ) . ');
	//   }';
	// wp_add_inline_style( 'moire-style', $custom_header_css );
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
// add_action( '', 'add_header_image' );


/*
### Archeive ###
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

	$posted_on = '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>';

	echo '<span class="posted-on">' . $posted_on . '</span>'; // WPCS: XSS OK.
}

// カテゴリーの表示
function moire_category() {
	$categories_list = get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'zillah' ) );
	if ( $categories_list ) {
		printf(
			'<span class="cat-links"><span class="screen-reader-text">%1$s </span>%2$s</span>',
			_x( 'Categories', 'Used before category names.', 'zillah' ),
			$categories_list
		);
	}
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
		echo '<a ' . ( $post_format !== 'quote' ? 'href="' . esc_url( get_permalink() ) . '"' : '' ) . ' class="post-thumbnail" rel="bookmark">';
		the_post_thumbnail();
		echo '</a>';
		echo '</div>';
	} else {
		$post_image_link           = moire_catch_that_image();
		$zillah_image_as_thumbnail = get_theme_mod( 'zillah_image_as_thumbnail', false );
		if ( $post_image_link && $zillah_image_as_thumbnail ) {
			echo '<div class="post-thumbnail-wrap">';
			echo '<a ' . ( $post_format !== 'quote' ? 'href="' . esc_url( get_permalink() ) . '"' : '' ) . ' class="post-thumbnail" rel="bookmark">';
			echo '<img width="1170" height="545" src="' . esc_attr( $post_image_link ) . '" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="' . esc_attr( get_the_title() ) . '">';
			echo '</a>';
			echo '</div>';
		}
	}
}

/**
 * 抜粋文章の末尾変更 & 続きを読む
 */
function moire_excerpt_more() {
	/* translators: s: The post title */
	return '...<span class="clearfix clearfix-post"></span><a href="' . esc_url( get_permalink( get_the_ID() ) ) . '" class="more-link">' . sprintf( '続きを読む %s', the_title( '<span class="screen-reader-text">"', '"</span>', false ) . ' <span class="meta-nav">&rarr;</span>' ) . '</a>';
}

//read more link
function moire_read_more_link() {
	/* translators: s: The post title */
	return '<a href="' . esc_url( get_permalink( get_the_ID() ) ) . '" class="more-link">' . sprintf( '続きを読む %s', the_title( '<span class="screen-reader-text">"', '"</span>', false ) . ' <span class="meta-nav">&rarr;</span>' ) . '</a>';
}

add_filter( 'excerpt_more', 'moire_excerpt_more' );

add_filter( 'the_content_more_link', 'moire_read_more_link' );
