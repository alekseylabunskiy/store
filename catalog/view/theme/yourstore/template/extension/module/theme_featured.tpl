<?php
$type_of_slider = 0;
$slider_id = 0;
$listing = 0;
$content_block = 1;
?>


<?php if (isset($left) && $left == 1) { ?>
<div class="collapse-block open coll-products-js">
    <h4 class="collapse-block__title"><?php echo (isset($category_name) && $category_name != '' ? $category_name : $heading_title); ?></h4>
    <div class="collapse-block__content coll-gallery">
        <div class="vertical-carousel vertical-carousel-2 offset-top-10">
            <?php foreach ($products as $product) : ?>
            <div class="vertical-carousel__item">
                <div class="vertical-carousel__item__image pull-left">
                    <a href="<?php echo $product['href']; ?>"><img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" title="<?php echo $product['name']; ?>" class="img-responsive" /></a>
                </div>

                <div class="vertical-carousel__item__title">
                    <h2><a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a></h2>
                </div>

                <?php if ($product['price']) { ?>
                    <div class="price-box">
                        <?php if (!$product['special']) { ?>
                        <?php echo $product['price']; ?>
                        <?php } else { ?>
                        <?php echo $product['special']; ?> <span class="price-box__old"><?php echo $product['price']; ?></span>
                        <?php } ?>
                        <?php if ($product['tax']) { ?>
                        <span class="price-tax"><?php echo $text_tax; ?> <?php echo $product['tax']; ?></span>
                        <?php } ?>
                    </div>
                    <?php } ?>

                    <?php if ($product['rating']) { ?>
                    <div class="rating">
                        <?php for ($i = 1; $i <= 5; $i++) { ?>
                        <?php if ($product['rating'] < $i) { ?>
                        <span class="icon-star"></span>
                        <?php } else { ?>
                        <span class="icon-star empty-star"></span>
                        <?php } ?>
                        <?php } ?>
                    </div>
                    <?php } ?>

                </div>
                <?php endforeach; ?>
            </div>

        </div>

</div>
    <script type="text/javascript">
        //$j(document).ready(function() {
            verticalCarousel($j('.vertical-carousel-2'),2);
        //})
    </script>
<?php
} elseif ($slider == 'h') {
include('catalog/view/theme/hor_carousel.php');
} elseif ($slider == 'b') {
$c_class = 'carouselСategories';
?>

<?php $type_of_slider = 'featured'; ?>
<div class="content">
    <div class="container">
        <?php include('catalog/view/theme/carousel.php'); ?>
    </div>
</div>

<?php
} elseif ($slider == 'd') {
include('catalog/view/theme/deal.php');
} elseif ($slider == 'r') {
include('catalog/view/theme/revolution.php');
} else {
include('catalog/view/theme/list.php');
}
?>


