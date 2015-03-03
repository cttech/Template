<?php
/*
# mod_sp_quickcontact - Ajax based quick contact Module by JoomShaper.com
# ------------------------------------------------------------------------
# Author    JoomShaper http://www.joomshaper.com
# Copyright (C) 2010 - 2014 JoomShaper.com. All Rights Reserved.
# License - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Websites: http://www.joomshaper.com
*/

// no direct access
defined('_JEXEC') or die;

// Include the syndicate functions only once
JHtml::_('jquery.framework');

$uniqid				= $module->id;
$name_text			= JText::_('NAME');
$email_text			= JText::_('EMAIL');
$website_text		= JText::_('WEBSITE');
$msg_text			= JText::_('MESSAGE');
$send_msg			= JText::_('SEND_MESSAGE');



$document 			= JFactory::getDocument();
$document->addScript(JURI::base(true) . '/modules/mod_sp_quickcontact/assets/js/script.js');
$document->addStylesheet(JURI::base(true) . '/modules/mod_sp_quickcontact/assets/css/style.css');

// Include the helper.
require_once __DIR__ . '/helper.php';

require JModuleHelper::getLayoutPath('mod_sp_quickcontact', $params->get('layout', 'default'));