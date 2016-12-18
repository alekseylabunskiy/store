<?php
class ControllerCommonFooter extends Controller {
	public function index() {
		$this->load->language('common/footer');

		$data['scripts'] = $this->document->getScripts('footer');

		$data['text_information'] = $this->language->get('text_information');
		$data['text_service'] = $this->language->get('text_service');
		$data['text_extra'] = $this->language->get('text_extra');
		$data['text_contact'] = $this->language->get('text_contact');
		$data['text_return'] = $this->language->get('text_return');
		$data['text_sitemap'] = $this->language->get('text_sitemap');
		$data['text_manufacturer'] = $this->language->get('text_manufacturer');
		$data['text_voucher'] = $this->language->get('text_voucher');
		$data['text_affiliate'] = $this->language->get('text_affiliate');
		$data['text_special'] = $this->language->get('text_special');
		$data['text_account'] = $this->language->get('text_account');
		$data['text_order'] = $this->language->get('text_order');
		$data['text_wishlist'] = $this->language->get('text_wishlist');
		$data['text_newsletter'] = $this->language->get('text_newsletter');

		$this->load->model('catalog/information');

		$data['informations'] = array();

		foreach ($this->model_catalog_information->getInformations() as $result) {
			if ($result['bottom']) {
				$data['informations'][] = array(
					'title' => $result['title'],
					'href'  => $this->url->link('information/information', 'information_id=' . $result['information_id'])
				);
			}
		}

		$data['contact'] = $this->url->link('information/contact');
		$data['return'] = $this->url->link('account/return/add', '', true);
		$data['sitemap'] = $this->url->link('information/sitemap');
		$data['manufacturer'] = $this->url->link('product/manufacturer');
		$data['voucher'] = $this->url->link('account/voucher', '', true);
		$data['affiliate'] = $this->url->link('affiliate/account', '', true);
		$data['special'] = $this->url->link('product/special');
		$data['account'] = $this->url->link('account/account', '', true);
		$data['order'] = $this->url->link('account/order', '', true);
		$data['wishlist'] = $this->url->link('account/wishlist', '', true);
		$data['newsletter'] = $this->url->link('account/newsletter', '', true);

		$data['powered'] = sprintf($this->language->get('text_powered'), $this->config->get('config_name'), date('Y', time()));

		// Whos Online
		if ($this->config->get('config_customer_online')) {
			$this->load->model('tool/online');

			if (isset($this->request->server['REMOTE_ADDR'])) {
				$ip = $this->request->server['REMOTE_ADDR'];
			} else {
				$ip = '';
			}

			if (isset($this->request->server['HTTP_HOST']) && isset($this->request->server['REQUEST_URI'])) {
				$url = 'http://' . $this->request->server['HTTP_HOST'] . $this->request->server['REQUEST_URI'];
			} else {
				$url = '';
			}

			if (isset($this->request->server['HTTP_REFERER'])) {
				$referer = $this->request->server['HTTP_REFERER'];
			} else {
				$referer = '';
			}

			$this->model_tool_online->addOnline($ip, $this->customer->getId(), $url, $referer);
		}


            /***theme's changes***/
            $data['theme'] = $this->config->get('config_theme');
            $data['store_id'] = $this->config->get('config_store_id');
            $data['lang'] = $this->config->get('config_language_id');

            $store_id = $this->config->get('config_store_id');
            $lang = $this->config->get('config_language_id');

            $this->load->model('catalog/information');
            $this->load->model('custom/general');
            $this->load->model('catalog/category');

            $customisation_general = $this->config->get('customisation_general_store');
            $customisation_translation = $this->config->get('customisation_translation_store');

            $data['layout_id'] = $this->model_custom_general->getCurrentLayout();
            $layout_id = $this->model_custom_general->getCurrentLayout();

            /*variables from customisation module*/
            $data['layoutid'] = 1;
            $data['footercopyright'] = '';
            $data['socials'] = '';
            $data['customblock_status'] = 1;
            $data['newsletter_status'] = 1;
            $data['payments'] = '';
            $data['map'] = '';
            $data['top_button'] = '';
            $data['menu_back'] = '';
            $data['customblock_html'] = '';
            $data['custom_html_title'] = '';
            $data['socials_status'] = 1;

            $data['apikey'] = 'test';
            $data['list_unique_id'] = 'test';
            $data['newsletter_status'] = 1;

            $layout_type_footer = 1;
            $data['layout_type_footer'] = 1;

            if (isset($customisation_general["footertype"][$store_id])) {
                $layout_type_footer = $customisation_general["footertype"][$store_id];
                $data['layout_type_footer'] = $customisation_general["footertype"][$store_id];
            }

            if ($layout_id != 1 && $layout_type_footer == 4) {$layout_type_footer = 1;}

            $footer_class = 0;

            switch ($layout_type_footer) {
                case 1:
                    $footer_class = '';
                    break;
                case 2:
                    $footer_class = 0;
                    break;
                case 3:
                    $footer_class = 1;
                    break;
                case 4:
                    $footer_class = 2;
                    break;
                case 5:
                    $footer_class = 3;
                    break;
                case 6:
                    $footer_class = 4;
                    break;
                case 7:
                    $footer_class = 5;
                    break;
                case 8:
                    $footer_class = 6;
                    break;
            }
            $data['footer_class'] = $footer_class;

            if (isset($customisation_general["apikey"][$store_id])) {$data['your_apikey'] = $customisation_general["apikey"][$store_id];} else {$data['your_apikey'] = '';}
            if (isset($customisation_general["list_unique_id"][$store_id])) {$data['my_list_unique_id'] = $customisation_general["list_unique_id"][$store_id];} else {$data['my_list_unique_id'] = '';}
            if (isset($customisation_general[$lang]["newsletter_title"][$store_id])) {$data['newsletter_title'] = $customisation_general[$lang]["newsletter_title"][$store_id];} else {$data['newsletter_title'] = '';}
            if (isset($customisation_general[$lang]["newsletter_placeholder"][$store_id])) {$data['newsletter_placeholder'] = ($layout_type_footer == 5 || $layout_type_footer == 6 || $layout_type_footer == 7 ? $customisation_general[$lang]["newsletter_placeholder"][$store_id] : '');} else {$data['newsletter_placeholder'] = '';}
            if (isset($customisation_general[$lang]["newsletter_button"][$store_id])) {$data['newsletter_button'] = $customisation_general[$lang]["newsletter_button"][$store_id];} else {$data['newsletter_button'] = '';}
            if (isset($customisation_general["layoutid"][$store_id])) {$data['layoutid'] = $customisation_general["layoutid"][$store_id];}
            $data['footercopyright'] = (isset($customisation_general["footercopyright"][$store_id]) && is_string($customisation_general["footercopyright"][$store_id]) ? html_entity_decode($customisation_general["footercopyright"][$store_id], ENT_QUOTES, 'UTF-8') : $data['powered']);
            $data['payments'] = (isset($customisation_general["payments"][$store_id]) && is_string($customisation_general["payments"][$store_id]) ? html_entity_decode($customisation_general["payments"][$store_id], ENT_QUOTES, 'UTF-8') : '');
            $data['map'] = (isset($customisation_general["map"][$store_id]) && is_string($customisation_general["map"][$store_id]) ? html_entity_decode($customisation_general["map"][$store_id], ENT_QUOTES, 'UTF-8') : '');
            $data['socials'] = (isset($customisation_general["socials"][$store_id]) && is_string($customisation_general["socials"][$store_id]) ? html_entity_decode($customisation_general["socials"][$store_id], ENT_QUOTES, 'UTF-8') : '');
            $data['customblock_html'] = isset($customisation_general[$lang]["customblock_html"][$store_id]) ? html_entity_decode($customisation_general[$lang]["customblock_html"][$store_id], ENT_QUOTES, 'UTF-8') : '';
            $data['custom_html_title'] = $customisation_general[$lang]["custom_html_title"][$store_id];
            if (isset($customisation_general["customblock_status"][$store_id])) {$data['customblock_status'] = $customisation_general["customblock_status"][$store_id];}
            if (isset($customisation_general["newsletter_status"][$store_id])) {$data['newsletter_status'] = $customisation_general["newsletter_status"][$store_id];}
            if (isset($customisation_general["top_button"][$store_id])) {$data['top_button'] = $customisation_general["top_button"][$store_id];}
            if (isset($customisation_general["socials_status"][$store_id])) {$data['socials_status'] = $customisation_general["socials_status"][$store_id];}
            $data['menu_back'] = isset($customisation_translation[$lang]["menu_back"][$store_id]) ? $customisation_translation[$lang]["menu_back"][$store_id] : 'back';
            $data['config_address'] = $this->config->get('config_address');
            $data['config_telephone'] = $this->config->get('config_telephone');
            $data['config_open'] = $this->config->get('config_open');
            $data['config_email'] = $this->config->get('config_email');
            $data['config_image'] = $this->config->get('config_image');

            $data['newsletter_block'] = $this->model_custom_general->getNewsletterBlock($data['newsletter_title'],$data['your_apikey'],$data['my_list_unique_id'],$data['newsletter_button'],$data['newsletter_placeholder']);
            /***end theme's changes***/

                    
		return $this->load->view('common/footer', $data);
	}
}
