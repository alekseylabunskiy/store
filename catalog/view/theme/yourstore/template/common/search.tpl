<?php
$headertype = 1;
if (!isset($store_id)) {$store_id  = 0;}
if (isset($customisation_general["headertype"][$store_id])) {
$headertype = $customisation_general["headertype"][$store_id];
}
/* header type */

?>

<?php if ($headertype == 7) { ?>

<div class="input-outer" id="search">
        <input type="text" name="search" value="<?php echo $search; ?>" maxlength="128" placeholder="<?php echo $text_search; ?>">
        <button type="button" title="" class="icon icon-search"></button>
    </div>

<?php } else {  ?>

<a href="#" class="search__open <?php echo ($headertype == 7 ? 'visible-mobile-menu-on' : ''); ?>"><span class="icon icon-search"></span></a>
<div class="search-dropdown">
    <div id="search-wrapper" class="input-outer">
        <input type="text" name="search1" value="<?php echo $search; ?>" maxlength="128" placeholder="<?php echo $text_search; ?>:" class="form-control7 input-lg7 placeholder" />
        <button type="button" title="" class="btn7 btn-default7 btn-lg7 icon icon-search"></button>
    </div>
    <a href="#" class="search__close"><span class="icon icon-close"></span></a>
</div>
<?php }  ?>



