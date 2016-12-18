<?php echo $header; ?>
<?php if (!isset($store_id)) {$store_id  = 0;} ?>

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


<div class="container">
  <div class="row">
      <?php
        if ($column_left && $column_right) {
            $class = 'col-md-8 col-lg-6 col-xl-8';
        } elseif ($column_left || $column_right) {
            $class = 'col-md-8 col-lg-9 col-xl-10';
        } else {
            $class = 'col-md-12 col-lg-12 col-xl-12';
        }

        if (isset($customisation_products["listing_image_size"][$store_id]) && $customisation_products["listing_image_size"][$store_id] == 'big') {
            $class_cell = 'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-4';
        } elseif (isset($customisation_products["listing_image_size"][$store_id]) && $customisation_products["listing_image_size"][$store_id] == 'small') {
            $class_cell = 'col-xs-6 col-sm-4 col-md-3 col-lg-2 col-xl-one-nine';
        } else {
            $class_cell = 'col-xs-6 col-sm-4 col-md-6 col-lg-4 col-xl-one-fifth';
        }
      ?>
      <?php echo $column_left; ?>

      <div id="centerColumn" class="<?php echo $class; ?>">
          <?php echo $content_top; ?>
        <!-- title -->
        <div class="title-box">
            <h2 class="text-center text-uppercase title-under"><?php echo $heading_title; ?></h2>
        </div>
        <!-- /title -->

            <?php if ($description) { ?>
            <?php echo $description; ?>
            <?php } ?>

      <?php if ($categories) : ?>
        <div class="row">
            <?php foreach ($categories as $category) : ?>
            <div class="subcategory-item col-sm-4 col-xs-6 col-xl-one-fifth">
                <a href="<?php echo $category['href']; ?>">
                   <?php if (isset($category['image'])) : ?>
                      <span class="figure"><img class="img-responsive product-retina" src="<?php echo $category['image']; ?>" data-image2x="<?php echo $category['image2x']; ?>" alt="" /></span>
                   <?php endif; ?>
                   <h3 class="subcategory-item__title"><?php echo $category['name']; ?></h3>
                </a>

            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>




      <?php if ($products) { ?>
      <p><a href="<?php echo $compare; ?>" id="compare-total"><?php echo $text_compare; ?></a></p>
        <!-- filters row -->
        <div class="<?php echo (!$column_left && !$column_right ? 'filters-row filters-row-layout' : 'filters-row'); ?>">
            <div class="pull-left">
                <div class="filters-row__mode">
                    <a href="#" class="btn btn--ys slide-column-open visible-xs visible-sm hidden-xl hidden-lg hidden-md">Filter</a>
                    <a class="grid-view1 filters-row__view active link-grid-view1 btn-img btn-img-view_module"><span></span></a>
                    <a class="list-view1 filters-row__view link-row-view1 btn-img btn-img-view_list"><span></span></a>
                </div>
                <div class="filters-row__select hidden-sm hidden-xs">
                    <label><?php echo $text_sort; ?></label>
                    <div class="select-wrapper">
                        <select id="input-sort"  class="select--ys sort-position" onchange="location = this.value;">
                            <?php foreach ($sorts as $sorts) { ?>
                            <?php if ($sorts['value'] == $sort . '-' . $order) { ?>
                            <option value="<?php echo $sorts['href']; ?>" selected="selected"><?php echo $sorts['text']; ?></option>
                            <?php } else { ?>
                            <option value="<?php echo $sorts['href']; ?>"><?php echo $sorts['text']; ?></option>
                            <?php } ?>
                            <?php } ?>
                        </select>
                    </div>
                </div>

            </div>
            <div class="pull-right">
                <div class="filters-row__items hidden-sm hidden-xs"><?php echo $results; ?></div>
                <div class="filters-row__select hidden-sm hidden-xs">
                    <label><?php echo $text_limit; ?></label>
                    <div class="select-wrapper">
                        <select id="input-limit" class="select--ys show-qty" onchange="location = this.value;">
                            <?php foreach ($limits as $limits) { ?>
                            <?php if ($limits['value'] == $limit) { ?>
                            <option value="<?php echo $limits['href']; ?>" selected="selected"><?php echo $limits['text']; ?></option>
                            <?php } else { ?>
                            <option value="<?php echo $limits['href']; ?>"><?php echo $limits['text']; ?></option>
                            <?php } ?>
                            <?php } ?>
                        </select>
                    </div>
                    <a href="#" class="icon icon-arrow-down active"></a><a href="#" class="icon icon-arrow-up"></a>
                </div>
                <div class="filters-row__pagination">
                    <?php echo $pagination; ?>
                </div>
            </div>
        </div>
        <!-- /filters row -->

          <!--listing-->
        <div class="product-listing row">
            <?php
            $listing = 1; $type_of_slider = 0; include('catalog/view/theme/list.php');
            ?>
        </div>
          <!--//listing-->


          <?php } ?>

      <?php if (!$categories && !$products) { ?>

          <?php if ($column_left || $column_right || $content_top || $content_bottom) { ?>

          <?php } else { ?>
              <div class="divider"></div>
              <div class="text-with-button">
                  <span><?php echo $text_empty; ?></span><a class="btn btn--ys" href="<?php echo $continue; ?>"><span class="icon icon-home"></span><?php echo $button_continue; ?></a>
              </div>
          <?php } ?>

      <?php } ?>
      <?php echo $content_bottom; ?></div>
    <?php echo $column_right; ?>

  </div>
</div>
<?php echo $footer; ?>
