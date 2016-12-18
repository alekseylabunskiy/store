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

<div class="container">
    <div id="content">
        <?php echo $content_top; ?>
        <!-- title -->
        <div class="title-box">
            <h1 class="text-center text-uppercase title-under"><?php echo $heading_title; ?></h1>
        </div>
        <!-- /title -->

        <div class="masonry-css">

            <?php foreach ($categories as $category_1) { ?>
                <div class="item">
                    <h2 class="title-bottom-sm1">
                        <a class="font22 color" href="<?php echo $category_1['href']; ?>"><?php echo $category_1['name']; ?></a>
                    </h2>
                        <?php if ($category_1['children']) { ?>
                            <ul class="simple-list-underline">
                                <?php foreach ($category_1['children'] as $category_2) { ?>
                                <li><a href="<?php echo $category_2['href']; ?>"><?php echo $category_2['name']; ?></a>
                                    <?php if ($category_2['children']) { ?>
                                    <ul>
                                        <?php foreach ($category_2['children'] as $category_3) { ?>
                                        <li><a href="<?php echo $category_3['href']; ?>"><?php echo $category_3['name']; ?></a></li>
                                        <?php } ?>
                                    </ul>
                                    <?php } ?>
                                </li>
                                <?php } ?>
                            </ul>
                        <?php } ?>
                </div>
            <?php } ?>
            <div class="item">
                <h2 class="title-bottom-sm1"><a class="font22 color" href="<?php echo $account; ?>"><?php echo $text_account; ?></a></h2>
                <ul class="simple-list-underline">
                    <li><a href="<?php echo $edit; ?>"><?php echo $text_edit; ?></a></li>
                    <li><a href="<?php echo $password; ?>"><?php echo $text_password; ?></a></li>
                    <li><a href="<?php echo $address; ?>"><?php echo $text_address; ?></a></li>
                    <li><a href="<?php echo $history; ?>"><?php echo $text_history; ?></a></li>
                    <li><a href="<?php echo $download; ?>"><?php echo $text_download; ?></a></li>
                </ul>
            </div>

            <div class="item">
                <h2 class="font22 color title-bottom-sm1"><?php echo $text_information; ?></h2>
                <ul class="simple-list-underline">
                    <?php foreach ($informations as $information) { ?>
                    <li><a href="<?php echo $information['href']; ?>"><?php echo $information['title']; ?></a></li>
                    <?php } ?>
                    <li><a href="<?php echo $contact; ?>"><?php echo $text_contact; ?></a></li>
                </ul>
            </div>


            <div class="item">
                <ul class="simple-list-underline">
                    <li><a href="<?php echo $special; ?>"><?php echo $text_special; ?></a></li>
                    <li><a href="<?php echo $cart; ?>"><?php echo $text_cart; ?></a></li>
                    <li><a href="<?php echo $checkout; ?>"><?php echo $text_checkout; ?></a></li>
                    <li><a href="<?php echo $search; ?>"><?php echo $text_search; ?></a></li>
                </ul>
            </div>
      </div>

      <?php echo $content_bottom; ?>
    </div>
</div>
<?php echo $footer; ?>