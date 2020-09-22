<?php

if (!defined('sugarEntry') || !sugarEntry) {
	die('Not A Valid Entry Point');
}

require_once 'modules/Users/views/view.edit.php';

class customUsersViewEdit extends UsersViewEdit {

	function __construct() {
		parent::__construct();
	}

	function display() {
		$user_id = $this->bean->id;
		if (!empty($this->bean->user_signature)) {
			$file = $this->bean->user_signature;
			//<span class="bvsuccess" style="padding: 0.4em;background-color: #60D660;color: #fff;font-weight: bold;border-radius: 5px;width: fit-content;margin-left:10px">Signature already added!</span>
			$addSign = <<<EOQ
            <script>
            var fileName = '{$file}';
            $(document).ready(function(){
                $("#signaturePreview").html('<a style="text-decoration:none;margin-left:10px" href="'+fileName+'" download="signature.png"><img src="custom/themes/bv_download.png" height="27px"></a>');
            });
            </script>
EOQ;
			echo $addSign;
		}
		$javascript = <<<EOQ
				<style>
				#bvbutton{
					display: inline-block;
					padding: 6px 6px;
					margin-bottom: 0;
					font-size: 14px;
					font-weight: 400;
					line-height: 1.42857143;
					text-align: center;
					white-space: nowrap;
					vertical-align: middle;
					-ms-touch-action: manipulation;
					touch-action: manipulation;
					cursor: pointer;
					-webkit-user-select: none;
					-moz-user-select: none;
					-ms-user-select: none;
					user-select: none;
					background-image: none;
					border: 1px solid #DDDDDD;
					border-radius: 4px;
				}
				#bvbutton:hover {
				    background-color: #e7e7e7;
				    color: #333333;
				    border-color: #DDDDDD;
				}
				</style>
                <script language='javascript'>
                var dataURL = '';

                if($('#UserType').val() == "Administrator"){
                         removeFromValidate('EditView', 'reports_to_name');
                         $("[data-label='LBL_REPORTS_TO_NAME']").html(SUGAR.language.get("Users", "LBL_REPORTS_TO_NAME")+ ' : ');
                }else {
                         addToValidate('EditView', 'reports_to_name', 'textbox', true, SUGAR.language.get("Users", "LBL_REPORTS_TO_NAME"));
                         $("[data-label='LBL_REPORTS_TO_NAME']").html(SUGAR.language.get("Users", "LBL_REPORTS_TO_NAME") + ' : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="red">*</font> ');
                }
                $('#UserType').change(function() {
                     if($(this).val()=="Administrator"){
                         removeFromValidate('EditView', 'reports_to_name');
                         $("[data-label='LBL_REPORTS_TO_NAME']").html(SUGAR.language.get("Users", "LBL_REPORTS_TO_NAME")+ ' : ');
                     }else {
                         addToValidate('EditView', 'reports_to_name', 'textbox', true, SUGAR.language.get("Users", "LBL_REPORTS_TO_NAME"));
                         $("[data-label='LBL_REPORTS_TO_NAME']").html(SUGAR.language.get("Users", "LBL_REPORTS_TO_NAME") + ' : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="red">*</font> ');
                    }
                });
                function openSignaturePad()
                {
                    url = window.location.origin+'/'+window.location.pathname+'?entryPoint=setSignature';
                    foo = window.open(url, 'formpopup', 'width=500,height=400,resizable=no');
                    foo.focus();
                    return false;
                }
                function setValue(subProductData) {
                    var passData = {};
                    passData.file_name = subProductData;
                    passData.action = 'saveDbData';
                    passData.userId = '{$user_id}';
                    console.log(passData);
                    $.ajax({
                      url: 'index.php?entryPoint=setSignature&action=saveDbData',
                      data: passData,
                      type: 'post',
                      dataType: 'json',
                      success: function (response) {
                        console.log(response);
                            if(response.success == 'true')
                            {
                                $("#user_signature").val(response.file);
                                $("#signaturePreview").html('<span class="bvsuccess" style="margin-left:10px"><img src="custom/themes/bv_sign.png" height="40px"></span><a  style="text-decoration:none;" href="'+response.file+'" download="signature.png"><img src="custom/themes/bv_download.png" height="27px"></a><span id="signaturePreview"></span>');
                            }
                      },
                      error:function (error) {
                         console.log('error while uploading a signature');
                         return false;
                      }
                    });
                }
                </script>
EOQ;

		parent::display();
		echo $javascript;
	}
}

?>
