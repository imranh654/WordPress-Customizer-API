<?php



function customizekorbo($customizekorbo){
	
	$customizekorbo->add_section('general_section', array(
		'title' => 'General Options',
		'priority' => 20
	));
	
	
	
	$customizekorbo->add_setting('logo_image', array(
		'default' => '',
		'transport' => 'refresh'
	));
	$customizekorbo->add_control(
		new WP_Customize_Image_Control($customizekorbo, 'logo_image', array(
			'label' => 'Logo Uplaoder',
			'section' => 'general_section',
			'settings' => 'logo_image'
		))
	);
	
	
	
	
	$customizekorbo->add_setting('copyright_text', array(
		'default' => 'samsu',
		'transport' => 'postMessage'
	));
	$customizekorbo->add_control('copyright_text', array(
		'section' => 'general_section',
		'label' => 'Copyright Text',
		'type' => 'text'
	));
	
	
	
	$customizekorbo->add_section('shob_colors', array(
		'title' => 'Colors Section',
		'priority' => 40
	));
	$customizekorbo->add_setting('copyright_color', array(
		'default' => '#000000',
		'transport' => 'postMessage'
	));
	$customizekorbo->add_control(
		new WP_Customize_Color_Control($customizekorbo, 'copyright_color', array(
			'section' => 'shob_colors',
			'label' => 'Copyright Text Color',
			'settings' => 'copyright_color'
		))
	);
	
	
	
	
	
	$customizekorbo->add_section('visibility_option', array(
		'title' => 'Visibility',
		'priority' => 41
	));
	
	
	
	$customizekorbo->add_setting('copyright_visibility', array(
		'default' => true,
		'transport' => 'postMessage'
	));
	$customizekorbo->add_control('copyright_visibility', array(
		'section' => 'visibility_option',
		'label' => 'Show copyright Text',
		'type' => 'checkbox'
	));
	
	$customizekorbo->add_setting('gf_select', array(
		'default' => 'Katrina',
		'transport' => 'postMessage'
	));
	$customizekorbo->add_control('gf_select', array(
		'section' => 'visibility_option',
		'label' => 'Select Your Girlfriend',
		'type' => 'select',
		'choices' => array(
			'Katrina' => 'Katrina',
			'Moyuri' => 'Moyuri',
			'Karina' => 'karina'
		)
	));
}
add_action('customize_register', 'customizekorbo');
