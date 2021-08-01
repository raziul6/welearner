<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package welearner
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

	<div class="welearner-main-wrapper">
		<header class="weleaner-header">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-4">
						<div class="logo">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" >
                                <?php
                                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                                    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                                    if ( has_custom_logo() ) { ?>
                                        <img src="<?php echo esc_url( $logo[0] ); ?>" alt="<?php echo esc_html__('logo', 'welearner') ;?>"><?php
                                    }
                                ?>
                            </a>
						</div>
					</div>
					<div class="col-8">
						<div class="header-right text-right">
							<?php if ( get_theme_mod( 'welen_header_button_url_1' ) || get_theme_mod( 'welen_header_button_url_2' ) ) :?>
							<div class="header-btn">
								<?php if ( get_theme_mod( 'welen_header_button_url_1' ) ) :?>
								<a class="weleaner-btn bg-less" href="<?php echo esc_url(get_theme_mod( 'welen_header_button_url_1', '#' ))?>"><?php echo esc_html(get_theme_mod( 'welen_header_button_1', __('Login', 'welearner')));?></a>
								<?php endif;?>
								<?php if ( get_theme_mod( 'welen_header_button_url_2' ) ) :?>
								<a class="weleaner-btn" href="<?php echo esc_url(get_theme_mod( 'welen_header_button_url_2', '#'))?>"><?php echo esc_html(get_theme_mod( 'welen_header_button_2', __('Get Stard', 'welearner')));?></a>
								<?php endif;?>
							</div>
							<?php endif;?>
						</div>
					</div>
				</div>
			</div>			
		</header>