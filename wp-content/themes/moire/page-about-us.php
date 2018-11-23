<?php
/*
カテゴリー毎、投稿一覧
blog,event,orgで同じもの
*/
?>

<?php
get_header('about-us');
?>

  <div id="content" class="site-content post-content">
    <div class="archive-content-wrap">
			<div id="primary">
				<main id="main" role="main">
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
  </div>

<?php
get_footer();
