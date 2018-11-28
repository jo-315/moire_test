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

				<div class="related-post-wrap">
					<div class="related-post-title">
						<span>関連記事</span>
					</div>

					<ul class="related-post-content">

						<?php
							$categories = get_the_category($post->ID);
							$category_ID = array();

							foreach($categories as $category){
							    array_push($category_ID,$category->cat_ID);
							}

							$posts_number = 6; // 表示したい件数を指定

							$args = array(
							    'post__not_in'=>array($post->ID), // 現在のページの投稿を除外
							    'category__in'=>$category_ID, // 現在の投稿のカテゴリーの関連記事を取得
							    'orderby'=>'rand', // ランダムに並べる
							    'posts_per_page'=>$posts_number, // 表示する件数の指定
							);
							$wp_query = new WP_Query($args);

					    while($wp_query->have_posts()):$wp_query->the_post();
					  ?>

								<li class="related-post-item-wrap">
									<div class="related-post-item-top">
									</div>
									<div class="related-post-item-desc">
										<span class="posted"><?php moire_posted_date(); ?></span></br>
										<div class="title-wrap">
											<span class="title"><?php the_title(); ?></span></br>
										</div>
										<span class="tag">
											<?php
												$tags = get_the_tags();
												if ($tags) {
													foreach($tags as $tag) {
														echo '<span>' . $tag->name . '</span>';
													}
												} else {
													echo '<span>タグなし</span>';
												}
											?>
										</span>
									</div>
									<div class="related-post-img-wrapper">
										<?php the_post_thumbnail('large'); ?>
									</div>
									<a href="<?php the_permalink(); ?>">
									</a>
								</li>

						<?php endwhile; ?>
					</ul>
	      </div>
	    </div>
		</div>
	</div>

<?php
get_footer();
