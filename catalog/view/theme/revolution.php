<div class="content offset-top-0" id="slider">
    <div class="container">
        <!--
                          #################################
                          - THEMEPUNCH BANNER -
                          #################################
                          -->
        <!-- START REVOLUTION SLIDER 3.1 rev5 fullwidth mode -->
        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>
                <?php foreach ($products as $product) :   ?>

                <!-- SLIDE -1 -->
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off"  data-title="Slide">
                        <!-- MAIN IMAGE -->
                        <img src="image/catalog/slides/slide-1.jpg"  alt="slide1"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" >
                        <!-- LAYERS -->
                        <!-- IMAGE -->
                        <!-- IMAGE NR. 01 -->
                        <div class="tp-caption  lft ltb"
                             data-x="199"
                             data-y="204"
                             data-speed="900"
                             data-start="1000"
                             data-easing="Power4.easeOut"
                             style="z-index: 5;">
                            <img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" title="<?php echo $product['name']; ?>">
                        </div>
                        <?php
                        if (isset($additional_images)) :
                                if (count($additional_images) > 1) {
                                    $additional_images = array_shift($additional_images);
                                } else {
                                    $additional_image = $additional_images[0];

                                }
                                $additional_image = $additional_images;
                    ?>
                    <!-- IMAGE NR. 02 -->
                        <div class="tp-caption  lfb ltt"
                             data-x="639"
                             data-y="340"
                             data-speed="900"
                             data-start="1000"
                             data-easing="Power4.easeOut"
                             style="z-index: 5;">
                            <img src="<?php echo str_replace(' ', '%20',$additional_image['image']); ?>" data-image2x="<?php echo str_replace(' ', '%20',$additional_image['image2x']); ?>" alt="<?php echo $product['name']; ?>">
                        </div>
                        <?php endif ?>
                        <!-- TEXT -->
                        <div class="tp-caption lfr str"
                             data-x="1300"
                             data-y="center"
                             data-voffset="60"
                             data-speed="600"
                             data-start="900"
                             data-easing="Power4.easeOut"
                             data-endeasing="Power4.easeIn"
                             style="z-index: 7;">
                            <div class="tp-caption--product-1">
                                <h6 class="title text-uppercase"><a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a></h6>
                                <!-- product price -->
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
                                <!-- /product price -->
                                <div class="text"><?php echo $product['short_description']; ?></div>
                                <!-- product button -->
                                <a onclick="cart_theme.add('<?php echo $product['product_id']; ?>', $('#input-quantity').val());" class="btn btn--ys btn--lg btn-top">
                                    <span class="icon icon-shopping_basket"></span> <?php echo $button_cart; ?>
                                </a>
                                <!-- /product button -->

                                <?php endif; ?>
                            </div>
                        </div>
                    </li>
                    <!-- /SLIDE -1 -->
                <?php endforeach; ?>

                </ul>
            </div>
        </div>
    </div>
</div>
<script>
    //$j(document).ready(function() {
        // Revolution Slider
        var windowW = window.innerWidth || $j(window).width();
        var fullwidth;
        var fullscreen;

        jQuery(window).resize(sliderOptions);
        sliderOptions();
        function sliderOptions(){
            if (windowW > 767) {
                fullwidth = "off";
                fullscreen = "on";
            } else {
                fullwidth = "on";
                fullscreen = "off";
            }
        }



        jQuery('.tp-banner').show().revolution(
            {
                dottedOverlay:"none",
                delay:16000,
                startwidth:2048,
                startheight:900,
                hideThumbs:200,
                hideTimerBar:"on",

                thumbWidth:100,
                thumbHeight:50,
                thumbAmount:5,

                navigationType:"none",
                navigationArrows:"",
                navigationStyle:"",

                touchenabled:"on",
                onHoverStop:"on",

                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,

                parallax:"mouse",
                parallaxBgFreeze:"on",
                parallaxLevels:[7,4,3,2,5,4,3,2,1,0],

                keyboardNavigation:"off",

                navigationHAlign:"center",
                navigationVAlign:"bottom",
                navigationHOffset:0,
                navigationVOffset:20,

                soloArrowLeftHalign:"left",
                soloArrowLeftValign:"center",
                soloArrowLeftHOffset:20,
                soloArrowLeftVOffset:0,

                soloArrowRightHalign:"right",
                soloArrowRightValign:"center",
                soloArrowRightHOffset:20,
                soloArrowRightVOffset:0,

                shadow:0,
                fullWidth: fullwidth,
                fullScreen: fullscreen,

                spinner:"",
                h_align:"left",

                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:-1,

                shuffle:"off",

                autoHeight:"off",
                forceFullWidth:"off",


                hideThumbsOnMobile:"off",
                hideNavDelayOnMobile:1500,
                hideBulletsOnMobile:"off",
                hideArrowsOnMobile:"off",
                hideThumbsUnderResolution:0,

                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                startWithSlide:0,
                fullScreenOffsetContainer: "#header"
            });
    //})
</script>
