<?php if ($error_warning) { ?>
<div class="alert alert-warning"><i class="fa fa-exclamation-circle"></i> <?php echo $error_warning; ?></div>
<?php } ?>
<h2 class="title-checkout tt_uppercase"><i class="icon fa fa-truck color" aria-hidden="true"></i> <?php echo $text_checkout_shipping_method; ?></h2>

<?php if ($shipping_methods) { ?>
<p><?php echo $text_shipping_method; ?></p>
<?php foreach ($shipping_methods as $shipping_method) { ?>
<h6 class="color"><?php echo $shipping_method['title']; ?></h6>

<?php if (!$shipping_method['error']) { ?>
<?php foreach ($shipping_method['quote'] as $quote) { ?>
<div class="form-group clearfix">
    <label class="radio" for="shipping_method<?php echo $quote['code']; ?>">
        <?php if ($quote['code'] == $code || !$code) { ?>
        <?php $code = $quote['code']; ?>
        <input id="shipping_method<?php echo $quote['code']; ?>" type="radio" name="shipping_method" value="<?php echo $quote['code']; ?>"  title="<?php echo $quote['title']; ?>" checked="checked" />
        <?php } else { ?>
        <input id="shipping_method<?php echo $quote['code']; ?>" type="radio" name="shipping_method" value="<?php echo $quote['code']; ?>"  title="<?php echo $quote['title']; ?>" />
        <?php } ?>
                <span class="outer">
                    <span class="inner"></span>
                </span>
        <?php echo $quote['title']; ?> - <?php echo $quote['text']; ?>
    </label>
</div>


<?php } ?>
<?php } else { ?>
<div class="alert alert-danger"><?php echo $shipping_method['error']; ?></div>
<?php } ?>
<?php } ?>
<?php } ?>
