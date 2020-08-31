<?php

if (!defined('sugarEntry') || !sugarEntry) {
	die('Not A Valid Entry Point');
}
require_once('modules/Esignature/license/EsignatureLicense.php');
class EsignatureController extends SugarController {
	public function action_esignature() {
		$validate = EsignatureLicense::isValid();
		if($validate !== true)
		{
			header('Location: index.php?module=Esignature&action=license_esignature');
		}
		$this->view = 'esignature';

		///////////////////////////////////////////////////////////////////////////////
		//// HANDLE CHANGES AFTER SUBMIT
		if (isset($_REQUEST['process']) && $_REQUEST['process'] == 'true') {
			require_once 'modules/Administration/Administration.php';

			$admin = new Administration();
			$admin->retrieveSettings();
			if (!array_key_exists('esignature_enable', $_REQUEST)) {
				$esignature_enable = 0;
			} else {
				$esignature_enable = 1;
			}
			EsignatureLicense::isValid();
			if (!empty($esignature_enable)) {
				$admin->saveSetting("esignature", "esignature_enable", 1);
			} else {
				$admin->saveSetting("esignature", "esignature_enable", '');
			}

			if (!empty($_REQUEST["esignature_modules"])) {
				$enabledModules = implode(",", $_REQUEST["esignature_modules"]);
				$admin->saveSetting("esignature", "esignature_modules", $enabledModules);
			} else {
				$admin->saveSetting("esignature", "esignature_modules", '');
			}
			
			if (!empty($_REQUEST["esignature_features"])) {
				$enabledFeatures = implode(",", $_REQUEST["esignature_features"]);
				$admin->saveSetting("esignature", "esignature_features", $enabledFeatures);
			} else {
				$admin->saveSetting("esignature", "esignature_features", '');
			}

			if (!in_array('esignature', $admin->config_categories)) {
				$admin->config_categories[] = "esignature";
			}

			header('Location: index.php?module=Administration&action=index');
		}
	}
	public function action_license_esignature() {
		$this->view = 'license_esignature';
	}
}
