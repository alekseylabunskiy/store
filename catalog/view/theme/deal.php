<?php
if (count($products) > 1) {
    $products = array_shift($products);
}
$product = $products[0];
?>
<!-- banner-one-product -->
<div class="banner-one-product container-fluid fill-bg-lighter content offset-top-0 l9-one-product-js">
    <div class="row">
        <div class="col-sm-12 col-md-7">
            <!-- bannerOneProduct -->
            <div class="bannerOneProduct slick-arrow-bottom-wrapper">
                <!-- item -->
                <div><img class="img-responsive product-retina" width="<?php echo $product['width_settings']; ?>" height="<?php echo $product['height_settings']; ?>" src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" title="<?php echo $product['name']; ?>"></div>
                <!-- /item -->

                <?php
                if (isset($additional_images)) :
                    foreach ($additional_images as $additional_image) :
                    ?>
                <!-- item -->
                <div><img class="img-responsive product-retina"  width="<?php echo $product['width_settings']; ?>" height="<?php echo $product['height_settings']; ?>" src="<?php echo str_replace(' ', '%20',$additional_image['image']); ?>" data-image2x="<?php echo str_replace(' ', '%20',$additional_image['image2x']); ?>" alt="<?php echo $product['name']; ?>"></div>
                <!-- /item -->
                <?php endforeach; endif ?>

            </div>
            <!-- /bannerOneProduct -->
        </div>
        <div class="col-sm-12 col-md-5">
            <div class="product-content">
                <h2 class="title text-uppercase"><a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a></h2>
                <?php if (!isset($customisation_products["product_catalog_mode"][$store_id]) || ($customisation_products["product_catalog_mode"][$store_id] != 1)) : ?>
                    <?php if ($product['price']) : ?>
                         <div class="price">
                    <?php if (!$product['special']) { ?>
                        <?php echo $product['price']; ?>
                        <?php } else { ?>
                        <?php echo $product['special']; ?><span class="price-box__old"><?php echo $product['price']; ?></span>
                        <?php } ?>
                        </div>
                    <?php endif; ?>

                <div class="clearfix ">
                    <div class="pull-left">
                        <div class="number input-counter">
                            <span class="minus-btn">-</span>
                            <input type="text" name="quantity" value="1" size="2" id="input-quantity" class="input--ys qty-input" />
                            <span class="plus-btn">+</span>
                        </div>
                    </div>
                    <div class="pull-left">
                        <!-- product button -->
                        <a onclick="cart_theme.add('<?php echo $product['product_id']; ?>', $('#input-quantity').val());" class="btn btn-left btn--ys btn--l">
                            <span class="icon icon-shopping_basket"></span> <?php echo $button_cart; ?>
                        </a>
                        <!-- /product button -->
                    </div>
                </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</div>
<!-- /banner-one-product -->
<div class="content-big-indent">
    <div class="container text-center">
        <h3 class="text-uppercase font22 title-bottom-sm"><?php echo $title_about; ?></h3>
        <p class="font20 custom-font font-lighter width-center75 text-center"><?php echo $product['short_description']; ?></p>
    </div>
</div>




<script>
    $j(document).ready(function() {
        productCarousel($j('.bannerOneProduct'),1,1,1,1,1);
    })
</script>
