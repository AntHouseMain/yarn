<?php

class GRD_Functions {
	public function __construct() {
		\add_action( 'init', [$this, 'register_fields_home_page']);
		\add_action( 'init', [$this, 'register_fields_contacts']);
		\add_action( 'init', [$this, 'register_fields_about_us']);

	}

	public function register_fields_home_page() {
		if ( function_exists( 'acf_add_local_field_group' ) ):
			\acf_add_local_field_group( [
				'key'      => 'reviews-slider',
				'title'    => __( 'CONTENT', 'yarn' ),
				'fields'   => [
					[
						'key'   => 'slider_tab',
						'label' => __( 'Слайдер', 'yarn' ),
						'name'  => 'slider_tab',
						'type'  => 'tab',
					],
					[
						'key'   => 'title_slider',
						'label' => __ ( '', 'yarn' ),
						'name'  => 'title_slider',
						'type'  => 'text',
					],
					[
						'key'   => 'paragraph_slider',
						'label' => __ ( '', 'yarn' ),
						'name'  => 'paragraph_slider',
						'type'  => 'text',
					],
					[
						'key'   => 'shop_link',
						'label' => __ ( '', 'yarn' ),
						'name'  => 'shop_link',
						'type'  => 'link',
					],
					[
						'key'        => 'slider_top_home',
						'label'      => __ ( '', 'yarn' ),
						'name'       => 'slider_top_home',
						'type'       => 'repeater',
						'layout'     => 'table',
						'max'        => '0',
						'sub_fields' => [
							[
								'key'   => 'top_home_slide',
								'label' => __ ( 'Изображение', 'yarn' ),
								'name'  => 'top_home_slide',
								'type'  => 'image',
							],
						],
					],
					[
						'key'   => 'tab_reviews',
						'label' => __( 'Отзывы', 'yarn' ),
						'name'  => 'tab_reviews',
						'type'  => 'tab',
					],
					[
						'key'        => 'all_reviews',
						'label'      => __ ( '', 'yarn' ),
						'name'       => 'all_reviews',
						'type'       => 'repeater',
						'layout'     => 'Table',
						'max'        => '0',
						'sub_fields' => [
							[
								'key'   => 'reviews_image',
								'label' => __ ( 'Изображение', 'yarn' ),
								'name'  => 'image',
								'type'  => 'image',
							],
							[
								'key'   => 'reviews_description',
								'label' => __ ( 'Сам коментарий', 'yarn' ),
								'name'  => 'description',
								'type'  => 'wysiwyg',
							],
						],
					],
					[
						'key'   => 'tab',
						'label' => __( 'О нас', 'yarn' ),
						'name'  => 'our_features_tab',
						'type'  => 'tab',
					],
					[
						'key'   => 'about_us_home',
						'label' => __ ( 'Узнать больше', 'yarn' ),
						'name'  => 'about_us_home',
						'type'  => 'wysiwyg',
					],
					[
						'key'   => 'link_page',
						'label' => __ ( 'Узнать больше', 'yarn' ),
						'name'  => 'link_page',
						'type'  => 'link',
					],
				],

				'location' => [
					[
						[
							'param'    => 'page_type',
							'operator' => '==',
							'value'    => 'front_page' ,
						],
					],
				],
			] );
		endif;
	}

//// acf contacts ////

	public function register_fields_contacts() {
		if ( function_exists( 'acf_add_local_field_group' ) ):
			\acf_add_local_field_group( [
				'key'      => 'contacts',
				'title'    => __( 'CONTENT', 'yarn' ),
				'fields'   => [
					[
						'key'   => 'first_tab_contacts',
						'label' => __( 'Почта', 'yarn' ),
						'name'  => 'contacts_tab_1',
						'type'  => 'tab',
					],
					[
						'key'   => 'mail_contacts',
						'label' => __ ( '', 'yarn' ),
						'name'  => 'mail_contacts',
						'type'  => 'text',
					],
					[
						'key'   => 'second_tab_contacts',
						'label' => __( 'Номера телефонов', 'yarn' ),
						'name'  => 'contacts_tab_2',
						'type'  => 'tab',
					],

					[
						'key'        => 'all_contacts',
						'label'      => __ ( '', 'yarn' ),
						'name'       => 'all_contacts',
						'type'       => 'repeater',
						'layout'     => 'Table',
						'max'        => '0',
						'sub_fields' => [
							[
								'key'   => 'phone_link',
								'label' => __ ( 'Телефон', 'yarn' ),
								'name'  => 'phone_link',
								'type'  => 'text',
							],
						],
						
					],
					[
						'key'        => 'all_contacts_f',
						'label'      => __ ( 'Телефон footer', 'yarn' ),
						'name'       => 'all_contacts_f',
						'type'       => 'repeater',
						'layout'     => 'Table',
						'max'        => '0',
						'sub_fields' => [
                            [
                                'key'   => 'phone_link_footer',
                                'label' => __ ( 'Телефон', 'yarn' ),
                                'name'  => 'phone_link_footer',
                                'type'  => 'text',
                            ],
						],

					],
					[
						'key'   => 'third_tab_contacts',
						'label' => __( 'Адрес', 'yarn' ),
						'name'  => 'contacts_tab_3',
						'type'  => 'tab',
					],
					[
						'key'   => 'address_contacts',
						'label' => __ ( '', 'yarn' ),
						'name'  => 'address_contacts',
						'type'  => 'text',
					],
					[
						'key'   => 'fourth_tab_contacts',
						'label' => __( 'Социальные сети', 'yarn' ),
						'name'  => 'contacts_tab_4',
						'type'  => 'tab',
					],
					[
						'key'   => 'link_facebook',
						'label' => __ ( 'Facebook', 'yarn' ),
						'name'  => 'link_facebook',
						'type'  => 'url',
					],
					[
						'key'   => 'link_twitter',
						'label' => __ ( 'twitter', 'yarn' ),
						'name'  => 'link_twitter',
						'type'  => 'url',
					],
					[
						'key'   => 'link_google',
						'label' => __ ( 'Google+', 'yarn' ),
						'name'  => 'link_google',
						'type'  => 'url',
					],
				],
				'location' => [
					[
						[
							'param'    => 'page_template',
							'operator' => '==',
							'value'    => 'template-parts/template-contacts.php' ,
						],
					],
				],
			] );
		endif;
	}

	//// acf about-us ////
	public function register_fields_about_us() {
		if ( function_exists( 'acf_add_local_field_group' ) ):
			\acf_add_local_field_group( [
				'key'      => 'about_us',
				'title'    => __( 'CONTENT', 'yarn' ),
				'fields'   => [
					[
						'key'   => 'first_tab_about_us',
						'label' => __( 'О нас', 'yarn' ),
						'name'  => 'about_us_tab_1',
						'type'  => 'tab',
					],
					[
						'key'   => 'about_us_description',
						'label' => __ ( '', 'yarn' ),
						'name'  => 'about_us_description',
						'type'  => 'wysiwyg',
					],
					[
						'key'   => 'second_tab_about_us',
						'label' => __( 'Почему мы', 'yarn' ),
						'name'  => 'about_us_tab_2',
						'type'  => 'tab',
					],
					[
						'key'   => 'why_we_description',
						'label' => __ ( '', 'yarn' ),
						'name'  => 'why_we_description',
						'type'  => 'wysiwyg',
					],
				],
				'location' => [
					[
						[
							'param'    => 'page_template',
							'operator' => '==',
							'value'    => 'template-parts/template-about-us.php' ,
						],
					],
				],
			] );
		endif;
	}
}
$GRD_Functions = new GRD_Functions();