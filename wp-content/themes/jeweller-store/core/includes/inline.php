<?php

$jeweller_store_custom_css = '';

/*---------------------------text-transform-------------------*/

$jeweller_store_text_transform = get_theme_mod( 'menu_text_transform_jeweller_store','UPPERCASE');

if($jeweller_store_text_transform == 'CAPITALISE'){

	$jeweller_store_custom_css .='#main-menu ul li a{';

		$jeweller_store_custom_css .='text-transform: capitalize ;';

	$jeweller_store_custom_css .='}';

}else if($jeweller_store_text_transform == 'UPPERCASE'){

	$jeweller_store_custom_css .='#main-menu ul li a{';

		$jeweller_store_custom_css .='text-transform: uppercase ;';

	$jeweller_store_custom_css .='}';

}else if($jeweller_store_text_transform == 'LOWERCASE'){

	$jeweller_store_custom_css .='#main-menu ul li a{';

		$jeweller_store_custom_css .='text-transform: lowercase ;';

	$jeweller_store_custom_css .='}';
}

	/*---------------------------menu-zoom-------------------*/

		$jeweller_store_menu_zoom = get_theme_mod( 'jeweller_store_menu_zoom','None');

    if($jeweller_store_menu_zoom == 'None'){

		$jeweller_store_custom_css .='#main-menu ul li a{';

			$jeweller_store_custom_css .='';

		$jeweller_store_custom_css .='}';

	}else if($jeweller_store_menu_zoom == 'Zoominn'){

		$jeweller_store_custom_css .='#main-menu ul li a:hover{';

			$jeweller_store_custom_css .='transition: all 0.3s ease-in-out !important; transform: scale(1.2) !important; color: #b2905f;';

		$jeweller_store_custom_css .='}';
	}

/*---------------------------Container Width-------------------*/

$jeweller_store_container_width = get_theme_mod('jeweller_store_container_width');

	$jeweller_store_custom_css .='body{';

		$jeweller_store_custom_css .='width: '.esc_attr($jeweller_store_container_width).'%; margin: auto;';

	$jeweller_store_custom_css .='}';

	/*---------------------------Scroll to Top Alignment Settings-------------------*/

	$jeweller_store_scroll_top_position = get_theme_mod( 'jeweller_store_scroll_top_position','Right');

	if($jeweller_store_scroll_top_position == 'Right'){

		$jeweller_store_custom_css .='.scroll-up{';

			$jeweller_store_custom_css .='right: 20px;';

		$jeweller_store_custom_css .='}';

	}else if($jeweller_store_scroll_top_position == 'Left'){

		$jeweller_store_custom_css .='.scroll-up{';

			$jeweller_store_custom_css .='left: 20px;';

		$jeweller_store_custom_css .='}';

	}else if($jeweller_store_scroll_top_position == 'Center'){

		$jeweller_store_custom_css .='.scroll-up{';

			$jeweller_store_custom_css .='right: 50%;left: 50%;';

		$jeweller_store_custom_css .='}';
	}

		/*---------------------------Pagination Settings-------------------*/


$jeweller_store_pagination_setting = get_theme_mod('jeweller_store_pagination_setting',true);

	if($jeweller_store_pagination_setting == false){

		$jeweller_store_custom_css .='.nav-links{';

			$jeweller_store_custom_css .='display: none;';

		$jeweller_store_custom_css .='}';
	}

	/*---------------------------related Product Settings-------------------*/


$jeweller_store_related_product_setting = get_theme_mod('jeweller_store_related_product_setting',true);

	if($jeweller_store_related_product_setting == false){

		$jeweller_store_custom_css .='.related.products, .related h2{';

			$jeweller_store_custom_css .='display: none;';

		$jeweller_store_custom_css .='}';
	}

	/*---------------------------Copyright Text alignment-------------------*/

$jeweller_store_copyright_text_alignment = get_theme_mod( 'jeweller_store_copyright_text_alignment','LEFT-ALIGN');

 if($jeweller_store_copyright_text_alignment == 'LEFT-ALIGN'){

		$jeweller_store_custom_css .='.copy-text p{';

			$jeweller_store_custom_css .='text-align:left;';

		$jeweller_store_custom_css .='}';


	}else if($jeweller_store_copyright_text_alignment == 'CENTER-ALIGN'){

		$jeweller_store_custom_css .='.copy-text p{';

			$jeweller_store_custom_css .='text-align:center;';

		$jeweller_store_custom_css .='}';


	}else if($jeweller_store_copyright_text_alignment == 'RIGHT-ALIGN'){

		$jeweller_store_custom_css .='.copy-text p{';

			$jeweller_store_custom_css .='text-align:right;';

		$jeweller_store_custom_css .='}';

	}

	/*--------------------------- Slider Opacity -------------------*/

	$jeweller_store_slider_opacity_color = get_theme_mod( 'jeweller_store_slider_opacity_color','0.4');

	if($jeweller_store_slider_opacity_color == '0'){

		$jeweller_store_custom_css .='.blog_inner_box img{';

			$jeweller_store_custom_css .='opacity:0';

		$jeweller_store_custom_css .='}';

		}else if($jeweller_store_slider_opacity_color == '0.1'){

		$jeweller_store_custom_css .='.blog_inner_box img{';

			$jeweller_store_custom_css .='opacity:0.1';

		$jeweller_store_custom_css .='}';

		}else if($jeweller_store_slider_opacity_color == '0.2'){

		$jeweller_store_custom_css .='.blog_inner_box img{';

			$jeweller_store_custom_css .='opacity:0.2';

		$jeweller_store_custom_css .='}';

		}else if($jeweller_store_slider_opacity_color == '0.3'){

		$jeweller_store_custom_css .='.blog_inner_box img{';

			$jeweller_store_custom_css .='opacity:0.3';

		$jeweller_store_custom_css .='}';

		}else if($jeweller_store_slider_opacity_color == '0.4'){

		$jeweller_store_custom_css .='.blog_inner_box img{';

			$jeweller_store_custom_css .='opacity:0.4';

		$jeweller_store_custom_css .='}';

		}else if($jeweller_store_slider_opacity_color == '0.5'){

		$jeweller_store_custom_css .='.blog_inner_box img{';

			$jeweller_store_custom_css .='opacity:0.5';

		$jeweller_store_custom_css .='}';

		}else if($jeweller_store_slider_opacity_color == '0.6'){

		$jeweller_store_custom_css .='.blog_inner_box img{';

			$jeweller_store_custom_css .='opacity:0.6';

		$jeweller_store_custom_css .='}';

		}else if($jeweller_store_slider_opacity_color == '0.7'){

		$jeweller_store_custom_css .='.blog_inner_box img{';

			$jeweller_store_custom_css .='opacity:0.7';

		$jeweller_store_custom_css .='}';

		}else if($jeweller_store_slider_opacity_color == '0.8'){

		$jeweller_store_custom_css .='.blog_inner_box img{';

			$jeweller_store_custom_css .='opacity:0.8';

		$jeweller_store_custom_css .='}';

		}else if($jeweller_store_slider_opacity_color == '0.9'){

		$jeweller_store_custom_css .='.blog_inner_box img{';

			$jeweller_store_custom_css .='opacity:0.9';

		$jeweller_store_custom_css .='}';

		}else if($jeweller_store_slider_opacity_color == '1.0'){

		$jeweller_store_custom_css .='.blog_inner_box img{';

			$jeweller_store_custom_css .='opacity:0.9';

		$jeweller_store_custom_css .='}';

		}

	/*---------------------- Slider Image Overlay ------------------------*/

	$jeweller_store_overlay_option = get_theme_mod('jeweller_store_overlay_option', true);

	if($jeweller_store_overlay_option == false){

		$jeweller_store_custom_css .='.blog_inner_box img{';

			$jeweller_store_custom_css .='opacity:0.3;';

		$jeweller_store_custom_css .='}';
	}

	$jeweller_store_slider_image_overlay_color = get_theme_mod('jeweller_store_slider_image_overlay_color', true);

	if($jeweller_store_slider_image_overlay_color != false){

		$jeweller_store_custom_css .='.blog_inner_box{';

			$jeweller_store_custom_css .='background-color: '.esc_attr($jeweller_store_slider_image_overlay_color).';';

		$jeweller_store_custom_css .='}';
	}

	
	/*---------------------------woocommerce pagination alignment settings-------------------*/

	$jeweller_store_woocommerce_pagination_position = get_theme_mod( 'jeweller_store_woocommerce_pagination_position','Center');

	if($jeweller_store_woocommerce_pagination_position == 'Left'){

		$jeweller_store_custom_css .='.woocommerce nav.woocommerce-pagination{';

			$jeweller_store_custom_css .='text-align: left;';

		$jeweller_store_custom_css .='}';

	}else if($jeweller_store_woocommerce_pagination_position == 'Center'){

		$jeweller_store_custom_css .='.woocommerce nav.woocommerce-pagination{';

			$jeweller_store_custom_css .='text-align: center;';

		$jeweller_store_custom_css .='}';

	}else if($jeweller_store_woocommerce_pagination_position == 'Right'){

		$jeweller_store_custom_css .='.woocommerce nav.woocommerce-pagination{';

			$jeweller_store_custom_css .='text-align: right;';

		$jeweller_store_custom_css .='}';
	}

