<?php echo $header; ?><?php echo $column_left; ?>
<div id="content">
    <div class="page-header">
        <div class="container-fluid">
            <div class="pull-right">

                <button type="submit" form="form-theme" data-toggle="tooltip" title="<?php echo $button_save; ?>" class="btn btn-primary"><i class="fa fa-save"></i></button>
                <a href="<?php echo $cancel; ?>" data-toggle="tooltip" title="<?php echo $button_cancel; ?>" class="btn btn-default"><i class="fa fa-reply"></i></a></div>
                <h1>YOURSTORE CONFIGURATION</h1>
                <ul class="breadcrumb">
                    <?php foreach ($breadcrumbs as $breadcrumb) { ?>
                    <li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
                    <?php } ?>
                </ul>
        </div>
    </div>

    <div class="container-fluid">
        <?php if ($error_warning) { ?>
        <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error_warning; ?>
            <button type="button" class="close" data-dismiss="alert">&times;</button>
        </div>
        <?php } ?>
        <?php if ($success) { ?>
        <div class="alert alert-success"><i class="fa fa-check-circle"></i> <?php echo $success; ?>
            <button type="button" class="close" data-dismiss="alert">&times;</button>
        </div>
        <?php } ?>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-pencil"></i> <?php echo $text_edit; ?></h3>
                <a class="products_button" href="<?php echo $mproduct; ?>">Additional Products Options</a>
                <a class="products_button" href="<?php echo $mcategory; ?>">Additional Categories Options</a>
            </div>
            <div class="panel-body">
                <form name="settingsform" action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form-theme" class="form-horizontal">

                <div class="form-horizontal row">
                    <ul class="nav nav-tabs main_tabs_vertical store_tabs col-sm-2">
                        <li class="active"><a href="#tab-store0" data-toggle="tab">Default Store</a></li>
                        <?php if (sizeof($stores) != 0) : ?>
                            <?php foreach ($stores as $store) : ?>
                                <li><a href="#tab-store<?php echo $store['store_id']; ?>" data-toggle="tab"><?php echo $store["name"]; ?></a></li>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </ul>
                    <div class="tab-content col-sm-10">
                        <div class="tab-pane active" id="tab-store0">
                            <?php $store["store_id"] = 0; ?>
                            <?php include('options_stores.php'); ?>
                        </div>
                        <?php if (sizeof($stores) != 0) : ?>
                            <?php foreach ($stores as $store) : ?>
                                <div class="tab-pane" id="tab-store<?php echo $store['store_id']; ?>">
                                    <?php include('options_stores.php'); ?>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>

                </div>


                <input type="hidden" name="buttonForm" value="" />
                </form>


            </div>
        </div>

    </div>

</div>

<script type="text/javascript" src="view/javascript/theme/summernote.js"></script>
<link href="view/javascript/summernote/summernote.css" rel="stylesheet" />
<script type="text/javascript" src="view/javascript/summernote/opencart.js"></script>

<script type="text/javascript"><!--
jQuery(document).ready(function(){

    //set active header, footer, layout type
    jQuery(function() {
        var $radios = jQuery('#customisation_general_store_headertype_container0 input:radio');

        if($radios.is(':checked') === false) {
            $radios.filter('[value="<?php echo $customisation_general_store['headertype'][0]; ?>"]').attr('checked', true);
        }
    });
    jQuery(function() {
        var $radios = jQuery('#customisation_general_store_footertype_container0 input:radio');

        if($radios.is(':checked') === false) {
            $radios.filter('[value="<?php echo $customisation_general_store['footertype'][0]; ?>"]').attr('checked', true);
        }
    });


    /* end initialisation of store 0 default */

    /* stores */
    <?php if (sizeof($stores) != 0) : ?>



    <?php
            foreach ($stores as $store) :
    $store_id = $store['store_id'];
    ?>


    /**************************************************** initialisation for multistore options begin */
    jQuery(function() {
        var $radios = jQuery('#customisation_general_store_headertype_container<?php echo $store_id; ?> input:radio');
        if($radios.is(':checked') === false) {
            $radios.filter('[value="<?php echo $customisation_general_store['headertype'][$store_id]; ?>"]').attr('checked', true);
        }
    });
    jQuery(function() {
        var $radios = jQuery('#customisation_general_store_footertype_container<?php echo $store_id; ?> input:radio');
        if($radios.is(':checked') === false) {
            $radios.filter('[value="<?php echo $customisation_general_store['footertype'][$store_id]; ?>"]').attr('checked', true);
        }
    });

    /* end initialisation for multstore options begin */

    <?php endforeach; ?>
    <?php endif; ?>

    /* end stores */





});



function buttonApply() {document.settingsform.buttonForm.value='apply';$('#form-theme').submit();}



//--></script>


<?php echo $footer; ?>