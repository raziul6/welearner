<?php
    /**
     * Section Trending Topic
     * @package WordPress
     * @subpackage welearner
     */
?>
<div class="trending-topic-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <div class="section-heading d-flex justify-content-between align-items-center">
                <h1><?php echo esc_html(get_theme_mod('welen_populer_topic_heading', __("Trending Topic", "welearner")));?></h1>
                <a href="<?php echo esc_url(get_theme_mod('welen_populer_btn_url',));?>"><?php echo esc_html(get_theme_mod('welen_populer_btn_text', __("Show All", "welearner")));?> </a>
            </div>
            </div>
        </div>
        <div class="row">
            <?php 
                $course_categories = "course_topic";
                $course_cate_lists = get_terms( $course_categories, [
                    'orderby'    => 'slug', 
	                'hide_empty' => false,
                ] );
            ?>
            <?php if ( ! empty($course_cate_lists) && ! is_wp_error( $course_cate_lists ) ) :
                foreach ( $course_cate_lists as $list ) :
            ?>
            <div class="col-lg-3 col-md-4">
                <div class="course-cate-imte <?php echo esc_attr( $list->slug )?>">
                    <h4><a href="<?php echo esc_url( get_term_link( $list->term_id ) )?>"><?php echo esc_html( $list->name )?></a></h4>
                </div>
            </div>
            <?php endforeach; endif;?>
        </div>
    </div>
</div>

