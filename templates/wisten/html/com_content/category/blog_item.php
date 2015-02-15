<?php
/**
 * @package     Joomla.Site
 * @subpackage  Layout
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;?>
<?php
// Create a shortcut for params.
$params = $this->item->params;
JHtml::addIncludePath(JPATH_COMPONENT.'/helpers/html');
$canEdit = $this->item->params->get('access-edit');
JHtml::_('behavior.framework');
?>
<?php if ($this->item->state == 0 || strtotime($this->item->publish_up) > strtotime(JFactory::getDate())
	|| ((strtotime($this->item->publish_down) < strtotime(JFactory::getDate())) && $this->item->publish_down != '0000-00-00 00:00:00' )) : ?>
<div class="system-unpublished">
<?php endif; ?>

<!-- Post Top Date Icon -->
					<?php if ($params->get('show_publish_date') || $params->get('show_create_date') || $params->get('show_modify_date')) : ?>
					<div class="contain-logo post-icon">
						<!-- Post Day -->
						<p class="day"><?php echo JText::sprintf( JHtml::_('date', $this->item->publish_up, JText::_('d'))); ?></p>
						<!-- Post Month -->
						<p class="month"><?php echo JText::sprintf( JHtml::_('date', $this->item->publish_up, JText::_('M'))); ?></p>
					</div>
					<?php endif; ?>
					
					<!-- Post img -->
					<div class="post-img">
						<?php echo JLayoutHelper::render('joomla.content.intro_image', $this->item); ?>
					</div>
					
					<!-- Post Texts -->
					<div class="post-texts">
					
						<!-- Post Header -->
						<?php echo JLayoutHelper::render('joomla.content.blog_style_default_item_title', $this->item); ?>
						
						<!-- Post Tags -->
						<div class="post-tags">
						
							<?php if ($params->get('show_modify_date')) : ?>
							<a class="tags">
							<i class="fa fa-clock-o"></i>
							<?php echo JText::sprintf( JHtml::_('date', $this->item->publish_up, JText::_('d F Y'))); ?>
							</a>
							<?php endif; ?>

							<?php if ($params->get('show_publish_date')) : ?>
							<a class="tags">
							<i class="fa fa-clock-o"></i>
							<?php echo JText::sprintf( JHtml::_('date', $this->item->publish_up, JText::_('d F Y'))); ?>
							</a>
							<?php endif; ?>

							<?php if ($params->get('show_create_date')) : ?>
							<a class="tags">
							<i class="fa fa-clock-o"></i>
							<?php echo JText::sprintf( JHtml::_('date', $this->item->publish_up, JText::_('d F Y'))); ?>
							</a>
							<?php endif; ?>

							<?php if ($params->get('show_author')) : ?>
							<a class="tags">
							<i class="fa fa-smile-o"></i>
							<?php $author = $this->item->created_by_alias ? $this->item->created_by_alias : $this->item->author; ?>
							<?php $author = '<span itemprop="name">' . $author . '</span>'; ?>
							<?php if (!empty($this->item->contact_link) && $params->get('link_author') == true) : ?>
							Posted by <?php echo JText::sprintf(JHtml::_('link', $this->item->contact_link, $author, array('itemprop' => 'url'))); ?>
							<?php else: ?>
								Posted by <?php echo JText::sprintf($author); ?>
							<?php endif; ?>
							</a>
							<?php endif; ?>
							
							<?php if ($params->get('show_hits')) : ?>
							<a class="tags">
							<i class="fa fa-thumbs-o-up"></i>
								<meta itemprop="interactionCount" content="UserPageVisits:<?php echo $this->item->hits; ?>" />
								<?php echo JText::sprintf('COM_CONTENT_ARTICLE_HITS', $this->item->hits); ?>
							</a>
							<?php endif; ?>

							<?php if ($params->get('show_category')) : ?>
							<span class="tags">
							<i class="fa fa-book"></i>
								<?php $title = $this->escape($this->item->category_title); ?>
								<?php if ($params->get('link_category') && $this->item->catslug) : ?>
									<?php $url = '<a href="' . JRoute::_(ContentHelperRoute::getCategoryRoute($this->item->catslug)) . '" itemprop="genre">' . $title . '</a>'; ?>
									<?php echo JText::sprintf('COM_CONTENT_CATEGORY', $url); ?>
								<?php else : ?>
									<?php echo JText::sprintf('COM_CONTENT_CATEGORY', '<span itemprop="genre">' . $title . '</span>'); ?>
								<?php endif; ?>
							</span>
							<?php endif; ?>

						<?php if ($params->get('show_parent_category')) : ?>
						<span class="tags">
							<i class="fa fa-book"></i>
							<?php $title = $this->escape($this->item->parent_title); ?>
							<?php if ($params->get('link_parent_category') && !empty($this->item->parent_slug)) : ?>
							<?php $url = '<a href="' . JRoute::_(ContentHelperRoute::getCategoryRoute($this->item->parent_slug)) . '" itemprop="genre">' . $title . '</a>'; ?>
							<?php echo JText::sprintf('COM_CONTENT_PARENT', $url); ?>
							<?php else : ?>
							<?php echo JText::sprintf('COM_CONTENT_PARENT', '<span itemprop="genre">' . $title . '</span>'); ?>
							<?php endif; ?>
						</span>
						<?php endif; ?>

						</div>
						
						<!-- Post Message -->
						
<?php if (!$params->get('show_intro')) : ?>
	<?php echo $this->item->event->afterDisplayTitle; ?>
<?php endif; ?>
<p><?php echo $this->item->event->beforeDisplayContent; ?> <?php echo $this->item->introtext; ?></p>



						
						
						
					



<?php echo JLayoutHelper::render('joomla.content.icons', array('params' => $params, 'item' => $this->item, 'print' => false)); ?>

<?php // Todo Not that elegant would be nice to group the params ?>
<?php $useDefList=""; ?>
<?php if ($useDefList) : ?>
	<?php echo JLayoutHelper::render('joomla.content.info_block.block', array('item' => $this->item, 'params' => $params, 'position' => 'above')); ?>
<?php endif; ?>



<?php if ($useDefList) : ?>
	<?php echo JLayoutHelper::render('joomla.content.info_block.block', array('item' => $this->item, 'params' => $params, 'position' => 'below')); ?>
<?php  endif; ?>

<?php if ($params->get('show_readmore') && $this->item->readmore) :
	if ($params->get('access-view')) :
		$link = JRoute::_(ContentHelperRoute::getArticleRoute($this->item->slug, $this->item->catid));
	else :
		$menu = JFactory::getApplication()->getMenu();
		$active = $menu->getActive();
		$itemId = $active->id;
		$link1 = JRoute::_('index.php?option=com_users&view=login&Itemid=' . $itemId);
		$returnURL = JRoute::_(ContentHelperRoute::getArticleRoute($this->item->slug, $this->item->catid));
		$link = new JUri($link1);
		$link->setVar('return', base64_encode($returnURL));
	endif; ?>

	<a class="btn btn-large btn-post" href="<?php echo $link; ?>"> <span class="icon-chevron-right"></span>

	<?php if (!$params->get('access-view')) :
		echo JText::_('COM_CONTENT_REGISTER_TO_READ_MORE');
	elseif ($readmore = $this->item->alternative_readmore) :
		echo $readmore;
		if ($params->get('show_readmore_title', 0) != 0) :
		echo JHtml::_('string.truncate', ($this->item->title), $params->get('readmore_limit'));
		endif;
	elseif ($params->get('show_readmore_title', 0) == 0) :
		echo JText::sprintf('COM_CONTENT_READ_MORE_TITLE');
	else :
		echo JText::_('COM_CONTENT_READ_MORE');
		echo JHtml::_('string.truncate', ($this->item->title), $params->get('readmore_limit'));
	endif; ?>

	<i class="fa fa-angle-double-right"></i>
	</a>

<?php endif; ?>

<?php if ($this->item->state == 0 || strtotime($this->item->publish_up) > strtotime(JFactory::getDate())
	|| ((strtotime($this->item->publish_down) < strtotime(JFactory::getDate())) && $this->item->publish_down != '0000-00-00 00:00:00' )) : ?>
</div><!-- End Post Texts -->
	</div>
<?php endif; ?>

<?php echo $this->item->event->afterDisplayContent; ?>
