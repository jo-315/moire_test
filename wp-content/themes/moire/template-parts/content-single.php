<?php
// 個別投稿ページのコンテンツ
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'article' ); ?>>
	<header>
		<div class="single-title-wrap">
			<?php
			moire_posted_date();
			the_title( '<h1 class="single-title">', '</h1>' );
			moire_category();
			?>
		</div>
	</header>

	<div class="single-content">
		<?php
      // 本文（ DBにデータはあるよん ）
			the_content(
				sprintf(
					wp_kses(
						'続きを読む %s <span class=\"meta-nav\">&rarr;</span>', array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				)
			);
		?>
	</div>
</article>
