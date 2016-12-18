<?php if ($modules) { ?>
<div id="centerColumn" class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-10">
    <div class="divider divider--lg visible-sm visible-xs"></div>
    <?php foreach ($modules as $module) { ?>
  <?php echo $module; ?>
  <?php } ?>
    <div class="content-sm">
        <div class="row">
            <?php echo $left_home; ?>
            <?php echo $right_home; ?>
        </div>
    </div>
    <!-- / -->
    <hr>
    <?php echo ($layoutid == 2 || $layoutid == 12 ? $content_bottom : ''); ?>

</div>
<?php } ?>
