<?php
if (!isset($lang)) {$lang  = 1;}
$layoutid = 1;
if (isset($customisation_general["layoutid"][$store_id])) {
    $layoutid = $customisation_general["layoutid"][$store_id];
}
?>
<?php if ($layoutid == 2 || $layoutid == 12) : ?>
<div class="divider divider--md visible-sm visible-xs"></div>
<div class="content-sm">
 <?php endif; ?>
<!-- title -->
<?php if (!isset($c_class)) : ?>
<div class="title-with-button">
    <div class="carousel-products__button pull-right"> <span class="btn-prev"></span> <span class="btn-next"></span> </div>
<?php endif; ?>
    <h2 class="text-uppercase title-under <?php echo ($layoutid == 3 || $layoutid == 5 || $layoutid == 10 || $layoutid == 11 ? 'text-center' : (isset($c_class) ? 'text-left' : 'text-left pull-left')); ?> <?php echo ($layoutid == 2 || $layoutid == 12 ? 'title-default' : ''); ?>"><?php echo (isset($category_name) && $category_name != '' ? $category_name : $heading_title); ?></h2>

<?php if (!isset($c_class)) : ?></div><?php endif; ?>

<!-- /title -->
<!-- carousel -->
<div class="carousel-products row <?php echo (isset($c_class) ? $c_class.' slick-arrow-top' : ''); ?>" id="carousel<?php echo $slider_id; ?>">

<?php
foreach ($products as $product) :
    /*default variables*/
    if (!isset($product['quantity'])) {$product['quantity'] = 1;}
    if (!isset($product['date_available'])) {$product['date_available'] = 0;}
    if (!isset($product['image_quickview'])) {$product['image_quickview'] = $product['thumb'];}
    if (!isset($product['short_description'])) {$product['short_description'] = $product['description'];}
    if (!isset($product['discount'])) {$product['discount'] = '';}
    if (!isset($product['stock'])) {$product['stock'] = '';}
    if (!isset($product['brand'])) {$product['brand'] = '';}

    $sold_status = (isset($customisation_products["outstock_status"][$store_id]) && $customisation_products["outstock_status"][$store_id] != 0 && $product['quantity'] <= 0) || (!isset($customisation_products["outstock_status"][$store_id]) && $product['quantity'] <= 0);
?>


<div class="col-lg-3">
<!-- product -->
<div class="product <?php echo ((!isset($customisation_slider[$type_of_slider.'_zoom'][$store_id]) || $customisation_slider[$type_of_slider.'_zoom'][$store_id] == 'z') ? 'product--zoom' : ''); ?> <?php echo ($sold_status ? 'sold-out' : 'sold'); ?>">
<div class="product__inside">
<!-- product image -->
<div class="product__inside__image">

    <?php if (isset($additional_images) && !$sold_status && (!isset($customisation_slider[$type_of_slider.'_carousel'][$store_id]) || $customisation_slider[$type_of_slider.'_carousel'][$store_id] == 1)) { ?>
    <!-- product image carousel -->
    <div class="product__inside__carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <a href="<?php echo $product['href']; ?>"><img width="<?php echo $product['width_settings']; ?>" height="<?php echo $product['height_settings']; ?>" src="<?php echo str_replace(' ', '%20',$product['thumb']); ?>" alt="<?php echo $product['name']; ?>" title="<?php echo $product['name']; ?>"></a>
            </div>
            <?php foreach ($additional_images as $additional_image) :  ?>
            <div class="item">
                <a href="<?php echo $product['href']; ?>"><img class="product-retina" width="<?php echo $product['width_settings']; ?>" height="<?php echo $product['height_settings']; ?>" src="<?php echo str_replace(' ', '%20',$additional_image['image']); ?>" data-image2x="<?php echo str_replace(' ', '%20',$additional_image['image2x']); ?>" alt="<?php echo $product['name']; ?>"></a>
            </div>
                <?php endforeach; ?>

        </div>
        <!-- Controls -->
        <a class="carousel-control next"></a> <a class="carousel-control prev"></a>
    </div>
    <!-- /product image carousel -->

    <?php } else { ?>
    <a href="<?php echo $product['href']; ?>"><img src="<?php echo str_replace(' ', '%20',$product['thumb']); ?>" alt="<?php echo $product['name']; ?>" title="<?php echo $product['name']; ?>"></a>
    <?php } ?>
    <!-- label sold-out -->
    <?php if ($sold_status) : ?>
    <div class="product__label--sold-out"> <span><?php echo $product['stock_status']; ?></span></div>
    <?php endif; ?>
    <!-- /label sold-out -->

    <!-- quick-view -->
    <?php if (!isset($customisation_products["quick_status"][$store_id]) || $customisation_products["quick_status"][$store_id] != 0) : ?>

    <!--variables for quick view-->
    <?php
    $image = urlencode($product['image_quickview']);
    $description = urlencode($product['short_description']);
    $product_href = urlencode($product['href']);
    $product_name = urlencode($product['name']);
    $product_id = urlencode($product['product_id']);

    if (isset($customisation_products["product_catalog_mode"][$store_id]) && ($customisation_products["product_catalog_mode"][$store_id] == 1)) :
        $product['price'] = '';
        $product['special'] = '';
    endif;

    ?>

    <!--variables for quick view-->


    <?php if ($product['special']) { ?>
                                                <a class="quick-view" href="catalog/view/theme/quick-view.php?product_id=<?php echo $product_id; ?>&amp;product_href=<?php echo $product_href; ?>&amp;image_main=<?php echo $image; ?>&amp;product_name=<?php echo $product_name; ?>&amp;product_price=<?php echo urlencode($product['price']); ?>&amp;product_special=<?php echo urlencode($product['special']); ?>&amp;product_rating=<?php echo urlencode($product['rating']); ?>&amp;product_description_short=<?php echo $description; ?>&amp;product_tax=<?php echo urlencode($product['tax']); ?>&amp;text_tax=<?php echo urlencode($text_tax); ?>&amp;stock=<?php echo $product['stock']; ?>&amp;button_cart=<?php echo urlencode($button_cart); ?>&amp;button_wishlist=<?php echo urlencode($button_wishlist); ?>&amp;button_compare=<?php echo urlencode($button_compare); ?>&amp;brand_image=<?php echo $product['brand']; ?>">
                                                    <?php } else { ?>
                                                <a class="quick-view" href="catalog/view/theme/quick-view.php?product_id=<?php echo $product_id; ?>&amp;product_href=<?php echo $product_href; ?>&amp;image_main=<?php echo $image; ?>&amp;product_name=<?php echo $product_name; ?>&amp;product_price=<?php echo urlencode($product['price']); ?>&amp;product_rating=<?php echo urlencode($product['rating']); ?>&amp;product_description_short=<?php echo $description; ?>&amp;product_tax=<?php echo urlencode($product['tax']); ?>&amp;text_tax=<?php echo urlencode($text_tax); ?>&amp;stock=<?php echo $product['stock']; ?>&amp;button_cart=<?php echo urlencode($button_cart); ?>&amp;button_wishlist=<?php echo urlencode($button_wishlist); ?>&amp;button_compare=<?php echo urlencode($button_compare); ?>&amp;brand_image=<?php echo $product['brand']; ?>">
                                            <?php } ?>

    <b>
        <span class="icon icon-visibility"></span>
        <?php echo (isset($customisation_general[$lang]["quick_view_text"][$store_id]) ? $customisation_general[$lang]["quick_view_text"][$store_id] : 'Quick view'); ?>
    </b>
                                                </a>
                                        <?php endif; ?>
    <!-- /quick-view -->

    <!-- countdown_box -->
    <?php
    if (!isset($customisation_products["countdown_status"][$store_id]) || ($customisation_products["countdown_status"][$store_id] != 0)) :
        if ($product['special']) :
            if (isset($product['special_end_date'])) : $special_end_date = $product['special_end_date']; endif;
            if (isset($special_end_date)) :
            $full_date = explode("-", $special_end_date);
                $year_end = $full_date[0];
                if($full_date[1] < 10) {
                    $month_end = (int)$full_date[1];
                } else {
                    $month_end = $full_date[1];
                }
                $day_end = $full_date[2];
                if ($day_end !== 0 && $year_end !==0 && $month_end !== 0) :


                if (isset($customisation_translation[$lang]["countdown_title_day"][$store_id]) && $customisation_translation[$lang]["countdown_title_day"][$store_id] != ''){
                        $label_day = $customisation_translation[$lang]["countdown_title_day"][$store_id];
                    } else {
                        $label_day = 'Day';
                    }

                    if (isset($customisation_translation[$lang]["countdown_title_hour"][$store_id]) && $customisation_translation[$lang]["countdown_title_hour"][$store_id] != ''){
                        $label_hour = $customisation_translation[$lang]["countdown_title_hour"][$store_id];
                    } else {
                        $label_hour = 'Hour';
                    }
                    if (isset($customisation_translation[$lang]["countdown_title_minute"][$store_id]) && $customisation_translation[$lang]["countdown_title_minute"][$store_id] != ''){
                        $label_minute = $customisation_translation[$lang]["countdown_title_minute"][$store_id];
                    } else {
                        $label_minute = 'Min';
                    }
                    if (isset($customisation_translation[$lang]["countdown_title_second"][$store_id]) && $customisation_translation[$lang]["countdown_title_second"][$store_id] != ''){
                        $label_second = $customisation_translation[$lang]["countdown_title_second"][$store_id];
                    } else {
                        $label_second = 'Sec';
                    }
                    ?>
                    <script type="text/javascript">
                        function countDown2(){
                            var austDay = new Date(<?php echo $year_end; ?>, <?php echo $month_end; ?> - 1, <?php echo $day_end; ?>);
                            $j('.defaultCountdown-<?php echo $product['product_id']; ?>').countdown({
                                until: austDay,
                                labels: ['Year', 'Month', 'Week', '<?php echo $label_day; ?>', '<?php echo $label_hour; ?>', '<?php echo $label_minute; ?>', '<?php echo $label_second; ?>']
                            });

                        }
                    </script>

                    <div class="countdown_box">
                        <div class="countdown_inner">
                            <div class="defaultCountdown-<?php echo $product['product_id']; ?>"></div>
                        </div>
                    </div>
                    <?php
                endif;
            endif;
        endif;
    endif;

    ?>
    <!-- /countdown_box -->
</div>
<!-- /product image -->
<!-- label news -->
    <?php
    if (!isset($customisation_products["new_status"][$store_id]) || ($customisation_products["new_status"][$store_id] != 0)) :

        $day_range = 100;
        if (isset($customisation_products["days"][$store_id]) && $customisation_products["days"][$store_id] != '') {
            $days = $customisation_products["days"][$store_id];
        } else {
            $days = $day_range;
        }
        $day_number_to_range = date( "Y-m-d" ,  strtotime("-$days day")  );
        if ($product['date_available'] >= $day_number_to_range) :

        ?>
        <div class="product__label product__label--right product__label--new">
            <span><?php echo (isset($customisation_general[$lang]["new_text"][$store_id]) ? $customisation_general[$lang]["new_text"][$store_id] : 'new'); ?></span>
        </div>
            <?php
        endif;
    endif;
    ?>
<!-- /label news -->
<!-- label sale -->
    <?php if (!isset($customisation_products["sale_status"][$store_id]) || ($customisation_products["sale_status"][$store_id] != 0)) : ?>
    <?php if ($product['price'] && $product['special']) : ?>
    <div class="product__label product__label--left product__label--sale">
                                                <span>
                                                    <?php echo (isset($customisation_general[$lang]["sale_text"][$store_id]) ? $customisation_general[$lang]["sale_text"][$store_id] : 'SALE'); ?>
                                                    <?php if (!isset($customisation_products["discount_status"][$store_id]) || ($customisation_products["discount_status"][$store_id] != 0)) : ?>
                                                    <br>
                                                    <?php echo $product['discount']; ?>
                                                    <?php endif; ?>
                                                </span>
    </div>
        <?php endif; ?>
    <?php endif; ?>
<!-- /label sale -->
<!-- product name -->
<div class="product__inside__name">
    <h2><a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a></h2>
</div>
<!-- /product name -->
<!-- product description -->
<!-- visible only in row-view mode -->
    <?php if ($listing == 1) : ?>
<div class="product__inside__description row-mode-visible"><?php echo $product['description']; ?></div>
    <?php endif; ?>
<!-- /product description -->
<!-- product price -->
<?php if (!isset($customisation_products["product_catalog_mode"][$store_id]) || ($customisation_products["product_catalog_mode"][$store_id] != 1)) : ?>
    <div class="product__inside__price price-box">
        <?php if ($product['price']) : ?>
        <?php if (!$product['special']) { ?>
            <?php echo $product['price']; ?>
            <?php } else { ?>
            <?php echo $product['special']; ?><span class="price-box__old"><?php echo $product['price']; ?></span>
            <?php } ?>
        <?php endif; ?>
    </div>
<?php endif; ?>
<!-- /product price -->
<!-- product review -->
<!-- visible only in row-view mode -->
    <?php if ($listing == 1) : ?>
    <?php if ($product['rating']) : ?>
    <div class="product__inside__review row-mode-visible">
        <div class="rating row-mode-visible">
            <?php for ($i = 1; $i <= 5; $i++) : ?>
            <?php if ($product['rating'] < $i) { ?>
                <span class="icon-star empty-star"></span>
                <?php } else { ?>
                <span class="icon-star"></span>
                <?php } ?>
            <?php endfor; ?>
        </div>
    </div>
        <?php endif; ?>
    <?php endif; ?>
<!-- /product review -->
<div class="product__inside__hover">
    <!-- product info -->
    <div class="product__inside__info">
        <div class="product__inside__info__btns">
            <?php if (!isset($customisation_products["product_catalog_mode"][$store_id]) || ($customisation_products["product_catalog_mode"][$store_id] != 1)) : ?>
                <a onclick="cart_theme.add('<?php echo $product['product_id']; ?>');" class="btn btn--ys btn--xl">
                    <span class="icon icon-shopping_basket"></span> <?php echo $button_cart; ?>
                </a>
            <?php endif; ?>
            <a  title="<?php echo $button_wishlist; ?>" onclick="wishlist_theme.add('<?php echo $product['product_id']; ?>');" class="btn btn--ys btn--xl visible-xs"><span onclick="wishlist_theme.add('<?php echo $product['product_id']; ?>');" class="icon icon-favorite_border"></span></a>
            <a  title="<?php echo $button_compare; ?>" onclick="compare_theme.add('<?php echo $product['product_id']; ?>');" class="btn btn--ys btn--xl visible-xs"><span onclick="compare_theme.add('<?php echo $product['product_id']; ?>');" class="icon icon-sort"></span></a>

        </div>
        <ul class="product__inside__info__link hidden-xs">
            <li class="text-right">
                <span onclick="wishlist_theme.add('<?php echo $product['product_id']; ?>');" class="icon icon-favorite_border  tooltip-link"></span>
                <a  title="<?php echo $button_wishlist; ?>" onclick="wishlist_theme.add('<?php echo $product['product_id']; ?>');"><span class="text"><?php echo $button_wishlist; ?></span></a>
            </li>
            <li class="text-left">
                <span onclick="compare_theme.add('<?php echo $product['product_id']; ?>');" class="icon icon-sort  tooltip-link"></span>
                <a  title="<?php echo $button_compare; ?>" onclick="compare_theme.add('<?php echo $product['product_id']; ?>');" class="compare-link"><span class="text"><?php echo $button_compare; ?></span></a>
            </li>
        </ul>
    </div>
    <!-- /product info -->
    <!-- product rating -->

    <div class="rating row-mode-hide">
    <?php if ($product['rating']) : ?>
        <?php for ($i = 1; $i <= 5; $i++) : ?>
        <?php if ($product['rating'] < $i) { ?>
            <span class="icon-star empty-star"></span>
            <?php } else { ?>
            <span class="icon-star"></span>
            <?php } ?>
        <?php endfor; ?>
        <?php endif; ?>

    </div>
    <!-- /product rating -->
</div>
</div>
</div>
<!-- /product -->
</div>

    <?php endforeach; ?>

</div>
<?php if ($layoutid == 2 || $layoutid == 12) : ?>
</div>
 <?php endif; ?>
