<?php
/**
* JS Slideshow view file
* Author by Joomlastars Team.
* @copyright (C) 2014 by Joomlastars - All rights reserved!
* @package JS-Slideshow1
* @license GNU/GPL, see LICENSE.php
*/
//No Direct Access to this file
defined('_JEXEC') or die('Restricted Access');

// Select effect of Slideshow

$SelectEffect = $params->get("SelectEffect");
$bgimg=$params->get('slideshow_background');
$video_url=$params->get('video');
$autoPlay = $params->get('autoPlay');
$showcontrol = $params->get('showcontrol');
$volume = $params->get('volume');

//Button Options

$btntitle = $params->get('btntitle');



//get details of Image 1

$img1 = $params->get('image1', "");
$title1 = $params->get('title1');
$desc1 = $params->get('desc1');
$link1 = $params->get('link1');
$link1_title = $params->get('link1_title');

//get details of Image 2

$img2 = $params->get('image2', "");
$title2 = $params->get('title2');
$desc2 = $params->get('desc2');
$link2 = $params->get('link2');
$link2_title = $params->get('link2_title');

//get details of Image 3

$img3 = $params->get('image3', "");
$title3 = $params->get('title3');
$desc3 = $params->get('desc3');
$link3 = $params->get('link3');
$link3_title = $params->get('link3_title');

//get details of Image 4

$img4 = $params->get('image4', "");
$title4 = $params->get('title4');
$desc4 = $params->get('desc4');
$link4 = $params->get('link4');
$link4_title = $params->get('link4_title');

//get details of Image 5

$img5 = $params->get('image5', "");
$title5 = $params->get('title5');
$desc5 = $params->get('desc5');
$link5 = $params->get('link5');
$link5_title = $params->get('link5_title');



require JModuleHelper::getLayoutPath('mod_ct_slider');

?>

