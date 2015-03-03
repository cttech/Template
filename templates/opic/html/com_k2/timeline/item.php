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
<!-- Blog One -->
<div class="blog-container animated" data-animation="fadeInUp" data-animation-delay="300">
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
	 <?php if($this->item->params->get('itemTitle')): ?>
	  <!-- Item title -->
	  <h5 class="itemTitle">
	  	<a href="#"><?php echo $this->item->title; ?></a>

	  	<?php if($this->item->params->get('itemFeaturedNotice') && $this->item->featured): ?>
	  	<!-- Featured flag -->
	  	<span>
		  	<sup>
		  		<?php echo JText::_('K2_FEATURED'); ?>
		  	</sup>
	  	</span>
	  	<?php endif; ?>

	  </h5>
	  <?php endif; ?>

	  <?php if(!empty($this->item->fulltext)): ?>
	  <?php if($this->item->params->get('itemIntroText')): ?>
	  <!-- Item introtext -->
	  <div class="itemIntroText">
	  	<p><?php echo $this->item->introtext; ?></p>
	  </div>
	  <?php endif; ?>
	  <?php if($this->item->params->get('itemFullText')): ?>
	  <!-- Item fulltext -->
	  <div class="itemFullText">
	  	<p><?php echo $this->item->fulltext; ?></p>
	  </div>
	  <?php endif; ?>
	  <?php else: ?>
	  <!-- Item text -->
	  <div class="itemFullText">
	  	<p><?php echo $this->item->introtext; ?></p>
	  </div>
	  <?php endif; ?>
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
		<li class="blog-rate text-center">
			<?php if($this->item->params->get('itemRating')): ?>
	<!-- Item Rating -->
	<div class="itemRatingBlock">
		<div class="itemRatingForm">
			<ul class="itemRatingList">
				<li class="itemCurrentRating" id="itemCurrentRating<?php echo $this->item->id; ?>" style="width:<?php echo $this->item->votingPercentage; ?>%;"></li>
				<li><a href="#" data-id="<?php echo $this->item->id; ?>" title="<?php echo JText::_('K2_1_STAR_OUT_OF_5'); ?>" class="one-star">1</a></li>
				<li><a href="#" data-id="<?php echo $this->item->id; ?>" title="<?php echo JText::_('K2_2_STARS_OUT_OF_5'); ?>" class="two-stars">2</a></li>
				<li><a href="#" data-id="<?php echo $this->item->id; ?>" title="<?php echo JText::_('K2_3_STARS_OUT_OF_5'); ?>" class="three-stars">3</a></li>
				<li><a href="#" data-id="<?php echo $this->item->id; ?>" title="<?php echo JText::_('K2_4_STARS_OUT_OF_5'); ?>" class="four-stars">4</a></li>
				<li><a href="#" data-id="<?php echo $this->item->id; ?>" title="<?php echo JText::_('K2_5_STARS_OUT_OF_5'); ?>" class="five-stars">5</a></li>
			</ul>
		</div>
	</div>
	<?php endif; ?>
		</li>
	</ul>							
	<div class="clearfix"></div>
</div><hr>

<!-- Share This Post -->
<?php if($this->item->params->get('itemTwitterButton',1) || $this->item->params->get('itemFacebookButton',1)): ?>
<div class="share-post animated" data-animation="fadeInUp" data-animation-delay="300">
	<h5><i class="fa fa-share"></i>Share this post</h5>
	<div class="social-post">
		
		<?php if($this->item->params->get('itemFacebookButton',1)): ?>
		<!-- Facebook -->
		<a href="http://www.facebook.com/sharer.php?u=<?php echo JURI::current();?>" target="_blank"><i class="fa fa-facebook"></i></a>
		 <?php endif; ?>
		 <?php if($this->item->params->get('itemTwitterButton',1)): ?>
		<!-- Twitter -->
		<a href="http://twitter.com/share?url=<?php echo JURI::current();?>&text=<?php echo $this->item->title;?>&hashtags=<?php echo $this->item->tags[0]->name;?>" target="_blank"><i class="fa fa-twitter"></i></a>
		 <?php endif; ?>
		<!-- Pinterest -->
		<a href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());"><i class="fa fa-pinterest"></i></a>
		 
		<!-- LinkedIn -->
		<a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo JURI::current();?>" target="_blank"><i class="fa fa-linkedin"></i></a>

	</div>
</div>	
<?php endif; ?>	
<?php if($this->item->params->get('itemAuthorBlock') && empty($this->item->created_by_alias)): ?>
<!-- Author -->
<div class="author animated" data-animation="fadeInUp" data-animation-delay="300">
	<?php if($this->item->params->get('itemAuthorImage') && !empty($this->item->author->avatar)): ?>
	<img class="image-circle" src="<?php echo $this->item->author->avatar; ?>" alt="<?php echo $this->item->author->avatar; ?>" alt="<?php echo K2HelperUtilities::cleanHtml($this->item->author->name); ?>">
	<?php endif; ?>
	<h5 class="author-name"><a rel="author" href="<?php echo $this->item->author->link; ?>"><?php echo $this->item->author->name; ?></a></h5><small>-Author</small><hr>
	  <?php if($this->item->params->get('itemAuthorDescription') && !empty($this->item->author->profile->description)): ?>
      <p><?php echo $this->item->author->profile->description; ?></p>
      <?php endif; ?>
</div>
<?php endif; ?>
<?php if($this->item->params->get('itemComments') && ($this->item->params->get('comments') == '1' || ($this->item->params->get('comments') == '2')) && empty($this->item->event->K2CommentsBlock)): ?>
<section class="comments">

	<?php if($this->item->numOfComments>0 && $this->item->params->get('itemComments') && ($this->item->params->get('comments') == '1' || ($this->item->params->get('comments') == '2'))): ?>
	<!-- Title -->
	<div class="title-accent">

		<h5><i class="fa fa-comments"></i>  <?php echo $this->item->numOfComments; ?> <?php echo ($this->item->numOfComments>1) ? JText::_('K2_COMMENTS') : JText::_('K2_COMMENT'); ?> on - <?php echo $this->item->title; ?></h5>
		<div class="devider text-left">
			<div class="devider-line-h devider-line-h-sea-green animated" data-animation="zoomIn" data-animation-delay="1000"></div>
			<div class="devider-round-out devider-round-out-sea-green animated" data-animation="zoomIn" data-animation-delay="700">
				<div class="devider-round-in devider-round-in-sea-green"></div>
			</div>
		</div>
	</div>

	    <?php foreach ($this->item->comments as $key=>$comment): ?>
	    <!-- Comment-->
	<div class="comment-wrap comments-guest animated" data-animation="fadeInUp" data-animation-delay="300"> 
		<!-- Image -->
		<div class="image-holder">
			<img class="image-circle" src="images/blog/blog-single/guest.png" alt="">								
		</div> 
		<!-- Title -->
		<p class="name">
			<?php if(!empty($comment->userLink)): ?>
		    <a href="<?php echo JFilterOutput::cleanText($comment->userLink); ?>" title="<?php echo JFilterOutput::cleanText($comment->userName); ?>" target="_blank" rel="nofollow">
		    	<?php echo $comment->userName; ?>
		    </a>
		    <?php else: ?>
		    <?php echo $comment->userName; ?>
		    <?php endif; ?>
		</p> - <small>Guest</small>
		<!-- Post Details -->
		<p class="date"><?php echo JHTML::_('date', $comment->commentDate, 'F j , Y \a\t h:i:s a'); ?></p><hr>
		<!-- Description -->
		<p class="message"><?php echo $comment->commentText; ?></p>					
		<!-- Reply Button -->
		
		<span class="commentLink">
		    	<a  class="reply-btn" href="<?php echo $this->item->link; ?>#comment<?php echo $comment->id; ?>" name="comment<?php echo $comment->id; ?>" id="comment<?php echo $comment->id; ?>">
		    		<i class="fa fa-reply"></i>Reply
		    	</a>
		</span>
							
	</div>	

	    <?php endforeach; ?>
					
	<?php endif;?>		
</section>
<?php endif;?>
 
<!-- Leave a Comment -->
<div id="contact" class="form-section animated" data-animation="fadeInUp" data-animation-delay="300">
	<?php echo $this->loadTemplate('comments_form'); ?>
</div>
