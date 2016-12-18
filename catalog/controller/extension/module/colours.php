<?php
class ControllerExtensionModuleColours extends Controller {

    public function index() {
        //$this->document->addStyle('catalog/view/theme/'. $this->config->get('config_theme') .'/css/colours.php');
        //$data['heading_title'] = $this->language->get('heading_title');

        $store_id = $this->config->get('config_store_id');
        $colours_store = $this->config->get('colours_store');

        $data['themecolor'] = (isset($colours_store['themecolor'][$store_id]) && $colours_store['themecolor'][$store_id] != '' ? $colours_store['themecolor'][$store_id] : false);
        $data['btn_color'] = (isset($colours_store['btn_color'][$store_id]) && $colours_store['btn_color'][$store_id] != '' ? $colours_store['btn_color'][$store_id] : false);
        $data['btn_bg'] = (isset($colours_store['btn_bg'][$store_id]) && $colours_store['btn_bg'][$store_id] != '' ? $colours_store['btn_bg'][$store_id] : false);
        $data['sale_label_bg'] = (isset($colours_store['sale_label_bg'][$store_id]) && $colours_store['sale_label_bg'][$store_id] != '' ? $colours_store['sale_label_bg'][$store_id] : false);
        $data['new_label_bg'] = (isset($colours_store['new_label_bg'][$store_id]) && $colours_store['new_label_bg'][$store_id] != '' ? $colours_store['new_label_bg'][$store_id] : false);
        $data['qv_label_bg'] = (isset($colours_store['qv_label_bg'][$store_id]) && $colours_store['qv_label_bg'][$store_id] != '' ? $colours_store['qv_label_bg'][$store_id] : false);
        $data['cd_bg'] = (isset($colours_store['cd_bg'][$store_id]) && $colours_store['cd_bg'][$store_id] != '' ? $colours_store['cd_bg'][$store_id] : false);
        $data['cd_color'] = (isset($colours_store['cd_color'][$store_id]) && $colours_store['cd_color'][$store_id] != '' ? $colours_store['cd_color'][$store_id] : false);
        $data['btn_top'] = (isset($colours_store['btn_top'][$store_id]) && $colours_store['btn_top'][$store_id] != '' ? $colours_store['btn_top'][$store_id] : false);
        $data['insta_bg'] = (isset($colours_store['insta_bg'][$store_id]) && $colours_store['insta_bg'][$store_id] != '' ? $colours_store['insta_bg'][$store_id] : false);


        $data['h_text'] = (isset($colours_store['h_text'][$store_id]) && $colours_store['h_text'][$store_id] != '' ? $colours_store['h_text'][$store_id] : false);
        $data['h_link'] = (isset($colours_store['h_link'][$store_id]) && $colours_store['h_link'][$store_id] != '' ? $colours_store['h_link'][$store_id] : false);
        $data['h_icon'] = (isset($colours_store['h_icon'][$store_id]) && $colours_store['h_icon'][$store_id] != '' ? $colours_store['h_icon'][$store_id] : false);
        $data['tm_item'] = (isset($colours_store['tm_item'][$store_id]) && $colours_store['tm_item'][$store_id] != '' ? $colours_store['tm_item'][$store_id] : false);
        $data['tm_line'] = (isset($colours_store['tm_line'][$store_id]) && $colours_store['tm_line'][$store_id] != '' ? $colours_store['tm_line'][$store_id] : false);
        $data['f_text'] = (isset($colours_store['f_text'][$store_id]) && $colours_store['f_text'][$store_id] != '' ? $colours_store['f_text'][$store_id] : false);
        $data['f_link'] = (isset($colours_store['f_link'][$store_id]) && $colours_store['f_link'][$store_id] != '' ? $colours_store['f_link'][$store_id] : false);
        $data['f_icon'] = (isset($colours_store['f_icon'][$store_id]) && $colours_store['f_icon'][$store_id] != '' ? $colours_store['f_icon'][$store_id] : false);
        $data['t_border'] = (isset($colours_store['t_border'][$store_id]) && $colours_store['t_border'][$store_id] != '' ? $colours_store['t_border'][$store_id] : false);
        $data['t_color'] = (isset($colours_store['t_color'][$store_id]) && $colours_store['t_color'][$store_id] != '' ? $colours_store['t_color'][$store_id] : false);
        $data['price_cur'] = (isset($colours_store['price_cur'][$store_id]) && $colours_store['price_cur'][$store_id] != '' ? $colours_store['price_cur'][$store_id] : false);
        $data['price_old'] = (isset($colours_store['price_old'][$store_id]) && $colours_store['price_old'][$store_id] != '' ? $colours_store['price_old'][$store_id] : false);
        $data['bc_icon'] = (isset($colours_store['bc_icon'][$store_id]) && $colours_store['bc_icon'][$store_id] != '' ? $colours_store['bc_icon'][$store_id] : false);
        $data['bc_color'] = (isset($colours_store['bc_color'][$store_id]) && $colours_store['bc_color'][$store_id] != '' ? $colours_store['bc_color'][$store_id] : false);
        $data['c_text'] = (isset($colours_store['c_text'][$store_id]) && $colours_store['c_text'][$store_id] != '' ? $colours_store['c_text'][$store_id] : false);
        $data['c_link'] = (isset($colours_store['c_link'][$store_id]) && $colours_store['c_link'][$store_id] != '' ? $colours_store['c_link'][$store_id] : false);
        $data['cart_bg'] = (isset($colours_store['cart_bg'][$store_id]) && $colours_store['cart_bg'][$store_id] != '' ? $colours_store['cart_bg'][$store_id] : false);
        return $this->load->view('extension/module/colours', $data);
	}


}