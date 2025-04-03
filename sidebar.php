<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package st_philip
 */

?>

<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
    <aside id="product-filter-section" class="widget-area">
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
    </aside><!-- #product-filter -->
		<a href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>">Reset Filters</a>
<?php endif; ?>

<?php if ( is_active_sidebar( 'shopping-cart' ) ) : ?>
    <aside id="cart-section" class="widget-area">
        <?php dynamic_sidebar( 'shopping-cart' ); ?>
    </aside><!-- #product-filter -->
<?php endif; ?>





