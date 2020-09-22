<?php

/**
 * @Author: Khwaish Nagdev
 * @Date:   2018-05-18 16:44:36
 * @Last Modified by:   Khwaish Nagdev
 * @Last Modified time: 2018-05-21 16:51:22
 */
class setSignature {
	public function setSignature() {
	}
	public function initialLoad() {
		$loadLibs = <<<EOD
		<link rel="stylesheet" href="custom/brainvire/css/signature-pad.css">
EOD;
		echo $loadLibs;
	}
	public function addSignaturePad() {
		$loadSignaturePad = <<<EOD
		<div id="signature-pad" class="signature-pad">
	    <div class="signature-pad--body">
	      <canvas></canvas>
	    </div>
	    <div class="signature-pad--footer">
	      <div class="description">Sign above</div>
	      <div class="signature-pad--actions">
	        <div>
	          <button type="button" class="button clear" data-action="clear">Clear</button>
	          <!--<button type="button" class="button" data-action="change-color">Change color</button>-->
	          <button type="button" class="button" data-action="undo">Undo</button>
	        </div>
	        <div>
	          <button type="button" class="button save" data-action="save-png">Save Signature</button>
	          <!--<button type="button" class="button save" data-action="save-jpg">Save as JPG</button>
	          <button type="button" class="button save" data-action="save-svg">Save as SVG</button>-->
	        </div>
	      </div>
	    </div>
	  </div>
	  	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	 	<script src="custom/brainvire/js/signature_pad.umd.js"></script>
  		<script src="custom/brainvire/js/app.js"></script>

EOD;
		echo $loadSignaturePad;
	}
	public function saveDataTodb($userId, $filename) {
		global $db, $sugar_config;
		$filename = $sugar_config['site_url'] . "/" . "$filename";
		/*$sql = "UPDATE users SET user_signature='" . $filename . "' WHERE deleted=0 AND id='" . $userId . "'";
			$GLOBALS['log']->fatal($sql);
		*/
		/*if ($result) {*/
		echo json_encode(array('success' => 'true', 'file' => $filename));
		/*} else {
			echo json_encode(array('success' => 'false'));
		}*/
	}

}
$oSignature = new setSignature();
if (isset($_POST['action']) && $_POST['action'] == 'saveDbData') {
	$oSignature->saveDataTodb($_POST['userId'], $_POST['file_name']);
} else {
	$oSignature->initialLoad();
	$oSignature->addSignaturePad();
}
