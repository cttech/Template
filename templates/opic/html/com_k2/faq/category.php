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
<?php if((isset($this->leading) || isset($this->primary) || isset($this->secondary) || isset($this->links)) && (count($this->leading) || count($this->primary) || count($this->secondary) || count($this->links))): ?>
<?php 
	$item_merged = (object) array_merge((array) $this->leading, (array) $this->primary, (array) $this->secondary, (array) $this->links);

?>
<!-- Left Part Sidebar -->
					<div class="faq-inner">
						<div id="accordion" class="panel-group faq-panel accordion"  data-animated="fadeInUp">
						<?php foreach ($item_merged as $key => $item):?>
							<?php
								// Load category_item.php by default
								$this->item=$item;
								echo $this->loadTemplate('item');
							?>
							
					<?php endforeach;?>						
						</div>
					</div>
					
					<!-- Left Part Ends -->
<?php endif;?>

