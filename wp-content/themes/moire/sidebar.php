<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zillah
 */

$zillah_sidebar_show = get_theme_mod( 'zillah_sidebar_show', false );

if ( ! is_active_sidebar( 'zillah-sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area<?php echo $zillah_sidebar_show === false && is_customize_preview() ? ' zillah-only-customizer' : ''; ?><?php echo $zillah_sidebar_show ? ' widget-area-mobile' : ''; ?>" role="complementary">
	<?php
	if ( $zillah_sidebar_show ) {
		echo '<span class="sidebar-mobile-title"><span>' . esc_html__( 'Sidebar', 'zillah' ) . '</span></span>';
	}
	?>
	<div class="sidebar-inner-wrap">
		<?php dynamic_sidebar( 'zillah-sidebar-1' ); ?>
	</div>
</aside><!-- #secondary -->
