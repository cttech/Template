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
<?php 
		$itemGroup = array();
		$item_merged = (object) array_merge((array) $this->leading, (array) $this->primary, (array) $this->secondary, (array) $this->links);
		foreach ($item_merged as $key => $value) {
			$newDate = date('Y-m', strtotime($value->created));
			$itemGroup[$newDate][] = $value;
		}
?>
<?php foreach ($itemGroup as $key => $items):?>
	<h3 class="timeline-title">
		<span><?php echo JHTML::_('date', $key ,  'F - Y'); ?></span>
	</h3>
	<div class="row">
		<?php 
			$oddItems = array();
			$evenitems = array();
			foreach ($items as $key => $val) {
			 	if(($key %2 == 0)){
			 		$evenitems[] = $val;
			 	}else{
			 		$oddItems[] = $val;
			 	}
			 } 
		?>
		<?php if(!empty($evenitems)): ?>
			<!-- Blog Timeline Left Begins -->
			<div class="col-md-6 col-sm-6 blog-timeline-left">
				<?php foreach ($evenitems as $key => $item):?>
					<div class="blog-timeline-event blog-timeline-event-left animated" data-animation="fadeInUp" data-animation-delay="300">
						<?php
							// Load category_item.php by default
							$this->item=$item;
							echo $this->loadTemplate('item');
						?>
					</div>
				<?php endforeach;?>
			</div><!-- Blog Timeline Left Ends -->	
		<?php endif; ?>
	
		<?php if(!empty($oddItems)): ?>
			<!-- Timeline Right Begins -->
			<div class="col-md-6 col-sm-6 blog-timeline-right animated" data-animation="fadeInUp" data-animation-delay="300">
			
				
				<?php foreach ($oddItems as $key => $item):?>
				<div class="blog-timeline-event blog-timeline-event-right animated">	
					<?php
							// Load category_item.php by default
							$this->item=$item;
							echo $this->loadTemplate('item');
						?>					
				</div>
				<?php endforeach; ?>			
			</div><!-- Timeline Right Ends -->
		<?php endif; ?>			
					

	</div><hr>
	
<?php endforeach; ?>