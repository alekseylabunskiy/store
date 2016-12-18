<?php
    echo $header;
    $youtube_video = isset($youtube_link) && $youtube_link != '' ? $youtube_link : false;
if (!isset($store_id)) {$store_id  = 0;}
if (!isset($image_size)) {$image_size  = 'default';}
    if (!isset($lang)) {$lang  = 1;}

?>

<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb breadcrumb--ys pull-left">
            <?php foreach ($breadcrumbs as $k => $breadcrumb) :  ?>
            <li class="<?php echo ($k == 0 ? 'home-link' : ($k == (count($breadcrumbs) - 1) ? 'active' : '')); ?>">
                <?php if ($k == (count($breadcrumbs) - 1)) {  echo $breadcrumb['text']; } else { echo '<a class="'.(count($breadcrumbs)-1).'" href="'.$breadcrumb['href'].'">'.$breadcrumb['text'].'</a>'; } ?>
            </li>
            <?php endforeach; ?>
        </ol>
    </div>
</div>

<?php if ($image_size != 'big') : ?>
<section class="content offset-top-0 <?php echo ($image_size == 'big' ? 'fullwidth7 indent-col-none' : ''); ?>">
    <div class="container">
        <div class="row <?php echo ($image_size != 'big' ? 'product-info-outer' : ''); ?>">
        <?php endif; ?>

        <div class="product_left_part <?php echo ($image_size != 'big' ? 'col-sm-12 col-md-12 col-lg-12 col-xl-8' : ''); ?>">

                <!--product image and info content-->
                <div id="content" class="<?php echo ($image_size != 'big' ? 'row' : ''); ?>">
                <?php echo $content_top; ?>

                <?php if ($thumb || $images) : ?>

                <?php if ($image_size == 'big') { ?>
                <!--big images-->
                <section class="content offset-top-0  fullwidth indent-col-none">
                    <div class="container">
                        <div class="row">
                            <!-- bigGallery -->
                            <div class="hidden-xs clearfix">
                                <div class="bigGallery box-baners">

                                    <?php foreach ($images as $image) : ?>
                                    <div class="col-md-3">
                                        <img class="img-responsive product-zoom1" src="<?php echo $image['thumb']; ?>"  zoom-image="<?php echo $image['popup']; ?>" title="<?php echo $heading_title; ?>" alt="<?php echo $heading_title; ?>" />
                                    </div>
                                    <?php endforeach; ?>

                                </div>
                            </div>
                            <!-- /bigGallery -->
                            <div class="visible-xs">
                                <div class="clearfix"></div>
                                <ul id="mobileGallery">
                                    <?php foreach ($images as $image) : ?>
                                    <li><a data-image="<?php echo $image['popup']; ?>" title="<?php echo $heading_title; ?>"><img src="<?php echo $image['thumb']; ?>" title="<?php echo $heading_title; ?>" alt="<?php echo $heading_title; ?>" /></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                <!--//big images-->
                <?php } else { ?>
<!--small and medium images-->

                    <div class="<?php echo ($image_size == 'small' ? 'col-sm-4 col-md-4 col-lg-4 col-xl-4 hidden-xs' : 'col-sm-6 col-md-6 col-lg-6 col-xl-6 hidden-xs'); ?>">
                        <!--Main image-->
                        <?php if ($thumb) : ?>
                        <div class="product-main-image">
                            <div class="product-main-image__item">
                                <img class="product-zoom" src="<?php echo $thumb; ?>" data-zoom-image="<?php echo $popup; ?>"  title="<?php echo $heading_title; ?>" alt="<?php echo $heading_title; ?>" />
                            </div>
                            <div class="product-main-image__zoom"></div>
                        </div>
                        <?php endif; ?>
                        <!--//Main image-->

                        <!--additional images-->
                        <?php if ($images) : ?>
                            <div class="product-images-carousel">
                                <ul id="smallGallery">
                                    <!--copy of main image-->
                                    <li><a data-image="<?php echo $popup; ?>" data-zoom-image="<?php echo $popup; ?>" title="<?php echo $heading_title; ?>"><img src="<?php echo $thumb; ?>" title="<?php echo $heading_title; ?>" alt="<?php echo $heading_title; ?>" /></a></li>
                                    <!--copy of main image-->

                                    <?php foreach ($images as $image) : ?>
                                    <li><a data-image="<?php echo $image['popup']; ?>" data-zoom-image="<?php echo $image['popup']; ?>" title="<?php echo $heading_title; ?>"><img src="<?php echo $image['thumb']; ?>" title="<?php echo $heading_title; ?>" alt="<?php echo $heading_title; ?>" /></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                        <!--//additional images-->

                        <?php if ($youtube_video) : ?>
                        <a href="<?php echo $youtube_video; ?>" class="video-link"><span class="icon icon-videocam"></span><?php echo (isset($customisation_translation[$lang]["video_title"][$store_id]) ? $customisation_translation[$lang]["video_title"][$store_id] : ''); ?></a>
                        <?php endif; ?>

                    </div>
                <!--//small and medium images-->

                <?php } ?>

                <?php endif; ?>

                <!--Product info content-->
                <?php if ($image_size == 'big') : ?>
                <section class="content">
                <div class="container">
                <?php endif; ?>

                <div class="product-info <?php echo (!$thumb ? 'col-sm-12 col-md-12 col-lg-12' : ($image_size == 'small' ? 'col-sm-8 col-md-8 col-lg-8 col-xl-8' : ($image_size == 'big' ? 'product-info-big text-center product-info-outer' : 'col-sm-6 col-md-6 col-lg-6 col-xl-6'))); ?>">
                    <?php if ($image_size == 'big') { ?>
                    <div class="wrapper">

                        <?php if ($youtube_video) : ?>
                        <div class="product-info-left"><a href="<?php echo $youtube_video; ?>" class="video-link"><span class="icon icon-videocam"></span><?php echo (isset($customisation_translation[$lang]["video_title"][$store_id]) ? $customisation_translation[$lang]["video_title"][$store_id] : ''); ?></a></div>
                        <?php endif; ?>

                        <div class="product-info__sku color-dark"><?php echo $text_model; ?> <strong class="text-color"><?php echo $model; ?></strong></div>
                        <div class="product-info__availability color-dark"><?php echo $text_stock; ?>   <strong class="color"><?php echo $stock; ?></strong></div>
                    </div>
                    <?php } else { ?>
                        <div class="wrapper hidden-xs">
                            <div class="product-info__sku pull-left">
                                <?php echo $text_model; ?> <strong><?php echo $model; ?></strong>
                            </div>
                            <div class="product-info__availability pull-right"><?php echo $text_stock; ?>   <strong class="color"><?php echo $stock; ?></strong></div>
                        </div>
                    <?php } ?>


                    <div class="product-info__title">
                            <h1><?php echo $heading_title; ?></h1>
                        </div>
                        <div class="wrapper visible-xs">
                            <div class="product-info__sku pull-left"><?php echo $text_model; ?> <strong><?php echo $model; ?></strong></div>
                            <div class="product-info__availability pull-right"><?php echo $text_stock; ?>   <strong class="color"><?php echo $stock; ?></strong></div>
                        </div>

                        <?php if ($image_size != 'big') : ?>
                        <?php if ($images) : ?>
                        <div class="visible-xs">
                            <div class="clearfix"></div>
                            <ul id="mobileGallery">
                                <?php foreach ($images as $image) : ?>
                                    <li><a data-image="<?php echo $image['popup']; ?>" data-zoom-image="<?php echo $image['popup']; ?>" title="<?php echo $heading_title; ?>"><img src="<?php echo $image['thumb']; ?>" title="<?php echo $heading_title; ?>" alt="<?php echo $heading_title; ?>" /></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <?php endif; ?>
                        <?php endif; ?>

                        <?php if (!isset($customisation_products['product_catalog_mode'][$store_id]) || $customisation_products['product_catalog_mode'][$store_id] != 1) : ?>
                        <?php if ($price) : ?>
                        <div class="price-box product-info__price">
                            <?php if (!$special) { ?>
                            <?php echo '<span class="price price-regular">'.$price.'</span>'; ?>
                            <?php } else { ?>
                            <span class="price-box__new"><?php echo $special; ?></span>
                            <span class="price-box__old"><?php echo $price; ?></span>
                            <?php } ?>
                        </div>
                        <?php if ($tax) { ?>
                        <span class="price-tax"><?php echo $text_tax; ?> <?php echo $tax; ?></span><br />
                        <?php } ?>
                        <?php if ($reward) { ?>
                        <?php echo $text_reward; ?> <strong><?php echo $reward; ?></strong>
                        <?php } ?>

                        <?php if ($points) { ?>
                        <br><span class="reward"><small><?php echo $text_points; ?> <?php echo $points; ?></small></span><br />
                        <?php } ?>
                        <?php if ($discounts) { ?>
                        <div class="discount">
                            <?php foreach ($discounts as $discount) { ?>
                            <?php echo $discount['quantity']; ?><?php echo $text_discount; ?><?php echo $discount['price']; ?>
                            <?php } ?>
                        </div>
                        <?php } ?>

                        <?php endif; ?>
                        <?php endif; ?>

                        <?php if ($image_size != 'big') : ?>
                        <?php if ($review_status) : ?>
                        <?php if (isset($rating) && $rating > 0) : ?>
                            <span class="display_none" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
                                <span itemprop="ratingValue"><?php echo $rating; ?></span>
                                <?php preg_match ('%\d+%', $reviews, $matches); ?>
                                <span itemprop="reviewCount"><?php echo $matches[0]; ?></span>
                            </span>
                        <?php endif; ?>
                        <div class="product-info__review">
                            <div class="rating">
                                <?php for ($i = 1; $i <= 5; $i++) { ?>
                                    <?php if ($rating < $i) { ?>
                                        <span class="icon-star empty-star"></span>
                                    <?php } else { ?>
                                        <span class="icon-star"></span>
                                    <?php } ?>
                                <?php } ?>
                            </div>
                            <a class="reviews_button" href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;"><?php echo $reviews; ?></a>
                            <a class="write_review_button" href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;"><?php echo $text_write; ?></a>
                        </div>

                        <div class="divider divider--xs product-info__divider hidden-xs"></div>
                        <?php endif; ?>

                        <?php endif; ?>

                        <?php if ($image_size != 'big') : ?>

                        <div class="product-info__description hidden-xs">
                            <?php  if ($manufacturer) : ?>
                            <div class="product-info__description__brand">
                                <a href="<?php echo $manufacturers; ?>" title="<?php echo $manufacturer; ?>">
                                    <?php if (isset($manufacturer_image)) { ?>
                                    <img src="image/<?php echo $manufacturer_image; ?>" alt="" class="img-responsive">
                                    <?php } else {echo '<span itemprop="brand">'.$manufacturer;} ?>
                                </a>
                            </div>
                            <?php endif; ?>

                            <?php if (isset($short_descr) && $short_descr != '') : ?>
                            <div class="product-info__description__text"><?php echo $short_descr; ?></div>
                            <?php endif; ?>

                        </div>
                        <div class="divider divider--xs product-info__divider"></div>
                        <!-- countdown_box -->
                        <?php
                        if (!isset($customisation_products["countdown_status"][$store_id]) || ($customisation_products["countdown_status"][$store_id] != 0)) :
                        if ($special) :
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

                        <div class="product-info__description">
                            <?php
                            if ($d_procent && isset($customisation_translation[$lang]["discount_promo"][$store_id]) && $customisation_translation[$lang]["discount_promo"][$store_id] != '') :
                               echo '<div class="color-red">';
                                    $promo_text = $customisation_translation[$lang]["discount_promo"][$store_id];
                                    $discount_promo = sprintf($promo_text, $d_procent, $quantity);

                                    echo html_entity_decode($discount_promo, ENT_QUOTES, 'UTF-8');
                                echo '</div>';
                            endif;

                             ?>

                            <div class="countdown-product">
                                    <script type="text/javascript"><!--
                                    jQuery(function () {
                                        var austDay = new Date(<?php echo $year_end; ?>, <?php echo $month_end; ?> - 1, <?php echo $day_end; ?>);
                                        jQuery('#countdownProduct<?php echo $product_id; ?>').countdown({
                                            description: '',
                                            until: austDay,
                                            labels: ['Year', 'Month', 'Week', '<?php echo $label_day; ?>', '<?php echo $label_hour; ?>', '<?php echo $label_minute; ?>', '<?php echo $label_second; ?>']
                                        });
                                    });
                                    //--></script>
                                <div id="countdownProduct<?php echo $product_id; ?>"></div>
                            </div>
                        </div>
                        <?php

                                                        endif;
                                                    endif;
                                                endif;
                                            endif;
                                                ?>
                        <!-- /countdown_box -->
                        <?php endif; ?>

                        <div id="product">
                            <?php if ($options) { ?>
                            <?php foreach ($options as $option) { ?>
                            <?php if ($option['type'] == 'select') { ?>
                            <div class="form-group<?php echo ($option['required'] ? ' required' : ''); ?>">
                                <?php if ($option['required']) { ?>
                                <div class="wrapper">
                                    <div class="pull-left"><label class="option-label label-select" for="input-option<?php echo $option['product_option_id']; ?>"><span class="option-label"><?php echo $option['name']; ?>:</span></label></div>
                                    <div class="pull-left required">*</div>
                                </div>
                                <?php } else { ?><label class="option-label label-select" for="input-option<?php echo $option['product_option_id']; ?>"><span class="option-label"><?php echo $option['name']; ?></span></label><?php }  ?>
                                <select name="option[<?php echo $option['product_option_id']; ?>]" id="input-option<?php echo $option['product_option_id']; ?>" class="form-control selectpicker "  data-style="select--ys"  data-width="100%">
                                    <option value=""><?php echo $text_select; ?></option>
                                    <?php foreach ($option['product_option_value'] as $option_value) { ?>
                                    <option value="<?php echo $option_value['product_option_value_id']; ?>"><?php echo $option_value['name']; ?>
                                        <?php if ($option_value['price']) { ?>
                                        (<?php echo $option_value['price_prefix']; ?><?php echo $option_value['price']; ?>)
                                        <?php } ?>
                                    </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <?php } ?>
                            <?php if ($option['type'] == 'radio') { ?>
                            <div class="image_option_type form-group<?php echo ($option['required'] ? ' required' : ''); ?>">
                                <?php if ($option['required']) { ?>
                                <div class="wrapper">
                                    <div class="pull-left"><label class="option-label"><?php echo $option['name']; ?>:</label></div>
                                    <div class="pull-left required">*</div>
                                </div>
                                <?php } else { ?><label class="option-label"><?php echo $option['name']; ?>:</label><?php }  ?>
                                <div class="product-options" id="input-option<?php echo $option['product_option_id']; ?>">
                                    <ul class="options-swatch options-swatch--color options-swatch--lg">
                                        <?php foreach ($option['product_option_value'] as $option_value) { ?>
                                        <li class="radio">
                                            <a>
                                                <label class="swatch-label">
                                                    <input class="image_radio" id="radio<?php echo $option_value['product_option_value_id']; ?>" type="radio" name="option[<?php echo $option['product_option_id']; ?>]" value="<?php echo $option_value['product_option_value_id']; ?>" />
                                                    <?php if ($option_value['image']) { ?>
                                                    <img data-toggle="tooltip" title="<?php echo $option_value['name'] . ($option_value['price'] ? ' ' . $option_value['price_prefix'] . $option_value['price'] : ''); ?>" src="<?php echo $option_value['image']; ?>" alt="<?php echo $option_value['name'] . ($option_value['price'] ? ' ' . $option_value['price_prefix'] . $option_value['price'] : ''); ?>" class="img-thumbnail7 icon icon-color" />
                                                    <?php } ?>
                                                </label>
                                            </a>
                                        </li>

                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                            <?php } ?>
                            <?php if ($option['type'] == 'checkbox') { ?>
                            <div class="form-group<?php echo ($option['required'] ? ' required' : ''); ?>">
                                <?php if ($option['required']) { ?>
                                <div class="wrapper">
                                    <div class="pull-left"><label class="option-label"><?php echo $option['name']; ?>:</label></div>
                                    <div class="pull-left required">*</div>
                                </div>
                                <?php } else { ?><label class="option-label"><?php echo $option['name']; ?>:</label><?php }  ?>
                                <div id="input-option<?php echo $option['product_option_id']; ?>">
                                    <?php foreach ($option['product_option_value'] as $option_value) { ?>
                                    <div class="checkbox checkbox-group clearfix">
                                        <input type="checkbox"  id="checkBox<?php echo $option_value['product_option_value_id']; ?>" name="option[<?php echo $option['product_option_id']; ?>][]" value="<?php echo $option_value['product_option_value_id']; ?>" />
                                        <label for="checkBox<?php echo $option_value['product_option_value_id']; ?>">
                                            <span class="check"></span>
                                            <span class="box"></span>
                                            <?php if ($option_value['image']) { ?>
                                            <img src="<?php echo $option_value['image']; ?>" alt="<?php echo $option_value['name'] . ($option_value['price'] ? ' ' . $option_value['price_prefix'] . $option_value['price'] : ''); ?>" class="img-thumbnail" />
                                            <?php } ?>
                                            <?php echo $option_value['name']; ?>
                                            <?php if ($option_value['price']) { ?>
                                            (<?php echo $option_value['price_prefix']; ?><?php echo $option_value['price']; ?>)
                                            <?php } ?>
                                        </label>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <?php } ?>
                            <?php if ($option['type'] == 'text') { ?>
                            <div class="form-group<?php echo ($option['required'] ? ' required' : ''); ?>">
                                <?php if ($option['required']) { ?>
                                <div class="wrapper">
                                    <div class="pull-left"><label class="option-label" for="input-option<?php echo $option['product_option_id']; ?>"><?php echo $option['name']; ?>:</label></div>
                                    <div class="pull-left required">*</div>
                                </div>
                                <?php } else { ?><label class="option-label" for="input-option<?php echo $option['product_option_id']; ?>"><?php echo $option['name']; ?>:</label><?php }  ?>
                                <input type="text" name="option[<?php echo $option['product_option_id']; ?>]" value="<?php echo $option['value']; ?>" placeholder="<?php echo $option['name']; ?>" id="input-option<?php echo $option['product_option_id']; ?>" class="form-control" />
                            </div>
                            <?php } ?>
                            <?php if ($option['type'] == 'textarea') { ?>
                            <div class="form-group<?php echo ($option['required'] ? ' required' : ''); ?>">
                                <?php if ($option['required']) { ?>
                                <div class="wrapper">
                                    <div class="pull-left"><label class="option-label" for="input-option<?php echo $option['product_option_id']; ?>"><?php echo $option['name']; ?>:</label></div>
                                    <div class="pull-left required">*</div>
                                </div>
                                <?php } else { ?><label class="option-label" for="input-option<?php echo $option['product_option_id']; ?>"><?php echo $option['name']; ?>:</label><?php }  ?>
                                <textarea name="option[<?php echo $option['product_option_id']; ?>]" rows="5" placeholder="<?php echo $option['name']; ?>" id="input-option<?php echo $option['product_option_id']; ?>" class="form-control"><?php echo $option['value']; ?></textarea>
                            </div>
                            <?php } ?>
                            <?php if ($option['type'] == 'file') { ?>
                            <div class="form-group<?php echo ($option['required'] ? ' required' : ''); ?>">
                                <?php if ($option['required']) { ?>
                                <div class="wrapper">
                                    <div class="pull-left"><label class="option-label"><?php echo $option['name']; ?>:</label></div>
                                    <div class="pull-left required">*</div>
                                </div>
                                <?php } else { ?><label class="option-label"><?php echo $option['name']; ?>:</label><?php }  ?>
                                <button type="button" id="button-upload<?php echo $option['product_option_id']; ?>" data-loading-text="<?php echo $text_loading; ?>" class="btn btn--ys btn-block"><i class="fa fa-upload"></i> <?php echo $button_upload; ?></button>
                                <input type="hidden" name="option[<?php echo $option['product_option_id']; ?>]" value="" id="input-option<?php echo $option['product_option_id']; ?>" />
                            </div>
                            <?php } ?>
                            <?php if ($option['type'] == 'date') { ?>
                            <div class="form-group<?php echo ($option['required'] ? ' required' : ''); ?>">
                                <?php if ($option['required']) { ?>
                                <div class="wrapper">
                                    <div class="pull-left"><label class="option-label" for="input-option<?php echo $option['product_option_id']; ?>"><?php echo $option['name']; ?>:</label></div>
                                    <div class="pull-left required">*</div>
                                </div>
                                <?php } else { ?><label class="option-label" for="input-option<?php echo $option['product_option_id']; ?>"><?php echo $option['name']; ?>:</label><?php }  ?>
                                <div class="input-group date">
                                    <input type="text" name="option[<?php echo $option['product_option_id']; ?>]" value="<?php echo $option['value']; ?>" data-date-format="YYYY-MM-DD" id="input-option<?php echo $option['product_option_id']; ?>" class="form-control" />
                                    <span class="input-group-btn">
                                        <button class="btn btn--ys" type="button"><i class="fa fa-calendar"></i></button>
                                    </span>
                                </div>
                            </div>
                            <?php } ?>
                            <?php if ($option['type'] == 'datetime') { ?>
                            <div class="form-group<?php echo ($option['required'] ? ' required' : ''); ?>">
                                <?php if ($option['required']) { ?>
                                <div class="wrapper">
                                    <div class="pull-left"><label class="option-label" for="input-option<?php echo $option['product_option_id']; ?>"><?php echo $option['name']; ?>:</label></div>
                                    <div class="pull-left required">*</div>
                                </div>
                                <?php } else { ?><label class="option-label" for="input-option<?php echo $option['product_option_id']; ?>"><?php echo $option['name']; ?>:</label><?php }  ?>
                                <div class="input-group datetime">
                                    <input type="text" name="option[<?php echo $option['product_option_id']; ?>]" value="<?php echo $option['value']; ?>" data-date-format="YYYY-MM-DD HH:mm" id="input-option<?php echo $option['product_option_id']; ?>" class="form-control" />
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn--ys"><i class="fa fa-calendar"></i></button>
                                    </span>
                                </div>
                            </div>
                            <?php } ?>
                            <?php if ($option['type'] == 'time') { ?>
                            <div class="form-group<?php echo ($option['required'] ? ' required' : ''); ?>">
                                <?php if ($option['required']) { ?>
                                <div class="wrapper">
                                    <div class="pull-left"><label class="option-label" for="input-option<?php echo $option['product_option_id']; ?>"><?php echo $option['name']; ?>:</label></div>
                                    <div class="pull-left required">*</div>
                                </div>
                                <?php } else { ?><label class="option-label" for="input-option<?php echo $option['product_option_id']; ?>"><?php echo $option['name']; ?>:</label><?php }  ?>
                                <div class="input-group time">
                                    <input type="text" name="option[<?php echo $option['product_option_id']; ?>]" value="<?php echo $option['value']; ?>" data-date-format="HH:mm" id="input-option<?php echo $option['product_option_id']; ?>" class="form-control" />
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn--ys"><i class="fa fa-calendar"></i></button>
                                    </span>
                                </div>
                            </div>
                            <?php } ?>
                            <?php } ?>
                            <?php } ?>
                            <?php if ($recurrings) { ?>
                            <hr>
                            <h3><?php echo $text_payment_recurring; ?></h3>
                            <div class="form-group required">
                                <select name="recurring_id" class="form-control">
                                    <option value=""><?php echo $text_select; ?></option>
                                    <?php foreach ($recurrings as $recurring) { ?>
                                    <option value="<?php echo $recurring['recurring_id'] ?>"><?php echo $recurring['name']; ?></option>
                                    <?php } ?>
                                </select>
                                <div class="help-block" id="recurring-description"></div>
                            </div>
                            <?php } ?>
                            <?php if (!isset($customisation_products['product_catalog_mode'][$store_id]) || $customisation_products['product_catalog_mode'][$store_id] != 1) : ?>
                            <div class="wrapper wrapper-qty">
                                <?php if ($image_size == 'big') { ?>
                                    <label class="qty-label" for="input-quantity"><?php echo $entry_qty; ?></label>
                                <div class="number input-counter">
                                    <span class="minus-btn"></span>
                                    <input type="text" name="quantity" value="<?php echo $minimum; ?>" size="2" id="input-quantity" class="input--ys qty-input" />
                                    <span class="plus-btn"></span>
                                </div>
                                <div class="divider divider--xs visible-xs"></div>
                                <input type="hidden" name="product_id" value="<?php echo $product_id; ?>" />

                                <button type="button" id="button-cart" data-loading-text="<?php echo $text_loading; ?>" class="btn btn--ys btn--xxl">
                                        <span class="icon icon-shopping_basket"></span><?php echo $button_cart; ?>
                                </button>
                                <div class="divider divider--xs visible-xs"></div>

                                <?php } else { ?>
                                    <div class="pull-left"><label class="qty-label" for="input-quantity"><?php echo $entry_qty; ?></label></div>
                                    <div class="pull-left">
                                    <!--  -->
                                        <div class="number input-counter">
                                            <span class="minus-btn"></span>
                                            <input type="text" name="quantity" value="<?php echo $minimum; ?>" size="2" id="input-quantity" />
                                            <span class="plus-btn"></span>
                                        </div>
                                    <!-- / -->
                                    </div>
                                    <input type="hidden" name="product_id" value="<?php echo $product_id; ?>" />
                                    <div class="pull-left">
                                        <button type="button" id="button-cart" data-loading-text="<?php echo $text_loading; ?>" class="btn btn--ys btn--xxl">
                                            <span class="icon icon-shopping_basket"></span><?php echo $button_cart; ?>
                                        </button>
                                    </div>
                                <?php } ?>
                            </div>
                            <?php if ($minimum > 1) { ?>
                            <div class="alert alert-info"><i class="fa fa-info-circle"></i> <?php echo $text_minimum; ?></div>
                            <?php } ?>
                            <?php endif; ?>


                            <ul class="product-link">
                                <li class="text-right">
                                    <a onclick="wishlist_theme.add('<?php echo $product_id; ?>');" data-toggle="tooltip" title="<?php echo $button_wishlist; ?>">
                                        <span class="icon icon-favorite_border  tooltip-link"></span>
                                        <span class="text"><?php echo $button_wishlist; ?></span>
                                    </a>
                                </li>
                                <li class="text-left">
                                    <a onclick="compare_theme.add('<?php echo $product_id; ?>');" data-toggle="tooltip" title="<?php echo $button_compare; ?>">
                                        <span class="icon icon-sort  tooltip-link"></span><span class="text"><?php echo $button_compare; ?></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                <?php if ($image_size == 'big') : ?>
                <?php if ($review_status) : ?>
                <?php if (isset($rating) && $rating > 0) : ?>
                            <span class="display_none" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
                                <span itemprop="ratingValue"><?php echo $rating; ?></span>
                                <?php preg_match ('%\d+%', $reviews, $matches); ?>
                                <span itemprop="reviewCount"><?php echo $matches[0]; ?></span>
                            </span>
                <?php endif; ?>


                <div class="product-info__review">
                    <div class="rating">
                        <?php for ($i = 1; $i <= 5; $i++) { ?>
                        <?php if ($rating < $i) { ?>
                        <span class="icon-star empty-star"></span>
                        <?php } else { ?>
                        <span class="icon-star"></span>
                        <?php } ?>
                        <?php } ?>
                    </div>
                    <a class="reviews_button" href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;"><?php echo $reviews; ?></a>
                    <a class="write_review_button" href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;"><?php echo $text_write; ?></a>
                </div>

                <div class="divider divider--xs product-info__divider hidden-xs"></div>
                <?php endif; ?>
                <?php endif; ?>

                        <!-- Go to www.addthis.com/dashboard to customize your tools -->
                        <?php
                           if (isset($customisation_products['product_page_button'][$store_id]) && $customisation_products['product_page_button'][$store_id] != '') {
                                echo '<div class="social-buttons">'.html_entity_decode($customisation_products['product_page_button'][$store_id], ENT_QUOTES, 'UTF-8').'</div>';
                           } else { ?>
                               <div class="addthis_sharing_toolbox"></div>
                        <?php } ?>

                    </div>

                <?php if ($image_size == 'big') : ?>
                </section>
                </div>
                        <?php endif; ?>

                        <!--//Product info content-->

        </div>
                <!--//product image and info content-->



                <!--tabs-->
                <div class="content">
                 <?php if ($image_size == 'big') : ?>
                    <div class="container">
                 <?php endif; ?>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs nav-tabs--ys<?php echo ($image_size == 'small' ? '' : ($image_size == 'big' ? '-center1 text-center' : '1')); ?>" role="tablist">
                        <li class="active"><a href="#tab-description"  role="tab" data-toggle="tab" class="text-uppercase"><?php echo $tab_description; ?></a></li>

                        <?php if ($attribute_groups) { ?>
                        <li><a href="#tab-specification" data-toggle="tab" class="text-uppercase"><?php echo $tab_attribute; ?></a></li>
                        <?php } ?>

                        <?php if ($review_status) : ?>
                        <li><a href="#tab-review" data-toggle="tab" class="text-uppercase"><?php echo $tab_review; ?></a></li>
                        <?php endif; ?>

                        <?php if ($tags) : ?>
                        <li><a href="#tags" role="tab" data-toggle="tab" class="text-uppercase"><?php echo (isset($customisation_translation[$lang]["tags_tab_title"][$store_id]) ? $customisation_translation[$lang]["tags_tab_title"][$store_id] : 'TAGS'); ?></a></li>
                        <?php endif; ?>


                        <?php if (!empty($html_product_tab)) : ?>
                        <li><a href="#custom-tab" role="tab"  data-toggle="tab" class="text-uppercase"><?php echo (!empty($tab_title) ? $tab_title : 'CUSTOM TAB'); ?></a></li>
                        <?php endif; ?>

                    </ul>
                        <!--//tabs-->
                  <?php if ($image_size == 'big') : ?>
                    </div>
                  <?php endif; ?>

                    <!-- Tab panes -->
                    <div class="tab-content <?php echo ($image_size == 'big' ? 'tab-content--ys-fullwidth' : 'tab-content--ys nav-stacked'); ?>">

                        <div role="tabpanel" class="tab-pane active" id="tab-description">
                            <?php echo $description; ?>
                        </div>

                        <?php if ($attribute_groups) : ?>
                        <div role="tabpanel" class="tab-pane" id="tab-specification">
                            <div class="<?php echo ($image_size == 'big' ? 'container' : ''); ?>">
                                <table class="table table-bordered table table-params">
                                    <tbody>

                                    <?php foreach ($attribute_groups as $attribute_group) { ?>
                                    <tr>
                                        <td colspan="2"><span class="color"><?php echo $attribute_group['name']; ?></span></td>
                                    </tr>
                                    <?php foreach ($attribute_group['attribute'] as $attribute) { ?>
                                    <tr>
                                        <td><?php echo $attribute['name']; ?></td>
                                        <td><?php echo $attribute['text']; ?></td>
                                    </tr>
                                    <?php } ?>
                                    <?php } ?>

                                    </tbody>

                                </table>




                            </div>
                        </div>
                        <?php endif; ?>

                        <?php if ($review_status) : ?>
                        <div role="tabpanel" class="tab-pane" id="tab-review">
                            <div class="<?php echo ($image_size == 'big' ? 'container' : ''); ?>">
                                <form action="#" class="contact-form" id="form-review">
                                    <div id="review"></div>
                                    <h5 class="text-uppercase"><strong class="color"><?php echo $text_write; ?></strong></h5>
                                    <?php if ($review_guest) { ?>

                                    <label for="input-name"><?php echo $entry_name; ?><span class="required">*</span></label>
                                    <input type="text" name="name" value="<?php echo $customer_name; ?>" id="input-name" class="input--ys input--ys--full" />


                                    <label for="input-review"><?php echo $entry_review; ?><span class="required">*</span></label>
                                    <textarea name="text" rows="5" id="input-review" class="textarea--ys input--ys--full"></textarea>
                                    <div class="divider divider--xs"></div>
                                    <div class="help-block"><?php echo $text_note; ?></div>
                                    <div class="divider divider--xs"></div>
                                    <div class="input--ys--full">
                                        <label class="option-label"><?php echo $entry_rating; ?></label>
                                        &nbsp;&nbsp;&nbsp; <?php echo $entry_bad; ?>&nbsp;
                                        <input type="radio" name="rating" value="1" />
                                        &nbsp;
                                        <input type="radio" name="rating" value="2" />
                                        &nbsp;
                                        <input type="radio" name="rating" value="3" />
                                        &nbsp;
                                        <input type="radio" name="rating" value="4" />
                                        &nbsp;
                                        <input type="radio" name="rating" value="5" />
                                        &nbsp;<?php echo $entry_good; ?>
                                    </div>
                                    <?php echo $captcha; ?>
                                    <button type="button" id="button-review" data-loading-text="<?php echo $text_loading; ?>" class="btn btn--ys text-uppercase"><?php echo $button_continue; ?></button>

                                    <?php } else { ?>
                                    <?php echo $text_login; ?>
                                    <?php } ?>

                                </form>
                            </div>
                        </div>
                        <?php endif; ?>

                        <?php if ($tags) : ?>
                        <div role="tabpanel" class="tab-pane" id="tags">
                            <div class="<?php echo ($image_size == 'big' ? 'container' : ''); ?>">
                                <?php for ($i = 0; $i < count($tags); $i++) { ?>
                                <?php if ($i < (count($tags) - 1)) { ?>
                                <a href="<?php echo $tags[$i]['href']; ?>"><?php echo $tags[$i]['tag']; ?></a>,
                                <?php } else { ?>
                                <a href="<?php echo $tags[$i]['href']; ?>"><?php echo $tags[$i]['tag']; ?></a>
                                <?php } ?>
                                <?php } ?>
                            </div>
                        </div>
                        <?php endif; ?>

                        <?php if (!empty($html_product_tab)) : ?>
                        <div role="tabpanel" class="tab-pane" id="custom-tab">
                            <div class="<?php echo ($image_size == 'big' ? 'container' : ''); ?>"><?php echo $html_product_tab; ?></div>
                        </div>
                        <?php endif; ?>

                    </div>
                </div>
            </div>


        <!--right  block: custom + related -->
<?php if ($image_size != 'big' && ((isset($custom_right_block) && $custom_right_block != '') || $products)) : ?>
<div class="custom-product-block col-xl-4 visible-xl">
            <?php if (isset($custom_right_block) && $custom_right_block != '') : echo $custom_right_block; endif; ?>


            <!--related small-->
            <?php
if (!isset($customisation_products['related'][$store_id]) || $customisation_products['related'][$store_id] != 'disable'):
 $related = 1;
?>
    <?php if ($products) : ?>
            <h4 class="text-uppercase"><?php echo $text_related; ?></h4>
            <div class="vertical-carousel vertical-carousel-2 with-checkbox offset-top-40">
                <?php foreach ($products as $product) : ?>
                <div class="vertical-carousel__item">
                    <div class="vertical-carousel__item__image pull-left"><a href="<?php echo $product['href']; ?>"><img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" title="<?php echo $product['name']; ?>" /></a></div>
                    <div class="vertical-carousel__item__title">
                        <h2><a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a></h2>
                    </div>
                    <?php if ($product['price']) { ?>
                    <div class="price-box">
                    <?php if (!$product['special']) { ?>
                        <?php echo $product['price']; ?>
                        <?php } else { ?>
                        <span class="price-new"><?php echo $product['special']; ?></span> <span class="price-box__old"><?php echo $product['price']; ?></span>
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
            <?php endif; ?>
            <!--//related small-->
    <?php endif; ?>


</div>
<?php endif; ?>
<!--//right  block: custom + related -->

<?php if ($image_size != 'big') : ?>

</div>

</div>
</section>
<?php endif; ?>

<?php echo $content_bottom; ?>



<script type="text/javascript"><!--
$('select[name=\'recurring_id\'], input[name="quantity"]').change(function(){
	$.ajax({
		url: 'index.php?route=product/product/getRecurringDescription',
		type: 'post',
		data: $('input[name=\'product_id\'], input[name=\'quantity\'], select[name=\'recurring_id\']'),
		dataType: 'json',
		beforeSend: function() {
			$('#recurring-description').html('');
		},
		success: function(json) {
			$('.alert, .text-danger').remove();

			if (json['success']) {
				$('#recurring-description').html(json['success']);
			}
		}
	});
});
//--></script>
<script type="text/javascript"><!--
$('#button-cart').on('click', function() {
	$.ajax({
		url: 'index.php?route=checkout/cart/add',
		type: 'post',
		data: $('#product input[type=\'text\'], #product input[type=\'hidden\'], #product input[type=\'radio\']:checked, #product input[type=\'checkbox\']:checked, #product select, #product textarea'),
		dataType: 'json',
		beforeSend: function() {
			//$('#button-cart').button('loading');
		},
		complete: function() {
			$('#button-cart').button('reset');
		},
		success: function(json) {
			$('.alert, .text-danger').remove();
			$('.form-group').removeClass('has-error');

			if (json['error']) {
				if (json['error']['option']) {
					for (i in json['error']['option']) {
						var element = $('#input-option' + i.replace('_', '-'));

						if (element.parent().hasClass('input-group')) {
							element.parent().after('<div class="text-danger">' + json['error']['option'][i] + '</div>');
						} else {
							element.after('<div class="text-danger">' + json['error']['option'][i] + '</div>');
						}
					}
				}

				if (json['error']['recurring']) {
					$('select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');
				}

				// Highlight any found errors
				$('.text-danger').parent().addClass('has-error');
			}

			if (json['success']) {
                var str=json['total'];
                var myArray = str.split(' ');
                var str1=myArray[1];

				//$('.breadcrumb').after('<div class="alert alert-success">' + json['success'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');

				//$('#cart > button').html('<span class="icon icon-shopping_basket"></span> ' + str1);

				//$('html, body').animate({ scrollTop: 0 }, 'slow');

                $('#cart > button').html('<span class="icon icon-shopping_basket"></span><span id="cart-total" class="badge badge--cart"> ' + str1 + '</span>');

                var outputVariable =
                        '<div class="modal  modal--bg fade in" id="modalAddToCart" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true" style="display: block; padding-right: 17px;">' +
                                '<div class="modal-dialog white-modal modal-sm">' +
                                '<div class="modal-content ">' +
                                '<div class="modal-header">' +
                                '<button type="button" class="close"><span class="icon icon-clear"></span></button>' +
                                '</div>' +
                                '<div class="modal-body">' +
                                '<div class="text-center">' + json['success'] + '</div>' +
                                '</div>' +
                                '<div class="modal-footer text-center">' +
                                '<a href="index.php?route=checkout/cart" class="btn btn--ys btn--lg"><span class="icon icon-shopping_basket"></span></a>' +
                                '</div>' +
                                '</div>' +
                                '</div>' +
                                '</div>';
                var bg = '<div class="modal-backdrop fade in"></div>';

                $('body').after(bg);
                $('#notification').parent().before(outputVariable);


                //$('body').addClass('darken');


                //$('#notification').parent().before('<div class="preloader"><div class="success_ev" style="display: none;">' + json['success'] + '</div></div>');
                //$('.success_ev').fadeIn('');

                setTimeout(function () {
                    $('#cart > button').html('<span class="icon icon-shopping_basket"></span><span id="cart-total" class="badge badge--cart"> ' + str1 + '</span>');

                    //jQuery('.success_ev').fadeOut();
                    //jQuery('.preloader').remove();

                }, 1000);

                $('#cart > ul').load('index.php?route=common/cart/info ul li');
                $( ".close" ).click(function() {
                    //$('body').removeClass('darken');
                    $('#modalAddToCart').remove();
                    $('.modal-backdrop').remove();
                });

            }
		},
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }
	});
});
//--></script>
<script type="text/javascript"><!--
$('button[id^=\'button-upload\']').on('click', function() {
	var node = this;

	$('#form-upload').remove();

	$('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');

	$('#form-upload input[name=\'file\']').trigger('click');

	if (typeof timer != 'undefined') {
    	clearInterval(timer);
	}

	timer = setInterval(function() {
		if ($('#form-upload input[name=\'file\']').val() != '') {
			clearInterval(timer);

			$.ajax({
				url: 'index.php?route=tool/upload',
				type: 'post',
				dataType: 'json',
				data: new FormData($('#form-upload')[0]),
				cache: false,
				contentType: false,
				processData: false,
				beforeSend: function() {
					$(node).button('loading');
				},
				complete: function() {
					$(node).button('reset');
				},
				success: function(json) {
					$('.text-danger').remove();

					if (json['error']) {
						$(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');
					}

					if (json['success']) {
						alert(json['success']);

						$(node).parent().find('input').val(json['code']);
					}
				},
				error: function(xhr, ajaxOptions, thrownError) {
					alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
				}
			});
		}
	}, 500);
});
//--></script>
<script type="text/javascript"><!--
$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    $('#review').fadeOut('slow');

    $('#review').load(this.href);

    $('#review').fadeIn('slow');
});

$('#review').load('index.php?route=product/product/review&product_id=<?php echo $product_id; ?>');

$('#button-review').on('click', function() {
	$.ajax({
		url: 'index.php?route=product/product/write&product_id=<?php echo $product_id; ?>',
		type: 'post',
		dataType: 'json',
		data: $("#form-review").serialize(),
		beforeSend: function() {
			$('#button-review').button('loading');
		},
		complete: function() {
			$('#button-review').button('reset');
		},
		success: function(json) {
			$('.alert-success, .alert-danger').remove();

			if (json['error']) {
				$('#review').after('<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');
			}

			if (json['success']) {
				$('#review').after('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');

				$('input[name=\'name\']').val('');
				$('textarea[name=\'text\']').val('');
				$('input[name=\'rating\']:checked').prop('checked', false);
			}
		}
	});
});

//--></script>
<script type="text/javascript">
    $j(document).ready(function() {

        // popup ini
        $j('.quick-view').magnificPopup({
            disableOn: 767,
            type: 'ajax'
        });

        $j('.video-link').magnificPopup({
            disableOn: 767,
            type: 'iframe',
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false
        });

        // Init All Carousel
        //productCarousel($j('#megaMenuCarousel1'),1,1,1,1,1);
        //verticalCarousel($j('.vertical-carousel-1'),2);
        thumbnailsCarousel($j('.product-images-carousel ul'));
        productCarousel($j('#carouselRelated'),6,4,4,2,1);
        verticalCarousel($j('.vertical-carousel-2'),3);
        productCarousel($j('#mobileGallery'),1,1,1,1,1);
        productBigCarousel($j('.bigGallery'),3,3,3,2,1);

        elevateZoom();
        elevateZoom1();


        $('.date').datetimepicker({
            pickTime: false
        });

        $('.datetime').datetimepicker({
            pickDate: true,
            pickTime: true
        });

        $('.time').datetimepicker({
            pickDate: false
        });

    })
</script>

<?php echo $footer; ?>
