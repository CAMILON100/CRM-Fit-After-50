<?php

/**
 * @Author: Khwaish Nagdev
 * @Date:   2018-07-20 13:25:16
 * @Last Modified by:   Khwaish Nagdev
 * @Last Modified time: 2018-07-20 13:27:24
 */

$admin_option_defs = array();
$admin_option_defs['Administration']['esignature'] = array(
	'Password',
	'LBL_MANAGE_ESIGNATURE', 'LBL_ESIGNATURE',
	'./index.php?module=Esignature&action=esignature',
);
$admin_option_defs['Administration']['ViewLicenseEsignature'] = array('helpInline', 'LBL_ESIGNATURE_LICENSEADDON', 'LBL_ESIGNATURE_LICENSEADDON_DESCRIPTION', './index.php?module=Esignature&action=license_esignature');
$admin_group_header[] = array(
	'LBL_MANAGE_ESIGNATURE',
	'',
	false,
	$admin_option_defs,
	'',
);