<?php
$ftype = 'i';
 ?>

<?php if ($ftype == 'i') { ?>
<!-- col-left -->
<div class="col-xs-offset-0  col-xs-12 col-sm-offset-2  col-sm-8 col-md-9 col-md-offset-0">
    <div class="row">
        <div class="col-sm-12 col-md-4">
            <a href="#" class="banner zoom-in">
									<span class="figure">
										<img src="images/custom/collections-img-01.jpg" alt=""/>
										<span class="figcaption">
											<span class="block-table">
												<span class="block-table-cell">
													<span class="banner__title size40">men’s</span>
													<span class="btn btn--ys btn--xl">Shop now!</span>
												</span>
											</span>
										</span>
									</span>
            </a>
        </div>
        <div class="divider visible-sm visible-xs"></div>
        <div class="col-sm-12 col-md-8">
            <a href="#" class="banner zoom-in">
									<span class="figure">
										<img src="images/custom/collections-img-02.jpg" alt=""/>
										<span class="figcaption">
											<span class="block-table">
												<span class="block-table-cell">
													<span class="banner__title size40">women’s</span>
													<span class="btn btn--ys btn--xl">Shop now!</span>
												</span>
											</span>
										</span>
									</span>
            </a>
        </div>
    </div>
    <div class="divider"></div>
    <div class="row">
        <div class="col-sm-12 col-md-8">
            <a href="#" class="banner zoom-in">
									<span class="figure">
										<img src="images/custom/collections-img-03.jpg" alt=""/>
										<span class="figcaption">
											<span class="block-table">
												<span class="block-table-cell">
													<span class="banner__title size40">lingerie</span>
													<span class="btn btn--ys btn--xl">Shop now!</span>
												</span>
											</span>
										</span>
									</span>
            </a>
        </div>
        <div class="divider visible-sm visible-xs"></div>
        <div class="col-sm-12 col-md-4">
            <a href="#" class="banner zoom-in">
									<span class="figure">
										<img src="images/custom/collections-img-04.jpg" alt=""/>
										<span class="figcaption">
											<span class="block-table">
												<span class="block-table-cell">
													<span class="banner__title size40">jackets</span>
													<span class="btn btn--ys btn--xl">Shop now!</span>
												</span>
											</span>
										</span>
									</span>
            </a>
        </div>
        <div class="divider visible-sm visible-xs"></div>
    </div>
</div>
<!-- /col-left -->
<!-- col-right -->
<div class="col-xs-12 col-sm-offset-2  col-sm-8 col-sm-offset-2 col-md-3 col-md-offset-0">
    <a href="#" class="banner zoom-in">
							<span class="figure">
								<img src="images/custom/collections-img-05.jpg" alt=""/>
								<span class="figcaption">
									<span class="block-table">
										<span class="block-table-cell">
											<span class="banner__title size40">aCCESSORIES</span>
											<span class="btn btn--ys btn--xl">Shop now!</span>
										</span>
									</span>
								</span>
							</span>
    </a>
    <div class="divider"></div>
    <a href="#" class="banner zoom-in">
							<span class="figure">
								<img src="images/custom/collections-img-06.jpg" alt=""/>
								<span class="figcaption">
									<span class="block-table">
										<span class="block-table-cell">
											<span class="banner__title size40">outerwear</span>
											<span class="btn btn--ys btn--xl">Shop now!</span>
										</span>
									</span>
								</span>
							</span>
    </a>
</div>
<!-- /col-right -->

<?php } else { ?>

<?php if ($layoutid == 2 || $layoutid == 12) : ?><div class="divider divider--md0 visible-sm visible-xs"></div><?php endif; ?>
<section class="<?php echo ($layoutid == 2 || $layoutid == 12 ? 'content-md' : 'content'); ?>">
    <?php if ($layoutid != 2 && $layoutid != 12) : ?><div class="container"><?php endif; ?>
        <div class="row">
            <h3 class="hidden"><?php echo $heading_title; ?></h3>

            <div class="category-carousel">
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
        //bannerCarousel($j('.category-carousel'));
        bannerCarouselShort($j('.category-carousel'));
    })
</script>

<?php } ?>

