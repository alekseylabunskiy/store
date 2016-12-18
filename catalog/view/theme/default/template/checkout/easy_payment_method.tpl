<?php if ($error_warning) { ?>
<div class="alert alert-warning"><i class="fa fa-exclamation-circle"></i> <?php echo $error_warning; ?></div>
<?php } ?>
<h2 class="title-checkout tt_uppercase">
    <span class="icon icon-account_balance_wallet color"></span>
    <?php echo $text_checkout_payment_method; ?>
</h2>
			  
<?php if ($payment_methods) { ?>
<p><?php echo $text_payment_method; ?></p>
<?php foreach ($payment_methods as $payment_method) { ?>
<div class="form-group clearfix">
    <label class="radio">
        <?php if ($payment_method['code'] == $code || !$code) { ?>
        <?php $code = $payment_method['code']; ?>
        <input type="radio" name="payment_method" value="<?php echo $payment_method['code']; ?>" title="<?php echo $payment_method['title']; ?>" checked="checked" />
        <?php } else { ?>
        <input type="radio" name="payment_method" value="<?php echo $payment_method['code']; ?>" title="<?php echo $payment_method['title']; ?>" />
        <?php } ?>
        <span class="outer">
            <span class="inner"></span>
        </span>
        <?php echo $payment_method['title']; ?>
    </label>
</div>
<?php } ?>
<?php } ?>
