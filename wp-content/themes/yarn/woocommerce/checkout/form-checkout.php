
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
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.3.0
 */


if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

wc_print_notices();

do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	echo apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) );
	return;
}

?>

<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data" uk-grid>


	<?php if ( $checkout->get_checkout_fields() ) : ?>

		<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

		<div class="uk-width-1-2@m" id="customer_details">

			<?php do_action( 'woocommerce_checkout_billing' ); ?>

		</div>

		<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

	<?php endif; ?>

	

	<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

	<div id="order_review" class="woocommerce-checkout-review-order uk-width-1-2@m uk-text-center uk-text-left@s">
		<h3 id="order_review_heading"><?php _e( 'Your order', 'woocommerce' ); ?></h3>
		<?php do_action( 'woocommerce_checkout_order_review' ); ?>
	</div>

	<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>

</form>


<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
<script>
    $(function(){
        var err = 0 ;
        var mess = '' ;
        $(document).on("click","#place_order",function(e) {
            var err = 0 ;
            e.preventDefault();
            vallength('billing_first_name');
            vallength('billing_last_name');
            vallength('billing__97481');
            vallength('billing___30443');
            ValidPhone('billing_phone');

            if(err > 0){
            }else{
                var form = $('.woocommerce-checkout');
                form.submit();
            }

        });

        function vallength(id) {
           var elem = $('#'+id);
            if(elem.val().length < 2){
                elem.addClass('error-length');
                err++ ;
            }else{
                elem.removeClass('error-length');
            }
        }

        function ValidPhone(id) {

            var re=/^((8|\+7)[\-]?)?(\(?\d{3}\)?[\-]?)?[\d\-]{7,14}$/;
            var phone = $('#'+id);
            var myPhone = phone.val();
            var valid = re.test(myPhone);
            if (valid){
                mess = 'Номер телефона введен правильно!';
                phone.removeClass('error-length');
                err++;
            } else {
                phone.addClass('error-length');
                mess = 'Номер телефона введен неправильно!';}
        }
    });
</script>