<?php if ($modules) { ?>
<aside id="column-left" class="<?php echo ($layoutid); ?> <?php echo ($layoutid == 2 || $layoutid == 12 ? 'col-sm-12 col-md-8 col-xl-7' : ($layoutid == 3 || $layoutid == 5 ? 'col-sm-12 col-md-6 col-xl-6' : ($layoutid == 7 ? 'col-xs-12 col-sm-6 col-lg-6 col-xl-4' : 'col-sm-12 col-md-6 col-xl-4'))); ?>">
<?php foreach ($modules as $module) { ?>
  <?php echo $module; ?>
  <?php } ?>
</aside>
<?php if ($layoutid == 3 || $layoutid == 5) : ?><div class="divider divider--lg hidden  visible-sm visible-xs"></div><?php endif; ?>
<?php if ($layoutid == 7) : ?><div class="divider divider--lg visible-xs"></div><?php endif; ?>

<?php } ?>
