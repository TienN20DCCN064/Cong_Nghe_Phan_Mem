<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta http-equiv="Content-Type" content="<?php echo esc_attr(get_bloginfo('html_type')); ?>; charset=<?php echo esc_attr(get_bloginfo('charset')); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php
	if ( function_exists( 'wp_body_open' ) )
	{
		wp_body_open();
	}else{
		do_action('wp_body_open');
	}
?>

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'jeweller-store' ); ?></a>

<?php if ( get_theme_mod('jeweller_store_site_loader', false) == true ) : ?>
	<div class="cssloader">
    	<div class="sh1"></div>
    	<div class="sh2"></div>
    	<h1 class="lt"><?php esc_html_e( 'loading',  'jeweller-store' ); ?></h1>
    </div>
<?php endif; ?>

<div class="top-header">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 col-md-6 col-sm-6 align-self-center text-center text-md-start">
				<?php if ( get_theme_mod('jeweller_store_top_header_text') ) : ?>
    		  		<p class="mb-0"><?php echo esc_html(get_theme_mod('jeweller_store_top_header_text'));?></p>
        		<?php endif; ?>
			</div>
			<div class="col-lg-5 col-md-6 col-sm-6 align-self-center text-center text-md-end">
				<?php if ( get_theme_mod('jeweller_store_top_header_email') ) : ?>
    		  		<span class="me-3"><i class="fas fa-envelope me-2"></i><?php echo esc_html(get_theme_mod('jeweller_store_top_header_email'));?></span>
        		<?php endif; ?>
        		<?php if ( get_theme_mod('jeweller_store_top_header_call') ) : ?>
    		  		<span><i class="fas fa-phone me-2"></i><?php echo esc_html(get_theme_mod('jeweller_store_top_header_call'));?></span>
        		<?php endif; ?>
			</div>
		</div>
	</div>
</div>

<div class="<?php if( get_theme_mod( 'jeweller_store_sticky_header', false) != '') { ?>sticky-header<?php } else { ?>close-sticky main-menus<?php } ?>">
	<header id="site-navigation" class="header text-center text-md-start">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-12 col-sm-12 align-self-center">
		    		<div class="logo text-md-center text-lg-start">
			    		<div class="logo-image me-3">
			    			<?php the_custom_logo(); ?>
				    	</div>
				    	<div class="logo-content">
					    	<?php
					    		if ( get_theme_mod('jeweller_store_display_header_title', true) == true ) :
						      		echo '<a href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '">';
						      			echo esc_attr(get_bloginfo('name'));
						      		echo '</a>';
						      	endif;

						      	if ( get_theme_mod('jeweller_store_display_header_text', false) == true ) :
					      			echo '<span>'. esc_attr(get_bloginfo('description')) . '</span>';
					      		endif;
				    		?>
						</div>
					</div>
			   	</div>
				<div class="col-lg-6 col-md-7 col-sm-7 align-self-center">
					<button class="menu-toggle my-2 py-2 px-3" aria-controls="top-menu" aria-expanded="false" type="button">
						<span aria-hidden="true"><?php esc_html_e( 'Menu', 'jeweller-store' ); ?></span>
					</button>
					<nav id="main-menu" class="close-panal">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'main-menu',
								'container' => 'false'
							));
						?>
						<button class="close-menu my-2 p-2" type="button">
							<span aria-hidden="true"><i class="fa fa-times"></i></span>
						</button>
					</nav>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-3 align-self-center">
					<?php if ( get_theme_mod('jeweller_store_header_button_link') ) : ?>
						<div class="header-button">
    		  				<a href="<?php echo esc_url(get_theme_mod('jeweller_store_header_button_link'));?>"><?php esc_html_e('CONTACT US','jeweller-store'); ?></a>
	    		  		</div>
	        		<?php endif; ?>
	        	</div>
				<div class="col-lg-1 col-md-2 col-sm-2 align-self-center search-cart">
					<div class="offcanvas-div d-flex">
						<button type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
							<i class="fas fa-bars"></i>
						</button>
						<div class="offcanvas offcanvas-end" id="demo">
							<div class="offcanvas-header"> 
								<button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
							</div>
							<div class="offcanvas-body">
								<?php dynamic_sidebar('jeweller-store-menu-sidebar'); ?>
							</div>
						</div>
					</div>
					<?php if ( get_theme_mod('jeweller_store_search_box_enable', true) == true ) : ?>
	                    <div class="header-search">
	                        <a class="open-search-form" href="#search-form"><i class="fa fa-search" aria-hidden="true"></i></a>
	                        <div class="search-form"><?php get_search_form();?></div>
	                    </div>
	                <?php endif; ?>
	                <?php if(class_exists('woocommerce')){ ?>
	                	<div class="myaccount-box">
				          	<?php if ( is_user_logged_in() ) { ?>
				            	<a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>"><i class="fas fa-sign-in-alt"></i></a>
				          	<?php }
				          	else { ?>
				            	<a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>" title="<?php esc_attr_e('Login / Register','jeweller-store'); ?>"><i class="fas fa-user"></i></a>
				          	<?php } ?>
				        </div>
			        <?php }?>
			        <?php if(class_exists('woocommerce')){ ?>
			        	<div class="cart-customlocation">
							<a href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>" title="<?php esc_attr_e( 'View Shopping Cart','jeweller-store' ); ?>"><i class="fas fa-shopping-bag"></i></a>
						</div>
					<?php }?>
				</div>
			</div>
		</div>
	</header>
</div>

<div class="shipping-info text-center py-2">
	<div class="container">
		<?php if ( get_theme_mod('jeweller_store_header_ship_truck') ) : ?>
	  		<span class="me-4"><i class="fas fa-truck me-2"></i><?php echo esc_html(get_theme_mod('jeweller_store_header_ship_truck'));?></span>
		<?php endif; ?>
		<?php if ( get_theme_mod('jeweller_store_header_return') ) : ?>
	  		<span class="me-4"><i class="fas fa-undo me-2"></i><?php echo esc_html(get_theme_mod('jeweller_store_header_return'));?></span>
		<?php endif; ?>
		<?php if ( get_theme_mod('jeweller_store_header_secure') ) : ?>
	  		<span class="me-4"><i class="fas fa-shield-alt me-2"></i><?php echo esc_html(get_theme_mod('jeweller_store_header_secure'));?></span>
		<?php endif; ?>
		<?php if ( get_theme_mod('jeweller_store_header_gift') ) : ?>
	  		<span><i class="fas fa-gift me-2"></i><?php echo esc_html(get_theme_mod('jeweller_store_header_gift'));?></span>
		<?php endif; ?>
	</div>
</div>