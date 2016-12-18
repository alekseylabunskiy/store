<?php
    $text_items_full = explode(" ", $text_items);
    $text_items_number = $text_items_full[1];
?>

<div id="cart" class="btn-group btn-block7 cart link-inline text-right">
  <button type="button" data-toggle="dropdown" class="btn7 btn-inverse7 btn-block7 btn-lg7 dropdown-toggle">
      <span id="cart-total" class="badge badge--cart"><?php echo $text_items_number; ?></span>
      <span class="icon icon-shopping_basket"></span>
      <span class="name-text">My Cart</span>

  </button>
  <ul class="dropdown-menu dropdown-menu--xs-full slide-from-top" role="menu">
      <?php if ($products || $vouchers) { ?>

      <li class="container">
          <div class="cart__top">Recently added item(s)</div>
          <a href="#" class="icon icon-close cart__close desktop-button"><span><?php echo (isset($customisation_translation[$lang]["menu_close"][$store_id]) ? $customisation_translation[$lang]["menu_close"][$store_id] : 'close'); ?></span></a>
      </li>
      <?php foreach ($products as $product) : ?>
        <li class="cart__item">
            <div class="container">
                <div class="cart__item__image pull-left">
                    <?php if ($product['thumb']) { ?>
                    <a href="<?php echo $product['href']; ?>"><img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" title="<?php echo $product['name']; ?>" /></a>
                    <?php } ?>
                </div>
                <div class="cart__item__control">
                    <div class="cart__item__delete">
                        <a onclick="cart_theme.remove('<?php echo $product['cart_id']; ?>');" title="<?php echo $button_remove; ?>" class="icon icon-delete">
                            <span><?php echo $button_remove; ?></span>
                        </a>
                    </div>
                    <div class="cart__item__edit"><a href="<?php echo $product['href']; ?>" class="icon icon-edit"><span>Edit</span></a></div>
                </div>
                <div class="cart__item__info">
                    <div class="cart__item__info__title">
                        <h2><a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a></h2>
                    </div>
                    <div class="cart__item__info__price">
                        <span><?php echo $product['total']; ?></span>
                    </div>
                    <div class="cart__item__info__price cart__item__info__qty">
                        <span><?php echo $product['quantity']; ?></span>
                    </div>
                    <?php if ($product['option']) { ?>
                    <div class="cart__item__info__details">
                        <div class='multitooltip'>
                            <a href="#">Details</a>
                            <div class="tip on-bottom">
                                <?php foreach ($product['option'] as $option) { ?>
                                <span><strong><?php echo $option['name']; ?></strong>: <?php echo $option['value']; ?></span>
                                <?php } ?>

                                <?php if ($product['recurring']) { ?>
                                <span><strong><?php echo $text_recurring; ?></strong>: <?php echo $product['recurring']; ?></span>
                                <?php } ?>



                                <table class="table table-striped">
                                    <?php foreach ($vouchers as $voucher) { ?>
                                    <tr>
                                        <td class="text-center"></td>
                                        <td class="text-left"><?php echo $voucher['description']; ?></td>
                                        <td class="text-right">x&nbsp;1</td>
                                        <td class="text-right"><?php echo $voucher['amount']; ?></td>
                                        <td class="text-center text-danger"><button type="button" onclick="voucher.remove('<?php echo $voucher['key']; ?>');" title="<?php echo $button_remove; ?>" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button></td>
                                    </tr>
                                    <?php } ?>
                                </table>

                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>

            </div>
        </li>
          <?php endforeach; ?>



    <li class="container">
        <div class="cart__bottom">
            <div class="cart__total">
                <?php foreach ($totals as $total) { ?>
                <?php echo $total['title']; ?>: <span><?php echo $total['text']; ?></span>
                <?php } ?>
            </div>
            <a href="<?php echo $checkout; ?>" class="btn btn--ys btn-checkout"><?php echo $text_checkout; ?> <span class="icon icon--flippedX icon-reply"></span></a>
            <a href="<?php echo $cart; ?>" class="btn btn--ys"><span class="icon icon-shopping_basket"></span> <?php echo $text_cart; ?></a>
        </div>
        <a href="#" class="icon icon-close cart__close mobile-button"><span><?php echo (isset($customisation_translation[$lang]["menu_close"][$store_id]) ? $customisation_translation[$lang]["menu_close"][$store_id] : 'close'); ?></span></a>


    </li>
    <?php } else { ?>
      <li class="container">
      <div class="text-center cart__top"><?php echo $text_empty; ?></div>
          <a href="#" class="icon icon-close cart__close"><span><?php echo (isset($customisation_translation[$lang]["menu_close"][$store_id]) ? $customisation_translation[$lang]["menu_close"][$store_id] : 'close'); ?></span></a>
      </li>
    <?php } ?>
  </ul>

</div>
