<?php if ($show_title) { ?>
<h3><?php echo $heading_title; ?></h3>
<?php } ?>
<div class="row testimonials 111">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <?php $class_cols = 'col-lg-' . 12 / $num_columns . ' col-md-' . 12 / $num_columns . 'col-sm-12 col-xs-12'; ?>
        <?php $rowcounter = 0; ?>
        <div class="row testimonials">
            <?php foreach ($testimonialss as $testimonials) { ?>
            <div class="<?php echo $class_cols; ?>">
                <div class="row">
                    <?php if ($show_image) { ?>
                    <div class="col-sm-3">
                        <?php if ($testimonials['show_description']) { ?>
                        <a href="<?php echo $testimonials['href']; ?>"><img src="<?php echo $testimonials['thumb']; ?>" alt="<?php echo $testimonials['title']; ?>" title="<?php echo $testimonials['title']; ?>" class="img-thumbnail" /></a>
                        <?php } else { ?>
                        <a><img src="<?php echo $testimonials['thumb']; ?>" alt="<?php echo $testimonials['title']; ?>" title="<?php echo $testimonials['title']; ?>" class="img-thumbnail" /></a>
                        <?php } ?>
                    </div>
                    <div class="col-sm-9">
                        <?php if ($testimonials['show_description']) { ?>
                        <h4><a href="<?php echo $testimonials['href']; ?>"><?php echo $testimonials['title']; ?></a></h4>
                        <?php } else { ?>
                        <h4><a><?php echo $testimonials['title']; ?></a></h4>
                        <?php } ?>
                        <div><?php echo $testimonials['intro']; ?></div>
                    </div>
                    <?php } else { ?>
                    <div class="col-sm-12">
                        <?php if ($testimonials['show_description']) { ?>
                        <h4><a href="<?php echo $testimonials['href']; ?>"><?php echo $testimonials['title']; ?></a></h4>
                        <?php } else { ?>
                        <h4><a><?php echo $testimonials['title']; ?></a></h4>
                        <?php } ?>
                        <div><?php echo $testimonials['intro']; ?></div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <?php $rowcounter++; ?>
            <?php if ($rowcounter == $num_columns) { ?>
        </div>
        <div class="row testimonials">
            <?php $rowcounter = 0; ?>
            <?php } ?>
            <?php } ?>
        </div>
    </div>
</div>
