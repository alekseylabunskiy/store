<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir="<?php echo $direction; ?>" lang="<?php echo $lang; ?>" class="ie8"><![endif]-->
<!--[if IE 9 ]><html dir="<?php echo $direction; ?>" lang="<?php echo $lang; ?>" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir="<?php echo $direction; ?>" lang="<?php echo $lang; ?>">
<!--<![endif]-->
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo $title; ?></title>
<base href="<?php echo $base; ?>" />
<?php if ($description) { ?>
<meta name="description" content="<?php echo $description; ?>" />
<?php } ?>
<?php if ($keywords) { ?>
<meta name="keywords" content= "<?php echo $keywords; ?>" />
<?php } ?>

<!--default variables-->
    <?php
    if (!isset($layoutid)) {$layoutid = 1;}
    if (!isset($theme)) {$theme = 'yourstore';}
    if (!isset($store_id)) {$store_id  = 0;}
    if (!isset($layout_id)) {$layout_id  = 1;}
    if (!isset($headertype)) {$headertype  = 1;}
    if (!isset($product_right_slider)) {$product_right_slider  = 0;}
    if (!isset($lang)) {$lang  = 1;}
    ?>

<script async src="catalog/view/theme/<?php echo $theme; ?>/js/default.js" type="text/javascript"></script>


    <!--**************************************************************theme css-->
<link rel="stylesheet" href="catalog/view/theme/<?php echo $theme; ?>/css/default.css">
<link rel="stylesheet" href="catalog/view/theme/<?php echo $theme; ?>/css/external_plugins.css">

<?php if ($layoutid == 10) { ?>
<link rel="stylesheet" href="catalog/view/theme/<?php echo $theme; ?>/css/style-layout10-no-panel.css">
<?php } elseif ($layoutid == 11) { ?>
<link rel="stylesheet" href="catalog/view/theme/<?php echo $theme; ?>/css/style-layout11-no-panel.css">
<?php } elseif ($layoutid == 12) { ?>
<link rel="stylesheet" href="catalog/view/theme/<?php echo $theme; ?>/css/style-layout12-no-panel.css">
<?php } else { ?>
<link rel="stylesheet" href="catalog/view/theme/<?php echo $theme; ?>/css/style-no-panel.css">
<?php } ?>

<?php if ($direction == 'rtl') : ?>
<link href="catalog/view/theme/<?php echo $theme; ?>/css/style-rtl.css" rel="stylesheet">
<?php endif; ?>

<!--custom colors-->
<?php echo (isset($css) ? $css : ''); ?>

<!-- Modernizr -->
<script async src="catalog/view/theme/<?php echo $theme; ?>/external/modernizr/modernizr.js"></script>

<!--**************************************************************end theme css-->

<?php foreach ($styles as $style) { ?>
<link href="<?php echo $style['href']; ?>" type="text/css" rel="<?php echo $style['rel']; ?>" media="<?php echo $style['media']; ?>" />
<?php } ?>

<?php if (isset($css_file) && $css_file != 0) : ?>
<link href="catalog/view/theme/<?php echo $theme; ?>/css/custom.css" rel="stylesheet">
<?php endif; ?>

<!--**************************************************************theme scripts-->

<script src="catalog/view/theme/<?php echo $theme; ?>/js/external_js.min.js"></script>

<?php if ($layout_id == 1) : ?>
<script async src="catalog/view/theme/<?php echo $theme; ?>/external/instafeed/instafeed.min.js"></script>
<?php endif; ?>

<script src="catalog/view/theme/<?php echo $theme; ?>/js/custom.js"></script>
<script src="catalog/view/theme/<?php echo $theme; ?>/js/theme_scripts.js"></script>

<script type="text/javascript">
    $j(document).ready(function() {

        // popup ini
        $j('.quick-view').magnificPopup({
            type: 'ajax'
        });

        // Init All Carousel
        productCarousel($j('#megaMenuCarousel1'),1,1,1,1,1);
        //productCarousel($j('#carouselNew'),2,2,3,2,1);
        //productCarousel($j('#carouselSale'),2,2,3,2,1);
        //productCarousel($j('#postsCarousel'),2,3,3,2,1); // 3 - xl, 3 - lg, 3 - md, 2 - sm, 1 - xs
        mobileOnlyCarousel();
        bannerCarousel($j('.banner-carousel'));
        //bannerCarousel($j('.category-carousel'));
        //blogCarousel($j('.slider-blog'),1,1,1,1,1);
        //brandsCarousel($j('.brands-carousel'));

        verticalCarousel($j('.special-carousel'),2);
        productCarousel($j('.top-latest-carousel'),1,1,1,1,1);

        //aside - layout 2
        bannerAsid($j('.bannerAsid'),1,1,1,1,1);//banner

        <?php if ($layoutid == 2  || $layoutid == 12) { ?>
            productCarousel($j('#carouselFeatured'),5,3,3,2,1);
            productCarousel($j('#carouselSale'),3,2,2,2,1);
            productCarousel($j('#carouselNew'),2,1,2,2,1);
            productCarousel($j('#carouselBestseller'),3,2,2,2,2);
        <?php } elseif ($layoutid == 3) { ?>
            productCarousel($j('.banner-slider'),1,1,1,1,1);
            productCarousel($j('#carouselNew'),3,2,2,2,1);
            productCarousel($j('#carouselSale'),3,2,2,2,1);
            productCarousel($j('#carouselFeatured'),6,4,3,2,1);
            productCarousel($j('#megaMenuCarousel1'),1,1,1,1,1);

            mobileOnlyCarousel();

        <?php } elseif ($layoutid == 5) { ?>
            productCarousel($j('#carouselNew'),3,2,2,2,1);
            productCarousel($j('#carouselSale'),3,2,2,2,1);
            productCarousel($j('#carouselFeatured'),6,4,3,2,1);
            productCarousel($j('.banner-carousel-1'),4,4,3,2,1);
            mobileOnlyCarousel();
            bannerCarousel($j('.banner-carousel'));
        <?php } elseif ($layoutid == 7) { ?>
            productCarousel($j('.bannerCarousel'),4,3,3,2,1);
        <?php } elseif ($layoutid == 11) { ?>
            productCarousel($j('.banner-carousel-1'),4,4,3,2,1);
            productCarousel($j('#carouselFeatured'),6,4,3,2,1);
            productCarousel($j('.bannerCarousel'),4,3,3,2,1);
            productCarousel($j('.banner-slider'),1,1,1,1,1);
            mobileOnlyCarousel();

            productCarousel($j('#postsCarousel'),2,2,2,2,1); // 3 - xl, 3 - lg, 3 - md, 2 - sm, 1 - xs
        <?php } else { ?>
            productCarousel($j('#carouselFeatured'),6,4,3,2,1);
            productCarousel($j('#carouselSale'),2,2,3,2,1);
            productCarousel($j('#carouselNew'),2,2,3,2,1);
            productCarousel($j('#carouselBestseller'),2,2,3,2,1);
        <?php } ?>

        productCarousel($j('.carouselСategories'),6,4,3,2,1);



    })
</script>
<?php if ($layout_id == 1) : ?>

<script type="text/javascript">
    $j(document).ready(function() {
        if ($('#instafeed').length > 0) {
            // Instagram Feed
            <?php if (isset($customisation_general["insta_code"][$store_id]) && $customisation_general["insta_code"][$store_id] != '') { ?>
                <?php echo html_entity_decode($customisation_general["insta_code"][$store_id], ENT_QUOTES, 'UTF-8'); ?>
                <?php } else { ?>
                var feed = new Instafeed({
                    get: 'user',
                    userId: '2324131028',
                    clientId: '422b4d6cf31747f7990a723ca097f64e',

                        <?php if ($layoutid == 9) { ?>
                    limit: 6,
                <?php } else { ?>
                    limit: 20,
                <?php } ?>

                sortBy: 'most-liked',
                        resolution: "standard_resolution",
                        accessToken: '2324131028.422b4d6.d6d71d31431a4e8fbf6cb1efa1a2dfdc',
                        template: '<a href="{{link}}" target="_blank"><img src="{{image}}" /></a>'

                        <?php } ?>

        });
        feed.run();

    }

    })
</script>
<?php endif; ?>
<!--**************************************************************end theme scripts-->


<?php foreach ($links as $link) { ?>
<link href="<?php echo $link['href']; ?>" rel="<?php echo $link['rel']; ?>" />
<?php } ?>
<?php foreach ($scripts as $script) { ?>
<script async src="<?php echo $script; ?>" type="text/javascript"></script>
<?php } ?>
<?php foreach ($analytics as $analytic) { ?>
<?php echo $analytic; ?>
<?php } ?>
</head>

<body class="<?php echo $class; ?> <?php echo (isset($layout_id) && $layout_id == 1 && $layoutid == 1 ? 'index' : ''); ?> <?php echo (isset($layout_id) ? 'layout_id_'.$layout_id : ''); ?> <?php echo (isset($store_id) ? 'store_id_'.$store_id : ''); ?> <?php echo 'storelayout_'.$layoutid; ?>">

<?php if (!isset($preloader) || $preloader != 0) : ?>
<div id="loader-wrapper">
<div id="loader">
<?php
if (isset($preloader_html) && $preloader_html != '') {
echo $preloader_html;
} else {
?>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
<?php } ?>
</div>
</div>
<?php endif; ?>

<!-- Back to top -->
<?php if (!isset($top_button) || $top_button != 0) : ?>
<div class="back-to-top"><span class="icon-keyboard_arrow_up"></span></div>
<?php endif; ?>
<!-- /Back to top -->

<!-- mobile menu -->
<?php if ($categories) : ?>
<div class="hidden">
    <nav id="off-canvas-menu">
        <ul class="expander-list">
            <?php foreach ($categories as $category) : ?>
            <?php if (isset($category['category_top_level'])) : $category_top_level = $category['category_top_level']; endif; ?>

            <!--category item-->
            <li>
				<span class="name">
					<?php if ($category['children']) : ?><span class="expander">-</span><?php endif; ?>
				    <a href="<?php echo (isset($category['external_link']) && $category['external_link'] != '' ? $category['external_link'] : $category['href']); ?>">
                        <span class="act-underline">
                            <?php echo $category['name']; ?>
                            <!--main category promo-->
                            <?php if (!isset($category['menu_class'])) : ?>
                            <?php echo (isset($category_top_level['promo']) && $category_top_level['promo'] != '' ? html_entity_decode($category_top_level['promo'], ENT_QUOTES, 'UTF-8') : ''); ?>
                            <?php endif; ?>
                            <!--main category promo-->
                        </span>
                    </a>
				</span>

                <!--category dd-->
                <?php if ($category['children']) : ?>
                <ul class="multicolumn-level">

                    <?php foreach ($category['children'] as $child) : ?>
                    <!--subcategory item-->
                    <li>
                        <span class="name">
                            <?php if (isset($child['grandchildren'])): $categories_sub_level_2 = $child['grandchildren']; endif;  ?>

                            <?php if (isset($categories_sub_level_2) && !isset($category['menu_class'])) : ?><span class="expander">-</span><?php endif; ?>
                            <a class="megamenu__subtitle" href="<?php echo (isset($child['external_link']) && $child['external_link'] != '' ? $child['external_link'] : $child['href']); ?>">
                                <span><?php echo $child['name']; ?></span>
                            </a>
                        </span>
                        <!--2 level subcategories-->
                        <?php  if (isset($categories_sub_level_2) && !isset($category['menu_class'])) : ?>
                        <ul class="image-links-level-3 megamenu__submenu">
                            <?php  foreach ($categories_sub_level_2 as $category_sub_level_2) : ?>
                                <li class="level3"><a href="<?php echo $category_sub_level_2['href']; ?>"><?php echo $category_sub_level_2['name']; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                        <?php endif; ?>
                        <!--// 2 level subcategories-->
                    </li>
                    <!--// subcategory item-->
                    <?php endforeach; ?>

                </ul>
                <?php endif; ?>
                <!--// category dd-->

            </li>
            <!--// category item-->
            <?php endforeach; ?>


            <!-- pages item mobile -->
            <?php if (!isset($customisation_general["pages_status"][$store_id]) || $customisation_general["pages_status"][$store_id] != 0) :  ?>
            <li>
                <span class="name">
                <?php if (isset($informations)) : ?><span class="expander">-</span><?php endif; ?>
                <a href="<?php if ($pages_link_url !== '' ) {echo $pages_link_url;} else {echo '#';} ?>">
                    <span class="act-underline">
                        <?php
                            if (isset($customisation_general[$lang]["pages_link_title"][$store_id]) && $customisation_general[$lang]["pages_link_title"][$store_id] !== '' ) {
                               echo $customisation_general[$lang]["pages_link_title"][$store_id];
                            } else {echo 'pages';}
                        ?>
                    </span>
                </a>
			    </span>


            <ul class="multicolumn">

                <?php
                if (isset($informations)) :
                    foreach ($informations as $information) :

        if (isset($customisation_general["additional_page_status"])):
        foreach ($customisation_general["additional_page_status"] as $information_id => $information_status) :
                if ($information_id == $information['information_id'] && $information_status[$store_id] != 0) :
                ?>
                <li><a href="<?php echo $information['href']; ?>"><?php echo $information['title']; ?></a></li>
                <?php
                            endif;
                        endforeach;

                    endif;
                 endforeach;
            endif;
            ?>


                <?php if (!isset($additional_page_checkout_status) || $additional_page_checkout_status != 0 ) :  ?>
                <li><a href="<?php echo $checkout; ?>"><?php echo $text_checkout; ?></a></li>
                <?php endif; ?>
                <?php if (!isset($additional_page_account_status) || $additional_page_account_status != 0 ) :  ?>
                <li><a href="<?php echo $account; ?>"><?php echo $text_account; ?></a></li>
                <?php endif; ?>

            </ul>

            </li>
            <?php endif; ?>
            <!-- end pages item mobile -->

            <!-- blog link in top menu-->
            <?php if (isset($blog_link_status) && $blog_link_status == 1) :  ?>
            <li>
                <span class="name">
                   <a href="<?php if ($blog_link_url !== '' ) {echo $blog_link_url;} else {echo 'index.php?route=simple_blog/article';} ?>">
                        <span class="act-underline">
                            <?php
                      if (isset($customisation_general[$lang]["blog_link_title"][$store_id]) && $customisation_general[$lang]["blog_link_title"][$store_id] != '' ) :
                          echo $customisation_general[$lang]["blog_link_title"][$store_id];
                      endif;
                      ?>
                        </span>
                   </a>
                </span>

            </li>
            <?php endif; ?>
            <!-- //blog link in top menu-->

            <!-- custom item -->
            <?php if (isset($customisation_general[$lang]["customitem_item_title1"][$store_id]) && $customisation_general[$lang]["customitem_item_title1"][$store_id] !== '' ): ?>
            <li class="custom_item">
                <span class="name"><a href="<?php if ($customisation_general["customitem_item_url1"][$store_id] !== '' ) {echo $customisation_general["customitem_item_url1"][$store_id];} else {echo 'index.php';} ?>"><span class="act-underline"><?php echo $customisation_general[$lang]["customitem_item_title1"][$store_id]; ?></span></a></span>
            </li>
            <?php endif; ?>
            <!-- end custom item -->
        </ul>

    </nav>
</div>
<?php endif; ?>
<!-- /mobile menu -->

<!-- HEADER section -->
<div class="header-wrapper" style="margin-bottom: -80px;">
<header id="header" class="<?php echo ($layout_id != 1 && $layoutid == 4 ? 'header-layout-05' : ($layout_id == 1 && $layoutid == 4 ? 'header-layout-04' : 'header-layout-0'.$headertype)); ?> <?php echo 'headertype_'.$headertype; ?>">
<?php if ($headertype == 6 || $headertype == 7 || $headertype == 8) { ?>

<!--*******************************************header type 6, 7-->
<div class="container">
    <div class="row">

    <?php if ($headertype == 8) : ?>
    <!-- col-left -->
    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 visible-mobile-menu-on">
        <div class="settings">
            <!-- currency start -->
            <?php if ($currency) {echo $currency; } ?>
            <!-- currency end -->
            <!-- language start -->
            <?php if ($language) {echo $language; } ?>
            <!-- language end -->
        </div>
    </div>
        <?php if (!isset($header_service_buttons) || $header_service_buttons != 0) : ?>
    <div class="col-sm-9 col-md-9 col-lg-9 col-xl-9 text-right visible-mobile-menu-on">
        <!-- account menu start -->
        <div class="account link-inline">
            <div class="dropdown text-right">
                <a class="dropdown-toggle" data-toggle="dropdown">
                    <span class="icon icon-person "></span>
                </a>
                <ul class="dropdown-menu dropdown-menu--xs-full">
                    <?php if ($logged) { ?>
                    <li><a href="<?php echo $account; ?>"><?php echo $text_account; ?></a></li>
                    <li><a href="<?php echo $order; ?>"><?php echo $text_order; ?></a></li>
                    <li><a href="<?php echo $logout; ?>"><?php echo $text_logout; ?></a></li>
                    <?php } else { ?>
                    <li><a href="<?php echo $register; ?>"><?php echo $text_register; ?></a></li>
                    <li><a href="<?php echo $login; ?>"><?php echo $text_login; ?></a></li>
                    <?php } ?>
                    <li><a href="<?php echo $wishlist; ?>" id="wishlist-total" title="<?php echo $text_wishlist; ?>"><span class="text"><?php echo $text_wishlist; ?></span></a></li>
                    <li><a href="<?php echo $shopping_cart; ?>" title="<?php echo $text_shopping_cart; ?>"><?php echo $text_shopping_cart; ?></a></li>
                    <li><a href="<?php echo $checkout; ?>" title="<?php echo $text_checkout; ?>"><?php echo $text_checkout; ?></a></li>
                    <li class="dropdown-menu__close"><a href="#"><span class="icon icon-close"></span><?php echo (isset($customisation_translation[$lang]["menu_close"][$store_id]) ? $customisation_translation[$lang]["menu_close"][$store_id] : 'close'); ?></a></li>
                </ul>
            </div>
        </div>
        <!-- account menu end -->
    </div>
        <?php endif; ?>
    <!-- //col-left -->
    <?php endif; ?>

        <div class="<?php echo ($headertype == 6 ? 'col-xl-3' : ($headertype == 8 ? 'col-sm-12 text-center' : 'col-sm-4 col-md-4 col-lg-4 col-xl-4')); ?>">
            <!-- logo start -->
            <?php if ($logo) { ?>
            <a href="<?php echo $home; ?>"><img class="logo replace-2x img-responsive" src="<?php echo $logo; ?>" title="<?php echo $name; ?>" alt="<?php echo $name; ?>" /></a>
            <?php } else { ?>
            <h1><a href="<?php echo $home; ?>"><?php echo $name; ?></a></h1>
            <?php } ?>
            <!-- logo end -->
        </div>


    <!--for header 8-->
        <?php if ($headertype == 8) : ?>
    </div>
</div>
<?php endif; ?>

<!--for header 8-->


    <!--  header 6, 8 -->
    <?php if ($headertype == 6 || $headertype == 8) : ?>
    <?php if ($headertype == 6) : ?>
    <div class="col-xl-7 col-lg-push-12 text-center">
    <?php endif; ?>
        <div class="stuck-nav">
        <div class="container <?php echo ($headertype == 8 ? 'offset-top-5' : ''); ?>">

        <?php if ($headertype == 8) : ?>
        <div class="row">
        <?php endif; ?>

        <!-- navigation start -->
        <div class="<?php echo ($headertype == 8 ? 'pull-left col-sm-9 col-md-9 col-lg-10 text-center' : 'col-stuck-menu'); ?>">
        <!-- navigation start -->
        <nav class="navbar <?php echo ($headertype == 3 ? 'navbar-color-white' : ''); ?>">
        <div class="responsive-menu mainMenu">
        <!-- Mobile menu Button-->
        <div class="col-xs-2 visible-mobile-menu-on">
            <div class="expand-nav compact-hidden">
                <a href="#off-canvas-menu" class="off-canvas-menu-toggle">
                    <span class="navbar-toggle">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    <span class="menu-text">
                        <?php echo (isset($customisation_translation[$lang]["menu_title"][$store_id]) ? $customisation_translation[$lang]["menu_title"][$store_id] : 'MENU'); ?>
                    </span>
                    </span>
                </a>
            </div>
        </div>
        <!-- //end Mobile menu Button -->

        <ul class="nav navbar-nav">
            <li class="dl-close"><a href="#"><span class="icon icon-close"></span><?php echo (isset($customisation_translation[$lang]["menu_close"][$store_id]) ? $customisation_translation[$lang]["menu_close"][$store_id] : 'close'); ?></a></li>

            <?php if ($categories) : ?>
            <?php foreach ($categories as $category) : ?>
            <?php if (isset($category['category_top_level'])) : $category_top_level = $category['category_top_level']; endif; ?>

            <!--category item-->
            <li class="dropdown dropdown-mega-menu">

                <span class="dropdown-toggle extra-arrow"></span>
                <a href="<?php echo (isset($category['external_link']) && $category['external_link'] != '' ? $category['external_link'] : $category['href']); ?>" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="act-underline">
                            <?php echo $category['name']; ?>
                            <!--main category promo-->
                            <?php if (!isset($category['menu_class'])) : ?>
                            <?php echo (isset($category_top_level['promo']) && $category_top_level['promo'] != '' ? html_entity_decode($category_top_level['promo'], ENT_QUOTES, 'UTF-8') : ''); ?>
                            <?php endif; ?>
                            <!--main category promo-->
                        </span>
                </a>
                <!--dropdown main-->
                <?php if ($category['children']) : ?>
                <ul class="dropdown-menu megamenu <?php echo (isset($category['menu_class']) && $category['menu_class'] == 'simple_blog' ? ($category['column'] == 4 ? 'category-blog image-links-layout' : 'category-blog image-links') : 'category'); ?>" role="menu">
                    <li class="dl-back">
                        <a href="#">
                            <span class="icon icon-chevron_left"></span>
                            <?php echo (isset($customisation_translation[$lang]["menu_back"][$store_id]) ? $customisation_translation[$lang]["menu_back"][$store_id] : 'back'); ?>
                        </a>
                    </li>

                    <!--1 level subcategories-->

                    <?php
                     if (isset($category['product_right_slider'])) : $product_right_slider = $category['product_right_slider']; endif;

                    $column = $category["column"];

                    if (isset($product_right_slider) && $product_right_slider == 1) {
                    $cols_base = 9;

                    } else {
                    $cols_base = 12;
                    }

                    $cols = floor($cols_base/$column);

                    if (count($category['children']) > 1 && isset($category['menu_class']) && $category['menu_class'] == 'simple_blog') {
                    $category_class = $category['menu_class'];
                    } else {
                    $category_class = 'col-sm-'.$cols;
                    }


                    if (isset($category['menu_class']) && $category['menu_class'] == 'simple_blog') {


                    ?>
                    <!--categories from Blog-->
                    <?php foreach ($category['children'] as $child) : ?>
                    <li class="<?php echo $category_class; ?>">
                                <span class="image-link">
                                    <a href="<?php echo (isset($child['external_link']) && $child['external_link'] != '' ? $child['external_link'] : $child['href']); ?>">
                                        <?php if ($child['image']) : ?>
                                        <span class="figure"><img class="img-responsive" src="<?php echo $child['image']; ?>" alt="" /></span>
                                        <?php endif; ?>
                                        <span class="figcaption text-uppercase"><?php echo $child['name']; ?></span>
                                    </a>
                                </span>
                    </li>
                    <?php endforeach; ?>
                    <!--//categories from Blog-->


                    <?php  } else {  ?>
                    <!--categories from Main menu-->
                    <?php foreach (array_chunk($category['children'], ceil(count($category['children']) / $category['column'])) as $children) : ?>
                    <li class="<?php echo $category_class; ?>">
                        <?php foreach ($children as $child) { ?>
                        <?php if (isset($child['category_sub_level'])) : $category_sub_level = $child['category_sub_level']; endif;  ?>
                        <a class="megamenu__subtitle" href="<?php echo $child['href']; ?>">
                            <span><?php echo $child['name']; ?></span>
                            <!--bottom block for sub category-->
                            <?php echo (isset($category_sub_level['html_bottom']) && $category_sub_level['html_bottom'] != '' ? '<span class="megamenu__category-image hidden-xs">'.html_entity_decode($category_sub_level['html_bottom'], ENT_QUOTES, 'UTF-8').'</span>' : ''); ?>
                            <!--bottom block for sub category-->
                        </a>
                        <!--2 level subcategories-->
                            <?php
                                if (isset($child['grandchildren'])):
                                $categories_sub_level_2 = $child['grandchildren'];
                            ?>

                            <ul class="megamenu__submenu megamenu__submenu--marked">
                                <li class="dl-back"><a href="#"><span class="icon icon-chevron_left"></span><?php echo (isset($customisation_translation[$lang]["menu_back"][$store_id]) ? $customisation_translation[$lang]["menu_back"][$store_id] : 'back'); ?></a></li>
                                <?php foreach ($categories_sub_level_2 as $category_sub_level_2) : ?>
                                <li class="level2"><a href="<?php echo $category_sub_level_2['href']; ?>"><?php echo $category_sub_level_2['name']; ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                            <?php endif; ?>
                            <!--// 2 level subcategories-->
                        <?php } ?>
                    </li>
                    <?php endforeach; ?>

                    <!--//categories from Main menu-->
                    <?php  }  ?>


                    <!--1 level subcategories-->

                    <!--slider in Top menu-->
                    <?php  if (!isset($category['menu_class'])) : ?>
                    <?php if (isset($product_right_slider) && $product_right_slider == 1) : ?>
                    <li class="col-sm-3 hidden-xs"><?php echo $category['category_menu_slider']; ?></li>
                    <?php endif; ?>
                    <?php endif; ?>
                    <!--// slider in Top menu-->

                    <!--custom blocks in dropdown for main category: bottom-->
                    <?php echo (!isset($category['menu_class']) && isset($category_top_level['html_bottom']) && $category_top_level['html_bottom'] != '' ? '<li class="col-sm-12 hidden-xs">'.html_entity_decode($category_top_level['html_bottom'], ENT_QUOTES, 'UTF-8').'</li>' : ''); ?>
            <!--custom blocks in dropdown for main category: bottom-->

        </ul>
        <?php endif; ?>
        <!--//dropdown main-->


        </li>
        <!--end category item-->
        <?php endforeach; ?>
        <?php endif; ?>

        <!-- pages item desktop -->
        <?php if (!isset($customisation_general["pages_status"][$store_id]) || $customisation_general["pages_status"][$store_id] != 0) :  ?>
        <li class="dropdown dropdown-mega-menu dropdown-two-col">
            <span class="dropdown-toggle extra-arrow"></span>
            <a href="<?php if ($customisation_general["pages_link_url"][$store_id] !== '' ) {echo $customisation_general["pages_link_url"][$store_id];} else {echo '#';} ?>" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline">
               <?php
                                         if (isset($customisation_general[$lang]["pages_link_title"][$store_id]) && $customisation_general[$lang]["pages_link_title"][$store_id] !== '' ) {
                                             echo $customisation_general[$lang]["pages_link_title"][$store_id];
                                         } else {echo 'pages';}
              ?>
            </span>
            </a>
            <ul class="dropdown-menu multicolumn two-col" role="menu">
                <li class="dl-back"><a href="#"><span class="icon icon-chevron_left"></span><?php echo (isset($customisation_translation[$lang]["menu_back"][$store_id]) ? $customisation_translation[$lang]["menu_back"][$store_id] : 'back'); ?></a></li>


                <?php
                if (isset($informations)) :
                    foreach ($informations as $information) :

        if (isset($customisation_general["additional_page_status"])):
        foreach ($customisation_general["additional_page_status"] as $information_id => $information_status) :
                if ($information_id == $information['information_id'] && $information_status[$store_id] != 0) :
                ?>
                <li><a href="<?php echo $information['href']; ?>"><?php echo $information['title']; ?></a></li>
                <?php
                                endif;
                            endforeach;

                        endif;
                     endforeach;
                endif;
                ?>


                <?php if (!isset($additional_page_checkout_status) || $additional_page_checkout_status != 0 ) :  ?>
                <li><a href="<?php echo $checkout; ?>"><?php echo $text_checkout; ?></a></li>
                <?php endif; ?>
                <?php if (!isset($additional_page_account_status) || $additional_page_account_status != 0 ) :  ?>
                <li><a href="<?php echo $account; ?>"><?php echo $text_account; ?></a></li>
                <?php endif; ?>

            </ul>
        </li>
        <?php endif; ?>
        <!-- end pages item desktop -->

        <!-- blog link in top menu-->
        <?php if (isset($blog_link_status) && $blog_link_status == 1) :  ?>
        <li class="dropdown dropdown-mega-menu dropdown-one-col">
            <a href="<?php if ($blog_link_url !== '' ) {echo $blog_link_url;} else {echo 'index.php?route=simple_blog/article';} ?>" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="act-underline">
                      <?php
                      if (isset($customisation_general[$lang]["blog_link_title"][$store_id]) && $customisation_general[$lang]["blog_link_title"][$store_id] != '' ) :
                          echo $customisation_general[$lang]["blog_link_title"][$store_id];
                      endif;
                      ?>
                    </span>
            </a>
        </li>
        <?php endif; ?>
        <!-- //blog link in top menu-->


        <!-- custom item -->
        <?php if (isset($customisation_general[$lang]["customitem_item_title1"][$store_id]) && $customisation_general[$lang]["customitem_item_title1"][$store_id] !== '' ): ?>
        <li class="dropdown dropdown-mega-menu dropdown-one-col custom_item">
            <a href="<?php if ($customisation_general["customitem_item_url1"][$store_id] !== '' ) {echo $customisation_general["customitem_item_url1"][$store_id];} else {echo 'index.php';} ?>">
            <span class="act-underline"><?php echo $customisation_general[$lang]["customitem_item_title1"][$store_id]; ?></span>
            </a>
        </li>
        <?php endif; ?>
        <!-- end custom item -->


        </ul>
        </div>
        </nav>
        <!-- navigation end -->
        </div>
        <!-- /navigation end -->

        <div class="<?php echo ($headertype == 8 ? 'pull-right col-sm-3 col-md-3 col-lg-2' : 'pull-right col-stuck-cart text-right'); ?>">
            <?php if ($headertype == 8) : ?>
                <div class="text-right">

                    <div class="search link-inline">
                        <?php echo $search; ?>
                    </div>
                    <!-- icon toggle menu -->
                    <div class="link-inline toggle-menu  visible-mobile-menu-off">
                        <span class="icon icon-reorder"></span>
                        <ul class="dropdown-menu " role="menu">
                            <li class="li-col-full">
                                <span class="close icon-clear pull-right" data-dismiss="modal"></span>
                                <em class="color main-font">
                                    <?php echo (isset($customisation_general[$lang]["welcome_message"][$store_id]) && is_string($customisation_general[$lang]["welcome_message"][$store_id]) ? html_entity_decode($customisation_general[$lang]["welcome_message"][$store_id], ENT_QUOTES, 'UTF-8') : 'Default welcome msg!'); ?>
                                </em>
                            </li>
                            <li class="li-col list-user-menu">
                                <h4 class="megamenu__subtitle"><span><?php echo $text_account; ?></span></h4>
                                <ul>
                                    <?php if ($logged) { ?>
                                    <li><a href="<?php echo $account; ?>"><?php echo $text_account; ?></a></li>
                                    <li><a href="<?php echo $order; ?>"><?php echo $text_order; ?></a></li>
                                    <li><a href="<?php echo $logout; ?>"><?php echo $text_logout; ?></a></li>
                                    <?php } else { ?>
                                    <li><a href="<?php echo $register; ?>"><?php echo $text_register; ?></a></li>
                                    <li><a href="<?php echo $login; ?>"><?php echo $text_login; ?></a></li>
                                    <?php } ?>
                                    <li><a href="<?php echo $wishlist; ?>" id="wishlist-total" title="<?php echo $text_wishlist; ?>"><span class="text"><?php echo $text_wishlist; ?></span></a></li>
                                    <li><a href="<?php echo $shopping_cart; ?>" title="<?php echo $text_shopping_cart; ?>"><?php echo $text_shopping_cart; ?></a></li>
                                    <li><a href="<?php echo $checkout; ?>" title="<?php echo $text_checkout; ?>"><?php echo $text_checkout; ?></a></li>
                                </ul>
                            </li>

                            <!-- language start -->
                            <?php if ($language) {echo '<li class="li-col languages languages--flag">'.$language.'</li>'; } ?>
                            <!-- language end -->
                            <!-- currency start -->
                            <?php if ($currency) {echo '<li class="li-col currency">'.$currency.'</li>'; } ?>
                            <!-- currency end -->
                        </ul>
                    </div>
                    <!-- /icon toggle menu -->


                    <?php endif; ?>

        <!-- shopping cart start -->
            <?php if (!isset($product_catalog_mode) || ($product_catalog_mode != 1)) : ?>
                    <?php if (!isset($cart_button) || $cart_button != 0) : ?>
                    <?php echo $cart; ?>
                    <?php endif; ?>
            <?php endif; ?>
            <!-- shopping cart end -->
            <?php if ($headertype == 8) : ?>
                </div>
            <?php endif; ?>
        </div>


        <?php if ($headertype == 8) : ?>
        </div>
        <?php endif; ?>

        </div>
        </div>

        <?php if ($headertype == 6) : ?>
        </div>
        <?php endif; ?>

        <?php endif; ?>
    <!-- end header 6, 8 -->

    <?php if ($headertype == 7) : ?>
        <!-- search start -->
        <?php if (!isset($search_block) || $search_block) : ?>
            <div class="col-lg-6 col-lg-offset-0 col-xl-6 col-md-4 col-md-offset-1 text-center">
                <div class="search-outer visible-mobile-menu-off">
                    <?php echo $search; ?>
                </div>
            </div>
        <?php endif; ?>
        <!-- search end -->
        <?php endif; ?>
<?php if ($headertype != 8) : ?>
        <div class="col-sm-8 col-md-8 col-lg-6 col-xl-5 text-right visible-mobile-menu-on">
            <!-- slogan start -->
            <div class="slogan"><?php echo (isset($customisation_general[$lang]["welcome_message"][$store_id]) && is_string($customisation_general[$lang]["welcome_message"][$store_id]) ? html_entity_decode($customisation_general[$lang]["welcome_message"][$store_id], ENT_QUOTES, 'UTF-8') : 'Default welcome msg!'); ?></div>
            <!-- slogan end -->
            <div class="settings">
                <!-- currency start -->
                <?php if ($currency) {echo $currency; } ?>
                <!-- currency end -->
                <!-- language start -->
                <?php if ($language) {echo $language; } ?>
                <!-- language end -->
            </div>
        </div>
        <div class="pull-right <?php echo ($headertype == 6 || $headertype == 8 ? 'col-lg-pull-3 col-md-3  col-xl-2' : 'col-md-3  col-lg-2 col-xl-2'); ?> alignment-extra">
            <div class="text-right">
                <!-- search start -->
                <?php if (!isset($search_block) || $search_block != 0) : ?>
                <?php if ($headertype == 6 || $headertype == 8) { ?>
                <div class="search link-inline">
                    <?php echo $search; ?>
                </div>

                <?php } else { ?>
                <div class="search link-inline visible-mobile-menu-on">
                    <?php echo $search_mobile; ?>
                </div>
                <?php } ?>
                <?php endif; ?>
                <!-- search end -->
                <!-- account menu start -->
                <?php if (!isset($header_service_buttons) || $header_service_buttons != 0) : ?>
                <div class="account link-inline hidden mobile-menu-on">
                    <div class="dropdown text-right">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            <span class="icon icon-person "></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu--xs-full">
                            <?php if ($logged) { ?>
                            <li><a href="<?php echo $account; ?>"><span class="icon icon-person"></span><?php echo $text_account; ?></a></li>
                            <li><a href="<?php echo $order; ?>"><span class="icon icon-history"></span><?php echo $text_order; ?></a></li>
                            <li><a href="<?php echo $logout; ?>"><span class="icon icon-alarm_off"></span><?php echo $text_logout; ?></a></li>
                            <?php } else { ?>
                            <li><a href="<?php echo $register; ?>"><span class="icon icon-person_add"></span><?php echo $text_register; ?></a></li>
                            <li><a href="<?php echo $login; ?>"><span class="icon icon-lock"></span><?php echo $text_login; ?></a></li>
                            <?php } ?>
                            <li><a href="<?php echo $wishlist; ?>" id="wishlist-total" title="<?php echo $text_wishlist; ?>"><span class="icon icon-favorite_border"></span><span class="text"><?php echo $text_wishlist; ?></span></a></li>
                            <li><a href="<?php echo $shopping_cart; ?>" title="<?php echo $text_shopping_cart; ?>"><span class="icon icon-shopping_cart"></span><?php echo $text_shopping_cart; ?></a></li>
                            <li><a href="<?php echo $checkout; ?>" title="<?php echo $text_checkout; ?>"><span class="icon icon-done_all"></span><?php echo $text_checkout; ?></a></li>
                            <li class="dropdown-menu__close"><a href="#"><span class="icon icon-close"></span><?php echo (isset($customisation_translation[$lang]["menu_close"][$store_id]) ? $customisation_translation[$lang]["menu_close"][$store_id] : 'close'); ?></a></li>
                        </ul>
                    </div>
                </div>
                <?php endif; ?>
                <!-- account menu end -->
                <!-- icon toggle menu -->
                <div class="link-inline toggle-menu  visible-mobile-menu-off">
                    <span class="icon icon-reorder"></span>
                    <ul class="dropdown-menu " role="menu">
                        <li class="li-col-full">
                            <span class="close icon-clear pull-right" data-dismiss="modal"></span>
                            <em class="color main-font">
                                <?php echo (isset($customisation_general[$lang]["welcome_message"][$store_id]) && is_string($customisation_general[$lang]["welcome_message"][$store_id]) ? html_entity_decode($customisation_general[$lang]["welcome_message"][$store_id], ENT_QUOTES, 'UTF-8') : 'Default welcome msg!'); ?>
                            </em>
                        </li>
                        <li class="li-col list-user-menu">
                            <h4 class="megamenu__subtitle"><span><?php echo $text_account; ?></span></h4>
                            <ul>
                                <?php if ($logged) { ?>
                                <li><a href="<?php echo $account; ?>"><?php echo $text_account; ?></a></li>
                                <li><a href="<?php echo $order; ?>"><?php echo $text_order; ?></a></li>
                                <li><a href="<?php echo $logout; ?>"><?php echo $text_logout; ?></a></li>
                                <?php } else { ?>
                                <li><a href="<?php echo $register; ?>"><?php echo $text_register; ?></a></li>
                                <li><a href="<?php echo $login; ?>"><?php echo $text_login; ?></a></li>
                                <?php } ?>
                                <li><a href="<?php echo $wishlist; ?>" id="wishlist-total" title="<?php echo $text_wishlist; ?>"><span class="text"><?php echo $text_wishlist; ?></span></a></li>
                                <li><a href="<?php echo $shopping_cart; ?>" title="<?php echo $text_shopping_cart; ?>"><?php echo $text_shopping_cart; ?></a></li>
                                <li><a href="<?php echo $checkout; ?>" title="<?php echo $text_checkout; ?>"><?php echo $text_checkout; ?></a></li>
                            </ul>
                        </li>

                        <!-- language start -->
                        <?php if ($language) {echo '<li class="li-col languages languages--flag">'.$language.'</li>'; } ?>
                        <!-- language end -->
                        <!-- currency start -->
                        <?php if ($currency) {echo '<li class="li-col currency">'.$currency.'</li>'; } ?>
                        <!-- currency end -->
                    </ul>
                </div>
                <!-- /icon toggle menu -->
                <!-- shopping cart start -->
                <?php if (!isset($product_catalog_mode) || ($product_catalog_mode != 1)) : ?>
                <?php if (!isset($cart_button) || $cart_button != 0) : ?>
                <?php echo $cart; ?>
                <?php endif; ?>
                <?php endif; ?>
                <!-- shopping cart end -->
            </div>
        </div>


    </div>
</div>
<?php endif; ?>
<!--//*******************************************header type 6-->

<!--*******************************************header type 7-->
<?php if ($headertype == 7) : ?>
<!--stuck-nav-->
<div class="fill-bg stuck-nav">
<div class="container">
<div class="row">

<div class="col-md-12 col-stuck-menu">
<!-- navigation start -->
<nav class="navbar <?php echo ($headertype == 3 ? 'navbar-color-white' : ''); ?>">
<div class="responsive-menu mainMenu">
<!-- Mobile menu Button-->
<div class="col-xs-2 visible-mobile-menu-on">
    <div class="expand-nav compact-hidden">
        <a href="#off-canvas-menu" class="off-canvas-menu-toggle">
            <span class="navbar-toggle">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                    <span class="menu-text">
                        <?php echo (isset($customisation_translation[$lang]["menu_title"][$store_id]) ? $customisation_translation[$lang]["menu_title"][$store_id] : 'MENU'); ?>
                    </span>
            </span>
        </a>
    </div>
</div>
<!-- //end Mobile menu Button -->

<ul class="nav navbar-nav">
    <li class="dl-close"><a href="#"><span class="icon icon-close"></span><?php echo (isset($customisation_translation[$lang]["menu_close"][$store_id]) ? $customisation_translation[$lang]["menu_close"][$store_id] : 'close'); ?></a></li>

    <?php if ($categories) : ?>
    <?php foreach ($categories as $category) : ?>
    <?php if (isset($category['category_top_level'])) : $category_top_level = $category['category_top_level']; endif; ?>
    <!--category item-->
    <li class="dropdown dropdown-mega-menu">
        <span class="dropdown-toggle extra-arrow"></span>

        <a href="<?php echo (isset($category['external_link']) && $category['external_link'] != '' ? $category['external_link'] : $category['href']); ?>" class="dropdown-toggle" data-toggle="dropdown">


                        <span class="act-underline">
                            <?php echo $category['name']; ?>
                            <!--main category promo-->
                            <?php if (!isset($category['menu_class'])) : ?>
                            <?php echo (isset($category_top_level['promo']) && $category_top_level['promo'] != '' ? html_entity_decode($category_top_level['promo'], ENT_QUOTES, 'UTF-8') : ''); ?>
                            <?php endif; ?>
                            <!--main category promo-->

                        </span>
        </a>
        <!--dropdown main-->
        <?php if ($category['children']) : ?>
        <ul class="dropdown-menu megamenu <?php echo (isset($category['menu_class']) && $category['menu_class'] == 'simple_blog' ? ($category['column'] == 4 ? 'category-blog image-links-layout' : 'category-blog image-links') : 'category'); ?>" role="menu">
            <li class="dl-back">
                <a href="#">
                    <span class="icon icon-chevron_left"></span>
                    <?php echo (isset($customisation_translation[$lang]["menu_back"][$store_id]) ? $customisation_translation[$lang]["menu_back"][$store_id] : 'back'); ?>
                </a>
            </li>

            <!--1 level subcategories-->

            <?php
            if (isset($category['product_right_slider'])) : $product_right_slider = $category['product_right_slider']; endif;
            $column = $category["column"];

            if (isset($product_right_slider) && $product_right_slider == 1) {
            $cols_base = 9;

            } else {
            $cols_base = 12;
            }

            $cols = floor($cols_base/$column);

            if (count($category['children']) > 1 && isset($category['menu_class']) && $category['menu_class'] == 'simple_blog') {
            $category_class = $category['menu_class'];
            } else {
            $category_class = 'col-sm-'.$cols;
            }


            if (isset($category['menu_class']) && $category['menu_class'] == 'simple_blog') {


            ?>
            <!--categories from Blog-->
            <?php foreach ($category['children'] as $child) : ?>
            <li class="<?php echo $category_class; ?>">
                                <span class="image-link">
                                    <a href="<?php echo (isset($child['external_link']) && $child['external_link'] != '' ? $child['external_link'] : $child['href']); ?>">
                                        <?php if ($child['image']) : ?>
                                        <span class="figure"><img class="img-responsive" src="<?php echo $child['image']; ?>" alt=""/></span>
                                        <?php endif; ?>
                                        <span class="figcaption text-uppercase"><?php echo $child['name']; ?></span>
                                    </a>
                                </span>
            </li>
            <?php endforeach; ?>
            <!--//categories from Blog-->


            <?php  } else {  ?>
            <!--categories from Main menu-->
            <?php foreach (array_chunk($category['children'], ceil(count($category['children']) / $category['column'])) as $children) : ?>
            <li class="<?php echo $category_class; ?>">
                <?php foreach ($children as $child) { ?>
                <?php if (isset($child['category_sub_level'])) : $category_sub_level = $child['category_sub_level']; endif; ?>
                <a class="megamenu__subtitle" href="<?php echo $child['href']; ?>">
                    <span><?php echo $child['name']; ?></span>
                    <!--bottom block for sub category-->
                    <?php echo (isset($category_sub_level['html_bottom']) && $category_sub_level['html_bottom'] != '' ? '<span class="megamenu__category-image hidden-xs">'.html_entity_decode($category_sub_level['html_bottom'], ENT_QUOTES, 'UTF-8').'</span>' : ''); ?>
                    <!--bottom block for sub category-->
                </a>
                <!--2 level subcategories-->
                    <?php
                                if (isset($child['grandchildren'])):
                                $categories_sub_level_2 = $child['grandchildren'];
                    ?>

                    <ul class="megamenu__submenu megamenu__submenu--marked">
                        <li class="dl-back"><a href="#"><span class="icon icon-chevron_left"></span><?php echo (isset($customisation_translation[$lang]["menu_back"][$store_id]) ? $customisation_translation[$lang]["menu_back"][$store_id] : 'back'); ?></a></li>
                        <?php foreach ($categories_sub_level_2 as $category_sub_level_2) : ?>
                        <li class="level2"><a href="<?php echo $category_sub_level_2['href']; ?>"><?php echo $category_sub_level_2['name']; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>
                    <!--// 2 level subcategories-->
                <?php } ?>
            </li>
            <?php endforeach; ?>

            <!--//categories from Main menu-->
            <?php  }  ?>





            <!--1 level subcategories-->

            <!--slider in Top menu-->
            <?php if (!isset($category['menu_class'])) : ?>
            <?php if (isset($product_right_slider) && $product_right_slider == 1) : ?>
            <li class="col-sm-3 hidden-xs"><?php echo $category['category_menu_slider']; ?></li>
            <?php endif; ?>

            <?php endif; ?>
            <!--// slider in Top menu-->

            <!--custom blocks in dropdown for main category: bottom-->
            <?php echo (!isset($category['menu_class']) && isset($category_top_level['html_bottom']) && $category_top_level['html_bottom'] != '' ? '<li class="col-sm-12 hidden-xs">'.html_entity_decode($category_top_level['html_bottom'], ENT_QUOTES, 'UTF-8').'</li>' : ''); ?>
    <!--custom blocks in dropdown for main category: bottom-->

</ul>
<?php endif; ?>
<!--//dropdown main-->


</li>
<!--end category item-->
<?php endforeach; ?>
<?php endif; ?>

<!-- pages item desktop -->
<?php if (!isset($customisation_general["pages_status"][$store_id]) || $customisation_general["pages_status"][$store_id] != 0) :  ?>
<li class="dropdown dropdown-mega-menu dropdown-two-col">
    <span class="dropdown-toggle extra-arrow"></span>
    <a href="<?php if ($customisation_general["pages_link_url"][$store_id] !== '' ) {echo $customisation_general["pages_link_url"][$store_id];} else {echo '#';} ?>" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline">
               <?php
                                         if (isset($customisation_general[$lang]["pages_link_title"][$store_id]) && $customisation_general[$lang]["pages_link_title"][$store_id] !== '' ) {
                                             echo $customisation_general[$lang]["pages_link_title"][$store_id];
                                         } else {echo 'pages';}
              ?>
            </span>
    </a>
    <ul class="dropdown-menu multicolumn two-col" role="menu">
        <li class="dl-back"><a href="#"><span class="icon icon-chevron_left"></span><?php echo (isset($customisation_translation[$lang]["menu_back"][$store_id]) ? $customisation_translation[$lang]["menu_back"][$store_id] : 'back'); ?></a></li>

        <?php
                if (isset($informations)) :

                    foreach ($informations as $information) :

        if (isset($customisation_general["additional_page_status"])):
        foreach ($customisation_general["additional_page_status"] as $information_id => $information_status) :
        if ($information_id == $information['information_id'] && $information_status[$store_id] != 0) :
        ?>
        <li><a href="<?php echo $information['href']; ?>"><?php echo $information['title']; ?></a></li>
        <?php
                                endif;
                            endforeach;

                        endif;
                     endforeach;
                endif;
                ?>


        <?php if (!isset($additional_page_checkout_status) || $additional_page_checkout_status != 0 ) :  ?>
        <li><a href="<?php echo $checkout; ?>"><?php echo $text_checkout; ?></a></li>
        <?php endif; ?>
        <?php if (!isset($additional_page_account_status) || $additional_page_account_status) :  ?>
        <li><a href="<?php echo $account; ?>"><?php echo $text_account; ?></a></li>
        <?php endif; ?>

    </ul>
</li>
<?php endif; ?>
<!-- end pages item desktop -->

<!-- blog link in top menu-->
<?php if (isset($blog_link_status) && $blog_link_status == 1) :  ?>
<li class="dropdown dropdown-mega-menu dropdown-one-col">
    <a href="<?php if ($blog_link_url !== '' ) {echo $blog_link_url;} else {echo 'index.php?route=simple_blog/article';} ?>" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="act-underline">
                      <?php
                      if (isset($customisation_general[$lang]["blog_link_title"][$store_id]) && $customisation_general[$lang]["blog_link_title"][$store_id] != '' ) :
                          echo $customisation_general[$lang]["blog_link_title"][$store_id];
                      endif;
                      ?>
                    </span>
    </a>
</li>
<?php endif; ?>
<!-- //blog link in top menu-->




<!-- custom item -->
<?php if (isset($customisation_general[$lang]["customitem_item_title1"][$store_id]) && $customisation_general[$lang]["customitem_item_title1"][$store_id] !== '' ): ?>
<li class="dropdown dropdown-mega-menu dropdown-one-col custom_item">
    <a href="<?php if ($customisation_general["customitem_item_url1"][$store_id] !== '' ) {echo $customisation_general["customitem_item_url1"][$store_id];} else {echo 'index.php';} ?>">
    <span class="act-underline"><?php echo $customisation_general[$lang]["customitem_item_title1"][$store_id]; ?></span>
    </a>
</li>
<?php endif; ?>
<!-- end custom item -->





</ul>
</div>
</nav>
<!-- navigation end -->
</div>
<div class="pull-right col-stuck-cart text-right">
    <!-- shopping cart start -->
    <?php if (!isset($product_catalog_mode) || ($product_catalog_mode != 1)) : ?>
    <?php if (!isset($cart_button) || $cart_button != 0) : ?>
    <?php echo $cart; ?>
    <?php endif; ?>
    <?php endif; ?>
    <!-- shopping cart end -->
</div>


</div>

</div>
</div>
<!--//stuck-nav-->

<?php endif; ?>

<!--*******************************************header type 7-->

<?php } else {  ?>

<?php if ($headertype == 5) { ?>

<!--*******************************************header type 5-->

<!-- top-header -->
<div class="container">
    <div class="row">
        <!-- col-left -->
        <div class="col-sm-3 text-left">
            <!-- slogan start -->
            <div class="slogan"><?php echo (isset($customisation_general[$lang]["welcome_message"][$store_id]) && is_string($customisation_general[$lang]["welcome_message"][$store_id]) ? html_entity_decode($customisation_general[$lang]["welcome_message"][$store_id], ENT_QUOTES, 'UTF-8') : 'Default welcome msg!'); ?></div>
            <!-- slogan end -->
        </div>
        <!-- /col-left -->
        <!-- col-right -->
        <div class="col-sm-9 text-right">
            <div class="settings">
                <!-- currency start -->
                <?php if ($currency) {echo '<div class="currency func-block dropdown text-right">'.$currency.'</div>'; } ?>
                <!-- currency end -->
                <!-- language start -->
                <?php if ($language) {echo '<div class="language func-block dropdown text-right">'.$language.'</div>'; } ?>
                <!-- language end -->
            </div>
        </div>
        <!-- /col-right -->
    </div>
</div>
<!-- /top-header -->
<div class="container">
    <div class="row text-center">
        <!--  -->
        <div class="text-right extra-right">
            <!-- search start -->
            <?php if (!isset($search_block) || $search_block != 0) : ?>
            <div class="search link-inline">
                <?php echo $search; ?>
            </div>
            <?php endif; ?>
            <!-- search end -->
            <!-- account menu start -->
            <?php if (!isset($header_service_buttons) || $header_service_buttons != 0) : ?>
            <div class="account link-inline">
                <div class="dropdown text-right">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <span class="icon icon-person "></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu--xs-full">
                        <?php if ($logged) { ?>
                        <li><a href="<?php echo $account; ?>"><span class="icon icon-person"></span><?php echo $text_account; ?></a></li>
                        <li><a href="<?php echo $order; ?>"><span class="icon icon-history"></span><?php echo $text_order; ?></a></li>
                        <li><a href="<?php echo $logout; ?>"><span class="icon icon-alarm_off"></span><?php echo $text_logout; ?></a></li>
                        <?php } else { ?>
                        <li><a href="<?php echo $register; ?>"><span class="icon icon-person_add"></span><?php echo $text_register; ?></a></li>
                        <li><a href="<?php echo $login; ?>"><span class="icon icon-lock"></span><?php echo $text_login; ?></a></li>
                        <?php } ?>
                        <li><a href="<?php echo $wishlist; ?>" id="wishlist-total" title="<?php echo $text_wishlist; ?>"><span class="icon icon-favorite_border"></span><span class="text"><?php echo $text_wishlist; ?></span></a></li>
                        <li><a href="<?php echo $shopping_cart; ?>" title="<?php echo $text_shopping_cart; ?>"><span class="icon icon-shopping_cart"></span><?php echo $text_shopping_cart; ?></a></li>
                        <li><a href="<?php echo $checkout; ?>" title="<?php echo $text_checkout; ?>"><span class="icon icon-done_all"></span><?php echo $text_checkout; ?></a></li>
                        <li class="dropdown-menu__close"><a href="#"><span class="icon icon-close"></span><?php echo (isset($customisation_translation[$lang]["menu_close"][$store_id]) ? $customisation_translation[$lang]["menu_close"][$store_id] : 'close'); ?></a></li>
                    </ul>
                </div>
            </div>
            <?php endif; ?>
            <!-- account menu end -->
            <!-- shopping cart start -->
            <?php if (!isset($product_catalog_mode) || ($product_catalog_mode != 1)) : ?>
            <?php if (!isset($cart_button) || $cart_button != 0) : ?>
            <?php echo $cart; ?>
            <?php endif; ?>
            <?php endif; ?>
            <!-- shopping cart end -->
        </div>
        <!-- / -->
        <!-- logo start -->
        <?php if ($logo) { ?>
        <a href="<?php echo $home; ?>"><img class="logo replace-2x img-responsive" src="<?php echo ($layout_id == 1 && $layoutid == 4 ? $logo_transparent : $logo); ?>" title="<?php echo $name; ?>" alt="<?php echo $name; ?>" /></a>
        <?php } else { ?>
        <h1><a href="<?php echo $home; ?>"><?php echo $name; ?></a></h1>
        <?php } ?>
        <!-- logo end -->

    </div>
</div>
<!--//*******************************************************header type 5-->

<?php } else {  ?>
<div class="container">
    <div class="row">
        <?php if ($headertype == 2 || $headertype == 3) { ?>
        <!--header type 2-->
        <!-- col-left -->
        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
            <div class="settings">
                <!-- currency start -->
                <?php if ($currency) {echo '<div class="currency func-block dropdown text-left">'.$currency.'</div>'; } ?>
                <!-- currency end -->
                <!-- language start -->
                <?php if ($language) {echo '<div class="language func-block dropdown text-left">'.$language.'</div>'; } ?>
                <!-- language end -->
            </div>
        </div>
        <!-- /col-left -->
        <!-- col-right -->
        <div class="col-sm-9 col-md-9 col-lg-9 col-xl-9 text-right">
            <!-- search start -->
            <?php if (!isset($search_block) || $search_block != 0) : ?>
            <div class="search link-inline <?php echo ($headertype == 2 || $headertype == 3 ? 'pull-right mobile-menu-off' : ''); ?>">
            <?php echo ($headertype == 3 ? $search_mobile : $search); ?>
            </div>
            <?php endif; ?>
            <!-- search end -->
            <!-- account menu start -->
            <?php if (!isset($header_service_buttons) || $header_service_buttons != 0) : ?>
            <div class="account link-inline hidden mobile-menu-on">
                <div class="dropdown text-right">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <span class="icon icon-person "></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu--xs-full">
                        <?php if ($logged) { ?>
                        <li><a href="<?php echo $account; ?>"><span class="icon icon-person"></span><?php echo $text_account; ?></a></li>
                        <li><a href="<?php echo $order; ?>"><span class="icon icon-history"></span><?php echo $text_order; ?></a></li>
                        <li><a href="<?php echo $logout; ?>"><span class="icon icon-alarm_off"></span><?php echo $text_logout; ?></a></li>
                        <?php } else { ?>
                        <li><a href="<?php echo $register; ?>"><span class="icon icon-person_add"></span><?php echo $text_register; ?></a></li>
                        <li><a href="<?php echo $login; ?>"><span class="icon icon-lock"></span><?php echo $text_login; ?></a></li>
                        <?php } ?>
                        <li><a href="<?php echo $wishlist; ?>" id="wishlist-total" title="<?php echo $text_wishlist; ?>"><span class="icon icon-favorite_border"></span><span class="text"><?php echo $text_wishlist; ?></span></a></li>
                        <li><a href="<?php echo $shopping_cart; ?>" title="<?php echo $text_shopping_cart; ?>"><span class="icon icon-shopping_cart"></span><?php echo $text_shopping_cart; ?></a></li>
                        <li><a href="<?php echo $checkout; ?>" title="<?php echo $text_checkout; ?>"><span class="icon icon-done_all"></span><?php echo $text_checkout; ?></a></li>
                        <li class="dropdown-menu__close"><a href="#"><span class="icon icon-close"></span><?php echo (isset($customisation_translation[$lang]["menu_close"][$store_id]) ? $customisation_translation[$lang]["menu_close"][$store_id] : 'close'); ?></a></li>
                    </ul>
                </div>
            </div>
            <!-- account menu end -->
            <!-- account menu start -->
            <div class="account-row-list pull-right mobile-menu-off">
                <ul>
                    <?php if ($logged) { ?>
                    <li><a href="<?php echo $account; ?>"><span class="icon icon-person"></span><?php echo $text_account; ?></a></li>
                    <li><a href="<?php echo $order; ?>"><span class="icon icon-history"></span><?php echo $text_order; ?></a></li>
                    <li><a href="<?php echo $logout; ?>"><span class="icon icon-alarm_off"></span><?php echo $text_logout; ?></a></li>
                    <?php } else { ?>
                    <li><a href="<?php echo $register; ?>"><span class="icon icon-person_add"></span><?php echo $text_register; ?></a></li>
                    <li><a href="<?php echo $login; ?>"><span class="icon icon-lock"></span><?php echo $text_login; ?></a></li>
                    <?php } ?>
                    <li><a href="<?php echo $checkout; ?>" title="<?php echo $text_checkout; ?>"><span class="icon icon-done_all"></span><?php echo $text_checkout; ?></a></li>
                </ul>
            </div>
            <?php endif; ?>
            <!-- /account menu end -->

        </div>

        <!--//header type 2-->
        <?php } else { ?>
        <div class="<?php echo ($headertype == 9 ? 'col-sm-4 col-md-4 col-lg-4 col-xl-5' : 'col-sm-4 col-md-4 col-lg-6 col-xl-7'); ?>">
            <!-- logo start -->
            <?php if ($logo) { ?>
            <a href="<?php echo $home; ?>"><img class="logo replace-2x img-responsive" src="<?php echo $logo; ?>" title="<?php echo $name; ?>" alt="<?php echo $name; ?>" /></a>
            <?php } else { ?>
            <h1><a href="<?php echo $home; ?>"><?php echo $name; ?></a></h1>
            <?php } ?>
            <!-- logo end -->
        </div>
        <div class="<?php echo ($headertype == 9 ? 'col-sm-8 col-md-8 col-lg-8 col-xl-7' : 'col-sm-8 col-md-8 col-lg-6 col-xl-5'); ?> text-right">
            <!-- slogan start -->
            <div class="slogan"><?php echo (isset($customisation_general[$lang]["welcome_message"][$store_id]) && is_string($customisation_general[$lang]["welcome_message"][$store_id]) ? html_entity_decode($customisation_general[$lang]["welcome_message"][$store_id], ENT_QUOTES, 'UTF-8') : 'Default welcome msg!'); ?></div>
            <!-- slogan end -->
            <div class="settings">
                <!-- currency start -->
                <?php if ($currency) {echo '<div class="currency func-block dropdown text-right">'.$currency.'</div>'; } ?>
                <!-- currency end -->
                <!-- language start -->
                <?php if ($language) {echo '<div class="language func-block dropdown text-right">'.$language.'</div>'; } ?>
                <!-- language end -->
            </div>
            <!--header 9-->
            <?php if ($headertype == 9) : ?>
            <div class="pull-right">
                <div class="text-right">
                    <!-- search start -->
                    <?php if (!isset($search_block) || $search_block != 0) : ?>
                    <div class="search link-inline">
                        <?php echo $search; ?>
                    </div>
                    <?php endif; ?>
                    <!-- search end -->
                    <!-- account menu start -->
                    <?php if (!isset($header_service_buttons) || $header_service_buttons != 0) : ?>
                    <div class="account link-inline hidden mobile-menu-on">
                        <div class="dropdown text-right">
                            <a class="dropdown-toggle" data-toggle="dropdown">
                                <span class="icon icon-person "></span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu--xs-full">
                                <?php if ($logged) { ?>
                                <li><a href="<?php echo $account; ?>"><span class="icon icon-person"></span><?php echo $text_account; ?></a></li>
                                <li><a href="<?php echo $order; ?>"><span class="icon icon-history"></span><?php echo $text_order; ?></a></li>
                                <li><a href="<?php echo $logout; ?>"><span class="icon icon-alarm_off"></span><?php echo $text_logout; ?></a></li>
                                <?php } else { ?>
                                <li><a href="<?php echo $register; ?>"><span class="icon icon-person_add"></span><?php echo $text_register; ?></a></li>
                                <li><a href="<?php echo $login; ?>"><span class="icon icon-lock"></span><?php echo $text_login; ?></a></li>
                                <?php } ?>
                                <li><a href="<?php echo $wishlist; ?>" id="wishlist-total" title="<?php echo $text_wishlist; ?>"><span class="icon icon-favorite_border"></span><span class="text"><?php echo $text_wishlist; ?></span></a></li>
                                <li><a href="<?php echo $shopping_cart; ?>" title="<?php echo $text_shopping_cart; ?>"><span class="icon icon-shopping_cart"></span><?php echo $text_shopping_cart; ?></a></li>
                                <li><a href="<?php echo $checkout; ?>" title="<?php echo $text_checkout; ?>"><span class="icon icon-done_all"></span><?php echo $text_checkout; ?></a></li>
                                <li class="dropdown-menu__close"><a href="#"><span class="icon icon-close"></span><?php echo (isset($customisation_translation[$lang]["menu_close"][$store_id]) ? $customisation_translation[$lang]["menu_close"][$store_id] : 'close'); ?></a></li>
                            </ul>
                        </div>
                    </div>
                    <?php endif; ?>
                    <!-- account menu end -->
                    <!-- shopping cart start -->
                    <?php if (!isset($product_catalog_mode) || ($product_catalog_mode != 1)) : ?>
                    <?php if (!isset($cart_button) || $cart_button != 0) : ?>
                    <?php echo $cart; ?>
                    <?php endif; ?>
                    <?php endif; ?>
                    <!-- shopping cart end -->

                </div>
            </div>
            <?php endif; ?>
            <!--//header 9-->

        </div>
        <?php }  ?>

    </div>
    <?php if ($headertype == 2 || $headertype == 3) : ?><hr class="mobile-menu-off"><?php endif; ?>
</div>
<?php }  ?>

<!--header type 2-->
<?php if ($headertype == 2 || $headertype == 3) : ?>
<div class="container offset-top-5">
    <div class="row">
        <!-- col-left -->
        <div class="col-xs-12 col-md-3 col-lg-3 col-xl-3 col-sm-3">
            <?php if ($logo) { ?>
            <!-- logo start -->
            <a href="<?php echo $home; ?>"><img class="logo replace-2x img-responsive" src="<?php echo $logo; ?>" title="<?php echo $name; ?>" alt="<?php echo $name; ?>" /></a>
            <!-- logo end -->
            <?php } else { ?>
            <h1><a href="<?php echo $home; ?>"><?php echo $name; ?></a></h1>
            <?php } ?>
        </div>
        <!-- /col-left -->
        <!-- col-right -->
        <div class="col-sm-6 col-md-8 col-lg-8 col-xl-8 pull-right text-right">
            <div class="row-functional-link">
                <!-- shopping cart start -->
                <?php if (!isset($product_catalog_mode) || ($product_catalog_mode != 1)) : ?>
                <?php if (!isset($cart_button) || $cart_button != 0) : ?>
                <?php echo $cart; ?>
                <?php endif; ?>
                <?php endif; ?>
                <!-- shopping cart end -->
                <!-- Wishlist start -->
                <div class="cart link-inline  mobile-menu-off">
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="<?php echo $wishlist; ?>" onclick="location.href='<?php echo $wishlist; ?>'">
                            <span class="icon icon-favorite_border"></span>
                            <span id="wishlist-total-2" class="name-text"><?php echo $text_wishlist; ?></span>
                        </a>
                    </div>
                </div>
                <!-- /Wishlist end -->

                <!-- address -->
                <div class="h-address pull-right hidden-md hidden-sm hidden-xs">
                    <span class="icon icon-call"></span>
                    <b><?php echo $config_telephone; ?>;</b> <br>
                    <b><?php echo $config_fax; ?></b> <br>
                    <?php echo $config_open; ?>
                </div>
                <!-- /address -->
            </div>
        </div>
        <!-- /col-right -->
    </div>
</div>
<?php endif; ?>
<!--//header type 2-->

<!--stuck-nav-->
<?php if ($layoutid != 4) : ?>
<div class="stuck-nav">
<?php endif; ?>

<div class="container <?php echo ($headertype == 5 || $headertype == 3 ? '' : 'offset-top-5'); ?>">
<?php if ($layoutid != 4) : ?>
<div class="row">
<?php endif; ?>

<?php if ($headertype == 5) { ?>
<div class="col-stuck-menu">
<div class="row text-center">
<?php } else { ?>
    <div class="<?php echo ($headertype == 9 ? 'col-sm-12  col-stuck-menu' : 'pull-left col-sm-9 col-md-9 col-lg-10'); ?>">
    <?php }  ?>

    <!-- navigation start -->
    <nav class="navbar <?php echo ($headertype == 3 ? 'navbar-color-white' : ''); ?>">
    <div class="responsive-menu mainMenu">
    <!-- Mobile menu Button-->
    <div class="col-xs-2 visible-mobile-menu-on">
        <div class="expand-nav compact-hidden">
            <a href="#off-canvas-menu" class="off-canvas-menu-toggle">
                <span class="navbar-toggle">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="menu-text">
                        <?php echo (isset($customisation_translation[$lang]["menu_title"][$store_id]) ? $customisation_translation[$lang]["menu_title"][$store_id] : 'MENU'); ?>
                    </span>
                </span>
            </a>
        </div>
    </div>
    <!-- //end Mobile menu Button -->

    <ul class="nav navbar-nav 777">
        <li class="dl-close"><a href="#"><span class="icon icon-close"></span><?php echo (isset($customisation_translation[$lang]["menu_close"][$store_id]) ? $customisation_translation[$lang]["menu_close"][$store_id] : 'close'); ?></a></li>

        <?php if ($categories) : ?>
            <?php foreach ($categories as $category) : ?>
        <?php if (isset($category['category_top_level'])) : $category_top_level = $category['category_top_level']; endif; ?>

        <!--category item-->
                <li class="dropdown dropdown-mega-menu dropdown">
                    <span class="dropdown-toggle extra-arrow"></span>
                    <a href="<?php echo (isset($category['external_link']) && $category['external_link'] != '' ? $category['external_link'] : $category['href']); ?>" class="dropdown-toggle blog" data-toggle="dropdown">
                        <span class="act-underline">
                            <?php echo $category['name']; ?>
                            <!--main category promo-->
                            <?php if (!isset($category['menu_class'])) : ?>
                            <?php echo (isset($category_top_level['promo']) && $category_top_level['promo'] != '' ? html_entity_decode($category_top_level['promo'], ENT_QUOTES, 'UTF-8') : ''); ?>
                            <?php endif; ?>
                            <!--main category promo-->

                        </span>
                    </a>
                    <!--dropdown main-->
                    <?php
                    if ($category['children']) :

                    ?>
                    <ul class="dropdown-menu dropdown-menu megamenu <?php echo (isset($category['menu_class']) && $category['menu_class'] == 'simple_blog' ? ($category['column'] == 4 ? 'category-blog image-links-layout' : 'category-blog image-links') : 'category'); ?>" role="menu">
                        <li class="dl-back">
                            <a href="#">
                                <span class="icon icon-chevron_left"></span>
                                <?php echo (isset($customisation_translation[$lang]["menu_back"][$store_id]) ? $customisation_translation[$lang]["menu_back"][$store_id] : 'back'); ?>
                            </a>
                        </li>

                        <!--1 level subcategories-->

                        <?php
                        if (isset($category['product_right_slider'])) : $product_right_slider = $category['product_right_slider']; endif;

                        $column = $category["column"];

                        if (isset($product_right_slider) && $product_right_slider == 1) {
                        $cols_base = 9;

                        } else {
                        $cols_base = 12;
                        }

                        $cols = floor($cols_base/$column);

                        if (count($category['children']) > 1 && isset($category['menu_class']) && $category['menu_class'] == 'simple_blog') {
                        $category_class = $category['menu_class'];
                        } else {
                            $category_class = 'col-sm-'.$cols;
                        }

                        if (isset($category['menu_class']) && $category['menu_class'] == 'simple_blog') {


                        ?>
    <!--categories from Blog-->
                            <?php foreach ($category['children'] as $child) : ?>
                            <li class="<?php echo $category_class; ?>">
                                <span class="image-link">
                                    <a href="<?php echo (isset($child['external_link']) && $child['external_link'] != '' ? $child['external_link'] : $child['href']); ?>">
                                        <?php if ($child['image']) : ?>
                                        <span class="figure"><img class="img-responsive" src="<?php echo $child['image']; ?>" alt=""/></span>
                                        <?php endif; ?>
                                        <span class="figcaption text-uppercase"><?php echo $child['name']; ?></span>
                                    </a>
                                </span>
                            </li>
                            <?php endforeach; ?>
                        <!--//categories from Blog-->


                        <?php  } else {  ?>
                        <!--categories from Main menu-->
                        <?php foreach (array_chunk($category['children'], ceil(count($category['children']) / $category['column'])) as $children) : ?>
                        <li class="<?php echo $category_class; ?>">
                            <?php foreach ($children as $child) { ?>
                            <?php if (isset($child['category_sub_level'])) : $category_sub_level = $child['category_sub_level']; endif; ?>
                            <a class="megamenu__subtitle" href="<?php echo $child['href']; ?>">
                                <span><?php echo $child['name']; ?></span>
                                <!--bottom block for sub category-->
                                <?php echo (isset($category_sub_level['html_bottom']) && $category_sub_level['html_bottom'] != '' ? '<span class="megamenu__category-image hidden-xs">'.html_entity_decode($category_sub_level['html_bottom'], ENT_QUOTES, 'UTF-8').'</span>' : ''); ?>
                                <!--bottom block for sub category-->
                            </a>
                            <!--2 level subcategories-->
                                <?php
                                if (isset($child['grandchildren'])):
                                $categories_sub_level_2 = $child['grandchildren'];
                                ?>

                                <ul class="megamenu__submenu megamenu__submenu--marked">
                                    <li class="dl-back"><a href="#"><span class="icon icon-chevron_left"></span><?php echo (isset($customisation_translation[$lang]["menu_back"][$store_id]) ? $customisation_translation[$lang]["menu_back"][$store_id] : 'back'); ?></a></li>
                                    <?php foreach ($categories_sub_level_2 as $category_sub_level_2) : ?>
                                    <li class="level2"><a href="<?php echo $category_sub_level_2['href']; ?>"><?php echo $category_sub_level_2['name']; ?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                                <?php endif; ?>
                                <!--// 2 level subcategories-->
                            <?php } ?>
                        </li>
                        <?php endforeach; ?>

                        <!--//categories from Main menu-->
                        <?php  }  ?>


                        <!--1 level subcategories-->

                        <!--slider in Top menu-->
                        <?php if (!isset($category['menu_class'])) : ?>
                        <?php if (isset($product_right_slider) && $product_right_slider == 1) : ?>
                        <li class="col-sm-3 hidden-xs">
                            <?php echo $category['category_menu_slider'];  ?>
                        </li>
                        <?php endif; ?>

                        <?php endif; ?>
                        <!--// slider in Top menu-->

                        <!--custom blocks in dropdown for main category: bottom-->
                        <?php echo (!isset($category['menu_class']) && isset($category_top_level['html_bottom']) && $category_top_level['html_bottom'] != '' ? '<li class="col-sm-12 hidden-xs">'.html_entity_decode($category_top_level['html_bottom'], ENT_QUOTES, 'UTF-8').'</li>' : ''); ?>
                        <!--custom blocks in dropdown for main category: bottom-->

                    </ul>
                    <?php endif; ?>
                    <!--//dropdown main-->


                </li>
                <!--end category item-->
        <?php endforeach; ?>
        <?php endif; ?>

    <!-- pages item desktop -->
    <?php if (!isset($customisation_general["pages_status"][$store_id]) || $customisation_general["pages_status"][$store_id] != 0) :  ?>
        <?php
                if (isset($informations)) :
                    foreach ($informations as $information) :

        if (isset($customisation_general["additional_page_status"])):
        foreach ($customisation_general["additional_page_status"] as $information_id => $information_status) :
        if ($information_id == $information['information_id'] && $information_status[$store_id] != 0) :
        ?>
        <li class="dropdown dropdown-mega-menu dropdown"><span class="dropdown-toggle extra-arrow"></span><a class="dropdown-toggle blog" data-toggle="dropdown" href="<?php echo $information['href']; ?>"><span class="act-underline"><?php echo $information['title']; ?></span></a></li>
        <?php
                                endif;
                            endforeach;

                        endif;
                     endforeach;
                endif;
                ?>
    <?php endif; ?>
    <!-- end pages item desktop -->

    <!-- blog link in top menu-->
        <?php if (isset($blog_link_status) && $blog_link_status == 1) :  ?>
            <li class="dropdown dropdown-mega-menu dropdown-one-col">
                <a href="<?php if ($blog_link_url !== '' ) {echo $blog_link_url;} else {echo 'index.php?route=simple_blog/article';} ?>" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="act-underline">
                      <?php
                      if (isset($customisation_general[$lang]["blog_link_title"][$store_id]) && $customisation_general[$lang]["blog_link_title"][$store_id] != '' ) :
                          echo $customisation_general[$lang]["blog_link_title"][$store_id];
                      endif;
                      ?>
                    </span>
                </a>
            </li>
        <?php endif; ?>
        <!-- //blog link in top menu-->




    <!-- custom item -->
    <?php if (isset($customisation_general[$lang]["customitem_item_title1"][$store_id]) && $customisation_general[$lang]["customitem_item_title1"][$store_id] !== '' ): ?>
    <li class="dropdown dropdown-mega-menu dropdown-one-col custom_item">
        <a href="<?php if ($customisation_general["customitem_item_url1"][$store_id] !== '' ) {echo $customisation_general["customitem_item_url1"][$store_id];} else {echo 'index.php';} ?>">
        <span class="act-underline"><?php echo $customisation_general[$lang]["customitem_item_title1"][$store_id]; ?></span>
        </a>
    </li>
    <?php endif; ?>
    <!-- end custom item -->





    </ul>
    </div>
    </nav>
    <!-- navigation end -->
    <?php if ($headertype == 5) { ?>
</div>
</div>
<?php } else { ?>
</div>
<?php } ?>


<?php if ($headertype == 5) { ?>

<?php } else { ?>

<!--no in layout 9-->
<?php if ($headertype != 9) : ?>
<div class="<?php echo ($headertype == 3 ? 'pull-right col-sm-2 col-md-2 col-lg-2 col-xl-1 text-right' : 'pull-right col-sm-3 col-md-3 col-lg-2'); ?>">
    <div class="text-right">
        <!-- search start -->
        <?php if (!isset($search_block) || $search_block != 0) : ?>
        <div class="search link-inline <?php echo ($headertype == 2 ? 'pull-right mobile-menu-off' : ''); ?>">
            <?php echo $search; ?>
        </div>
        <?php endif; ?>
        <!-- search end -->
        <!-- account menu start -->
        <?php if (!isset($header_service_buttons) || $header_service_buttons != 0) : ?>
        <div class="account link-inline">
            <div class="dropdown text-right">
                <a class="dropdown-toggle" data-toggle="dropdown">
                    <span class="icon icon-person"></span>
                </a>
                <ul class="dropdown-menu dropdown-menu--xs-full">
                    <?php if ($logged) { ?>
                    <li><a href="<?php echo $account; ?>"><span class="icon icon-person"></span><?php echo $text_account; ?></a></li>
                    <li><a href="<?php echo $order; ?>"><span class="icon icon-history"></span><?php echo $text_order; ?></a></li>
                    <li><a href="<?php echo $transaction; ?>"><span class="icon icon-reorder"></span><?php echo $text_transaction; ?></a></li>
                    <li><a href="<?php echo $download; ?>"><span class="icon icon-cloud_download"></span><?php echo $text_download; ?></a></li>
                    <li><a href="<?php echo $logout; ?>"><span class="icon icon-alarm_off"></span><?php echo $text_logout; ?></a></li>
                    <?php } else { ?>
                    <li><a href="<?php echo $register; ?>"><span class="icon icon-person_add"></span><?php echo $text_register; ?></a></li>
                    <li><a href="<?php echo $login; ?>"><span class="icon icon-lock"></span><?php echo $text_login; ?></a></li>
                    <?php } ?>
                    <li><a href="<?php echo $wishlist; ?>" id="wishlist-total" title="<?php echo $text_wishlist; ?>"><span class="icon icon-favorite_border"></span><span class="text"><?php echo $text_wishlist; ?></span></a></li>
                    <li><a href="<?php echo $shopping_cart; ?>" title="<?php echo $text_shopping_cart; ?>"><span class="icon icon-shopping_cart"></span><?php echo $text_shopping_cart; ?></a></li>
                    <li><a href="<?php echo $checkout; ?>" title="<?php echo $text_checkout; ?>"><span class="icon icon-done_all"></span><?php echo $text_checkout; ?></a></li>
                    <li class="dropdown-menu__close"><a href="#"><span class="icon icon-close"></span><?php echo (isset($customisation_translation[$lang]["menu_close"][$store_id]) ? $customisation_translation[$lang]["menu_close"][$store_id] : 'close'); ?></a></li>
                </ul>
            </div>
        </div>
        <?php endif; ?>
        <!-- account menu end -->
        <!-- shopping cart start -->
        <?php if (!isset($product_catalog_mode) || ($product_catalog_mode != 1)) : ?>
        <?php if (!isset($cart_button) || $cart_button != 0) : ?>
        <?php echo $cart; ?>
        <?php endif; ?>
        <?php endif; ?>
        <!-- shopping cart end -->
    </div>
</div>
<?php endif; ?>

<!--//no in layout 9-->
<?php } ?>

<?php if ($headertype != 5) : ?>
</div>
<?php endif; ?>

</div>
<?php if ($layoutid != 4) : ?>
</div>
<?php endif; ?>
<!--//stuck-nav-->
<?php }  ?>

</header>

</div>
<!-- End HEADER section -->
<?php if ($layout_id == 1) : ?>
<?php echo (isset($top_slider) ? $top_slider : ''); ?>
<?php endif; ?>
<div id="notification"></div>

<!-- CONTENT section -->
<?php if ($layoutid != 4 && $layout_id = 1) : ?>
<div id="pageContent">
<?php endif; ?>
