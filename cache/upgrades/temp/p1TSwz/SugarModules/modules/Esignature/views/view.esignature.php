<?php
if (!defined('sugarEntry') || !sugarEntry) {
	die('Not A Valid Entry Point');
}

global $current_user, $sugar_config;
if (!is_admin($current_user)) {
	sugar_die("Unauthorized access to administration.");
}

require_once 'include/MVC/View/SugarView.php';

class Viewesignature extends SugarView {

	public function __construct() {
		parent::SugarView();
	}

	public function preDisplay() {
		$this->dv->tpl = 'modules/Esignature/tpl/esignature.tpl';
	}

	public function display() {
		global $sugar_config, $mod_strings, $app_strings;
		require_once 'modules/Administration/Administration.php';
		$smarty = new Sugar_Smarty();
		$smarty->assign('MOD', $mod_strings);
		$smarty->assign('APP', $app_strings);

		$admin = new Administration();
		$admin->retrieveSettings();

		/*if (array_key_exists('google_login_google_login_enable', $admin->settings)) {
			$smarty->assign('GOOGLE_LOGIN_ENABLE', $admin->settings['google_login_enable']);
		}*/

		if (!empty($admin->settings['esignature_esignature_enable'])) {
			$smarty->assign('ESIGNATUR_ENABLED', 'checked');
		} else {
			$smarty->assign('ESIGNATUR_ENABLED', '');
		}
		$smarty->assign('QUOTES_CHECKED', '');
		$smarty->assign('INVOICE_CHECKED', '');
		$smarty->assign('CONTRACT_CHECKED', '');
		
		$smarty->assign('CUSTOMER', '');
		$smarty->assign('CLIENT', '');
		
		if (array_key_exists('esignature_esignature_modules', $admin->settings)) {
			$enabledModules = $admin->settings['esignature_esignature_modules'];
			$modules = explode(",", $enabledModules);

			foreach ($modules as $key => $value) {
				switch ($value) {
				case 'AOS_Quotes':
					$smarty->assign('QUOTES_CHECKED', 'checked');
					break;
				case 'AOS_Invoices':
					$smarty->assign('INVOICE_CHECKED', 'checked');
					break;
				case 'AOS_Contracts':
					$smarty->assign('CONTRACT_CHECKED', 'checked');
					break;
				default:
					# code...
					break;
				}
			}
		}
		if (array_key_exists('esignature_esignature_features', $admin->settings)) {
			$enabledFeatures = $admin->settings['esignature_esignature_features'];
			$features = explode(",", $enabledFeatures);

			foreach ($features as $key => $value) {
				switch ($value) {
				case 'Customer':
					$smarty->assign('CUSTOMER', 'checked');
					break;
				case 'Client':
					$smarty->assign('CLIENT', 'checked');
					break;
				default:
					# code...
					break;
				}
			}
		}
		$smarty->display($this->dv->tpl);
	}
}