<?php 
/*
 * @package Joomla 3.1.1
 * @copyright Copyright (C) 2013 Open Source Matters. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
	*
 * @module Pranon -PR Progressbar
 * @copyright Copyright (C) Pranon www.pranon.com
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 */

defined('_JEXEC') or die;
$facebook 		= $params->get('facebook');
$twitter 		= $params->get('twitter');
$googleplus 	= $params->get('googleplus');

$preset 		= $params->get('preset');

require JModuleHelper::getLayoutPath('mod_ct_team', $params->get('layout', 'default'));

