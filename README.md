# Discreet Health WooCommerce Checkout

This repository contains a custom WordPress page template designed to replace the standard WooCommerce checkout while keeping a high‑converting user interface. The template integrates directly with WooCommerce to use your store's products, cart and payment gateways.

## Prerequisites

- WordPress with the WooCommerce plugin installed and activated
- At least one published product that can be used at checkout

## Installation

1. Copy `test-checkout.php` into the root directory of your active theme (or child theme).
2. In the WordPress admin dashboard, create a new page and select **Discreet Health Checkout - High-Converting WooCommerce - Free Shipping** from the **Template** dropdown.
3. Publish the page. When viewed, it will render the custom checkout UI while processing orders via WooCommerce.

## Customisation

- Update product IDs or package details in the PHP section near the top of the file to match products in your store.
- Adjust the Tailwind classes or HTML markup if you wish to modify the appearance.
- Additional WooCommerce hooks can be used in your theme's `functions.php` to further customise fields or behaviour.

## License

This project is licensed under the [MIT License](LICENSE).
