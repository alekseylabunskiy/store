<?php if ($modules) { ?>
<div class="divider divider--lg visible-md visible-sm visible-xs"></div>
<aside id="rightColumn" class="col-xl-4 col-lg-4  col-md-12">
    <?php foreach ($modules as $module) { ?>
  <?php echo $module; ?>
  <?php } ?>
</aside>
<?php } ?>
