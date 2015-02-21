<?php
/**
*	@version	$Id: mod_k2latest_timeline.php 2 2014-10-15 04:12:05Z linhnt $
*	@package	K2 Content as Timeline (mod_k2latest_timeline)
*	@copyright	Copyright (C) 2009 - 2014 Omegatheme. All rights reserved.
*	@license	GNU/GPL version 2, or later
*	@website:	http://www.omegatheme.com
*	Support Forum - http://www.omegatheme.com/forum/
*/

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

if (K2_JVERSION != '15')
{
    $language = JFactory::getLanguage();
    $language->load('mod_k2.j16', JPATH_ADMINISTRATOR, null, true);
}

require_once (dirname(__FILE__).DS.'helper.php');

// Params
$moduleclass_sfx = $params->get('moduleclass_sfx', '');
$getTemplate = $params->get('getTemplate', 'Default');
$itemAuthorAvatarWidthSelect = $params->get('itemAuthorAvatarWidthSelect', 'custom');
$itemAuthorAvatarWidth = $params->get('itemAuthorAvatarWidth', 50);
$itemCustomLinkTitle = $params->get('itemCustomLinkTitle', '');
if ($params->get('itemCustomLinkMenuItem'))
{
    $menu = JMenu::getInstance('site');
    $menuLink = $menu->getItem($params->get('itemCustomLinkMenuItem'));
    if (!$itemCustomLinkTitle)
    {
        $itemCustomLinkTitle = (K2_JVERSION != '15') ? $menuLink->title : $menuLink->name;
    }
    $params->set('itemCustomLinkURL', JRoute::_('index.php?&Itemid='.$menuLink->id));
}

// Get component params
$componentParams = JComponentHelper::getParams('com_k2');

// User avatar
if ($itemAuthorAvatarWidthSelect == 'inherit')
{
    $avatarWidth = $componentParams->get('userImageWidth');
}
else
{
    $avatarWidth = $itemAuthorAvatarWidth;
}

$items = ModK2LatestTimelineHelper::getItems($params);

if (count($items))
{
    require (JModuleHelper::getLayoutPath('mod_k2latest_timeline', $getTemplate.DS.'default'));
}
