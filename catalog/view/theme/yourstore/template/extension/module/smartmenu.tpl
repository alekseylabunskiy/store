<h4 class="title-aside-wrapper text-uppercase  mobile-menu-off"><?php echo $heading_title; ?></h4>
<nav class="navbar navbar-vertical mobile-menu-off">
<div class="responsive-menu mainMenu">
<div class="responsive-menu-toggled responsive-menu-view">
    <div class="responsive-menu-toggled-controls">
        <div class="navbar-toggle">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="menu-text">
                 <?php echo (isset($customisation_translation[$lang]["menu_title"][$store_id]) ? $customisation_translation[$lang]["menu_title"][$store_id] : 'MENU'); ?>
            </span>
        </div>
    </div>
</div>

<ul class="nav navbar-nav">
    <li class="dl-close"><a href="#"><span class="icon icon-close"></span><?php echo (isset($customisation_translation[$lang]["menu_close"][$store_id]) ? $customisation_translation[$lang]["menu_close"][$store_id] : 'close'); ?></a></li>

    <?php
    if ($categories) :
    foreach ($categories as $category) :
        if (isset($category['category_top_level'])):
        $category_top_level = $category['category_top_level'];
        endif;
    ?>

    <!--category item-->
    <li class="dropdown dropdown-mega-menu">
        <a href="<?php echo (isset($category['external_link']) && $category['external_link'] != '' ? $category['external_link'] : $category['href']); ?>" class="dropdown-toggle blog" data-toggle="dropdown">
             <?php echo $category['name']; ?>
            <?php if ($category['children']) : ?><span class="icon icon-navigate_next pull-right"></span><?php endif; ?>

            <!--main category promo-->
             <?php if (!isset($category['menu_class'])) : ?>
                  <span class="pull-right">
            <?php echo (isset($category_top_level['promo']) && $category_top_level['promo'] != '' ? html_entity_decode($category_top_level['promo'], ENT_QUOTES, 'UTF-8') : ''); ?>
                  </span>
             <?php endif; ?>
             <!--main category promo-->

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
            if (isset($category['product_right_slider'])):
                $product_right_slider = $category['product_right_slider'];
            endif;


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
                <?php $category_sub_level = $child['category_sub_level']; ?>

                <a class="megamenu__subtitle" href="<?php echo $child['href']; ?>">
                    <span><?php echo $child['name']; ?></span>
                    <!--bottom block for sub category-->
                    <?php echo (isset($category_sub_level['html_bottom']) && $category_sub_level['html_bottom'] != '' ? '<span class="megamenu__category-image hidden-xs">'.html_entity_decode($category_sub_level['html_bottom'], ENT_QUOTES, 'UTF-8').'</span>' : ''); ?>
                    <!--bottom block for sub category-->

                    <!--2 level subcategories-->
                    <?php
                    $categories_sub_level_2 = $child['grandchildren'];
                    if ($categories_sub_level_2) :
                    ?>

                    <ul class="megamenu__submenu megamenu__submenu--marked">
                        <li class="dl-back"><a href="#"><span class="icon icon-chevron_left"></span><?php echo (isset($customisation_translation[$lang]["menu_back"][$store_id]) ? $customisation_translation[$lang]["menu_back"][$store_id] : 'back'); ?></a></li>
                        <?php  foreach ($categories_sub_level_2 as $category_sub_level_2) :   ?>
                        <li class="level2"><a href="<?php echo $category_sub_level_2['href']; ?>"><?php echo $category_sub_level_2['name']; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>
                    <!--// 2 level subcategories-->
                </a>
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
                if ($informations) :
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


        <?php if (!isset($customisation_general["additional_page_checkout_status"][$store_id]) || $customisation_general["additional_page_checkout_status"][$store_id] != 0 ) :  ?>
        <li><a href="<?php echo $checkout; ?>"><?php echo $text_checkout; ?></a></li>
        <?php endif; ?>
        <?php if (!isset($customisation_general["additional_page_account_status"][$store_id]) || $customisation_general["additional_page_account_status"][$store_id] != 0 ) :  ?>
        <li><a href="<?php echo $account; ?>"><?php echo $text_account; ?></a></li>
        <?php endif; ?>

    </ul>
</li>
<!-- end pages item desktop -->

<!-- blog link in top menu-->
<?php if (isset($customisation_general["blog_link_status"][$store_id]) && $customisation_general["blog_link_status"][$store_id] == 1) :  ?>
<li class="dropdown dropdown-mega-menu">
    <a href="<?php if ($customisation_general["blog_link_url"][$store_id] !== '' ) {echo $customisation_general["blog_link_url"][$store_id];} else {echo 'index.php?route=simple_blog/article';} ?>" class="dropdown-toggle" data-toggle="dropdown">
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
<li class="dropdown dropdown-mega-menu custom_item">
    <a href="<?php if ($customisation_general["customitem_item_url1"][$store_id] !== '' ) {echo $customisation_general["customitem_item_url1"][$store_id];} else {echo 'index.php';} ?>">
    <span class="act-underline"><?php echo $customisation_general[$lang]["customitem_item_title1"][$store_id]; ?></span>
    </a>
</li>
<?php endif; ?>
<!-- end custom item -->





</ul>
</div>
</nav>


