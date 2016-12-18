<?php if ($modules) { ?>
<aside id="leftColumn" class="col-md-4 col-lg-3 col-xl-2">
    <a href="#" class="slide-column-close visible-sm visible-xs"><span class="icon icon-chevron_left"></span><?php echo (isset($customisation_translation[$lang]["menu_back"][$store_id]) ? $customisation_translation[$lang]["menu_back"][$store_id] : 'back'); ?></a>
    <?php foreach ($modules as $module) { ?>
        <?php echo $module; ?>
    <?php } ?>
</aside>
<?php } ?>
