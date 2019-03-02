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

				endwhile;
				?>

				</main>

				<div class="snsShareArea">
					<!-- Twitter -->
					<a class="btn--twitter" href="http://twitter.com/share?url=<?php the_permalink();?>&text=<?php echo get_the_title(); ?>&via=moire45522311&related=moire45522311" target="_blank" rel="nofollow">
						Twitter
					</a>

					<!-- Facebook -->
				  <a href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>&t=<?php echo get_the_title(); ?>" class="btn--facebook" target="_blank" rel="nofollow">
					  Facebook
					</a>

				  <!-- Line -->
			 	  <a class="btn--line" href="https://social-plugins.line.me/lineit/share?url=<?php the_permalink(); ?>" target="_blank" rel="nofollow">
	 				  LINE
					</a>
				</div>
	    </div>
		</div>
	</div>

<?php
get_footer();
