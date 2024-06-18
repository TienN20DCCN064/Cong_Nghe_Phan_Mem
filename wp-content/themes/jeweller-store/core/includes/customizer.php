<?php

if ( class_exists("Kirki")){

	// LOGO

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'jeweller_store_logo_resizer',
		'label'       => esc_html__( 'Adjust Your Logo Size ', 'jeweller-store' ),
		'section'     => 'title_tagline',
		'default'     => 70,
		'choices'     => [
			'min'  => 10,
			'max'  => 300,
			'step' => 10,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'jeweller_store_enable_logo_text',
		'section'     => 'title_tagline',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'jeweller-store' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'jeweller_store_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'jeweller-store' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'jeweller-store' ),
			'off' => esc_html__( 'Disable', 'jeweller-store' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'jeweller_store_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'jeweller-store' ),
		'section'     => 'title_tagline',
		'default'     => false,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'jeweller-store' ),
			'off' => esc_html__( 'Disable', 'jeweller-store' ),
		],
	] );

	// FONT STYLE TYPOGRAPHY

	Kirki::add_panel( 'jeweller_store_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Typography', 'jeweller-store' ),
	) );

	Kirki::add_section( 'jeweller_store_font_style_section', array(
		'title'      => esc_attr__( 'Typography Option',  'jeweller-store' ),
		'priority'   => 2,
		'capability' => 'edit_theme_options',
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'jeweller-store' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( JEWELLER_STORE_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'jeweller-store' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'jeweller_store_font_style_section',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. More Font Family Options </p><p>3. Color Pallete Setup </p><p>4. Section Reordering Facility</p><p>5. For More Options kindly Go For Premium Version.</p>', 'jeweller-store' ) . '</div>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'jeweller_store_all_headings_typography',
		'section'     => 'jeweller_store_font_style_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading Of All Sections',  'jeweller-store' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'jeweller_store_all_headings_typography',
		'label'       => esc_attr__( 'Heading Typography',  'jeweller-store' ),
		'description' => esc_attr__( 'Select the typography options for your heading.',  'jeweller-store' ),
		'section'     => 'jeweller_store_font_style_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'h1','h2','h3','h4','h5','h6', ),
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'jeweller_store_body_content_typography',
		'section'     => 'jeweller_store_font_style_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Body Content',  'jeweller-store' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'jeweller_store_body_content_typography',
		'label'       => esc_attr__( 'Content Typography',  'jeweller-store' ),
		'description' => esc_attr__( 'Select the typography options for your content.',  'jeweller-store' ),
		'section'     => 'jeweller_store_font_style_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'body', ),
			),
		),
	) );

	// PANEL

	Kirki::add_panel( 'jeweller_store_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Options', 'jeweller-store' ),
	) );

	// Additional Settings

	Kirki::add_section( 'jeweller_store_additional_settings', array(
	    'title'          => esc_html__( 'Additional Settings', 'jeweller-store' ),
	    'panel'          => 'jeweller_store_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'jeweller-store' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( JEWELLER_STORE_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'jeweller-store' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'jeweller_store_additional_settings',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'jeweller-store' ) . '</div>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'jeweller_store_scroll_enable_setting',
		'label'       => esc_html__( 'Here you can enable or disable your scroller.', 'jeweller-store' ),
		'section'     => 'jeweller_store_additional_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

	new \Kirki\Field\Radio_Buttonset(
	[
		'settings'    => 'jeweller_store_scroll_top_position',
		'label'       => esc_html__( 'Alignment for Scroll To Top', 'jeweller-store' ),
		'section'     => 'jeweller_store_additional_settings',
		'default'     => 'Right',
		'priority'    => 10,
		'choices'     => [
			'Left'   => esc_html__( 'Left', 'jeweller-store' ),
			'Center' => esc_html__( 'Center', 'jeweller-store' ),
			'Right'  => esc_html__( 'Right', 'jeweller-store' ),
		],
	]
	);

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'dashicons',
		'settings' => 'jeweller_store_scroll_top_icon',
		'label'    => esc_html__( 'Select Appropriate Scroll Top Icon', 'jeweller-store' ),
		'section'  => 'jeweller_store_additional_settings',
		'default'  => 'dashicons dashicons-arrow-up-alt',
		'priority' => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'menu_text_transform_jeweller_store',
		'label'       => esc_html__( 'Menus Text Transform', 'jeweller-store' ),
		'section'     => 'jeweller_store_additional_settings',
		'default'     => 'UPPERCASE',
		'placeholder' => esc_html__( 'Choose an option', 'jeweller-store' ),
		'choices'     => [
			'CAPITALISE' => esc_html__( 'CAPITALISE', 'jeweller-store' ),
			'UPPERCASE' => esc_html__( 'UPPERCASE', 'jeweller-store' ),
			'LOWERCASE' => esc_html__( 'LOWERCASE', 'jeweller-store' ),

		],
	]
	);

	new \Kirki\Field\Select(
	[
		'settings'    => 'jeweller_store_menu_zoom',
		'label'       => esc_html__( 'Menu Transition', 'jeweller-store' ),
		'section'     => 'jeweller_store_additional_settings',
		'default' => 'None',
		'placeholder' => esc_html__( 'Choose an option', 'jeweller-store' ),
		'choices'     => [
			'None' => __('None','jeweller-store'),
            'Zoominn' => __('Zoom Inn','jeweller-store'),
            
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'jeweller_store_container_width',
		'label'       => esc_html__( 'Theme Container Width', 'jeweller-store' ),
		'section'     => 'jeweller_store_additional_settings',
		'default'     => 100,
		'choices'     => [
			'min'  => 50,
			'max'  => 100,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'jeweller_store_sticky_header',
		'label'       => esc_html__( 'Here you can enable or disable your Sticky Header.', 'jeweller-store' ),
		'section'     => 'jeweller_store_additional_settings',
		'default'     => false,
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'jeweller_store_site_loader',
		'label'       => esc_html__( 'Here you can enable or disable your Site Loader.', 'jeweller-store' ),
		'section'     => 'jeweller_store_additional_settings',
		'default'     => false,
		'priority'    => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'jeweller_store_page_layout',
		'label'       => esc_html__( 'Page Layout Setting', 'jeweller-store' ),
		'section'     => 'jeweller_store_additional_settings',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'jeweller-store' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','jeweller-store'),
            'Right Sidebar' => __('Right Sidebar','jeweller-store'),
            'One Column' => __('One Column','jeweller-store')
		],
	] );

	if ( class_exists("woocommerce")){

		// Woocommerce Settings

		Kirki::add_section( 'jeweller_store_woocommerce_settings', array(
			'title'          => esc_html__( 'Woocommerce Settings', 'jeweller-store' ),
			'panel'          => 'jeweller_store_panel_id',
			'priority'       => 160,
		) );

		Kirki::add_field( 'theme_config_id', [
		    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'jeweller-store' ) . '</span>',
		    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( JEWELLER_STORE_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'jeweller-store' ) . '</a>',
		    'type'        => 'custom',
		    'section'     => 'jeweller_store_woocommerce_settings',
		    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'jeweller-store' ) . '</div>',
		] );

		Kirki::add_field( 'theme_config_id', [
			'type'        => 'toggle',
			'settings'    => 'jeweller_store_shop_sidebar',
			'label'       => esc_html__( 'Here you can enable or disable shop page sidebar.', 'jeweller-store' ),
			'section'     => 'jeweller_store_woocommerce_settings',
			'default'     => '1',
			'priority'    => 10,
		] );

		Kirki::add_field( 'theme_config_id', [
			'type'        => 'toggle',
			'settings'    => 'jeweller_store_product_sidebar',
			'label'       => esc_html__( 'Here you can enable or disable product page sidebar.', 'jeweller-store' ),
			'section'     => 'jeweller_store_woocommerce_settings',
			'default'     => '1',
			'priority'    => 10,
		] );

		Kirki::add_field( 'theme_config_id', [
			'type'        => 'toggle',
			'settings'    => 'jeweller_store_related_product_setting',
			'label'       => esc_html__( 'Here you can enable or disable your related products.', 'jeweller-store' ),
			'section'     => 'jeweller_store_woocommerce_settings',
			'default'     => true,
			'priority'    => 10,
		] );

		new \Kirki\Field\Number(
		[
			'settings' => 'jeweller_store_per_columns',
			'label'    => esc_html__( 'Product Per Row', 'jeweller-store' ),
			'section'  => 'jeweller_store_woocommerce_settings',
			'default'  => 3,
			'choices'  => [
				'min'  => 1,
				'max'  => 4,
				'step' => 1,
			],
		]
		);

		new \Kirki\Field\Number(
		[
			'settings' => 'jeweller_store_product_per_page',
			'label'    => esc_html__( 'Product Per Page', 'jeweller-store' ),
			'section'  => 'jeweller_store_woocommerce_settings',
			'default'  => 9,
			'choices'  => [
				'min'  => 1,
				'max'  => 15,
				'step' => 1,
			],
		]
		);

		new \Kirki\Field\Number(
		[
			'settings' => 'custom_related_products_number_per_row',
			'label'    => esc_html__( 'Related Product Per Column', 'jeweller-store' ),
			'section'  => 'jeweller_store_woocommerce_settings',
			'default'  => 3,
			'choices'  => [
				'min'  => 1,
				'max'  => 4,
				'step' => 1,
			],
		]
		);

		new \Kirki\Field\Number(
		[
			'settings' => 'custom_related_products_number',
			'label'    => esc_html__( 'Related Product Per Page', 'jeweller-store' ),
			'section'  => 'jeweller_store_woocommerce_settings',
			'default'  => 3,
			'choices'  => [
				'min'  => 1,
				'max'  => 10,
				'step' => 1,
			],
		]
		);

		new \Kirki\Field\Select(
		[
			'settings'    => 'jeweller_store_shop_page_layout',
			'label'       => esc_html__( 'Shop Page Layout Setting', 'jeweller-store' ),
			'section'     => 'jeweller_store_woocommerce_settings',
			'default' => 'Right Sidebar',
			'placeholder' => esc_html__( 'Choose an option', 'jeweller-store' ),
			'choices'     => [
				'Left Sidebar' => __('Left Sidebar','jeweller-store'),
	            'Right Sidebar' => __('Right Sidebar','jeweller-store')
			],
		] );

		new \Kirki\Field\Select(
		[
			'settings'    => 'jeweller_store_product_page_layout',
			'label'       => esc_html__( 'Product Page Layout Setting', 'jeweller-store' ),
			'section'     => 'jeweller_store_woocommerce_settings',
			'default' => 'Right Sidebar',
			'placeholder' => esc_html__( 'Choose an option', 'jeweller-store' ),
			'choices'     => [
				'Left Sidebar' => __('Left Sidebar','jeweller-store'),
	            'Right Sidebar' => __('Right Sidebar','jeweller-store')
			],
		] );

		new \Kirki\Field\Radio_Buttonset(
			[
				'settings'    => 'jeweller_store_woocommerce_pagination_position',
				'label'       => esc_html__( 'Woocommerce Pagination Alignment', 'jeweller-store' ),
				'section'     => 'jeweller_store_woocommerce_settings',
				'default'     => 'Center',
				'priority'    => 10,
				'choices'     => [
					'Left'   => esc_html__( 'Left', 'jeweller-store' ),
					'Center' => esc_html__( 'Center', 'jeweller-store' ),
					'Right'  => esc_html__( 'Right', 'jeweller-store' ),
				],
			]
		);

	}

	// POST SECTION

	Kirki::add_section( 'jeweller_store_section_post', array(
	    'title'          => esc_html__( 'Post Settings', 'jeweller-store' ),
	    'panel'          => 'jeweller_store_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'jeweller-store' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( JEWELLER_STORE_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'jeweller-store' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'jeweller_store_section_post',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'jeweller-store' ) . '</div>',
	] );

		new \Kirki\Field\Sortable(
	[
		'settings' => 'jeweller_store_archive_element_sortable',
		'label'    => __( 'Archive Post Page Element Reordering', 'jeweller-store' ),
		'section'  => 'jeweller_store_section_post',
		'default'  => [ 'option1', 'option2', 'option3' ],
		'choices'  => [
			'option1' => esc_html__( 'Post Meta', 'jeweller-store' ),
			'option2' => esc_html__( 'Post Title', 'jeweller-store' ),
			'option3' => esc_html__( 'Post Content', 'jeweller-store' ),
		],
	]
	);

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'jeweller_store_post_excerpt_number_1',
		'label'       => esc_html__( 'Post Content Range', 'jeweller-store' ),
		'section'     => 'jeweller_store_section_post',
		'default'     => 15,
		'choices'     => [
			'min'  => 10,
			'max'  => 100,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'jeweller_store_pagination_setting',
		'label'       => esc_html__( 'Here you can enable or disable your Pagination.', 'jeweller-store' ),
		'section'     => 'jeweller_store_section_post',
		'default'     => true,
		'priority'    => 10,
	] );

		new \Kirki\Field\Select(
	[
		'settings'    => 'jeweller_store_archive_sidebar_layout',
		'label'       => esc_html__( 'Archive Post Sidebar Layout Setting', 'jeweller-store' ),
		'section'     => 'jeweller_store_section_post',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'jeweller-store' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','jeweller-store'),
            'Right Sidebar' => __('Right Sidebar','jeweller-store')
		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'jeweller_store_single_post_sidebar_layout',
		'label'       => esc_html__( 'Single Post Sidebar Layout Setting', 'jeweller-store' ),
		'section'     => 'jeweller_store_section_post',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'jeweller-store' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','jeweller-store'),
            'Right Sidebar' => __('Right Sidebar','jeweller-store')
		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'jeweller_store_search_sidebar_layout',
		'label'       => esc_html__( 'Search Page Sidebar Layout Setting', 'jeweller-store' ),
		'section'     => 'jeweller_store_section_post',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'jeweller-store' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','jeweller-store'),
            'Right Sidebar' => __('Right Sidebar','jeweller-store')
		],
	] );

	Kirki::add_field( 'jeweller_store_config', [
		'type'        => 'select',
		'settings'    => 'jeweller_store_post_column_count',
		'label'       => esc_html__( 'Grid Column for Archive Page', 'jeweller-store' ),
		'section'     => 'jeweller_store_section_post',
		'default'    => '2',
		'choices' => [
				'1' => __( '1 Column', 'jeweller-store' ),
				'2' => __( '2 Column', 'jeweller-store' ),
				'3' => __( '3 Column', 'jeweller-store' ),
				'4' => __( '4 Column', 'jeweller-store' ),
			],
	] );

	// Breadcrumb
	Kirki::add_section( 'jeweller_store_bradcrumb', array(
	    'title'          => esc_html__( 'Breadcrumb Settings', 'jeweller-store' ),
	    'panel'          => 'jeweller_store_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'jeweller-store' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( JEWELLER_STORE_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'jeweller-store' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'jeweller_store_bradcrumb',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'jeweller-store' ) . '</div>',
	] );


	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'jeweller_store_enable_breadcrumb_heading',
		'section'     => 'jeweller_store_bradcrumb',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Single Page Breadcrumb', 'jeweller-store' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'jeweller_store_breadcrumb_enable',
		'label'       => esc_html__( 'Breadcrumb Enable / Disable', 'jeweller-store' ),
		'section'     => 'jeweller_store_bradcrumb',
		'default'     => true,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'jeweller-store' ),
			'off' => esc_html__( 'Disable', 'jeweller-store' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
        'type'     => 'text',
        'default'     => '/',
        'settings' => 'jeweller_store_breadcrumb_separator' ,
        'label'    => esc_html__( 'Breadcrumb Separator',  'jeweller-store' ),
        'section'  => 'jeweller_store_bradcrumb',
    ] );

	// HEADER SECTION

	Kirki::add_section( 'jeweller_store_section_header', array(
	    'title'          => esc_html__( 'Header Settings', 'jeweller-store' ),
	    'panel'          => 'jeweller_store_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'jeweller-store' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( JEWELLER_STORE_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'jeweller-store' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'jeweller_store_section_header',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'jeweller-store' ) . '</div>',
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'jeweller_store_top_header_text',
		'label'    => esc_html__( 'Header Text', 'jeweller-store' ),
		'section'  => 'jeweller_store_section_header',
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'jeweller_store_top_header_email',
		'label'    => esc_html__( 'Email Address', 'jeweller-store' ),
		'section'  => 'jeweller_store_section_header',	
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'jeweller_store_top_header_call',
		'label'    => esc_html__( 'Phone Number', 'jeweller-store' ),
		'section'  => 'jeweller_store_section_header',	
    ] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'jeweller_store_enable_button_heading',
		'section'     => 'jeweller_store_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Header Button', 'jeweller-store' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'jeweller_store_header_button_link',
		'label'    => esc_html__( 'Button Link', 'jeweller-store' ),
		'section'  => 'jeweller_store_section_header',	
    ] );
	
	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'jeweller_store_enable_search',
		'section'     => 'jeweller_store_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Search Box', 'jeweller-store' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'jeweller_store_search_box_enable',
		'section'     => 'jeweller_store_section_header',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'jeweller-store' ),
			'off' => esc_html__( 'Disable', 'jeweller-store' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'jeweller_store_header_ship_truck',
		'label'    => esc_html__( 'Shipping Text', 'jeweller-store' ),
		'section'  => 'jeweller_store_section_header',	
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'jeweller_store_header_return',
		'label'    => esc_html__( 'Return Policy Text', 'jeweller-store' ),
		'section'  => 'jeweller_store_section_header',	
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'jeweller_store_header_secure',
		'label'    => esc_html__( 'Secure Payment Text', 'jeweller-store' ),
		'section'  => 'jeweller_store_section_header',
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'jeweller_store_header_gift',
		'label'    => esc_html__( 'Gift Card Text', 'jeweller-store' ),
		'section'  => 'jeweller_store_section_header',
    ] );

	// SLIDER SECTION

	Kirki::add_section( 'jeweller_store_blog_slide_section', array(
        'title'          => esc_html__( ' Slider Settings', 'jeweller-store' ),
        'panel'          => 'jeweller_store_panel_id',
        'priority'       => 160,
    ) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'jeweller-store' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( JEWELLER_STORE_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'jeweller-store' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'jeweller_store_blog_slide_section',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'jeweller-store' ) . '</div>',
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'jeweller_store_enable_heading',
		'section'     => 'jeweller_store_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Slider', 'jeweller-store' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'jeweller_store_blog_box_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'jeweller-store' ),
		'section'     => 'jeweller_store_blog_slide_section',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'jeweller-store' ),
			'off' => esc_html__( 'Disable', 'jeweller-store' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'jeweller_store_title_unable_disable',
		'label'       => esc_html__( 'Slide Title Enable / Disable', 'jeweller-store' ),
		'section'     => 'jeweller_store_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'jeweller-store' ),
			'off' => esc_html__( 'Disable', 'jeweller-store' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'jeweller_store_text_unable_disable',
		'label'       => esc_html__( 'Slide Text Enable / Disable', 'jeweller-store' ),
		'section'     => 'jeweller_store_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'jeweller-store' ),
			'off' => esc_html__( 'Disable', 'jeweller-store' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'jeweller_store_button_unable_disable',
		'label'       => esc_html__( 'Slide Button Enable / Disable', 'jeweller-store' ),
		'section'     => 'jeweller_store_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'jeweller-store' ),
			'off' => esc_html__( 'Disable', 'jeweller-store' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'jeweller_store_slider_heading',
		'section'     => 'jeweller_store_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Slider', 'jeweller-store' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'jeweller_store_slider_text_extra',
		'label'    => esc_html__( 'Slider Extra Heading', 'jeweller-store' ),
		'section'  => 'jeweller_store_blog_slide_section',	
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'jeweller_store_blog_slide_number',
		'label'       => esc_html__( 'Number of slides to show', 'jeweller-store' ),
		'section'     => 'jeweller_store_blog_slide_section',
		'default'     => 0,
		'choices'     => [
			'min'  => 1,
			'max'  => 3,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'jeweller_store_blog_slide_category',
		'description'    => esc_html__( 'You have to select post category to show slider.', 'jeweller-store' ),
		'label'       => esc_html__( 'Select the category to show slider ( Image Dimension 1600 x 600 )', 'jeweller-store' ),
		'section'     => 'jeweller_store_blog_slide_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...', 'jeweller-store' ),
		'priority'    => 10,
		'choices'     => jeweller_store_get_categories_select(),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'jeweller_store_slider_short_heading_12',
		'section'     => 'jeweller_store_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Number of Text', 'jeweller-store' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'jeweller_store_post_excerpt_number',
		'label'       => esc_html__( 'Number of Slide Text To Show ', 'jeweller-store' ),
		'section'     => 'jeweller_store_blog_slide_section',
		'default'     => 22,
		'choices'     => [
			'min'  => 10,
			'max'  => 50,
			'step' => 1,
		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'jeweller_store_slider_opacity_color',
		'label'       => esc_html__( 'Slider Opacity Option', 'jeweller-store' ),
		'section'     => 'jeweller_store_blog_slide_section',
		'default'     => '0.3',
		'placeholder' => esc_html__( 'Choose an option', 'jeweller-store' ),
		'choices'     => [
			'0' => esc_html__( '0', 'jeweller-store' ),
			'0.1' => esc_html__( '0.1', 'jeweller-store' ),
			'0.2' => esc_html__( '0.2', 'jeweller-store' ),
			'0.3' => esc_html__( '0.3', 'jeweller-store' ),
			'0.4' => esc_html__( '0.4', 'jeweller-store' ),
			'0.5' => esc_html__( '0.5', 'jeweller-store' ),
			'0.6' => esc_html__( '0.6', 'jeweller-store' ),
			'0.7' => esc_html__( '0.7', 'jeweller-store' ),
			'0.8' => esc_html__( '0.8', 'jeweller-store' ),
			'0.9' => esc_html__( '0.9', 'jeweller-store' ),
			'1.0' => esc_html__( '1.0', 'jeweller-store' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'jeweller_store_overlay_option',
		'label'       => esc_html__( 'Enable / Disable Slider Overlay', 'jeweller-store' ),
		'section'     => 'jeweller_store_blog_slide_section',
		'default'     => true,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'jeweller-store' ),
			'off' => esc_html__( 'Disable', 'jeweller-store' ),
		],
	] );

	 Kirki::add_field( 'theme_config_id', [
		'type'        => 'color',
		'settings'    => 'jeweller_store_slider_image_overlay_color',
		'label'       => __( 'choose your Appropriate Overlay Color', 'jeweller-store' ),
		'section'     => 'jeweller_store_blog_slide_section',
		'default'     => '#b2905f',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'jeweller_store_enable_heading',
		'section'     => 'jeweller_store_product_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Featured Product', 'jeweller-store' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'jeweller_store_featured_product_section_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'jeweller-store' ),
		'section'     => 'jeweller_store_blog_slide_section',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'jeweller-store' ),
			'off' => esc_html__( 'Disable', 'jeweller-store' ),
		],
	] );

	// OUR PRODUCTS SECTION

	Kirki::add_section( 'jeweller_store_products_section', array(
        'title'          => esc_html__( 'Our Products Settings', 'jeweller-store' ),
        'panel'          => 'jeweller_store_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'jeweller-store' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( JEWELLER_STORE_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'jeweller-store' ) . '</a>',
	    'type'        => 'custom',
	    'priority'    => 1,
	    'section'     => 'jeweller_store_products_section',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'jeweller-store' ) . '</div>',
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'jeweller_store_products_section_enable_heading',
		'section'     => 'jeweller_store_products_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Products Section', 'jeweller-store' ) . '</h3>',
		'priority'    => 1,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'jeweller_store_products_section_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'jeweller-store' ),
		'section'     => 'jeweller_store_products_section',
		'default'     => '0',
		'priority'    => 2,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'jeweller-store' ),
			'off' => esc_html__( 'Disable', 'jeweller-store' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'jeweller_store_products_heading',
		'section'     => 'jeweller_store_products_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Our Products Headings',  'jeweller-store' ) . '</h3>',
		'priority'    => 3,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'jeweller_store_products_main_heading',
		'label'    => esc_html__( 'Main Heading', 'jeweller-store' ),
		'section'  => 'jeweller_store_products_section',
		'priority' => 5,
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'jeweller_store_our_product_heading',
		'section'     => 'jeweller_store_products_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Hot Products', 'jeweller-store' ) . '</h3>',
		'priority'    => 7,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'jeweller_store_products_per_page',
		'label'       => esc_html__( 'Number of products to show', 'jeweller-store' ),
		'section'     => 'jeweller_store_products_section',
		'default'     => 8,
		'choices'     => [
			'min'  => 0,
			'max'  => 25,
			'step' => 1,
		],
	] );

	// FOOTER SECTION

	Kirki::add_section( 'jeweller_store_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'jeweller-store' ),
        'panel'          => 'jeweller_store_panel_id',
        'priority'       => 170,
    ) );

    Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'jeweller-store' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( JEWELLER_STORE_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'jeweller-store' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'jeweller_store_footer_section',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'jeweller-store' ) . '</div>',
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'jeweller_store_footer_text_heading',
		'section'     => 'jeweller_store_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'jeweller-store' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'jeweller_store_footer_text',
		'section'  => 'jeweller_store_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
	'type'        => 'custom',
	'settings'    => 'jeweller_store_footer_text_heading_2',
	'section'     => 'jeweller_store_footer_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Alignment', 'jeweller-store' ) . '</h3>',
	'priority'    => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'jeweller_store_copyright_text_alignment',
		'label'       => esc_html__( 'Copyright text Alignment', 'jeweller-store' ),
		'section'     => 'jeweller_store_footer_section',
		'default'     => 'LEFT-ALIGN',
		'placeholder' => esc_html__( 'Choose an option', 'jeweller-store' ),
		'choices'     => [
			'LEFT-ALIGN' => esc_html__( 'LEFT-ALIGN', 'jeweller-store' ),
			'CENTER-ALIGN' => esc_html__( 'CENTER-ALIGN', 'jeweller-store' ),
			'RIGHT-ALIGN' => esc_html__( 'RIGHT-ALIGN', 'jeweller-store' ),

		],
	] );

	Kirki::add_field( 'theme_config_id', [
	'type'        => 'custom',
	'settings'    => 'jeweller_store_footer_text_heading_1',
	'section'     => 'jeweller_store_footer_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Background Color', 'jeweller-store' ) . '</h3>',
	'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'color',
		'settings'    => 'jeweller_store_copyright_bg',
		'label'       => __( 'Choose Your Copyright Background Color', 'jeweller-store' ),
		'section'     => 'jeweller_store_footer_section',
		'default'     => '',
	] );

}

add_action( 'customize_register', 'jeweller_store_customizer_settings' );
function jeweller_store_customizer_settings( $wp_customize ) {
	$wp_customize->add_setting('jeweller_store_products_tab_number',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('jeweller_store_products_tab_number',array(
		'type' => 'number',
		'label' => __('Show number of product tab','jeweller-store'),
		'section' => 'jeweller_store_products_section',
	));

	$jeweller_store_meal_post = get_theme_mod('jeweller_store_products_tab_number','');
    for ( $jeweller_store_j = 1; $jeweller_store_j <= $jeweller_store_meal_post; $jeweller_store_j++ ) {

		$wp_customize->add_setting('jeweller_store_products_tabs_text'.$jeweller_store_j,array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field',
		));
		$wp_customize->add_control('jeweller_store_products_tabs_text'.$jeweller_store_j,array(
			'type' => 'text',
			'label' => __('Tab Text ','jeweller-store').$jeweller_store_j,
			'section' => 'jeweller_store_products_section',
		));

		$jeweller_store_args = array(
	       'type'                     => 'product',
	        'child_of'                 => 0,
	        'parent'                   => '',
	        'orderby'                  => 'term_group',
	        'order'                    => 'ASC',
	        'hide_empty'               => false,
	        'hierarchical'             => 1,
	        'number'                   => '',
	        'taxonomy'                 => 'product_cat',
	        'pad_counts'               => false
	    );
		$categories = get_categories($jeweller_store_args);
		$jeweller_store_cat_posts = array();
		$jeweller_store_m = 0;
		$jeweller_store_cat_posts[]='Select';
		foreach($categories as $category){
			if($jeweller_store_m==0){
				$default = $category->slug;
				$jeweller_store_m++;
			}
			$jeweller_store_cat_posts[$category->slug] = $category->name;
		}

		$wp_customize->add_setting('jeweller_store_products_category'.$jeweller_store_j,array(
			'default'	=> 'select',
			'sanitize_callback' => 'jeweller_store_sanitize_select',
			'description'    => esc_html__( 'You have to select product category to show cosmetic section.', 'jeweller-store' ),
		));

		$wp_customize->add_control('jeweller_store_products_category'.$jeweller_store_j,array(
			'type'    => 'select',
			'choices' => $jeweller_store_cat_posts,
			'label' => __('Select category to display products ','jeweller-store').$jeweller_store_j,
			'section' => 'jeweller_store_products_section',
		));
	}

	$jeweller_store_args = array(
       'type'                     => 'product',
        'child_of'                 => 0,
        'parent'                   => '',
        'orderby'                  => 'term_group',
        'order'                    => 'ASC',
        'hide_empty'               => false,
        'hierarchical'             => 1,
        'number'                   => '',
        'taxonomy'                 => 'product_cat',
        'pad_counts'               => false
    );
	$categories = get_categories($jeweller_store_args);
	$jeweller_store_cat_posts = array();
	$jeweller_store_m = 0;
	$jeweller_store_cat_posts[]='Select';
	foreach($categories as $category){
		if($jeweller_store_m==0){
			$default = $category->slug;
			$jeweller_store_m++;
		}
		$jeweller_store_cat_posts[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('jeweller_store_featured_product_category',array(
		'default'	=> 'select',
		'sanitize_callback' => 'jeweller_store_sanitize_select',
	));

	$wp_customize->add_control('jeweller_store_featured_product_category',array(
		'type'    => 'select',
		'choices' => $jeweller_store_cat_posts,
		'label' => __('Select category to display products on slider','jeweller-store'),
		'section' => 'jeweller_store_blog_slide_section',
	));
}

/*
 *  Customizer Notifications
 */

$jeweller_store_config_customizer = array(
    'recommended_plugins' => array( 
        'kirki' => array(
            'recommended' => true,
            'description' => sprintf( 
                /* translators: %s: plugin name */
                esc_html__( 'If you want to show all the sections of the FrontPage, please install and activate %s plugin', 'jeweller-store' ), 
                '<strong>' . esc_html__( 'Kirki Customizer', 'jeweller-store' ) . '</strong>'
            ),
        ),
    ),
    'jeweller_store_recommended_actions'       => array(),
    'jeweller_store_recommended_actions_title' => esc_html__( 'Recommended Actions', 'jeweller-store' ),
    'jeweller_store_recommended_plugins_title' => esc_html__( 'Recommended Plugin', 'jeweller-store' ),
    'jeweller_store_install_button_label'      => esc_html__( 'Install and Activate', 'jeweller-store' ),
    'jeweller_store_activate_button_label'     => esc_html__( 'Activate', 'jeweller-store' ),
    'jeweller_store_deactivate_button_label'   => esc_html__( 'Deactivate', 'jeweller-store' ),
);

jeweller_store_Customizer_Notify::init( apply_filters( 'jeweller_store_customizer_notify_array', $jeweller_store_config_customizer ) );