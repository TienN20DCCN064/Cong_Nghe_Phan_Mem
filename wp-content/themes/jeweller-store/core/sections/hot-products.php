<?php if ( get_theme_mod('jeweller_store_products_section_enable', true) == true ) : ?>
<div id="hot_products" class="py-5 text-center">
	<div class="container">
    <?php if ( get_theme_mod('jeweller_store_products_main_heading') ) : ?>
		  <h3><?php echo esc_html(get_theme_mod('jeweller_store_products_main_heading'));?></h3>
    <?php endif; ?>
    <div class="tab">
      <div class="tab-section">
        <ul class="my-3">
          <?php 
            $jeweller_store_post = get_theme_mod('jeweller_store_products_tab_number', '');
            for ( $jeweller_store_i = 1; $jeweller_store_i <= $jeweller_store_post; $jeweller_store_i++ ){ ?>
            <li class="product-tab align-self-center">
              <button class="tablinks" onclick="jeweller_store_openCity(event, '<?php $jeweller_store_main_id = get_theme_mod('jeweller_store_products_tabs_text'.$jeweller_store_i); $jeweller_store_tab_id = str_replace(' ', '-', $jeweller_store_main_id); echo $jeweller_store_tab_id; ?> ')">
                <?php echo esc_html(get_theme_mod('jeweller_store_products_tabs_text'.$jeweller_store_i)); ?>
              </button>
            </li>
          <?php }?>
        </ul>
      </div>
    </div>

    <?php for ( $jeweller_store_i = 1; $jeweller_store_i <= $jeweller_store_post; $jeweller_store_i++ ){ ?>
      <div id="<?php $jeweller_store_main_id = get_theme_mod('jeweller_store_products_tabs_text'.$jeweller_store_i); $jeweller_store_tab_id = str_replace(' ', '-', $jeweller_store_main_id); echo $jeweller_store_tab_id; ?>" class="tabcontent mt-3">

        <div class="owl-carousel">
          <?php
          $jeweller_store_product_data = get_theme_mod('jeweller_store_products_category'.$jeweller_store_i);
          if ( class_exists( 'WooCommerce' ) ) {
            $jeweller_store_args = array(
              'post_type' => 'product',
              'posts_per_page' => get_theme_mod('jeweller_store_products_per_page'),
              'product_cat' => $jeweller_store_product_data,
              'order' => 'ASC'
            );
            $loop = new WP_Query( $jeweller_store_args );
            while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
          	  <div class="tab-product">
                <div class="product-image mb-3">
                  <figure>
                    <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.esc_url(wc_placeholder_img_src()).'" />'; ?>
                  </figure>
                  <div class="cart-button">
                    <span class="icon" href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>"><span class="button1"><?php if( $product->is_type( 'simple' ) ) { woocommerce_template_loop_add_to_cart(  $loop->post, $product );} ?></span></span>
                  </div>
                </div>
                <div class="product-details">
                  <?php if( $product->is_type( 'simple' ) ){ woocommerce_template_loop_rating( $loop->post, $product ); } ?>
            	    <strong class="product-text"><a href="<?php echo esc_url(get_permalink( $loop->post->ID )); ?>"><?php the_title(); ?></a></strong>
                  <p class="<?php echo esc_attr( apply_filters( 'woocommerce_product_price_class', 'price' ) ); ?>"><?php echo $product->get_price_html(); ?></p>
                </div>
              </div>
            <?php endwhile; wp_reset_postdata(); ?>
          <?php } ?>
    	  </div>
      </div>
    <?php }?>
	</div>
</div>
<?php endif; ?>