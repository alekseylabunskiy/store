<?php if ((isset($custom_block) && $custom_block != '' && $custom == 1) || $html != '') : ?>

<?php if (isset($left) && $left == 1) : ?>
<div class="collapse-block open">
<?php endif; ?>

    <?php if ($heading_title && ((isset($custom_block) && $custom_block != '') || $html != '')) { ?>
        <?php if (isset($left) && $left == 1) { ?>
            <h4 class="collapse-block__title"><?php echo $heading_title; ?></h4>
        <?php } else { ?>
            <?php echo $heading_title; ?>
        <?php } ?>
    <?php } ?>

    <?php if (isset($left) && $left == 1) : ?><div class="collapse-block__content"><?php endif; ?>
        <?php if (isset($custom_block) && $custom_block != '' && $custom == 1) { ?>
            <?php echo $custom_block; ?>
        <?php } elseif ($html != '') { ?>
            <?php echo $html; ?>
        <?php } ?>
    <?php if (isset($left) && $left == 1) : ?></div><?php endif; ?>


<?php if (isset($left) && $left == 1) : ?></div><?php endif; ?>

<?php endif; ?>
