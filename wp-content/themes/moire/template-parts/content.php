<?php
/*
カテゴリー毎、投稿一覧内のアイテム
*/
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-post entry-content-wrap' ); ?>>

	<header class="entry-header">
		<div class="content-inner-wrap">
			<?php
			moire_posted_date(); // 投稿日
			// title
			the_title( '<h2 class="entry-title entry-title-blog"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			moire_category(); // カテゴリー名
			?>
		</div>
	</header><!-- .entry-header -->

	<?php
	  // image
		moire_post_thumbnail()
	?>

	<div class="entry-content">
		<div class="content-inner-wrap">
			<?php
				$pos = strpos( $post->post_content, '<!--more-->' );
				if ( $pos <= 0 ) {
					// 基本こっち
					the_excerpt();
				} else {
					the_content( false );
					echo moire_read_more_link();
				}

				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . esc_html__( 'ページ' ),
						'after'  => '</div>',
					)
				);
			?>
		</div>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
