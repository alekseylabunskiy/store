<?php
    if (!isset($layoutid)) {$layoutid = 1;}
    if (!isset($layout_type_footer)) {$layout_type_footer = 1;}

    if (!isset($newsletter_block)) {$newsletter_block  = '';}
    if (!isset($socials)) {$socials = '';}
    if (!isset($footercopyright)) {$footercopyright = $powered;}

/* end newsletter variables */
?>

<?php if ($layoutid != 4 && $layout_id = 1) : ?>
</div>
<?php endif; ?>

<!-- End CONTENT section -->
<!-- FOOTER section -->
<footer class="<?php echo (($layout_type_footer == 3 || $layoutid == 11 || $layout_type_footer == 6) && $layoutid != 12 && $layoutid != 6 ? 'fill-bg' : ''); ?> layout-<?php echo $footer_class; ?> layout_type_footer_<?php echo $layout_type_footer; ?>">

<?php if ($layout_type_footer == 8) { ?>
<!--footer type 8, layout 9-->
<div class="container">
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="col-sm-6">
                <?php if ($informations) { ?>
                    <div class="mobile-collapse">
                        <h4 class="text-left  title-under  mobile-collapse__title"><?php echo $text_information; ?></h4>
                        <div class="v-links-list mobile-collapse__content">
                            <ul>
                                <?php foreach ($informations as $information) { ?>
                                <li><a href="<?php echo $information['href']; ?>"><?php echo $information['title']; ?></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                <?php } ?>
                <div class="divider divider--lg hidden-xs"></div>
                <div class="mobile-collapse">
                    <h4 class="text-left  title-under  mobile-collapse__title"><?php echo $text_extra; ?></h4>
                    <div class="v-links-list mobile-collapse__content">
                        <ul>
                            <li><a href="<?php echo $contact; ?>"><?php echo $text_contact; ?></a></li>
                            <li><a href="<?php echo $return; ?>"><?php echo $text_return; ?></a></li>
                            <li><a href="<?php echo $sitemap; ?>"><?php echo $text_sitemap; ?></a></li>
                            <li><a href="<?php echo $manufacturer; ?>"><?php echo $text_manufacturer; ?></a></li>
                            <li><a href="<?php echo $voucher; ?>"><?php echo $text_voucher; ?></a></li>
                            <li><a href="<?php echo $affiliate; ?>"><?php echo $text_affiliate; ?></a></li>
                            <li><a href="<?php echo $special; ?>"><?php echo $text_special; ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="mobile-collapse">
                    <h4 class="text-left  title-under  mobile-collapse__title"><?php echo $text_account; ?></h4>
                    <div class="v-links-list mobile-collapse__content">
                        <ul>
                            <li><a href="<?php echo $account; ?>"><?php echo $text_account; ?></a></li>
                            <li><a href="<?php echo $order; ?>"><?php echo $text_order; ?></a></li>
                            <li><a href="<?php echo $wishlist; ?>"><?php echo $text_wishlist; ?></a></li>
                            <li><a href="<?php echo $newsletter; ?>"><?php echo $text_newsletter; ?></a></li>
                        </ul>
                    </div>
                </div>
                <div class="divider divider--lg hidden-xs"></div>
                <div class="mobile-collapse">
                    <h4 class="text-left  title-under  mobile-collapse__title text-uppercase"><?php echo $text_contact; ?></h4>
                    <div class="v-links-list mobile-collapse__content">
                        <address class="box-address">
                            <span class="icon icon-home"></span> <?php echo $config_address; ?> <br>
                            <span class="icon icon-call"></span> <b class="color-dark"><?php echo $config_telephone; ?> </b><br>
                            <span class="icon icon-access_time"></span> <?php echo $config_open; ?><br>
                            <span class="icon icon-markunread"></span> <a class="color link-underline" href="mailto:<?php echo $config_email; ?>"><?php echo $config_email; ?></a>
                        </address>
                        <!-- social-icon -->
                        <div class="divider divider--md"></div>
                        <div class="social-links social-links--large social-links-layout-02">
                            <!-- footer socials text-->
                            <?php if (!isset($socials_status) || $socials_status != 0) : ?>
                            <?php echo $socials; ?>
                            <?php endif; ?>
                            <!-- end footer socials text-->
                        </div>
                        <!-- /social-icon -->
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!--//footer type 8, layout 9-->

<?php } else { ?>

<?php if ($layout_type_footer != 4): ?>
<!-- footer-data -->
<div class="container <?php echo ($layout_type_footer != 7 ? 'inset-bottom-60' : ''); ?>">

<?php if ($layout_type_footer == 6) : ?>
<!-- footer custom block for footer type 6-->
<?php if (isset($customblock_status) && $customblock_status != 0) : ?>
<?php echo $customblock_html; ?>
<?php endif; ?>
<!-- //footer custom block for footer type 6-->
<?php endif; ?>




<div class="<?php echo ($layout_type_footer != 5 ? 'row' : ''); ?>">

    <?php if ($layout_type_footer == 7): ?><div class="col-sm-12 text-center"><?php endif; ?>

    <!--logo and subscribe box-->
    <?php if ($layout_type_footer != 6): ?>
    <div class="<?php echo ($layout_type_footer == 3 || $layout_type_footer == 6 ? 'col-xl-3 visible-xl' : ($layout_type_footer == 5 ? 'row' : ($layout_type_footer != 7 ? 'col-sm-12 col-md-5 col-lg-6 border-sep-right' : ''))); ?>">
        <?php if ($layout_type_footer == 5 || $layout_type_footer == 7): ?>
        <div class="<?php echo ($layout_type_footer != 7 ? 'col-sm-12 text-center' : ''); ?>">
            <?php endif; ?>
            <?php if (isset($customblock_status) && $customblock_status != 0) : ?>
            <?php if ($layout_type_footer != 5 && $layout_type_footer != 7): ?><div class="footer-logo hidden-xs"><?php endif; ?>
            <!--  Logo  -->
            <?php if ($layout_type_footer != 7): ?>
            <a class="logo <?php echo ($layout_type_footer == 5 ? 'hidden-sm hidden-xs' : ''); ?>" href="index.php?route=common/home">
                <img src="image/<?php echo $config_image; ?>" alt="<?php echo $config_image; ?>" />
            </a>
            <?php endif; ?>
            <!-- /Logo -->
            <?php if ($layout_type_footer == 5): ?>
            <div class="divider divider-md hidden-xs hidden-sm"></div>
            <!-- subscribe-box -->
            <div class="subscribe-box subscribe-box-row offset-top-20"><?php echo $newsletter_block; ?></div>
            <!-- /subscribe-box -->
            <?php endif; ?>


            <?php if ($layout_type_footer != 5 && $layout_type_footer != 7): ?></div><?php endif; ?>

            <?php if ($layout_type_footer != 5 && $layout_type_footer != 7): ?>
            <div class="box-about">
                <div class="mobile-collapse">
                    <?php if (isset($custom_html_title) && $custom_html_title != '') : ?>
                    <h4 class="mobile-collapse__title visible-xs"><?php echo $custom_html_title; ?></h4>
                    <?php endif; ?>
                    <div class="mobile-collapse__content">
                        <p><?php echo $customblock_html; ?></p>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <?php endif; ?>

            <!-- telephone -->
            <?php if ($layout_type_footer == 7): ?>
            <div class="telephone-box offset-top-20">
                <div class="mobile-collapse">
                    <h4 class="mobile-collapse__title text-left text-uppercase visible-xs"><?php echo $text_information; ?></h4>
                    <div class="mobile-collapse__content">
                        <address class="font-medium">
                            <span class="icon icon-call"></span> <?php echo $config_telephone; ?>
                        </address>
                        <div class="color-gray"><?php echo $config_open; ?></div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <!-- /telephone -->

            <!-- subscribe-box -->
            <?php if ($layout_type_footer != 2 && $layout_type_footer != 3 && $layout_type_footer != 5 && $layout_type_footer != 6) : ?>
            <?php if (!isset($newsletter_status) || $newsletter_status != 0) : ?>
            <div class="<?php echo ($layout_type_footer == 7 ? 'subscribe-box-row ' : ''); ?>subscribe-box offset-top-20">
                <?php echo $newsletter_block; ?>
            </div>

            <?php if ($layout_type_footer == 7): ?><div class="divider divider--md"></div><?php endif; ?>

            <?php endif; ?>
            <?php endif; ?>
            <!-- /subscribe-box -->

            <?php if ($layout_type_footer == 5): ?>
        </div>
        <?php endif; ?>
    </div>
    <?php endif; ?>
    <!--//logo and subscribe box-->

    <?php if ($layout_type_footer == 5): ?><div class="divider divider-md hidden-xs"></div><?php endif; ?>

    <!--information-->
    <?php if ($layout_type_footer != 7): ?>
    <?php if ($layout_type_footer != 3 && $layout_type_footer != 6): ?><div class="<?php echo ($layout_type_footer == 5 ? 'row' : 'col-sm-12 col-md-7 col-lg-6 border-sep-left'); ?>"><?php endif; ?>

        <!-- subscribe-box -->
        <?php if ($layout_type_footer != 4): ?>
        <?php if ($layout_type_footer == 2) : ?>
        <?php if (!isset($newsletter_status) || $newsletter_status != 0) : ?>
        <div class="subscribe-box offset-top-20"><?php echo $newsletter_block; ?></div>
        <?php endif; ?>
        <?php endif; ?>
        <?php endif; ?>
        <!-- /subscribe-box -->


        <?php if ($layout_type_footer != 3 && $layout_type_footer != 5 && $layout_type_footer != 6): ?><div class="row"><?php endif; ?>
            <?php if ($informations) { ?>
            <div class="<?php echo (($layout_type_footer == 3 ? 'col-sm-4 col-md-4 col-lg-3 col-xl-2' : ($layout_type_footer == 6 ? 'col-sm-4 col-md-4  col-lg-3' : ($layout_type_footer == 5 ? 'col-sm-4 col-md-3' : 'col-sm-4')))); ?>">
                <div class="mobile-collapse">
                    <h4 class="text-left  title-under  mobile-collapse__title"><?php echo $text_information; ?></h4>
                    <div class="v-links-list mobile-collapse__content">
                        <ul>
                            <?php foreach ($informations as $information) { ?>
                            <li><a href="<?php echo $information['href']; ?>"><?php echo $information['title']; ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <?php } ?>
            <div class="<?php echo (($layout_type_footer == 3 ? 'col-sm-4 col-md-4 col-lg-3 col-xl-2' : ($layout_type_footer == 6 ? 'col-sm-4 col-md-4  col-lg-3' : ($layout_type_footer == 5 ? 'col-sm-4 col-md-3' : 'col-sm-4')))); ?>">
                <div class="mobile-collapse">
                    <h4 class="text-left  title-under  mobile-collapse__title"><?php echo $text_extra; ?></h4>
                    <div class="v-links-list mobile-collapse__content">
                        <ul>
                            <li><a href="<?php echo $contact; ?>"><?php echo $text_contact; ?></a></li>
                            <li><a href="<?php echo $return; ?>"><?php echo $text_return; ?></a></li>
                            <li><a href="<?php echo $sitemap; ?>"><?php echo $text_sitemap; ?></a></li>
                            <li><a href="<?php echo $special; ?>"><?php echo $text_special; ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="<?php echo (($layout_type_footer == 3 ? 'col-sm-4 col-md-4 col-lg-2  col-xl-2' : ($layout_type_footer == 6 ? 'col-sm-4 col-md-4  col-lg-3' : ($layout_type_footer == 5 ? 'col-sm-4 col-md-3' : 'col-sm-4')))); ?>">
                <div class="mobile-collapse">
                    <h4 class="text-left  title-under  mobile-collapse__title"><?php echo $text_account; ?></h4>
                    <div class="v-links-list mobile-collapse__content">
                        <ul>
                            <li><a href="<?php echo $account; ?>"><?php echo $text_account; ?></a></li>
                            <li><a href="<?php echo $order; ?>"><?php echo $text_order; ?></a></li>
                            <li><a href="<?php echo $wishlist; ?>"><?php echo $text_wishlist; ?></a></li>
                            <li><a href="<?php echo $newsletter; ?>"><?php echo $text_newsletter; ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php if ($layout_type_footer != 3 && $layout_type_footer != 5 && $layout_type_footer != 6): ?></div><?php endif; ?>


        <?php if ($layout_type_footer == 5): ?>
        <div class="clearfix visible-sm divider divider-lg "></div>
        <div class="col-sm-9 col-md-3">
            <div class="mobile-collapse">
                <h4 class="text-left  title-under  mobile-collapse__title text-uppercase visible-xs visible-sm"><?php echo $text_contact; ?></h4>
                <div class=" mobile-collapse__content">
                    <!-- address -->
                    <address class="box-address">
                        <span class="icon icon-home"></span> <?php echo $config_address; ?> <br>
                        <span class="icon icon-call"></span> <b class="color-dark"><?php echo $config_telephone; ?> </b><br>
                        <span class="icon icon-access_time"></span> <?php echo $config_open; ?><br>
                        <span class="icon icon-markunread"></span> <a class="color link-underline" href="mailto:<?php echo $config_email; ?>"><?php echo $config_email; ?></a>
                    </address>
                    <!-- /address -->
                    <div class="social-links social-links--large social-links-layout-02">
                    <!-- footer socials text-->
                        <?php if (!isset($socials_status) || $socials_status != 0) : ?>
                    <?php echo $socials; ?>
                        <?php endif; ?>
                    <!-- end footer socials text-->
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>



        <?php if ($layout_type_footer == 3 || $layout_type_footer == 6): ?>
        <div class="divider divider--lg visible-md visible-sm"></div>
        <?php if (!isset($newsletter_status) || $newsletter_status != 0) : ?>
        <div class="<?php echo ($layout_type_footer == 6 ? 'col-sm-12 col-md-12  col-lg-3' : 'col-sm-9 col-md-7 col-lg-4  col-xl-3'); ?>">
            <div class="subscribe-box">
                <?php echo $newsletter_block; ?>
            </div>

            <?php if ($layout_type_footer == 6): ?>
            <div class="divider divider--md hidden-xs"></div>
            <div class="subscribe-box">
                <div class="mobile-collapse">
                    <h4 class="text-left text-uppercase visible-xs  title-under  mobile-collapse__title"><?php echo $text_contact; ?></h4>
                    <div class="mobile-collapse__content">
                        <address class="box-address">
                            <span class="icon icon-home"></span> <?php echo $config_address; ?> <br>
                            <span class="icon icon-call"></span> <b class="color-dark"><?php echo $config_telephone; ?> </b><br>
                            <span class="icon icon-access_time"></span> <?php echo $config_open; ?><br>
                            <span class="icon icon-markunread"></span> <a class="color link-underline" href="mailto:<?php echo $config_email; ?>"><?php echo $config_email; ?></a>
                        </address>
                    </div>
                </div>
            </div>
            <?php endif; ?>

            <div class="divider divider--md"></div>
            <div class="social-links social-links--large social-links-layout-02">
                <!-- footer socials text-->
                <?php if (!isset($socials_status) || $socials_status != 0) : ?>
                <?php echo $socials; ?>
                <?php endif; ?>
                <!-- end footer socials text-->
            </div>
        </div>
        <?php endif; ?>

        <?php endif; ?>
        <?php if ($layout_type_footer != 3 && $layout_type_footer != 6): ?></div><?php endif; ?>
    <?php endif; ?>
    <!--//information-->


    <?php if ($layout_type_footer != 7): ?></div><?php endif; ?>

</div>
<!-- /footer-data -->

<?php if ($layout_type_footer != 7 && $layout_type_footer != 6): ?><div class="divider divider-md visible-xs visible-sm visible-md"></div><?php endif; ?>


<?php endif; ?>
<!-- social-icon -->
<?php if ($layout_type_footer != 3 && $layout_type_footer != 5 && $layout_type_footer != 6): ?>

<?php if ($layout_type_footer != 4 && $layout_type_footer != 7): ?>
<div class="container">
    <div class="row">
        <?php endif; ?>

        <?php if ($layout_type_footer != 7): ?>
        <div class="<?php echo ($layout_type_footer == 4 ? 'text-center' : 'col-lg-12'); ?>">
            <?php endif; ?>

            <div class="social-links social-links--large <?php echo ($layout_type_footer == 4 ? 'social-links-border' : ($layout_type_footer == 7 ? 'social-links-layout-02' : '')); ?>">
                <!-- footer socials text-->
                <?php if (!isset($socials_status) || $socials_status != 0) : ?>
                <?php echo $socials; ?>
                <?php endif; ?>
                <!-- end footer socials text-->
            </div>

            <?php if ($layout_type_footer != 7): ?></div><?php endif; ?>
        <?php if ($layout_type_footer != 4 && $layout_type_footer != 7): ?>
    </div>
</div>
<?php endif; ?>

<?php endif; ?>

<?php if ($layout_type_footer == 7): ?></div></div><?php endif; ?>

<!-- /social-icon -->

<?php } ?>





    <!-- footer-copyright -->
    <div class="container footer-copyright">
        <div class="row">
            <div class="<?php echo ($layout_type_footer == 6 ? 'col-sm-6' : ($layout_type_footer == 7 ? 'col-sm-12' : 'col-lg-12')); ?> <?php echo ($layout_type_footer == 4 || $layout_type_footer == 5 || $layout_type_footer == 7 ? 'text-center' : ($layout_type_footer == 8 ? 'text-right' : '')); ?>">
                <!-- footer-copyright text-->
                <?php echo $footercopyright; ?>
                <!-- end footer-copyright text-->
            </div>

            <!-- footer-payment-->
            <?php if ($layout_type_footer == 6) : ?>
            <div class="pull-right hidden-xs hidden-sm hidden-md">
                <?php echo $payments; ?>
            </div>
            <?php endif; ?>
            <!-- //footer-payment-->

        </div>
    </div>
    <!-- /footer-copyright -->

    <!-- map -->
    <?php if (isset($map) && $map != 0) : ?>

    <div>
        <div id="map"></div>
    </div>


    <?php
            if (isset($map) && $map != '') {
                echo $map;
            } else {
    ?>

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript">
        // When the window has finished loading create our google map below
        google.maps.event.addDomListener(window, 'load', init);

        function init() {
            // Basic options for a simple Google Map
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            var mapOptions = {
                // How zoomed in you want the map to start at (always required)
                zoom: 11,

                // The latitude and longitude to center the map (always required)
                center: new google.maps.LatLng(40.6700, -73.9400), // New York

                // How you would like to style the map.
                // This is where you would paste any style found on Snazzy Maps.
                styles: [{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#d1d1d1"}]},{"featureType":"transit","stylers":[{"color":"#808080"},{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"color":"#d1d1d1"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#d1d1d1"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"weight":1.8}]},{"featureType":"road.local","elementType":"geometry.stroke","stylers":[{"color":"#d7d7d7"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ebebeb"}]},{"featureType":"administrative","elementType":"geometry","stylers":[{"color":"#d1d1d1"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#fafafa"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#d6d6d6"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"visibility":"on"},{"color":"#bfbfbf"}]},{"featureType":"poi","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#d6d6d6"}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"color":"#f1f1f1"}]}]
            };

            // Get the HTML DOM element that will contain your map
            // We are using a div with id="map" seen below in the <body>
            var mapElement = document.getElementById('map');

            // Create the Google Map using our element and options defined above
            var map = new google.maps.Map(mapElement, mapOptions);


            var image = 'images/custom/beachflag.png';

            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(40.6700, -73.9400),
                map: map,
                icon : image,
                title: 'Snazzy!'
            });


        }
    </script>






    <?php } ?>
    <?php endif; ?>
    <!-- /map -->


<?php if ($layout_type_footer != 4): ?>
<?php if (!isset($top_button) || $top_button != 0) : ?>
<a class="btn btn--ys btn--full visible-xs back-to-top1">
        <?php echo $menu_back; ?>
        <span class="icon icon-expand_less"></span>
    </a>
<?php endif; ?>


<?php endif; ?>

</footer>
<!-- END FOOTER section -->


</body>
</html>