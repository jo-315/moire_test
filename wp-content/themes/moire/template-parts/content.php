<?php
/*
カテゴリー毎、投稿一覧内のアイテム
*/
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-post entry-content-wrap scrollFadein' ); ?>>
	<header class="entry-header">
		<div class="entry-header-top">
		</div>

    <div class="archive-content-inner-wrap">
			<?php
				moire_posted_date();
				the_title( '<h2 class="archive-item-title">', '</h2>' );
			?>

      <div class="archive-item-tag">
	      <?php
					$tags = get_the_tags();
					if ($tags) {
						foreach($tags as $tag) {
							echo '<span>' . $tag->name . '</span>';
						}
					}
				?>
			</div>
		</div>
	</header>

	<?php
		moire_post_thumbnail()
	?>

	<a
	  href="<?php echo esc_url(get_permalink()) ?>"
		rel="bookmark"
	>
	</a>
</article><!-- #post-## -->
