<?php

/**
 * @Author: Khwaish Nagdev
 * @Date:   2018-05-18 18:35:00
 * @Last Modified by:   khwaish_nagdev
 * @Last Modified time: 2018-12-05 14:08:21
 */
if (!defined('sugarEntry')) {
	define('sugarEntry', true);
}
global $sugar_config;
require_once 'modules/AOS_PDF_Templates/PDF_Lib/mpdf.php';
require_once 'modules/AOS_PDF_Templates/templateParser.php';
require_once 'modules/AOS_PDF_Templates/sendEmail.php';
require_once 'modules/AOS_PDF_Templates/AOS_PDF_Templates.php';
$result = array();
if($_POST['postData']['type'] == 'Client') {
	$imagedata = base64_decode($_POST['img_data']);
	$filename = md5(date("dmYhisA"));
	//Location to where you want to created sign image
	$file_name = 'custom/signatures/' . $filename . '.png';
	file_put_contents($file_name, $imagedata);
	$result['status'] = 1;
	$result['file_name'] = $file_name;
	echo json_encode($result);
}
else
{
	//get contract details
	$oContract = BeanFactory::getBean('AOS_Contracts',$_POST['postData']['ContractId']);
	if(!empty($oContract->id) && !empty($oContract->contact_id)) {
		$imagedata = base64_decode($_POST['img_data']);
		$filename = $oContract->contact_id."_contact_signature";
		//Location to where you want to created sign image
		$oContact = BeanFactory::getBean('Contacts',$oContract->contact_id);
		$file_name = 'upload/' . $filename;
		$oContact->contact_signature = 'Signature.png';
		$oContact->save();
		file_put_contents($file_name, $imagedata);
		
		$note = BeanFactory::newBean('Notes');
		$note->name = $oContract->name." Signed";
		$note->filename = $oContract->name." Signed.pdf";
		$note->file_mime_type = 'application/pdf';
		$note->parent_id = $oContract->account_id;
		$note->save();
		// create the pdf and save to file system
		if($oContact->load_relationship('notes'))
		{
			$oContact->notes->add($note->id);
		}
		
		$html = '';
		//get template html
		$template = BeanFactory::getBean('AOS_PDF_Templates',$_POST['postData']['templateId']);
		if(!empty($template->id)) {
			$html.= $template->description;
			$html.='<span><img src="' . $file_name . '" height="100px" width="100px"><br>' . $oContact->name . '<br>Customer\'s Signature({DATE m/d/Y})</span>';
		}

		$object_arr[$oContract->module_dir] = $oContract->id;
		$search = array(
		'/<script[^>]*?>.*?<\/script>/si', // Strip out javascript
			'/<[\/\!]*?[^<>]*?>/si', // Strip out HTML tags
			'/([\r\n])[\s]+/', // Strip out white space
			'/&(quot|#34);/i', // Replace HTML entities
			'/&(amp|#38);/i',
			'/&(lt|#60);/i',
			'/&(gt|#62);/i',
			'/&(nbsp|#160);/i',
			'/&(iexcl|#161);/i',
			'/<address[^>]*?>/si',
			'/&(apos|#0*39);/',
			'/&#(\d+);/',
		);

		$replace = array('',
			'',
			'\1',
			'"',
			'&',
			'<',
			'>',
			' ',
			chr(161),
			'<br>',
			"'",
			'chr(%1)',
		);
		$header = preg_replace($search, $replace, $template->pdfheader);
		$footer = preg_replace($search, $replace, $template->pdffooter);
		$text = preg_replace($search, $replace, $template->description);
		$text = preg_replace($search, $replace, $template->description);
		$text = str_replace("<p><pagebreak /></p>", "<pagebreak />", $text);
		$text = preg_replace_callback('/\{DATE\s+(.*?)\}/',
			function ($matches) {
				return date($matches[1]);
			},
			$text);
		$text = str_replace("\$aos_quotes", "\$" . $variableName, $text);
		$text = str_replace("\$aos_invoices", "\$" . $variableName, $text);
		$text = str_replace("\$total_amt", "\$" . $variableName . "_total_amt", $text);
		$text = str_replace("\$discount_amount", "\$" . $variableName . "_discount_amount", $text);
		$text = str_replace("\$subtotal_amount", "\$" . $variableName . "_subtotal_amount", $text);
		$text = str_replace("\$tax_amount", "\$" . $variableName . "_tax_amount", $text);
		$text = str_replace("\$shipping_amount", "\$" . $variableName . "_shipping_amount", $text);
		$text = str_replace("\$total_amount", "\$" . $variableName . "_total_amount", $text);
		$text = str_replace('<p><a title="Add Signature" href="http://localhost/suite71010/index.php?entryPoint=setSignature&ContractId=$aos_contracts_id&templateId='.$template->id.'">Add Signature</a></p>', "", $text);
		
		if(!empty($text)) {
			$oUser = new User();
			$oUser->retrieve($oContract->assigned_user_id);
			$signature = $oReportsToUser->user_signature;
			$auth_name = $oReportsToUser->name;
			$auth_position = $oReportsToUser->title;
			require_once 'modules/Administration/Administration.php';
			$oAdmin = new Administration();
			$oAdmin->retrieveSettings();
			if(!empty($oUser->reports_to_id) || !empty($oUser->is_admin)) {
				if($oUser->is_admin) {
					$signature = $oUser->user_signature;
					$auth_name = $oUser->name;
					$auth_position = $oUser->title;	
				}
				else
				{
					$oReportsToUser = BeanFactory::getBean("Users",$oUser->reports_to_id);	
					$signature = $oReportsToUser->user_signature;
					$auth_name = $oReportsToUser->name;
					$auth_position = $oReportsToUser->title;	
				}
			}
			$contact_signature = $sugar_config['upload_dir'].$oContact->id."_contact_signature";
			$contact_name = $oContact->name;
			if (!empty($signature) || !empty($contact_signature)) {
				$text .= '<table style="width: 100%;" border="0"><tbody><tr>';
				if(!empty($contact_signature)) {
					$text.='<td align="left"><img src="' . $contact_signature . '" height="100px" width="100px"><br>' . $contact_name .'</td>';
				}
				$enabledFeatures = $oAdmin->settings['esignature_esignature_features'];
				$features = explode(",", $enabledFeatures);
				if(!empty($signature) && in_array('Customer', $features)) {
					$text.='<td align="right"><img src="' . $signature . '" height="100px" width="100px"><br>'.$oAdmin->settings['system_name'].'<br>' . $auth_name .'({DATE m/d/Y})</td>';
				}
				$text.='</tr></tbody></table>';
			}
		}
		$text = preg_replace_callback('/\{DATE\s+(.*?)\}/',
			function ($matches) {
				return date($matches[1]);
			},
			$text);

		$converted = templateParser::parse_template($text, $object_arr);
		$header = templateParser::parse_template($header, $object_arr);
		$footer = templateParser::parse_template($footer, $object_arr);
		
		$printable = str_replace("\n", "<br />", $converted);
		
		$pdf = new mPDF('en', $template->page_size . $orientation, '', 'DejaVuSansCondensed', $template->margin_left, $template->margin_right, $template->margin_top, $template->margin_bottom, $template->margin_header, $template->margin_footer);
		$pdf->SetAutoFont();
		$pdf->SetHTMLHeader($header);
		$pdf->SetHTMLFooter($footer);
		$pdf->WriteHTML($printable);
		$pdf->Output($sugar_config['upload_dir'] . '/'.$note->id, 'F');
		$result['status'] = 1;
		$result['file_name'] = $sugar_config['upload_dir'] . '/'.$note->id;

		echo json_encode($result);
	}
}
