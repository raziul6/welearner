<?php
    /**
     * Section Trending Course
     * @package WordPress
     * @subpackage welearner
     */
?>
<div class="post-grid-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <div class="section-heading d-flex justify-content-between align-items-center">
                    <h1><?php echo esc_html( get_theme_mod( 'welen_post_heading' ) ); ?></h1>
            </div>
            </div>
        </div>
        <div class="row">
        <?php
            $args = array(
                'post_type'      => 'post',
                'posts_per_page' => get_theme_mod( 'welen_post_count', 3 ),
                'post_status'    => 'publish',
                'order'          => 'DESC',
            );

            $query = new WP_Query( $args );
            if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                    $query->the_post();

                ?>
            <div class="col-lg-4 col-md-6">
                <div class="post-grid-item">
                    <?php if ( has_post_thumbnail() ) :;?>
                    <div class="post-img">
                        <a href="<?php the_permalink();?>">
                            <img src="<?php echo esc_url( get_the_post_thumbnail_url() ); ?>" alt="<?php the_title_attribute();?>">
                        </a>
                    </div>
                    <?php endif;?>
                    <div class="post-gr-infot">
                        <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                        <a class="readmore" href="<?php the_permalink()?>"><?php echo esc_html( get_theme_mod( 'welen_post_readmore_text' ) ); ?></a>
                    </div>
                </div>
            </div>
            <?php }
                wp_reset_postdata();}?>
        </div>
    </div>
</div>

