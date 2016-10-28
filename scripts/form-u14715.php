<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2015.2.1.352
*/

require_once('form_process.php');

$form = array(
	'subject' => 'test drive Form Submission',
	'heading' => 'New Form Submission',
	'success_redirect' => '',
	'resources' => array(
		'checkbox_checked' => 'Checked',
		'checkbox_unchecked' => 'Unchecked',
		'submitted_from' => 'Form submitted from website: %s',
		'submitted_by' => 'Visitor IP address: %s',
		'too_many_submissions' => 'Too many recent submissions from this IP',
		'failed_to_send_email' => 'Failed to send email',
		'invalid_reCAPTCHA_private_key' => 'Invalid reCAPTCHA private key.',
		'invalid_field_type' => 'Unknown field type \'%s\'.',
		'invalid_form_config' => 'Field \'%s\' has an invalid configuration.',
		'unknown_method' => 'Unknown server request method'
	),
	'email' => array(
		'from' => 'cbrown@ireportsource.com',
		'to' => 'cbrown@ireportsource.com'
	),
	'fields' => array(
		'custom_U14774' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'Name',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Name\' is required.'
			)
		),
		'Email' => array(
			'order' => 2,
			'type' => 'email',
			'label' => 'Email',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Email\' is required.',
				'format' => 'Field \'Email\' has an invalid email.'
			)
		),
		'custom_U14758' => array(
			'order' => 9,
			'type' => 'string',
			'label' => 'How can we help you?',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U14770' => array(
			'order' => 3,
			'type' => 'string',
			'label' => 'Company',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Company\' is required.'
			)
		),
		'custom_U14735' => array(
			'order' => 4,
			'type' => 'string',
			'label' => 'Work Phone',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Work Phone\' is required.'
			)
		),
		'custom_U14731' => array(
			'order' => 5,
			'type' => 'string',
			'label' => 'Company Website',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Company Website\' is required.'
			)
		),
		'custom_U14739' => array(
			'order' => 10,
			'type' => 'string',
			'label' => 'Anything we forgot?',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U14778' => array(
			'order' => 8,
			'type' => 'radiogroup',
			'label' => 'Number of Supervisors',
			'required' => true,
			'optionItems' => array(
				'1-5',
				'5-10',
				'10+'
			),
			'errors' => array(
				'required' => 'Field \'Number of Supervisors\' is required.',
				'format' => 'Field \'Number of Supervisors\' has an invalid value.'
			)
		),
		'custom_U14743' => array(
			'order' => 6,
			'type' => 'radiogroup',
			'label' => 'Company Size',
			'required' => true,
			'optionItems' => array(
				'Small (#-#)',
				'Medium (#-#)',
				'Large (#-#)',
				'Extra Large (#-#)'
			),
			'errors' => array(
				'required' => 'Field \'Company Size\' is required.',
				'format' => 'Field \'Company Size\' has an invalid value.'
			)
		),
		'custom_U14716' => array(
			'order' => 7,
			'type' => 'radiogroup',
			'label' => 'Number of Locations',
			'required' => true,
			'optionItems' => array(
				'1',
				'2-5',
				'5-10',
				'10+'
			),
			'errors' => array(
				'required' => 'Field \'Number of Locations\' is required.',
				'format' => 'Field \'Number of Locations\' has an invalid value.'
			)
		)
	)
);

process_form($form);
?>
