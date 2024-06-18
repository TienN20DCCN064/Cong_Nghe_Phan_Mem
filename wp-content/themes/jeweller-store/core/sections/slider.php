<?php if ( get_theme_mod('jeweller_store_blog_box_enable') ) : ?>

<?php $jeweller_store_args = array(
  'post_type' => 'post',
  'post_status' => 'publish',
  'category_name' =>  get_theme_mod('jeweller_store_blog_slide_category'),
  'posts_per_page' => get_theme_mod('jeweller_store_blog_slide_number'),
); ?>

<div class="slider">
  <div class="owl-carousel">
    <?php $jeweller_store_arr_posts = new WP_Query( $jeweller_store_args );
    if ( $jeweller_store_arr_posts->have_posts() ) :
      while ( $jeweller_store_arr_posts->have_posts() ) :
        $jeweller_store_arr_posts->the_post();
        ?>
        <div class="blog_inner_box">
          <?php
            if ( has_post_thumbnail() ) :
              the_post_thumbnail();
            else:
              ?>
              <div class="slider-alternate">
                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/banner.png'; ?>">
              </div>
              <?php
            endif;
          ?>
          <div class="blog_box pt-3 pt-md-0">
            <?php if ( get_theme_mod('jeweller_store_slider_text_extra') ) : ?>
              <h5><?php echo esc_html(get_theme_mod('jeweller_store_slider_text_extra'));?></h5>
            <?php endif; ?>
            <?php if ( get_theme_mod('jeweller_store_title_unable_disable', true) ) : ?>
              <h3 class="my-3"><?php the_title(); ?></a></h3>
            <?php endif; ?>
              <?php if ( get_theme_mod('jeweller_store_text_unable_disable', true) ) : ?>
              <p class="slider-text"><?php echo wp_trim_words( get_the_content(), get_theme_mod('jeweller_store_post_excerpt_number',22) ); ?></p>
            <?php endif; ?>
              <?php if ( get_theme_mod('jeweller_store_button_unable_disable', true) ) : ?>
              <p class="slider-button mt-4">
                <a href="<?php echo esc_url(get_permalink($post->ID)); ?>"><?php esc_html_e('Shop Now','jeweller-store'); ?></a>
              </p>
            <?php endif; ?>
          </div>          
        </div>
      <?php
    endwhile;
    wp_reset_postdata();
    endif; ?>
  </div>
  <?php if ( get_theme_mod('jeweller_store_featured_product_section_enable',false) ) :
    if ( class_exists( 'WooCommerce' ) ) { ?>
    <div id="featured-product">
      <div class="owl-carousel">
        <?php
        $jeweller_store_catData = get_theme_mod('jeweller_store_featured_product_category','');          
          $jeweller_store_args = array(
            'post_type' => 'product',
            'posts_per_page' => 100,
            'product_cat' => $jeweller_store_catData,
            'order' => 'ASC'
          );
          $loop = new WP_Query( $jeweller_store_args );
          while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
            <div class="slider-inner-product">
              <figure class="mb-0">
                <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.esc_url(wc_placeholder_img_src()).'" />'; ?>
                <?php if ( has_post_thumbnail() ) { ?>
                    <?php woocommerce_show_product_sale_flash( $post, $product ); ?>
                <?php }?>
              </figure>
              <div class="product-details">
                <h5 class="product-text my-2 "><a href="<?php echo esc_url(get_permalink( $loop->post->ID )); ?>"><?php the_title(); ?></a></h5>
                <p class="<?php echo esc_attr( apply_filters( 'woocommerce_product_price_class', 'price' ) ); ?> mb-0"><?php echo $product->get_price_html(); ?></p>
              </div>
            </div>
          <?php endwhile; wp_reset_postdata(); ?>          
      </div>
    </div>
    <?php } ?>
  <?php endif; ?>
</div>

<?php endif; ?>