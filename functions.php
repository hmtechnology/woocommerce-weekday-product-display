<?php

/*
 * Customize product display based on the day of the week and
 * Hides the 'Add to Cart' button for products not available on the current day
 */

// Customize product display based on the day of the week
function filter_products_by_day_of_week($query) {
    // Check if in the admin panel or not the main query
    if (is_admin() || !$query->is_main_query()) {
        return;
    }

    // Get the name of the current day of the week
    $current_day = strtolower(date('l'));

    // Set the categories to display based on the current day of the week
    $categories_to_show = array($current_day, 'always'); // 'always' is a category with products available every day

    // Hide products that do not belong to the specified categories
    $query->set('product_cat', implode(',', $categories_to_show));
}

add_action('pre_get_posts', 'filter_products_by_day_of_week');

// Hide the "Add to Cart" button for specific products
function inhibit_purchase_button_for_unavailable_products($is_purchasable, $product) {
    // Check if we are in the admin panel or not the main query
    if (is_admin() || !is_product() || is_cart() || is_checkout()) {
        return $is_purchasable;
    }

    // Get the categories of the product
    $product_categories = wp_get_post_terms($product->get_id(), 'product_cat', array('fields' => 'names'));

    // Get the name of the current day of the week
    $current_day = strtolower(date('l'));

    if (!in_array($current_day, $product_categories) && !in_array('always', $product_categories)) {
        // The product is not in the current day's category or "always" category
        return false; // Make the product not purchasable
    }

    return $is_purchasable; // Product is available for purchase
}

add_filter('woocommerce_is_purchasable', 'inhibit_purchase_button_for_unavailable_products', 10, 2);
