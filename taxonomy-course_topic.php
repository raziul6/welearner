<?php
    /**
     * Section Display Category Page
     * @package WordPress
     * @subpackage welearner
     */
    get_header();
?>
<div class="trending-couse-area individual-topic">
    <div class="container">
        <div class="row">
        <?php
            if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post();
                    $idd = get_the_ID();
                    $regprice       = get_post_meta( $post->ID, 'weln_rgprice', true );
                    $slprice        = get_post_meta( $post->ID, 'weln_sleprice', true );
                    $wecourserating = get_post_meta( $post->ID, 'courserating_meta', true );
                    $topics = get_the_terms( $post->ID, 'course_topic' );
                        
                ?>
            <div class="col-lg-4 col-md-6">
                <div class="course-item">
                    <div class="course-img">
                        <a href="<?php the_permalink();?>">
                            <img src="<?php echo esc_url( get_the_post_thumbnail_url() ); ?>" alt="<?php the_title_attribute();?>">
                        </a>
                    </div>
                    <div class="course-meta d-flex justify-content-between align-items-center">
                        <?php 
                            if ( $topics && ! is_wp_error( $topics ) ) :
                                
                                
                                $taxonomies = array();
                                foreach ( $topics as $topic ) {
                                    $color = get_term_meta( $topic->term_id, 'txm_extra_info', true );
                                    $taxonomies[] = $topic->name;
                                }    
                                $taxonomies = implode(", ", $taxonomies );    
                            endif;
                        ?>
                        <span style="background:<?php echo esc_attr($color)?>"><?php echo esc_html( $taxonomies ); ?></span>
                        <div class="rating">
                        <?php if ( 'one' === $wecourserating ) :?>
                            <i class="rated" data-feather="star"></i>
                            <i data-feather="star"></i>
                            <i data-feather="star"></i>
                            <i data-feather="star"></i>
                            <i data-feather="star"></i>
                        <?php elseif ( 'two' === $wecourserating ) :?>
                            <i class="rated" data-feather="star"></i>
                            <i class="rated" data-feather="star"></i>
                            <i data-feather="star"></i>
                            <i data-feather="star"></i>
                            <i data-feather="star"></i>
                        <?php elseif ( 'three' === $wecourserating ) :?>
                            <i class="rated" data-feather="star"></i>
                            <i class="rated" data-feather="star"></i>
                            <i class="rated" data-feather="star"></i>
                            <i data-feather="star"></i>
                            <i data-feather="star"></i>
                        <?php elseif ( 'four' === $wecourserating ) :?>
                            <i class="rated" data-feather="star"></i>
                            <i class="rated" data-feather="star"></i>
                            <i class="rated" data-feather="star"></i>
                            <i class="rated" data-feather="star"></i>
                            <i data-feather="star"></i>
                        <?php else : ?>
                            <i class="rated" data-feather="star"></i>
                            <i class="rated" data-feather="star"></i>
                            <i class="rated" data-feather="star"></i>
                            <i class="rated" data-feather="star"></i>
                            <i class="rated" data-feather="star"></i>
                        <?php endif;?>
                        </div>
                    </div>
                    <div class="course-infot">
                        <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                        <a class="author-name" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
                            <?php welearner_post_author_avatars( 27 );?>
<?php the_author()?>
                        </a>
                    </div>
                    <div class="course-footer d-flex justify-content-between align-items-center">
                        <div class="price">
                            <del><?php echo esc_attr( $regprice ); ?></del>
                            <span>                                   <?php echo esc_attr( $slprice ); ?></span>
                        </div>
                        <div class="preview-btn">
                            <a href="#" class="weleaner-btn primery-btn"><?php esc_html_e( 'Watch Preview', 'welearner' )?></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
                    }
                }
                ?>
        </div>
    </div>
</div>
<?php
get_footer();

