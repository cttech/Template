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

// Define default image size (do not change)
K2HelperUtilities::setDefaultImage($this->item, 'itemlist', $this->params);

?>
<?php //print_r($this->item);?>
<!-- Accordion  Begins -->
	<div class="panel panel-default">
		<div class="panel-heading">
			<!-- Title -->
			<h4 class="panel-title">
				<a href="#collapse<?php echo $this->item->id;?>" data-parent="#accordion" data-toggle="collapse" class="accordion-toggle collapsed">
					<?php echo $this->item->title;?>
				</a>
			</h4>
		</div>
		<div class="panel-collapse collapse" id="collapse<?php echo $this->item->id;?>">
			<!-- Desription -->
			<div class="panel-body">
				<?php echo $this->item->introtext;?>
			</div>
		</div>
	</div><!-- Accordion  Ends -->
