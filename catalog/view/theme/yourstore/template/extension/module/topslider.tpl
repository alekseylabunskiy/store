<section class="content offset-top-0 <?php echo ($layoutid == 4 ? 'intro tp-banner-button1' : ($layoutid == 5 || $layoutid == 10 ? 'tp-banner-button1 slider-layout-3' : ($layoutid == 6 ? 'tp-banner-button1 slider-layout-5' : ''))); ?>" id="slider">
  <?php if ($heading_title) { ?>
    <h2 class="hidden"><?php echo $heading_title; ?></h2>
  <?php } ?>
    <div class="tp-banner-container <?php echo ($layoutid == 2 ? 'slider-layout-2' : ''); ?>">
        <div class="tp-banner">
            <?php echo $html; ?>
        </div>
    </div>
</section>

<script type="text/javascript">
    <?php if ($layoutid != 4) { ?>
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

    //$j(document).ready(function() {

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
    <?php } else { ?>
        // Revolution Slider
        jQuery('.tp-banner').show().revolution({
                    dottedOverlay:"none",
                    delay:16000,
                    startwidth:2048,
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
                    fullWidth:"on",
                    fullScreen:"on",

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
                    fullScreenOffsetContainer: ""
                });

    <?php }  ?>
</script>
