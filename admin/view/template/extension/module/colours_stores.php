        <ul class="nav nav-tabs col-sm-3 main_tabs_vertical">
            <li class="active"><a href="#tab-colors-layout1-<?php echo $store['store_id']; ?>" class="selected" data-toggle="tab">General</a></li>
            <li><a href="#tab-colors-layout2-<?php echo $store['store_id']; ?>" data-toggle="tab">Labels</a></li>
            <li><a href="#tab-colors-layout3-<?php echo $store['store_id']; ?>" data-toggle="tab">Header</a></li>
            <li><a href="#tab-colors-layout4-<?php echo $store['store_id']; ?>" data-toggle="tab">Footer</a></li>
            <li><a href="#tab-colors-layout5-<?php echo $store['store_id']; ?>" data-toggle="tab">Content</a></li>

        </ul>
        <div class="tab-content col-sm-8">
            <!--subtabs: General -->
            <div class="tab-pane active" id="tab-colors-layout1-<?php echo $store['store_id']; ?>">
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="colours_store_themecolor<?php echo $store["store_id"]; ?>">Theme color:</label>
                    <div class="col-sm-8">
                        <input class="form-control width_auto color1-<?php echo $store["store_id"]; ?>" id="colours_store_themecolor<?php echo $store["store_id"]; ?>" style="background-color:<?php echo $colours_store['themecolor'][$store['store_id']]; ?>;color:white" type="text" name="colours_store[themecolor][<?php echo $store["store_id"]; ?>]" value="<?php echo $colours_store['themecolor'][$store['store_id']]; ?>" placeholder="Theme color:" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="colours_store_btn_bg<?php echo $store["store_id"]; ?>">Buttons Background:</label>
                    <div class="col-sm-8">
                        <input class="form-control width_auto color2-<?php echo $store["store_id"]; ?>" id="colours_store_btn_bg<?php echo $store["store_id"]; ?>" style="background-color:<?php echo $colours_store['btn_bg'][$store['store_id']]; ?>;color:white" type="text" name="colours_store[btn_bg][<?php echo $store["store_id"]; ?>]" value="<?php echo $colours_store['btn_bg'][$store['store_id']]; ?>" placeholder="Bg color:" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="colours_store_btn_color<?php echo $store["store_id"]; ?>">Buttons color:</label>
                    <div class="col-sm-8">
                        <input class="form-control width_auto color3-<?php echo $store["store_id"]; ?>" id="colours_store_btn_color<?php echo $store["store_id"]; ?>" style="background-color:<?php echo $colours_store['btn_color'][$store['store_id']]; ?>;color:white" type="text" name="colours_store[btn_color][<?php echo $store["store_id"]; ?>]" value="<?php echo $colours_store['btn_color'][$store['store_id']]; ?>" placeholder="Color:" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="colours_store_cd_bg<?php echo $store["store_id"]; ?>">Countdown background:</label>
                    <div class="col-sm-8">
                        <input class="form-control width_auto color4-<?php echo $store["store_id"]; ?>" id="colours_store_cd_bg<?php echo $store["store_id"]; ?>" style="background-color:<?php echo $colours_store['cd_bg'][$store['store_id']]; ?>;color:white" type="text" name="colours_store[cd_bg][<?php echo $store["store_id"]; ?>]" value="<?php echo $colours_store['cd_bg'][$store['store_id']]; ?>" placeholder="Countdown bg:" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="colours_store_cd_color<?php echo $store["store_id"]; ?>">Countdown, "sold" label color:</label>
                    <div class="col-sm-8">
                        <input class="form-control width_auto color5-<?php echo $store["store_id"]; ?>" id="colours_store_cd_color<?php echo $store["store_id"]; ?>" style="background-color:<?php echo $colours_store['cd_color'][$store['store_id']]; ?>;color:white" type="text" name="colours_store[cd_color][<?php echo $store["store_id"]; ?>]" value="<?php echo $colours_store['cd_color'][$store['store_id']]; ?>" placeholder="Countdown Color:" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="colours_store_btn_top<?php echo $store["store_id"]; ?>">"Back to top" button background:</label>
                    <div class="col-sm-8">
                        <input class="form-control width_auto color6-<?php echo $store["store_id"]; ?>" id="colours_store_btn_top<?php echo $store["store_id"]; ?>" style="background-color:<?php echo $colours_store['btn_top'][$store['store_id']]; ?>;color:white" type="text" name="colours_store[btn_top][<?php echo $store["store_id"]; ?>]" value="<?php echo $colours_store['btn_top'][$store['store_id']]; ?>" placeholder="'Back to top' button:" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="colours_store_insta_bg<?php echo $store["store_id"]; ?>">Instagramm blocks background:</label>
                    <div class="col-sm-8">
                        <input class="form-control width_auto color7-<?php echo $store["store_id"]; ?>" id="colours_store_insta_bg<?php echo $store["store_id"]; ?>" style="background-color:<?php echo $colours_store['insta_bg'][$store['store_id']]; ?>;color:white" type="text" name="colours_store[insta_bg][<?php echo $store["store_id"]; ?>]" value="<?php echo $colours_store['insta_bg'][$store['store_id']]; ?>" placeholder="Instagram bg:" />
                    </div>
                </div>
            </div>
            <!--subtabs: General -->

            <!--subtabs: Labels  -->
            <div id="tab-colors-layout2-<?php echo $store['store_id']; ?>" class="tab-pane">
                <div class="form-group">
                    <label class="col-sm-5 control-label" for="colours_store_sale_label_bg<?php echo $store["store_id"]; ?>">
                                                        <span class="custom" data-toggle="tooltip" title="Set background color of 'Sale' label.">
                                                            Background of "Sale" label:
                                                        </span>
                    </label>
                    <div class="col-sm-7">
                        <input class="form-control width_auto" id="colours_store_sale_label_bg<?php echo $store["store_id"]; ?>" style="background-color:<?php echo $colours_store['sale_label_bg'][$store['store_id']]; ?>;color:white" type="text" name="colours_store[sale_label_bg][<?php echo $store["store_id"]; ?>]" value="<?php echo (isset($colours_store['sale_label_bg'][$store['store_id']]) ? $colours_store['sale_label_bg'][$store['store_id']] : ''); ?>" placeholder="Color of 'Sale' label:" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-5 control-label" for="colours_store_new_label_bg<?php echo $store["store_id"]; ?>">
                                                        <span class="custom" data-toggle="tooltip" title="Set background color of 'New' label.">
                                                            Background of "New" label:
                                                        </span>
                    </label>
                    <div class="col-sm-7">
                        <input class="form-control width_auto" id="colours_store_new_label_bg<?php echo $store["store_id"]; ?>" style="background-color:<?php echo $colours_store['new_label_bg'][$store['store_id']]; ?>;color:white" type="text" name="colours_store[new_label_bg][<?php echo $store["store_id"]; ?>]" value="<?php echo $colours_store['new_label_bg'][$store['store_id']]; ?>" placeholder="Color of 'New' label:" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-5 control-label" for="colours_store_qv_label_bg<?php echo $store["store_id"]; ?>">
                                                        <span class="custom" data-toggle="tooltip" title="Set background color of 'Quick view' label.">
                                                            Background of "Quick view" label:
                                                        </span>
                    </label>
                    <div class="col-sm-7">
                        <input class="form-control width_auto" id="colours_store_qv_label_bg<?php echo $store["store_id"]; ?>" style="background-color:<?php echo $colours_store['qv_label_bg'][$store['store_id']]; ?>;color:white" type="text" name="colours_store[qv_label_bg][<?php echo $store["store_id"]; ?>]" value="<?php echo $colours_store['qv_label_bg'][$store['store_id']]; ?>" placeholder="Color of 'Quick view' label:" />
                    </div>
                </div>


            </div>
            <!--subtabs: Labels  -->

            <!--subtabs: Header  -->
            <div id="tab-colors-layout3-<?php echo $store['store_id']; ?>" class="tab-pane">
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="colours_store_h_text<?php echo $store["store_id"]; ?>">Header texts:</label>
                    <div class="col-sm-8">
                        <input class="form-control width_auto" id="colours_store_h_text<?php echo $store["store_id"]; ?>" style="background-color:<?php echo $colours_store['h_text'][$store['store_id']]; ?>;color:white" type="text" name="colours_store[h_text][<?php echo $store["store_id"]; ?>]" value="<?php echo $colours_store['h_text'][$store['store_id']]; ?>" placeholder="Texts:" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="colours_store_h_link<?php echo $store["store_id"]; ?>">Header links:</label>
                    <div class="col-sm-8">
                        <input class="form-control width_auto" id="colours_store_h_link<?php echo $store["store_id"]; ?>" style="background-color:<?php echo $colours_store['h_link'][$store['store_id']]; ?>;color:white" type="text" name="colours_store[h_link][<?php echo $store["store_id"]; ?>]" value="<?php echo $colours_store['h_link'][$store['store_id']]; ?>" placeholder="Links:" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="colours_store_h_icon<?php echo $store["store_id"]; ?>">Header icons:</label>
                    <div class="col-sm-8">
                        <input class="form-control width_auto" id="colours_store_h_icon<?php echo $store["store_id"]; ?>" style="background-color:<?php echo $colours_store['h_icon'][$store['store_id']]; ?>;color:white" type="text" name="colours_store[h_icon][<?php echo $store["store_id"]; ?>]" value="<?php echo $colours_store['h_icon'][$store['store_id']]; ?>" placeholder="Icons:" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="colours_store_tm_item<?php echo $store["store_id"]; ?>">Top Menu items color:</label>
                    <div class="col-sm-8">
                        <input class="form-control width_auto" id="colours_store_tm_item<?php echo $store["store_id"]; ?>" style="background-color:<?php echo $colours_store['tm_item'][$store['store_id']]; ?>;color:white" type="text" name="colours_store[tm_item][<?php echo $store["store_id"]; ?>]" value="<?php echo $colours_store['tm_item'][$store['store_id']]; ?>" placeholder="Top Menu items:" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="colours_store_tm_line<?php echo $store["store_id"]; ?>">Top Menu lines color:</label>
                    <div class="col-sm-8">
                        <input class="form-control width_auto" id="colours_store_tm_line<?php echo $store["store_id"]; ?>" style="background-color:<?php echo $colours_store['tm_line'][$store['store_id']]; ?>;color:white" type="text" name="colours_store[tm_line][<?php echo $store["store_id"]; ?>]" value="<?php echo $colours_store['tm_line'][$store['store_id']]; ?>" placeholder="Top Menu lines:" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label" for="colours_store_cart_bg<?php echo $store["store_id"]; ?>">Shopping Cart background:</label>
                    <div class="col-sm-8">
                        <input class="form-control width_auto" id="colours_store_cart_bg<?php echo $store["store_id"]; ?>" style="background-color:<?php echo $colours_store['cart_bg'][$store['store_id']]; ?>;color:white" type="text" name="colours_store[cart_bg][<?php echo $store["store_id"]; ?>]" value="<?php echo $colours_store['cart_bg'][$store['store_id']]; ?>" placeholder="Cart bg:" />
                    </div>
                </div>

            </div>
            <!--subtabs: Header  -->

            <!--subtabs: Footer  -->
            <div id="tab-colors-layout4-<?php echo $store['store_id']; ?>" class="tab-pane">
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="colours_store_f_text<?php echo $store["store_id"]; ?>">Footer texts color:</label>
                    <div class="col-sm-8">
                        <input class="form-control width_auto" id="colours_store_f_text<?php echo $store["store_id"]; ?>" style="background-color:<?php echo $colours_store['f_text'][$store['store_id']]; ?>;color:white" type="text" name="colours_store[f_text][<?php echo $store["store_id"]; ?>]" value="<?php echo $colours_store['f_text'][$store['store_id']]; ?>" placeholder="Texts:" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="colours_store_f_link<?php echo $store["store_id"]; ?>">Footer links color:</label>
                    <div class="col-sm-8">
                        <input class="form-control width_auto" id="colours_store_f_link<?php echo $store["store_id"]; ?>" style="background-color:<?php echo $colours_store['f_link'][$store['store_id']]; ?>;color:white" type="text" name="colours_store[f_link][<?php echo $store["store_id"]; ?>]" value="<?php echo $colours_store['f_link'][$store['store_id']]; ?>" placeholder="Links:" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="colours_store_f_icon<?php echo $store["store_id"]; ?>">Footer icons color:</label>
                    <div class="col-sm-8">
                        <input class="form-control width_auto" id="colours_store_f_icon<?php echo $store["store_id"]; ?>" style="background-color:<?php echo $colours_store['f_icon'][$store['store_id']]; ?>;color:white" type="text" name="colours_store[f_icon][<?php echo $store["store_id"]; ?>]" value="<?php echo $colours_store['f_icon'][$store['store_id']]; ?>" placeholder="Icons:" />
                    </div>
                </div>
            </div>
            <!--subtabs: Footer  -->

            <!--subtabs: Content  -->
            <div id="tab-colors-layout5-<?php echo $store['store_id']; ?>" class="tab-pane">
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="colours_store_t_border<?php echo $store["store_id"]; ?>">Titles Border:</label>
                    <div class="col-sm-8">
                        <input class="form-control width_auto" id="colours_store_t_border<?php echo $store["store_id"]; ?>" style="background-color:<?php echo $colours_store['t_border'][$store['store_id']]; ?>;color:white" type="text" name="colours_store[t_border][<?php echo $store["store_id"]; ?>]" value="<?php echo $colours_store['t_border'][$store['store_id']]; ?>" placeholder="Titles border:" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="colours_store_t_color<?php echo $store["store_id"]; ?>">Titles text color:</label>
                    <div class="col-sm-8">
                        <input class="form-control width_auto" id="colours_store_t_color<?php echo $store["store_id"]; ?>" style="background-color:<?php echo $colours_store['t_color'][$store['store_id']]; ?>;color:white" type="text" name="colours_store[t_color][<?php echo $store["store_id"]; ?>]" value="<?php echo $colours_store['t_color'][$store['store_id']]; ?>" placeholder="Title color:" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="colours_store_price_cur<?php echo $store["store_id"]; ?>">Price current color:</label>
                    <div class="col-sm-8">
                        <input class="form-control width_auto" id="colours_store_price_cur<?php echo $store["store_id"]; ?>" style="background-color:<?php echo $colours_store['price_cur'][$store['store_id']]; ?>;color:white" type="text" name="colours_store[price_cur][<?php echo $store["store_id"]; ?>]" value="<?php echo $colours_store['price_cur'][$store['store_id']]; ?>" placeholder="Current Price:" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="colours_store_price_old<?php echo $store["store_id"]; ?>">Price old color:</label>
                    <div class="col-sm-8">
                        <input class="form-control width_auto" id="colours_store_price_old<?php echo $store["store_id"]; ?>" style="background-color:<?php echo $colours_store['price_old'][$store['store_id']]; ?>;color:white" type="text" name="colours_store[price_old][<?php echo $store["store_id"]; ?>]" value="<?php echo $colours_store['price_old'][$store['store_id']]; ?>" placeholder="Old price:" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="colours_store_bc_icon<?php echo $store["store_id"]; ?>">Breadcrumb text color:</label>
                    <div class="col-sm-8">
                        <input class="form-control width_auto" id="colours_store_bc_icon<?php echo $store["store_id"]; ?>" style="background-color:<?php echo $colours_store['bc_icon'][$store['store_id']]; ?>;color:white" type="text" name="colours_store[bc_icon][<?php echo $store["store_id"]; ?>]" value="<?php echo $colours_store['bc_icon'][$store['store_id']]; ?>" placeholder="Icon:" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="colours_store_bc_color<?php echo $store["store_id"]; ?>">Breadcrumb icon color:</label>
                    <div class="col-sm-8">
                        <input class="form-control width_auto" id="colours_store_bc_color<?php echo $store["store_id"]; ?>" style="background-color:<?php echo $colours_store['bc_color'][$store['store_id']]; ?>;color:white" type="text" name="colours_store[bc_color][<?php echo $store["store_id"]; ?>]" value="<?php echo $colours_store['bc_color'][$store['store_id']]; ?>" placeholder="Text:" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="colours_store_c_text<?php echo $store["store_id"]; ?>">Content texts:</label>
                    <div class="col-sm-8">
                        <input class="form-control width_auto" id="colours_store_c_text<?php echo $store["store_id"]; ?>" style="background-color:<?php echo $colours_store['c_text'][$store['store_id']]; ?>;color:white" type="text" name="colours_store[c_text][<?php echo $store["store_id"]; ?>]" value="<?php echo $colours_store['c_text'][$store['store_id']]; ?>" placeholder="Texts:" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="colours_store_c_link<?php echo $store["store_id"]; ?>">Content links:</label>
                    <div class="col-sm-8">
                        <input class="form-control width_auto" id="colours_store_c_link<?php echo $store["store_id"]; ?>" style="background-color:<?php echo $colours_store['c_link'][$store['store_id']]; ?>;color:white" type="text" name="colours_store[c_link][<?php echo $store["store_id"]; ?>]" value="<?php echo $colours_store['c_link'][$store['store_id']]; ?>" placeholder="Links:" />
                    </div>
                </div>
            </div>
            <!--subtabs: Content  -->

        </div>
