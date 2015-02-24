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

<div id="k2ModuleBox<?php echo $module->id; ?>" class="k2CategoriesListBlock<?php echo (!empty($params->get('moduleclass_sfx'))) ? ' '.$params->get('moduleclass_sfx') : ' '.'categories animated' ;?>" data-animation="fadeInUp" data-animation-delay="300">
	<h5><?php echo $module->title;?></h5>
<!-- Devider -->
<div class="devider">
	<div class="devider-line-h devider-line-h-sea-green animated" data-animation="zoomIn" data-animation-delay="1000"></div>
	<div class="devider-round-out devider-round-out-sea-green animated" data-animation="zoomIn" data-animation-delay="700">
		<div class="devider-round-in devider-round-in-sea-green"></div>
	</div>
</div>

	<?php echo $output; ?>
</div>
