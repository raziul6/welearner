<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package welearner
 */

?>

<footer class="welrn-footer-area">
    <div class="container">
        <div class="row">
            <?php if ( is_active_sidebar( 'footer-1' ) ) :?>
            <div class="col-md-4">
                <?php dynamic_sidebar( 'footer-1' )?>
                <div class="social-link">
                    <?php if ( get_theme_mod( 'welen_fb_icon_heading' ) ) :?>
                    <a href="<?php echo esc_url(get_theme_mod( 'welen_fb_icon_heading' ));?>"><i data-feather="facebook"></i></a>
                    <?php endif;?>

                    <?php if ( get_theme_mod( 'welen_twi_icon_heading' ) ) :?>
                    <a href="<?php echo esc_url(get_theme_mod( 'welen_twi_icon_heading' ));?>"><i data-feather="twitter"></i></a>
                    <?php endif;?>  

                    <?php if ( get_theme_mod( 'welen_link_icon_heading' ) ) :?>                   
                    <a href="<?php echo esc_url(get_theme_mod( 'welen_link_icon_heading' ));?>"><i data-feather="linkedin"></i></a>   
                    <?php endif;?>

                    <?php if ( get_theme_mod( 'welen_inst_icon_heading' ) ) :?>
                    <a href="<?php echo esc_url(get_theme_mod( 'welen_inst_icon_heading' ));?>"><i data-feather="instagram"></i></a>
                    <?php endif;?>

                    <?php if ( get_theme_mod( 'welen_drib_icon_heading' ) ) :?>
                    <a href="<?php echo esc_url(get_theme_mod( 'welen_drib_icon_heading' ));?>"><i data-feather="dribbble"></i></a>
                    <?php endif;?>
                </div>
            </div>
            <?php endif;?>
            <div class="col-md-8">
                <div class="row">
                    <?php if ( is_active_sidebar( 'footer-2' ) ) :?>
                    <div class="col-lg-3 col-md-6">
                        <?php dynamic_sidebar( 'footer-2' )?>
                    </div>
                    <?php endif;?>

                    <?php if ( is_active_sidebar( 'footer-3' ) ) :?>
                    <div class="col-lg-3 col-md-6">
                        <?php dynamic_sidebar( 'footer-3' )?>
                    </div>
                    <?php endif;?>

                    <?php if ( is_active_sidebar( 'footer-4' ) ) :?>
                    <div class="col-lg-3 col-md-6">
                        <?php dynamic_sidebar( 'footer-4' )?>
                    </div>
                    <?php endif;?>

                    <?php if ( is_active_sidebar( 'footer-5' ) ) :?>
                    <div class="col-lg-3 col-md-6">
                        <?php dynamic_sidebar( 'footer-5' )?>
                    </div>
                    <?php endif;?>
                </div> 
            </div>
        </div>
    </div>
    <div class="footer-shape">
        <div class="f-shape line">
        <img src="<?php echo esc_url(get_template_directory_uri());?>/lib/assets/img/footer/Line.png" alt="<?php esc_html_e("Line", 'welearner');?>">
        </div>
        <div class="f-shape dot">
        <img src="<?php echo esc_url(get_template_directory_uri());?>/lib/assets/img/footer/Dots.png" alt="<?php esc_html_e("Dots", 'welearner');?>">
        </div>
        <div class="f-shape Elements">
        <img src="<?php echo esc_url(get_template_directory_uri());?>/lib/assets/img/footer/Elements.png" alt="<?php esc_html_e("Elements", 'welearner');?>">
        </div>
        <div class="f-shape Polygon">
        <img src="<?php echo esc_url(get_template_directory_uri());?>/lib/assets/img/footer/Polygon.png" alt="<?php esc_html_e("Polygon", 'welearner');?>">
        </div>
    </div>
</footer>
</div><!-- #welearner-main-wrapper -->

<?php wp_footer(); ?>

</body>
</html>
