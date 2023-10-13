# WooCommerce Weekday Product Display

![GitHub](https://img.shields.io/github/license/hmtechnology/woocommerce-weekday-product-display)

This function customizes product display based on the day of the week and hides the 'Add to Cart' button for products not available on the current day.

## Usage

To use this function, follow these steps:

1. Copy the contents of the provided function and paste it into your WordPress theme's `functions.php` file.

2. Assign your WooCommerce products to product categories based on the day of the week in which each product is available. Use one of the following category names for each product:

   - `monday`
   - `tuesday`
   - `wednesday`
   - `thursday`
   - `friday`
   - `saturday`
   - `sunday`
   - `always` (for products available every day)

3. The shop page will automatically filter and display products available for the current day of the week.

4. For products that are not available (and do not appear anywhere in the shop, but may be accessed via a direct link), the "Add to Cart" button is disabled.

## Example:

Suppose you have a product, "Product X," that is available only on Mondays. To make it available for Mondays, follow these steps:

1. Assign "Product X" to the category `monday`.

2. When customers visit your shop on a Monday, "Product X" will be visible.

3. On all other days, "Product X" will not appear in the shop, and the "Add to Cart" button will be disabled.

Enjoy a more dynamic and customer-centric shopping experience with WooCommerce Weekday Product Display!

## Contributing

Contributions are welcome! If you have any improvements or new features to suggest, please open an issue or submit a pull request. We appreciate your feedback.

## License

This project is licensed under the GNU General Public License v3.0 - see the LICENSE file for details.

## Author

This function is maintained by [hmtechnology](https://github.com/hmtechnology).

