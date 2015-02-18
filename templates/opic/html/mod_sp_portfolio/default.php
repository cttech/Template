<?php
/*
# SP Portfolio - Simple Portfolio module by JoomShaper.com
# -------------------------------------------------------------
# Author    JoomShaper http://www.joomshaper.com
# Copyright (C) 2010 - 2013 JoomShaper.com. All Rights Reserved.
# @license - GNU/GPL V2 or Later
# Websites: http://www.joomshaper.com
*/
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
$count = count($items);
?>


<div id="sp-portfolio-module-<?php echo $uniqid; ?>" class="sp-portfolio default">

	<?php if($count>0){ ?>
		<?php if($show_filter){ ?>
		<div class="portfolio-filter animated" data-animation="fadeIn" data-animation-delay="400">
					<a href="#" data-filter="*" class="active"> <?php echo JText::_('All'); ?></a>
					<?php foreach (modSPPortfolioJHelper::getCategories($catid) as $key => $value) { ?>
						<a href="#" data-filter=".<?php echo modSPPortfolioJHelper::slug($value) ?>">
							<?php echo ucfirst(trim($value)); ?>
						</a>
				<?php } ?>
		</div>
	
		<?php } ?>
	<?php } ?>

	<?php if($count>0) { ?>
	<div class="portfolio-container animated" data-animation="fadeIn" data-animation-delay="700">
		<?php foreach($items as $index=>$item){ ?>
		<div class="opic-portfolio-item <?php echo modSPPortfolioJHelper::slug($item->tag); ?> visible">					
			<div class="portfolio-item">
				<?php //print_r($item);?>
				<!-- Image -->															
				<!-- <img src="images/portfolio/thumb/1.jpg" alt="image" class="img-responsive"/> -->
				<img src="<?php echo $item->image; ?>" alt="<?php echo $item->title; ?>" class="img-responsive"/>
				
			   	<!-- Item Caption -->
				<div class="portfolio-item-caption">
					<div class="portfolio-item-blur"></div>
					<div class="portfolio-item-text">
						<?php if($show_title){ ?>
								<?php if($linked_title){ ?>
									<h1 class="item-title"><a href="<?php echo $item->link; ?>"><?php echo $item->title; ?></a></h1>
								<?php }else { ?>
									<h1 class="item-title"><?php echo $item->title; ?></h1>
								<?php } ?>
							<?php } ?>
							<?php if($show_category){ ?>
								<p><?php echo $item->tag; ?></p>
							<?php } ?>
						<!-- <a class="sp-portfolio-preview" rel="lightbox" title="<?php //echo $item->title; ?>" href="<?php //echo $item->image_full; ?>"><i class="fa fa-external-link fa-2x"></i></a> -->
						<a class="sp-portfolio-preview" data-rel="prettyPhoto[gallery]" title="<?php echo $item->title; ?>" href="<?php echo $item->image_full; ?>"><i class="fa fa-external-link fa-2x"></i></a>
					</div>
				</div>
			</div>						
	</div>	
		<?php }?>
	</div>
		<?php if(($ajax_loader && $show_filter) && ($count!=$total)) { ?>
			<div class="sp-portfolio-loadmore">
				<a href="#" class="btn btn-primary btn-large">
					<i class="icon-spinner icon-spin"></i>
					<span>Load More</span>
				</a>
			</div>
		<?php } ?>

	<?php } else { ?>
		<p class="alert">No item found!</p>
	<?php } ?>
</div><!--/.sp-portfolio-->

<?php if ($show_filter){ ?>
	<script type="text/javascript">
		jQuery.noConflict();
		jQuery(function($){
			$(window).load(function(){
				var $gallery = $('.portfolio-container');
				
				<?php if($rtl) { ?>
					// RTL Support
					$.Isotope.prototype._positionAbs = function( x, y ) {
						return { right: x, top: y };
					};
				<?php } ?>

				$gallery.isotope({
					// options
					itemSelector : '.opic-portfolio-item',
					layoutMode : 'fitRows'
					<?php if($rtl) { ?>
						,transformsEnabled: false
					<?php } ?>	
				});
				
				$filter = $('.portfolio-filter');
				$selectors = $filter.find('>a');
					
				$filter.find('>a').click(function(){
					var selector = $(this).attr('data-filter');
					
					$selectors.removeClass('active');
					$(this).addClass('active');
					
					$gallery.isotope({ filter: selector });
					return false;
				});

				var $currentURL = '<?php echo  JURI::getInstance()->toString(); ?>';
				var $start = <?php echo $limit ?>;  // ajax start from last limit
				var $limit = <?php echo $ajaxlimit ?>;
				var $totalitem = <?php echo $total ?>;

				$('.sp-portfolio-loadmore > a').on('click', function(e){
					var $this = $(this);
					$this.removeClass('done').addClass('loading');
					$.get($currentURL, { moduleID: <?php echo $uniqid?>, start:$start, limit: $limit }, function(data){

						$start += $limit;

						var $newItems = $(data);
						$gallery.isotope( 'insert', $newItems );

						if( $totalitem <= $start ){
							$this.removeClass('loading').addClass('hide');

							// AUTOLOAD CODE BLOCK (MAY BE CHANGED OR REMOVED)
							if (!/android|iphone|ipod|series60|symbian|windows ce|blackberry/i.test(navigator.userAgent)) {
								jQuery(function($) {
								$("a[rel^='lightbox']").slimbox({/* Put custom options here */}, null, function(el) {
									return (this == el) || ((this.rel.length > 8) && (this.rel == el.rel));
								});
							});
							}
							////

							return false;
						} else {
							$this.removeClass('loading').addClass('done');
							////

							// AUTOLOAD CODE BLOCK (MAY BE CHANGED OR REMOVED)
							if (!/android|iphone|ipod|series60|symbian|windows ce|blackberry/i.test(navigator.userAgent)) {
								jQuery(function($) {
								$("a[rel^='lightbox']").slimbox({/* Put custom options here */}, null, function(el) {
									return (this == el) || ((this.rel.length > 8) && (this.rel == el.rel));
								});
							});
							}

						}

						});

					return false;
				});

			});
		});
	</script>
<?php }