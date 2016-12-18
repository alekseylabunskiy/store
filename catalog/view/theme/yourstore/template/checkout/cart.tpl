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
  <?php if ($attention) { ?>
  <div class="alert alert-info"><i class="fa fa-info-circle"></i> <?php echo $attention; ?>
    <button type="button" class="close" data-dismiss="alert">&times;</button>
  </div>
  <?php } ?>
  <?php if ($success) { ?>
  <div class="alert alert-success"><i class="fa fa-check-circle"></i> <?php echo $success; ?>
    <button type="button" class="close" data-dismiss="alert">&times;</button>
  </div>
  <?php } ?>
  <?php if ($error_warning) { ?>
  <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error_warning; ?>
    <button type="button" class="close" data-dismiss="alert">&times;</button>
  </div>
  <?php } ?>
  <div class="row">
      <?php echo $column_left; ?>
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
            <h1 class="text-center text-uppercase title-under">
                <?php echo $heading_title; ?>
                <?php if ($weight) { ?>
                &nbsp;(<?php echo $weight; ?>)
                <?php } ?>
            </h1>
        </div>
        <!-- /title -->

        <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
            <div class="container-widget">
          <table class="shopping-cart-table">
            <thead>
              <tr>
                  <th><?php echo $column_image; ?></th>
                  <th><?php echo $column_name; ?></th>
                  <th>&nbsp;</th>
                  <th><?php echo $column_price; ?></th>
                  <th><?php echo $column_quantity; ?></th>
                  <th><?php echo $column_total; ?></th>
                  <th>&nbsp;</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($products as $product) { ?>
              <tr>
                <td>
                    <?php if ($product['thumb']) { ?>
                    <div class="shopping-cart-table__product-image">
                        <a href="<?php echo $product['href']; ?>"><img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" title="<?php echo $product['name']; ?>" class="img-responsive" /></a>
                    </div>
                  <?php } ?>
                </td>
                <td class="text-left">
                    <h5 class="shopping-cart-table__product-name text-left text-uppercase">
                        <a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a>
                    </h5>
                  <?php if (!$product['stock']) { ?>
                  <span class="text-danger">***</span>
                  <?php } ?>
                    <ul class="shopping-cart-table__list-parameters">
                        <li><?php echo $column_model; ?>: <?php echo $product['model']; ?></li>
                        <?php if ($product['option']) { ?>
                        <?php foreach ($product['option'] as $option) { ?>
                        <li>
                            <span><?php echo $option['name']; ?>:</span> <?php echo $option['value']; ?>
                        </li>
                        <?php } ?>
                        <?php } ?>

                        <li class="visible-xs">
                            <span><?php echo $column_price; ?>:</span>
                            <span class="price-mobile"><?php echo $product['price']; ?></span>
                        </li>
                        <li class="visible-xs">
                            <span><?php echo $column_quantity; ?>:</span>
                            <!--  -->
                            <div class="number input-counter">
                                <span class="minus-btn"></span>
                                <input type="text" name="quantity[<?php echo $product['cart_id']; ?>]" value="<?php echo $product['quantity']; ?>" size="1" class="form-control7" />
                                <span class="plus-btn"></span>
                            </div>
                            <!-- / -->
                            <button type="submit" data-toggle="tooltip" title="<?php echo $button_update; ?>" class="btn btn-primary btn--ys"><i class="fa fa-refresh"></i></button>
                        </li>

                        <?php if ($product['reward']) { ?>
                        <li><small><?php echo $product['reward']; ?></small></li>
                        <?php } ?>
                        <?php if ($product['recurring']) { ?>
                        <li>
                            <span class="label label-info"><?php echo $text_recurring_item; ?></span> <small><?php echo $product['recurring']; ?></small>
                        </li>
                        <?php } ?>
                    </ul>
                </td>
                  <td>
                      <a class="shopping-cart-table__create icon icon-create " href="<?php echo $product['href']; ?>"></a>
                      <a class="shopping-cart-table__delete icon icon-delete visible-xs" onclick="cart_theme.remove('<?php echo $product['cart_id']; ?>');"></a>
                  </td>
                  <td>
                      <div class="shopping-cart-table__product-price unit-price"><?php echo $product['price']; ?></div>
                  </td>
                  <td class="text-center">
                      <div class="shopping-cart-table__input">
                          <div class="number input-counter">
                              <span class="minus-btn"></span>
                              <input type="text" name="quantity[<?php echo $product['cart_id']; ?>]" value="<?php echo $product['quantity']; ?>" size="1" class="form-control7" />
                              <span class="plus-btn"></span>
                          </div>

                      </div>
                    <button type="submit" data-toggle="tooltip" title="<?php echo $button_update; ?>" class="btn btn-primary btn--ys"><i class="fa fa-refresh"></i></button>
                </td>

                <td class="text-right">
                    <div class="shopping-cart-table__product-price subtotal"><?php echo $product['total']; ?></div>
                </td>
                  <td>
                      <a class="shopping-cart-table__delete icon icon-clear" onclick="cart_theme.remove('<?php echo $product['cart_id']; ?>');"></a>
                  </td>
              </tr>
              <?php } ?>
              <?php foreach ($vouchers as $voucher) { ?>
              <tr>
                <td></td>
                <td class="text-left"><?php echo $voucher['description']; ?></td>
                <td class="text-left"></td>
                <td class="text-left"><div class="input-group btn-block" style="max-width: 200px;">
                    <input type="text" name="" value="1" size="1" disabled="disabled" class="form-control" />
                    <span class="input-group-btn">
                    <button type="button" data-toggle="tooltip" title="<?php echo $button_remove; ?>" class="btn btn-danger" onclick="voucher.remove('<?php echo $voucher['key']; ?>');"><i class="fa fa-times-circle"></i></button>
                    </span></div></td>
                <td class="text-right"><?php echo $voucher['amount']; ?></td>
                <td class="text-right"><?php echo $voucher['amount']; ?></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </form>
      <?php if ($modules) { ?>
      <h2><?php echo $text_next; ?></h2>
      <p><?php echo $text_next_choice; ?></p>
      <div class="panel-group" id="accordion">
        <?php foreach ($modules as $module) { ?>
        <?php echo $module; ?>
        <?php } ?>
      </div>
      <?php } ?>
      <br />
      <div class="row">
        <div class="col-sm-4 col-sm-offset-8">
          <table class="table table-bordered">
            <?php foreach ($totals as $total) { ?>
            <tr>
              <td class="text-right"><strong><?php echo $total['title']; ?>:</strong></td>
              <td class="text-right"><?php echo $total['text']; ?></td>
            </tr>
            <?php } ?>
          </table>
        </div>
      </div>
      <div class="buttons">
        <div class="pull-left">
            <a href="<?php echo $continue; ?>" class="btn btn--ys btn--light pull-left btn-right">
                <span class="icon icon-keyboard_arrow_left"></span><?php echo $button_shopping; ?>
            </a>
        </div>
        <div class="pull-right">
            <a href="<?php echo $checkout; ?>" class="btn btn--ys btn--full"><?php echo $button_checkout; ?><span class="icon icon--flippedX icon-reply"></span></a>
        </div>
      </div>
      <?php echo $content_bottom; ?></div>
    <?php echo $column_right; ?></div>
</div>
<?php echo $footer; ?> 