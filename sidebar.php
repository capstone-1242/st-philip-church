<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package st_philip
 */

?>



<?php if ( function_exists( 'is_woocommerce' ) && is_woocommerce() ) : ?>
    <div id="woocommerce-sidebars">
            <h2>Filters:</h2>
            <aside id="product-filter-section" class="widget-area">
                <?php dynamic_sidebar( 'sidebar-1' ); ?>
                <a href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>" aria-label="Reset product filters" class="reset-btn">Reset Filters</a>
            </aside><!-- #product-filter -->
    </div>
<?php endif; ?>





