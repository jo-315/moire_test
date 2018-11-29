<?php
/*
カテゴリー毎、投稿一覧
blog,event,orgで同じもの
*/

  $categories = get_the_category();
  foreach($categories as $category){
    if($category->parent != 0){
      $sub_cat_name = $category->cat_name;
    }else{
      $cat_name = $category->cat_name;
    }
  };

  $space_class = '';
  if ($cat_name !== '記事一覧') {
    $space_class = 'post-content-top';
  };
?>

<?php
get_header('post');
?>

  <div id="content" class="site-content post-content">
    <div class="archive-content-wrap <?php echo $space_class ?>">
      <?php if ($cat_name === '記事一覧') {?>
        <div class="child-category-item-wrap">
          <ul>
            <li>
              <a href="/international-cooperation">
                国際協力
              </a>
            </li>
            <li>
              <a href="/nature-conservation">
                自然保護
              </a>
            </li>
            <li>
              <a href="/regional-vitalization">
                地域活性
              </a>
            </li>
            <li>
              <a href="/study-abroad">
                留学
              </a>
            </li>
            <li>
              <a href="/intern">
                インターン
              </a>
            </li>
            <li>
              <a href="/other">
                その他
              </a>
            </li>
          </ul>
        </div>
      <?php } ?>

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
