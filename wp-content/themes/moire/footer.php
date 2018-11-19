<?php
// フッター
?>
			</div><!-- .container -->
		</div>
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container container-footer">
			<div class="footer-inner">
				<div class="footer-widget-wrap">
					<?php
					if ( is_active_sidebar( 'moire-footer-widget-area' ) ) {
						dynamic_sidebar( 'moire-footer-widget-area' );
					}
					?>
				</div>

				<div class="footer-widget-wrap">
					<?php
					if ( is_active_sidebar( 'moire-footer-widget-area-2' ) ) {
						dynamic_sidebar( 'moire-footer-widget-area-2' );
					}
					?>
				</div>

				<div class="footer-widget-wrap">
					<?php
					if ( is_active_sidebar( 'moire-footer-widget-area-3' ) ) {
						dynamic_sidebar( 'moire-footer-widget-area-3' );
					}
					?>
				</div>
			</div>
		</div> <!-- .container-footer -->

		<div class="site-info">
			<div class="footer-back-top">
					トップへ戻る<i class="fa fa-angle-double-up" aria-hidden="true"></i>
			</div>
		</div><!-- .site-info -->

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
