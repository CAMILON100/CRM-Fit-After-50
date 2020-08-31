<?php 
 //WARNING: The contents of this file are auto-generated

 
$admin_option_defs = array();
$admin_option_defs['GoogleSignInAdmin'] = array(
	'Google Sign-In Configuration', 'LBL_GOOGLE_SIGN_IN_ADMIN', 'LBL_GOOGLE_SIGN_IN_ADMIN_DESCRIPTION', './index.php?module=Administration&action=GoogleSignInAdmin'
	);

// Loop through the menus and add to the Users group
$tmp_menu_set = false;
foreach ($admin_group_header as $key => $values)
{
	if ($values[0] == 'LBL_STUDIO_TITLE')
	{
		if ($sugar_config['sugar_version'] < 5.2)
			$admin_group_header[$key][3]['GoogleSignInAdmin'] = $admin_option_defs['GoogleSignInAdmin'];
		else
			$admin_group_header[$key][3]['Administration']['GoogleSignInAdmin'] = $admin_option_defs['GoogleSignInAdmin'];
		$tmp_menu_set = true;
	}
}

// Else create new group
if (!$tmp_menu_set)
	if ($sugar_config['sugar_version'] < 5.2)
		$admin_group_header[] = array('GOOGLE_SIGN_IN_ADMIN_TITLE','',false,$admin_option_defs,'GOOGLE_SIGN_IN_ADMIN_DESC');
	else
		$admin_group_header[] = array('GOOGLE_SIGN_IN_ADMIN_TITLE','',false,array('Administration' => $admin_option_defs),'GOOGLE_SIGN_IN_ADMIN_DESC');




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
?>