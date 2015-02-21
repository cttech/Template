<?php
/**
*	@version	$Id: default.php 5 2014-10-15 08:53:51Z linhnt $
*	@package	K2 Content as Timeline (mod_k2latest_timeline)
*	@copyright	Copyright (C) 2009 - 2014 Omegatheme. All rights reserved.
*	@license	GNU/GPL version 2, or later
*	@website:	http://www.omegatheme.com
*	Support Forum - http://www.omegatheme.com/forum/
*/

defined( '_JEXEC' ) or die( 'Restricted access' );

/*
Class suffixes (none for default): timeline-left | timeline-right
*/
$doc = JFactory::getDocument();
$doc->addStyleSheet('modules/mod_k2latest_timeline/assets/css/k2timeline.css');

?>
<div id="k2latest_timeline_<?php echo $module->id; ?>" class="timeline timeline-<?php echo $moduleclass_sfx; ?>">
    <?php if($params->get('itemPreText')): ?>
	<p class="modulePretext"><?php echo $params->get('itemPreText'); ?></p>
    <div class="clearfix"></div>
	<?php endif; ?>
    
    <div class="timeline-breaker">
        <time datetime="<?php echo JHtml::_('date', JFactory::getDate(), 'c'); ?>"><?php echo JHtml::_('date', JFactory::getDate(), JText::_('DATE_FORMAT_LC3')) ;?></time>
    </div>
    
    <div class="timeline-posts">
    <?php require JModuleHelper::getLayoutPath('mod_k2latest_timeline', $params->get('getTemplate', 'Default') . DS .'default_ajax');?>
    </div>
    
    <div class="clearfix"></div>
    <input type="hidden" name="count_<?php echo $module->id; ?>" value="<?php echo $params->get('itemCount', 4); ?>"/>
    <div class="timeline_footer">
        <a href="#" id="timeline_loadmore_<?php echo $module->id; ?>" class="timeline-more-ajax btn btn-info"><?php echo JText::_('K2TL_VIEW_MORE') ?></a>
        <div class="clearfix"></div>
        <?php if($params->get('itemCustomLink')): ?>
        <a class="moduleCustomLink" href="<?php echo $params->get('itemCustomLinkURL'); ?>" title="<?php echo K2HelperUtilities::cleanHtml($itemCustomLinkTitle); ?>"><?php echo $itemCustomLinkTitle; ?></a>
        <?php endif; ?>
    </div>
</div>

<script>
(function ($) {
    $(document).on('click', '#timeline_loadmore_<?php echo $module->id; ?>', function (e) {
        e.preventDefault();
        var value = $('input[name=count_<?php echo $module->id; ?>]').val(),
        request = {
        'option' : 'com_ajax',
        'module' : 'k2latest_timeline',
        'cmd' : 'load',
        'data' : '<?php echo base64_encode($module->title); ?>',
        'format' : 'raw',
        'limitstart': value,
        'Itemid': '<?php echo JFactory::getApplication()->input->get('Itemid'); ?>'
        };
        $.ajax({
            type : 'GET',
            data : request,
            success: function (response) {
                $(response).appendTo($("#k2latest_timeline_<?php echo $module->id; ?> > .timeline-posts"));
                $('input[name=count_<?php echo $module->id; ?>]').val($("#k2latest_timeline_<?php echo $module->id; ?> .timeline-item").size());
            
            },
            error: function(response) {
                var data = '',
                obj = $.parseJSON(response.responseText);
                for(key in obj){
                    data = data + ' ' + obj[key] + '<br/>';
                }
                //console.log(data);
            }
        });
        return false;
    });
})(jQuery)
</script>