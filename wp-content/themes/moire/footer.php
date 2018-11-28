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
			日々社会団体およびそのイベントを中心に更新しています。こちらもチェック！！
		</div>

		<div class="sns-block-content">
			<div class="sns-block-content-column scrollFadein">
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

			<div class="sns-block-content-column scrollFadein">
				<div class="sns-block-content-column-top">
				</div>

				<div class="sns-block-content-column-header">
					<span>Facebook</span>
				</div>

				<div class="sns-block-content-column-content">
					<div
						class="fb-page"
						data-href="https://www.facebook.com/moire12"
						data-tabs="timeline"
						data-height="400px"
						data-small-header="true"
						data-adapt-container-width="true"
						data-hide-cover="false"
						data-show-facepile="true"
					>
						<blockquote
							cite="https://www.facebook.com/moire12"
							class="fb-xfbml-parse-ignore"
						>
							<a href="https://www.facebook.com/moire12">
								moire 〜阪大生と社会活動を繋げる広報団体〜
							</a>
						</blockquote>
					</div>
				</div>
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
							阪大生と社会活動を繋げる広報団体
						</div>
						<div class="footer-moire-desc-body">
							イベントとwebサイトを通して阪大生の社会活動を知る・関わるを支援する。
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
