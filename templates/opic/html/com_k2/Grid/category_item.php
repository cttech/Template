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
//print_r($this->item);
?>
<div class="blog-container animated catItemView group<?php echo ucfirst($this->item->itemGroup); ?><?php echo ($this->item->featured) ? ' catItemIsFeatured' : ''; ?><?php if($this->item->params->get('pageclass_sfx')) echo ' '.$this->item->params->get('pageclass_sfx'); ?>" data-animation="fadeInUp" data-animation-delay="300">
		<?php if(isset($this->item->image) && !empty($this->item->image)): ?>
	<img src="<?php echo $this->item->image;?>" alt="photo blog" class="img-responsive pull-left blog-image">
	<?php endif; ?>
	<?php if($this->item->params->get('catItemVideo') && !empty($this->item->video)): ?>
	  <!-- Item video -->
			<?php if($this->item->videoType=='embedded'): ?>
			
			<?php echo $this->item->video; ?>
			
			<?php else: ?>
			<span class="catItemVideo"><?php echo $this->item->video; ?></span>
			<?php endif; ?>
	
  <?php endif; ?>
	<?php if($this->item->params->get('catItemTitle')): ?>
	  <!-- Item title -->
	  <h5 class="catItemTitle">
			<?php if(isset($this->item->editLink)): ?>
			<!-- Item edit link -->
			<span class="catItemEditLink">
				<a class="modal" rel="{handler:'iframe',size:{x:990,y:550}}" href="<?php echo $this->item->editLink; ?>">
					<?php echo JText::_('K2_EDIT_ITEM'); ?>
				</a>
			</span>
			<?php endif; ?>

	  	<?php if ($this->item->params->get('catItemTitleLinked')): ?>
			<a href="<?php echo $this->item->link; ?>">
	  		<?php echo $this->item->title; ?>
	  	</a>
	  	<?php else: ?>
	  	<?php echo $this->item->title; ?>
	  	<?php endif; ?>

	  	<?php if($this->item->params->get('catItemFeaturedNotice') && $this->item->featured): ?>
	  	<!-- Featured flag -->
	  	<span>
		  	<sup>
		  		<?php echo JText::_('K2_FEATURED'); ?>
		  	</sup>
	  	</span>
	  	<?php endif; ?>
	  </h5>
	  <?php endif; ?>
	   <?php if($this->item->params->get('catItemIntroText')): ?>
	  <!-- Item introtext -->
	  <p class="catItemIntroText">
	  	<?php echo $this->item->introtext; ?>
	  </p>
	  <?php endif; ?>
	<!-- <p>
		Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed do eiusmod tempor incididunt
		ut labore et dolore magna aliqua.Ut enim ad minim ven iamquis nostrud exercitation. Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim ven iamquis nostrud exercitation.
	</p> -->

	<ul class="blog-attr">
	
		<li class="blog-comment text-center">
			<?php if($this->item->params->get('catItemCommentsAnchor') && ( ($this->item->params->get('comments') == '2' && !$this->user->guest) || ($this->item->params->get('comments') == '1')) ): ?>
	<!-- Anchor link to comments below -->
	
		<?php if(!empty($this->item->event->K2CommentsCounter)): ?>
			<!-- K2 Plugins: K2CommentsCounter -->
			<?php echo $this->item->event->K2CommentsCounter; ?>
		<?php else: ?>
			<?php if($this->item->numOfComments > 0): ?>
			<a href="<?php echo $this->item->link; ?>#itemCommentsAnchor">
				<i class="fa fa-comments fa-1bx red"></i>
				<?php echo $this->item->numOfComments; ?>
			</a>
			<?php else: ?>
			<a href="<?php echo $this->item->link; ?>#itemCommentsAnchor">
				<i class="fa fa-comments fa-1bx red"></i>
			</a>
			<?php endif; ?>
		<?php endif; ?>
	
	<?php endif; ?>
			<!-- <a href="#"> 2,345</a> -->
		</li>
		<?php if($this->item->params->get('catItemRating')): ?>	
		<li class="blog-rate text-center">
			<!-- <i class="fa fa-star fa-1ax yellow"></i>
			<i class="fa fa-star fa-1ax yellow"></i>
			<i class="fa fa-star fa-1ax yellow"></i>
			<i class="fa fa-star fa-1ax yellow"></i>
			<i class="fa fa-star fa-1ax yellow"></i> -->

	<!-- Item Rating -->
			<ul class="itemRatingList">
				<li class="itemCurrentRating" id="itemCurrentRating<?php echo $this->item->id; ?>" style="width:<?php echo $this->item->votingPercentage; ?>%;"></li>
				<li><a href="#" data-id="<?php echo $this->item->id; ?>" title="<?php echo JText::_('K2_1_STAR_OUT_OF_5'); ?>" class="one-star">1</a></li>
				<li><a href="#" data-id="<?php echo $this->item->id; ?>" title="<?php echo JText::_('K2_2_STARS_OUT_OF_5'); ?>" class="two-stars">2</a></li>
				<li><a href="#" data-id="<?php echo $this->item->id; ?>" title="<?php echo JText::_('K2_3_STARS_OUT_OF_5'); ?>" class="three-stars">3</a></li>
				<li><a href="#" data-id="<?php echo $this->item->id; ?>" title="<?php echo JText::_('K2_4_STARS_OUT_OF_5'); ?>" class="four-stars">4</a></li>
				<li><a href="#" data-id="<?php echo $this->item->id; ?>" title="<?php echo JText::_('K2_5_STARS_OUT_OF_5'); ?>" class="five-stars">5</a></li>
			</ul>
		</li><?php endif; ?>
		<?php if ($this->item->params->get('catItemReadMore')): ?>
		<li class="blog-next text-center">
		<a class="k2ReadMore" href="<?php echo $this->item->link; ?>">
			<i class="fa fa-long-arrow-right"></i>
		</a>
		</li><?php endif; ?>
	</ul>							
	<div class="clearfix"></div>
</div>