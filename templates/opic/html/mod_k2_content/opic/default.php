<?php
/**
 * @version		2.6.x
 * @package		K2
 * @author		JoomlaWorks http://www.joomlaworks.net
 * @copyright	Copyright (c) 2006 - 2014 JoomlaWorks Ltd. All rights reserved.
 * @license		GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */

// no direct access
defined('_JEXEC') or die;
?>
<!-- Recent Posts -->
<div id="k2ModuleBox<?php echo $module->id; ?>" class="k2ItemsBlock<?php echo (!empty($params->get('moduleclass_sfx'))) ? ' '.$params->get('moduleclass_sfx') : ' '.'recent-posts animated' ;?>" data-animation="fadeInUp" data-animation-delay="300">
<?php if(!empty($module->title) && ($module->showtitle == 1)): ?>
	<h5><?php echo $module->title;?></h5>
	<!-- Devider -->
	<div class="devider">
		<div class="devider-line-h devider-line-h-sea-green animated" data-animation="zoomIn" data-animation-delay="1000"></div>
		<div class="devider-round-out devider-round-out-sea-green animated" data-animation="zoomIn" data-animation-delay="700">
			<div class="devider-round-in devider-round-in-sea-green"></div>
		</div>
	</div>
<?php endif; ?>
	
	<!-- Recent Posts -->
	<?php if(count($items)): ?>
	<ul>
		<?php foreach ($items as $key=>$item):	?>
		<li>
			<figure class="thumbnail"><a href="<?php echo $item->link;?>"><img alt="" src="<?php echo $item->image; ?>" width="75" height="75"></a></figure>
			<span class="date"><?php echo JHTML::_('date', $item->created, 'F j , Y'); ?><?php //echo date($item->created, 'F j , Y '); ?></span>
			<h6 class="title"><a href="<?php echo $item->link;?>"><?php echo $item->title; ?></a></h6>
		</li>
		<?php endforeach; ?>
	</ul>
	<?php endif; ?>
</div>
