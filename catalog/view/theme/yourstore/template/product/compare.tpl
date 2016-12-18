<?php echo $header; ?>
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
  <?php if ($success) { ?>
  <div class="alert alert-success"><i class="fa fa-check-circle"></i> <?php echo $success; ?>
    <button type="button" class="close" data-dismiss="alert">&times;</button>
  </div>
  <?php } ?>
  <div class="row"><?php echo $column_left; ?>
    <?php if ($column_left && $column_right) { ?>
    <?php $class = 'col-sm-6'; ?>
    <?php } elseif ($column_left || $column_right) { ?>
    <?php $class = 'col-sm-9'; ?>
    <?php } else { ?>
    <?php $class = 'col-sm-12'; ?>
    <?php } ?>
    <div id="content" class="<?php echo $class; ?>"><?php echo $content_top; ?>
        <!-- title -->
        <div class="title-box">
            <h1 class="text-center text-uppercase title-under"><?php echo $heading_title; ?></h1>
        </div>
        <!-- /title -->
      <?php
       if (count($products) >= 3) {
        array_shift($products);
        }

      if ($products) { ?>
        <div class="compare-table">
            <table class="table-bordered">
            <!-- row-img -->
            <tr>
                <td>

                </td>
                <!-- item 01 -->
                <?php foreach ($products as $product) { ?>
                <td>
                    <a href="<?php echo $product['remove']; ?>" class="link-close icon icon-close pull-right"></a>
                    <div class="product">
                        <!-- product image -->
                            <?php if ($product['thumb']) { ?>
                            <div class="product__inside__image">
                                <img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" title="<?php echo $product['name']; ?>" />
                            </div>
                            <?php } ?>
                        <!-- /product image -->
                        <!-- product name -->
                        <div class="product__inside__name">
                            <h2><a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a></h2>
                        </div>
                        <!-- /product name -->
                        <?php if ($product['price']) { ?>
                        <div class="product__inside__price price-box <?php echo ($product['special'] ? 'product-info__price' : ''); ?>">
                            <?php if (!$product['special']) { ?>
                                <?php echo $product['price']; ?>
                            <?php } else { ?>
                                 <span class="price-box__new"><?php echo $product['special']; ?></span>
                                 <span class="price-box__old"><?php echo $product['price']; ?></span>
                            <?php } ?>
                        </div>
                        <?php } ?>
                        <!-- /product price -->

                        <?php if ($review_status) { ?>
                            <div class="rating">
                                <?php for ($i = 1; $i <= 5; $i++) : ?>
                                <?php if ($product['rating'] < $i) { ?>
                                <span class="icon-star empty-star"></span>
                                <?php } else { ?>
                                <span class="icon-star"></span>
                                <?php } ?>
                                <?php endfor; ?>
                                <div class="dividerd divider--xs"></div>
                                <?php echo $product['reviews']; ?>
                            </div>
                        <?php } ?>


                        <!-- product info -->
                        <a class="btn btn--ys btn--xl" onclick="cart_theme.add('<?php echo $product['product_id']; ?>', '<?php echo $product['minimum']; ?>');"><span class="icon icon-shopping_basket"></span> <?php echo $button_cart; ?></a>
                        <!-- /product info -->
                        <!-- visible-xs -->
                        <div class="visible-mobil-block visible-xs visible-sm">
                                <p><strong><?php echo $text_summary; ?></strong></p>
                                <p><?php echo $product['description']; ?></p>

                                <p><strong><?php echo $text_model; ?></strong></p>
                                <p><?php echo $product['model']; ?></p>

                                <p><strong><?php echo $text_manufacturer; ?></strong></p>
                                <p><?php echo $product['manufacturer']; ?></p>

                            <p><strong><?php echo $text_availability; ?></strong></p>
                            <p><?php echo $product['availability']; ?></p>


                            <p><strong><?php echo $text_weight; ?></strong></p>
                            <p><?php echo $product['weight']; ?></p>

                            <p><strong><?php echo $text_dimension; ?></strong></p>
                            <p><?php echo $product['length']; ?> x <?php echo $product['width']; ?> x <?php echo $product['height']; ?></p>


                        </div>
                        <!-- /visible-xs -->
                    </div>
                </td>
                <?php } ?>
                <!-- /item 01 -->
            </tr>
            <!-- /row-img -->

                <!-- Description -->
                <tr>
                    <td>
                        <strong><?php echo $text_summary; ?></strong>
                    </td>
                    <?php foreach ($products as $product) { ?>
                    <!-- item  -->
                    <td><?php echo $product['description']; ?></td>
                    <!-- /item2 -->
                    <?php } ?>
                </tr>
                <!-- /Description -->

                <!-- model -->
                <tr>
                    <td>
                        <strong><?php echo $text_model; ?></strong>
                    </td>
                    <?php foreach ($products as $product) { ?>
                    <!-- item  -->
                    <td><?php echo $product['model']; ?></td>
                    <!-- /item2 -->
                    <?php } ?>
                </tr>
                <!-- /model -->

                <!-- manufacturer -->
                <tr>
                    <td>
                        <strong><?php echo $text_manufacturer; ?></strong>
                    </td>
                    <?php foreach ($products as $product) { ?>
                    <!-- item  -->
                    <td><?php echo $product['manufacturer']; ?></td>
                    <!-- /item2 -->
                    <?php } ?>
                </tr>
                <!-- /manufacturer -->

                <!-- availability -->
                <tr>
                    <td>
                        <strong><?php echo $text_availability; ?></strong>
                    </td>
                    <?php foreach ($products as $product) { ?>
                    <!-- item  -->
                    <td><?php echo $product['availability']; ?></td>
                    <!-- /item2 -->
                    <?php } ?>
                </tr>
                <!-- /availability -->

                <!-- weight -->
                <tr>
                    <td>
                        <strong><?php echo $text_weight; ?></strong>
                    </td>
                    <?php foreach ($products as $product) { ?>
                    <!-- item  -->
                    <td><?php echo $product['weight']; ?></td>
                    <!-- /item2 -->
                    <?php } ?>
                </tr>
                <!-- /weight -->

                <!-- dimension -->
                <tr>
                    <td>
                        <strong><?php echo $text_dimension; ?></strong>
                    </td>
                    <?php foreach ($products as $product) { ?>
                    <!-- item  -->
                    <td><?php echo $product['length']; ?> x <?php echo $product['width']; ?> x <?php echo $product['height']; ?></td>
                    <!-- /item2 -->
                    <?php } ?>
                </tr>
                <!-- /dimension -->




            </table>

        </div>
      <?php } else { ?>
      <p><?php echo $text_empty; ?></p>
      <div class="buttons">
        <div class="pull-right"><a href="<?php echo $continue; ?>" class="btn btn-default"><?php echo $button_continue; ?></a></div>
      </div>
      <?php } ?>
      <?php echo $content_bottom; ?></div>
    <?php echo $column_right; ?></div>
</div>
<?php echo $footer; ?>
