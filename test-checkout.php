<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 9.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout.
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
	return;
}

// Get cart data
$cart = WC()->cart;
$cart_total = $cart->get_total();
$cart_subtotal = $cart->get_subtotal();
$cart_items = $cart->get_cart();

// Hardcoded bundle packages (you can make this dynamic later)
$bundle_packages = array(
    array(
        'id' => 'bundle_2',
        'title' => 'Viagra - Buy 2 Packs',
        'quantity' => 2,
        'pills_total' => 8,
        'price' => 39.95,
        'original_price' => 56.00,
        'market_price' => 56.00,
        'savings' => 16.05,
        'badge' => 'POPULAR',
        'badge_color' => 'orange',
        'description' => '2 Packs (8 pills total) • Enhanced vitality support'
    ),
    array(
        'id' => 'bundle_5',
        'title' => 'Viagra - Buy 5 Packs',
        'quantity' => 5,
        'pills_total' => 20,
        'price' => 79.95,
        'original_price' => 140.00,
        'market_price' => 140.00,
        'savings' => 60.05,
        'badge' => 'BEST VALUE',
        'badge_color' => 'blue',
        'description' => '5 Packs (20 pills total) • Free shipping included'
    ),
    array(
        'id' => 'bundle_10',
        'title' => 'Viagra - Buy 10 Packs',
        'quantity' => 10,
        'pills_total' => 40,
        'price' => 149.95,
        'original_price' => 280.00,
        'market_price' => 280.00,
        'savings' => 130.05,
        'badge' => 'MAX SAVINGS',
        'badge_color' => 'purple',
        'description' => '10 Packs (40 pills total) • Free shipping + Free Guide'
    ),
    array(
        'id' => 'bundle_20',
        'title' => 'Viagra - Buy 20 Packs',
        'quantity' => 20,
        'pills_total' => 80,
        'price' => 279.95,
        'original_price' => 560.00,
        'market_price' => 560.00,
        'savings' => 280.05,
        'badge' => 'ULTIMATE DEAL',
        'badge_color' => 'gradient',
        'description' => '20 Packs (80 pills total) • Free shipping + Free Guide + VIP Support'
    )
);
?>

<!-- Countdown Timer Header -->
<div class="checkout-countdown-header">
    <div class="countdown-content">
        <span class="countdown-icon">🔥</span>
        <span class="countdown-text">Your Offer Reserved | Expires in</span>
        <div class="countdown-timer" id="countdown-timer">04:54:49</div>
    </div>
</div>

<!-- Main Checkout Container -->
<div class="custom-checkout-container">
    <div class="checkout-grid">
        
        <!-- LEFT COLUMN: Product Summary & Social Proof -->
        <div class="checkout-left-column">
            
            <!-- Header -->
            <div class="checkout-header">
                <h1 class="checkout-title">
                    <span class="lock-icon">🔒</span>
                    Secure Checkout
                </h1>
                <p class="checkout-subtitle">Complete your order in under 2 minutes</p>
                
                <!-- FDA Message -->
                <div class="fda-message">
                    <span class="check-icon">✓</span>
                    Manufactured in FDA-approved facilities with the highest quality standards for your safety and peace of mind
                </div>
                
                <!-- Badges -->
                <div class="checkout-badges">
                    <span class="badge badge-fda">
                        <span class="badge-icon">✓</span>
                        FDA Approved Facility
                    </span>
                    <span class="badge badge-no-rx">
                        <span class="badge-icon">🚫</span>
                        No Prescription Required • 100% Legal
                    </span>
                </div>
            </div>
            
            <!-- Product Summary -->
            <div class="product-summary-card">
                <div class="product-image-section">
                    <div class="product-image-container">
                        <img src="/wp-content/uploads/2025/07/viagra.jpg" alt="Viagra" class="product-image" />
                        <img src="https://upload.wikimedia.org/wikipedia/en/a/a4/Flag_of_the_United_States.svg" alt="USA" class="usa-flag" />
                    </div>
                    <h2 class="product-title" id="current-product-title">Viagra 50mg</h2>
                    <p class="product-description">
                        <span class="check-icon">✓</span>
                        Doctor-recommended vitality enhancer for confidence
                    </p>
                    <p class="product-prescription-info">The most prescribed solution in the USA</p>
                    <p class="product-genuine">
                        <span class="check-icon">✓</span>
                        100% genuine product
                    </p>
                    <p class="product-pills-info" id="current-pills-info">4 PILLS PER PACK 50mg</p>
                    
                    <!-- Delivery and No Rx Badges -->
                    <div class="product-badges">
                        <span class="badge badge-delivery">
                            <span class="badge-icon">🚚</span>
                            Fast Delivery: 2-5 Days
                        </span>
                        <span class="badge badge-no-rx-small">
                            <span class="badge-icon">💳</span>
                            No Prescription Needed
                        </span>
                    </div>
                </div>
                
                <!-- Cart Items Display -->
                <div class="cart-items-display" id="cart-items-display">
                    <div class="cart-item">
                        <div class="cart-item-info">
                            <h3 class="cart-item-title" id="cart-item-title">Viagra 50mg</h3>
                            <p class="cart-item-quantity" id="cart-item-quantity">Quantity: 1</p>
                            <p class="cart-item-pills" id="cart-item-pills">4 PILLS PER PACK 50mg</p>
                        </div>
                        <div class="cart-item-price">
                            <span class="cart-item-total" id="cart-item-total">$<?php echo number_format($cart_subtotal, 2); ?></span>
                            <p class="cart-market-price" id="cart-market-price">Market price: $<?php echo number_format($cart_subtotal * 1.5, 2); ?></p>
                        </div>
                    </div>
                </div>
                
                <!-- Order Summary -->
                <div class="order-summary" id="order-summary">
                    <div class="summary-row">
                        <span>Subtotal</span>
                        <span id="summary-subtotal">$<?php echo number_format($cart_subtotal, 2); ?></span>
                    </div>
                    <div class="summary-row">
                        <span>Shipping</span>
                        <span class="free-shipping" id="summary-shipping">FREE</span>
                    </div>
                    <hr class="summary-divider">
                    <div class="summary-row summary-total">
                        <span>Total</span>
                        <span id="summary-total">$<?php echo number_format($cart_subtotal, 2); ?></span>
                    </div>
                </div>
                
                <!-- Urgency Alerts -->
                <div class="urgency-alert urgency-stock">
                    <span class="alert-icon">⚠️</span>
                    <div>
                        <p class="alert-title">Only 23 packs left in stock!</p>
                        <p class="alert-subtitle">High demand - secure yours before it's gone</p>
                    </div>
                </div>
                
                <div class="urgency-alert urgency-price">
                    <span class="alert-icon">💰</span>
                    <div>
                        <p class="alert-title">Market prices are 50% higher!</p>
                        <p class="alert-subtitle">Save money and stay safe with our verified pharmacy</p>
                    </div>
                </div>
            </div>
            
            <!-- Trust Badges Section -->
            <div class="trust-badges-section">
                <h3 class="trust-title">
                    <span class="shield-icon">🛡️</span>
                    Why Choose Our Pharmacy?
                </h3>
                
                <div class="trust-badges-grid">
                    <div class="trust-badge">
                        <div class="trust-icon trust-icon-green">📦</div>
                        <div>
                            <h4>100% Discreet Packaging</h4>
                            <p>No one knows what's inside - completely private delivery</p>
                        </div>
                    </div>
                    
                    <div class="trust-badge">
                        <div class="trust-icon trust-icon-blue">❤️</div>
                        <div>
                            <h4>No Customs Problems</h4>
                            <p>We handle all customs paperwork - zero hassle for you</p>
                        </div>
                    </div>
                    
                    <div class="trust-badge">
                        <div class="trust-icon trust-icon-purple">🔄</div>
                        <div>
                            <h4>Refund/Reship Guarantee</h4>
                            <p>If seized by customs, we handle everything - reshipment or full refund</p>
                        </div>
                    </div>
                    
                    <div class="trust-badge">
                        <div class="trust-icon trust-icon-green">✓</div>
                        <div>
                            <h4>Used by 1,000+ Satisfied Men</h4>
                            <p>Trusted by customers across US, UK & Canada</p>
                        </div>
                    </div>
                    
                    <div class="trust-badge">
                        <div class="trust-icon trust-icon-blue">🏭</div>
                        <div>
                            <h4>FDA Approved Manufacturing</h4>
                            <p>Produced in FDA-approved facilities with strict quality control standards</p>
                        </div>
                    </div>
                    
                    <div class="trust-badge">
                        <div class="trust-icon trust-icon-yellow">📋</div>
                        <div>
                            <h4>No Prescription Required</h4>
                            <p>100% legal purchase - no doctor visits or embarrassing conversations</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Customer Reviews -->
            <div class="customer-reviews-section">
                <h3 class="reviews-title">
                    <span class="star-icon">⭐</span>
                    Real Customer Reviews
                </h3>
                
                <div class="reviews-list">
                    <div class="review-item">
                        <div class="review-header">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=50&h=50&fit=crop&crop=face" alt="Customer" class="review-avatar">
                            <div>
                                <div class="review-stars">⭐⭐⭐⭐⭐</div>
                                <p class="review-author">Mar*** T., 42, Texas</p>
                            </div>
                        </div>
                        <p class="review-text">"Perfect discreet packaging - no customs issues at all. Product works amazing, my confidence is back completely. Much cheaper than market prices!"</p>
                    </div>
                    
                    <div class="review-item">
                        <div class="review-header">
                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=50&h=50&fit=crop&crop=face" alt="Customer" class="review-avatar">
                            <div>
                                <div class="review-stars">⭐⭐⭐⭐⭐</div>
                                <p class="review-author">Dav*** R., 38, London</p>
                            </div>
                        </div>
                        <p class="review-text">"Ordered 10 packs, saved $53 compared to street prices. Package arrived safely, no questions asked. Will definitely order again!"</p>
                    </div>
                    
                    <div class="review-item">
                        <div class="review-header">
                            <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=50&h=50&fit=crop&crop=face" alt="Customer" class="review-avatar">
                            <div>
                                <div class="review-stars">⭐⭐⭐⭐⭐</div>
                                <p class="review-author">Mic*** K., 45, Toronto</p>
                            </div>
                        </div>
                        <p class="review-text">"When my package got held at customs, they reshipped for free immediately. Amazing customer service and genuine products!"</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- RIGHT COLUMN: Checkout Form -->
        <div class="checkout-right-column">
            
            <!-- Bundle Selection -->
            <div class="bundle-selection-section">
                <h2 class="bundle-title">
                    <span class="upgrade-icon">🔥</span>
                    Upgrade Your Health Package
                </h2>
                
                <div class="bundle-packages" id="bundle-packages">
                    <?php foreach ($bundle_packages as $index => $package): ?>
                    <div class="bundle-package" data-bundle-id="<?php echo $package['id']; ?>" onclick="selectBundle('<?php echo $package['id']; ?>', <?php echo $index; ?>)">
                        <div class="bundle-radio">
                            <input type="radio" name="selected_bundle" value="<?php echo $package['id']; ?>" id="bundle_<?php echo $package['id']; ?>">
                        </div>
                        <div class="bundle-content">
                            <div class="bundle-pills-badge">4 PILLS PER PACK 50mg</div>
                            <div class="bundle-header">
                                <h3 class="bundle-package-title"><?php echo $package['title']; ?></h3>
                                <span class="bundle-badge bundle-badge-<?php echo $package['badge_color']; ?>"><?php echo $package['badge']; ?></span>
                            </div>
                            <p class="bundle-description"><?php echo $package['description']; ?></p>
                            <div class="bundle-pricing">
                                <span class="bundle-price">$<?php echo number_format($package['price'], 2); ?></span>
                                <span class="bundle-original-price">$<?php echo number_format($package['original_price'], 2); ?></span>
                                <span class="bundle-savings">SAVE $<?php echo number_format($package['savings'], 2); ?></span>
                            </div>
                            <div class="bundle-features">
                                <span class="bundle-free-shipping">+ FREE SHIPPING</span>
                                <span class="bundle-market-price">(Market price: $<?php echo number_format($package['market_price'], 2); ?>)</span>
                            </div>
                            <div class="bundle-no-rx">
                                <span class="badge badge-no-rx-small">
                                    <span class="badge-icon">💳</span>
                                    No Prescription Required
                                </span>
                            </div>
                        </div>
                        <img src="/wp-content/uploads/2025/07/viagra.jpg" alt="<?php echo $package['quantity']; ?> Packs" class="bundle-image" />
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            
            <!-- SSL Security -->
            <div class="ssl-security-section">
                <h3 class="ssl-title">
                    <span class="shield-icon">🛡️</span>
                    100% Secure SSL Encrypted Checkout
                </h3>
                <p class="ssl-subtitle">We never store your card information</p>
                
                <div class="payment-logos">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/5/5e/Visa_Inc._logo.svg" alt="Visa" class="payment-logo">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/2/2a/Mastercard-logo.svg" alt="Mastercard" class="payment-logo">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/b/ba/Stripe_Logo%2C_revised_2016.svg" alt="Stripe" class="payment-logo">
                </div>
            </div>
            
            <!-- Checkout Form -->
            <div class="checkout-form-section">
                <h3 class="form-title">
                    <span class="card-icon">💳</span>
                    Billing Information
                </h3>
                
                <form name="checkout" method="post" class="checkout woocommerce-checkout custom-checkout-form" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data" aria-label="<?php echo esc_attr__( 'Checkout', 'woocommerce' ); ?>">

                    <?php if ( $checkout->get_checkout_fields() ) : ?>

                        <?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

                        <div class="custom-customer-details" id="customer_details">
                            <div class="billing-fields">
                                <?php do_action( 'woocommerce_checkout_billing' ); ?>
                            </div>

                            <div class="shipping-fields" style="display: none;">
                                <?php do_action( 'woocommerce_checkout_shipping' ); ?>
                            </div>
                        </div>

                        <?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

                    <?php endif; ?>
                    
                    <!-- Payment Methods -->
                    <div class="payment-methods-section">
                        <h3 class="payment-title">
                            <span class="card-icon">💳</span>
                            Payment Method
                        </h3>
                        
                        <?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>
                        
                        <?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

                        <div id="order_review" class="woocommerce-checkout-review-order custom-order-review">
                            <?php do_action( 'woocommerce_checkout_order_review' ); ?>
                        </div>

                        <?php do_action( 'woocommerce_checkout_after_order_review' ); ?>
                        
                        <!-- Bank Statement Info -->
                        <div class="bank-statement-info">
                            <h4>
                                <span class="bank-icon">🏦</span>
                                Bank Statement Descriptor
                            </h4>
                            <p>This charge will appear as "<strong>VHealthLLC</strong>" on your statement for complete discretion and privacy.</p>
                        </div>
                    </div>
                    
                    <!-- Countdown Near Button -->
                    <div class="checkout-countdown-mini">
                        <p class="countdown-warning">
                            <span class="clock-icon">⏰</span>
                            Only <span id="countdown-mini">4:53</span> left to secure your discount
                        </p>
                    </div>
                    
                    <!-- Submit Button -->
                    <button type="submit" class="checkout-submit-btn" id="place_order">
                        <span class="check-icon">✓</span>
                        Yes, I Want To Complete My Order
                    </button>
                    
                    <!-- Security Reassurance -->
                    <div class="security-reassurance">
                        <div class="security-items">
                            <span class="security-item">
                                <span class="security-icon">🔒</span>
                                256-bit SSL Secure
                            </span>
                            <span class="security-item">
                                <span class="security-icon">✓</span>
                                Guaranteed Delivery
                            </span>
                            <span class="security-item">
                                <span class="security-icon">📦</span>
                                <span id="shipping-guarantee">Free Shipping</span>
                            </span>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<script>
// Bundle selection functionality
let selectedBundleData = null;

function selectBundle(bundleId, index) {
    // Remove selected class from all bundles
    document.querySelectorAll('.bundle-package').forEach(pkg => {
        pkg.classList.remove('selected');
    });
    
    // Add selected class to clicked bundle
    const selectedBundle = document.querySelector(`[data-bundle-id="${bundleId}"]`);
    selectedBundle.classList.add('selected');
    
    // Check the radio button
    document.getElementById(`bundle_${bundleId}`).checked = true;
    
    // Get bundle data
    const bundlePackages = <?php echo json_encode($bundle_packages); ?>;
    selectedBundleData = bundlePackages[index];
    
    // Update product display
    updateProductDisplay(selectedBundleData);
    
    // Update cart via AJAX (you'll need to implement this)
    updateCartWithBundle(bundleId, selectedBundleData);
}

function updateProductDisplay(bundleData) {
    // Update product title
    document.getElementById('current-product-title').textContent = bundleData.title;
    
    // Update pills info
    document.getElementById('current-pills-info').textContent = `${bundleData.pills_total} pills total (4 PILLS PER PACK 50mg)`;
    
    // Update cart item details
    document.getElementById('cart-item-title').textContent = bundleData.title;
    document.getElementById('cart-item-quantity').textContent = `Quantity: ${bundleData.quantity}`;
    document.getElementById('cart-item-pills').textContent = `${bundleData.pills_total} pills total`;
    document.getElementById('cart-item-total').textContent = `$${bundleData.price.toFixed(2)}`;
    document.getElementById('cart-market-price').textContent = `Market price: $${bundleData.market_price.toFixed(2)}`;
    
    // Update order summary
    document.getElementById('summary-subtotal').textContent = `$${bundleData.price.toFixed(2)}`;
    document.getElementById('summary-total').textContent = `$${bundleData.price.toFixed(2)}`;
}

function updateCartWithBundle(bundleId, bundleData) {
    // AJAX call to update WooCommerce cart
    const formData = new FormData();
    formData.append('action', 'update_cart_bundle');
    formData.append('bundle_id', bundleId);
    formData.append('bundle_data', JSON.stringify(bundleData));
    formData.append('nonce', '<?php echo wp_create_nonce('update_cart_bundle'); ?>');
    
    fetch('<?php echo admin_url('admin-ajax.php'); ?>', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            console.log('Cart updated successfully');
            // Optionally refresh order review
            jQuery('body').trigger('update_checkout');
        }
    })
    .catch(error => {
        console.error('Error updating cart:', error);
    });
}

// Countdown timer
function initCountdown() {
    let timeLeft = 4 * 3600 + 54 * 60 + 49; // 4:54:49 in seconds

    function updateCountdown() {
        const hours = Math.floor(timeLeft / 3600);
        const minutes = Math.floor((timeLeft % 3600) / 60);
        const seconds = timeLeft % 60;

        const timeString = `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
        const miniTimeString = `${minutes}:${seconds.toString().padStart(2, '0')}`;

        const countdownTimer = document.getElementById('countdown-timer');
        const countdownMini = document.getElementById('countdown-mini');
        
        if (countdownTimer) countdownTimer.textContent = timeString;
        if (countdownMini) countdownMini.textContent = miniTimeString;

        if (timeLeft > 0) {
            timeLeft--;
        } else {
            timeLeft = 4 * 3600 + 54 * 60 + 49; // Reset
        }
    }

    updateCountdown();
    setInterval(updateCountdown, 1000);
}

// Initialize when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    initCountdown();
});
</script>

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
