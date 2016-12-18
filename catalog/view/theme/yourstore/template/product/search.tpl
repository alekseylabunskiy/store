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
            $class = 'col-md-8 col-lg-6 col-xl-8'; $class_cell = 'col-xs-6 col-sm-4 col-md-6 col-lg-6 col-xl-3';
        } elseif ($column_left || $column_right) {
            $class = 'col-md-8 col-lg-9 col-xl-10'; $class_cell = 'col-xs-6 col-sm-4 col-md-6 col-lg-4 col-xl-one-fifth';
        } else {
            $class = 'col-md-12 col-lg-12 col-xl-12';
        }

        if (isset($customisation_products["listing_image_size"][$store_id]) && $customisation_products["listing_image_size"][$store_id] == 'big') {
            $class_cell = 'col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-4';
        } elseif (isset($customisation_products["listing_image_size"][$store_id]) && $customisation_products["listing_image_size"][$store_id] == 'small') {
            $class_cell = 'col-xs-6 col-sm-4 col-md-3 col-lg-2 col-xl-one-nine';
        } else {
            $class_cell = 'col-xs-6 col-sm-4 col-md-4 col-lg-3 col-xl-2';
        }
      ?>
      <?php echo $column_left; ?>

      <div id="centerColumn" class="<?php echo $class; ?>"><?php echo $content_top; ?>
          <!-- title -->
          <div class="title-box">
              <h2 class="text-center text-uppercase title-under"><?php echo $heading_title; ?></h2>
          </div>
          <!-- /title -->
          <label class="control-label" for="input-search"><?php echo $entry_search; ?></label>
      <div class="row">
        <div class="col-sm-4">
          <input type="text" name="search" value="<?php echo $search; ?>" placeholder="<?php echo $text_keyword; ?>" id="input-search" class="form-control" />
        </div>
        <div class="col-sm-3">
          <select name="category_id" class="form-control">
            <option value="0"><?php echo $text_category; ?></option>
            <?php foreach ($categories as $category_1) { ?>
            <?php if ($category_1['category_id'] == $category_id) { ?>
            <option value="<?php echo $category_1['category_id']; ?>" selected="selected"><?php echo $category_1['name']; ?></option>
            <?php } else { ?>
            <option value="<?php echo $category_1['category_id']; ?>"><?php echo $category_1['name']; ?></option>
            <?php } ?>
            <?php foreach ($category_1['children'] as $category_2) { ?>
            <?php if ($category_2['category_id'] == $category_id) { ?>
            <option value="<?php echo $category_2['category_id']; ?>" selected="selected">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $category_2['name']; ?></option>
            <?php } else { ?>
            <option value="<?php echo $category_2['category_id']; ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $category_2['name']; ?></option>
            <?php } ?>
            <?php foreach ($category_2['children'] as $category_3) { ?>
            <?php if ($category_3['category_id'] == $category_id) { ?>
            <option value="<?php echo $category_3['category_id']; ?>" selected="selected">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $category_3['name']; ?></option>
            <?php } else { ?>
            <option value="<?php echo $category_3['category_id']; ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $category_3['name']; ?></option>
            <?php } ?>
            <?php } ?>
            <?php } ?>
            <?php } ?>
          </select>
        </div>
        <div class="col-sm-3 checkbox-group clearfix">
            <?php if ($sub_category) { ?>
            <input id="checkBox1" type="checkbox" name="sub_category" value="1" checked="checked" />
            <?php } else { ?>
            <input id="checkBox1" type="checkbox" name="sub_category" value="1" />
            <?php } ?>
            <label class="checkbox checkbox-inline" for="checkBox1">

            <span class="check"></span>
              <span class="box"></span>
              <?php echo $text_sub_category; ?></label>
        </div>
      </div>
      <p class=" checkbox-group clearfix">
          <?php if ($description) { ?>
          <input type="checkbox" name="description" value="1" id="description" checked="checked" />
          <?php } else { ?>
          <input type="checkbox" name="description" value="1" id="description" />
          <?php } ?>

          <label class="checkbox checkbox-inline" for="description">
              <span class="check"></span>
              <span class="box"></span>
              <?php echo $entry_description; ?>
          </label>
      </p>
      <input type="button" value="<?php echo $button_search; ?>" id="button-search" class="btn btn-primary" />
      <h2><?php echo $text_search; ?></h2>
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

          <?php } else { ?>
      <p><?php echo $text_empty; ?></p>
          <?php } ?>
      <?php echo $content_bottom; ?></div>
    <?php echo $column_right; ?></div>
</div>
<script type="text/javascript"><!--
$('#button-search').bind('click', function() {
	url = 'index.php?route=product/search';

	var search = $('#centerColumn input[name=\'search\']').prop('value');

	if (search) {
		url += '&search=' + encodeURIComponent(search);
	}

	var category_id = $('#centerColumn select[name=\'category_id\']').prop('value');

	if (category_id > 0) {
		url += '&category_id=' + encodeURIComponent(category_id);
	}

	var sub_category = $('#centerColumn input[name=\'sub_category\']:checked').prop('value');

	if (sub_category) {
		url += '&sub_category=true';
	}

	var filter_description = $('#centerColumn input[name=\'description\']:checked').prop('value');

	if (filter_description) {
		url += '&description=true';
	}

	location = url;
});

$('#centerColumn input[name=\'search\']').bind('keydown', function(e) {
	if (e.keyCode == 13) {
		$('#button-search').trigger('click');
	}
});

$('select[name=\'category_id\']').on('change', function() {
	if (this.value == '0') {
		$('input[name=\'sub_category\']').prop('disabled', true);
	} else {
		$('input[name=\'sub_category\']').prop('disabled', false);
	}
});

$('select[name=\'category_id\']').trigger('change');
--></script>
<?php echo $footer; ?>