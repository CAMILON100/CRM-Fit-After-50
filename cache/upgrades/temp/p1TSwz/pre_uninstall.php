<?php

global $db;

$arrDel = array('esignature_modules_key', 'esignature_enable', 'esignature_modules');

foreach ($arrDel as $key => $value) {
	$sql = "DELETE FROM config WHERE name='" . $value . "'";
	$result = $db->query($sql);
	if (!$result) {
		$GLOBALS['log']->fatal('Not removed : ' . $value);
	}
}