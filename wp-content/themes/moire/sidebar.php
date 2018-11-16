<?php
/**
 * Sidebar
 */
?>

<aside id="secondary" class="widget-area" role="complementary">
	<span class="sidebar-mobile-title">
		<?php esc_html__( 'サイドバー' ) . ''; ?>
	</span>
	<div class="sidebar-inner-wrap">
		<?php
		dynamic_sidebar('moire-sidebar-1'); ?>
	</div>
</aside><!-- #secondary -->
