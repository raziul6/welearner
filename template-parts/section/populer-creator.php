<?php
    /**
     * Section Team Member
     * @package WordPress
     * @subpackage welearner
     */
?>
<div class="team-member-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <div class="section-heading text-center">
                <h1><?php echo esc_html( get_theme_mod( 'welen_team_heading' ) ); ?></h1>
                    <?php echo esc_html(get_theme_mod( 'welen_team_text' ));?>
            </div>
            </div>
        </div>
        <div class="row team-carousel owl-carousel">
        <?php
            $args = array(
                'post_type'      => 'team',
                'posts_per_page' => get_theme_mod( 'welen_post_count', 3 ),
                'post_status'    => 'publish',
                'order'          => 'ASC',
            );

            $query = new WP_Query( $args );
            if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                    $query->the_post();
                    $designation = get_post_meta( $post->ID, 'weln_designation_meta', true );
                    $facebook    = get_post_meta( $post->ID, 'weln_fb_meta', true );
                    $twitter     = get_post_meta( $post->ID, 'weln_tw_meta', true );
                    $linkedin    = get_post_meta( $post->ID, 'weln_link_meta', true );
                    $instagram   = get_post_meta( $post->ID, 'weln_insta_meta', true );
                    $youtube     = get_post_meta( $post->ID, 'weln_yt_meta', true );

                ?>
                <div class="col-lg-12">
                    <div class="team-item">
                        <div class="team-img">                    
                            <?php if ( has_post_thumbnail() ) : ?>
                            <img src="<?php echo esc_url( get_the_post_thumbnail_url() ); ?>" alt="<?php the_title_attribute();?>">
                            <?php endif;?>
                            <div class="team-social-link">

                                <?php if ( isset($facebook) && $facebook ) :?>
                                <a href="<?php echo esc_url($facebook);?>"><i data-feather="facebook"></i></a>
                                <?php endif;?>

                                <?php if ( isset($twitter) && $twitter ) :?>
                                <a href="<?php echo esc_url($twitter);?>"><i data-feather="twitter"></i></a>
                                <?php endif;?>

                                <?php if ( isset($linkedin) && $linkedin ) :?>
                                <a href="<?php echo esc_url($linkedin);?>"><i data-feather="linkedin"></i></a>
                                <?php endif;?>

                                <?php if ( isset($instagram) && $instagram ) :?>
                                <a href="<?php echo esc_url($instagram);?>"><i data-feather="instagram"></i></a>
                                <?php endif;?>

                                <?php if ( isset($youtube) && $youtube ) :?>
                                <a href="<?php echo esc_url($youtube);?>"><i data-feather="youtube"></i></a>
                                <?php endif;?>
                            </div>
                        </div>
                        <div class="team-info">
                            <h4><?php the_title();?></h4>
                            <span><?php echo esc_html( $designation ); ?></span>
                        </div>
                    </div>
                </div>
            <?php }
                wp_reset_postdata();}?>
        </div>
    </div>
</div>