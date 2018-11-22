<!-- index.phpは使わない -->
<?php get_header(); //headerの読み込み ?>
	<div class="content-wrap">
		<div id="primary" class="content-area content-area-arch">
			<main id="main" class="site-main" role="main">
			<?php
			if ( have_posts() ) :
				if ( is_home() && ! is_front_page() ) :
				?>
					<header>
						<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					</header>
				<?php
				endif;
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/content', get_post_format() );
				endwhile;
				the_posts_navigation();
			else :
				get_template_part( 'template-parts/content', 'none' );
			endif;
			?>
			</main>
		</div>
	</div>

<?php
get_footer();
