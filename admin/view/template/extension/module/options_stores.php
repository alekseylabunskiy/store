<ul class="nav nav-tabs main_tabs">
    <li class="active"><a href="#tab-general<?php echo $store['store_id']; ?>" data-toggle="tab">Layout</a></li>
    <li><a href="#tab-products<?php echo $store['store_id']; ?>" data-toggle="tab">Products / Listings</a></li>
</ul>
<div class="tab-content">
    <!-------------------------------------tab General---------------------------------->
    <div class="tab-pane active" id="tab-general<?php echo $store['store_id']; ?>">
        <ul class="nav nav-tabs col-sm-3 main_tabs_vertical">
            <li class="active"><a href="#tab-general-layout1-<?php echo $store['store_id']; ?>" class="selected" data-toggle="tab">General</a></li>

            <li><a href="#tab-general-layout2-1-<?php echo $store['store_id']; ?>" data-toggle="tab">Header / Top Menu</a></li>
            <li><a href="#tab-general-layout2-2-<?php echo $store['store_id']; ?>" data-toggle="tab">Footer / Newsletter</a></li>


            <li><a href="#tab-general-layout4-<?php echo $store['store_id']; ?>" data-toggle="tab">SALE, NEW, BESTSELLERS, FEATURED on Home Page</a></li>
            <li><a href="#tab-general-layout5-<?php echo $store['store_id']; ?>" data-toggle="tab">Some language variables</a></li>

            <li><a href="#tab-general-layout6-<?php echo $store['store_id']; ?>" data-toggle="tab">Blog settings</a></li>
            <li><a href="#tab-general-layout7-<?php echo $store['store_id']; ?>" data-toggle="tab">Instagram widget</a></li>
        </ul>

        <div class="tab-content col-sm-8">

            <!--general-->

            <div class="tab-pane active" id="tab-general-layout1-<?php echo $store['store_id']; ?>">
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="layoutid"><font class="custom">LAYOUT</font> </label>
                        <div class="col-sm-9">
                            <select name="customisation_general_store[layoutid][<?php echo $store["store_id"]; ?>]" id="layoutid" class="form-control">
                                <option <?php if (isset($customisation_general_store['layoutid'][$store['store_id']]) && $customisation_general_store['layoutid'][$store['store_id']] == 1) : ?> selected="selected" <?php endif; ?> value="1">Layout 1 (type of header - Type 1, Type of Footer - Type 1)</option>
                                <option <?php if (isset($customisation_general_store['layoutid'][$store['store_id']]) && $customisation_general_store['layoutid'][$store['store_id']] == 2) : ?> selected="selected" <?php endif; ?> value="2">Layout 2 (type of header - Type 2, Type of Footer - Type 2)</option>
                                <option <?php if (isset($customisation_general_store['layoutid'][$store['store_id']]) && $customisation_general_store['layoutid'][$store['store_id']] == 3) : ?> selected="selected" <?php endif; ?> value="3">Layout 3 (type of header - Type 2 - dark menu, Type of Footer - Type 3)</option>
                                <option <?php if (isset($customisation_general_store['layoutid'][$store['store_id']]) && $customisation_general_store['layoutid'][$store['store_id']] == 4) : ?> selected="selected" <?php endif; ?> value="4">Layout 4 (type of header - Type 3, Type of Footer - Type 4)</option>
                                <option <?php if (isset($customisation_general_store['layoutid'][$store['store_id']]) && $customisation_general_store['layoutid'][$store['store_id']] == 5) : ?> selected="selected" <?php endif; ?> value="5">Layout 5 (type of header - Type 3, Type of Footer - Type 5)</option>
                                <option <?php if (isset($customisation_general_store['layoutid'][$store['store_id']]) && $customisation_general_store['layoutid'][$store['store_id']] == 6) : ?> selected="selected" <?php endif; ?> value="6">Layout 6 (type of header - Type 4, Type of Footer - Type 6)</option>
                                <option <?php if (isset($customisation_general_store['layoutid'][$store['store_id']]) && $customisation_general_store['layoutid'][$store['store_id']] == 7) : ?> selected="selected" <?php endif; ?> value="7">Layout 7 (type of header - Type 5, Type of Footer - Type 6)</option>
                                <option <?php if (isset($customisation_general_store['layoutid'][$store['store_id']]) && $customisation_general_store['layoutid'][$store['store_id']] == 8) : ?> selected="selected" <?php endif; ?> value="8">Layout 8 (type of header - Type 6, Type of Footer - Type 7)</option>
                                <option <?php if (isset($customisation_general_store['layoutid'][$store['store_id']]) && $customisation_general_store['layoutid'][$store['store_id']] == 9) : ?> selected="selected" <?php endif; ?> value="9">Layout 9 (type of header - Type 7, Type of Footer - Type 8)</option>
                                <option <?php if (isset($customisation_general_store['layoutid'][$store['store_id']]) && $customisation_general_store['layoutid'][$store['store_id']] == 10) : ?> selected="selected" <?php endif; ?> value="10">Layout 10 (type of header - Type 2, Type of Footer - Type 6)</option>
                                <option <?php if (isset($customisation_general_store['layoutid'][$store['store_id']]) && $customisation_general_store['layoutid'][$store['store_id']] == 11) : ?> selected="selected" <?php endif; ?> value="11">Layout 11 (type of header - Type 4, Type of Footer - Type 1)</option>
                                <option <?php if (isset($customisation_general_store['layoutid'][$store['store_id']]) && $customisation_general_store['layoutid'][$store['store_id']] == 12) : ?> selected="selected" <?php endif; ?> value="12">Layout 12 (type of header - Type 2, Type of Footer - Type 6)</option>

                            </select>
                        </div>
                    </div>





                <div class="form-group">
                    <label class="col-sm-3 control-label">
                        <span class="custom" data-toggle="tooltip" title="Enable/disable Preloader animation">Preloader</span>
                    </label>
                    <div class="col-sm-9">
                        <label class="radio-inline">
                            <?php if (isset($customisation_general_store["preloader"][$store['store_id']]) && $customisation_general_store["preloader"][$store['store_id']]) { ?>
                            <input type="radio" name="customisation_general_store[preloader][<?php echo $store["store_id"]; ?>]" value="1" checked="checked" />
                            <?php echo $text_yes; ?>
                            <?php } else { ?>
                            <input type="radio" name="customisation_general_store[preloader][<?php echo $store["store_id"]; ?>]" value="1" />
                            <?php echo $text_yes; ?>
                            <?php } ?>
                        </label>
                        <label class="radio-inline">
                            <?php if (isset($customisation_general_store["preloader"][$store['store_id']]) && !$customisation_general_store["preloader"][$store['store_id']]) { ?>
                            <input type="radio" name="customisation_general_store[preloader][<?php echo $store["store_id"]; ?>]" value="0" checked="checked" />
                            <?php echo $text_no; ?>
                            <?php } else { ?>
                            <input type="radio" name="customisation_general_store[preloader][<?php echo $store["store_id"]; ?>]" value="0" />
                            <?php echo $text_no; ?>
                            <?php } ?>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Preloader html:</label>
                    <div class="col-sm-9">
                        <textarea name="customisation_general_store[preloader_html][<?php echo $store["store_id"]; ?>]" rows="5" placeholder="Preloader html" id="input-preloader_html" class="form-control summernote"><?php echo (isset($customisation_general_store['preloader_html'][$store['store_id']]) ? $customisation_general_store['preloader_html'][$store['store_id']] : ''); ?></textarea>
                    </div>
                </div>

                <!--map-->
                <div class="form-group">
                    <label class="col-sm-3 control-label">Google Map</label>
                    <div class="col-sm-9">
                        <label class="radio-inline">
                            <?php if (isset($customisation_general_store["map"][$store['store_id']]) && $customisation_general_store["map"][$store['store_id']]) { ?>
                            <input type="radio" name="customisation_general_store[map][<?php echo $store["store_id"]; ?>]" value="1" checked="checked" />
                            <?php echo $text_yes; ?>
                            <?php } else { ?>
                            <input type="radio" name="customisation_general_store[map][<?php echo $store["store_id"]; ?>]" value="1" />
                            <?php echo $text_yes; ?>
                            <?php } ?>
                        </label>
                        <label class="radio-inline">
                            <?php if (isset($customisation_general_store["map"][$store['store_id']]) && !$customisation_general_store["map"][$store['store_id']]) { ?>
                            <input type="radio" name="customisation_general_store[map][<?php echo $store["store_id"]; ?>]" value="0" checked="checked" />
                            <?php echo $text_no; ?>
                            <?php } else { ?>
                            <input type="radio" name="customisation_general_store[map][<?php echo $store["store_id"]; ?>]" value="0" />
                            <?php echo $text_no; ?>
                            <?php } ?>
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Google map in footer html:</label>
                    <div class="col-sm-9">
                        <textarea name="customisation_general_store[map_html][<?php echo $store["store_id"]; ?>]" rows="15" placeholder="google map" id="input-map_html" class="form-control summernote7"><?php echo (isset($customisation_general_store['map_html'][$store['store_id']]) ? $customisation_general_store['map_html'][$store['store_id']] : ''); ?></textarea>
                    </div>
                </div>
                <!--map-->


                <div class="form-group">
                    <label class="col-sm-3 control-label">
                        <span class="custom" data-toggle="tooltip" title="Enable/disable custom.css file. <br>(Originally it is named 'custom_example.css' and located in catalog/view/theme/yourstore/css/custom_example.css)">Using custom.css file</span>
                    </label>
                    <div class="col-sm-9">
                        <label class="radio-inline">
                            <?php if (isset($customisation_general_store["css_file"][$store['store_id']]) && $customisation_general_store["css_file"][$store['store_id']]) { ?>
                            <input type="radio" name="customisation_general_store[css_file][<?php echo $store["store_id"]; ?>]" value="1" checked="checked" />
                            <?php echo $text_yes; ?>
                            <?php } else { ?>
                            <input type="radio" name="customisation_general_store[css_file][<?php echo $store["store_id"]; ?>]" value="1" />
                            <?php echo $text_yes; ?>
                            <?php } ?>
                        </label>
                        <label class="radio-inline">
                            <?php if (isset($customisation_general_store["css_file"][$store['store_id']]) && !$customisation_general_store["css_file"][$store['store_id']]) { ?>
                            <input type="radio" name="customisation_general_store[css_file][<?php echo $store["store_id"]; ?>]" value="0" checked="checked" />
                            <?php echo $text_no; ?>
                            <?php } else { ?>
                            <input type="radio" name="customisation_general_store[css_file][<?php echo $store["store_id"]; ?>]" value="0" />
                            <?php echo $text_no; ?>
                            <?php } ?>
                        </label>
                    </div>
                </div>
            </div>
            <!--general-->

            <!--Header/Footer Blocks-->
            <div id="tab-general-layout2-1-<?php echo $store['store_id']; ?>" class="tab-pane">
            <fieldset>
                <legend>Header Blocks</legend>
                <div class="form-group">
                    <label class="col-sm-4 control-label">
                          <span class="custom" data-toggle="tooltip" title="Set Default welcome message near Logo in Header.">
                               Default welcome message:
                          </span>
                    </label>
                    <div class="col-sm-8">
                        <ul class="nav nav-tabs" id="language-welcome_message<?php echo $store["store_id"]; ?>">
                            <?php foreach ($languages as $language) : ?>
                            <li class="<?php echo ($language['language_id'] == 1 ? 'active' : ''); ?>"><a href="#language-welcome_message<?php echo $language['language_id']; ?>-<?php echo $store["store_id"]; ?>" data-toggle="tab"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>" /> <?php echo $language['name']; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="tab-content">
                            <?php foreach ($languages as $language) : ?>
                            <div class="tab-pane <?php echo ($language['language_id'] == 1 ? 'active' : ''); ?>" id="language-welcome_message<?php echo $language['language_id']; ?>-<?php echo $store["store_id"]; ?>">
                                <input type="text" name="customisation_general_store[<?php echo $language['language_id']; ?>][welcome_message][<?php echo $store["store_id"]; ?>]" value="<?php echo (isset($customisation_general_store[$language['language_id']]['welcome_message'][$store['store_id']]) ? $customisation_general_store[$language['language_id']]['welcome_message'][$store['store_id']] : ''); ?>" placeholder="Default welcome message" class="form-control" />
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">
                        <span class="custom" data-toggle="tooltip" title="Enable/disable Search Block">Search Block</span>
                    </label>
                    <div class="col-sm-8">
                        <label class="radio-inline">
                            <?php if (isset($customisation_general_store["search_block"][$store['store_id']]) && $customisation_general_store["search_block"][$store['store_id']]) { ?>
                            <input type="radio" name="customisation_general_store[search_block][<?php echo $store["store_id"]; ?>]" value="1" checked="checked" />
                            <?php echo $text_yes; ?>
                            <?php } else { ?>
                            <input type="radio" name="customisation_general_store[search_block][<?php echo $store["store_id"]; ?>]" value="1" />
                            <?php echo $text_yes; ?>
                            <?php } ?>
                        </label>
                        <label class="radio-inline">
                            <?php if (isset($customisation_general_store["search_block"][$store['store_id']]) && !$customisation_general_store["search_block"][$store['store_id']]) { ?>
                            <input type="radio" name="customisation_general_store[search_block][<?php echo $store["store_id"]; ?>]" value="0" checked="checked" />
                            <?php echo $text_no; ?>
                            <?php } else { ?>
                            <input type="radio" name="customisation_general_store[search_block][<?php echo $store["store_id"]; ?>]" value="0" />
                            <?php echo $text_no; ?>
                            <?php } ?>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">
                        <span class="custom" data-toggle="tooltip" title="Enable/disable Right Shopping cart button">Shopping cart button</span>
                    </label>
                    <div class="col-sm-8">
                        <label class="radio-inline">
                            <?php if (isset($customisation_general_store["cart_button"][$store['store_id']]) && $customisation_general_store["cart_button"][$store['store_id']]) { ?>
                            <input type="radio" name="customisation_general_store[cart_button][<?php echo $store["store_id"]; ?>]" value="1" checked="checked" />
                            <?php echo $text_yes; ?>
                            <?php } else { ?>
                            <input type="radio" name="customisation_general_store[cart_button][<?php echo $store["store_id"]; ?>]" value="1" />
                            <?php echo $text_yes; ?>
                            <?php } ?>
                        </label>
                        <label class="radio-inline">
                            <?php if (isset($customisation_general_store["cart_button"][$store['store_id']]) && !$customisation_general_store["cart_button"][$store['store_id']]) { ?>
                            <input type="radio" name="customisation_general_store[cart_button][<?php echo $store["store_id"]; ?>]" value="0" checked="checked" />
                            <?php echo $text_no; ?>
                            <?php } else { ?>
                            <input type="radio" name="customisation_general_store[cart_button][<?php echo $store["store_id"]; ?>]" value="0" />
                            <?php echo $text_no; ?>
                            <?php } ?>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">
                        <span class="custom" data-toggle="tooltip" title="Enable/disable Account Block in Header">Account Block</span>
                    </label>
                    <div class="col-sm-8">
                        <label class="radio-inline">
                            <?php if (isset($customisation_general_store["header_service_buttons"][$store['store_id']]) && $customisation_general_store["header_service_buttons"][$store['store_id']]) { ?>
                            <input type="radio" name="customisation_general_store[header_service_buttons][<?php echo $store["store_id"]; ?>]" value="1" checked="checked" />
                            <?php echo $text_yes; ?>
                            <?php } else { ?>
                            <input type="radio" name="customisation_general_store[header_service_buttons][<?php echo $store["store_id"]; ?>]" value="1" />
                            <?php echo $text_yes; ?>
                            <?php } ?>
                        </label>
                        <label class="radio-inline">
                            <?php if (isset($customisation_general_store["header_service_buttons"][$store['store_id']]) && !$customisation_general_store["header_service_buttons"][$store['store_id']]) { ?>
                            <input type="radio" name="customisation_general_store[header_service_buttons][<?php echo $store["store_id"]; ?>]" value="0" checked="checked" />
                            <?php echo $text_no; ?>
                            <?php } else { ?>
                            <input type="radio" name="customisation_general_store[header_service_buttons][<?php echo $store["store_id"]; ?>]" value="0" />
                            <?php echo $text_no; ?>
                            <?php } ?>
                        </label>
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <legend>Type of Header</legend>

                <div id="customisation_general_store_headertype_container<?php echo $store["store_id"]; ?>">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="radio" name="customisation_general_store[headertype][<?php echo $store["store_id"]; ?>]" value="1" id="customisation_general_store_headertype1<?php echo $store["store_id"]; ?>">
                            Type 1 (used in Layout 1)
                        </div>
                        <label class="col-sm-12 control-label" for="customisation_general_store_headertype1[<?php echo $store["store_id"]; ?>]">
                            <div class="type" style="background-image:url(view/options/01.jpg)">&nbsp;</div>
                        </label>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="radio" name="customisation_general_store[headertype][<?php echo $store["store_id"]; ?>]" value="2" id="customisation_general_store_headertype2<?php echo $store["store_id"]; ?>">
                            Type 2 (used in Layout 2, 10, 12)
                        </div>
                        <label class="col-sm-12 control-label" for="customisation_general_store_headertype2[<?php echo $store["store_id"]; ?>]">
                            <div class="type" style="background-image:url(view/options/02.jpg)">&nbsp;</div>
                        </label>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="radio" name="customisation_general_store[headertype][<?php echo $store["store_id"]; ?>]" value="3" id="customisation_general_store_headertype3<?php echo $store["store_id"]; ?>">
                            Type 2 - dark menu (used in Layout 3)
                        </div>
                        <label class="col-sm-12 control-label" for="customisation_general_store_headertype3[<?php echo $store["store_id"]; ?>]">
                            <div class="type" style="background-image:url(view/options/03.jpg);height:120px">&nbsp;</div>
                        </label>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="radio" name="customisation_general_store[headertype][<?php echo $store["store_id"]; ?>]" value="5" id="customisation_general_store_headertype5<?php echo $store["store_id"]; ?>">
                            Type 3 (used in Layout 4, 5)
                        </div>
                        <label class="col-sm-12 control-label" for="customisation_general_store_headertype5[<?php echo $store["store_id"]; ?>]">
                            <div class="type" style="background-image:url(view/options/05.jpg)">&nbsp;</div>
                        </label>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="radio" name="customisation_general_store[headertype][<?php echo $store["store_id"]; ?>]" value="6" id="customisation_general_store_headertype6<?php echo $store["store_id"]; ?>">
                            Type 4 (used in Layout 6, 11)
                        </div>
                        <label class="col-sm-12 control-label" for="customisation_general_store_headertype6[<?php echo $store["store_id"]; ?>]">
                            <div class="type" style="background-image:url(view/options/06.jpg)">&nbsp;</div>
                        </label>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="radio" name="customisation_general_store[headertype][<?php echo $store["store_id"]; ?>]" value="7" id="customisation_general_store_headertype7<?php echo $store["store_id"]; ?>">
                            Type 5 (used in Layout 7)
                        </div>
                        <label class="col-sm-12 control-label" for="customisation_general_store_headertype7[<?php echo $store["store_id"]; ?>]">
                            <div class="type" style="background-image:url(view/options/07.jpg)">&nbsp;</div>
                        </label>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="radio" name="customisation_general_store[headertype][<?php echo $store["store_id"]; ?>]" value="8" id="customisation_general_store_headertype8<?php echo $store["store_id"]; ?>">
                            Type 6 (used in Layout 8)
                        </div>
                        <label class="col-sm-12 control-label" for="customisation_general_store_headertype8[<?php echo $store["store_id"]; ?>]">
                            <div class="type" style="background-image:url(view/options/08.jpg)">&nbsp;</div>
                        </label>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="radio" name="customisation_general_store[headertype][<?php echo $store["store_id"]; ?>]" value="9" id="customisation_general_store_headertype9<?php echo $store["store_id"]; ?>">
                            Type 7 (used in Layout 9)
                        </div>
                        <label class="col-sm-12 control-label" for="customisation_general_store_headertype9[<?php echo $store["store_id"]; ?>]">
                            <div class="type" style="background-image:url(view/options/09.png)">&nbsp;</div>
                        </label>
                    </div>


                </div>

            </fieldset>


                <fieldset>
                    <legend>Top Menu</legend>

                    <div class="form-group">
                        <label class="col-sm-4 control-label" for="input-name-customitem_item_title1<?php echo $language['language_id']; ?><?php echo $store["store_id"]; ?>">
                    <span class="custom" data-toggle="tooltip" title="Set menu item title.">
                        Custom menu item - title:
                    </span>
                        </label>
                        <div class="col-sm-8">
                            <ul class="nav nav-tabs" id="language-customitem_item_title1">
                                <?php foreach ($languages as $language) : ?>
                                <li class="<?php echo ($language['language_id'] == 1 ? 'active' : ''); ?>"><a href="#language-customitem_item_title1<?php echo $language['language_id']; ?>-<?php echo $store["store_id"]; ?>" data-toggle="tab"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>" /> <?php echo $language['name']; ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                            <div class="tab-content">
                                <?php foreach ($languages as $language) : ?>
                                <div class="tab-pane <?php echo ($language['language_id'] == 1 ? 'active' : ''); ?>" id="language-customitem_item_title1<?php echo $language['language_id']; ?>-<?php echo $store["store_id"]; ?>">
                                    <input type="text" name="customisation_general_store[<?php echo $language['language_id']; ?>][customitem_item_title1][<?php echo $store["store_id"]; ?>]" value="<?php echo isset($customisation_general_store[$language['language_id']]['customitem_item_title1'][$store['store_id']]) ? $customisation_general_store[$language['language_id']]['customitem_item_title1'][$store['store_id']] : ''; ?>" placeholder="Custom menu item - title:" id="input-name-customitem_item_title1<?php echo $language['language_id']; ?><?php echo $store["store_id"]; ?>" class="form-control" />
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label" for="customitem_item_url<?php echo $store["store_id"]; ?>">
                     <span class="custom" data-toggle="tooltip" title="Set url for custom menu item (use full url format starting with http:// for outer links).">
                         Custom menu item - url:
                     </span>
                        </label>
                        <div class="col-sm-8">
                            <input type="text" name="customisation_general_store[customitem_item_url1][<?php echo $store["store_id"]; ?>]" value="<?php echo (isset($customisation_general_store['customitem_item_url1'][$store['store_id']]) ? $customisation_general_store['customitem_item_url1'][$store['store_id']] : ''); ?>" placeholder="Custom menu item - url" id="customitem_item_url<?php echo $store["store_id"]; ?>" class="form-control" />
                        </div>
                    </div>
                    <!--blog-->
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Link Blog in top menu - status:</label>
                        <div class="col-sm-8">
                            <label class="radio-inline">
                                <?php if (isset($customisation_general_store["blog_link_status"][$store['store_id']]) && $customisation_general_store["blog_link_status"][$store['store_id']]) { ?>
                                <input type="radio" name="customisation_general_store[blog_link_status][<?php echo $store["store_id"]; ?>]" value="1" checked="checked" />
                                <?php echo $text_yes; ?>
                                <?php } else { ?>
                                <input type="radio" name="customisation_general_store[blog_link_status][<?php echo $store["store_id"]; ?>]" value="1" />
                                <?php echo $text_yes; ?>
                                <?php } ?>
                            </label>
                            <label class="radio-inline">
                                <?php if (isset($customisation_general_store["blog_link_status"][$store['store_id']]) && !$customisation_general_store["blog_link_status"][$store['store_id']]) { ?>
                                <input type="radio" name="customisation_general_store[blog_link_status][<?php echo $store["store_id"]; ?>]" value="0" checked="checked" />
                                <?php echo $text_no; ?>
                                <?php } else { ?>
                                <input type="radio" name="customisation_general_store[blog_link_status][<?php echo $store["store_id"]; ?>]" value="0" />
                                <?php echo $text_no; ?>
                                <?php } ?>
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label" for="blog_link_title<?php echo $language['language_id']; ?><?php echo $store["store_id"]; ?>">
                     <span class="custom" data-toggle="tooltip" title="Set menu item title.">
                          Set Link Blog title.
                     </span>
                        </label>
                        <div class="col-sm-8">
                            <ul class="nav nav-tabs" id="language-blog_link_title">
                                <?php foreach ($languages as $language) : ?>
                                <li class="<?php echo ($language['language_id'] == 1 ? 'active' : ''); ?>"><a href="#language-blog_link_title<?php echo $language['language_id']; ?>-<?php echo $store["store_id"]; ?>" data-toggle="tab"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>" /> <?php echo $language['name']; ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                            <div class="tab-content">
                                <?php foreach ($languages as $language) : ?>
                                <div class="tab-pane <?php echo ($language['language_id'] == 1 ? 'active' : ''); ?>" id="language-blog_link_title<?php echo $language['language_id']; ?>-<?php echo $store["store_id"]; ?>">
                                    <input type="text" name="customisation_general_store[<?php echo $language['language_id']; ?>][blog_link_title][<?php echo $store["store_id"]; ?>]" value="<?php echo isset($customisation_general_store[$language['language_id']]['blog_link_title'][$store['store_id']]) ? $customisation_general_store[$language['language_id']]['blog_link_title'][$store['store_id']] : ''; ?>" placeholder="Set Link Blog title" id="blog_link_title<?php echo $language['language_id']; ?><?php echo $store["store_id"]; ?>" class="form-control" />
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label" for="blog_link_url<?php echo $store["store_id"]; ?>">Link Blog in top menu - url:</label>
                        <div class="col-sm-8">
                            <input type="text" name="customisation_general_store[blog_link_url][<?php echo $store["store_id"]; ?>]" value="<?php echo (isset($customisation_general_store['blog_link_url'][$store['store_id']]) ? $customisation_general_store['blog_link_url'][$store['store_id']] : ''); ?>" placeholder="Link Blog in top menu - url" id="blog_link_url<?php echo $store["store_id"]; ?>" class="form-control" />
                        </div>
                    </div>
                    <!--blog-->
                    <!--link pages-->
                    <div class="form-group">
                        <label class="col-sm-4 control-label" for="pages_link_title<?php echo $language['language_id']; ?><?php echo $store["store_id"]; ?>">
                            Link Pages in top menu - title:
                        </label>
                        <div class="col-sm-8">
                            <ul class="nav nav-tabs" id="language-pages_link_title">
                                <?php foreach ($languages as $language) : ?>
                                <li class="<?php echo ($language['language_id'] == 1 ? 'active' : ''); ?>"><a href="#language-pages_link_title<?php echo $language['language_id']; ?>-<?php echo $store["store_id"]; ?>" data-toggle="tab"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>" /> <?php echo $language['name']; ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                            <div class="tab-content">
                                <?php foreach ($languages as $language) : ?>
                                <div class="tab-pane <?php echo ($language['language_id'] == 1 ? 'active' : ''); ?>" id="language-pages_link_title<?php echo $language['language_id']; ?>-<?php echo $store["store_id"]; ?>">
                                    <input type="text" name="customisation_general_store[<?php echo $language['language_id']; ?>][pages_link_title][<?php echo $store["store_id"]; ?>]" value="<?php echo isset($customisation_general_store[$language['language_id']]['pages_link_title'][$store['store_id']]) ? $customisation_general_store[$language['language_id']]['pages_link_title'][$store['store_id']] : ''; ?>" placeholder="Custom menu item - title:" id="pages_link_title<?php echo $language['language_id']; ?><?php echo $store["store_id"]; ?>" class="form-control" />
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label" for="pages_link_url<?php echo $store["store_id"]; ?>">
                     <span class="custom" data-toggle="tooltip" title="Set url for link pages item, for example, 'index.php?route=information/contact'  (use full url format starting with // for outer links).">
                          Link Pages in top menu - url:
                     </span>
                        </label>
                        <div class="col-sm-8">
                            <input type="text" name="customisation_general_store[pages_link_url][<?php echo $store["store_id"]; ?>]" value="<?php echo (isset($customisation_general_store['pages_link_url'][$store['store_id']]) ? $customisation_general_store['pages_link_url'][$store['store_id']] : ''); ?>" placeholder="Link Pages in top menu - url:" id="pages_link_url<?php echo $store["store_id"]; ?>" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">
                            <span class="custom" data-toggle="tooltip" title="Here you can enable / disable this link in top menu.">Link Pages in top menu :</span>
                        </label>
                        <div class="col-sm-8">
                            <label class="radio-inline">
                                <?php if (isset($customisation_general_store["pages_status"][$store['store_id']]) && $customisation_general_store["pages_status"][$store['store_id']]) { ?>
                                <input type="radio" name="customisation_general_store[pages_status][<?php echo $store["store_id"]; ?>]" value="1" checked="checked" />
                                <?php echo $text_yes; ?>
                                <?php } else { ?>
                                <input type="radio" name="customisation_general_store[pages_status][<?php echo $store["store_id"]; ?>]" value="1" />
                                <?php echo $text_yes; ?>
                                <?php } ?>
                            </label>
                            <label class="radio-inline">
                                <?php if (isset($customisation_general_store["pages_status"][$store['store_id']]) && !$customisation_general_store["pages_status"][$store['store_id']]) { ?>
                                <input type="radio" name="customisation_general_store[pages_status][<?php echo $store["store_id"]; ?>]" value="0" checked="checked" />
                                <?php echo $text_no; ?>
                                <?php } else { ?>
                                <input type="radio" name="customisation_general_store[pages_status][<?php echo $store["store_id"]; ?>]" value="0" />
                                <?php echo $text_no; ?>
                                <?php } ?>
                            </label>
                        </div>
                    </div>
                    <!--pages-->
                    <div>
                        <div class="form-group"><h4>Links in item "PAGES" in Top Menu</h4></div>
                        <?php if (isset($information_pages)) : ?>
                        <?php foreach ($information_pages as $information_page) : ?>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="additional_page_status<?php echo $information_page['information_id']; ?><?php echo $store["store_id"]; ?>">Link: <?php echo $information_page['title']; ?></label>
                                <div class="col-sm-8">
                                    <input type="hidden" name="customisation_general_store[additional_page_id][<?php echo $information_page['information_id']; ?>]" value="<?php echo $information_page['information_id']; ?>">

                                    <select name="customisation_general_store[additional_page_status][<?php echo $information_page['information_id']; ?>][<?php echo $store["store_id"]; ?>]" id="additional_page_status<?php echo $information_page['information_id']; ?><?php echo $store["store_id"]; ?>" class="form-control">
                                        <option <?php if ($customisation_general_store['additional_page_status'][$information_page['information_id']][$store['store_id']] == '1') : ?> selected="selected" <?php endif; ?> value="1">Enable</option>
                                        <option <?php if ($customisation_general_store['additional_page_status'][$information_page['information_id']][$store['store_id']] == '0') : ?> selected="selected" <?php endif; ?> value="0">Disable</option>
                                    </select>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="additional_page_checkout_status<?php echo $store["store_id"]; ?>">Link: Checkout</label>
                            <div class="col-sm-8">
                                <select name="customisation_general_store[additional_page_checkout_status][<?php echo $store["store_id"]; ?>]" id="additional_page_checkout_status<?php echo $store["store_id"]; ?>" class="form-control">
                                    <option <?php if ($customisation_general_store['additional_page_checkout_status'][$store['store_id']] == '1') : ?> selected="selected" <?php endif; ?> value="1">Enable</option>
                                    <option <?php if ($customisation_general_store['additional_page_checkout_status'][$store['store_id']] == '0') : ?> selected="selected" <?php endif; ?> value="0">Disable</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="additional_page_account_status<?php echo $store["store_id"]; ?>">Link: Account</label>
                            <div class="col-sm-8">
                                <select name="customisation_general_store[additional_page_account_status][<?php echo $store["store_id"]; ?>]" id="additional_page_account_status<?php echo $store["store_id"]; ?>" class="form-control">
                                    <option <?php if ($customisation_general_store['additional_page_account_status'][$store['store_id']] == '1') : ?> selected="selected" <?php endif; ?> value="1">Enable</option>
                                    <option <?php if ($customisation_general_store['additional_page_account_status'][$store['store_id']] == '0') : ?> selected="selected" <?php endif; ?> value="0">Disable</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <!--pages-->
                </fieldset>

            </div>

            <div id="tab-general-layout2-2-<?php echo $store['store_id']; ?>" class="tab-pane">

            <fieldset>
                <legend>Type of Footer</legend>

                <div id="customisation_general_store_footertype_container<?php echo $store["store_id"]; ?>">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="radio" name="customisation_general_store[footertype][<?php echo $store["store_id"]; ?>]" value="1" id="customisation_general_store_footertype1<?php echo $store["store_id"]; ?>">
                            Type 1 (used in default Layout 1, 11)
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="radio" name="customisation_general_store[footertype][<?php echo $store["store_id"]; ?>]" value="2" id="customisation_general_store_footertype2<?php echo $store["store_id"]; ?>">
                            Type 2 (used in Layout 2)
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="radio" name="customisation_general_store[footertype][<?php echo $store["store_id"]; ?>]" value="3" id="customisation_general_store_footertype3<?php echo $store["store_id"]; ?>">
                            Type 3 (used in Layout 3)
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="radio" name="customisation_general_store[footertype][<?php echo $store["store_id"]; ?>]" value="4" id="customisation_general_store_footertype4<?php echo $store["store_id"]; ?>">
                            Type 4 (used in Layout 4)
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="radio" name="customisation_general_store[footertype][<?php echo $store["store_id"]; ?>]" value="5" id="customisation_general_store_footertype5<?php echo $store["store_id"]; ?>">
                            Type 5 (used in Layout 5)
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="radio" name="customisation_general_store[footertype][<?php echo $store["store_id"]; ?>]" value="6" id="customisation_general_store_footertype6<?php echo $store["store_id"]; ?>">
                            Type 6 (used in Layout 6, 7, 10, 12)
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="radio" name="customisation_general_store[footertype][<?php echo $store["store_id"]; ?>]" value="7" id="customisation_general_store_footertype7<?php echo $store["store_id"]; ?>">
                            Type 7 (used in Layout 8)
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="radio" name="customisation_general_store[footertype][<?php echo $store["store_id"]; ?>]" value="8" id="customisation_general_store_footertype8<?php echo $store["store_id"]; ?>">
                            Type 8 (used in Layout 9)
                        </div>
                    </div>


                </div>

            </fieldset>





            <fieldset>
                <legend>Footer</legend>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="name-custom_html_title<?php echo $language['language_id']; ?><?php echo $store["store_id"]; ?>">
                        <span class="custom" data-toggle="tooltip" title="Set html block title.">
                            Custom footer block title:
                        </span>
                    </label>
                    <div class="col-sm-8">
                        <ul class="nav nav-tabs" id="language-custom_html_title">
                            <?php foreach ($languages as $language) : ?>
                            <li class="<?php echo ($language['language_id'] == 1 ? 'active' : ''); ?>"><a href="#language-custom_html_title<?php echo $language['language_id']; ?>-<?php echo $store["store_id"]; ?>" data-toggle="tab"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>" /> <?php echo $language['name']; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="tab-content">
                            <?php foreach ($languages as $language) : ?>
                            <div class="tab-pane <?php echo ($language['language_id'] == 1 ? 'active' : ''); ?>" id="language-custom_html_title<?php echo $language['language_id']; ?>-<?php echo $store["store_id"]; ?>">
                                <input type="text" name="customisation_general_store[<?php echo $language['language_id']; ?>][custom_html_title][<?php echo $store["store_id"]; ?>]" value="<?php echo isset($customisation_general_store[$language['language_id']]['custom_html_title'][$store['store_id']]) ? $customisation_general_store[$language['language_id']]['custom_html_title'][$store['store_id']] : ''; ?>" placeholder="Custom footer block title" id="name-custom_html_title<?php echo $language['language_id']; ?><?php echo $store["store_id"]; ?>" class="form-control" />
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="input-description-customblock<?php echo $language['language_id']; ?>-<?php echo $store['store_id']; ?>">
                        <span data-toggle="tooltip" class="custom" title="For some layouts it is recommended to use different html content. You can copy it from our admin demo for FREE.">Custom footer block content:</span>
                    </label>
                    <div class="col-sm-8">
                        <ul class="nav nav-tabs" id="language-customblock">
                            <?php foreach ($languages as $language) : ?>
                            <li class="<?php echo ($language['language_id'] == 1 ? 'active' : ''); ?>"><a href="#language-customblock<?php echo $language['language_id']; ?>-<?php echo $store['store_id']; ?>" data-toggle="tab"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>" /> <?php echo $language['name']; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="tab-content">
                            <?php foreach ($languages as $language) : ?>
                            <div class="tab-pane <?php echo ($language['language_id'] == 1 ? 'active' : ''); ?>" id="language-customblock<?php echo $language['language_id']; ?>-<?php echo $store['store_id']; ?>">
                                <textarea class="summernote" name="customisation_general_store[<?php echo $language['language_id']; ?>][customblock_html][<?php echo $store["store_id"]; ?>]" placeholder="Custom footer block content" id="input-description-customblock<?php echo $language['language_id']; ?>-<?php echo $store['store_id']; ?>"><?php echo isset($customisation_general_store[$language['language_id']]['customblock_html'][$store['store_id']]) ? $customisation_general_store[$language['language_id']]['customblock_html'][$store['store_id']] : ''; ?></textarea>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">
                        <span class="custom" data-toggle="tooltip" title="Here you can enable / disable custom html block in dark footer">
                             Custom footer block visibility:
                        </span>
                    </label>
                    <div class="col-sm-8">
                        <label class="radio-inline">
                            <?php if (isset($customisation_general_store["customblock_status"][$store['store_id']]) && $customisation_general_store["customblock_status"][$store['store_id']]) { ?>
                            <input type="radio" name="customisation_general_store[customblock_status][<?php echo $store["store_id"]; ?>]" value="1" checked="checked" />
                            <?php echo $text_yes; ?>
                            <?php } else { ?>
                            <input type="radio" name="customisation_general_store[customblock_status][<?php echo $store["store_id"]; ?>]" value="1" />
                            <?php echo $text_yes; ?>
                            <?php } ?>
                        </label>
                        <label class="radio-inline">
                            <?php if (isset($customisation_general_store["customblock_status"][$store['store_id']]) && !$customisation_general_store["customblock_status"][$store['store_id']]) { ?>
                            <input type="radio" name="customisation_general_store[customblock_status][<?php echo $store["store_id"]; ?>]" value="0" checked="checked" />
                            <?php echo $text_no; ?>
                            <?php } else { ?>
                            <input type="radio" name="customisation_general_store[customblock_status][<?php echo $store["store_id"]; ?>]" value="0" />
                            <?php echo $text_no; ?>
                            <?php } ?>
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label" for="meta-title<?php echo $store["store_id"]; ?>">
                        <span class="custom" data-toggle="tooltip" title="Here you can enter simple text or html content for footer copyright.">
                            Footer copyright content:
                        </span>
                    </label>
                    <div class="col-sm-8">
                        <input type="text" name="customisation_general_store[footercopyright][<?php echo $store["store_id"]; ?>]" value="<?php echo (isset($customisation_general_store['footercopyright'][$store['store_id']]) ? $customisation_general_store['footercopyright'][$store['store_id']] : ''); ?>" placeholder="Footer copyright content" id="meta-title<?php echo $store["store_id"]; ?>" class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">
                        <span class="custom" data-toggle="tooltip" title="Edit content here or add your own">
                            Footer Social Block:
                        </span>
                    </label>
                    <div class="col-sm-8">
                        <textarea name="customisation_general_store[socials][<?php echo $store["store_id"]; ?>]" rows="5" placeholder="Footer Social Block" id="input-socials" class="form-control summernote"><?php echo (isset($customisation_general_store['socials'][$store['store_id']]) ? $customisation_general_store['socials'][$store['store_id']] : ''); ?></textarea>
                        <label class="radio-inline">
                            <?php if (isset($customisation_general_store["socials_status"][$store['store_id']]) && $customisation_general_store["socials_status"][$store['store_id']]) { ?>
                            <input type="radio" name="customisation_general_store[socials_status][<?php echo $store["store_id"]; ?>]" value="1" checked="checked" />
                            <?php echo $text_yes; ?>
                            <?php } else { ?>
                            <input type="radio" name="customisation_general_store[socials_status][<?php echo $store["store_id"]; ?>]" value="1" />
                            <?php echo $text_yes; ?>
                            <?php } ?>
                        </label>
                        <label class="radio-inline">
                            <?php if (isset($customisation_general_store["socials_status"][$store['store_id']]) && !$customisation_general_store["socials_status"][$store['store_id']]) { ?>
                            <input type="radio" name="customisation_general_store[socials_status][<?php echo $store["store_id"]; ?>]" value="0" checked="checked" />
                            <?php echo $text_no; ?>
                            <?php } else { ?>
                            <input type="radio" name="customisation_general_store[socials_status][<?php echo $store["store_id"]; ?>]" value="0" />
                            <?php echo $text_no; ?>
                            <?php } ?>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">
                        <span class="custom" data-toggle="tooltip" title="Edit content here or add your own">
                            Footer Payment Block:
                        </span>
                    </label>
                    <div class="col-sm-8">
                        <textarea name="customisation_general_store[payments][<?php echo $store["store_id"]; ?>]" rows="5" placeholder="Footer Payment Block" id="input-payments" class="form-control summernote"><?php echo (isset($customisation_general_store['payments'][$store['store_id']]) ? $customisation_general_store['payments'][$store['store_id']] : ''); ?></textarea>
                    </div>
                </div>

            </fieldset>

            <fieldset>
                <legend>NEWSLETTER SIGHUP block</legend>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="apikey<?php echo $store["store_id"]; ?>">
                        API keys:<br>
                        <span class="help custom" data-toggle="tooltip" title="Enter your API keys to your Mailchimp account">
                             <a href="http://kb.mailchimp.com/accounts/management/about-api-keys" target="_blank">Read here</a>
                        </span>
                    </label>
                    <div class="col-sm-8">
                        <input type="text" name="customisation_general_store[apikey][<?php echo $store["store_id"]; ?>]" value="<?php echo (isset($customisation_general_store['apikey'][$store['store_id']]) ? $customisation_general_store['apikey'][$store['store_id']] : ''); ?>" placeholder="API keys:" id="apikey<?php echo $store["store_id"]; ?>" class="form-control" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label" for="list_unique_id<?php echo $store["store_id"]; ?>">
                        List ID:<br>
                        <span class="help custom" data-toggle="tooltip" title="Enter your list ID to your Mailchimp account">
                            <a href="http://kb.mailchimp.com/lists/managing-subscribers/find-your-list-id" target="_blank">Read here</a>
                        </span>
                    </label>
                    <div class="col-sm-8">
                        <input type="text" name="customisation_general_store[list_unique_id][<?php echo $store["store_id"]; ?>]" value="<?php echo (isset($customisation_general_store['list_unique_id'][$store['store_id']]) ? $customisation_general_store['list_unique_id'][$store['store_id']] : ''); ?>" placeholder="List ID:" id="list_unique_id<?php echo $store["store_id"]; ?>" class="form-control" />
                    </div>
                </div>

                <!--newsletter texts-->
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="name-newsletter_title<?php echo $language['language_id']; ?><?php echo $store["store_id"]; ?>">Title for Newsletter block:</label>
                    <div class="col-sm-8">
                        <ul class="nav nav-tabs" id="language-newsletter_title">
                            <?php foreach ($languages as $language) : ?>
                            <li class="<?php echo ($language['language_id'] == 1 ? 'active' : ''); ?>"><a href="#language-newsletter_title<?php echo $language['language_id']; ?>-<?php echo $store["store_id"]; ?>" data-toggle="tab"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>" /> <?php echo $language['name']; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="tab-content">
                            <?php foreach ($languages as $language) : ?>
                            <div class="tab-pane <?php echo ($language['language_id'] == 1 ? 'active' : ''); ?>" id="language-newsletter_title<?php echo $language['language_id']; ?>-<?php echo $store["store_id"]; ?>">
                                <input type="text" name="customisation_general_store[<?php echo $language['language_id']; ?>][newsletter_title][<?php echo $store["store_id"]; ?>]" value="<?php echo isset($customisation_general_store[$language['language_id']]['newsletter_title'][$store['store_id']]) ? $customisation_general_store[$language['language_id']]['newsletter_title'][$store['store_id']] : ''; ?>" placeholder="Newsletter title:" id="name-newsletter_title<?php echo $language['language_id']; ?><?php echo $store["store_id"]; ?>" class="form-control" />
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="name-newsletter_promo<?php echo $language['language_id']; ?><?php echo $store["store_id"]; ?>">Promo text for Popup Newsletter block:</label>
                    <div class="col-sm-8">
                        <ul class="nav nav-tabs" id="language-newsletter_promo">
                            <?php foreach ($languages as $language) : ?>
                            <li class="<?php echo ($language['language_id'] == 1 ? 'active' : ''); ?>"><a href="#language-newsletter_promo<?php echo $language['language_id']; ?>-<?php echo $store["store_id"]; ?>" data-toggle="tab"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>" /> <?php echo $language['name']; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="tab-content">
                            <?php foreach ($languages as $language) : ?>
                            <div class="tab-pane <?php echo ($language['language_id'] == 1 ? 'active' : ''); ?>" id="language-newsletter_promo<?php echo $language['language_id']; ?>-<?php echo $store["store_id"]; ?>">
                                <input type="text" name="customisation_general_store[<?php echo $language['language_id']; ?>][newsletter_promo][<?php echo $store["store_id"]; ?>]" value="<?php echo isset($customisation_general_store[$language['language_id']]['newsletter_promo'][$store['store_id']]) ? $customisation_general_store[$language['language_id']]['newsletter_promo'][$store['store_id']] : ''; ?>" placeholder="Newsletter promo:" id="name-newsletter_promo<?php echo $language['language_id']; ?><?php echo $store["store_id"]; ?>" class="form-control" />
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="name-newsletter_placeholder<?php echo $language['language_id']; ?><?php echo $store["store_id"]; ?>">Placeholder in text field for Popup Newsletter block:</label>
                    <div class="col-sm-8">
                        <ul class="nav nav-tabs" id="language-newsletter_placeholder">
                            <?php foreach ($languages as $language) : ?>
                            <li class="<?php echo ($language['language_id'] == 1 ? 'active' : ''); ?>"><a href="#language-newsletter_placeholder<?php echo $language['language_id']; ?>-<?php echo $store["store_id"]; ?>" data-toggle="tab"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>" /> <?php echo $language['name']; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="tab-content">
                            <?php foreach ($languages as $language) : ?>
                            <div class="tab-pane <?php echo ($language['language_id'] == 1 ? 'active' : ''); ?>" id="language-newsletter_placeholder<?php echo $language['language_id']; ?>-<?php echo $store["store_id"]; ?>">
                                <input type="text" name="customisation_general_store[<?php echo $language['language_id']; ?>][newsletter_placeholder][<?php echo $store["store_id"]; ?>]" value="<?php echo isset($customisation_general_store[$language['language_id']]['newsletter_placeholder'][$store['store_id']]) ? $customisation_general_store[$language['language_id']]['newsletter_placeholder'][$store['store_id']] : ''; ?>" placeholder="Newsletter text field placeholder:" id="name-newsletter_placeholder<?php echo $language['language_id']; ?><?php echo $store["store_id"]; ?>" class="form-control" />
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="name-newsletter_button<?php echo $language['language_id']; ?><?php echo $store["store_id"]; ?>">Button text for Newsletter block:</label>
                    <div class="col-sm-8">
                        <ul class="nav nav-tabs" id="language-newsletter_button">
                            <?php foreach ($languages as $language) : ?>
                            <li class="<?php echo ($language['language_id'] == 1 ? 'active' : ''); ?>"><a href="#language-newsletter_button<?php echo $language['language_id']; ?>-<?php echo $store["store_id"]; ?>" data-toggle="tab"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>" /> <?php echo $language['name']; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="tab-content">
                            <?php foreach ($languages as $language) : ?>
                            <div class="tab-pane <?php echo ($language['language_id'] == 1 ? 'active' : ''); ?>" id="language-newsletter_button<?php echo $language['language_id']; ?>-<?php echo $store["store_id"]; ?>">
                                <input type="text" name="customisation_general_store[<?php echo $language['language_id']; ?>][newsletter_button][<?php echo $store["store_id"]; ?>]" value="<?php echo isset($customisation_general_store[$language['language_id']]['newsletter_button'][$store['store_id']]) ? $customisation_general_store[$language['language_id']]['newsletter_button'][$store['store_id']] : ''; ?>" placeholder="Button text:" id="name-newsletter_button<?php echo $language['language_id']; ?><?php echo $store["store_id"]; ?>" class="form-control" />
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="name-newsletter_close<?php echo $language['language_id']; ?><?php echo $store["store_id"]; ?>">Close text for Popup Newsletter:</label>
                    <div class="col-sm-8">
                        <ul class="nav nav-tabs" id="language-newsletter_close">
                            <?php foreach ($languages as $language) : ?>
                            <li class="<?php echo ($language['language_id'] == 1 ? 'active' : ''); ?>"><a href="#language-newsletter_close<?php echo $language['language_id']; ?>-<?php echo $store["store_id"]; ?>" data-toggle="tab"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>" /> <?php echo $language['name']; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="tab-content">
                            <?php foreach ($languages as $language) : ?>
                            <div class="tab-pane <?php echo ($language['language_id'] == 1 ? 'active' : ''); ?>" id="language-newsletter_close<?php echo $language['language_id']; ?>-<?php echo $store["store_id"]; ?>">
                                <input type="text" name="customisation_general_store[<?php echo $language['language_id']; ?>][newsletter_close][<?php echo $store["store_id"]; ?>]" value="<?php echo isset($customisation_general_store[$language['language_id']]['newsletter_close'][$store['store_id']]) ? $customisation_general_store[$language['language_id']]['newsletter_close'][$store['store_id']] : ''; ?>" placeholder="Close text:" id="name-newsletter_close<?php echo $language['language_id']; ?><?php echo $store["store_id"]; ?>" class="form-control" />
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <!--end newsletter texts-->

                <div class="form-group">
                    <label class="col-sm-4 control-label">
                        <span class="custom" data-toggle="tooltip" title="Here you can enable / disable Newsletter subscribe block in bottom">
                             Newsletter subscribe block visibility:
                        </span>
                    </label>
                    <div class="col-sm-8">
                        <label class="radio-inline">
                            <?php if (isset($customisation_general_store["newsletter_status"][$store['store_id']]) && $customisation_general_store["newsletter_status"][$store['store_id']]) { ?>
                            <input type="radio" name="customisation_general_store[newsletter_status][<?php echo $store["store_id"]; ?>]" value="1" checked="checked" />
                            <?php echo $text_yes; ?>
                            <?php } else { ?>
                            <input type="radio" name="customisation_general_store[newsletter_status][<?php echo $store["store_id"]; ?>]" value="1" />
                            <?php echo $text_yes; ?>
                            <?php } ?>
                        </label>
                        <label class="radio-inline">
                            <?php if (isset($customisation_general_store["newsletter_status"][$store['store_id']]) && !$customisation_general_store["newsletter_status"][$store['store_id']]) { ?>
                            <input type="radio" name="customisation_general_store[newsletter_status][<?php echo $store["store_id"]; ?>]" value="0" checked="checked" />
                            <?php echo $text_no; ?>
                            <?php } else { ?>
                            <input type="radio" name="customisation_general_store[newsletter_status][<?php echo $store["store_id"]; ?>]" value="0" />
                            <?php echo $text_no; ?>
                            <?php } ?>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">
                        <span class="custom" data-toggle="tooltip" title="Here you can enable / disable popup window with Newsletter subscribe block">
                             Popoup Newsletter subscribe block visibility:
                        </span>
                    </label>
                    <div class="col-sm-8">
                        <label class="radio-inline">
                            <?php if (isset($customisation_general_store["newsletter_popup_status"][$store['store_id']]) && $customisation_general_store["newsletter_popup_status"][$store['store_id']]) { ?>
                            <input type="radio" name="customisation_general_store[newsletter_popup_status][<?php echo $store["store_id"]; ?>]" value="1" checked="checked" />
                            <?php echo $text_yes; ?>
                            <?php } else { ?>
                            <input type="radio" name="customisation_general_store[newsletter_popup_status][<?php echo $store["store_id"]; ?>]" value="1" />
                            <?php echo $text_yes; ?>
                            <?php } ?>
                        </label>
                        <label class="radio-inline">
                            <?php if (isset($customisation_general_store["newsletter_popup_status"][$store['store_id']]) && !$customisation_general_store["newsletter_popup_status"][$store['store_id']]) { ?>
                            <input type="radio" name="customisation_general_store[newsletter_popup_status][<?php echo $store["store_id"]; ?>]" value="0" checked="checked" />
                            <?php echo $text_no; ?>
                            <?php } else { ?>
                            <input type="radio" name="customisation_general_store[newsletter_popup_status][<?php echo $store["store_id"]; ?>]" value="0" />
                            <?php echo $text_no; ?>
                            <?php } ?>
                        </label>
                    </div>
                </div>
            </fieldset>

            </div>

            <!--end Header/Footer Blocks-->

            <!--sliders-->
            <div id="tab-general-layout4-<?php echo $store['store_id']; ?>" class="tab-pane">
                <!--sliders-->
                <div class="featured">
                    <div class="form-group">
                        <h2 class="title_h2">Featured Slider</h2>
                        <?php $slider_type = 'featured'; ?>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-5 control-label" for="<?php echo $slider_type; ?>_type<?php echo $store["store_id"]; ?>">
                                Slider type:
                            </label>
                            <div class="col-sm-4">
                                <select name="customisation_slider_store[<?php echo $slider_type; ?>_type][<?php echo $store["store_id"]; ?>]" id="<?php echo $slider_type; ?>_type<?php echo $store["store_id"]; ?>" class="form-control">
                                    <option <?php if (isset($customisation_slider_store[$slider_type.'_type'][$store['store_id']]) && $customisation_slider_store[$slider_type.'_type'][$store['store_id']] == 'horizontal') : ?> selected="selected" <?php endif; ?> value="horizontal">Carousel</option>
                                    <option <?php if (isset($customisation_slider_store[$slider_type.'_type'][$store['store_id']]) && $customisation_slider_store[$slider_type.'_type'][$store['store_id']] == 'slick') : ?> selected="selected" <?php endif; ?> value="slick">List</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-5 control-label" for="<?php echo $slider_type; ?>_carousel<?php echo $store["store_id"]; ?>">
                                Carousel with additional previews:
                            </label>
                            <div class="col-sm-4">
                                <select name="customisation_slider_store[<?php echo $slider_type; ?>_carousel][<?php echo $store["store_id"]; ?>]" id="<?php echo $slider_type; ?>_carousel<?php echo $store["store_id"]; ?>" class="form-control">
                                    <option <?php if (isset($customisation_slider_store[$slider_type.'_carousel'][$store['store_id']]) && $customisation_slider_store[$slider_type.'_carousel'][$store['store_id']] == '1') : ?> selected="selected" <?php endif; ?> value="1">Enable</option>
                                    <option <?php if (isset($customisation_slider_store[$slider_type.'_carousel'][$store['store_id']]) && $customisation_slider_store[$slider_type.'_carousel'][$store['store_id']] == '0') : ?> selected="selected" <?php endif; ?> value="0">Disable</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-5 control-label" for="<?php echo $slider_type; ?>_zoom<?php echo $store["store_id"]; ?>">
                                Zooming of product image(s):
                            </label>
                            <div class="col-sm-4">
                                <select name="customisation_slider_store[<?php echo $slider_type; ?>_zoom][<?php echo $store["store_id"]; ?>]" id="<?php echo $slider_type; ?>_zoom<?php echo $store["store_id"]; ?>" class="form-control">
                                    <option <?php if (isset($customisation_slider_store[$slider_type.'_zoom'][$store['store_id']]) && $customisation_slider_store[$slider_type.'_zoom'][$store['store_id']] == 'z') : ?> selected="selected" <?php endif; ?> value="z">Zooming</option>
                                    <option <?php if (isset($customisation_slider_store[$slider_type.'_zoom'][$store['store_id']]) && $customisation_slider_store[$slider_type.'_zoom'][$store['store_id']] == 'n') : ?> selected="selected" <?php endif; ?> value="n">Normal view</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="latest">
                    <div class="form-group">
                        <h2 class="title_h2">Latest Slider</h2>
                        <?php $slider_type = 'latest'; ?>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-5 control-label" for="<?php echo $slider_type; ?>_type<?php echo $store["store_id"]; ?>">
                                Slider type:
                            </label>
                            <div class="col-sm-4">
                                <select name="customisation_slider_store[<?php echo $slider_type; ?>_type][<?php echo $store["store_id"]; ?>]" id="<?php echo $slider_type; ?>_type<?php echo $store["store_id"]; ?>" class="form-control">
                                    <option <?php if (isset($customisation_slider_store[$slider_type.'_type'][$store['store_id']]) && $customisation_slider_store[$slider_type.'_type'][$store['store_id']] == 'horizontal') : ?> selected="selected" <?php endif; ?> value="horizontal">Carousel</option>
                                    <option <?php if (isset($customisation_slider_store[$slider_type.'_type'][$store['store_id']]) && $customisation_slider_store[$slider_type.'_type'][$store['store_id']] == 'slick') : ?> selected="selected" <?php endif; ?> value="slick">List</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-5 control-label" for="<?php echo $slider_type; ?>_carousel<?php echo $store["store_id"]; ?>">
                                Carousel with additional previews:
                            </label>
                            <div class="col-sm-4">
                                <select name="customisation_slider_store[<?php echo $slider_type; ?>_carousel][<?php echo $store["store_id"]; ?>]" id="<?php echo $slider_type; ?>_carousel<?php echo $store["store_id"]; ?>" class="form-control">
                                    <option <?php if (isset($customisation_slider_store[$slider_type.'_carousel'][$store['store_id']]) && $customisation_slider_store[$slider_type.'_carousel'][$store['store_id']] == '1') : ?> selected="selected" <?php endif; ?> value="1">Enable</option>
                                    <option <?php if (isset($customisation_slider_store[$slider_type.'_carousel'][$store['store_id']]) && $customisation_slider_store[$slider_type.'_carousel'][$store['store_id']] == '0') : ?> selected="selected" <?php endif; ?> value="0">Disable</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-5 control-label" for="<?php echo $slider_type; ?>_zoom<?php echo $store["store_id"]; ?>">
                                Zooming of product image(s):
                            </label>
                            <div class="col-sm-4">
                                <select name="customisation_slider_store[<?php echo $slider_type; ?>_zoom][<?php echo $store["store_id"]; ?>]" id="<?php echo $slider_type; ?>_zoom<?php echo $store["store_id"]; ?>" class="form-control">
                                    <option <?php if (isset($customisation_slider_store[$slider_type.'_zoom'][$store['store_id']]) && $customisation_slider_store[$slider_type.'_zoom'][$store['store_id']] == 'z') : ?> selected="selected" <?php endif; ?> value="z">Zooming</option>
                                    <option <?php if (isset($customisation_slider_store[$slider_type.'_zoom'][$store['store_id']]) && $customisation_slider_store[$slider_type.'_zoom'][$store['store_id']] == 'n') : ?> selected="selected" <?php endif; ?> value="n">Normal view</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bestseller">
                    <div class="form-group">
                        <h2 class="title_h2">Bestseller Slider</h2>
                        <?php $slider_type = 'bestseller'; ?>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-5 control-label" for="<?php echo $slider_type; ?>_type<?php echo $store["store_id"]; ?>">
                                Slider type:
                            </label>
                            <div class="col-sm-4">
                                <select name="customisation_slider_store[<?php echo $slider_type; ?>_type][<?php echo $store["store_id"]; ?>]" id="<?php echo $slider_type; ?>_type<?php echo $store["store_id"]; ?>" class="form-control">
                                    <option <?php if (isset($customisation_slider_store[$slider_type.'_type'][$store['store_id']]) && $customisation_slider_store[$slider_type.'_type'][$store['store_id']] == 'horizontal') : ?> selected="selected" <?php endif; ?> value="horizontal">Carousel</option>
                                    <option <?php if (isset($customisation_slider_store[$slider_type.'_type'][$store['store_id']]) && $customisation_slider_store[$slider_type.'_type'][$store['store_id']] == 'slick') : ?> selected="selected" <?php endif; ?> value="slick">List</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-5 control-label" for="<?php echo $slider_type; ?>_carousel<?php echo $store["store_id"]; ?>">
                                Carousel with additional previews:
                            </label>
                            <div class="col-sm-4">
                                <select name="customisation_slider_store[<?php echo $slider_type; ?>_carousel][<?php echo $store["store_id"]; ?>]" id="<?php echo $slider_type; ?>_carousel<?php echo $store["store_id"]; ?>" class="form-control">
                                    <option <?php if (isset($customisation_slider_store[$slider_type.'_carousel'][$store['store_id']]) && $customisation_slider_store[$slider_type.'_carousel'][$store['store_id']] == '1') : ?> selected="selected" <?php endif; ?> value="1">Enable</option>
                                    <option <?php if (isset($customisation_slider_store[$slider_type.'_carousel'][$store['store_id']]) && $customisation_slider_store[$slider_type.'_carousel'][$store['store_id']] == '0') : ?> selected="selected" <?php endif; ?> value="0">Disable</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-5 control-label" for="<?php echo $slider_type; ?>_zoom<?php echo $store["store_id"]; ?>">
                                Zooming of product image(s):
                            </label>
                            <div class="col-sm-4">
                                <select name="customisation_slider_store[<?php echo $slider_type; ?>_zoom][<?php echo $store["store_id"]; ?>]" id="<?php echo $slider_type; ?>_zoom<?php echo $store["store_id"]; ?>" class="form-control">
                                    <option <?php if (isset($customisation_slider_store[$slider_type.'_zoom'][$store['store_id']]) && $customisation_slider_store[$slider_type.'_zoom'][$store['store_id']] == 'z') : ?> selected="selected" <?php endif; ?> value="z">Zooming</option>
                                    <option <?php if (isset($customisation_slider_store[$slider_type.'_zoom'][$store['store_id']]) && $customisation_slider_store[$slider_type.'_zoom'][$store['store_id']] == 'n') : ?> selected="selected" <?php endif; ?> value="n">Normal view</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="specials">
                    <div class="form-group">
                        <h2 class="title_h2">Special Slider</h2>
                        <?php $slider_type = 'special'; ?>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-5 control-label" for="<?php echo $slider_type; ?>_type<?php echo $store["store_id"]; ?>">
                                Slider type:
                            </label>
                            <div class="col-sm-4">
                                <select name="customisation_slider_store[<?php echo $slider_type; ?>_type][<?php echo $store["store_id"]; ?>]" id="<?php echo $slider_type; ?>_type<?php echo $store["store_id"]; ?>" class="form-control">
                                    <option <?php if (isset($customisation_slider_store[$slider_type.'_type'][$store['store_id']]) && $customisation_slider_store[$slider_type.'_type'][$store['store_id']] == 'horizontal') : ?> selected="selected" <?php endif; ?> value="horizontal">Carousel</option>
                                    <option <?php if (isset($customisation_slider_store[$slider_type.'_type'][$store['store_id']]) && $customisation_slider_store[$slider_type.'_type'][$store['store_id']] == 'slick') : ?> selected="selected" <?php endif; ?> value="slick">List</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-5 control-label" for="<?php echo $slider_type; ?>_carousel<?php echo $store["store_id"]; ?>">
                                Carousel with additional previews:
                            </label>
                            <div class="col-sm-4">
                                <select name="customisation_slider_store[<?php echo $slider_type; ?>_carousel][<?php echo $store["store_id"]; ?>]" id="<?php echo $slider_type; ?>_carousel<?php echo $store["store_id"]; ?>" class="form-control">
                                    <option <?php if (isset($customisation_slider_store[$slider_type.'_carousel'][$store['store_id']]) && $customisation_slider_store[$slider_type.'_carousel'][$store['store_id']] == '1') : ?> selected="selected" <?php endif; ?> value="1">Enable</option>
                                    <option <?php if (isset($customisation_slider_store[$slider_type.'_carousel'][$store['store_id']]) && $customisation_slider_store[$slider_type.'_carousel'][$store['store_id']] == '0') : ?> selected="selected" <?php endif; ?> value="0">Disable</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-5 control-label" for="<?php echo $slider_type; ?>_zoom<?php echo $store["store_id"]; ?>">
                                Zooming of product image(s):
                            </label>
                            <div class="col-sm-4">
                                <select name="customisation_slider_store[<?php echo $slider_type; ?>_zoom][<?php echo $store["store_id"]; ?>]" id="<?php echo $slider_type; ?>_zoom<?php echo $store["store_id"]; ?>" class="form-control">
                                    <option <?php if (isset($customisation_slider_store[$slider_type.'_zoom'][$store['store_id']]) && $customisation_slider_store[$slider_type.'_zoom'][$store['store_id']] == 'z') : ?> selected="selected" <?php endif; ?> value="z">Zooming</option>
                                    <option <?php if (isset($customisation_slider_store[$slider_type.'_zoom'][$store['store_id']]) && $customisation_slider_store[$slider_type.'_zoom'][$store['store_id']] == 'n') : ?> selected="selected" <?php endif; ?> value="n">Normal view</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <!--sliders-->

            </div>
            <!--sliders-->

            <!--Some language variables-->
            <div id="tab-general-layout5-<?php echo $store['store_id']; ?>" class="tab-pane">
                <div class="form-group">
                    <div class="col-sm-12 display_block help">Keep in mind, if you leave some field empty corresponding block will not be displayed.</div>
                </div>
                <ul class="nav nav-tabs" id="translation">
                    <?php foreach ($languages as $language) : ?>
                    <li class="<?php echo ($language['language_id'] == 1 ? 'active' : ''); ?>"><a href="#translation<?php echo $language['language_id']; ?>-<?php echo $store["store_id"]; ?>" data-toggle="tab"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>" /> <?php echo $language['name']; ?></a></li>
                    <?php endforeach; ?>
                </ul>

                <div class="tab-content">
                    <?php foreach ($languages as $language) : ?>
                    <div class="tab-pane <?php echo ($language['language_id'] == 1 ? 'active' : ''); ?>" id="translation<?php echo $language['language_id']; ?>-<?php echo $store["store_id"]; ?>">
                        <div class="form-group">
                            <label class="col-sm-5 control-label" for="dd_title<?php echo $store["store_id"]; ?>">Title of product slider in dropdown part of Top menu:</label>
                            <div class="col-sm-7">
                                <input type="text" name="customisation_translation_store[<?php echo $language['language_id']; ?>][dd_title][<?php echo $store["store_id"]; ?>]" value="<?php echo isset($customisation_translation_store[$language['language_id']]['dd_title'][$store['store_id']]) ? $customisation_translation_store[$language['language_id']]['dd_title'][$store['store_id']] : ''; ?>" placeholder="top menu slider" id="dd_title<?php echo $store["store_id"]; ?>" class="form-control" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-5 control-label" for="text_instock<?php echo $store["store_id"]; ?>">"text instock" status in "quick view" block:</label>
                            <div class="col-sm-7">
                                <input type="text" name="customisation_translation_store[<?php echo $language['language_id']; ?>][text_instock][<?php echo $store["store_id"]; ?>]" value="<?php echo isset($customisation_translation_store[$language['language_id']]['text_instock'][$store['store_id']]) ? $customisation_translation_store[$language['language_id']]['text_instock'][$store['store_id']] : ''; ?>" placeholder="text instock" id="text_instock<?php echo $store["store_id"]; ?>" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-5 control-label" for="menu_close<?php echo $store["store_id"]; ?>">"close" button for all blocks:</label>
                            <div class="col-sm-7">
                                <input type="text" name="customisation_translation_store[<?php echo $language['language_id']; ?>][menu_close][<?php echo $store["store_id"]; ?>]" value="<?php echo isset($customisation_translation_store[$language['language_id']]['menu_close'][$store['store_id']]) ? $customisation_translation_store[$language['language_id']]['menu_close'][$store['store_id']] : ''; ?>" placeholder="'close' button in Top Menu" id="menu_close<?php echo $store["store_id"]; ?>" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-5 control-label" for="menu_title<?php echo $store["store_id"]; ?>">"menu" title in mobile menu:</label>
                            <div class="col-sm-7">
                                <input type="text" name="customisation_translation_store[<?php echo $language['language_id']; ?>][menu_title][<?php echo $store["store_id"]; ?>]" value="<?php echo isset($customisation_translation_store[$language['language_id']]['menu_title'][$store['store_id']]) ? $customisation_translation_store[$language['language_id']]['menu_title'][$store['store_id']] : ''; ?>" placeholder="'menu' title" id="menu_title<?php echo $store["store_id"]; ?>" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-5 control-label" for="menu_back<?php echo $store["store_id"]; ?>">"back" button in Top Menu:</label>
                            <div class="col-sm-7">
                                <input type="text" name="customisation_translation_store[<?php echo $language['language_id']; ?>][menu_back][<?php echo $store["store_id"]; ?>]" value="<?php echo isset($customisation_translation_store[$language['language_id']]['menu_back'][$store['store_id']]) ? $customisation_translation_store[$language['language_id']]['menu_back'][$store['store_id']] : ''; ?>" placeholder="'back' button" id="menu_back<?php echo $store["store_id"]; ?>" class="form-control" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-5 control-label" for="tags_tab_title<?php echo $store["store_id"]; ?>">"tags" tab title on Product page:</label>
                            <div class="col-sm-7">
                                <input type="text" name="customisation_translation_store[<?php echo $language['language_id']; ?>][tags_tab_title][<?php echo $store["store_id"]; ?>]" value="<?php echo isset($customisation_translation_store[$language['language_id']]['tags_tab_title'][$store['store_id']]) ? $customisation_translation_store[$language['language_id']]['tags_tab_title'][$store['store_id']] : ''; ?>" placeholder="'tags' tab" id="tags_tab_title<?php echo $store["store_id"]; ?>" class="form-control" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-5 control-label" for="brands_title<?php echo $store["store_id"]; ?>">"Brands" title in Carousel module:</label>
                            <div class="col-sm-7">
                                <input type="text" name="customisation_translation_store[<?php echo $language['language_id']; ?>][brands_title][<?php echo $store["store_id"]; ?>]" value="<?php echo isset($customisation_translation_store[$language['language_id']]['brands_title'][$store['store_id']]) ? $customisation_translation_store[$language['language_id']]['brands_title'][$store['store_id']] : ''; ?>" placeholder="'Brands' title" id="brands_title<?php echo $store["store_id"]; ?>" class="form-control" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-5 control-label" for="discount_promo<?php echo $store["store_id"]; ?>">
                                <span class="custom" data-toggle="tooltip" title="enter text with two % symbols like - <span class='font35 font-lighter'>%s %% Off.</span> Hurry, there are only %s item(s) left!">
                                    Discount promo text on Product Page:
                                </span>
                                <div style="font-weight:normal;">
                                    for example:<br>
                                    &lt;span class='font35 font-lighter'&gt;%s %% Off.&lt;/span&gt; Hurry, there are only %s item(s) left!
                                </div>
                            </label>
                            <div class="col-sm-7">
                                <input type="text" name="customisation_translation_store[<?php echo $language['language_id']; ?>][discount_promo][<?php echo $store["store_id"]; ?>]" value="<?php echo isset($customisation_translation_store[$language['language_id']]['discount_promo'][$store['store_id']]) ? $customisation_translation_store[$language['language_id']]['discount_promo'][$store['store_id']] : ''; ?>" placeholder="Discount promo" id="discount_promo<?php echo $store["store_id"]; ?>" class="form-control" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-5 control-label" for="video_title<?php echo $store["store_id"]; ?>">"Video" title for Product Page Video:</label>
                            <div class="col-sm-7">
                                <input type="text" name="customisation_translation_store[<?php echo $language['language_id']; ?>][video_title][<?php echo $store["store_id"]; ?>]" value="<?php echo isset($customisation_translation_store[$language['language_id']]['video_title'][$store['store_id']]) ? $customisation_translation_store[$language['language_id']]['video_title'][$store['store_id']] : ''; ?>" placeholder="'Video' title" id="video_title<?php echo $store["store_id"]; ?>" class="form-control" />
                            </div>
                        </div>




                        <fieldset>
                            <legend>Countdown block</legend>
                            <div class="form-group">
                                <label class="col-sm-5 control-label" for="countdown_title_day<?php echo $store["store_id"]; ?>">"Day" title:</label>
                                <div class="col-sm-7">
                                    <input type="text" name="customisation_translation_store[<?php echo $language['language_id']; ?>][countdown_title_day][<?php echo $store["store_id"]; ?>]" value="<?php echo isset($customisation_translation_store[$language['language_id']]['countdown_title_day'][$store['store_id']]) ? $customisation_translation_store[$language['language_id']]['countdown_title_day'][$store['store_id']] : ''; ?>" placeholder="Day" id="countdown_title_day<?php echo $store["store_id"]; ?>" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-5 control-label" for="countdown_title_hour<?php echo $store["store_id"]; ?>">"Hour" title:</label>
                                <div class="col-sm-7">
                                    <input type="text" name="customisation_translation_store[<?php echo $language['language_id']; ?>][countdown_title_hour][<?php echo $store["store_id"]; ?>]" value="<?php echo isset($customisation_translation_store[$language['language_id']]['countdown_title_hour'][$store['store_id']]) ? $customisation_translation_store[$language['language_id']]['countdown_title_hour'][$store['store_id']] : ''; ?>" placeholder="Hour" id="countdown_title_hour<?php echo $store["store_id"]; ?>" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-5 control-label" for="countdown_title_minute<?php echo $store["store_id"]; ?>">"Minute" title:</label>
                                <div class="col-sm-7">
                                    <input type="text" name="customisation_translation_store[<?php echo $language['language_id']; ?>][countdown_title_minute][<?php echo $store["store_id"]; ?>]" value="<?php echo isset($customisation_translation_store[$language['language_id']]['countdown_title_minute'][$store['store_id']]) ? $customisation_translation_store[$language['language_id']]['countdown_title_minute'][$store['store_id']] : ''; ?>" placeholder="Minute" id="countdown_title_minute<?php echo $store["store_id"]; ?>" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-5 control-label" for="countdown_title_second<?php echo $store["store_id"]; ?>">"Second" title:</label>
                                <div class="col-sm-7">
                                    <input type="text" name="customisation_translation_store[<?php echo $language['language_id']; ?>][countdown_title_second][<?php echo $store["store_id"]; ?>]" value="<?php echo isset($customisation_translation_store[$language['language_id']]['countdown_title_second'][$store['store_id']]) ? $customisation_translation_store[$language['language_id']]['countdown_title_second'][$store['store_id']] : ''; ?>" placeholder="Second" id="countdown_title_second<?php echo $store["store_id"]; ?>" class="form-control" />
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <?php endforeach; ?>

                </div>





            </div>
            <!--end Some language variables-->

        <!--Blog settings-->
            <div id="tab-general-layout6-<?php echo $store['store_id']; ?>" class="tab-pane">
                <div class="form-group">
                        <label class="col-sm-6 control-label" for="post_columns<?php echo $store["store_id"]; ?>">
                            <span class="custom" data-toggle="tooltip" title="Side column will be good looking only for 1 column design.">
                                Number of columns on Blog listing posts page:
                            </span>
                        </label>
                        <div class="col-sm-6">
                            <select name="customisation_blog_store[post_columns][<?php echo $store["store_id"]; ?>]" id="post_columns<?php echo $store["store_id"]; ?>" class="form-control">
                                <option <?php if (isset($customisation_blog_store['post_columns'][$store['store_id']]) && $customisation_blog_store['post_columns'][$store['store_id']] == '1') : ?> selected="selected" <?php endif; ?> value="1">1 column design</option>
                                <option <?php if (isset($customisation_blog_store['post_columns'][$store['store_id']]) && $customisation_blog_store['post_columns'][$store['store_id']] == '2') : ?> selected="selected" <?php endif; ?> value="2">2 columns design</option>
                                <option <?php if (isset($customisation_blog_store['post_columns'][$store['store_id']]) && $customisation_blog_store['post_columns'][$store['store_id']] == '3') : ?> selected="selected" <?php endif; ?> value="3">3 columns design</option>
                            </select>
                        </div>
                </div>

            </div>
            <!--//Blog settings-->

            <!--instagram settings-->
            <div id="tab-general-layout7-<?php echo $store['store_id']; ?>" class="tab-pane">
                <div class="form-group">
                    <label class="col-sm-7 control-label" for="insta_code<?php echo $store["store_id"]; ?>">
                            <span class="custom" data-toggle="tooltip" title="Compose your own widget and enter code here. Be careful with jquery code.">
                                Instagram widget:
                            </span>
                        <div style="font-weight:normal;text-align:left">
                            var feed = new Instafeed({<br>
                            get: 'user',<br>
                            userId: '2324131028',<br>
                            clientId: '422b4d6cf31747f7990a723ca097f64e',<br>
                            limit: 20,<br>
                            sortBy: 'most-liked',<br>
                            resolution: "standard_resolution",<br>
                            accessToken: '2324131028.422b4d6.d6d71d31431a4e8fbf6cb1efa1a2dfdc',<br>
                            template: '&lt;a href="{{link}}" target="_blank"&gt;&lt;img src="{{image}}" /&gt;&lt;/a&gt;'<br>
                        </div>
                    </label>
                    <div class="col-sm-5">
                        <textarea name="customisation_general_store[insta_code][<?php echo $store["store_id"]; ?>]" rows="10" placeholder="Instagram script:" id="insta_code<?php echo $store["store_id"]; ?>" class="form-control"><?php echo (isset($customisation_general_store['insta_code'][$store['store_id']]) ? $customisation_general_store['insta_code'][$store['store_id']] : ''); ?></textarea>

                    </div>
                </div>

            </div>
            <!--//instagram settings-->

        </div>
    </div>
    <!-------------------------------------end tab General---------------------------------->

    <!-------------------------------------tab Products sliders, products listings-->
    <div class="tab-pane" id="tab-products<?php echo $store['store_id']; ?>">

        <ul class="nav nav-tabs col-sm-3 main_tabs_vertical">
            <li class="active"><a href="#tab-products-layout1-<?php echo $store['store_id']; ?>" class="selected" data-toggle="tab">Listings</a></li>
            <li><a href="#tab-products-layout2-<?php echo $store['store_id']; ?>" data-toggle="tab">Product labels</a></li>
            <li><a href="#tab-products-layout3-<?php echo $store['store_id']; ?>" data-toggle="tab">Product Page</a></li>
        </ul>
        <div class="tab-content col-sm-8">
            <!--subtabs: Listings -->
            <div class="tab-pane active" id="tab-products-layout1-<?php echo $store['store_id']; ?>">
                <div class="form-group">
                    <label class="col-sm-6 control-label" for="input-product_catalog_mode">
                                                        <span class="custom" data-toggle="tooltip" title="Create your listings into simple catalog.">
                                                             Catalog mode:
                                                        </span>
                    </label>
                    <div class="col-sm-6">
                        <select name="customisation_products_store[product_catalog_mode][<?php echo $store["store_id"]; ?>]" id="input-product_catalog_mode" class="form-control">
                            <option <?php if (isset($customisation_products_store['product_catalog_mode'][$store['store_id']]) && $customisation_products_store['product_catalog_mode'][$store['store_id']] == 0) : ?> selected="selected" <?php endif; ?> value="0">Disable catalog mode</option>
                            <option <?php if (isset($customisation_products_store['product_catalog_mode'][$store['store_id']]) && $customisation_products_store['product_catalog_mode'][$store['store_id']] == 1) : ?> selected="selected" <?php endif; ?> value="1">Enable catalog mode</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-6 control-label" for="input-listing_image_size">
                         <span class="custom" data-toggle="tooltip" title="Choose product image preview size in listing.">
                             Images sizes in listings:
                         </span>
                    </label>
                    <div class="col-sm-6">
                        <select name="customisation_products_store[listing_image_size][<?php echo $store["store_id"]; ?>]" id="input-listing_image_size" class="form-control">
                            <option <?php if (isset($customisation_products_store['listing_image_size'][$store['store_id']]) && $customisation_products_store['listing_image_size'][$store['store_id']] == 'default') : ?> selected="selected" <?php endif; ?> value="default">Default</option>
                            <option <?php if (isset($customisation_products_store['listing_image_size'][$store['store_id']]) && $customisation_products_store['listing_image_size'][$store['store_id']] == 'big') : ?> selected="selected" <?php endif; ?> value="big">Big images</option>
                            <option <?php if (isset($customisation_products_store['listing_image_size'][$store['store_id']]) && $customisation_products_store['listing_image_size'][$store['store_id']] == 'small') : ?> selected="selected" <?php endif; ?> value="small">Small images</option>
                        </select>
                    </div>
                </div>

            </div>

            <!--subtabs: labels -->
            <div id="tab-products-layout2-<?php echo $store['store_id']; ?>" class="tab-pane">


            <div class="form-group">
                <label class="col-sm-4 control-label">
                    <span class="custom" data-toggle="tooltip" title="Set display or not 'Discount' label.">Show "Out of stock" label:</span>
                </label>
                <div class="col-sm-8">
                    <label class="radio-inline">
                        <?php if (isset($customisation_products_store["outstock_status"][$store['store_id']]) && $customisation_products_store["outstock_status"][$store['store_id']]) { ?>
                        <input type="radio" name="customisation_products_store[outstock_status][<?php echo $store["store_id"]; ?>]" value="1" checked="checked" />
                        <?php echo $text_yes; ?>
                        <?php } else { ?>
                        <input type="radio" name="customisation_products_store[outstock_status][<?php echo $store["store_id"]; ?>]" value="1" />
                        <?php echo $text_yes; ?>
                        <?php } ?>
                    </label>
                    <label class="radio-inline">
                        <?php if (isset($customisation_products_store["outstock_status"][$store['store_id']]) && !$customisation_products_store["outstock_status"][$store['store_id']]) { ?>
                        <input type="radio" name="customisation_products_store[outstock_status][<?php echo $store["store_id"]; ?>]" value="0" checked="checked" />
                        <?php echo $text_no; ?>
                        <?php } else { ?>
                        <input type="radio" name="customisation_products_store[outstock_status][<?php echo $store["store_id"]; ?>]" value="0" />
                        <?php echo $text_no; ?>
                        <?php } ?>
                    </label>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-4 control-label">Show "Sale" label:</label>
                <div class="col-sm-8">
                    <label class="radio-inline">
                        <?php if (isset($customisation_products_store["sale_status"][$store['store_id']]) && $customisation_products_store["sale_status"][$store['store_id']]) { ?>
                        <input type="radio" name="customisation_products_store[sale_status][<?php echo $store["store_id"]; ?>]" value="1" checked="checked" />
                        <?php echo $text_yes; ?>
                        <?php } else { ?>
                        <input type="radio" name="customisation_products_store[sale_status][<?php echo $store["store_id"]; ?>]" value="1" />
                        <?php echo $text_yes; ?>
                        <?php } ?>
                    </label>
                    <label class="radio-inline">
                        <?php if (isset($customisation_products_store["sale_status"][$store['store_id']]) && !$customisation_products_store["sale_status"][$store['store_id']]) { ?>
                        <input type="radio" name="customisation_products_store[sale_status][<?php echo $store["store_id"]; ?>]" value="0" checked="checked" />
                        <?php echo $text_no; ?>
                        <?php } else { ?>
                        <input type="radio" name="customisation_products_store[sale_status][<?php echo $store["store_id"]; ?>]" value="0" />
                        <?php echo $text_no; ?>
                        <?php } ?>
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label" for="sale_text1">Title for "Sale" label:</label>
                <div class="col-sm-8">
                    <ul class="nav nav-tabs" id="sale_text">
                        <?php foreach ($languages as $language) : ?>
                        <li class="<?php echo ($language['language_id'] == 1 ? 'active' : ''); ?>"><a href="#sale_text<?php echo $language['language_id']; ?>-<?php echo $store["store_id"]; ?>" data-toggle="tab"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>" /> <?php echo $language['name']; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                    <div class="tab-content">
                        <?php foreach ($languages as $language) : ?>
                        <div class="tab-pane <?php echo ($language['language_id'] == 1 ? 'active' : ''); ?>" id="sale_text<?php echo $language['language_id']; ?>-<?php echo $store["store_id"]; ?>">
                            <input type="text" name="customisation_general_store[<?php echo $language['language_id']; ?>][sale_text][<?php echo $store["store_id"]; ?>]" value="<?php echo isset($customisation_general_store[$language['language_id']]['sale_text'][$store['store_id']]) ? $customisation_general_store[$language['language_id']]['sale_text'][$store['store_id']] : 'SALE'; ?>" placeholder="'Sale' label title:" id="sale_text1" class="form-control" />
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">Show "New" label:</label>
                <div class="col-sm-8">
                    <label class="radio-inline">
                        <?php if (isset($customisation_products_store["new_status"][$store['store_id']]) && $customisation_products_store["new_status"][$store['store_id']]) { ?>
                        <input type="radio" name="customisation_products_store[new_status][<?php echo $store["store_id"]; ?>]" value="1" checked="checked" />
                        <?php echo $text_yes; ?>
                        <?php } else { ?>
                        <input type="radio" name="customisation_products_store[new_status][<?php echo $store["store_id"]; ?>]" value="1" />
                        <?php echo $text_yes; ?>
                        <?php } ?>
                    </label>
                    <label class="radio-inline">
                        <?php if (isset($customisation_products_store["new_status"][$store['store_id']]) && !$customisation_products_store["new_status"][$store['store_id']]) { ?>
                        <input type="radio" name="customisation_products_store[new_status][<?php echo $store["store_id"]; ?>]" value="0" checked="checked" />
                        <?php echo $text_no; ?>
                        <?php } else { ?>
                        <input type="radio" name="customisation_products_store[new_status][<?php echo $store["store_id"]; ?>]" value="0" />
                        <?php echo $text_no; ?>
                        <?php } ?>
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label" for="new_text1">Title for "New" label:</label>
                <div class="col-sm-8">
                    <ul class="nav nav-tabs" id="new_text">
                        <?php foreach ($languages as $language) : ?>
                        <li class="<?php echo ($language['language_id'] == 1 ? 'active' : ''); ?>"><a href="#new_text<?php echo $language['language_id']; ?>-<?php echo $store["store_id"]; ?>" data-toggle="tab"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>" /> <?php echo $language['name']; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                    <div class="tab-content">
                        <?php foreach ($languages as $language) : ?>
                        <div class="tab-pane <?php echo ($language['language_id'] == 1 ? 'active' : ''); ?>" id="new_text<?php echo $language['language_id']; ?>-<?php echo $store["store_id"]; ?>">
                            <input type="text" name="customisation_general_store[<?php echo $language['language_id']; ?>][new_text][<?php echo $store["store_id"]; ?>]" value="<?php echo isset($customisation_general_store[$language['language_id']]['new_text'][$store['store_id']]) ? $customisation_general_store[$language['language_id']]['new_text'][$store['store_id']] : 'NEW'; ?>" placeholder="'new' label title:" id="new_text1" class="form-control" />
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-4 control-label" for="input-days">
                    <span class="custom" data-toggle="tooltip" title="Number of days from the date "Date Available" to today date for a product.">
                    Period of holding "New" label:
                    </span>
                </label>
                <div class="col-sm-8">
                    <input type="text" name="customisation_products_store[days][<?php echo $store["store_id"]; ?>]" value="<?php echo (isset($customisation_products_store['days'][$store['store_id']]) ? $customisation_products_store['days'][$store['store_id']] : ''); ?>" placeholder="Period of holding 'New' label:" id="input-days" class="form-control width_auto" />
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">
                    <span class="custom" data-toggle="tooltip" title="Set display or not 'QUICK VIEW' function on products in sliders.">Show "QUICK VIEW":</span>
                </label>
                <div class="col-sm-8">
                    <label class="radio-inline">
                        <?php if (isset($customisation_products_store["quick_status"][$store['store_id']]) && $customisation_products_store["quick_status"][$store['store_id']]) { ?>
                        <input type="radio" name="customisation_products_store[quick_status][<?php echo $store["store_id"]; ?>]" value="1" checked="checked" />
                        <?php echo $text_yes; ?>
                        <?php } else { ?>
                        <input type="radio" name="customisation_products_store[quick_status][<?php echo $store["store_id"]; ?>]" value="1" />
                        <?php echo $text_yes; ?>
                        <?php } ?>
                    </label>
                    <label class="radio-inline">
                        <?php if (isset($customisation_products_store["quick_status"][$store['store_id']]) && !$customisation_products_store["quick_status"][$store['store_id']]) { ?>
                        <input type="radio" name="customisation_products_store[quick_status][<?php echo $store["store_id"]; ?>]" value="0" checked="checked" />
                        <?php echo $text_no; ?>
                        <?php } else { ?>
                        <input type="radio" name="customisation_products_store[quick_status][<?php echo $store["store_id"]; ?>]" value="0" />
                        <?php echo $text_no; ?>
                        <?php } ?>
                    </label>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-4 control-label" for="quick_view_text1">Title for "Quick view" label:</label>
                <div class="col-sm-8">
                    <ul class="nav nav-tabs" id="quick_view_text">
                        <?php foreach ($languages as $language) : ?>
                        <li class="<?php echo ($language['language_id'] == 1 ? 'active' : ''); ?>"><a href="#quick_view_text<?php echo $language['language_id']; ?>-<?php echo $store["store_id"]; ?>" data-toggle="tab"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>" /> <?php echo $language['name']; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                    <div class="tab-content">
                        <?php foreach ($languages as $language) : ?>
                        <div class="tab-pane <?php echo ($language['language_id'] == 1 ? 'active' : ''); ?>" id="quick_view_text<?php echo $language['language_id']; ?>-<?php echo $store["store_id"]; ?>">
                            <input type="text" name="customisation_general_store[<?php echo $language['language_id']; ?>][quick_view_text][<?php echo $store["store_id"]; ?>]" value="<?php echo isset($customisation_general_store[$language['language_id']]['quick_view_text'][$store['store_id']]) ? $customisation_general_store[$language['language_id']]['quick_view_text'][$store['store_id']] : 'QUICK VIEW'; ?>" placeholder="'Quick view' label title:" id="quick_view_text1" class="form-control" />
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">
                    <span class="custom" data-toggle="tooltip" title="Can be used only for one product!">Show countdown of Special Offer:</span>
                </label>
                <div class="col-sm-8">
                    <label class="radio-inline">
                        <?php if (isset($customisation_products_store["countdown_status"][$store['store_id']]) && $customisation_products_store["countdown_status"][$store['store_id']]) { ?>
                        <input type="radio" name="customisation_products_store[countdown_status][<?php echo $store["store_id"]; ?>]" value="1" checked="checked" />
                        <?php echo $text_yes; ?>
                        <?php } else { ?>
                        <input type="radio" name="customisation_products_store[countdown_status][<?php echo $store["store_id"]; ?>]" value="1" />
                        <?php echo $text_yes; ?>
                        <?php } ?>
                    </label>
                    <label class="radio-inline">
                        <?php if (isset($customisation_products_store["countdown_status"][$store['store_id']]) && !$customisation_products_store["countdown_status"][$store['store_id']]) { ?>
                        <input type="radio" name="customisation_products_store[countdown_status][<?php echo $store["store_id"]; ?>]" value="0" checked="checked" />
                        <?php echo $text_no; ?>
                        <?php } else { ?>
                        <input type="radio" name="customisation_products_store[countdown_status][<?php echo $store["store_id"]; ?>]" value="0" />
                        <?php echo $text_no; ?>
                        <?php } ?>
                    </label>
                </div>
            </div>

            </div>

            <!--subtabs: product page -->
            <div id="tab-products-layout3-<?php echo $store['store_id']; ?>" class="tab-pane">

                <div class="form-group">
                    <label class="col-sm-6 control-label" for="input-related<?php echo $store["store_id"]; ?>">"Related products" module in right column (right column on Product Page):</label>
                    <div class="col-sm-6">
                        <select name="customisation_products_store[related][<?php echo $store["store_id"]; ?>]" id="input-related<?php echo $store["store_id"]; ?>" class="form-control">
                            <option <?php if (isset($customisation_products_store["related"][$store['store_id']]) && $customisation_products_store['related'][$store['store_id']] == 'enable') : ?> selected="selected" <?php endif; ?> value="enable">Enable Related block</option>
                            <option <?php if (isset($customisation_products_store["related"][$store['store_id']]) && $customisation_products_store['related'][$store['store_id']] == 'disable') : ?> selected="selected" <?php endif; ?> value="disable">Disable Related block</option>
                        </select>
                    </div>
                </div>

                <fieldset>
                    <legend>Social buttons on Product Page</legend>
                    <div class="form-group">
                        <label class="col-sm-6 control-label" for="product_page_button<?php echo $store["store_id"]; ?>">
                                                            <span class="custom" data-toggle="tooltip" title="Here you can enter any html of iframe content of buttons">
                                                                Content for buttons:
                                                            </span>
                        </label>
                        <div class="col-sm-6">
                            <textarea name="customisation_products_store[product_page_button][<?php echo $store["store_id"]; ?>]" rows="5" placeholder="Product buttons:" id="product_page_button<?php echo $store["store_id"]; ?>" class="form-control"><?php echo (isset($customisation_products_store['product_page_button'][$store['store_id']]) ? $customisation_products_store['product_page_button'][$store['store_id']] : ''); ?></textarea>
                        </div>
                    </div>

                </fieldset>

            </div>
        </div>

    </div>
    <!------------------------------------end tab Products sliders, products listings-->

</div>

<script type="text/javascript">
    $current_val = $("#layout_skin<?php echo $store["store_id"]; ?> option:selected").val();
    if ($current_val == 'lingerie') {
        $("#lingerie_skin<?php echo $store["store_id"]; ?>").show();
    }
    function getVal<?php echo $store["store_id"]; ?>(sel) {
        if (sel.value == 'lingerie'){
            $("#lingerie_skin<?php echo $store["store_id"]; ?>").show();
        } else {
            $("#lingerie_skin<?php echo $store["store_id"]; ?>").hide();
        }
    }

</script>