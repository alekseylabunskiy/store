ALTER TABLE `oc_product_description` ADD short_description TEXT COLLATE utf8_bin NOT NULL  AFTER `name`;
ALTER TABLE `oc_product` ADD slick_status tinyint(1) NOT NULL DEFAULT '1' AFTER `model`;
ALTER TABLE `oc_product` ADD product_page tinyint(1) NOT NULL DEFAULT '1' AFTER `model`;
ALTER TABLE `oc_product` ADD fimage TEXT COLLATE utf8_bin NOT NULL AFTER `image`;
ALTER TABLE `oc_product` ADD featured tinyint(1) NOT NULL DEFAULT '0' AFTER `image`;

UPDATE `oc_product_description` SET  `video1` =  'https://www.youtube.com/watch?v=jaWvdJBVBSc';
UPDATE `oc_product` SET  `product_page_type` =  0 WHERE  `PRODUCT_id` = 107;

UPDATE `oc_product_description` SET  `short_description` =  'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget, sollicitudin eu, vehicula venenatis, tempor vitae, est. Praesent vitae dui. Morbi id tellus.';

$this->db->query("UPDATE ". DB_PREFIX . "category_description SET `html_bottom` = '' WHERE `category_id` = 18 AND `language_id` = 1;");

DROP TABLE `oc_simple_blog_article`, `oc_simple_blog_article_description`, `oc_simple_blog_article_description_additional`, `oc_simple_blog_article_product_related`, `oc_simple_blog_article_to_category`, `oc_simple_blog_article_to_layout`, `oc_simple_blog_article_to_store`, `oc_simple_blog_author`, `oc_simple_blog_author_description`, `oc_simple_blog_category`, `oc_simple_blog_category_description`, `oc_simple_blog_category_to_layout`, `oc_simple_blog_category_to_store`, `oc_simple_blog_comment`, `oc_simple_blog_related_article`, `oc_simple_blog_view`;

DELETE FROM `oc_url_alias` WHERE `query` LIKE '%simple_blog_category_id%';


UPDATE `oc_product_description` SET `short_description` = 'Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex.';
UPDATE `oc_product_description` SET `video1` = 'https://www.youtube.com/watch?v=jaWvdJBVBSc';
UPDATE `oc_product_description` SET `tab_title` = 'CUSTOM TAB';
UPDATE `oc_product_description` SET `html_product_tab` = '&lt;div&gt;\r\n    &lt;h5&gt;&lt;strong class=&quot;color text-uppercase&quot;&gt;Lorem ipsum dolor sit amet conse ctetur adipisicing elit&lt;/strong&gt;&lt;/h5&gt;\r\n    &lt;div class=&quot;divider divider--xs&quot;&gt;&lt;/div&gt;\r\n    &lt;p&gt;Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.  orem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.&lt;/p&gt;\r\n    &lt;ul class=&quot;marker-list-circle&quot;&gt;\r\n        &lt;li&gt;&lt;span class=&quot;text-uppercase&quot;&gt;Lorem ipsum dolor sit amet&lt;/span&gt;&lt;/li&gt;\r\n        &lt;li&gt;&lt;span class=&quot;text-uppercase&quot;&gt;Conse ctetur adipisicing&lt;/span&gt;&lt;/li&gt;\r\n        &lt;li&gt;&lt;span class=&quot;text-uppercase&quot;&gt;Elit sed do eiusmod tempor&lt;/span&gt;&lt;/li&gt;\r\n        &lt;li&gt;&lt;span class=&quot;text-uppercase&quot;&gt;Incididunt ut laborev&lt;/span&gt;&lt;/li&gt;\r\n        &lt;li&gt;&lt;span class=&quot;text-uppercase&quot;&gt;Et dolore magna aliqua&lt;/span&gt;&lt;/li&gt;\r\n        &lt;li&gt;&lt;span class=&quot;text-uppercase&quot;&gt;Ut enim ad min&lt;/span&gt;&lt;/li&gt;\r\n    &lt;/ul&gt;\r\n&lt;/div&gt;';
UPDATE `oc_product_description` SET `html_product_right` = '&lt;div class=&quot;custom_right_block&quot;&gt;\n    &lt;div class=&quot;delivery-banner&quot; onclick=&quot;window.location.href = ''#''&quot;&gt;\n        &lt;div class=&quot;delivery-banner__icon&quot;&gt;&lt;span class=&quot;icon-redeem&quot;&gt;&lt;/span&gt;&lt;/div&gt;\n        &lt;div class=&quot;delivery-banner__text&quot;&gt;\n            &lt;h3&gt;SPECIAL OFFER 1+1=3&lt;/h3&gt;\n            &lt;h5&gt;Get a gift!&lt;/h5&gt;\n            &lt;p&gt;Donec eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet, nunc. Ut sit amet turpis.&lt;/p&gt;\n        &lt;/div&gt;\n    &lt;/div&gt;\n    &lt;div class=&quot;delivery-banner&quot; onclick=&quot;window.location.href = ''#''&quot;&gt;\n        &lt;div class=&quot;delivery-banner__icon&quot;&gt;&lt;span class=&quot;icon-card_membership&quot;&gt;&lt;/span&gt;&lt;/div&gt;\n        &lt;div class=&quot;delivery-banner__text&quot;&gt;\n            &lt;h3&gt;FREE REWARD CARD&lt;/h3&gt;\n            &lt;h5&gt;Worth 10$, 50$, 100$&lt;/h5&gt;\n            &lt;p&gt;Eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet, nunc. Ut sit amet turpis. &lt;/p&gt;\n        &lt;/div&gt;\n    &lt;/div&gt;\n    &lt;div class=&quot;delivery-banner&quot; onclick=&quot;window.location.href = ''#''&quot;&gt;\n        &lt;div class=&quot;delivery-banner__icon&quot;&gt;&lt;span class=&quot;icon-local_shipping&quot;&gt;&lt;/span&gt;&lt;/div&gt;\n        &lt;div class=&quot;delivery-banner__text&quot;&gt;\n            &lt;h3&gt;Free Shipping&lt;/h3&gt;\n            &lt;h5&gt;on orders over $100&lt;/h5&gt;\n            &lt;p&gt;Eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet, nunc. Ut sit amet turpis. &lt;/p&gt;\n        &lt;/div&gt;\n    &lt;/div&gt;\n    &lt;div class=&quot;delivery-banner&quot; onclick=&quot;window.location.href = ''#''&quot;&gt;\n        &lt;div class=&quot;delivery-banner__icon&quot;&gt;&lt;span class=&quot;icon-replay_5&quot;&gt;&lt;/span&gt;&lt;/div&gt;\n        &lt;div class=&quot;delivery-banner__text&quot;&gt;\n            &lt;h3&gt;Order Return&lt;/h3&gt;\n            &lt;h5&gt;Returns within 5 days&lt;/h5&gt;\n            &lt;p&gt;Eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet, nunc. Ut sit amet turpis. &lt;/p&gt;\n        &lt;/div&gt;\n    &lt;/div&gt;\n    &lt;div class=&quot;divider-line&quot;&gt;&lt;/div&gt;\n\n&lt;/div&gt;\n';


iPad in portrait & landscape:
@media only screen
and (min-device-width : 768px)
and (max-device-width : 1024px)  { / STYLES GO HERE /}

iPad in landscape
@media only screen
and (min-device-width : 768px)
and (max-device-width : 1024px)
and (orientation : landscape) { / STYLES GO HERE /}


iPad in portrait
@media only screen
and (min-device-width : 768px)
and (max-device-width : 1024px)
and (orientation : portrait) { / STYLES GO HERE / }

RewriteBase /_olga/yourstore_oc_2302/

<script src="catalog/view/javascript/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>
<link href="catalog/view/javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />

<script src="catalog/view/javascript/bootstrap/js/bootstrap_without_dd.min.js" type="text/javascript"></script>

<script src="catalog/view/javascript/common.js" type="text/javascript"></script>




<!-- jQuery 1.10.1-->
<script src="catalog/view/theme/<?php echo $theme; ?>/external/jquery/jquery-2.1.4.min.js"></script>
<!-- Bootstrap 3-->

<script src="catalog/view/theme/<?php echo $theme; ?>/external/bootstrap/bootstrap.min.js"></script>

<!-- Specific Page External Plugins -->
<script src="catalog/view/theme/<?php echo $theme; ?>/external/slick/slick.min.js"></script>
<script src="catalog/view/theme/<?php echo $theme; ?>/external/bootstrap-select/bootstrap-select.min.js"></script>
<script src="catalog/view/theme/<?php echo $theme; ?>/external/countdown/jquery.plugin.min.js"></script>
<script src="catalog/view/theme/<?php echo $theme; ?>/external/countdown/jquery.countdown.min.js"></script>

<?php if ($layout_id == 1) : ?>
<script src="catalog/view/theme/<?php echo $theme; ?>/external/instafeed/instafeed.min.js"></script>
<?php endif; ?>


<script src="catalog/view/theme/<?php echo $theme; ?>/external/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="catalog/view/theme/<?php echo $theme; ?>/external/isotope/isotope.pkgd.min.js"></script>
<script src="catalog/view/theme/<?php echo $theme; ?>/external/imagesloaded/imagesloaded.pkgd.min.js"></script>

<script src="catalog/view/theme/<?php echo $theme; ?>/external/elevatezoom/jquery.elevatezoom.js"></script>


<script src="catalog/view/theme/<?php echo $theme; ?>/external/colorbox/jquery.colorbox-min.js"></script>
<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script type="text/javascript" src="catalog/view/theme/<?php echo $theme; ?>/external/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="catalog/view/theme/<?php echo $theme; ?>/external/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<!-- Custom -->

<script src="catalog/view/theme/<?php echo $theme; ?>/external/parallax/jquery.parallax-1.1.3.js"></script>


<script src="catalog/view/theme/<?php echo $theme; ?>/js/custom.js"></script>

<script src="catalog/view/theme/<?php echo $theme; ?>/js/theme_scripts.js"></script>


    <!--scripts full origiinal 2-->

<script src="catalog/view/javascript/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="catalog/view/javascript/bootstrap/js/bootstrap_without_dd.min.js" type="text/javascript"></script>
<script src="catalog/view/javascript/common.js" type="text/javascript"></script>
<!-- jQuery 1.10.1-->
<script src="catalog/view/theme/<?php echo $theme; ?>/external/jquery/jquery-2.1.4.min.js"></script>
<!-- Bootstrap 3-->

<script src="catalog/view/theme/<?php echo $theme; ?>/external/bootstrap/bootstrap.min.js"></script>

<!-- Specific Page External Plugins -->
<script src="catalog/view/theme/<?php echo $theme; ?>/external/slick/slick.min.js"></script>
<script src="catalog/view/theme/<?php echo $theme; ?>/external/bootstrap-select/bootstrap-select.min.js"></script>
<script src="catalog/view/theme/<?php echo $theme; ?>/external/countdown/jquery.plugin.min.js"></script>
<script src="catalog/view/theme/<?php echo $theme; ?>/external/countdown/jquery.countdown.min.js"></script>

<?php if ($layout_id == 1) : ?>
<script src="catalog/view/theme/<?php echo $theme; ?>/external/instafeed/instafeed.min.js"></script>
<?php endif; ?>


<script src="catalog/view/theme/<?php echo $theme; ?>/external/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="catalog/view/theme/<?php echo $theme; ?>/external/isotope/isotope.pkgd.min.js"></script>
<script src="catalog/view/theme/<?php echo $theme; ?>/external/imagesloaded/imagesloaded.pkgd.min.js"></script>

<script src="catalog/view/theme/<?php echo $theme; ?>/external/elevatezoom/jquery.elevatezoom.js"></script>


<script src="catalog/view/theme/<?php echo $theme; ?>/external/colorbox/jquery.colorbox-min.js"></script>
<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script type="text/javascript" src="catalog/view/theme/<?php echo $theme; ?>/external/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="catalog/view/theme/<?php echo $theme; ?>/external/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<!-- Custom -->

<script src="catalog/view/theme/<?php echo $theme; ?>/external/parallax/jquery.parallax-1.1.3.js"></script>


<script src="catalog/view/theme/<?php echo $theme; ?>/js/custom.js"></script>

<script src="catalog/view/theme/<?php echo $theme; ?>/js/theme_scripts.js"></script>


<!--scripts full origiinal 2-->




<!-- related products big-->
<?php
if (!isset($customisation_products['related'][$store_id]) || $customisation_products['related'][$store_id] != 'disable'):
    if ($products) :
        $related = 1;

        ?>
    <section class="content hidden-xl">
        <div class="container">
            <!-- title -->
            <div class="title-with-button">
                <div class="carousel-products__center pull-right"> <span class="btn-prev"></span> <span class="btn-next"></span> </div>
                <h2 class="text-left text-uppercase title-under pull-left"><?php echo $text_related; ?></h2>
            </div>
            <!-- /title -->
            <!-- carousel -->
            <div class="carousel-products row" id="carouselRelated">
                <?php $listing = 0; $type_of_slider = 0; $related = 1; include('catalog/view/theme/list.php'); ?>
            </div>
            <!-- /carousel -->
        </div>
    </section>
    <?php endif; endif; ?>
<!-- /related products big -->

©Copyright 2015 by TonyTemplates. All Rights Reserved.

<a href="index.PHP"><span>Your</span>Store</a> © 2016 . All Rights Reserved.

&copy;Copyright 2016 by <span class="color">TonyTemplates</span>. All Rights Reserved.


<!--default Top Slider-->
<ul>
    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off"  data-title="Slide">
        <img src="image/catalog/slides/default/slide-1.jpg"  alt="slide1"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" >
        <div class="tp-caption lfl stb"
             data-x="205"
             data-y="center"
             data-voffset="60"
             data-speed="600"
             data-start="900"
             data-easing="Power4.easeOut"
             data-endeasing="Power4.easeIn"
             style="z-index: 2;">
            <div class="tp-caption1--wd-1">Spring -Summer 2016</div>
            <div class="tp-caption1--wd-2">Save 20% on</div>
            <div class="tp-caption1--wd-3">new arrivals </div>
            <a href="index.php" class="link-button button--border-thick" data-text="Shop now!">Shop now!</a>
        </div>
    </li>
    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off"  data-title="Slide">
        <img src="image/catalog/slides/default/slide-2.jpg"  alt="slide2"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
        <div class="tp-caption lfr stb"
             data-x="right"
             data-y="center"
             data-voffset="-5"
             data-hoffset="-205"
             data-speed="600"
             data-start="900"
             data-easing="Power4.easeOut"
             data-endeasing="Power4.easeIn"
             style="z-index: 2;">
            <div class="tp-caption2--wd-1">A great selection of superb brands </div>
            <div class="tp-caption2--wd-2">50% off</div>
            <div class="tp-caption2--wd-3">on all clothes</div>
            <a href="index.php" class="link-button button--border-thick pull-right" data-text="Shop now!">Shop now!</a>
        </div>
    </li>
    <li data-transition="slidehorizontal" data-slotamount="7" data-masterspeed="1000"  data-fstransition="fade" data-fsmasterspeed="1000" data-fsslotamount="7">
        <div class="tp-caption tp-fade fadeout fullscreenvideo"
             data-x="0"
             data-y="0"
             data-speed="1000"
             data-start="1100"
             data-easing="Power4.easeOut"
             data-endspeed="1500"
             data-endeasing="Power4.easeIn"
             data-autoplay="true"
             data-autoplayonlyfirsttime="false"
             data-nextslideatend="true"
             data-forceCover="1"
             data-dottedoverlay="twoxtwo"
             data-aspectratio="16:9"
             data-forcerewind="on"
             style="z-index: 2">
            <video class="video-js vjs-default-skin" preload="none" style="width:100%;height:100%"
                   poster='image/catalog/slides/video/video_img.jpg' data-setup="{}">
                <source src='image/catalog/slides/video/explore.mp4' type='video/mp4' />
                <source src='image/catalog/slides/video/explore.webm' type='video/webm' />
                <source src='image/catalog/slides/video/explore.ogv' type='video/ogg' />
            </video>
        </div>
        <div class="tp-caption lfb stb"
             data-x="center"
             data-y="center"
             data-voffset="0"
             data-hoffset="0"
             data-speed="600"
             data-start="900"
             data-easing="Power4.easeOut"
             data-endeasing="Power4.easeIn"
             style="z-index: 2;">
            <div class="tp-caption3--wd-1 color-white">Spring -Summer 2016</div>
            <div class="tp-caption3--wd-2">Season sale!</div>
            <div class="tp-caption3--wd-3 color-white">Get huge</div>
            <div class="tp-caption3--wd-3 color-white">savings!</div>
            <div class="text-center"><a href="index.php" class="link-button button--border-thick" data-text="Shop now!">Shop now!</a></div>
        </div>
    </li>
    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off"  data-title="Slide">
        <img src="image/catalog/slides/default/slide-3.jpg"  alt="slide3"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
        <div class="tp-caption sft customout"
             data-x="center" data-hoffset="0"
             data-y="center" data-voffset="-6"
             data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:5;scaleY:5;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
             data-speed="600"
             data-start="1000"
             data-easing="Power4.easeOut"
             data-endspeed="500"
             data-endeasing="Power4.easeOut"
             data-autoplay="true"
             data-autoplayonlyfirsttime="false"
             data-nextslideatend="true"
            >
            <iframe src='https://www.youtube.com/embed/l3btxn-8XMo?list=PLnA7KvNvVDrQges5czLc37mub9n5vPdSC' width='560' height='315'
                    style='width:640px;height:360px;'>
            </iframe>
        </div>
    </li>
    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off"  data-title="Slide">
        <div class="tp-caption sft customout fullscreenvideo"
             data-x="center" data-hoffset="0"
             data-y="center" data-voffset="0"
             data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:5;scaleY:5;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
             data-speed="0"
             data-start="0"
             data-easing="Power4.easeOut"
             data-endspeed="500"
             data-endeasing="Power4.easeOut"
             data-autoplay="true"
             data-autoplayonlyfirsttime="false"
             data-nextslideatend="true"
            >
            <iframe src='https://www.youtube.com/embed/l3btxn-8XMo?list=PLnA7KvNvVDrQges5czLc37mub9n5vPdSC' width='560' height='315'
                    style='width:640px;height:360px;'>
            </iframe>
        </div>
    </li>
</ul>

<!--end default Top Slider-->

<!--Main page Banners-->
<section class="content fullwidth indent-col-none">
    <div class="container">
        <div class="row">
            <h3 class="hidden">Main Banners</h3>
            <div class="banner-carousel">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <a href="index.php" class="banner zoom-in">
								<span class="figure">
									<img src="image/catalog/custom/banner-01.jpg" alt=""/>
									<span class="figcaption">
										<span class="block-table">
											<span class="block-table-cell">
												<span class="banner__title size3">Hats</span>
												<span class="text">GET UP TO</span>
												<span class="text size3">20% OFF</span>
											</span>
										</span>
									</span>
								</span>
                    </a>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <a href="index.php" class="banner zoom-in">
									<span class="figure">
										<img src="image/catalog/custom/banner-02.jpg" alt=""/>
										<span class="figcaption">
											<span class="block-table">
												<span class="block-table-cell">
													<span class="banner__title size3-1">15% OFF</span>
													<span class="text size1"><em>on brand-new models</em></span>
													<span class="btn btn--ys btn--xl">Shop now!</span>
												</span>
											</span>
										</span>
									</span>
                    </a>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <a href="index.php" class="banner zoom-in">
									<span class="figure">
										<img src="image/catalog/custom/banner-03.jpg" alt=""/>
										<span class="figcaption">
											<span class="block-table">
												<span class="block-table-cell">
													<span class="banner__title size4">New<br> collection</span>
													<span class="text size2">OF FASHION CLOTHES</span>
													<span class="btn btn--ys btn--xl offset-top">Shop now!</span>
												</span>
											</span>
										</span>
									</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--end Main page Banners-->

<!--Footer Social Block-->
<ul>
    <li><a class="icon fa fa-facebook" href="http://www.facebook.com/"></a></li>
    <li><a class="icon fa fa-twitter" href="http://www.twitter.com/"></a></li>
    <li><a class="icon fa fa-google-plus" href="http://www.google.com/"></a></li>
    <li><a class="icon fa fa-instagram" href="https://instagram.com/"></a></li>
    <li><a class="icon fa fa-youtube-square" href="https://www.youtube.com/"></a></li>
</ul>
<!--Footer Social Block-->

<!--footer-copyright -->
<a href="index.php"><span>Your</span>Store</a> &copy; 2016 . All Rights Reserved.

<!--promo for popup newsletter subscribe-->
<h2 class="text-uppercase modal-title">JOIN US NOW!</h2><p class="color-dark">And get hot news about the theme</p><p class="color font24 custom-font font-lighter">YOURStore</p>

    <!--Instagram Feed Home Page - http://instafeedjs.com/-->
<section class="content fullwidth hidden-xs">
    <div class="container">
        <div class="row">
            <div class="instafeed-wrapper">
                <h3 class="title-vertical"><span>INSTAGRAM FEED</span></h3>
                <div id="instafeed" class="instafeed"></div>
            </div>
        </div>
    </div>
</section>

    <!--testimonials-->
Eleanor  <em>&nbsp;-&nbsp;  designer</em>

<!--testimonials html-->
<p>
    Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt.
</p>
<blockquote class="quote-left">
    <p>
        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.
    </p>
    <cite>
        <b>Amanda Smith</b> - designer
    </cite>
</blockquote>
<p>
    Dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
</p>

<!--blog post html-->
<div class="divider divider--xs"></div>
<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
<blockquote class="quote-left">
    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
    <cite> <b>Amanda Smith</b> - designer </cite>
</blockquote>
<p>Dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

<!--custom block for top category 1-->
<div class="row">
    <div class="col-sm-6"> <a href="#" class="discolor-hover"><img class="img-responsive" src="image/catalog/custom/banner-megamenu-01.jpg" alt=""></a> </div>
    <div class="col-sm-6"> <a href="#" class="discolor-hover"><img class="img-responsive" src="image/catalog/custom/banner-megamenu-02.jpg" alt=""></a> </div>
</div>

<!--custom block for top category 2-->
<div class="hor-line"></div>
<ul class="list-inline brands-list">
    <li><a href="index.php"><img src="image/catalog/brands/brand-01.png" alt=""></a></li>
    <li><a href="index.php"><img src="image/catalog/brands/brand-03.png" alt=""></a></li>
    <li><a href="index.php"><img src="image/catalog/brands/brand-02.png" alt=""></a></li>
    <li><a href="index.php"><img src="image/catalog/brands/brand-05.png" alt=""></a></li>
    <li><a href="index.php"><img src="image/catalog/brands/brand-04.png" alt=""></a></li>
    <li><a href="index.php"><img src="image/catalog/brands/brand-06.png" alt=""></a></li>
    <li><a href="index.php"><img src="image/catalog/brands/brand-07.png" alt=""></a></li>
    <li><a href="index.php"><img src="image/catalog/brands/brand-08.png" alt=""></a></li>
    <li><a href="index.php"><img src="image/catalog/brands/brand-09.png" alt=""></a></li>
    <li><a href="index.php"><img src="image/catalog/brands/brand-10.png" alt=""></a></li>
</ul>

<!--description block on Category page 2 columns left-->
<div class="row category_description_wrapper">
    <div class="col-sm-6">
        <a href="index.php" class="banner banner--md link-img-hover">
								<span class="figure">
									<img src="image/catalog/custom/category-women-1.jpg" alt="" class="vis-hid-img-small ">
									<img src="image/catalog/custom/category-women-1-xl.jpg" alt="" class="vis-hid-img-big  ">
									<span class="figcaption">
										<span class="block-table">
											<span class="block-table-cell">
												<span class="banner__title size1">New<br>collection</span>
												<span class="text size2">OF FASHION CLOTHES</span>
											</span>
										</span>
									</span>
								</span>
        </a>
    </div>
    <div class="divider divider-md visible-xs"></div>
    <div class="col-sm-6">
        <a href="index.php" class="banner banner--md link-img-hover">
								<span class="figure">
									<img src="image/catalog/custom/category-women-2.jpg" alt="" class="vis-hid-img-small">
									<img src="image/catalog/custom/category-women-2-xl.jpg" alt="" class="vis-hid-img-big">
									<span class="figcaption">
										<span class="block-table">
											<span class="block-table-cell">
												<span class="banner__title size2">15% OFF</span>
												<span class="text size5"><em>on brand-new models</em></span>
												<span class="btn btn--ys btn--xl">Shop now!</span>
											</span>
										</span>
									</span>
								</span>
        </a>
    </div>
</div>
<div class="offset-top-20">
    <p class="light-font">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliqui.</p>
</div>
<div class="divider"></div>

<!--description block on Category page 3 columns-->
<div class="row category_description_wrapper">
<div class="col-lg-12 col-xl-6">
        <a href="listing-without-col-without-static-block_06.html" class="banner banner--md link-img-hover">
								<span class="figure">
								<img src="image/catalog/custom/category-women-1.jpg" alt="" class="hidden-xl">
                                    <img src="image/catalog/custom/category-women-1-xl.jpg" alt="" class="visible-xl">
									<span class="figcaption">
										<span class="block-table">
											<span class="block-table-cell">
												<span class="banner__title size1">New<br>collection</span>
												<span class="text size2">OF FASHION CLOTHES</span>
											</span>
										</span>
									</span>
								</span>
        </a>
    </div>
    <div class="divider divider-md visible-xs"></div>
    <div class="col-lg-12 col-xl-6 visible-xl">
        <a href="listing-without-col-without-static-block_06.html" class="banner banner--md link-img-hover">
								<span class="figure">
									<img src="image/catalog/custom/category-women-2.jpg" alt="" class="hidden-xl">
                                    <img src="image/catalog/custom/category-women-2-xl.jpg" alt="" class="visible-xl">
									<span class="figcaption">
										<span class="block-table">
											<span class="block-table-cell">
												<span class="banner__title size2">15% OFF</span>
												<span class="text size5"><em>on brand-new models</em></span>
												<span class="btn btn--ys btn--xl">Shop now!</span>
											</span>
										</span>
									</span>
								</span>
        </a>
    </div>
</div>
<div class="offset-top-20">
    <p class="light-font">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliqui.</p>
</div>
<div class="divider"></div>


<!--category page - origin custom block-->
<p class="light-font">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
<ul class="marker-list">
    <li>Lorem ipsum dolor sit amet</li>
    <li>Conse ctetur adipisicing</li>
    <li>Elit sed do eiusmod tempor</li>
</ul>
<p class="light-font">Amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labor.</p>

<!--category page - common custom block-->
<ul class="tags-list">
    <li><a href="#">Grey</a></li>
    <li><a href="#">Shirt</a></li>
    <li><a href="#">suit</a></li>
    <li><a href="#">Dresses </a></li>
    <li><a href="#">Outerwear</a></li>
</ul>
<!--Blog pages - recent comments-->
<h4 class="text-uppercase title-aside">RECENT COMMENTS</h4>

<div class="block-underline">
    <dl class="recent-comments">
        <dd>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</dd>
        <dt>by <b>Admin</b></dt>
        <dd>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</dd>
        <dt>by <b>Admin</b></dt>
    </dl>
</div>
<!--Blog pages - archives-->
<h4 class="text-uppercase title-aside">ARCHIVES</h4>

<div class="block-underline">
    <ul class="categories-list">
        <li><a href="#">July 2016</a></li>
        <li><a href="#">Juny 2016</a></li>
        <li><a href="#">May 2016</a></li>
        <li><a href="#">April 2016</a></li>
    </ul>
</div>

<!--Blog pages - meta-->
<h4 class="text-uppercase title-aside">META</h4>

<div class="block-underline">
    <ul class="categories-list">
        <li><a href="#">Entries RSS</a></li>
        <li><a href="#">WordPress.org</a></li>
        <li><a href="#">Magento</a></li>
        <li><a href="#">Magento WordPress Integration</a></li>
        <li><a href="#">Magento Extensions</a></li>
    </ul>
</div>

<!--product custom tab-->
<div>
    <h5><strong class="color text-uppercase">Lorem ipsum dolor sit amet conse ctetur adipisicing elit</strong></h5>
    <div class="divider divider--xs"></div>
    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.  orem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
    <ul class="marker-list-circle">
        <li><span class="text-uppercase">Lorem ipsum dolor sit amet</span></li>
        <li><span class="text-uppercase">Conse ctetur adipisicing</span></li>
        <li><span class="text-uppercase">Elit sed do eiusmod tempor</span></li>
        <li><span class="text-uppercase">Incididunt ut laborev</span></li>
        <li><span class="text-uppercase">Et dolore magna aliqua</span></li>
        <li><span class="text-uppercase">Ut enim ad min</span></li>
    </ul>
</div>

<!--product custom right block-->
<div class="custom_right_block">
    <div class="delivery-banner" onclick="window.location.href = '#'">
        <div class="delivery-banner__icon"><span class="icon-redeem"></span></div>
        <div class="delivery-banner__text">
            <h3>SPECIAL OFFER 1+1=3</h3>
            <h5>Get a gift!</h5>
            <p>Donec eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet, nunc. Ut sit amet turpis.</p>
        </div>
    </div>
    <div class="delivery-banner" onclick="window.location.href = '#'">
        <div class="delivery-banner__icon"><span class="icon-card_membership"></span></div>
        <div class="delivery-banner__text">
            <h3>FREE REWARD CARD</h3>
            <h5>Worth 10$, 50$, 100$</h5>
            <p>Eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet, nunc. Ut sit amet turpis. </p>
        </div>
    </div>
    <div class="delivery-banner" onclick="window.location.href = '#'">
        <div class="delivery-banner__icon"><span class="icon-local_shipping"></span></div>
        <div class="delivery-banner__text">
            <h3>Free Shipping</h3>
            <h5>on orders over $100</h5>
            <p>Eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet, nunc. Ut sit amet turpis. </p>
        </div>
    </div>
    <div class="delivery-banner" onclick="window.location.href = '#'">
        <div class="delivery-banner__icon"><span class="icon-replay_5"></span></div>
        <div class="delivery-banner__text">
            <h3>Order Return</h3>
            <h5>Returns within 5 days</h5>
            <p>Eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet, nunc. Ut sit amet turpis. </p>
        </div>
    </div>
    <div class="divider-line"></div>

</div>

<!--//product custom right block-->

<!--lookbook block-->
<!-- title -->
<div class="title-box">
    <h2 class="text-left text-uppercase title-under pull-left">LOOKBOOK</h2>
</div>

<a class="link-img-hover" href="index.php"><img src="image/catalog/custom/lookbook.jpg" class="img-responsive" alt=""></a>
<!--//lookbook block-->

<!--home page promo block between left and right-->
<div class="title-box">
    <h2 class="text-left text-uppercase title-under pull-left">PROMOS</h2>
</div>
<div class="text-center promos">
    <div class="promos__image">
        <a href="lookbook.html" class="link-img-hover">
            <img src="image/catalog/custom/promos.jpg" class="img-responsive" alt="">
            <span class="promos__label">-20%</span>
        </a>
    </div>
    <h2><a href="index.php">Mauris lacinia lectus</a></h2>
    Dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet, nunc. Ut sit amet turpis.
</div>
<!--//home page promo block between left and right-->

<!--product description for Big image size-->
<div class="big_description_wrapper">
    <div class="content offset-top-0  fullwidth container-no-col-indent">
        <div class="row">
            <div class="col-sm-12 text-center">
                <img src="image/catalog/custom/product_big_img_04.jpg" class="img-responsive1" alt="">
            </div>
        </div>
    </div>
    <div class="divider divider--lg visible-sm visible-xs"></div>
    <div class="container-fluid container-fluid-large container-no-col-indent">
        <div class="row">
            <div class="pull-left col-xs-12 col-sm-12 col-md-6">
                <img src="image/catalog/custom/product_big_img_05.jpg" class="img-responsive" alt="">
            </div>
            <div class="pull-right col-xs-12 col-sm-12 col-md-6">
                <div class="product-data-big">
                    <h5>Denim shorts by ASOS Collection</h5>
                    <ul class="simple-list">
                        <li>Non-stretch denim </li>
                        <li>Mid wash</li>
                        <li>High-rise waist</li>
                        <li>Zip fly </li>
                        <li>Ripped detail </li>
                        <li>Frayed hem</li>
                        <li>Regular fit - true to size </li>
                        <li>Machine wash </li>
                        <li>100% Cotton </li>
                        <li>Our model wears a UK 8/EU 36/US 4 and is 175cm/5'9" tall</li>
                    </ul>

                </div>
            </div>

        </div>
    </div>
    <div class="container-fluid  container-fluid-large  container-no-col-indent">
        <div class="row">
            <div class="pull-right col-xs-12 col-sm-12 col-md-6">
                <img src="image/catalog/custom/product_big_img_06.jpg" class="img-responsive" alt="">
            </div>
            <div class="pull-left col-xs-12 col-sm-12 col-md-6">
                <div class="product-data-big">
                    <h5>About</h5>
                    <ul class="simple-list">
                        <li>Main: 100% Cotton.</li>
                    </ul>
                    <h5>Size & Fit</h5>
                    <ul class="simple-list">
                        <li>Model wears: UK 8/ EU 36/ US 4</li>
                        <li>Model's height: 175 cm/5'9”</li>
                    </ul>
                    <h5>Look after Me</h5>
                    <ul class="simple-list">
                        <li>Machine Wash According To Instructions On Care Label</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="fill-bg-custom">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-xs-12 col-xs-offset-0 text-center">
                    <div class="banner-all-width text-center color-white">
                        <h3 class="title font50">ASOS Collection</h3>
                        <p>
                            Directional, exciting and diverse, the ASOS Collection makes and breaks the fashion rules. Scouring the globe for inspiration, our London based Design Team is inspired by fashion’s most covetable trends; providing you with
                            a cutting edge wardrobe season upon season.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid  container-fluid-large  container-no-col-indent">
        <div class="row">
            <div class="col-xs-6">
                <img src="image/catalog/custom/product_big_img_07.jpg" class="img-responsive" alt="">
            </div>
            <div class="col-xs-6">
                <img src="image/catalog/custom/product_big_img_08.jpg" class="img-responsive" alt="">
            </div>
        </div>
    </div>
</div>

<!--social icons on contact page-->
<div class="social-links social-links--large">
    <ul>
        <li><a class="icon fa fa-facebook" href="http://www.facebook.com/"></a></li>
        <li><a class="icon fa fa-twitter" href="http://www.twitter.com/"></a></li>
        <li><a class="icon fa fa-google-plus" href="http://www.google.com/"></a></li>
        <li><a class="icon fa fa-instagram" href="https://instagram.com/"></a></li>
        <li><a class="icon fa fa-youtube-square" href="https://www.youtube.com/"></a></li>
    </ul>
</div>

<!--**************************************Information pages-->
<!--about page-->
<style type="text/css">
    .information-information-10 .container.information{width:100%}
    .information-information-10 .container.information .row{margin-left:0;margin-right:0}
    .information-information-10 .container.information .title-box.default{display:none}
</style>
<div class="page_about_us">
    <section class="content--parallax content--parallax-sm offset-top-0" data-image="image/catalog/custom/parallax-img-05.jpg">
        <div class="content  offset-top-0">
            <div class="container">
                <div class="parallax-text">
                    <div class="block-table">
                        <div class="block-table-cell text-center">
                            <h6 class="font50 color-white">About us</h6>
                            <div class="divider divider--xs"></div>
                            <p class="font30 color-white">Lorem ipsum dolor sit amet conse ctetur adipisicing elit.</p>
                            <div class="divider divider--xs"></div>
                            <span class="bull-line"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container">
            <h2 class="text-center title-under">Interesting Facts</h2>
            <p class="text-center color-dark main-font">
                <em class="font18">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br>
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco.</em>
            </p>
            <div class="divider divider--md1"></div>
            <div class="row">
                <div class="col-md-12 col-lg-4 text-center separator-border-right separator-border-right-hidden-md">
                    <a class="link-banner1" href="#">
                        <div>
                            <span class="font96 font-middle color-custom">5000</span>
                        </div>
                        <p>
                            <span class="font26 font-middle color-custom">Items in Store</span>
                        </p>
                        <p class="side-offset-9">
                            Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                        </p>
                        <div class="divider divider--md"></div>
                    </a>
                </div>
                <div class="divider divider--md1 visible-md"></div>
                <div class="col-md-12 col-lg-4 text-center separator-border-right separator-border-right-hidden-md">
                    <a class="link-banner1" href="#">
                        <div>
                            <span class="font96 font-middle color-custom">80%</span>
                        </div>
                        <p>
                            <span class="font26 font-middle color-custom">Our Customers Come Back</span>
                        </p>
                        <p class="side-offset-9">
                            Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                        </p>
                        <div class="divider divider--md"></div>
                    </a>
                </div>
                <div class="divider divider--md1 visible-md"></div>
                <div class="col-md-12 col-lg-4 text-center">
                    <a class="link-banner1" href="#">
                        <div>
                            <span class="font96 font-middle color-custom">1 million</span>
                        </div>
                        <p>
                            <span class="font26 font-middle color-custom">Users of the Site</span>
                        </p>
                        <p class="side-offset-9">
                            Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                        </p>
                        <div class="divider divider--md"></div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid fill-bg content">
        <div class="content-fill">
            <h2 class="text-center title-under">Our Partners</h2>
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 col-xs-12 col-xs-offset-0">
                    <p class="text-center">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                    </p>
                    <div class="divider divider--lg"></div>
                    <div class="brand-lg-list">
                        <div class="row-item">
                            <a href="#"><img src="image/catalog/custom/brand-lg-01.png" class="img-responsive" alt=""></a>
                            <a href="#"><img src="image/catalog/custom/brand-lg-02.png" class="img-responsive" alt=""></a>
                            <a href="#"><img src="image/catalog/custom/brand-lg-03.png" class="img-responsive" alt=""></a>
                            <a href="#"><img src="image/catalog/custom/brand-lg-04.png" class="img-responsive" alt=""></a>
                            <a href="#"><img src="image/catalog/custom/brand-lg-05.png" class="img-responsive" alt=""></a>
                        </div>
                        <div class="row-item">
                            <a href="#"><img src="image/catalog/custom/brand-lg-06.png" class="img-responsive" alt=""></a>
                            <a href="#"><img src="image/catalog/custom/brand-lg-07.png" class="img-responsive" alt=""></a>
                            <a href="#"><img src="image/catalog/custom/brand-lg-08.png" class="img-responsive" alt=""></a>
                            <a href="#"><img src="image/catalog/custom/brand-lg-09.png" class="img-responsive" alt=""></a>
                            <a href="#"><img src="image/catalog/custom/brand-lg-10.png" class="img-responsive" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container">
            <h2 class="text-center title-under">Easy Selection</h2>
            <p class="text-center color-custom">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
    </section>
    <section class="content--parallax content--parallax-sm offset-top-0" data-image="image/catalog/custom/parallax-img-06.jpg">
        <div class="content">
            <div class="container">
                <div class="parallax-text">
                    <div class="block-table">
                        <div class="block-table-cell text-center">
                            <span class="icon icon-done_all color-custom font107"></span>
                            <h6 class="color-white font50 title-bottom-sm1">Only Certified Products</h6>
                            <p class="color-white font24 main-font">
                                <em>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</em>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container">
            <div class="title-box">
                <h2 class="text-center title-under">Our Team</h2>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <a class="link-img-hover1" href="#"><img src="image/catalog/custom/team-img-01.jpg" class="img-responsive-block" alt=""></a>
                    <div class="divider divider--md1"></div>
                    <p>
                        <a class="hover-effect-01" href="#">
                            <span class="font22 text-uppercase color-custom">Emma</span>
                            <span class="font18 color-dark">&nbsp; - &nbsp;<em class="main-font">director</em></span>
                        </a>
                    </p>
                    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <a class="link-img-hover1" href="#"><img src="image/catalog/custom/team-img-02.jpg" class="img-responsive-block" alt=""></a>
                    <div class="divider divider--md1"></div>
                    <p>
                        <a class="hover-effect-01" href="#">
                            <span class="font22 text-uppercase color-custom">Olivia</span>
                            <span class="font18 color-dark">&nbsp; - &nbsp;<em class="main-font">marketer</em></span>
                        </a>
                    </p>
                    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                </div>
                <div class="divider divider--lg visible-sm visible-xs"></div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <a class="link-img-hover1" href="#"><img src="image/catalog/custom/team-img-03.jpg" class="img-responsive-block" alt=""></a>
                    <div class="divider divider--md1"></div>
                    <p>
                        <a class="hover-effect-01" href="#">
                            <span class="font22 text-uppercase color-custom">Mason</span>
                            <span class="font18 color-dark">&nbsp; - &nbsp;<em class="main-font">manager</em></span>
                        </a>
                    </p>
                    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <a class="link-img-hover1" href="#"><img src="image/catalog/custom/team-img-04.jpg" class="img-responsive-block" alt=""></a>
                    <div class="divider divider--md1"></div>
                    <p>
                        <a class="hover-effect-01" href="#">
                            <span class="font22 text-uppercase color-custom">Abigail</span>
                            <span class="font18 color-dark">&nbsp; - &nbsp;<em class="main-font">manager</em></span>
                        </a>
                    </p>
                    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                </div>
            </div>
        </div>
    </section>
</div>
<!--//about page-->

<!--services page-->
<style type="text/css">
    .information-information-19 .container.information{width:100%}
    .information-information-19 .container.information .row{margin-left:0;margin-right:0}
    .information-information-19 .container.information .title-box.default{display:none}
</style>
<div class="page_services">
<section class="content--parallax content--parallax-sm offset-top-0" data-image="image/catalog/custom/parallax-img-07.jpg">
    <div class="content  offset-top-0">
        <div class="container">
            <div class="parallax-text">
                <div class="block-table">
                    <div class="block-table-cell text-center">
                        <h6 class="font50 color-white">Services</h6>
                        <div class="divider divider--xs"></div>
                        <p class="font30 color-white">Lorem ipsum dolor sit amet conse ctetur adipisicing elit.</p>
                        <div class="divider divider--xs"></div>
                        <span class="bull-line"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="content">
    <div class="container">
        <h2 class="text-center title-under">What We Do</h2>
        <p class="text-center color-dark main-font">
            <em class="font24 color">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et  <br>
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. </em>
        </p>
        <div class="divider divider--md1"></div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-3 text-center">
                <span class="icon font77  icon-card_giftcard color"></span>
                <div class="divider divider--sm"></div>
                <strong class="font22 color font-medium text-uppercase custom-font">Lorem ipsum dolor</strong>
                <div class="divider divider--md"></div>
                <p>
                    Lorem ipsum dolor sit amet conse ctetur sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                </p>
            </div>
            <div class="divider divider--md1 visible-xs"></div>
            <div class="col-sm-6 col-md-6 col-lg-3 text-center">
                <span class="icon font77 icon-account_balance_wallet color"></span>
                <div class="divider divider--sm"></div>
                <strong class="font22 color font-medium text-uppercase custom-font">Sit amet conse</strong>
                <div class="divider divider--md"></div>
                <p>
                    Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                </p>
            </div>
            <div class="divider divider--md1 visible-md visible-sm visible-xs"></div>
            <div class="col-sm-6 col-md-6 col-lg-3 text-center">
                <span class="icon font77  icon-schedule color"></span>
                <div class="divider divider--sm"></div>
                <strong class="font22 color font-medium text-uppercase custom-font">Ctetur adipisicing elit</strong>
                <div class="divider divider--md"></div>
                <p>
                    Ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
            <div class="divider divider--md1 visible-xs"></div>
            <div class="col-sm-6 col-md-6 col-lg-3 text-center">
                <span class="icon font77  color icon-local_shipping"></span>
                <div class="divider divider--sm"></div>
                <strong class="font22 color font-medium text-uppercase custom-font">Sed do eiusmod</strong>
                <div class="divider divider--md"></div>
                <p>
                    Dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                </p>
            </div>
        </div>
    </div>
</section>
<section class=" fill-bg content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-sm-center">
                <div class="divider divider--lg hidden-xl"></div>
                <img src="image/catalog/custom/image-bg-img-01.png" class="img-responsive" alt="">
            </div>
            <div class="col-md-12 col-md-6 col-sm-center">
                <div class="divider divider--xl-2 visible-xl"></div>
                <div class="divider divider--lg hidden-xl"></div>
                <h2 class="title-under">Why Are We The Best?</h2>
                <p>
                    Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet conse ctetur adipisicing elit.
                </p>
                <div class="divider divider--xl"></div>
            </div>
        </div>
    </div>
</section>
<section class="content">
    <div class="container">
        <div class="title-box">
            <h2 class="text-center title-under">The Best Solutions</h2>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-6">
                <a class="link-img-hover1" href="#"><img src="image/catalog/custom/img-content-01.jpg" class="img-responsive" alt=""></a>
                <div class="divider divider--md1"></div>
                <p>
                    <a class="hover-effect-01" href="#">
                        <span class="font22 text-uppercase color-custom">Lorem ipsum dolor</span>
                    </a>
                </p>
                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. </p>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <a class="link-img-hover1" href="#"><img src="image/catalog/custom/img-content-02.jpg" class="img-responsive" alt=""></a>
                <div class="divider divider--md1"></div>
                <p>
                    <a class="hover-effect-01" href="#">
                        <span class="font22 text-uppercase color-custom">sit amet conse ctetur</span>
                    </a>
                </p>
                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. </p>
            </div>
            <div class="divider divider--lg visible-sm visible-xs"></div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <a class="link-img-hover1" href="#"><img src="image/catalog/custom/img-content-03.jpg" class="img-responsive" alt=""></a>
                <div class="divider divider--md1"></div>
                <p>
                    <a class="hover-effect-01" href="#">
                        <span class="font22 text-uppercase color-custom">adipisicing elit</span>
                    </a>
                </p>
                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. </p>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <a class="link-img-hover1" href="#"><img src="image/catalog/custom/img-content-04.jpg" class="img-responsive" alt=""></a>
                <div class="divider divider--md1"></div>
                <p>
                    <a class="hover-effect-01" href="#">
                        <span class="font22 text-uppercase color-custom">sed do eiusmod tempor</span>
                    </a>
                </p>
                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. </p>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid box-baners content">
    <div class="row">
        <div class="col-md-6 col-sm-12 col-xs-12">
            <a href="index.php" class="banner zoom-in">
							<span class="figure">
								<img src="image/catalog/custom/banner-24.jpg" alt=""/>
								<span class="figcaption text-left">
									<span class="block-table">
										<span class="block-table-cell">
											<span class="block  font-size87 text-center">
												<span class="icon icon-headset_mic"></span>
											</span>
											<span class="block  custom-font font-medium font-size50 text-center">Online Support</span>
											<em class="block font-size24 text-center main-font line-height-md top-indent-md">
                                                Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            </em>

										</span>
									</span>
								</span>
							</span>
            </a>
        </div>
        <div class="col-md-6 col-sm-12 col-xs-12">
            <a href="index.php" class="banner zoom-in">
							<span class="figure">
								<img src="image/catalog/custom/banner-25.jpg" alt=""/>
								<span class="figcaption text-left">
									<span class="block-table">
										<span class="block-table-cell">
											<span class="block  font-size87 text-center color-custom">
												<span class="icon icon-av_timer"></span>
											</span>
											<span class="block  custom-font font-medium font-size50 text-center text-dark ">Order Return</span>
											<em class="block font-size24 text-center main-font color-custom line-height-md top-indent-md">
                                                Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            </em>

										</span>
									</span>
								</span>
							</span>
            </a>
        </div>
    </div>
</section>
</div>
<!--//services page-->

<!--warranity page-->
<style type="text/css">
    .information-information-14 .container.information .title-box.default{display:none}
</style>
<div class="page_warranity">
    <div class="title-box">
        <h1 class="text-left text-uppercase title-under">Warranty and services</h1>
    </div>
    <h3 class="color title-decimal font30" data-content="1">What products are warranted?</h3>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
    <ul class="decimal-list font-bold color-dark">
        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
        <li>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
        <li>Ut enim ad minim veniam, quis nostrud exercitation</li>
        <li>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
    </ul>
    <hr class="hr-lg">
    <h3 class="color title-decimal font30"  data-content="2">Where to go for warranty service?</h3>
    <p>
        Dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
    <hr class="hr-lg">
    <h3 class="color title-decimal font30"  data-content="3">I can exchange or return an item?</h3>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
    </p>
    <div class="media-icon">
        <div class="media-icon--figure" href="#">
            <span class="icon icon-error font48 opacity-15"></span>
        </div>
        <div class="media-icon--content">
            <p>
                <em class="color-dark font18 main-font">
                    Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </em>
            </p>
        </div>
    </div>
    <p>
        Adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
    </p>
    <hr class="hr-lg">
    <h3 class="color title-decimal font30"   data-content="4">In some cases, the warranty is not provided?</h3>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
    <ul class="decimal-list font-bold color-dark">
        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
        <li>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
        <li>Ut enim ad minim veniam, quis nostrud exercitation</li>
        <li>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
    </ul>
</div>
<!--//warranity page-->

<!--delivery page-->
<style type="text/css">
    .information-information-16 .container.information .title-box.default{display:none}
</style>
<div class="page_delivery">
    <!-- title -->
    <div class="title-box">
        <h1 class="text-center text-uppercase title-under">SHIPPING METHOD</h1>
    </div>
    <!-- /title -->
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3  col-sm-center">
            <img class="img-responsive1" src="image/catalog/custom/img_icon-04.png" alt=""/>
            <div class="divider divider--lg"></div>
            <h2 class="color font30 title-bottom-sm2">Cash & Carry</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.
            </p>
            <ul class="simple-list font-bold color-dark">
                <li><a href="#">Lorem ipsum dolor sit amet  consectetur</a></li>
                <li><a href="#">Sed do eiusmod tempor incididunt </a></li>
                <li><a href="#">Ut labore et dolore magna aliqua. </a></li>
                <li><a href="#">UQuis nostrud exercitation ullamco.</a></li>
            </ul>
        </div>
        <div class="divider divider--lg visible-sm visible-xs"></div>
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 col-sm-center">
            <img class="img-responsive1" src="image/catalog/custom/img_icon-05.png" alt=""/>
            <div class="divider divider--lg"></div>
            <h2 class="color font30 title-bottom-sm2">Pick-Up from a Post Parcel  Point in your City</h2>
            <p>
                Dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            </p>
            <ol class="decimal-list font-bold color-dark">
                <li><a href="#">Sed do eiusmod tempor incididunt</a></li>
                <li><a href="#">Ut labore et dolore magna aliqua.</a> </li>
                <li><a href="#">Quis nostrud exercitation ullamco.</a></li>
            </ol>
            <p>
                Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitatio.
            </p>
        </div>
        <div class="divider divider--lg visible-sm visible-xs visible-md visible-lg hidden-xl "></div>
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 col-sm-center">
            <img class="img-responsive1" src="image/catalog/custom/img_icon-06.png" alt=""/>
            <div class="divider divider--lg"></div>
            <h2 class="color font30  title-bottom-sm2">Shipment to The Door</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
        </div>
        <div class="divider divider--lg visible-sm visible-xs"></div>
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 col-sm-center">
            <img class="img-responsive1" src="image/catalog/custom/img_icon-07.png" alt=""/>
            <div class="divider divider--lg"></div>
            <h2 class="color font30  title-bottom-sm2">International Delivery</h2>
            <p>
                Lorem ipsum dolor sit amet, csed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
            <ul class="simple-list color-dark">
                <li><a href="#">Lorem ipsum dolor sit amet  consectetur</a></li>
                <li><a href="#">Sed do eiusmod tempor incididunt</a></li>
            </ul>
            <p>
                Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
            </p>
            <div class="media-icon">
                <div class="media-icon--figure" href="#">
                    <span class="icon icon-error font48 opacity-15"></span>
                </div>
                <div class="media-icon--content">
                    <em class="color-dark font18 main-font">
                        Eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </em>
                </div>
            </div>
        </div>
    </div>

</div>
<!--//delivery page-->

<!--typography page-->
<div class="page_typography">
<div class="row">
    <div class="col-sm-6 col-md-6 col-lg-6">
        <h2 class="text-left text-uppercase title-under">DROPCAPS</h2>
        <p>
            <spa class="dropcap color-custom">D</spa>
            ullam ac nisi non eros gravida venenatis. Ut euismod, turpis sollicitudin lobortis pellentesque, libero massa dapibus dui, eu dictum justo urna et.   <span class="lead"><em>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod</em></span> &nbsp; Integer dictum est vitae sem. Vestibm justo. Nulla mauris ipsum, convallis ut, vestibulum eu, tincidunt vel, nisi. Curabitur molestie euism od erat. Proin eros odio, mattis rutrum, pulvinar et, egestas vitae, magna.

            Integer semper, velit ut nisl. Nam lectus nulla, bibendum pretium, dictum a, mattis nec, dolor.
        </p>
        <p>
            <spa class="dropcap  color-dark">D</spa>
            ullam ac nisi non eros gravida venenatis. Ut euismod, turpis sollicitudin lobortis pellentesque, libero massa dapibus dui, eu dictum justo urna et mi. Integer dictum est vitae sem. Vestibm justo. <strong class="color-custom">Nulla mauris ipsum, convallis ut,</strong> vestibulum eu, tincidunt vel, nisi. Curabitur molestie euism od erat. Proin eros odio, mattis rutrum, pulvinar et, <ins class="color-dark">egestas vitae, magna</ins>. Integer semper, velit ut nisl. Nam lectus nulla, bibendum pretium, dictum a, mattis nec, dolor.
        </p>
        <div class="divider divider--lg"></div>
        <h2 class="text-left text-uppercase title-under">Definition Lists</h2>
        <dl>
            <dt>Lorem ipsum dolor sit amet </dt>
            <dd>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </dd>
            <dt>Conse ctetur adipisicing</dt>
            <dd>Conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</dd>
            <dt>Sed do eiusmod</dt>
            <dd>
                Conse ctetur adipisicing elit, sed do <a href="#">eiusmod tempor</a> incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
            </dd>
        </dl>
        <h2 class="text-left text-uppercase title-under">button</h2>

        <p>
            <a href="#" class="btn btn--ys btn-lg text-uppercase  btn--xs">button</a>
        </p>
        <p>
            <a href="#" class="btn btn--ys btn-lg text-uppercase  btn--sm">button</a>
        </p>
        <p>
            <a href="#" class="btn btn--ys btn-lg text-uppercase  btn--md">button <span class="icon icon-arrow_forward"></span></a>
        </p>
        <p>
            <a href="#" class="btn btn--ys btn-lg text-uppercase  btn--lg">button</a>
        </p>
        <p>
            <a href="#" class="btn btn--ys btn-lg text-uppercase  btn--xl">button</a>
        </p>
    </div>
    <div class="col-sm-6 col-md-6 col-lg-6">
        <h2 class="text-left text-uppercase title-under">HEADING HELPER CLASSES</h2>
        <p>
            <span class="mark bg-custom color-white">Lorem ipsum</span> dolor sit amet, <span class="mark bg-black color-white">consectetuer adipiscing elit</span>. Donec eros tellus, scelerisque nec, rhoncus eget, sollicitudin eu, vehicula venenatis, tempor vitae, est. <a href="#" class="color-custom underline">Praesent vitae dui</a>. Morbi id tellus. Nullam ac nisi <a href="#" class="underline color-dark">non eros gravida venenatis</a>. Ut euismod, turpis social-links--largecitudin lobortis pellentesque, libero massa dapibus dui, eu dictum justo urna et mi. Integer dictum est vitae sem.
        </p>
        <div class="divider divider--lg"></div>
        <h2 class="text-left text-uppercase title-under">BLOCKQUOTE</h2>
        <blockquote class="quote-left">
            <p>
                Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
            <cite>
                <b>Amanda Smith</b> - designer
            </cite>
        </blockquote>
        <h2 class="text-left text-uppercase title-under">TABLES</h2>
        <h5>STRIPED TABLE</h5>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col"># </th>
                <th scope="col">Title 1</th>
                <th scope="col">Title 2 </th>
                <th scope="col">Title 3</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Table cell</td>
                <td>Table cell </td>
                <td>Table cell </td>
                <td>Table cell </td>
            </tr>
            <tr>
                <td>Table cell</td>
                <td>Table cell </td>
                <td>Table cell </td>
                <td>Table cell </td>
            </tr>
            </tbody>
        </table>
        <div class="divider divider--md"></div>
        <h5>BORDERED TABLE</h5>
        <table class="table-bordered-01">
            <thead>
            <tr>
                <th>Title 1</th>
                <th>Title 2</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>UK</td>
                <td>
                    <ul>
                        <li>18</li>
                        <li>20</li>
                        <li>22</li>
                        <li>24</li>
                        <li>26</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>European</td>
                <td>
                    <ul>
                        <li>46</li>
                        <li>48</li>
                        <li>50</li>
                        <li>52</li>
                        <li>54</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>US</td>
                <td>
                    <ul>
                        <li>14</li>
                        <li>16</li>
                        <li>18</li>
                        <li>20</li>
                        <li>22</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Australia</td>
                <td>
                    <ul>
                        <li>8</li>
                        <li>10</li>
                        <li>12</li>
                        <li>14</li>
                        <li>16</li>
                    </ul>
                </td>
            </tr>
            </tbody>
        </table>
        <div class="divider divider--md"></div>
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th scope="col"># </th>
                <th scope="col">Title 1</th>
                <th scope="col">Title 2 </th>
                <th scope="col">Title 3</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Table cell</td>
                <td>Table cell </td>
                <td>Table cell </td>
                <td>Table cell </td>
            </tr>
            <tr>
                <td>Table cell</td>
                <td>Table cell </td>
                <td>Table cell </td>
                <td>Table cell </td>
            </tr>
            </tbody>
        </table>

    </div>
</div>
<h2 class="text-left text-uppercase title-under">list</h2>
<div class="row">
    <div class="col-md-6 col-sm-6 col-xs-12">
        <h4 class="color title-header">Unordered Lists (Nested)</h4>
        <ul class="simple-list ">
            <li>
                List item one
                <ul>
                    <li>
                        List item one
                        <ul>
                            <li>List item one</li>
                            <li>List item two</li>
                            <li>List item three</li>
                            <li>List item four</li>
                        </ul>
                    </li>
                    <li>List item two</li>
                    <li>List item three</li>
                    <li>List item four</li>
                </ul>
            </li>
            <li>List item two</li>
            <li>List item three</li>
            <li>List item four</li>
        </ul>
    </div>
    <div class="divider divider--lg visible-xs"></div>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <h4 class="color title-header">Ordered List (Nested)</h4>
        <ol class="decimal-list">
            <li>
                List item one
                <ul>
                    <li>
                        List item one
                        <ul>
                            <li>List item one</li>
                            <li>List item two</li>
                            <li>List item three</li>
                            <li>List item four</li>
                        </ul>
                    </li>
                    <li>List item two</li>
                    <li>List item three</li>
                    <li>List item four</li>
                </ul>
            </li>
            <li>List item two</li>
            <li>List item three</li>
            <li>List item four</li>
        </ol>
    </div>
</div>
<ul class="marker-list-circle">
    <li>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</li>
    <li>Laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt . </li>
    <li>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</li>
</ul>

<div class="divider divider--lg"></div>
<!-- table -->
<h2 class="text-left text-uppercase title-under">Grid</h2>
<div class="row">
    <div class="col-lg-12">
        <h5>1 COLUMN</h5>
        <h4 class="color text-center">Center Align</h4>
        <p class="text-center">
            Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.Lorem ipsum dolor sit
            amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt.
        </p>
        <h4 class="color">Left Align</h4>
        <p>
            Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.Lorem ipsum dolor sit
            amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt.
        </p>
        <h4 class="color text-right">Right Align</h4>
        <p class="text-right">
            Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt.
        </p>
    </div>
</div>
<div class="divider divider--md"></div>
<div class="row">
    <div class="col-sm-6 col-md-6 col-lg-6">
        <h5>1/2 COLUMNS</h5>
        <h5 class="color text-left">Color</h5>
        <p>
            <span class="color-custom">Color text</span>
            <span class="text-color">Color text</span>
            <span class="color-white bg-custom">Color text</span>
            <span class="color-dark">Color text</span>
            <span class="color-red">Color text</span>
            <span class="color-blue">Color text</span>
            <span class="color-blue-light">Color text</span>
            <span class="color-green">Color text</span>
            <span class="color-green-dark">Color text</span>
            <span class="color-gray">Color text</span>
            <span class="color-yellow">Color text</span>
        </p>
        <p> Maecenas lacus aliquet et nisl nunc, per sed sed maecenas.Lectus tincidunt pellentesque augue urna sit sed, arcu sed ante ac montes pellentesque consectetuer, neque magnis penatibus laoreet vehicula nulla orci.</p>
        <h5 class="color text-left">background</h5>
        <p>
            <span class="bg-custom color-white">&nbsp;bg text&nbsp;</span>
            <span class="bg-red color-white">&nbsp;bg text&nbsp;</span>
            <span class="bg-blue color-white">&nbsp;bg text&nbsp;</span>
            <span class="bg-light-blue color-white">&nbsp;bg text&nbsp;</span>
            <span class="bg-green color-white">&nbsp;bg text&nbsp;</span>
            <span class="bg-green-light color-white">&nbsp;bg text&nbsp;</span>
            <span class="bg-green-dark color-white">&nbsp;bg text&nbsp;</span>
            <span class="bg-yellow color-white">&nbsp;bg text&nbsp;</span>
            <span class="bg-coquelicot color-white">&nbsp;bg text&nbsp;</span>
            <span class="bg-black color-white">&nbsp; bg text &nbsp;</span>
        </p>

    </div>
    <div class="divider divider--lg visible-xs"></div>
    <div class="col-sm-6 col-md-6 col-lg-6">
        <h5>1/2 COLUMNS</h5>
        <p>Mauris aliquet ultricies ante, non faucibus ante gravida sed. Sed ultrices pellenlaoreet justo ultrices. In pellentesque lorem condimentum dui morbi pulvinar dui non quam pretium ut lacinia tortor. Fusce lacinia tempor malesuada. Fringilla penatibus orci est non mollit, suspendisse pulvinar egestas a donec. Vulputate mi dui suscipit, molestie vulputate libero fusce iaculis suscipit. Sapien pede libero. Maecenas lacus aliquet et nisl nunc, per sed sed maecenas.Lectus tincidunt pellentesque augue urna sit sed, arcu sed ante ac montes pellentesque consectetuer, neque magnis penatibus laoreet vehicula nulla orci, a malesuada justo laoreet ipsum, in ac fusce. At sapien neque sollicitudin lacus, dolor semper in laoreet, magnis convallis posuere adipiscing, dapibus suspendisse nonummy pellentesque consequat interdum odio.</p>
    </div>
</div>
<div class="divider divider--md"></div>
<div class="row">
    <div class="col-sm-4 col-md-4 col-lg-4">
        <h5>1/3 COLUMNS</h5>
        <p>Mauris aliquet ultricies ante, non faucibus ante gravida sed. Sed ultrices pellenlaoreet justo ultrices. In pellentesque lorem condimentum dui morbi pulvinar dui non quam pretium ut lacinia tortor. Fusce lacinia tempor malesuada. Fringilla penatibus orci est non mollit, suspendisse pulvinar egestas a donec. </p>
    </div>
    <div class="col-sm-4 col-md-4 col-lg-4">
        <h5>1/3 COLUMNS</h5>
        <p>Mauris aliquet ultricies ante, non faucibus ante gravida sed. Sed ultrices pellenlaoreet justo ultrices. In pellentesque lorem condimentum dui morbi pulvinar dui non quam pretium ut lacinia tortor. Fusce lacinia tempor malesuada. Fringilla penatibus orci est non mollit, suspendisse pulvinar egestas a donec. </p>
    </div>
    <div class="col-sm-4 col-md-4 col-lg-4">
        <h5>1/3 COLUMNS</h5>
        <p>Mauris aliquet ultricies ante, non faucibus ante gravida sed. Sed ultrices pellenlaoreet justo ultrices. In pellentesque lorem condimentum dui morbi pulvinar dui non quam pretium ut lacinia tortor. Fusce lacinia tempor malesuada. Fringilla penatibus orci est non mollit, suspendisse pulvinar egestas a donec. </p>
    </div>
</div>
<div class="divider divider--md"></div>
<div class="row">
    <div class="col-sm-8 col-md-8 col-lg-8">
        <h5>2/3 COLUMNS</h5>
        <p>Mauris aliquet ultricies ante, non faucibus ante gravida sed. Sed ultrices pellenlaoreet justo ultrices. In pellentesque lorem condimentum dui morbi pulvinar dui non quam pretium ut lacinia tortor. Fusce lacinia tempor malesuada. Fringilla penatibus orci est non mollit, suspendisse pulvinar egestas a donec. Vulputate mi dui suscipit, molestie vulputate libero fusce iaculis suscipit. Sapien pede libero. Maecenas lacus aliquet et nisl nunc, per sed sed maecenas.Lectus tincidunt pellentesque augue urna sit sed, arcu sed ante ac montes pellentesque consectetuer, neque magnis penatibus laoreet magnis convallis posuere adipiscing, dapibus suspendisse nonummy pellentesque consequat interdum odio.</p>
    </div>
    <div class="col-sm-4 col-md-4 col-lg-4">
        <h5>1/3 COLUMNS</h5>
        <p>Mauris aliquet ultricies ante, non faucibus ante gravida sed. Sed ultrices pellenlaoreet justo ultrices. In pellentesque lorem condimentum dui morbi pulvinar dui non quam pretium ut lacinia tortor. Fusce lacinia tempor malesuada. Fringilla penatibus orci est non mollit, suspendisse pulvinar egestas a donec. </p>
    </div>
</div>
<div class="divider divider--md"></div>
<div class="row">
    <div class="col-sm-6 col-md-3 col-lg-3">
        <h5>1/4 COLUMNS</h5>
        <p>Mauris aliquet ultricies ante, non ante gravida sed. Sed ultrices pel lenlao reet justo ultrices. In pellentesque lorem con dimentum dui morbi pulvinar dui non quam pretium ut lacinia suspe ndisse pulvinar donec labore diam. </p>
    </div>
    <div class="col-sm-6 col-md-3 col-lg-3">
        <h5>1/4 COLUMNS</h5>
        <p>Mauris aliquet ultricies ante, non ante gravida sed. Sed ultrices pel lenlao reet justo ultrices. In pellentesque lorem con dimentum dui morbi pulvinar dui non quam pretium ut lacinia suspe ndisse pulvinar donec labore diam. </p>
    </div>
    <div class="col-sm-6 col-md-3 col-lg-3">
        <h5>1/4 COLUMNS</h5>
        <p>Mauris aliquet ultricies ante, non ante gravida sed. Sed ultrices pel lenlao reet justo ultrices. In pellentesque lorem con dimentum dui morbi pulvinar dui non quam pretium ut lacinia suspe ndisse pulvinar donec labore diam. </p>
    </div>
    <div class="col-sm-6 col-md-3 col-lg-3">
        <h5>1/4 COLUMNS</h5>
        <p>Mauris aliquet ultricies ante, non ante gravida sed. Sed ultrices pel lenlao reet justo ultrices. In pellentesque lorem con dimentum dui morbi pulvinar dui non quam pretium ut lacinia suspe ndisse pulvinar donec labore diam. </p>
    </div>
</div>
<div class="divider divider--md"></div>
<div class="row">
    <div class="col-sm-9 col-md-9 col-lg-9">
        <h5>3/4 COLUMNS</h5>
        <p>Nam ac ipsum dui, a sollicitudin massa. Pellentesque semper ligula ut eros dapibus sit amet vehicula nisi tempus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eget urna sit amet sapien vestibulum auctor ac blandit erat. Sed sagittis volutpat urna nec lobortis. Aser velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in anim id est laborum. Asunt in anim uis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in anim id est laborum. Allamco laboris nisi ut aliquip ex ea commodo consequat. Aser velit esse cillum dolore eu fugiat nulla pariatur.</p>
    </div>
    <div class="col-sm-3 col-md-3 col-lg-3">
        <h5>1/4 COLUMNS</h5>
        <p>Mauris aliquet ultricies ante, non ante gravida sed. Sed ultrices pel lenlao reet justo ultrices. In pellentesque lorem con dimentum dui morbi pulvinar dui non quam pretium ut lacinia suspe ndisse pulvinar donec labore diam. </p>
    </div>
</div>
<div class="divider divider--md"></div>
<div class="row">
    <div class="col-sm-6 col-md-2 col-lg-2">
        <h5>1/6 COLUMNS</h5>
        <p>Mauris aliquet ultrics ant, ultrices pel lenlao rejusto sed ultrices. In pellesque pretium utlore lacini et ndisse pulvinar donec labore diam. </p>
    </div>
    <div class="col-sm-6 col-md-2 col-lg-2">
        <h5>1/6 COLUMNS</h5>
        <p>Mauris aliquet ultrics ant, ultrices pel lenlao rejusto sed ultrices. In pellesque pretium utlore lacini et ndisse pulvinar donec labore diam. </p>
    </div>
    <div class="col-sm-6 col-md-2 col-lg-2">
        <h5>1/6 COLUMNS</h5>
        <p>Mauris aliquet ultrics ant, ultrices pel lenlao rejusto sed ultrices. In pellesque pretium utlore lacini et ndisse pulvinar donec labore diam. </p>
    </div>
    <div class="col-sm-6 col-md-2 col-lg-2">
        <h5>1/6 COLUMNS</h5>
        <p>Mauris aliquet ultrics ant, ultrices pel lenlao rejusto sed ultrices. In pellesque pretium utlore lacini et ndisse pulvinar donec labore diam. </p>
    </div>
    <div class="col-sm-6 col-md-2 col-lg-2">
        <h5>1/6 COLUMNS</h5>
        <p>Mauris aliquet ultrics ant, ultrices pel lenlao rejusto sed ultrices. In pellesque pretium utlore lacini et ndisse pulvinar donec labore diam. </p>
    </div>
    <div class="col-sm-6 col-md-2 col-lg-2">
        <h5>1/6 COLUMNS</h5>
        <p>Mauris aliquet ultrics ant, ultrices pel lenlao rejusto sed ultrices. In pellesque pretium utlore lacini et ndisse pulvinar donec labore diam. </p>
    </div>
</div>
<div class="divider divider--md"></div>
<div class="row">
    <div class="col-sm-8 col-md-10 col-lg-10">
        <h5>5/6 COLUMNS</h5>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet, nunc. Ut sit amet turpis. In est arcu, sollicitudin eu, vehicula venenatis, tempor vitae, est. Praesent vitae dui. Morbi id tellus. Cum sociis natoque penatibus et magnis dis part urient montes, nascetur ridiculus mus. Maecenas eu enim in lorem scelerisque auctor. Ut non erat. Suspendisse fermentum posuere lectus. Fusce vulputate nibh egestas orci. Aliquam lectus. Morbi eget dolor ullamcorper massa pellentesque sagittis. Morbi sit amet quam sed felis. Quisque vest ibulum massa. Nulla ornare. Nulla libero. Donec et mi eu massa ultrices scelerisque. Nullam ac nisi non eros gravida venenatis. Ut euismod, turpis sollicitudin lobortis pellentesque, libero massa dapibus dui, eu dictum justo urna et mi. Integer dictum est vitae sem. </p>
    </div>
    <div class="col-sm-4 col-md-2 col-lg-2">
        <h5>1/6 COLUMNS</h5>
        <p>Mauris aliquet ultrics ant, ultrices pel lenlao rejusto sed ultrices. In pellesque pretium utlore lacini et ndisse pulvinar donec labore diam. </p>
    </div>
</div>

</div>
<!--//typography page-->

<!--support 24/7 page-->
<style type="text/css">
    .information-information-15 .container.information .title-box.default{display:none}
</style>
<div class="page_support24">
    <div class="title-box">
        <h1 class="text-center text-uppercase title-under">HAVE A QUESTION?</h1>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <p class="text-center">
                Dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            </p>
        </div>
    </div>
    <div class="divider divider--lg"></div>
    <div class="row">
        <div class="col-md-6">
            <div class="media-box-link"  onclick="location.href='#'">
                <div class="media-box-link--figure text-center">
                    <span class="icon icon-assignment font86"></span>
                </div>
                <div class="media-box-link--content">
                    <h4 class="font22">KNOWLEDGE BASE</h4>
                    <p>
                        Dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcol.
                    </p>
                </div>
                <div class="media-box-link--arrow">
                    <span class="icon icon-arrow_forward font36"></span>
                </div>
            </div>
            <div class="divider divider--md1"></div>
            <div class="media-box-link"  onclick="location.href='#'">
                <div class="media-box-link--figure text-center">
                    <span class="icon icon-comment font86"></span>
                </div>
                <div class="media-box-link--content">
                    <h4 class="font22">KNOWLEDGE BASE</h4>
                    <p>
                        Dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcol.
                    </p>
                </div>
                <div class="media-box-link--arrow">
                    <span class="icon icon-arrow_forward font36"></span>
                </div>
            </div>
            <div class="divider divider--md1"></div>
        </div>
        <div class="col-md-6"  onclick="location.href='#'">
            <div class="media-box-link">
                <div class="media-box-link--figure text-center">
                    <span class="icon icon-help font86"></span>
                </div>
                <div class="media-box-link--content">
                    <h4 class="font22">KNOWLEDGE BASE</h4>
                    <p>
                        Dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcol.
                    </p>
                </div>
                <div class="media-box-link--arrow">
                    <span class="icon icon-arrow_forward font36"></span>
                </div>
            </div>
            <div class="divider divider--md1"></div>
            <!--  -->
            <div class="media-box-link"  onclick="location.href='#'">
                <div class="media-box-link--figure text-center">
                    <span class="icon icon-drafts font86"></span>
                </div>
                <div class="media-box-link--content">
                    <h4 class="font22">KNOWLEDGE BASE</h4>
                    <p>
                        Dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcol.
                    </p>
                </div>
                <div class="media-box-link--arrow">
                    <span class="icon icon-arrow_forward font36"></span>
                </div>
            </div>
            <div class="divider divider--md1"></div>
        </div>
    </div>

</div>
<!--//support 24/7 page-->

<!--FAQs page-->
<style type="text/css">
    .information-information-20 .container.information .title-box.default{display:none}
</style>
<div class="page_faq">
    <div class="title-box">
        <h1 class="text-left text-uppercase title-under">FAQS</h1>
    </div>
    <h3 class="color font30">Delivery</h3>
    <div class="collapse-block open collapse-block--indent-lg">
        <h4 class="collapse-block__title collapse-block__icon-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</h4>
        <div class="collapse-block__content">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </div>
    </div>
    <div class="collapse-block open collapse-block--indent-lg">
        <h4 class="collapse-block__title collapse-block__icon-left">Consectetur adipiscing elit, sed do eiusmod tempor incididunt?</h4>
        <div class="collapse-block__content">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
            <ul class="simple-list color-dark list-indent-left">
                <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
                <li><a href="#">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a></li>
                <li><a href="#">Ut enim ad minim veniam, quis nostrud exercitation ullamco.</a></li>
            </ul>
        </div>
    </div>
    <div class="collapse-block open collapse-block--indent-lg  border-none">
        <h4 class="collapse-block__title collapse-block__icon-left">Labore et dolore magna aliqua?</h4>
        <div class="collapse-block__content">
            <div class="media media-content-img-left">
                <a class="pull-left" href="#">
                    <img class="img-responsive" src="image/catalog/custom/faw_img-01.jpg" alt=""/>
                </a>
                <div class="media-body">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
            </div>

        </div>
    </div>
    <div class="divider divider--md"></div>
    <h3 class="color font30">Warranty</h3>
    <div class="collapse-block collapse-block--indent-lg">
        <h4 class="collapse-block__title collapse-block__icon-left">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.?</h4>
        <div class="collapse-block__content">

            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.

        </div>
    </div>
    <div class="collapse-block collapse-block--indent-lg">
        <h4 class="collapse-block__title collapse-block__icon-left">Ut enim ad minim veniam?</h4>
        <div class="collapse-block__content">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
            <ul class="simple-list color-dark list-indent-left">
                <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
                <li><a href="#">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a></li>
                <li><a href="#">Ut enim ad minim veniam, quis nostrud exercitation ullamco.</a></li>
            </ul>

        </div>
    </div>
    <div class="collapse-block border-none">
        <h4 class="collapse-block__title collapse-block__icon-left">Quis nostrud exercitation ullamco laboris nisi ut aliquip?</h4>
        <div class="collapse-block__content">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.

        </div>
    </div>
    <div class="divider divider--md"></div>
    <h3 class="color font30">Payment</h3>
    <div class="collapse-block collapse-block--indent-lg">
        <h4 class="collapse-block__title collapse-block__icon-left">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore?</h4>
        <div class="collapse-block__content">

            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.

        </div>
    </div>
    <div class="collapse-block collapse-block--indent-lg">
        <h4 class="collapse-block__title collapse-block__icon-left">Sit amet, consectetur adipiscing elit?</h4>
        <div class="collapse-block__content">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
            <ul class="simple-list color-dark list-indent-left">
                <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
                <li><a href="#">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a></li>
                <li><a href="#">Ut enim ad minim veniam, quis nostrud exercitation ullamco.</a></li>
            </ul>

        </div>
    </div>
    <div class="collapse-block collapse-block--indent-lg">
        <h4 class="collapse-block__title collapse-block__icon-left">Ipsum dolor sit amet, consectetur adipiscing elit?</h4>
        <div class="collapse-block__content">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </div>
    </div>
</div>
<!--//FAQs page-->

<!--under construction page-->
<style type="text/css">
    .information-information-17 .container.information{width:100%}
    .information-information-17 .container.information .row{margin-left:0;margin-right:0}
    .information-information-17 .container.information .title-box.default{display:none}
</style>
<div class="page_under_construction">
    <section class="container-fluid under-construction image-bg" data-image="image/catalog/custom/under-construction-img.jpg">
        <div class="text-center color-white">
            <div class="divider divider--xl-1"></div>
            <h1 class="font50 color-white title-bottom-md">WE'RE COMING SOON</h1>
            <div class="countdown-transparent">
                <div id="countdownConstruction"></div>
            </div>
            <div class="divider divider--lg"></div>
            <p class="font22">
                We are working very hard on the new version of our site.  It will bring a lot of new features. Stay tuned!
            </p>
            <div class="divider divider--lg"></div>
            <h2 class=" color-white">SUBSCRIBE TO OUR NEWSLETTER</h2>
            <p>
                Sign up now to our newsletter and you'll be one of the first to know when the site is ready:
            </p>
            <div class="divider divider--xs"></div>
            <div class="subscribe-full-center">
                <form class="form-inline">
                    <input class="form-control" type="text" name="subscribe">
                    <button type="submit" class="btn btn--ys btn--xl">SUBSCRIBE</button>
                </form>
            </div>
            <div class="divider divider--md"></div>
            <div class="social-links social-links-no-bg  social-links--large text-center">
                <ul>
                    <li><a class="icon fa fa-facebook" href="http://www.facebook.com/"></a></li>
                    <li><a class="icon fa fa-twitter" href="http://www.twitter.com/"></a></li>
                    <li><a class="icon fa fa-google-plus" href="http://www.google.com/"></a></li>
                    <li><a class="icon fa fa-instagram" href="https://instagram.com/"></a></li>
                    <li><a class="icon fa fa-youtube-square" href="https://www.youtube.com/"></a></li>
                </ul>
            </div>
            <div class="divider divider--xl"></div>
        </div>
    </section>
</div>
<!--//under construction page-->

<!--payment page-->
<div class="page_payment">
    <div class="row">
        <div class="col-sm-12 col-md-4">
            <img class="img-responsive1" src="image/catalog/custom/img_icon-01.png" alt=""/>
            <div class="divider divider--lg"></div>
            <h2 class="color font30 title-bottom-sm2">Check / Money order</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.
            </p>
            <ul class="simple-list font-bold color-dark">
                <li>Lorem ipsum dolor sit amet  consectetur</li>
                <li>Sed do eiusmod tempor incididunt</li>
            </ul>
        </div>
        <div class="divider divider--lg visible-sm visible-xs"></div>
        <div class="col-sm-12 col-md-4 col-sm-center">
            <img class="img-responsive" src="image/catalog/custom/img_icon-02.png" alt=""/>
            <div class="divider divider--lg"></div>
            <h2 class="color font30 title-bottom-sm2">Credit Card (saved)</h2>
            <p>
                Dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            </p>
            <ol class="decimal-list font-bold color-dark">
                <li>Sed do eiusmod tempor incididunt </li>
                <li>Ut labore et dolore magna aliqua. </li>
                <li>Quis nostrud exercitation ullamco.</li>
            </ol>
            <p>
                Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
            </p>
        </div>
        <div class="divider divider--lg visible-sm visible-xs"></div>
        <div class="col-sm-12 col-md-4 col-sm-center">
            <img class="img-responsive" src="image/catalog/custom/img_icon-03.png" alt=""/>
            <div class="divider divider--lg"></div>
            <h2 class="color font30  title-bottom-sm2">Cash Payment</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
        </div>
    </div>

</div>
<!--//payment page-->

<!--404 page-->
<style type="text/css">
    .information-information-21 .container.information .title-box.default{display:none}
</style>
<div class="title-box">
    <h1 class="text-center mega">Ooops!</h1>
</div>
<div class="text-center">
    <img src="image/catalog/pages/page-404-icon.png" alt="empty cart icon" class="img-responsive-inline" />
    <div class="divider divider--lg"></div>
    <div class="text-with-button">
        <span>You might want to check that URL again or head over to our </span><a class="btn btn--ys" href="index.html"><span class="icon icon-home"></span>homepage</a>
    </div>
</div>

<!--//404 page-->

<!--Gallery - Layout 1 image/catalog/-->
<div id="page-wrap" class="gallery">
    <div class="filter-nav">
        <div rel="all" class="current">All</div>
        <div rel="nature">nature</div>
        <div rel="objects">objects</div>
        <div rel="people">people</div>
    </div>

    <div id="filter-content" class="gallery-content row">
        <div class="filter-content-item all people col-sm-6">
            <figure>
                <img src="image/catalog/gallery/gallery-large/gallery-large-img-01.jpg" class="all people" alt="" />
                <figcaption><!-- add class .content-center in figcaption (center icons)-->
                    <div class="block-table">
                        <div class="block-table-cell">
                            <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                            <em class="color-custom font18">People</em>
                            <div class="divider divider--sm"></div>
                            <p class="font-lighter">
                                Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                            <div class="button-box">
                                <a href="image/catalog/gallery/gallery-large/gallery-large-img-01.jpg" class="zomm-gallery"  title="Title"></a>
                                <a href="#" class="link-gallery"></a>
                            </div>
                        </div>
                    </div>
                </figcaption>
            </figure>
        </div>
        <div class="filter-content-item all nature col-sm-6">
            <figure>
                <img src="image/catalog/gallery/gallery-large/gallery-large-img-02.jpg" class="all people" alt="" />
                <figcaption><!-- add class .content-center in figcaption (center icons)-->
                    <div class="block-table">
                        <div class="block-table-cell">
                            <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                            <em class="color-custom font18">People</em>
                            <div class="divider divider--sm"></div>
                            <p class="font-lighter">
                                Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                            <div class="button-box">
                                <a href="image/catalog/gallery/gallery-large/gallery-large-img-02.jpg" class="zomm-gallery"  title="Title"></a>
                                <a href="#" class="link-gallery"></a>
                            </div>
                        </div>
                    </div>
                </figcaption>
            </figure>
        </div>
        <div class="filter-content-item all objects col-sm-6">
            <figure>
                <img src="image/catalog/gallery/gallery-large/gallery-large-img-03.jpg" class="all people" alt="" />
                <figcaption><!-- add class .content-center in figcaption (center icons)-->
                    <div class="block-table">
                        <div class="block-table-cell">
                            <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                            <em class="color-custom font18">People</em>
                            <div class="divider divider--sm"></div>
                            <p class="font-lighter">
                                Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                            <div class="button-box">
                                <a href="image/catalog/gallery/gallery-large/gallery-large-img-03.jpg" class="zomm-gallery"  title="Title"></a>
                                <a href="#" class="link-gallery"></a>
                            </div>
                        </div>
                    </div>
                </figcaption>
            </figure>
        </div>
        <div class="filter-content-item all people col-sm-6">
            <figure>
                <img src="image/catalog/gallery/gallery-large/gallery-large-img-04.jpg" class="all people" alt="" />
                <figcaption><!-- add class .content-center in figcaption (center icons)-->
                    <div class="block-table">
                        <div class="block-table-cell">
                            <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                            <em class="color-custom font18">People</em>
                            <div class="divider divider--sm"></div>
                            <p class="font-lighter">
                                Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                            <div class="button-box">
                                <a href="image/catalog/gallery/gallery-large/gallery-large-img-04.jpg" class="zomm-gallery"  title="Title"></a>
                                <a href="#" class="link-gallery"></a>
                            </div>
                        </div>
                    </div>
                </figcaption>
            </figure>
        </div>
    </div>
</div>
<!--//Gallery - Layout 1-->

<!--Gallery - Layout 2-->
<div id="page-wrap" class="gallery">
<div class="filter-nav">
    <div rel="all" class="current">All</div>
    <div rel="nature">nature</div>
    <div rel="objects">objects</div>
    <div rel="people">people</div>
</div>


<div id="filter-content" class="gallery-content row">
    <div class="filter-content-item all people col-sm-6  col-md-4 col-lg-4">
        <figure>
            <img src="image/catalog/gallery/gallery-middle/gallery-middle-img-01.jpg" class="all people" alt="" />
            <figcaption><!-- add class .content-center in figcaption (center icons)-->
                <div class="block-table">
                    <div class="block-table-cell">
                        <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                        <em class="color-custom font18">People</em>
                        <div class="divider divider--sm"></div>
                        <p class="font-lighter">
                            Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                        <div class="button-box">
                            <a href="image/catalog/gallery/gallery-middle/gallery-middle-img-01.jpg" class="zomm-gallery"  title="Title"></a>
                            <a href="#" class="link-gallery"></a>
                        </div>
                    </div>
                </div>
            </figcaption>
        </figure>
    </div>
    <div class="filter-content-item all nature col-sm-6  col-md-4 col-lg-4">
        <figure>
            <img src="image/catalog/gallery/gallery-middle/gallery-middle-img-02.jpg" class="all people" alt="" />
            <figcaption><!-- add class .content-center in figcaption (center icons)-->
                <div class="block-table">
                    <div class="block-table-cell">
                        <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                        <em class="color-custom font18">People</em>
                        <div class="divider divider--sm"></div>
                        <p class="font-lighter">
                            Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                        <div class="button-box">
                            <a href="image/catalog/gallery/gallery-middle/gallery-middle-img-02.jpg" class="zomm-gallery"  title="Title"></a>
                            <a href="#" class="link-gallery"></a>
                        </div>
                    </div>
                </div>
            </figcaption>
        </figure>
    </div>
    <div class="filter-content-item all people col-sm-6  col-md-4 col-lg-4">
        <figure>
            <img src="image/catalog/gallery/gallery-middle/gallery-middle-img-03.jpg" class="all people" alt="" />
            <figcaption><!-- add class .content-center in figcaption (center icons)-->
                <div class="block-table">
                    <div class="block-table-cell">
                        <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                        <em class="color-custom font18">People</em>
                        <div class="divider divider--sm"></div>
                        <p class="font-lighter">
                            Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                        <div class="button-box">
                            <a href="image/catalog/gallery/gallery-middle/gallery-middle-img-03.jpg" class="zomm-gallery"  title="Title"></a>
                            <a href="#" class="link-gallery"></a>
                        </div>
                    </div>
                </div>
            </figcaption>
        </figure>
    </div>
    <div class="filter-content-item all people col-sm-6  col-md-4 col-lg-4">
        <figure>
            <img src="image/catalog/gallery/gallery-middle/gallery-middle-img-04.jpg" class="all people" alt="" />
            <figcaption><!-- add class .content-center in figcaption (center icons)-->
                <div class="block-table">
                    <div class="block-table-cell">
                        <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                        <em class="color-custom font18">People</em>
                        <div class="divider divider--sm"></div>
                        <p class="font-lighter">
                            Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                        <div class="button-box">
                            <a href="image/catalog/gallery/gallery-middle/gallery-middle-img-04.jpg" class="zomm-gallery"  title="Title"></a>
                            <a href="#" class="link-gallery"></a>
                        </div>
                    </div>
                </div>
            </figcaption>
        </figure>
    </div>
    <div class="filter-content-item all objects col-sm-6  col-md-4 col-lg-4">
        <figure>
            <img src="image/catalog/gallery/gallery-middle/gallery-middle-img-05.jpg" class="all objects" alt="" />
            <figcaption><!-- add class .content-center in figcaption (center icons)-->
                <div class="block-table">
                    <div class="block-table-cell">
                        <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                        <em class="color-custom font18">People</em>
                        <div class="divider divider--sm"></div>
                        <p class="font-lighter">
                            Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                        <div class="button-box">
                            <a href="image/catalog/gallery/gallery-middle/gallery-middle-img-05.jpg" class="zomm-gallery"  title="Title"></a>
                            <a href="#" class="link-gallery"></a>
                        </div>
                    </div>
                </div>
            </figcaption>
        </figure>
    </div>
    <div class="filter-content-item all nature col-sm-6  col-md-4 col-lg-4">
        <figure>
            <img src="image/catalog/gallery/gallery-middle/gallery-middle-img-06.jpg" class="all people" alt="" />
            <figcaption><!-- add class .content-center in figcaption (center icons)-->
                <div class="block-table">
                    <div class="block-table-cell">
                        <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                        <em class="color-custom font18">People</em>
                        <div class="divider divider--sm"></div>
                        <p class="font-lighter">
                            Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                        <div class="button-box">
                            <a href="image/catalog/gallery/gallery-middle/gallery-middle-img-06.jpg" class="zomm-gallery"  title="Title"></a>
                            <a href="#" class="link-gallery"></a>
                        </div>
                    </div>
                </div>
            </figcaption>
        </figure>
    </div>
    <div class="filter-content-item all people col-sm-6  col-md-4 col-lg-4">
        <figure>
            <img src="image/catalog/gallery/gallery-middle/gallery-middle-img-07.jpg" class="all people" alt="" />
            <figcaption><!-- add class .content-center in figcaption (center icons)-->
                <div class="block-table">
                    <div class="block-table-cell">
                        <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                        <em class="color-custom font18">People</em>
                        <div class="divider divider--sm"></div>
                        <p class="font-lighter">
                            Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                        <div class="button-box">
                            <a href="image/catalog/gallery/gallery-middle/gallery-middle-img-07.jpg" class="zomm-gallery"  title="Title"></a>
                            <a href="#" class="link-gallery"></a>
                        </div>
                    </div>
                </div>
            </figcaption>
        </figure>
    </div>
    <div class="filter-content-item all objects col-sm-6  col-md-4 col-lg-4">
        <figure>
            <img src="image/catalog/gallery/gallery-middle/gallery-middle-img-08.jpg" class="all people" alt="" />
            <figcaption><!-- add class .content-center in figcaption (center icons)-->
                <div class="block-table">
                    <div class="block-table-cell">
                        <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                        <em class="color-custom font18">People</em>
                        <div class="divider divider--sm"></div>
                        <p class="font-lighter">
                            Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                        <div class="button-box">
                            <a href="image/catalog/gallery/gallery-middle/gallery-middle-img-08.jpg" class="zomm-gallery"  title="Title"></a>
                            <a href="#" class="link-gallery"></a>
                        </div>
                    </div>
                </div>
            </figcaption>
        </figure>
    </div>
    <div class="filter-content-item all people col-sm-6  col-md-4 col-lg-4">
        <figure>
            <img src="image/catalog/gallery/gallery-middle/gallery-middle-img-09.jpg" class="all people" alt="" />
            <figcaption><!-- add class .content-center in figcaption (center icons)-->
                <div class="block-table">
                    <div class="block-table-cell">
                        <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                        <em class="color-custom font18">People</em>
                        <div class="divider divider--sm"></div>
                        <p class="font-lighter">
                            Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                        <div class="button-box">
                            <a href="image/catalog/gallery/gallery-middle/gallery-middle-img-09.jpg" class="zomm-gallery"  title="Title"></a>
                            <a href="#" class="link-gallery"></a>
                        </div>
                    </div>
                </div>
            </figcaption>
        </figure>
    </div>

</div>
</div>

<!--//Gallery - Layout 2-->

<!--Gallery - Layout 3-->
<div id="page-wrap" class="gallery">

<div class="filter-nav">
    <div rel="all" class="current">All</div>
    <div rel="nature">nature</div>
    <div rel="objects">objects</div>
    <div rel="people">people</div>
</div>


<div id="filter-content" class="gallery-content row gallery-layout-3">
<div class="filter-content-item all people col-sm-6 col-md-4  col-lg-3 col-xl-3">
    <figure>
        <img src="image/catalog/gallery/gallery-small/gallery-small-img-01.jpg" alt="" />
        <figcaption><!-- add class .content-center in figcaption (center icons)-->
            <div class="block-table">
                <div class="block-table-cell">
                    <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                    <em class="color-custom font18">People</em>
                    <div class="divider divider--sm"></div>
                    <p class="font-lighter">
                        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <div class="button-box">
                        <a href="image/catalog/gallery/gallery-small/gallery-small-img-01.jpg" class="zomm-gallery"  title="Title"></a>
                        <a href="#" class="link-gallery"></a>
                    </div>
                </div>
            </div>
        </figcaption>
    </figure>
</div>
<div class="filter-content-item all objects col-sm-6 col-md-4  col-lg-3 col-xl-3">
    <figure>
        <img src="image/catalog/gallery/gallery-small/gallery-small-img-02.jpg" alt="" />
        <figcaption><!-- add class .content-center in figcaption (center icons)-->
            <div class="block-table">
                <div class="block-table-cell">
                    <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                    <em class="color-custom font18">People</em>
                    <div class="divider divider--sm"></div>
                    <p class="font-lighter">
                        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <div class="button-box">
                        <a href="image/catalog/gallery/gallery-small/gallery-small-img-02.jpg" class="zomm-gallery"  title="Title"></a>
                        <a href="#" class="link-gallery"></a>
                    </div>
                </div>
            </div>
        </figcaption>
    </figure>
</div>
<div class="filter-content-item all nature col-sm-6 col-md-4  col-lg-3 col-xl-3">
    <figure>
        <img src="image/catalog/gallery/gallery-small/gallery-small-img-03.jpg" alt="" />
        <figcaption><!-- add class .content-center in figcaption (center icons)-->
            <div class="block-table">
                <div class="block-table-cell">
                    <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                    <em class="color-custom font18">People</em>
                    <div class="divider divider--sm"></div>
                    <p class="font-lighter">
                        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <div class="button-box">
                        <a href="image/catalog/gallery/gallery-small/gallery-small-img-03.jpg" class="zomm-gallery"  title="Title"></a>
                        <a href="#" class="link-gallery"></a>
                    </div>
                </div>
            </div>
        </figcaption>
    </figure>
</div>
<div class="filter-content-item all people col-sm-6 col-md-4  col-lg-3 col-xl-3">
    <figure>
        <img src="image/catalog/gallery/gallery-small/gallery-small-img-04.jpg" alt="" />
        <figcaption><!-- add class .content-center in figcaption (center icons)-->
            <div class="block-table">
                <div class="block-table-cell">
                    <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                    <em class="color-custom font18">People</em>
                    <div class="divider divider--sm"></div>
                    <p class="font-lighter">
                        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <div class="button-box">
                        <a href="image/catalog/gallery/gallery-small/gallery-small-img-04.jpg" class="zomm-gallery"  title="Title"></a>
                        <a href="#" class="link-gallery"></a>
                    </div>
                </div>
            </div>
        </figcaption>
    </figure>
</div>
<div class="filter-content-item all nature col-sm-6 col-md-4  col-lg-3 col-xl-3">
    <figure>
        <img src="image/catalog/gallery/gallery-small/gallery-small-img-05.jpg" alt="" />
        <figcaption><!-- add class .content-center in figcaption (center icons)-->
            <div class="block-table">
                <div class="block-table-cell">
                    <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                    <em class="color-custom font18">People</em>
                    <div class="divider divider--sm"></div>
                    <p class="font-lighter">
                        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <div class="button-box">
                        <a href="image/catalog/gallery/gallery-small/gallery-small-img-05.jpg" class="zomm-gallery"  title="Title"></a>
                        <a href="#" class="link-gallery"></a>
                    </div>
                </div>
            </div>
        </figcaption>
    </figure>
</div>
<div class="filter-content-item all people col-sm-6 col-md-4  col-lg-3 col-xl-3">
    <figure>
        <img src="image/catalog/gallery/gallery-small/gallery-small-img-06.jpg" alt="" />
        <figcaption><!-- add class .content-center in figcaption (center icons)-->
            <div class="block-table">
                <div class="block-table-cell">
                    <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                    <em class="color-custom font18">People</em>
                    <div class="divider divider--sm"></div>
                    <p class="font-lighter">
                        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <div class="button-box">
                        <a href="image/catalog/gallery/gallery-small/gallery-small-img-06.jpg" class="zomm-gallery"  title="Title"></a>
                        <a href="#" class="link-gallery"></a>
                    </div>
                </div>
            </div>
        </figcaption>
    </figure>
</div>
<div class="filter-content-item all people col-sm-6 col-md-4  col-lg-3 col-xl-3">
    <figure>
        <img src="image/catalog/gallery/gallery-small/gallery-small-img-07.jpg" alt="" />
        <figcaption><!-- add class .content-center in figcaption (center icons)-->
            <div class="block-table">
                <div class="block-table-cell">
                    <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                    <em class="color-custom font18">People</em>
                    <div class="divider divider--sm"></div>
                    <p class="font-lighter">
                        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <div class="button-box">
                        <a href="image/catalog/gallery/gallery-small/gallery-small-img-07.jpg" class="zomm-gallery"  title="Title"></a>
                        <a href="#" class="link-gallery"></a>
                    </div>
                </div>
            </div>
        </figcaption>
    </figure>
</div>
<div class="filter-content-item all objects col-sm-6 col-md-4  col-lg-3 col-xl-3">
    <figure>
        <img src="image/catalog/gallery/gallery-small/gallery-small-img-08.jpg" alt="" />
        <figcaption><!-- add class .content-center in figcaption (center icons)-->
            <div class="block-table">
                <div class="block-table-cell">
                    <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                    <em class="color-custom font18">People</em>
                    <div class="divider divider--sm"></div>
                    <p class="font-lighter">
                        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <div class="button-box">
                        <a href="image/catalog/gallery/gallery-small/gallery-small-img-08.jpg" class="zomm-gallery"  title="Title"></a>
                        <a href="#" class="link-gallery"></a>
                    </div>
                </div>
            </div>
        </figcaption>
    </figure>
</div>
<div class="filter-content-item all nature col-sm-6 col-md-4  col-lg-3 col-xl-3">
    <figure>
        <img src="image/catalog/gallery/gallery-small/gallery-small-img-09.jpg" alt="" />
        <figcaption><!-- add class .content-center in figcaption (center icons)-->
            <div class="block-table">
                <div class="block-table-cell">
                    <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                    <em class="color-custom font18">People</em>
                    <div class="divider divider--sm"></div>
                    <p class="font-lighter">
                        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <div class="button-box">
                        <a href="image/catalog/gallery/gallery-small/gallery-small-img-09.jpg" class="zomm-gallery"  title="Title"></a>
                        <a href="#" class="link-gallery"></a>
                    </div>
                </div>
            </div>
        </figcaption>
    </figure>
</div>
<div class="filter-content-item all people col-sm-6 col-md-4  col-lg-3 col-xl-3">
    <figure>
        <img src="image/catalog/gallery/gallery-small/gallery-small-img-10.jpg" alt="" />
        <figcaption><!-- add class .content-center in figcaption (center icons)-->
            <div class="block-table">
                <div class="block-table-cell">
                    <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                    <em class="color-custom font18">People</em>
                    <div class="divider divider--sm"></div>
                    <p class="font-lighter">
                        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <div class="button-box">
                        <a href="image/catalog/gallery/gallery-small/gallery-small-img-10.jpg" class="zomm-gallery"  title="Title"></a>
                        <a href="#" class="link-gallery"></a>
                    </div>
                </div>
            </div>
        </figcaption>
    </figure>
</div>
<div class="filter-content-item all objects col-sm-6 col-md-4  col-lg-3 col-xl-3">
    <figure>
        <img src="image/catalog/gallery/gallery-small/gallery-small-img-11.jpg" alt="" />
        <figcaption><!-- add class .content-center in figcaption (center icons)-->
            <div class="block-table">
                <div class="block-table-cell">
                    <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                    <em class="color-custom font18">People</em>
                    <div class="divider divider--sm"></div>
                    <p class="font-lighter">
                        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <div class="button-box">
                        <a href="image/catalog/gallery/gallery-small/gallery-small-img-11.jpg" class="zomm-gallery"  title="Title"></a>
                        <a href="#" class="link-gallery"></a>
                    </div>
                </div>
            </div>
        </figcaption>
    </figure>
</div>
<div class="filter-content-item all objects col-sm-6 col-md-4  col-lg-3 col-xl-3">
    <figure>
        <img src="image/catalog/gallery/gallery-small/gallery-small-img-12.jpg" alt="" />
        <figcaption><!-- add class .content-center in figcaption (center icons)-->
            <div class="block-table">
                <div class="block-table-cell">
                    <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                    <em class="color-custom font18">People</em>
                    <div class="divider divider--sm"></div>
                    <p class="font-lighter">
                        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <div class="button-box">
                        <a href="image/catalog/gallery/gallery-small/gallery-small-img-12.jpg" class="zomm-gallery"  title="Title"></a>
                        <a href="#" class="link-gallery"></a>
                    </div>
                </div>
            </div>
        </figcaption>
    </figure>
</div>
<div class="filter-content-item all people col-sm-6 col-md-4  col-lg-3 col-xl-3">
    <figure>
        <img src="image/catalog/gallery/gallery-small/gallery-small-img-13.jpg" alt="" />
        <figcaption><!-- add class .content-center in figcaption (center icons)-->
            <div class="block-table">
                <div class="block-table-cell">
                    <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                    <em class="color-custom font18">People</em>
                    <div class="divider divider--sm"></div>
                    <p class="font-lighter">
                        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <div class="button-box">
                        <a href="image/catalog/gallery/gallery-small/gallery-small-img-13.jpg" class="zomm-gallery"  title="Title"></a>
                        <a href="#" class="link-gallery"></a>
                    </div>
                </div>
            </div>
        </figcaption>
    </figure>
</div>
<div class="filter-content-item all nature col-sm-6 col-md-4  col-lg-3 col-xl-3">
    <figure>
        <img src="image/catalog/gallery/gallery-small/gallery-small-img-14.jpg" alt="" />
        <figcaption><!-- add class .content-center in figcaption (center icons)-->
            <div class="block-table">
                <div class="block-table-cell">
                    <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                    <em class="color-custom font18">People</em>
                    <div class="divider divider--sm"></div>
                    <p class="font-lighter">
                        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <div class="button-box">
                        <a href="image/catalog/gallery/gallery-small/gallery-small-img-14.jpg" class="zomm-gallery"  title="Title"></a>
                        <a href="#" class="link-gallery"></a>
                    </div>
                </div>
            </div>
        </figcaption>
    </figure>
</div>
<div class="filter-content-item all people col-sm-6 col-md-4  col-lg-3 col-xl-3">
    <figure>
        <img src="image/catalog/gallery/gallery-small/gallery-small-img-15.jpg" alt="" />
        <figcaption><!-- add class .content-center in figcaption (center icons)-->
            <div class="block-table">
                <div class="block-table-cell">
                    <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                    <em class="color-custom font18">People</em>
                    <div class="divider divider--sm"></div>
                    <p class="font-lighter">
                        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <div class="button-box">
                        <a href="image/catalog/gallery/gallery-small/gallery-small-img-15.jpg" class="zomm-gallery"  title="Title"></a>
                        <a href="#" class="link-gallery"></a>
                    </div>
                </div>
            </div>
        </figcaption>
    </figure>
</div>
<div class="filter-content-item all people col-sm-6 col-md-4  col-lg-3 col-xl-3">
    <figure>
        <img src="image/catalog/gallery/gallery-small/gallery-small-img-16.jpg" alt="" />
        <figcaption><!-- add class .content-center in figcaption (center icons)-->
            <div class="block-table">
                <div class="block-table-cell">
                    <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                    <em class="color-custom font18">People</em>
                    <div class="divider divider--sm"></div>
                    <p class="font-lighter">
                        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <div class="button-box">
                        <a href="image/catalog/gallery/gallery-small/gallery-small-img-16.jpg" class="zomm-gallery"  title="Title"></a>
                        <a href="#" class="link-gallery"></a>
                    </div>
                </div>
            </div>
        </figcaption>
    </figure>
</div>

</div>
</div>

<!--//Gallery - Layout 3-->

<!--Gallery - Layout 4-->
<div id="page-wrap" class="gallery">
<div class="filter-nav">
    <div rel="all" class="current">All</div>
    <div rel="nature">nature</div>
    <div rel="objects">objects</div>
    <div rel="people">people</div>
</div>

<div id="filter-content" class="gallery-content row gallery-layout-4">
<div class="filter-content-item all people col-item-5">
    <figure>
        <img src="image/catalog/gallery/gallery-small-xs/gallery-small-xs-img-01.jpg" alt="" />
        <figcaption><!-- add class .content-center in figcaption (center icons)-->
            <div class="block-table">
                <div class="block-table-cell">
                    <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                    <em class="color-custom font18">People</em>
                    <div class="divider divider--sm"></div>
                    <p class="font-lighter">
                        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <div class="button-box">
                        <a href="image/catalog/gallery/gallery-small-xs/gallery-small-xs-img-01.jpg" class="zomm-gallery"  title="Title"></a>
                        <a href="#" class="link-gallery"></a>
                    </div>
                </div>
            </div>
        </figcaption>
    </figure>
</div>
<div class="filter-content-item all people col-item-5">
    <figure>
        <img src="image/catalog/gallery/gallery-small-xs/gallery-small-xs-img-02.jpg" alt="" />
        <figcaption><!-- add class .content-center in figcaption (center icons)-->
            <div class="block-table">
                <div class="block-table-cell">
                    <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                    <em class="color-custom font18">People</em>
                    <div class="divider divider--sm"></div>
                    <p class="font-lighter">
                        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <div class="button-box">
                        <a href="image/catalog/gallery/gallery-small-xs/gallery-small-xs-img-02.jpg" class="zomm-gallery"  title="Title"></a>
                        <a href="#" class="link-gallery"></a>
                    </div>
                </div>
            </div>
        </figcaption>
    </figure>
</div>
<div class="filter-content-item all people col-item-5">
    <figure>
        <img src="image/catalog/gallery/gallery-small-xs/gallery-small-xs-img-03.jpg" alt="" />
        <figcaption><!-- add class .content-center in figcaption (center icons)-->
            <div class="block-table">
                <div class="block-table-cell">
                    <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                    <em class="color-custom font18">People</em>
                    <div class="divider divider--sm"></div>
                    <p class="font-lighter">
                        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <div class="button-box">
                        <a href="image/catalog/gallery/gallery-small-xs/gallery-small-xs-img-03.jpg" class="zomm-gallery"  title="Title"></a>
                        <a href="#" class="link-gallery"></a>
                    </div>
                </div>
            </div>
        </figcaption>
    </figure>
</div>
<div class="filter-content-item all people col-item-5">
    <figure>
        <img src="image/catalog/gallery/gallery-small-xs/gallery-small-xs-img-04.jpg" alt="" />
        <figcaption><!-- add class .content-center in figcaption (center icons)-->
            <div class="block-table">
                <div class="block-table-cell">
                    <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                    <em class="color-custom font18">People</em>
                    <div class="divider divider--sm"></div>
                    <p class="font-lighter">
                        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <div class="button-box">
                        <a href="image/catalog/gallery/gallery-small-xs/gallery-small-xs-img-04.jpg" class="zomm-gallery"  title="Title"></a>
                        <a href="#" class="link-gallery"></a>
                    </div>
                </div>
            </div>
        </figcaption>
    </figure>
</div>
<div class="filter-content-item all people col-item-5">
    <figure>
        <img src="image/catalog/gallery/gallery-small-xs/gallery-small-xs-img-05.jpg" alt="" />
        <figcaption><!-- add class .content-center in figcaption (center icons)-->
            <div class="block-table">
                <div class="block-table-cell">
                    <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                    <em class="color-custom font18">People</em>
                    <div class="divider divider--sm"></div>
                    <p class="font-lighter">
                        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <div class="button-box">
                        <a href="image/catalog/gallery/gallery-small-xs/gallery-small-xs-img-05.jpg" class="zomm-gallery"  title="Title"></a>
                        <a href="#" class="link-gallery"></a>
                    </div>
                </div>
            </div>
        </figcaption>
    </figure>
</div>
<div class="filter-content-item all people col-item-5">
    <figure>
        <img src="image/catalog/gallery/gallery-small-xs/gallery-small-xs-img-06.jpg" alt="" />
        <figcaption><!-- add class .content-center in figcaption (center icons)-->
            <div class="block-table">
                <div class="block-table-cell">
                    <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                    <em class="color-custom font18">People</em>
                    <div class="divider divider--sm"></div>
                    <p class="font-lighter">
                        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <div class="button-box">
                        <a href="image/catalog/gallery/gallery-small-xs/gallery-small-xs-img-06.jpg" class="zomm-gallery"  title="Title"></a>
                        <a href="#" class="link-gallery"></a>
                    </div>
                </div>
            </div>
        </figcaption>
    </figure>
</div>
<div class="filter-content-item all objects col-item-5">
    <figure>
        <img src="image/catalog/gallery/gallery-small-xs/gallery-small-xs-img-07.jpg" alt="" />
        <figcaption><!-- add class .content-center in figcaption (center icons)-->
            <div class="block-table">
                <div class="block-table-cell">
                    <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                    <em class="color-custom font18">People</em>
                    <div class="divider divider--sm"></div>
                    <p class="font-lighter">
                        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <div class="button-box">
                        <a href="image/catalog/gallery/gallery-small-xs/gallery-small-xs-img-07.jpg" class="zomm-gallery"  title="Title"></a>
                        <a href="#" class="link-gallery"></a>
                    </div>
                </div>
            </div>
        </figcaption>
    </figure>
</div>
<div class="filter-content-item all people col-item-5">
    <figure>
        <img src="image/catalog/gallery/gallery-small-xs/gallery-small-xs-img-08.jpg" alt="" />
        <figcaption><!-- add class .content-center in figcaption (center icons)-->
            <div class="block-table">
                <div class="block-table-cell">
                    <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                    <em class="color-custom font18">People</em>
                    <div class="divider divider--sm"></div>
                    <p class="font-lighter">
                        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <div class="button-box">
                        <a href="image/catalog/gallery/gallery-small-xs/gallery-small-xs-img-08.jpg" class="zomm-gallery"  title="Title"></a>
                        <a href="#" class="link-gallery"></a>
                    </div>
                </div>
            </div>
        </figcaption>
    </figure>
</div>
<div class="filter-content-item all people col-item-5">
    <figure>
        <img src="image/catalog/gallery/gallery-small-xs/gallery-small-xs-img-09.jpg" alt="" />
        <figcaption><!-- add class .content-center in figcaption (center icons)-->
            <div class="block-table">
                <div class="block-table-cell">
                    <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                    <em class="color-custom font18">People</em>
                    <div class="divider divider--sm"></div>
                    <p class="font-lighter">
                        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <div class="button-box">
                        <a href="image/catalog/gallery/gallery-small-xs/gallery-small-xs-img-09.jpg" class="zomm-gallery"  title="Title"></a>
                        <a href="#" class="link-gallery"></a>
                    </div>
                </div>
            </div>
        </figcaption>
    </figure>
</div>
<div class="filter-content-item all people col-item-5">
    <figure>
        <img src="image/catalog/gallery/gallery-small-xs/gallery-small-xs-img-10.jpg" alt="" />
        <figcaption><!-- add class .content-center in figcaption (center icons)-->
            <div class="block-table">
                <div class="block-table-cell">
                    <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                    <em class="color-custom font18">People</em>
                    <div class="divider divider--sm"></div>
                    <p class="font-lighter">
                        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <div class="button-box">
                        <a href="image/catalog/gallery/gallery-small-xs/gallery-small-xs-img-10.jpg" class="zomm-gallery"  title="Title"></a>
                        <a href="#" class="link-gallery"></a>
                    </div>
                </div>
            </div>
        </figcaption>
    </figure>
</div>
<div class="filter-content-item all people col-item-5">
    <figure>
        <img src="image/catalog/gallery/gallery-small-xs/gallery-small-xs-img-11.jpg" alt="" />
        <figcaption><!-- add class .content-center in figcaption (center icons)-->
            <div class="block-table">
                <div class="block-table-cell">
                    <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                    <em class="color-custom font18">People</em>
                    <div class="divider divider--sm"></div>
                    <p class="font-lighter">
                        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <div class="button-box">
                        <a href="image/catalog/gallery/gallery-small-xs/gallery-small-xs-img-11.jpg" class="zomm-gallery"  title="Title"></a>
                        <a href="#" class="link-gallery"></a>
                    </div>
                </div>
            </div>
        </figcaption>
    </figure>
</div>
<div class="filter-content-item all people col-item-5">
    <figure>
        <img src="image/catalog/gallery/gallery-small-xs/gallery-small-xs-img-12.jpg" alt="" />
        <figcaption><!-- add class .content-center in figcaption (center icons)-->
            <div class="block-table">
                <div class="block-table-cell">
                    <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                    <em class="color-custom font18">People</em>
                    <div class="divider divider--sm"></div>
                    <p class="font-lighter">
                        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <div class="button-box">
                        <a href="image/catalog/gallery/gallery-small-xs/gallery-small-xs-img-12.jpg" class="zomm-gallery"  title="Title"></a>
                        <a href="#" class="link-gallery"></a>
                    </div>
                </div>
            </div>
        </figcaption>
    </figure>
</div>
<div class="filter-content-item all people col-item-5">
    <figure>
        <img src="image/catalog/gallery/gallery-small-xs/gallery-small-xs-img-13.jpg" alt="" />
        <figcaption><!-- add class .content-center in figcaption (center icons)-->
            <div class="block-table">
                <div class="block-table-cell">
                    <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                    <em class="color-custom font18">People</em>
                    <div class="divider divider--sm"></div>
                    <p class="font-lighter">
                        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <div class="button-box">
                        <a href="image/catalog/gallery/gallery-small-xs/gallery-small-xs-img-13.jpg" class="zomm-gallery"  title="Title"></a>
                        <a href="#" class="link-gallery"></a>
                    </div>
                </div>
            </div>
        </figcaption>
    </figure>
</div>
<div class="filter-content-item all objects col-item-5">
    <figure>
        <img src="image/catalog/gallery/gallery-small-xs/gallery-small-xs-img-14.jpg" alt="" />
        <figcaption><!-- add class .content-center in figcaption (center icons)-->
            <div class="block-table">
                <div class="block-table-cell">
                    <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                    <em class="color-custom font18">People</em>
                    <div class="divider divider--sm"></div>
                    <p class="font-lighter">
                        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <div class="button-box">
                        <a href="image/catalog/gallery/gallery-small-xs/gallery-small-xs-img-14.jpg" class="zomm-gallery"  title="Title"></a>
                        <a href="#" class="link-gallery"></a>
                    </div>
                </div>
            </div>
        </figcaption>
    </figure>
</div>
<div class="filter-content-item all people col-item-5">
    <figure>
        <img src="image/catalog/gallery/gallery-small-xs/gallery-small-xs-img-15.jpg" alt="" />
        <figcaption><!-- add class .content-center in figcaption (center icons)-->
            <div class="block-table">
                <div class="block-table-cell">
                    <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                    <em class="color-custom font18">People</em>
                    <div class="divider divider--sm"></div>
                    <p class="font-lighter">
                        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <div class="button-box">
                        <a href="image/catalog/gallery/gallery-small-xs/gallery-small-xs-img-15.jpg" class="zomm-gallery"  title="Title"></a>
                        <a href="#" class="link-gallery"></a>
                    </div>
                </div>
            </div>
        </figcaption>
    </figure>
</div>
<div class="filter-content-item all nature col-item-5">
    <figure>
        <img src="image/catalog/gallery/gallery-small-xs/gallery-small-xs-img-16.jpg" alt="" />
        <figcaption><!-- add class .content-center in figcaption (center icons)-->
            <div class="block-table">
                <div class="block-table-cell">
                    <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                    <em class="color-custom font18">People</em>
                    <div class="divider divider--sm"></div>
                    <p class="font-lighter">
                        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <div class="button-box">
                        <a href="image/catalog/gallery/gallery-small-xs/gallery-small-xs-img-16.jpg" class="zomm-gallery"  title="Title"></a>
                        <a href="#" class="link-gallery"></a>
                    </div>
                </div>
            </div>
        </figcaption>
    </figure>
</div>
<div class="filter-content-item all people col-item-5">
    <figure>
        <img src="image/catalog/gallery/gallery-small-xs/gallery-small-xs-img-17.jpg" alt="" />
        <figcaption><!-- add class .content-center in figcaption (center icons)-->
            <div class="block-table">
                <div class="block-table-cell">
                    <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                    <em class="color-custom font18">People</em>
                    <div class="divider divider--sm"></div>
                    <p class="font-lighter">
                        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <div class="button-box">
                        <a href="image/catalog/gallery/gallery-small-xs/gallery-small-xs-img-17.jpg" class="zomm-gallery"  title="Title"></a>
                        <a href="#" class="link-gallery"></a>
                    </div>
                </div>
            </div>
        </figcaption>
    </figure>
</div>
<div class="filter-content-item all people col-item-5">
    <figure>
        <img src="image/catalog/gallery/gallery-small-xs/gallery-small-xs-img-18.jpg" alt="" />
        <figcaption><!-- add class .content-center in figcaption (center icons)-->
            <div class="block-table">
                <div class="block-table-cell">
                    <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                    <em class="color-custom font18">People</em>
                    <div class="divider divider--sm"></div>
                    <p class="font-lighter">
                        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <div class="button-box">
                        <a href="image/catalog/gallery/gallery-small-xs/gallery-small-xs-img-18.jpg" class="zomm-gallery"  title="Title"></a>
                        <a href="#" class="link-gallery"></a>
                    </div>
                </div>
            </div>
        </figcaption>
    </figure>
</div>
<div class="filter-content-item all people col-item-5">
    <figure>
        <img src="image/catalog/gallery/gallery-small-xs/gallery-small-xs-img-19.jpg" alt="" />
        <figcaption><!-- add class .content-center in figcaption (center icons)-->
            <div class="block-table">
                <div class="block-table-cell">
                    <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                    <em class="color-custom font18">People</em>
                    <div class="divider divider--sm"></div>
                    <p class="font-lighter">
                        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <div class="button-box">
                        <a href="image/catalog/gallery/gallery-small-xs/gallery-small-xs-img-19.jpg" class="zomm-gallery"  title="Title"></a>
                        <a href="#" class="link-gallery"></a>
                    </div>
                </div>
            </div>
        </figcaption>
    </figure>
</div>
<div class="filter-content-item all nature col-item-5">
    <figure>
        <img src="image/catalog/gallery/gallery-small-xs/gallery-small-xs-img-20.jpg" alt="" />
        <figcaption><!-- add class .content-center in figcaption (center icons)-->
            <div class="block-table">
                <div class="block-table-cell">
                    <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                    <em class="color-custom font18">People</em>
                    <div class="divider divider--sm"></div>
                    <p class="font-lighter">
                        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <div class="button-box">
                        <a href="image/catalog/gallery/gallery-small-xs/gallery-small-xs-img-20.jpg" class="zomm-gallery"  title="Title"></a>
                        <a href="#" class="link-gallery"></a>
                    </div>
                </div>
            </div>
        </figcaption>
    </figure>
</div>
<div class="filter-content-item all people col-item-5">
    <figure>
        <img src="image/catalog/gallery/gallery-small-xs/gallery-small-xs-img-21.jpg" alt="" />
        <figcaption><!-- add class .content-center in figcaption (center icons)-->
            <div class="block-table">
                <div class="block-table-cell">
                    <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                    <em class="color-custom font18">People</em>
                    <div class="divider divider--sm"></div>
                    <p class="font-lighter">
                        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <div class="button-box">
                        <a href="image/catalog/gallery/gallery-small-xs/gallery-small-xs-img-21.jpg" class="zomm-gallery"  title="Title"></a>
                        <a href="#" class="link-gallery"></a>
                    </div>
                </div>
            </div>
        </figcaption>
    </figure>
</div>
<div class="filter-content-item all objects col-item-5">
    <figure>
        <img src="image/catalog/gallery/gallery-small-xs/gallery-small-xs-img-22.jpg" alt="" />
        <figcaption><!-- add class .content-center in figcaption (center icons)-->
            <div class="block-table">
                <div class="block-table-cell">
                    <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                    <em class="color-custom font18">People</em>
                    <div class="divider divider--sm"></div>
                    <p class="font-lighter">
                        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <div class="button-box">
                        <a href="image/catalog/gallery/gallery-small-xs/gallery-small-xs-img-22.jpg" class="zomm-gallery"  title="Title"></a>
                        <a href="#" class="link-gallery"></a>
                    </div>
                </div>
            </div>
        </figcaption>
    </figure>
</div>
<div class="filter-content-item all people col-item-5">
    <figure>
        <img src="image/catalog/gallery/gallery-small-xs/gallery-small-xs-img-23.jpg" alt="" />
        <figcaption><!-- add class .content-center in figcaption (center icons)-->
            <div class="block-table">
                <div class="block-table-cell">
                    <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                    <em class="color-custom font18">People</em>
                    <div class="divider divider--sm"></div>
                    <p class="font-lighter">
                        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <div class="button-box">
                        <a href="image/catalog/gallery/gallery-small-xs/gallery-small-xs-img-23.jpg" class="zomm-gallery"  title="Title"></a>
                        <a href="#" class="link-gallery"></a>
                    </div>
                </div>
            </div>
        </figcaption>
    </figure>
</div>
<div class="filter-content-item all people col-item-5">
    <figure>
        <img src="image/catalog/gallery/gallery-small-xs/gallery-small-xs-img-24.jpg" alt="" />
        <figcaption><!-- add class .content-center in figcaption (center icons)-->
            <div class="block-table">
                <div class="block-table-cell">
                    <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                    <em class="color-custom font18">People</em>
                    <div class="divider divider--sm"></div>
                    <p class="font-lighter">
                        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <div class="button-box">
                        <a href="image/catalog/gallery/gallery-small-xs/gallery-small-xs-img-24.jpg" class="zomm-gallery"  title="Title"></a>
                        <a href="#" class="link-gallery"></a>
                    </div>
                </div>
            </div>
        </figcaption>
    </figure>
</div>
<div class="filter-content-item all people col-item-5">
    <figure>
        <img src="image/catalog/gallery/gallery-small-xs/gallery-small-xs-img-25.jpg" alt="" />
        <figcaption><!-- add class .content-center in figcaption (center icons)-->
            <div class="block-table">
                <div class="block-table-cell">
                    <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                    <em class="color-custom font18">People</em>
                    <div class="divider divider--sm"></div>
                    <p class="font-lighter">
                        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <div class="button-box">
                        <a href="image/catalog/gallery/gallery-small-xs/gallery-small-xs-img-25.jpg" class="zomm-gallery"  title="Title"></a>
                        <a href="#" class="link-gallery"></a>
                    </div>
                </div>
            </div>
        </figcaption>
    </figure>
</div>

</div>
</div>

<!--//Gallery - Layout 4-->

<!--Gallery - Layout 5-->
<div id="page-wrap" class="gallery">
<div class="filter-nav">
    <div rel="all" class="current">All</div>
    <div rel="nature">nature</div>
    <div rel="objects">objects</div>
    <div rel="people">people</div>
</div>

<div id="filter-content" class="gallery-content row css-masonry">


<div class="filter-content-item all people col-item-4">
    <figure>
        <img src="image/catalog/gallery/different-height/gallery-img-01.jpg" alt="" />
        <figcaption><!-- add class .content-center in figcaption (center icons)-->
            <div class="block-table">
                <div class="block-table-cell">
                    <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                    <em class="color-custom font18">People</em>
                    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    <div class="divider divider--sm"></div>
                    <div class="button-box">
                        <a href="image/catalog/gallery/different-height/gallery-img-01.jpg" class="zomm-gallery"  title="Title"></a>
                        <a href="#" class="link-gallery"></a>
                    </div>
                </div>
            </div>
        </figcaption>
    </figure>
</div>
<div class="filter-content-item all people col-item-4">
    <figure>
        <img src="image/catalog/gallery/different-height/gallery-img-02.jpg" alt="" />
        <figcaption><!-- add class .content-center in figcaption (center icons)-->
            <div class="block-table">
                <div class="block-table-cell">
                    <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                    <em class="color-custom font18">People</em>
                    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    <div class="divider divider--sm"></div>
                    <div class="button-box">
                        <a href="image/catalog/gallery/different-height/gallery-img-02.jpg" class="zomm-gallery"  title="Title"></a>
                        <a href="#" class="link-gallery"></a>
                    </div>
                </div>
            </div>
        </figcaption>
    </figure>
</div>
<div class="filter-content-item all nature col-item-4">
    <figure>
        <img src="image/catalog/gallery/different-height/gallery-img-03.jpg" alt="" />
        <figcaption><!-- add class .content-center in figcaption (center icons)-->
            <div class="block-table">
                <div class="block-table-cell">
                    <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                    <em class="color-custom font18">People</em>
                    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    <div class="divider divider--sm"></div>
                    <div class="button-box">
                        <a href="image/catalog/gallery/different-height/gallery-img-03.jpg" class="zomm-gallery"  title="Title"></a>
                        <a href="#" class="link-gallery"></a>
                    </div>
                </div>
            </div>
        </figcaption>
    </figure>
</div>
<div class="filter-content-item all nature col-item-4">
    <figure>
        <img src="image/catalog/gallery/different-height/gallery-img-04.jpg" alt="" />
        <figcaption><!-- add class .content-center in figcaption (center icons)-->
            <div class="block-table">
                <div class="block-table-cell">
                    <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                    <em class="color-custom font18">People</em>
                    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    <div class="divider divider--sm"></div>
                    <div class="button-box">
                        <a href="image/catalog/gallery/different-height/gallery-img-04.jpg" class="zomm-gallery"  title="Title"></a>
                        <a href="#" class="link-gallery"></a>
                    </div>
                </div>
            </div>
        </figcaption>
    </figure>
</div>
<div class="filter-content-item all people col-item-4">
    <figure>
        <img src="image/catalog/gallery/different-height/gallery-img-05.jpg" alt="" />
        <figcaption><!-- add class .content-center in figcaption (center icons)-->
            <div class="block-table">
                <div class="block-table-cell">
                    <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                    <em class="color-custom font18">People</em>
                    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    <div class="divider divider--sm"></div>
                    <div class="button-box">
                        <a href="image/catalog/gallery/different-height/gallery-img-05.jpg" class="zomm-gallery"  title="Title"></a>
                        <a href="#" class="link-gallery"></a>
                    </div>
                </div>
            </div>
        </figcaption>
    </figure>
</div>
<div class="filter-content-item all nature col-item-4">
    <figure>
        <img src="image/catalog/gallery/different-height/gallery-img-06.jpg" alt="" />
        <figcaption><!-- add class .content-center in figcaption (center icons)-->
            <div class="block-table">
                <div class="block-table-cell">
                    <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                    <em class="color-custom font18">People</em>
                    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    <div class="divider divider--sm"></div>
                    <div class="button-box">
                        <a href="image/catalog/gallery/different-height/gallery-img-06.jpg" class="zomm-gallery"  title="Title"></a>
                        <a href="#" class="link-gallery"></a>
                    </div>
                </div>
            </div>
        </figcaption>
    </figure>
</div>
<div class="filter-content-item all people col-item-4">
    <figure>
        <img src="image/catalog/gallery/different-height/gallery-img-07.jpg" alt="" />
        <figcaption><!-- add class .content-center in figcaption (center icons)-->
            <div class="block-table">
                <div class="block-table-cell">
                    <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                    <em class="color-custom font18">People</em>
                    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    <div class="divider divider--sm"></div>
                    <div class="button-box">
                        <a href="image/catalog/gallery/different-height/gallery-img-07.jpg" class="zomm-gallery"  title="Title"></a>
                        <a href="#" class="link-gallery"></a>
                    </div>
                </div>
            </div>
        </figcaption>
    </figure>
</div>
<div class="filter-content-item all nature col-item-4">
    <figure>
        <img src="image/catalog/gallery/different-height/gallery-img-08.jpg" alt="" />
        <figcaption><!-- add class .content-center in figcaption (center icons)-->
            <div class="block-table">
                <div class="block-table-cell">
                    <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                    <em class="color-custom font18">People</em>
                    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    <div class="divider divider--sm"></div>
                    <div class="button-box">
                        <a href="image/catalog/gallery/different-height/gallery-img-08.jpg" class="zomm-gallery"  title="Title"></a>
                        <a href="#" class="link-gallery"></a>
                    </div>
                </div>
            </div>
        </figcaption>
    </figure>
</div>
<div class="filter-content-item all objects col-item-4">
    <figure>
        <img src="image/catalog/gallery/different-height/gallery-img-09.jpg" alt="" />
        <figcaption><!-- add class .content-center in figcaption (center icons)-->
            <div class="block-table">
                <div class="block-table-cell">
                    <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                    <em class="color-custom font18">People</em>
                    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    <div class="divider divider--sm"></div>
                    <div class="button-box">
                        <a href="image/catalog/gallery/different-height/gallery-img-09.jpg" class="zomm-gallery"  title="Title"></a>
                        <a href="#" class="link-gallery"></a>
                    </div>
                </div>
            </div>
        </figcaption>
    </figure>
</div>
<div class="filter-content-item all nature col-item-4">
    <figure>
        <img src="image/catalog/gallery/different-height/gallery-img-10.jpg" alt="" />
        <figcaption><!-- add class .content-center in figcaption (center icons)-->
            <div class="block-table">
                <div class="block-table-cell">
                    <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                    <em class="color-custom font18">People</em>
                    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    <div class="divider divider--sm"></div>
                    <div class="button-box">
                        <a href="image/catalog/gallery/different-height/gallery-img-10.jpg" class="zomm-gallery"  title="Title"></a>
                        <a href="#" class="link-gallery"></a>
                    </div>
                </div>
            </div>
        </figcaption>
    </figure>
</div>
<div class="filter-content-item all objects col-item-4">
    <figure>
        <img src="image/catalog/gallery/different-height/gallery-img-11.jpg" alt="" />
        <figcaption><!-- add class .content-center in figcaption (center icons)-->
            <div class="block-table">
                <div class="block-table-cell">
                    <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                    <em class="color-custom font18">People</em>
                    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    <div class="divider divider--sm"></div>
                    <div class="button-box">
                        <a href="image/catalog/gallery/different-height/gallery-img-11.jpg" class="zomm-gallery"  title="Title"></a>
                        <a href="#" class="link-gallery"></a>
                    </div>
                </div>
            </div>
        </figcaption>
    </figure>
</div>
<div class="filter-content-item all nature col-item-4">
    <figure>
        <img src="image/catalog/gallery/different-height/gallery-img-12.jpg" alt="" />
        <figcaption><!-- add class .content-center in figcaption (center icons)-->
            <div class="block-table">
                <div class="block-table-cell">
                    <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                    <em class="color-custom font18">People</em>
                    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    <div class="divider divider--sm"></div>
                    <div class="button-box">
                        <a href="image/catalog/gallery/different-height/gallery-img-12.jpg" class="zomm-gallery"  title="Title"></a>
                        <a href="#" class="link-gallery"></a>
                    </div>
                </div>
            </div>
        </figcaption>
    </figure>
</div>
<div class="filter-content-item all nature col-item-4">
    <figure>
        <img src="image/catalog/gallery/different-height/gallery-img-13.jpg" alt="" />
        <figcaption><!-- add class .content-center in figcaption (center icons)-->
            <div class="block-table">
                <div class="block-table-cell">
                    <h6 class="title text-uppercase"><a href="#">Mauris lacinia lectus</a></h6>
                    <em class="color-custom font18">People</em>
                    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    <div class="divider divider--sm"></div>
                    <div class="button-box">
                        <a href="image/catalog/gallery/different-height/gallery-img-13.jpg" class="zomm-gallery"  title="Title"></a>
                        <a href="#" class="link-gallery"></a>
                    </div>
                </div>
            </div>
        </figcaption>
    </figure>
</div>
</div>
</div>

<!--//Gallery - Layout 5-->

<!--Lookbook layout 1-->
<div class="lookbook1">
    <div class="divider divider--lg visible-sm visible-xs"></div>
    <div class="col-md-6 col-lg-offset-0 col-lg-6  col-lg-offset-0 col-xl-4 col-xl-offset-2">
        <div class="lookbook-layout1">
            <div class="lookbook__image">
                <img src="image/catalog/custom/lookbook-img-02.jpg" class="img-responsive" alt=""/>
                <div class="hint-content">
                    <!--  -->
                    <div class="hint">
                        <a href="#">
                            <span class="hint-title">Mauris lacinia lectus</span>
                            <span class="hint-price">$78.00</span>
                        </a>
                    </div>
                    <!-- / -->
                    <!--  -->
                    <div class="hint">
                        <a href="#">
                            <span class="hint-title">sed do eiusmod tempor incididunt</span>
                            <span class="hint-price">$28.00</span>
                        </a>
                    </div>
                    <!-- / -->
                    <!--  -->
                    <div class="hint">
                        <a href="#">
                            <span class="hint-title">ut labore et dolore magna </span>
                            <span class="hint-price">$113.00</span>
                        </a>
                    </div>
                    <!-- / -->
                    <!--  -->
                    <div class="hint">
                        <a href="#">
                            <span class="hint-title">Set Mauris lacinia lectus</span>
                            <span class="hint-price">$43.00</span>
                        </a>
                    </div>
                    <!-- / -->
                    <!--  -->
                    <div class="hint">
                        <a href="#">
                            <span class="hint-title">dolore magna ali</span>
                            <span class="hint-price">$78.00</span>
                        </a>
                    </div>
                    <!-- / -->
                </div>

            </div>
        </div>
    </div>
    <div class="divider divider--lg visible-sm visible-xs"></div>
    <div class="col-md-6 col-lg-6 col-xl-4">
        <div class="lookbook">
            <div class="lookbook__image"><img src="image/catalog/custom/lookbook-img-01.jpg" class="img-responsive" alt=""/>
                <!-- item -->
                <div class="hint" style="top: 17.8%; left: 63.5%;">
                    <span>1</span>
                    <span class="hint__dot"></span>
                    <div class="tool tool--right">
                        <div class="box-wrapper">
                            <a  href="index.php">
                                <span class="hint-title">sed do eiusmod <br>tempor </span>
                                <span class="hint-price">$188.00</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /item -->
                <!-- item -->
                <div class="hint" style="top: 34%; left: 37%;">
                    <span>2</span>
                    <span class="hint__dot"></span>
                    <div class="tool tool--left">
                        <div class="hover-tool">
                            <div class="box-wrapper">
                                <a  href="index.php">
                                    <span class="hint-title">Mauris lacinia<br>lectus  </span>
                                    <span class="hint-price">$18.00</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /item -->
                <!-- item -->
                <div class="hint" style="top:47.8%; left: 63.5%;">
                    <span>3</span>
                    <span class="hint__dot"></span>
                    <div class="tool tool--right">
                        <div class="hover-tool">
                            <div class="box-wrapper">
                                <a  href="index.php">
                                    <span class="hint-title">Set Mauris  <br>lacinia lectus </span>
                                    <span class="hint-price">$78.00</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /item -->
                <!-- item -->
                <div class="hint" style="top: 86%; left: 32%;">
                    <span>4</span>
                    <span class="hint__dot"></span>
                    <div class="tool tool--left">
                        <div class="hover-tool">
                            <div class="box-wrapper">
                                <a  href="index.php">
                                    <span class="hint-title">labore et dolore<br>magna   </span>
                                    <span class="hint-price">$238.00</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /item -->
            </div>
        </div>
    </div>
    <div class="divider divider--lg visible-sm visible-xs"></div>

</div>
<!--//Lookbook layout 1-->


<div class="form-group clearfix">
    <label class="radio">
        <input id="radio2" type="radio" name="radios" checked>
	                            <span class="outer">
	                            	<span class="inner"></span>
	                            </span>
        Ship to different address
    </label>
</div>


<div class="checkbox-group">
    <input type="checkbox" id="checkBox2">
    <label for="checkBox2">
        <span class="check"></span>
        <span class="box"></span>
        Add gift options for Individual Items
    </label>
</div>

<div class="form-group">
    <select  id="checkoutFormCountry2" class="form-control selectpicker "  data-style="select--ys"  data-width="100%">
        <option>text</option>
    </select>
</div>




<table id="module-content-bottom" class="table table-striped table-bordered table-hover">
    <thead>
    <tr>
        <td class="text-center"><?php echo $text_content_bottom; ?></td>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($layout_modules as $layout_module) { ?>
        <?php if ($layout_module['position'] == 'content_bottom') { ?>
        <tr id="module-row<?php echo $module_row; ?>">
            <td class="text-left"><div class="input-group">
                <select name="layout_module[<?php echo $module_row; ?>][code]" class="form-control input-sm">
                    <?php foreach ($extensions as $extension) { ?>
                    <optgroup label="<?php echo $extension['name']; ?>">
                        <?php if (!$extension['module']) { ?>
                        <?php if ($extension['code'] == $layout_module['code']) { ?>
                            <option value="<?php echo $extension['code']; ?>" selected="selected"><?php echo $extension['name']; ?></option>
                            <?php } else { ?>
                            <option value="<?php echo $extension['code']; ?>"><?php echo $extension['name']; ?></option>
                            <?php } ?>
                        <?php } else { ?>
                        <?php foreach ($extension['module'] as $module) { ?>
                            <?php if ($module['code'] == $layout_module['code']) { ?>
                                <option value="<?php echo $module['code']; ?>" selected="selected"><?php echo $module['name']; ?></option>
                                <?php } else { ?>
                                <option value="<?php echo $module['code']; ?>"><?php echo $module['name']; ?></option>
                                <?php } ?>
                            <?php } ?>
                        <?php } ?>
                    </optgroup>
                    <?php } ?>
                </select>
                <input type="hidden" name="layout_module[<?php echo $module_row; ?>][position]" value="<?php echo $layout_module['position']; ?>" />
                <input type="hidden" name="layout_module[<?php echo $module_row; ?>][sort_order]" value="<?php echo $layout_module['sort_order']; ?>" />
                <div class="input-group-btn"><a href="<?php echo $layout_module['edit']; ?>" type="button" data-toggle="tooltip" title="<?php echo $button_edit; ?>" target="_blank" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                    <button type="button" onclick="$('#module-row<?php echo $module_row; ?>').remove();" data-toggle="tooltip" title="<?php echo $button_remove; ?>" class="btn btn-danger btn-sm"><i class="fa fa fa-minus-circle"></i></button>
                </div>
            </div></td>
        </tr>
            <?php $module_row++; ?>
            <?php } ?>
        <?php } ?>
    </tbody>
    <tfoot>
    <tr>
        <td class="text-left"><div class="input-group">
            <select class="form-control input-sm">
                <?php foreach ($extensions as $extension) { ?>
                <optgroup label="<?php echo $extension['name']; ?>">
                    <?php if (!$extension['module']) { ?>
                    <option value="<?php echo $extension['code']; ?>"><?php echo $extension['name']; ?></option>
                    <?php } else { ?>
                    <?php foreach ($extension['module'] as $module) { ?>
                        <option value="<?php echo $module['code']; ?>"><?php echo $module['name']; ?></option>
                        <?php } ?>
                    <?php } ?>
                </optgroup>
                <?php } ?>
            </select>
            <div class="input-group-btn">
                <button type="button" onclick="addModule('content-bottom');" data-toggle="tooltip" title="<?php echo $button_module_add; ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i></button>
            </div>
        </div></td>
    </tr>
    </tfoot>
</table>

