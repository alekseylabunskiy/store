<?php
if (count($languages) > 1) {
if (!isset($store_id)) {$store_id  = 0;}
$headertype = 1;
if (isset($customisation_general["headertype"][$store_id])) {
$headertype = $customisation_general["headertype"][$store_id];
}
/* header type */

?>

<?php if ($headertype == 6 || $headertype == 7 || $headertype == 8) : ?>
<div class="visible-mobile-menu-off">

<h4 class="megamenu__subtitle"><span><?php echo $text_language; ?></span></h4>
<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form-language-mobile">

<ul>
    <?php foreach ($languages as $language) { ?>

    <li class="languages__item <?php echo ($language['code'] == $code ? 'active' : 'no-active'); ?>">
        <a class="language-select" name="<?php echo $language['code']; ?>">
            <span class="languages__item__flag flag">
                <img src="catalog/language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" alt="<?php echo $language['name']; ?>" title="<?php echo $language['name']; ?>" />
            </span>
            <span class="languages__item__label"><?php echo $language['name']; ?></span>
        </a>
    </li>
    <?php } ?>
</ul>

    <input type="hidden" name="code" value="" />
    <input type="hidden" name="redirect" value="<?php echo $redirect; ?>" />

</form>
</div>
<?php endif;  ?>

<?php if ($headertype == 6 || $headertype == 7 || $headertype == 8) : ?>
<div class="mobile-wrapper visible-mobile-menu-on">
    <div class="language func-block dropdown text-right">

    <?php endif;  ?>
        <div class="dropdown-label hidden-sm hidden-xs"><?php echo $text_language; ?>:</div>
        <a class="dropdown-toggle" data-toggle="dropdown">
            <?php foreach ($languages as $language) { if ($language['code'] == $code) { echo $language['name']; } } ?><span class="caret"></span>
        </a>
        <form class="dropdown-menu dropdown-menu--xs-full" action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form-language">
            <?php foreach ($languages as $language) { ?>
            <div class="li_sub">
                <button class="btn7 btn-link7 btn-block7 language-select" type="button" name="<?php echo $language['code']; ?>">
                    <?php echo $language['name']; ?>
                </button>
            </div>
            <?php } ?>
            <div class="li_sub dropdown-menu__close"><a href="#"><span class="icon icon-close"></span>close</a></div>

            <input type="hidden" name="code" value="" />
            <input type="hidden" name="redirect" value="<?php echo $redirect; ?>" />
        </form>

<?php if ($headertype == 6 || $headertype == 7 || $headertype == 8) : ?>
</div>
</div>
<?php endif;  ?>

<?php } ?>
