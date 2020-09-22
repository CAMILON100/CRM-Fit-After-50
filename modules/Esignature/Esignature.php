<?php
if (!defined('sugarEntry') || !sugarEntry) {
	die('Not A Valid Entry Point');
}

require_once 'modules/Esignature/Esignature_sugar.php';
class Esignature extends Esignature_sugar {

	function Esignature() {
		parent::Esignature_sugar();
	}

}