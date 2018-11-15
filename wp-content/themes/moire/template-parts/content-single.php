<?php
// 個別投稿ページのコンテンツ
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'article entry-content-wrap' ); ?>>

	<header class="entry-header">
		<div class="content-inner-wrap">
			<?php
			moire_posted_date();
			the_title( '<h1 class="entry-title">', '</h1>' );
			moire_category();
			?>
		</div>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<div class="content-inner-wrap">
			<?php
        // 本文（ DBにデータはあるよん ）
				the_content(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. */
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
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<div class="content-inner-wrap">
			<?php // zillah_entry_footer(); ?>
		</div>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
