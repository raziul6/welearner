<div class="hero-slider-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="hero-content-area d-flex align-items-center">
                    <div class="hero-inner-content">
                        <h1><?php echo esc_html(get_theme_mod('welen_slider_title', __("Discover a new Way", "welearner")));?> <br> <span> <?php echo esc_html(get_theme_mod('welen_slider_title_two'));?></span></h1>
                        <p><?php echo esc_html(get_theme_mod('welen_slider_text'));?></p>
                        <form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="welearner-search ">
                            <input type="search" name="s" value="<?php the_search_query();?>" id="search" placeholder="<?php  esc_html_e('What do you want to learn?', 'welearner');?> ">
                            <input type="hidden" name="post_type" value="courses" />
                            <input type="submit" value="Search">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-items">    
            <div class="hero-image">
                <?php 
                if ( get_theme_mod( 'welen_slider_img' ) ) { ?>
                    <img src="<?php echo esc_url(get_theme_mod( 'welen_slider_img' ))?>" alt="<?php esc_html_e("Authore", 'welearner');?>">
            <?php }else { ?>
                    <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/hero-img.png" alt="<?php esc_html_e("Authore", 'welearner');?>">
                <?php }
                ?>
            </div>        
            <div class="header--shape shape-title">
                <img src="<?php echo esc_url(get_template_directory_uri());?>/lib/assets/img/bar-shape.png" alt="<?php esc_html_e("Shape 3", 'welearner');?>">
            </div>
        </div>  
    </div>
    <div class="shape-items">        
        <div class="header--shape">
            <img src="<?php echo esc_url(get_template_directory_uri());?>/lib/assets/img/shape-header-1.png" alt="<?php esc_html_e("Shape 1", 'welearner');?>">
        </div>
        <div class="header--shape shape-sm">
            <img src="<?php echo esc_url(get_template_directory_uri());?>/lib/assets/img/shape-sm.png" alt="<?php esc_html_e("Shape 2", 'welearner');?>">
        </div>
        <div class="header--shape shape-dot">
            <img src="<?php echo esc_url(get_template_directory_uri());?>/lib/assets/img/dot-shape.png" alt="<?php esc_html_e("Shape 3", 'welearner');?>">
        </div>
        <div class="header--shape circle-top">
            <img src="<?php echo esc_url(get_template_directory_uri());?>/lib/assets/img/siccle-color.png" alt="<?php esc_html_e("Shape 4", 'welearner');?>">
        </div>
        <div class="header--shape circle-bottom">
            <img src="<?php echo esc_url(get_template_directory_uri());?>/lib/assets/img/circle-shape.png" alt="<?php esc_html_e("Shape 5", 'welearner');?>">
        </div>
        <div class="header--shape circle-right">
            <img src="<?php echo esc_url(get_template_directory_uri());?>/lib/assets/img/radious-shape.png" alt="<?php esc_html_e("Shape 6", 'welearner');?>">
        </div>
    </div>        
</div>