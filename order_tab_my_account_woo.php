<?php
/**
 * Reorder account items.
 * 
 * @return array Ordered Items.
 */
function mrc_reorder_account_menu( $items ) {
    return array(
    		'dashboard'          => __( 'Dashboard', 'woocommerce' ),
            'nuova-tab'          => __( 'Nuova Tab', 'woocommerce' ),
            'orders'             => __( 'Orders', 'woocommerce' ),
            'downloads'          => __( 'Downloads', 'woocommerce' ),
            'edit-account'       => __( 'Edit Account', 'woocommerce' ),
            'edit-address'       => __( 'Addresses', 'woocommerce' ),
            'customer-logout'    => __( 'Logout', 'woocommerce' ),
    );

}
add_filter ( 'woocommerce_account_menu_items', 'mrc_reorder_account_menu' );

?>
