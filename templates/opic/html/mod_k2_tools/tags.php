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
<!-- Devider -->
<div id="k2ModuleBox<?php echo $module->id; ?>" class="k2TagCloudBlock<?php echo (!empty($params->get('moduleclass_sfx'))) ? ' '.$params->get('moduleclass_sfx') : ' '.'tags animated' ;?>
" data-animation="fadeInUp" data-animation-delay="300">
	 <h5><?php echo $module->title;?></h5>
<div class="devider">
	<div class="devider-line-h devider-line-h-sea-green animated" data-animation="zoomIn" data-animation-delay="1000"></div>
	<div class="devider-round-out devider-round-out-sea-green animated" data-animation="zoomIn" data-animation-delay="700">
		<div class="devider-round-in devider-round-in-sea-green"></div>
	</div>
</div>
	<ul>
		<?php foreach ($tags as $tag): ?>
	<?php if(!empty($tag->tag)): ?>
		<li>
		<a href="<?php echo $tag->link; ?>" style="font-size:<?php echo $tag->size; ?>%" title="<?php echo $tag->count.' '.JText::_('K2_ITEMS_TAGGED_WITH').' '.K2HelperUtilities::cleanHtml($tag->tag); ?>">
			<?php echo $tag->tag; ?>
		</a>
		</li>
	<?php endif; ?>
	<?php endforeach; ?>
</ul>
	<div class="clr"></div>
</div>
