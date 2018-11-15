<?php
// 固定ページ
// TODO 固定ページは全てファイルつくる
// page-hogehoge.php
get_header(); ?>

	</div><!-- .container -->

	<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					echo '<div class="comments-area-wrap">';
					comments_template();
					echo '</div>';
				endif;

			endwhile; // End of the loop.
			?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
