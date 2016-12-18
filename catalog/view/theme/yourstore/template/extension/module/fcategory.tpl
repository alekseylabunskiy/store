<?php if ($layoutid == 2 || $layoutid == 12) : ?><div class="divider divider--md0 visible-sm visible-xs"></div><?php endif; ?>
<section class="<?php echo ($layoutid == 2 || $layoutid == 12 ? 'content-md' : 'content'); ?>">
    <?php if ($layoutid != 2 && $layoutid != 12) : ?><div class="container"><?php endif; ?>
        <div class="row">
            <h3 class="hidden"><?php echo $heading_title; ?></h3>

            <div class="category-carousel main-layout">
                <?php foreach ($categories as $category) : ?>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <a href="<?php echo $category['href']; ?>" class="<?php echo ($layoutid == 12 ? 'banner-layout-1' : 'banner'); ?> zoom-in">
									<span class="figure">
										<img src="<?php echo $category['thumb']; ?>" data-image2x="<?php echo $category['thumb']; ?>" alt="<?php echo $category['name']; ?>"/>
										<span class="figcaption">
                                            <?php if ($layoutid != 12) : ?>
											    <span class="block-table">
												    <span class="block-table-cell">
                                            <?php endif; ?>

													<span class="banner__title <?php echo ($layoutid == 12 ? 'text-uppercase' : ''); ?> size<?php echo ($layoutid == 2 || $layoutid == 12 ? '6' : '5'); ?>">
                                                        <?php echo $category['name']; ?>
                                                        <?php if ($layoutid == 12) : ?><span class="icon icon-navigate_next pull-right"></span><?php endif; ?>
                                                    </span>
                                                    <?php if ($layoutid != 2 && $layoutid != 12) : ?><span class="btn btn--ys btn--xl"><?php echo $category_button; ?></span><?php endif; ?>

                                            <?php if ($layoutid != 12) : ?>
                                                    </span>
											    </span>
                                            <?php endif; ?>
										</span>
									</span>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    <?php if ($layoutid != 2 && $layoutid != 12) : ?></div><?php endif; ?>
</section>
<script type="text/javascript">
    $j(document).ready(function() {
        bannerCarousel($j('.category-carousel'));
        bannerCarouselShort($j('.category-carousel'));
    })
</script>


