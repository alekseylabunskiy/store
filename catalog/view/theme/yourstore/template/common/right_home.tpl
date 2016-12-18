<?php if ($modules) { ?>
<aside id="column-right" class="<?php echo ($layoutid == 2 || $layoutid == 12 ? 'col-sm-12 col-md-4 col-xl-5' : ($layoutid == 3 || $layoutid == 5 ? 'col-sm-12 col-md-6 col-xl-6' : ($layoutid == 7 ? 'col-xs-12 col-sm-6 col-lg-6 col-xl-4' : 'col-sm-12 col-md-6 col-xl-4'))); ?>">
<?php foreach ($modules as $module) { ?>
  <?php echo $module; ?>
  <?php } ?>
</aside>
<?php } ?>
