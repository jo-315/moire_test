<?php
// 個別投稿ページ
?>

<?php
get_header('post');
?>

	<div id="content" class="site-content post-content">
		<div class="content-wrap">
			<div id="primary" class="single-content-area">
				<main id="main" role="main">

				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', 'single' );

	        // 投稿ページに表示されるページネーション
	        // 要最適化
					// the_post_navigation(
					// 	array(
					// 		'prev_text' => _x( '<span class="post-title">%title</span>', 'previous post' ),
					// 		'next_text' => _x( '<span class="post-title">%title</span>', 'next post' ),
					// 	)
					// );

					// If comments are open or we have at least one comment, load up the comment template.
					// TODO コメントは残す
					// if ( comments_open() || get_comments_number() ) :
					// 	echo '<div class="comments-area-wrap">';
					// 	comments_template();
					// 	echo '</div>';
					// endif;

				endwhile;
				?>

				</main>
			</div>
		</div>
	</div>

<?php
get_footer();
