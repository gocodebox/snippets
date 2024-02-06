<?php // Do not copy this line!
/**
 * Create a LifterLMS Group for every WooCommerce order. Set the number of seats
 * to be equal to the "quantity" of items bought in WooCommerce.
 *
 * You can add this recipe to your site by creating a custom plugin
 * or using the Code Snippets plugin available for free in the WordPress repository.
 * Read this companion documentation for step-by-step directions on either method.
 * https://lifterlms.com/docs/adding-custom-code/
 *
 * @param int $order_id The WooCommerce order ID.
 *
 * @return void
 */
function create_llms_group_with_admin($order_id)
{
    if (class_exists('LLMS_Group') && class_exists('LLMS_Groups_Enrollment') ) {
        // Get integration.
        $integration = llms_groups()->get_integration();
        $name        = $integration->get_option('post_name_singular');
        $visibility  = $integration->get_option('visibility')

        // Setup arguments.
        $args = wp_parse_args(
            $args,
            array(
                'post_status' => 'publish',
                'post_title'  => sprintf(__('New %s', 'lifterlms-groups'), $name),
                'meta_input'  => array(
                    '_llms_visibility' => $visibility,
                ),
            )
        );

        // Create the group.
        $group = new LLMS_Group('new', $args);

        // Assign group administrator.
        $order = wc_get_order($order_id);
        LLMS_Groups_Enrollment::add(
            $order->get_user_id(),
            $group->get('id'),
            'woocommerce_order',
            'admin'
        );

        $order_data = $order->get_data();

        // Assign the number of seats in the group.
        // You're developer can modify this logic to be as custom as you want.
        foreach ($order->get_items() as $item_key => $item ) {
            $product = wc_get_product($item['product_id']);
            $quantity = $item->get_quantity();
            $group->set('seats', $quantity);
        }
    }
}

add_action('woocommerce_order_status_completed', 'create_llms_group_with_admin');
add_action('woocommerce_order_status_processing', 'create_llms_group_with_admin');

