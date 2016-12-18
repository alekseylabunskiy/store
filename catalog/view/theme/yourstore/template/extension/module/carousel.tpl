<?php
/*layout id*/
?>

<div class="content <?php echo ($layoutid == 6 ? 'container-fluid fill-bg-custom' : 'section-indent-bottom'); ?>">
    <div class="container <?php echo ($layoutid == 6 ? '' : 'container-reset'); ?>">
        <div class="row">
            <div class="brands-carousel" id="carousel<?php echo $module; ?>">
                <?php foreach ($banners as $banner) : ?>
                <div>
                    <?php if ($banner['link']) { ?>
                    <a href="<?php echo $banner['link']; ?>"><img src="<?php echo $banner['image']; ?>" alt="<?php echo $banner['title']; ?>" class="img-responsive" /></a>
                    <?php } else { ?>
                    <img src="<?php echo $banner['image']; ?>" alt="<?php echo $banner['title']; ?>" class="img-responsive" />
                    <?php } ?>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    //$j(document).ready(function() {
        brandsCarousel($j('.brands-carousel'));
    //})
</script>
