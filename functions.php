add_action( 'woocommerce_cart_calculate_fees','woocommerce_custom_surcharge' );
function woocommerce_custom_surcharge() {
  global $woocommerce;
  $fee = false;
  $fixed = 30;

    if ( is_admin() && ! defined( 'DOING_AJAX' ) )
        return;

    foreach ( $woocommerce->cart->get_cart() as $cart_item_key => $values ) {
        if ($values['data']->post->post_author == 40) {
            $fee= true;
            break;
        }
    }

    if ($fee) {
        $woocommerce->cart->add_fee( 'Tsar Nicoulai Shipping Fee', $fixed, true, '' );
    }

}
