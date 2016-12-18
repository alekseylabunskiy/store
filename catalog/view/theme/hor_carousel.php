<?php
$listing = 0;
$layoutid = 1;

if (isset($customisation_general["layoutid"][$store_id])) {
    $layoutid = $customisation_general["layoutid"][$store_id];
}

?>
<section class="content offset-top-0 ">
    <div class="container-fluid">
<!-- carousel -->
        <div class="row"  id="carouselHeader">
    <?php
foreach ($products as $product) :
    $sold_status = (isset($customisation_products["outstock_status"][$store_id]) && $customisation_products["outstock_status"][$store_id] != 0 && $product['quantity'] <= 0) || (!isset($customisation_products["outstock_status"][$store_id]) && $product['quantity'] <= 0);

    ?>

    <!-- item -->
    <div>
        <div class="carousel-product-popup">
            <!-- product image -->
            <div class="product__inside__image <?php echo ($sold_status ? 'sold-out' : 'sold'); ?>">
                <a href="<?php echo $product['href']; ?>"><img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" title="<?php echo $product['name']; ?>"></a>
                <!-- label sold-out -->
                <?php if ($sold_status) : ?>
                <div class="product__label--sold-out"> <span><?php echo $product['stock_status']; ?></span></div>
                <?php endif; ?>
                <!-- /label sold-out -->

            </div>
            <!-- /product image -->
            <!-- product hover-popup -->
            <div class="product-hover-popup">
                <!-- product name -->
                <div class="product__inside__name">
                    <h2><a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a></h2>
                </div>
                <!-- /product name -->
                <!-- product price -->
                <?php if (!isset($customisation_products["product_catalog_mode"][$store_id]) || ($customisation_products["product_catalog_mode"][$store_id] != 1)) : ?>
                    <?php if ($product['price']) : ?>
                        <div class="product__inside__price price-box">
                            <?php if (!$product['special']) { ?>
                                <?php echo $product['price']; ?>
                            <?php } else { ?>
                                <?php echo $product['special']; ?><span class="price-box__old"><?php echo $product['price']; ?></span>
                            <?php } ?>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
                <!-- /product price -->
                <!-- product button -->
                <?php if (!isset($customisation_products["product_catalog_mode"][$store_id]) || ($customisation_products["product_catalog_mode"][$store_id] != 1)) : ?>
                <a onclick="cart_theme.add('<?php echo $product['product_id']; ?>');" class="btn btn--ys btn--xl">
                    <span class="icon icon-shopping_basket"></span> <?php echo $button_cart; ?>
                </a>
                <?php endif; ?>
                <!-- /product button -->
            </div>
            <!-- /product hover-popup -->
        </div>
    </div>
    <!-- /item -->


    <?php endforeach; ?>


        </div>
    <!-- /carousel -->
    </div>
</section>

<script>
    $j(document).ready(function() {
        // Init All Carousel
        productCarousel($j('#carouselHeader'),4,4,3,2,1);
        mobileOnlyCarousel();
    })
</script>
