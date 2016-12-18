<?php
if (!isset($store_id)) {$store_id  = 0;}
    if (!isset($layoutid)) {$layoutid = 1;}

/* layoutid */
?>

<?php echo $header; ?>

<?php echo (isset($boxed) ? $boxed : ''); ?>
<?php echo $content_top; ?>

<?php if ($layoutid == 3) : ?>
<div class="content separator-section">
    <div class="container">
        <hr>
    </div>
</div>
<?php endif; ?>


    <?php if ($layoutid != 4) : ?>

    <?php if ($layoutid != 2 && $layoutid != 12) : ?>
    <div class="<?php echo ($layoutid != 9 ? 'content' : ''); ?>">
    <?php endif; ?>

        <div class="container">
            <div class="row">
                <?php echo $column_left; ?>

                <?php echo ($layoutid != 2 && $layoutid != 12 ? (isset($left_home) ? $left_home : '') : ''); ?>

                <?php echo ($layoutid == 2 || $layoutid == 12 ? (isset($left_home2) ? $left_home2 : '') : ''); ?>

                <?php echo ($layoutid != 7 ? (isset($promo) ? $promo : '') : ''); ?>

                <?php echo ($layoutid != 2 && $layoutid != 12 ? (isset($right_home) ? $right_home : '') : ''); ?>

                <?php echo ($layoutid == 2|| $layoutid == 12 ? (isset($right_home2) ? $right_home2 : '') : ''); ?>

                <?php echo $column_right; ?>

                <?php echo ($layoutid == 7 ? (isset($promo) ? $promo : '') : ''); ?>

            </div>
        </div>

    <?php if ($layoutid != 2 && $layoutid != 12) : ?>
    </div>
    <?php endif; ?>




<?php echo ($layoutid != 2 && $layoutid != 12 ? $content_bottom : ''); ?>
<!-- Modal (newsletter) -->
<?php
if (!isset($newsletter_popup_status) || $newsletter_popup_status != 0) :

    $your_apikey = (isset($apikey) ? $apikey : '');
    $my_list_unique_id = (isset($list_unique_id) ? $list_unique_id : '');
?>

<div class="modal  modal--bg fade"  id="newsletterModal" data-pause=2000>
    <div class="modal-dialog white-modal">
        <div class="modal-content modal-md">
            <div class="modal-bg-image bottom-right">
                <img src="image/catalog/custom/newsletter-bg.png" alt="" class="img-responsive">
            </div>
            <div class="modal-block">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon icon-clear"></span></button>
                </div>
                <div class="modal-newsletter text-center">
                    <?php if (isset($config_logo) && isset($config_name)) : ?>
                    <img class="logo img-responsive1" src="image/<?php echo (isset($config_logo) ? $config_logo : ''); ?>" alt="<?php echo (isset($config_name) ? $config_name : ''); ?>" />
                    <?php endif; ?>

                    <?php if (!isset($newsletter_promo)) { ?>
                    <h2 class="text-uppercase modal-title">JOIN US NOW!</h2>
                    <p class="color-dark">And get hot news about the theme</p>
                    <p class="color font24 custom-font font-lighter">
                        YOURStore
                    </p>
                    <?php } else { ?>
                    <?php if ($newsletter_promo != ''): ?>
                    <?php echo $newsletter_promo; ?>
                    <?php endif; ?>
                    <?php } ?>



                    <form id="signup1" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get" name="mc-embedded-subscribe-form" target="_blank" class="subscribe-form">
                        <div class="row-subscibe">
                            <input name="email1" id="email1" type="text"
                                   value="<?php echo (isset($newsletter_placeholder) ? $newsletter_placeholder : ''); ?>"
                                   onblur="if (this.value == '') {this.value = '<?php echo (isset($newsletter_placeholder) ? $newsletter_placeholder : ''); ?>';}"
                                   onfocus="if(this.value == '<?php echo (isset($newsletter_placeholder) ? $newsletter_placeholder : ''); ?>') {this.value = '';}">
                            <input name="apikey1" id="apikey1" type="hidden" class="form-control" value="<?php echo $your_apikey; ?>" >
                            <input name="listid1" id="listid1" type="hidden" class="form-control" value="<?php echo $my_list_unique_id; ?>" >
                            <button name="submit" type="submit" class="btn btn--ys btn--xl">
                                <?php echo (isset($newsletter_button) ? $newsletter_button : ''); ?>
                            </button>
                        </div>
                        <div id="response1"></div>

                        <div class="checkbox-group form-group-top clearfix">
                            <input type="checkbox" id="checkBox1">
                            <label for="checkBox1">
                                <span class="check"></span>
                                <span class="box"></span>
                                <?php if (!isset($newsletter_close)) { ?>
                                &nbsp;&nbsp;DON&#39;T SHOW THIS POPUP AGAIN
                                <?php } else { ?>
                                <?php echo '&nbsp;&nbsp;'.$newsletter_close; ?>
                                <?php } ?>
                            </label>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<!-- / Modal (newsletter) -->
<?php endif; ?>


<?php echo $footer; ?>