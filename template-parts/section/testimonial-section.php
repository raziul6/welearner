<?php
    /**
     * Section Testimonial
     * @package WordPress
     * @subpackage welearner
     */
?>
<div class="testimonial-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading testimonial-heading d-flex justify-content-between align-items-center">
                    <h1><?php echo esc_html( get_theme_mod( 'welen_testimonial_title', __( "What our students have to say", "welearner" ) ) ); ?></h1>                   
                    <h5><?php echo esc_html( get_theme_mod( 'welen_testimonial_text' ) );?>
                    <img src="<?php echo esc_url(get_template_directory_uri());?>/lib/assets/img/quate.png" alt="<?php esc_html_e("Quate", 'welearner');?>">
                    </h5>
                </div>
            </div>
        </div>
        <div class="row testimonial-wrapper owl-carousel">
        <?php
            $args = array(
                'post_type'      => 'testimonial',
                'posts_per_page' => 3,
                'post_status'    => 'publish',
                'order'          => 'DESC',
            );

            $query = new WP_Query( $args );
            if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                    $query->the_post();
                    $testimoni_info       = get_post_meta( $post->ID, 'weln_testimonial_opt', true );

                ?>
                <div class="col-lg-12">
                <div class="testimonial-item">
                    <?php if ( has_post_thumbnail() ) :;?>
                    <div class="testimonial-head">
                        <img src="<?php echo esc_url( get_the_post_thumbnail_url() ); ?>" alt="<?php the_title_attribute();?>">
                        <h4><?php the_title();?></h4>
                        <span><?php echo esc_html($testimoni_info);?></span>
                    </div>
                    <?php endif;?>
                    <div class="testimonial-info">
                        <?php the_content();?>
                    </div>
                </div>
                </div>
            <?php }
                wp_reset_postdata();}?>
        </div>
    </div>
</div>

