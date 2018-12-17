<?php
// 全ページ共通フッター
?>

	<div class="between_content">
		<div class="between_content_effect">
		</div>
	</div>

	<div class="sns-block-wrapper">
		<div class="sns-block-header">
			<span>SNS</span>
		</div>

		<div class="sns-block-desc">
			日々、社会貢献活動を中心に更新しています。こちらもチェック！！
		</div>

		<div class="sns-block-content">
			<div class="sns-block-content-column">
				<div class="sns-block-content-column-top">
				</div>

				<div class="sns-block-content-column-header">
					<span>Twitter</span>
				</div>

				<div class="sns-block-content-column-content">
					<a
					  class="twitter-timeline"
						href="https://twitter.com/moire45522311?ref_src=twsrc%5Etfw"
						data-theme="light"
						data-border-color="#7fcaad"
						height='400px'
						width='300px'
					>
					  Tweets by moire
					</a>
					<script async src="https://platform.twitter.com/widgets.js" charset="utf-8">
					</script>
				</div>
			</div>

			<div class="sns-block-content-column">
				<div class="sns-block-content-column-top">
				</div>

				<div class="sns-block-content-column-header">
					<span>Facebook</span>
				</div>

				<div class="sns-block-content-column-content">
<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fmoire12&tabs=timeline&width=340&height=400px&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=false&appId=206449786804698" width="340" height="400px" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>				</div>
			</div>
		</div>
	</div>

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

				<div class="footer-widget-wrap">
					<div class="footer-widget-img">
						<img
							src="<?php echo get_stylesheet_directory_uri(); ?>/images/moire_logo.svg"
							class="footer-moire-logo"
						>
					</div>
					<div class="footer-moire-desc">
						<div class="footer-moire-desc-header">
							moire</br>
							社会貢献活動に繋ぐWebメディア
						</div>
						<div class="footer-moire-desc-body">
							Webメディアとして No Money Action を発信することで社会貢献活動に関心のない人を社会貢献活動に繋いでいきます
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="site-info">
			<div class="footer-back-top">
					トップへ戻る<i class="fa fa-angle-double-up" aria-hidden="true"></i>
			</div>
		</div>
	</footer>

<?php wp_footer(); ?>
</body>
</html>
