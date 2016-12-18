<?php echo $header; ?><?php echo $column_left; ?>
<div id="content">
  <div class="page-header">
    <div class="container-fluid">
      <div class="pull-right">
          <button type="submit" form="form-colours" data-toggle="tooltip" title="<?php echo $button_save; ?>" class="btn btn-primary"><i class="fa fa-save"></i></button>
        <a href="<?php echo $cancel; ?>" data-toggle="tooltip" title="<?php echo $button_cancel; ?>" class="btn btn-default"><i class="fa fa-reply"></i></a></div>
      <h1><?php echo $heading_title; ?></h1>
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
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-pencil"></i> <?php echo $text_edit; ?></h3>
      </div>
      <div class="panel-body">
          <form name="settingsform" action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form-colours" class="form-horizontal">
              <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-status"><?php echo $entry_status; ?></label>
                    <div class="col-sm-10">
                          <select name="colours_status" id="input-status" class="form-control">
                            <?php if ($colours_status) { ?>
                            <option value="1" selected="selected"><?php echo $text_enabled; ?></option>
                            <option value="0"><?php echo $text_disabled; ?></option>
                            <?php } else { ?>
                            <option value="1"><?php echo $text_enabled; ?></option>
                            <option value="0" selected="selected"><?php echo $text_disabled; ?></option>
                            <?php } ?>
                          </select>
                    </div>
              </div>

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
                          <?php include('colours_stores.php'); ?>
                      </div>
                      <?php if (sizeof($stores) != 0) : ?>
                      <?php foreach ($stores as $store) : ?>
                      <div class="tab-pane" id="tab-store<?php echo $store['store_id']; ?>">
                          <?php include('colours_stores.php'); ?>
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
<script type="text/javascript">
    $(document).ready(function() {
        jQuery("#colours_store_themecolor0").ColorPicker({
            color: jQuery('#colours_store_themecolor0').val(),
            onShow: function (colpkr) {
                jQuery(colpkr).fadeIn(500);
                return false;
            },
            onHide: function (colpkr) {
                jQuery(colpkr).fadeOut(500);
                return false;
            },
            onChange: function (hsb, hex, rgb) {
                jQuery('#colours_store_themecolor0').css('backgroundColor', '#' + hex);
                jQuery('#colours_store_themecolor0').val('#' + hex);
            }
        });
        jQuery("#colours_store_sale_label_bg0").ColorPicker({
            color: jQuery("#colours_store_sale_label_bg0").val(),
            onShow: function (colpkr) {
                jQuery(colpkr).fadeIn(500);
                return false;
            },
            onHide: function (colpkr) {
                jQuery(colpkr).fadeOut(500);
                return false;
            },
            onChange: function (hsb, hex, rgb) {
                jQuery("#colours_store_sale_label_bg0").css('backgroundColor', '#' + hex);
                jQuery("#colours_store_sale_label_bg0").val('#' + hex);
            }
        });
        jQuery("#colours_store_new_label_bg0").ColorPicker({
            color: jQuery('#colours_store_new_label_bg0').val(),
            onShow: function (colpkr) {
                jQuery(colpkr).fadeIn(500);
                return false;
            },
            onHide: function (colpkr) {
                jQuery(colpkr).fadeOut(500);
                return false;
            },
            onChange: function (hsb, hex, rgb) {
                jQuery('#colours_store_new_label_bg0').css('backgroundColor', '#' + hex);
                jQuery('#colours_store_new_label_bg0').val('#' + hex);
            }
        });
        jQuery("#colours_store_qv_label_bg0").ColorPicker({
            color: jQuery('#colours_store_qv_label_bg0').val(),
            onShow: function (colpkr) {
                jQuery(colpkr).fadeIn(500);
                return false;
            },
            onHide: function (colpkr) {
                jQuery(colpkr).fadeOut(500);
                return false;
            },
            onChange: function (hsb, hex, rgb) {
                jQuery('#colours_store_qv_label_bg0').css('backgroundColor', '#' + hex);
                jQuery('#colours_store_qv_label_bg0').val('#' + hex);
            }
        });
        jQuery("#colours_store_loader0").ColorPicker({
            color: jQuery('#colours_store_loader0').val(),
            onShow: function (colpkr) {
                jQuery(colpkr).fadeIn(500);
                return false;
            },
            onHide: function (colpkr) {
                jQuery(colpkr).fadeOut(500);
                return false;
            },
            onChange: function (hsb, hex, rgb) {
                jQuery('#colours_store_loader0').css('backgroundColor', '#' + hex);
                jQuery('#colours_store_loader0').val('#' + hex);
            }
        });
        /*header, footer, content*/
        jQuery("#colours_store_h_text0").ColorPicker({
            color: jQuery('#colours_store_h_text0').val(),
            onShow: function (colpkr) {
                jQuery(colpkr).fadeIn(500);
                return false;
            },
            onHide: function (colpkr) {
                jQuery(colpkr).fadeOut(500);
                return false;
            },
            onChange: function (hsb, hex, rgb) {
                jQuery('#colours_store_h_text0').css('backgroundColor', '#' + hex);
                jQuery('#colours_store_h_text0').val('#' + hex);
            }
        });
        jQuery("#colours_store_h_link0").ColorPicker({
            color: jQuery('#colours_store_h_link0').val(),
            onShow: function (colpkr) {
                jQuery(colpkr).fadeIn(500);
                return false;
            },
            onHide: function (colpkr) {
                jQuery(colpkr).fadeOut(500);
                return false;
            },
            onChange: function (hsb, hex, rgb) {
                jQuery('#colours_store_h_link0').css('backgroundColor', '#' + hex);
                jQuery('#colours_store_h_link0').val('#' + hex);
            }
        });
        jQuery("#colours_store_h_icon0").ColorPicker({
            color: jQuery('#colours_store_h_icon0').val(),
            onShow: function (colpkr) {
                jQuery(colpkr).fadeIn(500);
                return false;
            },
            onHide: function (colpkr) {
                jQuery(colpkr).fadeOut(500);
                return false;
            },
            onChange: function (hsb, hex, rgb) {
                jQuery('#colours_store_h_icon0').css('backgroundColor', '#' + hex);
                jQuery('#colours_store_h_icon0').val('#' + hex);
            }
        });
        jQuery("#colours_store_tm_item0").ColorPicker({
            color: jQuery('#colours_store_tm_item0').val(),
            onShow: function (colpkr) {
                jQuery(colpkr).fadeIn(500);
                return false;
            },
            onHide: function (colpkr) {
                jQuery(colpkr).fadeOut(500);
                return false;
            },
            onChange: function (hsb, hex, rgb) {
                jQuery('#colours_store_tm_item0').css('backgroundColor', '#' + hex);
                jQuery('#colours_store_tm_item0').val('#' + hex);
            }
        });
        jQuery("#colours_store_tm_line0").ColorPicker({
            color: jQuery('#colours_store_tm_line0').val(),
            onShow: function (colpkr) {
                jQuery(colpkr).fadeIn(500);
                return false;
            },
            onHide: function (colpkr) {
                jQuery(colpkr).fadeOut(500);
                return false;
            },
            onChange: function (hsb, hex, rgb) {
                jQuery('#colours_store_tm_line0').css('backgroundColor', '#' + hex);
                jQuery('#colours_store_tm_line0').val('#' + hex);
            }
        });
        jQuery("#colours_store_f_text0").ColorPicker({
            color: jQuery('#colours_store_f_text0').val(),
            onShow: function (colpkr) {
                jQuery(colpkr).fadeIn(500);
                return false;
            },
            onHide: function (colpkr) {
                jQuery(colpkr).fadeOut(500);
                return false;
            },
            onChange: function (hsb, hex, rgb) {
                jQuery('#colours_store_f_text0').css('backgroundColor', '#' + hex);
                jQuery('#colours_store_f_text0').val('#' + hex);
            }
        });
        jQuery("#colours_store_f_link0").ColorPicker({
            color: jQuery('#colours_store_f_link0').val(),
            onShow: function (colpkr) {
                jQuery(colpkr).fadeIn(500);
                return false;
            },
            onHide: function (colpkr) {
                jQuery(colpkr).fadeOut(500);
                return false;
            },
            onChange: function (hsb, hex, rgb) {
                jQuery('#colours_store_f_link0').css('backgroundColor', '#' + hex);
                jQuery('#colours_store_f_link0').val('#' + hex);
            }
        });
        jQuery("#colours_store_f_icon0").ColorPicker({
            color: jQuery('#colours_store_f_icon0').val(),
            onShow: function (colpkr) {
                jQuery(colpkr).fadeIn(500);
                return false;
            },
            onHide: function (colpkr) {
                jQuery(colpkr).fadeOut(500);
                return false;
            },
            onChange: function (hsb, hex, rgb) {
                jQuery('#colours_store_f_icon0').css('backgroundColor', '#' + hex);
                jQuery('#colours_store_f_icon0').val('#' + hex);
            }
        });
        jQuery("#colours_store_t_border0").ColorPicker({
            color: jQuery('#colours_store_t_border0').val(),
            onShow: function (colpkr) {
                jQuery(colpkr).fadeIn(500);
                return false;
            },
            onHide: function (colpkr) {
                jQuery(colpkr).fadeOut(500);
                return false;
            },
            onChange: function (hsb, hex, rgb) {
                jQuery('#colours_store_t_border0').css('backgroundColor', '#' + hex);
                jQuery('#colours_store_t_border0').val('#' + hex);
            }
        });
        jQuery("#colours_store_t_color0").ColorPicker({
            color: jQuery('#colours_store_t_color0').val(),
            onShow: function (colpkr) {
                jQuery(colpkr).fadeIn(500);
                return false;
            },
            onHide: function (colpkr) {
                jQuery(colpkr).fadeOut(500);
                return false;
            },
            onChange: function (hsb, hex, rgb) {
                jQuery('#colours_store_t_color0').css('backgroundColor', '#' + hex);
                jQuery('#colours_store_t_color0').val('#' + hex);
            }
        });
        jQuery("#colours_store_price_cur0").ColorPicker({
            color: jQuery('#colours_store_price_cur0').val(),
            onShow: function (colpkr) {
                jQuery(colpkr).fadeIn(500);
                return false;
            },
            onHide: function (colpkr) {
                jQuery(colpkr).fadeOut(500);
                return false;
            },
            onChange: function (hsb, hex, rgb) {
                jQuery('#colours_store_price_cur0').css('backgroundColor', '#' + hex);
                jQuery('#colours_store_price_cur0').val('#' + hex);
            }
        });
        jQuery("#colours_store_price_old0").ColorPicker({
            color: jQuery('#colours_store_price_old0').val(),
            onShow: function (colpkr) {
                jQuery(colpkr).fadeIn(500);
                return false;
            },
            onHide: function (colpkr) {
                jQuery(colpkr).fadeOut(500);
                return false;
            },
            onChange: function (hsb, hex, rgb) {
                jQuery('#colours_store_price_old0').css('backgroundColor', '#' + hex);
                jQuery('#colours_store_price_old0').val('#' + hex);
            }
        });
        jQuery("#colours_store_bc_icon0").ColorPicker({
            color: jQuery('#colours_store_bc_icon0').val(),
            onShow: function (colpkr) {
                jQuery(colpkr).fadeIn(500);
                return false;
            },
            onHide: function (colpkr) {
                jQuery(colpkr).fadeOut(500);
                return false;
            },
            onChange: function (hsb, hex, rgb) {
                jQuery('#colours_store_bc_icon0').css('backgroundColor', '#' + hex);
                jQuery('#colours_store_bc_icon0').val('#' + hex);
            }
        });
        jQuery("#colours_store_bc_color0").ColorPicker({
            color: jQuery('#colours_store_bc_color0').val(),
            onShow: function (colpkr) {
                jQuery(colpkr).fadeIn(500);
                return false;
            },
            onHide: function (colpkr) {
                jQuery(colpkr).fadeOut(500);
                return false;
            },
            onChange: function (hsb, hex, rgb) {
                jQuery('#colours_store_bc_color0').css('backgroundColor', '#' + hex);
                jQuery('#colours_store_bc_color0').val('#' + hex);
            }
        });
        jQuery("#colours_store_c_text0").ColorPicker({
            color: jQuery('#colours_store_c_text0').val(),
            onShow: function (colpkr) {
                jQuery(colpkr).fadeIn(500);
                return false;
            },
            onHide: function (colpkr) {
                jQuery(colpkr).fadeOut(500);
                return false;
            },
            onChange: function (hsb, hex, rgb) {
                jQuery('#colours_store_c_text0').css('backgroundColor', '#' + hex);
                jQuery('#colours_store_c_text0').val('#' + hex);
            }
        });
        jQuery("#colours_store_c_link0").ColorPicker({
            color: jQuery('#colours_store_c_link0').val(),
            onShow: function (colpkr) {
                jQuery(colpkr).fadeIn(500);
                return false;
            },
            onHide: function (colpkr) {
                jQuery(colpkr).fadeOut(500);
                return false;
            },
            onChange: function (hsb, hex, rgb) {
                jQuery('#colours_store_c_link0').css('backgroundColor', '#' + hex);
                jQuery('#colours_store_c_link0').val('#' + hex);
            }
        });
        jQuery("#colours_store_cart_bg0").ColorPicker({
            color: jQuery('#colours_store_cart_bg0').val(),
            onShow: function (colpkr) {
                jQuery(colpkr).fadeIn(500);
                return false;
            },
            onHide: function (colpkr) {
                jQuery(colpkr).fadeOut(500);
                return false;
            },
            onChange: function (hsb, hex, rgb) {
                jQuery('#colours_store_cart_bg0').css('backgroundColor', '#' + hex);
                jQuery('#colours_store_cart_bg0').val('#' + hex);
            }
        });

        /*//header, footer, content*/




        jQuery("#colours_store_btn_bg0").ColorPicker({
            color: jQuery('#colours_store_btn_bg0').val(),
            onShow: function (colpkr) {
                jQuery(colpkr).fadeIn(500);
                return false;
            },
            onHide: function (colpkr) {
                jQuery(colpkr).fadeOut(500);
                return false;
            },
            onChange: function (hsb, hex, rgb) {
                jQuery('#colours_store_btn_bg0').css('backgroundColor', '#' + hex);
                jQuery('#colours_store_btn_bg0').val('#' + hex);
            }
        });
        jQuery("#colours_store_btn_color0").ColorPicker({
            color: jQuery('#colours_store_btn_color0').val(),
            onShow: function (colpkr) {
                jQuery(colpkr).fadeIn(500);
                return false;
            },
            onHide: function (colpkr) {
                jQuery(colpkr).fadeOut(500);
                return false;
            },
            onChange: function (hsb, hex, rgb) {
                jQuery('#colours_store_btn_color0').css('backgroundColor', '#' + hex);
                jQuery('#colours_store_btn_color0').val('#' + hex);
            }
        });
        jQuery("#colours_store_cd_bg0").ColorPicker({
            color: jQuery('#colours_store_cd_bg0').val(),
            onShow: function (colpkr) {
                jQuery(colpkr).fadeIn(500);
                return false;
            },
            onHide: function (colpkr) {
                jQuery(colpkr).fadeOut(500);
                return false;
            },
            onChange: function (hsb, hex, rgb) {
                jQuery('#colours_store_cd_bg0').css('backgroundColor', '#' + hex);
                jQuery('#colours_store_cd_bg0').val('#' + hex);
            }
        });
        jQuery("#colours_store_cd_color0").ColorPicker({
            color: jQuery('#colours_store_cd_color0').val(),
            onShow: function (colpkr) {
                jQuery(colpkr).fadeIn(500);
                return false;
            },
            onHide: function (colpkr) {
                jQuery(colpkr).fadeOut(500);
                return false;
            },
            onChange: function (hsb, hex, rgb) {
                jQuery('#colours_store_cd_color0').css('backgroundColor', '#' + hex);
                jQuery('#colours_store_cd_color0').val('#' + hex);
            }
        });
        jQuery("#colours_store_btn_top0").ColorPicker({
            color: jQuery('#colours_store_btn_top0').val(),
            onShow: function (colpkr) {
                jQuery(colpkr).fadeIn(500);
                return false;
            },
            onHide: function (colpkr) {
                jQuery(colpkr).fadeOut(500);
                return false;
            },
            onChange: function (hsb, hex, rgb) {
                jQuery('#colours_store_btn_top0').css('backgroundColor', '#' + hex);
                jQuery('#colours_store_btn_top0').val('#' + hex);
            }
        });
        jQuery("#colours_store_insta_bg0").ColorPicker({
            color: jQuery('#colours_store_insta_bg0').val(),
            onShow: function (colpkr) {
                jQuery(colpkr).fadeIn(500);
                return false;
            },
            onHide: function (colpkr) {
                jQuery(colpkr).fadeOut(500);
                return false;
            },
            onChange: function (hsb, hex, rgb) {
                jQuery('#colours_store_insta_bg0').css('backgroundColor', '#' + hex);
                jQuery('#colours_store_insta_bg0').val('#' + hex);
            }
        });




        /* stores */
        <?php if (sizeof($stores) != 0) : ?>
        <?php foreach ($stores as $store) : ?>

            jQuery("#colours_store_themecolor<?php echo $store['store_id']; ?>").ColorPicker({
                color: jQuery('#colours_store_themecolor<?php echo $store['store_id']; ?>').val(),
                    onShow: function (colpkr) {
                jQuery(colpkr).fadeIn(500);
                return false;
            },
            onHide: function (colpkr) {
                jQuery(colpkr).fadeOut(500);
                return false;
            },
            onChange: function (hsb, hex, rgb) {
                jQuery('#colours_store_themecolor<?php echo $store['store_id']; ?>').css('backgroundColor', '#' + hex);
                jQuery('#colours_store_themecolor<?php echo $store['store_id']; ?>').val('#' + hex);
            }
            });


    jQuery("#colours_store_sale_label_bg<?php echo $store['store_id']; ?>").ColorPicker({
        color: jQuery("#colours_store_sale_label_bg<?php echo $store['store_id']; ?>").val(),
        onShow: function (colpkr) {
            jQuery(colpkr).fadeIn(500);
            return false;
        },
        onHide: function (colpkr) {
            jQuery(colpkr).fadeOut(500);
            return false;
        },
        onChange: function (hsb, hex, rgb) {
            jQuery("#colours_store_sale_label_bg<?php echo $store['store_id']; ?>").css('backgroundColor', '#' + hex);
            jQuery("#colours_store_sale_label_bg<?php echo $store['store_id']; ?>").val('#' + hex);
        }
    });

    jQuery("#colours_store_new_label_bg<?php echo $store['store_id']; ?>").ColorPicker({
        color: jQuery('#colours_store_new_label_bg<?php echo $store['store_id']; ?>').val(),
            onShow: function (colpkr) {
        jQuery(colpkr).fadeIn(500);
        return false;
    },
    onHide: function (colpkr) {
        jQuery(colpkr).fadeOut(500);
        return false;
    },
    onChange: function (hsb, hex, rgb) {
        jQuery('#colours_store_new_label_bg<?php echo $store['store_id']; ?>').css('backgroundColor', '#' + hex);
        jQuery('#colours_store_new_label_bg<?php echo $store['store_id']; ?>').val('#' + hex);
    }
    });
    jQuery("#colours_store_qv_label_bg<?php echo $store['store_id']; ?>").ColorPicker({
        color: jQuery('#colours_store_qv_label_bg<?php echo $store['store_id']; ?>').val(),
            onShow: function (colpkr) {
        jQuery(colpkr).fadeIn(500);
        return false;
    },
    onHide: function (colpkr) {
        jQuery(colpkr).fadeOut(500);
        return false;
    },
    onChange: function (hsb, hex, rgb) {
        jQuery('#colours_store_qv_label_bg<?php echo $store['store_id']; ?>').css('backgroundColor', '#' + hex);
        jQuery('#colours_store_qv_label_bg<?php echo $store['store_id']; ?>').val('#' + hex);
    }
    });
    jQuery("#colours_store_btn_bg<?php echo $store['store_id']; ?>").ColorPicker({
        color: jQuery('#colours_store_btn_bg<?php echo $store['store_id']; ?>').val(),
            onShow: function (colpkr) {
        jQuery(colpkr).fadeIn(500);
        return false;
    },
    onHide: function (colpkr) {
        jQuery(colpkr).fadeOut(500);
        return false;
    },
    onChange: function (hsb, hex, rgb) {
        jQuery('#colours_store_btn_bg<?php echo $store['store_id']; ?>').css('backgroundColor', '#' + hex);
        jQuery('#colours_store_btn_bg<?php echo $store['store_id']; ?>').val('#' + hex);
    }
    });
    jQuery("#colours_store_btn_color<?php echo $store['store_id']; ?>").ColorPicker({
        color: jQuery('#colours_store_btn_color<?php echo $store['store_id']; ?>').val(),
            onShow: function (colpkr) {
        jQuery(colpkr).fadeIn(500);
        return false;
    },
    onHide: function (colpkr) {
        jQuery(colpkr).fadeOut(500);
        return false;
    },
    onChange: function (hsb, hex, rgb) {
        jQuery('#colours_store_btn_color<?php echo $store['store_id']; ?>').css('backgroundColor', '#' + hex);
        jQuery('#colours_store_btn_color<?php echo $store['store_id']; ?>').val('#' + hex);
    }
    });
    jQuery("#colours_store_cd_bg<?php echo $store['store_id']; ?>").ColorPicker({
        color: jQuery('#colours_store_cd_bg<?php echo $store['store_id']; ?>').val(),
            onShow: function (colpkr) {
        jQuery(colpkr).fadeIn(500);
        return false;
    },
    onHide: function (colpkr) {
        jQuery(colpkr).fadeOut(500);
        return false;
    },
    onChange: function (hsb, hex, rgb) {
        jQuery('#colours_store_cd_bg<?php echo $store['store_id']; ?>').css('backgroundColor', '#' + hex);
        jQuery('#colours_store_cd_bg<?php echo $store['store_id']; ?>').val('#' + hex);
    }
    });

    jQuery("#colours_store_cd_color<?php echo $store['store_id']; ?>").ColorPicker({
        color: jQuery('#colours_store_cd_color<?php echo $store['store_id']; ?>').val(),
            onShow: function (colpkr) {
        jQuery(colpkr).fadeIn(500);
        return false;
    },
    onHide: function (colpkr) {
        jQuery(colpkr).fadeOut(500);
        return false;
    },
    onChange: function (hsb, hex, rgb) {
        jQuery('#colours_store_cd_color<?php echo $store['store_id']; ?>').css('backgroundColor', '#' + hex);
        jQuery('#colours_store_cd_color<?php echo $store['store_id']; ?>').val('#' + hex);
    }
    });

    jQuery("#colours_store_btn_top<?php echo $store['store_id']; ?>").ColorPicker({
        color: jQuery('#colours_store_btn_top<?php echo $store['store_id']; ?>').val(),
            onShow: function (colpkr) {
        jQuery(colpkr).fadeIn(500);
        return false;
    },
    onHide: function (colpkr) {
        jQuery(colpkr).fadeOut(500);
        return false;
    },
    onChange: function (hsb, hex, rgb) {
        jQuery('#colours_store_btn_top<?php echo $store['store_id']; ?>').css('backgroundColor', '#' + hex);
        jQuery('#colours_store_btn_top<?php echo $store['store_id']; ?>').val('#' + hex);
    }
    });

    jQuery("#colours_store_insta_bg<?php echo $store['store_id']; ?>").ColorPicker({
        color: jQuery('#colours_store_insta_bg<?php echo $store['store_id']; ?>').val(),
            onShow: function (colpkr) {
        jQuery(colpkr).fadeIn(500);
        return false;
    },
    onHide: function (colpkr) {
        jQuery(colpkr).fadeOut(500);
        return false;
    },
    onChange: function (hsb, hex, rgb) {
        jQuery('#colours_store_insta_bg<?php echo $store['store_id']; ?>').css('backgroundColor', '#' + hex);
        jQuery('#colours_store_insta_bg<?php echo $store['store_id']; ?>').val('#' + hex);
    }
    });
    jQuery("#colours_store_loader<?php echo $store['store_id']; ?>").ColorPicker({
        color: jQuery('#colours_store_loader<?php echo $store['store_id']; ?>').val(),
            onShow: function (colpkr) {
        jQuery(colpkr).fadeIn(500);
        return false;
    },
    onHide: function (colpkr) {
        jQuery(colpkr).fadeOut(500);
        return false;
    },
    onChange: function (hsb, hex, rgb) {
        jQuery('#colours_store_loader<?php echo $store['store_id']; ?>').css('backgroundColor', '#' + hex);
        jQuery('#colours_store_loader<?php echo $store['store_id']; ?>').val('#' + hex);
    }
    });


    /*header, footer, content*/
    jQuery("#colours_store_h_text<?php echo $store['store_id']; ?>").ColorPicker({
        color: jQuery('#colours_store_h_text<?php echo $store['store_id']; ?>').val(),
            onShow: function (colpkr) {
        jQuery(colpkr).fadeIn(500);
        return false;
    },
    onHide: function (colpkr) {
        jQuery(colpkr).fadeOut(500);
        return false;
    },
    onChange: function (hsb, hex, rgb) {
        jQuery('#colours_store_h_text<?php echo $store['store_id']; ?>').css('backgroundColor', '#' + hex);
        jQuery('#colours_store_h_text<?php echo $store['store_id']; ?>').val('#' + hex);
    }
    });

    jQuery("#colours_store_h_link<?php echo $store['store_id']; ?>").ColorPicker({
        color: jQuery('#colours_store_h_link<?php echo $store['store_id']; ?>').val(),
            onShow: function (colpkr) {
        jQuery(colpkr).fadeIn(500);
        return false;
    },
    onHide: function (colpkr) {
        jQuery(colpkr).fadeOut(500);
        return false;
    },
    onChange: function (hsb, hex, rgb) {
        jQuery('#colours_store_h_link<?php echo $store['store_id']; ?>').css('backgroundColor', '#' + hex);
        jQuery('#colours_store_h_link<?php echo $store['store_id']; ?>').val('#' + hex);
    }
    });

    jQuery("#colours_store_h_icon<?php echo $store['store_id']; ?>").ColorPicker({
        color: jQuery('#colours_store_h_icon<?php echo $store['store_id']; ?>').val(),
            onShow: function (colpkr) {
        jQuery(colpkr).fadeIn(500);
        return false;
    },
    onHide: function (colpkr) {
        jQuery(colpkr).fadeOut(500);
        return false;
    },
    onChange: function (hsb, hex, rgb) {
        jQuery('#colours_store_h_icon<?php echo $store['store_id']; ?>').css('backgroundColor', '#' + hex);
        jQuery('#colours_store_h_icon<?php echo $store['store_id']; ?>').val('#' + hex);
    }
    });

    jQuery("#colours_store_tm_item<?php echo $store['store_id']; ?>").ColorPicker({
        color: jQuery('#colours_store_tm_item<?php echo $store['store_id']; ?>').val(),
            onShow: function (colpkr) {
        jQuery(colpkr).fadeIn(500);
        return false;
    },
    onHide: function (colpkr) {
        jQuery(colpkr).fadeOut(500);
        return false;
    },
    onChange: function (hsb, hex, rgb) {
        jQuery('#colours_store_tm_item<?php echo $store['store_id']; ?>').css('backgroundColor', '#' + hex);
        jQuery('#colours_store_tm_item<?php echo $store['store_id']; ?>').val('#' + hex);
    }
    });

    jQuery("#colours_store_tm_line<?php echo $store['store_id']; ?>").ColorPicker({
        color: jQuery('#colours_store_tm_line<?php echo $store['store_id']; ?>').val(),
            onShow: function (colpkr) {
        jQuery(colpkr).fadeIn(500);
        return false;
    },
    onHide: function (colpkr) {
        jQuery(colpkr).fadeOut(500);
        return false;
    },
    onChange: function (hsb, hex, rgb) {
        jQuery('#colours_store_tm_line<?php echo $store['store_id']; ?>').css('backgroundColor', '#' + hex);
        jQuery('#colours_store_tm_line<?php echo $store['store_id']; ?>').val('#' + hex);
    }
    });

    jQuery("#colours_store_f_text<?php echo $store['store_id']; ?>").ColorPicker({
        color: jQuery('#colours_store_f_text<?php echo $store['store_id']; ?>').val(),
            onShow: function (colpkr) {
        jQuery(colpkr).fadeIn(500);
        return false;
    },
    onHide: function (colpkr) {
        jQuery(colpkr).fadeOut(500);
        return false;
    },
    onChange: function (hsb, hex, rgb) {
        jQuery('#colours_store_f_text<?php echo $store['store_id']; ?>').css('backgroundColor', '#' + hex);
        jQuery('#colours_store_f_text<?php echo $store['store_id']; ?>').val('#' + hex);
    }
    });

    jQuery("#colours_store_f_link<?php echo $store['store_id']; ?>").ColorPicker({
        color: jQuery('#colours_store_f_link<?php echo $store['store_id']; ?>').val(),
            onShow: function (colpkr) {
        jQuery(colpkr).fadeIn(500);
        return false;
    },
    onHide: function (colpkr) {
        jQuery(colpkr).fadeOut(500);
        return false;
    },
    onChange: function (hsb, hex, rgb) {
        jQuery('#colours_store_f_link<?php echo $store['store_id']; ?>').css('backgroundColor', '#' + hex);
        jQuery('#colours_store_f_link<?php echo $store['store_id']; ?>').val('#' + hex);
    }
    });

    jQuery("#colours_store_f_icon<?php echo $store['store_id']; ?>").ColorPicker({
        color: jQuery('#colours_store_f_icon<?php echo $store['store_id']; ?>').val(),
            onShow: function (colpkr) {
        jQuery(colpkr).fadeIn(500);
        return false;
    },
    onHide: function (colpkr) {
        jQuery(colpkr).fadeOut(500);
        return false;
    },
    onChange: function (hsb, hex, rgb) {
        jQuery('#colours_store_f_icon<?php echo $store['store_id']; ?>').css('backgroundColor', '#' + hex);
        jQuery('#colours_store_f_icon<?php echo $store['store_id']; ?>').val('#' + hex);
    }
    });

    jQuery("#colours_store_t_border<?php echo $store['store_id']; ?>").ColorPicker({
        color: jQuery('#colours_store_t_border<?php echo $store['store_id']; ?>').val(),
            onShow: function (colpkr) {
        jQuery(colpkr).fadeIn(500);
        return false;
    },
    onHide: function (colpkr) {
        jQuery(colpkr).fadeOut(500);
        return false;
    },
    onChange: function (hsb, hex, rgb) {
        jQuery('#colours_store_t_border<?php echo $store['store_id']; ?>').css('backgroundColor', '#' + hex);
        jQuery('#colours_store_t_border<?php echo $store['store_id']; ?>').val('#' + hex);
    }
    });

    jQuery("#colours_store_t_color<?php echo $store['store_id']; ?>").ColorPicker({
        color: jQuery('#colours_store_t_color<?php echo $store['store_id']; ?>').val(),
            onShow: function (colpkr) {
        jQuery(colpkr).fadeIn(500);
        return false;
    },
    onHide: function (colpkr) {
        jQuery(colpkr).fadeOut(500);
        return false;
    },
    onChange: function (hsb, hex, rgb) {
        jQuery('#colours_store_t_color<?php echo $store['store_id']; ?>').css('backgroundColor', '#' + hex);
        jQuery('#colours_store_t_color<?php echo $store['store_id']; ?>').val('#' + hex);
    }
    });
    jQuery("#colours_store_price_cur<?php echo $store['store_id']; ?>").ColorPicker({
        color: jQuery('#colours_store_price_cur<?php echo $store['store_id']; ?>').val(),
            onShow: function (colpkr) {
        jQuery(colpkr).fadeIn(500);
        return false;
    },
    onHide: function (colpkr) {
        jQuery(colpkr).fadeOut(500);
        return false;
    },
    onChange: function (hsb, hex, rgb) {
        jQuery('#colours_store_price_cur<?php echo $store['store_id']; ?>').css('backgroundColor', '#' + hex);
        jQuery('#colours_store_price_cur<?php echo $store['store_id']; ?>').val('#' + hex);
    }
    });

    jQuery("#colours_store_price_old<?php echo $store['store_id']; ?>").ColorPicker({
        color: jQuery('#colours_store_price_old<?php echo $store['store_id']; ?>').val(),
            onShow: function (colpkr) {
        jQuery(colpkr).fadeIn(500);
        return false;
    },
    onHide: function (colpkr) {
        jQuery(colpkr).fadeOut(500);
        return false;
    },
    onChange: function (hsb, hex, rgb) {
        jQuery('#colours_store_price_old<?php echo $store['store_id']; ?>').css('backgroundColor', '#' + hex);
        jQuery('#colours_store_price_old<?php echo $store['store_id']; ?>').val('#' + hex);
    }
    });

    jQuery("#colours_store_bc_icon<?php echo $store['store_id']; ?>").ColorPicker({
        color: jQuery('#colours_store_bc_icon<?php echo $store['store_id']; ?>').val(),
            onShow: function (colpkr) {
        jQuery(colpkr).fadeIn(500);
        return false;
    },
    onHide: function (colpkr) {
        jQuery(colpkr).fadeOut(500);
        return false;
    },
    onChange: function (hsb, hex, rgb) {
        jQuery('#colours_store_bc_icon<?php echo $store['store_id']; ?>').css('backgroundColor', '#' + hex);
        jQuery('#colours_store_bc_icon<?php echo $store['store_id']; ?>').val('#' + hex);
    }
    });

    jQuery("#colours_store_bc_color<?php echo $store['store_id']; ?>").ColorPicker({
        color: jQuery('#colours_store_bc_color<?php echo $store['store_id']; ?>').val(),
            onShow: function (colpkr) {
        jQuery(colpkr).fadeIn(500);
        return false;
    },
    onHide: function (colpkr) {
        jQuery(colpkr).fadeOut(500);
        return false;
    },
    onChange: function (hsb, hex, rgb) {
        jQuery('#colours_store_bc_color<?php echo $store['store_id']; ?>').css('backgroundColor', '#' + hex);
        jQuery('#colours_store_bc_color<?php echo $store['store_id']; ?>').val('#' + hex);
    }
    });

    jQuery("#colours_store_c_text<?php echo $store['store_id']; ?>").ColorPicker({
        color: jQuery('#colours_store_c_text<?php echo $store['store_id']; ?>').val(),
            onShow: function (colpkr) {
        jQuery(colpkr).fadeIn(500);
        return false;
    },
    onHide: function (colpkr) {
        jQuery(colpkr).fadeOut(500);
        return false;
    },
    onChange: function (hsb, hex, rgb) {
        jQuery('#colours_store_c_text<?php echo $store['store_id']; ?>').css('backgroundColor', '#' + hex);
        jQuery('#colours_store_c_text<?php echo $store['store_id']; ?>').val('#' + hex);
    }
    });

    jQuery("#colours_store_c_link<?php echo $store['store_id']; ?>").ColorPicker({
        color: jQuery('#colours_store_c_link<?php echo $store['store_id']; ?>').val(),
            onShow: function (colpkr) {
        jQuery(colpkr).fadeIn(500);
        return false;
    },
    onHide: function (colpkr) {
        jQuery(colpkr).fadeOut(500);
        return false;
    },
    onChange: function (hsb, hex, rgb) {
        jQuery('#colours_store_c_link<?php echo $store['store_id']; ?>').css('backgroundColor', '#' + hex);
        jQuery('#colours_store_c_link<?php echo $store['store_id']; ?>').val('#' + hex);
    }
    });
    jQuery("#colours_store_cart_bg<?php echo $store['store_id']; ?>").ColorPicker({
        color: jQuery('#colours_store_cart_bg<?php echo $store['store_id']; ?>').val(),
            onShow: function (colpkr) {
        jQuery(colpkr).fadeIn(500);
        return false;
    },
    onHide: function (colpkr) {
        jQuery(colpkr).fadeOut(500);
        return false;
    },
    onChange: function (hsb, hex, rgb) {
        jQuery('#colours_store_cart_bg<?php echo $store['store_id']; ?>').css('backgroundColor', '#' + hex);
        jQuery('#colours_store_cart_bg<?php echo $store['store_id']; ?>').val('#' + hex);
    }
    });


    /*//header, footer, content*/


    <?php endforeach; ?>
    <?php endif; ?>

    /* end stores */

    });
</script>

<?php echo $footer; ?>