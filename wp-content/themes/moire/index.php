<!-- index.phpは使わない -->
<?php
$zillah_sidebar_show       = get_theme_mod( 'zillah_sidebar_show', false );
$zillah_alternative_layout = get_theme_mod( 'zillah_alt_layout', false );
?>

<?php get_header(); //headerの読み込み ?>
	<div class="content-wrap">

		<div id="primary" class="content-area content-area-arch<?php echo $zillah_sidebar_show !== false ? ' content-area-with-sidebar' : ''; ?>">
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

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */

					$alternative = $zillah_alternative_layout == false ? $zillah_alternative_layout : '-alternative';
					get_template_part( 'template-parts/content' . $alternative, get_post_format() );

				endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>

			</main><!-- #main -->
		</div><!-- #primary -->

		<?php
		if ( $zillah_sidebar_show !== false || ( $zillah_sidebar_show === false && is_customize_preview() ) ) {
			get_sidebar();
		}
		?>

	</div><!-- .content-wrap -->

<?php
get_footer();
