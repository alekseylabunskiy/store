<?php  
class ControllerExtensionModuleUpsells extends Controller {
    public function index() {
        $this->load->language('extension/module/upsells');
        $store_id = $this->config->get('config_store_id');

        $data['heading_title'] = $this->language->get('heading_title');
        $data['empty_products'] = $this->language->get('empty_products');
        $data['tab_also_bought_title'] = $this->language->get('tab_also_bought_title');
        $data['text_view'] = $this->language->get('text_view');
        $data['upsells_promo'] = $this->language->get('upsells_promo');

        $data['button_cart'] = $this->language->get('button_cart');
        $data['button_compare'] = $this->language->get('button_compare');
        $data['button_wishlist'] = $this->language->get('button_wishlist');
        $data['text_tax'] = $this->language->get('text_tax');

        $this->load->model('catalog/product_also_bought');
        $this->load->model('tool/image');
        $this->load->model('custom/general');

        $data['text_no_product_also_bought'] = $this->language->get('text_no_product_also_bought');
        $data['products'] = array();
        if (isset($this->request->get['product_id'])) :
        $products_result = $this->model_catalog_product_also_bought->getProductAlsoBought((int)$this->request->get['product_id'], 10);

        $data['image_size'] = $this->model_custom_general->getOptionProductTable((int)$this->request->get['product_id'], 'mainsize');


        if (isset($data['customisation_products']['limit_description_inline'])) {
            $data['limit'] = $data['customisation_products']['limit_description_inline'];
        } else {
            $data['limit'] = 2600;
        }

        foreach ($products_result as $result) {
            if ($result['image'] && is_file(DIR_IMAGE . $result['image'])) {
                $image = $result['image'];
            } else {
                $image = false;
            }


            $product_data = $this->model_catalog_product->getProduct($result['product_id']);

            if ($product_data['special']) {
                $special = $this->currency->format($this->tax->calculate($product_data['special'], $product_data['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
            } else {
                $special = false;
            }

            if ($this->config->get('config_tax')) {
                $tax = $this->currency->format((float)$product_data['special'] ? $product_data['special'] : $product_data['price'], $this->session->data['currency']);
            } else {
                $tax = false;
            }

            $data['store_id'] = $this->config->get('config_store_id');
            $data['customisation_slider'] = $this->config->get('customisation_slider_store');


            $data['products'][] = array(
                'product_id'    => $result['product_id'],
                'href'    	 => $this->url->link('product/product', 'product_id=' . $result['product_id']),
                'name'    		=> $result['name'],
                'description'   => $product_data['description'],
                'rating'  		=> $product_data['rating'],
                'tax'  		=> $tax,

                'price'   	 => $this->currency->format($this->tax->calculate($product_data['price'], $product_data['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']),
                'full_description' => strip_tags(html_entity_decode($product_data['description'], ENT_QUOTES, 'UTF-8')),
                'special' 	 => $special,
                'thumb_small' => $this->model_tool_image->resize($image, $this->config->get($this->config->get('config_theme') . '_image_related_width'), $this->config->get($this->config->get('config_theme') . '_image_related_height')),
                'thumb_small2x' => $this->model_tool_image->resize($image, $this->config->get($this->config->get('config_theme') . '_image_related_width')*2, $this->config->get($this->config->get('config_theme') . '_image_related_height')*2),

                'thumb'   		=> $this->model_tool_image->resize($image, $this->config->get($this->config->get('config_theme') . '_image_product_width'), $this->config->get($this->config->get('config_theme') . '_image_product_height')),
                'thumb2x'   	=> $this->model_tool_image->resize($image, $this->config->get($this->config->get('config_theme') . '_image_product_width')*2, $this->config->get($this->config->get('config_theme') . '_image_product_height')*2),

                'popup'   		=> $this->model_tool_image->resize($image, $this->config->get($this->config->get('config_theme') . '_image_popup_width'), $this->config->get($this->config->get('config_theme') . '_image_popup_height')),

            );

        }
            return $this->load->view('extension/module/upsells', $data);

        endif;
	}
}