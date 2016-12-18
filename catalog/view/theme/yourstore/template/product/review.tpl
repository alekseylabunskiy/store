<?php if ($reviews) { ?>
<?php foreach ($reviews as $review) { ?>

<h5 class="pull-left"><strong class="color"><?php echo $review['author']; ?></strong></h5>
<p class="color-light pull-right"><?php echo $review['date_added']; ?></p>
<div class="divider divider--xs"></div>
        <p><?php echo $review['text']; ?></p>
        <div class="rating">
            <?php for ($i = 1; $i <= $review['rating']; $i++) { ?>
            <span class="icon-star"></span>
            <?php } ?>
            <?php for ($i = 1; $i <= (5 - $review['rating']); $i++) { ?>
            <span class="icon-star empty-star"></span>
            <?php } ?>
        </div>

    <?php } ?>
<div class="text-right"><?php echo $pagination; ?></div>
<?php } else { ?>
<p><?php echo $text_no_reviews; ?></p>
<?php } ?>
