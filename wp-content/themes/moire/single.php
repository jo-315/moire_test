<?php
// 個別投稿ページ
?>

<?php
get_header();
?>

	<div class="content-wrap">
		<div id="primary" class="content-area content-area-with-sidebar">
			<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'single' );

        // 投稿ページに表示されるページネーション
        // 要最適化
				the_post_navigation(
					array(
						'prev_text' => _x( '<span class="post-title">%title</span>', 'previous post' ),
						'next_text' => _x( '<span class="post-title">%title</span>', 'next post' ),
					)
				);

				// If comments are open or we have at least one comment, load up the comment template.
				// コメントは残す
				if ( comments_open() || get_comments_number() ) :
					echo '<div class="comments-area-wrap">';
					comments_template();
					echo '</div>';
				endif;

			endwhile; // End of the loop.
			?>

			</main><!-- #main -->
		</div><!-- #primary -->

		<?php get_sidebar(); ?>

	</div><!-- .content-wrap -->

<?php
get_footer();
