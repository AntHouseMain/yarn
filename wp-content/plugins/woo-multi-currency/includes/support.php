<?php
if ( ! class_exists( 'VillaTheme_Support' ) ) {


	class VillaTheme_Support {
		public function __construct() {
			$this->data            = array();
			$this->data['support'] = 'https://wordpress.org/support/plugin/woo-multi-currency/';
			$this->data['docs']    = 'http://docs.villatheme.com/?item=woocommerce-multi-currency';
			$this->data['review']  = 'https://wordpress.org/support/plugin/woo-multi-currency/reviews/?filter=5';
			add_action( 'villatheme_support', array( $this, 'villatheme_support' ) );
			add_action( 'admin_enqueue_scripts', array( $this, 'scripts' ) );
		}

		public function scripts() {
			wp_enqueue_style( 'villatheme-support', WOOMULTI_CURRENCY_F_CSS . 'villatheme-support.css' );
		}

		/**
		 *
		 */
		public function villatheme_support() { ?>

			<div id="villatheme-support" class="vi-ui form segment">

				<div class="fields">
					<div class="four wide field ">
						<h3><?php echo esc_html__( 'HELP CENTER', 'woo-multi-currency' ) ?></h3>
						<div class="villatheme-support-area">
							<a target="_blank" href="<?php echo esc_url( $this->data['support'] ) ?>">
								<img src="<?php echo WOOMULTI_CURRENCY_F_IMAGES . 'support.jpg' ?>">
							</a>
						</div>
						<div class="villatheme-docs-area">
							<a target="_blank" href="<?php echo esc_url( $this->data['docs'] ) ?>">
								<img src="<?php echo WOOMULTI_CURRENCY_F_IMAGES . 'docs.jpg' ?>">
							</a>
						</div>
						<div class="villatheme-review-area">
							<a target="_blank" href="<?php echo esc_url( $this->data['review'] ) ?>">
								<img src="<?php echo WOOMULTI_CURRENCY_F_IMAGES . 'reviews.jpg' ?>">
							</a>
						</div>
					</div>
					<?php $items = $this->get_data();
					if ( count( $items ) && is_array( $items ) ) {
						shuffle( $items );
						$items = array_slice( $items, 0, 2 );
						foreach ( $items as $k => $item ) { ?>
							<div class="six wide field">
								<?php if ( $k == 0 ) { ?>
									<h3><?php echo esc_html__( 'MAYBE YOU LIKE', 'woo-multi-currency' ) ?></h3>
								<?php } else { ?>
									<h3>&nbsp;</h3>
								<?php } ?>
								<div class="villatheme-item">
									<a target="_blank" href="<?php echo esc_url( $item->link ) ?>">
										<img src="<?php echo esc_url( $item->image ) ?>" />
									</a>
								</div>
							</div>
						<?php }
						?>

					<?php } ?>
				</div>

			</div>
		<?php }

		/**
		 * Get data from server
		 * @return array
		 */
		protected function get_data( $slug = false ) {
			$feeds = get_transient( 'villatheme_ads' );
			if ( ! $feeds ) {
				@$ads = file_get_contents( 'https://villatheme.com/popular.php' );
				set_transient( 'villatheme_ads', $ads, 86400 );
			} else {
				$ads = $feeds;
			}
			if ( $ads ) {
				$ads = json_decode( $ads );
				$ads = array_filter( $ads );
			} else {
				return false;
			}
			if ( count( $ads ) ) {
				$theme_select = null;
				foreach ( $ads as $ad ) {
					if ( $slug ) {
						if ( $ad->slug == $slug ) {
							continue;
						}
					}
					$item        = new stdClass();
					$item->title = $ad->title;
					$item->link  = $ad->link;
					$item->thumb = $ad->thumb;
					$item->image = $ad->image;
					$item->desc  = $ad->description;
					$results[]   = $item;
				}
			} else {
				return false;
			}
			if ( count( $results ) ) {
				return $results;
			} else {
				return false;
			}
		}
	}


	new VillaTheme_Support();
}