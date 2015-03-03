<?php
/*
# mod_sp_quickcontact - Ajax based quick contact Module by JoomShaper.com
# -----------------------------------------------------------------------	
# Author    JoomShaper http://www.joomshaper.com
# Copyright (C) 2010 - 2014 JoomShaper.com. All Rights Reserved.
# License - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Websites: http://www.joomshaper.com
*/

class modSpQuickcontactHelper
{
	public static function getAjax()
	{
		jimport('joomla.application.module.helper');
		$input  			= JFactory::getApplication()->input;
		$module 			= JModuleHelper::getModule('sp_quickcontact');
		$params 			= new JRegistry();
		$params->loadString($module->params);

		$mail 				= JFactory::getMailer();

		$success 			= $params->get('success');
		$failed 			= $params->get('failed');
		$recipient 			= $params->get('email');

		/*$title 				= $params->get('title');
		$sub_title			= $params->get('sub_title');
		$desc				= $params->get('desc');
		$phone_text			= $params->get('phone_text');
		$phone_number		= $params->get('phone_number');
		$email_text			= $params->get('email_text');
		$email_enquiry		= $params->get('email_enquiry');
		$address_location_text = $params->get('title');
		$address_location 	= $params->get('address_location_text');
		$quick_contact_text = $params->get('quick_contact_text');
		$quick_contact 		= $params->get('quick_contact');*/






		$subject 			="Contact from website";
		
		//inputs
		$inputs 			= $input->get('data', array(), 'ARRAY');

		foreach ($inputs as $input) {
			
			if( $input['name'] == 'email' )
			{
				$email 			= $input['value'];
			}

			if( $input['name'] == 'name' )
			{
				$name 			= $input['value'];
			}

			if( $input['name'] == 'website' )
			{
				$website 		= $input['value'];
			}

			if( $input['name'] == 'message' )
			{
				$message 			= nl2br( $input['value'] );
			}


			
			/*if($formcaptcha) {
				if( $input['name'] == 'sccaptcha' )
				{
					$sccaptcha 		= $input['value'];
				}
			}*/

		}

		$message_context= "";
		$message_context= "\n User Website:".$website;
		$message_context= "\n\n".$message;	
		/*if($formcaptcha) {
			if ($sccaptcha != $captcha_answer) {
				return '<p class="sp_qc_warn">' . $failed_captcha . '</p>';
			}
		}*/

		$sender = array($email, $name);	
		$mail->setSender($sender);
		$mail->addRecipient($recipient);
		$mail->setSubject($subject);
		$mail->isHTML(true);
		$mail->Encoding = 'base64';	
		$mail->setBody($message_context);

		if ($mail->Send()) {
			return '<p class="sp_qc_success">' . $success . '</p>';
		} else {
			return '<p class="sp_qc_warn">' . $failed . '</p>';
		}
	}
}