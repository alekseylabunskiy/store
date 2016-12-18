<?php
$layoutid = 1;
if (isset($customisation_general["layoutid"][$store_id])) {
$layoutid = $customisation_general["layoutid"][$store_id];
}
/* layout id */

?>
<?php if ($layoutid == 2 || $layoutid == 12) { ?>
<div class="<?php echo ($layoutid == 12 ? 'fill-bg' : 'fill-bg-custom'); ?> aside-inner color-white">
    <?php if ($show_title) : echo '<h4 class="text-center text-uppercase color-white mega">'.$heading_title.'</h4>'; endif; ?>
    <div class="testimonialsAsid nav-dot nav-dot-invert">
        <?php foreach ($testimonialss as $testimonials) : ?>
        <!-- slide-->
        <?php if ($testimonials['show_description']) { ?><a href="<?php echo $testimonials['href']; ?>" class="link-hover-block"><?php } else { ?><div class="link-hover-block"><?php } ?>
            <div class="text-center">
                <?php if ($show_image) : ?>
                    <img class="img-responsive-inline" src="<?php echo $testimonials['thumb']; ?>" alt="" />
                <?php endif; ?>
                <p>
                    <span class="icon"></span> <?php echo $testimonials['intro']; ?>
                </p>
                <p><?php echo $testimonials['title']; ?></p>
            </div>
        <?php if ($testimonials['show_description']) { ?></a><?php } else { ?></div><?php } ?>
        <!-- /slide-->
        <?php endforeach; ?>
    </div>
</div>
<div class="divider divider--lg"></div>
<script type="text/javascript">
    $j(document).ready(function() {
        testimonialsAsid($j('.testimonialsAsid'),1,1,1,1,1);//TESTIMONIALS
    })
</script>

<?php } else { ?>
<?php if ($layoutid != 7) : ?>
<section class="content <?php echo ($num_columns == 1 ? 'content-bg-1 fixed-bg' : ''); ?>">
    <div class="container">
        <div class="row">
<?php endif; ?>

            <?php
            if ($show_title) :
            if ($layoutid == 7) {
            echo '<h2 class="text-left text-uppercase title-under">'.$heading_title.'</h2>';
            } else {
            echo '<h2 class="text-center text-uppercase title-under">'.$heading_title.'</h2>';
            }

            endif; ?>
            <div class="<?php echo ($layoutid == 7 ? 'slider-blog-layout1' : ($num_columns == 1 ? 'slider-blog slick-arrow-bottom' : 'slider-blog-layout1')); ?>">
                <?php foreach ($testimonialss as $testimonials) : ?>
                <!-- slide-->
                    <?php if ($testimonials['show_description']) { ?><a href="<?php echo $testimonials['href']; ?>" class="link-hover-block"><?php } else { ?><div class="link-hover-block"><?php } ?>
                    <div class="slider-blog__item">
                        <div class="<?php echo ($layoutid == 7 ? '' : ($num_columns == 1 ? 'row' : 'col-md-12')); ?>">
                            <?php if ($show_image) : ?>
                            <div class="<?php echo ($layoutid == 7 ? '' : ($num_columns == 1 ? 'col-xs-12 col-sm-2 col-sm-offset-3 ' : '')); ?> box-foto">
                                <img src="<?php echo $testimonials['thumb']; ?>" alt="" />
                            </div>
                            <?php endif; ?>
                            <div class="<?php echo ($layoutid == 7 ? 'slider-blog-layout1' : ($num_columns == 1 ? 'col-xs-12 col-sm-5 col-xl-4 ' : '')); ?> box-data">
                                <h6><?php echo $testimonials['title']; ?></h6>
                                <?php echo $testimonials['intro']; ?>
                            </div>
                        </div>
                    </div>
                    <?php if ($testimonials['show_description']) { ?></a><?php } else { ?></div><?php } ?>
                <!-- /slide-->
                <?php endforeach; ?>
            </div>





<?php if ($layoutid != 7) : ?>
        </div>
    </div>
</section>
<?php endif; ?>

<script type="text/javascript">
    //$j(document).ready(function() {
        <?php if ($num_columns == 2) { ?>
            blogCarousel($j('.slider-blog-layout1'),3,2,1,1,1);
        <?php } elseif ($num_columns == 3) { ?>
            blogCarousel($j('.slider-blog-layout1'),4,3,1,1,1);
        <?php } else { ?>
            blogCarousel($j('.slider-blog'),1,1,1,1,1);
        <?php } ?>
    //})
</script>

<?php } ?>

