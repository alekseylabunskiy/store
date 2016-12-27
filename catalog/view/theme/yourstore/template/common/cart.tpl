<?php
    $text_items_full = explode(" ", $text_items);
    $text_items_number = $text_items_full[1];
?>

<div  class="btn-group btn-block7 cart link-inline text-right">
  <button onclick="cart_theme.list();"  type="button" class="btn7 btn-inverse7 btn-block7 btn-lg7">
      <span id="cart-total" class="badge badge--cart"><?php echo $text_items_number; ?></span>
      <span class="icon icon-shopping_basket"></span>
      <span class="name-text">My Cart</span>

  </button>
  <ul class="dropdown-menu dropdown-menu--xs-full slide-from-top" role="menu">
      <?php if ($products || $vouchers) { ?>
      <?php foreach ($products as $product) : ?>
        <li class="cart__item">
            <table class="shopping-cart-table">
                <tr>
                    <td><a class="shopping-cart-table__delete icon icon-clear" onclick="cart_theme.remove('<?php echo $product['cart_id']; ?>');" title="<?php echo $button_remove; ?>"></a></td>
                    <td>
                        <div class="shopping-cart-table__product-image">
                            <?php if ($product['thumb']) { ?>
                            <a href="<?php echo $product['href']; ?>"><img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" title="<?php echo $product['name']; ?>" /></a>
                            <?php } ?>
                        </div>
                    </td>
                    <td class="text-left">
                        <h5 class="shopping-cart-table__product-name text-left text-uppercase">
                            <a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a>
                        </h5>
                    </td>
                    <td class="text-center">
                        <div class="shopping-cart-table__input">
                            <div class="number input-counter">
                                <span class="minus-btn"></span>
                                <input type="text" name="quantity[<?php echo $product['cart_id']; ?>]" value="<?php echo $product['quantity']; ?>" size="1" class="form-control7" />
                                <span class="plus-btn"></span>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="shopping-cart-table__product-price subtotal">
                            <span><?php echo $product['total']; ?></span>
                        </div>
                    </td>
                </tr>
            </table>
        </li>
          <?php endforeach; ?>
    <li style="height: 110px;">
        <div class="cart__bottom">
            <div class="cart__total">
                <span><img id="cart_logo" src="http://d33007-hostde8.fornex.org/image/catalog/u50.png" title="Yourstore" alt="Yourstore"></span><span id="cart_total_price"><span id="t_title"><?php echo $totals[1]['title']; ?>:</span> <?php echo $totals[1]['text']; ?></span>
            </div>
        </div>
        <div id="ref_buttons">
            <a id="continue_shop" href="" class="btn btn--ys btn-checkout">Продолжить покупки</a>
            <a id="confirm_ord" href="index.php?route=checkout/checkout" class="btn btn--ys">Оформить заказ</a>
        </div>
   </li>
    <?php } else { ?>
      <li class="">
      <div class="text-center cart__top"><?php echo $text_empty; ?></div>
      </li>
    <?php } ?>
  </ul>

</div>
