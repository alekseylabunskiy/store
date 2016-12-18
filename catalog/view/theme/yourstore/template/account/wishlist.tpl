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
      <?php if ($products) { ?>
        <table class="table-wishlist-1">
          <thead>
            <tr>
              <th><?php echo $column_image; ?></th>
              <th><?php echo $column_price; ?></th>
              <th><?php echo $button_remove; ?></th>
                <th><?php echo $button_cart; ?></th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($products as $product) { ?>
            <tr>
              <td>
                  <?php if ($product['thumb']) { ?>
                  <!-- img -->
                  <div class="pull-left">
                      <div class="table-wishlist-1__product-image">
                          <a href="<?php echo $product['href']; ?>"><img class="img-responsive" src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" title="<?php echo $product['name']; ?>" /></a>
                      </div>
                  </div>
                  <!-- /img -->
                <?php } ?>
                  <!-- content -->
                  <div class="pull-right">
                      <div class="visible-sm visible-xs visible-icon">
                          <a href="<?php echo $product['remove']; ?>" class="color-red icon icon-clear"></a>
                          <a onclick="cart_theme.add('<?php echo $product['product_id']; ?>');" class="color-green icon icon-shopping_cart"></a>
                      </div>
                      <!-- title -->
                      <h5 class="table-wishlist-1__product-name text-uppercase color">
                          <a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a>
                      </h5>
                      <?php echo $column_model; ?>: <?php echo $product['model']; ?>
                      <div class="divider divider--xs"></div>
                      <?php echo $column_stock; ?>: <?php echo $product['stock']; ?>
                      <!-- /title -->
                      <div class="visible-sm visible-xs">
                          <p>
                              <span class="table-wishlist-1__product-price">
                                  <?php if (!$product['special']) { ?>
                                  <?php echo $product['price']; ?>
                                  <?php } else { ?>
                                  <span class="price-box__new"><?php echo $product['special']; ?></span>
                                 <span class="price-box__old"><?php echo $product['price']; ?></span>
                                  <?php } ?>
                              </span>
                          </p>
                      </div>
                  </div>
                  <!-- /content -->

              </td>

              <td>
                  <?php if ($product['price']) { ?>
                      <span class="table-wishlist-1__product-price">
                          <?php if (!$product['special']) { ?>
                              <?php echo $product['price']; ?>
                          <?php } else { ?>
                          <span class="price-box__new"><?php echo $product['special']; ?></span>
                                 <span class="price-box__old"><?php echo $product['price']; ?></span>
                          <?php } ?>
                      </span>
                  <?php } ?>
              </td>
              <td>
                  <a href="<?php echo $product['remove']; ?>" class="color-red icon icon-clear"></a>
              </td>
                <td>
                    <a onclick="cart_theme.add('<?php echo $product['product_id']; ?>');" class="color-green icon icon-shopping_cart"></a>
                </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      <?php } else { ?>
      <p><?php echo $text_empty; ?></p>
      <?php } ?>
      <div class="buttons clearfix">
        <div class="pull-right"><a href="<?php echo $continue; ?>" class="btn btn-primary"><?php echo $button_continue; ?></a></div>
      </div>
      <?php echo $content_bottom; ?></div>
    <?php echo $column_right; ?></div>
</div>
<?php echo $footer; ?>