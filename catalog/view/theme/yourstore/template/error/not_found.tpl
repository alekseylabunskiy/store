<?php echo $header; ?>
<?php if (!isset($layout_id)) : $layout_id = 1; endif; ?>
<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb breadcrumb--ys pull-left">
            <?php foreach ($breadcrumbs as $k => $breadcrumb) :  ?>
                <li class="<?php echo ($k == 0 ? 'home-link' : ($k == (count($breadcrumbs) - 1) ? 'active' : '')); ?>">
                    <?php if ($k == (count($breadcrumbs) - 1)) {  echo $breadcrumb['text']; } else { echo '<a class="'.(count($breadcrumbs)-1).'" href="'.$breadcrumb['href'].'">'.$breadcrumb['text'].'</a>'; } ?>
                </li>
            <?php endforeach; ?>
        </ol>
    </div>
</div>

<div class="container">
  <div class="row">
    <div id="content">
        <?php echo $content_top; ?>
        <!-- title -->
        <div class="title-box">
            <h1 class="text-center text-uppercase title-under"><?php echo $heading_title; ?></h1>
        </div>
        <!-- /title -->

        <div class="text-center">
            <?php if ($layout_id == 3) { ?>
            <img src="image/catalog/pages/empty-category-icon.png" alt="empty category icon" class="img-responsive-inline">
            <?php } elseif ($layout_id == 7) { ?>
            <img src="image/catalog/pages/empty-cart-icon.png" alt="empty category icon" class="img-responsive-inline">
            <?php } else { ?>
            <img src="image/catalog/pages/page-404-icon.png" alt="empty cart icon" class="img-responsive-inline" />
            <?php }  ?>

            <div class="divider divider--lg"></div>
            <h4 class="color"><?php echo $text_error; ?></h4>
            <div class="divider divider--lg"></div>

            <div class="text-with-button">
                <a class="btn btn--ys" href="<?php echo $continue; ?>"><span class="icon icon-home"></span><?php echo $button_continue; ?></a>
            </div>
        </div>

      <?php echo $content_bottom; ?></div>
    <?php echo $column_right; ?></div>
</div>
<?php echo $footer; ?>