<?php
if (count($currencies) > 1) {
if (!isset($store_id)) {$store_id  = 0;}
$headertype = 1;
if (isset($customisation_general["headertype"][$store_id])) {
$headertype = $customisation_general["headertype"][$store_id];
}
/* header type */
?>

<?php if ($headertype == 6 || $headertype == 7 || $headertype == 8) : ?>
 <div class="visible-mobile-menu-off">
     <h4 class="megamenu__subtitle"><span><?php echo $text_currency; ?></span></h4>
     <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form-currency-mobile">

         <ul>
             <?php foreach ($currencies as $currency) { ?>
             <li class="currency__item <?php echo ($currency['code'] == $code ? 'active' : 'no-active'); ?>"><a class="currency-select btn7 btn-link7 btn-block7" name="<?php echo $currency['code']; ?>"><?php echo $currency['code']; ?> - <?php echo $currency['title']; ?></a></li>
             <?php } ?>
         </ul>
         <input type="hidden" name="code" value="" />
         <input type="hidden" name="redirect" value="<?php echo $redirect; ?>" />
     </form>
 </div>
<?php endif;  ?>

<?php if ($headertype == 6 || $headertype == 7 || $headertype == 8) : ?>
    <div class="mobile-wrapper visible-mobile-menu-on">
        <div class="currency func-block dropdown text-right">
<?php endif;  ?>

        <div class="dropdown-label hidden-sm hidden-xs"><?php echo $text_currency; ?>:</div>
        <a class="dropdown-toggle" data-toggle="dropdown">
            <?php foreach ($currencies as $currency) : if ($currency['code'] == $code) :  echo $currency['code']; endif; endforeach; ?><span class="caret"></span>
        </a>

        <form class="dropdown-menu dropdown-menu--xs-full" action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form-currency">

            <?php foreach ($currencies as $currency) { ?>
            <?php if ($currency['symbol_left']) { ?>
            <div class="li_sub"><button class="currency-select btn7 btn-link7 btn-block7" type="button" name="<?php echo $currency['code']; ?>"><?php echo $currency['symbol_left']; ?> <?php echo $currency['title']; ?></button></div>
            <?php } else { ?>
            <div class="li_sub"><button class="currency-select btn7 btn-link7 btn-block7" type="button" name="<?php echo $currency['code']; ?>"><?php echo $currency['symbol_right']; ?> <?php echo $currency['title']; ?></button></div>
            <?php } ?>
            <?php } ?>

            <div class="li_sub dropdown-menu__close"><a href="#"><span class="icon icon-close"></span>close</a></div>


            <input type="hidden" name="code" value="" />
            <input type="hidden" name="redirect" value="<?php echo $redirect; ?>" />
        </form>


<?php if ($headertype == 6 || $headertype == 7 || $headertype == 8) : ?>
        </div>
    </div>
<?php endif;  ?>

<?php } ?>
