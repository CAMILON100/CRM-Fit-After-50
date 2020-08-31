<?php

/**
 * @Author: Khwaish Nagdev
 * @Date:   2018-07-20 13:34:27
 * @Last Modified by:   Khwaish Nagdev
 * @Last Modified time: 2018-07-20 13:35:11
 */

$outfitters_config = array(
	'name' => 'EsignaturePlugin', //The matches the id value in your manifest file. This allow the library to lookup addon version from upgrade_history, so you can see what version of addon your customers are using
	'shortname' => 'EsignaturePlugin',
	'public_key' => '9a9ed8438d112d90c79b57025b1f10cc',
    'api_url' => 'https://store.suitecrm.com/api/v1',
  	'validate_users' => false,
    'manage_licensed_users' => false,
 	'validation_frequency' => 'weekly',
 	'continue_url' => '',
);
