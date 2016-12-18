<?php if ($articles) : ?>
<?php
$layoutid = 1;
if (isset($customisation_general["layoutid"][$store_id])) {
$layoutid = $customisation_general["layoutid"][$store_id];
}
/* layout id */

?>
<?php if ($layoutid != 2 && $layoutid != 12) { ?>

<?php if ($layoutid != 7) : ?>
<div class="<?php echo ($layoutid == 11 ? ' carusel--parallax' : 'content'); ?>" <?php if ($layoutid == 11) : ?> data-image="image/catalog/custom/layout11/parallax-img-01.jpg" <?php endif; ?>>
    <div class="container container-reset">
        <div class="row">
<?php endif; ?>
            <?php if ($layoutid != 7): ?><div class="col-lg-12"><?php endif; ?>
                <!-- title -->
                <?php if ($layoutid == 7) { ?>
                    <h2 class="text-left text-uppercase title-under"><?php echo $heading_title;?></h2>
                <?php } else { ?>
                    <div class="title-with-button">
                        <div class="carousel-products__button pull-right">
                            <span class="btn-prev"></span>
                            <span class="btn-next"></span>
                        </div>
                        <h2 class="text-center text-uppercase title-under"><?php echo $heading_title;?></h2>
                    </div>

                <?php } ?>
                <!-- /title -->
                <?php } else { ?>
                <!-- title -->
                <h4 class="text-uppercase mega"><?php echo $heading_title;?></h4>
                <!-- /title -->
                <?php } ?>

            <?php if ($layoutid == 7) { ?>
            <!-- posts for layout 7 -->
            <?php foreach (array_slice($articles, -2) as $article) : ?>
            <div class="recent-post-box recent-post-col row">
                <div class="col-xs-6 col-sm-12 col-md-6">
                    <a href="<?php echo $article['href'];?>">
						<span class="figure">
                             <img class="product-retina" width="<?php echo $article['width_settings']; ?>" height="<?php echo $article['height_settings']; ?>" src="<?php echo $article['image']; ?>"  data-image2x="<?php echo $article['image2x']; ?>" alt="<?php echo $article['article_title']; ?>">
							 <span class="figcaption label-top-left">
											<span>
                                               <?php echo $article['date_added'];?>
											</span>
							  </span>
					    </span>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-12 col-md-6">
                    <div class="recent-post-box__text">
                        <h4><a href="<?php echo $article['href'];?>"><?php echo $article['article_title']; ?></a></h4>
                        <div class="author">by <b><?php echo $article['author_name']; ?></b></div>
                        <p><?php echo $article['short_description'];?></p>
                    </div>
                </div>
            </div>
            <div class="divider divider--sm"></div>
            <?php endforeach; ?>
            <!-- //posts for layout 7 -->

            <a href="<?php echo $show_all_href;?>" class="btn btn-top btn--ys btn--xl"><?php echo $show_all_text;?> </a>

            <?php } else { ?>

            <!-- carousel-new -->
                <div class="carousel-products row <?php echo ($layoutid == 2 || $layoutid == 12 ? 'layout-none-xl' : ''); ?>" id="postsCarousel">
                    <!-- slide-->
                    <?php foreach ($articles as $article) : ?>
                    <div class="<?php echo (isset($layoutid) && $layoutid == 2 ? 'col-sm-3 col-xl-6' : 'col-sm-12 col-xl-12'); ?>">
                        <!--  -->
                        <div class="recent-post-box">
                            <div class="<?php echo ($layoutid == 2 || $layoutid == 12 ? 'col-lg-12 col-xl-12' : 'col-lg-12 col-xl-6'); ?>">
                                <a href="<?php echo $article['href'];?>">
									<span class="figure">
                                        <?php //if ($article['image']): ?>
                                             <img class="product-retina" width="<?php echo $article['width_settings']; ?>" height="<?php echo $article['height_settings']; ?>" src="<?php echo $article['image']; ?>"  data-image2x="<?php echo $article['image2x']; ?>" alt="<?php echo $article['article_title']; ?>">
                                        <?php //endif; ?>

										<span class="figcaption label-top-left">
											<span>
                                               <?php echo $article['date_added'];?>
											</span>
										</span>
									</span>
                                </a>
                            </div>
                            <div class="<?php echo ($layoutid == 2 || $layoutid == 12 ? 'col-lg-12 col-xl-12' : 'col-lg-12 col-xl-6'); ?>">
                                <div class="recent-post-box__text">
                                    <h4><a href="<?php echo $article['href'];?>"><?php echo $article['article_title']; ?></a></h4>
                                    <div class="author">by <b><?php echo $article['author_name']; ?></b></div>
                                    <?php echo $article['short_description'];?>
                                    <a class="link-commet" href="<?php echo $article['href'];?>">
                                        <span class="icon icon-message "></span>
                                        <span class="number"><?php echo $article['total_comment'];?></span></a>
                                </div>
                            </div>
                        </div>
                        <!-- / -->
                    </div>
                    <?php endforeach; ?>
                    <!-- /slide -->
                </div>
                <!-- /carousel-new -->
            <?php } ?>

            <?php if ($layoutid != 2 && $layoutid != 12) { ?>

            <?php if ($layoutid != 7): ?>
        </div>

        </div>
    </div>
</div>
<?php endif; ?>
<?php } else { ?>
<div class="carousel-products__button button-bottom carousel-products__button_aside">
    <span class="btn-prev"></span>
    <span class="btn-next"></span>
</div>
<div class="divider divider--lg visible-xs"></div>
<?php } ?>


<script type="text/javascript">
    //$j(document).ready(function() {
        <?php if ($layoutid == 2 || $layoutid == 12) { ?>
            productCarousel($j('#postsCarousel'),1,1,1,1,1); //recent post, 3 - xl, 3 - lg, 3 - md, 2 - sm, 1 - xs
        <?php } else { ?>
            productCarousel($j('#postsCarousel'),2,3,3,2,1); // 3 - xl, 3 - lg, 3 - md, 2 - sm, 1 - xs
        <?php } ?>
    //})
</script>

<?php endif; ?>