<?php
/*
カテゴリー毎、投稿一覧
blog,event,orgで同じもの
*/
?>

<?php
get_header('post');
?>

	      <div class="content-wrap">
					<div id="primary" class="content-area content-area-arch content-area-with-sidebar">
						<main id="main" class="site-main" role="main">
							<?php
							/* 投稿記事をloopで表示 */
							while ( have_posts() ) :
								the_post();

			          // 投稿記事のアイテム
								get_template_part( 'template-parts/content' );

							endwhile;

							the_posts_navigation(); // 2ページ目へ
						?>
						</main>
					</div>
				</div>

<?php
get_footer();
