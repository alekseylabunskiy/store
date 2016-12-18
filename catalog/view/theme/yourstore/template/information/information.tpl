<?php echo $header; ?>
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

<div class="container information">
    <div class="title-box default">
        <h1 class="text-center text-uppercase title-under"><?php echo $heading_title; ?></h1>
    </div>

    <?php if ($column_left || $column_right) : ?>
    <div class="row">
    <?php endif; ?>


        <?php if ($column_left) : ?>
    <?php echo $column_left; ?>
    <div class="divider divider--lg  visible-sm visible-xs"></div>
<?php endif; ?>

    <div id="content">
    <?php echo $content_top; ?>

    <?php echo $description; ?>
    <?php echo $content_bottom; ?>
    </div>
<?php echo $column_right; ?>

        <?php if ($column_left || $column_right) : ?>
        </div>
            <?php endif; ?>
        </div>
<script type="text/javascript">
    function countDown(){
        if ($j("#countdownConstruction").length > 0) {
            $j('#countdownConstruction').countdown({
                until: new Date(2016, 7, 1)
            });
        }
    }
    $j(document).ready(function() {
        "use strict";
        countDown();
    })
</script>

<?php echo $footer; ?>