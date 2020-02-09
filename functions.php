<?php
//Put this code to functions.php

function customizekorbo($customizekorbo){
	
	$customizekorbo->add_section('general_section', array(
		'title' => 'General Options',
		'priority' => 20
	));
	
	$customizekorbo->add_setting('copyright_text', array(
		'default' => 'samsu',
		'transport' => 'postMessage'
	));
	$customizekorbo->add_control('copyright_text', array(
		'section' => 'general_section',
		'label' => 'Copyright Text',
		'type' => 'text'
	));
}
add_action('customize_register', 'customizekorbo'); ?>

<?php

//Put this code to front end to eco the data

 echo get_theme_mod('copyright_text'); ?>
