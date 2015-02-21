<?php
/**
*	@version	$Id: default_ajax.php 4 2014-10-15 08:40:47Z linhnt $
*	@package	K2 Content as Timeline (mod_k2latest_timeline)
*	@copyright	Copyright (C) 2009 - 2014 Omegatheme. All rights reserved.
*	@license	GNU/GPL version 2, or later
*	@website:	http://www.omegatheme.com
*	Support Forum - http://www.omegatheme.com/forum/
*/

defined( '_JEXEC' ) or die( 'Restricted access' );
?>
<?php if (count($items)) : ?>
<?php foreach ($items as $idx => $item) :  ?>
    <?php if ($idx %2 == 0): ?>
        <div class="clearfix"></div>
    <?php endif; ?>
    <article class="post timeline-item<?php echo $idx == 0 ? ' first' : ''; ?><?php echo ($idx %2 == 0) ? ' even' : ' odd'; ?>" itemscope itemtype="http://schema.org/Article">
        <div class="post-inner">
            <?php if($params->get('itemDateCreated')): ?>
            <time class="item-time label label-info" datetime="<?php echo JHtml::_('date', $item->created, 'c'); ?>"><?php echo JHtml::_('date', $item->created, JText::_('DATE_FORMAT_LC3')) ;?>
            </time>
            <?php endif; ?>
            <?php if($params->get('itemAuthorAvatar')): ?>
                <a class="k2Avatar item-author-avatar" rel="author" href="<?php echo $item->authorLink; ?>">
                <img src="<?php echo $item->authorAvatar; ?>" alt="<?php echo K2HelperUtilities::cleanHtml($item->author); ?>" style="width:<?php echo $avatarWidth; ?>px;height:auto;" />
                </a>
            <?php endif; ?>
            
            <!-- Plugins: BeforeDisplay -->
            <?php echo $item->event->BeforeDisplay; ?>

            <!-- K2 Plugins: K2BeforeDisplay -->
            <?php echo $item->event->K2BeforeDisplay; ?>
            
            <?php if($params->get('itemImage') && isset($item->image)): ?>
                <a class="moduleItemImage" href="<?php echo $item->link; ?>" title="<?php echo JText::_('K2_CONTINUE_READING'); ?> &quot;<?php echo K2HelperUtilities::cleanHtml($item->title); ?>&quot;">
                <img src="<?php echo $item->image; ?>" alt="<?php echo K2HelperUtilities::cleanHtml($item->title); ?>"/>
                </a>
            <?php endif; ?>
            
            <?php if($params->get('itemTitle')): ?>
                <h4 class="item-title">
                <a href="<?php echo $item->link; ?>" itemprop="url">
                    <span itemprop="name">
                        <?php echo $item->title; ?>
                    </span>
                </a>
                </h4>
            <?php endif; ?>
            
            <!-- Plugins: AfterDisplayTitle -->
            <?php echo $item->event->AfterDisplayTitle; ?>

            <!-- K2 Plugins: K2AfterDisplayTitle -->
            <?php echo $item->event->K2AfterDisplayTitle; ?>

            <!-- Plugins: BeforeDisplayContent -->
            <?php echo $item->event->BeforeDisplayContent; ?>

            <!-- K2 Plugins: K2BeforeDisplayContent -->
            <?php echo $item->event->K2BeforeDisplayContent; ?>

            <?php if($params->get('itemIntroText')): ?>
                <div class="item-intro">
                <?php echo $item->introtext; ?>
                </div>
            <?php endif; ?>
            
            <?php if($params->get('itemExtraFields') && count($item->extra_fields)): ?>
                <div class="moduleItemExtraFields">
                  <b><?php echo JText::_('K2_ADDITIONAL_INFO'); ?></b>
                  <ul>
                    <?php foreach ($item->extra_fields as $extraField): ?>
                            <?php if($extraField->value != ''): ?>
                            <li class="type<?php echo ucfirst($extraField->type); ?> group<?php echo $extraField->group; ?>">
                                <?php if($extraField->type == 'header'): ?>
                                <h4 class="moduleItemExtraFieldsHeader"><?php echo $extraField->name; ?></h4>
                                <?php else: ?>
                                <span class="moduleItemExtraFieldsLabel"><?php echo $extraField->name; ?></span>
                                <span class="moduleItemExtraFieldsValue"><?php echo $extraField->value; ?></span>
                                <?php endif; ?>
                                <div class="clearfix"></div>
                            </li>
                            <?php endif; ?>
                    <?php endforeach; ?>
                  </ul>
                </div>
            <?php endif; ?>

            <div class="clearfix"></div>

            <?php if($params->get('itemVideo')): ?>
                <div class="item-video">
                <?php echo $item->video ; ?>
                <span class="item-video-caption"><?php echo $item->video_caption ; ?></span>
                <span class="item-video-credits"><?php echo $item->video_credits ; ?></span>
                </div>
            <?php endif; ?>
            
            <div class="clearfix"></div>
            <!-- Plugins: AfterDisplayContent -->
            <?php echo $item->event->AfterDisplayContent; ?>

            <!-- K2 Plugins: K2AfterDisplayContent -->
            <?php echo $item->event->K2AfterDisplayContent; ?>
            <hr />
            <?php if($params->get('itemCategory')): ?>
                &nbsp;<span class="fa fa-folder"></span> <a class="item-category" href="<?php echo $item->categoryLink; ?>"><?php echo $item->categoryname; ?></a>
            <?php endif; ?>

            <?php if($params->get('itemTags') && count($item->tags)>0): ?>
                <div class="item-tags">
                &nbsp;<span class="fa fa-tags"></span>
                <?php foreach ($item->tags as $tag): ?>
                <a href="<?php echo $tag->link; ?>"><?php echo $tag->name; ?></a>
                <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <?php if($params->get('itemAttachments') && count($item->attachments)): ?>
                <div class="item-attachments">
                    <?php foreach ($item->attachments as $attachment): ?>
                    <a title="<?php echo K2HelperUtilities::cleanHtml($attachment->titleAttribute); ?>" href="<?php echo $attachment->link; ?>"><?php echo $attachment->title; ?></a>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

			<?php if($params->get('itemCommentsCounter') && $componentParams->get('comments')): ?>
                &nbsp;<span class="fa fa-comments"></span>
				<?php if(!empty($item->event->K2CommentsCounter)): ?>
					<!-- K2 Plugins: K2CommentsCounter -->
					<?php echo $item->event->K2CommentsCounter; ?>
				<?php else: ?>
					<?php if($item->numOfComments>0): ?>
					<a class="item-comments" href="<?php echo $item->link.'#itemCommentsAnchor'; ?>">
						<?php echo $item->numOfComments; ?> <?php if($item->numOfComments>1) echo JText::_('K2_COMMENTS'); else echo JText::_('K2_COMMENT'); ?>
					</a>
					<?php else: ?>
					<a class="item-comments" href="<?php echo $item->link.'#itemCommentsAnchor'; ?>">
						<?php echo JText::_('K2_BE_THE_FIRST_TO_COMMENT'); ?>
					</a>
					<?php endif; ?>
				<?php endif; ?>
			<?php endif; ?>

			<?php if($params->get('itemHits')): ?>
			<span class="item-hits">
				&nbsp;<span class="fa fa-eye"></span> <?php echo $item->hits; ?>
			</span>
			<?php endif; ?>

			<?php if($params->get('itemReadMore') && $item->fulltext): ?>
			&nbsp;&nbsp;<a class="item-readmore" href="<?php echo $item->link; ?>">
				<span class="fa fa-arrow-right"></span> <?php echo JText::_('K2_READ_MORE'); ?>
			</a>
			<?php endif; ?>
            <!-- Plugins: AfterDisplay -->
            <?php echo $item->event->AfterDisplay; ?>

            <!-- K2 Plugins: K2AfterDisplay -->
            <?php echo $item->event->K2AfterDisplay; ?>

            <div class="clearfix"></div>
        </div>
    </article>
<?php endforeach; ?>
<?php endif; ?>