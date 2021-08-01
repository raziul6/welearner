<?php
/**
 * Include the TGM_Plugin_Activation class.
 */
require_once get_template_directory() . '/lib/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'welearner_register_required_plugins' );

function welearner_register_required_plugins() {

	$plugins = array(
		
		array(
			'name'               => esc_html__('welearn Plugin', 'welearner'),
			'slug'               => 'welearn-plugin',
			'source'             => get_stylesheet_directory() . '/lib/plugin/welearn-plugin.zip', 
			'required'           => true,
			'force_activation'   => false,
			'force_deactivation' => false,
		),
	);

	$config = array(
		'id'           => 'tgmpa',
		'default_path' => '',
		'menu'         => 'tgmpa-install-plugins',
		'parent_slug'  => 'themes.php',
		'capability'   => 'edit_theme_options',
		'has_notices'  => true,
		'dismissable'  => true,
		'dismiss_msg'  => '',
		'is_automatic' => false,
		'message'      => '',                     
	);
	tgmpa( $plugins, $config );
}