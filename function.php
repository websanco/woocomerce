// Add sold out badge on archive pages.
add_action( 'woocommerce_before_shop_loop_item_title', function() {
global $product;
if ( !$product->is_in_stock() ) {
echo '<span class="soldout">Hết Hàng</span>';
}
} );

